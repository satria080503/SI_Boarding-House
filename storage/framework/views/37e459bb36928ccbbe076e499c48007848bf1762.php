
<?php $__env->startSection('title'); ?>
  <?php echo e($confirm->kamar->nama_kamar); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">

  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="font-weight-bold">Konfirmasi Pembayaran</h4>
        <h6>Approve Pembayaran jika data pembayaran dari penyewa sudah sesuai.</h6>
        <hr>
        <form action="<?php echo e(url('pemilik/payment-confirm',$confirm->key)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <div class="form-group">
            <label for="Tanggal Approve">Tanggal Approve</label>
            <input type="text" class="form-control" value="<?php echo e(date('d l Y')); ?>" readonly disabled>
          </div>

          <div class="form-group">
            <label for="Jumlah">Jumlah</label>
            <input type="text" value="<?php echo e(rupiah($confirm->harga_total)); ?>" class="form-control" readonly disabled>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Approve</button>
            <a data-id-reject="<?php echo e($confirm->id); ?>" id="reject" class="btn btn-warning mr-sm-1 mb-1 mb-sm-0">Reject</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-body">
        <h6>Detail Pembayaran Dari Penyewa.</h6>
      </div>
    </div>
    <div class="card shadow">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <span>
            Jumlah <span style="font-weight: bold; color:white"><?php echo e(rupiah($confirm->harga_total)); ?></span>
          </span>
          <span style="font-size: 21px">
            <i class="feather icon-credit-card"></i>
          </span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
          <span>
            <?php echo e($confirm->payment->nama_pemilik); ?> <small><em>( Atas Nama)</em></small><br>
            <?php echo e($confirm->payment->nama_bank); ?> <small><em>(Bank Pengirm)</em></small> <br>
            <?php echo e($confirm->payment->bank_tujuan); ?> <small><em>(Bank Tujuan)</em></small> <br>
            <?php echo e($confirm->payment->tgl_transfer); ?> <small><em>(Tanggal Transfer)</em></small>
          </span>
          <span>
            
            <a href=" <?php echo e(asset('storage/images/bukti_bayar/' .$confirm->payment->bukti_bayar)); ?>" target="_blank" class="btn btn-info btn-sm">
              <i class="feather icon-file"></i> File Bukti Bayar</a>
          </span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
          <span>
            <?php echo e($confirm->kamar->nama_kamar); ?> <br>
            <?php echo e($confirm->lama_sewa); ?> Bulan Sewa
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(asset('ctrl/backend/confirm.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/pemilik/booking/confirm.blade.php ENDPATH**/ ?>