<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Portal Srigonco">
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Portal Srigonco menyediakan informasi mengenai UMKM, Pariwisata serta Profil di Desa Srigonco, Kecamatan Bantur, Kabupaten Malang, Jawa Timur. ">
    <meta name="keywords" content="Bantur, Srigonco, Balekambang, Pantai Regent, Malang, Desa, Jawa Timur, Batik, Pemerintahan, Wisata, UMKM, Administrasi, Pantai, Alam, Hidden Gem" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Portal Srigonco">
    <meta property="og:description" content="Portal Srigonco menyediakan informasi mengenai UMKM, Pariwisata serta Profil di Desa Srigonco, Kecamatan Bantur, Kabupaten Malang, Jawa Timur. ">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Portal Srigonco">
    <meta property="twitter:description" content="Portal Srigonco menyediakan informasi mengenai UMKM, Pariwisata serta Profil di Desa Srigonco, Kecamatan Bantur, Kabupaten Malang, Jawa Timur. ">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
    <title><?php echo e(isset($title) ? $title : "Portal Srigonco"); ?></title>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('img/icon/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('img/icon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/icon/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('img/icon/site.webmanifest')); ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
<?php echo $__env->make('layouts.web.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('main'); ?>    
<?php echo $__env->make('layouts.web.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!-- Vendor JS Files -->
 <script src="<?php echo e(asset("vendor/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>

 <!-- Template Main JS File -->
 <script src="<?php echo e(asset("js/app.js")); ?>"></script>
 
 <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH C:\Users\rezaa\Documents\DEVELOPMENT\Dewi_Laundry\resources\views/layouts/web/template.blade.php ENDPATH**/ ?>