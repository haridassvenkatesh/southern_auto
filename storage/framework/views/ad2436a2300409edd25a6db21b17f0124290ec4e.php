  <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style>
.table-responsive .open > .dropdown-menu{
overflow-y: scroll;
height: 100px;
}
</style>
<?php 
//foreach($data['company'] as $row)
//{
//    
//    echo "<pre>";print_r($row['complete']);
//}die;
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" id="content" >
			<div >
				<div class="row-fluid">


					<div class="block-content collapse in">


						<div class="row-fluid">
							<!-- block -->
							<div class="block">
								<div class="navbar navbar-inner block-header">
									<?php $title = "IT INDIVIDUAL";
                                if($data['type'] == 61)
                                    $title = "IT CONCERN";
                                    ?>
									<center>
										<div class="muted pull-left">REPORT</div>
										<div class="muted pull-center"><b><?= $title ?>&nbsp;&nbsp;<?= $data['year'] ?><?php echo" - ";?><?= $data['year']+1 ?></b></div>
									</center>
								</div>
								<input type="hidden" name="hdnTax" id="hdnTax" value="<?= $data['type'] ?>">
								<div class="block-content collapse in">

									<input type="hidden" name="page" id="page">
									<div class="span12">

<!--
										<div class="span3">
											<label class="control-label" for="company_name">Financial Year</label>
											<div class="control-group">
												<div class="controls">
													<select id="drpYear" onchange="changeValue()">
                                                        
                                                       
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
-->
                                        <div class="span4">
                                            <label class="control-label" for="total_customer">Total Customer</label>
											<div class="control-group">
												<div class="controls">
                                            <input type="text" value="<?= $data['Total_Customer'] ?>" id="total_customer" name="total_customer" class="form-control" readonly>
                                                </div>
                                            </div>
                                           
                                
                                        </div>
                                        <div class="span4">
                                            <label class="control-label" for="total_Success">Success</label>
											<div class="control-group">
												<div class="controls">
                                            <input type="text" value="<?= $data['success_count'] ?>" id="total_Success" name="total_Success" class="form-control" readonly>
                                                </div>
                                            </div>
                                            
                                        </div>
                                         <div class="span4">
                                             <label class="control-label" for="total_pending">Pending</label>
											<div class="control-group">
												<div class="controls">
                                             <input type="text" value="<?= $data['failure_count'] ?>" id="total_pending" name="total_pending" class="form-control" readonly>
                                                </div>
                                             </div>
                                             
                                        </div>
									</div>
									<div class="span12" style="margin-left:0px;">
                                        
                                         <div class="table-responsive">

                            <table id="tblCompany" class="table table-bordered" data-side-pagination="server">

                            </table>
                        </div>
<!--
										<table class="table table-bordered" id="tblCompany">
											<thead>
												<tr>
													<th rowspan="2"><b>SNO</b></th>
													<th rowspan="2"><b>Customer</b></th>
													<?php if($data['type'] == 61) { ?>
													<th rowspan="2"><b>Company Name</b></th>
													<?php } ?>
													<th rowspan="2"><b>Phone</b></th>
													<th rowspan="2">Name</th>
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
											<tbody>
												<?php $sno = 1; foreach($data['result'] as $row) {  ?>
                                                <?php
                                                         $cf=0;
                                                        if($row->cf == 0) { 
                                                        $cf=$row->fee; 
                                                        }
                                                        else{
                                                            $cf=$row->cf; 
                                                            
                                                        }
                                                
                                                ?>
												<tr>
													<td>
														<?= $sno ?>
													</td>
													<td>
														<?= $row->name ?>
													</td>
													<?php if($data['type'] == 61) { ?>
													<td>

														<?= $row->company_name ?>
													</td>
													<?php } ?>
													<td>

														<?= $row->contact_no ?>
													</td>
													<td>
														<?= $row->First_Name ?>
													</td>
													<td>
														<?= $row->dr ?>
													</td>
													<td>
														<?= $row->field ?>
													</td>
													<td>
														<?= $row->cpc ?>
													</td>
													<td>
														<?= $cf ?>
													</td>
													<td>
														<?= $row->fc ?>
													</td>
												</tr>
                                               
												<?php $sno++; }  ?>
											</tbody>
										</table>
-->


									</div>
								</div>
							</div>
							<!-- /block -->
						</div>
						<input type="hidden" name="hdntax" id="hdntax" value="<?= $data['tax'] ?>">						<input type="hidden" name="year" id="year" value="<?= $data['year'] ?>">
						<input type="hidden" name="drpStatus" id="drpStatus" value="<?= $data['drpStatus'] ?>">


					</div>

				</div>
			</div>
			<hr>
		</div>
	</div>
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
   
