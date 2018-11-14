 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style>
	.ui-datepicker-calendar {
		display: none;
	}

</style>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" id="content" >
			<div class="row-fluid">
				<div class="block-content collapse in">
					<div class="row-fluid">
						<!-- block -->
						<div class="block">
							<div class="navbar navbar-inner block-header">
								<div class="muted pull-left">COMPANY STATUS</div>
							</div>
							<div class="block-content collapse in">
								<div class="span12">
									<div class="span3">
										<label class="control-label" for="company_name">Type</label>
										<div class="control-group">
											<div class="controls">
												<select id="drpType" name="drpType" onchange="changeTableValue()">
                                                    <option value="0">Select</option>
                                                    <option value="7">GST - Regular</option>
                                                    <option value="8">GST - Compounding</option>
                                                    <option value="60">IT - Individual</option>
                                                    <option value="61">IT - Concern</option>
                                                    <option value="71">TDS - Individual</option>
                                                    <option value="72">TDS - Concern</option>
                                                </select>
											</div>
										</div>
									</div>
									<div class="span3">
										<input type="hidden" name="hdnpage" id="hdnpage" value="<?= $data['page'] ?>"> <?php if($data['page'] == 'cmp'): ?>
										<label class="control-label" for="companyname">Company Name</label>
										<div class="controls">
											<input type="text" id="companyname" placeholder="Company Name" name="companyname" />

										</div>
										<?php else: ?>
										<label class="control-label" for="companyname">Employee Name</label>
										<div class="controls">
											<select id="drpEmployee" name="drpEmployee" onchange="changeTableValue()">
                                                <?php $__currentLoopData = $data['employee']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                
                                                <option value="<?= $row->id ?>"> <?= $row->First_Name  ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
										</div>
										<?php endif; ?>
									</div>
									<div class="span3">
										<label class="control-label" for="company_name">Financial Year</label>
										<div class="control-group">
											<div class="controls">
												<!--												<input type='text' id='txtStartDate' class="change1" onchange="changeTableValue()" />-->

												<select id="txtStartDate" onchange="changeTableValue()">
													<option value="<?php echo date('Y')-1; ?>"> <?php echo date('Y')-2;echo "-";echo date('Y')-1 ; ?> </option>
													<option value="<?php echo date('Y'); ?>" <?php if((date('m') - 1) == 0) echo "selected"; ?> > <?php echo date('Y')-1;echo "-";echo date('Y') ;  ?> </option>
													<option value="<?php echo date('Y')+1; ?>" <?php if((date('m') - 1) != 0) echo "selected"; ?>> <?php echo date('Y');echo "-";echo date('Y')+1  ?> </option>

                                                    
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
										<!--
                                        <label class="control-label" for="company_name">Year</label>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input type='text' id='txtEndDate' onchange="changeTableValue()" />
                                                
                                                <select id="drpYear" onchange="changeTableValue()">
                                                    <option>Select</option>
                                                    <option value="<?php echo date('Y')-2; ?>"> <?php echo date('Y')-2; ?> </option>
                                                    <option value="<?php echo date('Y')-1; ?>"> <?php echo date('Y')-1; ?> </option>
                                                    <option value="<?php echo date('Y'); ?>" selected> <?php echo date('Y'); ?> </option>
                                                </select>

                                            </div>
                                        </div>
