 <?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
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
                     <li class="active"><a href="#description">Edit Customer</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content custom-product-edit">
                     <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="review-content-section">
                                 <div id="dropzone1" class="pro-ad">
                                    <form class="dropzone dropzone-custom needsclick add-professors" id="customer">
                                       <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                <input name="customer_id" id="customer_id" type="hidden" class="form-control" value="<?php echo e($data['customer_details'][0]->customer_id); ?>">
                                                <label>Name</label>
                                                <input name="customer_name" id="customer_name" type="text" class="form-control" placeholder="Customer Name" value="<?php echo e($data['customer_details'][0]->company_name); ?>">
                                             </div>
                                             <div class="form-group">
                                                <label>GST NO</label>
                                                <input name="gst_no" id="gst_no" type="text" class="form-control" placeholder="GST No" value="<?php echo e($data['customer_details'][0]->gst_no); ?>">
                                             </div>
                                             <div class="form-group">
                                                <label>Phone No</label>
                                                <input name="phone_no1" id="phone_no1" type="text" class="form-control" placeholder="Phone No"  value="<?php echo e($data['customer_details'][0]->contact_no1); ?>">
                                             </div>
                                             <div class="form-group">
                                                <label>Additional Phone No</label>
                                                <input name="phone_no2" id="phone_no2" type="text" class="form-control" placeholder="Additional Phone No" value="<?php echo e($data['customer_details'][0]->contact_no2); ?>">
                                             </div>
                                             <div class="form-group">
                                                <label>Email Id</label>
                                                <input name="email_id1" id="email_id1" type="text" class="form-control" placeholder="Email Id" value="<?php echo e($data['customer_details'][0]->email1); ?>">
                                             </div>
                                             <div class="form-group">
                                                <label>Additional Email Id</label>
                                                <input name="email_id2" id="email_id2" type="text" class="form-control" placeholder="Additional Email Id" value="<?php echo e($data['customer_details'][0]->email2); ?>">
                                             </div>
                                             <label>Logo</label>
                                             <div class="form-group res-mg-t-15">
                                                <input name="photo" id="photo" type="file" class="form-control" placeholder="Employee Photo">
                                             </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <label>Company Address</label>
                                             <div class="form-group res-mg-t-15">
                                                <textarea name="address" id="address" placeholder="Address"><?php echo e($data['customer_details'][0]->address); ?></textarea>
                                             </div>
                                             <label>Remarks</label>
                                             <div class="form-group res-mg-t-15">
                                                <textarea name="remarks" id="remarks" placeholder="Remarks"><?php echo e($data['customer_details'][0]->remarks); ?></textarea>
                                             </div>
                                             <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" id="status" class="form-control chosen-select" placeholder="Status"  >
                                                   <option value="">Select Status</option>
                                                   <?php foreach($data['status'] as $row){

                                                    $selected='';
                      if($row->status_id == $data['customer_details'][0]->status)
                        $selected='selected';
                      ?>
                                                      ?>
                                                   <option value="<?= $row->status_id;?>" <?=$selected?>><?= $row->name;?></option>
                                                   <?php } ?>
                                                </select>
                                             </div>

                                              <div class="form-group res-mg-t-15">
                                                  <label>
                                                
                                                 </label>
                                            <img src="<?php echo e($data['customer_details'][0]->image); ?>" style="width:100px;"/>

                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="payment-adress">
                                                <table class="table table-bordered" id="tableId">
                                                   <thead>
                                                      <th>Name</th>
                                                      <th>Designation</th>
                                                      <th>Phone No</th>
                                                      <th>Email Id</th>
                                                      <th>Action</th>
                                                   </thead>
                                                   <tbody id="commonSalesTable">
                                                      <?php $sno=1;foreach($data['contact_person_details'] as $detail)  { ?>
                                                      <tr class="row1 commonItems" id="row_<?=$sno?>">
                                                         <td>
                                                            <input id="sno_<?=$sno?>" name="commonItems[<?=$sno?>][sno]" type="hidden" value="<?=$sno?>" />
                                                            <input id="contact_person_name_<?=$sno?>" name="commonItems[<?=$sno?>][contact_person_name]" type="text" class="form-control" placeholder="Contact Person"  value="<?=$detail->name?>"/>
                                                         </td>
                                                         
                                                         <td>
                                                            <input id="contact_person_designation_<?=$sno?>" name="commonItems[<?=$sno?>][contact_person_designation]" type="text" class="form-control" placeholder="Designation" value="<?=$detail->designation?>"/>
                                                         </td>
                                                         <td>
                                                            <input id="contact_person_phone_<?=$sno?>" name="commonItems[<?=$sno?>][contact_person_phone]" type="text" class="form-control" placeholder="Phone" value="<?=$detail->phone_no?>" />
                                                            
                                                         </td>
                                                         <td>
                                                            <input id="contact_person_email_<?=$sno?>" name="commonItems[<?=$sno?>][contact_person_email]" type="text" class="form-control" placeholder="Email Id" value="<?=$detail->email?>" />
                                                         </td>
                                                         <td style="text-align:right;">
                                                            <a class="btn btn-sm btn-primary btn-inline addNewRow" style=" margin-right: 3px;"><i class="fa fa-plus"  aria-hidden="true"></i></a>
                                                            <a class="btn btn-sm btn-danger btn-inline removeNewRow"><i class="fa fa-trash-o"  aria-hidden="true"></i></a>
                                                         </td>
                                                      </tr>
                                                     <?php $sno++;} ?>
                                                   </tbody>
                                                   
                                                </table>
                                                <!--   <input class="btn btn-success  pull-right" onclick="addnew_row()" type="button" value="Add" style="margin-right: 22px;"> -->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="payment-adress">
                                                <button type="button" class="btn btn-success" onclick="btninsert()" id="submit">Submit</button>
                                             </div>
                                          </div>
                                              </div></div></div>
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
<script src="<?php echo e(asset('/js/chosen.jquery.min.js')); ?>"></script>
<script>
   var count=0;
