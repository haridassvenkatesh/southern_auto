 <?php $__env->startSection('content'); ?>
<!--<link href="<?php echo e(asset('/css/bootstrap-datepicker3.css')); ?>" rel="stylesheet" media="screen">-->
<!--<script src="<?php echo e(asset('/js/bootstrap-datepicker.min.js')); ?>"></script>-->
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
<!-- <style>
    #tags {
        float: left;
        border: 1px solid #ccc;
        padding: 5px;
        font-family: Arial;
    }
    
    #tags > span {
        cursor: pointer;
        display: block;
        float: left;
        color: #fff;
        background: #789;
        padding: 5px;
        padding-right: 25px;
        margin: 4px;
    }
    
    #tags > span:hover {
        opacity: 0.7;
    }
    
    #tags > span:after {
        position: absolute;
        content: "×";
        border: 1px solid;
        padding: 2px 5px;
        margin-left: 3px;
        font-size: 11px;
    }
    
    #tags > input {
        background: #eee;
        border: 0;
        margin: 4px;
        padding: 7px;
        width: auto;
    }

</style> -->
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
                                <?= $title ?> - View Customer
                            </div>
                        </center>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">

                            <!-- BEGIN FORM-->
                            <form name="userForm" class="form-horizontal" autocomplete="off" novalidate>
                                <div data-ng-init="onloadFun()">
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
                                                        <input class="form-control date" id="date" name="date" placeholder="DD/MM/YYYY" ng-model="dob" type="text" readonly />
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
                                                        <!--
                                                        <div class="form-group">
                                                            <input ng-hide="!Customer_Bank_Details.length" type="button" class="btn btn-danger " ng-click="remove()" value="Remove">
                                                            <button class="btn btn-success pull-right" ng-click="addNew()" type="button"><i class="icon-plus icon-white"></i> Bank Details</button>

                                                        </div>
