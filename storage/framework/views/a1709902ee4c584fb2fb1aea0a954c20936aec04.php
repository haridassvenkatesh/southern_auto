<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
  
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<style>
body  {
/*  background-image: url("https://marketing4ecommerce.net/wp-content/uploads/2015/10/nuevos-medios-de-comunicacion-online-1-759x477.png");*/
  background-color: #cccccc;
}    
</style>
<body >
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>LOGIN</h3>
				
			</div>
			<div class="content-error">
				<div class="hpanel">
                     <div class="alert alert-danger print-error-msg" style="display:none">
                     <ul></ul>
                  </div>
                    <div class="panel-body">
                      <form id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="User Name" name="username" id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">

                            </div>
                          
                            
                          
                               <button type="button" class="btn btn-success btn-block loginbtn" onclick="Login_Submit()" id="submit">Login</button>
                           
                        </form>
                    </div>
                </div>
			</div>
		
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
<script>
    
    function printErrorMsg(msg) {
              $(".print-error-msg").find("ul").html('');
              $(".print-error-msg").css('display', 'block');
              $.each(msg, function(key, value) {
                  $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
              });
          }
    function Login_Submit(){
//        console.log($('#loginForm').serializeArray());
//        return;
          $('#submit').prop('disabled', true);
        $.ajaxSetup({
   headers: {
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });
   $.ajax({
   url: "login_submit",
   type: 'post',
   cache: false,
   data:  $('#loginForm').serializeArray(),
  success: function(data) {
                if ($.isEmptyObject(data.error)) {
                  var b = JSON.parse(data);
                 if(b.status=="1"){
                     
                     window.location.href = 'dashboard';

                    }
                    else if(b.status=="0"){
                         $('#submit').prop('disabled', false);
                         $(".print-error-msg").find("ul").html('');
                         $(".print-error-msg").css('display', 'block');
                         $(".print-error-msg").find("ul").append('<li>' + b.message + '</li>');
                  $('html, body').animate({
                      scrollTop: '0px'
                  }, 1500);
                  return false;
                            }
              } else {
                  printErrorMsg(data.error);
                  $('html, body').animate({
                      scrollTop: '0px'
                  }, 1500);
                  return false;
              }
   },
   error: function(jqXHR, textStatus, errorThrown) {
                  $('#submit').prop('disabled', false);
   }
   });
    }
    
</script>
</body>

</html>