<?php $__env->startSection('content'); ?>


                <h1><?php echo e(__('Add Course')); ?></h1>

                    <form method="POST" action="<?php echo e(route('add_course')); ?>" aria-label="<?php echo e(__('Add Course')); ?>">
                        <?php echo csrf_field(); ?>

                    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>