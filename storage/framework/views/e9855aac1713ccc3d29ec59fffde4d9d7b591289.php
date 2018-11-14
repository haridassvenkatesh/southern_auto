 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style>
.table-responsive .open > .dropdown-menu{
overflow-y: scroll;
height: 100px;
}
</style>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" id="content" ng-app="company_app" ng-controller="company_controller">

			<div class="row-fluid">
				<!-- block -->
				<div class="block">
					<div class="muted pull-left">
						<button type="submit" class="btn btn-warning" style="margin-top: 10%;margin-left: 10%;" onClick="goBack()">Return</button>
					</div>
					<div class="navbar navbar-inner block-header">
						<?php $title = "GST REGULAR";
                               if($data['tax'] == 8)
                                    $title = "GST COMPOUNDING";
                              if($data['tax'] == 71)
	                                                                  $title = "TDS INDIVIDUAL";
                              if($data['tax'] == 72)
                                                                  $title = "TDS CONCERN";
                                    ?>
						<center>
							<div class="muted pull-center">
								<?= Session::get('drpEmployeeName') ?> -
									<?= $title ?> -
										<?php echo $data['mname']." - ".Session::get('reportYear'); ?>
							</div>
						</center>
					</div>
					<div class="block-content collapse in">
                        <input type="hidden" name="userId" id="userId" value="<?= $data['userId'] ?>">     
                        <input type="hidden" name="tax" id="tax" value="<?= $data['tax'] ?>">
                        <input type="hidden" name="month" id="month" value="<?= $data['month'] ?>">
                        <input type="hidden" name="year" id="year" value="<?= $data['year'] ?>">
                      

                          <div class="table-responsive">

                            <table id="tblCompany" class="table table-bordered" data-side-pagination="server">

                            </table>
                        </div>
