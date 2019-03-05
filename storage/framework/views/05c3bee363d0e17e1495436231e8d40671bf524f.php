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
                           <li><a href="view_designation">Master</a> <span class="bread-slash">/</span>
                           </li>
                           <li><a href="view_designation">Designation</a> <span class="bread-slash">/</span>
                           </li>
                           <li><span class="bread-blod"><a href="add_designation">Add Designation</a></span>
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
                     <li class="active"><a href="#description">Add Designation</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content custom-product-edit">
                     <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="review-content-section">
                                 <div id="dropzone1" class="pro-ad">
                                    <form class="dropzone dropzone-custom needsclick add-professors" id="designation">
                                       <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                <input name="designation_id" id="designation_id" type="hidden" class="form-control" value="0">
                                                <label>Designation <span style="color:red"> * </span></label>
                                                <input name="designation_name" id="designation_name" type="text" class="form-control" placeholder="Designation">
                                             </div>
                                             <div class="form-group res-mg-t-15">
                                                <label>Decription <span style="color:red"> * </span></label>
                                                <textarea name="design_description" id="design_description" placeholder="Description"></textarea>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                <label>Status <span style="color:red"> * </span></label>
                                                <select name="status" id="status" class="form-control chosen-select">
                                                   <?php foreach($data['status'] as $row){
                                                      ?>
                                                   <option value="<?= $row->status_id;?>"><?= $row->name;?></option>
                                                   <?php } ?>
                                                </select>
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
   
      if (submitEnquiryValidation() == true) {
       $('#submit').prop('disabled', true);
   
     $.ajaxSetup({
   headers: {
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });
   
   $.ajax({
   url: "insert_designation",
   type: 'post',
   cache: false,
   data: $("#designation").serialize(),			
   success: function(data) {
              
                   if ($.isEmptyObject(data.error)) {
                  var b = JSON.parse(data);
                 if(b.status=="1"){
                     window.location.href = 'view_designation';
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
      var designation_name = $('#designation_name').val();
      var description = $('#design_description').val();
      var status = $('#status').val();
      $('#designation_name').css('border', '1px solid #dde6e9 ');
      $('#design_description').css('border', '1px solid #dde6e9 ');
      $('#status_chosen').css('border', '0px solid #dde6e9');
   
   
      if (designation_name == '') {
         $('#designation_name').css('border', '2px solid red');
              flag = false;
              return false;
      }         
      else if (description == '' ) {
          $('#design_description').css('border', '2px solid red');
          flag = false;
          return flag;
      } 
      else if (status == '' || status <=0 ) {
          $('#status_chosen').css('border', '2px solid red');
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