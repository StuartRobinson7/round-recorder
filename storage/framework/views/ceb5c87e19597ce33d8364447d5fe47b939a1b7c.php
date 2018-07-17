<?php $__env->startSection('title', 'Course List'); ?>

<?php $__env->startSection('content'); ?>
    
        <div class="container">

            <table class="table" style="width:100%">
                <thead>
                    <tr>    
                        <th>ID</th>
                        <th>Property Name</th>
                        <th>Course Name</th>
                        <th>Course Rating</th>
                        <th>Course Slope</th>                 
                    </tr>                
                </thead>
                <tbody>
                <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>    
                        <th><?php echo e($data->id); ?></th>
                        <th><?php echo e($data->property_name); ?></th>
                        <th><?php echo e($data->course_name); ?></th>
                        <th><?php echo e($data->course_rating); ?></th>
                        <th><?php echo e($data->course_slope); ?></th>                 
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>    

        </div>
        <!--/.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>