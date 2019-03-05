 <?php $__env->startSection('content'); ?>
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
                                             <li><a href="view_academic">Academic</a> <span class="bread-slash">/</span>
                                            </li>
											<li><span class="bread-blod"><a href="view_designation">View Academic</a></span>
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
                                      <li class="active"><a href="#description">View Academic</a></li>
                                    </ul>
                                
                                <div class="add-product">
                                <a href="add_academic"><i class="fa fa-plus-circle" aria-hidden="true" style="color:#FFF;"></i> Add Academic</a>
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
			url: 'get_academic_details',
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
				"fileName": "designation"
			},

			columns: [{
					//"field": "enquiryNumber",
					"title": "SNo",
					"align": "center",
					//"valign": "bottom",
					"visible": true,
					"formatter": "runningFormatter"
				}, {
					"field": "year",
					"title": "Year",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}, {
					"field": "quotation_no",
					"title": "Quotation No",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
                    "formatter": "quotation_no_fun"

				}, {
					"field": "project_no",
					"title": "Project No",
					"align": "left",
					//"valign": "bottom",
					"visible": true,
                    "formatter": "project_no_fun"

				}, {
					"field": "revenue_profit",
					"title": "Target",
					"align": "left",
					//"valign": "bottom",
					"visible": true

				}, {
					
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
function quotation_no_fun(value, row, index){
    
    return row.quotation_no+""+row.q_start_no;
    
}
    function project_no_fun(value, row, index)
    {
     return row.project_no+""+row.proj_start_no;    
    }
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
        var academic_year_id=row.academic_year_id;
        return  "<a href='edit_academic?academic_year_id="+academic_year_id+"' class='tooltip-info btn btn-xs btn-info' data-rel='tooltip' title='Edit'><i class='whiteclr ace-icon fa fa-pencil bigger-120'></i></a>"
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>