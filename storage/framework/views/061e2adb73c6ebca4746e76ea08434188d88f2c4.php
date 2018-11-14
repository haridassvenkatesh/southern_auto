 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<link href="<?php echo e(asset('/css/select2.min.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(asset('/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>


<style>
	.switch {
		margin: -9%;
		*/ margin-top: -18%;
		margin-bottom: 0px;
		margin-left: 46%;
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
									<div class="span12" style="margin-left:0px;">
										<table class="table table-bordered" id="tblCompany">
											<thead>
												<tr>
													<th>S.No</th>
													<th>Company Name</th>
													<th>Contact Number</th>
													<th>Circle</th>
													<th>Employee</th>
													<th>Username</th>
													<th>Password</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php $sno=1;?> <?php $__currentLoopData = $data['get_company_regular_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<tr id=" <?= $r->Id?>">
													<td>
														<?= $sno ?>
													</td>
													<td>
														<?= $r->Company_Name?>
													</td>


													<td>
														<?= $r->Phone_No1?>
													</td>
													<td>
														<?= $r->Website?>
															<!-- For Circle  -->
													</td>
													<td>
														<?= $r->First_Name?>
													</td>
													<td>
														<?= $r->gst_username?>
													</td>
													<td>
														<?= $r->gst_password?>
													</td>

													<td>
														<?php if(Session::get('user_group_id') == 10): ?>
														<button onclick="btnEdit()" class="btn btn-info "><i class="icon-pencil icon-white"></i></button> <?php endif; ?>
														<button onclick="btnView()" class="btn  "><i class="icon-eye-open icon-black"></i></button> <?php if(Session::get('user_group_id') == 10): ?>

														<div id="FCitc" style="display:block">
															<label class="switch">
																<input class="switch-input" type="checkbox" id="chkStatus_<?= $r->Id?>" onchange="updateCompanyStatus(<?= $r->Id?>,value)" <?php if($r->Status == 2) echo "checked"; ?> />					
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
										<!--
                                        <table class="table table-bordered" id="tblCompany">
                                            <thead>
                                                <tr>
                                                    <th ng-click="sort('sno')">S.No</th>
                                                    <th ng-click="sort('Company_Name')">Company_Name</th>
                                                    <th ng-click="sort('Phone_No')">Phone_No</th>
                                                    <th ng-click="sort('Email_ID')">Email_ID</th>
                                                    <th ng-click="sort('Pan_No')">Pan_No</th>
                                                    <th ng-click="sort('Gst_No')">Gst_No</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="company_view in company_view_details|orderBy:sortKey:reverse|filter:search" id="{{company_view.Id}}">
                                                    <td>
                                                        {{company_view.sno}}

                                                    </td>
                                                    <td>
                                                        {{company_view.Company_Name}}

                                                    </td>
                                                    <td>
                                                        {{company_view.Phone_No}}

                                                    </td>
                                                    <td>
                                                        {{company_view.Email_id}}

                                                    </td>
                                                    <td>
                                                        {{company_view.Pan_No}}

                                                    </td>
                                                    <td>
                                                        {{company_view.Gst_No}}

                                                    </td>
                                                    <td>

                                                        <button onclick="btnEdit()" class="btn btn-info "><i class="icon-pencil icon-white"></i></button>

                                                        <button onclick="btnView()" class="btn  "><i class="icon-eye-open icon-black"></i></button>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
-->


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
</div>
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
			"pageLength": 50,
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
	function btnEdit() {
		var flag = 1;
		$('#tblCompany tr').click(function(event) {
			var id = $(this).attr('id');
			if (flag == 1) {
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
				flag = 2;
			}
		})
	}

	function btnView() {
		var flag = 1;
		$('#tblCompany tr').click(function(event) {
			var id = $(this).attr('id');
			if (flag == 1) {
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
				flag = 2;
			}
		})
	}
	//    var app = angular.module("company_view_app", []);
	//    app.controller("company_view_controller", function($scope) {
	//        $scope.company_view_details = [{
	//            "id": "1",
	//            "Company_Name": "San Techno Solutions",
	//            "Phone_No": 9999999999,
	//            "Email_id": "San@gmail.com",
	//            "Pan_No": "AAAAA1234A",
	//            "Gst_No": "345678903456"
	//        }, {
	//            "id": "2",
	//            "Company_Name": "San Innovation Lab",
	//            "Phone_No": 8888888888,
	//            "Email_id": "Saninnovation@gmail.com",
	//            "Pan_No": "BBBBB1234AB",
	//            "Gst_No": "678345903456"
	//        }, {
	//            "id": "3",
	//            "Company_Name": "Tech Mahindra",
	//            "Phone_No": 7777777777,
	//            "Email_id": "tech@gmail.com",
	//            "Pan_No": "CCCCC1234C",
	//            "Gst_No": "456345678903"
	//        }, {
	//            "id": "4",
	//            "Company_Name": "Wibro",
	//            "Phone_No": 9999999999,
	//            "Email_id": "wibro@gmail.com",
	//            "Pan_No": "DDDDD1234D",
	//            "Gst_No": "567348903456"
	//        }];
	//        //            $scope.editingData = {};
	//        //
	//        //            for (var i = 0, length = $scope.company_view_details.length; i < length; i++) {
	//        //                $scope.editingData[$scope.company_view_details[i].id] = false;
	//        //            }
	//        //
	//        //
	//        //            $scope.modify = function(company_view) {
	//        //                $scope.editingData[company_view.id] = true;
	//        //            };
	//        //
	//        //
	//        //            $scope.update = function(company_view) {
	//        //                $scope.editingData[company_view.id] = false;
	//        //            };
	//        //
	//        //            $scope.Cancel = function(company_view) {
	//        //                $scope.editingData[company_view.id] = false;
	//        //
	//        //            };
	//
	//
	//        $scope.company_details_edit = function() {
	//
	//        }
	//
	//
	//    });

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>