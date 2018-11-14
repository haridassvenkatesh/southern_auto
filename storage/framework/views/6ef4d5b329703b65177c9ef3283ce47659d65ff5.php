 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<link href="<?php echo e(asset('/css/select2.min.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(asset('/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>

<style>
/*
body {
    background-image: url("https://2.bp.blogspot.com/-dzT6AdJudgk/WQbHgHdWGUI/AAAAAAAAAE0/Yc9ZTsGZsewbZMg2-sad2TYoSP-elXtkACLcB/s1600/pink_curves_abstract-wide.jpg");
}
*/
    .switch-label:before {
    content: attr(data-off);
    right: 11px;
    color: #ffffff;
    text-shadow: 0 1px rgba(255, 255, 255, 0.5);
}
    .table_TDSC{
        
          border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background:  #a7a7a7 !important;
            color: #FFFF;
            margin: 7px;
    } 
    
    .table_TDSC tr td{  
        
       border: none; 
   
    }
    
    
     .table_TDSI{
        
          border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background:  #ffb581 !important;
            color: #FFFF;
            margin: 7px;
    } 
    
    .table_TDSI tr td{  
        
       border: none; 
   
    }
    
        .tableTDSI{
        margin: 0px 1px 6px 1px;
    border: 2px solid #CCC;
    margin-top: 23px;

        
    }
    
    
   .tableTDSI{
        
            border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background:  #ffb581 !important;
            color: #FFFF;
            margin: 7px;
    }
    
    
    
    .table_ITI{
        
          border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background:  #dea9ff !important;
            color: #FFFF;
            margin: 7px;
    } 
    
    .table_ITI tr td{  
        
       border: none; 
   
    }
    
        .tableITI{
        margin: 0px 1px 6px 1px;
    border: 2px solid #CCC;
    margin-top: 23px;

        
    }
    
    
   .tableITI{
        
            border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background:  #dea9ff !important;
            color: #FFFF;
            margin: 7px;
    }
    
     .table_ITC{
        
          border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background:  #85b368 !important;
            color: #FFFF;
            margin: 7px;
    } 
    
    .table_ITC tr td{  
        
       border: none; 
   
    }
    
     .tableITC{
        margin: 0px 1px 6px 1px;
    border: 2px solid #CCC;
    margin-top: 23px;

        
    }
    
    
   .tableITC{
        
            border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background:  #85b368 !important;
            color: #FFFF;
            margin: 7px;
    }
    
    
  .table_comp tr td{  
        
       border: none; 
   
    }
/*
    #tblgstregular tr td{  
    border-left: 1px solid #999cff;
    }
*/
    .table_comp{
         border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background:  #fbacea !important;
            color: #FFFF;
            margin: 7px;
    }
    
    .tablecomp{
        margin: 0px 1px 6px 1px;
    border: 2px solid #CCC;
    margin-top: 23px;

        
    }
    
    
   .tablecomp{
        
            border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background: #fbacea !important;
            color: #FFFF;
            margin: 7px;
    }
/*
    
    .tblgst{
        margin: 0px 1px 6px 1px;
    border: 2px solid #CCC;
    margin-top: 23px;

        
    }
*/
    .table_gst tr td{  
        
       border: none; 
   
    }
    .table_gst{
         border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background: #999cff;
            color: #FFFF;
            margin: 7px;
    }
