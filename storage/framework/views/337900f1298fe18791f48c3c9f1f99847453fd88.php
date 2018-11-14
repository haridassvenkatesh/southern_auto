 <?php $__env->startSection('content'); ?>

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
//foreach($data['company'] as $row)
//{
//    
//    //echo "<pre>";print_r($row['total']);
//}die;
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" id="content" ng-app="company_view_app" ng-controller="company_view_controller">
			<div data-ng-init="onloadFun()">
				<div class="row-fluid">


					<div class="block-content collapse in">


						<div class="row-fluid">
							<!-- block -->
							<div class="block">
								<div class="navbar navbar-inner block-header">
									<?php $title = "GST REGULAR";
                               if($data['tax'] == 8)
                                    $title = "GST COMPOUNDING";
                                    ?>
									<center>
										<div class="muted pull-left">REPORT</div>
										<div class="muted pull-center"><b><?= $title ?></b></div>
									</center>
								</div>
								<input type="hidden" name="hdnTax" id="hdnTax" value="<?= $data['tax'] ?>">
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
                                                        <option value="<?php echo date('Y')-1; ?>" > 
                                                                <?php echo date('Y')-1;echo "-";echo date('Y'); ?> 
                                                        </option>
                                                        <option value="<?php echo date('Y'); ?>" selected> 
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
														<?php if($data['tax'] == 7): ?> Company Regular <?php else: ?> Company Compounding <?php endif; ?>
													</th>
													<!--
                                                    <th colspan="3" style="text-align:center">
                                                        Company Compounding
                                                    </th>                                                    
-->
												</tr>


												<tr>
													<th rowspan="2">Total Company</th>
													<th rowspan="2">Bill Received</th>
													<th rowspan="2">Tally Accounted</th>
													<?php if($data['tax'] == 7): ?>
													<th rowspan="2">GSTR 3B</th>
													<th rowspan="2">GSTR 1</th>

													<?php endif; ?>
													<th rowspan="2">Bank A/C</th>
													<th rowspan="2">EXP A/C</th>
													<?php if($data['tax'] == 8): ?>
													<th rowspan="2">GSTR 4</th>
													<?php endif; ?>
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

												<tr>
													<td>
														<a onclick="btnComplete(<?= $row['month'] +1  ?>)"><b><?= $row['monthName'] ?></b></a>
														<!--<b><?= $row['monthName'] ?></b>-->
													</td>
													<td>
														<?= $row['total'] ?>
													</td>
													<td>
														<?= $row['complete'][0]->Br ?>
													</td>
													<td>
														<?= $row['complete'][0]->ta ?>
													</td>
													<?php if($data['tax'] == 7): ?>
													<td>
														<?= $row['complete'][0]->gstr3b ?>
													</td>
													<td>
														<?= $row['complete'][0]->gstr1 ?>
													</td>
													<?php endif; ?>
													<td>
														<?= $row['complete'][0]->gstr2 ?>
													</td>
													<td>
														<?= $row['complete'][0]->gstr3 ?>
													</td>
													<?php if($data['tax'] == 8): ?>
													<td>
														<?= $row['complete'][0]->gstr4 ?>
													</td>
													<?php endif; ?>
													<td>
														<?= $row['complete'][0]->cf ?>
													</td>
													<td>
														<?= $row['complete'][0]->fc ?>
													</td>

												</tr>
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
			url: "completeReport",
			data: {
				mon: month,
				hdntax: $('#hdntax').val(),
				year: $('#drpYear').val(),
				status: $('#drpStatus').val(),
			},
			success: function(data) {
				//alert(data);
				window.location.href = "completeReport1";
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
			url: "changeValue",
			type: 'get',
			data: {
				year: ele,
				hdntax: $('#hdntax').val(),
				status: $('#drpStatus').val(),
			},
			success: function(data) {
				console.log(data);
				$("#tblCompany tbody").empty();

				$.each(data['company'], function(i, key) {
					var Month = '<td><a onclick="btnComplete(' + (key.month + 1) + ')"><b>' + key.monthName + '</b></a></td>';
					var totalCompany = '<td>' + key.total + '</td>';
					var br = '<td>' + key.complete[0]['Br'] + '</td>';
					var ta = '<td>' + key.complete[0]['ta'] + '</td>';
					var gstr3b = '<td>' + key.complete[0]['gstr3b'] + '</td>';
					var gstr1 = '<td>' + key.complete[0]['gstr1'] + '</td>';
					var gstr2 = '<td>' + key.complete[0]['gstr2'] + '</td>';
					var gstr3 = '<td>' + key.complete[0]['gstr3'] + '</td>';
					var gstr4 = '<td>' + key.complete[0]['gstr4'] + '</td>';
					var fc = '<td>' + key.complete[0]['fc'] + '</td>';
					var cf = '<td>' + key.complete[0]['cf'] + '</td>';

					if ($('#drpStatus').val() == 2) {
						Month = '<td><a onclick="btnComplete(' + (key.month + 1) + ')"><b>' + key.monthName + '</b></a></td>';
						totalCompany = '<td>' + key.total + '</td>';
						br = '<td>' + (key.total - key.complete[0]['Br']) + '</td>';
						ta = '<td>' + (key.total - key.complete[0]['ta']) + '</td>';
						gstr3b = '<td>' + (key.total - key.complete[0]['gstr3b']) + '</td>';
						gstr1 = '<td>' + (key.total - key.complete[0]['gstr1']) + '</td>';
						gstr2 = '<td>' + (key.total - key.complete[0]['gstr2']) + '</td>';
						gstr3 = '<td>' + (key.total - key.complete[0]['gstr3']) + '</td>';
						gstr4 = '<td>' + (key.total - key.complete[0]['gstr4']) + '</td>';
						fc = '<td>' + (key.total - key.complete[0]['fc']) + '</td>';
						cf = '<td>' + (key.complete[0]['tot'] - key.complete[0]['cf']) + '</td>';
						console.log(key);
					}


					if ($('#hdntax').val() == 7) {
						$("#tblCompany").append('<tbody><tr>' + Month + '' + totalCompany + '' + br + '' + ta + '' + gstr3b + '' + gstr1 + '' + gstr2 + '' + gstr3 + '' + '' + cf + '' + fc + ' < /tr></tbody > ');
					} else {
						$("#tblCompany").append('<tbody><tr>' + Month + '' + totalCompany + '' + br + '' + ta + '' + gstr4 + '' + gstr3 + '' + gstr4 + '' + cf + '' + fc + ' < /tr></tbody > ');
					}
				});
				console.log(data);
				//alert(data);
				//window.location.href = "completeReport1";
			}
		});
	}

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>