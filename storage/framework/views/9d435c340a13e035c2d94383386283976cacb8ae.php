 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<div class="container-fluid">
    <div class="row-fluid">

        <div class="span12" id="content">
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
                            <?php /*echo $data["userid"];*/
                            ?>

                            <div class="block-content collapse in">

                                <div class="span12" style="margin-left:0px;">
                                    <table class="table table-bordered" id="tblgstregular">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">S.No</th>
                                                <!--                                                <th style="text-align: center;">Employee</th>-->
                                                <th style="text-align: center;">Total Company</th>
                                                <th style="text-align: center;">Bill Received</th>
                                                <th style="text-align: center;">Tally Accounted</th>
                                                <th style="text-align: center;">GSTR 3B</th>
                                                <th style="text-align: center;">GSTR 1</th>
                                                <th style="text-align: center;">Bank A/C</th>
                                                <th style="text-align: center;">EXP A/C</th>
                                                <th style="text-align: center;">Collected Fee</th>
                                                <th style="text-align: center;">Fees Collection</th>
                                                <th style="text-align: center;">Total</th>

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
                                            $total_row=0;
                                            
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
                                            $total_row=($totalBR+$totalTA+$totalGSTR3B+$totalGSTR1+$totalGSTR2+$totalGSTR3+$totalFA+$totalamt);
	
	
	
	
	
							
												?>

                                                    <tr>
                                                        <td><b><?= $sno ?> </b></td>
                                                        <!--                                                        <td><a onclick="gst_regulat_click(<?= $row->empId?>)"><b><?= $row->varName ?></b> </a></td>-->
                                                        <td><a href="gst_regular_details?Empid=<?=$row->empId?>"><b><?= $row->varName ?></b> </a></td>


                                                        <!--
<td style="text-align:center">
    <?= $row->countCompany ?>
</td>
-->

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

                                                        <td style="text-align:center">
                                                            <?= $countBR+$countTA+$countGSTR3B+$countGSTR1+$countGSTR2+$countGSTR3+$ctotalamt+$countFC ?>
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
                                                <!--
<td style="text-align:center">
    <b><?= $totalCompany ?></b>
</td>
-->
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
                                                <td style="text-align:center">
                                                    <b><?=($totalBR+$totalTA+$totalGSTR3B+$totalGSTR1+$totalGSTR2+$totalGSTR3+$totalamt+$totalFA)?></b>
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
                                <div class="span12" style="margin-left:0px;">
                                    <table class="table table-bordered" id="tblgstCompounding">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">S.No</th>
                                                <!--                                                <th style="text-align: center;">Employee</th>-->
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
                                                <th style="text-align: center;">Total</th>
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
                                                        <td><a href="gst_regular_details1?Empid=<?=$row->empId?>"><b><?= $row->varName ?></b> </a></td>
                                                        <!--
                                                        <td style="text-align:center">
                                                            <?= $row->countCompany ?>
                                                        </td>
-->
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
                                                        <td style="text-align:center">
                                                            <?= ($countBR+$countTA+$countGSTR2+$countGSTR3+$ctotalamt+$countFC)?>
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
                                                <!--
                                                <td style="text-align:center">
                                                    <b><?= $totalCompany ?></b>
                                                </td>
-->
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
                                                <td style="text-align:center">
                                                    <b><?= ($totalBR+$totalTA+$totalGSTR2+$totalGSTR3+$totalamt+$totalFA) ?></b>
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
                        <div class="block" style="background-image: linear-gradient(to bottom, #dea9ff, #dea9ff)!important;">
                            <div class="navbar navbar-inner block-header" style="
    background-image: linear-gradient(to bottom, #68179a, #68179a)!important;
">
                                <center>
                                    <div class="muted pull-center">IT INDIVIDUAL</div>
                                </center>
                            </div>


                            <div class="block-content collapse in">

                                <div class="span12" style="margin-left:0px;">
                                    <table class="table table-bordered" id="tblITIndividual">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">S.No</th>
                                                <th style="text-align: center;">Employee</th>
                                                <!--                                                <th style="text-align: center;">Total Customer</th>-->
                                                <th style="text-align: center;">D/R</th>
                                                <th style="text-align: center;">FILED</th>
                                                <th style="text-align: center;">CPC</th>
                                                <th style="text-align: center;">Collected Fee</th>
                                                <th style="text-align: center;">Fees Collection</th>
                                                <th style="text-align: center;">Total</th>
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
                                                        <td><a href="IT_individual_details?Empid=<?=$row->empId?>"><b><?= $row->varName ?></b> </a></td>
                                                        <!--
                                                        <td style="text-align:center">
                                                            <?= $row->countCompany ?>
                                                        </td>
-->
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
                                                        <td style="text-align:center">
                                                            <?= ($countDR+$countFIELD+$countCPC+$countFC) ?>
                                                        </td>

                                                    </tr>

                                                    <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php } ?>
                                        </tbody>

                                        <tfoot style="background: #e6e3e3;">
                                            <tr>
                                                <td colspan="2" style="text-align:center"><b>TOTAL</b></td>
                                                <!--
                                                <td style="text-align:center">
                                                    <b><?= $totalCompany ?></b>
                                                </td>
