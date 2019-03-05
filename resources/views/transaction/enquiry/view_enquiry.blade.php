@extends('templates.layout') @section('content')
<style>
.fixed-table-container thead th .th-inner, .fixed-table-container tbody td .th-inner {
    padding: 7px;
    line-height: 24px;
    vertical-align: top;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
	font-size: 13px;
}
.table-hover>tbody>tr.danger:hover>td, .table-hover>tbody>tr.danger:hover>th, .table-hover>tbody>tr:hover>.danger, .table-hover>tbody>tr>td.danger:hover, .table-hover>tbody>tr>th.danger:hover {
    background-color: #e27488;
}.table>tbody>tr.danger>td, .table>tbody>tr.danger>th, .table>tbody>tr>td.danger, .table>tbody>tr>th.danger, .table>tfoot>tr.danger>td, .table>tfoot>tr.danger>th, .table>tfoot>tr>td.danger, .table>tfoot>tr>th.danger, .table>thead>tr.danger>td, .table>thead>tr.danger>th, .table>thead>tr>td.danger, .table>thead>tr>th.danger {
    background-color: #e27488 !important;
}
</style>
<div class="contaniner_class">
       <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="">Transaction</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod"><?= $data['status_name']; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <?php if($data['enquiry_status']!=4){ ?>
                                         <button type="button" class="btn btn-success" style="float: right;">Total Amount <span class="badge" style="font-size: 13px;" id="total_amount1">INR 0</span></button>
                                        <?php } ?>
                                     
                                       
