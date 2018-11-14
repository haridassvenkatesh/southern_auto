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
                                                    <option value="<?=($month['month'])?>" <?php if(($month['month']) ==( date('m') - 1)) echo "selected"; ?> >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } else { ?> 
                                                    <option value="<?=($month['month'])?>" selected >
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
                                                    <option value="<?=($month['month'])?>" <?php if(($month['month']) ==( date('m') - 1)) echo "selected"; ?> >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } else { ?> 
                                                    <option value="<?=($month['month'])?>" selected >
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
                                                    <option value="<?=($month['month'])?>" <?php if(($month['month']) ==( date('m') - 1)) echo "selected"; ?> >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } else { ?> 
                                                    <option value="<?=($month['month'])?>" selected >
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
                                                    <option value="<?=($month['month'])?>" <?php if(($month['month']) ==( date('m') - 1)) echo "selected"; ?> >
                                                    <?= $month['monthName']  ?>  
                                                    </option>
                                                    <?php } else { ?> 
                                                    <option value="<?=($month['month'])?>" selected >
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
						cpc = '<div id="cpcc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkcpcc" onchange="update_CONCERN(75,' + IT_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"></span> 										<span class="switch-handle"></s
<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>