-->
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
                                                <td style="text-align:center">
                                                    <b><?= ($totalFA+$totalDR+$totalFIELD+$totalCPC) ?></b>
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

                                <div class="span12" style="margin-left:0px;">
                                    <table class="table table-bordered" id="tblITConcern">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">S.No</th>
                                                <th style="text-align: center;">Employee</th>
                                                <!--                                                <th style="text-align: center;">Total Customer</th>-->
                                                <th style="text-align: center;">D/R</th>
                                                <th style="text-align: center;">FILED</th>
                                                <th style="text-align: center;">CPC</th>
                                                <th style="text-align: center;">Collected Fee</th>
                                                <th style="text-align: center;">Fees Collection</th>
                                                <th style="text-align: center;">Total</th>
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
                                                        <td><a href="IT_individual_details1?Empid=<?=$row->empId?>"><b><?= $row->varName ?></b> </a></td>
                                                        <!--
                                                        <td style="text-align:center">
                                                            <?= $row->countCompany ?>
                                                        </td>
-->
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
                                                        <td style="text-align:center">
                                                            <?= ($countFC+$countDR+$countFIELD+$countCPC) ?>
                                                        </td>

                                                    </tr>

                                                    <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php } ?>
                                        </tbody>

                                        <tfoot style="background: #e6e3e3;">
                                            <tr>
                                                <td colspan="2" style="text-align:center"><b>TOTAL</b></td>
                                                <!--
<td style="text-align:center">
    <b><?= $totalCompany ?></b>
</td>
-->
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
                                                <td style="text-align:center">
                                                    <b><?= ($totalFA+$totalDR+$totalFIELD+$totalCPC) ?></b>
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

                                <div class="span12" style="margin-left:0px;">
                                    <table class="table table-bordered" id="tbltdsINDIVIDUAL">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">S.No</th>
                                                <th style="text-align: center;">Employee</th>
                                                <!--                                                <th style="text-align: center;">Total Customer</th>-->
                                                <th style="text-align: center;">T/C</th>
                                                <th style="text-align: center;">T/p</th>
                                                <th style="text-align: center;">R/F</th>
                                                <th style="text-align: center;">Collected Fee</th>
                                                <th style="text-align: center;">Fees Collection</th>
                                                <th style="text-align: center;">Total</th>
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
                                                        <td><a href="TDS_individual_details?Empid=<?=$row->empId?>"><b><?= $row->varName ?></b> </a></td>
                                                        <!--
                                                        <td style="text-align:center">
                                                            <?= $row->countCompany ?>
                                                        </td>
-->
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
                                                        <td style="text-align:center">
                                                            <?= ($countFC+$countTC+$countTP+$countRF) ?>
                                                        </td>

                                                    </tr>

                                                    <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php } ?>
                                        </tbody>
                                        <tfoot style="background: #e6e3e3;">
                                            <tr>
                                                <td colspan="2" style="text-align:center"><b>TOTAL</b></td>
                                                <!--
<td style="text-align:center">
    <b><?= $totalCompany ?></b>
</td>
-->
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
                                                <td style="text-align:center">
                                                    <b><?= ($totalFA+$totalTC+$totalTP+$totalRF) ?></b>
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

                                <div class="span12" style="margin-left:0px;">
                                    <table class="table table-bordered" id="tblTDSConcern">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">S.No</th>
                                                <th style="text-align: center;">Employee</th>
                                                <!--                                                <th style="text-align: center;">Total Customer</th>-->
                                                <th style="text-align: center;">T/C</th>
                                                <th style="text-align: center;">T/p</th>
                                                <th style="text-align: center;">R/F</th>
                                                <th style="text-align: center;">Collected Fee</th>
                                                <th style="text-align: center;">Fees Collection</th>
                                                <th style="text-align: center;">Total</th>
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
                                                        <td><a href="TDS_individual_details1?Empid=<?=$row->empId?>"><b><?= $row->varName ?></b> </a></td>
                                                        <!--
                                                        <td style="text-align:center">
                                                            <?= $row->countCompany ?>
                                                        </td>
-->
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
                                                        <td style="text-align:center">
                                                            <?= ($countFC+$countTC+$countTP+$countRF) ?>
                                                        </td>


                                                    </tr>

                                                    <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php } ?>
                                        </tbody>
                                        <tfoot style="background: #e6e3e3;">
                                            <tr>
                                                <td colspan="2" style="text-align:center"><b>TOTAL</b></td>
                                                <!--
<td style="text-align:center">
    <b><?= $totalCompany ?></b>
</td>
-->
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
                                                <td style="text-align:center">
                                                    <b><?= ($totalFA+$totalTC+$totalTP+$totalRF) ?></b>
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
    function gst_regulat_click(Userid) {
        //alert(Userid);
        var userid = Userid;
    }

</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>