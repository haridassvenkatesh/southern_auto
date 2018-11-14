 <?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('/css/ng-tags-input.min.css')); ?>" />
<script src="<?php echo e(asset('/js/ng-tags-input.min.js')); ?>"></script>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content" ng-app="company_app" ng-controller="company_controller">
            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>
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

                                <?= $title ?> - Add CompanyDetails
                            </div>
                        </center>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <!-- BEGIN FORM-->
                            <div class="form-horizontal" name="company_details_form" novalidate>
                                <fieldset>
                                    <div class="span12"></div>
                                    <legend><?php if($data['page'] == 7): ?> Regular Details <?php else: ?> Compounding Details <?php endif; ?></legend>
                                    <div class="span12">
                                        <div class="span6">
                                            <div class="form-group">
                                                <input type="hidden" name="page" id="page" value="<?= $data['page'] ?>">
                                                <label class="control-label" for="company_name">Name <b style="color:red">*</b></label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="company_name" placeholder="Company Name" ng-model="company_name" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <label class="control-label" for="cgstno">GST No <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="cgstno" id="cgstno" placeholder="Company GST No" ng-model="cgstno" ng-change="gstnovalidation()" />
                                                    <!--                                                        <p style="color:Red" ng-show="company_details_form.cgstno.$invalid && !company_details_form.cgstno.$pristine " class="help-block">Enter a GST No.</p>-->
                                                    <p style="color:brown" ng-show="not_validgst">Not a valid no.</p>

                                                    <!--                                                    </div>-->
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

                                            <label class="control-label" for="phoneno1">Phone No:1 <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="phoneno1" placeholder="Phone Number" ng-model="phoneno1" maxlength="15" minlength="10" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <label class="control-label" for="aphoneno">Phone No:2</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="aphoneno" placeholder="Phone Number" ng-model="aphoneno" maxlength="15" minlength="10" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="span12">-->
                                    <!--
                                        <div class="span6">
                                            <label class="control-label" for="cpanno">PAN No <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="cpanno" placeholder="Company Pan No" ng-model="cpanno" />
                                                    <p style="color:brown" ng-show="not_validpan">Not a valid no.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="panimage">Pan Image</label>
                                                <div class="controls">
                                                    <input type="file" name="image2" ng-model="image2" accept="image/*" onchange="angular.element(this).scope().LoadFileData2(this)" class="btn btn-default btn-md" />
                                                    <img id="output1" src=" <?php echo e(asset('/images/download.png')); ?>" style="width:50px;height:50px; " class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
-->
                                    <!--                                    </div>-->


                                    <div class="span12">
                                        <div class="span6">


                                            <label class="control-label" for="companyaddress">Address Line1 <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="Address1" placeholder="Address" ng-model="Address1" required />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="span6">
                                            <!--  <div class="form-group" ng-class="{ 'has-error' : company_details_form.actual_fee.$invalid && !company_details_form.actual_fee.$pristine }"> -->
                                            <label class="control-label" for="actual_fee">Fee <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" id="actual_fee" name="actual_fee" placeholder="Fee" ng-model="actual_fee" required/>
                                                    <!--  <p style="color:Red" ng-show="company_details_form.actual_fee.$invalid && !company_details_form.actual_fee.$pristine " class="help-block">Fee is Required.</p>

                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="span12">
                                        <div class="span6">
                                            <label class="control-label" for="companyaddress">Address Line2</label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="Address2" placeholder="Address" ng-model="Address2" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">

                                            <label class="control-label" for="cemail">Email_Id <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="email" name="cemail" placeholder="Company Email_Id" ng-model="cemail" />
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="category">City<b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <input type="text" name="city" placeholder="City" ng-model="city" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <div data-ng-init="onloadFun()">
                                                    <label class="control-label" for="category">Category <b style="color:red">*</b></label>
                                                    <div class="controls">
                                                        <select name="type" id="type" ng-model="type" ng-change="changeme()">
                                                            <option value="">- Please select a Type -</option>
                                                            <option ng-option value="3">Proprietorship</option>
                                                            <option ng-option value="4">Partnership</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span12">
                                        <!--
                                        <div class="span6">
                                            <label class="control-label" for="businessname">Business Name <b style="color:red">*</b></label>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" name="businessname" placeholder="Business Name" ng-model="businessname" />

                                                </div>
                                            </div>
                                        </div>