-->
									</div>
								</div>
								<div class="span12" style="margin-left:0px;">
									 <div class="table-responsive">

                            <table id="simple-table" class="table table-bordered" data-side-pagination="server">

                            </table>
                        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
	 var companyID = 0;
	var type1 = $('#drpType').val();
	$('#txtStartDate').on('changeDate', function(e) {
		changeTableValue();
	});

	var monthNames = ["January", "February", "March", "April", "May", "June",
					"July", "August", "September", "October", "November", "December"
				];

	$(document).ready(function() {
       
		companyAjax(0);

		$('#txtStartDate_1').datepicker({
			//$('.date-picker').datepicker({
			changeMonth: true,
			changeYear: true,
			showButtonPanel: true,
			dateFormat: 'MM yy',
			onClose: function(dateText, inst) {
				$(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
				changeTableValue();
			}
			//});



			//			changeMonth: true,
			//			changeYear: true,
			//			dateFormat: 'MM yy',
			//
			//			onClose: function() {
			//				var iMonth = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
			//				var iYear = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
			//				$(this).datepicker('setDate', new Date(iYear, iMonth, 1));
			//			},
			//
			//			beforeShow: function() {
			//				if ((selDate = $(this).val()).length > 0) {
			//					iYear = selDate.substring(selDate.length - 4, selDate.length);
			//					iMonth = jQuery.inArray(selDate.substring(0, selDate.length - 5), $(this).datepicker('option', 'monthNames'));
			//					$(this).datepicker('option', 'defaultDate', new Date(iYear, iMonth, 1));
			//					$(this).datepicker('setDate', new Date(iYear, iMonth, 1));
			//				}
			//			}
		});
		$('#txtEndDate').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'MM yy',

			onClose: function() {
				var iMonth = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
				var iYear = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
				$(this).datepicker('setDate', new Date(iYear, iMonth, 1));
			},

			beforeShow: function() {
				if ((selDate = $(this).val()).length > 0) {
					iYear = selDate.substring(selDate.length - 4, selDate.length);
					iMonth = jQuery.inArray(selDate.substring(0, selDate.length - 5), $(this).datepicker('option', 'monthNames'));
					$(this).datepicker('option', 'defaultDate', new Date(iYear, iMonth, 1));
					$(this).datepicker('setDate', new Date(iYear, iMonth, 1));
				}
			}
		});
	});

	var cid = 0;
	var fee = 0;

	function companyAjax(type) {
       
		$.ajax({
			url: "getCompanyautoComplete_status",
			type: 'get',
			data: {
				type: type
			},
			success: function(data) {
				//console.log(data);
				if (type1 != $('#drpType').val()) {
					type1 = $('#drpType').val();
					$('#companyname').val('');
					companyID = 0;
				}
				var list = [];
                
                if(data.length>0){
                   
				$.each(data, function(value, key) {
					var a = "";
					var b = 0;
					if (key.Company_Name != undefined) {
						a = key.Company_Name;
					} else {
						a = key.First_Name;
					}

					if (key.Id != undefined) {
						b = key.Id;
					} else {
						b = key.id;
					}


					list.push({
						id: b,
						label: a + ' - ' + key.Phone_No1,
						fee: key.Actual_Fee
					});
					$("#companyname").autocomplete({
						source: list,
						minLength: 1,
						select: function(event, ui) {
							value = ui.item.id;
							cid = ui.item.id;
							fee = ui.item.fee;
							changeTableValue();
							//changeTableValue();
						},
						change: function(event, ui) {
							if (ui.item === null) {
								$(this).val('');
								companyID = 0;
							}
						},
					});

				});
                    
                }
                
                else{
                   
                    	$("#companyname").autocomplete({
						source: list,
						minLength: 1,
						select: function(event, ui) {
							value = ui.item.id;
							cid = ui.item.id;
							fee = ui.item.fee;
							changeTableValue();
							//changeTableValue();
						},
						change: function(event, ui) {
							if (ui.item === null) {
								$(this).val('');
								companyID = 0;
							}
						},
                            
					});
                    
                }
               
			},
			error: function(data) {
				alert("error");
			}
		});
	}

