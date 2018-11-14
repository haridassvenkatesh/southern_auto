 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<link href="<?php echo e(asset('/css/select2.min.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(asset('/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>


<style>
    .switch {
        /* margin:  -9%; */
        /*
        margin-top: -13%;
        margin-bottom: -4px;
        margin-left: 42%;
*/
    }

    .sea_po_abs_2 {
        margin-right: 10%;
    }
.table-responsive .open > .dropdown-menu{
overflow-y: scroll;
height: 100px;
}
</style>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content" ng-app="customer_view_app" ng-controller="customer_view_controller">
            <div data-ng-init="onloadFun()">
                <div class="row-fluid">
                    <div class="block-content collapse in">
                        <div class="pull-right customer_view_search">
                            <!--                            <input type="text" ng-model="search" class="form-control" placeholder="Search" style="margin-top:21px;">-->
                            <?php if(Session::get('user_group_id') == 10): ?>

                            <?php 
                                $url = "addcustomer";
                                if($data['page'] == 61)
                                    $url = "addcustomer_corresponding";
                            if($data['page'] == 71)
                                $url = "TDSCreateCustomerIndividual";
                            if($data['page'] == 72)
                                $url = "TDSCreateCustomerConcern";
                            ?>

                            <a href="<?= $url ?>" class="btn btn-primary search_btn"><i class="icon-plus icon-white"></i>Add</a> <?php endif; ?>
                        </div>
                        <br/>
                        <br/>
                        <div class="row-fluid">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <center>
                                        <div class="muted pull-left">
                                            MANAGE
                                        </div>
                                        <div class="muted pull-center">
                                            <?php $title = "IT INDIVIDUAL";
                                               if($data['page'] == 61)
                                                    $title = "IT CONCERN";
                                                else if($data['page'] == 71)
                                                     $title = "TDS INDIVIDUAL";
                                                else if($data['page'] == 72)
                                                     $title = "TDS CONCERN";
                                                ?>
                                            <?= $title ?>
                                        </div>
                                    </center>
                                </div>

                                <div class="block-content collapse in">
                                    <input type="hidden" name="page" id="page" value="<?= $data['page'] ?>">
                                    <div class="span12" style="margin-left:0px;">
                                        <!--
                                        <table class="table table-bordered" id="tblCustomer">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <?php if($data['page'] == 61)
													{ ?>
                                                    <th>Company Name</th>
                                                    <?php } ?>
                                                    <th>Contact No</th>
                                                    <th>Employee</th>
                                                    <th>Username</th>
                                                    <th>Password</th> <?php if(Session::get('user_group_id') == 10): ?>
                                                    <th>Action</th>
                                                    <?php endif; ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sno=1;?> <?php $__currentLoopData = $data['get_customer_regular_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr id=" <?= $r->id?>">
                                                    <td>
                                                        <?= $sno ?>
                                                    </td>
                                                    <td>
                                                        <?= $r->name?>
                                                    </td>
                                                    <?php if($data['page'] == 61)
													{ ?>
                                                    <td>
                                                        <?= $r->company_name?>
                                                    </td>
                                                    <?php } ?>
                                                    <td>
                                                        <?= $r->contact_no?>
                                                    </td>
                                                    <td>
                                                        <?= $r->First_Name?>
                                                    </td>
                                                    <td>
                                                        <?= $r->user_id?>
                                                    </td>
                                                    <td>
                                                        <?= $r->password?>
                                                    </td>

                                                    <td>
                                                        <?php if(Session::get('user_group_id') == 10): ?>
                                                        <button onclick="btncustomerEdit()" class="btn btn-info "><i class="icon-pencil icon-white"></i></button><?php endif; ?>
                                                        <button onclick="btncustomerView()" class="btn "><i class="icon-eye-open"></i></button> <?php if(Session::get('user_group_id') == 10): ?>

                                                        <div id="FCitc" style="display:block">
                                                            <label class="switch">
																<input class="switch-input" type="checkbox" id="chkStatus_<?= $r->id?>" onchange="updateCompanyStatus(<?= $r->id?>)" <?php if($r->status == 2) echo "checked"; ?> />					
																<span class="switch-label" data-on="Inactive" data-off="Active"></span> 
																<span class="switch-handle"></span> 
															</label>
                                                        </div>

                                                        <?php endif; ?>


                                                    </td>

                                                </tr>
                                                <?php $sno++;?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
-->
                                        <div class="table-responsive">

                                            <table id="simple-table" class="table table-bordered" data-side-pagination="server">

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>

                    </div>

                </div>
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

    $(document).ready(function() {
        var url = 'getItBootstrapTable?Page=' + <?php echo $data['page']; ?> + "";
        var visibleFlag = false;

        <?php
            if($data['page'] == 61 || $data['page'] == 72)
            {
        ?>
        visibleFlag = true;

        <?php    } ?>
        var GroupId1 = <?php echo Session::get('user_group_id'); ?>;
        var visibleAction = false;
        if (GroupId1 == 10) {
            visibleAction = true;
        }
        $('#simple-table').bootstrapTable({
            method: 'get',
            url: url,
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
                "fileName": "vendor_"
            },

            columns: [{
                    "field": "id",
                    "title": "Id",
                    "align": "center",
                    //"valign": "bottom",
                    "visible": false

                }, {
                    //"field": "enquiryNumber",
                    "title": "Sno",
                    "align": "center",
                    //"valign": "bottom",
                    "visible": true,
                    "formatter": "runningFormatter"
                }, {
                    "field": "name",
                    "title": "Name",
                    "align": "left",
                    "class": "aligndiv",
                    "visible": true

                },
                {
                    
                    "field": "Customer_UniqueID",
                    "title": "UniqueID",
                    "align": "center",
                    //"valign": "bottom",
                    "visible": true,
                 //   "formatter": "UniqueID"

                },

                {
                    "field": "company_name",
                    "title": "Company Name",
                    "align": "left",
                    //"valign": "bottom",
                    "visible": visibleFlag,

                },
                {
                    "field": "contact_no",
                    "title": "Contact Number",
                    "align": "right",
                    //"valign": "bottom",
                    "visible": true,
                    //"formatter": "discountValueLinks"
                },

                {
                    "field": "First_Name",
                    "title": "Employee",
                    "align": "left",
                    //"valign": "bottom",
                    "visible": true
                },
                {
                    "field": "user_id",
                    "title": "Username",
                    "align": "left",
                    //"valign": "bottom",
                    "visible": true,
                    //"formatter": "actionLinks"
                },
                {
                    "field": "password",
                    "title": "Password",
                    "align": "left",
                    //"valign": "bottom",
                    "visible": true,

                },
                {
                    "field": "status",
                    "title": "Status",
                    "align": "left",
                    //"valign": "bottom",
                    "visible": false,

                },
                {
                    "field": "mobileNumber",
                    "title": "Action",
                    "align": "center",
                    //"valign": "bottom",
                    "visible": true,
                    "formatter": "actionLinks"
                },
                {
                    "title": "Action",
                    "align": "center",
                    "visible": visibleAction,
                    "formatter": "actionLinks2"
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
    function UniqueID(value, row, index){
        var Id=row.id;
        return Id;
        // if($('#page').val() == 60){
        //     return 'IT00'+Id;
        // }
        // if($('#page').val() == 61){
        //     return 'IT00'+Id;
        // }
        // if($('#page').val() == 71){
        //     return 'TDS00'+Id;
        // }
        // if($('#page').val() == 72){
        //     return 'TDS00'+Id;
        // }
             
        
    }
    function actionLinks(value, row, index) {
        var Id = row.id;
        var Status = row.status;
        var GroupId1 = <?php echo Session::get('user_group_id'); ?>;
        var link = '';
        if (GroupId1 == 10) {
            link += '<button onclick="btncustomerEdit(' + Id + ')" class="btn btn-info "><i class="icon-pencil icon-white"></i></button>';
        }
        link += '<button onclick="btncustomerView(' + Id + ')" class="btn  "><i class="icon-eye-open icon-black"></i></button>';
        return link;
    }

    function actionLinks2(value, row, index) {
        var Id = row.id;
        var Status = row.status;
        var GroupId1 = <?php echo Session::get('user_group_id'); ?>;
        var link = '';
        if (GroupId1 == 10) {
            link += '<div id="FCitc" style="display:block">';
            link += '<label class="switch">';
            link += '<input class="switch-input" type="checkbox" id="chkStatus_' + Id + '" onchange="updateCompanyStatus(' + Id + ',value)"';
            if (Status == 2) {
                link += 'checked';
            }
            link += '/>';
            link += '<span class = "switch-label"  data-on = "Inactive" data-off = "Active" > </span>  <span class = "switch-handle" > </span> ';
            link += '</label > </div>';
        }
        return link;
    }

    /** BOOTSTRAP TABLE **/





    /** UPDATE STATUS **/

    function updateCompanyStatus(id) {
        var msg = "";
        var status = 1;
        if ($("#chkStatus_" + id).prop("checked")) {
            msg = "Make sure you want to Inactive.";
            status = 2;
        } else {
            msg = "Make sure you want to Active.";
            status = 1;
        }
        //return;
        swal({
                title: "",
                text: msg,
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                cancelButtonText: "Cancel",

                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: 'updateCustomerStatus',
                        method: 'get',
                        data: {
                            customerId: id,
                            status: status,
                        },
                        success: function(data) {
                            //alert(data);
                            swal("Completed!", "Successfully Completed...!", "success");
                        },
                        error: function(data) {
                            alert('error');
                        }
                        //alert(id);
                    })
                } else {
                    $("#chkStatus_" + id).attr('checked', false);
                    //alert();
                    swal("Process Cancelled", "", "error");
                }
            }
        );
    }

    /** UPDATE STATUS **/


    $(document).ready(function() {
        $('#tblCustomer').DataTable({
            "order": [
                [2, "asc"]
            ],
            "pageLength": 10,
            //"dom": '<"top"i>rt<"bottom"flp><"clear">'
            "sDom": 'Rfrtlip',
        });
    });
    var app = angular.module("customer_view_app", []);
    app.controller("customer_view_controller", function($scope, $http) {
        $scope.sort = function(keyname) {
            $scope.sortKey = keyname; //set the sortKey to the param passed
            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
        }
        $scope.onloadFun = function() {
            $http({
                method: "post",
                url: "CustomerListView",
                data: {
                    it: $('#page').val(),
                }
            }).then(function mySucces(response) {
                // console.log(response);

                $scope.customer_view_details = [];
                for (i = 0; i < response.data['CustomerList'].length; i++) {
                    $scope.customer_view_details.push({
                        sno: i + 1,
                        Id: response.data['CustomerList'][i]['Id'],
                        First_Name: response.data['CustomerList'][i]['First_Name'],
                        Phone_No: response.data['CustomerList'][i]['Phone_No1'],
                        Email_id: response.data['CustomerList'][i]['Email_Id'],
                        Pan_No: response.data['CustomerList'][i]['Pan_No'],
                        Aadhar_No: response.data['CustomerList'][i]['Aadhar_No'],

                    });
                };

            }, function myError(response) {
                alert("error");
                //$scope.myWelcome = response.statusText;
            });

        }
    });


    function btncustomerEdit(id) {

        //  var id = $(this).attr('id');
        $.ajax({
            url: "editCustomer",
            type: 'get',
            data: {
                id: id,
                page: $('#page').val()
            },
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    console.log(data);
                    if ($('#page').val() == 60) {
                          window.location.href = "edit_customer";
                    }
                    if ($('#page').val() == 61) {
                          window.location.href = "edit_it_concern";
                    }
                    if ($('#page').val() == 71) {
                          window.location.href = "edit_tds_individual";
                    }
                    if ($('#page').val() == 72) {
                         window.location.href = "edit_tds_concern";
                    }
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

    }

    function btncustomerView(id) {

        // var id = $(this).attr('id');
        $.ajax({
            url: "editCustomer",
            type: 'get',
            data: {
                id: id
            },
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    //alert(data);
                    if ($('#page').val() == 60) {
                        window.location.href = "view_customer";
                    }
                    if ($('#page').val() == 61) {
                        window.location.href = "view_it_concern";
                    }
                    if ($('#page').val() == 71) {
                        window.location.href = "view_tds_individual";
                    }
                    if ($('#page').val() == 72) {
                        window.location.href = "view_tds_concern";
                    }
                    //                        window.location.href = "";
                    //                        window.location.href = "";
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


    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>