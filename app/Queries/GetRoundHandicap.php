<?php

namespace App\Queries;

use App\User;
use App\Round;
use App\Course;

use Illuminate\Support\Facades\Auth;
use Storage;
 
class GetRoundHandicap {

    public function RoundHandicap($round, $handicap){                     
 
                    // organise scores

                    if($round->nine === 'first-nine' || $round->nine === 'first-nine-second-nine' || $round->nine === 'first-nine-third-nine'){

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
            
                    if($round->nine === 'second-nine'){
                        
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
            
                    if($round->nine === 'first-nine-second-nine'){
            
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
            
                    if($round->nine === 'second-nine-third-nine'){
            
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
                        
                    if($round->nine === 'third-nine'){
                        
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
                        
                    if($round->nine === 'second-nine-third-nine' || $round->nine === 'first-nine-third-nine'){
            
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
                    
                    
                    // work out adjusted score

                    if($hole_1_score > $round->hole_1_par * 2){
                        $hole_1_score = $round->hole_1_par * 2;
                    }

                    if($hole_2_score > $round->hole_2_par * 2){
                        $hole_2_score = $round->hole_2_par * 2;
                    }
                    
                    if($hole_3_score > $round->hole_3_par * 2){
                        $hole_3_score = $round->hole_3_par * 2;
                    }
                    
                    if($hole_4_score > $round->hole_4_par * 2){
                        $hole_4_score = $round->hole_4_par * 2;
                    }
                    
                    if($hole_5_score > $round->hole_5_par * 2){
                        $hole_5_score = $round->hole_5_par * 2;
                    }
                    
                    if($hole_6_score > $round->hole_6_par * 2){
                        $hole_6_score = $round->hole_6_par * 2;
                    }
                    
                    if($hole_7_score > $round->hole_7_par * 2){
                        $hole_7_score = $round->hole_7_par * 2;
                    }
                    
                    if($hole_8_score > $round->hole_8_par * 2){
                        $hole_8_score = $round->hole_8_par * 2;
                    }
                    
                    if($hole_9_score > $round->hole_9_par * 2){
                        $hole_9_score = $round->hole_9_par * 2;
                    }
                    
                    if($round->size === 'full'){

                        if($hole_10_score > $round->hole_10_par * 2){
                            $hole_10_score = $round->hole_10_par * 2;
                        }   
                        
                        if($hole_11_score > $round->hole_11_par * 2){
                            $hole_11_score = $round->hole_11_par * 2;
                        }   
                        
                        if($hole_12_score > $round->hole_12_par * 2){
                            $hole_12_score = $round->hole_12_par * 2;
                        }   
                        
                        if($hole_13_score > $round->hole_13_par * 2){
                            $hole_13_score = $round->hole_13_par * 2;
                        }   
                        
                        if($hole_14_score > $round->hole_14_par * 2){
                            $hole_14_score = $round->hole_14_par * 2;
                        }   
                        
                        if($hole_15_score > $round->hole_15_par * 2){
                            $hole_15_score = $round->hole_15_par * 2;
                        }   
                        
                        if($hole_16_score > $round->hole_16_par * 2){
                            $hole_16_score = $round->hole_16_par * 2;
                        }   
                        
                        if($hole_17_score > $round->hole_17_par * 2){
                            $hole_17_score = $round->hole_17_par * 2;
                        }   
                        
                        if($hole_18_score > $round->hole_18_par * 2){
                            $hole_18_score = $round->hole_18_par * 2;
                        } 

                    }

                    if($round->size === 'half'){
                        $adjusted_round_score =  $hole_1_score + $hole_2_score + $hole_3_score + $hole_4_score + $hole_5_score + $hole_6_score + $hole_7_score + $hole_8_score + $hole_9_score;
                    }                    
                    
                    if($round->size === 'full'){
                        $adjusted_round_score =  $hole_1_score + $hole_2_score + $hole_3_score + $hole_4_score + $hole_5_score + $hole_6_score + $hole_7_score + $hole_8_score + $hole_9_score + $hole_10_score + $hole_11_score + $hole_12_score + $hole_13_score + $hole_14_score + $hole_15_score + $hole_16_score + $hole_17_score + $hole_18_score;
                    }  


                    // get course SSS depending on size/yards

                    $sss = 0;
                    $round_size = $round->size;
                    $yards = $round->yards;
                    $course = $round->course_id;

                    $sss_data = \App\Course::where('id', $course)->first();

                    // half a round on half a course

                    if($round_size === 'half' && $yards === 'white' && $sss_data->holes === 9){
                        $sss = $sss_data->white_half_sss;
                    }

                    if($round_size === 'half' && $yards === 'yellow' && $sss_data->holes === 9){
                        $sss = $sss_data->yellow_half_sss;
                    }    
                    
                    if($round_size === 'half' && $yards === 'red' && $sss_data->holes === 9){
                        $sss = $sss_data->red_half_sss;
                    }        


                    // full round on 18 hole course

                    if($round_size === 'full' && $yards === 'white' && $sss_data->holes === 18){
                        $sss = $sss_data->white_sss;
                    }

                    if($round_size === 'full' && $yards === 'yellow' && $sss_data->holes === 18){
                        $sss = $sss_data->yellow_sss;
                    }    
                    
                    if($round_size === 'full' && $yards === 'red' && $sss_data->holes === 18){
                        $sss = $sss_data->red_sss;
                    }     


                    // half round on 27 hole course

                    if($round_size === 'half' && $yards === 'white' && $sss_data->holes === 27){

                        if($sss_data->nines === 'first-nine'){
                            $sss = $sss_data->hole_1_white_par + $sss_data->hole_2_white_par + $sss_data->hole_3_white_par + $sss_data->hole_4_white_par + $sss_data->hole_5_white_par + $sss_data->hole_6_white_par + $sss_data->hole_7_white_par + $sss_data->hole_8_white_par + $sss_data->hole_9_white_par;
                        }

                        if($sss_data->nines === 'second-nine'){
                            $sss = $sss_data->hole_10_white_par + $sss_data->hole_11_white_par + $sss_data->hole_12_white_par + $sss_data->hole_13_white_par + $sss_data->hole_14_white_par + $sss_data->hole_15_white_par + $sss_data->hole_16_white_par + $sss_data->hole_17_white_par + $sss_data->hole_18_white_par;
                        }  
                        
                        if($sss_data->nines === 'third-nine'){
                            $sss = $sss_data->hole_19_white_par + $sss_data->hole_20_white_par + $sss_data->hole_21_white_par + $sss_data->hole_22_white_par + $sss_data->hole_23_white_par + $sss_data->hole_24_white_par + $sss_data->hole_25_white_par + $sss_data->hole_26_white_par + $sss_data->hole_27_white_par;
                        }              

                    }


                    if($round_size === 'half' && $yards === 'yellow' && $sss_data->holes === 27){

                        if($sss_data->nines === 'first-nine'){
                            $sss = $sss_data->hole_1_yellow_par + $sss_data->hole_2_yellow_par + $sss_data->hole_3_yellow_par + $sss_data->hole_4_yellow_par + $sss_data->hole_5_yellow_par + $sss_data->hole_6_yellow_par + $sss_data->hole_7_yellow_par + $sss_data->hole_8_yellow_par + $sss_data->hole_9_yellow_par;
                        }

                        if($sss_data->nines === 'second-nine'){
                            $sss = $sss_data->hole_10_yellow_par + $sss_data->hole_11_yellow_par + $sss_data->hole_12_yellow_par + $sss_data->hole_13_yellow_par + $sss_data->hole_14_yellow_par + $sss_data->hole_15_yellow_par + $sss_data->hole_16_yellow_par + $sss_data->hole_17_yellow_par + $sss_data->hole_18_yellow_par;
                        }  
                        
                        if($sss_data->nines === 'third-nine'){
                            $sss = $sss_data->hole_19_yellow_par + $sss_data->hole_20_yellow_par + $sss_data->hole_21_yellow_par + $sss_data->hole_22_yellow_par + $sss_data->hole_23_yellow_par + $sss_data->hole_24_yellow_par + $sss_data->hole_25_yellow_par + $sss_data->hole_26_yellow_par + $sss_data->hole_27_yellow_par;
                        }              

                    }       
                    
                    
                    if($round_size === 'half' && $yards === 'red' && $sss_data->holes === 27){

                        if($sss_data->nines === 'first-nine'){
                            $sss = $sss_data->hole_1_red_par + $sss_data->hole_2_red_par + $sss_data->hole_3_red_par + $sss_data->hole_4_red_par + $sss_data->hole_5_red_par + $sss_data->hole_6_red_par + $sss_data->hole_7_red_par + $sss_data->hole_8_red_par + $sss_data->hole_9_red_par;
                        }

                        if($sss_data->nines === 'second-nine'){
                            $sss = $sss_data->hole_10_red_par + $sss_data->hole_11_red_par + $sss_data->hole_12_red_par + $sss_data->hole_13_red_par + $sss_data->hole_14_red_par + $sss_data->hole_15_red_par + $sss_data->hole_16_red_par + $sss_data->hole_17_red_par + $sss_data->hole_18_red_par;
                        }  
                        
                        if($sss_data->nines === 'third-nine'){
                            $sss = $sss_data->hole_19_red_par + $sss_data->hole_20_red_par + $sss_data->hole_21_red_par + $sss_data->hole_22_red_par + $sss_data->hole_23_red_par + $sss_data->hole_24_red_par + $sss_data->hole_25_red_par + $sss_data->hole_26_red_par + $sss_data->hole_27_red_par;
                        }              

                    }        


                    if($round_size === 'full' && $yards === 'white' && $sss_data->holes === 27){

                        if($sss_data->nines === 'first-nine-second-nine'){
                            $sss = $sss_data->white_first_second_sss;            
                        }

                        if($sss_data->nines === 'second-nine-third-nine'){
                            $sss = $sss_data->white_second_third_sss;
                        }   
                        
                        if($sss_data->nines === 'first-nine-third-nine'){
                            $sss = $sss_data->white_first_third_sss;                        
                        }                    
                    }


                    if($round_size === 'full' && $yards === 'yellow' && $sss_data->holes === 27){

                        if($sss_data->nines === 'first-nine-second-nine'){
                            $sss = $sss_data->yellow_first_second_sss;            
                        }

                        if($sss_data->nines === 'second-nine-third-nine'){
                            $sss = $sss_data->yellow_second_third_sss;
                        }   
                        
                        if($sss_data->nines === 'first-nine-third-nine'){
                            $sss = $sss_data->yellow_first_third_sss;                        
                        }
                    }


                    if($round_size === 'full' && $yards === 'red' && $sss_data->holes === 27){

                        if($sss_data->nines === 'first-nine-second-nine'){
                            $sss = $sss_data->red_first_second_sss;            
                        }

                        if($sss_data->nines === 'second-nine-third-nine'){
                            $sss = $sss_data->red_second_third_sss;
                        }   
                        
                        if($sss_data->nines === 'first-nine-third-nine'){
                            $sss = $sss_data->red_first_third_sss;            
                        }            

                    } 


                    // find out nett differential

                    $nett_differential = $adjusted_round_score - $sss;


                    // find out buffer zone and adjustment amounts based on handicap

                    if($handicap <= 0){
                        $buffer = 0;
                        ///$adjustment_amount = 0.1;
                    }                    

                    if($handicap < 5.4){
                        $buffer = 1;
                        ///$adjustment_amount = 0.1;
                    }
        
                    if($handicap > 5.4 && $handicap < 12.4){
                        $buffer = 2;
                        //$adjustment_amount = 0.2;
                    }        
        
                    if($handicap > 12.5 && $handicap < 20.4){
                        $buffer = 3;
                        //$adjustment_amount = 0.3;
                    } 
                    
                    if($handicap > 20.5 && $handicap < 28.4){
                        $buffer = 4;
                        //$adjustment_amount = 0.4;
                    }          
        
                    if($handicap > 28.5 && $handicap < 36.4){
                        $buffer = 5;
                        //$adjustment_amount = 0.5;
                    }  
        
                    if($handicap > 36.5){
                        $buffer = 6;
                        //$adjustment_amount = 0.6;
                    }   
                    
                    

                    $increase = false;
                    $decrease = false;

                    // if positive adjustment needs to be made i.e. handicap needs reducing

                    // record handicap before  reduction

                    $current_handicap = $handicap;

                    Storage::put('roundactivity.txt', $current_handicap);

                    $loop_handicap = $handicap;

                    if($nett_differential < 0){


                        $nett_differential_loops = abs($nett_differential);


                        // loop for each handicap differential reducing handicap according to handicap category after each loop

                        for ($i = 0; $i < $nett_differential_loops; $i++) {

                            if($loop_handicap < 5.5){
                                $loop_handicap = $loop_handicap - 0.1;
                            }
                
                            if($loop_handicap > 5.4 && $loop_handicap < 12.5){
                                $loop_handicap = $loop_handicap - 0.2;
                            }        
                
                            if($loop_handicap > 12.4 && $loop_handicap < 20.5){
                                $loop_handicap = $loop_handicap - 0.3;
                            } 
                            
                            if($loop_handicap > 20.4 && $loop_handicap < 28.5){
                                $loop_handicap = $loop_handicap - 0.4;
                            }          
                
                            if($loop_handicap > 28.4 && $loop_handicap <= 36.5){
                                $loop_handicap = $loop_handicap - 0.5;
                            }  
                
                            if($loop_handicap >= 36.4){
                                $loop_handicap = $loop_handicap - 0.6;
                            }  

                        }

                        $updated_handicap = $loop_handicap;


                        // find out how much the handicap has decreased by

                        $decrease_amount = $updated_handicap - $current_handicap;


                        // add to this rounds record
                        
                        $round->handicap_differential = $decrease_amount;
        
                        $decrease = true;                        

                    } 
                    

                    // if no adjustment is required

                    if($nett_differential == 0){

                        //$updated_handicap = $current_handicap;
        
                        // add to this rounds record
                        $round->handicap_differential = 0;
                    }   
                    

                    // set the buffer zone

                    $buffer_zone = $sss + $buffer;
        

                    // if negative adjustment needs to be made 

                    if($adjusted_round_score > $buffer_zone){  

                        $increase_amount = 0.1;
                        //$updated_handicap = $current_handicap + $increase_amount;
        

                        // add to this rounds record

                        $round->handicap_differential = $increase_amount;
        
                        $increase = true;
                    }   
                    

        return $round;

    }
 
}