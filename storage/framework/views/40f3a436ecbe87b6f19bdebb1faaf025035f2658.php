  <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<link href="<?php echo e(asset('/css/select2.min.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(asset('/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>

<div class="container-fluid">
	<div class="row-fluid">

		<div class="span12" id="content">

			<div class="row-fluid">
				<div class="block-content collapse in">

					<div class="row-fluid">
						<!-- block -->
						<div class="block" style="
    background-image: linear-gradient(to bottom, #999cff, #999cff)!important;
">
							<div class="navbar navbar-inner block-header" style="
    background-image: linear-gradient(to bottom, #0014ff, #0014ff)!important;
">
								<center>
									<div class="muted pull-center">
										<h4> GST REGULAR</h4>
									</div>

								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3">
										<div class="control-group">
											<label class="control-label" for="companyname">Company Name</label>
											<div class="controls">
												<input type="text" id="companyname" placeholder="Company Name" name="companyname" />

											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Month</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpRegularMonth" onchange="changeGSTRegular()">
                                                   
                                                    <?php $__currentLoopData = $data['Month']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if((date('m') - 1) != 0) { ?>
                                                    <option value="<?=($month['month']+1)?>" <?php if(($month['month']+1) ==( date('m') - 1)) echo "selected"; ?> >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } else { ?> 
                                                    <option value="<?=($month['month']+1)?>" selected >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Financial Year</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpRegularYear" onchange="changeGSTRegular()">
                                                    
                                                    <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1;  ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?> > <?php echo date('Y')-1;echo "-";echo date('Y');  ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1;  ?> </option>
                                                    
                                                    
                                                    
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tblgstregular">
										<thead>
											<tr>
												<!--												<th style="text-align:center" rowspan="2">S.No</th>-->
												<!--<th style="text-align:left">Company Name</th>-->

												<th style="text-align:center" rowspan="2">Name</th>
												<th style="text-align:center" rowspan="2">Category</th>
												<th style="text-align:center" rowspan="2">Bill Received</th>
												<th style="text-align:center" rowspan="2">Tally Accounted</th>
												<th style="text-align:center" rowspan="2">GSTR 3B</th>
												<th style="text-align:center" rowspan="2">GSTR 1</th>
												<th style="text-align:center" rowspan="2">Bank A/C</th>
												<th style="text-align:center" rowspan="2">EXP A/C</th>
												<th style="text-align:center" colspan="2">Fees Collection</th>
											</tr>
											<tr>
												<th style="text-align:center">Fee</th>
												<th style="text-align:center">Collected</th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>



								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<!-- block -->
						<div class="block" style="
    background-image: linear-gradient(to bottom, #fbacea,#fbacea)!important;
">
							<div class="navbar navbar-inner block-header" style="
    background-image: linear-gradient(to bottom, #df69bb,#df69bb)!important;
">
								<center>
									<div class="muted pull-center">
										<h4>GST COMPOUNDING</h4>
									</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3">
										<div class="control-group">
											<label class="control-label" for="companyname">Company Name</label>
											<div class="controls">
												<input type="text" id="companyname1" placeholder="Company Name" name="companyname1" />

											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Month</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpCompountingMonth" onchange="changeGSTCompounding()">
                                                    
                                                   <?php $__currentLoopData = $data['Month']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if((date('m') - 1) != 0) { ?>
                                                    <option value="<?=($month['month']+1)?>" <?php if(($month['month']+1) ==( date('m') - 1)) echo "selected"; ?> >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } else { ?> 
                                                    <option value="<?=($month['month']+1)?>" selected >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Financial Year</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpCompountingYear" onchange="changeGSTCompounding()">
                                                    
                                                    <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1;  ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?>> <?php echo date('Y')-1;echo "-";echo date('Y');  ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1;  ?> </option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tblgstCompounding">
										<thead>
											<tr>
												<!--												<th rowspan="2">S.No</th>-->
												<!--<th>Employee</th>-->
												<th rowspan="2">Name</th>
												<th rowspan="2">Category</th>
												<th rowspan="2">Bill Received</th>
												<th rowspan="2">Tally Accounted</th>
												<th rowspan="2">Bank A/C</th>
												<th rowspan="2">EXP A/C</th>
												<th colspan="2"> Fees Collection</th>
												<!--
                                                <?php if((date('m')/3)==0) { ?>
                                                <th rowspan="2">GSTR 4</th>
                                                <?php } ?>
-->
											</tr>
											<tr>
												<th style="text-align:center">Fee</th>
												<th style="text-align:center">Collected</th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>



								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<!-- block -->
						<div class="block" style="background-image: linear-gradient(to bottom, #dea9ff, #dea9ff)!important;">
							<div class="navbar navbar-inner block-header" style="
    background-image: linear-gradient(to bottom, #68179a, #68179a)!important;
">
								<center>
									<div class="muted pull-center">
										<h4>IT-INDIVIDUAL</h4>
									</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3">
										<div class="control-group">
											<label class="control-label" for="companyname">Name</label>
											<div class="controls">
												<input type="text" id="IT_INDIVIDUAL" placeholder="Company Name" name="IT_INDIVIDUAL" />

											</div>
										</div>
									</div>
									<!--
                                    <div class="span3">
                                        <label class="control-label" for="company_name">Month</label>
                                        <div class="control-group">
                                            <div class="controls">
                                                <select id="drpCompountingMonth" onchange="changeGst(8)">
                                                    <option>Select</option>
                                                    <?php $__currentLoopData = $data['Month']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?=($month['month']+1)?>">
                                                <?= $month['monthName'] ?>
                                                    </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                </div>
                            </div>
                        </div>
                        -->
									<div class="span3">
										<label class="control-label" for="company_name">Financial Year</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpITIndividualYear" onchange="changeITIndividual()">
													
													<option value="<?php echo date('Y')-3; ?>">
                                                        <?php echo date('Y')-3; echo '-'; echo date('Y')-2;  ?> 
                                                    </option>
                                                    <option value="<?php echo date('Y')-2; ?>">
                                                        <?php echo date('Y')-2; echo '-'; echo date('Y')-1;  ?> 
                                                    </option>
                                                    <option value="<?php echo date('Y')-1; ?>" selected> 
                                                        <?php echo date('Y')-1; echo '-'; echo date('Y');  ?> 
                                                    </option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tblIT_INDIVIDUAL">
										<thead>
											<tr>
												<!--												<th rowspan="2">S.No</th>-->
												<!--                                                <th>Customer Name</th>-->
												<th rowspan="2">Document Received</th>
												<th rowspan="2">FILED</th>
												<th rowspan="2">CPC</th>
												<th colspan="2">Fees Collection</th>
											</tr>
											<tr>
												<th style="text-align:center">Fee</th>
												<th style="text-align:center">Collected</th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>



								</div>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<!-- block -->
						<div class="block" style="background-image: linear-gradient(to bottom, #85b368, #85b368)!important;">
							<div class="navbar navbar-inner block-header" style="background-image: linear-gradient(to bottom, #069e20,#069e20)!important;">
								<center>
									<div class="muted pull-center">
										<h4>IT-CONCERN(GST)</h4>
									</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3">
										<div class="control-group">
											<label class="control-label" for="companyname">Name</label>
											<div class="controls">
												<input type="text" id="IT_CONCERN" placeholder="Company Name" name="IT_CONCERN" />

											</div>
										</div>
									</div>
									<!--    <div class="span3">
                                        
                                        <label class="control-label" for="company_name">Month</label>
                                        <div class="control-group">
                                            <div class="controls">
                                                <select id="drpCompountingMonth" onchange="changeGst(8)">
                                                    <option>Select</option>
                                                    <?php $__currentLoopData = $data['Month']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?=($month['month']+1)?>"><?= $month['monthName'] ?> </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div> -->
									<div class="span3">
										<label class="control-label" for="company_name">Financial Year</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpITConcernYear" onchange="changeITConcern()">                   
                                                  <option value="<?php echo date('Y')-3; ?>">
                                                        <?php echo date('Y')-3; echo '-'; echo date('Y')-2;  ?> 
                                                    </option>
                                                    <option value="<?php echo date('Y')-2; ?>">
                                                        <?php echo date('Y')-2; echo '-'; echo date('Y')-1;  ?> 
                                                    </option>
                                                    <option value="<?php echo date('Y')-1; ?>" selected> 
                                                        <?php echo date('Y')-1; echo '-'; echo date('Y');  ?> 
                                                    </option>
                                                    
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tblIT_CONCERN">
										<thead>
											<tr>
												<!--												<th rowspan="2">S.No</th>-->
												<th rowspan="2">Name</th>
												<th rowspan="2">Catagory</th>

												<!--                                                <th>Customer Name</th>-->
												<th rowspan="2">Document Received</th>
												<th rowspan="2">FILED</th>
												<th rowspan="2">CPC</th>
												<th colspan="2">Fees Collection</th>

											</tr>
											<tr>
												<th style="text-align:center">Fee</th>
												<th style="text-align:center">Collected</th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>



								</div>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<!-- block -->
						<div class="block" style="
    background-image: linear-gradient(to bottom, #ffb581, #ffb581)!important;
">
							<div class="navbar navbar-inner block-header" style="
    background-image: linear-gradient(to bottom, #ff6a00, #ff6a00)!important;
">
								<center>
									<div class="muted pull-center">
										<h4>TDS-INDIVIDUAL</h4>
									</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3">
										<div class="control-group">
											<label class="control-label" for="companyname">Name</label>
											<div class="controls">
												<input type="text" id="TDS_INDIVIDUAL" placeholder="Company Name" name="TDS_INDIVIDUAL" />

											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Month</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpTDSIMonth" onchange="changeTDSIndividual()">
                                                   <?php $__currentLoopData = $data['Month']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if((date('m') - 1) != 0) { ?>
                                                    <option value="<?=($month['month']+1)?>" <?php if(($month['month']+1) ==( date('m') - 1)) echo "selected"; ?> >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } else { ?> 
                                                    <option value="<?=($month['month']+1)?>" selected >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Financial Year</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpTDSIYear" onchange="changeTDSIndividual()">
                                                  <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1;  ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?>> <?php echo date('Y')-1;echo "-";echo date('Y');  ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1;  ?> </option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tbltdsI">
										<thead>
											<tr>
												<!--												<th rowspan="2">S.No</th>-->
												<!--                                                <th>Customer Name</th>-->
												<th rowspan="2">T/C</th>
												<th rowspan="2">T/P</th>
												<th rowspan="2">R/F</th>
												<th colspan="2">Fees Collection</th>
											</tr>
											<tr>
												<th style="text-align:center">Fee</th>
												<th style="text-align:center">Collected</th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>



								</div>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<!-- block -->
						<div class="block" style="
    background-image: linear-gradient(to bottom, #a7a7a7, #a7a7a7)!important;
">
							<div class="navbar navbar-inner block-header" style="
    background-image: linear-gradient(to bottom, #0e0e0e, #000000)!important;
">
								<center>
									<div class="muted pull-center">
										<h4>TDS-CONCERN</h4>
									</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3">
										<div class="control-group">
											<label class="control-label" for="companyname">Name</label>
											<div class="controls">
												<input type="text" id="TDS_CONCERN" placeholder="Company Name" name="TDS_CONCERN" />

											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Month</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpTDSCMonth" onchange="changeTDSConcern()">
                                                    
                                                   <?php $__currentLoopData = $data['Month']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if((date('m') - 1) != 0) { ?>
                                                    <option value="<?=($month['month']+1)?>" <?php if(($month['month']+1) ==( date('m') - 1)) echo "selected"; ?> >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } else { ?> 
                                                    <option value="<?=($month['month']+1)?>" selected >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Financial Year</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpTDSCYear" onchange="changeTDSConcern()">
                                                    <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2; echo "-";echo date('Y')-1; ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?>> <?php echo date('Y')-1;echo "-";echo date('Y');  ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1;  ?> </option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tbltdsC">
										<thead>
											<tr>
												<!--												<th rowspan="2">S.No</th>-->
												<th rowspan="2">Name</th>
												<th rowspan="2">Category</th>

												<th rowspan="2">T/C</th>
												<th rowspan="2">T/P</th>
												<th rowspan="2">R/F</th>
												<th colspan="2">Fees Collection</th>
											</tr>
											<tr>
												<th style="text-align:center">Fee</th>
												<th style="text-align:center">Collected</th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>



								</div>
							</div>

						</div>
					</div>

				</div>

			</div>
		</div>
		<hr>
	</div>
</div>

<script>
	$(document).ready(function() {
		//$('#tblCompany').DataTable();
	});
	var listGSTRegular = [];
	var listGSTCompounding = [];

	var listITIndividual = [];
	var listITConcern = [];

	var listTDSIndividual = [];
	var listTDSConcern = [];

	var regularid = 0;
	var compoundingId = 0;
	var IT_INDIVIDUAL = 0;
	var IT_CONCERN = 0;
	var TDS_INDIVIDUAL = 0;
	var TDS_CONCERN = 0;


	var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "June",
		"July", "Aug", "Sepr", "Oct", "Nov", "Dec"
	];

	var dat = new Date();
	var d = dat.getDate() + ' ' + monthNames[dat.getMonth()] + ' ' + dat.getFullYear();


	$(document).ready(function() {
		$.ajax({
			url: "getCompanyautoComplete",
			type: 'get',

			success: function(data) {
				console.log(data);

				/** GST Regular **/

				$.each(data['regular'], function(value, key) {
					listGSTRegular.push({
						id: key.Id,
						label: key.Company_Name + ' - ' + key.Phone_No1,
					});
				});
				/** GST Regular **/

				/** GST Compoundig **/
				$.each(data['compounding'], function(value, key) {
					listGSTCompounding.push({
						id: key.Id,
						label: key.Company_Name + ' - ' + key.Phone_No1,
					});
				});
				/** GST Compoundig **/

				/** IT Individual **/
				$.each(data['It_individual'], function(value, key) {
					listITIndividual.push({
						id: key.Id,
						label: key.First_Name + ' - ' + key.Phone_No1,
					});
				});
				/** IT Individual **/


				/** IT Concern **/

				$.each(data['it_concern'], function(value, key) {
					listITConcern.push({
						id: key.Id,
						label: key.First_Name + ' - ' + key.Phone_No1,
					});
				});
				/** IT Concern **/


				/** TDS  Individual **/

				$.each(data['TDS_individual'], function(value, key) {
					listTDSIndividual.push({
						id: key.Id,
						label: key.First_Name + ' - ' + key.Phone_No1,
					});
				});

				/** TDS  Individual **/

				/** TDS  Concern **/

				$.each(data['TDS_concern'], function(value, key) {
					listTDSConcern.push({
						id: key.Id,
						label: key.First_Name + ' - ' + key.Phone_No1,
					});
				});
				/** TDS  Concern **/
				console.log(listITConcern);

			},
			error: function(data) {
				alert("error");
			}
		});
	});

	/** IT-INDIVIDUAL  **/
	$("#IT_INDIVIDUAL").autocomplete({
		source: listITIndividual,
		minLength: 1,
		select: function(event, ui) {
			value = ui.item.id;
			IT_INDIVIDUAL = ui.item.id;
			changeITIndividual();
		},
		change: function(event, ui) {
			if (ui.item === null) {
				$(this).val('');
			}
		}
	});

	$("#IT_CONCERN").autocomplete({
		source: listITConcern,
		minLength: 1,
		select: function(event, ui) {
			value = ui.item.id;
			IT_CONCERN = ui.item.id;
			changeITConcern();
		},
		change: function(event, ui) {
			if (ui.item === null) {
				$(this).val('');
			}
		}
	});

	$("#TDS_INDIVIDUAL").autocomplete({
		source: listTDSIndividual,
		minLength: 1,
		select: function(event, ui) {
			value = ui.item.id;
			TDS_INDIVIDUAL = ui.item.id;
			changeTDSIndividual();
		},
		change: function(event, ui) {
			if (ui.item === null) {
				$(this).val('');
			}
		}
	});

	$("#TDS_CONCERN").autocomplete({
		source: listTDSConcern,
		minLength: 1,
		select: function(event, ui) {
			value = ui.item.id;
			TDS_CONCERN = ui.item.id;
			changeTDSConcern();
		},
		change: function(event, ui) {
			if (ui.item === null) {
				$(this).val('');
			}
		}
	});

	function changeITIndividual() {
		$.ajax({
			url: 'get_customer_details',
			data: {
				customer_id: IT_INDIVIDUAL,
				hdnTax: 60,
				month: 1,
				year: $('#drpITIndividualYear').val()
			},
			success: function(data) {
				console.log(data);
				$('#tblIT_INDIVIDUAL tbody').empty();
				var sno = 1;
				$.each(data['it'], function(i, key) {
					//alert(sno);
					//console.log(key.GSTR3);
					var dr = key.dr;
					var field = key.field;
					var cpc = key.cpc;
					var FC = key.FC;

					if (key.dr == null) {
						dr = '<div id="dri" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkdri" onchange="update_INDIVIDUAL(73,' + IT_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="dri_1" style="display:none">' + d + '</div>';
					}
					if (key.field == null) {
						field = '<div id="fieldi" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chkfieldi" onchange="update_INDIVIDUAL(74,' + IT_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="fieldi_1" style="display:none"> ' + d + '</div>';
					}
					if (key.cpc == null) {
						cpc = '<div id="cpci" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkcpci" onchange="update_INDIVIDUAL(75,' + IT_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> 										<span class="switch-handle"></span> </label></div> <div id="cpci_1" style="display:none"> ' + d + '</div>';
					}
					if (key.FC == null) {
						FC = '<div id="FCi" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCi" onchange="update_INDIVIDUAL(70,' + IT_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="FCi_1" style="display:none"> ' + d + '</div>';
					}

					$('#tblIT_INDIVIDUAL tbody').append('<tr><td style="text-align:center">' + dr + '</td><td style="text-align:center">' + field + '</td><td style="text-align:center">' + cpc + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td></tr>');

					sno++;

					//console.log(key[0].countBR);
				});
			}
		});
	}

	function changeITConcern() {
		$.ajax({
			url: 'get_customer_details',
			data: {
				customer_id: IT_CONCERN,
				hdnTax: 61,
				month: 1,
				year: $('#drpITConcernYear').val()
			},
			success: function(data) {
				console.log(data['it']);
				console.log(data['itcategory']['a'][0]['name']);
				console.log(data['itcategory']['b']);

				//var it_name = data['itcategory']['a'][0]['name'];
				var it_category = data['itcategory']['b'];
				//alert(it_category);

				if (it_category == 'Partner') {
					var it_name = 'Firm';
				} else {
					var it_name = data['itcategory']['a'][0]['name'];
				}

				$('#tblIT_CONCERN tbody').empty();
				var sno = 1;
				$.each(data['it'], function(i, key) {
					//alert(sno);
					//console.log(key.GSTR3);
					var dr = key.dr;
					var field = key.field;
					var cpc = key.cpc;
					var FC = key.FC;

					if (key.dr == null) {
						dr = '<div id="drc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkdrc" onchange="update_CONCERN(73,' + IT_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="drc_1" style="display:none">' + d + '</div>';
					}
					if (key.field == null) {
						field = '<div id="fieldc" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chkfieldc" onchange="update_CONCERN(74,' + IT_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="fieldc_1" style="display:none"> ' + d + '</div>';
					}
					if (key.cpc == null) {
						cpc = '<div id="cpcc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkcpcc" onchange="update_CONCERN(75,' + IT_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> 										<span class="switch-handle"></span> </label></div> <div id="cpcc_1" style="display:none"> ' + d + '</div>';
					}
					if (key.FC == null) {
						FC = '<div id="FCitc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCitc" onchange="update_CONCERN(70,' + IT_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="FCitc_1" style="display:none"> ' + d + '</div>';
					}

					$('#tblIT_CONCERN tbody').append('<tr><td style="text-align:center">' + it_name + '</td><td style="text-align:center">' + it_category + '</td><td style="text-align:center">' + dr + '</td><td style="text-align:center">' + field + '</td><td style="text-align:center">' + cpc + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td></tr>');

					sno++;

					//console.log(key[0].countBR);
				});
			}
		});
	}

	function changeTDSIndividual() {
		$.ajax({
			url: 'get_TDS_details',
			data: {
				customer_id: TDS_INDIVIDUAL,
				hdnTax: 71,
				month: $('#drpTDSIMonth').val(),
				year: $('#drpTDSIYear').val()
			},
			success: function(data) {
				console.log(data);
				$('#tbltdsI tbody').empty();
				var sno = 1;
				$.each(data['tds'], function(i, key) {
					//alert(sno);
					console.log(key);
					var tc = key.tc;
					var tp = key.tp;
					var rf = key.rf;
					var FC = key.FC;


					if (key.tc == null) {
						tc = '<div id="tci" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chktci" onchange="update_TDS_INDIVIDUAL(76,' + TDS_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="tci_1" style="display:none">' + d + '</div>';
					}
					if (key.tp == null) {
						tp = '<div id="tpi" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chktpi" onchange="update_TDS_INDIVIDUAL(77,' + TDS_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="tpi_1" style="display:none"> ' + d + '</div>';
					}
					if (key.rf == null) {
						rf = '<div id="rfi" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkrfi" onchange="update_TDS_INDIVIDUAL(78,' + TDS_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> 										<span class="switch-handle"></span> </label></div> <div id="rfi_1" style="display:none"> ' + d + '</div>';
					}
					if (key.FC == null) {
						FC = '<div id="FCi" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCi" onchange="update_TDS_INDIVIDUAL(70,' + TDS_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="FCi_1" style="display:none"> ' + d + '</div>';
					}


					$('#tbltdsI tbody').append('<tr><td style="text-align:center">' + tc + '</td><td style="text-align:center">' + tp + '</td><td style="text-align:center">' + rf + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td></tr>');

					sno++;

					//console.log(key[0].countBR);
				});
			}
		});
	}

	function changeTDSConcern() {
		$.ajax({
			url: 'get_TDS_details',
			data: {
				customer_id: TDS_CONCERN,
				hdnTax: 72,
				month: $('#drpTDSCMonth').val(),
				year: $('#drpTDSCYear').val()
			},
			success: function(data) {
				console.log(data);
				$('#tbltdsC tbody').empty();
				var sno = 1;
				var category = data['category']['b'];
				//var P_name = data['category']['a'][0]['name'];
				//				if (data['category'].length > 0) {
				//					category = 'Partner';
				//				}

				if (category == 'Partner') {
					var P_name = 'Firm';
				} else {
					var P_name = data['category']['a'][0]['name'];
				}

				console.log(P_name);


				$.each(data['tds'], function(i, key) {
					//alert(sno);
					console.log(key);
					var tc = key.tc;
					var tp = key.tp;
					var rf = key.rf;
					var FC = key.FC;

					if (key.tc == null) {
						tc = '<div id="tcc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chktcc" onchange="update_TDS_CONCERN(76,' + TDS_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="tcc_1" style="display:none">' + d + '</div>';
					}
					if (key.tp == null) {
						tp = '<div id="tpc" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chktpc" onchange="update_TDS_CONCERN(77,' + TDS_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="tpc_1" style="display:none"> ' + d + '</div>';
					}
					if (key.rf == null) {
						rf = '<div id="rfc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkrfc" onchange="update_TDS_CONCERN(78,' + TDS_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> 										<span class="switch-handle"></span> </label></div> <div id="rfc_1" style="display:none"> ' + d + '</div>';
					}
					if (key.FC == null) {
						FC = '<div id="FCc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCc" onchange="update_TDS_CONCERN(70,' + TDS_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="FCc_1" style="display:none"> ' + d + '</div>';
					}

					$('#tbltdsC tbody').append('<tr><td style="text-align:center">' + P_name + '</td><td style="text-align:center">' + category + '</td><td style="text-align:center">' + tc + '</td><td style="text-align:center">' + tp + '</td><td style="text-align:center">' + rf + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td></tr>');

					sno++;

					//console.log(key[0].countBR);
				});
			}
		});
	}



	function update_INDIVIDUAL(id, customerID) {
		var divId = "";
		if (id == 73) {
			divId = "dri";
		}
		if (id == 74) {
			divId = "fieldi";
		}
		if (id == 75) {
			divId = "cpci";
		}
		if (id == 70) {
			divId = "FCi";
		}




		swal({
				title: "",
				text: "Make sure you want to submit this process.",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Ok",
				cancelButtonText: "Cancel",

				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm) {
				if (isConfirm) {
					$("#" + divId).css("display", "none");
					$("#" + divId + "_1").css("display", "inline");
					$.ajax({
						url: 'updateCustomerProcess',
						data: {
							companyId: customerID,
							tagID: id,
							month: 1,
							year: $('#drpITIndividualYear').val()
						},
						success: function(data) {
							//alert(data);
							console.log(data);
							swal("Completed!", "Successfully Completed...!", "success");
						},
						error: function(data) {
							alert('error');
						}
						//alert(id);
					})
				} else {
					$("#chk" + divId).attr('checked', false);
					//alert();
					swal("Cancelled", "Until Process is going on...!", "error");
				}
			}
		);


	}

	function update_TDS_INDIVIDUAL(id, customerID) {
		var divId = "";
		if (id == 76) {
			divId = "tci";
		}
		if (id == 77) {
			divId = "tpi";
		}
		if (id == 78) {
			divId = "rfi";
		}
		if (id == 70) {
			divId = "FCi";
		}



		swal({
				title: "",
				text: "Make sure you want to submit this process.",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Ok",
				cancelButtonText: "Cancel",

				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm) {
				if (isConfirm) {
					$("#" + divId).css("display", "none");
					$("#" + divId + "_1").css("display", "inline");
					$.ajax({
						url: 'updateCustomerProcess',
						data: {
							companyId: customerID,
							tagID: id,
							month: $('#drpTDSIMonth').val(),
							year: $('#drpTDSIYear').val()
						},
						success: function(data) {
							//alert(data);
							swal("Completed!", "Successfully Completed...!", "success");
						},
						error: function(data) {
							alert('error');
						}
						//alert(id);
					})
				} else {
					$("#chk" + divId).attr('checked', false);
					//alert();
					swal("Cancelled", "Until Process is going on...!", "error");
				}
			}
		);


	}

	function update_TDS_CONCERN(id, customerID) {
		var divId = "";
		if (id == 76) {
			divId = "tcc";
		}
		if (id == 77) {
			divId = "tpc";
		}
		if (id == 78) {
			divId = "rfc";
		}
		if (id == 70) {
			divId = "FCc";
		}



		swal({
				title: "",
				text: "Make sure you want to submit this process.",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Ok",
				cancelButtonText: "Cancel",

				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm) {
				if (isConfirm) {
					$("#" + divId).css("display", "none");
					$("#" + divId + "_1").css("display", "inline");
					$.ajax({
						url: 'updateCustomerProcess',
						data: {
							companyId: customerID,
							tagID: id,
							month: $('#drpTDSCMonth').val(),
							year: $('#drpTDSCYear').val()
						},
						success: function(data) {
							//alert(data);
							swal("Completed!", "Successfully Completed...!", "success");
						},
						error: function(data) {
							alert('error');
						}
						//alert(id);
					})
				} else {
					$("#chk" + divId).attr('checked', false);
					//alert();
					swal("Cancelled", "Until Process is going on...!", "error");
				}
			}
		);


	}

	function update_CONCERN(id, customerID) {
		var divId = "";
		if (id == 73) {
			divId = "drc";
		}
		if (id == 74) {
			divId = "fieldc";
		}
		if (id == 75) {
			divId = "cpcc";
		}
		if (id == 70) {
			divId = "FCitc";
		}




		swal({
				title: "",
				text: "Make sure you want to submit this process.",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Ok",
				cancelButtonText: "Cancel",

				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm) {
				if (isConfirm) {
					$("#" + divId).css("display", "none");
					$("#" + divId + "_1").css("display", "inline");
					$.ajax({
						url: 'updateCustomerProcess',
						data: {
							companyId: customerID,
							tagID: id,
							month: 1,
							year: $('#drpITConcernYear').val()
						},
						success: function(data) {
							//alert(data);
							swal("Completed!", "Successfully Completed...!", "success");
						},
						error: function(data) {
							alert('error');
						}
						//alert(id);
					})
				} else {
					$("#chk" + divId).attr('checked', false);
					//alert();
					swal("Cancelled", "Until Process is going on...!", "error");
				}
			}
		);


	}


	/*** IT-INDIVIDUAL  ***/






	/**  **/

	$("#companyname").autocomplete({
		source: listGSTRegular,
		minLength: 1,
		select: function(event, ui) {
			value = ui.item.id;
			regularid = ui.item.id;
			//document.getElementById("hdnRegularCompanyID").value = "Johnny Bravo";
			//$('#hdnRegularCompanyID').val(data);
			// document.getElementById('hdnRegularCompanyID').value(ui.item.id);
			// $('#hdnRegularCompanyID').val(ui.item.id);
			$.ajax({
				url: 'get_company_details',
				data: {
					companyId: ui.item.id,
					hdnTax: 7,
					month: $('#drpRegularMonth').val(),
					year: $('#drpRegularYear').val()
				},
				success: function(data) {
					$('#tblgstregular tbody').empty();
					var sno = 1;
					console.log(data);
					$.each(data, function(i, key) {
						//alert(sno);
						//console.log(key.GSTR3);
						var BR = key.Br;
						var TA = key.Ta;
						var GSTR3B = key.GSTR3B;
						var GSTR1 = key.GSTR1;
						var GSTR2 = key.GSTR2;
						var GSTR3 = key.GSTR3;
						var FC = key.FC;

						var BRLabel = "success";
						var TALabel = "success";
						var GSTR3BLabel = "success";
						var GSTR1Label = "success";
						var GSTR2Label = "success";
						var GSTR3Label = "success";
						var FCLabel = "success";



						if (key.Br == null) {
							BR = '<div id="br" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkbr" onchange="changevalue1(63,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="br_1" style="display:none">' + d + '</div>';
						}
						if (key.Ta == null) {
							TA = '<div id="ta" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chkta" onchange="changevalue1(64,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="ta_1" style="display:none"> ' + d + '</div>';
						}
						if (key.GSTR3B == null) {
							GSTR3B = '<div id="gstr3b" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkgstr3b" onchange="changevalue1(65,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> 										<span class="switch-handle"></span> </label></div> <div id="gstr3b_1" style="display:none"> ' + d + '</div>';
						}
						if (key.GSTR1 == null) {
							GSTR1 = '<div id="gstr" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkgstr" onchange="changevalue1(66,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="gstr_1" style="display:none"> ' + d + '</div>';
						}
						if (key.GSTR2 == null) {
							GSTR2 = '<div id="GSTR2" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(67,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR2_1" style="display:none"> ' + d + '</div>';
						}
						if (key.GSTR3 == null) {
							GSTR3 = '<div id="GSTR3" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR3" onchange="changevalue1(68,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR3_1" style="display:none"> ' + d + '</div>';
						}
						if (key.FC == null) {
							FC = '<div id="FC" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFC" onchange="changevalue1(70,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="FC_1" style="display:none"> ' + d + '</div>';
						}

						$('#tblgstregular tbody').append('<tr><td style="text-align:center">' + key.P_name + '</td><td style="text-align:center">' + key.Status_Name + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR3B + '</td><td style="text-align:center">' + GSTR1 + '</td><td style="text-align:center">' + GSTR2 + '</td><td style="text-align:center">' + GSTR3 + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td></tr>');

						sno++;

						//                        
						//                        
						//                        if (key.Br == null) {
						//                            BR = "Pending";
						//                            BRLabel = "warning";
						//                        }
						//                        if (key.Ta == null) {
						//                            TA = "Pending";
						//                            TALabel = "warning";
						//                        }
						//                        if (key.GSTR3B == null) {
						//                            GSTR3B = "Pending";
						//                            GSTR3BLabel = "warning";
						//                        }
						//                        if (key.GSTR1 == null) {
						//                            GSTR1 = "Pending";
						//                            GSTR1Label = "warning";
						//                        }
						//                        if (key.GSTR2 == null) {
						//                            GSTR2 = "Pending";
						//                            GSTR2Label = "warning";
						//                        }
						//                        if (key.GSTR3 == null) {
						//                            GSTR3 = "Pending";
						//                            GSTR3Label = "warning";
						//                        }
						//                        if (key.FC == null) {
						//                            FC = "Pending";
						//                            FCLabel = "warning";
						//                        }                   


						//$('#tblgstregular tbody').append('<tr><td  style="text-align:center"><b>' + sno + '</b></td><td  style="text-align:left"><b>' + key.Company_Name + '</b></td><td  style="text-align:center"><div class="label label-' + BRLabel + '">' + BR + '</div></td><td style="text-align:center"><div class="label label-' + TALabel + '">' + TA + '</td><td  style="text-align:center"><div class="label label-' + GSTR3BLabel + '">' + GSTR3B + '</div></td><td style="text-align:center"><div class="label label-' + GSTR1Label + '">' + GSTR1 + '</div></td><td style="text-align:center"><div class="label label-' + GSTR2Label + '">' + GSTR2 + '</div></td><td style="text-align:center"><div class="label label-' + GSTR3Label + '">' + GSTR3 + '</div></td><td style="text-align:center"><div class="label label-' + FCLabel + '">' + FC + '</div></td></tr>');
						// sno++;


						//console.log(key[0].countBR);
					});
				},
				error: function(data) {
					console.log(data);
				}

			});
		},
		change: function(event, ui) {
			if (ui.item === null) {
				$(this).val('');
			}
		},
	});

	function changevalue1(id, companyID) {
		var divId = "";
		if (id == 63) {
			divId = "br";
		}
		if (id == 64) {
			divId = "ta";
		}
		if (id == 65) {
			divId = "gstr3b";
		}
		if (id == 66) {
			divId = "gstr";
		}
		if (id == 67) {
			divId = "GSTR2";
		}
		if (id == 68) {
			divId = "GSTR3";
		}
		if (id == 69) {
			divId = "GSTR4";
		}
		if (id == 70) {
			divId = "FC";
		}



		swal({
				title: "",
				text: "Make sure you want to submit this process.",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Ok",
				cancelButtonText: "Cancel",

				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm) {
				if (isConfirm) {
					$("#" + divId).css("display", "none");
					$("#" + divId + "_1").css("display", "inline");
					$.ajax({
						url: 'updateCompanyProcess',
						data: {
							companyId: companyID,
							tagID: id,
							month: $('#drpRegularMonth').val(),
							year: $('#drpRegularYear').val(),
							type: 7
						},
						success: function(data) {
							console.log(data);
							swal("Completed!", "Successfully Completed...!", "success");
						},
						error: function(data) {
							alert('error');
						}
						//alert(id);
					})
				} else {
					$("#chk" + divId).attr('checked', false);
					//alert();
					swal("Cancelled", "Until Process is going on...!", "error");
				}
			}
		);


	}

	function changevalue2(id, companyID) {
		var divId = "";
		if (id == 63) {
			divId = "brc";
		}
		if (id == 64) {
			divId = "tac";
		}

		if (id == 69) {
			divId = "GSTR4c";
		}
		if (id == 70) {
			divId = "FCcc";
		}
		if (id == 67) {
			divId = "GSTR2c";
		}
		if (id == 68) {
			divId = "GSTR3c";
		}




		swal({
				title: "",
				text: "Make sure you want to submit this process.",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Ok",
				cancelButtonText: "Cancel",

				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm) {
				if (isConfirm) {

					$.ajax({
						url: 'updateCompanyProcess',
						data: {
							companyId: companyID,
							tagID: id,
							month: $('#drpCompountingMonth').val(),
							year: $('#drpCompountingYear').val(),
							type: 8
						},
						success: function(data) {
							//alert(data);
							console.log(data);
							$("#" + divId).css("display", "none");
							$("#" + divId + "_1").css("display", "inline");
							swal("Completed!", "Successfully Completed...!", "success");
						},
						error: function(data) {
							alert('error');
						}
						//alert(id);
					})
				} else {
					$("#chk" + divId).attr('checked', false);
					//alert();
					swal("Cancelled", "Until Process is going on...!", "error");
				}
			}
		);


	}


	$("#companyname1").autocomplete({
		source: listGSTCompounding,
		minLength: 1,
		select: function(event, ui) {
			value = ui.item.id;
			compoundingId = ui.item.id;
			$('#hdnCompoundingCompanyID').val(ui.item.id);
			$.ajax({
				url: 'get_company_details',
				data: {
					companyId: ui.item.id,
					hdnTax: 8,
					month: $('#drpCompountingMonth').val(),
					year: $('#drpCompountingYear').val()
				},
				success: function(data) {
					console.log(data);
					$('#tblgstCompounding').empty();
					var sno = 1;
					$.each(data, function(i, key) {
						//alert(sno);
						//console.log(key.GSTR4);






						var a = '';
						//  $('#tblgstCompounding thead').append('<thead><th rowspan="2">S.No</th><th rowspan="2">Bill Received</th><th rowspan="2">Tally Accounted</th><th colspan="2"> Fees Collection</th></thead>');
						var BR = key.Br;
						var TA = key.Ta;
						var GSTR3B = key.GSTR3B;
						var GSTR1 = key.GSTR1;
						var GSTR2 = key.GSTR2;
						var GSTR3 = key.GSTR3;
						var GSTR4 = key.GSTR4;
						var FC = key.FC;


						if (key.Br == null) {
							BR = '<div id="brc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkbrc" onchange="changevalue2(63,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="brc_1" style="display:none">' + d + '</div>';
						}
						if (key.Ta == null) {
							TA = '<div id="tac" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chktac" onchange="changevalue2(64,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="tac_1" style="display:none"> ' + d + '</div>';
						}
						if (key.GSTR2 == null) {
							GSTR2 = '<div id="GSTR2c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2c" onchange="changevalue2(67,' + compoundingId + ')"/>		<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR2c_1" style="display:none"> ' + d + '</div>';
						}
						if (key.GSTR3 == null) {
							GSTR3 = '<div id="GSTR3c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR3c" onchange="changevalue2(68,' + compoundingId + ')"/>		<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR3c_1" style="display:none"> ' + d + '</div>';
						}

						if (key.GSTR4 == null) {
							GSTR4 = '<div id="GSTR4c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR4c" onchange="changevalue2(69,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR4c_1" style="display:none"> ' + d + '</div>';
						}
						if (key.FC == null) {
							FC = '<div id="FCcc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCcc" onchange="changevalue2(70,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="FCcc_1" style="display:none"> ' + d + '</div>';
						}


						var n = $('#drpCompountingMonth').val() / 3;
						if (n == 1 || n == 2 || n == 3 || n == 4) {
							$('#tblgstCompounding').append('<thead><tr><th rowspan="2">Name</th><th rowspan="2">Category</th><th rowspan="2">Bill Received</th><th rowspan="2">Tally Accounted</th><th rowspan="2">Bank A/C</th><th rowspan="2">EXP A/C</th><th colspan="2"> Fees Collection</th><th rowspan="2">GSTR 4</th></tr><tr><th style="text-align:center">Fee</th> <th style="text-align:center">Collected</th></tr></thead><tbody><tr><td style="text-align:center">' + key.P_name + '</td><td style="text-align:center">' + key.Status_Name + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR2 + '</td><td style="text-align:center">' + GSTR3 + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td><td style="text-align:center">' + GSTR4 + '</td></tr></tbody>');
						} else {
							$('#tblgstCompounding').append('<thead><tr><th rowspan="2">Name</th><th rowspan="2">Category</th><th rowspan="2">Bill Received</th><th rowspan="2">Tally Accounted</th><th rowspan="2">Bank A/C</th><th rowspan="2">EXP A/C</th><th colspan="2"> Fees Collection</th></tr><tr><th style="text-align:center">Fee</th>  <th style="text-align:center">Collected</th></tr></thead><tbody><tr><td style="text-align:center">' + key.P_name + '</td><td style="text-align:center">' + key.Status_Name + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR2 + '</td><td style="text-align:center">' + GSTR3 + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td></tr></tbody>');
						}
						sno++;





						//

						//                        if (key.Br == null) {
						//                            BR = "Pending";
						//                            BRLabel = "warning";
						//                        }
						//                        if (key.Ta == null) {
						//                            TA = "Pending";
						//                            TALabel = "warning";
						//                        }
						//                        if (key.GSTR4 == null) {
						//                            GSTR4 = "Pending";
						//                            GSTR4Label = "warning";
						//                        }
						//                        if (key.GSTR1 == null) {
						//                            GSTR1 = "Pending";
						//                            GSTR1Label = "warning";
						//                        }
						//                        if (key.GSTR2 == null) {
						//                            GSTR2 = "Pending";
						//                            GSTR2Label = "warning";
						//                        }
						//                        if (key.GSTR3 == null) {
						//                            GSTR3 = "Pending";
						//                            GSTR3Label = "warning";
						//                        }
						//                        if (key.FC == null) {
						//                            FC = "Pending";
						//                            FCLabel = "warning";
						//                        }
						//
						//
						//
						//$('#tblgstCompounding tbody').append('<tr><td  style="text-align:center"><b>' + sno + '</b></td><td  style="text-align:left"><b>' + key.Company_Name + '</b></td><td  style="text-align:center"><div class="label label-' + BRLabel + '">' + BR + '</div></td><td style="text-align:center"><div class="label label-' + TALabel + '">' + TA + '</td><td  style="text-align:center"><div class="label label-' + GSTR4Label + '">' + GSTR4 + '</div></td><td style="text-align:center"><div class="label label-' + FCLabel + '">' + FC + '</div></td></tr>');
						//                        sno++;

						//console.log(key[0].countBR);
					});
				}
			});
		},
		change: function(event, ui) {
			if (ui.item === null) {
				$(this).val('');
			}
		},
	});

	function changeGSTRegular() {

		$.ajax({
			url: 'get_company_details',
			data: {
				companyId: regularid,
				hdnTax: 7,
				month: $('#drpRegularMonth').val(),
				year: $('#drpRegularYear').val()
			},
			success: function(data) {
				$('#tblgstregular tbody').empty();
				var sno = 1;
				console.log(data);
				$.each(data, function(i, key) {
					//alert(sno);

					var BR = key.Br;
					var TA = key.Ta;
					var GSTR3B = key.GSTR3B;
					var GSTR1 = key.GSTR1;
					var GSTR2 = key.GSTR2;
					var GSTR3 = key.GSTR3;
					var FC = key.FC;

					var BRLabel = "success";
					var TALabel = "success";
					var GSTR3BLabel = "success";
					var GSTR1Label = "success";
					var GSTR2Label = "success";
					var GSTR3Label = "success";
					var FCLabel = "success";



					if (key.Br == null) {
						BR = '<div id="br" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(63,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="br_1" style="display:none">' + d + '</div>';
					}
					if (key.Ta == null) {
						TA = '<div id="ta" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(64,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="ta_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR3B == null) {
						GSTR3B = '<div id="gstr3b" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(65,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> 										<span class="switch-handle"></span> </label></div> <div id="gstr3b_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR1 == null) {
						GSTR1 = '<div id="gstr" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(66,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="gstr_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR2 == null) {
						GSTR2 = '<div id="GSTR2" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(67,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR2_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR3 == null) {
						GSTR3 = '<div id="GSTR3" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(68,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR3_1" style="display:none"> ' + d + '</div>';
					}
					if (key.FC == null) {
						FC = '<div id="FC" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(70,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="FC_1" style="display:none"> ' + d + '</div>';
					}

					$('#tblgstregular tbody').append('<tr><td style="text-align:center">' + key.P_name + '</td><td style="text-align:center">' + key.Status_Name + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR3B + '</td><td style="text-align:center">' + GSTR1 + '</td><td style="text-align:center">' + GSTR2 + '</td><td style="text-align:center">' + GSTR3 + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td></tr>');

					sno++;

					//console.log(key[0].countBR);
				});
			},
			error: function(data) {
				console.log(data);
			}
		});

	}


	function changeGSTCompounding() {

		$.ajax({
			url: 'get_company_details',
			data: {
				companyId: compoundingId,
				hdnTax: 8,
				month: $('#drpCompountingMonth').val(),
				year: $('#drpCompountingYear').val()
			},
			success: function(data) {
				console.log(data);
				$('#tblgstCompounding').empty();
				var sno = 1;
				$.each(data, function(i, key) {
					//alert(sno);
					//console.log(key.GSTR3);
					var BR = key.Br;
					var TA = key.Ta;
					var GSTR3B = key.GSTR3B;
					var GSTR1 = key.GSTR1;
					var GSTR2 = key.GSTR2;
					var GSTR3 = key.GSTR3;
					var GSTR4 = key.GSTR4;
					var FC = key.FC;
					//var P_name = key.P_name;

					var BRLabel = "success";
					var TALabel = "success";
					var GSTR4Label = "success";
					var GSTR1Label = "success";
					var GSTR2Label = "success";
					var GSTR3Label = "success";
					var FCLabel = "success";



					if (key.Br == null) {
						BR = '<div id="brc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkbrc" onchange="changevalue2(63,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="brc_1" style="display:none">' + d + '</div>';
					}
					if (key.Ta == null) {
						TA = '<div id="tac" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chktac" onchange="changevalue2(64,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label> </div> <div id="tac_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR3B == null) {
						GSTR3B = '<div id="gstr3b" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue2(65,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> 										<span class="switch-handle"></span> </label></div> <div id="gstr3b_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR1 == null) {
						GSTR1 = '<div id="gstr" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue2(66,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="gstr_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR2 == null) {
						GSTR2 = '<div id="GSTR2c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2c" onchange="changevalue2(67,' + compoundingId + ')"/>		<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR2c_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR3 == null) {
						GSTR3 = '<div id="GSTR3c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR3" onchange="changevalue2(68,' + compoundingId + ')"/>		<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR3c_1" style="display:none"> ' + d + '</div>';
					}

					if (key.GSTR4 == null) {
						GSTR4 = '<div id="GSTR4c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR4c" onchange="changevalue2(69,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR4c_1" style="display:none"> ' + d + '</div>';
					}
					if (key.FC == null) {
						FC = '<div id="FCcc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCcc" onchange="changevalue2(70,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label></div> <div id="FCcc_1" style="display:none"> ' + d + '</div>';
					}

					//$('#tblgstCompounding tbody').append('<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR4 + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td></tr>');
					var n = $('#drpCompountingMonth').val() / 3;
					if (n == 1 || n == 2 || n == 3 || n == 4) {
						$('#tblgstCompounding').append('<thead><tr><th rowspan="2">Category</th><th rowspan="2">Name</th><th rowspan="2">Bill Received</th><th rowspan="2">Tally Accounted</th><th rowspan="2">Bank A/C</th><th rowspan="2">EXP A/C</th> <th colspan="2"> Fees Collection</th><th rowspan="2">GSTR 4</th></tr><tr><th style="text-align:center">Fee</th> <th style="text-align:center">Collected</th></tr></thead><tbody><tr><td style="text-align:center">' + key.Status_Name + '</td><td style="text-align:center">' + key.P_name + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR2 + '</td><td style="text-align:center">' + GSTR3 + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td><td style="text-align:center">' + GSTR4 + '</td></tr></tbody>');
					} else {
						$('#tblgstCompounding').append('<thead><tr><th rowspan="2">Category</th><th rowspan="2">Name</th><th rowspan="2">Bill Received</th><th rowspan="2">Tally Accounted</th><th rowspan="2">Bank A/C</th><th rowspan="2">EXP A/C</th><th colspan="2"> Fees Collection</th></tr><tr><th style="text-align:center">Fee</th>  <th style="text-align:center">Collected</th></tr></thead><tbody><tr><td style="text-align:center">' + key.Status_Name + '</td><td style="text-align:center">' + key.P_name + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR2 + '</td><td style="text-align:center">' + GSTR3 + '</td><td style="text-align:center">' + key.Actual_Fee + '</td><td style="text-align:center">' + FC + '</td></tr></tbody>');
					}
					sno++;
				});
			}
		});

	}

</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>