<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        /* Course Details */
        'property_name','course_name', 'sss', 'holes', 'first_nine_name', 'second_nine_name', 'third_nine_name',

        /* First Nine */
        'hole_1_white', 'hole_1_white_par', 'hole_1_white_stroke_index', 'hole_1_yellow', 'hole_1_yellow_par', 'hole_1_yellow_stroke_index', 'hole_1_red', 'hole_1_red_par', 'hole_1_red_stroke_index',
        'hole_2_white', 'hole_2_white_par', 'hole_2_white_stroke_index', 'hole_2_yellow', 'hole_2_yellow_par', 'hole_2_yellow_stroke_index', 'hole_2_red', 'hole_2_red_par', 'hole_2_red_stroke_index',
        'hole_3_white', 'hole_3_white_par', 'hole_3_white_stroke_index', 'hole_3_yellow', 'hole_3_yellow_par', 'hole_3_yellow_stroke_index', 'hole_3_red', 'hole_3_red_par', 'hole_3_red_stroke_index',
        'hole_4_white', 'hole_4_white_par', 'hole_4_white_stroke_index', 'hole_4_yellow', 'hole_4_yellow_par', 'hole_4_yellow_stroke_index', 'hole_4_red', 'hole_4_red_par', 'hole_4_red_stroke_index',
        'hole_5_white', 'hole_5_white_par', 'hole_5_white_stroke_index', 'hole_5_yellow', 'hole_5_yellow_par', 'hole_5_yellow_stroke_index', 'hole_5_red', 'hole_5_red_par', 'hole_5_red_stroke_index',
        'hole_6_white', 'hole_6_white_par', 'hole_6_white_stroke_index', 'hole_6_yellow', 'hole_6_yellow_par', 'hole_6_yellow_stroke_index', 'hole_6_red', 'hole_6_red_par', 'hole_6_red_stroke_index',
        'hole_7_white', 'hole_7_white_par', 'hole_7_white_stroke_index', 'hole_7_yellow', 'hole_7_yellow_par', 'hole_7_yellow_stroke_index', 'hole_7_red', 'hole_7_red_par', 'hole_7_red_stroke_index',
        'hole_8_white', 'hole_8_white_par', 'hole_8_white_stroke_index', 'hole_8_yellow', 'hole_8_yellow_par', 'hole_8_yellow_stroke_index', 'hole_8_red', 'hole_8_red_par', 'hole_8_red_stroke_index',
        'hole_9_white', 'hole_9_white_par', 'hole_9_white_stroke_index', 'hole_9_yellow', 'hole_9_yellow_par', 'hole_9_yellow_stroke_index', 'hole_9_red', 'hole_9_red_par', 'hole_9_red_stroke_index',
        
        /* Second Nine */
        'hole_10_white', 'hole_10_white_par', 'hole_10_white_stroke_index', 'hole_10_yellow', 'hole_10_yellow_par', 'hole_10_yellow_stroke_index', 'hole_10_red', 'hole_10_red_par', 'hole_10_red_stroke_index',
        'hole_11_white', 'hole_11_white_par', 'hole_11_white_stroke_index', 'hole_11_yellow', 'hole_11_yellow_par', 'hole_11_yellow_stroke_index', 'hole_11_red', 'hole_11_red_par', 'hole_11_red_stroke_index',
        'hole_12_white', 'hole_12_white_par', 'hole_12_white_stroke_index', 'hole_12_yellow', 'hole_12_yellow_par', 'hole_12_yellow_stroke_index', 'hole_12_red', 'hole_12_red_par', 'hole_12_red_stroke_index',
        'hole_13_white', 'hole_13_white_par', 'hole_13_white_stroke_index', 'hole_13_yellow', 'hole_13_yellow_par', 'hole_13_yellow_stroke_index', 'hole_13_red', 'hole_13_red_par', 'hole_13_red_stroke_index',
        'hole_14_white', 'hole_14_white_par', 'hole_14_white_stroke_index', 'hole_14_yellow', 'hole_14_yellow_par', 'hole_14_yellow_stroke_index', 'hole_14_red', 'hole_14_red_par', 'hole_14_red_stroke_index',
        'hole_15_white', 'hole_15_white_par', 'hole_15_white_stroke_index', 'hole_15_yellow', 'hole_15_yellow_par', 'hole_15_yellow_stroke_index', 'hole_15_red', 'hole_15_red_par', 'hole_15_red_stroke_index',
        'hole_16_white', 'hole_16_white_par', 'hole_16_white_stroke_index', 'hole_16_yellow', 'hole_16_yellow_par', 'hole_16_yellow_stroke_index', 'hole_16_red', 'hole_16_red_par', 'hole_16_red_stroke_index',
        'hole_17_white', 'hole_17_white_par', 'hole_17_white_stroke_index', 'hole_17_yellow', 'hole_17_yellow_par', 'hole_17_yellow_stroke_index', 'hole_17_red', 'hole_17_red_par', 'hole_17_red_stroke_index',
        'hole_18_white', 'hole_18_white_par', 'hole_18_white_stroke_index', 'hole_18_yellow', 'hole_18_yellow_par', 'hole_18_yellow_stroke_index', 'hole_18_red', 'hole_18_red_par', 'hole_18_red_stroke_index',
        
        /* Third Nine */
        'hole_19_white', 'hole_19_white_par', 'hole_19_white_stroke_index_front', 'hole_19_white_stroke_index_back', 'hole_19_yellow', 'hole_19_yellow_par', 'hole_19_yellow_stroke_index_front', 'hole_19_yellow_stroke_index_back', 'hole_19_red', 'hole_19_red_par', 'hole_19_red_stroke_index_front', 'hole_19_red_stroke_index_back',
        'hole_20_white', 'hole_20_white_par', 'hole_20_white_stroke_index_front', 'hole_20_white_stroke_index_back', 'hole_20_yellow', 'hole_20_yellow_par', 'hole_20_yellow_stroke_index_front', 'hole_20_yellow_stroke_index_back', 'hole_20_red', 'hole_20_red_par', 'hole_20_red_stroke_index_front', 'hole_20_red_stroke_index_back',
        'hole_21_white', 'hole_21_white_par', 'hole_21_white_stroke_index_front', 'hole_21_white_stroke_index_back', 'hole_21_yellow', 'hole_21_yellow_par', 'hole_21_yellow_stroke_index_front', 'hole_21_yellow_stroke_index_back', 'hole_21_red', 'hole_21_red_par', 'hole_21_red_stroke_index_front', 'hole_21_red_stroke_index_back',
        'hole_22_white', 'hole_22_white_par', 'hole_22_white_stroke_index_front', 'hole_22_white_stroke_index_back', 'hole_22_yellow', 'hole_22_yellow_par', 'hole_22_yellow_stroke_index_front', 'hole_22_yellow_stroke_index_back', 'hole_22_red', 'hole_22_red_par', 'hole_22_red_stroke_index_front', 'hole_22_red_stroke_index_back',
        'hole_23_white', 'hole_23_white_par', 'hole_23_white_stroke_index_front', 'hole_23_white_stroke_index_back', 'hole_23_yellow', 'hole_23_yellow_par', 'hole_23_yellow_stroke_index_front', 'hole_23_yellow_stroke_index_back', 'hole_23_red', 'hole_23_red_par', 'hole_23_red_stroke_index_front', 'hole_23_red_stroke_index_back',
        'hole_24_white', 'hole_24_white_par', 'hole_24_white_stroke_index_front', 'hole_24_white_stroke_index_back', 'hole_24_yellow', 'hole_24_yellow_par', 'hole_24_yellow_stroke_index_front', 'hole_24_yellow_stroke_index_back', 'hole_24_red', 'hole_24_red_par', 'hole_24_red_stroke_index_front', 'hole_24_red_stroke_index_back',
        'hole_25_white', 'hole_25_white_par', 'hole_25_white_stroke_index_front', 'hole_25_white_stroke_index_back', 'hole_25_yellow', 'hole_25_yellow_par', 'hole_25_yellow_stroke_index_front', 'hole_25_yellow_stroke_index_back', 'hole_25_red', 'hole_25_red_par', 'hole_25_red_stroke_index_front', 'hole_25_red_stroke_index_back',
        'hole_26_white', 'hole_26_white_par', 'hole_26_white_stroke_index_front', 'hole_26_white_stroke_index_back', 'hole_26_yellow', 'hole_26_yellow_par', 'hole_26_yellow_stroke_index_front', 'hole_26_yellow_stroke_index_back', 'hole_26_red', 'hole_26_red_par', 'hole_26_red_stroke_index_front', 'hole_26_red_stroke_index_back',
        'hole_27_white', 'hole_27_white_par', 'hole_27_white_stroke_index_front', 'hole_27_white_stroke_index_back', 'hole_27_yellow', 'hole_27_yellow_par', 'hole_27_yellow_stroke_index_front', 'hole_27_yellow_stroke_index_back', 'hole_27_red', 'hole_27_red_par', 'hole_27_red_stroke_index_front', 'hole_27_red_stroke_index_back'


        /*
        'hole_1_par', 'hole_1_stroke_index', 'hole_1_whites', 'hole_1_yellows', 'hole_1_reds', 'hole_1_ladies_par', 'hole_1_ladies_stroke_index',
        'hole_2_par', 'hole_2_stroke_index', 'hole_2_whites', 'hole_2_yellows', 'hole_2_reds', 'hole_2_ladies_par', 'hole_2_ladies_stroke_index',
        'hole_3_par', 'hole_3_stroke_index', 'hole_3_whites', 'hole_3_yellows', 'hole_3_reds', 'hole_3_ladies_par', 'hole_3_ladies_stroke_index',
        'hole_4_par', 'hole_4_stroke_index', 'hole_4_whites', 'hole_4_yellows', 'hole_4_reds', 'hole_4_ladies_par', 'hole_4_ladies_stroke_index',
        'hole_5_par', 'hole_5_stroke_index', 'hole_5_whites', 'hole_5_yellows', 'hole_5_reds', 'hole_5_ladies_par', 'hole_5_ladies_stroke_index',
        'hole_6_par', 'hole_6_stroke_index', 'hole_6_whites', 'hole_6_yellows', 'hole_6_reds', 'hole_6_ladies_par', 'hole_6_ladies_stroke_index',
        'hole_7_par', 'hole_7_stroke_index', 'hole_7_whites', 'hole_7_yellows', 'hole_7_reds', 'hole_7_ladies_par', 'hole_7_ladies_stroke_index',
        'hole_8_par', 'hole_8_stroke_index', 'hole_8_whites', 'hole_8_yellows', 'hole_8_reds', 'hole_8_ladies_par', 'hole_8_ladies_stroke_index',
        'hole_9_par', 'hole_9_stroke_index', 'hole_9_whites', 'hole_9_yellows', 'hole_9_reds', 'hole_9_ladies_par', 'hole_9_ladies_stroke_index',
        'hole_10_par', 'hole_10_stroke_index', 'hole_10_whites', 'hole_10_yellows', 'hole_10_reds', 'hole_10_ladies_par', 'hole_10_ladies_stroke_index',
        'hole_11_par', 'hole_11_stroke_index', 'hole_11_whites', 'hole_11_yellows', 'hole_11_reds', 'hole_11_ladies_par', 'hole_11_ladies_stroke_index',
        'hole_12_par', 'hole_12_stroke_index', 'hole_12_whites', 'hole_12_yellows', 'hole_12_reds', 'hole_12_ladies_par', 'hole_12_ladies_stroke_index',
        'hole_13_par', 'hole_13_stroke_index', 'hole_13_whites', 'hole_13_yellows', 'hole_13_reds', 'hole_13_ladies_par', 'hole_13_ladies_stroke_index',
        'hole_14_par', 'hole_14_stroke_index', 'hole_14_whites', 'hole_14_yellows', 'hole_14_reds', 'hole_14_ladies_par', 'hole_14_ladies_stroke_index',
        'hole_15_par', 'hole_15_stroke_index', 'hole_15_whites', 'hole_15_yellows', 'hole_15_reds', 'hole_15_ladies_par', 'hole_15_ladies_stroke_index',
        'hole_16_par', 'hole_16_stroke_index', 'hole_16_whites', 'hole_16_yellows', 'hole_16_reds', 'hole_16_ladies_par', 'hole_16_ladies_stroke_index',
        'hole_17_par', 'hole_17_stroke_index', 'hole_17_whites', 'hole_17_yellows', 'hole_17_reds', 'hole_17_ladies_par', 'hole_17_ladies_stroke_index',
        'hole_18_par', 'hole_18_stroke_index', 'hole_18_whites', 'hole_18_yellows', 'hole_18_reds', 'hole_18_ladies_par', 'hole_18_ladies_stroke_index',
        */
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
