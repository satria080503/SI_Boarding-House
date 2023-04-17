
<?php $__env->startSection('title','Update Promo Kosan'); ?>
<?php $__env->startSection('content'); ?>
<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Update Promo Kosan  </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="<?php echo e(route('kamar.promo.update', $kamar->id)); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <?php echo method_field('PUT'); ?>
              <div class="form-body ">
                <div class="row">
                  <div class="col-sm-6">
                      <label class="col-form-label">Pilih Kamar Kosan</label>
                      <input type="text" class="form-control" value="<?php echo e($kamar->kamar->nama_kamar); ?>" disabled>
                  </div>

                  <div class="col-sm-3">
                      <label class="col-form-label">Harga Kamar Saat Ini</label>
                      <input type="text" class="form-control" value="<?php echo e(rupiah($kamar->kamar->harga_kamar)); ?>" disabled>
                      <?php $__errorArgs = ['harga_promo'];
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

                  <div class="col-sm-3">
                      <label class="col-form-label">Harga Kamar Promo</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['harga_promo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="harga_promo" value=" <?php echo e($kamar->harga_promo); ?> " placeholder="Rp.">
                      <?php $__errorArgs = ['harga_promo'];
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

                  <div class="col-sm-6">
                      <label class="col-form-label">Tanggal Mulai</label>
                      <input type="date" class="form-control pickadate <?php $__errorArgs = ['start_date_promo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="start_date_promo" placeholder="Tanggal Mulai">
                      <?php $__errorArgs = ['start_date_promo'];
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

                  <div class="col-sm-6">
                      <label class="col-form-label">Tanggal Berakhir</label>
                      <input type="date" class="form-control pickadate <?php $__errorArgs = ['end_date_promo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="end_date_promo" placeholder="Tanggal Berakhir">
                      <?php $__errorArgs = ['end_date_promo'];
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

                  <div class="col-sm-12">
                      <label class="col-form-label">Keterangan</label>
                      <textarea name="keterangan" class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="4"></textarea>
                      <?php $__errorArgs = ['keterangan'];
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
                </div>
                <div class="form-group row ">
                    <div class="col-sm-10 mt-1">
                        <button type="submit" class="btn btn-primary">Update Promo</button>
                        <a href="<?php echo e(route('kamar.promo')); ?>" class="btn btn-warning">Batal</a>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/pemilik/kamar/promoEdit.blade.php ENDPATH**/ ?>