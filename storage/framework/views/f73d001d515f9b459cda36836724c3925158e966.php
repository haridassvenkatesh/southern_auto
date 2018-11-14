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
                                        <h4>Daily Report Details</h4>
                                    </div>
                                </center>
                            </div>
                          

                            <div class="block-content collapse in">

                                <div class="span12" style="margin-left:0px;">  
                       
                              <div class=" form-horizontal">
                        <div class="span3"></div>
                        <div class="span6">
                            <div class="control-group">
                                <label class="control-label" for="category">Date</label>
                                <div class="controls">
                                    <input type="text" id="date1" name="date1" onchange="Sample()"/> <br/>

                                </div>
                            </div>
                        </div>
                        <div class="span3"></div>
                        </div>   
                          </div>  
                       
                        <div class="span12" style="margin-left:0px;">                       
                            <table class="table table-bordered" id="tblGst">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Employee Name</th>
                                        <th style="text-align: center;">GST Regular</th>
                                        <th style="text-align: center;">GST Compounding</th>
                                        <th style="text-align: center;">IT Individual</th>
                                        <th style="text-align: center;">IT Concern(GST)</th>
                                        <th style="text-align: center;">TDS Individual</th>
                                        <th style="text-align: center;">TDS Concern(GST)</th>
                                        <th style="text-align: center;">Total Fee</th>
                                        <th style="text-align: center;">Total</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php 
                                    $totalgstregular =0;
                                                $totalgstcompounding =0;
                                                $totalitindividual =0;
                                                $totalitconcern =0;
                                                $totaltdsindividual =0;
                                                $totaltdsconcern =0;
                                                $totalrow=0;
                                                $totaltFee=0;
                                                $totalcolumn =0;?>
                                  
                                      <?php $sno = 1;  if(!empty($data['result'])) { ?> 
                                    <?php $__currentLoopData = $data['result']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                     <?php
                                       
    $EmpName=$r[0]->First_Name;
    $EmpID=$r[0]->empid;
   
    $GSTRcount = $r[0]->gstregularcount;
    $GSTccount = $r[0]->gstcompoundingtotal;
    $ITicount = $r[0]->itindividualtotal;
    $ITcccount = $r[0]->itconcerntotal;
    $TDSicount = $r[0]->tdsindividualtotal;
    $TDScccount = $r[0]->tdsconcerntotal;
    $compnayfeetotal = $r[0]->compamyfeetotal;
    $customerfeetotal = $r[0]->customerfeetotal;
    
    
    if($EmpName == '')										
												$EmpName = '';
											if($GSTRcount == '')										
												$GSTRcount = 0;
											if($GSTccount == '')										
												$GSTccount = 0;
											if($ITicount == '')										
												$ITicount = 0;
											if($ITcccount == '')										
												$ITcccount = 0;
											if($TDSicount == '')										
												$TDSicount = 0;
											if($TDScccount == '')										
												$TDScccount = 0;
                                            if($compnayfeetotal == '')										
												$compnayfeetotal = 0;
                                            if($customerfeetotal == '')										
												$customerfeetotal = 0;
    
    $totalgstregular=$totalgstregular+$GSTRcount;
    $totalgstcompounding=$totalgstcompounding+$GSTccount;
    $totalitindividual=$totalitindividual+$ITicount;
    $totalitconcern=$totalitconcern+$ITcccount;
    $totaltdsindividual=$totaltdsindividual+$TDSicount;
    $totaltdsconcern=$totaltdsconcern+$TDScccount;
    $totaltFee=$totaltFee+($compnayfeetotal+$customerfeetotal);
    
                                     ?>
                                     <tr>
                                                        <td style="text-align:center"><a href="daily_report_details_Company_wise?Empid=<?= $EmpID ?>&Date=<?= $data["date"]?>"><b><?= $EmpName ?> </b></a></td>
                                                        <td style="text-align:center"><b><?= $GSTRcount ?> </b></td>
                                                        <td style="text-align:center"><b><?= $GSTccount ?> </b></td>
                                                        <td style="text-align:center"><b><?= $ITicount ?> </b></td>
                                                        <td style="text-align:center"><b><?= $ITcccount ?> </b></td>
                                                        <td style="text-align:center"><b><?= $TDSicount ?> </b></td>
                                                        <td style="text-align:center"><b><?= $TDScccount ?> </b></td>
                                                        <td style="text-align:center"><b><?= ($compnayfeetotal+$customerfeetotal) ?> </b></td>
                                                        <td style="text-align:center"><b><?= ($TDScccount+$TDSicount+$ITcccount+$ITicount+$GSTccount+$GSTRcount) ?> </b></td>
                                                       
                                    </tr>
                                     <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    <?php }?>
                                    
                                    
                                </tbody>
                                 <tfoot style="background: #e6e3e3;">
                                            <tr>
                                                <td colspan="1" style="text-align:center"><b>TOTAL</b></td>
                                             
                                                <td style="text-align:center">
                                                   <b><?= $totalgstregular ?></b>
                                                </td>
                                                <td style="text-align:center">
                                                   <?= $totalgstcompounding?>
                                                </td>
                                                <td style="text-align:center">
                                                     <?= $totalitindividual?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?= $totalitconcern?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?= $totaltdsindividual?>
                                                </td>
                                                <td style="text-align:center">
                                                     <?= $totaltdsconcern?>
                                                </td>
                                                  <td style="text-align:center">
                                                     <?= $totaltFee?>
                                                </td>
                                                <td style="text-align:center">
                                                   <?= ($totalgstregular+$totalgstcompounding+$totalitindividual+$totalitconcern+$totaltdsindividual+$totaltdsconcern)?>
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
var d = new Date();

