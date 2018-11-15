 <?php $__env->startSection('content'); ?>
<style>
/*
	.bootstrap-table .fixed-table-container thead th .th-inner {
		padding-top: 10px;
		padding-bottom: 10px;
		line-height: 1.5;
		color: #ffffff !important;
	}
	
	.bootstrap-table .fixed-table-pagination ul.pagination li.active a {
		border-color: #d8e2e7;
		color: #ffffff !important;
	}
*/

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="contaniner_class">
       <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Projects <span class="table-project-n">Data</span> Table</h1>
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
			url: 'get_designation_details',
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
					"field": "id",
					"title": "Id",
					"align": "center",
					//"valign": "bottom",
					"visible": false

				}, {
					//"field": "enquiryNumber",
					"title": "SNo",
					"align": "center",
					//"valign": "bottom",
					"visible": true,
					"formatter": "runningFormatter"
				}, {
					"field": "designation_name",
					"title": "Designation",
					"align": "center",
					//"valign": "bottom",
					"visible": true

				}, {
					"field": "description",
					"title": "Description",
					"align": "center",
					//"valign": "bottom",
					"visible": true

				}, {
					
					"title": "Status",
					"align": "center",					
					"visible": true,
                    "formatter": "lableLinks"

				}
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

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>