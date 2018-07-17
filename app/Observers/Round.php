<?php

namespace App\Observers;

use App\Round;

class RoundObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\Round  $user
     * @return void
     */
    public function created(Round $round)
    {
        $model->hole_1_drops = ($model->hole_1_drops) ?: '0';
        $model->hole_2_drops = ($model->hole_2_drops) ?: '0';
        $model->hole_3_drops = ($model->hole_3_drops) ?: '0';
        $model->hole_4_drops = ($model->hole_4_drops) ?: '0';
        $model->hole_5_drops = ($model->hole_5_drops) ?: '0';
        $model->hole_6_drops = ($model->hole_6_drops) ?: '0';
        $model->hole_7_drops = ($model->hole_7_drops) ?: '0';
        $model->hole_8_drops = ($model->hole_8_drops) ?: '0';
        $model->hole_9_drops = ($model->hole_9_drops) ?: '0';
        $model->hole_10_drops = ($model->hole_10_drops) ?: '0';
        $model->hole_11_drops = ($model->hole_11_drops) ?: '0';
        $model->hole_12_drops = ($model->hole_12_drops) ?: '0';
        $model->hole_13_drops = ($model->hole_13_drops) ?: '0';
        $model->hole_14_drops = ($model->hole_14_drops) ?: '0';
        $model->hole_15_drops = ($model->hole_15_drops) ?: '0';
        $model->hole_16_drops = ($model->hole_16_drops) ?: '0';
        $model->hole_17_drops = ($model->hole_17_drops) ?: '0';
        $model->hole_18_drops = ($model->hole_18_drops) ?: '0';
        
        $model->hole_1_putts = ($model->hole_1_putts) ?: '0';
        $model->hole_2_putts = ($model->hole_2_putts) ?: '0';
        $model->hole_3_putts = ($model->hole_3_putts) ?: '0';
        $model->hole_4_putts = ($model->hole_4_putts) ?: '0';
        $model->hole_5_putts = ($model->hole_5_putts) ?: '0';
        $model->hole_6_putts = ($model->hole_6_putts) ?: '0';
        $model->hole_7_putts = ($model->hole_7_putts) ?: '0';
        $model->hole_8_putts = ($model->hole_8_putts) ?: '0';
        $model->hole_9_putts = ($model->hole_9_putts) ?: '0';
        $model->hole_10_putts = ($model->hole_10_putts) ?: '0';
        $model->hole_11_putts = ($model->hole_11_putts) ?: '0';
        $model->hole_12_putts = ($model->hole_12_putts) ?: '0';
        $model->hole_13_putts = ($model->hole_13_putts) ?: '0';
        $model->hole_14_putts = ($model->hole_14_putts) ?: '0';
        $model->hole_15_putts = ($model->hole_15_putts) ?: '0';
        $model->hole_16_putts = ($model->hole_16_putts) ?: '0';
        $model->hole_17_putts = ($model->hole_17_putts) ?: '0';
        $model->hole_18_putts = ($model->hole_18_putts) ?: '0'; 
        
        $model->hole_1_score = ($model->hole_1_score) ?: '10';
        $model->hole_2_score = ($model->hole_2_score) ?: '10';
        $model->hole_3_score = ($model->hole_3_score) ?: '10';
        $model->hole_4_score = ($model->hole_4_score) ?: '10';
        $model->hole_5_score = ($model->hole_5_score) ?: '10';
        $model->hole_6_score = ($model->hole_6_score) ?: '10';
        $model->hole_7_score = ($model->hole_7_score) ?: '10';
        $model->hole_8_score = ($model->hole_8_score) ?: '10';
        $model->hole_9_score = ($model->hole_9_score) ?: '10';
        $model->hole_10_score = ($model->hole_10_score) ?: '10';
        $model->hole_11_score = ($model->hole_11_score) ?: '10';
        $model->hole_12_score = ($model->hole_12_score) ?: '10';
        $model->hole_13_score = ($model->hole_13_score) ?: '10';
        $model->hole_14_score = ($model->hole_14_score) ?: '10';
        $model->hole_15_score = ($model->hole_15_score) ?: '10';
        $model->hole_16_score = ($model->hole_16_score) ?: '10';
        $model->hole_17_score = ($model->hole_17_score) ?: '10';
        $model->hole_18_score = ($model->hole_18_score) ?: '10';  

        $model->hole_1_fir = ($model->hole_1_fir) ?: '0';
        $model->hole_2_fir = ($model->hole_2_fir) ?: '0';
        $model->hole_3_fir = ($model->hole_3_fir) ?: '0';
        $model->hole_4_fir = ($model->hole_4_fir) ?: '0';
        $model->hole_5_fir = ($model->hole_5_fir) ?: '0';
        $model->hole_6_fir = ($model->hole_6_fir) ?: '0';
        $model->hole_7_fir = ($model->hole_7_fir) ?: '0';
        $model->hole_8_fir = ($model->hole_8_fir) ?: '0';
        $model->hole_9_fir = ($model->hole_9_fir) ?: '0';
        $model->hole_10_fir = ($model->hole_10_fir) ?: '0';
        $model->hole_11_fir = ($model->hole_11_fir) ?: '0';
        $model->hole_12_fir = ($model->hole_12_fir) ?: '0';
        $model->hole_13_fir = ($model->hole_13_fir) ?: '0';
        $model->hole_14_fir = ($model->hole_14_fir) ?: '0';
        $model->hole_15_fir = ($model->hole_15_fir) ?: '0';
        $model->hole_16_fir = ($model->hole_16_fir) ?: '0';
        $model->hole_17_fir = ($model->hole_17_fir) ?: '0';
        $model->hole_18_fir = ($model->hole_18_fir) ?: '0';            
        
        $model->hole_1_gir = ($model->hole_1_gir) ?: '0';
        $model->hole_2_gir = ($model->hole_2_gir) ?: '0';
        $model->hole_3_gir = ($model->hole_3_gir) ?: '0';
        $model->hole_4_gir = ($model->hole_4_gir) ?: '0';
        $model->hole_5_gir = ($model->hole_5_gir) ?: '0';
        $model->hole_6_gir = ($model->hole_6_gir) ?: '0';
        $model->hole_7_gir = ($model->hole_7_gir) ?: '0';
        $model->hole_8_gir = ($model->hole_8_gir) ?: '0';
        $model->hole_9_gir = ($model->hole_9_gir) ?: '0';
        $model->hole_10_gir = ($model->hole_10_gir) ?: '0';
        $model->hole_11_gir = ($model->hole_11_gir) ?: '0';
        $model->hole_12_gir = ($model->hole_12_gir) ?: '0';
        $model->hole_13_gir = ($model->hole_13_gir) ?: '0';
        $model->hole_14_gir = ($model->hole_14_gir) ?: '0';
        $model->hole_15_gir = ($model->hole_15_gir) ?: '0';
        $model->hole_16_gir = ($model->hole_16_gir) ?: '0';
        $model->hole_17_gir = ($model->hole_17_gir) ?: '0';
        $model->hole_18_gir = ($model->hole_18_gir) ?: '0'; 
            
    }  

}
