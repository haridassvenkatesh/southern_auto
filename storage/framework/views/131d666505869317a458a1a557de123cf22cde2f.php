 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style>.table-responsive .open > .dropdown-menu{
overflow-y: scroll;
height: 100px;
}</style>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" id="content" ng-app="company_app" ng-controller="company_controller">
 <?php 
// $sno=0;
// foreach($data['Company'] as $row[0])
// {
   
//    	 echo "<pre>";print_r($row);
//    	 $sno++;
   
  
   
// }die;
?>
			<div class="row-fluid">
				<!-- block -->
				<div class="block">
					<div class="navbar navbar-inner block-header">
						<?php $title = "TDS INDIVIDUAL";
                               if($data['tax'] == 72)
                                    $title = "TDS CONCERN";
                                    ?>
						<center>
							<div class="muted pull-center">
								<?= $title ?> -
									<?php echo $data['mname']." - ".$data['year']; ?>
							</div>
						</center>
					</div>
					<div class="block-content collapse in">
						<input type="hidden" value="<?= Session::get('user_group_id')?>" id="groupid"/>
					<!-- 	<table class="table table-bordered" id="tblCompany">
							<thead>




								<tr>
									<th rowspan="2"><b>SNO</b></th>
									<th rowspan="2"><b>Customer</b></th>
									<th rowspan="2"><b>Phone</b></th>

									<?php if(Session::get('user_group_id') == 10){
									?>
									<th rowspan="2">Name</th>
									<?php } ?>
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
								<?php $sno = 1; $i=1;foreach($data['Company'] as $row[0]) {  ?> <?php if(!empty($row[0][$i])): ?>
								<tr>
									<td>
										<?= $sno ?>
									</td>
									<td>
										<?= $row[0][$i]->name ?>
									</td>
									<td>
										<?= $row[0][$i]->contact_no ?>
									</td>
									<?php if(Session::get('user_group_id') == 10){
									?>
									<td>
										<?= $row[0][$i]->First_Name ?>
									</td>
									<?php } ?>
									<td>
										<?= $row[0][$i]->tc ?>
									</td>
									<td>
										<?= $row[0][$i]->tp ?>
									</td>
									<td>
										<?= $row[0][$i]->rf ?>
									</td>
									<td>
										<?= $row[0][$i]->cf ?>
									</td>
									<td>
										<?= $row[0][$i]->fc ?>
									</td>
								</tr>
								<?php endif; ?>
								<?php $sno++;$i++; }  ?>
							</tbody>
						</table> -->
						<div class="table-responsive">

                            <table id="simple-table" class="table table-bordered" data-side-pagination="server">

                            </table>
                        </div>
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
	var groupid=$('#groupid').val();
	var visibleFlag = false;
	if(groupid==10)
	{
	visibleFlag = true;
	}
	else{
visibleFlag = false;
	}
 
 <?php if($data['tax'] == 8) { ?>
    visibleGSTR4Flag = true;
    <?php } ?>
	$('#simple-table').bootstrapTable({
        method: 'get',
        url: 'report_bootstrap_table_tds',
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
             }
             , {
                "field": "name",
                "title": "Company",
                "align": "left",
                "class": "aligndiv",
                "visible": true

            }

            ,{
                "field": "contact_no",
                "title": "Phone",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            }
            ,

            {
                "field": "First_Name",
                "title": "Name",
                "align": "left",
                //"valign": "bottom",
                "visible": visibleFlag,
            }
            ,
            {
                "field": "tc",
                "title": "TC",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "actionLinks"
            },
            {
                "field": "tp",
                "title": "TP",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            },
            {
                "field": "rf",
                "title": "RF",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            }, {
                "field": "cf",
                "title": "CF",
                "align": "left",
                //"valign": "bottom",
                "formatter": "feecollection",

            }, {
                "field": "fc",
                "title": "FC",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            }
           
        ]
    });

 
 $('.search').find("input[type=text]").attr("placeholder", "Search");

    $('.search').addClass('sea_po_abs_pm');
    $('.columns').addClass('sea_po_abs_2');

function feecollection(value, row, index){
    var cf=row.cf;
    if(cf>0){
        cf=row.cf;
    }else{
       cf= row.fee;
    }
    return cf;
}

    function serialNumber(value, row, index) {
        console.log(1 + index);
        return 1 + index;
    }


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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>