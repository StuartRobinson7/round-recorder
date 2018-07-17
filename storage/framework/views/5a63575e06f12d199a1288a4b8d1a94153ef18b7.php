<?php $__env->startSection('title', 'Add Player'); ?>

<?php $__env->startSection('content'); ?>
    
        <h1><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></h1>
        <h2><?php echo e(Auth::user()->hand); ?> Hand</h2>
        <h3>Playing off <?php echo e(Auth::user()->handicap); ?></h3>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>