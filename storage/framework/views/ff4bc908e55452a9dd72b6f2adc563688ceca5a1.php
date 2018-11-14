 <?php $__env->startSection('content'); ?>

<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style>
	.modal {
		width: 670px;
	}
	
	.modal-header {
		padding: 2px 19px;
		border-bottom: 1px solid #eee;
		background: #9569df;
		color: #fff;
	}
	
	.modal-footer {
		padding: 5px 13px 12px;
	}

</style>

<style type="text/css">
	.bs-example {
		margin: 20px;
	}

</style>
 <?php 
// foreach($data['company'] as $row)
// {
// 	if($row['complete']!=null){
//         echo "<pre>";print_r($row['complete']);
//     }
	
// }die;
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" id="content" >
			<div>
				<div class="row-fluid">


					<div class="block-content collapse in">


						<div class="row-fluid">
							<!-- block -->
							<div class="block">
								<div class="navbar navbar-inner block-header">
									<?php $title = "IT INDIVIDUAL";
                                if($data['type'] == 61)
                                    $title = "IT CONCERN";
								if($data['type'] == 71)
                                    $title = "TDS INDIVIDUAL";
								if($data['type'] == 72)
                                    $title = "TDS CONCERN";
									
                                    ?>
									<center>
										<div class="muted pull-left">REPORT</div>
										<div class="muted pull-center"><b><?= $title ?></b></div>
									</center>
								</div>
								<input type="hidden" name="hdnTax" id="hdnTax" value="<?= $data['type'] ?>">
								<div class="block-content collapse in">

									<input type="hidden" name="page" id="page">
									<div class="span12">

										<div class="span3">
											<label class="control-label" for="company_name">Financial Year</label>
											<div class="control-group">
												<div class="controls">
													<select id="drpYear" onchange="changeValue()">
                                                        
                                                        <option value="<?php echo date('Y')-2; ?>">
                                                            <?php echo date('Y')-2;echo "-";echo date('Y')-1; ?> 
                                                        </option>
                                                        <option value="<?php echo date('Y')-1; ?>" selected> 
                                                                <?php echo date('Y')-1;echo "-";echo date('Y'); ?> 
                                                        </option>
                                                        <option value="<?php echo date('Y'); ?>" > 
                                                            <?php echo date('Y');echo "-";echo date('Y')+1; ?>
                                                        </option>
                                                    
                                                </select>
												</div>
											</div>

										</div>
										<label class="control-label" for="company_name">Status </label>
										<div class="control-group">
											<div class="controls">
												<select id="drpStatus" onchange="changeValue()">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
											</div>
										</div>
									</div>
									<div class="span12" style="margin-left:0px;">
										<table class="table table-bordered grand_report_table" id="tblCompany">
											<thead>

												<tr>
													<td rowspan="3">
														<b>Month</b>
													</td>

													<th colspan="8" style="text-align:center">
														<?php if($data['tax'] == 71): ?> TDS INDIVIDUAL <?php else: ?> TDS CONCERN <?php endif; ?> - Customer
													</th>
													<!--
                                                    <th colspan="3" style="text-align:center">
                                                        Company Compounding
                                                    </th>                                                    
-->
												</tr>


												<tr>
													<th rowspan="2">Total Customer</th>
													<th rowspan="2">T/C</th>
													<th rowspan="2">T/P</th>
													<th rowspan="2">R/F</th>
													<th colspan="2">Fees Collection</th>
													<!--
													<th>Total</th>
													<th>Completed</th>
													<th>Partial</th>													
-->
												</tr>
												<tr>
													<th style="text-align:center">Fee</th>
													<th style="text-align:center">Collected</th>
												</tr>


											</thead>

											<tbody>
												
												<?php $__currentLoopData = $data['company']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($row['complete']!=null){?>
												<tr>
													<td>
														<a onclick="btnComplete(<?= $row['month'] +1  ?>)"><b><?= $row['monthName'] ?></b></a>
														
													</td>
													<td>
														<?= $row['total'] ?>
													</td>
													<td>
														<?= $row['complete'][0]->tc ?>
													</td>
													<td>
														<?= $row['complete'][0]->tp ?>
													</td>
													<td>
														<?= $row['complete'][0]->rf ?>
													</td>
													<td>
														<?= $row['complete'][0]->cf ?>
													</td>
													<td>
														<?= $row['complete'][0]->fc ?>
													</td>

												</tr>
												 <?php }?>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												
											</tbody>
										</table>


									</div>
								</div>
							</div>
							<!-- /block -->
						</div>
						<input type="hidden" name="hdntax" id="hdntax" value="<?= $data['tax'] ?>">
					</div>

				</div>
			</div>
			<hr>
		</div>
	</div>
