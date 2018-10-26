<?php

namespace App\Listeners;

use App\User;
use App\Round;
use App\Course;

use App\Events\CourseCorrection;

use App\Queries\GetRoundPoints;
use App\Queries\GetRoundHandicap;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Storage;

class CourseCorrect
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected $GetRoundPoints;
    protected $GetRoundHandicap;

    public function __construct(GetRoundPoints $GetRoundPoints, GetRoundHandicap $GetRoundHandicap)
    {
        $this->GetRoundPoints = $GetRoundPoints;
        $this->GetRoundHandicap = $GetRoundHandicap;
    }

    /**
     * Handle the event.
     *
     * @param  RoundAdd  $event
     * @return void
     */
    public function handle(CourseCorrection $event)
    {

        $course_id = $event->course->id;


        // grab all rounds on this course and re-run points calculation

        $rounds = \App\Round::where('course_id', $course_id)->get();

        foreach($rounds as $round){
           
            $yards = $round->yards;
            $nine = $round->nine;

            // Update pars

            if($yards === "white"){

                if($nine === 'first-nine' || $nine === 'first-nine-second-nine' || $nine === 'first-nine-third-nine'){
    
                    $round->hole_1_par = $event->course->hole_1_white_par;
                    $round->hole_2_par = $event->course->hole_2_white_par;
                    $round->hole_3_par = $event->course->hole_3_white_par;
                    $round->hole_4_par = $event->course->hole_4_white_par;
                    $round->hole_5_par = $event->course->hole_5_white_par;
                    $round->hole_6_par = $event->course->hole_6_white_par;
                    $round->hole_7_par = $event->course->hole_7_white_par;
                    $round->hole_8_par = $event->course->hole_8_white_par;
                    $round->hole_9_par = $event->course->hole_9_white_par;
        
                }
        
                if($nine === 'second-nine'|| $nine === 'first-nine-second-nine'){
        
                    $round->hole_10_par = $event->course->hole_10_white_par;
                    $round->hole_11_par = $event->course->hole_11_white_par;
                    $round->hole_12_par = $event->course->hole_12_white_par;
                    $round->hole_13_par = $event->course->hole_13_white_par;
                    $round->hole_14_par = $event->course->hole_14_white_par;
                    $round->hole_15_par = $event->course->hole_15_white_par;
                    $round->hole_16_par = $event->course->hole_16_white_par;
                    $round->hole_17_par = $event->course->hole_17_white_par;
                    $round->hole_18_par = $event->course->hole_18_white_par;
                    
                }
    
                if($nine === 'second-nine-third-nine'){
        
                    $round->hole_1_par = $event->course->hole_10_white_par;
                    $round->hole_2_par = $event->course->hole_11_white_par;
                    $round->hole_3_par = $event->course->hole_12_white_par;
                    $round->hole_4_par = $event->course->hole_13_white_par;
                    $round->hole_5_par = $event->course->hole_14_white_par;
                    $round->hole_6_par = $event->course->hole_15_white_par;
                    $round->hole_7_par = $event->course->hole_16_white_par;
                    $round->hole_8_par = $event->course->hole_17_white_par;
                    $round->hole_9_par = $event->course->hole_18_white_par;
        
                }              
                
                if($nine === 'third-nine' || $nine === 'second-nine-third-nine' || $nine === 'first-nine-third-nine'){
        
                    $round->hole_10_par = $event->course->hole_19_white_par;
                    $round->hole_11_par = $event->course->hole_20_white_par;
                    $round->hole_12_par = $event->course->hole_21_white_par;
                    $round->hole_13_par = $event->course->hole_22_white_par;
                    $round->hole_14_par = $event->course->hole_23_white_par;
                    $round->hole_15_par = $event->course->hole_24_white_par;
                    $round->hole_16_par = $event->course->hole_25_white_par;
                    $round->hole_17_par = $event->course->hole_26_white_par;
                    $round->hole_18_par = $event->course->hole_27_white_par;
                    
                }                     
    
            }
          
            if($yards === "yellow"){
    
                if($nine === 'first-nine' || $nine === 'first-nine-second-nine' || $nine === 'first-nine-third-nine'){
    
                    $round->hole_1_par = $event->course->hole_1_yellow_par;
                    $round->hole_2_par = $event->course->hole_2_yellow_par;
                    $round->hole_3_par = $event->course->hole_3_yellow_par;
                    $round->hole_4_par = $event->course->hole_4_yellow_par;
                    $round->hole_5_par = $event->course->hole_5_yellow_par;
                    $round->hole_6_par = $event->course->hole_6_yellow_par;
                    $round->hole_7_par = $event->course->hole_7_yellow_par;
                    $round->hole_8_par = $event->course->hole_8_yellow_par;
                    $round->hole_9_par = $event->course->hole_9_yellow_par;
        
                }
        
                if($nine === 'second-nine'|| $nine === 'first-nine-second-nine'){
        
                    $round->hole_10_par = $event->course->hole_10_yellow_par;
                    $round->hole_11_par = $event->course->hole_11_yellow_par;
                    $round->hole_12_par = $event->course->hole_12_yellow_par;
                    $round->hole_13_par = $event->course->hole_13_yellow_par;
                    $round->hole_14_par = $event->course->hole_14_yellow_par;
                    $round->hole_15_par = $event->course->hole_15_yellow_par;
                    $round->hole_16_par = $event->course->hole_16_yellow_par;
                    $round->hole_17_par = $event->course->hole_17_yellow_par;
                    $round->hole_18_par = $event->course->hole_18_yellow_par;
                    
                }
    
                if($nine === 'second-nine-third-nine'){
        
                    $round->hole_1_par = $event->course->hole_10_yellow_par;
                    $round->hole_2_par = $event->course->hole_11_yellow_par;
                    $round->hole_3_par = $event->course->hole_12_yellow_par;
                    $round->hole_4_par = $event->course->hole_13_yellow_par;
                    $round->hole_5_par = $event->course->hole_14_yellow_par;
                    $round->hole_6_par = $event->course->hole_15_yellow_par;
                    $round->hole_7_par = $event->course->hole_16_yellow_par;
                    $round->hole_8_par = $event->course->hole_17_yellow_par;
                    $round->hole_9_par = $event->course->hole_18_yellow_par;
        
                }              
                
                if($nine === 'third-nine' || $nine === 'second-nine-third-nine' || $nine === 'first-nine-third-nine'){
        
                    $round->hole_10_par = $event->course->hole_19_yellow_par;
                    $round->hole_11_par = $event->course->hole_20_yellow_par;
                    $round->hole_12_par = $event->course->hole_21_yellow_par;
                    $round->hole_13_par = $event->course->hole_22_yellow_par;
                    $round->hole_14_par = $event->course->hole_23_yellow_par;
                    $round->hole_15_par = $event->course->hole_24_yellow_par;
                    $round->hole_16_par = $event->course->hole_25_yellow_par;
                    $round->hole_17_par = $event->course->hole_26_yellow_par;
                    $round->hole_18_par = $event->course->hole_27_yellow_par;
                    
                }                     
    
            }
            
            if($yards === "red"){
    
                if($nine === 'first-nine' || $nine === 'first-nine-second-nine' || $nine === 'first-nine-third-nine'){
    
                    $round->hole_1_par = $event->course->hole_1_red_par;
                    $round->hole_2_par = $event->course->hole_2_red_par;
                    $round->hole_3_par = $event->course->hole_3_red_par;
                    $round->hole_4_par = $event->course->hole_4_red_par;
                    $round->hole_5_par = $event->course->hole_5_red_par;
                    $round->hole_6_par = $event->course->hole_6_red_par;
                    $round->hole_7_par = $event->course->hole_7_red_par;
                    $round->hole_8_par = $event->course->hole_8_red_par;
                    $round->hole_9_par = $event->course->hole_9_red_par;
        
                }
        
                if($nine === 'second-nine'|| $nine === 'first-nine-second-nine'){
        
                    $round->hole_10_par = $event->course->hole_10_red_par;
                    $round->hole_11_par = $event->course->hole_11_red_par;
                    $round->hole_12_par = $event->course->hole_12_red_par;
                    $round->hole_13_par = $event->course->hole_13_red_par;
                    $round->hole_14_par = $event->course->hole_14_red_par;
                    $round->hole_15_par = $event->course->hole_15_red_par;
                    $round->hole_16_par = $event->course->hole_16_red_par;
                    $round->hole_17_par = $event->course->hole_17_red_par;
                    $round->hole_18_par = $event->course->hole_18_red_par;
                    
                }
    
                if($nine === 'second-nine-third-nine'){
        
                    $round->hole_1_par = $event->course->hole_10_red_par;
                    $round->hole_2_par = $event->course->hole_11_red_par;
                    $round->hole_3_par = $event->course->hole_12_red_par;
                    $round->hole_4_par = $event->course->hole_13_red_par;
                    $round->hole_5_par = $event->course->hole_14_red_par;
                    $round->hole_6_par = $event->course->hole_15_red_par;
                    $round->hole_7_par = $event->course->hole_16_red_par;
                    $round->hole_8_par = $event->course->hole_17_red_par;
                    $round->hole_9_par = $event->course->hole_18_red_par;
        
                }              
                
                if($nine === 'third-nine' || $nine === 'second-nine-third-nine' || $nine === 'first-nine-third-nine'){
        
                    $round->hole_10_par = $event->course->hole_19_red_par;
                    $round->hole_11_par = $event->course->hole_20_red_par;
                    $round->hole_12_par = $event->course->hole_21_red_par;
                    $round->hole_13_par = $event->course->hole_22_red_par;
                    $round->hole_14_par = $event->course->hole_23_red_par;
                    $round->hole_15_par = $event->course->hole_24_red_par;
                    $round->hole_16_par = $event->course->hole_25_red_par;
                    $round->hole_17_par = $event->course->hole_26_red_par;
                    $round->hole_18_par = $event->course->hole_27_red_par;
                    
                }                     
    
            }            

            // Re-run round through points calculation
    
            $handicap = $round->player_handicap;           
    
            // work out points for round
    
            $this->GetRoundPoints->CalculateRoundPoints($round, $handicap); 

            $round->save();
    
            return $round;

        }   


        // grab all handicap rounds on this course and re-run handicap calculation
        
        $rounds = \App\Round::where('course_id', $course_id)->where('handicap_round', 1)->get();


        foreach($rounds as $round){
                     
            // remove any previous adjustment for handicap

            $handicap = $round->player_handicap;

            if($round->handicap_differential >= 0){
    
                $handicap_adjustment = $round->handicap_differential;
    
                $adjustment_amount = $handicap - $handicap_adjustment;
            }
    
            else{
    
                $handicap_adjustment = abs($round->handicap_differential);
    
                $adjustment_amount = $handicap + $handicap_adjustment;
            }
    
            $round->player_handicap = $adjustment_amount;

            $round->save();


            // Re-run round through handicap calculation

            $handicap = $round->player_handicap;

            $player = $round->player_id;


            // calculate rounds handicap differential

            $this->GetRoundHandicap->RoundHandicap($round, $handicap);             

            
            $player_data = \App\User::where('id', $player)->first();


            if($round->handicap_differential > 0){

                $player_data->handicap = $player_data->handicap + $round->handicap_differential;

            }

            if($round->handicap_differential === 0){
            
                $player_data->handicap = $player_data->handicap;

            }

            if($round->handicap_differential < 0){

                $player_data->handicap = $player_data->handicap - abs($round->handicap_differential);

            }

            
            // prevent handicap from going below 0

            if($player_data->handicap <= 0){

                $player_data->handicap = 0;

            } 
 
            
            // prevent handicap from going above 54

            if($player_data->handicap >= 54){

                $player_data->handicap = 54;

            }         


            // save updated handicap

            $player_data->save();                    


            // save round

            $round->save(); 


        }

        //Storage::put('roundactivity.txt', $rounds);

        //$rounds->save();

    }
}
