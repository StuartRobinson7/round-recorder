<?php

namespace App\Http\Controllers;

use App\Course;
use App\Round;
use App\Http\Controllers;
use App\Queries\GetRoundList;
use App\Queries\GetCareerStats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ProfileController extends Controller

{

    /*
    |--------------------------------------------------------------------------
    | Profile Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the return of stats to the profile page
    |
    */

    protected $GetRoundList;
    protected $GetCareerStats;
 
    public function __construct(GetRoundList $GetRoundList, GetCareerStats $GetCareerStats) {
        $this->GetRoundList = $GetRoundList;
        $this->GetCareerStats = $GetCareerStats;
    }



    public function ProfileStats()
    {
   
        $career_stats = $this->GetCareerStats->careerStats();

        $rounds = $this->GetRoundList->roundList();
 
        return view('profile', compact('rounds', 'career_stats'));    
    }
}
