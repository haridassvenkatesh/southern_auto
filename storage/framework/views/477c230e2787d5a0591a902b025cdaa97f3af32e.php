 <?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/css/ng-tags-input.min.css')); ?>" />
<script src="<?php echo e(asset('/js/ng-tags-input.min.js')); ?>"></script>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content" ng-app="company_app" ng-controller="company_controller">
            <!-- validation -->
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
                                <?= $title ?> - View CompanyDetails
                            </div>
                        </center>
                    </div>
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <!-- BEGIN FORM-->
                            <form class="form-horizontal" name="company_details_form" novalidate>
                                <div data-ng-init="onloadFun()">
                                    <fieldset>
                                        <div class="span12"></div>
                                        <legend>Company Details</legend>
                                        <div class="span12">
                                            <div class="span6">
                                                <input type="hidden" name="tax_type" id="tax_type" value="" />
                                                <label class="control-label" for="company_name">Name </label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="company_name" placeholder="Company Name" ng-model="company_name" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--                                        </div>-->
                                            <div class="span6">

                                                <label class="control-label" for="cgstno">GST No </label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="cgstno" placeholder="Company GST No" ng-model="cgstno" disabled />

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="span12">
                                            <div class="span6">
                                                <div class="control-group">

                                                    <label class="control-label" for="category">Username</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" ng-model="gst_username" placeholder="GST Username" name="gst_username" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="control-group">

                                                    <label class="control-label" for="category">Password</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" ng-model="gst_password" placeholder="GST Password" name="gst_password" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="span12">
                                            <div class="span6">
                                                <label class="control-label" for="phoneno1">Phone No:1 </label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="phoneno1" placeholder="Phone Number" ng-model="phoneno1" disabled />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="span6">

                                                <label class="control-label" for="aphoneno">Phone No:2</label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="aphoneno" placeholder="Alternate Phone Number" ng-model="aphoneno" disabled/>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="span12">
                                            <div class="span6">
                                                <label class="control-label" for="cpanno">PAN No </label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="cpanno" placeholder="Company Pan No" ng-model="cpanno" disabled />


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label" for="panimage">Pan Image </label>
                                                    <div class="controls">

                                                        <img id="output1" ng-src="{{image2}}" style="width:70px;height:70px; " class="img-responsive" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
-->


                                        <div class="span12">
                                            <div class="span6">
                                                <label class="control-label" for="companyaddress">Address Line1 </label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="Address1" placeholder="Address" ng-model="Address1" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label" for="commondity">Commodity </label>
                                                    <div class="controls">
                                                        <tags-input ng-model="commondity" placeholder="commondity" class="span6" disabled></tags-input>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="span12">
                                            <div class="span6">
                                                <label class="control-label" for="companyaddress">Address Line2</label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="Address2" placeholder="Address" ng-model="Address2" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label" for="category">Fee Collection</label>
                                                    <div class="controls">
                                                        <input type="text" id="actual_fee" name="actual_fee" placeholder="Fee" ng-model="actual_fee" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--                                    <legend>Business Details</legend>-->
                                        <div class="span12">

                                            <div class="span6">

                                                <div class="control-group">
                                                    <label class="control-label" for="category">City</label>
                                                    <div class="controls">
                                                        <input type="text" name="city" placeholder="City" ng-model="city" disabled/>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="span6">

                                                <label class="control-label" for="cemail">Email_Id </label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="email" name="cemail" placeholder="Company Email_Id" ng-model="cemail" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="span12">
                                            <!--
											<div class="span6">
												<label class="control-label" for="businessname">Business Name </label>
												<div class="control-group">
													<div class="controls">
														<input type="text" name="businessname" placeholder="Business Name" ng-model="businessname" disabled/>

													</div>
												</div>
											</div>
