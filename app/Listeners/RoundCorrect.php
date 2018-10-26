<?php

namespace App\Listeners;

use App\User;
use App\Round;
use App\Course;

use App\Events\RoundUpdate;

use App\Queries\GetRoundPoints;
use App\Queries\GetRoundHandicap;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Storage;

class RoundCorrect
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
     * @param  RoundCorrect  $event
     * @return void
     */
    public function handle(RoundUpdate $event)
    {

        $round = $event->round;       


        // Re-run round through points calculation

        $handicap = $round->player_handicap;           


        // work out points for round

        $this->GetRoundPoints->CalculateRoundPoints($round, $handicap); 

                   
        // remove any previous adjustment from handicap

        $player = $round->player_id;

        $player_data = \App\User::where('id', $player)->first();

        $handicap_to_update = $player_data->handicap;


        if($round->handicap_differential >= 0){
    
            $handicap_adjustment = $round->handicap_differential;
    
            $handicap_to_update = $handicap_to_update - $handicap_adjustment;
        }
    
        else{
    
            $handicap_adjustment = abs($round->handicap_differential);
    
            $handicap_to_update = $handicap_to_update + $handicap_adjustment;
        }  
        
        $player_data->handicap = $handicap_to_update;

        $player_data->save();




        // calculate rounds handicap differential

        $this->GetRoundHandicap->RoundHandicap($round, $handicap);
        
        
        // adjust handicap according to differential

        $player = $round->player_id;
            
        $player_data = \App\User::where('id', $player)->first();

        $final_handicap = $player_data->handicap;

        if($round->handicap_differential > 0){

             $final_handicap = $final_handicap + $round->handicap_differential;

        }

        if($round->handicap_differential == 0){
            
            $final_handicap = $final_handicap;

        }

        if($round->handicap_differential < 0){

            $final_handicap = $final_handicap - abs($round->handicap_differential);

        }

            
        // prevent handicap from going below 0

        if($final_handicap <= 0){

            $final_handicap = 0;

        } 
 
            
        // prevent handicap from going above 54

        if($final_handicap >= 54){

            $final_handicap = 54;

        }         


        // update handicap

        $player_data->handicap = $final_handicap;


        // save updated handicap

        $player_data->save();                    


        // save round

        $round->save(); 

        // Storage::put('roundactivity.txt', $final_handicap);

    }
}