-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /block -->
                                        </div>

                                        <input type="hidden" name="It" id="It" value="" />
                                        <div>
                                            <center>

                                                <button type="submit" class="btn btn-warning" onclick="customer_cancel()">Back</button>


                                            </center>
                                        </div>


                                    </fieldset>
                                </div>
                            </form>
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
    function customer_cancel() {
        window.location.href = "customer_view_details";
        //        if (document.getElementById('It').value == 60) {
        //            window.location.replace("customer_view_details");
        //        } else if (document.getElementById('It').value == 61) {
        //            window.location.replace("corresponding_customer_view");
        //        } else if (document.getElementById('It').value == 71) {
        //            window.location.replace("TDSViewCustomerIndividual");
        //        } else if (document.getElementById('It').value == 72) {
        //            window.location.replace("TDSViewCustomerConcern");
        //        }
    }
    var app = angular.module("myapp", ['ngTagsInput']);

    app.controller("mycontroller", function($scope, $http) {

        $scope.panvalidation = function() {
            var regpan = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
            if (regpan.test($scope.panno) == false) {
                $scope.not_validpan = true;

            } else {
                $scope.not_validpan = false;

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

        $scope.onloadFun = function() {

            $http({
                method: "GET",
                url: "CustomerDetails"
            }).then(function mySucces(response) {
                console.log(response.data);
                $scope.taxtype = [];
                for (i = 0; i < response.data['taxtype'].length; i++) {
                    $scope.taxtype.push({
                        id: response.data['taxtype'][i]['Id'],
                        tax: response.data['taxtype'][i]['Status_Name']

                    });

                }


                $scope.firstname = response.data['CustomerDetail'][0].name;
                $scope.panno = response.data['CustomerDetail'][0].pan_no;
                $scope.gst_username = response.data['CustomerDetail'][0].user_id;
                $scope.gst_password = response.data['CustomerDetail'][0].password;
                $scope.lastname = response.data['CustomerDetail'][0].father_name;
                $scope.phoneno = response.data['CustomerDetail'][0].contact_no;
                $scope.email = response.data['CustomerDetail'][0].mail_id;
                $scope.address1 = response.data['CustomerDetail'][0].address;
                $scope.txtSof = response.data['CustomerDetail'][0].sources_of_fund;
                $scope.Auditor = response.data['CustomerDetail'][0].auditor;
                $scope.auditor_contact_no = response.data['CustomerDetail'][0].auditor_contact_no;
                $scope.actual_fee = response.data['CustomerDetail'][0].fee;
                $scope.dob = response.data['CustomerDetail'][0].dob;
                //var res = date.split("-");


                //$scope.dob = res[2] + "/" + res[1] + "/" + res[0];;
                //$scope.image1 = response.data['CustomerDetail'][0].Photo;
                //  $scope.tax_type = response.data['CustomerDetail'][0].Tax_Type;
                //$scope.actual_fee = response.data['CustomerDetail'][0].fee;
                var It = response.data['CustomerDetail'][0].IT;

                $('#It').val(It);


                //                $scope.panno = response.data['CustomerVerification'][0].pan_no;
                //                $scope.image2 = response.data['CustomerVerification'][0].Pan_Image;
                //                $scope.audharno = response.data['CustomerVerification'][0].Aadhar_No;
                //                $scope.image3 = response.data['CustomerVerification'][0].Aadhar_Image;

                //                $scope.businessname = response.data['CustomerBusiness'][0].Business_Name;
                //                $scope.commondity = [];
                //                for (i = 0; i < response.data['CustomerBusiness'].length; i++) {
                //                    $scope.commondity.push(response.data['CustomerBusiness'][i]['Commondity'])
                //
                //                    //console.log($scope.commondity.push(response.data['CustomerBusiness'][i]['Commondity']));
                //
                //                }


                $scope.Customer_Bank_Details = [];
                for (i = 0; i < response.data['CustomerBank'].length; i++) {
                    $scope.Customer_Bank_Details.push({
                        Bank_Name: response.data['CustomerBank'][i]['Bank_Name'],
                        Branch_Name: response.data['CustomerBank'][i]['Branch_Name'],
                        Ifsc_Code: response.data['CustomerBank'][i]['IFSC_Code'],
                        Account_No: response.data['CustomerBank'][i]['Account_Number'],
                    });

                }

                //                $scope.categories = [{
                //                    id: 0,
                //                    name: "Select a category..."
                //                }, {
                //                    id: 1,
                //                    name: "Cars"
                //                }, {
                //                    id: 7,
                //                    name: "Commercial vehicles"
                //                }];
                // $scope.categories = [];
                // for (i = 0; i < response.data['taxtype'].length; i++) {
                //     $scope.categories.push({
                //         id: response.data['taxtype'][i]['Id'],
                //         name: response.data['taxtype'][i]['Status_Name']
                //     });

                // }
                // console.log($scope.categories);
                // $scope.selectedValue = 1;
                // if ($scope.tax_type == 7) {
                //     $scope.selectedValue = 0;
                // }
                // $scope.itemSelected = $scope.categories[$scope.selectedValue];
            });

        }




        $scope.customer_update = function() {
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


            //console.log($scope.tax_type);

            //            formdata.append('commondity', commondity);
            //
            //            formdata.append('businessname', businessname)

            formdata.append('customer_bank', Customer_Bank_Details);

            $http.post('update_customer', formdata, {
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

                    if (data[0]['IT'] == 60) {
                        window.location.replace("customer_view_details");
                    } else if (data[0]['IT'] == 61) {
                        window.location.replace("concern_customer_view");
                    } else if (data[0]['IT'] == 71) {
                        window.location.replace("TDSViewCustomerIndividual");

                    } else if (data[0]['IT'] == 72) {
                        window.location.replace("TDSViewCustomerConcern");

                    }
                } else {
                    $scope.company_add = false;
                    printErrorMsg(data.error);

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
            format: 'mm/dd/yyyy',
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


    });

</script>
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