-->

                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label" for="email">Circle</label>
                                                    <div class="controls">
                                                        <input type="text" name="cweblink" placeholder="Circle" ng-model="cweblink" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div ng-show="Proprietorship">
                                            <legend>proprietorship Details</legend>
                                            <div class="span12">

                                                <div class="span6">
                                                    <div class="control-group">
                                                        <label class="control-label" for="firstname">First Name</label>
                                                        <div class="controls">

                                                            <input type="text" class="form-control" ng-model="prop_firstname" placeholder="First Name" name="prop_firstname" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6">

                                                    <!--
                                                    <div class="control-group">
                                                        <label class="control-label" for="lastname">Email</label>
                                                        <div class="controls">
                                                            <div class="control-group">
                                                                <input type="text" class="form-control" ng-model="prop_email" placeholder="Email" name="prop_email" disabled/>
                                                            </div>
                                                        </div>
                                                    </div>
-->
                                                    <div class="control-group">
                                                        <label class="control-label" for="lastname">Pan No</label>
                                                        <div class="controls">
                                                            <div class="control-group">
                                                                <input type="text" class="form-control" ng-model="prop_pan" placeholder="Pan No" name="prop_pan" disabled/>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span12">
                                                <div class="span6">

                                                    <div class="control-group">
                                                        <label class="control-label" for="phoneno">Phone Number</label>
                                                        <div class="controls">

                                                            <input type="text" name="prop_phoneno" placeholder="Phone Number" ng-model="prop_phoneno" disabled/>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="span6">
                                                    <label class="control-label" for="audharno">Aadhaar No</label>
                                                    <div class="control-group">
                                                        <div class="controls">

                                                            <input type="text" name="prop_audharno" placeholder="Aadhaar No" ng-model="prop_audharno" disabled/>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="span12">
                                                <div class="span6">
                                                    <div class="control-group">
                                                        <label class="control-label" for="panimage">Pan Image </label>
                                                        <div class="controls">

                                                            <img id="output1" ng-src="{{image2}}" style="width:70px;height:70px; " class="img-responsive" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--
                                            <div class="span12">
                                                <div class="span6">
                                                    <div class="control-group">
                                                        <label class="control-label" for="share">Share</label>
                                                        <div class="controls">
                                                            <input type="text" name="prop_share" placeholder="Share" ng-model="prop_share" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span6"></div>

                                            </div>
