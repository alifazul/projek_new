<?php $__env->startSection('content'); ?>
<div class="d-md-flex half">
        <div class="bg" style="background-image: url('logreg/images/bg_1.jpg');"></div>
        <div class="contents">
            <div class="container">
                <div class="align-items-center justify-content-center">
                    <div class="text-center setapa">
                        <h1 class="setheader">GrowthSpace</h1>
                        <p class="setlogin"><strong>LOGIN</strong></p>
                        <p class="setp">Silahkan login terlebih dahulu disini</p>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <form action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                                <div class="form-group first">
                                    <label for="email"><b>Email Address</b></label>
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="your-email@gmail.com" autofocus>
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
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password"><b>Password</b></label>
                                    <input type="password" placeholder="Your Password" id="password"  class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" >
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
                                </div>
                                <div class="d-sm-flex mb-3 align-items-center">
                                <?php if(Route::has('password.request')): ?>
                                    <span class="ml-auto">
                                    <a href="<?php echo e(route('password.request')); ?>" class="forgot-pass">Lupa Password</a>
                                    </span>
                                <?php endif; ?>
                                </div>
                                <input type="submit" value="LOGIN" class="btn btn-primary">
                                <div class="d-sm-flex align-items-center setlink">
                                    <span class="mx-auto"><span class="setreg">Belum Memiliki Akun?</span><a href="#" class="link-reg">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.templatelogreg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projek_new\resources\views/auth/login.blade.php ENDPATH**/ ?>