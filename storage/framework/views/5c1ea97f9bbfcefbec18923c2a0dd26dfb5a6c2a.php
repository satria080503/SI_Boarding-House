
<?php $__env->startSection('title'); ?>
  Tagihan Pembayaran
<?php $__env->stopSection(); ?>
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
<section id="basic-datatable">
  <div class="row">
    <div class="col-md-3">
      <div class="card shadow">
        <div class="card-body">
          <div class="text-center">
            <img class="round" src="<?php echo e(asset('assets/images/profile/profile.jpg')); ?>" alt="avatar" height="40" width="40">
            <p class="text-center font-weight-bold"><?php echo e(Auth::user()->name); ?></p>
          </div>
          <h5>Account</h5>
          <div style="margin-left:2px">
            <a href="<?php echo e(url('profile')); ?>" style="font-size: 12px">Profile</a> <br>
            <a href="" style="font-size: 12px">Ganti Password</a>
          </div>

          <h5 class="mt-2">Payment</h5>
          <div style="margin-left: 2px">
            <a href="<?php echo e(url('user/tagihan')); ?>" style="font-size: 12px">Tagihan</a> <br>
            <a href="<?php echo e(url('user/myroom')); ?>" style="font-size: 12px">Kamar Kamu</a>
          </div>

          <h5 class="mt-2">Kamar</h5>
          <div style="margin-left: 2px">
            <a href="<?php echo e(url('/')); ?>" style="font-size: 12px">Cari Kamar</a> <br>
            <a href="" style="font-size: 12px">Kamar Favorite</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Data Tagihan</h4>
          </div>
          <div class="card-content">
            <div class="card-body card-dashboard">
              <div class="table-responsive">
                <table class="table zero-configuration">
                  <thead>
                    <tr>
                      <th width="1%">No</th>
                      <th class="text-nowrap">Nomor Transaksi</th>
                      <th class="text-nowrap">Nama Kamar</th>
                      <th class="text-nowrap">Harga</th>
                      <th class="text-nowrap">Keterangan</th>
                      <th class="text-nowrap">Status</th>
                      <th class="text-nowrap">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                    ?>
                    <?php $__currentLoopData = $tagihan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagihans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($tagihans->payment->status == 'Pending'): ?>
                        <tr>
                          <td><?php echo e($no); ?></td>
                          <td><?php echo e($tagihans->transaction_number); ?></td>
                          <td><?php echo e($tagihans->kamar->nama_kamar); ?></td>
                          <td><?php echo e(rupiah($tagihans->harga_total)); ?></td>
                          <td><?php echo e($tagihans->lama_sewa); ?> Bulan</td>
                          <td><?php echo e($tagihans->payment->status); ?></td>
                          <td>
                            <?php if($tagihans->payment->status == 'Pending'): ?>
                              <a href="<?php echo e(url('user/room', $tagihans->key)); ?>">Konfirmasi</a>
                            <?php endif; ?>
                          </td>
                        </tr>
                      <?php endif; ?>
                    <?php
                      $no++;
                    ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/user/payment/index.blade.php ENDPATH**/ ?>