var month = d.getMonth()+1;
var day = d.getDate();
    
var ToDaydate=((''+day).length<2 ? '0' : '') + day+'-'+((''+month).length<2 ? '0' : '') + month + '-'+d.getFullYear();
$('#date1').val(ToDaydate);
   
    
    
$('#date1').datepicker({
    changeMonth: true,
    changeYear: true,
  //  showButtonPanel: true,
    dateFormat: "dd-mm-yy"
});
    
    function Sample(){
        
        	$.ajax({
			url: "date_onchange",
			type: 'get',
			data: {
				date: $('#date1').val()
			},
			success: function(data) {
			
                console.log(data);
                	$('#tblGst tbody').empty();
					$('#tblGst tfoot').empty();

               
                   var totalgstregular =0;
                   var totalgstcompounding =0;
                   var totalitindividual =0;
                   var totalitconcern =0;
                   var totaltdsindividual =0;
                   var totaltdsconcern =0;
                   var totalrow=0;
                   var totaltFee=0;
                   var totalcolumn =0;
                
                	$.each(data['result'], function(i, key) {
                        
   var EmpName=key[0].First_Name;
   var EmpID=key[0].empid;
   
   var GSTRcount = key[0].gstregularcount;
   var GSTccount = key[0].gstcompoundingtotal;
   var ITicount = key[0].itindividualtotal;
   var ITcccount = key[0].itconcerntotal;
   var TDSicount = key[0].tdsindividualtotal;
   var TDScccount = key[0].tdsconcerntotal;
   var compnayfeetotal =  key[0].compamyfeetotal;
   var customerfeetotal =  key[0].customerfeetotal;
    
    if(EmpName == '')										
												EmpName = '';
											if(GSTRcount == ''||GSTRcount==null)										
												GSTRcount = 0;
											if(GSTccount == ''||GSTccount==null)										
												GSTccount = 0;
											if(ITicount == ''||ITicount==null)										
												ITicount = 0;
											if(ITcccount == ''||ITcccount==null)										
												ITcccount = 0;
											if(TDSicount == ''||TDSicount==null)										
												TDSicount = 0;
											if(TDScccount == ''||TDScccount==null)										
												TDScccount = 0;
                        
                        if(compnayfeetotal == ''||compnayfeetotal==null)										
												compnayfeetotal = 0;
                        if(customerfeetotal == ''||customerfeetotal==null)										
												customerfeetotal = 0;
                        
                          var result = parseInt(GSTRcount) + parseInt(GSTccount)+ parseInt(ITicount) + parseInt(ITcccount)+parseInt(TDSicount)+parseInt(TDScccount);
                        var feetotal=parseInt(compnayfeetotal) + parseInt(customerfeetotal)
                   
                        
        $('#tblGst tbody').append('<tr><td style="text-align:center"><a href="daily_report_details_Company_wise?Empid='+EmpID+'&Date='+data['date']+'"><b>'+EmpName+'</b></a></td><td style="text-align:center"><b>'+GSTRcount+'</b></td> <td style="text-align:center"><b>'+GSTccount +'<b></td><td style="text-align:center"><b>'+ITicount +'</b></td><td style="text-align:center"><b>'+ITcccount+'</b></td><td style="text-align:center"><b>'+ TDSicount+' </b></td><td style="text-align:center"><b>'+TDScccount+'</b></td></td><td style="text-align:center"><b>'+feetotal+'</b></td><td style="text-align:center"><b>'+result+'</b></td></tr>');
						
    totalgstregular=parseInt(totalgstregular)+parseInt(GSTRcount);
    totalgstcompounding=parseInt(totalgstcompounding)+parseInt(GSTccount);
    totalitindividual=parseInt(totalitindividual)+parseInt(ITicount);
    totalitconcern=parseInt(totalitconcern)+parseInt(ITcccount);
    totaltdsindividual=parseInt(totaltdsindividual)+parseInt(TDSicount);
    totaltdsconcern=parseInt(totaltdsconcern)+parseInt(TDScccount);
    totaltFee=parseInt(totaltFee)+parseInt(compnayfeetotal)+parseInt(customerfeetotal);
                        
                        
                    });
                
                
        $('#tblGst tfoot').append(' <tr><td colspan="1" style="text-align:center"><b>TOTAL</b></td><td style="text-align:center"><b>'+totalgstregular+'</b></td><td style="text-align:center">'+totalgstcompounding+'</td><td style="text-align:center">'+totalitindividual+'</td><td style="text-align:center">'+totalitconcern+'</td><td style="text-align:center">'+totaltdsindividual+'</td><td style="text-align:center">'+totaltdsconcern+'</td><td style="text-align:center">'+totaltFee+'</td><td style="text-align:center">'+(totalgstregular+totalgstcompounding+totalitindividual+totalitconcern+totaltdsindividual+totaltdsconcern)+'</td></tr>');
                
			},
                error: function(data) {
				alert(error);
			}
		});
    }
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>