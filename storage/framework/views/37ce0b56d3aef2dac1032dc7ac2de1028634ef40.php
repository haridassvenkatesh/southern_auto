 <?php $__env->startSection('content'); ?>




<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/sweetalert.min.css')); ?>">
<script src="<?php echo e(asset('/js/sweetalert.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('/css/ng-tags-input.min.css')); ?>" />
<script src="<?php echo e(asset('/js/ng-tags-input.min.js')); ?>"></script>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12" id="content" ng-app="company_app" ng-controller="company_controller">
            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>
            <!-- validation -->
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <center>

                            <div class="muted pull-left">
                                LEAD
                            </div>
                            <div class="muted pull-center">


                            </div>
                        </center>
                    </div>
                    <form name="lead" id="lead">
                        <div class="block-content collapse in">
                            <div class="span12">
                                <!-- BEGIN FORM-->
                                <div class="form-horizontal" name="company_details_form" novalidate>
                                    <fieldset>
                                        <div class="span12"></div>

                                        <div class="span12">
                                            <div class="span6">
                                                <div class="form-group">
                                                    <input type="hidden" name="page" id="page" value="">
                                                    <label class="control-label" for="company_name">Name <b style="color:red">*</b></label>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" name="name" placeholder="Name" ng-model="company_name" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <label class="control-label" for="cgstno">Phone <b style="color:red">*</b></label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input type="text" name="phone" id="phone" placeholder="Phone" ng-model="cgstno" ng-change="gstnovalidation()" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="span12">
                                            <div class="span6">
                                                <div class="control-group">

                                                    <label class="control-label" for="category">Type<b style="color:red">*</b></label>
                                                    <div class="controls">
                                                        <select id="type_id" name="type_id" class="select2 select2-hidden-accessible" style="width:63%">
                                                        <option id="">Please Select</option>
                                                        <?php $__currentLoopData = $data['Type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="control-group">

                                                    <label class="control-label" for="category">Description<b style="color:red">*</b></label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" ng-model="gst_password" placeholder="Description" name="description" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span12">
                                            <div class="span6">

                                                <label class="control-label" for="phoneno1">Employee<b style="color:red">*</b></label>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <select id="employee_id" name="employee_id" class="select2 select2-hidden-accessible" style="width:63%">
                                                        <option Id="">Please Select</option>
                                                        <?php $__currentLoopData = $data['Employee']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        <option value="<?= $row->Id ?>"><?= $row->First_Name ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div>
                                            <center>
                                                <button type="button" class="btn btn-primary" id="company_add" onclick="btnSave()">Add</button>
                                                <button type="submit" class="btn btn-warning" onclick="javascript:window.location.href='company_Corresponding_details';">Cancel</button>
                                            </center>
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /block -->
            </div>
            <!-- /validation -->
        </div>
    </div>
    <hr>
</div>
<script>
    function btnSave() {
        console.log($('#lead').serialize());
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>