<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Yayasan Peduli Kasih KNDJH Membantu Bersama Meraih Berkah">
    <meta name="keywords" content="KNDJH,Yayasan Peduli Kasih KNDJH, Kita Bisa, Bantuan Anak Yatim">
    <meta name="author" content="PIXINVENT">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="apple-touch-icon" href="assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('logo/kndjh-logo.ico')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    
      <?php echo $__env->make('layouts.backend.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

</head>
<!-- END: Head-->


<!-- BEGIN: Body-->
<body class="<?php echo e(auth::user()->role == 'Pencari' ? 'horizontal' : 'vertical'); ?>-layout <?php echo e(auth::user()->role == 'Pencari' ? 'horizontal' : 'vertical'); ?>-menu-modern dark-layout 2-columns  navbar-sticky footer-static  " data-open="hover" data-menu="<?php echo e(auth::user()->role == 'Pencari' ? 'horizontal' : 'vertical'); ?>-menu<?php echo e(auth::user()->role == 'Pemilik' ? '-modern' : ''); ?>" data-col="2-columns" data-layout="dark-layout">

    <!-- BEGIN: Header-->
      <?php echo $__env->make('layouts.backend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Header-->


    <!-- BEGIN: Sidebar Menu-->
      <?php echo $__env->make('layouts.backend.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Sidebar Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-body">
          <?php if(cekPromo()): ?> 
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <div class="alert-body">
                Ada Promo yang sudah berakhir, <a href=" <?php echo e(route('kamar.promo')); ?> ">cek disini</a>
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <?php if(cekPemesanan()): ?> 
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="alert-body">
              Segera selesaikan pembayaran kamar kamu yuk, <a href=" <?php echo e(url('user/tagihan')); ?> ">lihat disini</a>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endif; ?>
          <?php if(getNotifikasiEndSewa()): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="alert-body">
             Ada kamar yang sudah habis sewa, <a href=" <?php echo e(url('pemilik/booking-list')); ?> ">lihat disini</a>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?php endif; ?>
          <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0">
          <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    
      <?php echo $__env->make('layouts.backend.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldContent('scripts'); ?>
    

</body>
<!-- END: Body-->

</html>
<?php /**PATH C:\xampp\htdocs\papikos\resources\views/layouts/backend/app.blade.php ENDPATH**/ ?>