var hdntax=$('#hdntax').val();
var year=$('#year').val();
var drpStatus=$('#drpStatus').val();
var compnaynamevisible=false;
    if($('#hdntax').val()==60){
       
       compnaynamevisible=false;
       }
    else{
        compnaynamevisible=true;
        
    }

     $('#tblCompany').bootstrapTable({
        method: 'get',
        url: 'report_bootstrap_table_IT?year='+year+'&hdntax='+hdntax+'&drpStatus='+drpStatus,
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
                //"field": "enquiryNumber",
                "title": "Sno",
                "align": "center",
                //"valign": "bottom",
                "visible": true,
                "formatter": "serialNumber"
            }, {
                "field": "name",
                "title": "Customer",
                "align": "left",
                "class": "aligndiv",
                "visible": true

            },
 {
                "field": "company_name",
                "title": "Company",
                "align": "left",
                "class": "aligndiv",
                "visible": compnaynamevisible,

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
                "field": "auditor",
                "title": "Auditor",
                "align": "left",
                "class": "aligndiv",
                "visible": true

            },
            {
                "field": "dr",
                "title": "Document Received",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            }
                    ,
            {
                "field": "field",
                "title": "Field",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            },
                   {
                "field": "cpc",
                "title": "CPC",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            },
                     {
                "field": "fee",
                "title": "Fee",
                "align": "left",
                //"valign": "bottom",
                "formatter": "feecollection",
                //"formatter": "discountValueLinks"
            }
                  ,
                         {
                "field": "fc",
                "title": "Collected",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "discountValueLinks"
            },
            {
                "field": "First_Name",
                "title": "Name",
                "align": "left",
                //"valign": "bottom",
                "visible": false,

            }              

                  //,
//
//            {
//                "field": "First_Name",
//                "title": "Name",
//                "align": "left",
//                //"valign": "bottom",
//                "visible": visiblename,
//            },
//            {
//                "field": "br",
//                "title": "Bill Received",
//                "align": "left",
//                //"valign": "bottom",
//                "visible": true,
//                //"formatter": "actionLinks"
//            },
//            {
//                "field": "ta",
//                "title": "Tally Accounted",
//                "align": "left",
//                //"valign": "bottom",
//                "visible": true,
//
//            },
//            {
//                "field": "gstr3b",
//                "title": "GSTR 3B",
//                "align": "left",
//                //"valign": "bottom",
//                "visible": visibleGSTR3BFlag,
//
//            }, {
//                "field": "gstr1",
//                "title": "GSTR 1",
//                "align": "left",
//                //"valign": "bottom",
//                "visible": visibleGSTR3BFlag,
//
//            }, {
//                "field": "gstr2",
//                "title": "Bank A/C",
//                "align": "left",
//                //"valign": "bottom",
//                "visible": true,
//
//            }, {
//                "field": "gstr3",
//                "title": "EXP A/C",
//                "align": "left",
//                //"valign": "bottom",
//                "visible": true,
//
//            },
//            {
//                "field": "gstr4",
//                "title": "GSTR 4",
//                "align": "left",
//                //"valign": "bottom",
//                "visible": visibleGSTR4Flag,
//
//            },
//            // {
//            //     "field": "Actual_Fee",
//            //     "title": "Fee",
//            //     "align": "left",
//            //     //"valign": "bottom",
//            //     "visible": true,
//
//            // },
//             {
//                "field": "cf",
//                "title": "Fee",
//                "align": "left",
//                //"valign": "bottom",
//                "formatter": "feecollection",
//
//            },
//            {
//                "field": "fc",
//                "title": "Collected",
//                "align": "left",
//                //"valign": "bottom",
//                "visible": true,
//
//            }
        ]
    });

    $('.search').find("input[type=text]").attr("placeholder", "Search");

    $('.search').addClass('sea_po_abs_pm');
    $('.columns').addClass('sea_po_abs_2');
function serialNumber(value, row, index) {
        console.log(1 + index);
        return 1 + index;
    }
    
    function feecollection(value, row, index){
    var cf=0;
    if(row.cf>0){
        cf=row.cf;
        
    }else{
        cf=row.fee;
    }
    return cf;
        
        
}

	function changeValue() {
         var TotalCustomer=0;
    var SuccessCount=0;
    var PendingCount=0;
		var ele = $('#drpYear').val();
		var status = $('#drpStatus').val();
		$.ajax({
			url: "changeValueIT",
			type: 'get',
			data: {
				year: ele,
				hdntax: $('#hdntax').val(),

			},
			success: function(data) {
				//console.log(data);
				$("#tblCompany tbody").empty();
				var sno = 0;
				$.each(data['result'], function(i, key) {

					//var Month = '<td><a onclick="btnComplete(' + (key.month + 1) + ')"><b>' + key.monthName + '</b></a></td>';
					var sno = '<td>' + (i + 1) + '</td>';
					var customer = '<td>' + key.name + '</td>';
					var company_name = '<td>' + key.company_name + '</td>';
					var dr = '<td>' + key.dr + '</td>';
					var field = '<td>' + key.field + '</td>';
					var cpc = '<td>' + key.cpc + '</td>';
					var fee = '<td>' + key.cf + '</td>';
					var fc = '<td>' + key.fc + '</td>';
					var phone = '<td>' + key.contact_no + '</td>';
					var empname = '<td>' + key.First_Name + '</td>';

					$("#tblCompany").append('<tbody><tr>' + sno + '' + customer + '' + <?php if($data['type'] == 61) { ?>
						company_name <?php } ?> + '' + phone + '' + empname + '' + dr + '' + field + '' + cpc + '' + fee + '' + fc + ' < /tr></tbody> ');
                    
                    if( key.dr!='-' || key.field!='-'|| key.cpc!='-'|| key.fc!='-'){
                        
                        SuccessCount=SuccessCount+1;
                    }

				});
                
                if(data['result']!=null){ 
                    TotalCustomer=data['result'].length; 
                }                       
              
                document.getElementById("total_customer").value=TotalCustomer;
               document.getElementById("total_Success").value=SuccessCount;               document.getElementById("total_pending").value=TotalCustomer-SuccessCount;
                
               

			}
		});
	}

</script>


<script>
	$(document).ready(function() {
		$('#tblCompany').DataTable({
			"order": [
				[1, "asc"]
			]
		});
	});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>