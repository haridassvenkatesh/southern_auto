 <?php $__env->startSection('content'); ?>
<!--<link href="<?php echo e(asset('/css/bootstrap-datepicker3.css')); ?>" rel="stylesheet" media="screen">-->
<!--<script src="<?php echo e(asset('/js/bootstrap-datepicker.min.js')); ?>"></script>-->
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
        <div class="span12" id="content" ng-app="edit_employee_app" ng-controller="edit_employee_controller">
            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>
            <div class="row-fluid">
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <center>
                            <div class="muted pull-left">MANAGE</div>
                            <div class="muted pull-center">Edit Employee Details</div>
                        </center>
                    </div>
                    <div class="block-content collapse in">
                        <form class="form-horizontal" name="userForm">
                            <div data-ng-init="onloadFun()">
                                <fieldset>
                                    <div class="span12"></div>
                                    <legend>Personal Details</legend>
                                    <div class="span12">
                                        <div class="span6">
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
                                            <div class="control-group">
                                                <label class="control-label" for="lastname">Last Name</label>
                                                <div class="controls">
                                                    <input type="text" name="lastname" placeholder="Last Name" ng-model="lastname" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">

                                            <!--  <div class="form-group" ng-class="{ 'has-error' : userForm.phoneno.$invalid && !userForm.phoneno.$pristine }"> -->
                                            <label class="control-label" for="phoneno">Phone No1 <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="phoneno" placeholder="Phone Number" ng-model="phoneno" />
                                                    <!--  <p style="color:Red" ng-show="userForm.phoneno.$invalid && !userForm.phoneno.$pristine" class="help-block">Phone Number is Required.</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">

                                            <label class="control-label" for="aphoneno">Phone No2</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="aphoneno" placeholder="Alternate Phone Number" ng-model="aphoneno" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="span12">
                                        <div class="span6">
                                            <label class="control-label" for="dob">Date of Birth <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input class="form-control date" id="date" name="date" placeholder="DD/MM/YYYY" type="text" readonly/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="span6">
                                            <div class="control-group">
                                                <!-- <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }"> -->
                                                <label class="control-label" for="email">Email <b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <input type="email" name="email" placeholder="Email" ng-model="email" />

                                                    <!-- <p style="color:Red" ng-show="userForm.email.$invalid && !userForm.email.$pristine " class="help-block">Enter a valid email.</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">
                                            <!--   <div class="form-group" ng-class="{ 'has-error' : userForm.address1.$invalid && !userForm.address1.$pristine }"> -->
                                            <label class="control-label" for="companyaddress">Address Line1 <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="address1" placeholder="Address" ng-model="address1" />
                                                    <!--  <p style="color:Red" ng-show="userForm.address1.$invalid && !userForm.address1.$pristine " class="help-block">Enter a address.</p>
                                                    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                        <div class="span6">
                                            <label class="control-label" for="companyaddress">Address Line2</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="address2" placeholder="Address" ng-model="address2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="category">City <b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <input type="text" name="city" placeholder="city" ng-model="city" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="image">Photo</label>
                                                <div class="controls">

                                                    <input type="file" name="image1" ng-model="image1" accept="image/*" onchange="angular.element(this).scope().LoadFileData(this)" class="btn btn-default btn-md" />
                                                    <img id="output" style="width:50px;height:50px; " ng-src=" {{image1}}" class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <legend>Verification Details</legend>
                                    <div class="span12">
                                        <div class="span6">
                                            <label class="control-label" for="panno">Pan No <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="panno" placeholder="Pan No" ng-model="panno" ng-change="panvalidation()" />
                                                    <p style="color:brown" ng-show="not_validpan">Not a valid no.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="panimage">Pan Image</label>
                                                <div class="controls">

                                                    <input type="file" name="image2" ng-model="image2" accept="image/*" onchange="angular.element(this).scope().LoadFileData2(this)" class="btn btn-default btn-md" />

                                                    <img id="output1" ng-src="{{image2}}" style="width:50px;height:50px; " class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="span12">
                                        <div class="span6">
                                            <label class="control-label" for="audharno">Aadhaar No <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="audharno" placeholder="Audhar No" ng-model="audharno" ng-change="audharvalidation()" />
                                                    <p style="color:brown" ng-show="not_validaudhar">Not a valid no.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="audharimage">Aadhaar Images</label>
                                                <div class="controls">
                                                    <input type="file" name="image3" ng-model="image3" accept="image/*" onchange="angular.element(this).scope().LoadFileData3(this)" class="btn btn-default btn-md" />
                                                    <img id="output2" ng-src="{{image3}}" style="width:50px;height:50px; " class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <legend>Role </legend>
                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="Desigantion">Desigantion <b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <select name="type" id="type">
                                                        <option value="0" label="Please Select" selected></option>
                                                        <option ng-repeat="x in designation" value="{{x.id}}" ng-selected="{{ x.id == designation_id}}">
                                                            {{x.desig}}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <!--
                                            <div class="control-group">
                                                <label class="control-label" for="company">Company</label>
                                                <div class="controls">
                                                    <select name="company" id="company">
                                                        <option value="0" label="Please Select" selected></option>
                                                        <option ng-repeat="y in company_name" value="{{y.id}}" ng-selected="{{y.id == company_id}}">
                                                            {{y.name}}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
