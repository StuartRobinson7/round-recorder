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

        $score = $hole_1 + $hole_2 + $hole_3 + $hole_4 + $hole_5 + $hole_6 + $hole_7 + $hole_8 + $hole_9 + $hole_10 + $hole_11 + $hole_12 + $hole_13 + $hole_14 + $hole_15 + $hole_16 + $hole_17 + $hole_18;

        // get course sss
        $sss_data = \App\Course::where('id', $course)->select('sss')->first();
        $sss = $sss_data->sss;         

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

        // change back from decimal to integer
        $golden_number = $updated_handicap * 10;

        // update handicap in database
        $player_data = \App\User::where('id', $player)->first();
        
        $player_data->handicap = $golden_number;

        $player_data->save();

        //$player = $event->round->player_id . 'has just added a round';
        //Storage::put('roundactivity.txt', $golden_number);

    }
}
