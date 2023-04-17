
<?php $__env->startSection('title','Booking List'); ?>

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
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Data booking</h4>
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
                      <th class="text-nowrap">Nama</th>
                      <th class="text-nowrap">No Telp</th>
                      <th class="text-nowrap">Keterangan</th>
                      <th class="text-nowrap">Status Transaksi</th>
                      <th class="text-nowrap">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                    ?>
                    <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($no); ?></td>
                        <td><?php echo e($bookings->transaction_number); ?></td>
                        <td><?php echo e($bookings->kamar->nama_kamar); ?></td>
                        <td><?php echo e(getNameUser($bookings->user_id)); ?></td>
                        <td><?php echo e($bookings->user->no_wa ?? 0); ?></td>
                        <td><?php echo e($bookings->lama_sewa); ?> Bulan</td>
                        <td><?php echo e($bookings->payment->status); ?></td>
                        <td>
                          <?php if($bookings->status == 'Pending'): ?>
                            <?php if($bookings->payment->jumlah_bayar == null || $bookings->payment->tgl_transfer == null): ?>
                             <a href="">Menunggu Pembayaran </a>
                            <?php else: ?>
                             <a href="<?php echo e(url('pemilik/room', $bookings->key)); ?>">Konfirmasi </a>
                            <?php endif; ?>
                          <?php elseif($bookings->status == 'Proses'): ?>
                            <?php if(
                                  Carbon\carbon::parse($bookings->end_date_sewa)->format('d') <= Carbon\carbon::now()->format('d') &&
                                  Carbon\carbon::parse($bookings->end_date_sewa)->format('m') <= Carbon\carbon::now()->format('m') &&
                                  Carbon\carbon::parse($bookings->end_date_sewa)->format('Y') <= Carbon\carbon::now()->format('Y')
                                ): ?>
                              <a data-id-done="<?php echo e($bookings->id); ?>" id="done" class="btn btn-info btn-sm mr-sm-1 mb-1 mb-sm-0" style="color: black">Expired</a>
                            <?php else: ?>
                              <span class="badge badge-primary">Aktif</span>
                            <?php endif; ?>
                          <?php elseif($bookings->status == 'Done'): ?>
                            <span class="badge badge-info">Selesai</span>
                          <?php elseif($bookings->status == 'Cancel'): ?>
                            <span class="badge badge-warning">Cancel</span>
                          <?php elseif($bookings->status == 'Reject'): ?>
                            <span class="badge badge-danger">Reject</span>
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
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(asset('ctrl/backend/confirm.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/pemilik/booking/index.blade.php ENDPATH**/ ?>