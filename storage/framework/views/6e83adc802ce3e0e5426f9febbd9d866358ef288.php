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

									<center>
										<div class="muted pull-left">EMPLOYEE STATUS</div>
									</center>
								</div>
								<!--								<input type="hidden" name="hdnTax" id="hdnTax" value="?>">-->
								<div class="block-content collapse in">

									<input type="hidden" name="page" id="page">
									<div class="span12">

										<div class="span3">
											<label class="control-label" for="company_name">Type</label>
											<div class="control-group">
												<div class="controls">
													<select id="drpType" name="drpType" onchange="changeValue()">
                                                    <option value="0">Select</option>
                                                    <option value="7" <?php if(Session::get('drpType')==7){  ?> selected <?php } ?>>GST - Regular</option>
                                                    <option value="8" <?php if(Session::get('drpType')==8){  ?> selected <?php } ?>>GST - Compounding</option>
                                                    <option value="60"  <?php if(Session::get('drpType')==60){  ?> selected <?php } ?>>IT - Individual</option>
                                                    <option value="61"  <?php if(Session::get('drpType')==61){  ?> selected <?php } ?>>IT - Concern</option>
                                                    <option value="71"  <?php if(Session::get('drpType')==71){  ?> selected <?php } ?>>TDS - Individual</option>
                                                    <option value="72"  <?php if(Session::get('drpType')==72){  ?> selected <?php } ?>>TDS - Concern</option>
                                                </select>
												</div>
											</div>
										</div>
										<div class="span3">
											<input type="hidden" name="hdnpage" id="hdnpage" value="<?= $data['page'] ?>">
											<label class="control-label" for="companyname">Employee Name</label>
											<div class="controls">
												<select id="drpEmployee" name="drpEmployee" onchange="changeValue()">
                                                <?php $__currentLoopData = $data['employee']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                                                <option value="<?= $row->id ?>" <?php if(Session::get('drpEmployee')==$row->id){  ?> selected <?php } ?>> <?= $row->First_Name  ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
											</div>

										</div>
										<div class="span3">
											<label class="control-label" for="company_name">Financial Year</label>
											<div class="control-group">
												<div class="controls">
													<!--												<input type='text' id='txtStartDate' class="change1" onchange="changeTableValue()" />-->

													<select id="txtStartDate" onchange="changeValue()">
												<option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1 ; ?> </option>
                                                        
													<option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?> > <?php echo date('Y')-1;echo "-";echo date('Y') ;  ?> </option>
                                                        
													<option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1  ?> </option>
													</select>
													<!--
                                                <select id="drpMonth" onchange="changeTableValue()">
                                                    <option>Select</option>
                                                    <?= $sno = 1; ?>
                                                    <?php $__currentLoopData = $data['Month']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?= $sno ?>" <?php if($sno == (date('m') - 1)) echo "selected"; ?> >
                                                    <?= $month[0]->MonthName ?> </option>
                                                    <?= $sno ++; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
