<!DOCTYPE html>
<html>
<style>
    .control-label {
        font-size: 17px !important;
    }


    textarea,
    input[type="text"],
    input[type="password"],
    input[type="datetime"],
    input[type="datetime-local"],
    input[type="date"],
    input[type="month"],
    input[type="time"],
    input[type="week"],
    input[type="number"],
    input[type="email"],
    input[type="url"],
    input[type="search"],
    input[type="tel"],
    input[type="color"],
    .uneditable-input {
        width: 60% !important;
        height: 30px !important;
    }

    .dataTables_wrapper {

        font-size: 16px;
    }

</style>

<head>

</head>

<body class="theme-red">
    <?php echo $__env->make('templates.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->yieldContent('content'); ?> <?php echo $__env->make('templates.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>
