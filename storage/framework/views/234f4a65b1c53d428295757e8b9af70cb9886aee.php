 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<div class="container-fluid">
    <div class="row-fluid">

        <div class="span12" id="content">
            <div class="row-fluid">
                <div class="block-content collapse in">
                    
<!--
                     <div class="row-fluid">
                            <div class="span12" style="margin-left:0px;">  
                       
                              <div class=" form-horizontal">
                        <div class="span2"></div>
                        <div class="span4">
                            <div class="control-group">
                                <label class="control-label" for="category">Employee Name</label>
                                <div class="controls">
                                    <input type="text" id="date1" name="date1" onchange="Sample()"/> <br/>

                                </div>
                            </div>
                        </div>
                                  <div class="span4">
                            <div class="control-group">
                                <label class="control-label" for="category">Phone Number</label>
                                <div class="controls">
                                    <input type="text" id="date1" name="date1" onchange="Sample()"/> <br/>

                                </div>
                            </div>
                        </div>
                        <div class="span2"></div>
                        </div>   
                         </div>  </div>
-->
                    
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
                                                <th style="text-align: center;">Company Name</th>
                                                <th style="text-align: center;">Phone</th>
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
                                            
                                                
                                                $totalBR =0;
                                                $totalTA =0;
                                                $totalGSTR3B =0;
                                                $totalGSTR1 =0;
                                                $totalGSTR2 =0;
                                                $totalGSTR3 =0;
                                                $totalFA =0;
                                                $totalamt =0;                                         
                                               
                                            
                                            ?>
                                              
                                                <?php $sno = 1;  if(!empty($data['get_today_gstregular_company_details'])) { ?> 
                                              <?php $__currentLoopData = $data['get_today_gstregular_company_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <?php
    	                                    $Companyname = $r[0]->Company_Name;
											$Phone = $r[0]->Phone_No1;
											$countBR = $r[0]->DR;
											$countTA = $r[0]->TA;
											$countGSTR3B = $r[0]->GSTR3B;
											$countGSTR1 = $r[0]->GSTR1;
											$countBA = $r[0]->BA;
											$countEA = $r[0]->EA;
											$countFC = $r[0]->FC;
											$countCFC = $r[0]->CFC;
    
    $totalBR=$totalBR+$countBR;
    $totalTA=$totalTA+$countTA;
    $totalGSTR3B=$totalGSTR3B+$countGSTR3B;
    $totalGSTR1=$totalGSTR1+$countGSTR1;
    $totalGSTR2=$totalGSTR2+$countBA;
    $totalGSTR3=$totalGSTR3+$countEA;
    $totalFA=$totalFA+$countFC;
    $totalamt=$totalamt+$countCFC;
    
                                                ?>
                                                <tr>
                                                        <td style="text-align:center"><b><?= $sno ?> </b></td>
                                                        <td style="text-align:center"><b><?= $Companyname ?> </b></td>
                                                        <td style="text-align:center"><b><?= $Phone ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countBR ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countTA ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countGSTR3B ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countGSTR1 ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countBA ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countEA ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countFC ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countCFC ?> </b></td>
                                                        <td style="text-align:center"><b><?= ($countFC+$countEA+$countBR+$countTA+$countGSTR3B+$countGSTR1+$countBA) ?> </b></td>
                                              </tr>
                                               <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php } ?>
                                        </tbody>
                                        	<tfoot style="background: #e6e3e3;">
											<tr>
												<td colspan="3" style="text-align:center"><b>TOTAL</b></td>
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
													<b><?= $totalFA ?></b>
												</td>
                                                <td style="text-align:center">
													<b><?= $totalamt ?></b>
												</td>
                                                 <td style="text-align:center">
													<b><?=($totalBR+$totalTA+$totalGSTR3B+$totalGSTR1+$totalGSTR2+$totalGSTR3+$totalFA) ?></b>
												</td>
											</tr>
										</tfoot>
                                    </table>



                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                         
                        <div class="row-fluid">
                       <div class="block" style="background-image: linear-gradient(to bottom, #fbacea,#fbacea)!important;">
                            <div class="navbar navbar-inner block-header" style="background-image: linear-gradient(to bottom,#df69bb,#df69bb)!important;
">
                                <center>
                                    <div class="muted pull-center">
                                        <h4>GST COMPOUNDING</h4>
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
                                                <th style="text-align: center;">Company Name</th>
                                                <th style="text-align: center;">Phone</th>
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
                                            
                                                
                                                $totalBR =0;
                                                $totalTA =0;
                                                $totalGSTR3B =0;
                                                $totalGSTR1 =0;
                                                $totalGSTR2 =0;
                                                $totalGSTR3 =0;
                                                $totalFA =0;
                                                $totalamt =0;                                         
                                               
                                            
                                            ?>
                                              
                                                <?php $sno = 1;  if(!empty($data['get_today_gstcompounding_company_details'])) { ?> 
                                              <?php $__currentLoopData = $data['get_today_gstcompounding_company_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <?php
    	                                    $Companyname = $r[0]->Company_Name;
											$Phone = $r[0]->Phone_No1;
											$countBR = $r[0]->DR;
											$countTA = $r[0]->TA;
											$countGSTR3B = $r[0]->GSTR3B;
											$countGSTR1 = $r[0]->GSTR1;
											$countBA = $r[0]->BA;
											$countEA = $r[0]->EA;
											$countFC = $r[0]->FC;
											$countCFC = $r[0]->CFC;
    
    $totalBR=$totalBR+$countBR;
    $totalTA=$totalTA+$countTA;
    $totalGSTR3B=$totalGSTR3B+$countGSTR3B;
    $totalGSTR1=$totalGSTR1+$countGSTR1;
    $totalGSTR2=$totalGSTR2+$countBA;
    $totalGSTR3=$totalGSTR3+$countEA;
    $totalFA=$totalFA+$countFC;
    $totalamt=$totalamt+$countCFC;
    
                                                ?>
                                                <tr>
                                                        <td style="text-align:center"><b><?= $sno ?> </b></td>
                                                        <td style="text-align:center"><b><?= $Companyname ?> </b></td>
                                                        <td style="text-align:center"><b><?= $Phone ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countBR ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countTA ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countGSTR3B ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countGSTR1 ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countBA ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countEA ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countFC ?> </b></td>
                                                        <td style="text-align:center"><b><?= $countCFC ?> </b></td>
                                                        <td style="text-align:center"><b><?= ($countFC+$countEA+$countBR+$countTA+$countGSTR3B+$countGSTR1+$countBA) ?> </b></td>
                                              </tr>
                                               <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php } ?>
                                        </tbody>
                                        	<tfoot style="background: #e6e3e3;">
											<tr>
												<td colspan="3" style="text-align:center"><b>TOTAL</b></td>
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
													<b><?= $totalFA ?></b>
												</td>
                                                <td style="text-align:center">
													<b><?= $totalamt ?></b>
												</td>
                                                 <td style="text-align:center">
													<b><?= ($totalBR+$totalTA+$totalGSTR3B+$totalGSTR1+$totalGSTR2+$totalGSTR3+$totalFA) ?></b>
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
                                                <th style="text-align: center;">Customer Name</th>
                                                <th style="text-align: center;">Phone Number</th>
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
                                            
										
											$totalamt =0;


												?>


                                                <?php $sno = 1; if(!empty($data['get_today_itindividual_company_details'])) { ?> <?php $__currentLoopData = $data['get_today_itindividual_company_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                                                <?php
										$customername = $r[0]->name;
										$contactno =$r[0] ->contact_no;											
										$DR = $r[0]->DR;
										$FD =$r[0]->FD;
										$CPC = $r[0]->CPC;
										$FC = $r[0]->FC;
										$CFC = $r[0]->CFC;
		
											if($DR == '')										
												$DR = 0;
											if($FD== '')										
												$FD = 0;										
											if($CPC == '')										
												$CPC = 0;
											if($FC == '')										
												$FC = 0;
											
											if($CFC == '')
												$CFC = 0;
		
		
                                            
                                           
                                            $totalDR = $totalDR + $DR; 
                                            $totalFIELD = $totalFIELD + $FD;
                                            $totalCPC = $totalCPC + $CPC;                                            
                                            $totalFA = $totalFA + $FC;
											$totalamt = $totalamt + $CFC;
											
												?>
                                                    <tr>
                                                        <td>
                                                            <b><?= $sno ?> </b>
                                                        </td>
                                                        
                                                        
                                                        <td style="text-align:center">
                                                            <?= $customername ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $contactno ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= $DR ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= $FD ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $CPC ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $FC ?>
                                                        </td> <td style="text-align:center">
                                                            <?= $CFC ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= ($DR+$FD+$CPC+$FC) ?>
                                                        </td>

                                                    </tr>

                                                    <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                    <?php } ?>
                                        </tbody>

                                        <tfoot style="background: #e6e3e3;">
                                            <tr>
                                                <td colspan="3" style="text-align:center"><b>TOTAL</b></td>
                                               
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
                                                    <b><?= $totalFA ?></b>
                                                </td>
                                                 <td style="text-align:center">
                                                    <b><?= $totalamt ?></b>
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
                                    <table class="table table-bordered" id="tblITIndividual">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">S.No</th>
                                                <th style="text-align: center;">Customer Name</th>
                                                <th style="text-align: center;">Phone Number</th>
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
                                            
										
											$totalamt =0;


												?>


                                                <?php $sno = 1; if(!empty($data['get_today_itconcern_company_details'])) { ?> <?php $__currentLoopData = $data['get_today_itconcern_company_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                                                <?php
										$customername = $r[0]->name;
										$contactno =$r[0] ->contact_no;											
										$DR = $r[0]->DR;
										$FD =$r[0]->FD;
										$CPC = $r[0]->CPC;
										$FC = $r[0]->FC;
										$CFC = $r[0]->CFC;
		
											if($DR == '')										
												$DR = 0;
											if($FD== '')										
												$FD = 0;										
											if($CPC == '')										
												$CPC = 0;
											if($FC == '')										
												$FC = 0;
											
											if($CFC == '')
												$CFC = 0;
		
		
                                            
                                           
                                            $totalDR = $totalDR + $DR; 
                                            $totalFIELD = $totalFIELD + $FD;
                                            $totalCPC = $totalCPC + $CPC;                                            
                                            $totalFA = $totalFA + $FC;
											$totalamt = $totalamt + $CFC;
											
												?>
                                                    <tr>
                                                        <td>
                                                            <b><?= $sno ?> </b>
                                                        </td>
                                                        
                                                        
                                                        <td style="text-align:center">
                                                            <?= $customername ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $contactno ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= $DR ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= $FD ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $CPC ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $FC ?>
                                                        </td> <td style="text-align:center">
                                                            <?= $CFC ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= ($DR+$FD+$CPC+$FC) ?>
                                                        </td>

                                                    </tr>

                                                    <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                    <?php } ?>
                                        </tbody>

                                        <tfoot style="background: #e6e3e3;">
                                            <tr>
                                                <td colspan="3" style="text-align:center"><b>TOTAL</b></td>
                                               
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
                                                    <b><?= $totalFA ?></b>
                                                </td>
                                                 <td style="text-align:center">
                                                    <b><?= $totalamt ?></b>
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
                                    <table class="table table-bordered" id="tblITIndividual">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">S.No</th>
                                                <th style="text-align: center;">Customer Name</th>
                                                <th style="text-align: center;">Phone Number</th>
                                                <th style="text-align: center;">T/C</th>
                                                <th style="text-align: center;">T/P</th>
                                                <th style="text-align: center;">R/F</th>
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
                                            
										
											$totalamt =0;


												?>


                                                <?php $sno = 1; if(!empty($data['get_today_tdsindividual_company_details'])) { ?> <?php $__currentLoopData = $data['get_today_tdsindividual_company_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                                                <?php
										$customername = $r[0]->name;
										$contactno =$r[0] ->contact_no;											
										$DR = $r[0]->DR;
										$FD =$r[0]->FD;
										$CPC = $r[0]->CPC;
										$FC = $r[0]->FC;
										$CFC = $r[0]->CFC;
		
											if($DR == '')										
												$DR = 0;
											if($FD== '')										
												$FD = 0;										
											if($CPC == '')										
												$CPC = 0;
											if($FC == '')										
												$FC = 0;
											
											if($CFC == '')
												$CFC = 0;
		
		
                                            
                                           
                                            $totalDR = $totalDR + $DR; 
                                            $totalFIELD = $totalFIELD + $FD;
                                            $totalCPC = $totalCPC + $CPC;                                            
                                            $totalFA = $totalFA + $FC;
											$totalamt = $totalamt + $CFC;
											
												?>
                                                    <tr>
                                                        <td>
                                                            <b><?= $sno ?> </b>
                                                        </td>
                                                        
                                                        
                                                        <td style="text-align:center">
                                                            <?= $customername ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $contactno ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= $DR ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= $FD ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $CPC ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $FC ?>
                                                        </td> <td style="text-align:center">
                                                            <?= $CFC ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= ($DR+$FD+$CPC+$FC) ?>
                                                        </td>

                                                    </tr>

                                                    <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                    <?php } ?>
                                        </tbody>

                                        <tfoot style="background: #e6e3e3;">
                                            <tr>
                                                <td colspan="3" style="text-align:center"><b>TOTAL</b></td>
                                               
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
                                                    <b><?= $totalFA ?></b>
                                                </td>
                                                 <td style="text-align:center">
                                                    <b><?= $totalamt ?></b>
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
                                    <table class="table table-bordered" id="tblITIndividual">
                                        <thead>
                                            <tr>
                                                 <th style="text-align: center;">S.No</th>
                                                <th style="text-align: center;">Customer Name</th>
                                                <th style="text-align: center;">Phone Number</th>
                                                <th style="text-align: center;">T/C</th>
                                                <th style="text-align: center;">T/P</th>
                                                <th style="text-align: center;">R/F</th>
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
                                            
										
											$totalamt =0;


												?>


                                                <?php $sno = 1; if(!empty($data['get_today_tdsconcern_company_details'])) { ?> <?php $__currentLoopData = $data['get_today_tdsconcern_company_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                                                <?php
										$customername = $r[0]->name;
										$contactno =$r[0] ->contact_no;											
										$DR = $r[0]->DR;
										$FD =$r[0]->FD;
										$CPC = $r[0]->CPC;
										$FC = $r[0]->FC;
										$CFC = $r[0]->CFC;
		
											if($DR == '')										
												$DR = 0;
											if($FD== '')										
												$FD = 0;										
											if($CPC == '')										
												$CPC = 0;
											if($FC == '')										
												$FC = 0;
											
											if($CFC == '')
												$CFC = 0;
		
		
                                            
                                           
                                            $totalDR = $totalDR + $DR; 
                                            $totalFIELD = $totalFIELD + $FD;
                                            $totalCPC = $totalCPC + $CPC;                                            
                                            $totalFA = $totalFA + $FC;
											$totalamt = $totalamt + $CFC;
											
												?>
                                                    <tr>
                                                        <td>
                                                            <b><?= $sno ?> </b>
                                                        </td>
                                                        
                                                        
                                                        <td style="text-align:center">
                                                            <?= $customername ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $contactno ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= $DR ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= $FD ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $CPC ?>
                                                        </td>

                                                        <td style="text-align:center">
                                                            <?= $FC ?>
                                                        </td> <td style="text-align:center">
                                                            <?= $CFC ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?= ($DR+$FD+$CPC+$FC) ?>
                                                        </td>

                                                    </tr>

                                                    <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                    <?php } ?>
                                        </tbody>

                                        <tfoot style="background: #e6e3e3;">
                                            <tr>
                                                <td colspan="3" style="text-align:center"><b>TOTAL</b></td>
                                               
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
                                                    <b><?= $totalFA ?></b>
                                                </td>
                                                 <td style="text-align:center">
                                                    <b><?= $totalamt ?></b>
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
                    
                    
                    
                    </div>
                    
                    
                    
                    
              
            </div>
        </div>
        <hr>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>