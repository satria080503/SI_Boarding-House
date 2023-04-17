<?php $__env->startSection('description'); ?>
  Kost-Able, cari kos dan apartement makin mudah hanya di Kost-Able. aplikasi pencari kos di indonesia.
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
  Selamat Datang di Kost-Able
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="card <?php echo e(@$cari ? 'hidden' : ''); ?>">
    <div class="card-body" style="padding: 1%">
      <form action="<?php echo e(url('filter-kamar')); ?>" method="GET">
        <div class="row">
          <div class="col-sm-3 mt-1">
            <select name="nama_provinsi" id="" class="form-control" placeholder="Semua Kota">
              <option value="all">Semua Kota</option>
              <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($province->provinsi->name); ?>" <?php echo e($province->provinsi->name == $select['name'] ? 'selected' : ''); ?> ><?php echo e($province->provinsi->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="col-sm-2 mt-1">
            <select name="jenis_kamar" id="" class="form-control">
              <option value="all" <?php echo e($select['jenis_kamar'] == 'all' ? 'selected' : ''); ?>>Semua Tipe</option>
              <option value="Campur" <?php echo e($select['jenis_kamar'] == 'Campur' ? 'selected' : ''); ?> >Campur</option>
              <option value="Putra" <?php echo e($select['jenis_kamar'] == 'Putra' ? 'selected' : ''); ?>>Putra</option>
              <option value="Putri" <?php echo e($select['jenis_kamar'] == 'Putri' ? 'selected' : ''); ?>>Putri</option>
            </select>
          </div>

          <div class="col-sm-2 mt-1">
            <button type="submit" class="btn btn-outline-primary btn-block"> <i class="feather icon-filter"></i> Filter Kamar</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <section id="search-bar" class="<?php echo e(@$cari ? 'hidden' : ''); ?>">
    <div class="search-bar">
      <form action="<?php echo e(url('show-all-room')); ?>" method="GET">
        <fieldset class="form-group position-relative has-icon-left">
          <input type="text" class="form-control round" name="cari" id="searchbar" placeholder="Masukan Nama Kos lokasi/kota/provinsi...">
          <div class="form-control-position">
             <i class="feather icon-search px-1"></i>
          </div>
        </fieldset>
      </form>
    </div>
  </section>

  <h2 class="mb-2 <?php echo e(@$cari ? '' : 'hidden'); ?>" style="font-weight: bold; color:black">Ditemukan <?php echo e($allKamar->count()); ?> Kamar</h2>

  <div class="row match-height">
    <?php $__empty_1 = true; $__currentLoopData = $allKamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kamars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-xl-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-content">
          <a href="<?php echo e(url('room', $kamars->slug)); ?>">
            <img class="card-img-top img-fluid" src="<?php echo e(asset('/images/bg_foto/' .$kamars->bg_foto)); ?>" alt="Card image cap" style="max-height: 180px">
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
      <p class="mt-2">Kamar yang kamu cari tidak ditemukan.</p>
    </div>
    <?php endif; ?>
  </div>
  <div style="text-align: center;" class="mt-1 mb-5">
    <?php echo e($allKamar->links()); ?>

  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/front/allCardContent.blade.php ENDPATH**/ ?>