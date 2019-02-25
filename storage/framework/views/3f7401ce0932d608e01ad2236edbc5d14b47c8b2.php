 <?php $__env->startSection('content'); ?>
<div class="contaniner_class">
       <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6"> 
                            
                            <?php 
                            
                            $count_total=($data['create_enquiry_count']+$data['quoted_enquiry_count']+$data['won_enquiry_count']+$data['lost_enquiry_count']+$data['closed_enquiry_count']+$data['hold_enquiry_count']);
                            
                            if($data['create_enquiry_count']==0){
                                $data['create_enquiry_count']="-";
                            }
                            if($data['quoted_enquiry_count']==0){
                                $data['quoted_enquiry_count']="-";
                            }
                            if($data['won_enquiry_count']==0){
                                $data['won_enquiry_count']="-";
                            }
                            if($data['lost_enquiry_count']==0){
                                $data['lost_enquiry_count']="-";
                            }
                            if($data['closed_enquiry_count']==0){
                                $data['closed_enquiry_count']="-";
                            }
                            if($data['hold_enquiry_count']==0){
                                $data['hold_enquiry_count']="-";
                            }
                                                      
                            ?>
                            <table style="width:100%;margin-top: 60px;" class="table table-bordered">
                                 <tr>
                                    <th colspan="2" class="text-center">Enquiry Details</th>
                                 </tr>
 
                                <tr>
    
    <th><a href="view_enquiry">New Enquiry</a></th>
      
      <td><?= $data['create_enquiry_count'] ?></td>
  </tr>
  <tr>
    <th><a href="view_enquiry_quoted">Quoted Enquiry</a></th>
    <td><?= $data['quoted_enquiry_count'] ?></td>
  </tr>
  <tr>
     <th><a href="view_enquiry_converted">Projects</a></th>
    <td><?= $data['won_enquiry_count'] ?></td>
  </tr>
  <tr>
     <th><a href="view_enquiry_lost">Lost Enquiry</a></th>
    <td><?= $data['lost_enquiry_count'] ?></td>
  </tr>
  <tr>
     <th><a href="view_enquiry_closed">Closed Enquiry</a></th>
    <td><?= $data['closed_enquiry_count'] ?></td>
  </tr>
  <tr>
     <th><a href="view_enquiry_hold">Hold Enquiry</a></th>
    <td><?= $data['hold_enquiry_count'] ?></td>
  </tr> <tr>
     <th><a href="view_total_enquiry">Total Enquiry</a></th>
    <td><?= $count_total ?></td>
  </tr>
</table></div>
                        <div class="col-lg-3"></div>
                        

                    </div>
                </div>
            </div>
        </div>
</div>
<script>
	

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>