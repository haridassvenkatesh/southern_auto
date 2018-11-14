<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="<% asset('/css/bootstrap.min.css') %> " rel="stylesheet" media="screen">
    <link href="<% asset('/css/bootstrap-responsive.min.css') %>" rel="stylesheet" media="screen">
    <link href="<% asset('/assets/styles.css') %>" rel="stylesheet" media="screen">
    <script src="<% asset('/vendors/modernizr-2.6.2-respond-1.1.0.min.js') %>"></script>
    <script src="<% asset('/js/angular.min.js') %>"></script>
</head>
<style>
    body {
        background: url("<% asset('/A4_1.jpg') %>");
        padding: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        /* background-size: auto 100%; */
        background-position: center;
    }

</style>

<body id="login" ng-app="login_app">
    <div class="container" ng-controller="login_controller">
        <form class="form-signin" autocomplete="off" ng-submit="login_submit()">
            <h2 class="form-signin-heading">Sign in</h2>
            <input type="text" class="input-block-level" id="username" name="username" placeholder="UserName" ng-model="username">
            <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" ng-model="password">
            <button class="btn btn-md btn-primary" type="submit">Sign in</button>
        </form>
    </div>
</body>

<script>
    var app = angular.module('login_app', []);

    app.controller('login_controller', ['$scope', '$http', function($scope, $http) {

        // Fetch data
        $scope.login_submit = function() {

            $http({
                method: 'post',
                url: 'login',
                data: {
                    username: $scope.username,
                    password: $scope.password
                }
            }).then(function successCallback(data) {
                if (data.data['message'] == 'success') {
                    window.location.replace(data.data['Menu']);
                    // window.href.location = "addcustomer";
                } else {
                    alert(data.data);
                    $scope.username = "";
                    $scope.password = "";
                }
            });
        }

        // Set value to search box

    }]);

</script>
