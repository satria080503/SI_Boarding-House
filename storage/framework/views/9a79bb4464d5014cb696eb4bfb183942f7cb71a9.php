<?php $__env->startSection('description'); ?>
  Kost Able, cari kos dan apartement makin mudah hanya di papikos. aplikasi pencari kos di indonesia.
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
  Selamat Datang di Kost Able
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('front.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <br><br><br>
  <?php if($promo->count() > 0): ?>
    <?php echo $__env->make('front.sliderCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
  <br><br><br>
  <?php echo $__env->make('front.cardContent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <br><br><br>
  <?php echo $__env->make('front.byKota', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/front/index.blade.php ENDPATH**/ ?>