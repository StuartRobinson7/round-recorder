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


        $hole_1_plus_minus = intval($round_result->hole_1_par) - intval($round_result->hole_1_score);
        $hole_2_plus_minus = intval($round_result->hole_2_par) - intval($round_result->hole_2_score);
        $hole_3_plus_minus = intval($round_result->hole_3_par) - intval($round_result->hole_3_score);
        $hole_4_plus_minus = intval($round_result->hole_4_par) - intval($round_result->hole_4_score);
        $hole_5_plus_minus = intval($round_result->hole_5_par) - intval($round_result->hole_5_score);
        $hole_6_plus_minus = intval($round_result->hole_6_par) - intval($round_result->hole_6_score);
        $hole_7_plus_minus = intval($round_result->hole_7_par) - intval($round_result->hole_7_score);
        $hole_8_plus_minus = intval($round_result->hole_8_par) - intval($round_result->hole_8_score);
        $hole_9_plus_minus = intval($round_result->hole_9_par) - intval($round_result->hole_9_score);
        $hole_10_plus_minus = intval($round_result->hole_10_par) - intval($round_result->hole_10_score);
        $hole_11_plus_minus = intval($round_result->hole_11_par) - intval($round_result->hole_11_score);
        $hole_12_plus_minus = intval($round_result->hole_12_par) - intval($round_result->hole_12_score);
        $hole_13_plus_minus = intval($round_result->hole_13_par) - intval($round_result->hole_13_score);
        $hole_14_plus_minus = intval($round_result->hole_14_par) - intval($round_result->hole_14_score);
        $hole_15_plus_minus = intval($round_result->hole_15_par) - intval($round_result->hole_15_score);
        $hole_16_plus_minus = intval($round_result->hole_16_par) - intval($round_result->hole_16_score);
        $hole_17_plus_minus = intval($round_result->hole_17_par) - intval($round_result->hole_17_score);
        $hole_18_plus_minus = intval($round_result->hole_18_par) - intval($round_result->hole_18_score);
        $hole_19_plus_minus = intval($round_result->hole_19_par) - intval($round_result->hole_19_score);
        $hole_20_plus_minus = intval($round_result->hole_20_par) - intval($round_result->hole_20_score);
        $hole_21_plus_minus = intval($round_result->hole_21_par) - intval($round_result->hole_21_score);
        $hole_22_plus_minus = intval($round_result->hole_22_par) - intval($round_result->hole_22_score);
        $hole_23_plus_minus = intval($round_result->hole_23_par) - intval($round_result->hole_23_score);
        $hole_24_plus_minus = intval($round_result->hole_24_par) - intval($round_result->hole_24_score);
        $hole_25_plus_minus = intval($round_result->hole_25_par) - intval($round_result->hole_25_score);
        $hole_26_plus_minus = intval($round_result->hole_26_par) - intval($round_result->hole_26_score);
        $hole_27_plus_minus = intval($round_result->hole_27_par) - intval($round_result->hole_27_score);



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

        $first_nine_par = intval($round_result->hole_1_par) + intval($round_result->hole_2_par) + intval($round_result->hole_3_par) + intval($round_result->hole_4_par) + intval($round_result->hole_5_par) + intval($round_result->hole_6_par) + intval($round_result->hole_7_par) + intval($round_result->hole_8_par) + intval($round_result->hole_9_par);                

        if($round_result->nine === 'second-nine-third-nine'){          
            $second_nine_par = intval($round_result->hole_1_par) + intval($round_result->hole_2_par) + intval($round_result->hole_3_par) + intval($round_result->hole_4_par) + intval($round_result->hole_5_par) + intval($round_result->hole_6_par) + intval($round_result->hole_7_par) + intval($round_result->hole_8_par) + intval($round_result->hole_9_par);                       
        }

        else{
            $second_nine_par = intval($round_result->hole_10_par) + intval($round_result->hole_11_par) + intval($round_result->hole_12_par) + intval($round_result->hole_13_par) + intval($round_result->hole_14_par) + intval($round_result->hole_15_par) + intval($round_result->hole_16_par) + intval($round_result->hole_17_par) + intval($round_result->hole_18_par);                
        }
        
        $third_nine_par = intval($round_result->hole_10_par) + intval($round_result->hole_11_par) + intval($round_result->hole_12_par) + intval($round_result->hole_13_par) + intval($round_result->hole_14_par) + intval($round_result->hole_15_par) + intval($round_result->hole_16_par) + intval($round_result->hole_17_par) + intval($round_result->hole_18_par);        
 
        
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
  
        return $round_result;
    }       




    public function statsRoundResult($id){        

        $stats_round_result = \App\Round::where('rounds.id', $id)
        ->where('stats_round' , '1')
        ->groupBy('rounds.id')
        ->join('courses', 'courses.id', '=', 'course_id')  
        ->first();

        if($stats_round_result){

        // calculate putts for each nine
        $stats_round_result->first_nine_putts = intval($stats_round_result->hole_1_putts) + intval($stats_round_result->hole_2_putts) + intval($stats_round_result->hole_3_putts) + intval($stats_round_result->hole_4_putts) + intval($stats_round_result->hole_5_putts) + intval($stats_round_result->hole_6_putts) + intval($stats_round_result->hole_7_putts) + intval($stats_round_result->hole_8_putts) + intval($stats_round_result->hole_9_putts);
        $stats_round_result->second_nine_putts = intval($stats_round_result->hole_10_putts) + intval($stats_round_result->hole_11_putts) + intval($stats_round_result->hole_12_putts) + intval($stats_round_result->hole_13_putts) + intval($stats_round_result->hole_14_putts) + intval($stats_round_result->hole_15_putts) + intval($stats_round_result->hole_16_putts) + intval($stats_round_result->hole_17_putts) + intval($stats_round_result->hole_18_putts);
        $stats_round_result->third_nine_putts = intval($stats_round_result->hole_19_putts) + intval($stats_round_result->hole_20_putts) + intval($stats_round_result->hole_21_putts) + intval($stats_round_result->hole_22_putts) + intval($stats_round_result->hole_23_putts) + intval($stats_round_result->hole_24_putts) + intval($stats_round_result->hole_25_putts) + intval($stats_round_result->hole_26_putts) + intval($stats_round_result->hole_27_putts);

        //calculate total putts for round
        $total_putts = 0;

        if($stats_round_result->nine === 'first-nine'){

            $total_putts = intval($stats_round_result->first_nine_putts);

        }

        if($stats_round_result->nine === 'second-nine'){

            $total_putts = intval($stats_round_result->second_nine_putts);
            
        }
        
        if($stats_round_result->nine === 'third-nine'){

            $total_putts = intval($stats_round_result->third_nine_putts);
            
        }        

        if($stats_round_result->nine === 'first-nine-second-nine'){

            $total_putts = intval($stats_round_result->first_nine_putts) + intval($stats_round_result->second_nine_putts);

        }

        if($stats_round_result->nine === 'second-nine-third-nine'){

            $total_putts = intval($stats_round_result->second_nine_putts) + intval($stats_round_result->third_nine_putts);

        }  
        
        if($stats_round_result->nine === 'first-nine-third-nine'){

            $total_putts = intval($stats_round_result->first_nine_putts) + intval($stats_round_result->third_nine_putts);

        } 

        $stats_round_result->total_putts = $total_putts; 


        // calculate putts_per_hole
        $round_size = 0;

        if($stats_round_result->size === 'full'){
            $round_size = 18;
        }

        if($stats_round_result->size === 'half'){
            $round_size = 9;
        }        

        $stats_round_result->putts_per_hole = $total_putts / $round_size;



        // calculate drops for each nine
        $stats_round_result->first_nine_drops = intval($stats_round_result->hole_1_drops) + intval($stats_round_result->hole_2_drops) + intval($stats_round_result->hole_3_drops) + intval($stats_round_result->hole_4_drops) + intval($stats_round_result->hole_5_drops) + intval($stats_round_result->hole_6_drops) + intval($stats_round_result->hole_7_drops) + intval($stats_round_result->hole_8_drops) + intval($stats_round_result->hole_9_drops);
        $stats_round_result->second_nine_drops = intval($stats_round_result->hole_10_drops) + intval($stats_round_result->hole_11_drops) + intval($stats_round_result->hole_12_drops) + intval($stats_round_result->hole_13_drops) + intval($stats_round_result->hole_14_drops) + intval($stats_round_result->hole_15_drops) + intval($stats_round_result->hole_16_drops) + intval($stats_round_result->hole_17_drops) + intval($stats_round_result->hole_18_drops);
        $stats_round_result->third_nine_drops = intval($stats_round_result->hole_19_drops) + intval($stats_round_result->hole_20_drops) + intval($stats_round_result->hole_21_drops) + intval($stats_round_result->hole_22_drops) + intval($stats_round_result->hole_23_drops) + intval($stats_round_result->hole_24_drops) + intval($stats_round_result->hole_25_drops) + intval($stats_round_result->hole_26_drops) + intval($stats_round_result->hole_27_drops);

        //calculate total drops for round
        $total_drops = 0;

        if($stats_round_result->nine === 'first-nine'){

            $total_drops = intval($stats_round_result->first_nine_drops);

        }

        if($stats_round_result->nine === 'second-nine'){

            $total_drops = intval($stats_round_result->second_nine_drops);
            
        }
        
        if($stats_round_result->nine === 'third-nine'){

            $total_drops = intval($stats_round_result->third_nine_drops);
            
        }        

        if($stats_round_result->nine === 'first-nine-second-nine'){

            $total_drops = intval($stats_round_result->first_nine_drops) + intval($stats_round_result->second_nine_drops);

        }

        if($stats_round_result->nine === 'second-nine-third-nine'){

            $total_drops = intval($stats_round_result->second_nine_drops) + intval($stats_round_result->third_nine_drops);

        }  
        
        if($stats_round_result->nine === 'first-nine-third-nine'){

            $total_drops = intval($stats_round_result->first_nine_drops) + intval($stats_round_result->third_nine_drops);

        } 

        $stats_round_result->total_drops = $total_drops;



        // Fairways in Regulation

        if($stats_round_result->nine === 'first-nine'){



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
                        if(hole_1_par > 3, 1, 0) + 
                        if(hole_2_par > 3, 1, 0) + 
                        if(hole_3_par > 3, 1, 0) + 
                        if(hole_4_par > 3, 1, 0) + 
                        if(hole_5_par > 3, 1, 0) + 
                        if(hole_6_par > 3, 1, 0) + 
                        if(hole_7_par > 3, 1, 0) + 
                        if(hole_8_par > 3, 1, 0) + 
                        if(hole_9_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage; 

                               

        }

        if($stats_round_result->nine === 'second-nine'){


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
                        if(hole_10_par > 3, 1, 0) + 
                        if(hole_11_par > 3, 1, 0) + 
                        if(hole_12_par > 3, 1, 0) + 
                        if(hole_13_par > 3, 1, 0) + 
                        if(hole_14_par > 3, 1, 0) + 
                        if(hole_15_par > 3, 1, 0) + 
                        if(hole_16_par > 3, 1, 0) + 
                        if(hole_17_par > 3, 1, 0) + 
                        if(hole_18_par > 3, 1, 0)  
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage; 
             

        }    
        
        if($stats_round_result->nine === 'third-nine' ){


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
                    if(hole_10_par > 3, 1, 0) + 
                    if(hole_11_par > 3, 1, 0) + 
                    if(hole_12_par > 3, 1, 0) + 
                    if(hole_13_par > 3, 1, 0) + 
                    if(hole_14_par > 3, 1, 0) + 
                    if(hole_15_par > 3, 1, 0) + 
                    if(hole_16_par > 3, 1, 0) + 
                    if(hole_17_par > 3, 1, 0) + 
                    if(hole_18_par > 3, 1, 0)  
                ) * 100 as fir_percentage")  
            ->first();

            $fir_percentage = $firs->fir_percentage; 
         

    }         

        if($stats_round_result->nine === 'first-nine-second-nine'){


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
                        if(hole_1_par > 3, 1, 0) + 
                        if(hole_2_par > 3, 1, 0) + 
                        if(hole_3_par > 3, 1, 0) + 
                        if(hole_4_par > 3, 1, 0) + 
                        if(hole_5_par > 3, 1, 0) + 
                        if(hole_6_par > 3, 1, 0) + 
                        if(hole_7_par > 3, 1, 0) + 
                        if(hole_8_par > 3, 1, 0) + 
                        if(hole_9_par > 3, 1, 0) + 
                        if(hole_10_par > 3, 1, 0) + 
                        if(hole_11_par > 3, 1, 0) + 
                        if(hole_12_par > 3, 1, 0) + 
                        if(hole_13_par > 3, 1, 0) + 
                        if(hole_14_par > 3, 1, 0) + 
                        if(hole_15_par > 3, 1, 0) + 
                        if(hole_16_par > 3, 1, 0) + 
                        if(hole_17_par > 3, 1, 0) + 
                        if(hole_18_par > 3, 1, 0)                          
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                 

 

        }

        if($stats_round_result->nine === 'second-nine-third-nine'){


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
                        if(hole_1_par > 3, 1, 0) + 
                        if(hole_2_par > 3, 1, 0) + 
                        if(hole_3_par > 3, 1, 0) + 
                        if(hole_4_par > 3, 1, 0) + 
                        if(hole_5_par > 3, 1, 0) + 
                        if(hole_6_par > 3, 1, 0) + 
                        if(hole_7_par > 3, 1, 0) + 
                        if(hole_8_par > 3, 1, 0) + 
                        if(hole_9_par > 3, 1, 0) + 
                        if(hole_10_par > 3, 1, 0) + 
                        if(hole_11_par > 3, 1, 0) + 
                        if(hole_12_par > 3, 1, 0) + 
                        if(hole_13_par > 3, 1, 0) + 
                        if(hole_14_par > 3, 1, 0) + 
                        if(hole_15_par > 3, 1, 0) + 
                        if(hole_16_par > 3, 1, 0) + 
                        if(hole_17_par > 3, 1, 0) + 
                        if(hole_18_par > 3, 1, 0)                                                 
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                  



        }  
        
        if($stats_round_result->nine === 'first-nine-third-nine'){


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
                        if(hole_1_par > 3, 1, 0) + 
                        if(hole_2_par > 3, 1, 0) + 
                        if(hole_3_par > 3, 1, 0) + 
                        if(hole_4_par > 3, 1, 0) + 
                        if(hole_5_par > 3, 1, 0) + 
                        if(hole_6_par > 3, 1, 0) + 
                        if(hole_7_par > 3, 1, 0) + 
                        if(hole_8_par > 3, 1, 0) + 
                        if(hole_9_par > 3, 1, 0) + 
                        if(hole_10_par > 3, 1, 0) + 
                        if(hole_11_par > 3, 1, 0) + 
                        if(hole_12_par > 3, 1, 0) + 
                        if(hole_13_par > 3, 1, 0) + 
                        if(hole_14_par > 3, 1, 0) + 
                        if(hole_15_par > 3, 1, 0) + 
                        if(hole_16_par > 3, 1, 0) + 
                        if(hole_17_par > 3, 1, 0) + 
                        if(hole_18_par > 3, 1, 0)                                                
                    ) * 100 as fir_percentage")  
                ->first();
    
                $fir_percentage = $firs->fir_percentage;                


        } 

        $stats_round_result->fir_percentage = $fir_percentage;


        // calculate greens in regulation
        if($stats_round_result->nine === 'first-nine'){

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

        if($stats_round_result->nine === 'second-nine'){

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
        
        if($stats_round_result->nine === 'third-nine'){

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

        if($stats_round_result->nine === 'first-nine-second-nine'){

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

        if($stats_round_result->nine === 'second-nine-third-nine'){

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
        
        if($stats_round_result->nine === 'first-nine-third-nine'){

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

        $stats_round_result->gir_percentage = $gir_percentage;

        


        // calculate scrambling


            if($stats_round_result->nine === 'first-nine'){

                $scrambles= \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("SUM(
                    if(hole_1_score <= hole_1_par and hole_1_gir < 1, 1, 0) + 
                    if(hole_2_score <= hole_2_par and hole_2_gir < 1, 1, 0) + 
                    if(hole_3_score <= hole_3_par and hole_3_gir < 1, 1, 0) + 
                    if(hole_4_score <= hole_4_par and hole_4_gir < 1, 1, 0) + 
                    if(hole_5_score <= hole_5_par and hole_5_gir < 1, 1, 0) + 
                    if(hole_6_score <= hole_6_par and hole_6_gir < 1, 1, 0) + 
                    if(hole_7_score <= hole_7_par and hole_7_gir < 1, 1, 0) + 
                    if(hole_8_score <= hole_8_par and hole_8_gir < 1, 1, 0) + 
                    if(hole_9_score <= hole_9_par and hole_9_gir < 1, 1, 0) 
    
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
    
            if($stats_round_result->nine === 'second-nine'){
    
                $scrambles= \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("SUM(
                    if(hole_10_score <= hole_1_par and hole_1_gir < 1, 1, 0) + 
                    if(hole_11_score <= hole_2_par and hole_2_gir < 1, 1, 0) + 
                    if(hole_12_score <= hole_3_par and hole_3_gir < 1, 1, 0) + 
                    if(hole_13_score <= hole_4_par and hole_4_gir < 1, 1, 0) + 
                    if(hole_14_score <= hole_5_par and hole_5_gir < 1, 1, 0) + 
                    if(hole_15_score <= hole_6_par and hole_6_gir < 1, 1, 0) + 
                    if(hole_16_score <= hole_7_par and hole_7_gir < 1, 1, 0) + 
                    if(hole_17_score <= hole_8_par and hole_8_gir < 1, 1, 0) + 
                    if(hole_18_score <= hole_9_par and hole_9_gir < 1, 1, 0) 
    
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
            
            if($stats_round_result->nine === 'third-nine'){
    
                $scrambles= \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("SUM(
                    if(hole_19_score <= hole_10_par and hole_1_gir < 1, 1, 0) + 
                    if(hole_20_score <= hole_11_par and hole_2_gir < 1, 1, 0) + 
                    if(hole_21_score <= hole_12_par and hole_3_gir < 1, 1, 0) + 
                    if(hole_22_score <= hole_13_par and hole_4_gir < 1, 1, 0) + 
                    if(hole_23_score <= hole_14_par and hole_5_gir < 1, 1, 0) + 
                    if(hole_24_score <= hole_15_par and hole_6_gir < 1, 1, 0) + 
                    if(hole_25_score <= hole_16_par and hole_7_gir < 1, 1, 0) + 
                    if(hole_26_score <= hole_17_par and hole_8_gir < 1, 1, 0) + 
                    if(hole_27_score <= hole_18_par and hole_9_gir < 1, 1, 0) 
    
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
    
            if($stats_round_result->nine === 'first-nine-second-nine'){
    
                $scrambles= \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("SUM(
                    if(hole_1_score <= hole_1_par and hole_1_gir < 1, 1, 0) + 
                    if(hole_2_score <= hole_2_par and hole_2_gir < 1, 1, 0) + 
                    if(hole_3_score <= hole_3_par and hole_3_gir < 1, 1, 0) + 
                    if(hole_4_score <= hole_4_par and hole_4_gir < 1, 1, 0) + 
                    if(hole_5_score <= hole_5_par and hole_5_gir < 1, 1, 0) + 
                    if(hole_6_score <= hole_6_par and hole_6_gir < 1, 1, 0) + 
                    if(hole_7_score <= hole_7_par and hole_7_gir < 1, 1, 0) + 
                    if(hole_8_score <= hole_8_par and hole_8_gir < 1, 1, 0) + 
                    if(hole_9_score <= hole_9_par and hole_9_gir < 1, 1, 0) +
                    if(hole_10_score <= hole_10_par and hole_10_gir < 1, 1, 0) +
                    if(hole_11_score <= hole_11_par and hole_11_gir < 1, 1, 0) +
                    if(hole_12_score <= hole_12_par and hole_12_gir < 1, 1, 0) +
                    if(hole_13_score <= hole_13_par and hole_13_gir < 1, 1, 0) +
                    if(hole_14_score <= hole_14_par and hole_14_gir < 1, 1, 0) +
                    if(hole_15_score <= hole_15_par and hole_15_gir < 1, 1, 0) +
                    if(hole_16_score <= hole_16_par and hole_16_gir < 1, 1, 0) +
                    if(hole_17_score <= hole_17_par and hole_17_gir < 1, 1, 0) +
                    if(hole_18_score <= hole_18_par and hole_18_gir < 1, 1, 0)
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
    
            if($stats_round_result->nine === 'second-nine-third-nine'){
    
                $scrambles= \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("SUM(
                    if(hole_10_score <= hole_1_par and hole_10_gir < 1, 1, 0) +
                    if(hole_11_score <= hole_2_par and hole_11_gir < 1, 1, 0) +
                    if(hole_12_score <= hole_3_par and hole_12_gir < 1, 1, 0) +
                    if(hole_13_score <= hole_4_par and hole_13_gir < 1, 1, 0) +
                    if(hole_14_score <= hole_5_par and hole_14_gir < 1, 1, 0) +
                    if(hole_15_score <= hole_6_par and hole_15_gir < 1, 1, 0) +
                    if(hole_16_score <= hole_7_par and hole_16_gir < 1, 1, 0) +
                    if(hole_17_score <= hole_8_par and hole_17_gir < 1, 1, 0) +
                    if(hole_18_score <= hole_9_par and hole_18_gir < 1, 1, 0) +
                    if(hole_19_score <= hole_10_par and hole_19_gir < 1, 1, 0) + 
                    if(hole_20_score <= hole_11_par and hole_20_gir < 1, 1, 0) + 
                    if(hole_21_score <= hole_12_par and hole_21_gir < 1, 1, 0) + 
                    if(hole_22_score <= hole_13_par and hole_22_gir < 1, 1, 0) + 
                    if(hole_23_score <= hole_14_par and hole_23_gir < 1, 1, 0) + 
                    if(hole_24_score <= hole_15_par and hole_24_gir < 1, 1, 0) + 
                    if(hole_25_score <= hole_16_par and hole_25_gir < 1, 1, 0) + 
                    if(hole_26_score <= hole_17_par and hole_26_gir < 1, 1, 0) + 
                    if(hole_27_score <= hole_18_par and hole_27_gir < 1, 1, 0)                 
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
            
            if($stats_round_result->nine === 'first-nine-third-nine'){
    
                $scrambles= \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("SUM(
                    if(hole_1_score <= hole_1_par and hole_1_gir < 1, 1, 0) + 
                    if(hole_2_score <= hole_2_par and hole_2_gir < 1, 1, 0) + 
                    if(hole_3_score <= hole_3_par and hole_3_gir < 1, 1, 0) + 
                    if(hole_4_score <= hole_4_par and hole_4_gir < 1, 1, 0) + 
                    if(hole_5_score <= hole_5_par and hole_5_gir < 1, 1, 0) + 
                    if(hole_6_score <= hole_6_par and hole_6_gir < 1, 1, 0) + 
                    if(hole_7_score <= hole_7_par and hole_7_gir < 1, 1, 0) + 
                    if(hole_8_score <= hole_8_par and hole_8_gir < 1, 1, 0) + 
                    if(hole_9_score <= hole_9_par and hole_9_gir < 1, 1, 0) +
                    if(hole_19_score <= hole_10_par and hole_19_gir < 1, 1, 0) +
                    if(hole_20_score <= hole_11_par and hole_20_gir < 1, 1, 0) +
                    if(hole_21_score <= hole_12_par and hole_21_gir < 1, 1, 0) +
                    if(hole_22_score <= hole_13_par and hole_22_gir < 1, 1, 0) +
                    if(hole_23_score <= hole_14_par and hole_23_gir < 1, 1, 0) +
                    if(hole_24_score <= hole_15_par and hole_24_gir < 1, 1, 0) +
                    if(hole_25_score <= hole_16_par and hole_25_gir < 1, 1, 0) +
                    if(hole_26_score <= hole_17_par and hole_26_gir < 1, 1, 0) +
                    if(hole_27_score <= hole_18_par and hole_27_gir < 1, 1, 0)
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
 

        $stats_round_result->scrambling = $scrambling;



        // calculate round yards

        if($stats_round_result->yards === 'white'){

            $first_nine_yards = intval($stats_round_result->hole_1_white) + intval($stats_round_result->hole_2_white) + intval($stats_round_result->hole_3_white) + intval($stats_round_result->hole_4_white) + intval($stats_round_result->hole_5_white) + intval($stats_round_result->hole_6_white) + intval($stats_round_result->hole_7_white) + intval($stats_round_result->hole_8_white) + intval($stats_round_result->hole_9_white);
            $second_nine_yards = intval($stats_round_result->hole_10_white) + intval($stats_round_result->hole_11_white) + intval($stats_round_result->hole_12_white) + intval($stats_round_result->hole_13_white) + intval($stats_round_result->hole_14_white) + intval($stats_round_result->hole_15_white) + intval($stats_round_result->hole_16_white) + intval($stats_round_result->hole_17_white) + intval($stats_round_result->hole_18_white);
            $third_nine_yards = intval($stats_round_result->hole_19_white) + intval($stats_round_result->hole_20_white) + intval($stats_round_result->hole_21_white) + intval($stats_round_result->hole_22_white) + intval($stats_round_result->hole_23_white) + intval($stats_round_result->hole_24_white) + intval($stats_round_result->hole_25_white) + intval($stats_round_result->hole_26_white) + intval($stats_round_result->hole_27_white);

        }

        if($stats_round_result->yards === 'yellow'){

            $first_nine_yards = intval($stats_round_result->hole_1_yellow) + intval($stats_round_result->hole_2_yellow) + intval($stats_round_result->hole_3_yellow) + intval($stats_round_result->hole_4_yellow) + intval($stats_round_result->hole_5_yellow) + intval($stats_round_result->hole_6_yellow) + intval($stats_round_result->hole_7_yellow) + intval($stats_round_result->hole_8_yellow) + intval($stats_round_result->hole_9_yellow);
            $second_nine_yards = intval($stats_round_result->hole_10_yellow) + intval($stats_round_result->hole_11_yellow) + intval($stats_round_result->hole_12_yellow) + intval($stats_round_result->hole_13_yellow) + intval($stats_round_result->hole_14_yellow) + intval($stats_round_result->hole_15_yellow) + intval($stats_round_result->hole_16_yellow) + intval($stats_round_result->hole_17_yellow) + intval($stats_round_result->hole_18_yellow);
            $third_nine_yards = intval($stats_round_result->hole_19_yellow) + intval($stats_round_result->hole_20_yellow) + intval($stats_round_result->hole_21_yellow) + intval($stats_round_result->hole_22_yellow) + intval($stats_round_result->hole_23_yellow) + intval($stats_round_result->hole_24_yellow) + intval($stats_round_result->hole_25_yellow) + intval($stats_round_result->hole_26_yellow) + intval($stats_round_result->hole_27_yellow);

        }    
        
        if($stats_round_result->yards === 'red'){

            $first_nine_yards = intval($stats_round_result->hole_1_red) + intval($stats_round_result->hole_2_red) + intval($stats_round_result->hole_3_red) + intval($stats_round_result->hole_4_red) + intval($stats_round_result->hole_5_red) + intval($stats_round_result->hole_6_red) + intval($stats_round_result->hole_7_red) + intval($stats_round_result->hole_8_red) + intval($stats_round_result->hole_9_red);
            $second_nine_yards = intval($stats_round_result->hole_10_red) + intval($stats_round_result->hole_11_red) + intval($stats_round_result->hole_12_red) + intval($stats_round_result->hole_13_red) + intval($stats_round_result->hole_14_red) + intval($stats_round_result->hole_15_red) + intval($stats_round_result->hole_16_red) + intval($stats_round_result->hole_17_red) + intval($stats_round_result->hole_18_red);
            $third_nine_yards = intval($stats_round_result->hole_19_red) + intval($stats_round_result->hole_20_red) + intval($stats_round_result->hole_21_red) + intval($stats_round_result->hole_22_red) + intval($stats_round_result->hole_23_red) + intval($stats_round_result->hole_24_red) + intval($stats_round_result->hole_25_red) + intval($stats_round_result->hole_26_red) + intval($stats_round_result->hole_27_red);

        } 
        
        $round_yards = 0;

        if($stats_round_result->nine === 'first-nine'){

            $round_yards = $first_nine_yards;

        }

        if($stats_round_result->nine === 'second-nine'){

            $round_yards = $second_nine_yards;
            
        }
        
        if($stats_round_result->nine === 'third-nine'){

            $round_yards = $third_nine_yards;
            
        }        

        if($stats_round_result->nine === 'first-nine-second-nine'){

            $round_yards = $first_nine_yards + $second_nine_yards;

        }

        if($stats_round_result->nine === 'second-nine-third-nine'){

            $round_yards = $second_nine_yards + $third_nine_yards;

        }  
        
        if($stats_round_result->nine === 'first-nine-third-nine'){

            $round_yards = $first_nine_yards + $third_nine_yards;

        }         

        $stats_round_result->round_yards = $round_yards;

        return $stats_round_result;

    }

    else{

        $stats_round_results = false;

        return $stats_round_results;

    }

    }
 
}