function changeTableValue()
{

	  var url = "getemployeeStatus";
		if ($('#hdnpage').val() == 'cmp') {
			url = "getStatus";
			companyAjax($('#drpType').val());
		}
 			$('#simple-table').bootstrapTable('destroy');
  		if(cid>0 && document.getElementById('companyname').value!=""){
				var type= $('#drpType').val();			
				var txtStartDate= $('#txtStartDate').val();
				var drpEmployee= $('#drpEmployee').val();
  			//GST REGULAR
  		if (($("#drpType").val() == 7) ||($("#drpType").val() == 8) )
 {

  		if($("#drpType").val() == 8){
  			var visiblegstr4=true;
  			var visiblegstr3b=false;
  			var visiblegstr1=false;
  		}	 
  		else{
  			visiblegstr4=false;
  			visiblegstr3b=true;
			visiblegstr1=true;
  		}	


  			 	$('#simple-table').bootstrapTable({
        method: 'get',
        url: url+"?type="+type+"&cid="+cid+"&txtStartDate="+txtStartDate+"&drpEmployee="+drpEmployee,
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
               
            },
			{
                "field": "First_Name",
                "title": "Employee Name",
                "align": "center",                
                "visible": false,
                
               
            },
			{
                "field": "circle",
                "title": "Circle",
                "align": "center",  
                "visible": false,
                
               
            },
			{
               
                "title": "Month",
                "align": "center",                
                "formatter": "MonthName",
                 "visible": true,               
               
            },
			{
                "field": "pc_year",
                "title": "Year",
                "align": "center",                
                "visible": true,               
               
            },
			{
                "field": "Br",
                "title": "Bill Received",
                "align": "center",                
                "visible": true,
                
               
            },
			{
                "field": "Ta",
                "title": "Tally Accounted",
                "align": "center",                
                "visible": true,
                
               
            },
			{
                "field": "GSTR3B",
                "title": "GSTR 3B",
                "align": "center",                
                "visible": visiblegstr3b,
                
               
            },
			{
                "field": "GSTR1",
                "title": "GSTR 1",
                "align": "center",                
                "visible": visiblegstr1,
                
               
            },
			{
                "field": "GSTR2",
                "title": "Bank A/C",
                "align": "center",                
                "visible": true,
                
               
            },
			{
                "field": "GSTR3",
                "title": "EXP A/C",
                "align": "center",                
                "visible": true,
                
               
            }
            ,{
                "field": "GSTR4",
                "title": "GSTR4",
                "align": "center",                
                "visible": visiblegstr4,
                
               
            },
            {
                "field": "feecollection",
                "title": "Fee",
                "align": "center",                
                "visible": true,
                "formatter": "GstFee",
                
               
            },
            {
                "field": "FC",
                "title": "Collected Date",
                "align": "center",                
                "visible": true,
                
               
            }
            ,
            {
                "field": "pc_month",
                "title": "pc_month",
                "align": "center",                
                "visible": false,
                
               
            }

            ]

    });


  			 }

//IT 

			else if(($("#drpType").val() == 60) ||($("#drpType").val() == 61) ){

var visiblecustomer=false;
if($("#drpType").val() == 61){
visiblecustomer=true;
}
  			 	$('#simple-table').bootstrapTable({
        method: 'get',
        url: url+"?type="+type+"&cid="+cid+"&txtStartDate="+txtStartDate+"&drpEmployee="+drpEmployee,
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
            ,
			{
                "field": "First_Name",
                "title": "Employee Name",
                "align": "center",                
                "visible": true,
                
               
            },
			{
                "field": "company_name",
                "title": "Customer Name",
                "align": "center",  
                "visible": visiblecustomer,
                
               
            },
			{
               // "field": "pc_year",
                "title": "Year",
                "align": "center",                
                "formatter": "ITyear",               
               
            },
			{
                "field": "dr",
                "title": "D/R",
                "align": "center",                
                "visible": true,
                
               
            },
			{
                "field": "field",
                "title": "FILED",
                "align": "center",                
                "visible": true,
                
               
            },
			{
                "field": "cpc",
                "title": "CPC",
                "align": "center",                
                "visible": true,
                
               
            },
            {
              
                "title": "Fee",
                "align": "center",                
                "visible": true,
                "formatter": "ITFee",
                
               
            },
            {
                "field": "FC",
                "title": "Collected Date",
                "align": "center",                
                "visible": true,
                
               
            }
           
            ]

    });

			}
