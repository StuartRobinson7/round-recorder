<?php

namespace App\Listeners;

use App\User;
use App\Round;

use App\Events\RoundAdd;
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
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RoundAdd  $event
     * @return void
     */
    public function handle(RoundAdd $event)
    {

        $player = $event->round->player_id;

        $course = $event->round->course_id; 
              
        $hole_1 = $event->round->hole_1_score;
        $hole_2 = $event->round->hole_3_score;
        $hole_3 = $event->round->hole_3_score;
        $hole_4 = $event->round->hole_4_score;
        $hole_5 = $event->round->hole_5_score;
        $hole_6 = $event->round->hole_6_score;
        $hole_7 = $event->round->hole_7_score;
        $hole_8 = $event->round->hole_8_score;
        $hole_9 = $event->round->hole_9_score;
        $hole_10 = $event->round->hole_10_score;
        $hole_11 = $event->round->hole_11_score;
        $hole_12 = $event->round->hole_12_score;
        $hole_13 = $event->round->hole_13_score;
        $hole_14 = $event->round->hole_14_score;
        $hole_15 = $event->round->hole_15_score;
        $hole_16 = $event->round->hole_16_score;
        $hole_17 = $event->round->hole_17_score;
        $hole_18 = $event->round->hole_18_score;

        $yards = $event->round->yards;
        $round_size = $event->round->size;

        $score = $hole_1 + $hole_2 + $hole_3 + $hole_4 + $hole_5 + $hole_6 + $hole_7 + $hole_8 + $hole_9 + $hole_10 + $hole_11 + $hole_12 + $hole_13 + $hole_14 + $hole_15 + $hole_16 + $hole_17 + $hole_18;


        // get course sss depending on size/yards

        $sss = 0;

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

        //$sss = $sss_data->sss;  


        // get handicap
        $get_handicap = \App\User::select('handicap')->where('id', $player)->first();
        $handicap_data = $get_handicap->handicap;
        $current_handicap = $handicap_data / 10;

        // get net score
        $net_score = $score - $current_handicap;

        // if net score above or below sss then the handicap needs to be adjusted up or down            
        $adjustment = $sss - $net_score;
        

        // find out buffer zone and adjustment amount based on current handicap
        if($current_handicap < 6){
            $buffer = 1;
            $adjustment_amount = 0.1;
        }

        if($current_handicap > 5 && $current_handicap < 13){
            $buffer = 2;
            $adjustment_amount = 0.2;
        }        

        if($current_handicap > 12 && $current_handicap < 21){
            $buffer = 3;
            $adjustment_amount = 0.3;
        } 
        
        if($current_handicap > 20 && $current_handicap < 29){
            $buffer = 4;
            $adjustment_amount = 0.4;
        }          

        if($current_handicap > 28 && $current_handicap < 37){
            $buffer = 5;
            $adjustment_amount = 0.5;
        }  

        if($current_handicap > 37){
            $buffer = 6;
            $adjustment_amount = 0.6;
        } 

        // if positive adjustment needs to be made i.e. handicap needs reducing
        if($adjustment > 0){
            $decrease_amount = $adjustment_amount * $adjustment;
            $updated_handicap = $current_handicap - $decrease_amount;
        } 
        
        // if no adjustment is required
        if($adjustment <= 0){
            $updated_handicap = $current_handicap;
        }   
        
        // set the buffer zone
        $buffer_zone = $sss + $buffer;

        // if negative adjustment needs to be made 
        if($net_score > $buffer_zone){          
            $increase_amount = 0.1;
            $updated_handicap = $current_handicap + $increase_amount;
        }   
        
        
        // prevent handicap from going below 0
        if($updated_handicap <= 0){
            $updated_handicap = 0;
        } 
        
        // prevent handicap from going above 54
        if($updated_handicap >= 54){
            $updated_handicap = 54;
        }         

        // change back from decimal to integer
        $golden_number = $updated_handicap * 10;


        // update handicap in database
        $player_data = \App\User::where('id', $player)->first();
        
        $player_data->handicap = $golden_number;

        $player_data->save();

        //$player = $event->round->player_id . 'has just added a round';
        Storage::put('roundactivity.txt', $round_size);

    }
}