$(document).on("click", ".addNewRow", function(e) {
    AddProductRow();
  });

function customerArrayValidation() {
    flag = true;
   
      $('.commonItems').each(function(index, element) {
        rowid = (element.id).split("_");
        id = rowid[1];
          $('#contact_person_name_' + id).css('border', '1px solid #dde6e9 ');
          $('#contact_person_designation_' + id).css('border', '1px solid #dde6e9 ');
          $('#contact_person_phone_' + id).css('border', '1px solid #dde6e9 ');
          $('#contact_person_email_' + id).css('border', '1px solid #dde6e9 ');
       
        contact_person_name = $('#contact_person_name_' + id).val();
        contact_person_designation = $('#contact_person_designation_' + id).val();
        contact_person_phone = $('#contact_person_phone_' + id).val();
        contact_person_email = $('#contact_person_email_' + id).val();
        
        
        if (contact_person_name=="") {

          $('#contact_person_name_' + id).css('border', '2px solid red');
          flag = false;
          return false;
        }
       if(contact_person_designation=="") {
           $('#contact_person_designation_' + id).css('border', '2px solid red');
          flag = false;
          return false;
        }
      if(contact_person_phone=="") {
           $('#contact_person_phone_' + id).css('border', '2px solid red');
          flag = false;
          return false;
        }
         if(contact_person_email=="") {
           $('#contact_person_email_' + id).css('border', '2px solid red');
          flag = false;
          return false;
        }
       
      });

    
    //Product Details
    return flag;
  }

   function AddProductRow() {
    
      if (customerArrayValidation() == true) {
        var id_attr = elementid = '';
        var max = value = 0;
        $('.commonItems').each(function() {
          id_attr = $(this).attr('id');
          elementid = id_attr.split('_');
          id = parseInt(elementid[1]);
          if (id > max)
            max = id;
        });
        item_count = max + 1;
        $("#tableId tbody").append('<tr class="row1 commonItems" id="row_'+item_count+'"><td> <input id="sno_'+item_count+'" name="commonItems['+item_count+'][sno]" type="hidden" value="'+item_count+'" /><input id="contact_person_name_'+item_count+'" name="commonItems['+item_count+'][contact_person_name]" type="text" class="form-control" placeholder="Contact Person" /></td><td><input id="contact_person_designation_'+item_count+'" name="commonItems['+item_count+'][contact_person_designation]" type="text" class="form-control" placeholder="Designation"/></td><td><input id="contact_person_phone_'+item_count+'" name="commonItems['+item_count+'][contact_person_phone]" type="text" class="form-control" placeholder="Phone" /></td><td><input id="contact_person_email_'+item_count+'" name="commonItems['+item_count+'][contact_person_email]" type="text" class="form-control" placeholder="Email Id"/> </td><td style="text-align:right;"><a class="btn btn-sm btn-primary btn-inline addNewRow" style=" margin-right: 3px;"><i class="fa fa-plus"  aria-hidden="true"></i></a><a class="btn btn-sm btn-danger btn-inline removeNewRow"><i class="fa fa-trash-o"  aria-hidden="true"></i></a> </td></tr>');
      }
    

  }

  //Remove Item
  $(document).on("click", ".removeNewRow", function(e) {
    var id = $(this).attr('id');
    var remove_count = parseInt($('#commonSalesTable tr.commonItems').length);

    if (remove_count > 1) {
      $(this).parent().parent().remove();
      commonAllTotal(0);
    }
  });
  //Remove Item
</script>
<script>
   function btninsert() {
   
    var form_data = new FormData();
       var image1="";
    if($("#photo").prop("files")){
       image1=$("#photo").prop("files")[0];
    }
   
       form_data.append("image1", image1);
       var other_data = $('#customer').serializeArray();
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
   url: "insert_customer",
   type: 'post',
   cache: false,
   data: form_data,
        contentType: false,
        processData: false,
   success: function(data) {
   
   //alert(data);
                    if ($.isEmptyObject(data.error)) {
                  var b = JSON.parse(data);
                 if(b.status=="1"){
                     window.location.href = 'view_customer';
                    
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
   
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>