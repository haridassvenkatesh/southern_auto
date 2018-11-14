 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<div class="container-fluid">
	<div class="row-fluid">

		<div class="span12" id="content" ng-app="company_view_app" ng-controller="company_view_controller">

			<div class="row-fluid">
				<div class="block-content collapse in">

					<div class="row-fluid">
						<!-- block -->
						<div class="block" style="background-image: linear-gradient(to bottom, #999cff, #999cff)!important;">
							<div class="navbar navbar-inner block-header" style="background-image: linear-gradient(to bottom,#0014ff, #0014ff)!important;">
								<center>
									<div class="muted pull-center">
										<h4>GST REGULAR</h4>
									</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3">
										<!--
                                        <label class="control-label" for="company_name">Status </label>
                                        <div class="control-group">
                                            <div class="controls">
                                                <select id="drpStatus" onchange="changeGst(7)">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
                                            </div>
                                        </div>
-->
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Month</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpRegularMonth" onchange="changeGst(7)">
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
												<select id="drpRegularYear" onchange="changeGst(7)">
                                                    
                                                   <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1; ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?> > <?php echo date('Y')-1;echo "-";echo date('Y');?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1; ?> </option>
                                                    
                                                </select>
											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Status </label>
										<div class="control-group">
											<div class="controls">
												<select id="drpStatus" onchange="changeGst(7)">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tblgstregular">
										<thead>
											<tr>
												<th style="text-align: center;">S.No</th>
												<th style="text-align: center;">Employee</th>
												<th style="text-align: center;">Total Company</th>
												<th style="text-align: center;">Bill Received</th>
												<th style="text-align: center;">Tally Accounted</th>
												<th style="text-align: center;">GSTR 3B</th>
												<th style="text-align: center;">GSTR 1</th>
												<th style="text-align: center;">Bank A/C</th>
												<th style="text-align: center;">EXP A/C</th>
												<th style="text-align: center;">Collected Fee</th>
												<th style="text-align: center;">Fees Collection</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                            
                                                $totalCompany =0;
                                                $totalBR =0;
                                                $totalTA =0;
                                                $totalGSTR3B =0;
                                                $totalGSTR1 =0;
                                                $totalGSTR2 =0;
                                                $totalGSTR3 =0;
                                                $totalFA =0;
 $totalamt =0;
                                            
                                            ?>
												<?php $sno = 1;  if(!empty($data['gstRegularDetails'])) { ?> <?php $__currentLoopData = $data['gstRegularDetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__currentLoopData = $r; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<?php
											$countBR = $row->countBR;
											$countTA = $row->countTA;
											$countGSTR3B = $row->countGSTR3B;
											$countGSTR1 = $row->countGSTR1;
											$countGSTR2 = $row->countGSTR2;
											$countGSTR3 = $row->countGSTR3;
											$countFC = $row->countFC;
											$ctotalamt = $row->cFC;
	
											if($countBR == '')										
												$countBR = 0;
											if($countTA == '')										
												$countTA = 0;
											if($countGSTR3B == '')										
												$countGSTR3B = 0;
											if($countGSTR1 == '')										
												$countGSTR1 = 0;
											if($countGSTR2 == '')										
												$countGSTR2 = 0;
											if($countGSTR3 == '')										
												$countGSTR3 = 0;
											if($countFC == '')										
												$countFC = 0;
											if($row->cFC == '')
												$ctotalamt = 0;
											
	
											$totalCompany = $totalCompany  + $row->countCompany;
                                            $totalBR = $totalBR + $countBR; 
                                            $totalTA = $totalTA + $countTA;
                                            $totalGSTR3B = $totalGSTR3B + $countGSTR3B;
                                            $totalGSTR1 = $totalGSTR1 + $countGSTR1;
                                            $totalGSTR2 = $totalGSTR2 + $countGSTR2;
                                            $totalGSTR3 = $totalGSTR3 + $countGSTR3;
                                            $totalFA = $totalFA + $countFC;
                                            $totalamt = $totalamt + $ctotalamt;
	
	
	
	
	
							
												?>
													<tr>
														<td><b><?= $sno ?> </b></td>
														<td><b><?= $row->varName ?> </b></td>
														<td style="text-align:center">
															<?= $row->countCompany ?>
														</td>

														<td style="text-align:center">
															<?= $countBR ?>
														</td>
														<td style="text-align:center">
															<?= $countTA ?>
														</td>
														<td style="text-align:center">
															<?= $countGSTR3B ?>
														</td>
														<td style="text-align:center">
															<?= $countGSTR1 ?>
														</td>
														<td style="text-align:center">
															<?= $countGSTR2 ?>
														</td>
														<td style="text-align:center">
															<?= $countGSTR3 ?>
														</td>
														<td style="text-align:center">
															<?= $ctotalamt ?>
														</td>
														<td style="text-align:center">
															<?= $countFC ?>
														</td>


														<!--
												<td>
													<a onclick="showAjaxModal1('BR List','get_dashboard_gst_regular','63',<?= $row->empId ?>)">
														<?= $row->countBR ?>
													</a>
												</td>
												<td>
													<a onclick="showAjaxModal1('TA List','get_dashboard_gst_regular','64',<?= $row->empId ?>)">
														<?= $row->countTA ?>
													</a>
												</td>

												<td>
													<a onclick="showAjaxModal1('GSTR3B List','get_dashboard_gst_regular','65',<?= $row->empId ?>)">
														<?= $row->countGSTR3B ?>
													</a>
												</td>
												<td>
													<a onclick="showAjaxModal1('GSTR 1 List','get_dashboard_gst_regular','66',<?= $row->empId ?>)">
														<?= $row->countGSTR1 ?>
													</a>
												</td>
												<td>
													<a onclick="showAjaxModal1('GSTR 2 List','get_dashboard_gst_regular','67',<?= $row->empId ?>)">
														<?= $row->countGSTR2 ?>
													</a>
												</td>
												<td>
													<a onclick="showAjaxModal1('GSTR 3 List','get_dashboard_gst_regular','68',<?= $row->empId ?>)">
														<?= $row->countGSTR3 ?>
													</a>
												</td>
												<td>
													<a onclick="showAjaxModal1('Fee Collection List','get_dashboard_gst_regular','70',<?= $row->empId ?>)">
														<?= $row->countFC ?>
													</a>
												</td>
-->

													</tr>

													<?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php } ?>
										</tbody>
										<tfoot style="background: #e6e3e3;">
											<tr>
												<td colspan="2" style="text-align:center"><b>TOTAL</b></td>
												<td style="text-align:center">
													<b><?= $totalCompany ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalBR ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalTA ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalGSTR3B ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalGSTR1 ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalGSTR2 ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalGSTR3 ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalamt ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalFA ?></b>
												</td>
											</tr>

										</tfoot>
									</table>



								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<!-- block -->
						<div class="block" style="background-image: linear-gradient(to bottom, #fbacea,#fbacea)!important;">
							<div class="navbar navbar-inner block-header" style="background-image: linear-gradient(to bottom,#df69bb,#df69bb)!important;
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
										<!--
                                        <label class="control-label" for="company_name">Status </label>
                                        <div class="control-group">
                                            <div class="controls">
                                                <select id="drpStatus1" onchange="changeGst(7)">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
                                            </div>
                                        </div>
-->
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Month</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpCompountingMonth" onchange="changeGst(8)">
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
												<select id="drpCompountingYear" onchange="changeGst(8)">
                                                     <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1; ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?> > <?php echo date('Y')-1;echo "-";echo date('Y'); ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1; ?> </option>
                                                </select>
											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Status </label>
										<div class="control-group">
											<div class="controls">
												<select id="drpStatus1" onchange="changeGst(8)">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tblgstCompounding">
										<thead>
											<tr>
												<th style="text-align: center;">S.No</th>
												<th style="text-align: center;">Employee</th>
												<th style="text-align: center;">Total Company</th>
												<th style="text-align: center;">Bill Received</th>
												<th style="text-align: center;">Tally Accounted</th>
												<th style="text-align: center;">Bank A/C</th>
												<th style="text-align: center;">EXP A/C</th>
												<th style="text-align: center;">Collected Fee</th>
												<th style="text-align: center;">Fees Collection</th>
												<?php if((date('m') - 1) == 0 || (date('m') - 1) == 3 || (date('m') - 1) == 6 || (date('m') - 1) == 9) { ?>
												<th style="text-align: center;">GSTR 4</th>
												<?php } ?>
											</tr>
										</thead>
										<tbody>
											<?php
                                            
                                                $totalCompany =0;
                                                $totalBR =0;
                                                $totalTA =0;
                                                $totalGSTR3B =0;
                                                $totalGSTR1 =0;
                                                $totalGSTR2 =0;
                                                $totalGSTR3 =0;
                                                $totalGSTR4 =0;
                                                $totalFA =0;
												$totalamt =0;
                                            ?>


												<?php $sno = 1; if(!empty($data['gstCompoundingDetails'])) { ?> <?php $__currentLoopData = $data['gstCompoundingDetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__currentLoopData = $r; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<?php
											$countBR = $row->countBR;
											$countTA = $row->countTA;											
											$countGSTR2 = $row->countGSTR2;
											$countGSTR3 = $row->countGSTR3;
											$countGSTR4 = $row->countGSTR4;
											$countFC = $row->countFC;
											$ctotalamt = $row->cFC;
	
											if($countBR == '')										
												$countBR = 0;
											if($countTA == '')										
												$countTA = 0;
                                            if($countGSTR2 == '')										
												$countGSTR2 = 0;
                                            if($countGSTR3 == '')										
												$countGSTR3 = 0;
											if($countGSTR4 == '')										
												$countGSTR4 = 0;
											if($countFC == '')										
												$countFC = 0;
                                            if($row->cFC == '')
												$ctotalamt = 0;
	
                                            $totalCompany = $totalCompany  + $row->countCompany;
                                            $totalBR = $totalBR + $countBR; 
                                            $totalTA = $totalTA + $countTA;
                                            $totalGSTR3B = $totalGSTR3B + $countGSTR3B;
                                            //$totalGSTR1 = $totalGSTR1 + $countGSTR1;
                                            $totalGSTR2 = $totalGSTR2 + $countGSTR2;
                                            $totalGSTR3 = $totalGSTR3 + $countGSTR3;
                                            $totalGSTR4 = $totalGSTR4 + $countGSTR4;
                                            $totalFA = $totalFA + $countFC;
											$totalamt = $totalamt + $ctotalamt;
											
												?>
													<tr>
														<td><b><?= $sno ?> </b></td>
														<td><b><?= $row->varName ?> </b></td>
														<td style="text-align:center">
															<?= $row->countCompany ?>
														</td>
														<td style="text-align:center">
															<?= $countBR ?>
														</td>
														<td style="text-align:center">
															<?= $countTA ?>
														</td>
														<td style="text-align:center">
															<?= $countGSTR2 ?>
														</td>
														<td style="text-align:center">
															<?= $countGSTR3 ?>
														</td>
														<td style="text-align:center">
															<?= $ctotalamt ?>
														</td>
														<td style="text-align:center">
															<?= $countFC ?>
														</td>
														<?php if((date('m') - 1) == 0 || (date('m') - 1) == 3 || (date('m') - 1) == 6 || (date('m') - 1) == 9) { ?>
														<td style="text-align:center">
															<?= $countGSTR4 ?>
														</td>

														<?php } ?>

														<!--
													<td>
														<a onclick="showAjaxModal1('BR List','get_dashboard_gst_regular','63',<?= $row->empId ?>)">
															<?= $row->countBR ?>
														</a>
													</td>
													<td>
														<a onclick="showAjaxModal1('TA List','get_dashboard_gst_regular','64',<?= $row->empId ?>)">
															<?= $row->countTA ?>
														</a>
													</td>


													<td>
														<a onclick="showAjaxModal1('GSTR 3 List','get_dashboard_gst_regular','68',<?= $row->empId ?>)">
															<?= $row->countGSTR4 ?>
														</a>
													</td>
													<td>
														<a onclick="showAjaxModal1('Fee Collection List','get_dashboard_gst_regular','70',<?= $row->empId ?>)">
															<?= $row->countFC ?>
														</a>
													</td>
-->

													</tr>

													<?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php } ?>
										</tbody>
										<tfoot style="background: #e6e3e3;">
											<tr>
												<td colspan="2" style="text-align:center"><b>TOTAL</b></td>
												<td style="text-align:center">
													<b><?= $totalCompany ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalBR ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalTA ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalGSTR2 ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalGSTR3 ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalamt ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalFA ?></b>
												</td>
												<?php if((date('m') - 1) == 0 || (date('m') - 1) == 3 ||(date('m') - 1) == 6 || (date('m') - 1) == 9) { ?>
												<td style="text-align:center">
													<b><?= $totalGSTR4 ?></b>
												</td>
												<?php } ?>
											</tr>

										</tfoot>

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
									<div class="muted pull-center">IT INDIVIDUAL</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3"></div>
									<div class="span3">
										<label class="control-label" for="company_name">Financial Year</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpITIndividualMonth" onchange="changeIT(60)">
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
									<div class="span3">
										<label class="control-label" for="company_name">Status</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpITIndividualStatus" onchange="changeIT(60)">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tblITIndividual">
										<thead>
											<tr>
												<th style="text-align: center;">S.No</th>
												<th style="text-align: center;">Employee</th>
												<th style="text-align: center;">Total Customer</th>
												<th style="text-align: center;">D/R</th>
												<th style="text-align: center;">FILED</th>
												<th style="text-align: center;">CPC</th>
												<th style="text-align: center;">Collected Fee</th>
												<th style="text-align: center;">Fees Collection</th>
											</tr>
										</thead>
										<tbody>
											<?php
											
                                                $totalCompany =0;
                                                $totalDR =0;
                                                $totalFIELD =0;
                                                $totalCPC =0;
                                                
                                                $totalFA =0;
                                            
											$countDR = 0;
											$countFIELD = 0;
											$countCPC = 0;
											$countFC = 0;
											$totalamt =0;


												?>


												<?php $sno = 1; if(!empty($data['gstITIndividualDetails'])) { ?> <?php $__currentLoopData = $data['gstITIndividualDetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__currentLoopData = $r; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<?php
											$countDR = $row->countDR;
											$countFIELD = $row->countFIELD;											
											$countCPC = $row->countCPC;
											$countFC = $row->countFC;
											$ctotalamt = $row->cFC;
		
											if($countDR == '')										
												$countDR = 0;
											if($countFIELD== '')										
												$countFIELD = 0;										
											if($countCPC == '')										
												$countCPC = 0;
											if($countFC == '')										
												$countFC = 0;
											
											if($row->cFC == '')
												$ctotalamt = 0;
		
		
                                            
                                            $totalCompany = $totalCompany  + $row->countCompany;
                                            $totalDR = $totalDR + $countDR; 
                                            $totalFIELD = $totalFIELD + $countFIELD;
                                            $totalCPC = $totalCPC + $countCPC;                                            
                                            $totalFA = $totalFA + $countFC;
											$totalamt = $totalamt + $ctotalamt;
											
												?>
													<tr>
														<td>
															<b><?= $sno ?> </b>
														</td>
														<td>
															<b><?= $row->varName ?> </b>
														</td>
														<td style="text-align:center">
															<?= $row->countCompany ?>
														</td>
														<td style="text-align:center">
															<?= $countDR ?>
														</td>
														<td style="text-align:center">
															<?= $countFIELD ?>
														</td>
														<td style="text-align:center">
															<?= $countCPC ?>
														</td>

														<td style="text-align:center">
															<?= $ctotalamt ?>
														</td>

														<td style="text-align:center">
															<?= $countFC ?>
														</td>

													</tr>

													<?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php } ?>
										</tbody>

										<tfoot style="background: #e6e3e3;">
											<tr>
												<td colspan="2" style="text-align:center"><b>TOTAL</b></td>
												<td style="text-align:center">
													<b><?= $totalCompany ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalDR ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalFIELD ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalCPC ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalamt ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalFA ?></b>
												</td>

											</tr>

										</tfoot>
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
									<div class="muted pull-center">IT CONCERN(GST)</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3"></div>
									<div class="span3">
										<label class="control-label" for="company_name">Financial Year</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpITConcernMonth" onchange="changeIT(61)"> 
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
									<div class="span3">
										<label class="control-label" for="company_name">Status</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpITConcernStatus" onchange="changeIT(61)">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tblITConcern">
										<thead>
											<tr>
												<th style="text-align: center;">S.No</th>
												<th style="text-align: center;">Employee</th>
												<th style="text-align: center;">Total Customer</th>
												<th style="text-align: center;">D/R</th>
												<th style="text-align: center;">FILED</th>
												<th style="text-align: center;">CPC</th>
												<th style="text-align: center;">Collected Fee</th>
												<th style="text-align: center;">Fees Collection</th>
											</tr>
										</thead>
										<tbody>
											<?php
											
                                                $totalCompany =0;
                                                $totalDR =0;
                                                $totalFIELD =0;
                                                $totalCPC =0;
                                                
                                                $totalFA =0;
                                            
											$countDR = 0;
											$countFIELD = 0;
											$countCPC = 0;
											$countFC = 0;
												$totalamt =0;
											
                                            ?>


												<?php $sno = 1; if(!empty($data['gstITConcernDetails'])) { ?> <?php $__currentLoopData = $data['gstITConcernDetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__currentLoopData = $r; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<?php
											$countDR = $row->countDR;
											$countFIELD = $row->countFIELD;											
											$countCPC = $row->countCPC;
											$countFC = $row->countFC;
											$ctotalamt = $row->cFC;
											
											if($countDR == '')										
												$countDR = 0;
											if($countFIELD== '')										
												$countFIELD = 0;										
											if($countCPC == '')										
												$countCPC = 0;
											if($countFC == '')										
												$countFC = 0;
	


											if($row->cFC == '')
												$ctotalamt = 0;

                                            
                                            $totalCompany = $totalCompany  + $row->countCompany;
                                            $totalDR = $totalDR + $countDR; 
                                            $totalFIELD = $totalFIELD + $countFIELD;
                                            $totalCPC = $totalCPC + $countCPC;                                            
                                            $totalFA = $totalFA + $countFC;
											$totalamt = $totalamt + $ctotalamt;
											
												?>
													<tr>
														<td style="text-align:left">
															<b><?= $sno ?> </b>
														</td>
														<td style="text-align:left">
															<b><?= $row->varName ?> </b>
														</td>
														<td style="text-align:center">
															<?= $row->countCompany ?>
														</td>
														<td style="text-align:center">
															<?= $countDR ?>
														</td>
														<td style="text-align:center">
															<?= $countFIELD ?>
														</td>
														<td style="text-align:center">
															<?= $countCPC ?>
														</td>
														<td style="text-align:center">
															<?= $ctotalamt ?>
														</td>

														<td style="text-align:center">
															<?= $countFC ?>
														</td>

													</tr>

													<?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php } ?>
										</tbody>

										<tfoot style="background: #e6e3e3;">
											<tr>
												<td colspan="2" style="text-align:center"><b>TOTAL</b></td>
												<td style="text-align:center">
													<b><?= $totalCompany ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalDR ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalFIELD ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalCPC ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalamt ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalFA ?></b>
												</td>

											</tr>

										</tfoot>
									</table>



								</div>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<!-- block -->
						<div class="block" style="background-image: linear-gradient(to bottom, #ffb581, #ffb581)!important; ">

							<div class="navbar navbar-inner block-header" style="
    background-image: linear-gradient(to bottom, #ff6a00, #ff6a00)!important;
">
								<center>
									<div class="muted pull-center">TDS INDIVIDUAL</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3"></div>
									<div class="span3">
										<label class="control-label" for="company_name">Month</label>
										<div class="control-group">
											<div class="controls">
												<select id="drptdsIndividualMonth" onchange="tds(71)">
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
												<select id="drptdsIndividualYear" onchange="tds(71)">
                                                      
                                                   <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1; ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?> > <?php echo date('Y')-1;echo "-";echo date('Y'); ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1; ?> </option>
                                                    
                                                </select>
											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Status </label>
										<div class="control-group">
											<div class="controls">
												<select id="drptdsIndividualStatus" onchange="tds(71)">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tbltdsINDIVIDUAL">
										<thead>
											<tr>
												<th style="text-align: center;">S.No</th>
												<th style="text-align: center;">Employee</th>
												<th style="text-align: center;">Total Customer</th>
												<th style="text-align: center;">T/C</th>
												<th style="text-align: center;">T/p</th>
												<th style="text-align: center;">R/F</th>
												<th style="text-align: center;">Collected Fee</th>
												<th style="text-align: center;">Fees Collection</th>
											</tr>
										</thead>
										<tbody>
											<?php
											
                                                $totalCompany =0;
                                                $totalTC =0;
                                                $totalTP =0;
                                                $totalRF =0;
                                                
                                                $totalFA =0;
                                            $totalamt =0;
                                            ?>


												<?php $sno = 1; if(!empty($data['gstTSDIndividualDetails'])) { ?> <?php $__currentLoopData = $data['gstTSDIndividualDetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__currentLoopData = $r; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<?php
											$countTC = $row->countTC;
											$countTP = $row->countTP;											
											$countRF = $row->countRF;
											$countFC = $row->countFC;
											$ctotalamt = $row->cFC;

											if($countTC == '')										
												$countTC = 0;
											if($countTP == '')										
												$countTP = 0;										
											if($countRF == '')										
												$countRF = 0;
											if($countFC == '')										
												$countFC = 0;
                                        
											if($row->cFC == '')
												$ctotalamt = 0;
	
                                            $totalCompany = $totalCompany  + $row->countCompany;
                                            $totalTC = $totalTC + $countTC; 
                                            $totalTP = $totalTP + $countTP;
                                            $totalRF = $totalRF + $countRF;                                            
                                            $totalFA = $totalFA + $countFC;
	$totalamt = $totalamt + $ctotalamt;
											
												?>
													<tr>
														<td>
															<b><?= $sno ?> </b>
														</td>
														<td>
															<b><?= $row->varName ?> </b>
														</td>
														<td style="text-align:center">
															<?= $row->countCompany ?>
														</td>
														<td style="text-align:center">
															<?= $countTC ?>
														</td>
														<td style="text-align:center">
															<?= $countTP ?>
														</td>
														<td style="text-align:center">
															<?= $countRF ?>
														</td>
														<td style="text-align:center">
															<?= $ctotalamt ?>
														</td>

														<td style="text-align:center">
															<?= $countFC ?>
														</td>

													</tr>

													<?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php } ?>
										</tbody>
										<tfoot style="background: #e6e3e3;">
											<tr>
												<td colspan="2" style="text-align:center"><b>TOTAL</b></td>
												<td style="text-align:center">
													<b><?= $totalCompany ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalTC ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalTP ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalRF ?></b>
												</td>

												<td style="text-align:center">
													<b><?= $totalamt ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalFA ?></b>
												</td>

											</tr>

										</tfoot>
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
    background-image: linear-gradient(to bottom, #000000, #000000)!important;
">
								<center>
									<div class="muted pull-center">TDS CONCERN(GST)</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3"></div>
									<div class="span3">
										<label class="control-label" for="company_name">Month</label>
										<div class="control-group">
											<div class="controls">
												<select id="drptdsConcernMonth" onchange="tds(72)">
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
												<select id="drptdsConcernYear" onchange="tds(72)">
                                                     
                                                   <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1; ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?> > <?php echo date('Y')-1;echo "-";echo date('Y'); ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1; ?> </option>
                                                    
                                                </select>
											</div>
										</div>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Status </label>
										<div class="control-group">
											<div class="controls">
												<select id="drptdsConcernStatus" onchange="tds(72)">
                                                    <option value="1">Success</option>
                                                    <option value="2">Pending</option>
                                                </select>
											</div>
										</div>
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									<table class="table table-bordered" id="tblTDSConcern">
										<thead>
											<tr>
												<th style="text-align: center;">S.No</th>
												<th style="text-align: center;">Employee</th>
												<th style="text-align: center;">Total Customer</th>
												<th style="text-align: center;">T/C</th>
												<th style="text-align: center;">T/p</th>
												<th style="text-align: center;">R/F</th>
												<th style="text-align: center;">Collected Fee</th>
												<th style="text-align: center;">Fees Collection</th>
											</tr>
										</thead>
										<tbody>
											<?php
											
                                                $totalCompany =0;
                                                $totalTC =0;
                                                $totalTP =0;
                                                $totalRF =0;
                                                
                                                $totalFA =0;
                                            
											 $totalamt =0;

											
											
											
                                            ?>


												<?php $sno = 1; if(!empty($data['gstTSDConcernDetails'])) { ?> <?php $__currentLoopData = $data['gstTSDConcernDetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php $__currentLoopData = $r; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<?php
											$countTC = $row->countTC;
											$countTP = $row->countTP;											
											$countRF = $row->countRF;
											$countFC = $row->countFC;
											$ctotalamt = $row->cFC;
	
											if($countTC == '')										
												$countTC = 0;
											if($countTP == '')										
												$countTP = 0;										
											if($countRF == '')										
												$countRF = 0;
											if($countFC == '')										
												$countFC = 0;
                                            if($row->cFC == '')
												$ctotalamt = 0;

                                            $totalCompany = $totalCompany  + $row->countCompany;
                                            $totalTC = $totalTC + $countTC; 
                                            $totalTP = $totalTP + $countTP;
                                            $totalRF = $totalRF + $countRF;                                            
                                            $totalFA = $totalFA + $countFC;
											$totalamt = $totalamt + $ctotalamt;
											
												?>
													<tr>
														<td>
															<b><?= $sno ?> </b>
														</td>
														<td>
															<b><?= $row->varName ?> </b>
														</td>
														<td style="text-align:center">
															<?= $row->countCompany ?>
														</td>
														<td style="text-align:center">
															<?= $countTC ?>
														</td>
														<td style="text-align:center">
															<?= $countTP ?>
														</td>
														<td style="text-align:center">
															<?= $countRF ?>
														</td>
														<td style="text-align:center">
															<?= $ctotalamt ?>
														</td>
														<td style="text-align:center">
															<?= $countFC ?>
														</td>

													</tr>

													<?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php } ?>
										</tbody>
										<tfoot style="background: #e6e3e3;">
											<tr>
												<td colspan="2" style="text-align:center"><b>TOTAL</b></td>
												<td style="text-align:center">
													<b><?= $totalCompany ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalTC ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalTP ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalRF ?></b>
												</td>

												<td style="text-align:center">
													<b><?= $totalamt ?></b>
												</td>
												<td style="text-align:center">
													<b><?= $totalFA ?></b>
												</td>
											</tr>
										</tfoot>
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
		$('#tblCompany').DataTable();
	});


	function changeGst(tax) {
		var month;
		var year;
		if (tax == 7) {
			status = $('#drpStatus').val();
			month = $('#drpRegularMonth').val();
			year = $('#drpRegularYear').val();
		}
		if (tax == 8) {
			status = $('#drpStatus1').val();
			month = $('#drpCompountingMonth').val();
			year = $('#drpCompountingYear').val();
		}

		//console.log(month);

		$.ajax({
			url: 'changeGstRegular',
			data: {
				status: status,
				month: month,
				year: year,
				tax: tax
			},
			success: function(data) {
				console.log(data);
				var sno = 1;
				var br = "'BR List'";

				if (tax == 7) {
					var url = "'get_dashboard_gst_regular'";
					$('#tblgstregular tbody').empty();
					$('#tblgstregular tfoot').empty();

					var totalCompany = 0;
					var totalBR = 0;
					var totalTA = 0;
					var totalGSTR3B = 0;
					var totalGSTR1 = 0;
					var totalGSTR2 = 0;
					var totalGSTR3 = 0;
					var totalFA = 0;
					var totalCFC = 0;

					$.each(data['gstRegularDetails'], function(i, key) {

						var countBR = key[0].countBR;
						var countTA = key[0].countTA;
						var countGSTR3B = key[0].countGSTR3B;
						var countGSTR1 = key[0].countGSTR1;
						var countGSTR2 = key[0].countGSTR2;
						var countGSTR3 = key[0].countGSTR3;
						var countFC = key[0].countFC;
						var countCFC = key[0].cFC;


						if (countBR == null) {
							countBR = 0;
						}
						if (countTA == null) {
							countTA = 0;
						}
						if (countGSTR3B == null) {
							countGSTR3B = 0;
						}
						if (countGSTR1 == null) {
							countGSTR1 = 0;
						}
						if (countGSTR2 == null) {
							countGSTR2 = 0;
						}
						if (countGSTR3 == null) {
							countGSTR3 = 0;
						}
						if (countFC == null) {
							countFC = 0;
						}
						if (countCFC == null) {
							countCFC = 0;
						}

						totalCompany = totalCompany + parseInt(key[0].countCompany);
						totalBR = parseInt(countBR) + totalBR;
						totalTA = parseInt(countTA) + totalTA;
						totalGSTR3B = parseInt(countGSTR3B) + totalGSTR3B;
						totalGSTR1 = parseInt(countGSTR1) + totalGSTR1;
						totalGSTR2 = parseInt(countGSTR2) + totalGSTR2;
						totalGSTR3 = parseInt(countGSTR3) + totalGSTR3;
						totalFA = parseInt(countFC) + totalFA;
						if (data['status'] == 1) {
							totalCFC = parseInt(countCFC) + totalCFC;
						}
						//alert(key[0].total - countCFC);
						if (data['status'] == 2) {
							countBR = parseInt(key[0].countCompany) - parseInt(countBR);
							countTA = parseInt(key[0].countCompany) - parseInt(countTA);
							countGSTR3B = parseInt(key[0].countCompany) - parseInt(countGSTR3B);
							countGSTR1 = parseInt(key[0].countCompany) - parseInt(countGSTR1);
							countGSTR2 = parseInt(key[0].countCompany) - parseInt(countGSTR2);
							countGSTR3 = parseInt(key[0].countCompany) - parseInt(countGSTR3);
							countFC = parseInt(key[0].countCompany) - parseInt(countFC);
							//countCFC = 0;
							countCFC = key[0].total - countCFC;
							totalCFC = countCFC + totalCFC;
							//alert(countCFC);
						}





						$('#tblgstregular tbody').append('<tr><td><b>' + sno + '</b></td><td><b>' + key[0].varName + '</b></td><td style="text-align:center">' + key[0].countCompany + '</td><td style="text-align:center">' + countBR + '</td><td style="text-align:center">' + countTA + '</td><td style="text-align:center">' + countGSTR3B + '</td><td style="text-align:center">' + countGSTR1 + '</td><td style="text-align:center">' + countGSTR2 + '</td><td style="text-align:center">' + countGSTR3 + '</td><td style="text-align:center">' + countCFC + '</td><td style="text-align:center">' + countFC + '</td></tr>');
						sno++;


					});
					if (data['status'] == 2) {
						totalBR = totalCompany - totalBR;
						totalTA = totalCompany - totalTA;
						totalGSTR3B = totalCompany - totalGSTR3B;
						totalGSTR1 = totalCompany - totalGSTR1;
						totalGSTR2 = totalCompany - totalGSTR2;
						totalGSTR3 = totalCompany - totalGSTR3;
						totalFA = totalCompany - totalFA;

					}

					$('#tblgstregular tfoot').append('<tr><td colspan="2"><center><b>TOTAL</b></center></td><td style="text-align:center"><b>' + totalCompany + '<b></td><td style="text-align:center"><b>' + totalBR + '<b></td><td style="text-align:center"><b>' + totalTA + '<b></td><td style="text-align:center"><b>' + totalGSTR3B + '<b></td><td style="text-align:center"><b>' + totalGSTR1 + '<b></td><td style="text-align:center"><b>' + totalGSTR2 + '<b></td><td style="text-align:center"><b>' + totalGSTR3 + '<b></td><td style="text-align:center"><b>' + totalCFC + '<b></td><td style="text-align:center"><b>' + totalFA + '<b></td></tr>');

				} else {
					$('#tblgstCompounding').empty();
					var url = "'get_dashboard_gst_regular'";
					//console.log(data['gstRegularDetails']);
					var n = $('#drpCompountingMonth').val() / 3;
					if (n == 1 || n == 2 || n == 3 || n == 4) {
						$('#tblgstCompounding').append('<thead><th style="text-align:center">S.No</th><th style="text-align:center">Employee</th><th style="text-align:center">Total Company</th><th style="text-align:center">Bill Received</th><th style="text-align:center">Tally Accounted</th><th style="text-align:center">Bank A/C</th><th style="text-align:center">EXP A/C</th><th style="text-align: center;">Collected Fee</th><th style="text-align:center">Fees Collection</th><th style="text-align:center">GSTR 4</th></thead>');
					} else {
						$('#tblgstCompounding').append('<thead><th style="text-align:center">S.No</th><th style="text-align:center">Employee</th><th style="text-align:center">Total Company</th><th style="text-align:center">Bill Received</th><th style="text-align:center">Tally Accounted</th><th style="text-align:center">Bank A/C</th><th style="text-align:center">EXP A/C</th><th style="text-align: center;">Collected Fee</th><th style="text-align:center">Fees Collection</th></thead>');
					}

					var totalCompany = 0;
					var totalBR = 0;
					var totalTA = 0;
					//var totalGSTR3B = 0;
					var totalGSTR1 = 0;
					var totalGSTR2 = 0;
					var totalGSTR3 = 0;
					var totalGSTR4 = 0;
					var totalFA = 0;
					var totalCFC = 0;
					//var totalCFC = 0;






					//alert(totalCFC);
					$.each(data['gstRegularDetails'], function(i, key) {
						//alert(totalCFC);
						var countBR = key[0].countBR;
						var countTA = key[0].countTA;
						var countGSTR2 = key[0].countGSTR2;
						var countGSTR3 = key[0].countGSTR3;
						var countGSTR4 = key[0].countGSTR4;
						var countFC = key[0].countFC;
						var countCFC = key[0].cFC;


						if (countBR == null) {
							countBR = 0;
						}
						if (countTA == null) {
							countTA = 0;
						}
						if (countGSTR2 == null) {
							countGSTR2 = 0;
						}
						if (countGSTR3 == null) {
							countGSTR3 = 0;
						}
						if (countGSTR4 == null) {
							countGSTR4 = 0;
						}
						if (countFC == null) {
							countFC = 0;
						}
						if (countCFC == null) {
							countCFC = 0;
						}


						totalCompany = totalCompany + parseInt(key[0].countCompany);
						totalBR = parseInt(countBR) + totalBR;
						totalTA = parseInt(countTA) + totalTA;
						//                        totalGSTR3B= countGSTR3B + totalGSTR3B;
						//totalGSTR1= countGSTR1 + totalGSTR1;
						totalGSTR2 = countGSTR2 + totalGSTR2;
						totalGSTR3 = countGSTR3 + totalGSTR3;
						totalGSTR4 = parseInt(countGSTR4) + totalGSTR4;
						totalFA = parseInt(countFC) + totalFA;
						//totalCFC = parseInt(countCFC) + totalCFC;
						if (data['status'] == 1) {
							totalCFC = parseInt(countCFC) + totalCFC;
						}

						//alert(key[0].total - countCFC);
						if (data['status'] == 2) {
							countBR = parseInt(key[0].countCompany) - parseInt(countBR);
							countTA = parseInt(key[0].countCompany) - parseInt(countTA);
							countGSTR2 = parseInt(key[0].countCompany) - parseInt(countGSTR2);
							countGSTR3 = parseInt(key[0].countCompany) - parseInt(countGSTR3);
							countGSTR4 = parseInt(key[0].countCompany) - parseInt(countGSTR4);
							countFC = parseInt(key[0].countCompany) - parseInt(countFC);
							//countCFC = 0;
							countCFC = key[0].total - countCFC;
							totalCFC = countCFC + totalCFC;

						}

						//alert(countCFC);

						if (n == 1 || n == 2 || n == 3 || n == 4) {
							$('#tblgstCompounding').append('<tr><td><b>' + sno + '</b></td><td><b>' + key[0].varName + '</b></td><td style="text-align:center">' + key[0].countCompany + '</td><td style="text-align:center">' + countBR + '</td><td style="text-align:center">' + countTA + '</td><td style="text-align:center">' + countGSTR2 + '</td><td style="text-align:center">' + countGSTR3 + '</td><td style="text-align:center">' + countCFC + '</td><td style="text-align:center">' + countFC + '</td><td style="text-align:center">' + countGSTR4 + '</td></tr>');
						} else {
							$('#tblgstCompounding').append('<tr><td><b>' + sno + '</b></td><td><b>' + key[0].varName + '</b></td><td style="text-align:center">' + key[0].countCompany + '</td><td style="text-align:center">' + countBR + '</td><td style="text-align:center">' + countTA + '</td><td style="text-align:center">' + countGSTR2 + '</td><td style="text-align:center">' + countGSTR3 + '</td><td style="text-align:center">' + countCFC + '</td><td style="text-align:center">' + countFC + '</td></tr>');
						}
						//alert(sno);
						//console.log(key);

						//$('#tblgstCompounding tbody').append('<tr><td><b>' + sno + '</b></td><td><b>' + key[0].varName + '</b></td><td>' + key[0].countCompany + '</td><td><a onclick="showAjaxModal(' + br + ',' + url + ',' + 63 + ',' + key[0].empId + ')">' + key[0].countBR + '</a></td><td><a onclick="showAjaxModal(' + br + ',' + url + ',' + 64 + ',' + key[0].empId + ')">' + key[0].countTA + '</a></td><td><a onclick="showAjaxModal(' + br + ',' + url + ',' + 69 + ',' + key[0].empId + ')">' + key[0].countGSTR4 + '</a></td><td><a onclick="showAjaxModal(' + br + ',' + url + ',' + 70 + ',' + key[0].empId + ')">' + key[0].countFC + '</a></td></tr>');
						sno++;

						//console.log(key[0].countBR);
					});
					if (data['status'] == 2) {
						totalBR = totalCompany - totalBR;
						totalTA = totalCompany - totalTA;
						totalGSTR2 = totalCompany - totalGSTR2;
						totalGSTR3 = totalCompany - totalGSTR3;
						totalGSTR4 = totalCompany - totalGSTR4;
						totalFA = totalCompany - totalFA;

					}
					if (n == 1 || n == 2 || n == 3 || n == 4) {
						$('#tblgstCompounding').append('<tfoot style="background: #e6e3e3;"><tr><td colspan = "2"> <center><b> TOTAL </b></center></td ><td  style="text-align:center"> <b>' + totalCompany + '</b></td> <td   style="text-align:center"> <b>' + totalBR + '</b> </td> <td  style="text-align:center"> <b>' + totalTA + '</b> </td><td  style="text-align:center"> <b>' + totalGSTR2 + '</b> </td><td  style="text-align:center"> <b>' + totalGSTR3 + '</b> </td><td style="text-align:center"><b>' + totalCFC + '</b></td><td  style="text-align:center">' + totalFA + '</td > <td style="text-align:center"> <b>' + totalGSTR4 + '</b></td></tr></tfoot> ');
					} else {
						$('#tblgstCompounding').append('<tfoot style="background: #e6e3e3;"><tr><td colspan="2"><center><b>TOTAL</b></center></td><td style="text-align:center"><b>' + totalCompany + '</b></td><td style="text-align:center"><b>' + totalBR + '</b></td><td style="text-align:center"><b>' + totalTA + '</b></td><td  style="text-align:center"> <b>' + totalGSTR2 + '</b> </td><td  style="text-align:center"> <b>' + totalGSTR3 + '</b> </td><td style="text-align:center"><b>' + totalCFC + '</b></td><td style="text-align:center"><b>' + totalFA + '</b></td></tr></tfoot>');
					}
				}

			},
			error: function(data) {
				alert(error);
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
				hdnTax: 7,
				month: $('#drpRegularMonth').val(),
				year: $('#drpRegularYear').val()
			},
			success: function(response) {

				jQuery('#modal_ajax .modal-title').html(title);
				jQuery('#modal_ajax .modal-body').html(response);
				//$('.modal-dialog').css('width', '1200px');console.log(response);
			}
		});
	}

	function showAjaxModal(title, url, tag, id) {
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
				hdnTax: 8,
				month: $('#drpCompountingMonth').val(),
				year: $('#drpCompountingYear').val()
			},
			success: function(response) {

				jQuery('#modal_ajax .modal-title').html(title);
				jQuery('#modal_ajax .modal-body').html(response);
				//$('.modal-dialog').css('width', '1200px');console.log(response);
			}
		});
	}




	/** TDS Function  **/

	function tds(type) {
		var month = 0;
		var year = 0;
		var status = 0;
		if (type == 71) {
			month = $('#drptdsIndividualMonth').val();
			year = $('#drptdsIndividualYear').val();
			status = $('#drptdsIndividualStatus').val();
		} else if (type == 72) {
			month = $('#drptdsConcernMonth').val();
			year = $('#drptdsConcernYear').val();
			status = $('#drptdsConcernStatus').val();
		}

		$.ajax({
			url: 'change_TDS_Details',
			data: {
				status: status,
				month: month,
				year: year,
				type: type
			},
			success: function(data) {
				//console.log(data);
				var sno = 1;
				var totalFC = 0;
				var totalRF = 0;
				var totalTC = 0;
				var totalTP = 0;
				var totalCompany = 0;
				var totalcfc = 0;
				var totalamt = 0;
				var tblName = 'tblTDSConcern';

				if (data['tax'] == 71) {
					$('#tbltdsINDIVIDUAL tbody').empty();
					$('#tbltdsINDIVIDUAL tfoot').empty();
					tblName = 'tbltdsINDIVIDUAL';
				} else {
					$('#tblTDSConcern tbody').empty();
					$('#tblTDSConcern tfoot').empty();
					tblName = 'tblTDSConcern';
				}


				$.each(data['gstTSDDetails'], function(i, key) {
					console.log(data);
					var employeeName = key[0].varName;
					var countFC = key[0].countFC;
					var countRF = key[0].countRF;
					var countTC = key[0].countTC;
					var countTP = key[0].countTP;
					var countCompany = key[0].countCompany;
					var cfc = key[0].cFC;


					if (countFC == null) {
						countFC = 0;
					}
					if (countRF == null) {
						countRF = 0;
					}
					if (countTC == null) {
						countTC = 0;
					}
					if (countTP == null) {
						countTP = 0;
					}
					if (countCompany == null) {
						countCompany = 0;
					}
					if (cfc == null) {
						cfc = 0;
					}
					//alert(cfc);
					totalamt = key[0].Total;

					if (key[0].Total == null) {
						totalamt = 0;
					}
					//alert(totalamt);

					totalFC = totalFC + parseInt(countFC);
					totalRF = totalRF + parseInt(countRF);
					totalTC = totalTC + parseInt(countTC);
					totalTP = totalTP + parseInt(countTP);
					totalCompany = totalCompany + parseInt(countCompany);

					if (data['status'] == 1) {
						totalcfc = totalcfc + cfc;
					}


					if (data['status'] == 2) {
						countTC = parseInt(countCompany) - parseInt(countTC);
						countTP = parseInt(countCompany) - parseInt(countTP);
						countRF = parseInt(countCompany) - parseInt(countRF);
						countFC = parseInt(countCompany) - parseInt(countFC);
						cfc = totalamt - cfc;

						totalcfc = cfc + totalcfc;

					}


					$('#' + tblName).append('<tr><td><b>' + sno +
						'</b></td><td><b>' + employeeName + '</b></td><td style="text-align:center">' + countCompany + '</td><td style="text-align:center">' + countTC + '</td><td style="text-align:center">' + countTP + '</td><td style="text-align:center">' + countRF + '</td><td style="text-align:center">' + cfc + '</td><td style="text-align:center">' + countFC + '</td></tr>');

					sno = sno + 1;
				});

				if (data['status'] == 2) {
					totalFC = totalCompany - totalFC;
					totalRF = totalCompany - totalRF;
					totalTC = totalCompany - totalTC;
					totalTP = totalCompany - totalTP;
					totalcfc = 0;
				}
				$('#' + tblName).append('<tfoot style="background: #e6e3e3;"><tr><td colspan="2"><center><b>TOTAL</b></center></td><td style="text-align:center"><b>' + totalCompany + '</b></td><td style="text-align:center"><b>' + totalTC + '</b></td><td style="text-align:center"><b>' + totalTP + '</b></td><td style="text-align:center"><b>' + totalRF + '</b></td><td style="text-align:center"><b>' + totalcfc + '</b></td><td style="text-align:center"><b>' + totalFC + '</b></td></tr></tfoot>');

			},
			error: function(data) {
				alert(error);
			}
		});
	}

	function changeIT(type) {
		var month = 0;
		var year = 0;
		var status = 0;




		if (type == 60) {
			//month = $('#drptdsIndividualMonth').val();
			year = $('#drpITIndividualMonth').val();
			status = $('#drpITIndividualStatus').val();
		} else if (type == 61) {
			//month = $('#drptdsConcernMonth').val();
			year = $('#drpITConcernMonth').val();
			status = $('#drpITConcernStatus').val();
		}

		$.ajax({
			url: 'change_IT_Details',
			data: {
				status: status,
				month: month,
				year: year,
				type: type
			},
			success: function(data) {
				var sno = 1;
				var totalFC = 0;
				var totalDR = 0;
				var totalFIELD = 0;
				var totalCPC = 0;
				var totalCompany = 0;
				var totalcfc = 0;

				var tblName = '';

				if (data['tax'] == 60) {
					$('#tblITIndividual tbody').empty();
					$('#tblITIndividual tfoot').empty();
					tblName = 'tblITIndividual';
				} else {
					$('#tblITConcern tbody').empty();
					$('#tblITConcern tfoot').empty();
					tblName = 'tblITConcern';
				}

				//console.log(data);
				$.each(data['gstITDetails'], function(i, key) {
					console.log(data);
					var employeeName = key[0].varName;
					var countDR = key[0].countDR;
					var countFIELD = key[0].countFIELD;
					var countCPC = key[0].countCPC;
					var countFC = key[0].countFC;
					var countCompany = key[0].countCompany;
					var cfc = key[0].cFC;
					var totalamt = key[0].Total;


					totalCompany = totalCompany + parseInt(countCompany);

					if (data['status'] == 1) {
						totalcfc = totalcfc + cfc;
					}


					if (countFC == null) {
						countFC = 0;
					}
					if (countDR == null) {
						countDR = 0;
					}
					if (countFIELD == null) {
						countFIELD = 0;
					}
					if (countCPC == null) {
						countCPC = 0;
					}
					if (countCompany == null) {
						countCompany = 0;
					}
					if (cfc == null) {
						cfc = 0;
					}


					totalFC = totalFC + parseInt(countFC);
					totalDR = totalDR + parseInt(countDR);
					totalFIELD = totalFIELD + parseInt(countFIELD);
					totalCPC = totalCPC + parseInt(countCPC);
					totalCompany = totalCompany + parseInt(countCompany);

					//totalcfc = totalcfc + parseInt(cfc);



					if (data['status'] == 2) {
						countDR = parseInt(countCompany) - parseInt(countDR);
						countFIELD = parseInt(countCompany) - parseInt(countFIELD);
						countCPC = parseInt(countCompany) - parseInt(countCPC);
						countFC = parseInt(countCompany) - parseInt(countFC);

						cfc = totalamt - cfc;
						totalcfc = cfc + totalcfc;
					}


					$('#' + tblName).append('<tr><td><b>' + sno +
						'</b></td><td><b>' + employeeName + '</b></td><td style="text-align:center">' + countCompany + '</td><td style="text-align:center">' + countDR + '</td><td style="text-align:center">' + countFIELD + '</td><td style="text-align:center">' + countCPC + '</td><td style="text-align:center">' + cfc + '</td><td style="text-align:center">' + countFC + '</td></tr>');

					sno = sno + 1;
				});

				if (data['status'] == 2) {
					totalFC = totalCompany - totalFC;
					totalDR = totalCompany - totalDR;
					totalFIELD = totalCompany - totalFIELD;
					totalCPC = totalCompany - totalCPC;
				}
				$('#' + tblName).append('<tfoot style="background: #e6e3e3;"><tr><td colspan="2"><center><b>TOTAL</b></center></td><td style="text-align:center"><b>' + totalCompany + '</b></td><td style="text-align:center"><b>' + totalDR + '</b></td><td style="text-align:center"><b>' + totalFIELD + '</b></td><td style="text-align:center"><b>' + totalCPC + '</b></td><td style="text-align:center"><b>' + totalcfc + '</b></td><td style="text-align:center"><b>' + totalFC + '</b></td></tr></tfoot>');

			},
			error: function(data) {
				alert(error);
			}
		});
	}

</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>