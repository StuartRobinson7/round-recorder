<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>" aria-label="<?php echo e(__('Register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('First Name')); ?></label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" name="first_name" value="<?php echo e(old('first_name')); ?>" required autofocus>

                                <?php if($errors->has('first_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('first_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Last Name')); ?></label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" name="last_name" value="<?php echo e(old('last_name')); ?>" required autofocus>

                                <?php if($errors->has('last_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>        

                        <div class="form-group row">
                            <label for="hand" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>

                            <div class="col-md-6">
                                <select id="gender" class="form-control" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="none-specific">None Specific</option>
                                </select>
                            </div>
                        </div>                                            

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="handicap" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Handicap')); ?></label>

                            <div class="col-md-6">
                                <input id="handicap" class="form-control" name="handicap" min="0" max="54" type="number" step="00.1">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="hand" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Right/Left Handed')); ?></label>

                            <div class="col-md-6">
                                <select id="hand" class="form-control" name="hand" required>
                                    <option value="right">Right</option>
                                    <option value="left">Left</option>
                                </select>
                            </div>
                        </div>                                               

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>