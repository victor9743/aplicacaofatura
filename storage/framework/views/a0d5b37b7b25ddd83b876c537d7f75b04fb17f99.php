<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <?php echo $__env->yieldContent('title'); ?>
</head>
<body class="gradient-custom">
    <?php echo $__env->yieldContent('content'); ?>
</body>
    <?php echo $__env->yieldContent('scripts'); ?>
</html><?php /**PATH C:\Users\supor\OneDrive\Área de Trabalho\aplicacaofatura\resources\views/layout/layout.blade.php ENDPATH**/ ?>