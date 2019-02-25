@extends('templates.layout') @section('content')
<meta name="csrf-token" content="<% csrf_token() %>" />
<div class="contaniner_class">
   <div class="single-pro-review-area mt-t-30 mg-b-15">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="breadcome-list single-page-breadcome">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul class="breadcome-menu">
                           <li><a href="">Transaction</a> <span class="bread-slash">/</span>
                           </li>
                           <?php
                              $statusname="New Enquiry";
                              if($data['enquiry_details'][0]->enquiry_status==4){
                              	$statusname="New Enquiry";
                              }
                              if($data['enquiry_details'][0]->enquiry_status==5){
                              	$statusname="Quoted Enquiry";
                              }
                              if($data['enquiry_details'][0]->enquiry_status==6){
                              	$statusname="Converted Enquiry";
                              }
                              if($data['enquiry_details'][0]->enquiry_status==7){
                              	$statusname="Lost Enquiry";
                              }
                              if($data['enquiry_details'][0]->enquiry_status==8){
                              	$statusname="Project Closed";
                              }
                              if($data['enquiry_details'][0]->enquiry_status==9){
                              	$statusname="Project Hold";
                              }
                              
                              ?>
                           <li><a href=""><?= $statusname;?></a> <span class="bread-slash">/</span>
                           </li>
                           <li><span class="bread-blod">Edit Enquiry</span>
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
                     <li class="active"><a href="#description">Edit Enquiry</a></li>
                  </ul>  <?php 
                                               $display="none";
                                               $display1="none";
                                                if($data['enquiry_details'][0]->enquiry_status==6 || $data['enquiry_details'][0]->enquiry_status==9){
                                                    $display="block";
                                                }
                                                else if( $data['enquiry_details'][0]->enquiry_status==8 ){
                         $display="block";  $display1="block";
                                                }
                                                  
                                                   
                                              
                                              ?>
                  <div id="myTabContent" class="tab-content custom-product-edit">
                     <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="review-content-section">
                                 <div id="dropzone1" class="pro-ad">
                                    <form class="dropzone dropzone-custom needsclick add-professors" id="enquiry">
                                       <div class="row">
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                <input name="enquiry_id" id="enquiry_id" type="hidden" class="form-control" value="<% $data['enquiry_id'] %>" >
                                                <input name="company_name" id="company_name" type="hidden" class="form-control" value="<% $data['enquiry_details'][0]->company_id %>" >
                                                <label>Company Name <span style="color:red">*</span></label>
                                                <select name="company_name1" id="company_name1" class="form-control chosen-select" onchange="change_company(this.value)"  disabled="true">
                                                   <option value="">Select Company</option>
                                                   <?php foreach($data['company_list'] as $row){
                                                      $selected='';
                                                      if($row->customer_id == $data['enquiry_details'][0]->company_id)
                                                      $selected='selected';
                                                      ?>
                                                   <option value="<?= $row->customer_id;?>" <?= $selected ?>><?= $row->company_name;?></option>
                                                   <?php } ?>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                <label>Contact Person <span style="color:red">*</span></label>
                                                <select name="contact_person" id="contact_person" class="form-control chosen-select" onchange="change_contactperson(this.value)">
                                                   <option value="">Select Contact Person</option>
                                                   <?php foreach($data['contact_person'] as $row){
                                                      $selected='';
                                                      if($row->contact_id == $data['enquiry_details'][0]->contact_id)
                                                      $selected='selected';
                                                      ?>
                                                   <option value="<?= $row->contact_id;?>" <?= $selected ?>><?= $row->name;?></option>
                                                   <?php } ?>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                <label>Contact Person Email</label>
                                                <input name="contact_person_email_id" id="contact_person_email_id" type="text" class="form-control" placeholder="Email Id" value="<% $data['contact_person_email'][0]->email %>" readonly>
                                             </div>
                                             <div class="form-group">
                                                <label>Business Vertical <span style="color:red">*</span></label>
                                                <select name="business_vertical" id="business_vertical" class="form-control chosen-select ">
                                                   <option value="">Select Business Vertical</option>
                                                   <?php foreach($data['business_vertical'] as $row){
                                                      $selected='';
                                                      if($row->vertical_id == $data['enquiry_details'][0]->business_vertical)
                                                      $selected='selected';
                                                      ?>
                                                   <option value="<?= $row->vertical_id;?>" <?= $selected ?>><?= $row->name;?></option>
                                                   <?php } ?>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                <label>Enquiry Source <span style="color:red">*</span></label>
                                                <select name="enquiry_source" id="enquiry_source" class="form-control chosen-select ">
                                                   <option value="">Select Enquiry Source</option>
                                                   <?php foreach($data['enquiry_source'] as $row){
                                                      $selected='';
                                                      if($row->id == $data['enquiry_details'][0]->enquiry_source)
                                                      $selected='selected';
                                                      ?>
                                                   <option value="<?= $row->id;?>" <?= $selected ?> ><?= $row->name;?></option>
                                                   <?php } ?>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                <label>Alloted To <span style="color:red">*</span></label>
                                                <select name="allotted_to" id="allotted_to" class="form-control chosen-select">
                                                   <option value="">Allotted To</option>
                                                   <?php foreach($data['employee_list'] as $row){
                                                      $selected='';
                                                      if($row->employee_id == $data['enquiry_details'][0]->allotted_to)
                                                      $selected='selected';
                                                      ?>
                                                   <option value="<?= $row->employee_id;?>" <?= $selected ?>><?= $row->name;?></option>
                                                   <?php } ?>
                                                </select>
                                             </div>
                                                      <div class="form-group">
                                                <label>Enquiry Date <span style="color:red">*</span></label>
                                                <input name="enquiry_date" id="enquiry_date" type="text" class="form-control" placeholder="Enquiry date" value="<% $data['enquiry_details'][0]->enquiey_date %>" readonly>
                                             </div>
                                             <div class="form-group">
                                                <label>Reffered By</label>
                                                <input name="refered_by" id="refered_by" type="text" class="form-control" placeholder="Enquiry Refered By"  value="<% $data['enquiry_details'][0]->refered_by %>">
                                             </div>                                           
                                            <div class="form-group" id="convert_status4" style="display:<?= $display1; ?>">
                                                <label>Invoice No <span style="color:red">*</span></label>
                                                <input name="invoice_no" id="invoice_no" type="text" class="form-control" placeholder="Invoice No"  value="<% $data['enquiry_details'][0]->invoice_no %>">
                                             </div>
                                               <div class="form-group" id="convert_status5" style="display:<?= $display1; ?>">
                                                <label>Invoice Date <span style="color:red">*</span></label>
                                                <input name="invoice_date" id="invoice_date" type="text" class="form-control" placeholder="Invoice Date"  value="<% $data['enquiry_details'][0]->invoice_date %>" readonly>
                                             </div>
                                               <div class="form-group" id="convert_status6" style="display:<?= $display1; ?>">
                                                <label>Transporter <span style="color:red">*</span></label>
                                                <input name="transporter" id="transporter" type="text" class="form-control" placeholder="Transporter"  value="<% $data['enquiry_details'][0]->transporter %>">
                                             </div>
                                                 <div class="form-group" id="convert_status7" style="display:<?= $display1; ?>">
                                                <label>LR.No<span style="color:red">*</span></label>
                                                <input name="lr_no" id="lr_no" type="text" class="form-control" placeholder="LR.No"  value="<% $data['enquiry_details'][0]->lr_no %>">
                                             </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group">
                                                <label>Enquiry Status <span style="color:red">*</span></label>
                                                <select name="status" id="status" class="form-control chosen-select" placeholder="Status" onchange="fun_change_enq_status(this.value)"  >
                                                   <option value="">Select Status</option>
                                                   <?php 
                                                      if($data['enquiry_details'][0]->enquiry_status==4){
                                                      ?>
                                                   <option value="5">Quoted</option>
                                                   <?php }else if($data['enquiry_details'][0]->enquiry_status==5){ ?>  
                                                   <option value="5">Update</option>
                                                   <option value="6">Converted</option>
                                                   <option value="7">Lost</option>
                                                   <?php } else if($data['enquiry_details'][0]->enquiry_status==6){ ?>
                                                   <option value="8">Closed</option>
                                                   <option value="9">Hold</option>
                                                   <?php } else if($data['enquiry_details'][0]->enquiry_status==7){?>
                                                   <option value="7" selected>Lost</option>
                                                   <?php }else if($data['enquiry_details'][0]->enquiry_status==8){?>
                                                   <option value="8" selected>Closed</option>
                                                   <?php } else if($data['enquiry_details'][0]->enquiry_status==9){?>
                                                   <option value="6">Converted</option>
                                                   <option value="7">Lost</option>
                                                   <?php }?>
                                                </select>
                                                <input type="hidden" value="<?= $data['enquiry_details'][0]->enquiry_status ?>" id="enq_status" name="enq_status"/>
                                             </div>
                                            
                                               <div class="form-group">
                                                <label>Quotation No <span style="color:red">*</span></label>
                                                <input name="quotation_no" id="quotation_no" type="text" class="form-control" placeholder="Quotation No"  value="<% $data['enquiry_details'][0]->quotation_no %>">
                                             </div>
                                               <div class="form-group">
                                                <label>Quoted Date <span style="color:red">*</span></label>
												 <?php 
												 if($data['enquiry_details'][0]->enquiry_status==4){
													 ?>
												 
												  <input name="quoted_date" id="quoted_date" type="text" class="form-control" placeholder="Quoted Date" readonly  value="<% $data['enquiry_details'][0]->quoted_date %>"  >
												<?php 
												 
												 } else{ ?>
												 
												 <input name="quoted_date" id="quoted_date" type="text" class="form-control" placeholder="Quoted Date" readonly value="<% $data['enquiry_details'][0]->quoted_date %>"  >
<!--												 <input name="quoted_date1" id="quoted_date1" type="text" class="form-control" placeholder="Quoted Date"  value="<% $data['enquiry_details'][0]->quoted_date %>" disabled >-->
												 
												 <?php 
													 
												 }
													   
												 ?>
												
                                               
                                             </div>
                                               <div class="form-group" id="convert_status1" style="display:<?= $display; ?>">
                                                <label>PO No <span style="color:red">*</span></label>
                                                <input name="po_no" id="po_no" type="text" class="form-control" placeholder="PO No"  value="<% $data['enquiry_details'][0]->po_no %>">
                                             </div>
                                               <div class="form-group" id="convert_status2" style="display:<?= $display; ?>">
                                                <label>PO Date <span style="color:red">*</span></label>
                                                <input name="po_date" id="po_date" type="text" class="form-control" placeholder="PO Date"  value="<% $data['enquiry_details'][0]->po_date %>" readonly>
                                             </div>
                                               <div class="form-group" id="convert_status3" style="display:<?= $display; ?>">
                                                <label>Project No <span style="color:red">*</span></label>
                                                <input name="project_no" id="project_no" type="text" class="form-control" placeholder="Project No"  value="<% $data['enquiry_details'][0]->project_no %>">
                                             </div>
                                               <div class="form-group" id="convert_status8" style="display:<?= $display; ?>">
                                                <label>Delivery Date <span style="color:red">*</span></label>
                                                <input name="delivery_date" id="delivery_date" type="text" class="form-control" placeholder="Delivery Date"  value="<% $data['enquiry_details'][0]->delivery_date %>" readonly>
                                             </div>
											
											   <div class="form-group res-mg-t-15">
                                                <label>Project Name <span style="color:red">*</span></label>
                                                <textarea name="project_name" id="project_name" placeholder="Project Name" style="height:100px;"><% $data['enquiry_details'][0]->project_name %></textarea>
                                             </div>
                                              <div class="form-group res-mg-t-15">
                                                <label>Remark</label>
                                                <textarea name="remarks" id="remarks" placeholder="Remarks" style="height:100px;"><% $data['enquiry_details'][0]->remarks %></textarea>
                                             </div>
                                                  
                                          </div>
                                       </div>
                                       <label><u><font  color="#0188cb" style="font-size: 16px;">Product Details</font></u></label>
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="payment-adress">
                                                <table class="table table-bordered" id="tableId">
                                                   <thead>
                                                      <th>Procuct Name</th>
                                                      <th>QTY</th>
                                                      <th>Price</th>
                                                      <th>Amount</th>
                                                      <th>Action</th>
                                                   </thead>
                                                   <tbody id="commonSalesTable">
                                                      <?php $sno=1;foreach($data['enquiry_product_details'] as $detail)  { ?>
                                                      <tr class="row1 commonItems" id="row_<?=$sno?>">
                                                         <td>
                                                            <input id="sno_<?=$sno?>" name="commonItems[<?=$sno?>][sno]" type="hidden" value="<?=$sno?>" />
                                                            <input id="product_name_<?=$sno?>" name="commonItems[<?=$sno?>][product_name]" type="text" class="form-control" placeholder="Product Name" value="<?=$detail->product_name?>"/>
                                                         </td>
                                                         <td>
                                                            <input id="quantity_<?=$sno?>" name="commonItems[<?=$sno?>][quantity]" type="text" class="form-control" placeholder="Quantity" onkeyup="commonAllTotal(<?= $sno ?>)"  onkeypress="return isNumber(event)" value="<?=$detail->qty?>" />
                                                         </td>
                                                         <td>
                                                            <input id="price_<?=$sno?>" name="commonItems[<?=$sno?>][price]" type="text" class="form-control" placeholder="Price" onkeyup="commonAllTotal(<?= $sno ?>)"  onkeypress="return isNumber1(event)" value="<?=$detail->price?>" />
                                                         </td>
                                                         <td>
                                                            <input id="amount_<?=$sno?>" name="commonItems[<?=$sno?>][amount]" type="text" class="form-control" placeholder="Amount" readonly value="<?=$detail->amount?>" />
                                                         </td>
                                                         <td style="text-align:right;">
                                                            <a class="btn btn-sm btn-primary btn-inline addNewRow" style=" margin-right: 3px;"><i class="fa fa-plus"  aria-hidden="true"></i></a>
                                                            <a class="btn btn-sm btn-danger btn-inline removeNewRow"><i class="fa fa-trash-o"  aria-hidden="true"></i></a>
                                                         </td>
                                                      </tr>
                                                      <?php $sno++;} ?>
                                                   </tbody>
                                                </table>
                                                <!--  <input class="btn btn-success  pull-right" onclick="addnew_row()" type="button" value="Add" style="margin-right: 22px;"> -->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="form-group">
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">Total Price</label>
                                             </div>
                                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="form-select-list">
                                                   <input name="total_price" id="total_price" type="text" class="form-control" placeholder="Total Price" value="<% $data['enquiry_details'][0]->amo_with_out_tax %>" readonly>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <input name="discount_percentage" id="discount_percentage" type="hidden" class="form-control" placeholder="Discount %" onkeyup="discount()" value="<% $data['enquiry_details'][0]->discount %>" >
                                       <input name="discount_value" id="discount_value" type="hidden" class="form-control" placeholder="Discount Value"  value="<% $data['enquiry_details'][0]->discount_value %>" readonly>
                                       <!--
                                          <div class="row">
                                           <div class="form-group">
                                                                                       <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                           <label class="login2 pull-right pull-right-pro">Discount %</label>
                                                                                       </div>
                                                                                       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                           <div class="form-select-list">
                                                                                               <input name="discount_percentage" id="discount_percentage" type="text" class="form-control" placeholder="Discount %" onkeyup="discount()" value="<% $data['enquiry_details'][0]->discount %>" >
                                                                                           </div>
                                                                                       </div>
                                          </div>
                                                                                   </div>
                                          -->
                                       <!--
                                          <div class="row">
                                          	 <div class="form-group">
                                                                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                            <label class="login2 pull-right pull-right-pro">Discount Value</label>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                            <div class="form-select-list">
                                                                                                <input name="discount_value" id="discount_value" type="text" class="form-control" placeholder="Discount Value"  value="<% $data['enquiry_details'][0]->discount_value %>" readonly>
                                                                                            </div>
                                                                                        </div>
                                          	</div>
                                                                                    </div>
                                          -->
                                       <div class="row">
                                          <div class="form-group">
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">GST %</label>
                                             </div>
                                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="form-select-list">
                                                   <input name="gst_percentage" id="gst_percentage" type="text" class="form-control" placeholder="GST %" onkeyup="gst_percent()" value="<% $data['enquiry_details'][0]->gst_percent %>">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="form-group">
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">GST Value</label>
                                             </div>
                                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="form-select-list">
                                                   <input name="gst_value" id="gst_value" type="text" class="form-control" placeholder="GST Value" value="<% $data['enquiry_details'][0]->gst_value %>" readonly>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="form-group">
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">Net Total</label>
                                             </div>
                                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="form-select-list">
                                                   <input name="net_total" id="net_total" type="text" class="form-control" placeholder="Net Total" value="<% $data['enquiry_details'][0]->net_value %>"  readonly>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <?php if($data['enquiry_details'][0]->enquiry_status !=7 && $data['enquiry_details'][0]->enquiry_status!=8){
                                          ?>
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="payment-adress">
                                                <button type="button" class="btn btn-success" onclick="btninsert()" id="submit">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                       <?php } ?>
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
   // $('#company_name1_chosen').css('border', '5px solid #ccc');
    $( "#enquiry_date" ).datepicker({
           maxDate: "0",
             changeMonth: true,
         changeYear: true,
            dateFormat: 'dd-mm-yy'
           });
           function printErrorMsg(msg) {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-error-msg").css('display', 'block');
                  $.each(msg, function(key, value) {
                      $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                  });
              }   
	$( "#quoted_date" ).datepicker({
           maxDate: "0",
             changeMonth: true,
         changeYear: true,
            dateFormat: 'dd-mm-yy'
           });
           function printErrorMsg(msg) {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-error-msg").css('display', 'block');
                  $.each(msg, function(key, value) {
                      $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                  });
              }  
    $( "#po_date" ).datepicker({
           maxDate: "0",
             changeMonth: true,
         changeYear: true,
            dateFormat: 'dd-mm-yy'
           });
           function printErrorMsg(msg) {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-error-msg").css('display', 'block');
                  $.each(msg, function(key, value) {
                      $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                  });
              }  
    $( "#invoice_date" ).datepicker({
           maxDate: "0",
             changeMonth: true,
         changeYear: true,
            dateFormat: 'dd-mm-yy'
           });
           function printErrorMsg(msg) {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-error-msg").css('display', 'block');
                  $.each(msg, function(key, value) {
                      $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                  });
              } 
    
    $( "#delivery_date" ).datepicker({
            maxDate: '+1M',
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy'
           });
           function printErrorMsg(msg) {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-error-msg").css('display', 'block');
                  $.each(msg, function(key, value) {
                      $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                  });
              }  
    
    function fun_change_enq_status(enq_status_id){
        $("#convert_status1").css("display", "none");
        $("#convert_status2").css("display", "none");
        $("#convert_status3").css("display", "none");
        $("#convert_status4").css("display", "none");
        $("#convert_status5").css("display", "none");
        $("#convert_status6").css("display", "none");
        $("#convert_status7").css("display", "none");
        $("#convert_status8").css("display", "none");

        if(enq_status_id==6|| enq_status_id==9){
           $("#convert_status1").css("display", "block");
           $("#convert_status2").css("display", "block");
           $("#convert_status3").css("display", "block");
           $("#convert_status8").css("display", "block");
           }
        else if(enq_status_id==8){
            $("#convert_status1").css("display", "block");
            $("#convert_status2").css("display", "block");
            $("#convert_status3").css("display", "block");
            $("#convert_status4").css("display", "block");
            $("#convert_status5").css("display", "block");
            $("#convert_status6").css("display", "block");
            $("#convert_status7").css("display", "block");
            $("#convert_status8").css("display", "block");
                }
        else{
            $("#convert_status1").css("display", "none");
            $("#convert_status2").css("display", "none");
            $("#convert_status3").css("display", "none");
            $("#convert_status4").css("display", "none");
            $("#convert_status5").css("display", "none");
            $("#convert_status6").css("display", "none");
            $("#convert_status7").css("display", "none");
            $("#convert_status8").css("display", "none");
        }
      
    }
   function gst_percent(){
   
      var gst_percent="";
      var total_price="";
      var gst_percent_value="0";
      var discount_percentage="";
      var discount_value="";
      var net_value="0";
   
   
      if($('#gst_percentage').val()!=""){
           gst_percent=parseFloat($('#gst_percentage').val());
          }
      if($('#total_price').val()!=""){
          total_price=parseFloat($('#total_price').val());
         }
   
      if($('#discount_percentage').val()!=""){
          discount_percentage=parseFloat($('#discount_percentage').val());
         }
   
       if($('#discount_value').val()!=""){
   
             discount_value=parseFloat($('#discount_value').val());
          }
   
   
       if(total_price>0){
   //        net_value=total_price;
        if(discount_percentage>0){
                   gst_percent_value=parseFloat((discount_value*(gst_percent/100)));
                   gst_percent_value1=gst_percent_value+discount_value;
                   net_value=gst_percent_value1;
           }
   
           else{
                   gst_percent_value=parseFloat((total_price*(gst_percent/100)));
                   gst_percent_value1=gst_percent_value+total_price;
                   net_value=gst_percent_value1;
   
           }
   
          }
         $('#gst_value').val(gst_percent_value);
        $('#net_total').val(net_value);
   
   
   
   }
   
   function discount(){
   
   //    common_fun();
   
       var discount_value="";
       var discount="0";
       var total_price="0";
   
       if($('#discount_percentage').val()!=""){
          discount=parseFloat($('#discount_percentage').val());
          }
      if($('#total_price').val()!=""){
         total_price=parseFloat($('#total_price').val());
         }
   
       var gst_percent="0";
   
       if(discount>0){
   
           if(total_price>0){
   
               discount_value=parseFloat((total_price*(discount/100)));
               discount_value=total_price-discount_value;
                 $('#net_total').val(discount_value);
   
              }
   
          }
       else{
            $('#net_total').val(total_price);
       }
   
         $('#discount_value').val(discount_value);
        $('#gst_percentage').val(gst_percent);
       $('#gst_value').val(gst_percent);
   
   
   
   }
   
   function common_fun(){
       var total_amount=0;
   
   var discount_percent=0;
   var gst_percent=0;
   
       $('.commonItems').each(function(index, element) {
           rowid = (element.id).split("_");
           id = rowid[1];
   //console.log(id);
           total_amount = parseFloat(total_amount)+parseFloat($('#amount_' + id).val());
           $('#total_price').val(total_amount);
           $('#net_total').val(total_amount);
   
   
       });
   
       $('#discount_percentage').val(0);
       $('#discount_value').val(0);
       $('#gst_percentage').val(0);
       $('#gst_value').val(0);
   
   }
   
    function commonAllTotal(sno){
   
   var quantity=0;
   var price=0;
   var amount=0;
   
   
       if($('#quantity_'+sno).val()!="" && $('#price_'+sno).val()!="" ){
   
           quantity=$('#quantity_'+sno).val();
           price=$('#price_'+sno).val();
           amount=(quantity)*(price);
   
       }
       $('#amount_'+sno).val(amount);
   //    $('#amount_'+sno).val(amount);
   
   
       common_fun();
   //     discount();
   //     gst_percent();
   
   
   
   
    }
   function change_company(company_id){
   
       if(company_id!=""){
                   $.ajax({
                   url: "get_contact_person",
                   type: 'get',
                   data: {company_id:company_id},
                   success: function(result) {
                       console.log(result);
   
                  list = '<option value="">Select Contact Person</option>';
                  $.each(result['contact_person'], function (index, value) {
                      list += '<option value="' + value.contact_id + '">' + value.name + '</option>'
                  })
                  $('#contact_person').html(list);
                  $('.chosen-select').chosen().trigger("chosen:updated");
                                           $('#contact_person_email_id').val("");
   
                   },
                   error: function(result) {
               list = '<option value="0">Select Contact Person</option>';
               $('#contact_person').html(list);
               $('.chosen-select').chosen().trigger("chosen:updated");
                       $('#contact_person_email_id').val("");
                   }
               });
   
          }
       else{
   
            list = '<option value="">Select Contact Person</option>';
               $('#contact_person').html(list);
               $('.chosen-select').chosen().trigger("chosen:updated");
           $('#contact_person_email_id').val("");
       }
   
   }
   
   function change_contactperson(contact_id){
   
    if(contact_id!=""){
                   $.ajax({
                   url: "get_contact_person_email",
                   type: 'get',
                   data: {contact_id:contact_id},
                   success: function(result) {
                       // console.log(result);
                       // console.log(result.contact_person_email.length);
                       var email="";
                       if(result.contact_person_email.length>0){
   email=result.contact_person_email[0].email;
   
                       }
                       $('#contact_person_email_id').val(email);
                 // console.log(email);
                   },
                   error: function(result) {
   
                   }
               });
   
          }
       else{
   
              $('#contact_person_email_id').val("");
       }
   
   }
   
   $(document).on("click", ".addNewRow", function(e) {
   
       AddProductRow();
   
     });
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
           $("#tableId tbody").append('<tr class="row1 commonItems" id="row_'+item_count+'"><td><input id="sno_'+item_count+'" name="commonItems['+item_count+'][sno]" type="hidden" value="'+item_count+'" /><input id="product_name_'+item_count+'" name="commonItems['+item_count+'][product_name]" type="text" class="form-control" placeholder="Product Name" /></td><td><input id="quantity_'+item_count+'" name="commonItems['+item_count+'][quantity]" type="text"  onkeypress="return isNumber(event)" class="form-control" placeholder="Quantity"  onkeyup="commonAllTotal('+item_count+')"/></td><td><input id="price_'+item_count+'" name="commonItems['+item_count+'][price]" value="0" type="text" class="form-control"  onkeypress="return isNumber1(event)" placeholder="Price" onkeyup="commonAllTotal('+item_count+')" /></td><td><input id="amount_'+item_count+'" value="0" name="commonItems['+item_count+'][amount]" type="text" class="form-control" placeholder="Amount" readonly/></td><td style="text-align:right;"><a class="btn btn-sm btn-primary btn-inline  addNewRow" style=" margin-right: 3px;"><i class="fa fa-plus"  aria-hidden="true"></i></a><a class="btn btn-sm btn-danger btn-inline removeNewRow"><i class="fa fa-trash-o"  aria-hidden="true"></i></a></td></tr>');
         }
         }
   
   function customerArrayValidation() {
       flag = true;
   
         $('.commonItems').each(function(index, element) {
           rowid = (element.id).split("_");
           id = rowid[1];
             $('#product_name_' + id).css('border', '1px solid #dde6e9 ');
             $('#quantity_' + id).css('border', '1px solid #dde6e9 ');
             $('#price_' + id).css('border', '1px solid #dde6e9 ');
             $('#amount_' + id).css('border', '1px solid #dde6e9 ');
   
           product_name = $('#product_name_' + id).val();
           quantity = $('#quantity_' + id).val();
           price = $('#price_' + id).val();
           amount = $('#amount_' + id).val();
   
   
           if (product_name=="") {
   
             $('#product_name_' + id).css('border', '2px solid red');
             flag = false;
             return false;
           }
          if(quantity=="" || quantity<=0) {
              $('#quantity_' + id).css('border', '2px solid red');
             flag = false;
             return false;
           }
         if(price=="" || quantity<=0) {
              $('#price_' + id).css('border', '2px solid red');
             flag = false;
             return false;
           }
            if(amount=="" || quantity<=0) {
              $('#amount_' + id).css('border', '2px solid red');
             flag = false;
             return false;
           }
   
         });
   
   
       //Product Details
       return flag;
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
   
        function btninsert() {
   
     $('#submit').prop('disabled', true);
   
        $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      });
   
      $.ajax({
      url: "insert_enquiry",
      type: 'post',
      cache: false,
      data: $('#enquiry').serializeArray(),
      success: function(data) {
   console.log(data);
      //alert(data);
                       if ($.isEmptyObject(data.error)) {
                     var b = JSON.parse(data);
                    if(b.status=="1"){
                        
                        if($('#enq_status').val()==4){
                              window.location.href = 'view_enquiry';
                           }
                        else if($('#enq_status').val()==5){
                            window.location.href = 'view_enquiry_quoted';
                            
                        } else if($('#enq_status').val()==6){
                            window.location.href = 'view_enquiry_converted';
                            
                        }
                         else if($('#enq_status').val()==7){
                            window.location.href = 'view_enquiry_lost';
                        }
                         else if($('#enq_status').val()==8){
                            
                             window.location.href = 'view_enquiry_lost';
                        }
                        
                      else if($('#enq_status').val()==9){
                            
                             window.location.href = 'view_enquiry_hold';
                        }
   
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
         //}
      }
</script>
@stop