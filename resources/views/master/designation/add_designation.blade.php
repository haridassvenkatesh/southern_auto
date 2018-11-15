@extends('templates.layout') @section('content')
 <!-- Basic Form Start -->
<!--<link href="http://lysik.pl/public/chosen.css"/>-->
<link href="<% asset('/css/chosen.min.css') %>" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="csrf-token" content="<% csrf_token() %>" />
<div class="contaniner_class">
         <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Basic Information</a></li> 
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
                                                                    <input name="designation_name" id="designation_name" type="text" class="form-control" placeholder="Designation">
                                                                </div>  
                                                                    <div class="form-group res-mg-t-15">
                                                                    <textarea name="design_description" id="design_description" placeholder="Description"></textarea>
                                                                </div>
                                                              
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                               
                                                              <div class="form-group">
                                                                    <select name="status" id="status" class="form-control ">
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
<script src="<% asset('/js/chosen.jquery.min.js') %>"></script>

<script>
	$('.chosen').chosen();
     function btninsert() {
console.log($("#designation").serialize());
        if (submitEnquiryValidation() == true) {
             // $('#submit').prop('disabled', false);
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
//                    console.log(data['status']);
                  
                    var b = JSON.parse(data);
  
                    console.log(b);
                    console.log(b.status);
                   if(data.status=="1"){
                       window.location.href = 'view_designation';
                      }
               
				},
				error: function(jqXHR, textStatus, errorThrown) {	
                    $('#btnSubmitid').prop('disabled', false);
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

        //Company Name
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
@stop
