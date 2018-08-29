<?php

namespace App\Providers;

use Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //View::composer(
        //    'view_course',
        //    'App\Http\ViewComposers\CourseComposer'
        //);

        // Using Closure based composers...
        View::composer('view_course', function ($view) {
            $id = Route::current()->parameter('id');
        });


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
