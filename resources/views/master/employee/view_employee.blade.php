@extends('templates.layout') @section('content')
<div class="contaniner_class">
   <div class="data-table-area mg-b-15">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="breadcome-list single-page-breadcome">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul class="breadcome-menu">
                           <li><a href="">Master</a> <span class="bread-slash">/</span>
                           </li>
                           <li><a href="view_employee">Employee</a> <span class="bread-slash">/</span>
                           </li>
                           <li><span class="bread-blod"><a href="view_employee">View Employee</a></span>
                           </li>
                        </ul>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="sparkline13-list">
                  <div class="sparkline13-hd">
                     <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">View Employee</a></li>
                     </ul>
                     <?php if(Session::get('designation_id')==1){ ?>
                     <div class="add-product">
                        <a href="add_employee"><i class="fa fa-plus-circle" aria-hidden="true" style="color:#FFF;"></i> Add Employee</a>
                     </div>
                     <?php  } ?>
                  </div>
                  <div class="sparkline13-graph">
                     <div class="datatable-dashv1-list custom-datatable-overright">
                        <div class="table-responsive">
                           <table id="simple-table" class="table table-hover" data-side-pagination="server">
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
   
   
   	$('#simple-table').bootstrapTable({
   		method: 'get',
   		url: 'get_employee_details',
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
   			"fileName": "employee"
   		},
   
   		columns: [ {
   				
   				"title": "SNo",
   				"align": "center",					
   				"visible": true,
   				"formatter": "runningFormatter"
   			}, {
   				"field": "employee_name",
   				"title": "Employee Name",
   				"align": "left",
   				"visible": true
   
   			}, {
   				"field": "employee_unique_id",
   				"title": "Employee Id",
   				"align": "left",
   				"visible": true
   
   			},
                        
                        {
   				"field": "designation_name",
   				"title": "Designation",
   				"align": "left",
   				"visible": true
   
   			},
                        
                        {
   				"field": "phone_no1",
   				"title": "Phone No",
   				"align": "left",
   				"visible": true
   
   			},
                        
                        {
   				"field": "email",
   				"title": "Email",
   				"align": "left",
   				"visible": true
   
   			}, {
   				
   				"title": "Status",
   				"align": "center",					
   				"visible": true,
                "formatter": "lableLinks"
   
   			},
	<?php if(Session::get('designation_id')==1){ ?>
           {
   				
   				"title": "Action",
   				"align": "center",					
   				"visible": true,
                "formatter": "operation_link"
   
   			}
	<?php } ?>
   		]
   	});
   
   	$('.search').find("input[type=text]").attr("placeholder", "Search");
   
   	$('.search').addClass('sea_po_abs_pm');
   	$('.columns').addClass('sea_po_abs_2');
   
   });
   
   function runningFormatter(value, row, index) {
        		return 1 + index;
   }
      
      function lableLinks(value, row, index){
          var stageName=row.status_name;
          var stageLable="danger";
          if(row.status_id==1){
             stageLable="success";
             }
             
   	return "<div class='label label-table label-" + stageLable + "'>" + stageName + " </div>"
      }
      
      function operation_link(value, row, index){
          var employee_id=row.employee_id;
          return  "<a href='edit_employee?employee_id="+employee_id+"' class='tooltip-info btn btn-xs btn-info' data-rel='tooltip' title='Edit'><i class='whiteclr ace-icon fa fa-pencil bigger-120'></i></a>"
      }
   
</script>
@stop