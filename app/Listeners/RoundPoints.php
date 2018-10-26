<?php

namespace App\Listeners;

use App\User;
use App\Round;
use App\Course;

use App\Events\RoundAdd;
use App\Events\RoundUpdate;

use App\Queries\GetRoundPoints;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Storage;

class RoundPoints
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected $GetRoundPoints;

    public function __construct(GetRoundPoints $GetRoundPoints)
    {
        $this->GetRoundPoints = $GetRoundPoints;
    }

    /**
     * Handle the event.
     *
     * @param  RoundAdd  $event
     * @return void
     */
    public function handle(RoundAdd $event)
    {

        $round = $event->round;

        $player = $event->round->player_id;

        $get_handicap = \App\User::select('handicap')->where('id', $player)->first();

        $handicap = $get_handicap->handicap;
        
        $event->round->player_handicap = $handicap;


        // work out points for round

        $this->GetRoundPoints->CalculateRoundPoints($round, $handicap); 


        // save round with points

        $event->round->save();


        //return round with points

        return $event->round;
       

    }
}
