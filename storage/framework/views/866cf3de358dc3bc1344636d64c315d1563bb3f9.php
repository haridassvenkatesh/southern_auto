 <?php $__env->startSection('content'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>
<form id="empCompanyForm">
    <div class="container-fluid">

        <div class=" row-fluid">
            <div class="span12" id="content">
                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">MAPPING</div>
                            <center>
                                <?php $title = "IT INDIVIDUAL";
									if($data['customer_tax']==61)
										$title = "IT CONCERN";
									elseif($data['customer_tax'] == 71)
										$title = "TDS INDIVIDUAL";
									elseif($data['customer_tax'] == 72)
										$title = "TDS CONCERN";
								
								?>
                                <div class="muted pull-center">
                                    <?= $title ?> - Employee Mapping</div>
                            </center>
                        </div>
                        <div class="block-content collapse in">
                            <div class=" form-horizontal span12">
                                <div>
                                    <table>
                                        <tr>
                                            <td>
                                                <div class="control-group">
                                                    <label class="control-label" for="category">Employee Name</label>
                                                    <div class="controls">
                                                        <select name="employee" id="employee" class="select2" onchange="emp_manager_id()">
                                                            <option value="0" label="Please Select" selected>Please Select</option>
                                                            <?php $__currentLoopData = $data['emp_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($row->Id); ?>">
                                                                <?= $row->First_Name ?> -
                                                                    <?= $row->Phone_No1 ?>
                                                            </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group">
                                                    <label class="control-label" for="category">Manager ID</label>
                                                    <div class="controls">
                                                        <select id="manager" name="manager" class="select2">
                                                            <option value="0">-- Select your option --</option>
                                                            <?php $__currentLoopData = $data['manager_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($row->Id); ?>">
                                                                <?= $row->First_Name ?> -
                                                                    <?= $row->Phone_No1 ?>
                                                            </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="control-group">

                                                    <div class="controls">

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <!--
                                            <div class="control-group">


                                                <button type="button" class="btn btn-default" ng-click="search()"><i class="icon-search icon-black"></i>Search</button>
                                            </div>
-->
                                            </td>
                                        </tr>
                                    </table>

                                    <div>
                                        <legend>Customer Mapping</legend>
                                        <center>
                                            <table>
                                                <tr style="height:35px;margin-bottom:10px;">
                                                    <tr>
                                                        <td style="background-color:#666699"><span style="margin-left:5px;color:white;background-color:#666699;width:250px;">Available</span>

                                                        </td>
                                                        <td></td>
                                                        <td style="background-color:#666699"><span style="margin-left:5px;color:white;background-color:#666699;width:250px;">Selected</span>

                                                        </td>
                                                        <tr>

                                                            <td>
                                                                <div>
                                                                    <select multiple="multiple" id='lstBox1' class="form-control">
                                                                        <?php $__currentLoopData = $data['customer_name']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                       
                                                                        <option value="<?php echo e($row->id); ?>">
                                                                            <?= $row->name ?>
                                                                                </option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                    <!--                                                                <select size="5" multiple ng-model="available" ng-options="client as client.name for client in availableclients" style="width: 100px;height:100px"></select>-->
                                                                </div>
                                                            </td>
                                                            <td>

                                                                <div style="float:left; width: 100px; text-align:center">



                                                                    <input type="button" id="btnRight" value=">" class="btn btn-default" />
                                                                    <br />
                                                                    <input type="button" id="btnLeft" value="<" class="btn btn-default" />
                                                                    <br />


                                                                </div>

                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <select multiple="multiple" id='lstBox2' name='lstBox2' class="form-control">

                                                                    </select>
                                                                    <!--                                                                <select size="5" multiple ng-model="selected" ng-options="client as client.name for client in selectedclients" style="width: 100px;height:100px" id="a"></select>-->
                                                                </div>
                                                            </td>

                                                        </tr>
                                            </table>

                                            <!--  <div>Selected Clients: {{selectedclients}}</div>
    <div>Available Clients: {{availableclients}}</div> -->
                                            <!--
                                        <div>Selected: {{selected}}</div>
                                        <div>Available: {{available}}</div>
-->
                                        </center>
                                        <br/>
                                        <br/>
                                        <center>
                                            <button type="button" class="btn btn-primary" onclick="btnAdd()">Add</button>
                                            <button type="submit" class="btn btn-warning">Cancel</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <input type="hidden" value="<?php echo e($data['customer_tax']); ?>" id="customer_tax" name="customer_tax">
        </div>
    </div>
</form>
<script>
    //    var app = angular.module("myApp", []);
    //    app.controller('myController', function($scope, $filter, $http) {
    //        $scope.IsHidden = false;
    //        $scope.onload = function() {
    //
    //            $http({
    //                method: "GET",
    //                url: "emp_company_mapping"
    //            }).then(function mySucces(response) {
    //                    console.log(response);
    //                    $scope.employee = [];
    //                    for (i = 0; i < response.data['emp_name'].length; i++) {
    //                        $scope.employee.push({
    //                            id: response.data['emp_name'][i]['Id'],
    //                            name: response.data['emp_name'][i]['First_Name']
    //
    //                        });
    //
    //                    }
    //
    //                    $scope.manager = [];
    //                    for (i = 0; i < response.data['manager_name'].length; i++) {
    //                        $scope.manager.push({
    //                            id: response.data['manager_name'][i]['Id'],
    //                            name: response.data['manager_name'][i]['First_Name']
    //
    //                        });
    //
    //                    }
    //                    $scope.available = [];
    //                    $scope.selected = [];
    //                    $scope.availableclients = [];
    //                    $scope.selectedclients = [];
    //
    //                    for (i = 0; i < response.data['company_name'].length; i++) {
    //                        $scope.availableclients.push({
    //                            id: response.data['company_name'][i]['Id'],
    //                            name: response.data['company_name'][i]['Company_Name']
    //
    //                        });
    //                    }
    //                    $scope.moveItem = function(items, from, to) {
    //
    //                        angular.forEach(items, function(item) {
    //                            var idx = from.indexOf(item);
    //                            from.splice(idx, 1);
    //                            to.push(item);
    //                        });
    //
    //                        // clear selection
    //                        $scope.available = "";
    //                        $scope.selected = "";
    //                    };
    //                },
    //                function myError(response) {
    //                    alert("error");
    //                });
    //        }
    //
    //        //        $scope.emp_company_mapping = function() {
    //        //            // console.log($scope.availableclients);
    //        //            //  console.log($scope.selectedclients);
    //        //            var formdata = new FormData();
    //        //            // var name=document.getElementById('employee').value;
    //        //            // var b=document.getElementById('manager').value;
    //        //            // console.log(name);
    //        //            // console.log(b);
    //        //            formdata.append('emp_id', document.getElementById('employee').value);
    //        //            formdata.append('manger_id', document.getElementById('manager').value);
    //        //            var newData1 = JSON.stringify($scope.selectedclients);
    //        //
    //        //
    //        //            formdata.append('emp_company', newData1);
    //        //            $http.post('emp_company_mapping_add', formdata, {
    //        //                    transformRequest: angular.identity,
    //        //                    headers: {
    //        //                        'Content-Type': undefined,
    //        //                        'Process-Data': false
    //        //                    }
    //        //                })
    //        //                .success(function(data) {
    //        //
    //        //                    if ($.isEmptyObject(data.error)) {
    //        //                        $(".print-error-msg").find("ul").html('');
    //        //                        $(".print-error-msg").css('display', 'none');
    //        //                        //alert(data.message);
    //        //                        // if (data.status == 1) {
    //        //                        // window.location.replace("company_view_details");
    //        //                        //}
    //        //                        alert(data);
    //        //                    } else {
    //        //                        $scope.company_add = false;
    //        //                        printErrorMsg(data.error);
    //        //                        //$("#designationName").val('').focus();
    //        //                        $('html, body').animate({
    //        //                            scrollTop: '0px'
    //        //                        }, 1500);
    //        //                        return false;
    //        //                    }
    //        //                });
    //        //        }
    //        //
    //        //
    //
    //
    //
    //        //        $scope.emp_manager_id = function() {
    //        //            $http({
    //        //                method: "GET",
    //        //                url: "get_emp_manager_id",
    //        //                data: {
    //        //                    emp_id: $scope.employee
    //        //                }
    //        //            }).then(function mySucces(response) {
    //        //                    console.log(response);
    //        //                },
    //        //                function myError(response) {
    //        //                    alert("error");
    //        //                });
    //        //        }
    //
    //    });

</script>
<script>
    $('#btnRight').click(function(e) {
        var selectedOpts = $('#lstBox1 option:selected');
        if (selectedOpts.length == 0) {
            swal("", "Nothing to move.");
            e.preventDefault();
        }
        $('#lstBox2').append($(selectedOpts).clone());
        $(selectedOpts).remove();
        e.preventDefault();
    });

    $('#btnLeft').click(function(e) {
        var selectedOpts = $('#lstBox2 option:selected');
        if (selectedOpts.length == 0) {
            swal("", "Nothing to move.");
            e.preventDefault();
        }
        $('#lstBox1').append($(selectedOpts).clone());
        $(selectedOpts).remove();
        e.preventDefault();
    });


    $(document).ready(function() {
        $(".select2").select2();

    });

    function sample(value) {
        //alert(value);
    }

    function emp_manager_id() {

        $.ajax({
            url: "get_employee_manager_id",
            type: 'get',
            data: {

                emp_id: document.getElementById('employee').value,
                manager_id: document.getElementById('manager').value,
                IT: document.getElementById('customer_tax').value,

            },
            success: function(data) {
                console.log(data);
                if ($.isEmptyObject(data.error)) {

                    //alert(data);
                    //console.log(data[0].Company_Name);
                    var id = 0;
                    $('#manager').removeClass("select2");
                    if (data['get_manager_name']) {
                        id = data['get_manager_name'][0].Manager_Id;
                    }
                    $('#manager').val(id);
                    $('#manager').addClass("select2");
                    $(".select2").select2();
                    $("#lstBox2").empty();
                    for (i = 0; i < data["selected"].length; i++) {
                        $("#lstBox2").append('<option value=' + data["selected"][i].id + '>' + data["selected"][i].name + '</option>');
                    }
                    $("#lstBox1").empty();
                    for (i = 0; i < data["available"].length; i++) {
                        $("#lstBox1").append('<option value=' + data["available"][i].id + '>' + data["available"][i].name + '</option>');
                    }


                } else {
                    printErrorMsg(data.error);
                    $('html, body').animate({
                        scrollTop: '0px'
                    }, 1500);
                    return false;
                }

            },
            error: function(data) {
                alert("error");
            }
        });

    }

    function validation() {
        var flag = true;
        if (document.getElementById('employee').value == 0) {
            flag = false;
            swal("", "Please Select Employee");
            return flag;
        }
        if (document.getElementById('manager').value == 0) {
            flag = false;
            swal("", "Please Select Manager");
            return flag;
        }
        return flag;
    }

    function btnAdd() {

        if (validation() == true) {
            $('#lstBox2 option').prop('selected', true);
            var formData = new FormData();
            var a = [];
            var b = [];
            for (i = 0; i < $('#lstBox2').length; i++) {
                a.push({
                    id: $('#lstBox2').val()
                });

            }

            for (i = 0; i < $('#lstBox1').length; i++) {

                b.push({
                    id: $('#lstBox1').val()
                });


            }
            //alert($('#lstBox1').length);
            //alert($('#lstBox2').length);
            formData.append('list2', a);
            formData.append('list1', b);
            //            console.log($("#lstBox2").val());
            //            alert($('#lstBox1').length);
            //            if ($('#lstBox1').length != 0) {
            $.ajax({
                url: "insert_emp_customer",
                type: 'get',
                data: {
                    list2: a,
                    list1: b,
                    emp_id: $("#employee").val(),
                    manager_id: $("#manager").val(),
                    IT: document.getElementById('customer_tax').value,
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        //alert(data);
                        // console.log(data);



                        if (document.getElementById('customer_tax').value == 61) {

                            swal({
                                    title: "",
                                    text: "Success",
                                    icon: "success",
                                    button: "Aww yiss!",
                                },
                                function() {
                                    window.location.href = 'customer_corresponding_mapping';
                                });
                        } else if (document.getElementById('customer_tax').value == 71) {
                            swal({
                                    title: "",
                                    text: "Success",
                                    icon: "success",
                                    button: "Aww yiss!",
                                },
                                function() {
                                    window.location.href = 'customer_tds_individual_mapping';
                                });

                        } else if (document.getElementById('customer_tax').value == 72) {
                            swal({
                                    title: "",
                                    text: "Success",
                                    icon: "success",
                                    button: "Aww yiss!",
                                },
                                function() {
                                    window.location.href = 'customer_tds_corresponding_mapping';
                                });

                        } else {
                            swal({
                                    title: "",
                                    text: "Success",
                                    icon: "success",
                                    button: "Aww yiss!",
                                },
                                function() {
                                    window.location.href = 'customer_individual_mapping';
                                });

                        }

                        //var url = "customer_individual_mapping";
                        //                                window.location.href = url;
                        //                                if (document.getElementById('customer_tax').value == 61) {
                        //                                    url = "customer_corresponding_mapping";
                        //                                }
                        //console.log(data);
                        //window.location.href = url;
                    } else {
                        printErrorMsg(data.error);
                        $('html, body').animate({
                            scrollTop: '0px'
                        }, 1500);
                        return false;
                    }

                },

            });
            //            } else {
            //                alert('no company');
            //            }

        }
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>