
<?php $__env->startSection('title'); ?>
  Konfirmasi Pembayaran Kamar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-body">
        <h6>Jumlah akan ditentukan dari lama sewa pilihan kamu. Silahkan transfer sesuai dengan jumlah yang ditentukan.</h6>
      </div>
    </div>
    <div class="card shadow">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <span>
            Jumlah :
            <span style="font-weight: bold"><?php echo e(rupiah($transaksi->harga_total)); ?></span>
          </span>
          <span style="font-size: 21px">
            <i class="feather icon-credit-card"></i>
          </span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
          <span>
            <?php $__currentLoopData = $transaksi->bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <ul>
                <li><?php echo e($banks->nama_bank); ?></li>
                <li><?php echo e($banks->no_rekening); ?></li>
                <li><?php echo e($banks->nama_pemilik); ?></li>
              </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
          <span>
            <?php echo e($transaksi->kamar->nama_kamar); ?> <br>
            <?php echo e($transaksi->lama_sewa); ?> Bulan Sewa
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="font-weight-bold">Lakukan Konfirmasi Pembayaran</h4>
        <h6>Silahkan lakukan konfirmasi ketika Anda sudah melakukan transfer.</h6>
        <hr>
        <form action="<?php echo e(url('user/konfirmasi-payment',$transaksi->id)); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <div class="form-group">
            <label for="Atas Nama">Nama Pengirim</label>
            <input type="text" name="nama_pemilik" class="form-control <?php $__errorArgs = ['nama_pemilik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Atas Nama" autocomplete="off">
            <?php $__errorArgs = ['nama_pemilik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback">
                <strong><?php echo e($message); ?></strong>
              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <label for="Bank Kamu">Bank Kamu</label>
            <select name="nama_bank" class="select2 form-control">
              <option value="">-- Pilih Bank --</option>
              <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($banks->nama_bank); ?>"><?php echo e($banks->nama_bank); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['nama_bank'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback">
                <strong><?php echo e($message); ?></strong>
              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <label for="Bank Tujuan">Bank Tujuan</label>
            <select name="bank_tujuan" class="form-control select2">
              <option value="">-- Pilih Bank --</option>
              <?php $__currentLoopData = $transaksi->bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banks): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($banks->nama_bank); ?>"><?php echo e($banks->nama_bank); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['bank_tujuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback">
                <strong><?php echo e($message); ?></strong>
              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <label for="Tanggal Transfer">Tanggal Transfer</label>
            <input type="text" name="tgl_transfer" class="form-control pickadate <?php $__errorArgs = ['tgl_transfer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tanggal Transfer">
            <?php $__errorArgs = ['tgl_transfer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback">
                <strong><?php echo e($message); ?></strong>
              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <label for="Jumlah">Jumlah</label>
            <input type="text" value="<?php echo e(rupiah($transaksi->harga_total)); ?>" class="form-control" placeholder="Jumlah" readonly disabled>
          </div>

          <div class="form-group">
            <label for="Jumlah">File Bukti Transfer</label>
            <input type="file" class="form-control <?php $__errorArgs = ['bukti_bayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="bukti_bayar">
            <?php $__errorArgs = ['bukti_bayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback">
                <strong><?php echo e($message); ?></strong>
              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/user/payment/show.blade.php ENDPATH**/ ?>