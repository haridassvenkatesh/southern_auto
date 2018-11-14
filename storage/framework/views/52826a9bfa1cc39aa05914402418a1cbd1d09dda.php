 <?php $__env->startSection('content'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('/css/ng-tags-input.min.css')); ?>" />
<script src="<?php echo e(asset('/js/ng-tags-input.min.js')); ?>"></script>


<div class="container">
    <div class="row">
        <div class="span12" id="content" ng-app="myapp" ng-controller="mycontroller">
            <div class="col-xs-12">
                <h3 class="text-center">Reset Password</h3>
                <hr/>
                <div style='width: 70%; padding 10px; border: 5px solid #f5f5f5; background-color: #173829; color: #31D8EB; margin: auto; text-align: center;'>

                    <form>
                        <div data-ng-init="onloadFun()">

                            <div class="form-group">
                                <br>
                                <label style="margin-right: 472px;">Name:</label>
                                <input type="text" disabled class="form-control" ng-model="firstname" />
                            </div>
                            <div class="form-group">
                                <label style="margin-right: 403px;">Current Password:</label>
                                <input type="text" required class="form-control" ng-model="C_pswd" />
                            </div>
                            <div class="form-group">
                                <label style="margin-right: 394px;">Change Password :</label>
                                <input type="text" class="form-control" id="Change_pswd1" name="Change_pswd1" required ng-model="Change_pswd1" />
                            </div>
                            <div class="form-group">
                                <label style="margin-right: 394px;">Confirm Password :</label>
                                <input type="text" class="form-control" id="Change_pswd2" name="Change_pswd2" required ng-model="Change_pswd2" />
                                <!--                               <input type="hidden" class="form-control" id="id" name="id" value="1111" ng-model="id" />-->
                            </div>
                            <div>
                                <button class="btn btn-primary btn-sm center-block" ng-click="change_pwrd_employee()">
		            Submit
		        </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var app = angular.module("myapp", ['ngTagsInput']);

    app.controller("mycontroller", function($scope, $http) {

        $scope.onloadFun = function() {

            // var id = document.getElementById("id");
            //           var id1 = ""; // if ($scope.id != undefined) { // id1 = $scope.id; // }
            // var id = $scope.id;
            // console.log(id1);
            $http({
                method: "GET",
                url: "getname",
            }).then(function mySucces(response) {
                console.log(response);

                $scope.firstname = response.data['name'][0].user_first_name;

            });

        }


        $scope.change_pwrd_employee = function() {
            //    if ($scope.userForm.$valid) {

            var Change_pswd1 = "";
            var Change_pswd2 = "";
            var firstname = "";
            var C_pswd = "";
            var change_password = "";

            if ($scope.Change_pswd1 != null) {
                Change_pswd1 = $scope.Change_pswd1;
            } else {
                return false;
            }
            if ($scope.Change_pswd2 != null) {
                Change_pswd2 = $scope.Change_pswd2;
            } else {
                return false;
            }
            if ($scope.firstname != undefined) {
                firstname = $scope.firstname;
            }

            if ($scope.C_pswd != null) {
                C_pswd = $scope.C_pswd;
            } else {
                return false;
            }

            if (Change_pswd1 == Change_pswd2) {
                var change_password = Change_pswd1;
            } else {
                swal("", "Password Changing is Failure");
                return false;
            }

            if (change_password != undefined) {
                var change_password = change_password;
            }


            var formdata = new FormData();
            formdata.append('Change_pswd1', Change_pswd1);
            formdata.append('change_password', change_password);
            formdata.append('firstname', firstname);
            formdata.append('C_pswd', C_pswd);


            $http.post('change_pwrd', formdata, {
                transformRequest: angular.identity,
                headers: {
                    'Content-Type': undefined,
                    'Process-Data': false
                }
            }).success(function(data) {

                console.log(data);



                if (data == "1") {
                    swal({
                            title: "",
                            text: "Password changed Successfully",
                            icon: "success",
                            button: "Aww yiss!",
                        },
                        function() {
                            window.location.href = 'logout';
                        });
                } else {
                    swal("", data);
                }





            });



            //                } else {
            //                    alert("invalid");
            //                }


        }


    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>