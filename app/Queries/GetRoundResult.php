<?php

namespace App\Queries;

use App\Course;
 
class GetRoundResult {
 
    /**
     * Get Course data and totals
     */

    public function roundResult($id){        

        $round_result = \App\Round::where('rounds.id', $id)
        ->groupBy('rounds.id')
        ->join('courses', 'courses.id', '=', 'course_id')  
        ->first();

        // calculate plus minus for each individual hole
        $hole_1_plus_minus = 0;
        $hole_2_plus_minus = 0;
        $hole_3_plus_minus = 0;
        $hole_4_plus_minus = 0;
        $hole_5_plus_minus = 0;
        $hole_6_plus_minus = 0;
        $hole_7_plus_minus = 0;
        $hole_8_plus_minus = 0;
        $hole_9_plus_minus = 0;
        $hole_10_plus_minus = 0;
        $hole_11_plus_minus = 0;
        $hole_12_plus_minus = 0;
        $hole_13_plus_minus = 0;
        $hole_14_plus_minus = 0;
        $hole_15_plus_minus = 0;
        $hole_16_plus_minus = 0;
        $hole_17_plus_minus = 0;
        $hole_18_plus_minus = 0;
        $hole_19_plus_minus = 0;
        $hole_20_plus_minus = 0;
        $hole_21_plus_minus = 0;
        $hole_22_plus_minus = 0;
        $hole_23_plus_minus = 0;
        $hole_24_plus_minus = 0;
        $hole_25_plus_minus = 0;
        $hole_26_plus_minus = 0;
        $hole_27_plus_minus = 0;       

        if($round_result->yards === 'white'){

            $hole_1_plus_minus = intval($round_result->hole_1_white_par) - intval($round_result->hole_1_score);
            $hole_2_plus_minus = intval($round_result->hole_2_white_par) - intval($round_result->hole_2_score);
            $hole_3_plus_minus = intval($round_result->hole_3_white_par) - intval($round_result->hole_3_score);
            $hole_4_plus_minus = intval($round_result->hole_4_white_par) - intval($round_result->hole_4_score);
            $hole_5_plus_minus = intval($round_result->hole_5_white_par) - intval($round_result->hole_5_score);
            $hole_6_plus_minus = intval($round_result->hole_6_white_par) - intval($round_result->hole_6_score);
            $hole_7_plus_minus = intval($round_result->hole_7_white_par) - intval($round_result->hole_7_score);
            $hole_8_plus_minus = intval($round_result->hole_8_white_par) - intval($round_result->hole_8_score);
            $hole_9_plus_minus = intval($round_result->hole_9_white_par) - intval($round_result->hole_9_score);
            $hole_10_plus_minus = intval($round_result->hole_10_white_par) - intval($round_result->hole_10_score);
            $hole_11_plus_minus = intval($round_result->hole_11_white_par) - intval($round_result->hole_11_score);
            $hole_12_plus_minus = intval($round_result->hole_12_white_par) - intval($round_result->hole_12_score);
            $hole_13_plus_minus = intval($round_result->hole_13_white_par) - intval($round_result->hole_13_score);
            $hole_14_plus_minus = intval($round_result->hole_14_white_par) - intval($round_result->hole_14_score);
            $hole_15_plus_minus = intval($round_result->hole_15_white_par) - intval($round_result->hole_15_score);
            $hole_16_plus_minus = intval($round_result->hole_16_white_par) - intval($round_result->hole_16_score);
            $hole_17_plus_minus = intval($round_result->hole_17_white_par) - intval($round_result->hole_17_score);
            $hole_18_plus_minus = intval($round_result->hole_18_white_par) - intval($round_result->hole_18_score);
            $hole_19_plus_minus = intval($round_result->hole_19_white_par) - intval($round_result->hole_19_score);
            $hole_20_plus_minus = intval($round_result->hole_20_white_par) - intval($round_result->hole_20_score);
            $hole_21_plus_minus = intval($round_result->hole_21_white_par) - intval($round_result->hole_21_score);
            $hole_22_plus_minus = intval($round_result->hole_22_white_par) - intval($round_result->hole_22_score);
            $hole_23_plus_minus = intval($round_result->hole_23_white_par) - intval($round_result->hole_23_score);
            $hole_24_plus_minus = intval($round_result->hole_24_white_par) - intval($round_result->hole_24_score);
            $hole_25_plus_minus = intval($round_result->hole_25_white_par) - intval($round_result->hole_25_score);
            $hole_26_plus_minus = intval($round_result->hole_26_white_par) - intval($round_result->hole_26_score);
            $hole_27_plus_minus = intval($round_result->hole_27_white_par) - intval($round_result->hole_27_score);

        }

        if($round_result->yards === 'yellow'){

            $hole_1_plus_minus = intval($round_result->hole_1_yellow_par) - intval($round_result->hole_1_score);
            $hole_2_plus_minus = intval($round_result->hole_2_yellow_par) - intval($round_result->hole_2_score);
            $hole_3_plus_minus = intval($round_result->hole_3_yellow_par) - intval($round_result->hole_3_score);
            $hole_4_plus_minus = intval($round_result->hole_4_yellow_par) - intval($round_result->hole_4_score);
            $hole_5_plus_minus = intval($round_result->hole_5_yellow_par) - intval($round_result->hole_5_score);
            $hole_6_plus_minus = intval($round_result->hole_6_yellow_par) - intval($round_result->hole_6_score);
            $hole_7_plus_minus = intval($round_result->hole_7_yellow_par) - intval($round_result->hole_7_score);
            $hole_8_plus_minus = intval($round_result->hole_8_yellow_par) - intval($round_result->hole_8_score);
            $hole_9_plus_minus = intval($round_result->hole_9_yellow_par) - intval($round_result->hole_9_score);
            $hole_10_plus_minus = intval($round_result->hole_10_yellow_par) - intval($round_result->hole_10_score);
            $hole_11_plus_minus = intval($round_result->hole_11_yellow_par) - intval($round_result->hole_11_score);
            $hole_12_plus_minus = intval($round_result->hole_12_yellow_par) - intval($round_result->hole_12_score);
            $hole_13_plus_minus = intval($round_result->hole_13_yellow_par) - intval($round_result->hole_13_score);
            $hole_14_plus_minus = intval($round_result->hole_14_yellow_par) - intval($round_result->hole_14_score);
            $hole_15_plus_minus = intval($round_result->hole_15_yellow_par) - intval($round_result->hole_15_score);
            $hole_16_plus_minus = intval($round_result->hole_16_yellow_par) - intval($round_result->hole_16_score);
            $hole_17_plus_minus = intval($round_result->hole_17_yellow_par) - intval($round_result->hole_17_score);
            $hole_18_plus_minus = intval($round_result->hole_18_yellow_par) - intval($round_result->hole_18_score);
            $hole_19_plus_minus = intval($round_result->hole_19_yellow_par) - intval($round_result->hole_19_score);
            $hole_20_plus_minus = intval($round_result->hole_20_yellow_par) - intval($round_result->hole_20_score);
            $hole_21_plus_minus = intval($round_result->hole_21_yellow_par) - intval($round_result->hole_21_score);
            $hole_22_plus_minus = intval($round_result->hole_22_yellow_par) - intval($round_result->hole_22_score);
            $hole_23_plus_minus = intval($round_result->hole_23_yellow_par) - intval($round_result->hole_23_score);
            $hole_24_plus_minus = intval($round_result->hole_24_yellow_par) - intval($round_result->hole_24_score);
            $hole_25_plus_minus = intval($round_result->hole_25_yellow_par) - intval($round_result->hole_25_score);
            $hole_26_plus_minus = intval($round_result->hole_26_yellow_par) - intval($round_result->hole_26_score);
            $hole_27_plus_minus = intval($round_result->hole_27_yellow_par) - intval($round_result->hole_27_score);            

        }    
        
        if($round_result->yards === 'red'){

            $hole_1_plus_minus = intval($round_result->hole_1_red_par) - intval($round_result->hole_1_score);
            $hole_2_plus_minus = intval($round_result->hole_2_red_par) - intval($round_result->hole_2_score);
            $hole_3_plus_minus = intval($round_result->hole_3_red_par) - intval($round_result->hole_3_score);
            $hole_4_plus_minus = intval($round_result->hole_4_red_par) - intval($round_result->hole_4_score);
            $hole_5_plus_minus = intval($round_result->hole_5_red_par) - intval($round_result->hole_5_score);
            $hole_6_plus_minus = intval($round_result->hole_6_red_par) - intval($round_result->hole_6_score);
            $hole_7_plus_minus = intval($round_result->hole_7_red_par) - intval($round_result->hole_7_score);
            $hole_8_plus_minus = intval($round_result->hole_8_red_par) - intval($round_result->hole_8_score);
            $hole_9_plus_minus = intval($round_result->hole_9_red_par) - intval($round_result->hole_9_score);
            $hole_10_plus_minus = intval($round_result->hole_10_red_par) - intval($round_result->hole_10_score);
            $hole_11_plus_minus = intval($round_result->hole_11_red_par) - intval($round_result->hole_11_score);
            $hole_12_plus_minus = intval($round_result->hole_12_red_par) - intval($round_result->hole_12_score);
            $hole_13_plus_minus = intval($round_result->hole_13_red_par) - intval($round_result->hole_13_score);
            $hole_14_plus_minus = intval($round_result->hole_14_red_par) - intval($round_result->hole_14_score);
            $hole_15_plus_minus = intval($round_result->hole_15_red_par) - intval($round_result->hole_15_score);
            $hole_16_plus_minus = intval($round_result->hole_16_red_par) - intval($round_result->hole_16_score);
            $hole_17_plus_minus = intval($round_result->hole_17_red_par) - intval($round_result->hole_17_score);
            $hole_18_plus_minus = intval($round_result->hole_18_red_par) - intval($round_result->hole_18_score);
            $hole_19_plus_minus = intval($round_result->hole_19_red_par) - intval($round_result->hole_19_score);
            $hole_20_plus_minus = intval($round_result->hole_20_red_par) - intval($round_result->hole_20_score);
            $hole_21_plus_minus = intval($round_result->hole_21_red_par) - intval($round_result->hole_21_score);
            $hole_22_plus_minus = intval($round_result->hole_22_red_par) - intval($round_result->hole_22_score);
            $hole_23_plus_minus = intval($round_result->hole_23_red_par) - intval($round_result->hole_23_score);
            $hole_24_plus_minus = intval($round_result->hole_24_red_par) - intval($round_result->hole_24_score);
            $hole_25_plus_minus = intval($round_result->hole_25_red_par) - intval($round_result->hole_25_score);
            $hole_26_plus_minus = intval($round_result->hole_26_red_par) - intval($round_result->hole_26_score);
            $hole_27_plus_minus = intval($round_result->hole_27_red_par) - intval($round_result->hole_27_score);            

        }  

        $round_result->hole_1_plus_minus = $hole_1_plus_minus;
        $round_result->hole_2_plus_minus = $hole_2_plus_minus;
        $round_result->hole_3_plus_minus = $hole_3_plus_minus;
        $round_result->hole_4_plus_minus = $hole_4_plus_minus;
        $round_result->hole_5_plus_minus = $hole_5_plus_minus;
        $round_result->hole_6_plus_minus = $hole_6_plus_minus;
        $round_result->hole_7_plus_minus = $hole_7_plus_minus;
        $round_result->hole_8_plus_minus = $hole_8_plus_minus;
        $round_result->hole_9_plus_minus = $hole_9_plus_minus;
        $round_result->hole_10_plus_minus = $hole_10_plus_minus;
        $round_result->hole_11_plus_minus = $hole_11_plus_minus;
        $round_result->hole_12_plus_minus = $hole_12_plus_minus;
        $round_result->hole_13_plus_minus = $hole_13_plus_minus;
        $round_result->hole_14_plus_minus = $hole_14_plus_minus;
        $round_result->hole_15_plus_minus = $hole_15_plus_minus;
        $round_result->hole_16_plus_minus = $hole_16_plus_minus;
        $round_result->hole_17_plus_minus = $hole_17_plus_minus;
        $round_result->hole_18_plus_minus = $hole_18_plus_minus;
        $round_result->hole_19_plus_minus = $hole_19_plus_minus;
        $round_result->hole_20_plus_minus = $hole_20_plus_minus;
        $round_result->hole_21_plus_minus = $hole_21_plus_minus;
        $round_result->hole_22_plus_minus = $hole_22_plus_minus;
        $round_result->hole_23_plus_minus = $hole_23_plus_minus;
        $round_result->hole_24_plus_minus = $hole_24_plus_minus;
        $round_result->hole_25_plus_minus = $hole_25_plus_minus;
        $round_result->hole_26_plus_minus = $hole_26_plus_minus;
        $round_result->hole_27_plus_minus = $hole_27_plus_minus;


              
        // calculate par score for each nine depending on yards played
        $first_nine_par = 0;
        $second_nine_par = 0;
        $third_nine_par = 0;

        if($round_result->yards === 'white'){

            $first_nine_par = intval($round_result->hole_1_white_par) + intval($round_result->hole_2_white_par) + intval($round_result->hole_3_white_par) + intval($round_result->hole_4_white_par) + intval($round_result->hole_5_white_par) + intval($round_result->hole_6_white_par) + intval($round_result->hole_7_white_par) + intval($round_result->hole_8_white_par) + intval($round_result->hole_9_white_par);
            $second_nine_par = intval($round_result->hole_10_white_par) + intval($round_result->hole_11_white_par) + intval($round_result->hole_12_white_par) + intval($round_result->hole_13_white_par) + intval($round_result->hole_14_white_par) + intval($round_result->hole_15_white_par) + intval($round_result->hole_16_white_par) + intval($round_result->hole_17_white_par) + intval($round_result->hole_18_white_par);
            $third_nine_par = intval($round_result->hole_19_white_par) + intval($round_result->hole_20_white_par) + intval($round_result->hole_21_white_par) + intval($round_result->hole_22_white_par) + intval($round_result->hole_23_white_par) + intval($round_result->hole_24_white_par) + intval($round_result->hole_25_white_par) + intval($round_result->hole_26_white_par) + intval($round_result->hole_27_white_par);

        }

        if($round_result->yards === 'yellow'){

            $first_nine_par = intval($round_result->hole_1_yellow_par) + intval($round_result->hole_2_yellow_par) + intval($round_result->hole_3_yellow_par) + intval($round_result->hole_4_yellow_par) + intval($round_result->hole_5_yellow_par) + intval($round_result->hole_6_yellow_par) + intval($round_result->hole_7_yellow_par) + intval($round_result->hole_8_yellow_par) + intval($round_result->hole_9_yellow_par);
            $second_nine_par = intval($round_result->hole_10_yellow_par) + intval($round_result->hole_11_yellow_par) + intval($round_result->hole_12_yellow_par) + intval($round_result->hole_13_yellow_par) + intval($round_result->hole_14_yellow_par) + intval($round_result->hole_15_yellow_par) + intval($round_result->hole_16_yellow_par) + intval($round_result->hole_17_yellow_par) + intval($round_result->hole_18_yellow_par);
            $third_nine_par = intval($round_result->hole_19_yellow_par) + intval($round_result->hole_20_yellow_par) + intval($round_result->hole_21_yellow_par) + intval($round_result->hole_22_yellow_par) + intval($round_result->hole_23_yellow_par) + intval($round_result->hole_24_yellow_par) + intval($round_result->hole_25_yellow_par) + intval($round_result->hole_26_yellow_par) + intval($round_result->hole_27_yellow_par);

        }    
        
        if($round_result->yards === 'red'){

            $first_nine_par = intval($round_result->hole_1_red_par) + intval($round_result->hole_2_red_par) + intval($round_result->hole_3_red_par) + intval($round_result->hole_4_red_par) + intval($round_result->hole_5_red_par) + intval($round_result->hole_6_red_par) + intval($round_result->hole_7_red_par) + intval($round_result->hole_8_red_par) + intval($round_result->hole_9_red_par);
            $second_nine_par = intval($round_result->hole_10_red_par) + intval($round_result->hole_11_red_par) + intval($round_result->hole_12_red_par) + intval($round_result->hole_13_red_par) + intval($round_result->hole_14_red_par) + intval($round_result->hole_15_red_par) + intval($round_result->hole_16_red_par) + intval($round_result->hole_17_red_par) + intval($round_result->hole_18_red_par);
            $third_nine_par = intval($round_result->hole_19_red_par) + intval($round_result->hole_20_red_par) + intval($round_result->hole_21_red_par) + intval($round_result->hole_22_red_par) + intval($round_result->hole_23_red_par) + intval($round_result->hole_24_red_par) + intval($round_result->hole_25_red_par) + intval($round_result->hole_26_red_par) + intval($round_result->hole_27_red_par);

        }  
        
        $round_result->first_nine_par = $first_nine_par;
        $round_result->second_nine_par = $second_nine_par;
        $round_result->third_nine_par = $third_nine_par;


        // calculate players score for each nine holes
        $first_nine_score = intval($round_result->hole_1_score) + intval($round_result->hole_2_score) + intval($round_result->hole_3_score) + intval($round_result->hole_4_score) + intval($round_result->hole_5_score) + intval($round_result->hole_6_score) + intval($round_result->hole_7_score) + intval($round_result->hole_8_score) + intval($round_result->hole_9_score);       
        
        $second_nine_score = intval($round_result->hole_10_score) + intval($round_result->hole_11_score) + intval($round_result->hole_12_score) + intval($round_result->hole_13_score) + intval($round_result->hole_14_score) + intval($round_result->hole_15_score) + intval($round_result->hole_16_score) + intval($round_result->hole_17_score) + intval($round_result->hole_18_score);       
        
        $third_nine_score = intval($round_result->hole_19_score) + intval($round_result->hole_20_score) + intval($round_result->hole_21_score) + intval($round_result->hole_22_score) + intval($round_result->hole_23_score) + intval($round_result->hole_24_score) + intval($round_result->hole_25_score) + intval($round_result->hole_26_score) + intval($round_result->hole_27_score);       

        $round_result->first_nine_score = $first_nine_score;
        
        $round_result->second_nine_score = $second_nine_score;
        
        $round_result->third_nine_score = $third_nine_score;



        // calculate players total score and total course par according to round type and holes played
        $total_score = 0;
        $total_par = 0;

        if($round_result->nine === 'first-nine'){

            $total_score = intval($round_result->first_nine_score);
            $total_par = $first_nine_par;

        }

        if($round_result->nine === 'second-nine'){

            $total_score = intval($round_result->second_nine_score);
            $total_par = $second_nine_par;
            
        }
        
        if($round_result->nine === 'third-nine'){

            $total_score = intval($round_result->third_nine_score);
            $total_par = $third_nine_par;
            
        }        

        if($round_result->nine === 'first-nine-second-nine'){

            $total_score = intval($round_result->first_nine_score) + intval($round_result->second_nine_score);
            $total_par = $first_nine_par + $second_nine_par;

        }

        if($round_result->nine === 'second-nine-third-nine'){

            $total_score = intval($round_result->second_nine_score) + intval($round_result->third_nine_score);
            $total_par = $second_nine_par + $third_nine_par;

        }  
        
        if($round_result->nine === 'first-nine-third-nine'){

            $total_score = intval($round_result->first_nine_score) + intval($round_result->third_nine_score);
            $total_par = $first_nine_par + $third_nine_par;

        } 

        $round_result->total_score = $total_score;
        $round_result->total_par = $total_par;
        
        // calculate plus minus for each nine
        $round_result->plus_minus_first_nine = $first_nine_par - $first_nine_score;
        $round_result->plus_minus_second_nine = $second_nine_par - $second_nine_score;
        $round_result->plus_minus_third_nine = $third_nine_par - $third_nine_score;

        // calculate overall plus minus score
        $round_result->plus_minus =  $total_score - $total_par;



        // calculate putts for each nine
        $round_result->first_nine_putts = intval($round_result->hole_1_putts) + intval($round_result->hole_2_putts) + intval($round_result->hole_3_putts) + intval($round_result->hole_4_putts) + intval($round_result->hole_5_putts) + intval($round_result->hole_6_putts) + intval($round_result->hole_7_putts) + intval($round_result->hole_8_putts) + intval($round_result->hole_9_putts);
        $round_result->second_nine_putts = intval($round_result->hole_10_putts) + intval($round_result->hole_11_putts) + intval($round_result->hole_12_putts) + intval($round_result->hole_13_putts) + intval($round_result->hole_14_putts) + intval($round_result->hole_15_putts) + intval($round_result->hole_16_putts) + intval($round_result->hole_17_putts) + intval($round_result->hole_18_putts);
        $round_result->third_nine_putts = intval($round_result->hole_19_putts) + intval($round_result->hole_20_putts) + intval($round_result->hole_21_putts) + intval($round_result->hole_22_putts) + intval($round_result->hole_23_putts) + intval($round_result->hole_24_putts) + intval($round_result->hole_25_putts) + intval($round_result->hole_26_putts) + intval($round_result->hole_27_putts);

        //calculate total putts for round
        $total_putts = 0;

        if($round_result->nine === 'first-nine'){

            $total_putts = intval($round_result->first_nine_putts);

        }

        if($round_result->nine === 'second-nine'){

            $total_putts = intval($round_result->second_nine_putts);
            
        }
        
        if($round_result->nine === 'third-nine'){

            $total_putts = intval($round_result->third_nine_putts);
            
        }        

        if($round_result->nine === 'first-nine-second-nine'){

            $total_putts = intval($round_result->first_nine_putts) + intval($round_result->second_nine_putts);

        }

        if($round_result->nine === 'second-nine-third-nine'){

            $total_putts = intval($round_result->second_nine_putts) + intval($round_result->third_nine_putts);

        }  
        
        if($round_result->nine === 'first-nine-third-nine'){

            $total_putts = intval($round_result->first_nine_putts) + intval($round_result->third_nine_putts);

        } 

        $round_result->total_putts = $total_putts; 


        // calculate putts_per_hole
        $round_size = 0;

        if($round_result->size === 'full'){
            $round_size = 18;
        }

        if($round_result->size === 'half'){
            $round_size = 9;
        }        

        $round_result->putts_per_hole = $total_putts / $round_size;



        // calculate drops for each nine
        $round_result->first_nine_drops = intval($round_result->hole_1_drops) + intval($round_result->hole_2_drops) + intval($round_result->hole_3_drops) + intval($round_result->hole_4_drops) + intval($round_result->hole_5_drops) + intval($round_result->hole_6_drops) + intval($round_result->hole_7_drops) + intval($round_result->hole_8_drops) + intval($round_result->hole_9_drops);
        $round_result->second_nine_drops = intval($round_result->hole_10_drops) + intval($round_result->hole_11_drops) + intval($round_result->hole_12_drops) + intval($round_result->hole_13_drops) + intval($round_result->hole_14_drops) + intval($round_result->hole_15_drops) + intval($round_result->hole_16_drops) + intval($round_result->hole_17_drops) + intval($round_result->hole_18_drops);
        $round_result->third_nine_drops = intval($round_result->hole_19_drops) + intval($round_result->hole_20_drops) + intval($round_result->hole_21_drops) + intval($round_result->hole_22_drops) + intval($round_result->hole_23_drops) + intval($round_result->hole_24_drops) + intval($round_result->hole_25_drops) + intval($round_result->hole_26_drops) + intval($round_result->hole_27_drops);

        //calculate total drops for round
        $total_drops = 0;

        if($round_result->nine === 'first-nine'){

            $total_drops = intval($round_result->first_nine_drops);

        }

        if($round_result->nine === 'second-nine'){

            $total_drops = intval($round_result->second_nine_drops);
            
        }
        
        if($round_result->nine === 'third-nine'){

            $total_drops = intval($round_result->third_nine_drops);
            
        }        

        if($round_result->nine === 'first-nine-second-nine'){

            $total_drops = intval($round_result->first_nine_drops) + intval($round_result->second_nine_drops);

        }

        if($round_result->nine === 'second-nine-third-nine'){

            $total_drops = intval($round_result->second_nine_drops) + intval($round_result->third_nine_drops);

        }  
        
        if($round_result->nine === 'first-nine-third-nine'){

            $total_drops = intval($round_result->first_nine_drops) + intval($round_result->third_nine_drops);

        } 

        $round_result->total_drops = $total_drops;



        // Fairways in Regulation

        if($round_result->nine === 'first-nine'){

            if($round_result->yards === 'white'){

                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_1_fir > 0, 1, 0) + 
                        if(hole_2_fir > 0, 1, 0) + 
                        if(hole_3_fir > 0, 1, 0) + 
                        if(hole_4_fir > 0, 1, 0) + 
                        if(hole_5_fir > 0, 1, 0) + 
                        if(hole_6_fir > 0, 1, 0) + 
                        if(hole_7_fir > 0, 1, 0) + 
                        if(hole_8_fir > 0, 1, 0) + 
                        if(hole_9_fir > 0, 1, 0)  
                    ) / (
                        if(hole_1_white_par > 3, 1, 0) + 
                        if(hole_2_white_par > 3, 1, 0) + 
                        if(hole_3_white_par > 3, 1, 0) + 
                        if(hole_4_white_par > 3, 1, 0) + 
                        if(hole_5_white_par > 3, 1, 0) + 
                        if(hole_6_white_par > 3, 1, 0) + 
                        if(hole_7_white_par > 3, 1, 0) + 
                        if(hole_8_white_par > 3, 1, 0) + 
                        if(hole_9_white_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage; 

            }
    
            if($round_result->yards === 'yellow'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_1_fir > 0, 1, 0) + 
                        if(hole_2_fir > 0, 1, 0) + 
                        if(hole_3_fir > 0, 1, 0) + 
                        if(hole_4_fir > 0, 1, 0) + 
                        if(hole_5_fir > 0, 1, 0) + 
                        if(hole_6_fir > 0, 1, 0) + 
                        if(hole_7_fir > 0, 1, 0) + 
                        if(hole_8_fir > 0, 1, 0) + 
                        if(hole_9_fir > 0, 1, 0)  
                    ) / (
                        if(hole_1_yellow_par > 3, 1, 0) + 
                        if(hole_2_yellow_par > 3, 1, 0) + 
                        if(hole_3_yellow_par > 3, 1, 0) + 
                        if(hole_4_yellow_par > 3, 1, 0) + 
                        if(hole_5_yellow_par > 3, 1, 0) + 
                        if(hole_6_yellow_par > 3, 1, 0) + 
                        if(hole_7_yellow_par > 3, 1, 0) + 
                        if(hole_8_yellow_par > 3, 1, 0) + 
                        if(hole_9_yellow_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                 

            }    
            
            if($round_result->yards === 'red'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_1_fir > 0, 1, 0) + 
                        if(hole_2_fir > 0, 1, 0) + 
                        if(hole_3_fir > 0, 1, 0) + 
                        if(hole_4_fir > 0, 1, 0) + 
                        if(hole_5_fir > 0, 1, 0) + 
                        if(hole_6_fir > 0, 1, 0) + 
                        if(hole_7_fir > 0, 1, 0) + 
                        if(hole_8_fir > 0, 1, 0) + 
                        if(hole_9_fir > 0, 1, 0)  
                    ) / (
                        if(hole_1_red_par > 3, 1, 0) + 
                        if(hole_2_red_par > 3, 1, 0) + 
                        if(hole_3_red_par > 3, 1, 0) + 
                        if(hole_4_red_par > 3, 1, 0) + 
                        if(hole_5_red_par > 3, 1, 0) + 
                        if(hole_6_red_par > 3, 1, 0) + 
                        if(hole_7_red_par > 3, 1, 0) + 
                        if(hole_8_red_par > 3, 1, 0) + 
                        if(hole_9_red_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage; 

            }                     

        }

        if($round_result->nine === 'second-nine'){

            if($round_result->yards === 'white'){

                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_10_fir > 0, 1, 0) + 
                        if(hole_11_fir > 0, 1, 0) + 
                        if(hole_12_fir > 0, 1, 0) + 
                        if(hole_13_fir > 0, 1, 0) + 
                        if(hole_14_fir > 0, 1, 0) + 
                        if(hole_15_fir > 0, 1, 0) + 
                        if(hole_16_fir > 0, 1, 0) + 
                        if(hole_17_fir > 0, 1, 0) + 
                        if(hole_18_fir > 0, 1, 0)  
                    ) / (
                        if(hole_10_white_par > 3, 1, 0) + 
                        if(hole_11_white_par > 3, 1, 0) + 
                        if(hole_12_white_par > 3, 1, 0) + 
                        if(hole_13_white_par > 3, 1, 0) + 
                        if(hole_14_white_par > 3, 1, 0) + 
                        if(hole_15_white_par > 3, 1, 0) + 
                        if(hole_16_white_par > 3, 1, 0) + 
                        if(hole_17_white_par > 3, 1, 0) + 
                        if(hole_18_white_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage; 

            }
    
            if($round_result->yards === 'yellow'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_10_fir > 0, 1, 0) + 
                        if(hole_11_fir > 0, 1, 0) + 
                        if(hole_12_fir > 0, 1, 0) + 
                        if(hole_13_fir > 0, 1, 0) + 
                        if(hole_14_fir > 0, 1, 0) + 
                        if(hole_15_fir > 0, 1, 0) + 
                        if(hole_16_fir > 0, 1, 0) + 
                        if(hole_17_fir > 0, 1, 0) + 
                        if(hole_18_fir > 0, 1, 0)  
                    ) / (
                        if(hole_10_yellow_par > 3, 1, 0) + 
                        if(hole_11_yellow_par > 3, 1, 0) + 
                        if(hole_12_yellow_par > 3, 1, 0) + 
                        if(hole_13_yellow_par > 3, 1, 0) + 
                        if(hole_14_yellow_par > 3, 1, 0) + 
                        if(hole_15_yellow_par > 3, 1, 0) + 
                        if(hole_16_yellow_par > 3, 1, 0) + 
                        if(hole_17_yellow_par > 3, 1, 0) + 
                        if(hole_18_yellow_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                 

            }    
            
            if($round_result->yards === 'red'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_10_fir > 0, 1, 0) + 
                        if(hole_11_fir > 0, 1, 0) + 
                        if(hole_12_fir > 0, 1, 0) + 
                        if(hole_13_fir > 0, 1, 0) + 
                        if(hole_14_fir > 0, 1, 0) + 
                        if(hole_15_fir > 0, 1, 0) + 
                        if(hole_16_fir > 0, 1, 0) + 
                        if(hole_17_fir > 0, 1, 0) + 
                        if(hole_18_fir > 0, 1, 0)  
                    ) / (
                        if(hole_10_red_par > 3, 1, 0) + 
                        if(hole_11_red_par > 3, 1, 0) + 
                        if(hole_12_red_par > 3, 1, 0) + 
                        if(hole_13_red_par > 3, 1, 0) + 
                        if(hole_14_red_par > 3, 1, 0) + 
                        if(hole_15_red_par > 3, 1, 0) + 
                        if(hole_16_red_par > 3, 1, 0) + 
                        if(hole_17_red_par > 3, 1, 0) + 
                        if(hole_18_red_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage; 

            }                

        }
        
        if($round_result->nine === 'third-nine'){

            if($round_result->yards === 'white'){

                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_19_fir > 0, 1, 0) + 
                        if(hole_20_fir > 0, 1, 0) + 
                        if(hole_21_fir > 0, 1, 0) + 
                        if(hole_22_fir > 0, 1, 0) + 
                        if(hole_23_fir > 0, 1, 0) + 
                        if(hole_24_fir > 0, 1, 0) + 
                        if(hole_25_fir > 0, 1, 0) + 
                        if(hole_26_fir > 0, 1, 0) + 
                        if(hole_27_fir > 0, 1, 0)  
                    ) / (
                        if(hole_19_white_par > 3, 1, 0) + 
                        if(hole_20_white_par > 3, 1, 0) + 
                        if(hole_21_white_par > 3, 1, 0) + 
                        if(hole_22_white_par > 3, 1, 0) + 
                        if(hole_23_white_par > 3, 1, 0) + 
                        if(hole_24_white_par > 3, 1, 0) + 
                        if(hole_25_white_par > 3, 1, 0) + 
                        if(hole_26_white_par > 3, 1, 0) + 
                        if(hole_27_white_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage; 

            }
    
            if($round_result->yards === 'yellow'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_19_fir > 0, 1, 0) + 
                        if(hole_20_fir > 0, 1, 0) + 
                        if(hole_21_fir > 0, 1, 0) + 
                        if(hole_22_fir > 0, 1, 0) + 
                        if(hole_23_fir > 0, 1, 0) + 
                        if(hole_24_fir > 0, 1, 0) + 
                        if(hole_25_fir > 0, 1, 0) + 
                        if(hole_26_fir > 0, 1, 0) + 
                        if(hole_27_fir > 0, 1, 0)  
                    ) / (
                        if(hole_19_yellow_par > 3, 1, 0) + 
                        if(hole_20_yellow_par > 3, 1, 0) + 
                        if(hole_21_yellow_par > 3, 1, 0) + 
                        if(hole_22_yellow_par > 3, 1, 0) + 
                        if(hole_23_yellow_par > 3, 1, 0) + 
                        if(hole_24_yellow_par > 3, 1, 0) + 
                        if(hole_25_yellow_par > 3, 1, 0) + 
                        if(hole_26_yellow_par > 3, 1, 0) + 
                        if(hole_27_yellow_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                 

            }    
            
            if($round_result->yards === 'red'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_19_fir > 0, 1, 0) + 
                        if(hole_20_fir > 0, 1, 0) + 
                        if(hole_21_fir > 0, 1, 0) + 
                        if(hole_22_fir > 0, 1, 0) + 
                        if(hole_23_fir > 0, 1, 0) + 
                        if(hole_24_fir > 0, 1, 0) + 
                        if(hole_25_fir > 0, 1, 0) + 
                        if(hole_26_fir > 0, 1, 0) + 
                        if(hole_27_fir > 0, 1, 0)  
                    ) / (
                        if(hole_19_red_par > 3, 1, 0) + 
                        if(hole_20_red_par > 3, 1, 0) + 
                        if(hole_21_red_par > 3, 1, 0) + 
                        if(hole_22_red_par > 3, 1, 0) + 
                        if(hole_23_red_par > 3, 1, 0) + 
                        if(hole_24_red_par > 3, 1, 0) + 
                        if(hole_25_red_par > 3, 1, 0) + 
                        if(hole_26_red_par > 3, 1, 0) + 
                        if(hole_27_red_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage; 

            }                 

        }        

        if($round_result->nine === 'first-nine-second-nine'){

            if($round_result->yards === 'white'){

                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_1_fir > 0, 1, 0) + 
                        if(hole_2_fir > 0, 1, 0) + 
                        if(hole_3_fir > 0, 1, 0) + 
                        if(hole_4_fir > 0, 1, 0) + 
                        if(hole_5_fir > 0, 1, 0) + 
                        if(hole_6_fir > 0, 1, 0) + 
                        if(hole_7_fir > 0, 1, 0) + 
                        if(hole_8_fir > 0, 1, 0) + 
                        if(hole_9_fir > 0, 1, 0) + 
                        if(hole_10_fir > 0, 1, 0) + 
                        if(hole_11_fir > 0, 1, 0) + 
                        if(hole_12_fir > 0, 1, 0) + 
                        if(hole_13_fir > 0, 1, 0) + 
                        if(hole_14_fir > 0, 1, 0) + 
                        if(hole_15_fir > 0, 1, 0) + 
                        if(hole_16_fir > 0, 1, 0) + 
                        if(hole_17_fir > 0, 1, 0) + 
                        if(hole_18_fir > 0, 1, 0)                          
                    ) / (
                        if(hole_1_white_par > 3, 1, 0) + 
                        if(hole_2_white_par > 3, 1, 0) + 
                        if(hole_3_white_par > 3, 1, 0) + 
                        if(hole_4_white_par > 3, 1, 0) + 
                        if(hole_5_white_par > 3, 1, 0) + 
                        if(hole_6_white_par > 3, 1, 0) + 
                        if(hole_7_white_par > 3, 1, 0) + 
                        if(hole_8_white_par > 3, 1, 0) + 
                        if(hole_9_white_par > 3, 1, 0) + 
                        if(hole_10_white_par > 3, 1, 0) + 
                        if(hole_11_white_par > 3, 1, 0) + 
                        if(hole_12_white_par > 3, 1, 0) + 
                        if(hole_13_white_par > 3, 1, 0) + 
                        if(hole_14_white_par > 3, 1, 0) + 
                        if(hole_15_white_par > 3, 1, 0) + 
                        if(hole_16_white_par > 3, 1, 0) + 
                        if(hole_17_white_par > 3, 1, 0) + 
                        if(hole_18_white_par > 3, 1, 0)                          
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                 

            }
    
            if($round_result->yards === 'yellow'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_1_fir > 0, 1, 0) + 
                        if(hole_2_fir > 0, 1, 0) + 
                        if(hole_3_fir > 0, 1, 0) + 
                        if(hole_4_fir > 0, 1, 0) + 
                        if(hole_5_fir > 0, 1, 0) + 
                        if(hole_6_fir > 0, 1, 0) + 
                        if(hole_7_fir > 0, 1, 0) + 
                        if(hole_8_fir > 0, 1, 0) + 
                        if(hole_9_fir > 0, 1, 0) + 
                        if(hole_10_fir > 0, 1, 0) + 
                        if(hole_11_fir > 0, 1, 0) + 
                        if(hole_12_fir > 0, 1, 0) + 
                        if(hole_13_fir > 0, 1, 0) + 
                        if(hole_14_fir > 0, 1, 0) + 
                        if(hole_15_fir > 0, 1, 0) + 
                        if(hole_16_fir > 0, 1, 0) + 
                        if(hole_17_fir > 0, 1, 0) + 
                        if(hole_18_fir > 0, 1, 0)                          
                    ) / (
                        if(hole_1_yellow_par > 3, 1, 0) + 
                        if(hole_2_yellow_par > 3, 1, 0) + 
                        if(hole_3_yellow_par > 3, 1, 0) + 
                        if(hole_4_yellow_par > 3, 1, 0) + 
                        if(hole_5_yellow_par > 3, 1, 0) + 
                        if(hole_6_yellow_par > 3, 1, 0) + 
                        if(hole_7_yellow_par > 3, 1, 0) + 
                        if(hole_8_yellow_par > 3, 1, 0) + 
                        if(hole_9_yellow_par > 3, 1, 0) + 
                        if(hole_10_yellow_par > 3, 1, 0) + 
                        if(hole_11_yellow_par > 3, 1, 0) + 
                        if(hole_12_yellow_par > 3, 1, 0) + 
                        if(hole_13_yellow_par > 3, 1, 0) + 
                        if(hole_14_yellow_par > 3, 1, 0) + 
                        if(hole_15_yellow_par > 3, 1, 0) + 
                        if(hole_16_yellow_par > 3, 1, 0) + 
                        if(hole_17_yellow_par > 3, 1, 0) + 
                        if(hole_18_yellow_par > 3, 1, 0)                          
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                  

            }    
            