<!--
						<table class="table table-bordered" id="tblCompany">
							<?php if($data['tax'] != 71 && $data['tax'] != 72) { ?>

							<thead>
								<tr>
									<th rowspan="2"><b>SNO</b></th>
									<th rowspan="2"><b>Company</b></th>
									
									<th rowspan="2"><b>Phone</b></th>
<th rowspan="2"><b>Circle</b></th>
									<th rowspan="2">Name</th>

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
								</tr>

								<tr>
									<th style="text-align:center">Fee</th>
									<th style="text-align:center">Collected</th>
								</tr>
							</thead>

							<tbody>
								<?php $sno=1;?> <?php $__currentLoopData = $data['Company'][0][0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                        $cf=0;
                                                    	if($data['tax'] == 7 || $data['tax'] == 8 )
                                                        {
                                                         
                                                        if($r->cf == 0) { 
                                                        $cf=$r->Actual_Fee; 
                                                        }
                                                        else{
                                                            $cf=$r->cf; 
                                                            
                                                        }
                                                        }
                                                    
                                                
                                                ?>

								<tr>
									<td>
										<?= $sno ?>
									</td>
									<td>
										<?= $r->Company_Name ?>
									</td>
									<td>
										<?= $r->Phone_No1 ?>
									</td>
									<td>
										<?= $r->circle  ?>
									</td>
									<td>
										<?= $r->First_Name ?>
									</td>
									<td>
										<?= $r->br ?>
									</td>
									<td>
										<?= $r->ta ?>
									</td>
									<?php if($data['tax'] == 7): ?>
									<td>
										<?php ?>
										<?= $r->gstr3b ?>
									</td>
									<td>
										<?= $r->gstr1 ?>
									</td>

									<?php endif; ?>


									<td>
										<?= $r->gstr2 ?>
									</td>
									<td>
										<?= $r->gstr3 ?>
									</td>
									<?php if($data['tax'] == 8): ?>
									<td>
										<?= $r->gstr4 ?>
									</td>
									<?php endif; ?>
									<td>
										<?=  $cf ?>
									</td>
									<td>
										<?=  $r->fc ?>
									</td>

								</tr>

<?php  $sno++; ?> 
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


							</tbody>

							<?php } else { ?>
							<thead>
								<tr>
									<th rowspan="2">Sno</th>
									<th rowspan="2">Customer</th>
									<th rowspan="2">Contact</th>
									<th rowspan="2">TC</th>
									<th rowspan="2">TP</th>
									<th rowspan="2">RF</th>

									<th colspan="2">Fees Collection</th>
								</tr>

								<tr>
									<th style="text-align:center">Fee</th>
									<th style="text-align:center">Collected</th>
								</tr>
							</thead>
							<tbody>
								<?php $sno=1;?> <?php $__currentLoopData = $data['Company'][0][0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                $cf=0;
                                    if($data['tax'] == 71 || $data['tax'] == 72) {
                                                        if($r->cf == 0) { 
                                                        $cf=$r->fee; 
                                                        }
                                                        else{
                                                            $cf=$r->cf; 
                                                            
                                                        }
                                                                                }?>
								<tr>
									<td>
										<?= $sno ?>
									</td>
									<td>
										<?= $r->name ?>
									</td>
									<td>
										<?= $r->contact_no ?>
									</td>
									<td>
										<?= $r->tc ?>
									</td>
									<td>
										<?= $r->tp ?>
									</td>
									<td>
										<?= $r->rf ?>
									</td>
									<td>
										<?= $cf ?>
									</td>
									<td>
										<?=  $r->fc ?>
									</td>


								</tr>
								<?php  $sno++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</tbody>
							<?php }  ?>

						</table>
-->

					</div>

				</div>
				<!-- /block -->
			</div>

		</div>
	</div>
	<hr>
</div>
<script src="<?php echo e(asset('/datatable/bootstrap-table.js')); ?>"></script>
<script src="<?php echo e(asset('/datatable/bootstrap-table-en-US.js')); ?>"></script>
<script src="<?php echo e(asset('/datatable/jquery.tablednd.js')); ?>"></script>
<script src="<?php echo e(asset('/datatable/tableExport.js')); ?>"></script>
<script src="<?php echo e(asset('/datatable/bootstrap-table-export.js')); ?>"></script>
<!-- pdf download -->
<script type="text/javascript" src="<?php echo e(asset('/datatable/FileSaver.min.js')); ?>"></script>
<script src="<?php echo e(asset('/datatable/jspdf.min.js')); ?>"></script>
<script src="<?php echo e(asset('/datatable/jspdf.plugin.autotable.js')); ?>"></script>
<script>
	$(document).ready(function() {
		$('#tblCompany').DataTable({
			"order": [
				[2, "asc"]
			],
			"pageLength": 50,
			//"dom": '<"top"i>rt<"bottom"flp><"clear">'
			"sDom": 'Rfrtlip',
		});
	});

</script>


<script>
	function goBack() {
		window.location.href = "employeeStatus";
	}
    
    var userId=$('#userId').val();
    var tax=$('#tax').val();
    var month=$('#month').val();
    var year=$('#year').val();
    var gstr4visible=false; 
    var gstr3Bvisible=false;
    var gstr1visible=false;

    
    if(tax==7 || tax==8){
       
        if(tax==7){
            gstr4visible=false; 
            gstr3Bvisible=true;
            gstr1visible=true;

        }
        else{
            
            gstr4visible=true;
            gstr3Bvisible=false;
            gstr1visible=false;
        }
// /   $('#tblCompany').bootstrapTable('destroy');
     $('#tblCompany').bootstrapTable({
        method: 'get',
        url: 'report_bootstrap_table_GST?year='+year+'&tax='+tax+'&month='+month+'&userId='+userId,
        cache: false,
        striped: true,
        pagination: true,
        pageSize: 50,
        pageList: [10, 25, 50, 100, 200, 'All'],
        search: true,
        showColumns: true,
        minimumCountColumns: 2,
        clickToSelect: true,
        showExport: true,
        showPaginationSwitch: true,
        exportDataType: 'all',
        exportTypes: ['csv', 'txt', 'excel', 'pdf'],
        exportOptions: {
            "fileName": "Report"
        },

        columns: [{
                
                "title": "Sno",
                "align": "center",               
                "visible": true,
                "formatter": "serialNumber"
        }
            , {
                "field": "Company_Name",
                "title": "Company Name",
                "align": "left",
                "class": "aligndiv",
                "visible": true

            },
                    {
                "field": "Phone_No1",
                "title": "Mobile Number",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            }
                  ,
 {
                "field": "circle",
                "title": "Circle",
                "align": "left",
                "class": "aligndiv",
                "visible": false,

            },
                   {
                "field": "First_Name",
                "title": "Name",
                "align": "left",
                "class": "aligndiv",
                "visible": false,

            }
                  ,
            {
                "field": "br",
                "title": "Bill Received",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            },
                   {
                "field": "ta",
                "title": "Tally Accounted",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            }
                  ,
            {
                "field": "gstr3b",
                "title": "GSTR 3B",
                "align": "left",
                //"valign": "bottom",
                "visible": gstr3Bvisible,
                //"formatter": "discountValueLinks"
            }
                    ,
            {
                "field": "gstr1",
                "title": "GSTR 1",
                "align": "left",
                //"valign": "bottom",
                "visible": gstr1visible,
                //"formatter": "discountValueLinks"
            },
                   {
                "field": "gstr2",
                "title": "Bank A/C",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            },
                     {
                "field": "gstr3",
                "title": "EXP A/C",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            }
                  ,
                         {
                "field": "gstr4",
                "title": "GSTR 4",
                "align": "left",
                //"valign": "bottom",
                "visible": gstr4visible,
                //"formatter": "discountValueLinks"
            }    ,
                       {
                "field": "cf",
                "title": "Fee",
                "align": "left",
//                "visible": true,
                //"valign": "bottom",
              //  "formatter": "feecollection",
                "formatter": "feecollection"
            }
                  ,
                         {
                "field": "fc",
                "title": "Collected",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            }    

 
        ]
    });
        
    }
    
    if(tax==71 || tax==72){
        
        // /   $('#tblCompany').bootstrapTable('destroy');
     $('#tblCompany').bootstrapTable({
        method: 'get',
        url: 'report_bootstrap_table_GST?year='+year+'&tax='+tax+'&month='+month+'&userId='+userId,
        cache: false,
        striped: true,
        pagination: true,
        pageSize: 50,
        pageList: [10, 25, 50, 100, 200, 'All'],
        search: true,
        showColumns: true,
        minimumCountColumns: 2,
        clickToSelect: true,
        showExport: true,
        showPaginationSwitch: true,
        exportDataType: 'all',
        exportTypes: ['csv', 'txt', 'excel', 'pdf'],
        exportOptions: {
            "fileName": "Report"
        },        columns: [{
                
                "title": "Sno",
                "align": "center",               
                "visible": true,
                "formatter": "serialNumber"
        }
            , {
                "field": "name",
                "title": "Customer Name",
                "align": "left",
                "class": "aligndiv",
                "visible": true

            },
                    {
                "field": "contact_no",
                "title": "Mobile Number",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            }
                  ,
 {
                "field": "tc",
                "title": "TC",
                "align": "left",
                "class": "aligndiv",
                "visible": true,

            },
                   {
                "field": "tp",
                "title": "TP",
                "align": "left",
                "class": "aligndiv",
                "visible": true,

            }
                  ,
            {
                "field": "rf",
                "title": "RF",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            },
                       {
                "field": "cf",
                "title": "Fee",
                "align": "left",
//                "visible": true,
                //"valign": "bottom",
              //  "formatter": "feecollection",
                "formatter": "feecollection"
            }
                  ,
                         {
                "field": "fc",
                "title": "Collected",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            }    

 
        ]

    });
        
    }

    $('.search').find("input[type=text]").attr("placeholder", "Search");

    $('.search').addClass('sea_po_abs_pm');
    $('.columns').addClass('sea_po_abs_2');
    function serialNumber(value, row, index) {
        console.log(1 + index);
        return 1 + index;
    }
    function feecollection(value, row, index){
    var cf=row.cf;
    if(cf>0){
        cf=row.cf;
        
    }else{
        cf=row.fee;
    }
    return cf;
    
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>