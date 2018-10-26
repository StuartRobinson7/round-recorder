<?php

namespace App\Queries;

use App\User;
use App\Round;
use App\Course;

use Illuminate\Support\Facades\Auth;
use Storage;
 
class GetRoundPoints {

    public function CalculateRoundPoints($round, $handicap){ 
 
        $player = $round->player_id;

        $course = $round->course_id;
        
        $yards = $round->yards;

        $nine = $round->nine;

        $size = $round->size;

        if($size === "half"){

            $handicap_to_round = $handicap / 2;

        }
        else{
            $handicap_to_round = $handicap;
        }
        

        $handicap_to_round = round($handicap_to_round, 0, PHP_ROUND_HALF_UP);

        $course_data = \App\Course::where('id', $course)->first();        

        $handicap_to_use = $handicap_to_round;
        

        // Organise Pars

        $hole_1_par = $round->hole_1_par;
        $hole_2_par = $round->hole_2_par;
        $hole_3_par = $round->hole_3_par;
        $hole_4_par = $round->hole_4_par;
        $hole_5_par = $round->hole_5_par;
        $hole_6_par = $round->hole_6_par;
        $hole_7_par = $round->hole_7_par;
        $hole_8_par = $round->hole_8_par;
        $hole_9_par = $round->hole_9_par;

        if($size === "full"){
            $hole_10_par = $round->hole_10_par;
            $hole_11_par = $round->hole_11_par;
            $hole_12_par = $round->hole_12_par;
            $hole_13_par = $round->hole_13_par;
            $hole_14_par = $round->hole_14_par;
            $hole_15_par = $round->hole_15_par;
            $hole_16_par = $round->hole_16_par;
            $hole_17_par = $round->hole_17_par;
            $hole_18_par = $round->hole_18_par;
        }


        // Assign Stroke Index'

        if($yards === "white"){            

            $hole_1_stroke_index = $course_data->hole_1_white_stroke_index;
            $hole_2_stroke_index = $course_data->hole_2_white_stroke_index;
            $hole_3_stroke_index = $course_data->hole_3_white_stroke_index;
            $hole_4_stroke_index = $course_data->hole_4_white_stroke_index;
            $hole_5_stroke_index = $course_data->hole_5_white_stroke_index;
            $hole_6_stroke_index = $course_data->hole_6_white_stroke_index;
            $hole_7_stroke_index = $course_data->hole_7_white_stroke_index;
            $hole_8_stroke_index = $course_data->hole_8_white_stroke_index;
            $hole_9_stroke_index = $course_data->hole_9_white_stroke_index;



            if($nine === "second-nine"){

                $hole_1_stroke_index = $course_data->hole_10_white_stroke_index;
                $hole_2_stroke_index = $course_data->hole_11_white_stroke_index;
                $hole_3_stroke_index = $course_data->hole_12_white_stroke_index;
                $hole_4_stroke_index = $course_data->hole_13_white_stroke_index;
                $hole_5_stroke_index = $course_data->hole_14_white_stroke_index;
                $hole_6_stroke_index = $course_data->hole_15_white_stroke_index;
                $hole_7_stroke_index = $course_data->hole_16_white_stroke_index;
                $hole_8_stroke_index = $course_data->hole_17_white_stroke_index;
                $hole_9_stroke_index = $course_data->hole_18_white_stroke_index;                 
            
            }

            if($nine === "first-nine-second-nine"){

                $hole_10_stroke_index = $course_data->hole_10_white_stroke_index;
                $hole_11_stroke_index = $course_data->hole_11_white_stroke_index;
                $hole_12_stroke_index = $course_data->hole_12_white_stroke_index;
                $hole_13_stroke_index = $course_data->hole_13_white_stroke_index;
                $hole_14_stroke_index = $course_data->hole_14_white_stroke_index;
                $hole_15_stroke_index = $course_data->hole_15_white_stroke_index;
                $hole_16_stroke_index = $course_data->hole_16_white_stroke_index;
                $hole_17_stroke_index = $course_data->hole_17_white_stroke_index;
                $hole_18_stroke_index = $course_data->hole_18_white_stroke_index;

            }

            if($nine === "third-nine"){

                $hole_1_stroke_index = $course_data->hole_19_white_stroke_index;
                $hole_2_stroke_index = $course_data->hole_20_white_stroke_index;
                $hole_3_stroke_index = $course_data->hole_21_white_stroke_index;
                $hole_4_stroke_index = $course_data->hole_22_white_stroke_index;
                $hole_5_stroke_index = $course_data->hole_23_white_stroke_index;
                $hole_6_stroke_index = $course_data->hole_24_white_stroke_index;
                $hole_7_stroke_index = $course_data->hole_25_white_stroke_index;
                $hole_8_stroke_index = $course_data->hole_26_white_stroke_index;
                $hole_9_stroke_index = $course_data->hole_27_white_stroke_index;  

            }            

            if($nine === "second-nine-third-nine"){

                $hole_1_stroke_index = $course_data->hole_10_white_stroke_index;
                $hole_2_stroke_index = $course_data->hole_11_white_stroke_index;
                $hole_3_stroke_index = $course_data->hole_12_white_stroke_index;
                $hole_4_stroke_index = $course_data->hole_13_white_stroke_index;
                $hole_5_stroke_index = $course_data->hole_14_white_stroke_index;
                $hole_6_stroke_index = $course_data->hole_15_white_stroke_index;
                $hole_7_stroke_index = $course_data->hole_16_white_stroke_index;
                $hole_8_stroke_index = $course_data->hole_17_white_stroke_index;
                $hole_9_stroke_index = $course_data->hole_18_white_stroke_index;                

                $hole_10_stroke_index = $course_data->hole_19_white_stroke_index_front;
                $hole_11_stroke_index = $course_data->hole_20_white_stroke_index_front;
                $hole_12_stroke_index = $course_data->hole_21_white_stroke_index_front;
                $hole_13_stroke_index = $course_data->hole_22_white_stroke_index_front;
                $hole_14_stroke_index = $course_data->hole_23_white_stroke_index_front;
                $hole_15_stroke_index = $course_data->hole_24_white_stroke_index_front;
                $hole_16_stroke_index = $course_data->hole_25_white_stroke_index_front;
                $hole_17_stroke_index = $course_data->hole_26_white_stroke_index_front;
                $hole_18_stroke_index = $course_data->hole_27_white_stroke_index_front;              

            }

            if($nine === "first-nine-third-nine" ){

                $hole_10_stroke_index = $course_data->hole_19_white_stroke_index_back;
                $hole_11_stroke_index = $course_data->hole_20_white_stroke_index_back;
                $hole_12_stroke_index = $course_data->hole_21_white_stroke_index_back;
                $hole_13_stroke_index = $course_data->hole_22_white_stroke_index_back;
                $hole_14_stroke_index = $course_data->hole_23_white_stroke_index_back;
                $hole_15_stroke_index = $course_data->hole_24_white_stroke_index_back;
                $hole_16_stroke_index = $course_data->hole_25_white_stroke_index_back;
                $hole_17_stroke_index = $course_data->hole_26_white_stroke_index_back;
                $hole_18_stroke_index = $course_data->hole_27_white_stroke_index_back;                

            }


        }

        if($yards === "yellow"){            

            $hole_1_stroke_index = $course_data->hole_1_yellow_stroke_index;
            $hole_2_stroke_index = $course_data->hole_2_yellow_stroke_index;
            $hole_3_stroke_index = $course_data->hole_3_yellow_stroke_index;
            $hole_4_stroke_index = $course_data->hole_4_yellow_stroke_index;
            $hole_5_stroke_index = $course_data->hole_5_yellow_stroke_index;
            $hole_6_stroke_index = $course_data->hole_6_yellow_stroke_index;
            $hole_7_stroke_index = $course_data->hole_7_yellow_stroke_index;
            $hole_8_stroke_index = $course_data->hole_8_yellow_stroke_index;
            $hole_9_stroke_index = $course_data->hole_9_yellow_stroke_index;


            if($nine === "second-nine"){

                $hole_1_stroke_index = $course_data->hole_10_yellow_stroke_index;
                $hole_2_stroke_index = $course_data->hole_11_yellow_stroke_index;
                $hole_3_stroke_index = $course_data->hole_12_yellow_stroke_index;
                $hole_4_stroke_index = $course_data->hole_13_yellow_stroke_index;
                $hole_5_stroke_index = $course_data->hole_14_yellow_stroke_index;
                $hole_6_stroke_index = $course_data->hole_15_yellow_stroke_index;
                $hole_7_stroke_index = $course_data->hole_16_yellow_stroke_index;
                $hole_8_stroke_index = $course_data->hole_17_yellow_stroke_index;
                $hole_9_stroke_index = $course_data->hole_18_yellow_stroke_index;                 
            
            }

            if($nine === "first-nine-second-nine"){

                $hole_10_stroke_index = $course_data->hole_10_yellow_stroke_index;
                $hole_11_stroke_index = $course_data->hole_11_yellow_stroke_index;
                $hole_12_stroke_index = $course_data->hole_12_yellow_stroke_index;
                $hole_13_stroke_index = $course_data->hole_13_yellow_stroke_index;
                $hole_14_stroke_index = $course_data->hole_14_yellow_stroke_index;
                $hole_15_stroke_index = $course_data->hole_15_yellow_stroke_index;
                $hole_16_stroke_index = $course_data->hole_16_yellow_stroke_index;
                $hole_17_stroke_index = $course_data->hole_17_yellow_stroke_index;
                $hole_18_stroke_index = $course_data->hole_18_yellow_stroke_index;               

            }

            if($nine === "third-nine"){

                $hole_1_stroke_index = $course_data->hole_19_yellow_stroke_index;
                $hole_2_stroke_index = $course_data->hole_20_yellow_stroke_index;
                $hole_3_stroke_index = $course_data->hole_21_yellow_stroke_index;
                $hole_4_stroke_index = $course_data->hole_22_yellow_stroke_index;
                $hole_5_stroke_index = $course_data->hole_23_yellow_stroke_index;
                $hole_6_stroke_index = $course_data->hole_24_yellow_stroke_index;
                $hole_7_stroke_index = $course_data->hole_25_yellow_stroke_index;
                $hole_8_stroke_index = $course_data->hole_26_yellow_stroke_index;
                $hole_9_stroke_index = $course_data->hole_27_yellow_stroke_index;  

            }            

            if($nine === "second-nine-third-nine"){

                $hole_1_stroke_index = $course_data->hole_10_yellow_stroke_index;
                $hole_2_stroke_index = $course_data->hole_11_yellow_stroke_index;
                $hole_3_stroke_index = $course_data->hole_12_yellow_stroke_index;
                $hole_4_stroke_index = $course_data->hole_13_yellow_stroke_index;
                $hole_5_stroke_index = $course_data->hole_14_yellow_stroke_index;
                $hole_6_stroke_index = $course_data->hole_15_yellow_stroke_index;
                $hole_7_stroke_index = $course_data->hole_16_yellow_stroke_index;
                $hole_8_stroke_index = $course_data->hole_17_yellow_stroke_index;
                $hole_9_stroke_index = $course_data->hole_18_yellow_stroke_index;                

                $hole_10_stroke_index = $course_data->hole_19_yellow_stroke_index_front;
                $hole_11_stroke_index = $course_data->hole_20_yellow_stroke_index_front;
                $hole_12_stroke_index = $course_data->hole_21_yellow_stroke_index_front;
                $hole_13_stroke_index = $course_data->hole_22_yellow_stroke_index_front;
                $hole_14_stroke_index = $course_data->hole_23_yellow_stroke_index_front;
                $hole_15_stroke_index = $course_data->hole_24_yellow_stroke_index_front;
                $hole_16_stroke_index = $course_data->hole_25_yellow_stroke_index_front;
                $hole_17_stroke_index = $course_data->hole_26_yellow_stroke_index_front;
                $hole_18_stroke_index = $course_data->hole_27_yellow_stroke_index_front;              

            }

            if($nine === "first-nine-third-nine" ){

                $hole_10_stroke_index = $course_data->hole_19_yellow_stroke_index_back;
                $hole_11_stroke_index = $course_data->hole_20_yellow_stroke_index_back;
                $hole_12_stroke_index = $course_data->hole_21_yellow_stroke_index_back;
                $hole_13_stroke_index = $course_data->hole_22_yellow_stroke_index_back;
                $hole_14_stroke_index = $course_data->hole_23_yellow_stroke_index_back;
                $hole_15_stroke_index = $course_data->hole_24_yellow_stroke_index_back;
                $hole_16_stroke_index = $course_data->hole_25_yellow_stroke_index_back;
                $hole_17_stroke_index = $course_data->hole_26_yellow_stroke_index_back;
                $hole_18_stroke_index = $course_data->hole_27_yellow_stroke_index_back;              

            }


        }       
        
        if($yards === "red"){            

            $hole_1_stroke_index = $course_data->hole_1_red_stroke_index;
            $hole_2_stroke_index = $course_data->hole_2_red_stroke_index;
            $hole_3_stroke_index = $course_data->hole_3_red_stroke_index;
            $hole_4_stroke_index = $course_data->hole_4_red_stroke_index;
            $hole_5_stroke_index = $course_data->hole_5_red_stroke_index;
            $hole_6_stroke_index = $course_data->hole_6_red_stroke_index;
            $hole_7_stroke_index = $course_data->hole_7_red_stroke_index;
            $hole_8_stroke_index = $course_data->hole_8_red_stroke_index;
            $hole_9_stroke_index = $course_data->hole_9_red_stroke_index;

            if($nine === "second-nine"){

                $hole_1_stroke_index = $course_data->hole_10_red_stroke_index;
                $hole_2_stroke_index = $course_data->hole_11_red_stroke_index;
                $hole_3_stroke_index = $course_data->hole_12_red_stroke_index;
                $hole_4_stroke_index = $course_data->hole_13_red_stroke_index;
                $hole_5_stroke_index = $course_data->hole_14_red_stroke_index;
                $hole_6_stroke_index = $course_data->hole_15_red_stroke_index;
                $hole_7_stroke_index = $course_data->hole_16_red_stroke_index;
                $hole_8_stroke_index = $course_data->hole_17_red_stroke_index;
                $hole_9_stroke_index = $course_data->hole_18_red_stroke_index;                 
            
            }

            if($nine === "first-nine-second-nine"){

                $hole_10_stroke_index = $course_data->hole_10_red_stroke_index;
                $hole_11_stroke_index = $course_data->hole_11_red_stroke_index;
                $hole_12_stroke_index = $course_data->hole_12_red_stroke_index;
                $hole_13_stroke_index = $course_data->hole_13_red_stroke_index;
                $hole_14_stroke_index = $course_data->hole_14_red_stroke_index;
                $hole_15_stroke_index = $course_data->hole_15_red_stroke_index;
                $hole_16_stroke_index = $course_data->hole_16_red_stroke_index;
                $hole_17_stroke_index = $course_data->hole_17_red_stroke_index;
                $hole_18_stroke_index = $course_data->hole_18_red_stroke_index;             

            }

            if($nine === "third-nine"){

                $hole_1_stroke_index = $course_data->hole_19_red_stroke_index;
                $hole_2_stroke_index = $course_data->hole_20_red_stroke_index;
                $hole_3_stroke_index = $course_data->hole_21_red_stroke_index;
                $hole_4_stroke_index = $course_data->hole_22_red_stroke_index;
                $hole_5_stroke_index = $course_data->hole_23_red_stroke_index;
                $hole_6_stroke_index = $course_data->hole_24_red_stroke_index;
                $hole_7_stroke_index = $course_data->hole_25_red_stroke_index;
                $hole_8_stroke_index = $course_data->hole_26_red_stroke_index;
                $hole_9_stroke_index = $course_data->hole_27_red_stroke_index;  

            }            

            if($nine === "second-nine-third-nine"){

                $hole_1_stroke_index = $course_data->hole_10_red_stroke_index;
                $hole_2_stroke_index = $course_data->hole_11_red_stroke_index;
                $hole_3_stroke_index = $course_data->hole_12_red_stroke_index;
                $hole_4_stroke_index = $course_data->hole_13_red_stroke_index;
                $hole_5_stroke_index = $course_data->hole_14_red_stroke_index;
                $hole_6_stroke_index = $course_data->hole_15_red_stroke_index;
                $hole_7_stroke_index = $course_data->hole_16_red_stroke_index;
                $hole_8_stroke_index = $course_data->hole_17_red_stroke_index;
                $hole_9_stroke_index = $course_data->hole_18_red_stroke_index;                

                $hole_10_stroke_index = $course_data->hole_19_red_stroke_index_front;
                $hole_11_stroke_index = $course_data->hole_20_red_stroke_index_front;
                $hole_12_stroke_index = $course_data->hole_21_red_stroke_index_front;
                $hole_13_stroke_index = $course_data->hole_22_red_stroke_index_front;
                $hole_14_stroke_index = $course_data->hole_23_red_stroke_index_front;
                $hole_15_stroke_index = $course_data->hole_24_red_stroke_index_front;
                $hole_16_stroke_index = $course_data->hole_25_red_stroke_index_front;
                $hole_17_stroke_index = $course_data->hole_26_red_stroke_index_front;
                $hole_18_stroke_index = $course_data->hole_27_red_stroke_index_front;                

            }

            if($nine === "first-nine-third-nine" ){

                $hole_10_stroke_index = $course_data->hole_19_red_stroke_index_back;
                $hole_11_stroke_index = $course_data->hole_20_red_stroke_index_back;
                $hole_12_stroke_index = $course_data->hole_21_red_stroke_index_back;
                $hole_13_stroke_index = $course_data->hole_22_red_stroke_index_back;
                $hole_14_stroke_index = $course_data->hole_23_red_stroke_index_back;
                $hole_15_stroke_index = $course_data->hole_24_red_stroke_index_back;
                $hole_16_stroke_index = $course_data->hole_25_red_stroke_index_back;
                $hole_17_stroke_index = $course_data->hole_26_red_stroke_index_back;
                $hole_18_stroke_index = $course_data->hole_27_red_stroke_index_back;               

            }


        }        
    
        

        // re-write stroke index' and organise scores for half rounds

        if($size === "half"){

            $start_index_array = collect(['hole_1_stroke_index' => $hole_1_stroke_index, 'hole_2_stroke_index' => $hole_2_stroke_index, 'hole_3_stroke_index' => $hole_3_stroke_index, 'hole_4_stroke_index' => $hole_4_stroke_index, 'hole_5_stroke_index' => $hole_5_stroke_index, 'hole_6_stroke_index' => $hole_6_stroke_index, 'hole_7_stroke_index' => $hole_7_stroke_index, 'hole_8_stroke_index' => $hole_8_stroke_index, 'hole_9_stroke_index' => $hole_9_stroke_index]);

            $sorted_index_array = $start_index_array->sort();

            $index_array = $sorted_index_array->toArray();
            
            $index_keys = array_keys($index_array);

            $replacements = array(1, 2, 3, 4, 5, 6, 7, 8, 9);                    

            $final_array = array_combine($index_keys, $replacements);

            $final = collect($final_array);

            $hole_1_stroke_index = $final->get('hole_1_stroke_index');
            $hole_2_stroke_index = $final->get('hole_2_stroke_index');
            $hole_3_stroke_index = $final->get('hole_3_stroke_index');
            $hole_4_stroke_index = $final->get('hole_4_stroke_index');
            $hole_5_stroke_index = $final->get('hole_5_stroke_index');
            $hole_6_stroke_index = $final->get('hole_6_stroke_index');
            $hole_7_stroke_index = $final->get('hole_7_stroke_index');
            $hole_8_stroke_index = $final->get('hole_8_stroke_index');
            $hole_9_stroke_index = $final->get('hole_9_stroke_index');

            
            if($nine === 'first-nine'){

                $hole_1_score = $round->hole_1_score;
                $hole_2_score = $round->hole_2_score;
                $hole_3_score = $round->hole_3_score;
                $hole_4_score = $round->hole_4_score;
                $hole_5_score = $round->hole_5_score;
                $hole_6_score = $round->hole_6_score;
                $hole_7_score = $round->hole_7_score;
                $hole_8_score = $round->hole_8_score;
                $hole_9_score = $round->hole_9_score;

            }

            if($nine === 'second-nine'){
            
                $hole_1_score = $round->hole_10_score;
                $hole_2_score = $round->hole_11_score;
                $hole_3_score = $round->hole_12_score;
                $hole_4_score = $round->hole_13_score;
                $hole_5_score = $round->hole_14_score;
                $hole_6_score = $round->hole_15_score;
                $hole_7_score = $round->hole_16_score;
                $hole_8_score = $round->hole_17_score;
                $hole_9_score = $round->hole_18_score;              
            
            }     
            
            if($nine === 'third-nine'){
            
                $hole_1_score = $round->hole_19_score;
                $hole_2_score = $round->hole_20_score;
                $hole_3_score = $round->hole_21_score;
                $hole_4_score = $round->hole_22_score;
                $hole_5_score = $round->hole_23_score;
                $hole_6_score = $round->hole_24_score;
                $hole_7_score = $round->hole_25_score;
                $hole_8_score = $round->hole_26_score;
                $hole_9_score = $round->hole_27_score;              
            
            }        
                        
            
        }


        // Organise Scores for full rounds 

        if($size === "full"){
            

            if($nine === 'first-nine' || $nine === 'first-nine-second-nine' || $nine === 'first-nine-third-nine'){

                $hole_1_score = $round->hole_1_score;
                $hole_2_score = $round->hole_2_score;
                $hole_3_score = $round->hole_3_score;
                $hole_4_score = $round->hole_4_score;
                $hole_5_score = $round->hole_5_score;
                $hole_6_score = $round->hole_6_score;
                $hole_7_score = $round->hole_7_score;
                $hole_8_score = $round->hole_8_score;
                $hole_9_score = $round->hole_9_score;

            }

            if($nine === 'second-nine'){
            
                $hole_1_score = $round->hole_10_score;
                $hole_2_score = $round->hole_11_score;
                $hole_3_score = $round->hole_12_score;
                $hole_4_score = $round->hole_13_score;
                $hole_5_score = $round->hole_14_score;
                $hole_6_score = $round->hole_15_score;
                $hole_7_score = $round->hole_16_score;
                $hole_8_score = $round->hole_17_score;
                $hole_9_score = $round->hole_18_score;              
            
            }

            if($nine === 'first-nine-second-nine'){

                $hole_10_score = $round->hole_10_score;
                $hole_11_score = $round->hole_11_score;
                $hole_12_score = $round->hole_12_score;
                $hole_13_score = $round->hole_13_score;
                $hole_14_score = $round->hole_14_score;
                $hole_15_score = $round->hole_15_score;
                $hole_16_score = $round->hole_16_score;
                $hole_17_score = $round->hole_17_score;
                $hole_18_score = $round->hole_18_score;            
                
            }

            if($nine === 'second-nine-third-nine'){

                $hole_1_score = $round->hole_10_score;
                $hole_2_score = $round->hole_11_score;
                $hole_3_score = $round->hole_12_score;
                $hole_4_score = $round->hole_13_score;
                $hole_5_score = $round->hole_14_score;
                $hole_6_score = $round->hole_15_score;
                $hole_7_score = $round->hole_16_score;
                $hole_8_score = $round->hole_17_score;
                $hole_9_score = $round->hole_18_score;          

            }   
            
            if($nine === 'third-nine'){
            
                $hole_1_score = $round->hole_19_score;
                $hole_2_score = $round->hole_20_score;
                $hole_3_score = $round->hole_21_score;
                $hole_4_score = $round->hole_22_score;
                $hole_5_score = $round->hole_23_score;
                $hole_6_score = $round->hole_24_score;
                $hole_7_score = $round->hole_25_score;
                $hole_8_score = $round->hole_26_score;
                $hole_9_score = $round->hole_27_score;                           
            
            }        
            
            if($nine === 'second-nine-third-nine' || $nine === 'first-nine-third-nine'){

                $hole_10_score = $round->hole_19_score;
                $hole_11_score = $round->hole_20_score;
                $hole_12_score = $round->hole_21_score;
                $hole_13_score = $round->hole_22_score;
                $hole_14_score = $round->hole_23_score;
                $hole_15_score = $round->hole_24_score;
                $hole_16_score = $round->hole_25_score;
                $hole_17_score = $round->hole_26_score;
                $hole_18_score = $round->hole_27_score;
                            
                
            }  

        }

        

        // Award strokes based on handicap (uses 90% handicap allowance table)

        $strokes_awarded = 0;

        if($handicap_to_use == 1){$strokes_awarded = 1;}
        if($handicap_to_use == 2){$strokes_awarded = 2;}
        if($handicap_to_use == 3){$strokes_awarded = 3;}
        if($handicap_to_use == 4){$strokes_awarded = 1;}
        if($handicap_to_use == 5){$strokes_awarded = 5;}
        if($handicap_to_use == 6){$strokes_awarded = 5;}
        if($handicap_to_use == 7){$strokes_awarded = 6;}
        if($handicap_to_use == 8){$strokes_awarded = 7;}
        if($handicap_to_use == 9){$strokes_awarded = 8;}
        if($handicap_to_use == 10){$strokes_awarded = 9;}
        if($handicap_to_use == 11){$strokes_awarded = 10;}
        if($handicap_to_use == 12){$strokes_awarded = 11;}
        if($handicap_to_use == 13){$strokes_awarded = 12;}
        if($handicap_to_use == 14){$strokes_awarded = 13;}
        if($handicap_to_use == 15){$strokes_awarded = 14;}
        if($handicap_to_use == 16){$strokes_awarded = 14;}
        if($handicap_to_use == 17){$strokes_awarded = 15;}
        if($handicap_to_use = 18){$strokes_awarded = 16;}
        if($handicap_to_use == 19){$strokes_awarded = 17;}
        if($handicap_to_use == 20){$strokes_awarded = 18;}
        if($handicap_to_use == 21){$strokes_awarded = 19;}
        if($handicap_to_use == 22){$strokes_awarded = 20;}
        if($handicap_to_use == 23){$strokes_awarded = 21;}
        if($handicap_to_use == 24){$strokes_awarded = 22;}
        if($handicap_to_use == 25){$strokes_awarded = 23;}
        if($handicap_to_use == 26){$strokes_awarded = 23;}
        if($handicap_to_use == 27){$strokes_awarded = 24;}
        if($handicap_to_use == 28){$strokes_awarded = 25;}
        if($handicap_to_use == 29){$strokes_awarded = 26;}
        if($handicap_to_use == 30){$strokes_awarded = 27;}
        if($handicap_to_use == 31){$strokes_awarded = 28;}
        if($handicap_to_use == 32){$strokes_awarded = 29;}
        if($handicap_to_use == 33){$strokes_awarded = 30;}
        if($handicap_to_use == 34){$strokes_awarded = 31;}
        if($handicap_to_use == 35){$strokes_awarded = 32;}
        if($handicap_to_use == 36){$strokes_awarded = 32;}
        if($handicap_to_use == 37){$strokes_awarded = 33;}
        if($handicap_to_use == 38){$strokes_awarded = 34;}
        if($handicap_to_use == 39){$strokes_awarded = 35;}
        if($handicap_to_use == 40){$strokes_awarded = 36;}
        if($handicap_to_use == 41){$strokes_awarded = 37;}
        if($handicap_to_use == 42){$strokes_awarded = 38;}
        if($handicap_to_use == 43){$strokes_awarded = 39;}
        if($handicap_to_use == 44){$strokes_awarded = 40;}
        if($handicap_to_use == 45){$strokes_awarded = 41;}
        if($handicap_to_use == 46){$strokes_awarded = 41;}
        if($handicap_to_use == 47){$strokes_awarded = 42;}
        if($handicap_to_use == 48){$strokes_awarded = 43;}
        if($handicap_to_use == 49){$strokes_awarded = 44;}
        if($handicap_to_use == 50){$strokes_awarded = 45;}
        if($handicap_to_use == 51){$strokes_awarded = 46;}
        if($handicap_to_use == 52){$strokes_awarded = 47;}
        if($handicap_to_use == 53){$strokes_awarded = 48;}
        if($handicap_to_use == 54){$strokes_awarded = 49;}


        // work out how shots are spread across the holes by stroke index

        if($strokes_awarded <= 18){

            if($hole_1_stroke_index <= $strokes_awarded){$hole_1_score = $hole_1_score - 1;}
            if($hole_2_stroke_index <= $strokes_awarded){$hole_2_score = $hole_2_score - 1;}
            if($hole_3_stroke_index <= $strokes_awarded){$hole_3_score = $hole_3_score - 1;}
            if($hole_4_stroke_index <= $strokes_awarded){$hole_4_score = $hole_4_score - 1;}
            if($hole_5_stroke_index <= $strokes_awarded){$hole_5_score = $hole_5_score - 1;}
            if($hole_6_stroke_index <= $strokes_awarded){$hole_6_score = $hole_6_score - 1;}
            if($hole_7_stroke_index <= $strokes_awarded){$hole_7_score = $hole_7_score - 1;}
            if($hole_8_stroke_index <= $strokes_awarded){$hole_8_score = $hole_8_score - 1;}
            if($hole_9_stroke_index <= $strokes_awarded){$hole_9_score = $hole_9_score - 1;}

            if($size === "full"){

                if($hole_10_stroke_index <= $strokes_awarded){$hole_10_score = $hole_10_score - 1;}
                if($hole_11_stroke_index <= $strokes_awarded){$hole_11_score = $hole_11_score - 1;}
                if($hole_12_stroke_index <= $strokes_awarded){$hole_12_score = $hole_12_score - 1;}
                if($hole_13_stroke_index <= $strokes_awarded){$hole_13_score = $hole_13_score - 1;}
                if($hole_14_stroke_index <= $strokes_awarded){$hole_14_score = $hole_14_score - 1;}
                if($hole_15_stroke_index <= $strokes_awarded){$hole_15_score = $hole_15_score - 1;}
                if($hole_16_stroke_index <= $strokes_awarded){$hole_16_score = $hole_16_score - 1;}
                if($hole_17_stroke_index <= $strokes_awarded){$hole_17_score = $hole_17_score - 1;}
                if($hole_18_stroke_index <= $strokes_awarded){$hole_18_score = $hole_18_score - 1;} 

            }         

        }

        if($strokes_awarded > 18 && $strokes_awarded < 28){

            $hole_1_score = $hole_1_score - 1;
            $hole_2_score = $hole_2_score - 1;
            $hole_3_score = $hole_3_score - 1;
            $hole_4_score = $hole_4_score - 1;
            $hole_5_score = $hole_5_score - 1;
            $hole_6_score = $hole_6_score - 1;
            $hole_7_score = $hole_7_score - 1;
            $hole_8_score = $hole_8_score - 1;
            $hole_9_score = $hole_9_score - 1;

            if($size === "full"){

                $hole_10_score = $hole_10_score - 1;
                $hole_11_score = $hole_11_score - 1;
                $hole_12_score = $hole_12_score - 1;
                $hole_13_score = $hole_13_score - 1;
                $hole_14_score = $hole_14_score - 1;
                $hole_15_score = $hole_15_score - 1;
                $hole_16_score = $hole_16_score - 1;
                $hole_17_score = $hole_17_score - 1;
                $hole_18_score = $hole_18_score - 1;

            }

            if($hole_1_stroke_index <= $strokes_awarded - 18){$hole_1_score = $hole_1_score - 1;}
            if($hole_2_stroke_index <= $strokes_awarded - 18){$hole_2_score = $hole_2_score - 1;}
            if($hole_3_stroke_index <= $strokes_awarded - 18){$hole_3_score = $hole_3_score - 1;}
            if($hole_4_stroke_index <= $strokes_awarded - 18){$hole_4_score = $hole_4_score - 1;}
            if($hole_5_stroke_index <= $strokes_awarded - 18){$hole_5_score = $hole_5_score - 1;}
            if($hole_6_stroke_index <= $strokes_awarded - 18){$hole_6_score = $hole_6_score - 1;}
            if($hole_7_stroke_index <= $strokes_awarded - 18){$hole_7_score = $hole_7_score - 1;}
            if($hole_8_stroke_index <= $strokes_awarded - 18){$hole_8_score = $hole_8_score - 1;}
            if($hole_9_stroke_index <= $strokes_awarded - 18){$hole_9_score = $hole_9_score - 1;}

            if($size === "full"){

                if($hole_10_stroke_index <= $strokes_awarded - 18){$hole_10_score = $hole_10_score - 1;}
                if($hole_11_stroke_index <= $strokes_awarded - 18){$hole_11_score = $hole_11_score - 1;}
                if($hole_12_stroke_index <= $strokes_awarded - 18){$hole_12_score = $hole_12_score - 1;}
                if($hole_13_stroke_index <= $strokes_awarded - 18){$hole_13_score = $hole_13_score - 1;}
                if($hole_14_stroke_index <= $strokes_awarded - 18){$hole_14_score = $hole_14_score - 1;}
                if($hole_15_stroke_index <= $strokes_awarded - 18){$hole_15_score = $hole_15_score - 1;}
                if($hole_16_stroke_index <= $strokes_awarded - 18){$hole_16_score = $hole_16_score - 1;}
                if($hole_17_stroke_index <= $strokes_awarded - 18){$hole_17_score = $hole_17_score - 1;}
                if($hole_18_stroke_index <= $strokes_awarded - 18){$hole_18_score = $hole_18_score - 1;}

            }

        }

        if($strokes_awarded > 27 && $strokes_awarded < 37){

            $hole_1_score = $hole_1_score - 2;
            $hole_2_score = $hole_2_score - 2;
            $hole_3_score = $hole_3_score - 2;
            $hole_4_score = $hole_4_score - 2;
            $hole_5_score = $hole_5_score - 2;
            $hole_6_score = $hole_6_score - 2;
            $hole_7_score = $hole_7_score - 2;
            $hole_8_score = $hole_8_score - 2;
            $hole_9_score = $hole_9_score - 2;

            if($size === "full"){

                $hole_10_score = $hole_10_score - 2;
                $hole_11_score = $hole_11_score - 2;
                $hole_12_score = $hole_12_score - 2;
                $hole_13_score = $hole_13_score - 2;
                $hole_14_score = $hole_14_score - 2;
                $hole_15_score = $hole_15_score - 2;
                $hole_16_score = $hole_16_score - 2;
                $hole_17_score = $hole_17_score - 2;
                $hole_18_score = $hole_18_score - 2;

            }

            if($hole_1_stroke_index <= $strokes_awarded - 27){$hole_1_score = $hole_1_score - 1;}
            if($hole_2_stroke_index <= $strokes_awarded - 27){$hole_2_score = $hole_2_score - 1;}
            if($hole_3_stroke_index <= $strokes_awarded - 27){$hole_3_score = $hole_3_score - 1;}
            if($hole_4_stroke_index <= $strokes_awarded - 27){$hole_4_score = $hole_4_score - 1;}
            if($hole_5_stroke_index <= $strokes_awarded - 27){$hole_5_score = $hole_5_score - 1;}
            if($hole_6_stroke_index <= $strokes_awarded - 27){$hole_6_score = $hole_6_score - 1;}
            if($hole_7_stroke_index <= $strokes_awarded - 27){$hole_7_score = $hole_7_score - 1;}
            if($hole_8_stroke_index <= $strokes_awarded - 27){$hole_8_score = $hole_8_score - 1;}
            if($hole_9_stroke_index <= $strokes_awarded - 27){$hole_9_score = $hole_9_score - 1;}

            if($size === "full"){

                if($hole_10_stroke_index <= $strokes_awarded - 27){$hole_10_score = $hole_10_score - 1;}
                if($hole_11_stroke_index <= $strokes_awarded - 27){$hole_11_score = $hole_11_score - 1;}
                if($hole_12_stroke_index <= $strokes_awarded - 27){$hole_12_score = $hole_12_score - 1;}
                if($hole_13_stroke_index <= $strokes_awarded - 27){$hole_13_score = $hole_13_score - 1;}
                if($hole_14_stroke_index <= $strokes_awarded - 27){$hole_14_score = $hole_14_score - 1;}
                if($hole_15_stroke_index <= $strokes_awarded - 27){$hole_15_score = $hole_15_score - 1;}
                if($hole_16_stroke_index <= $strokes_awarded - 27){$hole_16_score = $hole_16_score - 1;}
                if($hole_17_stroke_index <= $strokes_awarded - 27){$hole_17_score = $hole_17_score - 1;}
                if($hole_18_stroke_index <= $strokes_awarded - 27){$hole_18_score = $hole_18_score - 1;}

            }

        }

        if($strokes_awarded > 36 && $strokes_awarded < 49){

            $hole_1_score = $hole_1_score - 3;
            $hole_2_score = $hole_2_score - 3;
            $hole_3_score = $hole_3_score - 3;
            $hole_4_score = $hole_4_score - 3;
            $hole_5_score = $hole_5_score - 3;
            $hole_6_score = $hole_6_score - 3;
            $hole_7_score = $hole_7_score - 3;
            $hole_8_score = $hole_8_score - 3;
            $hole_9_score = $hole_9_score - 3;

            if($size === "full"){

                $hole_10_score = $hole_10_score - 3;
                $hole_11_score = $hole_11_score - 3;
                $hole_12_score = $hole_12_score - 3;
                $hole_13_score = $hole_13_score - 3;
                $hole_14_score = $hole_14_score - 3;
                $hole_15_score = $hole_15_score - 3;
                $hole_16_score = $hole_16_score - 3;
                $hole_17_score = $hole_17_score - 3;
                $hole_18_score = $hole_18_score - 3;

            }

            if($hole_1_stroke_index <= $strokes_awarded - 36){$hole_1_score = $hole_1_score - 1;}
            if($hole_2_stroke_index <= $strokes_awarded - 36){$hole_2_score = $hole_2_score - 1;}
            if($hole_3_stroke_index <= $strokes_awarded - 36){$hole_3_score = $hole_3_score - 1;}
            if($hole_4_stroke_index <= $strokes_awarded - 36){$hole_4_score = $hole_4_score - 1;}
            if($hole_5_stroke_index <= $strokes_awarded - 36){$hole_5_score = $hole_5_score - 1;}
            if($hole_6_stroke_index <= $strokes_awarded - 36){$hole_6_score = $hole_6_score - 1;}
            if($hole_7_stroke_index <= $strokes_awarded - 36){$hole_7_score = $hole_7_score - 1;}
            if($hole_8_stroke_index <= $strokes_awarded - 36){$hole_8_score = $hole_8_score - 1;}
            if($hole_9_stroke_index <= $strokes_awarded - 36){$hole_9_score = $hole_9_score - 1;}

            if($size === "full"){

                if($hole_10_stroke_index <= $strokes_awarded - 36){$hole_10_score = $hole_10_score - 1;}
                if($hole_11_stroke_index <= $strokes_awarded - 36){$hole_11_score = $hole_11_score - 1;}
                if($hole_12_stroke_index <= $strokes_awarded - 36){$hole_12_score = $hole_12_score - 1;}
                if($hole_13_stroke_index <= $strokes_awarded - 36){$hole_13_score = $hole_13_score - 1;}
                if($hole_14_stroke_index <= $strokes_awarded - 36){$hole_14_score = $hole_14_score - 1;}
                if($hole_15_stroke_index <= $strokes_awarded - 36){$hole_15_score = $hole_15_score - 1;}
                if($hole_16_stroke_index <= $strokes_awarded - 36){$hole_16_score = $hole_16_score - 1;}
                if($hole_17_stroke_index <= $strokes_awarded - 36){$hole_17_score = $hole_17_score - 1;}
                if($hole_18_stroke_index <= $strokes_awarded - 36){$hole_18_score = $hole_18_score - 1;}

            }

        }  
        
        if($strokes_awarded > 48){

            $hole_1_score = $hole_1_score - 4;
            $hole_2_score = $hole_2_score - 4;
            $hole_3_score = $hole_3_score - 4;
            $hole_4_score = $hole_4_score - 4;
            $hole_5_score = $hole_5_score - 4;
            $hole_6_score = $hole_6_score - 4;
            $hole_7_score = $hole_7_score - 4;
            $hole_8_score = $hole_8_score - 4;
            $hole_9_score = $hole_9_score - 4;

            if($size === "full"){

                $hole_10_score = $hole_10_score - 4;
                $hole_11_score = $hole_11_score - 4;
                $hole_12_score = $hole_12_score - 4;
                $hole_13_score = $hole_13_score - 4;
                $hole_14_score = $hole_14_score - 4;
                $hole_15_score = $hole_15_score - 4;
                $hole_16_score = $hole_16_score - 4;
                $hole_17_score = $hole_17_score - 4;
                $hole_18_score = $hole_18_score - 4;

            }

            if($hole_1_stroke_index <= $strokes_awarded - 48){$hole_1_score = $hole_1_score - 1;}
            if($hole_2_stroke_index <= $strokes_awarded - 48){$hole_2_score = $hole_2_score - 1;}
            if($hole_3_stroke_index <= $strokes_awarded - 48){$hole_3_score = $hole_3_score - 1;}
            if($hole_4_stroke_index <= $strokes_awarded - 48){$hole_4_score = $hole_4_score - 1;}
            if($hole_5_stroke_index <= $strokes_awarded - 48){$hole_5_score = $hole_5_score - 1;}
            if($hole_6_stroke_index <= $strokes_awarded - 48){$hole_6_score = $hole_6_score - 1;}
            if($hole_7_stroke_index <= $strokes_awarded - 48){$hole_7_score = $hole_7_score - 1;}
            if($hole_8_stroke_index <= $strokes_awarded - 48){$hole_8_score = $hole_8_score - 1;}
            if($hole_9_stroke_index <= $strokes_awarded - 48){$hole_9_score = $hole_9_score - 1;}

            if($size === "full"){

                if($hole_10_stroke_index <= $strokes_awarded - 48){$hole_10_score = $hole_10_score - 1;}
                if($hole_11_stroke_index <= $strokes_awarded - 48){$hole_11_score = $hole_11_score - 1;}
                if($hole_12_stroke_index <= $strokes_awarded - 48){$hole_12_score = $hole_12_score - 1;}
                if($hole_13_stroke_index <= $strokes_awarded - 48){$hole_13_score = $hole_13_score - 1;}
                if($hole_14_stroke_index <= $strokes_awarded - 48){$hole_14_score = $hole_14_score - 1;}
                if($hole_15_stroke_index <= $strokes_awarded - 48){$hole_15_score = $hole_15_score - 1;}
                if($hole_16_stroke_index <= $strokes_awarded - 48){$hole_16_score = $hole_16_score - 1;}
                if($hole_17_stroke_index <= $strokes_awarded - 48){$hole_17_score = $hole_17_score - 1;}
                if($hole_18_stroke_index <= $strokes_awarded - 48){$hole_18_score = $hole_18_score - 1;}

            }

        }         
        
        
        if($hole_1_score < 0){
            $hole_1_score= abs($hole_1_score);
        }
        if($hole_2_score < 0){
            $hole_2_score= abs($hole_2_score);
        }
        if($hole_3_score < 0){
            $hole_3_score= abs($hole_3_score);
        }
        if($hole_4_score < 0){
            $hole_4_score= abs($hole_4_score);
        }
        if($hole_5_score < 0){
            $hole_5_score= abs($hole_5_score);
        }
        if($hole_6_score < 0){
            $hole_6_score= abs($hole_6_score);
        }
        if($hole_7_score < 0){
            $hole_7_score= abs($hole_7_score);
        }
        if($hole_8_score < 0){
            $hole_8_score= abs($hole_8_score);
        }
        if($hole_9_score < 0){
            $hole_9_score= abs($hole_9_score);
        }
        
        if($size === "full"){

            if($hole_10_score < 0){
                $hole_10_score= abs($hole_10_score);
            }
            if($hole_11_score < 0){
                $hole_11_score= abs($hole_11_score);
            }
            if($hole_12_score < 0){
                $hole_12_score= abs($hole_12_score);
            }
            if($hole_13_score < 0){
                $hole_13_score= abs($hole_13_score);
            }
            if($hole_14_score < 0){
                $hole_14_score= abs($hole_14_score);
            }
            if($hole_15_score < 0){
                $hole_15_score= abs($hole_15_score);
            }
            if($hole_16_score < 0){
                $hole_16_score= abs($hole_16_score);
            }
            if($hole_17_score < 0){
                $hole_17_score= abs($hole_17_score);
            }
            if($hole_18_score < 0){
                $hole_18_score= abs($hole_18_score);
            }        

        }

        // Find out net scores for each hole

        $hole_1_net = $hole_1_score - $hole_1_par;
        $hole_2_net = $hole_2_score - $hole_2_par;
        $hole_3_net = $hole_3_score - $hole_3_par;
        $hole_4_net = $hole_4_score - $hole_4_par;
        $hole_5_net = $hole_5_score - $hole_5_par;
        $hole_6_net = $hole_6_score - $hole_6_par;
        $hole_7_net = $hole_7_score - $hole_7_par;
        $hole_8_net = $hole_8_score - $hole_8_par;
        $hole_9_net = $hole_9_score - $hole_9_par;

        if($size === "full"){

            $hole_10_net = $hole_10_score - $hole_10_par;
            $hole_11_net = $hole_11_score - $hole_11_par;
            $hole_12_net = $hole_12_score - $hole_12_par;
            $hole_13_net = $hole_13_score - $hole_13_par;
            $hole_14_net = $hole_14_score - $hole_14_par;
            $hole_15_net = $hole_15_score - $hole_15_par;
            $hole_16_net = $hole_16_score - $hole_16_par;
            $hole_17_net = $hole_17_score - $hole_17_par;
            $hole_18_net = $hole_18_score - $hole_18_par;

        }
        

    // Work out points scored on each hole

        $hole_1_points = 0;
        $hole_2_points = 0;
        $hole_3_points = 0;
        $hole_4_points = 0;
        $hole_5_points = 0;
        $hole_6_points = 0;
        $hole_7_points = 0;
        $hole_8_points = 0;
        $hole_9_points = 0;

        if($size === "full"){

            $hole_10_points = 0;
            $hole_11_points = 0;
            $hole_12_points = 0;
            $hole_13_points = 0;
            $hole_14_points = 0;
            $hole_15_points = 0;
            $hole_16_points = 0;
            $hole_17_points = 0;
            $hole_18_points = 0;
            
        }
        
        if($hole_1_net <= -4){
            $hole_1_points = 6;
        }
        if($hole_1_net === -3){
            $hole_1_points = 5;
        }
        if($hole_1_net === -2){
            $hole_1_points = 4;
        }
        if($hole_1_net === -1){
            $hole_1_points = 3;
        } 
        if($hole_1_net === 0){
            $hole_1_points = 2;
        }  
        if($hole_1_net === 1){
            $hole_1_points = 1;
        } 
        if($hole_1_net >= 2){
            $hole_1_points = 0;
        }  
        if($hole_2_net <= -4){
            $hole_2_points = 6;
        }
        if($hole_2_net === -3){
            $hole_2_points = 5;
        }
        if($hole_2_net === -2){
            $hole_2_points = 4;
        }
        if($hole_2_net === -1){
            $hole_2_points = 3;
        } 
        if($hole_2_net === 0){
            $hole_2_points = 2;
        }  
        if($hole_2_net === 1){
            $hole_2_points = 1;
        } 
        if($hole_2_net >= 2){
            $hole_2_points = 0;
        }         
        if($hole_3_net <= -4){
            $hole_3_points = 6;
        }
        if($hole_3_net === -3){
            $hole_3_points = 5;
        }
        if($hole_3_net === -2){
            $hole_3_points = 4;
        }
        if($hole_3_net === -1){
            $hole_3_points = 3;
        } 
        if($hole_3_net === 0){
            $hole_3_points = 2;
        }  
        if($hole_3_net === 1){
            $hole_3_points = 1;
        } 
        if($hole_3_net >= 2){
            $hole_3_points = 0;
        }         
        if($hole_4_net <= -4){
            $hole_4_points = 6;
        }
        if($hole_4_net === -3){
            $hole_4_points = 5;
        }
        if($hole_4_net === -2){
            $hole_4_points = 4;
        }
        if($hole_4_net === -1){
            $hole_4_points = 3;
        } 
        if($hole_4_net === 0){
            $hole_4_points = 2;
        }  
        if($hole_4_net === 1){
            $hole_4_points = 1;
        } 
        if($hole_4_net >= 2){
            $hole_4_points = 0;
        }         
        if($hole_5_net <= -4){
            $hole_5_points = 6;
        }
        if($hole_5_net === -3){
            $hole_5_points = 5;
        }
        if($hole_5_net === -2){
            $hole_5_points = 4;
        }
        if($hole_5_net === -1){
            $hole_5_points = 3;
        } 
        if($hole_5_net === 0){
            $hole_5_points = 2;
        }  
        if($hole_5_net === 1){
            $hole_5_points = 1;
        } 
        if($hole_5_net >= 2){
            $hole_5_points = 0;
        }         
        if($hole_6_net <= -4){
            $hole_6_points = 6;
        }
        if($hole_6_net === -3){
            $hole_6_points = 5;
        }
        if($hole_6_net === -2){
            $hole_6_points = 4;
        }
        if($hole_6_net === -1){
            $hole_6_points = 3;
        } 
        if($hole_6_net === 0){
            $hole_6_points = 2;
        }  
        if($hole_6_net === 1){
            $hole_6_points = 1;
        } 
        if($hole_6_net >= 2){
            $hole_6_points = 0;
        }         
        if($hole_7_net <= -4){
            $hole_7_points = 6;
        }
        if($hole_7_net === -3){
            $hole_7_points = 5;
        }
        if($hole_7_net === -2){
            $hole_7_points = 4;
        }
        if($hole_7_net === -1){
            $hole_7_points = 3;
        } 
        if($hole_7_net === 0){
            $hole_7_points = 2;
        }  
        if($hole_7_net === 1){
            $hole_7_points = 1;
        } 
        if($hole_7_net >= 2){
            $hole_7_points = 0;
        }         
        if($hole_8_net <= -4){
            $hole_8_points = 6;
        }
        if($hole_8_net === -3){
            $hole_8_points = 5;
        }
        if($hole_8_net === -2){
            $hole_8_points = 4;
        }
        if($hole_8_net === -1){
            $hole_8_points = 3;
        } 
        if($hole_8_net === 0){
            $hole_8_points = 2;
        }  
        if($hole_8_net === 1){
            $hole_8_points = 1;
        } 
        if($hole_8_net >= 2){
            $hole_8_points = 0;
        }         
        if($hole_9_net <= -4){
            $hole_9_points = 6;
        }
        if($hole_9_net === -3){
            $hole_9_points = 5;
        }
        if($hole_9_net === -2){
            $hole_9_points = 4;
        }
        if($hole_9_net === -1){
            $hole_9_points = 3;
        } 
        if($hole_9_net === 0){
            $hole_9_points = 2;
        }  
        if($hole_9_net === 1){
            $hole_9_points = 1;
        } 
        if($hole_9_net >= 2){
            $hole_9_points = 0;
        }         

        if($size === "full"){

            if($hole_10_net <= -4){
                $hole_10_points = 6;
            }
            if($hole_10_net === -3){
                $hole_10_points = 5;
            }
            if($hole_10_net === -2){
                $hole_10_points = 4;
            }
            if($hole_10_net === -1){
                $hole_10_points = 3;
            } 
            if($hole_10_net === 0){
                $hole_10_points = 2;
            }  
            if($hole_10_net === 1){
                $hole_10_points = 1;
            } 
            if($hole_10_net >= 2){
                $hole_10_points = 0;
            }         
            if($hole_11_net <= -4){
                $hole_11_points = 6;
            }
            if($hole_11_net === -3){
                $hole_11_points = 5;
            }
            if($hole_11_net === -2){
                $hole_11_points = 4;
            }
            if($hole_11_net === -1){
                $hole_11_points = 3;
            } 
            if($hole_11_net === 0){
                $hole_11_points = 2;
            }  
            if($hole_11_net === 1){
                $hole_11_points = 1;
            } 
            if($hole_11_net >= 2){
                $hole_11_points = 0;
            }         
            if($hole_12_net <= -4){
                $hole_12_points = 6;
            }
            if($hole_12_net === -3){
                $hole_12_points = 5;
            }
            if($hole_12_net === -2){
                $hole_12_points = 4;
            }
            if($hole_12_net === -1){
                $hole_12_points = 3;
            } 
            if($hole_12_net === 0){
                $hole_12_points = 2;
            }  
            if($hole_12_net === 1){
                $hole_12_points = 1;
            } 
            if($hole_12_net >= 2){
                $hole_12_points = 0;
            }         
            if($hole_13_net <= -4){
                $hole_13_points = 6;
            }
            if($hole_13_net === -3){
                $hole_13_points = 5;
            }
            if($hole_13_net === -2){
                $hole_13_points = 4;
            }
            if($hole_13_net === -1){
                $hole_13_points = 3;
            } 
            if($hole_13_net === 0){
                $hole_13_points = 2;
            }  
            if($hole_13_net === 1){
                $hole_13_points = 1;
            } 
            if($hole_13_net >= 2){
                $hole_13_points = 0;
            }         
            if($hole_14_net <= -4){
                $hole_14_points = 6;
            }
            if($hole_14_net === -3){
                $hole_14_points = 5;
            }
            if($hole_14_net === -2){
                $hole_14_points = 4;
            }
            if($hole_14_net === -1){
                $hole_14_points = 3;
            } 
            if($hole_14_net === 0){
                $hole_14_points = 2;
            }  
            if($hole_14_net === 1){
                $hole_14_points = 1;
            } 
            if($hole_14_net >= 2){
                $hole_14_points = 0;
            }         
            if($hole_15_net <= -4){
                $hole_15_points = 6;
            }
            if($hole_15_net === -3){
                $hole_15_points = 5;
            }
            if($hole_15_net === -2){
                $hole_15_points = 4;
            }
            if($hole_15_net === -1){
                $hole_15_points = 3;
            } 
            if($hole_15_net === 0){
                $hole_15_points = 2;
            }  
            if($hole_15_net === 1){
                $hole_15_points = 1;
            } 
            if($hole_15_net >= 2){
                $hole_15_points = 0;
            }         
            if($hole_16_net <= -4){
                $hole_16_points = 6;
            }
            if($hole_16_net === -3){
                $hole_16_points = 5;
            }
            if($hole_16_net === -2){
                $hole_16_points = 4;
            }
            if($hole_16_net === -1){
                $hole_16_points = 3;
            } 
            if($hole_16_net === 0){
                $hole_16_points = 2;
            }  
            if($hole_16_net === 1){
                $hole_16_points = 1;
            } 
            if($hole_16_net >= 2){
                $hole_16_points = 0;
            }         
            if($hole_17_net <= -4){
                $hole_17_points = 6;
            }
            if($hole_17_net === -3){
                $hole_17_points = 5;
            }
            if($hole_17_net === -2){
                $hole_17_points = 4;
            }
            if($hole_17_net === -1){
                $hole_17_points = 3;
            } 
            if($hole_17_net === 0){
                $hole_17_points = 2;
            }  
            if($hole_17_net === 1){
                $hole_17_points = 1;
            } 
            if($hole_17_net >= 2){
                $hole_17_points = 0;
            }         
            if($hole_18_net <= -4){
                $hole_18_points = 6;
            }
            if($hole_18_net === -3){
                $hole_18_points = 5;
            }
            if($hole_18_net === -2){
                $hole_18_points = 4;
            }
            if($hole_18_net === -1){
                $hole_18_points = 3;
            } 
            if($hole_18_net === 0){
                $hole_18_points = 2;
            }  
            if($hole_18_net === 1){
                $hole_18_points = 1;
            } 
            if($hole_18_net >= 2){
                $hole_18_points = 0;
            }  
        }       
    
        if($size === "half"){

            $total_points = $hole_1_points + $hole_2_points + $hole_3_points + $hole_4_points + $hole_5_points + $hole_6_points + $hole_7_points + $hole_8_points + $hole_9_points;
        
        }

        if($size === "full"){

            $total_points = $hole_1_points + $hole_2_points + $hole_3_points + $hole_4_points + $hole_5_points + $hole_6_points + $hole_7_points + $hole_8_points + $hole_9_points + $hole_10_points + $hole_11_points + $hole_12_points + $hole_13_points + $hole_14_points + $hole_15_points + $hole_16_points + $hole_17_points + $hole_18_points;
        
        }


        // Save points to round

        $round->hole_1_points = $hole_1_points;
        $round->hole_2_points = $hole_2_points;
        $round->hole_3_points = $hole_3_points;
        $round->hole_4_points = $hole_4_points;
        $round->hole_5_points = $hole_5_points;
        $round->hole_6_points = $hole_6_points;
        $round->hole_7_points = $hole_7_points;
        $round->hole_8_points = $hole_8_points;
        $round->hole_9_points = $hole_9_points;

        if($size === "full"){

            $round->hole_10_points = $hole_10_points;
            $round->hole_11_points = $hole_11_points;
            $round->hole_12_points = $hole_12_points;
            $round->hole_13_points = $hole_13_points;
            $round->hole_14_points = $hole_14_points;
            $round->hole_15_points = $hole_15_points;
            $round->hole_16_points = $hole_16_points;
            $round->hole_17_points = $hole_17_points;
            $round->hole_18_points = $hole_18_points;

        }

        $round->total_points = $total_points;

        

        return $round;

    }
 
}