else if (($("#drpType").val() == 71) ||($("#drpType").val() == 72) )
 {

  		
  			 	$('#simple-table').bootstrapTable({
        method: 'get',
        url: url+"?type="+type+"&cid="+cid+"&txtStartDate="+txtStartDate+"&drpEmployee="+drpEmployee,
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
               
            },
			{
                "field": "First_Name",
                "title": "Employee Name",
                "align": "center",                
                "visible": false,
                
               
            },
			
			{
               
                "title": "Month",
                "align": "center",                
                "formatter": "MonthName",
                 "visible": true,               
               
            },
			{
                "field": "pc_year",
                "title": "Year",
                "align": "center",                
                "visible": true,               
               
            },
			{
                "title": "T/C",
                "field": "tc",
                "align": "center",                
                "visible": true,
                
               
            },
			{
                "title": "T/P",
                "field": "tp",
                "align": "center",                
                "visible": true,
                
               
            },
			{
                "title": "R/F",
                "field": "rf",
                "align": "center",                
                "visible": true,
                
               
            },
            {
                
                "title": "Fee",
                "align": "center",                
                "visible": true,
                "formatter": "TDSFee",
                
               
            },
            {
                "field": "FC",
                "title": "Collected Date",
                "align": "center",                
                "visible": true,
                
               
            }
            ,
            {
                "field": "pc_month",
                "title": "pc_month",
                "align": "center",                
                "visible": false,
                
               
            }

            ]

    });


  			 }

  		}
  		else{
			 $('#simple-table').bootstrapTable('destroy');

  		}

}
 $('.search').find("input[type=text]").attr("placeholder", "Search");

    $('.search').addClass('sea_po_abs_pm');
    $('.columns').addClass('sea_po_abs_2');
    
   
    function serialNumber(value, row, index) {
        console.log(1 + index);
        return 1 + index;
    } 

    function MonthName(value, row, index){
   		return monthNames[row.pc_month - 1];

    }
    function GstFee(value, row, index){
    	var cf=row.feecollection;
    	if(cf!=null)
    	{
    		cf=row.feecollection;
    	}
    	else{
    		cf=row.Actual_Fee;
    	}

    	return cf;
    }
function TDSFee(value, row, index){
    	var cf=row.feecollection;
    	if(cf!=null)
    	{
    		cf=row.feecollection;
    	}
    	else{
    		cf=row.Actual_Fee;
    	}

    	return cf;
    }

    function ITFee(value, row, index){
    	var cf=row.fee;
    	if(cf!=null)
    	{
    		cf=row.fee;
    	}
    	else{
    		cf=row.Actual_Fee;
    	}

    	return cf;
    }

function ITyear(value, row, index){


    	return row.pc_year+" - "+(row.pc_year+1);

}
// function changeTableValue() {
//      var cid1=0;
// //    var table = $('#simple-table').bootstrapTable();
// //      table.destroy();
//         // $('#simple-table').html("");
//      //   $('#simple-table').empty();
//     var url = "getemployeeStatus";
// 		if ($('#hdnpage').val() == 'cmp') {
// 			url = "getStatus";
// 			companyAjax($('#drpType').val());
// 		}
//    // console.log(url);
//     if ($("#drpType").val() == 7) {
//      //   alert("1");
//         alert(cid);
//         	var type= $('#drpType').val();
			
// 				var txtStartDate= $('#txtStartDate').val();
// 				var drpEmployee= $('#drpEmployee').val();
//         if(cid1==0){
//         if (cid>0){
//              cid1=cid
//   $('#simple-table').bootstrapTable('destroy');
//     $('#simple-table').bootstrapTable({
//         method: 'get',
//         url: "getStatus?type="+type+"&cid="+cid1+"&txtStartDate="+txtStartDate+"&drpEmployee="+drpEmployee,
//         cache: false,
//         striped: true,
//         pagination: true,
//         pageSize: 50,
//         pageList: [10, 25, 50, 100, 200, 'All'],
//         search: true,
//         showColumns: true,
//         minimumCountColumns: 2,
//         clickToSelect: true,
//         showExport: true,
//         showPaginationSwitch: true,
//         exportDataType: 'all',
//         exportTypes: ['csv', 'txt', 'excel', 'pdf'],
//         exportOptions: {
//             "fileName": "Report"
//         },
//         columns: [{
//               //  "field": "Id",
//                 "title": "Sno",
//                 "align": "center",                
//                 "visible": true,
               
//             }]

//     });
 
// }
//     }
//     }
    
//         if ($("#drpType").val() == 8) {
//      //   alert("1");
//           //  var cid1=0;
//         alert(cid);
//         	var type= $('#drpType').val();
			
