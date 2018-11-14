 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<link href="<?php echo e(asset('/css/select2.min.css')); ?>" rel="stylesheet" />
<script src="<?php echo e(asset('/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>
<style>
	.ui-datepicker-calendar {
		display: none;
	} .table-responsive .open > .dropdown-menu{
overflow-y: scroll;
height: 100px;
}

</style>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12" id="content" >
			<div class="row-fluid">
				<div class="block-content collapse in">
					<div class="row-fluid">
						<!-- block -->
						<div class="block">
							<div class="navbar navbar-inner block-header">
								<div class="muted pull-left">GST BR Details</div>
							</div>
							<div class="block-content collapse in">
								<div class="span12">
					               <div class="span8">
                                   <table class="table table-bordered" id="tabelGSTBR">
    <thead>
      <tr> 
          <th style="text-align: center;">Date</th>

        <th style="text-align: center;">CompanyID</th>
        <th style="text-align: center;">Company Name</th>
        <th style="text-align: center;">Details</th>

      </tr>
    </thead>
    <tbody id="tabelGSTBR1">
     <?php 
        if(count($data['getcompany_list_BR']>0))
        {   $i=0;
            foreach($data['getcompany_list_BR'] as $row)
            {
                $sno=$i+1;
                $Company_Id=$row->Company_Id;
                $Company_Name=$row->Company_Name;
                $Date=$row->Date;
                $RecptNo=$row->RecptNo;
                $Amount=$row->Amount;
                $Status_Name=$row->Status_Name;
                $CAID=$row->CAID;
                $imageuploadid=$row->imageuploadid;
                
                
            ?>
        <tr>
          <td style="text-align: left;"><?=$Date ?></td>

        <td style="text-align: left;"><a onclick="ImageBRShow(<?=$imageuploadid ?>)"><?=$Company_Id ?></a></td>
        <td style="text-align: left;"><?=$Company_Name ?></td>
      <td>
            <table style=" border: none;" >
          <tr style=" border: none;">
              <td style=" border: none;">Receipt No</td>
              <td style=" border: none;"><?=$RecptNo ?></td>
         </tr>
                 <tr style=" border: none;">
              <td style=" border: none;">Amount</td>
              <td style=" border: none;"><?=$Amount ?></td>
         </tr>
                 <tr style=" border: none;">
              <td style=" border: none;">Type</td>
              <td style=" border: none;"><?=$Status_Name ?></td>
         </tr>
          </table>
            </td>

        </tr>
        
        
        <?php
                
                
                
                $i++;
            }
        
        }
        ?>
     
    </tbody>
  </table>
                                    
                                    </div>
					               <div class="span4">
                                       <table class="table table-bordered" style="display:none;width:98%!important" id="ImageShow">
    <thead>
      <tr>
        <th  style="text-align: center;">Images</th>
       
      </tr>
    </thead>
    <tbody id="ImageShow1">
      
     
    </tbody>
                                           <tfoot></tfoot>
  </table></div>
                                    
                                    
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
      $("#ImageShow").css("display", "none");
function ImageBRShow(imageuploadid){
      $("#ImageShow").css("display", "block");
        $.ajax({
			url: "get_aud_images_BR",
			type: 'get',
			data: {
				imageuploadid: imageuploadid
			},
			success: function(data) {
			console.log(data);
			console.log((data['get_aud_images_BR'].length));
             $('#ImageShow tbody').empty();
					$('#ImageShow tfoot').empty();   
            if(data['get_aud_images_BR'].length>0){
                $.each(data['get_aud_images_BR'], function(i, key) {
                    var ID=key['Id'];
                    var Image=key['Image_Path'];
                  $('#ImageShow tbody').append('<tr><td><img src='+Image+' name='+ID+'/><br><a href='+Image+' download="Image'+ID+'" style="text-align: center;">Image'+ID+'</a></td></tr>');
                });
                $('#ImageShow tfoot').append('<tr><td><button type="button" class="btn btn-primary" onclick="Company_BR_Image('+imageuploadid+')">Submit</button></td></tr>');
            }
			},
		})
}
    
    function Company_BR_Image(imageuploadid){
		swal({
				title: "",
				text: "Make sure you want to submit this process.",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Ok",
				cancelButtonText: "Cancel",

				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm) {
				if (isConfirm) {
					
					$.ajax({
						url: 'updatecompanyGSTBRImage',
						data: {
							imageuploadid: imageuploadid,
							
						},
						success: function(data) {
							//alert(data);
							console.log(data);
                              $('#tabelGSTBR1').empty();
                              $('#ImageShow1').empty();
                             $("#ImageShow").css("display", "none");
                            if(data['getcompany_list_BR'].length>0)
                            {
                                 var sno=1;
                            $.each(data['getcompany_list_BR'], function(i, key) {
               
                var Company_Id=key['Company_Id'];
                var Company_Name=key['Company_Name'];
                var Date=key['Date'];
                var RecptNo=key['RecptNo'];
                var Amount=key['Amount'];
                var Status_Name=key['Status_Name'];
                var CAID=key['CAID'];
                var imageuploadid=key['imageuploadid'];

                                
//$('#tabelGSTBR tbody').append('<tr><td style="text-align: left;">'+Date+'</td><td style="text-align: left;"><a onclick="ImageBRShow('+imageuploadid+')">'+Company_Id+'</a></td><td style="text-align: left;">'+Company_Name+'</td><td><table style=" border: none;"><tr style=" border: none;"><td style=" border: none;">Receipt No</td><td style=" border: none;">'+RecptNo+'</td></tr><tr style=" border: none;"><td style=" border: none;">Amount</td><td style=" border: none;">'+Amount+'</td></tr></table></td></tr>');
                                
                                
$('#tabelGSTBR1').append('<tr><td style="text-align: left;">'+Date+'</td><td style="text-align: left;"><a onclick="ImageBRShow('+imageuploadid+')">'+Company_Id+'</a></td><td style="text-align: left;">'+Company_Name+'</td><td><table style=" border: none;" id="tabel1"><tr style=" border: none;"><td style=" border: none;">Receipt No</td><td style=" border: none;">'+RecptNo+'</td></tr><tr style=" border: none;"><td style=" border: none;">Amount</td><td style=" border: none;">'+Amount+'</td></tr><tr style=" border: none;"><td style=" border: none;">Amount</td><td style=" border: none;">'+Status_Name+'</td></tr></table></td></tr>');
                                
                             
                });
                            }
                            
							swal("Completed!", "Successfully Completed...!", "success");
						},
						error: function(data) {
							alert('error');
						}
						//alert(id);
					})
				} else {
					$("#chk" + divId).attr('checked', false);
					//alert();
					swal("Cancelled", "Until Process is going on...!", "error");
				}
			}
		); 
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>