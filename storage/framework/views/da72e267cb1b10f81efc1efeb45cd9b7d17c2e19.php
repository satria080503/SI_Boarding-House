<?php $__env->startSection('title'); ?>
  Kost-Able - Login Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-lg-6 col-12 p-0">
    <div class="card rounded-0 mb-0 px-2">
        <div class="card-header pb-1">
            <div class="card-title">
                <h4 class="mb-0" style="text-align: center">Temukan Kos Impianmu</h4>
            </div>
        </div>
        
        <div class="card-content mb-2">
            <div class="card-body pt-1">
                <form action="<?php echo e(route('login')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                        <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value=" <?php echo e(old("email")); ?> " id="email" placeholder="Masukan Email Kamu ...">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                          </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-control-position">
                            <i class="feather icon-user"></i>
                        </div>
                        <label for="user-name">Email</label>
                    </fieldset>

                    <fieldset class="form-label-group position-relative has-icon-left">
                        <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" placeholder="Password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                          </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-control-position">
                            <i class="feather icon-lock"></i>
                        </div>
                        <label for="user-password">Password</label>
                    </fieldset>
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <div class="text-left">
                            <fieldset class="checkbox">
                                <div class="vs-checkbox-con vs-checkbox-primary">
                                    <input type="checkbox">
                                    <span class="vs-checkbox">
                                        <span class="vs-checkbox--check">
                                            <i class="vs-icon feather icon-check"></i>
                                        </span>
                                    </span>
                                    <span class="">Remember me</span>
                                </div>
                            </fieldset>
                        </div>
                        <div class="text-right"><a href="/" class="card-link">Lupa Password ?</a></div>
                    </div>
                    <a href="<?php echo e(route('register')); ?>" class="btn btn-outline-primary float-left btn-inline">Register</a>
                    <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                </form>
            </div>
        </div>
        <div class="login-footer">
            <div class="divider">
                <div class="divider-text"><i class="feather icon-home"></i></div>
            </div>
            <div class="footer-btn d-inline">
                
                <a href="/"><h5 style="text-align: center">Kembali</h5></a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papikos\resources\views/auth/login.blade.php ENDPATH**/ ?>