 <?php $__env->startSection('content'); ?>
<!--<link href="<?php echo e(asset('/css/bootstrap-datepicker3.css')); ?>" rel="stylesheet" media="screen">-->
<!--<script src="<?php echo e(asset('/js/bootstrap-datepicker.min.js')); ?>"></script>-->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('/css/ng-tags-input.min.css')); ?>" />
<script src="<?php echo e(asset('/js/ng-tags-input.min.js')); ?>"></script>
<script>
    $(function() {
        $(".date").datepicker({
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            changeYear: true,
            maxDate: 0,
        });
    });

</script>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content" ng-app="myapp" ng-controller="mycontroller">
            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>
            <!-- validation -->
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <center>
                            <?php $title = "IT INDIVIDUAL";
                               if($data['page'] == 61)
                                    $title = "IT CONCERN";
                            else if($data['page'] == 71)
                                 $title = "TDS INDIVIDUAL";
                            else if($data['page'] == 72)
                                 $title = "TDS CONCERN";
                                    ?>
                            <div class="muted pull-left">
                                MANAGE
                            </div>
                            <div class="muted pull-center">
                                <?= $title ?> - Add Customer
                            </div>
                        </center>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">

                            <!-- BEGIN FORM-->
                            <div name="userForm" class="form-horizontal" autocomplete="off" novalidate>
                                <fieldset>

                                    <div class="span12"></div>
                                    <legend>Personal Details</legend>
                                    <div class="span12">
                                        <div class="span6">
                                            <input type="hidden" name="page" id="page" value="<?= $data['page'] ?>">
                                            <!--  <div class="form-group" ng-class="{ 'has-error' : userForm.firstname.$invalid && !userForm.firstname.$pristine }"> -->
                                            <label class="control-label" for="firstname">First Name <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="firstname" placeholder="First Name" ng-model="firstname" />
                                                    <!--  <p style="color:Red" ng-show="userForm.firstname.$invalid && !userForm.firstname.$pristine" class="help-block">Name is Required.</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">

                                            <label class="control-label" for="panno">Pan No <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="panno" placeholder="Pan No" ng-model="panno" ng-change="panvalidation()" />
                                                    <p style="color:brown" ng-show="not_validpan">Not a valid no.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">

                                                <label class="control-label" for="category">Username<b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" ng-model="gst_username" placeholder="GST Username" name="gst_username" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">

                                                <label class="control-label" for="category">Password<b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" ng-model="gst_password" placeholder="GST Password" name="gst_password" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="lastname">Father Name</label>
                                                <div class="controls">
                                                    <input type="text" name="lastname" placeholder="Last Name" ng-model="lastname" />
                                                </div>
                                            </div>




                                            <!--  <div class="form-group" ng-class="{ 'has-error' : userForm.phoneno.$invalid && !userForm.phoneno.$pristine }"> -->
                                        </div>
                                        <div class="span6">


                                            <label class="control-label" for="dob">Date of Birth <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input class="form-control date" id="date" name="date" placeholder="DD/MM/YYYY" type="text" readonly />
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="span12">

                                        <div class="span6">
                                            <label class="control-label" for="dob">Contact No<b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="phoneno" placeholder="Phone Number" ng-model="phoneno" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <!--                                                 <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
 -->
                                                <label class="control-label" for="email">Email <b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <input type="email" name="email" placeholder="Email" ng-model="email" />

                                                    <!--  <p style="color:Red" ng-show="userForm.email.$invalid && !userForm.email.$pristine " class="help-block">Enter a valid email.</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">
                                            <!--  <div class="form-group" ng-class="{ 'has-error' : userForm.address1.$invalid && !userForm.address1.$pristine }"> -->
                                            <label class="control-label" for="companyaddress">Address <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="address1" placeholder="Address" ng-model="address1" />
                                                    <!--  <p style="color:Red" ng-show="userForm.address1.$invalid && !userForm.address1.$pristine " class="help-block">Enter a address.</p>
                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="span6">
                                            <label class="control-label" for="companyaddress">Sources Of Fund</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="txtSof" placeholder="Sources Of Fund" ng-model="txtSof" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="category">Auditor <b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <input type="text" name="Auditor" placeholder="Auditor" ng-model="Auditor" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="image">Auditor Contact No<b style="color:red">*</b></label>


                                                <div class="controls">
                                                    <input type="text" name="auditor_contact_no" placeholder="Contact No" ng-model="auditor_contact_no" />
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="span12">

                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="category">Fee <b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <input type="text" id="actual_fee" name="actual_fee" placeholder="Fee" ng-model="actual_fee" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                        </div>
                                    </div>

                                    <legend>Bank Details</legend>
                                    <div class="row-fluid">
                                        <!-- block -->
                                        <div class="block">
                                            <div class="navbar navbar-inner block-header">
                                                <div class="muted pull-left">Add Bank Details</div>
                                            </div>
                                            <div class="block-content collapse in">
                                                <div class="span12">
                                                    <table class="table table-bordered" id="tableId">
                                                        <thead>

                                                            <th>
                                                                <input type="checkbox" ng-model="selectedAll" ng-click="checkAll()" />
                                                            </th>

                                                            <th>Bank Name</th>
                                                            <th>Branch Name</th>
                                                            <th>IFSC Code</th>
                                                            <th>Account Number</th>


                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="bank_detail in Customer_Bank_Details" class="controls">
                                                                <td>
                                                                    <input type="checkbox" ng-model="bank_detail.selected" />
                                                                </td>

                                                                <td>
                                                                    <input type="text" name="Bank_Name" ng-model="bank_detail.Bank_Name" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="Branch_Name" ng-model="bank_detail.Branch_Name" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="Ifsc_Code" ng-model="bank_detail.Ifsc_Code" />
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="Account_No" ng-model="bank_detail.Account_No" />
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <div class="form-group">
                                                        <input ng-hide="!Customer_Bank_Details.length" type="button" class="btn btn-danger " ng-click="remove()" value="Remove">
                                                        <button class="btn btn-success pull-right" ng-click="addNew()" type="button"><i class="icon-plus icon-white"></i> Bank Details</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /block -->
                                    </div>



                                    <div>
                                        <center>
                                            <button type="button" ng-click="submitform()" class="btn btn-primary">Add</button>
                                            <button type="submit" class="btn btn-warning" ng-click="cancel()">Cancel</button>
                                        </center>
                                    </div>


                                </fieldset>
                            </div>
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
            <!-- /validation -->
        </div>
    </div>
    <hr>