// 				var txtStartDate= $('#txtStartDate').val();
// 				var drpEmployee= $('#drpEmployee').val();
//              if(cid1==0){
//         if (cid>0){
//      //   $('#simple-table').html("");
//             cid1=cid
//             $('#simple-table').bootstrapTable('destroy');
//     $('#simple-table').bootstrapTable({
//         method: 'get',
//         url: "getStatus?type="+type+"&cid="+cid1+"&txtStartDate="+txtStartDate+"&drpEmployee="+drpEmployee,
//         cache: false,
//         striped: true,
//         pagination: true,
//         pageSize: 50,
//         pageList: [10, 25, 50, 100, 200, 'All'],
//         search: true,
//         showColumns: true,
//         minimumCountColumns: 2,
//         clickToSelect: true,
//         showExport: true,
//         showPaginationSwitch: true,
//         exportDataType: 'all',
//         exportTypes: ['csv', 'txt', 'excel', 'pdf'],
//         exportOptions: {
//             "fileName": "Report"
//         },
//         columns: [{
//               //  "field": "Id",
//                 "title": "Sno",
//                 "align": "center",                
//                 "visible": true,
               
//             }]

//     });
 
// }
//     }
//         }
//    $('.search').find("input[type=text]").attr("placeholder", "Search");

//     $('.search').addClass('sea_po_abs_pm');
//     $('.columns').addClass('sea_po_abs_2');
//     }
    
