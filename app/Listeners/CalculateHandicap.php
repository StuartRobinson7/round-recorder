<?php

namespace App\Listeners;

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
        $player = $event->round->player_id . 'has just added a round';

        Storage::put('roundactivity.txt', $player);

    }
}
