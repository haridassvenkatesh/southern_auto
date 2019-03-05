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
                           <li><a href="view_designation">Academic</a> <span class="bread-slash">/</span>
                           </li>
                           <li><span class="bread-blod">Edit Academic</span>
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
                     <li class="active"><a href="#description">Edit Academic</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content custom-product-edit">
                     <div class="product-tab-list tab-pane fade active in" id="academic1">
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="review-content-section">
                                 <div id="dropzone1" class="pro-ad">
                                    <form class="dropzone dropzone-custom needsclick add-professors" id="academic">
                                       <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                <input name="academic_id" id="academic_id" type="hidden" value="<?= $data['academic'][0]->id; ?>" class="form-control">
                                                <label>Academic Year <span style="color:red"> * </span></label>
                                                <input name="academic_year" id="academic_year" onkeypress="return isNumber(event)" type="text" class="form-control" placeholder="Academic Year" value="<?= $data['academic'][0]->year; ?>">
                                             </div>
                                             <div class="form-group res-mg-t-15">
                                                <label>Quotation No (Start) <span style="color:red"> * </span></label>
                                                  <input name="quotation_no" id="quotation_no" type="text" class="form-control" placeholder="Quotation No" value="<?= $data['academic'][0]->quotation_no; ?>">
                                             </div>
                                                <div class="form-group">
                                               
                                                <label>Project No (Start)<span style="color:red"> * </span></label>
                                                <input name="project_no" id="project_no" type="text" class="form-control" placeholder="ex:PRJ-" value="<?= $data['academic'][0]->project_no; ?>">
                                             </div>
                                               <div class="form-group">
                                                <label>Status <span style="color:red"> * </span></label>
                                                <select name="status" id="status" class="form-control chosen-select">
                                                   <?php foreach($data['status'] as $row){
                                                        $selected='';
                                                      if($row->status_id == $data['academic'][0]->status)
                                                      $selected='selected';
                                                      ?>
                                                   <option value="<?= $row->status_id;?>" <?= $selected; ?> ><?= $row->name;?></option>
                                                   <?php } ?>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                              <div class="form-group res-mg-t-15">
                                                <label>Target <span style="color:red"> * </span></label>
                                                 <input name="revenue_profit" id="revenue_profit" type="text" class="form-control" placeholder="Target" onkeypress="return isNumber1(event)" value="<?= $data['academic'][0]->revenue_profit; ?>">
                                                
                                             </div>
                                              <div class="form-group">
                                               
                                                <label>Quotation No (End)<span style="color:red"> * </span></label>
                                                <input name="q_start_no" id="q_start_no" type="text" class="form-control" placeholder="ex:19000" onkeypress="return isNumber(event)" value="<?= $data['academic'][0]->q_start_no; ?>">
                                             </div>
                                                  <div class="form-group">
                                               
                                                <label>Project No (End)<span style="color:red"> * </span></label>
                                                <input name="proj_start_no" id="proj_start_no" type="text" class="form-control" placeholder="ex:19000" onkeypress="return isNumber(event)" value="<?= $data['academic'][0]->proj_start_no; ?>">
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
    	function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}	function isNumber1(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
     if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
   function btninsert() {
   
      if (submitEnquiryValidation() == true) {
       $('#submit').prop('disabled', true);
   
     $.ajaxSetup({
   headers: {
   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });
   console.log($("#academic").serialize());
   $.ajax({
   url: "insert_academic",
   type: 'post',
   cache: false,
   data: $("#academic").serialize(),			
   success: function(data) {
              
                   if ($.isEmptyObject(data.error)) {
                  var b = JSON.parse(data);
                 if(b.status=="1"){
                     window.location.href = 'view_academic';
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
      var academic_year = $('#academic_year').val();
      var quotation_no = $('#quotation_no').val();
      var q_start_no = $('#q_start_no').val();
      var project_no = $('#project_no').val();
      var proj_start_no = $('#proj_start_no').val();
      var revenue_profit = $('#revenue_profit').val();
      var status = $('#status').val();
      $('#academic_year').css('border', '1px solid #dde6e9 ');
      $('#quotation_no').css('border', '1px solid #dde6e9 ');
      $('#q_start_no').css('border', '1px solid #dde6e9 ');
      $('#project_no').css('border', '1px solid #dde6e9 ');
      $('#proj_start_no').css('border', '1px solid #dde6e9 ');
      $('#revenue_profit').css('border', '1px solid #dde6e9 ');
      $('#status_chosen').css('border', '0px solid #dde6e9');
   
   
      if (academic_year == '') {
         $('#academic_year').css('border', '2px solid red');
              flag = false;
              return false;
      }   
       
        else if (revenue_profit == '' ) {
          $('#revenue_profit').css('border', '2px solid red');
          flag = false;
          return flag;
      } 
       else if (quotation_no == '' ) {
          $('#quotation_no').css('border', '2px solid red');
          flag = false;
          return flag;
      } 
       else if (q_start_no == '' ) {
          $('#q_start_no').css('border', '2px solid red');
          flag = false;
          return flag;
      } 
       
     else if (project_no == '' ) {
          $('#project_no').css('border', '2px solid red');
          flag = false;
          return flag;
      } 
        else if (proj_start_no == '' ) {
          $('#proj_start_no').css('border', '2px solid red');
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