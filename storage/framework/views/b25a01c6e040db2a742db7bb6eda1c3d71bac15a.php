 <?php $__env->startSection('content'); ?>
<!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />-->
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!--<script src="//code.jquery.com/jquery-1.12.4.js"></script>-->
<!--<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>-->
<style>
    .badge-danger {
        background-color: #f82806;
    }

    .badge-warning {
        background-color: #f0ad4e;
    }

</style>
<div ng-app="myapp" ng-controller="mycontroller" ng-init="onloadfun()">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12" id="content">
                <div class="row-fluid">

                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Statistics</div>
                            <div class="pull-right"><span class="badge badge-warning"></span>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span3">
                                <!--                                <div class="chart" data-percent={{count_company_percentage}}>{{count_company}}</div>-->
                                <div class="chart" data-percent="<?php echo e($data['Allocated_Company_percentage']); ?>">
                                    <?php echo e($data['Allocated_Company']); ?>

                                </div>
                                <div class="chart-bottom-heading"><span class="label label-info">Company</span>

                                </div>
                            </div>
                            <div class="span3">
                                <div class="chart" data-percent="<?php echo e($data['Allocated_Customer_percentage']); ?>">
                                    <?php echo e($data['Allocated_Customer']); ?>

                                </div>
                                <div class="chart-bottom-heading"><span class="label label-info">customer</span>

                                </div>
                            </div>
                            <div class="span3">
                                <div class="chart" data-percent="<?php echo e($data['pending_amount_percentage']); ?>">
                                    <?php echo e($data['pending_amount']); ?>

                                </div>
                                <div class="chart-bottom-heading"> <a href="company_fee"><span class="label label-info">Pending Amount</span></a>

                                </div>
                            </div>
                            <div class="span3">
                                <div class="chart" data-percent="<?php echo e($data['collected_amount_percentage']); ?>">
                                    <?php echo e($data['collected_amount']); ?>

                                </div>
                                <div class="chart-bottom-heading"><span class="label label-info">Collected Amount</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php /*echo "<pre>"; print_r($data['results2']) ;
                                foreach($data['results2'] as $row){
                                  echo  $row[0];
                                }
                                die;*/
                                ?>
                <div class="row-fluid">
                    <div class="span12">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Payment Updates</div>

                            </div>
                            <div class="block-content collapse in">
                                <table class="table table-bordered" id="tblcompanyfee">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th>S.No</th>
                                            <th>Company Name</th>
                                            <th>Contact Number</th>
                                            <th>Employee Name</th>
                                            <th>Contact Number</th>
                                            <th>Fee</th>
                                            <!--  <th>Collected Amount</th> -->
                                            <th>Pending Amount</th>
                                            <th>Followup Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sno=1;?> <?php $__currentLoopData = $data['result1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="<?= $r[4]?>">
                                            <td>
                                                <?= $sno ?>
                                            </td>
                                            <td>
                                                <a onclick="pendingamount_page_load(<?= $r[4]?>)">
                                                    <?= $r[6]?>
                                                </a>
                                            </td>
                                            <td>
                                                <?= $r[7]?>
                                            </td>
                                            <td>
                                                <?= $r[2]?>
                                            </td>
                                            <td>
                                                <?= $r[3]?>
                                            </td>
                                            <td>
                                                <?=$r[8]?>
                                            </td>

                                            <td>
                                                <?=$r[10]?>
                                            </td>

                                            <td>
                                                <?=$r[11]?>
                                            </td>
                                            <!--
                                                <td>
                                                    <button onclick="pendingamount_page_load()" class="btn  "><i class="icon-eye-open icon-black"></i></button>
                                                    <button onclick="pendingamount_page_load_edit()" class="btn btn-info "><i class="icon-pencil icon-white"></i></button>
                                                </td>
-->
                                        </tr>
                                        <?php $sno++;?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Document Updates</div>

                            </div>
                            <div class="block-content collapse in">
                                <table class="table table-striped table-bordered" id="document">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Company Name</th>
                                            <th>Phone</th>
                                            <th>Employee Name</th>
                                            <th>Phone</th>
                                            <th>Document Recevied</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Date</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sno=1;?> <?php $__currentLoopData = $data['document5']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr id="<?= $r[4]?>">
                                            <td>
                                                <?= $sno ?>
                                            </td>
                                            <td>
                                                <a onclick="document_delay_page_load(<?= $r[4]?>)">
                                                    <?=$r[6]?>
                                                </a>
                                            </td>

                                            <td>
                                                <?=$r[7]?>
                                            </td>
                                            <td>
                                                <?= $r[2]?>
                                            </td>
                                            <td>
                                                <?= $r[3]?>
                                            </td>
                                            <td>
                                                <span class="label <?=$r[10]?>">  <?= $r[9]?></span>
                                            </td>
                                            <td>
                                                <?=$r[14]?>
                                            </td>
                                            <td>
                                                <span class="label <?=$r[12]?>">   <?=$r[11]?></span>
                                            </td>
                                            <td>
                                                <?=$r[13]?>
                                            </td>

                                        </tr>
                                        <?php $sno++;?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>

            </div>
        </div>
        <hr>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#table1').DataTable();
        $('#document').DataTable();
    });

    function pendingamount_page_load(id) {
        var flag = 1;
        $('#table1 tr').click(function(event) {
            var id = $(this).attr('id');
            if (flag == 1) {
                $.ajax({
                    url: "editCompany_fee_info",
                    type: 'get',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        if ($.isEmptyObject(data.error)) {

                            window.location.href = "company_fee_view_details_info";
                        } else {
                            printErrorMsg(data.error);
                            $('html, body').animate({
                                scrollTop: '0px'
                            }, 1500);
                            return false;
                        }
                        //alert(data);
                        //window.location.href = "setting";
                    },
                })
                flag = 2;
            }
        })
    }

    function document_delay_page_load(id) {
        var flag = 1;
        $('#document tr').click(function(event) {
            var id = $(this).attr('id');
            if (flag == 1) {
                $.ajax({
                    url: "get_document_info",
                    type: 'get',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        if ($.isEmptyObject(data.error)) {
                            // alert(data);
                            window.location.href = "get_document_details_view_page";
                        } else {
                            printErrorMsg(data.error);
                            $('html, body').animate({
                                scrollTop: '0px'
                            }, 1500);
                            return false;
                        }
                        //alert(data);
                        //window.location.href = "setting";
                    },
                })
                flag = 2;
            }
        })
    }
    var app = angular.module("myapp", []);
    app.controller("mycontroller", function($scope, $http) {
        $scope.onloadfun = function() {
            $http({
                method: "GET",
                url: "manager_dashboard_details"
            }).then(function mySucces(response) {
                    console.log(response);
                    $scope.count_company = response.data.count_company_details;

                    $scope.count_company_percentage = response.data.total_company_percentage;
                    $scope.count_customer_details = response.data.count_customer_details;
                    $scope.total_customer_percentage = response.data.total_customer_percentage;
                    $scope.pending_amount = response.data.pending_amount;
                    $scope.pending_amount_percentage = response.data.pending_amount_percentage;
                    $scope.collected_amount = response.data.collected_amount;
                    $scope.collected_amount_percentage = response.data.collected_amount_percentage;

                    $scope.document_follow_up_date = [];
                    for (i = 0; i < response.data['manager_dash_document_delay'].length; i++) {
                        $scope.document_follow_up_date.push({
                            sno: i + 1,
                            Company_id: response.data['manager_dash_document_delay'][i]['Company_id'],
                            Company_Name: response.data['manager_dash_document_delay'][i]['Company_Name'],
                            company_phone: response.data['manager_dash_document_delay'][i]['company_phone'],
                            Follow_Up_Date: response.data['manager_dash_document_delay'][i]['Follow_Up_Date'],
                            Reason: response.data['manager_dash_document_delay'][i]['Reason'],


                        });

                    }
                    $scope.payment_follow_up_date = [];
                    for (i = 0; i < response.data['manager_dash_payment_delay'].length; i++) {
                        $scope.payment_follow_up_date.push({
                            sno: i + 1,
                            Company_id: response.data['manager_dash_payment_delay'][i]['Company_id'],
                            Company_Name: response.data['manager_dash_payment_delay'][i]['Company_Name'],
                            Payment_delay_date: response.data['manager_dash_payment_delay'][i]['Payment_delay_date'],
                            Reason: response.data['manager_dash_payment_delay'][i]['Reason'],
                            company_phone: response.data['manager_dash_payment_delay'][i]['company_phone'],

                        });

                    }
                },
                function myError(response) {
                    alert("error");
                });
        }
    })

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>