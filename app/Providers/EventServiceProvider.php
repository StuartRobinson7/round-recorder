<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\RoundAdd' => [
            'App\Listeners\StoreRoundPar',
            'App\Listeners\RoundPoints',
            'App\Listeners\CalculateHandicap', 
            
        ],
        'App\Events\RoundUpdate' => [
            'App\Listeners\RoundCorrect',
             
        ], 
        'App\Events\CourseCorrection' => [
            'App\Listeners\CourseCorrect', 
        ],                
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();


    }
}
