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

use Storage;

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

        $stats_rounds = $this->GetRoundList->statsRoundList();


        // number of handicap rounds played
        $handicap_dates_array = Round::where('player_id', Auth::user()->id)
            ->where('handicap_round', '1')
            ->orderBy('round_date', 'asc')
            ->select('round_date')
            ->take(10)                               
            ->get();          
            
        $handicap_dates =  array();

        foreach($handicap_dates_array as $round_date) {     

            $round_date = collect($round_date);

            $round_date->values();

            $round_date->flatten();

            $handicap_dates[] = $round_date;

        }

        $handicap_dates = collect($handicap_dates);

        $handicap_dates = $handicap_dates->flatten();


        // number of handicap rounds played
        $player_handicap_array = Round::where('player_id', Auth::user()->id)
            ->where('handicap_round', '1')
            ->orderBy('round_date', 'asc')
            ->select('player_handicap')
            ->take(10)                               
            ->get();          

        $player_handicap =  array();

        foreach($player_handicap_array as $handicap) {            

            $handicap = collect($handicap);

            $handicap->values();

            $handicap->flatten();

            $player_handicap[] = $handicap;

        }

        $player_handicap = collect($player_handicap);

        $player_handicap = $player_handicap->flatten();


        // dates of rounds played
        $points_dates_array = Round::where('player_id', Auth::user()->id)
        ->orderBy('round_date', 'asc')
        ->select('round_date')
        ->take(10)                               
        ->get();          
        
        $points_dates =  array();

        foreach($points_dates_array as $points_date) {     

        $points_date = collect($points_date);

        $points_date->values();

        $points_date->flatten();

        $points_dates[] = $points_date;

        }

        $points_dates = collect($points_dates);

        $points_dates = $points_dates->flatten();    
        
        
        // points
        $points_array = Round::where('player_id', Auth::user()->id)
            ->orderBy('round_date', 'asc')
            ->select('total_points')
            ->take(10)                               
            ->get();          

        $points =  array();

        foreach($points_array as $point) {            

            $point = collect($point);

            $point->values();

            $point->flatten();

            $points[] = $point;

        }

        $points = collect($points);

        $points = $points->flatten();

 
        return view('profile', compact('rounds', 'stats_rounds', 'career_stats', 'handicap_dates', 'player_handicap', 'points_dates', 'points'));    
    }
}
