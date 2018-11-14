 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<link href="<?php echo e(asset('/css/select2.min.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(asset('/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>


<style>
    .sea_po_abs_2 {
        margin-right: 10%;
    }

    .aligndiv {
        width: 20%;
    }
.table-responsive .open > .dropdown-menu{
overflow-y: scroll;
height: 100px;
}
</style>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content" ng-app="company_view_app" ng-controller="company_view_controller">
            <div data-ng-init="onloadFun()">
                <div class="row-fluid">


                    <div class="block-content collapse in">
                        <div class="pull-right">
                            <?php if(Session::get('user_group_id') == 10): ?>
                            <?php 
                                $url = "addcompany";
                                if($data['page'] == 8)
                                    $url = "correspondingAddCompany";
                            ?>
                            <a href="<?= $url ?>" class="btn btn-primary search_btn">
								<i class="icon-plus icon-white"></i>Add
							</a> <?php endif; ?>
                        </div>

                        <div class="row-fluid">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">

                                    <?php $title = "GST REGULAR";
                               if($data['page'] == 8)
                                    $title = "GST COMPOUNDING";
                                    ?>
                                    <center>
                                        <div class="muted pull-left">
                                            MANAGE
                                        </div>
                                        <div class="muted pull-center">
                                            <?= $title ?>
                                        </div>
                                    </center>
                                </div>

                                <div class="block-content collapse in">
                                    <input type="hidden" name="page" id="page" value="<?= $data['page'] ?>">
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
        <hr>
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
    $(document).ready(function() {
        var url = 'getRegularCompanyBootstrapTable';
        var GroupId = <?php echo Session::get('user_group_id'); ?>;
        var visibleAction = false;
        if (GroupId == 10) {
            visibleAction = true;
        }
        <?php
            if($data['page'] == 8)
            {
        ?>

        url = 'getCompoundingCompanyBootstrapTable';

        <?php } ?>
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
                    "field": "Company_Name",
                    "title": "Company",
                    "align": "left",
                    "class": "aligndiv",
                    "visible": true

                },
                {
                    "field": "Company_Id",
                    "title": "UniqueID",
                    "align": "center",
                    //"valign": "bottom",
                    "visible": true,
                   // "formatter": "UniqueID"

                },
                {
                    "field": "Phone_No1",
                    "title": "Contact Number",
                    "align": "right",
                    //"valign": "bottom",
                    "visible": true,
                    //"formatter": "discountValueLinks"
                },
                {
                    "field": "Website",
                    "title": "Circle",
                    "align": "left",
                    //"valign": "bottom",
                    "visible": true,

                },

                {
                    "field": "First_Name",
                    "title": "Employee",
                    "align": "left",
                    //"valign": "bottom",
                    "visible": true
                },
                {
                    "field": "gst_username",
                    "title": "Username",
                    "align": "left",
                    //"valign": "bottom",
                    "visible": true,
                    //"formatter": "actionLinks"
                },
                {
                    "field": "gst_password",
                    "title": "Password",
                    "align": "left",
                    //"valign": "bottom",
                    "visible": true,

                },
                {
                    "field": "Status",
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
        var Id=row.Id;
        var Status=row.tax;
        return Id;
        // if(Status==7){
        //     return 'GST00'+Id;
        // }
        // if(Status==8){
        //     return 'GST00'+Id;
        // }
        
    }
    function actionLinks(value, row, index) {
        var Id = row.Id;
        var Status = row.Status;
        var GroupId1 = <?php echo Session::get('user_group_id'); ?>;

        var link = '';
        if (GroupId1 == 10) {
            link += '<button onclick="btnEdit(' + Id + ')" class="btn btn-info "><i class="icon-pencil icon-white"></i></button>';
        }
        link += '<button onclick="btnView(' + Id + ')" class="btn  "><i class="icon-eye-open icon-black"></i></button>';
        return link;
    }

    function actionLinks2(value, row, index) {
        var Id = row.Id;
        var Status = row.Status;
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

</script>

<script>
    function updateCompanyStatus(id, v) {
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
                        url: 'updateCompanyStatus',
                        data: {
                            companyId: id,
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


    $(document).ready(function() {
        $('#tblCompany').DataTable({
            "order": [
                [2, "asc"]
            ],
            "pageLength": 10,
            //"dom": '<"top"i>rt<"bottom"flp><"clear">'
            "sDom": 'Rfrtlip',
            //"pagingType": "full"

        });
    });
    //    $(document).ready(function() {
    //        //$('.paginate_button').click(function() {
    //        //$('.selected').removeClass('selected')
    //        $('.paginate_button').addClass("btn btn-sm");
    //        //});
    //    });

    function process_details() {
        var flag = 1;
        $('#tblCompany tr').click(function(event) {
            var id = $(this).attr('id');
            if (flag == 1) {
                $.ajax({
                    url: "get_company_process_details",
                    type: 'get',
                    data: {
                        id: id,
                        tax: $('#page').val(),
                    },
                    success: function(data) {
                        if ($.isEmptyObject(data.error)) {
                            //alert(data);
                            window.location.href = "company_process_details";
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
    var app = angular.module('company_view_app', []);
    app.controller('company_view_controller', function($scope, $http) {
        $scope.sort = function(keyname) {
            $scope.sortKey = keyname; //set the sortKey to the param passed
            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
        }
        //app.controller('pageLoadAppCtrl', ["$scope", function($scope) {
        $scope.onloadFun = function() {
            //alert($('#page').val());
            $http({
                method: "post",
                url: "CompanyListView",
                data: {
                    tax: $('#page').val(),
                }
            }).then(function mySucces(response) {
                console.log(response);

                $scope.company_view_details = [];
                for (i = 0; i < response.data['CompanyList'].length; i++) {
                    $scope.company_view_details.push({
                        sno: i + 1,
                        Id: response.data['CompanyList'][i]['Id'],
                        Company_Name: response.data['CompanyList'][i]['Company_Name'],
                        Phone_No: response.data['CompanyList'][i]['Phone_No1'],
                        Email_id: response.data['CompanyList'][i]['Email_Id'],
                        Gst_No: response.data['CompanyList'][i]['GST_No'],
                        Pan_No: response.data['CompanyList'][i]['Pan_No'],
                    });
                }
            }, function myError(response) {
                alert("error");
                //$scope.myWelcome = response.statusText;
            });
            //  console.log($scope.company_view_details);
        }
    });

</script>
<script>
    function btnEdit(id) {
        $.ajax({
            url: "editCompany",
            type: 'get',
            data: {
                id: id
            },
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    //alert(data);
                    window.location.href = "Company_Details_Edit";
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

    function btnView(id) {

        $.ajax({
            url: "editCompany",
            type: 'get',
            data: {
                id: id
            },
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    //alert(data);
                    window.location.href = "view_company_details";
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