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
        'property_name','course_name', 'course_rating', 'course_slope',
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
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
