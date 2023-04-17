<?php $__env->startSection('title'); ?>
  Tulis Review
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Tulis Review Kosan</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="<?php echo e(url('user/review-proses',$review->key)); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="form-body ">
                <div class="row">
                  <div class="col-sm-12">
                      <label class="col-form-label">Nama Kosan</label>
                      <input type="text" class="form-control" value=" <?php echo e($review->kamar->nama_kamar); ?>" disabled>
                  </div>
                  <div class="col-sm-6">
                      <label class="col-form-label">Tanggal Mulai</label>
                      <input type="text" class="form-control" value=" <?php echo e($review->tgl_sewa); ?>" disabled>
                  </div>

                  <div class="col-sm-6">
                      <label class="col-form-label">Tanggal Berakhir</label>
                      <input type="text" class="form-control" value=" <?php echo e($review->end_date_sewa); ?>" disabled>
                  </div>

                  <div class="col-sm-12">
                      <label class="col-form-label">Ulasan Kamar/kosan</label>
                      <textarea name="ulasan" class="form-control <?php $__errorArgs = ['ulasan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="4"></textarea>
                      <?php $__errorArgs = ['ulasan'];
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
                        <button type="submit" class="btn btn-primary">Tulis Review</button>
                        <a href="<?php echo e(url('user/myroom')); ?>" class="btn btn-warning">Batal</a>
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

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/user/kamar/ulasan.blade.php ENDPATH**/ ?>