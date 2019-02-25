    <?php echo $__env->make('templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('templates.top_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('templates.side_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

