 <?php $__env->startSection('content'); ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<div class="container-fluid">
    <div class="row-fluid">

        <div class="span12" id="content">
            <div class="row-fluid">
                <div class="block-content collapse in">
                    <?php /*  echo "<pre>";print_r($data['get_gst_regular_details'][0]);
                        die;*/?>
                    <?php $title = "IT INDIVIDUAL";
                               if($data['tax'] == 61)
                                    $title = "IT CONCERN (GST)";
                                    ?>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <center>
                                    <div class="muted pull-center">
                                        <h4><b><?= $title ?></b></h4>
                                    </div>
                                </center>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div class="span3"></div>
                                    <div class="span3">
                                        <?php if(!empty($data['get_it_details'])){?>
                                        <input type="text" value="<?=$data['get_it_details'][0]->First_Name?>" readonly/>
                                        <?php }?>
                                    </div>
                                    <div class="span3">
                                        <?php if(!empty($data['get_it_details'])){?>
                                        <input type="text" value="<?=$data['get_it_details'][0]->update_date?>" readonly/>
                                        <?php }?>
                                    </div>
                                    <div class="span3"></div>
                                </div>
                                <br/>
                                <div class="span12" style="margin-left:0px;">

                                    <table class="table table-bordered" id="table1">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sno = 1;  if(!empty($data['get_it_details'])) { ?> <?php $__currentLoopData = $data['get_it_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?= $sno?>
                                                </td>
                                                <td>
                                                    <?= $r->name?>
                                                </td>
                                                <td>
                                                    <?= $r->Status_Name?>
                                                </td>
                                            </tr>
                                            <?php $sno ++; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>


                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#table1').DataTable();
    });

</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>