@extends('templates.layout') @section('content')
<meta name="csrf-token" content="<% csrf_token() %>" />
<div class="contaniner_class">
   <div class="single-pro-review-area mt-t-30 mg-b-15">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="product-payment-inner-st">
                  <div class="alert alert-danger print-error-msg" style="display:none">
                     <ul></ul>
                  </div>
                  <ul id="myTabedu1" class="tab-review-design">
                     <li class="active"><a href="#description">Add Employee</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content custom-product-edit">
                     <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="review-content-section">
                                 <div id="dropzone1" class="pro-ad">
                                    <form class="dropzone dropzone-custom needsclick add-professors" id="employee">
                                       <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                <input name="employee_id" id="employee_id" type="hidden" class="form-control" value="0">
                                                <label>Employee Name</label>
                                                <input name="employee_name" id="employee_name" type="text" class="form-control" placeholder="Employee Name">
                                             </div>
                                             <div class="form-group">
                                                <label>Designation</label>
                                                <select name="designation_id" id="designation_id" class="form-control chosen-select" placeholder="designation Name" >
                                                   <option value="">Select Designation</option>
                                                   <?php foreach($data['dsesignation'] as $row){
                                                      ?>
                                                   <option value="<?= $row->status;?>"><?= $row->name;?></option>
                                                   <?php } ?>
                                                </select>
                                             </div>
                                             
                                                <div class="form-group">
                                                    <label>Employee Id</label>
                                                    
                                                    <input name="employee_unique_id" id="employee_unique_id" type="text" class="form-control" placeholder="Employee Id">
                                                </div>  
                                                
                                                
                                             <div class="form-group">
                                                <label>Phone No</label>
                                                <input name="phone_no1" id="phone_no1" type="text" class="form-control" placeholder="Phone No">
                                             </div>
                                             <div class="form-group">
                                                <label>Additional Phone No</label>
                                                <input name="phone_no2" id="phone_no2" type="text" class="form-control" placeholder="Additional Phone No">
                                             </div>
                                             <div class="form-group">
                                                <label>Email Id</label>
                                                <input name="email_id" id="email_id" type="text" class="form-control" placeholder="Email Id">
                                             </div>
                                             <div class="form-group res-mg-t-15">
                                                <label>
                                                User Profile
                                                </label>
                                                <input name="photo" id="photo" type="file" class="form-control" placeholder="Employee Photo" accept=".jpg,.png,.jpeg">
                                             </div>
                                               <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" id="status" class="form-control chosen-select" placeholder="Status"  >
                                                   <option value="">Select Status</option>
                                                 <?php foreach($data['status'] as $row){
												
												?>
											<option value="<?= $row->status_id;?>"><?= $row->name;?></option>
											<?php } ?>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                  <label>
                                                 DOB
                                                 </label>
                                                <input name="dob" id="dob" type="text" class="form-control" placeholder="DOB">
                                                    
                                                     
<!--
                                <div class="date-picker-inner">
                                    <div class="form-group data-custon-pick" id="data_2">
                                        
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input name="dob" id="dob" type="text" class="form-control" placeholder="DOB" value="<?php echo date("d/m/Y") ?>">
                                        </div>
                                    </div></div>
-->
                                             </div>
                                             <div class="form-group">
                                                  <label>
                                                 DOJ
                                                 </label>
                                                 
<!--
                                                  <div class="date-picker-inner">
                                    <div class="form-group data-custon-pick" id="data_2">
                                        
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                              <input name="doj" id="doj" type="text" class="form-control" placeholder="DOJ">
                                        </div>
                                    </div></div>
-->
                                                <input name="doj" id="doj" type="text" class="form-control" placeholder="DOJ">
                                             </div>
                                             <div class="form-group res-mg-t-15">
                                                 <label>
                                                 Address
                                                 </label>
                                                <textarea name="address" id="address" placeholder="Address" style="height: 115px;"></textarea>
                                             </div>
                                           
                                             <div class="form-group res-mg-t-15">
                                                  <label>
                                                Remarks
                                                 </label>
                                                <textarea name="remarks" id="remarks" placeholder="Remarks" style="height: 115px;"></textarea>
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
    $( "#dob" ).datepicker({ 
        maxDate: "-16Y",
          changeMonth: true,
      changeYear: true,
        dateFormat: 'dd-mm-yy'});
    
     $( "#doj" ).datepicker({ 
        maxDate: "0",
          changeMonth: true,
      changeYear: true,
         dateFormat: 'dd-mm-yy'
        });
   
       function btninsert() {
        var form_data = new FormData(); 
           var image1="";
        if($("#photo").prop("files")){
           image1=$("#photo").prop("files")[0];           
        }
           form_data.append("image1", image1);
           var other_data = $('#employee').serializeArray();
			$.each(other_data, function(key, input) {
				form_data.append(input.name, input.value);
			});
//          if (submitEnquiryValidation() == true) {
               // $('#submit').prop('disabled', false);
         $.ajaxSetup({
   			headers: {
   				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   			}
   		});
   
   		$.ajax({
   			url: "insert_employee",
   			type: 'post',
   			cache: false,
   			data: form_data,	
            contentType: false,
            processData: false,
   			success: function(data) {
                       
                    
                       if ($.isEmptyObject(data.error)) {
                      var b = JSON.parse(data);
                     if(b.status=="1"){
                         window.location.href = 'view_employee';
                        
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
                      $('#btnSubmitid').prop('disabled', false);
   			}
   		})
          //}
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
          var employee_name = $('#employee_name').val();
          var designation_id = $('#designation_id').val();
          var phone_no1 = $('#phone_no1').val();
          var email_id = $('#email_id').val();
          var status = $('#status').val();
          $('#employee_name').css('border', '1px solid #dde6e9 ');
          $('#designation_id_chosen').css('border', '1px solid #dde6e9 ');
          $('#phone_no1').css('border', '1px solid #dde6e9 ');
          $('#email_id').css('border', '1px solid #dde6e9 ');
          $('#status_chosen').css('border', '1px solid #dde6e9 ');
             
          //Company Name
          if (employee_name == '') {
             $('#employee_name').css('border', '2px solid red');
                  flag = false;
                  return false;
          }         
           else if (designation_id == '' || designation_id <=0 ) {
              $('#designation_id_chosen').css('border', '2px solid red');
              flag = false;
              return flag;
          } 
          else if (phone_no1 == '' ) {
              $('#phone_no1').css('border', '2px solid red');
              flag = false;
              return flag;
          } 
           else if (email_id == '' ) {
              $('#email_id').css('border', '2px solid red');
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
@stop