-->

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
                                                                    <tr ng-repeat="proprietorship_bank_detail in proprietorship_Bank_Details" class="controls">


                                                                        <td>
                                                                            <input type="text" name="Bank_Name" name="Bank_Name" ng-model="proprietorship_bank_detail.Bank_Name" disabled />
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Branch_Name" ng-model="proprietorship_bank_detail.Branch_Name" disabled/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Ifsc_Code" ng-model="proprietorship_bank_detail.Ifsc_Code" disabled/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Account_No" ng-model="proprietorship_bank_detail.Account_No" disabled />
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div ng-show="Partnership">
                                            <legend>partnership Details</legend>
                                            <div class="row-fluid">
                                                <!-- block -->
                                                <div class="block">
                                                    <div class="navbar navbar-inner block-header">
                                                        <div class="muted pull-left">Add partnership Details</div>
                                                    </div>
                                                    <div class="block-content collapse in">
                                                        <div class="span12">
                                                            <table class="table table-bordered" id="tableId">
                                                                <thead>

                                                                    <th>Name</th>
                                                                    <th>Phone No</th>
                                                                    <th>Pan No</th>
                                                                    <th>Aadhaar No</th>
                                                                    <th>Share</th>
                                                                    <th>Photo</th>
                                                                </thead>
                                                                <tbody>
                                                                    <tr ng-repeat="partnership_detail in Partnership_Details" class="controls">


                                                                        <td>
                                                                            <input type="text" name="Name" ng-model="partnership_detail.Name" style="width: 150px;" disabled/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Phone" ng-model="partnership_detail.Phone" style="width: 150px;" disabled/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Email" ng-model="partnership_detail.Email" style="width: 150px;" disabled/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Audhar_no" ng-model="partnership_detail.Audhar_no" style="width: 150px;" disabled/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Share" id="share" ng-model="partnership_detail.Share" style="width: 150px;" disabled/>
                                                                        </td>
                                                                        <td> <img ng-src="{{partnership_detail.part_image1}}" style="width:75px;" id="part_image1{{$index}}" ng-model="partnership_detail.part_image1" /></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /block -->
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

                                                                    <th>Bank Name</th>
                                                                    <th>Branch Name</th>
                                                                    <th>IFSC Code</th>
                                                                    <th>Account Number</th>
                                                                </thead>
                                                                <tbody>
                                                                    <tr ng-repeat="bank_Partnershipdetail in Bank_PartnershipDetails" class="controls">


                                                                        <td>
                                                                            <input type="text" name="Bank_Name" ng-model="bank_Partnershipdetail.Bank_Name" disabled/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Branch_Name" ng-model="bank_Partnershipdetail.Branch_Name" disabled/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Ifsc_Code" ng-model="bank_Partnershipdetail.Ifsc_Code" disabled/>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" name="Account_No" ng-model="bank_Partnershipdetail.Account_No" disabled/>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /block -->
                                            </div>
                                        </div>
                                        <div>
                                            <center>
                                                <button type="submit" class="btn btn-warning" onclick="cancel()">Cancel</button>

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
    function cancel() {
        if (document.getElementById('tax_type').value == 7) {
            window.location.replace("company_view_details");
        } else if (document.getElementById('tax_type').value == 8) {
            window.location.replace("company_Corresponding_details");
        }


    }
    var app = angular.module('company_app', ['ngTagsInput']);
    app.controller('company_controller', function($scope, $http) {
        $scope.files = [];
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

        $scope.onloadFun = function() {

            $http({
                method: "GET",
                url: "CompanyDetails"
            }).then(function mySucces(response) {
                    console.log(response);

                    if (response.data['CompanyDetail'][0].Company_Category == 3) {
                        $scope.Proprietorship = true;
                        $scope.Partnership = false;
                        $scope.prop_firstname = response.data['company_proprietorship'][0].Name;
                        $scope.prop_pan = response.data['company_proprietorship'][0].Pan_No;
                        $scope.prop_phoneno = response.data['company_proprietorship'][0].Phone_No;
                        $scope.prop_audharno = response.data['company_proprietorship'][0].Aadhar_No;
                        $scope.image2 = response.data['company_proprietorship'][0].PanImage;
                        $scope.prop_share = response.data['company_proprietorship'][0].Share;

                        $scope.proprietorship_Bank_Details = [];
                        for (i = 0; i < response.data['Bank'].length; i++) {
                            $scope.proprietorship_Bank_Details.push({
                                Bank_Name: response.data['Bank'][i]['Bank_Name'],
                                Branch_Name: response.data['Bank'][i]['Branch_Name'],
                                Ifsc_Code: response.data['Bank'][i]['IFSC_Code'],
                                Account_No: response.data['Bank'][i]['Account_Number'],
                            });

                        }

                    } else if (response.data['CompanyDetail'][0].Company_Category == 4) {
                        $scope.Proprietorship = false;
                        $scope.Partnership = true;
                        $scope.Partnership_Details = [];

                        //                        console.log(response.data['company_partnership']);
                        for (i = 0; i < response.data['company_partnership'].length; i++) {
                            $scope.Partnership_Details.push({
                                Name: response.data['company_partnership'][i]['Name'],
                                Phone: response.data['company_partnership'][i]['Phone_No'],
                                Email: response.data['company_partnership'][i]['Email_id'],
                                Audhar_no: response.data['company_partnership'][i]['Aadhar_no'],
                                Share: response.data['company_partnership'][i]['Share'],
                                part_image1: response.data['company_partnership'][i]['photo'],

                            });

                        }
                        //  console.log(response.data['company_partnership']);
                        $scope.Bank_PartnershipDetails = [];
                        for (i = 0; i < response.data['Bank'].length; i++) {
                            $scope.Bank_PartnershipDetails.push({
                                Bank_Name: response.data['Bank'][i]['Bank_Name'],
                                Branch_Name: response.data['Bank'][i]['Branch_Name'],
                                Ifsc_Code: response.data['Bank'][i]['IFSC_Code'],
                                Account_No: response.data['Bank'][i]['Account_Number'],
                            });

                        }
                    }

                    $scope.city = response.data['CompanyDetail'][0].City;
                    $scope.company_name = response.data['CompanyDetail'][0].Company_Name;
                    $scope.phoneno1 = response.data['CompanyDetail'][0].Phone_No1;
                    $scope.cemail = response.data['CompanyDetail'][0].Email_Id;
                    $scope.aphoneno = response.data['CompanyDetail'][0].Phone_No2;
                    $scope.cgstno = response.data['CompanyDetail'][0].GST_No;
                    $scope.cweblink = response.data['CompanyDetail'][0].Website;
                    $scope.cpanno = response.data['CompanyDetail'][0].Pan_No;
                    $scope.Address1 = response.data['CompanyDetail'][0].Address_Line1;
                    $scope.Address2 = response.data['CompanyDetail'][0].Address_Line2;
                    $scope.type = response.data['CompanyDetail'][0].Company_Category;
                    //					$scope.image2 = response.data['CompanyDetail'][0].Pan_Image;
                    $scope.actual_fee = response.data['CompanyDetail'][0].Actual_Fee;
                    $scope.gst_username = response.data['CompanyDetail'][0].gst_username;
                    $scope.gst_password = response.data['CompanyDetail'][0].gst_password;
                    var tax_type = response.data['CompanyDetail'][0].tax;

                    $('#tax_type').val(tax_type);
                    $scope.businessname = response.data['CustomerBusiness'][0].Business_Name;
                    $scope.commondity = [];
                    for (i = 0; i < response.data['CustomerBusiness'].length; i++) {
                        $scope.commondity.push(response.data['CustomerBusiness'][i]['Commondity'])

                        //console.log($scope.commondity.push(response.data['CustomerBusiness'][i]['Commondity']));

                    }
                },
                function myError(response) {
                    alert("error");
                });
        }



        $scope.Partnership_Details = [];

        $scope.addNew_Partnership = function(Partnership_Details) {

            $scope.Partnership_Details.push({

                'Name': "",
                'Phone': "",
                'Email': "",
                'Audhar_no': "",

            });
        };
        $scope.remove_Partnership = function() {
            var newDataList = [];
            $scope.selectedAll1 = false;
            angular.forEach($scope.Partnership_Details, function(selected) {
                if (!selected.selected) {
                    newDataList.push(selected);
                }
            });
            $scope.Partnership_Details = newDataList;
        };

        $scope.checkAll_Partnership = function() {
            if ($scope.selectedAll1) {
                $scope.selectedAll1 = true;
            } else {
                $scope.selectedAll1 = false;
            }
            angular.forEach($scope.Partnership_Details, function(partnership_detail) {
                partnership_detail.selected = $scope.selectedAll1;
            });
        };
        //           Partnership Details End Here



        //        Partnership   Bank Details Start Here

        $scope.Bank_PartnershipDetails = [];

        $scope.addNew_Bank_Partnership = function(Bank_PartnershipDetails) {

            $scope.Bank_PartnershipDetails.push({

                'Bank_Name': "",
                'Branch_Name': "",
                'Ifsc_Code': "",
                'Account_No': "",

            });
        };

        $scope.remove_Bank_Partnership = function() {
            var newDataList = [];
            $scope.selectedAll2 = false;
            angular.forEach($scope.Bank_PartnershipDetails, function(selected) {
                if (!selected.selected) {
                    newDataList.push(selected);
                }
            });
            $scope.Bank_PartnershipDetails = newDataList;
        };

        $scope.checkAll_Bank_Partnership = function() {
            if ($scope.selectedAll2) {
                $scope.selectedAll2 = true;
            } else {
                $scope.selectedAll2 = false;
            }
            angular.forEach($scope.Bank_PartnershipDetails, function(bank_Partnershipdetail) {
                bank_Partnershipdetail.selected = $scope.selectedAll2;
            });
        };

        //       Partnership    Bank Details End Here

        $scope.company_update = function() {
            if ($scope.company_details_form.$valid) {
                $scope.image2 = '';
                if ($scope.files2) {
                    $scope.image2 = $scope.files2[0];
                }
                $scope.company_add = true;
                var formdata = new FormData();
                formdata.append('company_name', $scope.company_name);
                formdata.append('phoneno1', $scope.phoneno1);
                formdata.append('cemail', $scope.cemail);
                formdata.append('aphoneno', $scope.aphoneno);
                formdata.append('cgstno', $scope.cgstno);
                formdata.append('cweblink', $scope.cweblink);
                formdata.append('cpanno', $scope.cpanno);
                formdata.append('Address1', $scope.Address1);
                formdata.append('Address2', $scope.Address2);
                formdata.append('city', $scope.city);
                formdata.append('type', $scope.type);
                formdata.append('image2', $scope.image2);
                //   formdata.append('image2', $scope.image2);
                if ($scope.type == 3) {
                    formdata.append('prop_firstname', $scope.prop_firstname);
                    formdata.append('prop_email', $scope.prop_email);
                    formdata.append('prop_phoneno', $scope.prop_phoneno);
                    formdata.append('prop_audharno', $scope.prop_audharno);

                    var newData = JSON.stringify($scope.proprietorship_Bank_Details);

                    //                    var a = $scope.proprietorship_Bank_Details;
                    formdata.append('bank', newData);
                    // console.log(newData);
                }
                if ($scope.type == 4) {


                    var Partnership = JSON.stringify($scope.Partnership_Details);
                    var Bank_Partnership = JSON.stringify($scope.Bank_PartnershipDetails);

                    var a = $scope.proprietorship_Bank_Details;
                    formdata.append('Partnership', Partnership);
                    formdata.append('bank1', Bank_Partnership);
                    // console.log(newData);
                }
                $http.post('update', formdata, {
                        transformRequest: angular.identity,
                        headers: {
                            'Content-Type': undefined,
                            'Process-Data': false
                        }
                    })
                    .success(function(data) {

                        alert(data);
                        window.location.replace("company_view_details");
                        //   window.location.replace("company_view_details");
                        //                        alert(data);
                        //
                        //                        console.log(data);
                        //                        if ($.isEmptyObject(data.error)) {
                        //                            $(".print-error-msg").find("ul").html('');
                        //                            $(".print-error-msg").css('display', 'none');
                        //                            //alert(data.message);
                        //                            // if (data.status == 1) {
                        //                            //window.location.replace("company_view_details");
                        //                            //}
                        //                            
                        //                        } else {
                        //                            $scope.company_add = false;
                        //                            printErrorMsg(data.error);
                        //                            //$("#designationName").val('').focus();
                        //                            $('html, body').animate({
                        //                                scrollTop: '0px'
                        //                            }, 1500);
                        //                            return false;
                        //                        }


                    });

                //  .success(function(data) {
                //                    if (data.status == 1) {
                //                        location.reload();
                //                        alert('all okay');
                //                    } else if (data.status == 0) {
                //                        alert(data.message);
                //                    } else {
                //                        alert('error')
                //                    }
                //                });
            } else {
                alert("invalid");
            }
        }
        $scope.proprietorship_Bank_Details = [];

        $scope.proprietorship_addNew = function(proprietorship_Bank_Details) {

            $scope.proprietorship_Bank_Details.push({

                'Bank_Name': "",
                'Branch_Name': "",
                'Ifsc_Code': "",
                'Account_No': "",

            });
        };

        $scope.proprietorship_remove = function() {
            var newDataList = [];
            $scope.selectedAll = false;
            angular.forEach($scope.proprietorship_Bank_Details, function(selected) {
                if (!selected.selected) {
                    newDataList.push(selected);
                }
            });
            $scope.proprietorship_Bank_Details = newDataList;
        };

        $scope.checkAll_proprietorship = function() {
            if ($scope.selectedAll) {
                $scope.selectedAll = true;
            } else {
                $scope.selectedAll = false;
            }
            angular.forEach($scope.proprietorship_Bank_Details, function(proprietorship_bank_detail) {
                proprietorship_bank_detail.selected = $scope.selectedAll;
            });
        };
    });

</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>