-->
												</div>
											</div>
										</div>
										<div class="span3">
											<label class="control-label" for="company_name">Status</label>
											<div class="control-group">
												<div class="controls">
													<select id="status" name="status" onchange="changeValue()">
                                                    <option value="1"  <?php if(Session::get('status')==1){  ?> selected <?php } ?>>Success</option>
                                                    <option value="2" <?php if(Session::get('status')==2){  ?> selected <?php } ?>>Pending</option>
                                                </select>
												</div>
											</div>
										</div>
									</div>
									<div class="span12" style="margin-left:0px;">
										<table class="table table-bordered grand_report_table" id="tblCompany">

										</table>


									</div>
								</div>
							</div>
							<!-- /block -->
						</div>

					</div>

				</div>
			</div>
			<hr>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		changeValue();
		//alert($('#drpEmployee').val());
	});

	function btnComplete(month) {
		//alert(month);
		$.ajax({
			url: "employeeStatusDetails",
			data: {
				mon: month,
				hdntax: $('#drpType').val(),
				year: $('#txtStartDate').val(),
				drpEmployee: $('#drpEmployee').val(),
				drpEmployeeName: $("#drpEmployee option:selected").text(),
				//status: 1
			},
			success: function(data) {
				//alert(data);
				window.location.href = "employeeStatusDetails1";
			}
		});
	}


	function changeValue() {
		var drpType = $('#drpType').val();
		var drpEmployee = $('#drpEmployee').val();
		var txtStartDate = $('#txtStartDate').val();
		var status = $('#status').val();
		$.ajax({
			url: "employeeStatusValue",
			type: 'get',
			data: {
				drpType: drpType,
				drpEmployee: drpEmployee,
				txtStartDate: txtStartDate,
				status: status,
				//hdntax: $('#hdntax').val(),
				//status: $('#drpStatus').val(),
			},
			success: function(data) {
				$("#tblCompany ").empty();


				console.log(data['company']);

				var br = 0;
				var ta = 0;
				var gstr1 = 0;
				var gstr2 = 0;
				var gstr3 = 0;
				var gstr3b = 0;
				var gstr4 = 0;
				var fc = 0;
				var cf = 0;
				var totalfee = 0;

				if (drpType == 7) {
					$("#tblCompany").append('<thead><tr><th rowspan=2>Month</th><th rowspan=2>Total Company</th><th rowspan=2>Bill Received</th><th rowspan=2>Tally Accounted</th><th rowspan=2>GSTR 3B</th><th rowspan=2>GSTR 1</th><th rowspan=2>Bank A/C</th><th rowspan=2>EXP A/C</th><th colspan=2>Fees Collection</th></tr><tr><th>Fee</th><th>Collected</th></tr></thead><tbody></tbody>');

					$.each(data['company'], function(i, key) {
						console.log(key);
var month=(key.month);
						if (key.complete[0]['Br'] != null) {
							br = parseInt(key.complete[0]['Br']);
							//console.log(br);
						}
						if (key.complete[0]['ta'] != null) {
							ta = parseInt(key.complete[0]['ta']);
						}
						if (key.complete[0]['gstr1'] != null) {
							gstr1 = parseInt(key.complete[0]['gstr1']);
						}
						if (key.complete[0]['gstr2'] != null) {
							gstr2 = parseInt(key.complete[0]['gstr2']);
						}
						if (key.complete[0]['gstr3'] != null) {
							gstr3 = parseInt(key.complete[0]['gstr3']);
						}
						if (key.complete[0]['gstr3b'] != null) {
							gstr3b = parseInt(key.complete[0]['gstr3b']);
						}
						if (key.complete[0]['fc'] != null) {
							fc = parseInt(key.complete[0]['fc']);
						}
						if (key.complete[0]['cf'] != null) {
							cf = parseInt(key.complete[0]['cf']);
						}

						if (key.complete[0]['tot'] != null) {
							totalfee = parseInt(key.complete[0]['tot']);
						}
						// //alert(totalfee);
						// if (status == 2) {
						// 	$("#tblCompany tbody").append('<tr><td><b><a onclick="btnComplete(' + key.month + ')" >' + key.monthName + '</b></a></td><td>' + key.total + '</td><td>' + (key.total - br) + '</td><td>' + (key.total - ta) + '</td><td>' + (key.total - gstr3b) + '</td><td>' + (key.total - gstr1) + '</td><td>' + (key.total - gstr2) + '</td><td>' + (key.total - gstr3) + '</td><td>' + (totalfee - cf) + '</td><td>' + (key.total - fc) + '</td></tr>');
						// } else {
							$("#tblCompany tbody").append('<tr><td><b><a onclick="btnComplete(' + month + ')" >' + key.monthName + '</b></a></td><td>' + key.total + '</td><td>' + br + '</td><td>' + ta + '</td><td>' + gstr3b + '</td><td>' + gstr1 + '</td><td>' + gstr2 + '</td><td>' + gstr3 + '</td><td>' + cf + '</td><td>' + fc + '</td></tr>');
						//}
					});
				}
				if (drpType == 8) {
					$("#tblCompany").append('<thead><tr><th rowspan=2>Month</th><th rowspan=2>Total Company</th><th rowspan=2>Bill Received</th><th rowspan=2>Tally Accounted</th><th rowspan=2>GSTR 4</th><th colspan=2>Fees Collection</th></tr><tr><th>Fee</th><th>Collected</th></tr></thead><tbody></tbody>');

					$.each(data['company'], function(i, key) {
						//console.log(key.complete[0]['Br']);

						if (key.complete[0]['Br'] != null) {
							br = parseInt(key.complete[0]['Br']);
						}
						if (key.complete[0]['ta'] != null) {
							ta = parseInt(key.complete[0]['ta']);
						}
						if (key.complete[0]['gstr4'] != null) {
							gstr1 = parseInt(key.complete[0]['gstr4']);
						}

						if (key.complete[0]['fc'] != null) {
							fc = parseInt(key.complete[0]['fc']);
						}
						if (key.complete[0]['cf'] != null) {
							cf = parseInt(key.complete[0]['cf']);
						}

						if (key.complete[0]['tot'] != null) {
							totalfee = parseInt(key.complete[0]['tot']);
						}

						if (status == 2) {
							$("#tblCompany tbody").append('<tr><td><b><a onclick="btnComplete(' + key.month + ')" >' + key.monthName + '</b></a></td><td>' + key.total + '</td><td>' + (key.total - br) + '</td><td>' + (key.total - ta) + '</td><td>' + (key.total - gstr1) + '</td><td>' + (totalfee - cf) + '</td><td>' + (key.total - fc) + '</td></tr>');
						} else {
							$("#tblCompany tbody").append('<tr><td><b><a onclick="btnComplete(' + key.month + ')" >' + key.monthName + '</b></a></td><td>' + key.total + '</td><td>' + br + '</td><td>' + ta + '</td><td>' + gstr1 + '</td><td>' + cf + '</td><td>' + fc + '</td></tr>');
						}
					});
				} else if (drpType == 71 || drpType == 72) {
					$("#tblCompany").append('<thead><tr><th rowspan=2>Month</th><th rowspan=2>Total Company</th><th rowspan=2>TC</th><th rowspan=2>TP</th><th rowspan=2>RF</th><th colspan=2>Fees Collection</th></tr><tr><th>Fee</th><th>Collected</th></tr></thead><tbody></tbody>');

					var tc = 0;
					var tp = 0;
					var rf = 0;

					$.each(data['company'], function(i, key) {
						// alert(key.complete[0]['fc']);

						if (key.complete[0]['tc'] != null) {
							tc = parseInt(key.complete[0]['tc']);
						}
						if (key.complete[0]['tp'] != null) {
							tp = parseInt(key.complete[0]['tp']);
						}
						if (key.complete[0]['rf'] != null) {
							rf = parseInt(key.complete[0]['rf']);
						}
						if (key.complete[0]['fc'] != null) {
							fc = parseInt(key.complete[0]['fc']);
						}
						if (key.complete[0]['cf'] != null) {
							cf = parseInt(key.complete[0]['cf']);
						}

						if (key.complete[0]['tot'] != null) {
							totalfee = parseInt(key.complete[0]['tot']);
						}

						if (status == 2) {
							$("#tblCompany tbody").append('<tr><td><b><a onclick="btnComplete(' + key.month + ')" >' + key.monthName + '</a></b></td><td>' + key.total + '</td><td>' + (key.total - tc) + '</td><td>' + (key.total - tp) + '</td><td>' + (key.total - rf) + '</td><td>' + (totalfee - cf) + '</td><td>' + (key.total - fc) + '</td></tr>');
						} else {
							$("#tblCompany tbody").append('<tr><td><b><a onclick="btnComplete(' + key.month + ')" >' + key.monthName + '</a></b></td><td>' + key.total + '</td><td>' + tc + '</td><td>' + tp + '</td><td>' + rf + '</td><td>' + cf + '</td><td>' + fc + '</td></tr>');
						}
					});
				} else if (drpType == 60 || drpType == 61) {
					if (drpType == 60) {
						$("#tblCompany").append('<thead><tr><th rowspan=2>SNO</th><th rowspan=2>Customer</th><th rowspan=2>Phone</th><th rowspan=2>Document Received</th><th rowspan=2>Field</th><th rowspan=2>CPC</th><th colspan=2>Fees Collection</th></tr><tr><th>Fee</th><th>Collected</th></tr></thead><tbody></tbody>');
					} else {
						$("#tblCompany").append('<thead><tr><th rowspan=2>SNO</th><th rowspan=2>Customer</th><th rowspan=2>Comapny Name</th><th rowspan=2>Phone</th><th rowspan=2>Document Received</th><th rowspan=2>Field</th><th rowspan=2>CPC</th><th colspan=2>Fees Collection</th></tr><tr><th>Fee</th><th>Collected</th></tr></thead><tbody></tbody>');
					}
					$.each(data['company'], function(i, key) {

						if (drpType == 60) {
							$("#tblCompany tbody").append('<tr><td><b>' + (i + 1) + '</b></td><td style="text-align: left !important;">' + key.name + '</td><td>' + key.contact_no + '</td><td>' + key.dr + '</td><td>' + key.field + '</td><td>' + key.cpc + '</td><td>' + key.fee + '</td><td>' + key.fc + '</td></tr>');
						} else {
							$("#tblCompany tbody").append('<tr><td><b>' + (i + 1) + '</b></td><td style="text-align: left !important;">' + key.name + '</td><td style="text-align: left !important;">' + key.company_name + '</td><td>' + key.contact_no + '</td><td>' + key.dr + '</td><td>' + key.field + '</td><td>' + key.cpc + '</td><td>' + key.fee + '</td><td>' + key.fc + '</td></tr>');
						}

					});
				}
			}
		});
	}

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>