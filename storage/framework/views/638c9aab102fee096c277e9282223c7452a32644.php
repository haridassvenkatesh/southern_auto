 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content" ng-app="company_app" ng-controller="company_controller">

            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <?php $title = "GST REGULAR";
                               if($data['tax'] == 8)
                                    $title = "GST COMPOUNDING";
                                    ?>
                        <center>
                            <div class="muted pull-left">REPORT</div>
                            <div class="muted pull-center">
                                <?= $title ?> -
                                    <?php echo $data['mname']." - ".Session::get('reportYear'); ?>
                            </div>
                        </center>
                    </div>
                    <div class="block-content collapse in">
                        <!--
                        <table class="table table-bordered" id="tblCompany">
                            <thead>




                                <tr>
                                    <th rowspan="2"><b>SNO</b></th>
                                    <th rowspan="2"><b>Company</b></th>
                                    <th rowspan="2"><b>Phone</b></th>
                                    <th rowspan="2"><b>Circle</b></th>


                                    <?php if(Session::get('user_group_id') == 10){
									?>

                                    <th rowspan="2">Name</th>
                                    <?php } ?>

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
                                        <?= $r->circle ?>
                                    </td>
                                    <?php if(Session::get('user_group_id') == 10){
									?>
                                    <td>
                                        <?= $r->First_Name ?>
                                    </td>
                                    <?php } ?>
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
                                        <?=  $r->Actual_Fee ?>
                                    </td>
                                    <td>
                                        <?=  $r->fc ?>
                                    </td>

                                </tr>

                                <?php  $sno++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>
-->
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
    /** BOOTSTRAP TABLE **/


    var url = 'getItBootstrapTable';
    var visibleFlag = false;
    var visibleGSTR4Flag = false;
    var visibleGSTR3BFlag = true;
    <?php if($data['tax'] == 8) { ?>
    visibleGSTR4Flag = true;
    <?php } ?>
    <?php if($data['tax'] == 8) { ?>
    visibleGSTR3BFlag = false;
    <?php } ?>

    $('#simple-table').bootstrapTable({
        method: 'get',
        url: 'report_bootstrap_table',
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
                "field": "Company_Name",
                "title": "Company",
                "align": "left",
                "class": "aligndiv",
                "visible": true

            },

            {
                "field": "Phone_No1",
                "title": "Phone",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            },
            {
                "field": "circle",
                "title": "Circle",
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
                "visible": true
            },
            {
                "field": "br",
                "title": "Bill Received",
                "align": "left",
                //"valign": "bottom",
                "visible": true,
                //"formatter": "actionLinks"
            },
            {
                "field": "ta",
                "title": "Tally Accounted",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            },
            {
                "field": "gstr3b",
                "title": "GSTR 3B",
                "align": "left",
                //"valign": "bottom",
                "visible": visibleGSTR3BFlag,

            }, {
                "field": "gstr1",
                "title": "GSTR 1",
                "align": "left",
                //"valign": "bottom",
                "visible": visibleGSTR3BFlag,

            }, {
                "field": "gstr2",
                "title": "Bank A/C",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            }, {
                "field": "gstr3",
                "title": "EXP A/C",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            },
            {
                "field": "gstr4",
                "title": "GSTR 4",
                "align": "left",
                //"valign": "bottom",
                "visible": visibleGSTR4Flag,

            },
            {
                "field": "Actual_Fee",
                "title": "Fee",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            },
            {
                "field": "fc",
                "title": "Collected",
                "align": "left",
                //"valign": "bottom",
                "visible": true,

            }
        ]
    });

    $('.search').find("input[type=text]").attr("placeholder", "Search");

    $('.search').addClass('sea_po_abs_pm');
    $('.columns').addClass('sea_po_abs_2');



    function serialNumber(value, row, index) {
        console.log(1 + index);
        return 1 + index;
    }

    function actionLinks(value, row, index) {
        var Id = row.id;
        var Status = row.status;

        var link = '';
        link += '<button onclick="btncustomerEdit(' + Id + ')" class="btn btn-info "><i class="icon-pencil icon-white"></i></button>';
        link += '<button onclick="btncustomerView(' + Id + ')" class="btn  "><i class="icon-eye-open icon-black"></i></button>';
        return link;
    }

    function actionLinks2(value, row, index) {
        var Id = row.id;
        var Status = row.status;

        var link = '';

        link += '<div id="FCitc" style="display:block">';
        link += '<label class="switch">';
        link += '<input class="switch-input" type="checkbox" id="chkStatus_' + Id + '" onchange="updateCompanyStatus(' + Id + ',value)"';
        if (Status == 2) {
            link += 'checked';
        }
        link += '/>';
        link += '<span class = "switch-label"  data-on = "Inactive" data-off = "Active" > </span>  <span class = "switch-handle" > </span> ';
        link += '</label > </div>';
        return link;
    }

    /** BOOTSTRAP TABLE **/









    $('#tblCompany').DataTable({
        "order": [
            [2, "asc"]
        ],
        "pageLength": 5,
        //"dom": '<"top"i>rt<"bottom"flp><"clear">'
        "sDom": 'Rfrtlip',
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>