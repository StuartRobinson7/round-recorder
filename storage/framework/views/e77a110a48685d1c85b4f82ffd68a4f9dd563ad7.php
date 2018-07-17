<?php $__env->startSection('content'); ?>


                <h1><?php echo e(__('Add Course')); ?></h1>

                    <form method="POST" action="<?php echo e(route('add_course')); ?>" aria-label="<?php echo e(__('Add Course')); ?>">
                        <?php echo csrf_field(); ?>


                        <label>Property Name</label>
                        <input id="property_name" type="text" class="form-control<?php echo e($errors->has('property_name') ? ' is-invalid' : ''); ?>" name="property_name" value="<?php echo e(old('property_name')); ?>">

                        <label>Course Name</label>
                        <input id="course_name" type="text" class="form-control<?php echo e($errors->has('course_name') ? ' is-invalid' : ''); ?>" name="course_name" value="<?php echo e(old('course_name')); ?>">

                        <label>Course Rating</label>
                        <input id="course_rating" type="text" class="form-control<?php echo e($errors->has('course_rating') ? ' is-invalid' : ''); ?>" name="course_rating" value="<?php echo e(old('course_rating')); ?>">

                        <label>Course Slope</label>
                        <input id="course_slope" type="text" class="form-control<?php echo e($errors->has('course_slope') ? ' is-invalid' : ''); ?>" name="course_slope" value="<?php echo e(old('course_slope')); ?>">                                                                        

                        <table>

                            <tr>
                                <th>Hole</th>
                                <th>Whites</th>
                                <th>Yellows</th>
                                <th>Par</th>
                                <th>Stroke Index</th>
                                <th>Reds</th>
                                <th>Red Par</th>
                                <th>Red Stroke Index</th>
                            </tr>

                            
                            <tr>
                                <td>1</td>
                                <td><input id="hole_1_whites" type="text" class="form-control<?php echo e($errors->has('hole_1_whites') ? ' is-invalid' : ''); ?>" name="hole_1_whites" value="<?php echo e(old('hole_1_whites')); ?>"></td>
                                <td><input id="hole_1_yellows" type="text" class="form-control<?php echo e($errors->has('hole_1_yellows') ? ' is-invalid' : ''); ?>" name="hole_1_yellows" value="<?php echo e(old('hole_1_yellows')); ?>"></td>
                                <td><input id="hole_1_par" type="text" class="form-control<?php echo e($errors->has('hole_1_par') ? ' is-invalid' : ''); ?>" name="hole_1_par" value="<?php echo e(old('hole_1_par')); ?>"></td>
                                <td><input id="hole_1_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_1_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_1_stroke_index" value="<?php echo e(old('hole_1_stroke_index')); ?>"></td>
                                <td><input id="hole_1_reds" type="text" class="form-control<?php echo e($errors->has('hole_1_reds') ? ' is-invalid' : ''); ?>" name="hole_1_reds" value="<?php echo e(old('hole_1_reds')); ?>"></td>
                                <td><input id="hole_1_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_1_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_1_ladies_par" value="<?php echo e(old('hole_1_ladies_par')); ?>"></td>
                                <td><input id="hole_1_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_1_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_1_ladies_stroke_index" value="<?php echo e(old('hole_1_ladies_stroke_index')); ?>"></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td><input id="hole_2_whites" type="text" class="form-control<?php echo e($errors->has('hole_2_whites') ? ' is-invalid' : ''); ?>" name="hole_2_whites" value="<?php echo e(old('hole_2_whites')); ?>"></td>
                                <td><input id="hole_2_yellows" type="text" class="form-control<?php echo e($errors->has('hole_2_yellows') ? ' is-invalid' : ''); ?>" name="hole_2_yellows" value="<?php echo e(old('hole_2_yellows')); ?>"></td>
                                <td><input id="hole_2_par" type="text" class="form-control<?php echo e($errors->has('hole_2_par') ? ' is-invalid' : ''); ?>" name="hole_2_par" value="<?php echo e(old('hole_2_par')); ?>"></td>
                                <td><input id="hole_2_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_2_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_2_stroke_index" value="<?php echo e(old('hole_2_stroke_index')); ?>"></td>
                                <td><input id="hole_2_reds" type="text" class="form-control<?php echo e($errors->has('hole_2_reds') ? ' is-invalid' : ''); ?>" name="hole_2_reds" value="<?php echo e(old('hole_2_reds')); ?>"></td>
                                <td><input id="hole_2_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_2_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_2_ladies_par" value="<?php echo e(old('hole_2_ladies_par')); ?>"></td>
                                <td><input id="hole_2_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_2_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_2_ladies_stroke_index" value="<?php echo e(old('hole_2_ladies_stroke_index')); ?>"></td>
                            </tr>                        

                            <tr>
                                <td>3</td>
                                <td><input id="hole_3_whites" type="text" class="form-control<?php echo e($errors->has('hole_3_whites') ? ' is-invalid' : ''); ?>" name="hole_3_whites" value="<?php echo e(old('hole_3_whites')); ?>"></td>
                                <td><input id="hole_3_yellows" type="text" class="form-control<?php echo e($errors->has('hole_3_yellows') ? ' is-invalid' : ''); ?>" name="hole_3_yellows" value="<?php echo e(old('hole_3_yellows')); ?>"></td>
                                <td><input id="hole_3_par" type="text" class="form-control<?php echo e($errors->has('hole_3_par') ? ' is-invalid' : ''); ?>" name="hole_3_par" value="<?php echo e(old('hole_3_par')); ?>"></td>
                                <td><input id="hole_3_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_3_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_3_stroke_index" value="<?php echo e(old('hole_3_stroke_index')); ?>"></td>
                                <td><input id="hole_3_reds" type="text" class="form-control<?php echo e($errors->has('hole_3_reds') ? ' is-invalid' : ''); ?>" name="hole_3_reds" value="<?php echo e(old('hole_3_reds')); ?>"></td>
                                <td><input id="hole_3_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_3_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_3_ladies_par" value="<?php echo e(old('hole_3_ladies_par')); ?>"></td>
                                <td><input id="hole_3_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_3_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_3_ladies_stroke_index" value="<?php echo e(old('hole_3_ladies_stroke_index')); ?>"></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td><input id="hole_4_whites" type="text" class="form-control<?php echo e($errors->has('hole_4_whites') ? ' is-invalid' : ''); ?>" name="hole_4_whites" value="<?php echo e(old('hole_4_whites')); ?>"></td>
                                <td><input id="hole_4_yellows" type="text" class="form-control<?php echo e($errors->has('hole_4_yellows') ? ' is-invalid' : ''); ?>" name="hole_4_yellows" value="<?php echo e(old('hole_4_yellows')); ?>"></td>
                                <td><input id="hole_4_par" type="text" class="form-control<?php echo e($errors->has('hole_4_par') ? ' is-invalid' : ''); ?>" name="hole_4_par" value="<?php echo e(old('hole_4_par')); ?>"></td>
                                <td><input id="hole_4_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_4_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_4_stroke_index" value="<?php echo e(old('hole_4_stroke_index')); ?>"></td>
                                <td><input id="hole_4_reds" type="text" class="form-control<?php echo e($errors->has('hole_4_reds') ? ' is-invalid' : ''); ?>" name="hole_4_reds" value="<?php echo e(old('hole_4_reds')); ?>"></td>
                                <td><input id="hole_4_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_4_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_4_ladies_par" value="<?php echo e(old('hole_4_ladies_par')); ?>"></td>
                                <td><input id="hole_4_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_4_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_4_ladies_stroke_index" value="<?php echo e(old('hole_4_ladies_stroke_index')); ?>"></td>
                            </tr>     

                            <tr>
                                <td>5</td>
                                <td><input id="hole_5_whites" type="text" class="form-control<?php echo e($errors->has('hole_5_whites') ? ' is-invalid' : ''); ?>" name="hole_5_whites" value="<?php echo e(old('hole_5_whites')); ?>"></td>
                                <td><input id="hole_5_yellows" type="text" class="form-control<?php echo e($errors->has('hole_5_yellows') ? ' is-invalid' : ''); ?>" name="hole_5_yellows" value="<?php echo e(old('hole_5_yellows')); ?>"></td>
                                <td><input id="hole_5_par" type="text" class="form-control<?php echo e($errors->has('hole_5_par') ? ' is-invalid' : ''); ?>" name="hole_5_par" value="<?php echo e(old('hole_5_par')); ?>"></td>
                                <td><input id="hole_5_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_5_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_5_stroke_index" value="<?php echo e(old('hole_5_stroke_index')); ?>"></td>
                                <td><input id="hole_5_reds" type="text" class="form-control<?php echo e($errors->has('hole_5_reds') ? ' is-invalid' : ''); ?>" name="hole_5_reds" value="<?php echo e(old('hole_5_reds')); ?>"></td>
                                <td><input id="hole_5_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_5_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_5_ladies_par" value="<?php echo e(old('hole_5_ladies_par')); ?>"></td>
                                <td><input id="hole_5_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_5_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_5_ladies_stroke_index" value="<?php echo e(old('hole_5_ladies_stroke_index')); ?>"></td>
                            </tr>                                           
                            
                            <tr>
                                <td>6</td>
                                <td><input id="hole_6_whites" type="text" class="form-control<?php echo e($errors->has('hole_6_whites') ? ' is-invalid' : ''); ?>" name="hole_6_whites" value="<?php echo e(old('hole_6_whites')); ?>"></td>
                                <td><input id="hole_6_yellows" type="text" class="form-control<?php echo e($errors->has('hole_6_yellows') ? ' is-invalid' : ''); ?>" name="hole_6_yellows" value="<?php echo e(old('hole_6_yellows')); ?>"></td>
                                <td><input id="hole_6_par" type="text" class="form-control<?php echo e($errors->has('hole_6_par') ? ' is-invalid' : ''); ?>" name="hole_6_par" value="<?php echo e(old('hole_6_par')); ?>"></td>
                                <td><input id="hole_6_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_6_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_6_stroke_index" value="<?php echo e(old('hole_6_stroke_index')); ?>"></td>
                                <td><input id="hole_6_reds" type="text" class="form-control<?php echo e($errors->has('hole_6_reds') ? ' is-invalid' : ''); ?>" name="hole_6_reds" value="<?php echo e(old('hole_6_reds')); ?>"></td>
                                <td><input id="hole_6_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_6_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_6_ladies_par" value="<?php echo e(old('hole_6_ladies_par')); ?>"></td>
                                <td><input id="hole_6_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_6_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_6_ladies_stroke_index" value="<?php echo e(old('hole_6_ladies_stroke_index')); ?>"></td>
                            </tr>                        
                            
                            <tr>
                                <td>7</td>
                                <td><input id="hole_7_whites" type="text" class="form-control<?php echo e($errors->has('hole_7_whites') ? ' is-invalid' : ''); ?>" name="hole_7_whites" value="<?php echo e(old('hole_7_whites')); ?>"></td>
                                <td><input id="hole_7_yellows" type="text" class="form-control<?php echo e($errors->has('hole_7_yellows') ? ' is-invalid' : ''); ?>" name="hole_7_yellows" value="<?php echo e(old('hole_7_yellows')); ?>"></td>
                                <td><input id="hole_7_par" type="text" class="form-control<?php echo e($errors->has('hole_7_par') ? ' is-invalid' : ''); ?>" name="hole_7_par" value="<?php echo e(old('hole_7_par')); ?>"></td>
                                <td><input id="hole_7_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_7_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_7_stroke_index" value="<?php echo e(old('hole_7_stroke_index')); ?>"></td>
                                <td><input id="hole_7_reds" type="text" class="form-control<?php echo e($errors->has('hole_7_reds') ? ' is-invalid' : ''); ?>" name="hole_7_reds" value="<?php echo e(old('hole_7_reds')); ?>"></td>
                                <td><input id="hole_7_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_7_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_7_ladies_par" value="<?php echo e(old('hole_7_ladies_par')); ?>"></td>
                                <td><input id="hole_7_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_7_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_7_ladies_stroke_index" value="<?php echo e(old('hole_7_ladies_stroke_index')); ?>"></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td><input id="hole_8_whites" type="text" class="form-control<?php echo e($errors->has('hole_8_whites') ? ' is-invalid' : ''); ?>" name="hole_8_whites" value="<?php echo e(old('hole_8_whites')); ?>"></td>
                                <td><input id="hole_8_yellows" type="text" class="form-control<?php echo e($errors->has('hole_8_yellows') ? ' is-invalid' : ''); ?>" name="hole_8_yellows" value="<?php echo e(old('hole_8_yellows')); ?>"></td>
                                <td><input id="hole_8_par" type="text" class="form-control<?php echo e($errors->has('hole_8_par') ? ' is-invalid' : ''); ?>" name="hole_8_par" value="<?php echo e(old('hole_8_par')); ?>"></td>
                                <td><input id="hole_8_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_8_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_8_stroke_index" value="<?php echo e(old('hole_8_stroke_index')); ?>"></td>
                                <td><input id="hole_8_reds" type="text" class="form-control<?php echo e($errors->has('hole_8_reds') ? ' is-invalid' : ''); ?>" name="hole_8_reds" value="<?php echo e(old('hole_8_reds')); ?>"></td>
                                <td><input id="hole_8_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_8_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_8_ladies_par" value="<?php echo e(old('hole_8_ladies_par')); ?>"></td>
                                <td><input id="hole_8_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_8_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_8_ladies_stroke_index" value="<?php echo e(old('hole_8_ladies_stroke_index')); ?>"></td>
                            </tr>     

                            <tr>
                                <td>9</td>
                                <td><input id="hole_9_whites" type="text" class="form-control<?php echo e($errors->has('hole_9_whites') ? ' is-invalid' : ''); ?>" name="hole_9_whites" value="<?php echo e(old('hole_9_whites')); ?>"></td>
                                <td><input id="hole_9_yellows" type="text" class="form-control<?php echo e($errors->has('hole_9_yellows') ? ' is-invalid' : ''); ?>" name="hole_9_yellows" value="<?php echo e(old('hole_9_yellows')); ?>"></td>
                                <td><input id="hole_9_par" type="text" class="form-control<?php echo e($errors->has('hole_9_par') ? ' is-invalid' : ''); ?>" name="hole_9_par" value="<?php echo e(old('hole_9_par')); ?>"></td>
                                <td><input id="hole_9_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_9_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_9_stroke_index" value="<?php echo e(old('hole_9_stroke_index')); ?>"></td>
                                <td><input id="hole_9_reds" type="text" class="form-control<?php echo e($errors->has('hole_9_reds') ? ' is-invalid' : ''); ?>" name="hole_9_reds" value="<?php echo e(old('hole_9_reds')); ?>"></td>
                                <td><input id="hole_9_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_9_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_9_ladies_par" value="<?php echo e(old('hole_9_ladies_par')); ?>"></td>
                                <td><input id="hole_9_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_9_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_9_ladies_stroke_index" value="<?php echo e(old('hole_9_ladies_stroke_index')); ?>"></td>
                            </tr>       

                            <tr>
                                <td>10</td>
                                <td><input id="hole_10_whites" type="text" class="form-control<?php echo e($errors->has('hole_10_whites') ? ' is-invalid' : ''); ?>" name="hole_10_whites" value="<?php echo e(old('hole_10_whites')); ?>"></td>
                                <td><input id="hole_10_yellows" type="text" class="form-control<?php echo e($errors->has('hole_10_yellows') ? ' is-invalid' : ''); ?>" name="hole_10_yellows" value="<?php echo e(old('hole_10_yellows')); ?>"></td>
                                <td><input id="hole_10_par" type="text" class="form-control<?php echo e($errors->has('hole_10_par') ? ' is-invalid' : ''); ?>" name="hole_10_par" value="<?php echo e(old('hole_10_par')); ?>"></td>
                                <td><input id="hole_10_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_10_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_10_stroke_index" value="<?php echo e(old('hole_10_stroke_index')); ?>"></td>
                                <td><input id="hole_10_reds" type="text" class="form-control<?php echo e($errors->has('hole_10_reds') ? ' is-invalid' : ''); ?>" name="hole_10_reds" value="<?php echo e(old('hole_10_reds')); ?>"></td>
                                <td><input id="hole_10_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_10_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_10_ladies_par" value="<?php echo e(old('hole_10_ladies_par')); ?>"></td>
                                <td><input id="hole_10_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_10_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_10_ladies_stroke_index" value="<?php echo e(old('hole_10_ladies_stroke_index')); ?>"></td>
                            </tr>      

                            <tr>
                                <td>11</td>
                                <td><input id="hole_11_whites" type="text" class="form-control<?php echo e($errors->has('hole_11_whites') ? ' is-invalid' : ''); ?>" name="hole_11_whites" value="<?php echo e(old('hole_11_whites')); ?>"></td>
                                <td><input id="hole_11_yellows" type="text" class="form-control<?php echo e($errors->has('hole_11_yellows') ? ' is-invalid' : ''); ?>" name="hole_11_yellows" value="<?php echo e(old('hole_11_yellows')); ?>"></td>
                                <td><input id="hole_11_par" type="text" class="form-control<?php echo e($errors->has('hole_11_par') ? ' is-invalid' : ''); ?>" name="hole_11_par" value="<?php echo e(old('hole_11_par')); ?>"></td>
                                <td><input id="hole_11_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_11_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_11_stroke_index" value="<?php echo e(old('hole_11_stroke_index')); ?>"></td>
                                <td><input id="hole_11_reds" type="text" class="form-control<?php echo e($errors->has('hole_11_reds') ? ' is-invalid' : ''); ?>" name="hole_11_reds" value="<?php echo e(old('hole_11_reds')); ?>"></td>
                                <td><input id="hole_11_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_11_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_11_ladies_par" value="<?php echo e(old('hole_11_ladies_par')); ?>"></td>
                                <td><input id="hole_11_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_11_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_11_ladies_stroke_index" value="<?php echo e(old('hole_11_ladies_stroke_index')); ?>"></td>
                            </tr>                                                                              

                            <tr>
                                <td>12</td>
                                <td><input id="hole_12_whites" type="text" class="form-control<?php echo e($errors->has('hole_12_whites') ? ' is-invalid' : ''); ?>" name="hole_12_whites" value="<?php echo e(old('hole_12_whites')); ?>"></td>
                                <td><input id="hole_12_yellows" type="text" class="form-control<?php echo e($errors->has('hole_12_yellows') ? ' is-invalid' : ''); ?>" name="hole_12_yellows" value="<?php echo e(old('hole_12_yellows')); ?>"></td>
                                <td><input id="hole_12_par" type="text" class="form-control<?php echo e($errors->has('hole_12_par') ? ' is-invalid' : ''); ?>" name="hole_12_par" value="<?php echo e(old('hole_12_par')); ?>"></td>
                                <td><input id="hole_12_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_12_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_12_stroke_index" value="<?php echo e(old('hole_12_stroke_index')); ?>"></td>
                                <td><input id="hole_12_reds" type="text" class="form-control<?php echo e($errors->has('hole_12_reds') ? ' is-invalid' : ''); ?>" name="hole_12_reds" value="<?php echo e(old('hole_12_reds')); ?>"></td>
                                <td><input id="hole_12_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_12_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_12_ladies_par" value="<?php echo e(old('hole_12_ladies_par')); ?>"></td>
                                <td><input id="hole_12_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_12_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_12_ladies_stroke_index" value="<?php echo e(old('hole_12_ladies_stroke_index')); ?>"></td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td><input id="hole_13_whites" type="text" class="form-control<?php echo e($errors->has('hole_13_whites') ? ' is-invalid' : ''); ?>" name="hole_13_whites" value="<?php echo e(old('hole_13_whites')); ?>"></td>
                                <td><input id="hole_13_yellows" type="text" class="form-control<?php echo e($errors->has('hole_13_yellows') ? ' is-invalid' : ''); ?>" name="hole_13_yellows" value="<?php echo e(old('hole_13_yellows')); ?>"></td>
                                <td><input id="hole_13_par" type="text" class="form-control<?php echo e($errors->has('hole_13_par') ? ' is-invalid' : ''); ?>" name="hole_13_par" value="<?php echo e(old('hole_13_par')); ?>"></td>
                                <td><input id="hole_13_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_13_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_13_stroke_index" value="<?php echo e(old('hole_13_stroke_index')); ?>"></td>
                                <td><input id="hole_13_reds" type="text" class="form-control<?php echo e($errors->has('hole_13_reds') ? ' is-invalid' : ''); ?>" name="hole_13_reds" value="<?php echo e(old('hole_13_reds')); ?>"></td>
                                <td><input id="hole_13_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_13_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_13_ladies_par" value="<?php echo e(old('hole_13_ladies_par')); ?>"></td>
                                <td><input id="hole_13_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_13_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_13_ladies_stroke_index" value="<?php echo e(old('hole_13_ladies_stroke_index')); ?>"></td>
                            </tr>         

                            <tr>
                                <td>14</td>
                                <td><input id="hole_14_whites" type="text" class="form-control<?php echo e($errors->has('hole_14_whites') ? ' is-invalid' : ''); ?>" name="hole_14_whites" value="<?php echo e(old('hole_14_whites')); ?>"></td>
                                <td><input id="hole_14_yellows" type="text" class="form-control<?php echo e($errors->has('hole_14_yellows') ? ' is-invalid' : ''); ?>" name="hole_14_yellows" value="<?php echo e(old('hole_14_yellows')); ?>"></td>
                                <td><input id="hole_14_par" type="text" class="form-control<?php echo e($errors->has('hole_14_par') ? ' is-invalid' : ''); ?>" name="hole_14_par" value="<?php echo e(old('hole_14_par')); ?>"></td>
                                <td><input id="hole_14_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_14_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_14_stroke_index" value="<?php echo e(old('hole_14_stroke_index')); ?>"></td>
                                <td><input id="hole_14_reds" type="text" class="form-control<?php echo e($errors->has('hole_14_reds') ? ' is-invalid' : ''); ?>" name="hole_14_reds" value="<?php echo e(old('hole_14_reds')); ?>"></td>
                                <td><input id="hole_14_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_14_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_14_ladies_par" value="<?php echo e(old('hole_14_ladies_par')); ?>"></td>
                                <td><input id="hole_14_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_14_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_14_ladies_stroke_index" value="<?php echo e(old('hole_14_ladies_stroke_index')); ?>"></td>
                            </tr>             

                            <tr>
                                <td>15</td>
                                <td><input id="hole_15_whites" type="text" class="form-control<?php echo e($errors->has('hole_15_whites') ? ' is-invalid' : ''); ?>" name="hole_15_whites" value="<?php echo e(old('hole_15_whites')); ?>"></td>
                                <td><input id="hole_15_yellows" type="text" class="form-control<?php echo e($errors->has('hole_15_yellows') ? ' is-invalid' : ''); ?>" name="hole_15_yellows" value="<?php echo e(old('hole_15_yellows')); ?>"></td>
                                <td><input id="hole_15_par" type="text" class="form-control<?php echo e($errors->has('hole_15_par') ? ' is-invalid' : ''); ?>" name="hole_15_par" value="<?php echo e(old('hole_15_par')); ?>"></td>
                                <td><input id="hole_15_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_15_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_15_stroke_index" value="<?php echo e(old('hole_15_stroke_index')); ?>"></td>
                                <td><input id="hole_15_reds" type="text" class="form-control<?php echo e($errors->has('hole_15_reds') ? ' is-invalid' : ''); ?>" name="hole_15_reds" value="<?php echo e(old('hole_15_reds')); ?>"></td>
                                <td><input id="hole_15_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_15_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_15_ladies_par" value="<?php echo e(old('hole_15_ladies_par')); ?>"></td>
                                <td><input id="hole_15_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_15_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_15_ladies_stroke_index" value="<?php echo e(old('hole_15_ladies_stroke_index')); ?>"></td>
                            </tr>     

                            <tr>
                                <td>16</td>
                                <td><input id="hole_16_whites" type="text" class="form-control<?php echo e($errors->has('hole_16_whites') ? ' is-invalid' : ''); ?>" name="hole_16_whites" value="<?php echo e(old('hole_16_whites')); ?>"></td>
                                <td><input id="hole_16_yellows" type="text" class="form-control<?php echo e($errors->has('hole_16_yellows') ? ' is-invalid' : ''); ?>" name="hole_16_yellows" value="<?php echo e(old('hole_16_yellows')); ?>"></td>
                                <td><input id="hole_16_par" type="text" class="form-control<?php echo e($errors->has('hole_16_par') ? ' is-invalid' : ''); ?>" name="hole_16_par" value="<?php echo e(old('hole_16_par')); ?>"></td>
                                <td><input id="hole_16_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_16_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_16_stroke_index" value="<?php echo e(old('hole_16_stroke_index')); ?>"></td>
                                <td><input id="hole_16_reds" type="text" class="form-control<?php echo e($errors->has('hole_16_reds') ? ' is-invalid' : ''); ?>" name="hole_16_reds" value="<?php echo e(old('hole_16_reds')); ?>"></td>
                                <td><input id="hole_16_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_16_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_16_ladies_par" value="<?php echo e(old('hole_16_ladies_par')); ?>"></td>
                                <td><input id="hole_16_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_16_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_16_ladies_stroke_index" value="<?php echo e(old('hole_16_ladies_stroke_index')); ?>"></td>
                            </tr>        

                            <tr>
                                <td>17</td>
                                <td><input id="hole_17_whites" type="text" class="form-control<?php echo e($errors->has('hole_17_whites') ? ' is-invalid' : ''); ?>" name="hole_17_whites" value="<?php echo e(old('hole_17_whites')); ?>"></td>
                                <td><input id="hole_17_yellows" type="text" class="form-control<?php echo e($errors->has('hole_17_yellows') ? ' is-invalid' : ''); ?>" name="hole_17_yellows" value="<?php echo e(old('hole_17_yellows')); ?>"></td>
                                <td><input id="hole_17_par" type="text" class="form-control<?php echo e($errors->has('hole_17_par') ? ' is-invalid' : ''); ?>" name="hole_17_par" value="<?php echo e(old('hole_17_par')); ?>"></td>
                                <td><input id="hole_17_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_17_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_17_stroke_index" value="<?php echo e(old('hole_17_stroke_index')); ?>"></td>
                                <td><input id="hole_17_reds" type="text" class="form-control<?php echo e($errors->has('hole_17_reds') ? ' is-invalid' : ''); ?>" name="hole_17_reds" value="<?php echo e(old('hole_17_reds')); ?>"></td>
                                <td><input id="hole_17_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_17_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_17_ladies_par" value="<?php echo e(old('hole_17_ladies_par')); ?>"></td>
                                <td><input id="hole_17_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_17_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_17_ladies_stroke_index" value="<?php echo e(old('hole_17_ladies_stroke_index')); ?>"></td>
                            </tr>        

                            <tr>
                                <td>18</td>
                                <td><input id="hole_18_whites" type="text" class="form-control<?php echo e($errors->has('hole_18_whites') ? ' is-invalid' : ''); ?>" name="hole_18_whites" value="<?php echo e(old('hole_18_whites')); ?>"></td>
                                <td><input id="hole_18_yellows" type="text" class="form-control<?php echo e($errors->has('hole_18_yellows') ? ' is-invalid' : ''); ?>" name="hole_18_yellows" value="<?php echo e(old('hole_18_yellows')); ?>"></td>
                                <td><input id="hole_18_par" type="text" class="form-control<?php echo e($errors->has('hole_18_par') ? ' is-invalid' : ''); ?>" name="hole_18_par" value="<?php echo e(old('hole_18_par')); ?>"></td>
                                <td><input id="hole_18_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_18_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_18_stroke_index" value="<?php echo e(old('hole_18_stroke_index')); ?>"></td>
                                <td><input id="hole_18_reds" type="text" class="form-control<?php echo e($errors->has('hole_18_reds') ? ' is-invalid' : ''); ?>" name="hole_18_reds" value="<?php echo e(old('hole_18_reds')); ?>"></td>
                                <td><input id="hole_18_ladies_par" type="text" class="form-control<?php echo e($errors->has('hole_18_ladies_par') ? ' is-invalid' : ''); ?>" name="hole_18_ladies_par" value="<?php echo e(old('hole_18_ladies_par')); ?>"></td>
                                <td><input id="hole_18_ladies_stroke_index" type="text" class="form-control<?php echo e($errors->has('hole_18_ladies_stroke_index') ? ' is-invalid' : ''); ?>" name="hole_18_ladies_stroke_index" value="<?php echo e(old('hole_18_ladies_stroke_index')); ?>"></td>
                            </tr>                                                                                                     
                        
                        </table>

                        <button type="submit" class="btn btn-primary">
                            <?php echo e(__('Add Course')); ?>

                        </button>

                    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>