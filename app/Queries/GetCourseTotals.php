<?php

namespace App\Queries;

use App\Course;
 
class GetCourseTotals {
 
    /**
     * Get Course data and totals
     */

    public function courseTotals($id){

        $course = \App\Course::find($id);

        $course->first_nine_white = intval($course->hole_1_white) + intval($course->hole_2_white) + intval($course->hole_3_white) + intval($course->hole_4_white) + intval($course->hole_5_white) + intval($course->hole_6_white) + intval($course->hole_7_white) + intval($course->hole_8_white) + intval($course->hole_9_white);       
        $course->first_nine_white_par = intval($course->hole_1_white_par) + intval($course->hole_2_white_par) + intval($course->hole_3_white_par) + intval($course->hole_4_white_par) + intval($course->hole_5_white_par) + intval($course->hole_6_white_par) + intval($course->hole_7_white_par) + intval($course->hole_8_white_par) + intval($course->hole_9_white_par);

        $course->first_nine_yellow = intval($course->hole_1_yellow) + intval($course->hole_2_yellow) + intval($course->hole_3_yellow) + intval($course->hole_4_yellow) + intval($course->hole_5_yellow) + intval($course->hole_6_yellow) + intval($course->hole_7_yellow) + intval($course->hole_8_yellow) + intval($course->hole_9_yellow);       
        $course->first_nine_yellow_par = intval($course->hole_1_yellow_par) + intval($course->hole_2_yellow_par) + intval($course->hole_3_yellow_par) + intval($course->hole_4_yellow_par) + intval($course->hole_5_yellow_par) + intval($course->hole_6_yellow_par) + intval($course->hole_7_yellow_par) + intval($course->hole_8_yellow_par) + intval($course->hole_9_yellow_par);

        $course->first_nine_red = intval($course->hole_1_red) + intval($course->hole_2_red) + intval($course->hole_3_red) + intval($course->hole_4_red) + intval($course->hole_5_red) + intval($course->hole_6_red) + intval($course->hole_7_red) + intval($course->hole_8_red) + intval($course->hole_9_red);       
        $course->first_nine_red_par = intval($course->hole_1_red_par) + intval($course->hole_2_red_par) + intval($course->hole_3_red_par) + intval($course->hole_4_red_par) + intval($course->hole_5_red_par) + intval($course->hole_6_red_par) + intval($course->hole_7_red_par) + intval($course->hole_8_red_par) + intval($course->hole_9_red_par);

        $course->second_nine_white = intval($course->hole_10_white) + intval($course->hole_11_white) + intval($course->hole_12_white) + intval($course->hole_13_white) + intval($course->hole_14_white) + intval($course->hole_15_white) + intval($course->hole_16_white) + intval($course->hole_17_white) + intval($course->hole_18_white);       
        $course->second_nine_white_par = intval($course->hole_10_white_par) + intval($course->hole_11_white_par) + intval($course->hole_12_white_par) + intval($course->hole_13_white_par) + intval($course->hole_14_white_par) + intval($course->hole_15_white_par) + intval($course->hole_16_white_par) + intval($course->hole_17_white_par) + intval($course->hole_18_white_par);

        $course->second_nine_yellow = intval($course->hole_10_yellow) + intval($course->hole_11_yellow) + intval($course->hole_12_yellow) + intval($course->hole_13_yellow) + intval($course->hole_14_yellow) + intval($course->hole_15_yellow) + intval($course->hole_16_yellow) + intval($course->hole_17_yellow) + intval($course->hole_18_yellow);       
        $course->second_nine_yellow_par = intval($course->hole_10_yellow_par) + intval($course->hole_11_yellow_par) + intval($course->hole_12_yellow_par) + intval($course->hole_13_yellow_par) + intval($course->hole_14_yellow_par) + intval($course->hole_15_yellow_par) + intval($course->hole_16_yellow_par) + intval($course->hole_17_yellow_par) + intval($course->hole_18_yellow_par);

        $course->second_nine_red = intval($course->hole_10_red) + intval($course->hole_11_red) + intval($course->hole_12_red) + intval($course->hole_13_red) + intval($course->hole_14_red) + intval($course->hole_15_red) + intval($course->hole_16_red) + intval($course->hole_17_red) + intval($course->hole_18_red);       
        $course->second_nine_red_par = intval($course->hole_10_red_par) + intval($course->hole_11_red_par) + intval($course->hole_12_red_par) + intval($course->hole_13_red_par) + intval($course->hole_14_red_par) + intval($course->hole_15_red_par) + intval($course->hole_16_red_par) + intval($course->hole_17_red_par) + intval($course->hole_18_red_par);

        $course->third_nine_white = intval($course->hole_19_white) + intval($course->hole_20_white) + intval($course->hole_21_white) + intval($course->hole_22_white) + intval($course->hole_23_white) + intval($course->hole_24_white) + intval($course->hole_25_white) + intval($course->hole_26_white) + intval($course->hole_27_white);       
        $course->third_nine_white_par = intval($course->hole_19_white_par) + intval($course->hole_20_white_par) + intval($course->hole_21_white_par) + intval($course->hole_22_white_par) + intval($course->hole_23_white_par) + intval($course->hole_24_white_par) + intval($course->hole_25_white_par) + intval($course->hole_26_white_par) + intval($course->hole_27_white_par);

        $course->third_nine_yellow = intval($course->hole_19_yellow) + intval($course->hole_20_yellow) + intval($course->hole_21_yellow) + intval($course->hole_22_yellow) + intval($course->hole_23_yellow) + intval($course->hole_24_yellow) + intval($course->hole_25_yellow) + intval($course->hole_26_yellow) + intval($course->hole_27_yellow);       
        $third_nine_yellow_par = intval($course->hole_19_yellow_par) + intval($course->hole_20_yellow_par) + intval($course->hole_21_yellow_par) + intval($course->hole_22_yellow_par) + intval($course->hole_23_yellow_par) + intval($course->hole_24_yellow_par) + intval($course->hole_25_yellow_par) + intval($course->hole_26_yellow_par) + intval($course->hole_27_yellow_par);

        $course->third_nine_red = intval($course->hole_19_red) + intval($course->hole_20_red) + intval($course->hole_21_red) + intval($course->hole_22_red) + intval($course->hole_23_red) + intval($course->hole_24_red) + intval($course->hole_25_red) + intval($course->hole_26_red) + intval($course->hole_27_red);       
        $course->third_nine_red_par = intval($course->hole_19_red_par) + intval($course->hole_20_red_par) + intval($course->hole_21_red_par) + intval($course->hole_22_red_par) + intval($course->hole_23_red_par) + intval($course->hole_24_red_par) + intval($course->hole_25_red_par) + intval($course->hole_26_red_par) + intval($course->hole_27_red_par);
        
        return $course;

    }
 
}