-->
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="email">Circle</label>
                                                <div class="controls">
                                                    <input type="text" name="ccircle" placeholder="circle" ng-model="ccircle" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">

                                            <div class="control-group">
                                                <label class="control-label" for="commondity">Commodity <b style="color:red">*</b></label>
                                                <div class="controls">
                                                    <tags-input ng-model="commondity" required placeholder="commondity" class="span6"></tags-input>
                                                    <!-- <p>Model: {{numbers}}</p> -->
                                                    <!-- <input name="tags" id="input-tags" style="width:500px !important" /> -->
                                                    <!--   <div id="tags">

                                                        <input type="text" ng-model="commondity" value="commondity" placeholder="Add a Commondity" />
                                                    </div> -->
                                                </div>
                                            </div>


                                        </div>

                                    </div>



                                    <div class="span12">
                                        <div class="span6">
                                            <div class="control-group">
                                                <div data-ng-init="onloadFun()">
                                                    <label class="control-label" for="category">Type of Business <b style="color:red">*</b></label>
                                                    <div class="controls">
                                                        <select name="tob" id="tob" ng-model="tob">
                                                            <option value="">- Please select -</option>
                                                            <?php $__currentLoopData = $data['tob']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?= $row->Id ?>">
                                                                <?= $row->Status_Name ?>
                                                            </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div ng-show="Proprietorship">
                                        <legend>proprietorship Details</legend>
                                        <div class="span12">
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label" for="firstname">First Name <b style="color:red">*</b></label>
                                                    <div class="controls">

                                                        <input type="text" class="form-control" ng-model="prop_firstname" placeholder="First Name" name="prop_firstname" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <!--
                                                <div class="control-group">
                                                    <label class="control-label" for="lastname">Email</label>
                                                    <div class="controls">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" ng-model="prop_email" placeholder="Email" name="prop_email" />

                                                        </div>
                                                    </div>
                                                </div>
