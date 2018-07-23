<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\User::creating(function($model){
            $model->handicap = ($model->handicap) ?: '540';
        });

        \App\Course::creating(function($model){

            $model->course_rating = ($model->course_rating) ?: '72';
            $model->course_slope = ($model->course_slope) ?: '80';

            $model->hole_1_whites = ($model->hole_1_whites) ?: '0';
            $model->hole_2_whites = ($model->hole_2_whites) ?: '0';
            $model->hole_3_whites = ($model->hole_3_whites) ?: '0';
            $model->hole_4_whites = ($model->hole_4_whites) ?: '0';
            $model->hole_5_whites = ($model->hole_5_whites) ?: '0';
            $model->hole_6_whites = ($model->hole_6_whites) ?: '0';
            $model->hole_7_whites = ($model->hole_7_whites) ?: '0';
            $model->hole_8_whites = ($model->hole_8_whites) ?: '0';
            $model->hole_9_whites = ($model->hole_9_whites) ?: '0';
            $model->hole_10_whites = ($model->hole_10_whites) ?: '0';
            $model->hole_11_whites = ($model->hole_11_whites) ?: '0';
            $model->hole_12_whites = ($model->hole_12_whites) ?: '0';
            $model->hole_13_whites = ($model->hole_13_whites) ?: '0';
            $model->hole_14_whites = ($model->hole_14_whites) ?: '0';
            $model->hole_15_whites = ($model->hole_15_whites) ?: '0';
            $model->hole_16_whites = ($model->hole_16_whites) ?: '0';
            $model->hole_17_whites = ($model->hole_17_whites) ?: '0';
            $model->hole_18_whites = ($model->hole_18_whites) ?: '0';  
            
            $model->hole_1_yellows = ($model->hole_1_yellows) ?: '0';
            $model->hole_2_yellows = ($model->hole_2_yellows) ?: '0';
            $model->hole_3_yellows = ($model->hole_3_yellows) ?: '0';
            $model->hole_4_yellows = ($model->hole_4_yellows) ?: '0';
            $model->hole_5_yellows = ($model->hole_5_yellows) ?: '0';
            $model->hole_6_yellows = ($model->hole_6_yellows) ?: '0';
            $model->hole_7_yellows = ($model->hole_7_yellows) ?: '0';
            $model->hole_8_yellows = ($model->hole_8_yellows) ?: '0';
            $model->hole_9_yellows = ($model->hole_9_yellows) ?: '0';
            $model->hole_10_yellows = ($model->hole_10_yellows) ?: '0';
            $model->hole_11_yellows = ($model->hole_11_yellows) ?: '0';
            $model->hole_12_yellows = ($model->hole_12_yellows) ?: '0';
            $model->hole_13_yellows = ($model->hole_13_yellows) ?: '0';
            $model->hole_14_yellows = ($model->hole_14_yellows) ?: '0';
            $model->hole_15_yellows = ($model->hole_15_yellows) ?: '0';
            $model->hole_16_yellows = ($model->hole_16_yellows) ?: '0';
            $model->hole_17_yellows = ($model->hole_17_yellows) ?: '0';
            $model->hole_18_yellows = ($model->hole_18_yellows) ?: '0';  
            
            $model->hole_1_par = ($model->hole_1_par) ?: '0';
            $model->hole_2_par = ($model->hole_2_par) ?: '0';
            $model->hole_3_par = ($model->hole_3_par) ?: '0';
            $model->hole_4_par = ($model->hole_4_par) ?: '0';
            $model->hole_5_par = ($model->hole_5_par) ?: '0';
            $model->hole_6_par = ($model->hole_6_par) ?: '0';
            $model->hole_7_par = ($model->hole_7_par) ?: '0';
            $model->hole_8_par = ($model->hole_8_par) ?: '0';
            $model->hole_9_par = ($model->hole_9_par) ?: '0';
            $model->hole_10_par = ($model->hole_10_par) ?: '0';
            $model->hole_11_par = ($model->hole_11_par) ?: '0';
            $model->hole_12_par = ($model->hole_12_par) ?: '0';
            $model->hole_13_par = ($model->hole_13_par) ?: '0';
            $model->hole_14_par = ($model->hole_14_par) ?: '0';
            $model->hole_15_par = ($model->hole_15_par) ?: '0';
            $model->hole_16_par = ($model->hole_16_par) ?: '0';
            $model->hole_17_par = ($model->hole_17_par) ?: '0';
            $model->hole_18_par = ($model->hole_18_par) ?: '0'; 
            
            $model->hole_1_stroke_index = ($model->hole_1_stroke_index) ?: '0';
            $model->hole_2_stroke_index = ($model->hole_2_stroke_index) ?: '0';
            $model->hole_3_stroke_index = ($model->hole_3_stroke_index) ?: '0';
            $model->hole_4_stroke_index = ($model->hole_4_stroke_index) ?: '0';
            $model->hole_5_stroke_index = ($model->hole_5_stroke_index) ?: '0';
            $model->hole_6_stroke_index = ($model->hole_6_stroke_index) ?: '0';
            $model->hole_7_stroke_index = ($model->hole_7_stroke_index) ?: '0';
            $model->hole_8_stroke_index = ($model->hole_8_stroke_index) ?: '0';
            $model->hole_9_stroke_index = ($model->hole_9_stroke_index) ?: '0';
            $model->hole_10_stroke_index = ($model->hole_10_stroke_index) ?: '0';
            $model->hole_11_stroke_index = ($model->hole_11_stroke_index) ?: '0';
            $model->hole_12_stroke_index = ($model->hole_12_stroke_index) ?: '0';
            $model->hole_13_stroke_index = ($model->hole_13_stroke_index) ?: '0';
            $model->hole_14_stroke_index = ($model->hole_14_stroke_index) ?: '0';
            $model->hole_15_stroke_index = ($model->hole_15_stroke_index) ?: '0';
            $model->hole_16_stroke_index = ($model->hole_16_stroke_index) ?: '0';
            $model->hole_17_stroke_index = ($model->hole_17_stroke_index) ?: '0';
            $model->hole_18_stroke_index = ($model->hole_18_stroke_index) ?: '0';             

            $model->hole_1_reds = ($model->hole_1_reds) ?: '0';
            $model->hole_2_reds = ($model->hole_2_reds) ?: '0';
            $model->hole_3_reds = ($model->hole_3_reds) ?: '0';
            $model->hole_4_reds = ($model->hole_4_reds) ?: '0';
            $model->hole_5_reds = ($model->hole_5_reds) ?: '0';
            $model->hole_6_reds = ($model->hole_6_reds) ?: '0';
            $model->hole_7_reds = ($model->hole_7_reds) ?: '0';
            $model->hole_8_reds = ($model->hole_8_reds) ?: '0';
            $model->hole_9_reds = ($model->hole_9_reds) ?: '0';
            $model->hole_10_reds = ($model->hole_10_reds) ?: '0';
            $model->hole_11_reds = ($model->hole_11_reds) ?: '0';
            $model->hole_12_reds = ($model->hole_12_reds) ?: '0';
            $model->hole_13_reds = ($model->hole_13_reds) ?: '0';
            $model->hole_14_reds = ($model->hole_14_reds) ?: '0';
            $model->hole_15_reds = ($model->hole_15_reds) ?: '0';
            $model->hole_16_reds = ($model->hole_16_reds) ?: '0';
            $model->hole_17_reds = ($model->hole_17_reds) ?: '0';
            $model->hole_18_reds = ($model->hole_18_reds) ?: '0';
            
            $model->hole_1_ladies_par = ($model->hole_1_ladies_par) ?: '0';
            $model->hole_2_ladies_par = ($model->hole_2_ladies_par) ?: '0';
            $model->hole_3_ladies_par = ($model->hole_3_ladies_par) ?: '0';
            $model->hole_4_ladies_par = ($model->hole_4_ladies_par) ?: '0';
            $model->hole_5_ladies_par = ($model->hole_5_ladies_par) ?: '0';
            $model->hole_6_ladies_par = ($model->hole_6_ladies_par) ?: '0';
            $model->hole_7_ladies_par = ($model->hole_7_ladies_par) ?: '0';
            $model->hole_8_ladies_par = ($model->hole_8_ladies_par) ?: '0';
            $model->hole_9_ladies_par = ($model->hole_9_ladies_par) ?: '0';
            $model->hole_10_ladies_par = ($model->hole_10_ladies_par) ?: '0';
            $model->hole_11_ladies_par = ($model->hole_11_ladies_par) ?: '0';
            $model->hole_12_ladies_par = ($model->hole_12_ladies_par) ?: '0';
            $model->hole_13_ladies_par = ($model->hole_13_ladies_par) ?: '0';
            $model->hole_14_ladies_par = ($model->hole_14_ladies_par) ?: '0';
            $model->hole_15_ladies_par = ($model->hole_15_ladies_par) ?: '0';
            $model->hole_16_ladies_par = ($model->hole_16_ladies_par) ?: '0';
            $model->hole_17_ladies_par = ($model->hole_17_ladies_par) ?: '0';
            $model->hole_18_ladies_par = ($model->hole_18_ladies_par) ?: '0'; 
            
            $model->hole_1_ladies_stroke_index = ($model->hole_1_ladies_stroke_index) ?: '0';
            $model->hole_2_ladies_stroke_index = ($model->hole_2_ladies_stroke_index) ?: '0';
            $model->hole_3_ladies_stroke_index = ($model->hole_3_ladies_stroke_index) ?: '0';
            $model->hole_4_ladies_stroke_index = ($model->hole_4_ladies_stroke_index) ?: '0';
            $model->hole_5_ladies_stroke_index = ($model->hole_5_ladies_stroke_index) ?: '0';
            $model->hole_6_ladies_stroke_index = ($model->hole_6_ladies_stroke_index) ?: '0';
            $model->hole_7_ladies_stroke_index = ($model->hole_7_ladies_stroke_index) ?: '0';
            $model->hole_8_ladies_stroke_index = ($model->hole_8_ladies_stroke_index) ?: '0';
            $model->hole_9_ladies_stroke_index = ($model->hole_9_ladies_stroke_index) ?: '0';
            $model->hole_10_ladies_stroke_index = ($model->hole_10_ladies_stroke_index) ?: '0';
            $model->hole_11_ladies_stroke_index = ($model->hole_11_ladies_stroke_index) ?: '0';
            $model->hole_12_ladies_stroke_index = ($model->hole_12_ladies_stroke_index) ?: '0';
            $model->hole_13_ladies_stroke_index = ($model->hole_13_ladies_stroke_index) ?: '0';
            $model->hole_14_ladies_stroke_index = ($model->hole_14_ladies_stroke_index) ?: '0';
            $model->hole_15_ladies_stroke_index = ($model->hole_15_ladies_stroke_index) ?: '0';
            $model->hole_16_ladies_stroke_index = ($model->hole_16_ladies_stroke_index) ?: '0';
            $model->hole_17_ladies_stroke_index = ($model->hole_17_ladies_stroke_index) ?: '0';
            $model->hole_18_ladies_stroke_index = ($model->hole_18_ladies_stroke_index) ?: '0';               

        });


        \App\Round::creating(function($model){
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
            
            $model->round_notes = ($model->round_notes) ?: '';
                                         
        });        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