/*
.table-bordered{
        
            border: none; 
            -webkit-box-shadow: 0 10px 6px -6px #777;
	        -moz-box-shadow: 0 10px 6px -6px #777;
	        box-shadow: 0 10px 6px -6px #777;
            background: #999cff;
            color: #FFFF;
            margin: 7px;
    }
*/
html {

	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
body {
	margin: 0;
}

html, body {
	width: 100%;
	height: 100%
}
article, aside, details, figcaption, figure, footer, header, main, menu, nav, section, summary {
	display: block;
}
audio, canvas, progress, video {
	display: inline-block;
	vertical-align: baseline;
}
audio:not([controls]) {
	display: none;
	height: 0;
}

a {
	background-color: transparent;
	text-decoration: none;
}
a:active, a:hover {
	outline: 0;
}

h1,h2,h3,h4,h5,h6,p,ul,ol{ margin:0px; padding:0px;}


/***********************  TOP Bar ********************/
.sidebar{ width:220px;  background-color:#173829;transition: all 0.5s  ease-in-out;margin-top: 40px; }
.bg-defoult{background-color:#222;}
.sidebar ul{ list-style:none; margin:0px; padding:0px; }
.sidebar li a,.sidebar li a.collapsed.active{ display:block; padding:8px 12px; color:#fff;border-left:0px solid #dedede;  text-decoration:none}
.sidebar li a.active{background-color:#173829;border-left:5px solid #dedede; transition: all 0.5s  ease-in-out}
.sidebar li a:hover{background-color:#de3b3b !important;}
.sidebar li a i{ padding-right:5px;}
.sidebar ul li .sub-menu li a{ position:relative}
.sidebar ul li .sub-menu li a:before{
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 0px;
    padding-right: 10px;
    vertical-align: middle;
}
.sidebar ul li .sub-menu li a:hover:after {
    content: "";
    position: absolute;
    left: -5px;
    top: 0;
    width: 5px;
    background-color: #111;
    height: 100%;
}
.sidebar ul li .sub-menu li a:hover{ background-color:#222; padding-left:20px; transition: all 0.5s  ease-in-out}
.sub-menu{ border-left:5px solid #dedede;}
	.sidebar li a .nav-label,.sidebar li a .nav-label+span{ transition: all 0.5s  ease-in-out}
	

	.sidebar.fliph li a .nav-label,.sidebar.fliph li a .nav-label+span{ display:none;transition: all 0.5s  ease-in-out}
	.sidebar.fliph {
    width: 42px;transition: all 0.5s  ease-in-out;
   
}
	
.sidebar.fliph li{ position:relative}
.sidebar.fliph .sub-menu {
    position: absolute;
    left: 39px;
    top: 0;
    background-color: #222;
    width: 150px;
    z-index: 100;
}
	
</style>

  <div class="new_content">
  <div class="row-fluid">
      <div class="span12">
      <div class="span2">
      <div class="sidebar left ">
  <ul class="list-sidebar bg-defoult">
    
    <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> GST </span> <span class="fa fa-chevron-left pull-right"></span> </a>
      <ul class="sub-menu collapse" id="dashboard">

        <li><a onclick="ReportClick(7)" >Regular</a></li>
        <li><a  onclick="ReportClick(8)">Compounding</a></li>      
      </ul>
    </li>

    <li> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">IT</span> <span class="fa fa-chevron-left pull-right"></span> </a>
      <ul class="sub-menu collapse" id="products">

        <li><a onclick="ReportClick(60)">Individual</a></li>
        <li><a onclick="ReportClick(61)">Concern(GST)</a></li>
      
      </ul>
    </li>

    <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-table"></i> <span class="nav-label">TDS</span><span class="fa fa-chevron-left pull-right"></span></a>
      <ul  class="sub-menu collapse" id="tables" >
        <li><a onclick="ReportClick(71)"> Individual</a></li>
        <li><a onclick="ReportClick(72)"> Concern(GST)</a></li>
        
      </ul>
    </li>

  </ul>
</div>
      </div>
          <div class="span10">
      
					<div class="row-fluid" id="GstRegular" style="display:none">
						<!-- block -->
						<div class="block" style="margin-top: 40px;">
							<div class="navbar navbar-inner block-header" style="
    background-image: linear-gradient(to bottom, #0014ff,#0014ff)!important;" >
								<center>
									<div class="muted pull-center">
										<h4> GST REGULAR</h4>
									</div>

								</center>
							</div>


							<div class="block-content collapse in">
                        <div class="span12">
                        
                            <table class="table table-bordered table_gst"  style="border:1px solid #CCC">
                                <tr>   <td style="font-size:15px;"><b>Month</b></td>
                                    <td> <select id="drpRegularMonth" onchange="changeGSTRegular()" style="width:94%;">
                                                   
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
                                                </select></td>
                                    <td style="font-size:15px;"><b>Finanacial Year</b></td>
                                    <td> <select id="drpRegularYear" onchange="changeGSTRegular()" style="width:94%;">
                                                    
                                                    <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1;  ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?> > <?php echo date('Y')-1;echo "-";echo date('Y');  ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1;  ?> </option>
                                                    
                                                    
                                                    
                                                </select></td>
                                                                     
                                   
                                </tr>
                                <tr>                                
                                <td style="font-size:15px;"><b>Company Name</b></td>
                                    <td><input type="text" id="companyname" placeholder="Company Name" name="companyname" style="height:20px !important;width:90% !important;"/></td>   
                                   <td style="font-size:15px;"><b>Proprietor</b></td>
                                    <td>  <input type="text" id="GSTRcompany" name="GSTRcompany" disabled="" style="height:20px !important;width:90% !important;"></td> 
                                </tr>

                            </table>
                            
                        </div>

                                <br/>
								<div class="span12" style="margin-left:0px;">

<br/><br/>
                                    <table width="98%" id="tblgstregular"><tbody>
<!--
                                      <tr>
                                          <td>                                              
                                        <table class="table table-bordered table_gst" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;">B/R</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                          <td> <table class="table table-bordered table_gst" height="60px">
                                            <tr>
                                             <td width="25%" style="font-size: 20px;">GSTR 3B</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                       
                                    </tr>     
                                        
                                    <tr>
                                          <td>                                              
                                        <table class="table table-bordered table_gst" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;">T/A</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                          <td> <table class="table table-bordered table_gst" height="60px">
                                            <tr>
                                             <td width="25%" style="font-size: 20px;">GSTR 1</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                       
                                    </tr>  
-->
                                        
                                         <tr>
<!--                                          <td>                                              -->
<!--
                                        <table class="table table-bordered table_gst" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;">Bank A/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
-->
<!--
                                       <table class="table table-bordered table_gst" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;">B/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
-->
                                         
                                           <td rowspan="2" colspan="2">
                                        <table class="table table-bordered table_gst" height="138px" style="width: 107%!important;">
  <tr>
      <td style="text-align:left;font-size: 20px;">FEE</td>
    <td></td>
  </tr>
  <tr>
    <td style="text-align:left;font-size: 20px;">Collected</td>
    <td></td>
   
  </tr>
</table></td>
                                                                             
                                        </tr>                                          
                                         <tr>
                                          <td>                                              
                                        <table height="60px">
                                            <tr>
<!--
                                             <td width="25%" style="font-size: 20px;">Exp A/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
-->
                                            </tr>
                                        </table>
                                          </td>
                                                                        
                                    </tr>  
</tbody></table>

								</div>
							</div>
						</div>
					</div>
              
              
              	<div class="row-fluid" id="GSTcompounding" style="display:none">
						<!-- block -->
						<div class="block" class="block" style="margin-top: 40px;">
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
                                
                                           <table class="table table-bordered table_comp"  style="border:1px solid #CCC">
                                <tr>   <td style="font-size:15px;"><b>Month</b></td>
                                    <td> <select id="drpCompountingMonth" onchange="changeGSTCompounding()" style="width:94%;">
                                                    
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
                                                </select></td>
  <td style="font-size:15px;"><b>Finanacial Year</b></td>
                                    <td> <select id="drpCompountingYear" onchange="changeGSTCompounding()" style="width:94%;">
                                                    
                                                    <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1;  ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?>> <?php echo date('Y')-1;echo "-";echo date('Y');  ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1;  ?> </option>
                                                </select></td>
                                                                     
                                   
                                </tr>
                                <tr>                                
                                <td style="font-size:15px;"><b>Company Name</b></td>
                                    <td> <input type="text" id="companyname1" placeholder="Company Name" name="companyname1" style="height:20px !important;width:90% !important;" /></td>   
                                   <td style="font-size:15px;"><b>Proprietor</b></td>
                                    <td> <input type="text" id="GSTCcompany" name="GSTCcompany" disabled="" style="height:20px !important;width:90% !important;"></td> 
                                </tr>

                            </table>

                                <br/><br/>
                                <div class="span12" style="margin-left:0px;">
<!--
                                
                                    <table class="table table-bordered" id="tblgstCompounding" style="border: 2px solid #fbacea">
                                        <tbody>
                                        <tr>
                                        <td style="text-align:left;font-size: 25px;"><b>Bill Received</b></td>
                                        <td></td>
                                        <td style="text-align:left;font-size: 25px;"><b>Tally Accounted</b></td>
                                        <td></td>
                                        </tr>
                                      
                                        <tr>
                                        <td style="text-align:left;font-size: 25px;"><b>Bank A/C</b></td>
                                        <td></td>
                                        <td style="text-align:left;font-size: 25px;"><b>EXP A/C</b></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <td style="text-align:left;font-size: 25px;"><b>Fee</b></td>
                                        <td></td>
                                        <td style="text-align:left;font-size: 25px;"><b>Collected</b></td>
                                        <td></td>
                                        </tr>
                                            </tbody>
                                    </table>
-->
                                    
                                        <table width="98%" id="tblgstCompounding"><tbody>
<!--
                                      <tr>
                                          <td>                                              
                                        <table class="table table-bordered table_comp" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;">B/R</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                          <td> <table class="table table-bordered table_comp" height="60px">
                                            <tr>
                                             <td width="25%" style="font-size: 20px;">T/A</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                       
                                    </tr>     
-->
                                        
                                  
                                        
                                         <tr>
<!--                                          <td>                                              -->
<!--
                                        <table class="table table-bordered table_comp" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;">Bank A/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
-->
<!--
                                        <table class="table table-bordered table_comp" height="60px">
                                            <tr>
                                             <td width="25%" style="font-size: 20px;">B/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
-->
                                         
                                              
                                              
                                           <td rowspan="2" colspan="2">
                                        <table class="table table-bordered table_comp" height="138px" style="width: 107%!important;">
  <tr>
      <td style="text-align:left;font-size: 20px;">FEE</td>
    <td></td>
  </tr>
  <tr>
    <td style="text-align:left;font-size: 20px;">Collected</td>
    <td></td>
   
  </tr>
</table></td>
                                                                             
                                        </tr>                                          
                                         <tr>
                                          <td>                                              
<!--
                                        <table class="table table-bordered table_comp" height="60px">
                                            <tr>
                                             <td width="25%" style="font-size: 20px;">Exp A/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
-->
                                        <table  height="60px">
                                            <tr>
                                            
                                            </tr>
                                        </table>
                                          </td>
                                                                        
                                    </tr>  
</tbody></table>
                                    </div>
							</div>
						</div>
					</div>
              	<div class="row-fluid" id="ITIndividual" style="display:none">
						<!-- block -->
						<div class="block" style="margin-top: 40px;">
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
                                    <table class="table table-bordered table_ITI"  style="border:1px solid #CCC">
                                    
                                        <tr>
                                        <td style="font-size:15px;"><b>Customer Name</b></td>
                                        <td><input type="text" id="IT_INDIVIDUAL" placeholder="Customer Name" name="IT_INDIVIDUAL" style="height:20px !important;width:90% !important;" /></td>
                                        <td style="font-size:15px;"><b>Financial Year</b></td>
                                        <td>	<select id="drpITIndividualYear" onchange="changeITIndividual()" style="width:94%;">
													
													<option value="<?php echo date('Y')-3; ?>">
                                                        <?php echo date('Y')-3; echo '-'; echo date('Y')-2;  ?> 
                                                    </option>
                                                    <option value="<?php echo date('Y')-2; ?>">
                                                        <?php echo date('Y')-2; echo '-'; echo date('Y')-1;  ?> 
                                                    </option>
                                                    <option value="<?php echo date('Y')-1; ?>" selected> 
                                                        <?php echo date('Y')-1; echo '-'; echo date('Y');  ?> 
                                                    </option>
                                                </select></td>
                                        </tr>
                                    </table>

								</div> 

                              
								<div class="span12" style="margin-left:0px;">
                                    <br/><br/>
													<table id="tblIT_INDIVIDUAL" width="98%" >

								<tbody>

                                        
<!--
                                    <tr>
                                          <td>                                              
                                        <table class="table table-bordered table_ITI" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;width: 1031px;">D/R</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                         <td>                                              
                                        <table class="table table-bordered table_ITI" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px; width: 1031px;">Field</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                    </tr>
-->
                                   
                                                                        <tr>
<!--                                          <td>                                              -->
<!--
                                        <table class="table table-bordered table_ITI" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px; width: 1031px;">CPC</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
-->
<!--
                                     <table class="table table-bordered table_ITI" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px; width: 1031px;">D/R</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
-->
                                                                            

                                                                             <td rowspan="2" colspan="2">
                                        <table class="table table-bordered table_ITI" height="138px" style="width: 107%!important;">
  <tr>
      <td width="25%" style="font-size: 20px; width: 1031px;">FEE</td>
    <td></td>
  </tr>
  <tr>
    <td width="25%" style="font-size: 20px; width: 1031px;">Collected</td>
    <td></td>
   
  </tr>
</table></td>                               


        </tr>                         
                                         
                                                                                     <tr>
                                          <td>                                              
                                        <table height="60px">
                                            <tr>
                                         
                                            </tr>
                                        </table>
                                          </td>
                                                                        
                                    </tr>      
                                                                  
                                        
                                        </tbody>
									</table>


								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid" id="ITConcern" style="display:none">
						<!-- block -->
						<div class="block" style="margin-top: 40px;">
							<div class="navbar navbar-inner block-header" style="background-image: linear-gradient(to bottom, #069e20,#069e20)!important;">
								<center>
									<div class="muted pull-center">
										<h4>IT-CONCERN(GST)</h4>
									</div>
								</center>
							</div>


							<div class="block-content collapse in">
								<div class="span12">
                                    
                                    <table class="table table-bordered table_ITC"  style="border:1px solid #CCC">
                                    
                                    <tr>
                                        
                                      
                                        <td style="font-size:15px;"><b>Financial Year</b></td>
                                        <td>
                                            <select id="drpITConcernYear" onchange="changeITConcern()" style="width:94%;">                   
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
                                        </td>  
                                    </tr>
                                        
                                    <tr>
                                        <td style="font-size:15px;"><b>Company Name</b></td>
                                        <td><input type="text" id="IT_CONCERN" placeholder="Company Name" name="IT_CONCERN"  style="height:20px !important;width:90% !important;"/></td>
                                        <td style="font-size:15px;"><b>Proprietor</b></td>
                                        <td>   <input type="text" id="ITCcustomer" name="ITCcustomer" disabled="" style="height:20px !important;width:90% !important;"></td>

                                    </tr>
                                    
                                    </table>

                                    
                                </div>
<!--                                tableITC-->
								<div class="span12" style="margin-left:0px;">
                                    <br/><br/>
					         
                                    			<table id="tblIT_CONCERN" width="98%" >

								<tbody>

<!--
                                        
                                    <tr>
                                          <td>                                              
                                        <table class="table table-bordered table_ITC" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;width: 1031px;">D/R</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                         <td>                                              
                                        <table class="table table-bordered table_ITC" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px; width: 1031px;">Field</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                    </tr>
-->
                                   
                                                                        <tr>
<!--
                                          <td>                                              
                                        <table class="table table-bordered table_ITC" height="60px">
                                            <tr>

                                            <td width="25%" style="font-size: 20px; width: 1031px;">CPC</td>
                                            <td width="25%" style="font-size: 17px;"></td>
 <td width="25%" style="font-size: 20px; width: 1031px;">D/R</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
-->
                                                                            

                                                                             <td rowspan="2" colspan="2">
                                        <table class="table table-bordered table_ITC" height="138px" style="width: 107%!important;">
  <tr>
      <td width="25%" style="font-size: 20px; width: 1031px;">FEE</td>
    <td></td>
  </tr>
  <tr>
    <td width="25%" style="font-size: 20px; width: 1031px;">Collected</td>
    <td></td>
   
  </tr>
</table></td>                               


        </tr>                         
                                         
                                                                                     <tr>
                                          <td>                                              
                                        <table height="60px">
                                            <tr>
                                         
                                            </tr>
                                        </table>
                                          </td>
                                                                        
                                    </tr>      
                                                                  
                                        
                                        </tbody>
									</table>



								</div>
							</div>
						</div>
					</div>
              <div class="row-fluid" id="TDSIndividual" style="display:none">
						<!-- block #ffb581 -->
						<div class="block" style="margin-top: 40px;
    
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
                                    <table  class="table table-bordered table_TDSI"  style="border:1px solid #CCC">
                                    
                                    <tr> <td style="font-size:15px;"><b>Month</b></td>
                                        <td><select id="drpTDSIMonth" onchange="changeTDSIndividual()" style="width:94%;">
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
                                                </select></td>
                                        <td style="font-size:15px;"><b>Financial Year</b></td>
                                        <td><select id="drpTDSIYear" onchange="changeTDSIndividual()" style="width:94%;">
                                                  <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1;  ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?>> <?php echo date('Y')-1;echo "-";echo date('Y');  ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1;  ?> </option>
                                                </select></td>
                                       
                                    </tr>
                                        <tr>
                                        <td style="font-size:15px;"><b>Customer Name</b></td>
                                        <td>	<input type="text" id="TDS_INDIVIDUAL" placeholder="Customer Name" name="TDS_INDIVIDUAL" style="height:20px !important;width:90% !important;" /></td>
                                        <td>-</td>
                                        <td>-</td>
                                        </tr>
                                    </table>

								</div>
<!--                                tableTDSI-->
								<div class="span12" style="margin-left:0px;">
                                    <br/><br/>
                 
                                                         
                                    			<table id="tbltdsI" width="98%" >

								<tbody>

                                        
<!--
                                    <tr>
                                          <td>                                              
                                        <table class="table table-bordered table_TDSI" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;width: 1031px;">T/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                         <td>                                              
                                        <table class="table table-bordered table_TDSI" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px; width: 1031px;">T/P</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                    </tr>
-->
                                   
                                                                        <tr>
<!--
                                          <td>                                              
                                        <table class="table table-bordered table_TDSI" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px; width: 1031px;">R/F</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                                <td width="25%" style="font-size: 20px; width: 1031px;">T/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
-->
                                                                            

                                                                             <td rowspan="2" colspan="2">
                                        <table class="table table-bordered table_TDSI" height="138px" style="width: 107%!important;">
  <tr>
      <td width="25%" style="font-size: 20px; width: 1031px;">FEE</td>
    <td></td>
  </tr>
  <tr>
    <td width="25%" style="font-size: 20px; width: 1031px;">Collected</td>
    <td></td>
   
  </tr>
</table></td>                               


        </tr>                         
                                         
                                                                                     <tr>
                                          <td>                                              
                                        <table height="60px">
                                            <tr>
                                         
                                            </tr>
                                        </table>
                                          </td>
                                                                        
                                    </tr>      
                                                                  
                                        
                                        </tbody>
									</table>


								</div>
							</div>
						</div>
					</div>	<div class="row-fluid" id="TDSConcern" style="display:none">
						<!-- block -->
<!--              #a7a7a7-->
						<div class="block" style="margin-top: 40px;">
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
                                    
                                    <table class="table table-bordered table_TDSC"  style="border:1px solid #CCC">
                                    
                                    <tr>
                                       
                                    <td style="font-size:15px;"><b>Month</b></td>    
                                    <td>	<select id="drpTDSCMonth" onchange="changeTDSConcern()" style="width:94%;">
                                                    
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
                                                </select></td>
                                        <td style="font-size:15px;"><b>Financial Year</b></td>    
                                    <td><select id="drpTDSCYear" onchange="changeTDSConcern()" style="width:94%;">
                                                    <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2; echo "-";echo date('Y')-1; ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?>> <?php echo date('Y')-1;echo "-";echo date('Y');  ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1;  ?> </option>
                                                </select></td>    
                                    </tr>
                                        <tr>
                                        <td style="font-size:15px;"><b>Company Name</b></td>
                                        <td>  <input type="text" id="TDS_CONCERN" placeholder="Company Name" name="TDS_CONCERN" style="height:20px !important;width:90% !important;" /> </td>
                                        <td style="font-size:15px;"><b>proprietor</b></td>
                                        <td><input type="text" id="TDSCcustomer" name="TDSCcustomer" disabled="" style="height:20px !important;width:90% !important;"></td>
                                        </tr>
                                    </table>

                                    
                                </div>
								<div class="span12" style="margin-left:0px;">
                                    <br/><br/>
					
                       
                                    			<table id="tbltdsC" width="98%" >

								<tbody>

<!--
                                        
                                    <tr>
                                          <td>                                              
                                        <table class="table table-bordered table_TDSC" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px;width: 1031px;">T/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                         <td>                                              
                                        <table class="table table-bordered table_TDSC" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px; width: 1031px;">T/P</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
                                    </tr>
-->
                                   
                                                                        <tr>
<!--
                                          <td>                                              
                                        <table class="table table-bordered table_TDSC" height="60px">
                                            <tr>
                                            <td width="25%" style="font-size: 20px; width: 1031px;">R/F</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                                
                                                <td width="25%" style="font-size: 20px; width: 1031px;">T/C</td>
                                            <td width="25%" style="font-size: 17px;"></td>
                                            </tr>
                                        </table>
                                          </td>
-->
                                                                            

                                                                             <td rowspan="2" colspan="2">
                                        <table class="table table-bordered table_TDSC" height="138px" style="width: 107%!important;">
  <tr>
      <td width="25%" style="font-size: 20px; width: 1031px;">FEE</td>
    <td></td>
  </tr>
  <tr>
    <td width="25%" style="font-size: 20px; width: 1031px;">Collected</td>
    <td></td>
   
  </tr>
</table></td>                               


        </tr>                         
                                         
                                                                                     <tr>
                                          <td>                                              
                                        <table height="60px">
                                            <tr>
                                         
                                            </tr>
                                        </table>
                                          </td>
                                                                        
                                    </tr>      
                                                                  
                                        
                                        </tbody>
									</table>



								</div>
							</div>

						</div>
					</div>
      </div>
         
          
      </div>
</div>
</div>




<script>
$(document).ready(function(){
   $('button').click(function(){
       $('.sidebar').toggleClass('fliph');
   });
  
  
   
});</script>

<script>
	$(document).ready(function() {
		//$('#tblCompany').DataTable();
         $("#GstRegular").css("display", "block");
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

function ReportClick(Id){
     $("#GstRegular").css("display", "none");   
    $("#GSTcompounding").css("display", "none"); 
    $("#ITIndividual").css("display", "none");  
    $("#ITConcern").css("display", "none");
    $("#TDSIndividual").css("display", "none"); 
    $("#TDSConcern").css("display", "none");





    if(Id==7){
        $("#GstRegular").css("display", "block");
    }
     if(Id==8){
        $("#GSTcompounding").css("display", "block");
    }
      if(Id==60){
        $("#ITIndividual").css("display", "block");
    }
     if(Id==61){
        $("#ITConcern").css("display", "block");
    }
     if(Id==71){
        $("#TDSIndividual").css("display", "block");
    }
     if(Id==72){
        $("#TDSConcern").css("display", "block");
    }
    
}
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
						label: key.company_name + ' - ' + key.Phone_No1,
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
						label: key.company_name + ' - ' + key.Phone_No1,
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
                        dr='';
                        
//						dr = '<div id="dri" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkdri" onchange="update_INDIVIDUAL(73,' + IT_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="dri_1" style="display:none">' + d + '</div>';
					}
					if (key.field == null) {
//						field = '<div id="fieldi" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chkfieldi" onchange="update_INDIVIDUAL(74,' + IT_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="fieldi_1" style="display:none"> ' + d + '</div>';
                        field='';
					}
					if (key.cpc == null) {
//						cpc = '<div id="cpci" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkcpci" onchange="update_INDIVIDUAL(75,' + IT_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> 										<span class="switch-handle"></span> </label></div> <div id="cpci_1" style="display:none"> ' + d + '</div>';
                        cpc='';
					}
					if (key.FC == null) {
						FC = '<div id="FCi" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCi" onchange="update_INDIVIDUAL(70,' + IT_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="FCi_1" style="display:none"> ' + d + '</div>';
                       
					}



                    
                    
//                  $('#tblIT_INDIVIDUAL tbody').append('<tr><td><table class="table table-bordered table_ITI" height="60px"><tr><td width="25%" style="font-size: 20px;">D/R</td><td width="25%" style="font-size: 17px;">' + dr + '</td></tr></table></td><td> <table class="table table-bordered table_ITI" height="60px"><tr><td width="25%" style="font-size: 20px;">CPC</td><td width="25%" style="font-size: 17px;">' + cpc + '</td></tr></table></td></tr> <tr><td> <table class="table table-bordered table_ITI" height="60px"><tr> <td width="25%" style="font-size: 20px;">Field</td> <td width="25%" style="font-size: 17px;">' + field + '</td></tr> </table> </td><td rowspan="2" colspan="2"><table class="table table-bordered table_ITI" height="138px"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table height="60px"><tr></tr></table> </td></tr>');
                    
                    
$('#tblIT_INDIVIDUAL tbody').append('<tr><td rowspan="2" colspan="2"><table class="table table-bordered table_ITI" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table height="60px"><tr></tr></table> </td></tr>');
					sno++;

					
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
//					var it_name = data['itcategory']['a'][0]['name'];
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
                        $('#ITCcustomer').val(it_name);                  
                        $('#ITCcategory').val(it_category);
        
                    
					if (key.dr == null) {
                       dr='';
//						dr = '<div id="drc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkdrc" onchange="update_CONCERN(73,' + IT_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="drc_1" style="display:none">' + d + '</div>';
					}
					if (key.field == null) {
//						field = '<div id="fieldc" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chkfieldc" onchange="update_CONCERN(74,' + IT_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="fieldc_1" style="display:none"> ' + d + '</div>';
                        field='';
					}
					if (key.cpc == null) {
//						cpc = '<div id="cpcc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkcpcc" onchange="update_CONCERN(75,' + IT_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> 										<span class="switch-handle"></span> </label></div> <div id="cpcc_1" style="display:none"> ' + d + '</div>';
                        cpc='';
					}
					if (key.FC == null) {
                       
						FC = '<div id="FCitc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCitc" onchange="update_CONCERN(70,' + IT_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="FCitc_1" style="display:none"> ' + d + '</div>';
					}



                            
$('#tblIT_CONCERN tbody').append('<tr><td rowspan="2" colspan="2"><table class="table table-bordered table_ITC" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table height="60px"><tr></tr></table> </td></tr>');

                    
                                                
//$('#tblIT_CONCERN tbody').append('<tr><td> <table class="table table-bordered table_ITC" height="60px"><tr> <td width="25%" style="font-size: 20px;">D/R</td> <td width="25%" style="font-size: 17px;">' + dr + '</td></tr> </table> </td><td rowspan="2" colspan="2"><table class="table table-bordered table_ITC" height="138px"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table height="60px"><tr></tr></table> </td></tr>');

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
                        tc='';
//						tc = '<div id="tci" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chktci" onchange="update_TDS_INDIVIDUAL(76,' + TDS_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="tci_1" style="display:none">' + d + '</div>';
                       
					}
					if (key.tp == null) {
//						tp = '<div id="tpi" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chktpi" onchange="update_TDS_INDIVIDUAL(77,' + TDS_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="tpi_1" style="display:none"> ' + d + '</div>';
                        tp='';
					}
					if (key.rf == null) {
//						rf = '<div id="rfi" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkrfi" onchange="update_TDS_INDIVIDUAL(78,' + TDS_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> 										<span class="switch-handle"></span> </label></div> <div id="rfi_1" style="display:none"> ' + d + '</div>';
                        rf='';
					}
					if (key.FC == null) {
						FC = '<div id="FCi" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCi" onchange="update_TDS_INDIVIDUAL(70,' + TDS_INDIVIDUAL + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="FCi_1" style="display:none"> ' + d + '</div>';
                        
					}



                    
$('#tbltdsI tbody').append('<tr><td rowspan="2" colspan="2"><table class="table table-bordered table_TDSI" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table height="60px"><tr></tr></table> </td></tr>');

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
                        $('#TDSCcustomer').val(P_name);                  
                        $('#TDSCcategory').val(category);
					if (key.tc == null) {
                        tc='';
//						tc = '<div id="tcc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chktcc" onchange="update_TDS_CONCERN(76,' + TDS_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;></span> <span class="switch-handle"></span> </label> </div> <div id="tcc_1" style="display:none">' + d + '</div>';
                        
					}
					if (key.tp == null) {
//						tp = '<div id="tpc" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chktpc" onchange="update_TDS_CONCERN(77,' + TDS_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;></span> <span class="switch-handle"></span> </label> </div> <div id="tpc_1" style="display:none"> ' + d + '</div>';
                        tp='';
					}
					if (key.rf == null) {
//						rf = '<div id="rfc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkrfc" onchange="update_TDS_CONCERN(78,' + TDS_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;></span> 										<span class="switch-handle"></span> </label></div> <div id="rfc_1" style="display:none"> ' + d + '</div>';
                        rf='';
					}
					if (key.FC == null) {
						FC = '<div id="FCc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCc" onchange="update_TDS_CONCERN(70,' + TDS_CONCERN + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;></span> <span class="switch-handle"></span> </label></div> <div id="FCc_1" style="display:none"> ' + d + '</div>';
                        
					}

//                      
//                       $('#tbltdsC tbody').append('<tr><td><table class="table table-bordered table_TDSC" height="60px"><tr><td width="25%" style="font-size: 20px;">T/C</td><td width="25%" style="font-size: 17px;">' + tc + '</td></tr></table></td><td> <table class="table table-bordered table_TDSC" height="60px"><tr><td width="25%" style="font-size: 20px;">T/P</td><td width="25%" style="font-size: 17px;">' + tp + '</td></tr></table></td></tr> <tr><td> <table class="table table-bordered table_TDSC" height="60px"><tr> <td width="25%" style="font-size: 20px;">R/F</td> <td width="25%" style="font-size: 17px;">' + rf + '</td></tr> </table> </td><td rowspan="2" colspan="2"><table class="table table-bordered table_TDSC" height="138px"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table height="60px"><tr></tr></table> </td></tr>');

                    
$('#tbltdsC tbody').append(' <tr><td rowspan="2" colspan="2"><table class="table table-bordered table_TDSC" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table height="60px"><tr></tr></table> </td></tr>');




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
							month: 15,
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
							month: 15,
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

                        $('#GSTRcompany').val(key.P_name);                  
                        $('#GSTRcategory').val(key.Status_Name);


						if (key.Br == null) {
//							BR = '<div id="br" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkbr" onchange="changevalue1(63,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="br_1" style="display:none">' + d + '</div>';
                            BR='';
                           
						}
						if (key.Ta == null) {
//							TA = '<div id="ta" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chkta" onchange="changevalue1(64,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="ta_1" style="display:none"> ' + d + '</div>';
                            TA='';
						}
						if (key.GSTR3B == null) {
//							GSTR3B = '<div id="gstr3b" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkgstr3b" onchange="changevalue1(65,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> 										<span class="switch-handle"></span> </label></div> <div id="gstr3b_1" style="display:none"> ' + d + '</div>';
                            GSTR3B='';
						}
						if (key.GSTR1 == null) {
//							GSTR1 = '<div id="gstr" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkgstr" onchange="changevalue1(66,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="gstr_1" style="display:none"> ' + d + '</div>';
                            GSTR1='';
						}
						if (key.GSTR2 == null) {
//							GSTR2 = '<div id="GSTR2" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(67,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR2_1" style="display:none"> ' + d + '</div>';
                            GSTR2='';
						}
						if (key.GSTR3 == null) {
//							GSTR3 = '<div id="GSTR3" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR3" onchange="changevalue1(68,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR3_1" style="display:none"> ' + d + '</div>';
                            GSTR3='';
						}
						if (key.FC == null) {
							FC = '<div id="FC" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFC" onchange="changevalue1(70,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="FC_1" style="display:none"> ' + d + '</div>';
                           
						}


                        
    $('#tblgstregular tbody').append('<tr><td rowspan="2" colspan="2"><table class="table table-bordered table_gst" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table  height="60px"><tr></tr></table> </td></tr>');            
//    $('#tblgstregular tbody').append('<tr><td> <table class="table table-bordered table_gst" height="60px"><tr> <td width="25%" style="font-size: 20px;">B/C</td> <td width="25%" style="font-size: 17px;">' + BR + '</td></tr> </table> </td><td rowspan="2" colspan="2"><table class="table table-bordered table_gst" height="138px"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table  height="60px"><tr></tr></table> </td></tr>');
						sno++;

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



                    $('#GSTCcompany').val(key.P_name);                  
                        $('#GSTCcategory').val(key.Status_Name);


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
                            BR='';
//							BR = '<div id="brc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkbrc" onchange="changevalue2(63,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="brc_1" style="display:none">' + d + '</div>';
                            
                          
						}
						if (key.Ta == null) {
//							TA = '<div id="tac" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chktac" onchange="changevalue2(64,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="tac_1" style="display:none"> ' + d + '</div>';
                            TA='';
						}
						if (key.GSTR2 == null) {
//							GSTR2 = '<div id="GSTR2c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2c" onchange="changevalue2(67,' + compoundingId + ')"/>		<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR2c_1" style="display:none"> ' + d + '</div>';
                            GSTR2='';
						}
						if (key.GSTR3 == null) {
//							GSTR3 = '<div id="GSTR3c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR3c" onchange="changevalue2(68,' + compoundingId + ')"/>		<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR3c_1" style="display:none"> ' + d + '</div>';
                            
                            GSTR3='';
						}

						if (key.GSTR4 == null) {
//							GSTR4 = '<div id="GSTR4c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR4c" onchange="changevalue2(69,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR4c_1" style="display:none"> ' + d + '</div>';
                            GSTR4='';
						}
						if (key.FC == null) {
							FC = '<div id="FCcc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCcc" onchange="changevalue2(70,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="FCcc_1" style="display:none"> ' + d + '</div>';
                           
						}


						var n = $('#drpCompountingMonth').val() / 3;
						if (n == 1 || n == 2 || n == 3 || n == 4) {
                            
// 
//                            
//                            $('#tblgstCompounding').append('<tbody><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">B/R</td><td width="25%" style="font-size: 17px;">'+ BR +'</td></tr></table></td><td> <table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">T/A</td>     <td width="25%" style="font-size: 17px;">'+ TA +'</td></tr></table></td></tr><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">Bank A/C</td><td width="25%" style="font-size: 17px;">'+ GSTR2 +'</td></tr></table></td><td rowspan="2" colspan="2"><table class="table table-bordered table_comp" height="138px"><tr><td style="text-align:left;font-size: 20px;">FEE</td><td>'+  key.Actual_Fee +'</td></tr><tr><td style="text-align:left;font-size: 20px;">Collected</td><td>'+ FC +'</td></tr></table></td></tr><tr><td>      <table class="table table-bordered table_comp" height="60px"> <tr><td width="25%" style="font-size: 20px;">Exp A/C</td><td width="25%" style="font-size: 17px;">'+ GSTR3 +'</td></tr></table> </td></tr><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">GSTR4</td><td width="25%" style="font-size: 17px;">'+ GSTR4 +'</td></tr></table></td></tr></tbody>');
                            
                            
$('#tblgstCompounding').append('<tbody><tr><td rowspan="2" colspan="2"><table class="table table-bordered table_comp" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table  height="60px"><tr></tr></table> </td></tr></tbody>');
                            

						} else {

//                                  $('#tblgstCompounding').append('<tbody><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">B/R</td><td width="25%" style="font-size: 17px;">'+ BR +'</td></tr></table></td><td> <table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">T/A</td>     <td width="25%" style="font-size: 17px;">'+ TA +'</td></tr></table></td></tr><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">Bank A/C</td><td width="25%" style="font-size: 17px;">'+ GSTR2 +'</td></tr></table></td><td rowspan="2" colspan="2"><table class="table table-bordered table_comp" height="138px"><tr><td style="text-align:left;font-size: 20px;">FEE</td><td>'+  key.Actual_Fee +'</td></tr><tr><td style="text-align:left;font-size: 20px;">Collected</td><td>'+ FC +'</td></tr></table></td></tr><tr><td>      <table class="table table-bordered table_comp" height="60px"> <tr><td width="25%" style="font-size: 20px;">Exp A/C</td><td width="25%" style="font-size: 17px;">'+ GSTR3 +'</td></tr></table> </td></tr> </tbody>');
                            
$('#tblgstCompounding').append('<tbody><tr><td rowspan="2" colspan="2"><table class="table table-bordered table_comp" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table  height="60px"><tr></tr></table> </td></tr></tbody>');
                            
						}
						sno++;


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
//						BR = '<div id="br" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(63,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No"  style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="br_1" style="display:none">' + d + '</div>';
                        BR='';
                       
					}
					if (key.Ta == null) {
//						TA = '<div id="ta" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(64,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="ta_1" style="display:none"> ' + d + '</div>';
                        TA='';
					}
					if (key.GSTR3B == null) {
//						GSTR3B = '<div id="gstr3b" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(65,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> 										<span class="switch-handle"></span> </label></div> <div id="gstr3b_1" style="display:none"> ' + d + '</div>';
                        GSTR3B='';
					}
					if (key.GSTR1 == null) {
//						GSTR1 = '<div id="gstr" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(66,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="gstr_1" style="display:none"> ' + d + '</div>';
                        GSTR1='';
					}
					if (key.GSTR2 == null) {
//						GSTR2 = '<div id="GSTR2" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(67,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR2_1" style="display:none"> ' + d + '</div>';
                        
                        GSTR2='';
					}
					if (key.GSTR3 == null) {
//						GSTR3 = '<div id="GSTR3" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(68,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR3_1" style="display:none"> ' + d + '</div>';
                        
                        GSTR3='';
					}
					if (key.FC == null) {
						FC = '<div id="FC" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue1(70,' + regularid + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="FC_1" style="display:none"> ' + d + '</div>';
                        
                       
					}


			
                       $('#tblgstregular tbody').append('<tr><td rowspan="2" colspan="2"><table class="table table-bordered table_gst" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table  height="60px"><tr></tr></table> </td></tr>');
                    
//                       $('#tblgstregular tbody').append('<tr><td> <table class="table table-bordered table_gst" height="60px"><tr> <td width="25%" style="font-size: 20px;">B/C</td> <td width="25%" style="font-size: 17px;">' + BR + '</td></tr> </table> </td><td rowspan="2" colspan="2"><table class="table table-bordered table_gst" height="138px"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table  height="60px"><tr></tr></table> </td></tr>');
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
                        BR='';
//						BR = '<div id="brc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkbrc" onchange="changevalue2(63,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="brc_1" style="display:none">' + d + '</div>';
                       
					}
					if (key.Ta == null) {
                        TA='';
//						TA = '<div id="tac" style="display:block"><label class="switch"><input class="switch-input" type="checkbox" id="chktac" onchange="changevalue2(64,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label> </div> <div id="tac_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR3B == null) {
                        GSTR3B='';
//						GSTR3B = '<div id="gstr3b" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue2(65,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> 										<span class="switch-handle"></span> </label></div> <div id="gstr3b_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR1 == null) {
                        GSTR1='';
//						GSTR1 = '<div id="gstr" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2" onchange="changevalue2(66,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="gstr_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR2 == null) {
                        GSTR2='';
//						GSTR2 = '<div id="GSTR2c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR2c" onchange="changevalue2(67,' + compoundingId + ')"/>		<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR2c_1" style="display:none"> ' + d + '</div>';
					}
					if (key.GSTR3 == null) {
                        GSTR3='';
//						GSTR3 = '<div id="GSTR3c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR3" onchange="changevalue2(68,' + compoundingId + ')"/>		<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR3c_1" style="display:none"> ' + d + '</div>';
					}

					if (key.GSTR4 == null) {
                        GSTR4='';
//						GSTR4 = '<div id="GSTR4c" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkGSTR4c" onchange="changevalue2(69,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="GSTR4c_1" style="display:none"> ' + d + '</div>';
					}
					if (key.FC == null) {
						FC = '<div id="FCcc" style="display:block"> <label class="switch"><input class="switch-input" type="checkbox" id="chkFCcc" onchange="changevalue2(70,' + compoundingId + ')"/>					<span class="switch-label" data-on="Yes" data-off="No" style="background: #3c9faf;"></span> <span class="switch-handle"></span> </label></div> <div id="FCcc_1" style="display:none"> ' + d + '</div>';
                        
					}

					
					var n = $('#drpCompountingMonth').val() / 3;
					if (n == 1 || n == 2 || n == 3 || n == 4) {
//						    $('#tblgstCompounding').append('<tbody><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">B/R</td><td width="25%" style="font-size: 17px;">'+ BR +'</td></tr></table></td><td> <table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">T/A</td>     <td width="25%" style="font-size: 17px;">'+ TA +'</td></tr></table></td></tr><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">Bank A/C</td><td width="25%" style="font-size: 17px;">'+ GSTR2 +'</td></tr></table></td><td rowspan="2" colspan="2"><table class="table table-bordered table_comp" height="138px"><tr><td style="text-align:left;font-size: 20px;">FEE</td><td>'+  key.Actual_Fee +'</td></tr><tr><td style="text-align:left;font-size: 20px;">Collected</td><td>'+ FC +'</td></tr></table></td></tr><tr><td>      <table class="table table-bordered table_comp" height="60px"> <tr><td width="25%" style="font-size: 20px;">Exp A/C</td><td width="25%" style="font-size: 17px;">'+ GSTR3 +'</td></tr></table> </td></tr><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">GSTR4</td><td width="25%" style="font-size: 17px;">'+ GSTR4 +'</td></tr></table></td></tr></tbody>');
    $('#tblgstCompounding').append('<tbody><tr><td rowspan="2" colspan="2"><table class="table table-bordered table_comp" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table  height="60px"><tr></tr></table> </td></tr></tbody>');
                            
					} else {
//						   $('#tblgstCompounding').append('<tbody><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">B/R</td><td width="25%" style="font-size: 17px;">'+ BR +'</td></tr></table></td><td> <table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">T/A</td>     <td width="25%" style="font-size: 17px;">'+ TA +'</td></tr></table></td></tr><tr><td><table class="table table-bordered table_comp" height="60px"><tr><td width="25%" style="font-size: 20px;">Bank A/C</td><td width="25%" style="font-size: 17px;">'+ GSTR2 +'</td></tr></table></td><td rowspan="2" colspan="2"><table class="table table-bordered table_comp" height="138px"><tr><td style="text-align:left;font-size: 20px;">FEE</td><td>'+  key.Actual_Fee +'</td></tr><tr><td style="text-align:left;font-size: 20px;">Collected</td><td>'+ FC +'</td></tr></table></td></tr><tr><td>      <table class="table table-bordered table_comp" height="60px"> <tr><td width="25%" style="font-size: 20px;">Exp A/C</td><td width="25%" style="font-size: 17px;">'+ GSTR3 +'</td></tr></table> </td></tr> </tbody>');
    $('#tblgstCompounding').append('<tbody><tr><td rowspan="2" colspan="2"><table class="table table-bordered table_comp" height="138px" style="width: 107%!important;"><tr><td style="text-align:left;font-size: 20px;    width: 25%;">FEE</td><td width="25%" style="font-size: 17px;">' + key.Actual_Fee + '</td></tr><tr><td style="text-align:left;font-size: 20px;    width: 25%;">Collected</td><td width="25%" style="font-size: 17px;">' + FC + '</td></tr></table></td></tr><tr><td> <table  height="60px"><tr></tr></table> </td></tr></tbody>');
                            
					}
					sno++;
				});
			}
		});

	}

</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>