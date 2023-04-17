<div class="card-btn d-flex justify-content-between mt-2">
    <h2 style="color:black">Kamu mungkin menyukainya</h2>
    <a href="<?php echo e(url('show-all-room')); ?>" class="btn btn-outline-info mb-1" style="color:black">Lihat Lainnya</a>
</div>
<div class="row match-height">
  <?php $__empty_1 = true; $__currentLoopData = $relatedKos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kamars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <div class="col-xl-3 col-md-6 col-sm-12">
    <div class="card">
      <div class="card-content">
        <a href="<?php echo e(url('room', $kamars->slug)); ?>">
          <img class="card-img-top img-fluid" src="<?php echo e(asset('/storage/images/bg_foto/' .$kamars->bg_foto)); ?>" alt="Card image cap" style="max-height: 180px">
        </a>
        <div class="card-body">
          <a href="<?php echo e(url('room', $kamars->slug)); ?>">
            <h5 style="min-height: 40px"><?php echo e($kamars->nama_kamar); ?> <?php echo e(ucfirst(strtolower($kamars->regencies->name))); ?></h5>
            <div class="d-flex-justify-content-between">
              <a href="" class="btn gradient-light-primary btn-sm"><?php echo e($kamars->jenis_kamar); ?></a>
              <a href="#" class="btn btn-outline-<?php echo e($kamars->sisa_kamar > 5 ? 'primary' : 'danger'); ?> btn-sm <?php echo e($kamars->sisa_kamar > 5 ? 'primary' : 'danger'); ?>">
                    <?php if($kamars->sisa_kamar != 0 || $kamars->sisa_kamar != null): ?>
                        Tersisa <?php echo e($kamars->sisa_kamar); ?> kamar
                    <?php else: ?>
                        Kamar Penuh
                    <?php endif; ?>
              </a>
            </div>
            <p class="card-text mt-1 mb-0"><i class="feather icon-map-pin"></i> <?php echo e($kamars->provinsi->name); ?></p>
            <span class="card-text" style="color: rgb(96, 93, 93);text-decoration: line-through">
              <?php if($kamars->promo != null && $kamars->promo->status == 1 && $kamars->promo->end_date_promo >= Carbon\carbon::now()->format('d F, Y')): ?>
                  <?php echo e(rupiah($kamars->harga_kamar)); ?>

              <?php endif; ?>
            </span> <br>
            <span class="card-text" style="color: black"> <?php echo e(rupiah(
              $kamars->promo != null && $kamars->promo->status == 1 && $kamars->promo->end_date_promo >= Carbon\carbon::now()->format('d F, Y')
              ? $kamars->promo->harga_promo : $kamars->harga_kamar)); ?> / Bulan
            </span>
          </a>
          <div class="card-btn d-flex justify-content-between mt-2">
            <a href="#" class="btn gradient-light-<?php echo e($kamars->kategori == 'Kost' ? 'warning' : 'info'); ?> text-white btn-sm"><?php echo e($kamars->kategori); ?></a>
            <a href="#" class="btn btn-outline-primary btn-sm <?php echo e($kamars->book == 0 ? 'hidden' : ''); ?>">Bisa Booking</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <div class="col" style="text-align:center">
    <img src="<?php echo e(asset('assets/images/pages/empty.svg')); ?>" style="max-height: 350px">
    <p class="mt-2">Tidak ada kamar lain di temukan untuk kota ini.</p>
  </div>
  <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\papikos\resources\views/front/relatedKos.blade.php ENDPATH**/ ?>