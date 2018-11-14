 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!--<link href="http://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css" rel="stylesheet">-->
<script src="http://code.angularjs.org/1.1.0/angular.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<link href="<?php echo e(asset('/css/select2.min.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(asset('/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" id="content">
			<div data-ng-init="onloadFun()">
				<div class="row-fluid">
					<div class="block-content collapse in">
						<div class="row-fluid">
							<!-- block -->
							<div class="block">
								<div class="navbar navbar-inner block-header">
									<center>
										<div class="muted pull-left">MANAGE</div>
										<div class="muted pull-center">Employee Details</div>

										<div class="muted pull-right" style="margin-top: -40px;">
											<a href="addemployee" class="btn btn-primary "><i class="icon-plus icon-white"></i>Add</a>
										</div>
									</center>
								</div>
								<div class="block-content collapse in">
									<div class="span12">

										<table class="table table-bordered" id="tblEmployee">
											<thead>
												<tr>
													<!--<th class="id">S.No&nbsp;<a ng-click="sort('id')"><i class="icon-sort"></i></a></th>-->
													<th>S.No</th>
													<th>User ID</th>
													<th>Employee Name</th>
													<th>Phone No</th>
													<th>Email ID</th>
													<th>Aadhar No</th>
													<th>Action</th>
												</tr>
											</thead>
											<!--<tfoot>
                                                <td colspan="6">
                                                    <div class="pagination pull-right">
                                                        <ul>
                                                            <li ng-class="{disabled: currentPage == 0}">
                                                                <a href ng-click="prevPage()">« Prev</a>
                                                            </li>
                                                            <li ng-repeat="n in range(pagedItems.length)"
                                                                ng-class="{active: n == currentPage}"
                                                            ng-click="setPage()">
                                                                <a href ng-bind="n + 1">1</a>
                                                            </li>
                                                            <li ng-class="{disabled: currentPage == pagedItems.length - 1}">
                                                                <a href ng-click="nextPage()">Next »</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tfoot>-->
											<tbody>
												<?php $sno=1;?> <?php $__currentLoopData = $data['EmployeeList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr id=" <?= $r->Id?>">
													<td>
														<?= $sno ?>
													</td>
													<td>
														<?= $r->Employee_Id?>
													</td>
													<td>
														<?= $r->First_Name?>
													</td>
													<td>
														<?= $r->Phone_No1?>
													</td>
													<td>
														<?= $r->Email_Id?>
													</td>
													<td>
														<?= $r->Aadhar_No?>
													</td>
													<td>

														<!--
                                                            <a href="edit_employee" class="btn btn-info "><i class="icon-pencil icon-white"></i></a>
                                                            <a href="view_employee" class="btn "><i class="icon-eye-open"></i></a>
-->

														<button onclick="btnEmployeeEdit()" class="btn btn-info "><i class="icon-pencil icon-white"></i></button>
														<button onclick="btnEmployeeView()" class="btn "><i class="icon-eye-open"></i></button> <?php if(Session::get('user_group_id') == 10): ?>

														<div id="FCitc" style="display:block">
															<label class="switch">
																<input class="switch-input" type="checkbox" id="chkStatus_<?= $r->Id?>" onchange="updateEmployeeStatus(<?= $r->Id?>,value)" <?php if($r->Status == 2) echo "checked"; ?> />					
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
									</div>
								</div>
							</div>
							<!-- /block -->
						</div>

					</div>


				</div>
			</div>
		</div>
	</div>
	<hr>

</div>

<script>
	//    var app = angular.module("employee_view_app", []);
	//    app.controller("employee_view_controller", function($scope, $http) {
	//        $scope.sort = function(keyname) {
	//            $scope.sortKey = keyname; //set the sortKey to the param passed
	//            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
	//        }
	//
	//        $scope.onloadFun = function() {
	//            $http({
	//                method: "GET",
	//                url: "EmployeeListView"
	//            }).then(function mySucces(response) {
	//                console.log(response);
	//
	//                $scope.employee_view_details = [];
	//                for (i = 0; i < response.data['EmployeeList'].length; i++) {
	//                    $scope.employee_view_details.push({
	//                        sno: i + 1,
	//                        Id: response.data['EmployeeList'][i]['Id'],
	//                        Emp_ID: response.data['EmployeeList'][i]['Employee_Id'],
	//                        First_Name: response.data['EmployeeList'][i]['First_Name'],
	//                        Phone_No: response.data['EmployeeList'][i]['Phone_No1'],
	//                        Email_id: response.data['EmployeeList'][i]['Email_Id'],
	//                        Pan_No: response.data['EmployeeList'][i]['Pan_No'],
	//                        Aadhar_No: response.data['EmployeeList'][i]['Aadhar_No'],
	//
	//                    });
	//                };
	//
	//            }, function myError(response) {
	//                alert("error");
	//                //$scope.myWelcome = response.statusText;
	//            });
	//
	//        }
	//    });

</script>
<script>
	$(document).ready(function() {
		$('#tblEmployee').DataTable({
			"order": [
				[2, "asc"]
			],
			"pageLength": 50,
			//"dom": '<"top"i>rt<"bottom"flp><"clear">'
			"sDom": 'Rfrtlip',
		});
	});

	function btnEmployeeEdit() {
		var flag = 1;
		$('#tblEmployee tr').click(function(event) {
			var id = $(this).attr('id');
			$.ajax({
				url: "editEmployee",
				type: 'get',
				data: {
					id: id
				},
				success: function(data) {
					if ($.isEmptyObject(data.error)) {
						//alert(data);
						window.location.href = "edit_employee";
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
		})
	}

	function btnEmployeeView() {
		var flag = 1;
		$('#tblEmployee tr').click(function(event) {
			var id = $(this).attr('id');
			$.ajax({
				url: "editEmployee",
				type: 'get',
				data: {
					id: id
				},
				success: function(data) {
					if ($.isEmptyObject(data.error)) {
						//alert(data);
						window.location.href = "view_employee";
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
		})
	}

	function updateEmployeeStatus(id, v) {
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
						url: 'updateEmployeeStatus',
						data: {
							employeeId: id,
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

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>