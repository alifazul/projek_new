<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('logreg/fonts/icomoon/style.css')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('logreg/css/bootstrap.min.css')); ?>">

    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(asset('logreg/css/style.css')); ?>">

    <title>Login #4</title>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="<?php echo e(asset('logreg/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('logreg/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('logreg/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('logreg/js/main.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\projek_new\resources\views/auth/templatelogreg.blade.php ENDPATH**/ ?>