</div>

<script>
	function btnComplete(month) {
		//alert(month);
		$.ajax({
			url: "completeTDSReport",
			data: {
				mon: month,
				hdntax: $('#hdntax').val(),
				year: $('#drpYear').val(),
				status: $('#drpStatus').val(),
			},
			success: function(data) {
				//alert(data);
				window.location.href = "completeTDSReport1";
			}
		});
	}

	function showAjaxModal(title, url, tag) {
		//alert("gf");
		//var title = 'BR List';
		// SHOWING AJAX PRELOADER IMAGE

		//var id = $(this).attr('id');
		var id = id;
		//            alert(id);
		jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;"></div>');

		// LOADING THE AJAX MODAL
		jQuery('#modal_ajax').modal('show', {
			backdrop: 'true'
		});

		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			data: {
				tag_id: tag,
				hdnTax: $('#hdnTax').val()
			},
			success: function(response) {

				jQuery('#modal_ajax .modal-title').html(title);
				jQuery('#modal_ajax .modal-body').html(response);
				//$('.modal-dialog').css('width', '1200px');console.log(response);
			}
		});
	}

	function showAjaxModal1(title, url, tag, id) {
		//alert("gf");
		//var title = 'BR List';
		// SHOWING AJAX PRELOADER IMAGE

		//var id = $(this).attr('id');
		var id = id;
		//            alert(id);
		jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;"></div>');

		// LOADING THE AJAX MODAL
		jQuery('#modal_ajax').modal('show', {
			backdrop: 'true'
		});

		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			data: {
				tag_id: tag,
				hdnTax: $('#hdnTax').val(),
				empID: id,
			},
			success: function(response) {

				jQuery('#modal_ajax .modal-title').html(title);
				jQuery('#modal_ajax .modal-body').html(response);
				//$('.modal-dialog').css('width', '1200px');console.log(response);
			}
		});
	}


	function changeValue() {
		var ele = $('#drpYear').val();
		var status = $('#drpStatus').val();
		$.ajax({
			url: "changeValueTDS",
			type: 'get',
			data: {
				year: ele,
				hdntax: $('#hdntax').val(),
				status: $('#drpStatus').val(),
			},
			success: function(data) {
				$("#tblCompany tbody").empty();

				$.each(data['company'], function(i, key) {
					var tc1=0;
					var tp1=0;
					var rf1=0;
					var fc1=0;
					var cf1=0;
					if(key.complete!=null){
						if(key.complete[0]['tc']!=null){
							tc1=key.complete[0]['tc'];
						}
						if(key.complete[0]['tp']!=null){
							tp1=key.complete[0]['tp'];
						}
						if(key.complete[0]['rf']!=null){
							rf1=key.complete[0]['rf'];
						}
						if(key.complete[0]['fc']!=null){
							fc1=key.complete[0]['fc'];
						}
						if(key.complete[0]['cf']!=null){
							cf1=key.complete[0]['cf'];
						}

					var Month = '<td><a onclick="btnComplete(' + (key.month + 1) + ')"><b>' + key.monthName + '</b></a></td>';
					var totalCompany = '<td>' + key.total + '</td>';
					var tc = '<td>' + tc1 + '</td>';
					var tp = '<td>' + tp1 + '</td>';
					var rf = '<td>' + rf1 + '</td>';
					var fc = '<td>' + fc1 + '</td>';
					var cf = '<td>' + cf1 + '</td>';
					$("#tblCompany").append('<tbody><tr>' + Month + '' + totalCompany + '' + tc + '' + tp + '' + rf + '' + cf + '' + fc + ' < /tr></tbody> ');
					
					}
					

				});
				
			}
		});
	}

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>