<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
    
        <div class="container">
    
                <h1><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></h1>
                <h2><?php echo e(Auth::user()->hand); ?> Hand</h2>
                <h3>Playing off <?php echo e(Auth::user()->handicap); ?></h3>

                
                
                        <div class="row">
                                <div class="col-6 col-md">
                                        <h4><?php echo e(number_format($career_fir_total, 2)); ?>%</h4>
                                        <p>Fairways in regulation</p>
                                </div>   
                                <div class="col-6 col-md">
                                        <h4><?php echo e(number_format($career_gir_total, 2)); ?>%</h4>
                                        <p>Greens in regulation</p>
                                </div> 
                                <div class="col-6 col-md">
                                        <h4><?php echo e(number_format($career_pph_total, 2)); ?>%</h4>
                                        <p>Putts per hole</p>
                                </div>   
                                <div class="col-6 col-md">
                                        <h4><?php echo e(number_format($career_scramble_total, 2)); ?>%</h4>
                                        <p>Scrambling</p>
                                </div>                                                                                                                                                          
                        </div>
               
                

                <table class="table">

                        <tr>
                                <td>Date</td>
                                <td>Course</td>
                                <td>Par</td>
                                <td>Score</td>
                                <td>+/-</td>
                                <td>Putts</td>                                
                                <td>PPH</td>
                                <td>FIR</td>
                                <td>GIR</td>
                                <td>Drops</td>
                                <td>Scrambling</td>
                        </tr>

                <?php $__currentLoopData = $rounds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $round_result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

                        <tr>
                                <td><?php echo e($round_result->round_date->format('d/m/Y')); ?></td>
                                <td><?php echo e($round_result->property_name); ?> <?php echo e($round_result->course_name); ?></td>
                                <td><?php echo e($round_result->total_par); ?></td>
                                <td><?php echo e($round_result->total_score); ?></td>
                                <td>                                
                                        <?php if($round_result->plus_minus > 0): ?>
                                                +<?php echo e($round_result->plus_minus); ?>

                                        <?php else: ?>
                                                <?php echo e($round_result->plus_minus); ?>

                                        <?php endif; ?>                                                                                                                        
                                </td>
                                <td><?php echo e($round_result->total_putts); ?></td>
                                <td><?php echo e(number_format($round_result->putts_per_hole, 2)); ?></td>
                                <td><?php echo e(number_format($round_result->fir_percentage, 2)); ?>%</td>
                                <td><?php echo e(number_format($round_result->gir_percentage, 2)); ?>%</td>
                                <td><?php echo e($round_result->total_drops); ?></td>
                                <td><?php echo e(number_format($round_result->scrambling, 2)); ?>%</td>
                        </tr>                        

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>


        </div>
        <!--/.container -->




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>