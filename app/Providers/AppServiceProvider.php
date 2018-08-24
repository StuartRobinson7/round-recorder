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

            $model->first_nine_name = ($model->first_nine_name) ?: 'First Nine';
            $model->second_nine_name = ($model->second_nine_name) ?: 'Second Nine';
            $model->third_nine_name = ($model->third_nine_name) ?: 'Third Nine';

            $model->hole_1_white = ($model->hole_1_white) ?: '0';
            $model->hole_1_white_par = ($model->hole_1_white_par) ?: '0';
            $model->hole_1_white_stroke_index = ($model->hole_1_white_stroke_index) ?: '0';
            $model->hole_1_yellow = ($model->hole_1_yellow) ?: '0';
            $model->hole_1_yellow_par = ($model->hole_1_yellow_par) ?: '0';
            $model->hole_1_yellow_stroke_index = ($model->hole_1_yellow_stroke_index) ?: '0'; 
            $model->hole_1_red = ($model->hole_1_red) ?: '0';
            $model->hole_1_red_par = ($model->hole_1_red_par) ?: '0';
            $model->hole_1_red_stroke_index = ($model->hole_1_red_stroke_index) ?: '0'; 
            
            $model->hole_2_white = ($model->hole_2_white) ?: '0';
            $model->hole_2_white_par = ($model->hole_2_white_par) ?: '0';
            $model->hole_2_white_stroke_index = ($model->hole_2_white_stroke_index) ?: '0';
            $model->hole_2_yellow = ($model->hole_2_yellow) ?: '0';
            $model->hole_2_yellow_par = ($model->hole_2_yellow_par) ?: '0';
            $model->hole_2_yellow_stroke_index = ($model->hole_2_yellow_stroke_index) ?: '0'; 
            $model->hole_2_red = ($model->hole_2_red) ?: '0';
            $model->hole_2_red_par = ($model->hole_2_red_par) ?: '0';
            $model->hole_2_red_stroke_index = ($model->hole_2_red_stroke_index) ?: '0';  
            
            $model->hole_3_white = ($model->hole_3_white) ?: '0';
            $model->hole_3_white_par = ($model->hole_3_white_par) ?: '0';
            $model->hole_3_white_stroke_index = ($model->hole_3_white_stroke_index) ?: '0';
            $model->hole_3_yellow = ($model->hole_3_yellow) ?: '0';
            $model->hole_3_yellow_par = ($model->hole_3_yellow_par) ?: '0';
            $model->hole_3_yellow_stroke_index = ($model->hole_3_yellow_stroke_index) ?: '0'; 
            $model->hole_3_red = ($model->hole_3_red) ?: '0';
            $model->hole_3_red_par = ($model->hole_3_red_par) ?: '0';
            $model->hole_3_red_stroke_index = ($model->hole_3_red_stroke_index) ?: '0';  
            
            $model->hole_4_white = ($model->hole_4_white) ?: '0';
            $model->hole_4_white_par = ($model->hole_4_white_par) ?: '0';
            $model->hole_4_white_stroke_index = ($model->hole_4_white_stroke_index) ?: '0';
            $model->hole_4_yellow = ($model->hole_4_yellow) ?: '0';
            $model->hole_4_yellow_par = ($model->hole_4_yellow_par) ?: '0';
            $model->hole_4_yellow_stroke_index = ($model->hole_4_yellow_stroke_index) ?: '0'; 
            $model->hole_4_red = ($model->hole_4_red) ?: '0';
            $model->hole_4_red_par = ($model->hole_4_red_par) ?: '0';
            $model->hole_4_red_stroke_index = ($model->hole_4_red_stroke_index) ?: '0';   
            
            $model->hole_5_white = ($model->hole_5_white) ?: '0';
            $model->hole_5_white_par = ($model->hole_5_white_par) ?: '0';
            $model->hole_5_white_stroke_index = ($model->hole_5_white_stroke_index) ?: '0';
            $model->hole_5_yellow = ($model->hole_5_yellow) ?: '0';
            $model->hole_5_yellow_par = ($model->hole_5_yellow_par) ?: '0';
            $model->hole_5_yellow_stroke_index = ($model->hole_5_yellow_stroke_index) ?: '0'; 
            $model->hole_5_red = ($model->hole_5_red) ?: '0';
            $model->hole_5_red_par = ($model->hole_5_red_par) ?: '0';
            $model->hole_5_red_stroke_index = ($model->hole_5_red_stroke_index) ?: '0'; 
            
            $model->hole_6_white = ($model->hole_6_white) ?: '0';
            $model->hole_6_white_par = ($model->hole_6_white_par) ?: '0';
            $model->hole_6_white_stroke_index = ($model->hole_6_white_stroke_index) ?: '0';
            $model->hole_6_yellow = ($model->hole_6_yellow) ?: '0';
            $model->hole_6_yellow_par = ($model->hole_6_yellow_par) ?: '0';
            $model->hole_6_yellow_stroke_index = ($model->hole_6_yellow_stroke_index) ?: '0'; 
            $model->hole_6_red = ($model->hole_6_red) ?: '0';
            $model->hole_6_red_par = ($model->hole_6_red_par) ?: '0';
            $model->hole_6_red_stroke_index = ($model->hole_6_red_stroke_index) ?: '0'; 
            
            $model->hole_7_white = ($model->hole_7_white) ?: '0';
            $model->hole_7_white_par = ($model->hole_7_white_par) ?: '0';
            $model->hole_7_white_stroke_index = ($model->hole_7_white_stroke_index) ?: '0';
            $model->hole_7_yellow = ($model->hole_7_yellow) ?: '0';
            $model->hole_7_yellow_par = ($model->hole_7_yellow_par) ?: '0';
            $model->hole_7_yellow_stroke_index = ($model->hole_7_yellow_stroke_index) ?: '0'; 
            $model->hole_7_red = ($model->hole_7_red) ?: '0';
            $model->hole_7_red_par = ($model->hole_7_red_par) ?: '0';
            $model->hole_7_red_stroke_index = ($model->hole_7_red_stroke_index) ?: '0';    
            
            $model->hole_8_white = ($model->hole_8_white) ?: '0';
            $model->hole_8_white_par = ($model->hole_8_white_par) ?: '0';
            $model->hole_8_white_stroke_index = ($model->hole_8_white_stroke_index) ?: '0';
            $model->hole_8_yellow = ($model->hole_8_yellow) ?: '0';
            $model->hole_8_yellow_par = ($model->hole_8_yellow_par) ?: '0';
            $model->hole_8_yellow_stroke_index = ($model->hole_8_yellow_stroke_index) ?: '0'; 
            $model->hole_8_red = ($model->hole_8_red) ?: '0';
            $model->hole_8_red_par = ($model->hole_8_red_par) ?: '0';
            $model->hole_8_red_stroke_index = ($model->hole_8_red_stroke_index) ?: '0';   
            
            $model->hole_9_white = ($model->hole_9_white) ?: '0';
            $model->hole_9_white_par = ($model->hole_9_white_par) ?: '0';
            $model->hole_9_white_stroke_index = ($model->hole_9_white_stroke_index) ?: '0';
            $model->hole_9_yellow = ($model->hole_9_yellow) ?: '0';
            $model->hole_9_yellow_par = ($model->hole_9_yellow_par) ?: '0';
            $model->hole_9_yellow_stroke_index = ($model->hole_9_yellow_stroke_index) ?: '0'; 
            $model->hole_9_red = ($model->hole_9_red) ?: '0';
            $model->hole_9_red_par = ($model->hole_9_red_par) ?: '0';
            $model->hole_9_red_stroke_index = ($model->hole_9_red_stroke_index) ?: '0'; 
            
            $model->hole_10_white = ($model->hole_10_white) ?: '0';
            $model->hole_10_white_par = ($model->hole_10_white_par) ?: '0';
            $model->hole_10_white_stroke_index = ($model->hole_10_white_stroke_index) ?: '0';
            $model->hole_10_yellow = ($model->hole_10_yellow) ?: '0';
            $model->hole_10_yellow_par = ($model->hole_10_yellow_par) ?: '0';
            $model->hole_10_yellow_stroke_index = ($model->hole_10_yellow_stroke_index) ?: '0'; 
            $model->hole_10_red = ($model->hole_10_red) ?: '0';
            $model->hole_10_red_par = ($model->hole_10_red_par) ?: '0';
            $model->hole_10_red_stroke_index = ($model->hole_10_red_stroke_index) ?: '0'; 
            
            $model->hole_11_white = ($model->hole_11_white) ?: '0';
            $model->hole_11_white_par = ($model->hole_11_white_par) ?: '0';
            $model->hole_11_white_stroke_index = ($model->hole_11_white_stroke_index) ?: '0';
            $model->hole_11_yellow = ($model->hole_11_yellow) ?: '0';
            $model->hole_11_yellow_par = ($model->hole_11_yellow_par) ?: '0';
            $model->hole_11_yellow_stroke_index = ($model->hole_11_yellow_stroke_index) ?: '0'; 
            $model->hole_11_red = ($model->hole_11_red) ?: '0';
            $model->hole_11_red_par = ($model->hole_11_red_par) ?: '0';
            $model->hole_11_red_stroke_index = ($model->hole_11_red_stroke_index) ?: '0';         
            
            $model->hole_12_white = ($model->hole_12_white) ?: '0';
            $model->hole_12_white_par = ($model->hole_12_white_par) ?: '0';
            $model->hole_12_white_stroke_index = ($model->hole_12_white_stroke_index) ?: '0';
            $model->hole_12_yellow = ($model->hole_12_yellow) ?: '0';
            $model->hole_12_yellow_par = ($model->hole_12_yellow_par) ?: '0';
            $model->hole_12_yellow_stroke_index = ($model->hole_12_yellow_stroke_index) ?: '0'; 
            $model->hole_12_red = ($model->hole_12_red) ?: '0';
            $model->hole_12_red_par = ($model->hole_12_red_par) ?: '0';
            $model->hole_12_red_stroke_index = ($model->hole_12_red_stroke_index) ?: '0';    
            
            $model->hole_13_white = ($model->hole_13_white) ?: '0';
            $model->hole_13_white_par = ($model->hole_13_white_par) ?: '0';
            $model->hole_13_white_stroke_index = ($model->hole_13_white_stroke_index) ?: '0';
            $model->hole_13_yellow = ($model->hole_13_yellow) ?: '0';
            $model->hole_13_yellow_par = ($model->hole_13_yellow_par) ?: '0';
            $model->hole_13_yellow_stroke_index = ($model->hole_13_yellow_stroke_index) ?: '0'; 
            $model->hole_13_red = ($model->hole_13_red) ?: '0';
            $model->hole_13_red_par = ($model->hole_13_red_par) ?: '0';
            $model->hole_13_red_stroke_index = ($model->hole_13_red_stroke_index) ?: '0';  
            
            $model->hole_14_white = ($model->hole_14_white) ?: '0';
            $model->hole_14_white_par = ($model->hole_14_white_par) ?: '0';
            $model->hole_14_white_stroke_index = ($model->hole_14_white_stroke_index) ?: '0';
            $model->hole_14_yellow = ($model->hole_14_yellow) ?: '0';
            $model->hole_14_yellow_par = ($model->hole_14_yellow_par) ?: '0';
            $model->hole_14_yellow_stroke_index = ($model->hole_14_yellow_stroke_index) ?: '0'; 
            $model->hole_14_red = ($model->hole_14_red) ?: '0';
            $model->hole_14_red_par = ($model->hole_14_red_par) ?: '0';
            $model->hole_14_red_stroke_index = ($model->hole_14_red_stroke_index) ?: '0';     
            
            $model->hole_15_white = ($model->hole_15_white) ?: '0';
            $model->hole_15_white_par = ($model->hole_15_white_par) ?: '0';
            $model->hole_15_white_stroke_index = ($model->hole_15_white_stroke_index) ?: '0';
            $model->hole_15_yellow = ($model->hole_15_yellow) ?: '0';
            $model->hole_15_yellow_par = ($model->hole_15_yellow_par) ?: '0';
            $model->hole_15_yellow_stroke_index = ($model->hole_15_yellow_stroke_index) ?: '0'; 
            $model->hole_15_red = ($model->hole_15_red) ?: '0';
            $model->hole_15_red_par = ($model->hole_15_red_par) ?: '0';
            $model->hole_15_red_stroke_index = ($model->hole_15_red_stroke_index) ?: '0';   
            
            $model->hole_16_white = ($model->hole_16_white) ?: '0';
            $model->hole_16_white_par = ($model->hole_16_white_par) ?: '0';
            $model->hole_16_white_stroke_index = ($model->hole_16_white_stroke_index) ?: '0';
            $model->hole_16_yellow = ($model->hole_16_yellow) ?: '0';
            $model->hole_16_yellow_par = ($model->hole_16_yellow_par) ?: '0';
            $model->hole_16_yellow_stroke_index = ($model->hole_16_yellow_stroke_index) ?: '0'; 
            $model->hole_16_red = ($model->hole_16_red) ?: '0';
            $model->hole_16_red_par = ($model->hole_16_red_par) ?: '0';
            $model->hole_16_red_stroke_index = ($model->hole_16_red_stroke_index) ?: '0'; 
            
            $model->hole_17_white = ($model->hole_17_white) ?: '0';
            $model->hole_17_white_par = ($model->hole_17_white_par) ?: '0';
            $model->hole_17_white_stroke_index = ($model->hole_17_white_stroke_index) ?: '0';
            $model->hole_17_yellow = ($model->hole_17_yellow) ?: '0';
            $model->hole_17_yellow_par = ($model->hole_17_yellow_par) ?: '0';
            $model->hole_17_yellow_stroke_index = ($model->hole_17_yellow_stroke_index) ?: '0'; 
            $model->hole_17_red = ($model->hole_17_red) ?: '0';
            $model->hole_17_red_par = ($model->hole_17_red_par) ?: '0';
            $model->hole_17_red_stroke_index = ($model->hole_17_red_stroke_index) ?: '0';  
            
            $model->hole_18_white = ($model->hole_18_white) ?: '0';
            $model->hole_18_white_par = ($model->hole_18_white_par) ?: '0';
            $model->hole_18_white_stroke_index = ($model->hole_18_white_stroke_index) ?: '0';
            $model->hole_18_yellow = ($model->hole_18_yellow) ?: '0';
            $model->hole_18_yellow_par = ($model->hole_18_yellow_par) ?: '0';
            $model->hole_18_yellow_stroke_index = ($model->hole_18_yellow_stroke_index) ?: '0'; 
            $model->hole_18_red = ($model->hole_18_red) ?: '0';
            $model->hole_18_red_par = ($model->hole_18_red_par) ?: '0';
            $model->hole_18_red_stroke_index = ($model->hole_18_red_stroke_index) ?: '0';             

            $model->hole_19_white = ($model->hole_19_white) ?: '0';
            $model->hole_19_white_par = ($model->hole_19_white_par) ?: '0';
            $model->hole_19_white_stroke_index_front = ($model->hole_19_white_stroke_index_front) ?: '0';
            $model->hole_19_white_stroke_index_back = ($model->hole_19_white_stroke_index_back) ?: '0';
            $model->hole_19_yellow = ($model->hole_19_yellow) ?: '0';
            $model->hole_19_yellow_par = ($model->hole_19_yellow_par) ?: '0';
            $model->hole_19_yellow_stroke_index_front = ($model->hole_19_yellow_stroke_index_front) ?: '0'; 
            $model->hole_19_yellow_stroke_index_back = ($model->hole_19_yellow_stroke_index_back) ?: '0'; 
            $model->hole_19_red = ($model->hole_19_red) ?: '0';
            $model->hole_19_red_par = ($model->hole_19_red_par) ?: '0';
            $model->hole_19_red_stroke_index_front = ($model->hole_19_red_stroke_index_front) ?: '0'; 
            $model->hole_19_red_stroke_index_back = ($model->hole_19_red_stroke_index_back) ?: '0'; 

            $model->hole_20_white = ($model->hole_20_white) ?: '0';
            $model->hole_20_white_par = ($model->hole_20_white_par) ?: '0';
            $model->hole_20_white_stroke_index_front = ($model->hole_20_white_stroke_index_front) ?: '0';
            $model->hole_20_white_stroke_index_back = ($model->hole_20_white_stroke_index_back) ?: '0';
            $model->hole_20_yellow = ($model->hole_20_yellow) ?: '0';
            $model->hole_20_yellow_par = ($model->hole_20_yellow_par) ?: '0';
            $model->hole_20_yellow_stroke_index_front = ($model->hole_20_yellow_stroke_index_front) ?: '0'; 
            $model->hole_20_yellow_stroke_index_back = ($model->hole_20_yellow_stroke_index_back) ?: '0'; 
            $model->hole_20_red = ($model->hole_20_red) ?: '0';
            $model->hole_20_red_par = ($model->hole_20_red_par) ?: '0';
            $model->hole_20_red_stroke_index_front = ($model->hole_20_red_stroke_index_front) ?: '0'; 
            $model->hole_20_red_stroke_index_back = ($model->hole_20_red_stroke_index_back) ?: '0';  
            
            $model->hole_21_white = ($model->hole_21_white) ?: '0';
            $model->hole_21_white_par = ($model->hole_21_white_par) ?: '0';
            $model->hole_21_white_stroke_index_front = ($model->hole_21_white_stroke_index_front) ?: '0';
            $model->hole_21_white_stroke_index_back = ($model->hole_21_white_stroke_index_back) ?: '0';
            $model->hole_21_yellow = ($model->hole_21_yellow) ?: '0';
            $model->hole_21_yellow_par = ($model->hole_21_yellow_par) ?: '0';
            $model->hole_21_yellow_stroke_index_front = ($model->hole_21_yellow_stroke_index_front) ?: '0'; 
            $model->hole_21_yellow_stroke_index_back = ($model->hole_21_yellow_stroke_index_back) ?: '0'; 
            $model->hole_21_red = ($model->hole_21_red) ?: '0';
            $model->hole_21_red_par = ($model->hole_21_red_par) ?: '0';
            $model->hole_21_red_stroke_index_front = ($model->hole_21_red_stroke_index_front) ?: '0'; 
            $model->hole_21_red_stroke_index_back = ($model->hole_21_red_stroke_index_back) ?: '0';    
            
            $model->hole_22_white = ($model->hole_22_white) ?: '0';
            $model->hole_22_white_par = ($model->hole_22_white_par) ?: '0';
            $model->hole_22_white_stroke_index_front = ($model->hole_22_white_stroke_index_front) ?: '0';
            $model->hole_22_white_stroke_index_back = ($model->hole_22_white_stroke_index_back) ?: '0';
            $model->hole_22_yellow = ($model->hole_22_yellow) ?: '0';
            $model->hole_22_yellow_par = ($model->hole_22_yellow_par) ?: '0';
            $model->hole_22_yellow_stroke_index_front = ($model->hole_22_yellow_stroke_index_front) ?: '0'; 
            $model->hole_22_yellow_stroke_index_back = ($model->hole_22_yellow_stroke_index_back) ?: '0'; 
            $model->hole_22_red = ($model->hole_22_red) ?: '0';
            $model->hole_22_red_par = ($model->hole_22_red_par) ?: '0';
            $model->hole_22_red_stroke_index_front = ($model->hole_22_red_stroke_index_front) ?: '0'; 
            $model->hole_22_red_stroke_index_back = ($model->hole_22_red_stroke_index_back) ?: '0';   
            
            $model->hole_23_white = ($model->hole_23_white) ?: '0';
            $model->hole_23_white_par = ($model->hole_23_white_par) ?: '0';
            $model->hole_23_white_stroke_index_front = ($model->hole_23_white_stroke_index_front) ?: '0';
            $model->hole_23_white_stroke_index_back = ($model->hole_23_white_stroke_index_back) ?: '0';
            $model->hole_23_yellow = ($model->hole_23_yellow) ?: '0';
            $model->hole_23_yellow_par = ($model->hole_23_yellow_par) ?: '0';
            $model->hole_23_yellow_stroke_index_front = ($model->hole_23_yellow_stroke_index_front) ?: '0'; 
            $model->hole_23_yellow_stroke_index_back = ($model->hole_23_yellow_stroke_index_back) ?: '0'; 
            $model->hole_23_red = ($model->hole_23_red) ?: '0';
            $model->hole_23_red_par = ($model->hole_23_red_par) ?: '0';
            $model->hole_23_red_stroke_index_front = ($model->hole_23_red_stroke_index_front) ?: '0'; 
            $model->hole_23_red_stroke_index_back = ($model->hole_23_red_stroke_index_back) ?: '0';    
            
            $model->hole_24_white = ($model->hole_24_white) ?: '0';
            $model->hole_24_white_par = ($model->hole_24_white_par) ?: '0';
            $model->hole_24_white_stroke_index_front = ($model->hole_24_white_stroke_index_front) ?: '0';
            $model->hole_24_white_stroke_index_back = ($model->hole_24_white_stroke_index_back) ?: '0';
            $model->hole_24_yellow = ($model->hole_24_yellow) ?: '0';
            $model->hole_24_yellow_par = ($model->hole_24_yellow_par) ?: '0';
            $model->hole_24_yellow_stroke_index_front = ($model->hole_24_yellow_stroke_index_front) ?: '0'; 
            $model->hole_24_yellow_stroke_index_back = ($model->hole_24_yellow_stroke_index_back) ?: '0'; 
            $model->hole_24_red = ($model->hole_24_red) ?: '0';
            $model->hole_24_red_par = ($model->hole_24_red_par) ?: '0';
            $model->hole_24_red_stroke_index_front = ($model->hole_24_red_stroke_index_front) ?: '0'; 
            $model->hole_24_red_stroke_index_back = ($model->hole_24_red_stroke_index_back) ?: '0';    
            
            $model->hole_25_white = ($model->hole_25_white) ?: '0';
            $model->hole_25_white_par = ($model->hole_25_white_par) ?: '0';
            $model->hole_25_white_stroke_index_front = ($model->hole_25_white_stroke_index_front) ?: '0';
            $model->hole_25_white_stroke_index_back = ($model->hole_25_white_stroke_index_back) ?: '0';
            $model->hole_25_yellow = ($model->hole_25_yellow) ?: '0';
            $model->hole_25_yellow_par = ($model->hole_25_yellow_par) ?: '0';
            $model->hole_25_yellow_stroke_index_front = ($model->hole_25_yellow_stroke_index_front) ?: '0'; 
            $model->hole_25_yellow_stroke_index_back = ($model->hole_25_yellow_stroke_index_back) ?: '0'; 
            $model->hole_25_red = ($model->hole_25_red) ?: '0';
            $model->hole_25_red_par = ($model->hole_25_red_par) ?: '0';
            $model->hole_25_red_stroke_index_front = ($model->hole_25_red_stroke_index_front) ?: '0'; 
            $model->hole_25_red_stroke_index_back = ($model->hole_25_red_stroke_index_back) ?: '0';    
            
            $model->hole_26_white = ($model->hole_26_white) ?: '0';
            $model->hole_26_white_par = ($model->hole_26_white_par) ?: '0';
            $model->hole_26_white_stroke_index_front = ($model->hole_26_white_stroke_index_front) ?: '0';
            $model->hole_26_white_stroke_index_back = ($model->hole_26_white_stroke_index_back) ?: '0';
            $model->hole_26_yellow = ($model->hole_26_yellow) ?: '0';
            $model->hole_26_yellow_par = ($model->hole_26_yellow_par) ?: '0';
            $model->hole_26_yellow_stroke_index_front = ($model->hole_26_yellow_stroke_index_front) ?: '0'; 
            $model->hole_26_yellow_stroke_index_back = ($model->hole_26_yellow_stroke_index_back) ?: '0'; 
            $model->hole_26_red = ($model->hole_26_red) ?: '0';
            $model->hole_26_red_par = ($model->hole_26_red_par) ?: '0';
            $model->hole_26_red_stroke_index_front = ($model->hole_26_red_stroke_index_front) ?: '0'; 
            $model->hole_26_red_stroke_index_back = ($model->hole_26_red_stroke_index_back) ?: '0';  
            
            $model->hole_27_white = ($model->hole_27_white) ?: '0';
            $model->hole_27_white_par = ($model->hole_27_white_par) ?: '0';
            $model->hole_27_white_stroke_index_front = ($model->hole_27_white_stroke_index_front) ?: '0';
            $model->hole_27_white_stroke_index_back = ($model->hole_27_white_stroke_index_back) ?: '0';
            $model->hole_27_yellow = ($model->hole_27_yellow) ?: '0';
            $model->hole_27_yellow_par = ($model->hole_27_yellow_par) ?: '0';
            $model->hole_27_yellow_stroke_index_front = ($model->hole_27_yellow_stroke_index_front) ?: '0'; 
            $model->hole_27_yellow_stroke_index_back = ($model->hole_27_yellow_stroke_index_back) ?: '0'; 
            $model->hole_27_red = ($model->hole_27_red) ?: '0';
            $model->hole_27_red_par = ($model->hole_27_red_par) ?: '0';
            $model->hole_27_red_stroke_index_front = ($model->hole_27_red_stroke_index_front) ?: '0'; 
            $model->hole_27_red_stroke_index_back = ($model->hole_27_red_stroke_index_back) ?: '0';   

            
            $par = $model->hole_1_yellow_par + $model->hole_2_yellow_par + $model->hole_3_yellow_par + $model->hole_4_yellow_par + $model->hole_5_yellow_par + $model->hole_6_yellow_par + $model->hole_7_yellow_par + $model->hole_8_yellow_par + $model->hole_9_yellow_par;

            if($model->holes > 9){
                $par = $model->hole_1_yellow_par + $model->hole_2_yellow_par + $model->hole_3_yellow_par + $model->hole_4_yellow_par + $model->hole_5_yellow_par + $model->hole_6_yellow_par + $model->hole_7_yellow_par + $model->hole_8_yellow_par + $model->hole_9_yellow_par + $model->hole_10_yellow_par + $model->hole_11_yellow_par + $model->hole_2_yellow_par + $model->hole_13_yellow_par + $model->hole_14_yellow_par + $model->hole_15_yellow_par + $model->hole_16_yellow_par + $model->hole_17_yellow_par + $model->hole_18_yellow_par;           
            }

            $model->sss = ($model->sss) ?: $par;            

        });


        \App\Course::updating(function($model){

            $model->first_nine_name = ($model->first_nine_name) ?: 'First Nine';
            $model->second_nine_name = ($model->second_nine_name) ?: 'Second Nine';
            $model->third_nine_name = ($model->third_nine_name) ?: 'Third Nine';

            $model->hole_1_white = ($model->hole_1_white) ?: '0';
            $model->hole_1_white_par = ($model->hole_1_white_par) ?: '0';
            $model->hole_1_white_stroke_index = ($model->hole_1_white_stroke_index) ?: '0';
            $model->hole_1_yellow = ($model->hole_1_yellow) ?: '0';
            $model->hole_1_yellow_par = ($model->hole_1_yellow_par) ?: '0';
            $model->hole_1_yellow_stroke_index = ($model->hole_1_yellow_stroke_index) ?: '0'; 
            $model->hole_1_red = ($model->hole_1_red) ?: '0';
            $model->hole_1_red_par = ($model->hole_1_red_par) ?: '0';
            $model->hole_1_red_stroke_index = ($model->hole_1_red_stroke_index) ?: '0'; 
            
            $model->hole_2_white = ($model->hole_2_white) ?: '0';
            $model->hole_2_white_par = ($model->hole_2_white_par) ?: '0';
            $model->hole_2_white_stroke_index = ($model->hole_2_white_stroke_index) ?: '0';
            $model->hole_2_yellow = ($model->hole_2_yellow) ?: '0';
            $model->hole_2_yellow_par = ($model->hole_2_yellow_par) ?: '0';
            $model->hole_2_yellow_stroke_index = ($model->hole_2_yellow_stroke_index) ?: '0'; 
            $model->hole_2_red = ($model->hole_2_red) ?: '0';
            $model->hole_2_red_par = ($model->hole_2_red_par) ?: '0';
            $model->hole_2_red_stroke_index = ($model->hole_2_red_stroke_index) ?: '0';  
            
            $model->hole_3_white = ($model->hole_3_white) ?: '0';
            $model->hole_3_white_par = ($model->hole_3_white_par) ?: '0';
            $model->hole_3_white_stroke_index = ($model->hole_3_white_stroke_index) ?: '0';
            $model->hole_3_yellow = ($model->hole_3_yellow) ?: '0';
            $model->hole_3_yellow_par = ($model->hole_3_yellow_par) ?: '0';
            $model->hole_3_yellow_stroke_index = ($model->hole_3_yellow_stroke_index) ?: '0'; 
            $model->hole_3_red = ($model->hole_3_red) ?: '0';
            $model->hole_3_red_par = ($model->hole_3_red_par) ?: '0';
            $model->hole_3_red_stroke_index = ($model->hole_3_red_stroke_index) ?: '0';  
            
            $model->hole_4_white = ($model->hole_4_white) ?: '0';
            $model->hole_4_white_par = ($model->hole_4_white_par) ?: '0';
            $model->hole_4_white_stroke_index = ($model->hole_4_white_stroke_index) ?: '0';
            $model->hole_4_yellow = ($model->hole_4_yellow) ?: '0';
            $model->hole_4_yellow_par = ($model->hole_4_yellow_par) ?: '0';
            $model->hole_4_yellow_stroke_index = ($model->hole_4_yellow_stroke_index) ?: '0'; 
            $model->hole_4_red = ($model->hole_4_red) ?: '0';
            $model->hole_4_red_par = ($model->hole_4_red_par) ?: '0';
            $model->hole_4_red_stroke_index = ($model->hole_4_red_stroke_index) ?: '0';   
            
            $model->hole_5_white = ($model->hole_5_white) ?: '0';
            $model->hole_5_white_par = ($model->hole_5_white_par) ?: '0';
            $model->hole_5_white_stroke_index = ($model->hole_5_white_stroke_index) ?: '0';
            $model->hole_5_yellow = ($model->hole_5_yellow) ?: '0';
            $model->hole_5_yellow_par = ($model->hole_5_yellow_par) ?: '0';
            $model->hole_5_yellow_stroke_index = ($model->hole_5_yellow_stroke_index) ?: '0'; 
            $model->hole_5_red = ($model->hole_5_red) ?: '0';
            $model->hole_5_red_par = ($model->hole_5_red_par) ?: '0';
            $model->hole_5_red_stroke_index = ($model->hole_5_red_stroke_index) ?: '0'; 
            
            $model->hole_6_white = ($model->hole_6_white) ?: '0';
            $model->hole_6_white_par = ($model->hole_6_white_par) ?: '0';
            $model->hole_6_white_stroke_index = ($model->hole_6_white_stroke_index) ?: '0';
            $model->hole_6_yellow = ($model->hole_6_yellow) ?: '0';
            $model->hole_6_yellow_par = ($model->hole_6_yellow_par) ?: '0';
            $model->hole_6_yellow_stroke_index = ($model->hole_6_yellow_stroke_index) ?: '0'; 
            $model->hole_6_red = ($model->hole_6_red) ?: '0';
            $model->hole_6_red_par = ($model->hole_6_red_par) ?: '0';
            $model->hole_6_red_stroke_index = ($model->hole_6_red_stroke_index) ?: '0'; 
            
            $model->hole_7_white = ($model->hole_7_white) ?: '0';
            $model->hole_7_white_par = ($model->hole_7_white_par) ?: '0';
            $model->hole_7_white_stroke_index = ($model->hole_7_white_stroke_index) ?: '0';
            $model->hole_7_yellow = ($model->hole_7_yellow) ?: '0';
            $model->hole_7_yellow_par = ($model->hole_7_yellow_par) ?: '0';
            $model->hole_7_yellow_stroke_index = ($model->hole_7_yellow_stroke_index) ?: '0'; 
            $model->hole_7_red = ($model->hole_7_red) ?: '0';
            $model->hole_7_red_par = ($model->hole_7_red_par) ?: '0';
            $model->hole_7_red_stroke_index = ($model->hole_7_red_stroke_index) ?: '0';    
            
            $model->hole_8_white = ($model->hole_8_white) ?: '0';
            $model->hole_8_white_par = ($model->hole_8_white_par) ?: '0';
            $model->hole_8_white_stroke_index = ($model->hole_8_white_stroke_index) ?: '0';
            $model->hole_8_yellow = ($model->hole_8_yellow) ?: '0';
            $model->hole_8_yellow_par = ($model->hole_8_yellow_par) ?: '0';
            $model->hole_8_yellow_stroke_index = ($model->hole_8_yellow_stroke_index) ?: '0'; 
            $model->hole_8_red = ($model->hole_8_red) ?: '0';
            $model->hole_8_red_par = ($model->hole_8_red_par) ?: '0';
            $model->hole_8_red_stroke_index = ($model->hole_8_red_stroke_index) ?: '0';   
            
            $model->hole_9_white = ($model->hole_9_white) ?: '0';
            $model->hole_9_white_par = ($model->hole_9_white_par) ?: '0';
            $model->hole_9_white_stroke_index = ($model->hole_9_white_stroke_index) ?: '0';
            $model->hole_9_yellow = ($model->hole_9_yellow) ?: '0';
            $model->hole_9_yellow_par = ($model->hole_9_yellow_par) ?: '0';
            $model->hole_9_yellow_stroke_index = ($model->hole_9_yellow_stroke_index) ?: '0'; 
            $model->hole_9_red = ($model->hole_9_red) ?: '0';
            $model->hole_9_red_par = ($model->hole_9_red_par) ?: '0';
            $model->hole_9_red_stroke_index = ($model->hole_9_red_stroke_index) ?: '0'; 
            
            $model->hole_10_white = ($model->hole_10_white) ?: '0';
            $model->hole_10_white_par = ($model->hole_10_white_par) ?: '0';
            $model->hole_10_white_stroke_index = ($model->hole_10_white_stroke_index) ?: '0';
            $model->hole_10_yellow = ($model->hole_10_yellow) ?: '0';
            $model->hole_10_yellow_par = ($model->hole_10_yellow_par) ?: '0';
            $model->hole_10_yellow_stroke_index = ($model->hole_10_yellow_stroke_index) ?: '0'; 
            $model->hole_10_red = ($model->hole_10_red) ?: '0';
            $model->hole_10_red_par = ($model->hole_10_red_par) ?: '0';
            $model->hole_10_red_stroke_index = ($model->hole_10_red_stroke_index) ?: '0'; 
            
            $model->hole_11_white = ($model->hole_11_white) ?: '0';
            $model->hole_11_white_par = ($model->hole_11_white_par) ?: '0';
            $model->hole_11_white_stroke_index = ($model->hole_11_white_stroke_index) ?: '0';
            $model->hole_11_yellow = ($model->hole_11_yellow) ?: '0';
            $model->hole_11_yellow_par = ($model->hole_11_yellow_par) ?: '0';
            $model->hole_11_yellow_stroke_index = ($model->hole_11_yellow_stroke_index) ?: '0'; 
            $model->hole_11_red = ($model->hole_11_red) ?: '0';
            $model->hole_11_red_par = ($model->hole_11_red_par) ?: '0';
            $model->hole_11_red_stroke_index = ($model->hole_11_red_stroke_index) ?: '0';         
            
            $model->hole_12_white = ($model->hole_12_white) ?: '0';
            $model->hole_12_white_par = ($model->hole_12_white_par) ?: '0';
            $model->hole_12_white_stroke_index = ($model->hole_12_white_stroke_index) ?: '0';
            $model->hole_12_yellow = ($model->hole_12_yellow) ?: '0';
            $model->hole_12_yellow_par = ($model->hole_12_yellow_par) ?: '0';
            $model->hole_12_yellow_stroke_index = ($model->hole_12_yellow_stroke_index) ?: '0'; 
            $model->hole_12_red = ($model->hole_12_red) ?: '0';
            $model->hole_12_red_par = ($model->hole_12_red_par) ?: '0';
            $model->hole_12_red_stroke_index = ($model->hole_12_red_stroke_index) ?: '0';    
            
            $model->hole_13_white = ($model->hole_13_white) ?: '0';
            $model->hole_13_white_par = ($model->hole_13_white_par) ?: '0';
            $model->hole_13_white_stroke_index = ($model->hole_13_white_stroke_index) ?: '0';
            $model->hole_13_yellow = ($model->hole_13_yellow) ?: '0';
            $model->hole_13_yellow_par = ($model->hole_13_yellow_par) ?: '0';
            $model->hole_13_yellow_stroke_index = ($model->hole_13_yellow_stroke_index) ?: '0'; 
            $model->hole_13_red = ($model->hole_13_red) ?: '0';
            $model->hole_13_red_par = ($model->hole_13_red_par) ?: '0';
            $model->hole_13_red_stroke_index = ($model->hole_13_red_stroke_index) ?: '0';  
            
            $model->hole_14_white = ($model->hole_14_white) ?: '0';
            $model->hole_14_white_par = ($model->hole_14_white_par) ?: '0';
            $model->hole_14_white_stroke_index = ($model->hole_14_white_stroke_index) ?: '0';
            $model->hole_14_yellow = ($model->hole_14_yellow) ?: '0';
            $model->hole_14_yellow_par = ($model->hole_14_yellow_par) ?: '0';
            $model->hole_14_yellow_stroke_index = ($model->hole_14_yellow_stroke_index) ?: '0'; 
            $model->hole_14_red = ($model->hole_14_red) ?: '0';
            $model->hole_14_red_par = ($model->hole_14_red_par) ?: '0';
            $model->hole_14_red_stroke_index = ($model->hole_14_red_stroke_index) ?: '0';     
            
            $model->hole_15_white = ($model->hole_15_white) ?: '0';
            $model->hole_15_white_par = ($model->hole_15_white_par) ?: '0';
            $model->hole_15_white_stroke_index = ($model->hole_15_white_stroke_index) ?: '0';
            $model->hole_15_yellow = ($model->hole_15_yellow) ?: '0';
            $model->hole_15_yellow_par = ($model->hole_15_yellow_par) ?: '0';
            $model->hole_15_yellow_stroke_index = ($model->hole_15_yellow_stroke_index) ?: '0'; 
            $model->hole_15_red = ($model->hole_15_red) ?: '0';
            $model->hole_15_red_par = ($model->hole_15_red_par) ?: '0';
            $model->hole_15_red_stroke_index = ($model->hole_15_red_stroke_index) ?: '0';   
            
            $model->hole_16_white = ($model->hole_16_white) ?: '0';
            $model->hole_16_white_par = ($model->hole_16_white_par) ?: '0';
            $model->hole_16_white_stroke_index = ($model->hole_16_white_stroke_index) ?: '0';
            $model->hole_16_yellow = ($model->hole_16_yellow) ?: '0';
            $model->hole_16_yellow_par = ($model->hole_16_yellow_par) ?: '0';
            $model->hole_16_yellow_stroke_index = ($model->hole_16_yellow_stroke_index) ?: '0'; 
            $model->hole_16_red = ($model->hole_16_red) ?: '0';
            $model->hole_16_red_par = ($model->hole_16_red_par) ?: '0';
            $model->hole_16_red_stroke_index = ($model->hole_16_red_stroke_index) ?: '0'; 
            
            $model->hole_17_white = ($model->hole_17_white) ?: '0';
            $model->hole_17_white_par = ($model->hole_17_white_par) ?: '0';
            $model->hole_17_white_stroke_index = ($model->hole_17_white_stroke_index) ?: '0';
            $model->hole_17_yellow = ($model->hole_17_yellow) ?: '0';
            $model->hole_17_yellow_par = ($model->hole_17_yellow_par) ?: '0';
            $model->hole_17_yellow_stroke_index = ($model->hole_17_yellow_stroke_index) ?: '0'; 
            $model->hole_17_red = ($model->hole_17_red) ?: '0';
            $model->hole_17_red_par = ($model->hole_17_red_par) ?: '0';
            $model->hole_17_red_stroke_index = ($model->hole_17_red_stroke_index) ?: '0';  
            
            $model->hole_18_white = ($model->hole_18_white) ?: '0';
            $model->hole_18_white_par = ($model->hole_18_white_par) ?: '0';
            $model->hole_18_white_stroke_index = ($model->hole_18_white_stroke_index) ?: '0';
            $model->hole_18_yellow = ($model->hole_18_yellow) ?: '0';
            $model->hole_18_yellow_par = ($model->hole_18_yellow_par) ?: '0';
            $model->hole_18_yellow_stroke_index = ($model->hole_18_yellow_stroke_index) ?: '0'; 
            $model->hole_18_red = ($model->hole_18_red) ?: '0';
            $model->hole_18_red_par = ($model->hole_18_red_par) ?: '0';
            $model->hole_18_red_stroke_index = ($model->hole_18_red_stroke_index) ?: '0';             

            $model->hole_19_white = ($model->hole_19_white) ?: '0';
            $model->hole_19_white_par = ($model->hole_19_white_par) ?: '0';
            $model->hole_19_white_stroke_index_front = ($model->hole_19_white_stroke_index_front) ?: '0';
            $model->hole_19_white_stroke_index_back = ($model->hole_19_white_stroke_index_back) ?: '0';
            $model->hole_19_yellow = ($model->hole_19_yellow) ?: '0';
            $model->hole_19_yellow_par = ($model->hole_19_yellow_par) ?: '0';
            $model->hole_19_yellow_stroke_index_front = ($model->hole_19_yellow_stroke_index_front) ?: '0'; 
            $model->hole_19_yellow_stroke_index_back = ($model->hole_19_yellow_stroke_index_back) ?: '0'; 
            $model->hole_19_red = ($model->hole_19_red) ?: '0';
            $model->hole_19_red_par = ($model->hole_19_red_par) ?: '0';
            $model->hole_19_red_stroke_index_front = ($model->hole_19_red_stroke_index_front) ?: '0'; 
            $model->hole_19_red_stroke_index_back = ($model->hole_19_red_stroke_index_back) ?: '0'; 

            $model->hole_20_white = ($model->hole_20_white) ?: '0';
            $model->hole_20_white_par = ($model->hole_20_white_par) ?: '0';
            $model->hole_20_white_stroke_index_front = ($model->hole_20_white_stroke_index_front) ?: '0';
            $model->hole_20_white_stroke_index_back = ($model->hole_20_white_stroke_index_back) ?: '0';
            $model->hole_20_yellow = ($model->hole_20_yellow) ?: '0';
            $model->hole_20_yellow_par = ($model->hole_20_yellow_par) ?: '0';
            $model->hole_20_yellow_stroke_index_front = ($model->hole_20_yellow_stroke_index_front) ?: '0'; 
            $model->hole_20_yellow_stroke_index_back = ($model->hole_20_yellow_stroke_index_back) ?: '0'; 
            $model->hole_20_red = ($model->hole_20_red) ?: '0';
            $model->hole_20_red_par = ($model->hole_20_red_par) ?: '0';
            $model->hole_20_red_stroke_index_front = ($model->hole_20_red_stroke_index_front) ?: '0'; 
            $model->hole_20_red_stroke_index_back = ($model->hole_20_red_stroke_index_back) ?: '0';  
            
            $model->hole_21_white = ($model->hole_21_white) ?: '0';
            $model->hole_21_white_par = ($model->hole_21_white_par) ?: '0';
            $model->hole_21_white_stroke_index_front = ($model->hole_21_white_stroke_index_front) ?: '0';
            $model->hole_21_white_stroke_index_back = ($model->hole_21_white_stroke_index_back) ?: '0';
            $model->hole_21_yellow = ($model->hole_21_yellow) ?: '0';
            $model->hole_21_yellow_par = ($model->hole_21_yellow_par) ?: '0';
            $model->hole_21_yellow_stroke_index_front = ($model->hole_21_yellow_stroke_index_front) ?: '0'; 
            $model->hole_21_yellow_stroke_index_back = ($model->hole_21_yellow_stroke_index_back) ?: '0'; 
            $model->hole_21_red = ($model->hole_21_red) ?: '0';
            $model->hole_21_red_par = ($model->hole_21_red_par) ?: '0';
            $model->hole_21_red_stroke_index_front = ($model->hole_21_red_stroke_index_front) ?: '0'; 
            $model->hole_21_red_stroke_index_back = ($model->hole_21_red_stroke_index_back) ?: '0';    
            
            $model->hole_22_white = ($model->hole_22_white) ?: '0';
            $model->hole_22_white_par = ($model->hole_22_white_par) ?: '0';
            $model->hole_22_white_stroke_index_front = ($model->hole_22_white_stroke_index_front) ?: '0';
            $model->hole_22_white_stroke_index_back = ($model->hole_22_white_stroke_index_back) ?: '0';
            $model->hole_22_yellow = ($model->hole_22_yellow) ?: '0';
            $model->hole_22_yellow_par = ($model->hole_22_yellow_par) ?: '0';
            $model->hole_22_yellow_stroke_index_front = ($model->hole_22_yellow_stroke_index_front) ?: '0'; 
            $model->hole_22_yellow_stroke_index_back = ($model->hole_22_yellow_stroke_index_back) ?: '0'; 
            $model->hole_22_red = ($model->hole_22_red) ?: '0';
            $model->hole_22_red_par = ($model->hole_22_red_par) ?: '0';
            $model->hole_22_red_stroke_index_front = ($model->hole_22_red_stroke_index_front) ?: '0'; 
            $model->hole_22_red_stroke_index_back = ($model->hole_22_red_stroke_index_back) ?: '0';   
            
            $model->hole_23_white = ($model->hole_23_white) ?: '0';
            $model->hole_23_white_par = ($model->hole_23_white_par) ?: '0';
            $model->hole_23_white_stroke_index_front = ($model->hole_23_white_stroke_index_front) ?: '0';
            $model->hole_23_white_stroke_index_back = ($model->hole_23_white_stroke_index_back) ?: '0';
            $model->hole_23_yellow = ($model->hole_23_yellow) ?: '0';
            $model->hole_23_yellow_par = ($model->hole_23_yellow_par) ?: '0';
            $model->hole_23_yellow_stroke_index_front = ($model->hole_23_yellow_stroke_index_front) ?: '0'; 
            $model->hole_23_yellow_stroke_index_back = ($model->hole_23_yellow_stroke_index_back) ?: '0'; 
            $model->hole_23_red = ($model->hole_23_red) ?: '0';
            $model->hole_23_red_par = ($model->hole_23_red_par) ?: '0';
            $model->hole_23_red_stroke_index_front = ($model->hole_23_red_stroke_index_front) ?: '0'; 
            $model->hole_23_red_stroke_index_back = ($model->hole_23_red_stroke_index_back) ?: '0';    
            
            $model->hole_24_white = ($model->hole_24_white) ?: '0';
            $model->hole_24_white_par = ($model->hole_24_white_par) ?: '0';
            $model->hole_24_white_stroke_index_front = ($model->hole_24_white_stroke_index_front) ?: '0';
            $model->hole_24_white_stroke_index_back = ($model->hole_24_white_stroke_index_back) ?: '0';
            $model->hole_24_yellow = ($model->hole_24_yellow) ?: '0';
            $model->hole_24_yellow_par = ($model->hole_24_yellow_par) ?: '0';
            $model->hole_24_yellow_stroke_index_front = ($model->hole_24_yellow_stroke_index_front) ?: '0'; 
            $model->hole_24_yellow_stroke_index_back = ($model->hole_24_yellow_stroke_index_back) ?: '0'; 
            $model->hole_24_red = ($model->hole_24_red) ?: '0';
            $model->hole_24_red_par = ($model->hole_24_red_par) ?: '0';
            $model->hole_24_red_stroke_index_front = ($model->hole_24_red_stroke_index_front) ?: '0'; 
            $model->hole_24_red_stroke_index_back = ($model->hole_24_red_stroke_index_back) ?: '0';    
            
            $model->hole_25_white = ($model->hole_25_white) ?: '0';
            $model->hole_25_white_par = ($model->hole_25_white_par) ?: '0';
            $model->hole_25_white_stroke_index_front = ($model->hole_25_white_stroke_index_front) ?: '0';
            $model->hole_25_white_stroke_index_back = ($model->hole_25_white_stroke_index_back) ?: '0';
            $model->hole_25_yellow = ($model->hole_25_yellow) ?: '0';
            $model->hole_25_yellow_par = ($model->hole_25_yellow_par) ?: '0';
            $model->hole_25_yellow_stroke_index_front = ($model->hole_25_yellow_stroke_index_front) ?: '0'; 
            $model->hole_25_yellow_stroke_index_back = ($model->hole_25_yellow_stroke_index_back) ?: '0'; 
            $model->hole_25_red = ($model->hole_25_red) ?: '0';
            $model->hole_25_red_par = ($model->hole_25_red_par) ?: '0';
            $model->hole_25_red_stroke_index_front = ($model->hole_25_red_stroke_index_front) ?: '0'; 
            $model->hole_25_red_stroke_index_back = ($model->hole_25_red_stroke_index_back) ?: '0';    
            
            $model->hole_26_white = ($model->hole_26_white) ?: '0';
            $model->hole_26_white_par = ($model->hole_26_white_par) ?: '0';
            $model->hole_26_white_stroke_index_front = ($model->hole_26_white_stroke_index_front) ?: '0';
            $model->hole_26_white_stroke_index_back = ($model->hole_26_white_stroke_index_back) ?: '0';
            $model->hole_26_yellow = ($model->hole_26_yellow) ?: '0';
            $model->hole_26_yellow_par = ($model->hole_26_yellow_par) ?: '0';
            $model->hole_26_yellow_stroke_index_front = ($model->hole_26_yellow_stroke_index_front) ?: '0'; 
            $model->hole_26_yellow_stroke_index_back = ($model->hole_26_yellow_stroke_index_back) ?: '0'; 
            $model->hole_26_red = ($model->hole_26_red) ?: '0';
            $model->hole_26_red_par = ($model->hole_26_red_par) ?: '0';
            $model->hole_26_red_stroke_index_front = ($model->hole_26_red_stroke_index_front) ?: '0'; 
            $model->hole_26_red_stroke_index_back = ($model->hole_26_red_stroke_index_back) ?: '0';  
            
            $model->hole_27_white = ($model->hole_27_white) ?: '0';
            $model->hole_27_white_par = ($model->hole_27_white_par) ?: '0';
            $model->hole_27_white_stroke_index_front = ($model->hole_27_white_stroke_index_front) ?: '0';
            $model->hole_27_white_stroke_index_back = ($model->hole_27_white_stroke_index_back) ?: '0';
            $model->hole_27_yellow = ($model->hole_27_yellow) ?: '0';
            $model->hole_27_yellow_par = ($model->hole_27_yellow_par) ?: '0';
            $model->hole_27_yellow_stroke_index_front = ($model->hole_27_yellow_stroke_index_front) ?: '0'; 
            $model->hole_27_yellow_stroke_index_back = ($model->hole_27_yellow_stroke_index_back) ?: '0'; 
            $model->hole_27_red = ($model->hole_27_red) ?: '0';
            $model->hole_27_red_par = ($model->hole_27_red_par) ?: '0';
            $model->hole_27_red_stroke_index_front = ($model->hole_27_red_stroke_index_front) ?: '0'; 
            $model->hole_27_red_stroke_index_back = ($model->hole_27_red_stroke_index_back) ?: '0';   
                       

        });















        \App\Round::creating(function($model){

            $model->size = ($model->size) ?: 'full';
            $model->yards = ($model->yards) ?: 'yellow';
            //$model->nine = ($model->nine) ?: 'first-nine-second-nine';

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
            $model->hole_19_drops = ($model->hole_19_drops) ?: '0';
            $model->hole_20_drops = ($model->hole_20_drops) ?: '0';
            $model->hole_21_drops = ($model->hole_21_drops) ?: '0';
            $model->hole_22_drops = ($model->hole_22_drops) ?: '0';
            $model->hole_23_drops = ($model->hole_23_drops) ?: '0';
            $model->hole_24_drops = ($model->hole_24_drops) ?: '0';
            $model->hole_25_drops = ($model->hole_25_drops) ?: '0';
            $model->hole_26_drops = ($model->hole_26_drops) ?: '0';
            $model->hole_27_drops = ($model->hole_27_drops) ?: '0';

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
            $model->hole_19_putts = ($model->hole_19_putts) ?: '0';
            $model->hole_20_putts = ($model->hole_20_putts) ?: '0';
            $model->hole_21_putts = ($model->hole_21_putts) ?: '0';
            $model->hole_22_putts = ($model->hole_22_putts) ?: '0';
            $model->hole_23_putts = ($model->hole_23_putts) ?: '0';
            $model->hole_24_putts = ($model->hole_24_putts) ?: '0';
            $model->hole_25_putts = ($model->hole_25_putts) ?: '0';
            $model->hole_26_putts = ($model->hole_26_putts) ?: '0';
            $model->hole_27_putts = ($model->hole_27_putts) ?: '0';

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
            $model->hole_19_score = ($model->hole_19_score) ?: '0';
            $model->hole_20_score = ($model->hole_20_score) ?: '0';
            $model->hole_21_score = ($model->hole_21_score) ?: '0';
            $model->hole_22_score = ($model->hole_22_score) ?: '0';
            $model->hole_23_score = ($model->hole_23_score) ?: '0';
            $model->hole_24_score = ($model->hole_24_score) ?: '0';
            $model->hole_25_score = ($model->hole_25_score) ?: '0';
            $model->hole_26_score = ($model->hole_26_score) ?: '0';
            $model->hole_27_score = ($model->hole_27_score) ?: '0';            

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
            $model->hole_19_fir = ($model->hole_19_fir) ?: '0';
            $model->hole_20_fir = ($model->hole_20_fir) ?: '0';
            $model->hole_21_fir = ($model->hole_21_fir) ?: '0';
            $model->hole_22_fir = ($model->hole_22_fir) ?: '0';
            $model->hole_23_fir = ($model->hole_23_fir) ?: '0';
            $model->hole_24_fir = ($model->hole_24_fir) ?: '0';
            $model->hole_25_fir = ($model->hole_25_fir) ?: '0';
            $model->hole_26_fir = ($model->hole_26_fir) ?: '0';
            $model->hole_27_fir = ($model->hole_27_fir) ?: '0';            
            
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
            $model->hole_19_gir = ($model->hole_19_gir) ?: '0';
            $model->hole_20_gir = ($model->hole_20_gir) ?: '0';
            $model->hole_21_gir = ($model->hole_21_gir) ?: '0';
            $model->hole_22_gir = ($model->hole_22_gir) ?: '0';
            $model->hole_23_gir = ($model->hole_23_gir) ?: '0';
            $model->hole_24_gir = ($model->hole_24_gir) ?: '0';
            $model->hole_25_gir = ($model->hole_25_gir) ?: '0';
            $model->hole_26_gir = ($model->hole_26_gir) ?: '0';
            $model->hole_27_gir = ($model->hole_27_gir) ?: '0';            
            
            $model->round_notes = ($model->round_notes) ?: '';
                                         
        });  
        
        \App\Round::updating(function($model){
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