-->
                                                <div class="control-group">
                                                    <label class="control-label" for="lastname">Pan No <b style="color:red">*</b></label>
                                                    <div class="controls">
                                                        <div class="control-group">
                                                            <input type="text" class="form-control" ng-model="prop_pan" placeholder="Pan No" name="prop_pan" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="span12">
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label" for="phoneno">Phone Number <b style="color:red">*</b></label>
                                                    <div class="controls">
                                                        <input type="text" name="prop_phoneno" placeholder="Phone Number" ng-model="prop_phoneno" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <label class="control-label" for="audharno">Aadhaar No <b style="color:red">*</b></label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="prop_aadhaarno" placeholder="Aadhaar No" ng-model="prop_aadhaarno" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span12">
                                            <div class="span6">
                                                <div class="control-group">
                                                    <label class="control-label" for="panimage">Pan Image</label>
                                                    <div class="controls">
                                                        <input type="file" name="image2" ng-model="image2" accept="image/*" onchange="angular.element(this).scope().LoadFileData2(this)" class="btn btn-default btn-md" />
                                                        <img id="output1" src=" <?php echo e(asset('/images/download.png')); ?>" style="width:50px;height:50px; " class="img-responsive" />
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
                                                        <input type="text" name="prop_share" placeholder="Share" ng-model="prop_share" />
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
                                                                <th>
                                                                    <input type="checkbox" ng-model="selectedAll" ng-click="checkAll_proprietorship()" />
                                                                </th>
                                                                <th>Bank Name</th>
                                                                <th>Branch Name</th>
                                                                <th>IFSC Code</th>
                                                                <th>Account Number</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr ng-repeat="proprietorship_bank_detail in proprietorship_Bank_Details" class="controls">
                                                                    <td>
                                                                        <input type="checkbox" ng-model="proprietorship_bank_detail.selected" />
                                                                    </td>

                                                                    <td>
                                                                        <input type="text" name="Bank_Name" name="Bank_Name" ng-model="proprietorship_bank_detail.Bank_Name" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="Branch_Name" ng-model="proprietorship_bank_detail.Branch_Name" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="Ifsc_Code" ng-model="proprietorship_bank_detail.Ifsc_Code" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="Account_No" ng-model="proprietorship_bank_detail.Account_No" />
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="form-group">
                                                            <button class="btn btn-success  pull-right" ng-click="proprietorship_addNew()" type="button"><i class="icon-plus icon-white"></i> Bank Details</button>
                                                            <input ng-hide="!proprietorship_Bank_Details.length" type="button" class="btn btn-danger " ng-click="proprietorship_remove()" value="Remove">
                                                        </div>
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
                                                                <th>
                                                                    <input type="checkbox" ng-model="selectedAll1" ng-click="checkAll_Partnership()" />
                                                                </th>
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
                                                                        <input type="checkbox" ng-model="partnership_detail.selected" />
                                                                    </td>

                                                                    <td>
                                                                        <input style="width: 120px;" type="text" name="Name" ng-model="partnership_detail.Name" />
                                                                    </td>
                                                                    <td>
                                                                        <input style="width: 120px;" type="text" name="Phone" ng-model="partnership_detail.Phone" />
                                                                    </td>
                                                                    <td>
                                                                        <input style="width: 150px;" type="text" name="PanNo" ng-model="partnership_detail.PanNo" />
                                                                    </td>
                                                                    <td>
                                                                        <input style="width: 120px;" type="text" name="Aadhaar_no" id="Aadhaar_no" ng-model="partnership_detail.Aadhaar_no" />
                                                                    </td>
                                                                    <td>
                                                                        <input style="width: 50px;" type="text" name="Share" id="share" ng-model="partnership_detail.Share" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="file" ng-attr-name="{{partnership_detail.part_image}}" ng-attr-id="{{partnership_detail.part_image}}" ng-model="partnership_detail.part_image" onchange="angular.element(this).scope().fileNameChanged(this)">
                                                                        <input type="hidden" ng-model="partnership_detail.imagevalue" id="{{$index}}" name="imagevalue" style="width: 20px;" />

                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="form-group">
                                                            <input ng-hide="!Partnership_Details.length" type="button" class="btn btn-danger" ng-click="remove_Partnership()" value="Remove">
                                                            <button class="btn btn-success  pull-right" ng-click="addNew_Partnership()" type="button"><i class="icon-plus icon-white"></i>Add</button>
                                                        </div>
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

                                                                <th>
                                                                    <input type="checkbox" ng-model="selectedAll2" ng-click="checkAll_Bank_Partnership()" />
                                                                </th>
                                                                <th>Bank Name</th>
                                                                <th>Branch Name</th>
                                                                <th>IFSC Code</th>
                                                                <th>Account Number</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr ng-repeat="bank_Partnershipdetail in Bank_PartnershipDetails" class="controls">
                                                                    <td>
                                                                        <input type="checkbox" ng-model="bank_Partnershipdetail.selected" />
                                                                    </td>

                                                                    <td>
                                                                        <input type="text" name="Bank_Name" ng-model="bank_Partnershipdetail.Bank_Name" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="Branch_Name" ng-model="bank_Partnershipdetail.Branch_Name" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="Ifsc_Code" ng-model="bank_Partnershipdetail.Ifsc_Code" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" name="Account_No" ng-model="bank_Partnershipdetail.Account_No" />
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="form-group">
                                                            <input ng-hide="!Bank_PartnershipDetails.length" type="button" class="btn btn-danger" ng-click="remove_Bank_Partnership()" value="Remove">
                                                            <button class="btn btn-success  pull-right" ng-click="addNew_Bank_Partnership()" type="button"><i class="icon-plus icon-white"></i> Bank Details</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /block -->
                                        </div>
                                    </div>
                                    <img src="https://appharbor.com/assets/images/stackoverflow-logo.png" alt="Fjords" width="300" height="200" style="display:none" id="defaultimage">
                                    <div>
                                        <center>
                                            <button type="button" class="btn btn-primary" id="company_add" ng-click="Company_Details_Add()" ng-disabled="company_add">Add</button> <?php if($data['page'] == 7): ?>
                                            <button type="submit" class="btn btn-warning" onclick="javascript:window.location.href='company_view_details';">Cancel</button> <?php else: ?> <button type="submit" class="btn btn-warning" onclick="javascript:window.location.href='company_Corresponding_details';">Cancel</button> <?php endif; ?>
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
    var app = angular.module("company_app", ['ngTagsInput']);
    app.controller("company_controller", function($scope, $http) {
        // $scope.onloadFun = function() {
        //     $http({
        //         method: "GET",
        //         url: "company_category"
        //     }).success(function(response) {

        //         console.log(response);

        //         $scope.company_cat = [];
        //         for (i = 0; i < response.data['company_type'].length; i++) {
        //             $scope.company_cat.push({
        //                 id: response.data['company_type'][i]['Id'],
        //                 company_type: response.data['company_type'][i]['Status_Name']
        //             });

        //         }
        //     });

        // }

        $scope.fileNameChanged = function(element) {

            $scope.$apply(function($scope) {

                $scope.files = element.files;
                if ($scope.files.length > 0) {
                    imagevalue = "1";
                    $(element).next().val(imagevalue);

                } else {
                    imagevalue = "0";
                    $(element).next().val(imagevalue);
                }

                console.log($scope.files.length);
            });

        }
        $scope.company_add = false;
        //pan validation
        $scope.files = [];
        $scope.panvalidation = function() {
            var regpan = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
            if (regpan.test($scope.cpanno) == false) {
                $scope.not_validpan = true;

            } else {
                $scope.not_validpan = false;

            }
        }
        $scope.gstnovalidation = function() {
            var reggst = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
            if (reggst.test($scope.cgstno) == false) {
                $scope.not_validgst = true;

            } else {
                $scope.not_validgst = false;

            }
        }
        $scope.changeme = function() {
            if ($scope.type == 3) {
                $scope.Proprietorship = true;
                $scope.Partnership = false;
            } else if ($scope.type == 4) {

                $scope.Proprietorship = false;
                $scope.Partnership = true;

            } else {
                $scope.Proprietorship = false;
                $scope.Partnership = false;
            }

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

        //Company_Details_Add
        $scope.Company_Details_Add = function() {


            //  if ($scope.company_details_form.$valid) {
            $scope.image2 = '';
            if ($scope.files2) {
                $scope.image2 = $scope.files2[0];
            }
            var company_name = "";
            var phone1 = "";
            var cemail = "";
            var aphoneno = "";
            var cgstno = "";
            var ccircle = "";
            var cpanno = "";
            var Address1 = "";
            var Address2 = "";
            var city = "";
            var type = "";
            var image2 = "";
            var actual_fee = "";
            var prop_firstname = "";
            var prop_pan = "";
            var prop_phoneno = "";
            var prop_audharno = "";
            var newData = "";
            var newData2 = "";
            var newData3 = "";
            var gst_username = "";
            var gst_password = "";
            var businessname = "";
            var commondity = "";
            var tob = "";
            var part_image_list = "";
            var youtubeimgsrc = "";

            //var prop_share = "";
            var page = $('#page').val();

            if ($scope.company_name != undefined) {
                company_name = $scope.company_name;
            }
            if ($scope.tob != undefined) {
                tob = $scope.tob;
            }
            if ($scope.phoneno1 != undefined) {
                phone1 = $scope.phoneno1;
            }
            if ($scope.cemail != undefined) {
                cemail = $scope.cemail;
            }
            if ($scope.aphoneno != undefined) {
                aphoneno = $scope.aphoneno;
            }
            if ($scope.cgstno != undefined) {
                cgstno = $scope.cgstno;
            }
            if ($scope.ccircle != undefined) {
                ccircle = $scope.ccircle;
            }
            if ($scope.cpanno != undefined) {
                cpanno = $scope.cpanno;
            }
            if ($scope.Address1 != undefined) {
                Address1 = $scope.Address1;
            }
            if ($scope.Address2 != undefined) {
                Address2 = $scope.Address2;
            }
            if ($scope.city != undefined) {
                city = $scope.city;
            }
            if ($scope.type != undefined) {
                type = $scope.type;
            }
            if ($scope.image2 != undefined) {
                image2 = $scope.image2;
            }
            if ($scope.actual_fee != undefined) {
                actual_fee = $scope.actual_fee;
            }
            if ($scope.businessname != undefined) {
                businessname = $scope.businessname;
            }
            if ($scope.commondity != "") {
                commondity = JSON.stringify($scope.commondity);
            }
            if ($scope.gst_username != undefined) {
                gst_username = $scope.gst_username;
            }
            if ($scope.gst_password != undefined) {
                gst_password = $scope.gst_password;
            }

            if (type == 3) {
                // alert($scope.proprietorship_Bank_Details);
                if ($scope.prop_firstname != undefined) {
                    prop_firstname = $scope.prop_firstname;
                }

                if ($scope.prop_pan != undefined) {
                    prop_pan = $scope.prop_pan;
                }
                if ($scope.prop_phoneno != undefined) {
                    prop_phoneno = $scope.prop_phoneno;
                }
                if ($scope.prop_aadhaarno != undefined) {
                    prop_audharno = $scope.prop_aadhaarno;
                }
                if ($scope.proprietorship_Bank_Details != "") {
                    newData = JSON.stringify($scope.proprietorship_Bank_Details);
                }
            }

            if (type == 4) {
                if ($scope.Partnership_Details != "") {
                    newData2 = JSON.stringify($scope.Partnership_Details);
                }
                if ($scope.Bank_PartnershipDetails != "") {
                    newData3 = JSON.stringify($scope.Bank_PartnershipDetails);
                }


            }

            // console.log(newData2);
            //    

            $scope.company_add = true;
            var formdata = new FormData();

            formdata.append('company_name', company_name);
            formdata.append('phoneno1', phone1);
            formdata.append('cemail', cemail);
            formdata.append('aphoneno', aphoneno);
            formdata.append('cgstno', cgstno);
            formdata.append('ccircle', ccircle);
            formdata.append('cpanno', cpanno);
            formdata.append('Address1', Address1);
            formdata.append('Address2', Address2);
            formdata.append('city', city);
            formdata.append('type', type);
            formdata.append('image2', image2);
            formdata.append('actual_fee', actual_fee);
            formdata.append('page', page);
            formdata.append('gst_username', gst_username);
            formdata.append('gst_password', gst_password);
            formdata.append('commondity', commondity);
            formdata.append('businessname', businessname);
            formdata.append('tob', tob);


            if ($scope.type == 3) {
                formdata.append('prop_firstname', prop_firstname);
                formdata.append('prop_pan', prop_pan);
                formdata.append('prop_phoneno', prop_phoneno);
                formdata.append('prop_audharno', prop_audharno);
                formdata.append('bank', newData);


            } else if ($scope.type == 4) {
                var a = [];
                $scope.Partnership_Details.forEach(function(partnership_detail) {


                    part_image_list = document.getElementById(partnership_detail.part_image).files[0];

                    for (var a = 0; a < $scope.Partnership_Details.length; a++) {
                        formdata.append('file_id[]', $("#" + a).val());
                    }

                    console.log(part_image_list);

                    formdata.append('file[]', part_image_list);


                });

                formdata.append('Partners', newData2);
                formdata.append('length_count', $scope.Partnership_Details.length)

                formdata.append('Partners_bank', newData3);


            }

            $http.post('add_company_information', formdata, {
                    transformRequest: angular.identity,
                    headers: {
                        'Content-Type': undefined,
                        'Process-Data': false
                    }
                })
                .success(function(data) {
                    console.log(data);
                    if ($.isEmptyObject(data.error)) {
                        $(".print-error-msg").find("ul").html('');
                        $(".print-error-msg").css('display', 'none');
                        //alert(data.message);

                        if (data[0]['tax'] == 7) {
                            // alert(data);
                            console.log(data);


                            swal({
                                    title: "",
                                    text: "Added Successfully",
                                    icon: "success",
                                    button: "Aww yiss!",
                                },
                                function() {
                                    window.location.href = 'company_view_details';
                                });


                            // window.location.replace("company_view_details");
                        } else if (data[0]['tax'] == 8) {

                            swal({
                                    title: "",
                                    text: "Added Successfully",
                                    icon: "success",
                                    button: "Aww yiss!",
                                },
                                function() {
                                    window.location.href = 'company_Corresponding_details';
                                });



                            //window.location.replace("company_Corresponding_details");
                        }


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


                })
            //                .success(function(data) {
            //                    console.log(data);
            //                });


            //            } else {
            //                alert("Pls Fill Require Fields");
            //            }
        }

        $scope.company_add = false;


        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }



        //           Partnership Details Start Here

        $scope.Partnership_Details = [];

        $scope.addNew_Partnership = function(Partnership_Details) {
            var newFileNo = $scope.Partnership_Details.length + 1;
            var imageno = 0;
            $scope.Partnership_Details.push({
                'Name': "",
                'Phone': "",
                'PanNo': "",
                'Aadhaar_no': "",
                'Share': "",
                'part_image': 'partnership_detail' + newFileNo,
                'imagevalue': "" + imageno

            });

            // $scope.Partnership_Details.imagevalue = imageno;
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



        //        proprietorship   Bank Details Start Here

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

        //       proprietorship    Bank Details End Here

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