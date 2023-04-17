
<?php $__env->startSection('title'); ?>
  Kamar Saya
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
            <h4 class="card-title">Data Kamar</h4>
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
                      $no = 1;
                    ?>
                    <?php $__currentLoopData = $kamar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($no); ?></td>
                        <td><?php echo e($item->transaction_number); ?></td>
                        <td>
                          <a href="<?php echo e(url('room', $item->kamar->slug)); ?>" target="_blank"><?php echo e($item->kamar->nama_kamar); ?></a>
                        </td>
                        <td><?php echo e(rupiah($item->kamar->harga_kamar)); ?></td>
                        <td><?php echo e($item->lama_sewa); ?> Bulan</td>
                        <td>
                          <?php if($item->status == 'Proses'): ?>
                            <span class="badge badge-primary">Kamar Aktif</span>
                          <?php elseif($item->status == 'Done'): ?>
                            <span class="badge badge-info">Sewa Selesai</span>
                          <?php elseif($item->status == 'Cancel'): ?>
                            <span class="badge badge-warning">Sewa Batal</span>
                          <?php elseif($item->status == 'Reject'): ?>
                            <span class="badge badge-danger">Sewa Ditolak</span>
                          <?php endif; ?>
                        </td>
                        <td>
                          <?php if($item->review == null): ?>
                            <a href=" <?php echo e(url('user/review', $item->key)); ?> " class="btn btn-danger btn-sm">Tulis Ulasan</a>
                          <?php else: ?>
                            <a href=" <?php echo e(url('room', $item->kamar->slug)); ?> " class="btn btn-info btn-sm">Lihat Ulasan</a>
                          <?php endif; ?>
                        </td>
                      </tr>
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/user/kamar/index.blade.php ENDPATH**/ ?>