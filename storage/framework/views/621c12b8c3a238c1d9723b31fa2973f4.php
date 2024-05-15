<!-- resources/views/login.blade.php -->



<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white"><?php echo e(__('Login')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('site.login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="email" class="text-muted"><?php echo e(__('Email')); ?></label>
                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-muted"><?php echo e(__('Password')); ?></label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                <?php echo e(__('Login')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alunos\Desktop\app_super_gestao\resources\views/site/login.blade.php ENDPATH**/ ?>