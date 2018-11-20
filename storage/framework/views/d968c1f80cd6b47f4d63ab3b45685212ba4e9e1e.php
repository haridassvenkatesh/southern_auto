 <?php $__env->startSection('content'); ?>
<div class="contaniner_class">
       <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <a href="create_enquiry" class="btn btn-primary search_btn" style="float:right">
								<i class="icon-plus icon-white"></i>Add
						</a>
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>View <span class="table-project-n">Enquiry</span></h1>
                                </div>
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
			url: 'get_enquiry_details',
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
                      {
					"field": "company_name",
					"title": "Customer",
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
                      {
					"field": "phone_no",
					"title": "Phone",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}, 
                      {
					"field": "business_vertical",
					"title": "Business Vertical",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				},
                      
                      {
					"field": "enquiry_source",
					"title": "Enquiry Source",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				},
                      
                       
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

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>