</div>

<script>
    // $('#input-tags').tagsInput();

    var app = angular.module("myapp", ['ngTagsInput']);

    app.controller("mycontroller", function($scope, $http) {

        // var a=$scope.numbers.length;
        // console.log(a);
        // for(i=0;i<a;i++){
        //    console.log($scope.numbers[i]);
        // }

        $scope.cancel = function() {
            if (document.getElementById('page').value == 60) {
                window.location.replace("customer_view_details");
            } else if (document.getElementById('page').value == 61) {
                window.location.replace("concern_customer_view");
            }
        }

        $scope.onloadFun = function() {

            $http({
                method: "GET",
                url: "customer_tax_type"
            }).then(function mySucces(response) {
                    console.log(response);
                    $scope.taxtype = [];
                    for (i = 0; i < response.data['tax-type'].length; i++) {
                        $scope.taxtype.push({
                            id: response.data['tax-type'][i]['Id'],
                            tax: response.data['tax-type'][i]['Status_Name']

                        });

                    }
                },
                function myError(response) {
                    alert("error");
                });
        }
        $scope.panvalidation = function() {
            var regpan = /^([A-Z]{5})(\d{4})([a-zA-Z]{1})$/;
            if (regpan.test($scope.panno) == false) {
                $scope.not_validpan = true;

            } else {
                $scope.not_validpan = false;

            }
        }


        $scope.phonevalidation = function() {

            var regpan = /^[0-9]*$/;
            if (regpan.test($scope.phoneno) == false) {
                $scope.not_validphone = true;

            } else {
                $scope.not_validphone = false;

            }
        }

        $scope.audharvalidation = function() {
            var regaudhar = /^[2-9]{1}[0-9]{11}$/;
            if (regaudhar.test($scope.audharno) == false) {
                $scope.not_validaudhar = true;

            } else {
                $scope.not_validaudhar = false;

            }
        }
        $scope.Customer_Bank_Details = [];

        $scope.addNew = function(Bank_Details) {

            $scope.Customer_Bank_Details.push({

                'Bank_Name': "",
                'Branch_Name': "",
                'Ifsc_Code': "",
                'Account_No': "",

            });
        };

        $scope.remove = function() {
            var newDataList = [];
            $scope.selectedAll = false;
            angular.forEach($scope.Customer_Bank_Details, function(selected) {
                if (!selected.selected) {
                    newDataList.push(selected);
                }
            });
            $scope.Customer_Bank_Details = newDataList;
        };

        $scope.checkAll = function() {
            if ($scope.selectedAll) {
                $scope.selectedAll = true;
            } else {
                $scope.selectedAll = false;
            }
            angular.forEach($scope.Customer_Bank_Details, function(bank_detail) {
                bank_detail.selected = $scope.selectedAll;
            });
        };


        $scope.files = [];
        $scope.commondity = [];

        $scope.submitform = function() {
            // if ($scope.userForm.$valid) {
            $scope.image1 = '';
            if ($scope.files) {
                $scope.image1 = $scope.files[0];
            }
            $scope.image2 = '';
            if ($scope.files2) {
                $scope.image2 = $scope.files2[0];
            }
            $scope.image3 = '';
            if ($scope.files3) {
                $scope.image3 = $scope.files3[0];
            }

            var firstname = "";
            var panno = "";
            var gst_username = "";
            var gst_password = "";
            var lastname = "";
            var phoneno = "";
            var email = "";
            var address1 = "";
            var txtSof = "";
            var Auditor = "";
            var auditor_contact_no = "";
            var actual_fee = "";
            var date = "";

            //var actual_fee = "";
            //var tax_type = "";
            var Customer_Bank_Details = "";
            var page = $('#page').val();
            if ($scope.firstname != undefined) {
                firstname = $scope.firstname;
            }
            if ($scope.panno != undefined) {
                panno = $scope.panno;
            }
            if ($scope.gst_username != undefined) {
                gst_username = $scope.gst_username;
            }
            if ($scope.gst_password != undefined) {
                gst_password = $scope.gst_password;
            }
            if ($scope.lastname != undefined) {
                lastname = $scope.lastname;
            }
            if ($scope.phoneno != undefined) {
                phoneno = $scope.phoneno;
            }
            if ($scope.email != undefined) {
                email = $scope.email;
            }
            if ($scope.address1 != undefined) {
                address1 = $scope.address1;
            }
            if ($scope.txtSof != undefined) {
                txtSof = $scope.txtSof;
            }
            if ($scope.Auditor != undefined) {
                Auditor = $scope.Auditor;
            }
            if ($scope.auditor_contact_no != undefined) {
                auditor_contact_no = $scope.auditor_contact_no;
            }
            if (document.getElementById('date').value != "") {
                date = document.getElementById('date').value;
            }

            if ($scope.actual_fee != undefined) {
                actual_fee = $scope.actual_fee;
            }

            if ($scope.Customer_Bank_Details != "") {
                Customer_Bank_Details = JSON.stringify($scope.Customer_Bank_Details);
            }

            //            var formdata = new FormData();
            var formdata = new FormData();
            formdata.append('firstname', firstname);
            formdata.append('panno', panno);
            formdata.append('gst_username', gst_username);
            formdata.append('gst_password', gst_password);
            formdata.append('lastname', lastname);
            formdata.append('phoneno', phoneno);
            formdata.append('email', email);
            formdata.append('address1', address1);
            formdata.append('txtSof', txtSof);
            formdata.append('Auditor', Auditor);
            formdata.append('auditor_contact_no', auditor_contact_no);
            formdata.append('actual_fee', actual_fee);
            formdata.append('dob', date);









            //            formdata.append('firstname', firstname);
            //            formdata.append('lastname', lastname);
            //            formdata.append('phoneno', phoneno);
            //            formdata.append('aphoneno', aphoneno);
            //            formdata.append('dob', date);
            //            formdata.append('email', email);
            //            formdata.append('address1', address1);
            //            formdata.append('address2', address2);
            //            formdata.append('city', city);
            //            formdata.append('image1', $scope.image1);
            //            formdata.append('panno', panno);
            //            formdata.append('image2', $scope.image2);
            //            formdata.append('audharno', audharno);
            //            formdata.append('image3', $scope.image3);
            //            // formdata.append('taxtype', tax_type);
            //            formdata.append('actual_fee', actual_fee);
            //            //console.log($scope.tax_type);
            //            formdata.append('page', page);


            formdata.append('customer_bank', Customer_Bank_Details);
            $http.post('add_customer_information', formdata, {
                transformRequest: angular.identity,
                headers: {
                    'Content-Type': undefined,
                    'Process-Data': false
                }
            }).success(function(data) {
                console.log(data);
                if ($.isEmptyObject(data.error)) {
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display', 'none');
                    swal({
                            title: "",
                            text: "Added Successfully",
                            icon: "success",
                            button: "Aww yiss!",
                        },
                        function() {
                            window.location.href = 'customer_view_details';
                        });
                    // window.location.href = "customer_view_details";
                    // 
                } else {
                    $scope.company_add = false;
                    printErrorMsg(data.error);
                    //$("#designationName").val('').focus();
                    $('html, body').animate({
                        scrollTop: '0px'
                    }, 1500);
                    return false;
                }

            });



            // } else {
            //     alert("invalid");
            // }


        }

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }
        $scope.LoadFileData = function(element) {
            $scope.currentFile = element.files[0];
            var reader = new FileReader();
            reader.onload = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(element.files[0]);
                $scope.image_source = event.target.result
                $scope.$apply(function($scope) {
                    $scope.files = element.files;
                });

            }
            reader.readAsDataURL(element.files[0]);
        }
        $scope.LoadFileData2 = function(element) {
            $scope.currentFile2 = element.files[0];
            var reader = new FileReader();
            reader.onload = function(event) {
                var output1 = document.getElementById('output1');
                output1.src = URL.createObjectURL(element.files[0]);
                $scope.image_source = event.target.result
                $scope.$apply(function($scope) {
                    $scope.files2 = element.files;
                });

            }
            reader.readAsDataURL(element.files[0]);
        }

        $scope.LoadFileData3 = function(element) {
            $scope.currentFile3 = element.files[0];
            var reader = new FileReader();
            reader.onload = function(event) {
                var output1 = document.getElementById('output2');
                output2.src = URL.createObjectURL(element.files[0]);
                $scope.image_source = event.target.result
                $scope.$apply(function($scope) {
                    $scope.files3 = element.files;
                });

            }
            reader.readAsDataURL(element.files[0]);
        }




    });

</script>
<script>
    $(document).ready(function() {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
    })

</script>
<!--
<script>
    $(document).ready(function() {
        //var rows = document.getElementById(tableId).getElementsByTagName("tr").length;
        var rowCount = $('#tableId tr').length;
        console.log(rowCount);
    });
</script>
-->
<script>
    $(function() { // DOM ready

        // ::: TAGS BOX

        $("#tags input").on({
            focusout: function() {
                var txt = this.value.replace(/[^a-z0-9\+\-\.\#]/ig, ''); // allowed characters
                if (txt) $("<span/>", {
                    text: txt.toLowerCase(),
                    insertBefore: this
                });
                this.value = "";


            },
            keyup: function(ev) {
                // if: comma|enter (delimit more keyCodes with | pipe)
                if (/(188|13)/.test(ev.which)) $(this).focusout();
            }

        });
        $('#tags').on('click', 'span', function() {
            // if (confirm("Remove " + $(this).text() + "?")) $(this).remove();
            if ("Remove " + $(this).text() + "?") $(this).remove();
        });

    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>