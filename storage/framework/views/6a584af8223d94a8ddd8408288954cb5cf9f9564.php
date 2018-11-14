 <?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('/css/bootstrap-datepicker3.css')); ?>" rel="stylesheet" media="screen">
<script src="<?php echo e(asset('/js/bootstrap-datepicker.min.js')); ?>"></script>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content" ng-app="edit_employee_app" ng-controller="edit_employee_controller">
            <div class="row-fluid">
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <center>
                            <div class="muted pull-left">MANAGE</div>
                            <div class="muted pull-center">View Employee Details</div>
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

                                            <label class="control-label" for="firstname">First Name</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="firstname" placeholder="First Name" ng-model="firstname" disabled />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="lastname">Last Name</label>
                                                <div class="controls">
                                                    <input type="text" name="lastname" placeholder="Last Name" ng-model="lastname" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">


                                            <label class="control-label" for="phoneno">Phone No1</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="phoneno" placeholder="Phone Number" ng-model="phoneno" disabled />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">

                                            <label class="control-label" for="aphoneno">Phone No2</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="aphoneno" placeholder="Alternate Phone Number" ng-model="aphoneno" disabled />

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="span12">
                                        <div class="span6">
                                            <label class="control-label" for="dob">Date of Birth</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input class="form-control" id="date" name="date" placeholder="YYY/MM/DD" type="text" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">

                                                <label class="control-label" for="email">Email</label>
                                                <div class="controls">
                                                    <input type="email" name="email" placeholder="Email" ng-model="email" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">

                                            <label class="control-label" for="companyaddress">Address Line1</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="address1" placeholder="Address" ng-model="address1" disabled/>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="span6">
                                            <label class="control-label" for="companyaddress">Address Line2</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="address2" placeholder="Address" ng-model="address2" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="category">City</label>
                                                <div class="controls">
                                                    <input type="text" name="city" placeholder="city" ng-model="city" disabled/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="image">Photo</label>
                                                <div class="controls">


                                                    <img id="output" style="width:70px;height:70px; " ng-src=" {{image1}}" class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <legend>Verification Details</legend>
                                    <div class="span12">
                                        <div class="span6">
                                            <label class="control-label" for="panno">Pan No</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="panno" placeholder="Pan No" ng-model="panno" disabled/>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="panimage">Pan Image</label>
                                                <div class="controls">


                                                    <img id="output1" ng-src="{{image2}}" style="width:70px;height:70px; " class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="span12">
                                        <div class="span6">
                                            <label class="control-label" for="audharno">Aadhaar No</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="audharno" placeholder="Audhar No" ng-model="audharno" disabled />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="audharimage">Aadhaar Images</label>
                                                <div class="controls">

                                                    <img id="output2" ng-src="{{image3}}" style="width:70px;height:70px; " class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <legend>Role </legend>
                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="Desigantion">Desigantion</label>
                                                <div class="controls">
                                                    <select name="type" id="type" disabled>
                                                        <option value="0" label="Please Select" selected></option>
                                                        <option ng-repeat="x in designation" value="{{x.id}}" ng-selected="{{ x.id == designation_id}}">
                                                            {{x.desig}}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">

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


                                                            <th>Bank Name</th>
                                                            <th>Branch Name</th>
                                                            <th>IFSC Code</th>
                                                            <th>Account Number</th>


                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="bank_detail in Bank_Details" class="controls">

                                                                <td>{{bank_detail.Bank_Name}}
                                                                </td>
                                                                <td>
                                                                    {{bank_detail.Branch_Name}}
                                                                    <!-- <input type="text" name="Branch_Name" ng-model="bank_detail.Branch_Name" disabled/> -->

                                                                </td>
                                                                <td> {{bank_detail.Ifsc_Code}}
                                                                    <!-- <input type="text" name="Ifsc_Code" ng-model="bank_detail.Ifsc_Code" disabled /> -->
                                                                </td>
                                                                <td>{{bank_detail.Account_No}}
                                                                    <!--  <input type="text" name="Account_No" ng-model="bank_detail.Account_No" disabled/> -->

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div>
                                        <center>

                                            <button type="submit" class="btn btn-warning" onclick="javascript:window.location.href='employee_view_details';">Cancel</button>



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
                $scope.company_name = [];
                for (i = 0; i < response.data['company'].length; i++) {
                    $scope.company_name.push({
                        id: response.data['company'][i]['Id'],
                        name: response.data['company'][i]['Company_Name']
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
                document.getElementById('date').value = response.data['EmployeeDetail'][0].DOB;

                //  $scope.company_id = response.data['EmployeeDetail'][0].Company_ID;
                $scope.designation_id = response.data['EmployeeDetail'][0].Designation;

                console.log($scope.company_id);
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
            if ($scope.userForm.$valid) {
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

                var formdata = new FormData();
                formdata.append('firstname', $scope.firstname);
                formdata.append('lastname', $scope.lastname);
                formdata.append('phoneno', $scope.phoneno);
                formdata.append('aphoneno', $scope.aphoneno);
                formdata.append('dob', document.getElementById('date').value);
                formdata.append('email', $scope.email);
                formdata.append('address1', $scope.address1);
                formdata.append('address2', $scope.address2);
                formdata.append('city', $scope.city);
                formdata.append('image1', $scope.image1);
                formdata.append('panno', $scope.panno);
                formdata.append('image2', $scope.image2);
                formdata.append('audharno', $scope.audharno);
                formdata.append('image3', $scope.image3);
                // formdata.append('company_name', document.getElementById('company').value);
                formdata.append('type', document.getElementById('type').value);

                var newData = JSON.stringify($scope.Bank_Details);
                formdata.append('employee_bank', newData);
                $http.post('add_employee_information', formdata, {
                    transformRequest: angular.identity,
                    headers: {
                        'Content-Type': undefined,
                        'Process-Data': false
                    }
                }).success(function(data) {

                    alert(data);

                });



            } else {
                alert("invalid");
            }


        }

    })
    // $('#company').val('selectedvalue');

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>