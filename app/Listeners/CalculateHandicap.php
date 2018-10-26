<?php

namespace App\Listeners;

use App\User;
use App\Round;

use App\Events\RoundAdd;
use App\Events\RoundUpdate;

use App\Queries\GetRoundHandicap;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Storage;

class CalculateHandicap
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected $GetRoundHandicap;

    public function __construct(GetRoundHandicap $GetRoundHandicap)
    {
        $this->GetRoundHandicap = $GetRoundHandicap;
    }

    /**
     * Handle the event.
     *
     * @param  RoundAdd  $event
     * @return void
     */
    public function handle(RoundAdd $event)
    {

        $handicap_round = $event->round->handicap_round;


        // First check if this round is to be used to calculate a handicap

        if($handicap_round > 0){


            // get players current handicap and save to round 

            $player = $event->round->player_id;

            $player_handicap = User::where('id', $player)->first();

            $current_handicap = $player_handicap->handicap; 

            $event->round->player_handicap = $current_handicap;


            // course ID

            $course = $event->round->course_id;


            // players handicap rounds

            $rounds = Round::where('player_id', $player)
                ->where('handicap_round', '1')
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->get();


            // Find out how many holes have been played

            $round_count = count($rounds);
            $hole_count = 0;

            foreach($rounds as $round){

                if($round->size === 'half'){
                    $hole_count = $hole_count + 9;
                }

                if($round->size === 'full'){
                    $hole_count = $hole_count + 18;
                }            

            }


            // If not enough holes have been played to calculate a handicap, return round

            if($hole_count < 54){

                $event->round->save();

            }


            // check if initial handicap has been assigned, if not assign one, if so adjust accordingly

            if($hole_count === 54){


                // if player hasn't been assigned a handicap already then assign one

                if($current_handicap > 53.9){

                    foreach($rounds as $round){


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

                        
                        // adjust each score to be no more than double par

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
                        
                        

                        // find SSS of course played for this round

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
    
                        // work out adjusted gross score for each round

                        $adjusted_gross_score = $adjusted_round_score - $sss;

                        $adjusted_gross_scores[] = array($adjusted_gross_score);

                    }

                    $adjusted_gross_scores_array = collect($adjusted_gross_scores);

                    $collapsed_adjusted_gross_scores_array = $adjusted_gross_scores_array->collapse();

                    $lowest_adjusted_gross_score = $collapsed_adjusted_gross_scores_array->min();

                    $initial_handicap = ($lowest_adjusted_gross_score + ($lowest_adjusted_gross_score * 0.13)) / 1.237;


                    // truncate to nearest whole number

                    $initial_handicap = round($initial_handicap, 0, PHP_ROUND_HALF_UP);
                    

                    // ensure handicap cannot go below zero

                    if($initial_handicap < 0){

                        $initial_handicap = 0;

                    }


                    // ensure handicap cannot go above 54

                    if($initial_handicap > 54){

                        $initial_handicap = 54;

                    }                    


                    // update handicap for player

                    $player_data = \App\User::where('id', $player)->first();
                        
                    $player_data->handicap = $initial_handicap;
        
                    $player_data->save();                    

                    return $event->round;

                }


                // adjust handicap accordingly

                else{                    

                    $round = $event->round;
                    $handicap = $current_handicap;
                    $player = $round->player_id;


                    // calculate rounds handicap differential

                    $this->GetRoundHandicap->RoundHandicap($round, $handicap);                                        


                    // update handicap for player

                    $player_data = \App\User::where('id', $player)->first();

                    $pd_handicap = $player_data->handicap;

                    if($round->handicap_differential > 0){

                        $pd_handicap = $pd_handicap + $round->handicap_differential;

                    }

                    if($round->handicap_differential === 0){
                    
                        $pd_handicap = $pd_handicap;

                    }

                    if($round->handicap_differential < 0){

                        $pd_handicap = $pd_handicap - abs($round->handicap_differential);

                    }


                    // prevent handicap from going below 0

                    if($pd_handicap <= 0){

                        $pd_handicap = 0;

                    } 
                    

                    // prevent handicap from going above 54

                    if($pd_handicap >= 54){

                        $pd_handicap = 54;

                    }         

                    $player_data->handicap = $pd_handicap;


                    // save updated handicap

                    $player_data->save();                    


                    // save round

                    $event->round->save();     

                }

            }


            // if over 53 holes have been played

            if($hole_count > 54){


                    $round = $event->round;
                    $handicap = $current_handicap;
                    $player = $round->player_id;

                    // calculate rounds handicap differential

                    $this->GetRoundHandicap->RoundHandicap($round, $handicap);                                        

                    // update handicap for player

                    $player_data = \App\User::where('id', $player)->first();

                    $pd_handicap = $player_data->handicap;

                    if($round->handicap_differential > 0){

                        $pd_handicap = $pd_handicap + $round->handicap_differential;

                    }

                    if($round->handicap_differential === 0){
                    
                        $pd_handicap = $pd_handicap;

                    }

                    if($round->handicap_differential < 0){

                        $pd_handicap = $pd_handicap - abs($round->handicap_differential);

                    }

                    // prevent handicap from going below 0

                    if($pd_handicap <= 0){

                        $pd_handicap = 0;

                    } 
                    
                    // prevent handicap from going above 54

                    if($pd_handicap >= 54){

                        $pd_handicap = 54;

                    }         

                    $player_data->handicap = $pd_handicap;

                    // save updated handicap

                    $player_data->save();                    


                    // save round

                    $event->round->save();                                                      



            }


        }


        // return round if no handicap calculations required

        else{

            $event->round->save();

        }
    

    }
}
