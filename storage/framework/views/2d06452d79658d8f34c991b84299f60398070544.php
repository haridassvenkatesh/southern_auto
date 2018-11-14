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

	function a() {
		$(".date").datepicker({
			dateFormat: 'dd/mm/yy',
			changeMonth: true,
			changeYear: true,
			maxDate: 0,
		});
	}

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

											<label class="control-label" for="panno">Company Name <b style="color:red">*</b></label>
											<div class="control-group">
												<div class="controls">
													<input type="text" name="company_name" placeholder="Company Name" ng-model="company_name" />


												</div>
											</div>
										</div>
									</div>
									<div class="span12">
										<div class="span6">

											<label class="control-label" for="tanno">Tan No <b style="color:red">*</b></label>
											<div class="control-group">
												<div class="controls">
													<input type="text" name="tanno" placeholder="Tan No" ng-model="tanno" ng-change="tanvalidation()" />
													<p style="color:brown" ng-show="not_validtan">Not a valid no.</p>

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
											<label class="control-label" for="companyaddress">Type Of Payment</label>
											<div class="control-group">
												<div class="controls">
													<input type="text" name="txttop" placeholder="Type Of Payment" ng-model="txttop" />
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
											<div class="control-group">
												<label class="control-label" for="category">Type <b style="color:red">*</b></label>
												<div class="controls">
													<select name="type" id="type" ng-model="type" ng-change="changeType()">	
                                                        <option value="" >Select Type</option>
                                                        <option ng-option value="1">Proprietor</option>
                                                        <option ng-option value="2">Partner</option>
                                                        <option ng-option value="3">Others</option>
                                                    </select>
												</div>
											</div>
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

									<div ng-show="Proprietor">

										<legend>Proprietor Details</legend>
										<div class="row-fluid">
											<!-- block -->
											<div class="block">
												<div class="navbar navbar-inner block-header">
													<div class="muted pull-left">Add Proprietor Details</div>
												</div>
												<div class="block-content collapse in">
													<div class="span12">
														<table class="table table-bordered" id="tableId">
															<thead>

																<th>
																	<input type="checkbox" ng-model="selectedAll1" ng-click="checkAll1()" />
																</th>

																<th>Name</th>
																<th>Father Name</th>
																<th>D.O.B</th>
																<th>Aadhaar Number</th>


															</thead>
															<tbody>
																<tr ng-repeat="Proprietor in Proprietor_Details" class="controls">
																	<td>
																		<input type="checkbox" ng-model="Proprietor.selected" />
																	</td>

																	<td>
																		<input type="text" name="name" ng-model="Proprietor.name" onclick="a()" />
																	</td>
																	<td>
																		<input type="text" name="father_name" ng-model="Proprietor.father_name" onclick="a()" />
																	</td>
																	<td>
																		<input type="text" class="form-control" name="dob" ng-model="Proprietor.dob" placeholder="DD/MM/YYYY" onclick="a()" />
																	</td>
																	<td>
																		<input type="text" name="aathar" ng-model="Proprietor.aathar" onclick="a()" />
																	</td>
																</tr>

															</tbody>
														</table>
														<div class="form-group">
															<input ng-hide="!Proprietor_Details.length" type="button" class="btn btn-danger " ng-click="removeProprietor_Details()" value="Remove">
															<button class="btn btn-success pull-right" ng-click="addNewProprietor()" type="button" onclick="a()"><i class="icon-plus icon-white" ></i> Add</button>

														</div>
													</div>
												</div>
											</div>
											<!-- /block -->
										</div>


									</div>
									<div ng-show="Partner">

										<legend>Partner Details</legend>
										<div class="row-fluid">
											<!-- block -->
											<div class="block">
												<div class="navbar navbar-inner block-header">
													<div class="muted pull-left">Add Partner Details</div>
												</div>
												<div class="block-content collapse in">
													<div class="span12">
														<table class="table table-bordered" id="tableId">
															<thead>

																<th>
																	<input type="checkbox" ng-model="selectedAll2" ng-click="checkAll2()" />
																</th>

																<th>Name</th>
																<th>Father Name</th>
																<th>D.O.B</th>
																<th>Aadhaar Number</th>
																<th>Share Of Profit</th>


															</thead>
															<tbody>
																<tr ng-repeat="Partner in Partner_Details" class="controls">
																	<td>
																		<input type="checkbox" ng-model="Partner.selected" />
																	</td>

																	<td>
																		<input type="text" name="name" ng-model="Partner.name" onclick="a()" />
																	</td>
																	<td>
																		<input type="text" name="father_name" ng-model="Proprietor.father_name" onclick="a()" />
																	</td>
																	<td>
																		<input type="text" class="form-control" name="dob" ng-model="Partner.dob" placeholder="DD/MM/YYYY" onclick="a()" />
																	</td>
																	<td>
																		<input type="text" name="aathar" ng-model="Partner.aathar" onclick="a()" />
																	</td>
																	<td>
																		<input type="text" name="sop" ng-model="Partner.sop" />
																	</td>
																</tr>

															</tbody>
														</table>
														<div class="form-group">
															<input ng-hide="!Partner_Details.length" type="button" class="btn btn-danger " ng-click="removePartner_Details()" value="Remove">
															<button class="btn btn-success pull-right" ng-click="addNewPartner()" type="button" onclick="a()"><i class="icon-plus icon-white" ></i> Add</button>

														</div>
													</div>
												</div>
											</div>
											<!-- /block -->
										</div>



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
		$scope.changeType = function() {
			if ($scope.type == 1) {
				$scope.Proprietor = true;
				$scope.Partner = false;
			} else if ($scope.type == 2) {
				$scope.Proprietor = false;
				$scope.Partner = true;

			} else {
				$scope.Proprietor = false;
				$scope.Partner = false;
			}

		}
		$scope.cancel = function() {
			//if (document.getElementById('page').value == 60) {
			window.location.replace("TDSViewCustomerConcern");
			//			} else if (document.getElementById('page').value == 61) {
			//				window.location.replace("concern_customer_view");
			//			}
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
		$scope.tanvalidation = function() {
			var regpan = /^([a-zA-Z]{4})(\d{5})([a-zA-Z]{1})$/;
			if (regpan.test($scope.tanno) == false) {
				$scope.not_validtan = true;

			} else {
				$scope.not_validtan = false;

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
		$scope.Proprietor_Details = [];
		$scope.Partner_Details = [];
		$scope.addNew = function(Bank_Details) {

			$scope.Customer_Bank_Details.push({

				'Bank_Name': "",
				'Branch_Name': "",
				'Ifsc_Code': "",
				'Account_No': "",

			});
		};

		$scope.addNewProprietor = function(Proprietor) {

			$scope.Proprietor_Details.push({

				'name': "",
				'father_name': "",
				'dob': "",
				'aathar': "",

			});

		};
		$scope.addNewPartner = function(Proprietor) {

			$scope.Partner_Details.push({

				'name': "",
				'father_name': "",
				'dob': "",
				'aathar': "",
				'aathar': "",
				'sop': "",

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
		$scope.removeProprietor_Details = function() {
			var newDataList = [];
			$scope.selectedAll1 = false;
			angular.forEach($scope.Proprietor_Details, function(selected) {
				if (!selected.selected) {
					newDataList.push(selected);
				}
			});
			$scope.Proprietor_Details = newDataList;
		};

		$scope.removePartner_Details = function() {
			var newDataList = [];
			$scope.selectedAll2 = false;
			angular.forEach($scope.Partner_Details, function(selected) {
				if (!selected.selected) {
					newDataList.push(selected);
				}
			});
			$scope.Partner_Details = newDataList;
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
		$scope.checkAll1 = function() {
			if ($scope.selectedAll1) {
				$scope.selectedAll1 = true;
			} else {
				$scope.selectedAll1 = false;
			}
			angular.forEach($scope.Proprietor_Details, function(Proprietor) {
				Proprietor.selected = $scope.selectedAll1;
			});
		};
		$scope.checkAll2 = function() {
			if ($scope.selectedAll2) {
				$scope.selectedAll2 = true;
			} else {
				$scope.selectedAll2 = false;
			}
			angular.forEach($scope.Partner_Details, function(Partner) {
				Partner.selected = $scope.selectedAll2;
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

			//            var firstname = "";
			//            var panno = "";


			var firstname = "";
			var tanno = "";
			var panno = "";
			var company_name = "";
			var gst_username = "";
			var gst_password = "";
			var phoneno = "";
			var email = "";
			var address1 = "";
			var txttop = "";
			var actual_fee = "";

			//var actual_fee = "";
			//var tax_type = "";
			var Customer_Bank_Details = "";
			var Proprietor_Details = "";
			var Partner_Details = "";
			var page = $('#page').val();
			if ($scope.firstname != undefined) {
				firstname = $scope.firstname;
			}
			if ($scope.tanno != undefined) {
				tanno = $scope.tanno;
			}
			if ($scope.panno != undefined) {
				panno = $scope.panno;
			}
			if ($scope.company_name != undefined) {
				company_name = $scope.company_name;
			}
			if ($scope.gst_username != undefined) {
				gst_username = $scope.gst_username;
			}
			if ($scope.gst_password != undefined) {
				gst_password = $scope.gst_password;
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
			if ($scope.txttop != undefined) {
				txttop = $scope.txttop;
			}
			if ($scope.actual_fee != undefined) {
				actual_fee = $scope.actual_fee;
			}


			if ($scope.Customer_Bank_Details != "") {
				Customer_Bank_Details = JSON.stringify($scope.Customer_Bank_Details);
			}
			if ($scope.Proprietor_Details != "") {
				Proprietor_Details = JSON.stringify($scope.Proprietor_Details);
			}
			if ($scope.Partner_Details != "") {
				Partner_Details = JSON.stringify($scope.Partner_Details);
			}

			//            var formdata = new FormData();
			var formdata = new FormData();
			formdata.append('firstname', firstname);
			formdata.append('tanno', tanno);
			formdata.append('panno', panno);
			formdata.append('company_name', company_name);
			formdata.append('gst_username', gst_username);
			formdata.append('gst_password', gst_password);
			formdata.append('phoneno', phoneno);
			formdata.append('email', email);
			formdata.append('address1', address1);
			formdata.append('txttop', txttop);
			formdata.append('actual_fee', actual_fee);
			formdata.append('type', $('#type').val());

			formdata.append('customer_bank', Customer_Bank_Details);
			formdata.append('Proprietor_Details', Proprietor_Details);
			formdata.append('Partner_Details', Partner_Details);

			$http.post('add_tsd_concern', formdata, {
				transformRequest: angular.identity,
				headers: {
					'Content-Type': undefined,
					'Process-Data': false
				}
			}).success(function(data) {

				if ($.isEmptyObject(data.error)) {
					$(".print-error-msg").find("ul").html('');
					$(".print-error-msg").css('display', 'none');
					//
					//                    if (data[0]['IT'] == 60) {
					//                        window.location.replace("customer_view_details");
					//                    } else if (data[0]['IT'] == 61) {
					//                        window.location.replace("corresponding_customer_view");
					//                    }
					//                    if (data[0]['IT'] == 71) {
					//                        window.location.replace("TDSViewCustomerIndividual");
					//                    } else if (data[0]['IT'] == 72) {
					//                        window.location.replace("TDSViewCustomerConcern");
					//                    }
					window.location.href = "TDSViewCustomerConcern";

					console.log(data);
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