//
//
//
//	function changeTableValue() {
//		var url = "getemployeeStatus";
//         
//		if ($('#hdnpage').val() == 'cmp') {
//			url = "getStatus";
//			companyAjax($('#drpType').val());
//		}
//		$('#tbl').empty();
//		var head = "";
//
//		if ($("#drpType").val() == 7) {
//			head = "<thead><tr> <th rowspan = 2>Sno</th><th rowspan = 2>Employee Name</th><th rowspan = 2>Circle</th><th rowspan = 2>Month</th><th rowspan = 2>Year</th><th rowspan = 2>Bill Received</th><th rowspan = 2>Tally Accounted</th><th rowspan = 2>GSTR 3B</th><th rowspan = 2>GSTR 1</th><th rowspan = 2>Bank A/C</th><th rowspan = 2>EXP A/C</th><th colspan=2> Fees Collection</th> </tr><tr><td>Fee</td><td>Collected</td></tr> </thead>";
//		}
//
//		if ($("#drpType").val() == 8) {
//			head = "<thead><tr> <th rowspan = 2 >Sno</th><th rowspan = 2>Employee Name</th><th rowspan = 2>Circle</th><th rowspan = 2>Month</th><th rowspan = 2>Year</th><th rowspan = 2>Bill Received</th><th rowspan = 2>Tally Accounted</th><th rowspan = 2>Bank A/C</th><th rowspan = 2>EXP A/C</th><th rowspan = 2>GSTR 4</th><th colspan=2>Fees Collection</th> </tr><tr><td>Fee</td><td>Collected</td></tr> </thead>";
//		}
//		if ($("#drpType").val() == 60) {
//			head = "<thead><tr> <th rowspan = 2 >Sno</th><th rowspan = 2 >Employee Name</th><th rowspan = 2 >Month</th><th rowspan = 2 >D/R</th><th rowspan = 2 >FILED</th><th rowspan = 2 >CPC</th><th colspan=2>Fees Collection</th> </tr><tr><td>Fee</td><td>Collected</td></tr> </thead>";
//		}
//		if ($("#drpType").val() == 71) {
//			head = "<thead><tr> <th rowspan = 2 >Sno</th><th rowspan = 2 >Employee Name</th><th rowspan = 2 >Month</th><th rowspan = 2 >Year</th><th rowspan = 2 >T/C</th><th rowspan = 2 >T/P</th><th rowspan = 2 >R/F</th><th colspan = 2>Fees Collection</th> </tr><tr><td>Fee</td><td>Collected</td></tr> </thead>";
//		}
//		if ($("#drpType").val() == 61) {
//			head = "<thead><tr> <th rowspan = 2 >Sno</th><th rowspan = 2 >Employee Name</th><th rowspan = 2 >Customer Name</th><th rowspan = 2 >Month</th><th rowspan = 2 >D/R</th><th rowspan = 2 >FILED</th><th rowspan = 2 >CPC</th><th colspan=2>Fees Collection</th> </tr><tr><td>Fee</td><td>Collected</td></tr> </thead>";
//		}
//		if ($("#drpType").val() == 72) {
//			head = "<thead><tr> <th rowspan = 2 >Sno</th><th rowspan = 2 >Employee Name</th><th rowspan = 2 >Month</th><th rowspan = 2 >Year</th><th rowspan = 2 >Customer Name</th><th rowspan = 2 >T/C</th><th rowspan = 2 >T/P</th><th rowspan = 2 >R/F</th><th colspan = 2>Fees Collection</th> </tr><tr><td>Fee</td><td>Collected</td></tr> </thead>";
//		}
//
//
//		//$('#tbl').append(head);
//		//alert($('#txtStartDate').val());
//		//return "dfg";
//       
//		$.ajax({
//			url: url,
//			data: {
//				type: $('#drpType').val(),
//				cid: cid,
//				txtStartDate: $('#txtStartDate').val(),
//				drpEmployee: $('#drpEmployee').val(),
//				//txtEndDate: $('#txtEndDate').val(),
//				//month: $('#drpMonth').val(),
//				//year: $('#drpYear').val()
//			},
//			success: function(data) {
//				$('#tbl').empty();
//				var body = "";
//				console.log(data);
//				var monthNames = ["January", "February", "March", "April", "May", "June",
//					"July", "August", "September", "October", "November", "December"
//				];
//
//				var sno = 1;
//                console.log(data);
//				$.each(data, function(i, key) {
//
//					var BR = key.Br;
//					//var EMP = key.First_Name;
//					var TA = key.Ta;
//					var GSTR3B = key.GSTR3B;
//					var GSTR1 = key.GSTR1;
//					var GSTR2 = key.GSTR2;
//					var GSTR3 = key.GSTR3;
//					var GSTR4 = key.GSTR4;
//
//					var DR = key.dr;
//					var FIELD = key.field;
//					var CPC = key.cpc;
//					var FC = key.FC;
//					var pc_month = key.pc_month;
//
//					var TC = key.tc;
//					var TP = key.tp;
//					var RF = key.rf;
//
//					if (BR == null) {
//						BR = "-";
//					}
//					if (DR == null) {
//						DR = "-";
//					}
//					if (FIELD == null) {
//						FIELD = "-";
//					}
//					if (CPC == null) {
//						CPC = "-";
//					}
//					if (TA == null) {
//						TA = "-";
//					}
//
//					if (TC == null) {
//						TC = "-";
//					}
//					if (TP == null) {
//						TP = "-";
//					}
//					if (RF == null) {
//						RF = "-";
//					}
//
//
//					if (GSTR3B == null) {
//						GSTR3B = "-";
//					}
//					if (GSTR1 == null) {
//						GSTR1 = "-";
//					}
//					if (GSTR2 == null) {
//						GSTR2 = "-";
//					}
//					if (GSTR3 == null) {
//						GSTR3 = "-";
//					}
//					if (GSTR4 == null) {
//						GSTR4 = "-";
//					}
//					if (FC == null) {
//						FC = "-";
//					}
//                    
//                    if($("#drpType").val() == 7 ||$("#drpType").val() == 8 )
//                        {
//                            if(key.feecollection!=null){
//                                var feecollection = key.feecollection;
//                               }
//                               else{
//                                var feecollection = 0;
//                               }
//                       
//                            
//                        }
//                        
//                    if($("#drpType").val() == 60 ||$("#drpType").val() == 61 )
//                        {
//                            if(key.fee!=null){
//                                var feecollection = key.fee;
//                               }
//                               else{
//                                var feecollection = 0;
//                               }
//                       
//                            
//                        }
//                if($("#drpType").val() == 71 ||$("#drpType").val() == 72 )
//                        {
//                            if(key.feecollection!=null){
//                                var feecollection = key.feecollection;
//                               }
//                               else{
//                                var feecollection = 0;
//                               }
//                       
//                            
//                        }
//                    
//					if ($('#hdnpage').val() != 'cmp') {
//						fee = key.fee;
//					}
//					if ($("#drpType").val() == 7) {
//						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:center"><b>' + key.First_Name + '</b></td><td>' + key.circle + '</td><td style="text-align:center">' + monthNames[pc_month - 1] + '</td><td style="text-align:center">' + key.pc_year + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR3B + '</td><td style="text-align:center">' + GSTR1 + '</td><td style="text-align:center">' + GSTR2 + '</td><td style="text-align:center">' + GSTR3 + '</td><td style="text-align:center">' + feecollection + '</td><td style="text-align:center">' + FC + '</td></tr>';
//						//body = '<tr><td>' + key.br + '</td></tr>';
//					}
//					if ($("#drpType").val() == 8) {
//						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:center"><b>' + key.First_Name + '</b></td><td>' + key.circle + '</td><td style="text-align:center">' + monthNames[pc_month - 1] + '</td><td style="text-align:center">' + key.pc_year + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR2 + '</td><td style="text-align:center">' + GSTR3 + '</td><td style="text-align:center">' + GSTR4 + '</td><td style="text-align:center">' + feecollection + '</td><td style="text-align:center">' + FC + '</td></tr>';
//					}
//					if ($("#drpType").val() == 60) {
//						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:center"><b>' + key.First_Name + '</b></td><td style="text-align:center">' + (key.pc_year) + ' - ' + (key.pc_year + 1) + '</td><td style="text-align:center">' + DR + '</td><td style="text-align:center">' + FIELD + '</td><td style="text-align:center">' + CPC + '</td><td style="text-align:center">' + feecollection + '</td><td style="text-align:center">' + FC + '</td></tr>';
//					}
//					if ($("#drpType").val() == 71) {
//						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:center"><b>' + key.First_Name + '</b></td><td style="text-align:center">' + monthNames[pc_month - 1] + '</td><td style="text-align:center">' + key.pc_year + '</td><td style="text-align:center">' + TC + '</td><td style="text-align:center">' + TP + '</td><td style="text-align:center">' + RF + '</td><td style="text-align:center">' + feecollection + '</td><td style="text-align:center">' + FC + '</td></tr>';
//					}
//					if ($("#drpType").val() == 61) {
//						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:left"><b>' + key.First_Name + '</b></td><td style="text-align:left"><b>' + key.First_Name1 + '</b></td><td style="text-align:center">' + (key.pc_year) + ' - ' + (key.pc_year + 1) + '</td><td style="text-align:center">' + DR + '</td><td style="text-align:center">' + FIELD + '</td><td style="text-align:center">' + CPC + '</td><td style="text-align:center">' + feecollection + '</td><td style="text-align:center">' + FC + '</td></tr>';
//					}
//					if ($("#drpType").val() == 72) {
//						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:left"><b>' + key.First_Name + '</b></td><td style="text-align:center">' + monthNames[pc_month - 1] + '</td><td style="text-align:center">' + key.pc_year + '</td><td style="text-align:left">' + key.First_Name1 + '</td><td style="text-align:center">' + TC + '</td><td style="text-align:center">' + TP + '</td><td style="text-align:center">' + RF + '</td><td style="text-align:center">' + feecollection + '</td><td style="text-align:center">' + FC + '</td></tr>';
//					}
//
//					sno++;
//				})
//
//                 if(cid>0 && document.getElementById('companyname').value!=""){
//                   
//				$('#tbl').append(head + '<tbody>' + body + '</tbody>');
//                
//               }
//                else{
//                    
//                    	$('#tbl').empty();
//                }
//			}
//		});
//	}

	function changeTableValue_1() {

		//companyAjax($('#drpType').val());

		$('#tbl').empty();
		var head = "";

		if ($("#drpType").val() == 7) {
			head = "<thead><tr> <th>Sno</th><th>Company Name</th><th>Month</th><th>Bill Received</th><th>Tally Accounted</th><th>GSTR 3B</th><th>GSTR 1</th><th>GSTR 2</th><th>GSTR 3</th><th>Fees Collection</th> </tr> </thead>";
		}

		if ($("#drpType").val() == 8) {
			head = "<thead><tr> <th>Sno</th><th>Company Name</th><th>Month</th><th>Bill Received</th><th>Tally Accounted</th><th>GSTR 4</th><th>Fees Collection</th> </tr> </thead>";
		}
		if ($("#drpType").val() == 60 || $("#drpType").val() == 61) {
			head = "<thead><tr> <th>Sno</th><th>Customer Name</th><th>Month</th><th>D/R</th><th>FILED</th><th>CPC</th><th>Fees Collection</th> </tr> </thead>";
		}
		if ($("#drpType").val() == 71 || $("#drpType").val() == 72) {
			head = "<thead><tr> <th>Sno</th><th>Customer Name</th><th>Year</th><th>D/R</th><th>FILED</th><th>CPC</th><th>Fees Collection</th> </tr> </thead>";
		}


		//$('#tbl').append(head);

		//return "dfg";
		$.ajax({
			url: 'getemployeeStatus',
			data: {
				type: $('#drpType').val(),
				drpEmployee: $('#drpEmployee').val(),
				txtStartDate: $('#txtStartDate').val(),
				//txtEndDate: $('#txtEndDate').val(),
				//month: $('#drpMonth').val(),
				//year: $('#drpYear').val()
			},
			success: function(data) {
				$('#tbl').empty();
				var body = "";
				console.log(data);
				var monthNames = ["January", "February", "March", "April", "May", "June",
					"July", "August", "September", "October", "November", "December"
				];

				var sno = 1;
				$.each(data, function(i, key) {

					var BR = key.Br;
					var TA = key.Ta;
					var GSTR3B = key.GSTR3B;
					var GSTR1 = key.GSTR1;
					var GSTR2 = key.GSTR2;
					var GSTR3 = key.GSTR3;
					var GSTR4 = key.GSTR4;

					var DR = key.dr;
					var FIELD = key.field;
					var CPC = key.cpc;
					var FC = key.FC;
					var pc_month = key.pc_month;

					if (BR == null) {
						BR = "-";
					}
					if (DR == null) {
						DR = "-";
					}
					if (FIELD == null) {
						FIELD = "-";
					}
					if (CPC == null) {
						CPC = "-";
					}
					if (TA == null) {
						TA = "-";
					}
					if (GSTR3B == null) {
						GSTR3B = "-";
					}
					if (GSTR1 == null) {
						GSTR1 = "-";
					}
					if (GSTR2 == null) {
						GSTR2 = "-";
					}
					if (GSTR3 == null) {
						GSTR3 = "-";
					}
					if (GSTR4 == null) {
						GSTR4 = "-";
					}
					if (FC == null) {
						FC = "-";
					}

					if ($("#drpType").val() == 7) {
						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:center"><b>' + key.First_Name + '</b></td><td style="text-align:center">' + monthNames[pc_month - 1] + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR3B + '</td><td style="text-align:center">' + GSTR1 + '</td><td style="text-align:center">' + GSTR2 + '</td><td style="text-align:center">' + GSTR3 + '</td><td style="text-align:center">' + FC + '</td></tr>';
						//body = '<tr><td>' + key.br + '</td></tr>';
					}
					if ($("#drpType").val() == 8) {
						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:center"><b>' + key.First_Name + '</b></td><td style="text-align:center">' + monthNames[pc_month - 1] + '</td><td style="text-align:center">' + BR + '</td><td style="text-align:center">' + TA + '</td><td style="text-align:center">' + GSTR4 + '</td><td style="text-align:center">' + FC + '</td></tr>';
					}
					if ($("#drpType").val() == 60 || $("#drpType").val() == 61) {
						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:center"><b>' + key.First_Name + '</b></td><td style="text-align:center">' + (key.pc_year) + ' - ' + (key.pc_year + 1) + '</td><td style="text-align:center">' + DR + '</td><td style="text-align:center">' + FIELD + '</td><td style="text-align:center">' + CPC + '</td><td style="text-align:center">' + FC + '</td></tr>';
					}
					if ($("#drpType").val() == 71 || $("#drpType").val() == 72) {
						body += '<tr><td style="text-align:center"><b>' + sno + '</b></td><td style="text-align:center"><b>' + key.First_Name + '</b></td><td style="text-align:center">' + (key.pc_year) + ' - ' + (key.pc_year + 1) + '</td><td style="text-align:center">' + DR + '</td><td style="text-align:center">' + FIELD + '</td><td style="text-align:center">' + CPC + '</td><td style="text-align:center">' + FC + '</td></tr>';
					}

					sno++;
				})

				$('#tbl').append(head + '<tbody>' + body + '</tbody>');
			}
		});
	}

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>