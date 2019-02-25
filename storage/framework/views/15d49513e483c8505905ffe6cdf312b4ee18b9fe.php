 <?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<div class="contaniner_class">
   <div class="single-pro-review-area mt-t-30 mg-b-15">
      <div class="container-fluid">
         <div class="row">
			 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="change_password">Change Password</a> <span class="bread-slash"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="product-payment-inner-st">
                  <div class="alert alert-danger print-error-msg" style="display:none">
                     <ul></ul>
                  </div>
                  <ul id="myTabedu1" class="tab-review-design">
                     <li class="active"><a href="#description">Change Password</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content custom-product-edit">
                     <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="review-content-section">
                                 <div id="dropzone1" class="pro-ad">
                                    <form class="dropzone dropzone-custom needsclick add-professors" id="password_change">
                                       <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <div class="form-group">
                                           
                                                <label>Employee Name</label>
                                                <input name="emp_name" id="emp_name" type="text" class="form-control" value="<?= $data['user_details'][0]->name?>" disabled>
                                                <input name="emp_id" id="emp_id" type="hidden" class="form-control" value="<?= $data['user_details'][0]->employee_id ?>">
                                             </div>
											  <div class="form-group">
                                           
                                                <label>UserName</label>
                                                <input name="user_name" id="user_name" type="text" class="form-control" value="<?= $data['user_details'][0]->employee_unique_id ?>" disabled>
                                             </div>
                                             <div class="form-group">
                                           
                                                <label>Old Password</label>
                                                <input name="old_password" id="old_password" type="password" class="form-control">
                                             </div>
 											<div class="form-group">
                                           
                                                <label>New Password</label>
                                                <input name="new_password" id="new_password" type="password" class="form-control">
                                             </div>	
											  <div class="form-group">
                                           
                                                <label>Confirm Password</label>
                                                <input name="confirm_password" id="confirm_password" type="password" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="payment-adress">
                                                <button type="button" class="btn btn-success" onclick="btninsert()" id="submit">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script> 
   
       function btninsert() {
		 
		   if(submitEnquiryValidation()==true){		  
			 
		   $('#submit').prop('disabled', true);

         $.ajaxSetup({
   			headers: {
   				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   			}
   		});
   console.log( $('#password_change').serializeArray());
   		$.ajax({
   			url: "update_password",
   			type: 'post',
   			cache: false,
   			data: $('#password_change').serializeArray(),            
   			success: function(data) {
              //   $(".print-error-msg").find("ul").html('');
                    $(".print-error-msg").css('display', 'none');  
                       if ($.isEmptyObject(data.error)) {
                      var b = JSON.parse(data);
                     if(b.status=="1"){
                         window.location.href = 'logout';
						
                        }
				    if(b.status=="2"){
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
					  $('#submit').prop('disabled', false);
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
   		})
          }
      }
   function printErrorMsg(msg) {
              $(".print-error-msg").find("ul").html('');
              $(".print-error-msg").css('display', 'block');
              $.each(msg, function(key, value) {
                  $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
              });
          }
      function submitEnquiryValidation() {
          var flag = true;
          var emp_name = $('#emp_name').val();
          var user_name = $('#user_name').val();
          var old_password = $('#old_password').val();
          var new_password = $('#new_password').val();
          var confirm_password = $('#confirm_password').val();
          $('#emp_name').css('border', '1px solid #dde6e9 ');
          $('#user_name').css('border', '1px solid #dde6e9 ');
          $('#old_password').css('border', '1px solid #dde6e9 ');
          $('#new_password').css('border', '1px solid #dde6e9 ');
          $('#confirm_password').css('border', '1px solid #dde6e9 ');

             
          //Company Name
          if (emp_name == '') {
             $('#emp_name').css('border', '2px solid red');
                  flag = false;
                  return false;
          }         
           else if (user_name == '') {
              $('#user_name').css('border', '2px solid red');
              flag = false;
              return flag;
          } 
          else if (old_password == '' ) {
              $('#old_password').css('border', '2px solid red');
              flag = false;
              return flag;
          }  
		  else if (new_password == '' ) {
              $('#new_password').css('border', '2px solid red');
              flag = false;
              return flag;
          } 
           else if (confirm_password == '' ) {
              $('#confirm_password').css('border', '2px solid red');
              flag = false;
              return flag;
          }       
         
          else{
              return true;
          }
      }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>