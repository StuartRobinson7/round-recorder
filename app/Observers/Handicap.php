<?php

namespace App\Observers;

use App\User;

class HandicapObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $model->handicap = ($model->handicap) ?: '540'; 
    }  

}