-->
                                        </div>

                                    </div>
                                    <legend>Bank Details</legend>
                                    <div class="row-fluid">
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
                                                            <tr ng-repeat="bank_detail in Bank_Details" class="controls">
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
                                                        <input ng-hide="!Bank_Details.length" type="button" class="btn btn-danger " ng-click="remove()" value="Remove">
                                                        <button class="btn btn-success pull-right " ng-click="addNew()" type="button"><i class="icon-plus icon-white "></i> Bank Details</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div>
                                        <center>
                                            <button class="btn btn-inverse" type="button" ng-click="Update_employee()"><i class="icon-refresh icon-white"></i> Update</button>
                                            <button type="submit" class="btn btn-warning" onclick="javascript:window.location.href='employee_view_details';">Back</button>



                                        </center>
                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <hr>
</div>
<script>
    var app = angular.module("edit_employee_app", []);
    app.controller("edit_employee_controller", function($scope, $http) {
        //console.log(company_id);
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

        $scope.Bank_Details = [];
        $scope.addNew = function(Bank_Details) {
            $scope.Bank_Details.push({
                'Bank_Name': "",
                'Branch_Name': "",
                'Ifsc_Code': "",
                'Account_No': "",
            });
        };
        $scope.remove = function() {
            var newDataList = [];
            $scope.selectedAll = false;
            angular.forEach($scope.Bank_Details, function(selected) {
                if (!selected.selected) {
                    newDataList.push(selected);
                }
            });
            $scope.Bank_Details = newDataList;
        };
        $scope.checkAll = function() {
            if ($scope.selectedAll) {
                $scope.selectedAll = true;
            } else {
                $scope.selectedAll = false;
            }
            angular.forEach($scope.Bank_Details, function(bank_detail) {
                bank_detail.selected = $scope.selectedAll;
            });
        };
        $scope.files = [];
        $scope.onloadFun = function() {
            $http({
                method: "GET",
                url: "EmployeeDetails"
            }).then(function mySucces(response) {
                console.log(response);
                $scope.designation = [];
                for (i = 0; i < response.data['designation'].length; i++) {
                    $scope.designation.push({
                        id: response.data['designation'][i]['Id'],
                        desig: response.data['designation'][i]['Status_Name']

                    });

                }

                $scope.firstname = response.data['EmployeeDetail'][0].First_Name;
                $scope.lastname = response.data['EmployeeDetail'][0].Last_Name;
                $scope.phoneno = response.data['EmployeeDetail'][0].Phone_No1;
                $scope.aphoneno = response.data['EmployeeDetail'][0].Phone_No2;
                $scope.email = response.data['EmployeeDetail'][0].Email_Id;
                $scope.address1 = response.data['EmployeeDetail'][0].Address_Line1;
                $scope.address2 = response.data['EmployeeDetail'][0].Address_Line2;
                $scope.city = response.data['EmployeeDetail'][0].City;
                $scope.image1 = response.data['EmployeeDetail'][0].Photo;
                var date = response.data['EmployeeDetail'][0].DOB;
                var res = date.split("-");
                document.getElementById('date').value = res[2] + "/" + res[1] + "/" + res[0];

                // $scope.company_id = response.data['EmployeeDetail'][0].Company_ID;
                $scope.designation_id = response.data['EmployeeDetail'][0].Designation;

                // console.log($scope.company_id);
                $scope.panno = response.data['EmployeeVerification'][0].Pan_No;
                $scope.image2 = response.data['EmployeeVerification'][0].Pan_Image;
                $scope.audharno = response.data['EmployeeVerification'][0].Aadhar_No;
                $scope.image3 = response.data['EmployeeVerification'][0].Aadhar_Image;

                // $scope.businessname = response.data['CustomerBusiness'][0].Business_Name;

                $scope.Bank_Details = [];
                for (i = 0; i < response.data['EmployeeBank'].length; i++) {
                    $scope.Bank_Details.push({
                        Bank_Name: response.data['EmployeeBank'][i]['Bank_Name'],
                        Branch_Name: response.data['EmployeeBank'][i]['Branch_Name'],
                        Ifsc_Code: response.data['EmployeeBank'][i]['IFSC_Code'],
                        Account_No: response.data['EmployeeBank'][i]['Account_Number'],
                    });

                }
            });

        }


        $scope.Update_employee = function() {
            //    if ($scope.userForm.$valid) {

            var firstname = "";
            var lastname = "";
            var phoneno = "";
            var aphoneno = "";
            var email = "";
            var address1 = "";
            var address2 = "";
            var city = "";
            var panno = "";
            var audharno = "";
            var dob = "";
            var type = "";
            var newData = "";
            if ($scope.firstname != undefined) {
                firstname = $scope.firstname;
            }
            if ($scope.lastname != undefined) {
                lastname = $scope.lastname;
            }

            if ($scope.phoneno != undefined) {
                phoneno = $scope.phoneno;
            }
            if ($scope.aphoneno != undefined) {
                aphoneno = $scope.aphoneno;
            }
            if ($scope.email != undefined) {
                email = $scope.email;
            }
            if ($scope.address1 != undefined) {
                address1 = $scope.address1;
            }
            if ($scope.address2 != undefined) {
                address2 = $scope.address2;
            }
            if ($scope.city != undefined) {
                city = $scope.city;
            }
            if ($scope.panno != undefined) {
                panno = $scope.panno;
            }
            if ($scope.audharno != undefined) {
                audharno = $scope.audharno;
            }
            if ($scope.Bank_Details != "") {
                newData = JSON.stringify($scope.Bank_Details);
            }

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
            if (document.getElementById('date').value != "") {
                dob = document.getElementById('date').value;
            }
            if (document.getElementById('type').value != "") {
                type = document.getElementById('type').value;
            }

            var formdata = new FormData();
            formdata.append('firstname', firstname);
            formdata.append('lastname', lastname);
            formdata.append('phoneno', phoneno);
            formdata.append('aphoneno', aphoneno);
            formdata.append('dob', dob);
            formdata.append('email', email);
            formdata.append('address1', address1);
            formdata.append('address2', address2);
            formdata.append('city', city);
            formdata.append('image1', $scope.image1);
            formdata.append('panno', panno);
            formdata.append('image2', $scope.image2);
            formdata.append('audharno', audharno);
            formdata.append('image3', $scope.image3);
            formdata.append('type', type);


            formdata.append('employee_bank', newData);
            $http.post('update_employee_information', formdata, {
                transformRequest: angular.identity,
                headers: {
                    'Content-Type': undefined,
                    'Process-Data': false
                }
            }).success(function(data) {
                if ($.isEmptyObject(data.error)) {
                    $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display', 'none');
                    //alert(data.message);
                    // if (data.status == 1) {

                    //}
                    alert(data);
                    //console.log(data);
                    window.location.replace("employee_view_details");
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



            //                } else {
            //                    alert("invalid");
            //                }


        }

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }

    })
    // $('#company').val('selectedvalue');

</script>
<!--
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
-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>