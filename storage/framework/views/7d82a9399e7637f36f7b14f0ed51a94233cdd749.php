
<?php $__env->startSection('title','Dashboard Pemilik'); ?>
<?php $__env->startSection('content'); ?>
  <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong><?php echo e($message); ?></strong>
    </div>
  <?php elseif($message = Session::get('error')): ?>
    <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <strong><?php echo e($message); ?></strong>
    </div>
  <?php endif; ?>

  <section id="dashboard-analytics">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card bg-analytics text-white">
          <div class="card-content">
            <div class="card-body text-center">
              <img src="<?php echo e(asset('assets/images/backgrounds/decore-left.png')); ?>" class="img-left" alt=" card-img-left">
              <img src="<?php echo e(asset('assets/images/backgrounds/decore-right.png')); ?>" class="img-right" alt=" card-img-right">
                <div class="avatar avatar-xl bg-primary shadow mt-0">
                    <div class="avatar-content">
                        <i class="feather icon-heart font-large-1"></i>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="mb-2 text-white">Welcome, <?php echo e(Auth::user()->name); ?> </h1>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-12">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                        <div class="avatar-content">
                            <i class="feather icon-user text-primary font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700"><?php echo e($total); ?></h2>
                    <p class="mb-0 line-ellipsis">Total Penghuni</p>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 col-sm-12">
        <div class="card text-center">
            <div class="card-content">
                <div class="card-body">
                    <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                        <div class="avatar-content">
                            <i class="feather icon-users text-danger font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700"><?php echo e($aktif); ?></h2>
                    <p class="mb-0 line-ellipsis">Penghuni Aktif</p>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-9 col-md-6 col-12">
        <div class="card card-statistics">
            <div class="card-header">
                <h4 class="card-title">Pendapatan</h4>
                <div class="d-flex align-items-center">
                    <p class="card-text font-small-2 mr-25 mb-0">Updated 1 minute ago</p>
                </div>
            </div>
            <div class="card-body statistics-body">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-rgba-primary mr-2 p-50 m-0 mb-1">
                                <div class="avatar-content">
                                    <i class="feather icon-dollar-sign" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0"><?php echo e(rupiah($pendapatanYear)); ?></h4>
                                <p class="card-text font-small-3 mb-1">Tahun ini <small>(<?php echo e(date('Y')); ?>)</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-rgba-info mr-2 p-50 m-0 mb-1">
                                <div class="avatar-content">
                                    <i class="feather icon-dollar-sign" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0"><?php echo e(rupiah($pendapatanMonth)); ?></h4>
                                <p class="card-text font-small-3 mb-1">Bulan ini <small>(<?php echo e(date('F')); ?>)</small> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="media">
                            <div class="avatar bg-rgba-success mr-2 p-50 m-0 mb-1">
                                <div class="avatar-content">
                                    <i class="feather icon-dollar-sign" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0"><?php echo e(rupiah($pendapatanPrevYear)); ?></h4>
                                <p class="card-text font-small-3 mb-1">Tahun sebelumnya <small>(<?php echo e(date("Y",strtotime("-1 year")) ?? 0); ?>)</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-lg-3 col-12">
        <div class="row match-height">
            <div class="col-lg-12 col-md-3 col-6">
                <div class="card">
                    <div class="card-body pb-50">
                        <h6>Total Pendapatan</h6>
                        <h2 class="font-weight-bolder mb-1"><i class="feather icon-dollar-sign" class="avatar-icon"></i> <?php echo e(rupiah($pendapatan)); ?></h2>
                        <?php
                          $p = new NumberFormatter("id", NumberFormatter::SPELLOUT);
                          $result = preg_replace("/\..+/", "", $pendapatan);
                        ?>
                        <p style="font-size: 8px; font-style:italic; color:lightcoral"><?php echo e(ucwords($p->format($result))); ?> Rupiah</p>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-9 col-md-6 col-12">
        <div class="card card-statistics">
            <div class="card-header">
                <h4 class="card-title">Statistics</h4>
                <div class="d-flex align-items-center">
                    <p class="card-text font-small-2 mr-25 mb-0">Updated 1 minute ago</p>
                </div>
            </div>
            <div class="card-body statistics-body">
              <div class="row">
                  <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                      <div class="media">
                          <div class="avatar bg-rgba-primary mr-2 p-50 m-0 mb-1">
                              <div class="avatar-content">
                                  <i class="feather icon-home" class="avatar-icon"></i>
                              </div>
                          </div>
                          <div class="media-body my-auto">
                              <h4 class="font-weight-bolder mb-0"><?php echo e($stok_kamar); ?></h4>
                              <p class="card-text font-small-3 mb-1">Jumlah Kamar</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                      <div class="media">
                          <div class="avatar bg-rgba-info mr-2 p-50 m-0 mb-1">
                              <div class="avatar-content">
                                  <i class="feather icon-home" class="avatar-icon"></i>
                              </div>
                          </div>
                          <div class="media-body my-auto">
                              <h4 class="font-weight-bolder mb-0"><?php echo e($sisa_kamar); ?></h4>
                              <p class="card-text font-small-3 mb-1">Kamar Kosong</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                      <div class="media">
                          <div class="avatar bg-rgba-success mr-2 p-50 m-0 mb-1">
                              <div class="avatar-content">
                                  <i class="feather icon-trending-up" class="avatar-icon"></i>
                              </div>
                          </div>
                          <div class="media-body my-auto">
                              <h4 class="font-weight-bolder mb-0"><?php echo e(($stok_kamar - $sisa_kamar)); ?></h4>
                              <p class="card-text font-small-3 mb-1">Kamar Aktif</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 col-12">
                      <div class="media">
                          <div class="avatar bg-rgba-danger mr-2 p-50 m-0 mb-1">
                              <div class="avatar-content">
                                  <i class="feather icon-heart" class="avatar-icon"></i>
                              </div>
                          </div>
                          <div class="media-body my-auto">
                              <h4 class="font-weight-bolder mb-0"> <?php echo e($favorite); ?> </h4>
                              <p class="card-text font-small-3 mb-1">Favorite</p>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-3 col-12">
        <div class="row match-height">
            <div class="col-lg-12 col-md-3 col-6">
                <div class="card">
                    <div class="card-body pb-50">
                        <h6>Rating Rata-rata</h6>
                        <h2 class="font-weight-bolder mb-1">
                          <div class="read-only-ratings" data-rateyo-read-only="true"></div>
                        </h2>
                        <p style="font-size: 13px; color:lightcoral">Ratings: 7</p>
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>
  </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/pemilik/index.blade.php ENDPATH**/ ?>