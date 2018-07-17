<?php $__env->startSection('title', 'Add Player'); ?>

<?php $__env->startSection('content'); ?>
    
            <table class="table" style="width:100%">
                <thead>
                    <tr>    
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Handicap</th>
                        <th>Right/Left Handed</th>                 
                    </tr>                
                </thead>
                <tbody>
                <?php $__currentLoopData = $player; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>    
                        <th><?php echo e($data->id); ?></th>
                        <th><?php echo e($data->first_name); ?></th>
                        <th><?php echo e($data->last_name); ?></th>
                        <th><?php echo e($data->handicap); ?></th>
                        <th><?php echo e($data->hand); ?></th>                 
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>