            if($round_result->yards === 'red'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_1_fir > 0, 1, 0) + 
                        if(hole_2_fir > 0, 1, 0) + 
                        if(hole_3_fir > 0, 1, 0) + 
                        if(hole_4_fir > 0, 1, 0) + 
                        if(hole_5_fir > 0, 1, 0) + 
                        if(hole_6_fir > 0, 1, 0) + 
                        if(hole_7_fir > 0, 1, 0) + 
                        if(hole_8_fir > 0, 1, 0) + 
                        if(hole_9_fir > 0, 1, 0) + 
                        if(hole_10_fir > 0, 1, 0) + 
                        if(hole_11_fir > 0, 1, 0) + 
                        if(hole_12_fir > 0, 1, 0) + 
                        if(hole_13_fir > 0, 1, 0) + 
                        if(hole_14_fir > 0, 1, 0) + 
                        if(hole_15_fir > 0, 1, 0) + 
                        if(hole_16_fir > 0, 1, 0) + 
                        if(hole_17_fir > 0, 1, 0) + 
                        if(hole_18_fir > 0, 1, 0)                          
                    ) / (
                        if(hole_1_red_par > 3, 1, 0) + 
                        if(hole_2_red_par > 3, 1, 0) + 
                        if(hole_3_red_par > 3, 1, 0) + 
                        if(hole_4_red_par > 3, 1, 0) + 
                        if(hole_5_red_par > 3, 1, 0) + 
                        if(hole_6_red_par > 3, 1, 0) + 
                        if(hole_7_red_par > 3, 1, 0) + 
                        if(hole_8_red_par > 3, 1, 0) + 
                        if(hole_9_red_par > 3, 1, 0) + 
                        if(hole_10_red_par > 3, 1, 0) + 
                        if(hole_11_red_par > 3, 1, 0) + 
                        if(hole_12_red_par > 3, 1, 0) + 
                        if(hole_13_red_par > 3, 1, 0) + 
                        if(hole_14_red_par > 3, 1, 0) + 
                        if(hole_15_red_par > 3, 1, 0) + 
                        if(hole_16_red_par > 3, 1, 0) + 
                        if(hole_17_red_par > 3, 1, 0) + 
                        if(hole_18_red_par > 3, 1, 0)                          
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                  

            }  

        }

        if($round_result->nine === 'second-nine-third-nine'){

            if($round_result->yards === 'white'){

                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_10_fir > 0, 1, 0) + 
                        if(hole_11_fir > 0, 1, 0) + 
                        if(hole_12_fir > 0, 1, 0) + 
                        if(hole_13_fir > 0, 1, 0) + 
                        if(hole_14_fir > 0, 1, 0) + 
                        if(hole_15_fir > 0, 1, 0) + 
                        if(hole_16_fir > 0, 1, 0) + 
                        if(hole_17_fir > 0, 1, 0) + 
                        if(hole_18_fir > 0, 1, 0) + 
                        if(hole_19_fir > 0, 1, 0) + 
                        if(hole_20_fir > 0, 1, 0) + 
                        if(hole_21_fir > 0, 1, 0) + 
                        if(hole_22_fir > 0, 1, 0) + 
                        if(hole_23_fir > 0, 1, 0) + 
                        if(hole_24_fir > 0, 1, 0) + 
                        if(hole_25_fir > 0, 1, 0) + 
                        if(hole_26_fir > 0, 1, 0) + 
                        if(hole_27_fir > 0, 1, 0)                                                  
                    ) / (
                        if(hole_10_white_par > 3, 1, 0) + 
                        if(hole_11_white_par > 3, 1, 0) + 
                        if(hole_12_white_par > 3, 1, 0) + 
                        if(hole_13_white_par > 3, 1, 0) + 
                        if(hole_14_white_par > 3, 1, 0) + 
                        if(hole_15_white_par > 3, 1, 0) + 
                        if(hole_16_white_par > 3, 1, 0) + 
                        if(hole_17_white_par > 3, 1, 0) + 
                        if(hole_18_white_par > 3, 1, 0) +  
                        if(hole_19_white_par > 3, 1, 0) + 
                        if(hole_20_white_par > 3, 1, 0) + 
                        if(hole_21_white_par > 3, 1, 0) + 
                        if(hole_22_white_par > 3, 1, 0) + 
                        if(hole_23_white_par > 3, 1, 0) + 
                        if(hole_24_white_par > 3, 1, 0) + 
                        if(hole_25_white_par > 3, 1, 0) + 
                        if(hole_26_white_par > 3, 1, 0) + 
                        if(hole_27_white_par > 3, 1, 0)                                                 
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                  

            }
    
            if($round_result->yards === 'yellow'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_10_fir > 0, 1, 0) + 
                        if(hole_11_fir > 0, 1, 0) + 
                        if(hole_12_fir > 0, 1, 0) + 
                        if(hole_13_fir > 0, 1, 0) + 
                        if(hole_14_fir > 0, 1, 0) + 
                        if(hole_15_fir > 0, 1, 0) + 
                        if(hole_16_fir > 0, 1, 0) + 
                        if(hole_17_fir > 0, 1, 0) + 
                        if(hole_18_fir > 0, 1, 0) + 
                        if(hole_19_fir > 0, 1, 0) + 
                        if(hole_20_fir > 0, 1, 0) + 
                        if(hole_21_fir > 0, 1, 0) + 
                        if(hole_22_fir > 0, 1, 0) + 
                        if(hole_23_fir > 0, 1, 0) + 
                        if(hole_24_fir > 0, 1, 0) + 
                        if(hole_25_fir > 0, 1, 0) + 
                        if(hole_26_fir > 0, 1, 0) + 
                        if(hole_27_fir > 0, 1, 0)                                                  
                    ) / (
                        if(hole_10_yellow_par > 3, 1, 0) + 
                        if(hole_11_yellow_par > 3, 1, 0) + 
                        if(hole_12_yellow_par > 3, 1, 0) + 
                        if(hole_13_yellow_par > 3, 1, 0) + 
                        if(hole_14_yellow_par > 3, 1, 0) + 
                        if(hole_15_yellow_par > 3, 1, 0) + 
                        if(hole_16_yellow_par > 3, 1, 0) + 
                        if(hole_17_yellow_par > 3, 1, 0) + 
                        if(hole_18_yellow_par > 3, 1, 0) +  
                        if(hole_19_yellow_par > 3, 1, 0) + 
                        if(hole_20_yellow_par > 3, 1, 0) + 
                        if(hole_21_yellow_par > 3, 1, 0) + 
                        if(hole_22_yellow_par > 3, 1, 0) + 
                        if(hole_23_yellow_par > 3, 1, 0) + 
                        if(hole_24_yellow_par > 3, 1, 0) + 
                        if(hole_25_yellow_par > 3, 1, 0) + 
                        if(hole_26_yellow_par > 3, 1, 0) + 
                        if(hole_27_yellow_par > 3, 1, 0)                                                 
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                

            }    
            
            if($round_result->yards === 'red'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_10_fir > 0, 1, 0) + 
                        if(hole_11_fir > 0, 1, 0) + 
                        if(hole_12_fir > 0, 1, 0) + 
                        if(hole_13_fir > 0, 1, 0) + 
                        if(hole_14_fir > 0, 1, 0) + 
                        if(hole_15_fir > 0, 1, 0) + 
                        if(hole_16_fir > 0, 1, 0) + 
                        if(hole_17_fir > 0, 1, 0) + 
                        if(hole_18_fir > 0, 1, 0) + 
                        if(hole_19_fir > 0, 1, 0) + 
                        if(hole_20_fir > 0, 1, 0) + 
                        if(hole_21_fir > 0, 1, 0) + 
                        if(hole_22_fir > 0, 1, 0) + 
                        if(hole_23_fir > 0, 1, 0) + 
                        if(hole_24_fir > 0, 1, 0) + 
                        if(hole_25_fir > 0, 1, 0) + 
                        if(hole_26_fir > 0, 1, 0) + 
                        if(hole_27_fir > 0, 1, 0)                                                  
                    ) / (
                        if(hole_10_red_par > 3, 1, 0) + 
                        if(hole_11_red_par > 3, 1, 0) + 
                        if(hole_12_red_par > 3, 1, 0) + 
                        if(hole_13_red_par > 3, 1, 0) + 
                        if(hole_14_red_par > 3, 1, 0) + 
                        if(hole_15_red_par > 3, 1, 0) + 
                        if(hole_16_red_par > 3, 1, 0) + 
                        if(hole_17_red_par > 3, 1, 0) + 
                        if(hole_18_red_par > 3, 1, 0) +  
                        if(hole_19_red_par > 3, 1, 0) + 
                        if(hole_20_red_par > 3, 1, 0) + 
                        if(hole_21_red_par > 3, 1, 0) + 
                        if(hole_22_red_par > 3, 1, 0) + 
                        if(hole_23_red_par > 3, 1, 0) + 
                        if(hole_24_red_par > 3, 1, 0) + 
                        if(hole_25_red_par > 3, 1, 0) + 
                        if(hole_26_red_par > 3, 1, 0) + 
                        if(hole_27_red_par > 3, 1, 0)                                                 
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;

            }  

        }  
        
        if($round_result->nine === 'first-nine-third-nine'){

            if($round_result->yards === 'white'){

                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_1_fir > 0, 1, 0) + 
                        if(hole_2_fir > 0, 1, 0) + 
                        if(hole_3_fir > 0, 1, 0) + 
                        if(hole_4_fir > 0, 1, 0) + 
                        if(hole_5_fir > 0, 1, 0) + 
                        if(hole_6_fir > 0, 1, 0) + 
                        if(hole_7_fir > 0, 1, 0) + 
                        if(hole_8_fir > 0, 1, 0) + 
                        if(hole_9_fir > 0, 1, 0) + 
                        if(hole_19_fir > 0, 1, 0) + 
                        if(hole_20_fir > 0, 1, 0) + 
                        if(hole_21_fir > 0, 1, 0) + 
                        if(hole_22_fir > 0, 1, 0) + 
                        if(hole_23_fir > 0, 1, 0) + 
                        if(hole_24_fir > 0, 1, 0) + 
                        if(hole_25_fir > 0, 1, 0) + 
                        if(hole_26_fir > 0, 1, 0) + 
                        if(hole_27_fir > 0, 1, 0)                                                  
                    ) / (
                        if(hole_1_white_par > 3, 1, 0) + 
                        if(hole_2_white_par > 3, 1, 0) + 
                        if(hole_3_white_par > 3, 1, 0) + 
                        if(hole_4_white_par > 3, 1, 0) + 
                        if(hole_5_white_par > 3, 1, 0) + 
                        if(hole_6_white_par > 3, 1, 0) + 
                        if(hole_7_white_par > 3, 1, 0) + 
                        if(hole_8_white_par > 3, 1, 0) + 
                        if(hole_9_white_par > 3, 1, 0) +  
                        if(hole_19_white_par > 3, 1, 0) + 
                        if(hole_20_white_par > 3, 1, 0) + 
                        if(hole_21_white_par > 3, 1, 0) + 
                        if(hole_22_white_par > 3, 1, 0) + 
                        if(hole_23_white_par > 3, 1, 0) + 
                        if(hole_24_white_par > 3, 1, 0) + 
                        if(hole_25_white_par > 3, 1, 0) + 
                        if(hole_26_white_par > 3, 1, 0) + 
                        if(hole_27_white_par > 3, 1, 0)                                                 
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                

            }
    
            if($round_result->yards === 'yellow'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_1_fir > 0, 1, 0) + 
                        if(hole_2_fir > 0, 1, 0) + 
                        if(hole_3_fir > 0, 1, 0) + 
                        if(hole_4_fir > 0, 1, 0) + 
                        if(hole_5_fir > 0, 1, 0) + 
                        if(hole_6_fir > 0, 1, 0) + 
                        if(hole_7_fir > 0, 1, 0) + 
                        if(hole_8_fir > 0, 1, 0) + 
                        if(hole_9_fir > 0, 1, 0) + 
                        if(hole_19_fir > 0, 1, 0) + 
                        if(hole_20_fir > 0, 1, 0) + 
                        if(hole_21_fir > 0, 1, 0) + 
                        if(hole_22_fir > 0, 1, 0) + 
                        if(hole_23_fir > 0, 1, 0) + 
                        if(hole_24_fir > 0, 1, 0) + 
                        if(hole_25_fir > 0, 1, 0) + 
                        if(hole_26_fir > 0, 1, 0) + 
                        if(hole_27_fir > 0, 1, 0)                                                  
                    ) / (
                        if(hole_1_yellow_par > 3, 1, 0) + 
                        if(hole_2_yellow_par > 3, 1, 0) + 
                        if(hole_3_yellow_par > 3, 1, 0) + 
                        if(hole_4_yellow_par > 3, 1, 0) + 
                        if(hole_5_yellow_par > 3, 1, 0) + 
                        if(hole_6_yellow_par > 3, 1, 0) + 
                        if(hole_7_yellow_par > 3, 1, 0) + 
                        if(hole_8_yellow_par > 3, 1, 0) + 
                        if(hole_9_yellow_par > 3, 1, 0) +  
                        if(hole_19_yellow_par > 3, 1, 0) + 
                        if(hole_20_yellow_par > 3, 1, 0) + 
                        if(hole_21_yellow_par > 3, 1, 0) + 
                        if(hole_22_yellow_par > 3, 1, 0) + 
                        if(hole_23_yellow_par > 3, 1, 0) + 
                        if(hole_24_yellow_par > 3, 1, 0) + 
                        if(hole_25_yellow_par > 3, 1, 0) + 
                        if(hole_26_yellow_par > 3, 1, 0) + 
                        if(hole_27_yellow_par > 3, 1, 0)                                                 
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;    

            }    
            
            if($round_result->yards === 'red'){
    
                $firs = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("
                    SUM(
                        if(hole_1_fir > 0, 1, 0) + 
                        if(hole_2_fir > 0, 1, 0) + 
                        if(hole_3_fir > 0, 1, 0) + 
                        if(hole_4_fir > 0, 1, 0) + 
                        if(hole_5_fir > 0, 1, 0) + 
                        if(hole_6_fir > 0, 1, 0) + 
                        if(hole_7_fir > 0, 1, 0) + 
                        if(hole_8_fir > 0, 1, 0) + 
                        if(hole_9_fir > 0, 1, 0) + 
                        if(hole_19_fir > 0, 1, 0) + 
                        if(hole_20_fir > 0, 1, 0) + 
                        if(hole_21_fir > 0, 1, 0) + 
                        if(hole_22_fir > 0, 1, 0) + 
                        if(hole_23_fir > 0, 1, 0) + 
                        if(hole_24_fir > 0, 1, 0) + 
                        if(hole_25_fir > 0, 1, 0) + 
                        if(hole_26_fir > 0, 1, 0) + 
                        if(hole_27_fir > 0, 1, 0) +                                                 
                    ) / (
                        if(hole_1_red_par > 3, 1, 0) + 
                        if(hole_2_red_par > 3, 1, 0) + 
                        if(hole_3_red_par > 3, 1, 0) + 
                        if(hole_4_red_par > 3, 1, 0) + 
                        if(hole_5_red_par > 3, 1, 0) + 
                        if(hole_6_red_par > 3, 1, 0) + 
                        if(hole_7_red_par > 3, 1, 0) + 
                        if(hole_8_red_par > 3, 1, 0) + 
                        if(hole_9_red_par > 3, 1, 0) +  
                        if(hole_19_red_par > 3, 1, 0) + 
                        if(hole_20_red_par > 3, 1, 0) + 
                        if(hole_21_red_par > 3, 1, 0) + 
                        if(hole_22_red_par > 3, 1, 0) + 
                        if(hole_23_red_par > 3, 1, 0) + 
                        if(hole_24_red_par > 3, 1, 0) + 
                        if(hole_25_red_par > 3, 1, 0) + 
                        if(hole_26_red_par > 3, 1, 0) + 
                        if(hole_27_red_par > 3, 1, 0) +                                                
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                    

            }  

        } 

        $round_result->fir_percentage = $fir_percentage;


        // calculate greens in regulation
        if($round_result->nine === 'first-nine'){

            $girs = \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_1_gir > 0, 1, 0) + 
                if(hole_2_gir > 0, 1, 0) + 
                if(hole_3_gir > 0, 1, 0) + 
                if(hole_4_gir > 0, 1, 0) + 
                if(hole_5_gir > 0, 1, 0) + 
                if(hole_6_gir > 0, 1, 0) + 
                if(hole_7_gir > 0, 1, 0) + 
                if(hole_8_gir > 0, 1, 0) + 
                if(hole_9_gir > 0, 1, 0)
                ) / 9 * 100 as gir_percentage")                        
            ->first();

            $gir_percentage = $girs->gir_percentage;               

        }

        if($round_result->nine === 'second-nine'){

            $girs = \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_10_gir > 0, 1, 0) + 
                if(hole_11_gir > 0, 1, 0) + 
                if(hole_12_gir > 0, 1, 0) + 
                if(hole_13_gir > 0, 1, 0) + 
                if(hole_14_gir > 0, 1, 0) + 
                if(hole_15_gir > 0, 1, 0) + 
                if(hole_16_gir > 0, 1, 0) + 
                if(hole_17_gir > 0, 1, 0) + 
                if(hole_18_gir > 0, 1, 0)
                ) / 9 * 100 as gir_percentage")                        
            ->first();

            $gir_percentage = $girs->gir_percentage;             
            
        }
        
        if($round_result->nine === 'third-nine'){

            $girs = \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_19_gir > 0, 1, 0) + 
                if(hole_20_gir > 0, 1, 0) + 
                if(hole_21_gir > 0, 1, 0) + 
                if(hole_22_gir > 0, 1, 0) + 
                if(hole_23_gir > 0, 1, 0) + 
                if(hole_24_gir > 0, 1, 0) + 
                if(hole_25_gir > 0, 1, 0) + 
                if(hole_26_gir > 0, 1, 0) + 
                if(hole_27_gir > 0, 1, 0)
                ) / 9 * 100 as gir_percentage")                        
            ->first();

            $gir_percentage = $girs->gir_percentage;             
            
        }        

        if($round_result->nine === 'first-nine-second-nine'){

            $girs = \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_1_gir > 0, 1, 0) + 
                if(hole_2_gir > 0, 1, 0) + 
                if(hole_3_gir > 0, 1, 0) + 
                if(hole_4_gir > 0, 1, 0) + 
                if(hole_5_gir > 0, 1, 0) + 
                if(hole_6_gir > 0, 1, 0) + 
                if(hole_7_gir > 0, 1, 0) + 
                if(hole_8_gir > 0, 1, 0) + 
                if(hole_9_gir > 0, 1, 0) + 
                if(hole_10_gir > 0, 1, 0) + 
                if(hole_11_gir > 0, 1, 0) + 
                if(hole_12_gir > 0, 1, 0) + 
                if(hole_13_gir > 0, 1, 0) + 
                if(hole_14_gir > 0, 1, 0) + 
                if(hole_15_gir > 0, 1, 0) + 
                if(hole_16_gir > 0, 1, 0) + 
                if(hole_17_gir > 0, 1, 0) + 
                if(hole_18_gir > 0, 1, 0)
                ) / 18 * 100 as gir_percentage")                        
            ->first();

            $gir_percentage = $girs->gir_percentage;              

        }

        if($round_result->nine === 'second-nine-third-nine'){

            $girs = \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_10_gir > 0, 1, 0) + 
                if(hole_11_gir > 0, 1, 0) + 
                if(hole_12_gir > 0, 1, 0) + 
                if(hole_13_gir > 0, 1, 0) + 
                if(hole_14_gir > 0, 1, 0) + 
                if(hole_15_gir > 0, 1, 0) + 
                if(hole_16_gir > 0, 1, 0) + 
                if(hole_17_gir > 0, 1, 0) + 
                if(hole_18_gir > 0, 1, 0) +
                if(hole_19_gir > 0, 1, 0) + 
                if(hole_20_gir > 0, 1, 0) + 
                if(hole_21_gir > 0, 1, 0) + 
                if(hole_22_gir > 0, 1, 0) + 
                if(hole_23_gir > 0, 1, 0) + 
                if(hole_24_gir > 0, 1, 0) + 
                if(hole_25_gir > 0, 1, 0) + 
                if(hole_26_gir > 0, 1, 0) + 
                if(hole_27_gir > 0, 1, 0)                  
                ) / 18 * 100 as gir_percentage")                        
            ->first();

            $gir_percentage = $girs->gir_percentage;              

        }  
        
        if($round_result->nine === 'first-nine-third-nine'){

            $girs = \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_1_gir > 0, 1, 0) + 
                if(hole_2_gir > 0, 1, 0) + 
                if(hole_3_gir > 0, 1, 0) + 
                if(hole_4_gir > 0, 1, 0) + 
                if(hole_5_gir > 0, 1, 0) + 
                if(hole_6_gir > 0, 1, 0) + 
                if(hole_7_gir > 0, 1, 0) + 
                if(hole_8_gir > 0, 1, 0) + 
                if(hole_9_gir > 0, 1, 0) + 
                if(hole_19_gir > 0, 1, 0) + 
                if(hole_20_gir > 0, 1, 0) + 
                if(hole_21_gir > 0, 1, 0) + 
                if(hole_22_gir > 0, 1, 0) + 
                if(hole_23_gir > 0, 1, 0) + 
                if(hole_24_gir > 0, 1, 0) + 
                if(hole_25_gir > 0, 1, 0) + 
                if(hole_26_gir > 0, 1, 0) + 
                if(hole_27_gir > 0, 1, 0)
                ) / 18 * 100 as gir_percentage")                        
            ->first();

            $gir_percentage = $girs->gir_percentage;                

        } 

        $round_result->gir_percentage = $gir_percentage;

        


        // calculate scrambling

        if($round_result->nine === 'first-nine'){

            $scrambles= \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_1_score <= hole_1_white_par and hole_1_gir < 1, 1, 0) + 
                if(hole_2_score <= hole_2_white_par and hole_2_gir < 1, 1, 0) + 
                if(hole_3_score <= hole_3_white_par and hole_3_gir < 1, 1, 0) + 
                if(hole_4_score <= hole_4_white_par and hole_4_gir < 1, 1, 0) + 
                if(hole_5_score <= hole_5_white_par and hole_5_gir < 1, 1, 0) + 
                if(hole_6_score <= hole_6_white_par and hole_6_gir < 1, 1, 0) + 
                if(hole_7_score <= hole_7_white_par and hole_7_gir < 1, 1, 0) + 
                if(hole_8_score <= hole_8_white_par and hole_8_gir < 1, 1, 0) + 
                if(hole_9_score <= hole_9_white_par and hole_9_gir < 1, 1, 0) 

            ) / (
                if(hole_1_gir < 1, 1, 0) + 
                if(hole_2_gir < 1, 1, 0) + 
                if(hole_3_gir < 1, 1, 0) + 
                if(hole_4_gir < 1, 1, 0) + 
                if(hole_5_gir < 1, 1, 0) + 
                if(hole_6_gir < 1, 1, 0) + 
                if(hole_7_gir < 1, 1, 0) + 
                if(hole_8_gir < 1, 1, 0) + 
                if(hole_9_gir < 1, 1, 0) 
            ) * 100 as scrambling")             
                       
            ->first();

            $scrambling = $scrambles->scrambling;              

        }

        if($round_result->nine === 'second-nine'){

            $scrambles= \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_10_score <= hole_1_white_par and hole_1_gir < 1, 1, 0) + 
                if(hole_11_score <= hole_2_white_par and hole_2_gir < 1, 1, 0) + 
                if(hole_12_score <= hole_3_white_par and hole_3_gir < 1, 1, 0) + 
                if(hole_13_score <= hole_4_white_par and hole_4_gir < 1, 1, 0) + 
                if(hole_14_score <= hole_5_white_par and hole_5_gir < 1, 1, 0) + 
                if(hole_15_score <= hole_6_white_par and hole_6_gir < 1, 1, 0) + 
                if(hole_16_score <= hole_7_white_par and hole_7_gir < 1, 1, 0) + 
                if(hole_17_score <= hole_8_white_par and hole_8_gir < 1, 1, 0) + 
                if(hole_18_score <= hole_9_white_par and hole_9_gir < 1, 1, 0) 

            ) / (
                if(hole_10_gir < 1, 1, 0) + 
                if(hole_11_gir < 1, 1, 0) + 
                if(hole_12_gir < 1, 1, 0) + 
                if(hole_13_gir < 1, 1, 0) + 
                if(hole_14_gir < 1, 1, 0) + 
                if(hole_15_gir < 1, 1, 0) + 
                if(hole_16_gir < 1, 1, 0) + 
                if(hole_17_gir < 1, 1, 0) + 
                if(hole_18_gir < 1, 1, 0) 
            ) * 100 as scrambling")             
                       
            ->first();

            $scrambling = $scrambles->scrambling;              

        }
        
        if($round_result->nine === 'third-nine'){

            $scrambles= \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_19_score <= hole_1_white_par and hole_1_gir < 1, 1, 0) + 
                if(hole_20_score <= hole_2_white_par and hole_2_gir < 1, 1, 0) + 
                if(hole_21_score <= hole_3_white_par and hole_3_gir < 1, 1, 0) + 
                if(hole_22_score <= hole_4_white_par and hole_4_gir < 1, 1, 0) + 
                if(hole_23_score <= hole_5_white_par and hole_5_gir < 1, 1, 0) + 
                if(hole_24_score <= hole_6_white_par and hole_6_gir < 1, 1, 0) + 
                if(hole_25_score <= hole_7_white_par and hole_7_gir < 1, 1, 0) + 
                if(hole_26_score <= hole_8_white_par and hole_8_gir < 1, 1, 0) + 
                if(hole_27_score <= hole_9_white_par and hole_9_gir < 1, 1, 0) 

            ) / (
                if(hole_19_gir < 1, 1, 0) + 
                if(hole_20_gir < 1, 1, 0) + 
                if(hole_21_gir < 1, 1, 0) + 
                if(hole_22_gir < 1, 1, 0) + 
                if(hole_23_gir < 1, 1, 0) + 
                if(hole_24_gir < 1, 1, 0) + 
                if(hole_25_gir < 1, 1, 0) + 
                if(hole_26_gir < 1, 1, 0) + 
                if(hole_27_gir < 1, 1, 0) 
            ) * 100 as scrambling")             
                       
            ->first();

            $scrambling = $scrambles->scrambling;             

        }        

        if($round_result->nine === 'first-nine-second-nine'){

            $scrambles= \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_1_score <= hole_1_white_par and hole_1_gir < 1, 1, 0) + 
                if(hole_2_score <= hole_2_white_par and hole_2_gir < 1, 1, 0) + 
                if(hole_3_score <= hole_3_white_par and hole_3_gir < 1, 1, 0) + 
                if(hole_4_score <= hole_4_white_par and hole_4_gir < 1, 1, 0) + 
                if(hole_5_score <= hole_5_white_par and hole_5_gir < 1, 1, 0) + 
                if(hole_6_score <= hole_6_white_par and hole_6_gir < 1, 1, 0) + 
                if(hole_7_score <= hole_7_white_par and hole_7_gir < 1, 1, 0) + 
                if(hole_8_score <= hole_8_white_par and hole_8_gir < 1, 1, 0) + 
                if(hole_9_score <= hole_9_white_par and hole_9_gir < 1, 1, 0) +
                if(hole_10_score <= hole_10_white_par and hole_10_gir < 1, 1, 0) +
                if(hole_11_score <= hole_11_white_par and hole_11_gir < 1, 1, 0) +
                if(hole_12_score <= hole_12_white_par and hole_12_gir < 1, 1, 0) +
                if(hole_13_score <= hole_13_white_par and hole_13_gir < 1, 1, 0) +
                if(hole_14_score <= hole_14_white_par and hole_14_gir < 1, 1, 0) +
                if(hole_15_score <= hole_15_white_par and hole_15_gir < 1, 1, 0) +
                if(hole_16_score <= hole_16_white_par and hole_16_gir < 1, 1, 0) +
                if(hole_17_score <= hole_17_white_par and hole_17_gir < 1, 1, 0) +
                if(hole_18_score <= hole_18_white_par and hole_18_gir < 1, 1, 0)
            ) / (
                if(hole_1_gir < 1, 1, 0) + 
                if(hole_2_gir < 1, 1, 0) + 
                if(hole_3_gir < 1, 1, 0) + 
                if(hole_4_gir < 1, 1, 0) + 
                if(hole_5_gir < 1, 1, 0) + 
                if(hole_6_gir < 1, 1, 0) + 
                if(hole_7_gir < 1, 1, 0) + 
                if(hole_8_gir < 1, 1, 0) + 
                if(hole_9_gir < 1, 1, 0) +
                if(hole_10_gir < 1, 1, 0) + 
                if(hole_11_gir < 1, 1, 0) + 
                if(hole_12_gir < 1, 1, 0) + 
                if(hole_13_gir < 1, 1, 0) + 
                if(hole_14_gir < 1, 1, 0) + 
                if(hole_15_gir < 1, 1, 0) + 
                if(hole_16_gir < 1, 1, 0) + 
                if(hole_17_gir < 1, 1, 0) + 
                if(hole_18_gir < 1, 1, 0)                 
            ) * 100 as scrambling")             
                       
            ->first();

            $scrambling = $scrambles->scrambling;               

        }

        if($round_result->nine === 'second-nine-third-nine'){

            $scrambles= \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_10_score <= hole_10_white_par and hole_10_gir < 1, 1, 0) +
                if(hole_11_score <= hole_11_white_par and hole_11_gir < 1, 1, 0) +
                if(hole_12_score <= hole_12_white_par and hole_12_gir < 1, 1, 0) +
                if(hole_13_score <= hole_13_white_par and hole_13_gir < 1, 1, 0) +
                if(hole_14_score <= hole_14_white_par and hole_14_gir < 1, 1, 0) +
                if(hole_15_score <= hole_15_white_par and hole_15_gir < 1, 1, 0) +
                if(hole_16_score <= hole_16_white_par and hole_16_gir < 1, 1, 0) +
                if(hole_17_score <= hole_17_white_par and hole_17_gir < 1, 1, 0) +
                if(hole_18_score <= hole_18_white_par and hole_18_gir < 1, 1, 0) +
                if(hole_19_score <= hole_19_white_par and hole_19_gir < 1, 1, 0) + 
                if(hole_20_score <= hole_20_white_par and hole_20_gir < 1, 1, 0) + 
                if(hole_21_score <= hole_21_white_par and hole_21_gir < 1, 1, 0) + 
                if(hole_22_score <= hole_22_white_par and hole_22_gir < 1, 1, 0) + 
                if(hole_23_score <= hole_23_white_par and hole_23_gir < 1, 1, 0) + 
                if(hole_24_score <= hole_24_white_par and hole_24_gir < 1, 1, 0) + 
                if(hole_25_score <= hole_25_white_par and hole_25_gir < 1, 1, 0) + 
                if(hole_26_score <= hole_26_white_par and hole_26_gir < 1, 1, 0) + 
                if(hole_27_score <= hole_27_white_par and hole_27_gir < 1, 1, 0)                 
            ) / (
                if(hole_10_gir < 1, 1, 0) + 
                if(hole_11_gir < 1, 1, 0) + 
                if(hole_12_gir < 1, 1, 0) + 
                if(hole_13_gir < 1, 1, 0) + 
                if(hole_14_gir < 1, 1, 0) + 
                if(hole_15_gir < 1, 1, 0) + 
                if(hole_16_gir < 1, 1, 0) + 
                if(hole_17_gir < 1, 1, 0) + 
                if(hole_18_gir < 1, 1, 0) +
                if(hole_19_gir < 1, 1, 0) + 
                if(hole_20_gir < 1, 1, 0) + 
                if(hole_21_gir < 1, 1, 0) + 
                if(hole_22_gir < 1, 1, 0) + 
                if(hole_23_gir < 1, 1, 0) + 
                if(hole_24_gir < 1, 1, 0) + 
                if(hole_25_gir < 1, 1, 0) + 
                if(hole_26_gir < 1, 1, 0) + 
                if(hole_27_gir < 1, 1, 0)                                 
            ) * 100 as scrambling")             
                       
            ->first();

            $scrambling = $scrambles->scrambling;                 

        }  
        
        if($round_result->nine === 'first-nine-third-nine'){

            $scrambles= \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->selectRaw("SUM(
                if(hole_1_score <= hole_1_white_par and hole_1_gir < 1, 1, 0) + 
                if(hole_2_score <= hole_2_white_par and hole_2_gir < 1, 1, 0) + 
                if(hole_3_score <= hole_3_white_par and hole_3_gir < 1, 1, 0) + 
                if(hole_4_score <= hole_4_white_par and hole_4_gir < 1, 1, 0) + 
                if(hole_5_score <= hole_5_white_par and hole_5_gir < 1, 1, 0) + 
                if(hole_6_score <= hole_6_white_par and hole_6_gir < 1, 1, 0) + 
                if(hole_7_score <= hole_7_white_par and hole_7_gir < 1, 1, 0) + 
                if(hole_8_score <= hole_8_white_par and hole_8_gir < 1, 1, 0) + 
                if(hole_9_score <= hole_9_white_par and hole_9_gir < 1, 1, 0) +
                if(hole_19_score <= hole_19_white_par and hole_19_gir < 1, 1, 0) +
                if(hole_20_score <= hole_11_white_par and hole_20_gir < 1, 1, 0) +
                if(hole_21_score <= hole_21_white_par and hole_21_gir < 1, 1, 0) +
                if(hole_22_score <= hole_22_white_par and hole_22_gir < 1, 1, 0) +
                if(hole_23_score <= hole_23_white_par and hole_23_gir < 1, 1, 0) +
                if(hole_24_score <= hole_24_white_par and hole_24_gir < 1, 1, 0) +
                if(hole_25_score <= hole_25_white_par and hole_25_gir < 1, 1, 0) +
                if(hole_26_score <= hole_26_white_par and hole_26_gir < 1, 1, 0) +
                if(hole_27_score <= hole_27_white_par and hole_27_gir < 1, 1, 0)
            ) / (
                if(hole_1_gir < 1, 1, 0) + 
                if(hole_2_gir < 1, 1, 0) + 
                if(hole_3_gir < 1, 1, 0) + 
                if(hole_4_gir < 1, 1, 0) + 
                if(hole_5_gir < 1, 1, 0) + 
                if(hole_6_gir < 1, 1, 0) + 
                if(hole_7_gir < 1, 1, 0) + 
                if(hole_8_gir < 1, 1, 0) + 
                if(hole_9_gir < 1, 1, 0) +
                if(hole_19_gir < 1, 1, 0) + 
                if(hole_20_gir < 1, 1, 0) + 
                if(hole_21_gir < 1, 1, 0) + 
                if(hole_22_gir < 1, 1, 0) + 
                if(hole_23_gir < 1, 1, 0) + 
                if(hole_24_gir < 1, 1, 0) + 
                if(hole_25_gir < 1, 1, 0) + 
                if(hole_26_gir < 1, 1, 0) + 
                if(hole_27_gir < 1, 1, 0)                 
            ) * 100 as scrambling")             
                       
            ->first();

            $scrambling = $scrambles->scrambling;               

        }         


        $round_result->scrambling = $scrambling;



        // calculate round yards

        if($round_result->yards === 'white'){

            $first_nine_yards = intval($round_result->hole_1_white) + intval($round_result->hole_2_white) + intval($round_result->hole_3_white) + intval($round_result->hole_4_white) + intval($round_result->hole_5_white) + intval($round_result->hole_6_white) + intval($round_result->hole_7_white) + intval($round_result->hole_8_white) + intval($round_result->hole_9_white);
            $second_nine_yards = intval($round_result->hole_10_white) + intval($round_result->hole_11_white) + intval($round_result->hole_12_white) + intval($round_result->hole_13_white) + intval($round_result->hole_14_white) + intval($round_result->hole_15_white) + intval($round_result->hole_16_white) + intval($round_result->hole_17_white) + intval($round_result->hole_18_white);
            $third_nine_yards = intval($round_result->hole_19_white) + intval($round_result->hole_20_white) + intval($round_result->hole_21_white) + intval($round_result->hole_22_white) + intval($round_result->hole_23_white) + intval($round_result->hole_24_white) + intval($round_result->hole_25_white) + intval($round_result->hole_26_white) + intval($round_result->hole_27_white);

        }

        if($round_result->yards === 'yellow'){

            $first_nine_yards = intval($round_result->hole_1_yellow) + intval($round_result->hole_2_yellow) + intval($round_result->hole_3_yellow) + intval($round_result->hole_4_yellow) + intval($round_result->hole_5_yellow) + intval($round_result->hole_6_yellow) + intval($round_result->hole_7_yellow) + intval($round_result->hole_8_yellow) + intval($round_result->hole_9_yellow);
            $second_nine_yards = intval($round_result->hole_10_yellow) + intval($round_result->hole_11_yellow) + intval($round_result->hole_12_yellow) + intval($round_result->hole_13_yellow) + intval($round_result->hole_14_yellow) + intval($round_result->hole_15_yellow) + intval($round_result->hole_16_yellow) + intval($round_result->hole_17_yellow) + intval($round_result->hole_18_yellow);
            $third_nine_yards = intval($round_result->hole_19_yellow) + intval($round_result->hole_20_yellow) + intval($round_result->hole_21_yellow) + intval($round_result->hole_22_yellow) + intval($round_result->hole_23_yellow) + intval($round_result->hole_24_yellow) + intval($round_result->hole_25_yellow) + intval($round_result->hole_26_yellow) + intval($round_result->hole_27_yellow);

        }    
        
        if($round_result->yards === 'red'){

            $first_nine_yards = intval($round_result->hole_1_red) + intval($round_result->hole_2_red) + intval($round_result->hole_3_red) + intval($round_result->hole_4_red) + intval($round_result->hole_5_red) + intval($round_result->hole_6_red) + intval($round_result->hole_7_red) + intval($round_result->hole_8_red) + intval($round_result->hole_9_red);
            $second_nine_yards = intval($round_result->hole_10_red) + intval($round_result->hole_11_red) + intval($round_result->hole_12_red) + intval($round_result->hole_13_red) + intval($round_result->hole_14_red) + intval($round_result->hole_15_red) + intval($round_result->hole_16_red) + intval($round_result->hole_17_red) + intval($round_result->hole_18_red);
            $third_nine_yards = intval($round_result->hole_19_red) + intval($round_result->hole_20_red) + intval($round_result->hole_21_red) + intval($round_result->hole_22_red) + intval($round_result->hole_23_red) + intval($round_result->hole_24_red) + intval($round_result->hole_25_red) + intval($round_result->hole_26_red) + intval($round_result->hole_27_red);

        } 
        
        $round_yards = 0;

        if($round_result->nine === 'first-nine'){

            $round_yards = $first_nine_yards;

        }

        if($round_result->nine === 'second-nine'){

            $round_yards = $second_nine_yards;
            
        }
        
        if($round_result->nine === 'third-nine'){

            $round_yards = $third_nine_yards;
            
        }        

        if($round_result->nine === 'first-nine-second-nine'){

            $round_yards = $first_nine_yards + $second_nine_yards;

        }

        if($round_result->nine === 'second-nine-third-nine'){

            $round_yards = $second_nine_yards + $third_nine_yards;

        }  
        
        if($round_result->nine === 'first-nine-third-nine'){

            $round_yards = $first_nine_yards + $third_nine_yards;

        }         


        $round_result->round_yards = $round_yards;


        //->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")  
        //->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score) as front_score") 
        //->selectRaw("SUM(hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as back_score")                         
        
        //->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score - hole_1_ladies_par - hole_2_ladies_par - hole_3_ladies_par - hole_4_ladies_par - hole_5_ladies_par - hole_6_ladies_par - hole_7_ladies_par - hole_8_ladies_par - hole_9_ladies_par - hole_10_ladies_par - hole_11_ladies_par - hole_12_ladies_par - hole_13_ladies_par - hole_14_ladies_par - hole_15_ladies_par - hole_16_ladies_par - hole_17_ladies_par - hole_18_ladies_par) as plus_minus")                
        //->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) as total_putts")                
        //->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) / 18 as putts_per_hole")                       
        //->selectRaw("SUM(if(hole_1_fir > 0, 1, 0) + if(hole_2_fir > 0, 1, 0) + if(hole_3_fir > 0, 1, 0) + if(hole_4_fir > 0, 1, 0) + if(hole_5_fir > 0, 1, 0) + if(hole_6_fir > 0, 1, 0) + if(hole_7_fir > 0, 1, 0) + if(hole_8_fir > 0, 1, 0) + if(hole_9_fir > 0, 1, 0) + if(hole_10_fir > 0, 1, 0) + if(hole_11_fir > 0, 1, 0) + if(hole_12_fir > 0, 1, 0) + if(hole_13_fir > 0, 1, 0) + if(hole_14_fir > 0, 1, 0) + if(hole_15_fir > 0, 1, 0) + if(hole_16_fir > 0, 1, 0) + if(hole_17_fir > 0, 1, 0) + if(hole_18_fir > 0, 1, 0) ) / (if(hole_1_ladies_par > 3, 1, 0) + if(hole_2_ladies_par > 3, 1, 0) + if(hole_3_ladies_par > 3, 1, 0) + if(hole_4_ladies_par > 3, 1, 0) + if(hole_5_ladies_par > 3, 1, 0) + if(hole_6_ladies_par > 3, 1, 0) + if(hole_7_ladies_par > 3, 1, 0) + if(hole_8_ladies_par > 3, 1, 0) + if(hole_9_ladies_par > 3, 1, 0) + if(hole_10_ladies_par > 3, 1, 0) + if(hole_11_ladies_par > 3, 1, 0) + if(hole_12_ladies_par > 3, 1, 0) + if(hole_13_ladies_par > 3, 1, 0) + if(hole_14_ladies_par > 3, 1, 0) + if(hole_15_ladies_par > 3, 1, 0) + if(hole_16_ladies_par > 3, 1, 0) + if(hole_17_ladies_par > 3, 1, 0) + if(hole_18_ladies_par > 3, 1, 0)) * 100 as fir_percentage")
        //->selectRaw("SUM(if(hole_1_gir > 0, 1, 0) + if(hole_2_gir > 0, 1, 0) + if(hole_3_gir > 0, 1, 0) + if(hole_4_gir > 0, 1, 0) + if(hole_5_gir > 0, 1, 0) + if(hole_6_gir > 0, 1, 0) + if(hole_7_gir > 0, 1, 0) + if(hole_8_gir > 0, 1, 0) + if(hole_9_gir > 0, 1, 0) + if(hole_10_gir > 0, 1, 0) + if(hole_11_gir > 0, 1, 0) + if(hole_12_gir > 0, 1, 0) + if(hole_13_gir > 0, 1, 0) + if(hole_14_gir > 0, 1, 0) + if(hole_15_gir > 0, 1, 0) + if(hole_16_gir > 0, 1, 0) + if(hole_17_gir > 0, 1, 0) + if(hole_18_gir > 0, 1, 0)) / 18 * 100 as gir_percentage")                      
        
        //->selectRaw("SUM(hole_1_drops + hole_2_drops + hole_3_drops + hole_4_drops + hole_5_drops + hole_6_drops + hole_7_drops + hole_8_drops + hole_9_drops + hole_10_drops + hole_11_drops + hole_12_drops + hole_13_drops + hole_14_drops + hole_15_drops + hole_16_drops + hole_17_drops + hole_18_drops) as total_drops")               
        //->selectRaw("SUM(if(hole_1_score <= hole_1_ladies_par and hole_1_gir < 1, 1, 0) + if(hole_2_score <= hole_2_ladies_par and hole_2_gir < 1, 1, 0) + if(hole_3_score <= hole_3_ladies_par and hole_3_gir < 1, 1, 0) + if(hole_4_score <= hole_4_ladies_par and hole_4_gir < 1, 1, 0) + if(hole_5_score <= hole_5_ladies_par and hole_5_gir < 1, 1, 0) + if(hole_6_score <= hole_6_ladies_par and hole_6_gir < 1, 1, 0) + if(hole_7_score <= hole_7_ladies_par and hole_7_gir < 1, 1, 0) + if(hole_8_score <= hole_8_ladies_par and hole_8_gir < 1, 1, 0) + if(hole_9_score <= hole_9_ladies_par and hole_9_gir < 1, 1, 0) + if(hole_10_score <= hole_10_ladies_par and hole_10_gir < 1, 1, 0) + if(hole_11_score <= hole_11_ladies_par and hole_11_gir < 1, 1, 0) + if(hole_12_score <= hole_12_ladies_par and hole_12_gir < 1, 1, 0) + if(hole_13_score <= hole_13_ladies_par and hole_13_gir < 1, 1, 0) + if(hole_14_score <= hole_14_ladies_par and hole_14_gir < 1, 1, 0) + if(hole_15_score <= hole_15_ladies_par and hole_15_gir < 1, 1, 0) + if(hole_16_score <= hole_16_ladies_par and hole_16_gir < 1, 1, 0) + if(hole_17_score <= hole_17_ladies_par and hole_17_gir < 1, 1, 0) + if(hole_17_score <= hole_18_ladies_par and hole_18_gir < 1, 1, 0) ) / (if(hole_1_gir < 1, 1, 0) + if(hole_2_gir < 1, 1, 0) + if(hole_3_gir < 1, 1, 0) + if(hole_4_gir < 1, 1, 0) + if(hole_5_gir < 1, 1, 0) + if(hole_6_gir < 1, 1, 0) + if(hole_7_gir < 1, 1, 0) + if(hole_8_gir < 1, 1, 0) + if(hole_9_gir < 1, 1, 0) + if(hole_10_gir < 1, 1, 0) + if(hole_11_gir < 1, 1, 0) + if(hole_12_gir < 1, 1, 0) + if(hole_13_gir < 1, 1, 0) + if(hole_14_gir < 1, 1, 0) + if(hole_15_gir < 1, 1, 0) + if(hole_16_gir < 1, 1, 0) + if(hole_17_gir < 1, 1, 0) + if(hole_18_gir < 1, 1, 0) ) * 100 as scrambling")             
        
        //->addSelect('round_date', 'property_name', 'course_name', 'rounds.id')
        //->selectRaw("SUM(hole_1_ladies_par - hole_1_score) as hole_1_plus_minus")
        //->selectRaw("SUM(hole_2_ladies_par - hole_2_score) as hole_2_plus_minus")  
        //->selectRaw("SUM(hole_3_ladies_par - hole_3_score) as hole_3_plus_minus")  
        //->selectRaw("SUM(hole_4_ladies_par - hole_4_score) as hole_4_plus_minus")   
        //->selectRaw("SUM(hole_5_ladies_par - hole_5_score) as hole_5_plus_minus")      
        //->selectRaw("SUM(hole_6_ladies_par - hole_6_score) as hole_6_plus_minus")
        //->selectRaw("SUM(hole_7_ladies_par - hole_7_score) as hole_7_plus_minus") 
        //->selectRaw("SUM(hole_8_ladies_par - hole_8_score) as hole_8_plus_minus")
        //->selectRaw("SUM(hole_9_ladies_par - hole_9_score) as hole_9_plus_minus")
        //->selectRaw("SUM(hole_10_ladies_par - hole_10_score) as hole_10_plus_minus") 
        //->selectRaw("SUM(hole_11_ladies_par - hole_11_score) as hole_11_plus_minus")     
        //->selectRaw("SUM(hole_12_ladies_par - hole_12_score) as hole_12_plus_minus")         
        //->selectRaw("SUM(hole_13_ladies_par - hole_13_score) as hole_13_plus_minus") 
        //->selectRaw("SUM(hole_14_ladies_par - hole_14_score) as hole_14_plus_minus")  
        //->selectRaw("SUM(hole_15_ladies_par - hole_15_score) as hole_15_plus_minus")   
        //->selectRaw("SUM(hole_16_ladies_par - hole_16_score) as hole_16_plus_minus")
        //->selectRaw("SUM(hole_17_ladies_par - hole_17_score) as hole_17_plus_minus")
        //->selectRaw("SUM(hole_18_ladies_par - hole_18_score) as hole_18_plus_minus")                
        //->first();        


        return $round_result;

    }
 
}