<!--                                        <span class="badge badge-success">Success</span>-->
<!--                                            margin-left: 420px!important;-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                  <ul id="myTabedu1" class="tab-review-design">
                                      <li class="active"><a href="">View <?= $data['status_name']; ?></a></li>
                                    </ul>
                                
                                 <?php if($data['enquiry_status']==4){ ?>
                                <div class="add-product">
                                <a href="create_enquiry"><i class="fa fa-plus-circle" aria-hidden="true" style="color:#FFF;"></i> Create Enquiry</a>
                            </div>
                                <?php } ?>
                            </div>
                           
                            <div class="sparkline13-graph">
                                 
                                <div class="datatable-dashv1-list custom-datatable-overright">
                           
                               	<div class="table-responsive">
   <input type="hidden" value="<?=$data['enquiry_status']?>" id="enquiry_source" name="enquiry_source"/>
							<table id="simple-table" class="table table-hover" data-side-pagination="server"   data-row-style="rowStyle">

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
<script>
	$(document).ready(function() {

//alert($('#enquiry_source').val());
		$('#simple-table').bootstrapTable({
			method: 'get',
			url: 'get_enquiry_details?sourceid='+$('#enquiry_source').val(),
			cache: false,
			striped: true,
			pagination: true,
			pageSize: 10,
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
				"fileName": "enquiry"
			},

			columns: [ {
					//"field": "enquiryNumber",
					"title": "SNo",
					"align": "center",
					//"valign": "bottom",
					"visible": true,
					"formatter": "runningFormatter"
				}, {
					"field": "company_name",
					"title": "Customer",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}, 
                    <?php  if($data['enquiry_status']==6 || $data['enquiry_status']==9 ){
                        
?>  
                             {
					"field": "po_no",
					"title": "PO No",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}, 
                        {
					"field": "po_date",
					"title": "Po Date",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
                    "formatter": "dateLinks1"

				}, 
                      
				{
					"field": "project_no",
					"title": "Project No",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
					
				},
                     
                     {
					"field": "delivery_date",
					"title": "Delivery Date",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
					"formatter": "dateLinks1"
				}, 
                   
                      
                      <?php } else if($data['enquiry_status']==5){?>
                      {
					"field": "quotation_no",
					"title": "Quotation No",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}, 
                      
                      
				{
					"field": "quoted_date",
					"title": "Quotation Date",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
					"formatter": "dateLinks1"
				},
                      <?php } else if($data['enquiry_status']==8){?>
                                 {
					"field": "po_no",
					"title": "PO No",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}, 
                        {
					"field": "po_date",
					"title": "Po Date",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
                    "formatter": "dateLinks1"

				}, 
                      
				{
					"field": "project_no",
					"title": "Project No",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
					
				}, 
                        {
					"field": "invoice_no",
					"title": "Invoice No",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}, 
                      
                      
				{
					"field": "invoice_date",
					"title": "Invoice Date",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
					"formatter": "dateLinks1"
				},
                    {
					"field": "transporter",
					"title": "Transporter",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
					
				},
                      {
					"field": "lr_no",
					"title": "LR No",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
					
				},{
					"field": "delivery_date",
					"title": "Delivery Date",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
					"formatter": "dateLinks1"
				}, 
                   
                      <?php }else{?>
                         
                      {
					"field": "enquiry_id",
					"title": "Enquiry ID",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}, 
                      
                      
				{
					"field": "enquiey_date",
					"title": "Enquiry Date",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
					"formatter": "dateLinks1"
				},
                
                      
<?php } ?>  
                      {
					"field": "project_name",
					"title": "Project Name",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				},
                     
                      
                      {
					"field": "customer_contact_person",
					"title": "Contact Person",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				},
//                      {
//					"field": "email_id",
//					"title": "Email",
//					"align": "left",
//					//"valign": "bottom",
//					"visible": true
//
//				}, 
//                      {
//					"field": "phone_no",
//					"title": "Phone",
//					"align": "left",
//					//"valign": "bottom",
//					"visible": true
//
//				}, 
//                      {
//					"field": "business_vertical",
//					"title": "Business Vertical",
//					"align": "left",
//					//"valign": "bottom",
//					"visible": true
//
//				},
//                      
//                      {
//					"field": "enquiry_source",
//					"title": "Enquiry Source",
//					"align": "left",
//					//"valign": "bottom",
//					"visible": true
//
//				},
//                      
                       
                      {
					"field": "employeename",
					"title": "Alloted Person",
					"align": "left",
                          
					//"valign": "bottom",
					"visible": true

				} ,{
					"field": "net_value",
					"title": "Net Total",
					"align": "left",
                          
					//"valign": "bottom",
					"visible": false

				} ,{
					"field": "amo_with_out_tax",
					"title": "Amount",
					"align": "left",
                          "formatter": "total_amount_calculation",
					//"valign": "bottom",
					"visible": true

				},
                      
//                      {
//					"field": "amo_with_out_tax",
//				    "title": "Amount",
//					"align": "left",
//                    "formatter": "total_amount_calculation",
//					//"valign": "bottom",
//					"visible": true
//
//				},
//                      
                      {
					"field": "remarks",
					"title": "Remarks",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}
                 , {
					
					"title": "Status",
					"align": "center",					
					"visible": true,
                    "formatter": "lableLinks"

				},
                      {
					
					"title": "Action",
					"align": "center",					
					"visible": true,
                    "formatter": "operation_link"

				}
			]
		});

		$('.search').find("input[type=text]").attr("placeholder", "Search");

		$('.search').addClass('sea_po_abs_pm');
		$('.columns').addClass('sea_po_abs_2');

	});
    var total1=0;
    function total_amount_calculation(value, row, index){
console.log(total1);
console.log(row.amo_with_out_tax);
       total1=parseFloat(total1)+parseFloat(row.amo_with_out_tax);
        console.log(total1);
        $('#total_amount1').text('INR '+total1);
        return row.amo_with_out_tax;
    }

    function dateLinks1(param_date) {
		var d = new Date(param_date.split("-"));
		var dd = d.getDate();
		if (dd < 10) {
			dd = '0' + dd;
		}
		var mm = d.getMonth() + 1;
		if (mm < 10) {
			mm = '0' + mm;
		}
		var yy = d.getFullYear();
		param_date = dd + "-" + mm + "-" + "" + yy;
		return param_date;
	}
    
	function runningFormatter(value, row, index) {
      		return 1 + index;
	}
    
    function lableLinks(value, row, index){
        var stageName=row.status_name;
        var stageLable="";
        if(row.status_id==4){
           stageLable="success";
           }
         else if(row.status_id==5){
                 stageLable="info";
                 }
        else if(row.status_id==6){
                stageLable="primary";
         }
        else if(row.status_id==7){
                stageLable="warning";
                }
        else{
            stageLable="danger";
        }
		return "<div class='label label-table label-" + stageLable + "'>" + stageName + " </div>"
    }
    
    function operation_link(value, row, index){
        var enquiry=row.enquiry;
        
        return  "<a href='edit_enquiry?enquiry_id="+enquiry+"' class='tooltip-info btn btn-xs btn-info' data-rel='tooltip' title='Edit'><i class='whiteclr ace-icon fa fa-pencil bigger-120'></i></a>"
    }

function rowStyle(row, index) {
	
	if(row.enquiry_status==4){
	var diff=row.difference;
		
	  var classes = ['danger']
    if (diff>4) {
      return {
        classes: classes[0]
      }
    }
	   }
    else if(row.enquiry_status==6){
     
        var delv_difference=row.delv_difference;
         var classes = ['danger','warning']
        if(delv_difference<=0){
               console.log("1");
            return {
        classes: classes[0]
      }
           }
           else if(delv_difference<=3){
               console.log(classes[1]);
             return {
        classes: classes[1]
      }
        }
    }

    return {}
	
	
//    var classes = ['active', 'success', 'info', 'warning', 'danger']
//    if (index % 2 === 0 && index / 2 < classes.length) {
//      return {
//        classes: classes[index / 2]
//      }
//    }
//    return {}
  }
</script>
@stop
