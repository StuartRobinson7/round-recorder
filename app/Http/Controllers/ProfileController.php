<?php

namespace App\Http\Controllers;

use App\Course;
use App\Round;
use App\Http\Controllers;
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

    public function ProfileStats()
    {
 
        // list of last 10 rounds
        $rounds = \App\Round::where('player_id', Auth::user()->id)
                ->groupBy('rounds.id')
                ->orderBy('round_date', 'desc')
                ->take(10)
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("SUM(hole_1_par + hole_2_par + hole_3_par + hole_4_par + hole_5_par + hole_6_par + hole_7_par + hole_8_par + hole_9_par + hole_10_par + hole_11_par + hole_12_par + hole_13_par + hole_14_par + hole_15_par + hole_16_par + hole_17_par + hole_18_par) as total_par")
                ->selectRaw("SUM(hole_1_ladies_par + hole_2_ladies_par + hole_3_ladies_par + hole_4_ladies_par + hole_5_ladies_par + hole_6_ladies_par + hole_7_ladies_par + hole_8_ladies_par + hole_9_ladies_par + hole_10_ladies_par + hole_11_ladies_par + hole_12_ladies_par + hole_13_ladies_par + hole_14_ladies_par + hole_15_ladies_par + hole_16_ladies_par + hole_17_ladies_par + hole_18_ladies_par) as total_ladies_par")                              
                ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")                
                ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score - hole_1_par - hole_2_par - hole_3_par - hole_4_par - hole_5_par - hole_6_par - hole_7_par - hole_8_par - hole_9_par - hole_10_par - hole_11_par - hole_12_par - hole_13_par - hole_14_par - hole_15_par - hole_16_par - hole_17_par - hole_18_par) as plus_minus")                
                ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score - hole_1_ladies_par - hole_2_ladies_par - hole_3_ladies_par - hole_4_ladies_par - hole_5_ladies_par - hole_6_ladies_par - hole_7_ladies_par - hole_8_ladies_par - hole_9_ladies_par - hole_10_ladies_par - hole_11_ladies_par - hole_12_ladies_par - hole_13_ladies_par - hole_14_ladies_par - hole_15_ladies_par - hole_16_ladies_par - hole_17_ladies_par - hole_18_ladies_par) as ladies_plus_minus") 
                ->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) as total_putts")                
                ->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) / 18 as putts_per_hole")                       
                ->selectRaw("SUM(if(hole_1_fir > 0, 1, 0) + if(hole_2_fir > 0, 1, 0) + if(hole_3_fir > 0, 1, 0) + if(hole_4_fir > 0, 1, 0) + if(hole_5_fir > 0, 1, 0) + if(hole_6_fir > 0, 1, 0) + if(hole_7_fir > 0, 1, 0) + if(hole_8_fir > 0, 1, 0) + if(hole_9_fir > 0, 1, 0) + if(hole_10_fir > 0, 1, 0) + if(hole_11_fir > 0, 1, 0) + if(hole_12_fir > 0, 1, 0) + if(hole_13_fir > 0, 1, 0) + if(hole_14_fir > 0, 1, 0) + if(hole_15_fir > 0, 1, 0) + if(hole_16_fir > 0, 1, 0) + if(hole_17_fir > 0, 1, 0) + if(hole_18_fir > 0, 1, 0) ) / (if(hole_1_par > 3, 1, 0) + if(hole_2_par > 3, 1, 0) + if(hole_3_par > 3, 1, 0) + if(hole_4_par > 3, 1, 0) + if(hole_5_par > 3, 1, 0) + if(hole_6_par > 3, 1, 0) + if(hole_7_par > 3, 1, 0) + if(hole_8_par > 3, 1, 0) + if(hole_9_par > 3, 1, 0) + if(hole_10_par > 3, 1, 0) + if(hole_11_par > 3, 1, 0) + if(hole_12_par > 3, 1, 0) + if(hole_13_par > 3, 1, 0) + if(hole_14_par > 3, 1, 0) + if(hole_15_par > 3, 1, 0) + if(hole_16_par > 3, 1, 0) + if(hole_17_par > 3, 1, 0) + if(hole_18_par > 3, 1, 0)) * 100 as fir_percentage")
                ->selectRaw("SUM(if(hole_1_fir > 0, 1, 0) + if(hole_2_fir > 0, 1, 0) + if(hole_3_fir > 0, 1, 0) + if(hole_4_fir > 0, 1, 0) + if(hole_5_fir > 0, 1, 0) + if(hole_6_fir > 0, 1, 0) + if(hole_7_fir > 0, 1, 0) + if(hole_8_fir > 0, 1, 0) + if(hole_9_fir > 0, 1, 0) + if(hole_10_fir > 0, 1, 0) + if(hole_11_fir > 0, 1, 0) + if(hole_12_fir > 0, 1, 0) + if(hole_13_fir > 0, 1, 0) + if(hole_14_fir > 0, 1, 0) + if(hole_15_fir > 0, 1, 0) + if(hole_16_fir > 0, 1, 0) + if(hole_17_fir > 0, 1, 0) + if(hole_18_fir > 0, 1, 0) ) / (if(hole_1_ladies_par > 3, 1, 0) + if(hole_2_ladies_par > 3, 1, 0) + if(hole_3_ladies_par > 3, 1, 0) + if(hole_4_ladies_par > 3, 1, 0) + if(hole_5_ladies_par > 3, 1, 0) + if(hole_6_ladies_par > 3, 1, 0) + if(hole_7_ladies_par > 3, 1, 0) + if(hole_8_ladies_par > 3, 1, 0) + if(hole_9_ladies_par > 3, 1, 0) + if(hole_10_ladies_par > 3, 1, 0) + if(hole_11_ladies_par > 3, 1, 0) + if(hole_12_ladies_par > 3, 1, 0) + if(hole_13_ladies_par > 3, 1, 0) + if(hole_14_ladies_par > 3, 1, 0) + if(hole_15_ladies_par > 3, 1, 0) + if(hole_16_ladies_par > 3, 1, 0) + if(hole_17_ladies_par > 3, 1, 0) + if(hole_18_ladies_par > 3, 1, 0)) * 100 as ladies_fir_percentage")
                ->selectRaw("SUM(if(hole_1_gir > 0, 1, 0) + if(hole_2_gir > 0, 1, 0) + if(hole_3_gir > 0, 1, 0) + if(hole_4_gir > 0, 1, 0) + if(hole_5_gir > 0, 1, 0) + if(hole_6_gir > 0, 1, 0) + if(hole_7_gir > 0, 1, 0) + if(hole_8_gir > 0, 1, 0) + if(hole_9_gir > 0, 1, 0) + if(hole_10_gir > 0, 1, 0) + if(hole_11_gir > 0, 1, 0) + if(hole_12_gir > 0, 1, 0) + if(hole_13_gir > 0, 1, 0) + if(hole_14_gir > 0, 1, 0) + if(hole_15_gir > 0, 1, 0) + if(hole_16_gir > 0, 1, 0) + if(hole_17_gir > 0, 1, 0) + if(hole_18_gir > 0, 1, 0)) / 18 * 100 as gir_percentage")                      
                ->selectRaw("SUM(hole_1_drops + hole_2_drops + hole_3_drops + hole_4_drops + hole_5_drops + hole_6_drops + hole_7_drops + hole_8_drops + hole_9_drops + hole_10_drops + hole_11_drops + hole_12_drops + hole_13_drops + hole_14_drops + hole_15_drops + hole_16_drops + hole_17_drops + hole_18_drops) as total_drops")               
                ->selectRaw("SUM(if(hole_1_score <= hole_1_par and hole_1_gir < 1, 1, 0) + if(hole_2_score <= hole_2_par and hole_2_gir < 1, 1, 0) + if(hole_3_score <= hole_3_par and hole_3_gir < 1, 1, 0) + if(hole_4_score <= hole_4_par and hole_4_gir < 1, 1, 0) + if(hole_5_score <= hole_5_par and hole_5_gir < 1, 1, 0) + if(hole_6_score <= hole_6_par and hole_6_gir < 1, 1, 0) + if(hole_7_score <= hole_7_par and hole_7_gir < 1, 1, 0) + if(hole_8_score <= hole_8_par and hole_8_gir < 1, 1, 0) + if(hole_9_score <= hole_9_par and hole_9_gir < 1, 1, 0) + if(hole_10_score <= hole_10_par and hole_10_gir < 1, 1, 0) + if(hole_11_score <= hole_11_par and hole_11_gir < 1, 1, 0) + if(hole_12_score <= hole_12_par and hole_12_gir < 1, 1, 0) + if(hole_13_score <= hole_13_par and hole_13_gir < 1, 1, 0) + if(hole_14_score <= hole_14_par and hole_14_gir < 1, 1, 0) + if(hole_15_score <= hole_15_par and hole_15_gir < 1, 1, 0) + if(hole_16_score <= hole_16_par and hole_16_gir < 1, 1, 0) + if(hole_17_score <= hole_17_par and hole_17_gir < 1, 1, 0) + if(hole_17_score <= hole_18_par and hole_18_gir < 1, 1, 0) ) / (if(hole_1_gir < 1, 1, 0) + if(hole_2_gir < 1, 1, 0) + if(hole_3_gir < 1, 1, 0) + if(hole_4_gir < 1, 1, 0) + if(hole_5_gir < 1, 1, 0) + if(hole_6_gir < 1, 1, 0) + if(hole_7_gir < 1, 1, 0) + if(hole_8_gir < 1, 1, 0) + if(hole_9_gir < 1, 1, 0) + if(hole_10_gir < 1, 1, 0) + if(hole_11_gir < 1, 1, 0) + if(hole_12_gir < 1, 1, 0) + if(hole_13_gir < 1, 1, 0) + if(hole_14_gir < 1, 1, 0) + if(hole_15_gir < 1, 1, 0) + if(hole_16_gir < 1, 1, 0) + if(hole_17_gir < 1, 1, 0) + if(hole_18_gir < 1, 1, 0) ) * 100 as scrambling")            
                ->selectRaw("SUM(if(hole_1_score <= hole_1_ladies_par and hole_1_gir < 1, 1, 0) + if(hole_2_score <= hole_2_ladies_par and hole_2_gir < 1, 1, 0) + if(hole_3_score <= hole_3_ladies_par and hole_3_gir < 1, 1, 0) + if(hole_4_score <= hole_4_ladies_par and hole_4_gir < 1, 1, 0) + if(hole_5_score <= hole_5_ladies_par and hole_5_gir < 1, 1, 0) + if(hole_6_score <= hole_6_ladies_par and hole_6_gir < 1, 1, 0) + if(hole_7_score <= hole_7_ladies_par and hole_7_gir < 1, 1, 0) + if(hole_8_score <= hole_8_ladies_par and hole_8_gir < 1, 1, 0) + if(hole_9_score <= hole_9_ladies_par and hole_9_gir < 1, 1, 0) + if(hole_10_score <= hole_10_ladies_par and hole_10_gir < 1, 1, 0) + if(hole_11_score <= hole_11_ladies_par and hole_11_gir < 1, 1, 0) + if(hole_12_score <= hole_12_ladies_par and hole_12_gir < 1, 1, 0) + if(hole_13_score <= hole_13_ladies_par and hole_13_gir < 1, 1, 0) + if(hole_14_score <= hole_14_ladies_par and hole_14_gir < 1, 1, 0) + if(hole_15_score <= hole_15_ladies_par and hole_15_gir < 1, 1, 0) + if(hole_16_score <= hole_16_ladies_par and hole_16_gir < 1, 1, 0) + if(hole_17_score <= hole_17_ladies_par and hole_17_gir < 1, 1, 0) + if(hole_17_score <= hole_18_ladies_par and hole_18_gir < 1, 1, 0) ) / (if(hole_1_gir < 1, 1, 0) + if(hole_2_gir < 1, 1, 0) + if(hole_3_gir < 1, 1, 0) + if(hole_4_gir < 1, 1, 0) + if(hole_5_gir < 1, 1, 0) + if(hole_6_gir < 1, 1, 0) + if(hole_7_gir < 1, 1, 0) + if(hole_8_gir < 1, 1, 0) + if(hole_9_gir < 1, 1, 0) + if(hole_10_gir < 1, 1, 0) + if(hole_11_gir < 1, 1, 0) + if(hole_12_gir < 1, 1, 0) + if(hole_13_gir < 1, 1, 0) + if(hole_14_gir < 1, 1, 0) + if(hole_15_gir < 1, 1, 0) + if(hole_16_gir < 1, 1, 0) + if(hole_17_gir < 1, 1, 0) + if(hole_18_gir < 1, 1, 0) ) * 100 as ladies_scrambling")
                ->addSelect('round_date', 'property_name', 'course_name', 'rounds.id', 'yards')
                ->get();           

          


        if(count($rounds) > 0){

            // Career Fairways in regulation

            // Get total number of rounds
            $career_firs = \App\Round::where('player_id', Auth::user()->id)
                ->groupBy('rounds.id')
                ->get();

            $round_count = $career_firs->count($career_firs);                


            // White FIRs
            $white_firs = \App\Round::where('player_id', Auth::user()->id)
                ->where(function ($query) {
                    $query->where('yards', 'white');
                })               
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')  
                ->selectRaw("SUM(if(hole_1_fir > 0, 1, 0) + if(hole_2_fir > 0, 1, 0) + if(hole_3_fir > 0, 1, 0) + if(hole_4_fir > 0, 1, 0) + if(hole_5_fir > 0, 1, 0) + if(hole_6_fir > 0, 1, 0) + if(hole_7_fir > 0, 1, 0) + if(hole_8_fir > 0, 1, 0) + if(hole_9_fir > 0, 1, 0) + if(hole_10_fir > 0, 1, 0) + if(hole_11_fir > 0, 1, 0) + if(hole_12_fir > 0, 1, 0) + if(hole_13_fir > 0, 1, 0) + if(hole_14_fir > 0, 1, 0) + if(hole_15_fir > 0, 1, 0) + if(hole_16_fir > 0, 1, 0) + if(hole_17_fir > 0, 1, 0) + if(hole_18_fir > 0, 1, 0) ) / (if(hole_1_par > 3, 1, 0) + if(hole_2_par > 3, 1, 0) + if(hole_3_par > 3, 1, 0) + if(hole_4_par > 3, 1, 0) + if(hole_5_par > 3, 1, 0) + if(hole_6_par > 3, 1, 0) + if(hole_7_par > 3, 1, 0) + if(hole_8_par > 3, 1, 0) + if(hole_9_par > 3, 1, 0) + if(hole_10_par > 3, 1, 0) + if(hole_11_par > 3, 1, 0) + if(hole_12_par > 3, 1, 0) + if(hole_13_par > 3, 1, 0) + if(hole_14_par > 3, 1, 0) + if(hole_15_par > 3, 1, 0) + if(hole_16_par > 3, 1, 0) + if(hole_17_par > 3, 1, 0) + if(hole_18_par > 3, 1, 0)) * 100 as white_fir_percentage")
                ->get();
                                    
            $fir_total_white = 0;                 
                    
            if($white_firs){

                foreach ($white_firs as $white_fir) {  
                    $fir_total_white = $white_firs->sum('white_fir_percentage');
                }  

            }
 
            
            // Yellow FIRs
            $yellow_firs = \App\Round::where('player_id', Auth::user()->id)
                ->where(function ($query) {
                    $query->where('yards', 'yellow');
                })               
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')  
                ->selectRaw("SUM(if(hole_1_fir > 0, 1, 0) + if(hole_2_fir > 0, 1, 0) + if(hole_3_fir > 0, 1, 0) + if(hole_4_fir > 0, 1, 0) + if(hole_5_fir > 0, 1, 0) + if(hole_6_fir > 0, 1, 0) + if(hole_7_fir > 0, 1, 0) + if(hole_8_fir > 0, 1, 0) + if(hole_9_fir > 0, 1, 0) + if(hole_10_fir > 0, 1, 0) + if(hole_11_fir > 0, 1, 0) + if(hole_12_fir > 0, 1, 0) + if(hole_13_fir > 0, 1, 0) + if(hole_14_fir > 0, 1, 0) + if(hole_15_fir > 0, 1, 0) + if(hole_16_fir > 0, 1, 0) + if(hole_17_fir > 0, 1, 0) + if(hole_18_fir > 0, 1, 0) ) / (if(hole_1_par > 3, 1, 0) + if(hole_2_par > 3, 1, 0) + if(hole_3_par > 3, 1, 0) + if(hole_4_par > 3, 1, 0) + if(hole_5_par > 3, 1, 0) + if(hole_6_par > 3, 1, 0) + if(hole_7_par > 3, 1, 0) + if(hole_8_par > 3, 1, 0) + if(hole_9_par > 3, 1, 0) + if(hole_10_par > 3, 1, 0) + if(hole_11_par > 3, 1, 0) + if(hole_12_par > 3, 1, 0) + if(hole_13_par > 3, 1, 0) + if(hole_14_par > 3, 1, 0) + if(hole_15_par > 3, 1, 0) + if(hole_16_par > 3, 1, 0) + if(hole_17_par > 3, 1, 0) + if(hole_18_par > 3, 1, 0)) * 100 as yellow_fir_percentage")
                ->get();
                                    
            $fir_total_yellow = 0;                 
                    
            if($yellow_firs){

                foreach ($yellow_firs as $yellow_fir) {  
                    $fir_total_yellow = $yellow_firs->sum('yellow_fir_percentage');
                }  

            }            


            // red FIRs
            $red_firs = \App\Round::where('player_id', Auth::user()->id)
                ->where(function ($query) {
                    $query->where('yards', 'red');
                })               
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')  
                ->selectRaw("SUM(if(hole_1_fir > 0, 1, 0) + if(hole_2_fir > 0, 1, 0) + if(hole_3_fir > 0, 1, 0) + if(hole_4_fir > 0, 1, 0) + if(hole_5_fir > 0, 1, 0) + if(hole_6_fir > 0, 1, 0) + if(hole_7_fir > 0, 1, 0) + if(hole_8_fir > 0, 1, 0) + if(hole_9_fir > 0, 1, 0) + if(hole_10_fir > 0, 1, 0) + if(hole_11_fir > 0, 1, 0) + if(hole_12_fir > 0, 1, 0) + if(hole_13_fir > 0, 1, 0) + if(hole_14_fir > 0, 1, 0) + if(hole_15_fir > 0, 1, 0) + if(hole_16_fir > 0, 1, 0) + if(hole_17_fir > 0, 1, 0) + if(hole_18_fir > 0, 1, 0) ) / (if(hole_1_ladies_par > 3, 1, 0) + if(hole_2_ladies_par > 3, 1, 0) + if(hole_3_ladies_par > 3, 1, 0) + if(hole_4_ladies_par > 3, 1, 0) + if(hole_5_ladies_par > 3, 1, 0) + if(hole_6_ladies_par > 3, 1, 0) + if(hole_7_ladies_par > 3, 1, 0) + if(hole_8_ladies_par > 3, 1, 0) + if(hole_9_ladies_par > 3, 1, 0) + if(hole_10_ladies_par > 3, 1, 0) + if(hole_11_ladies_par > 3, 1, 0) + if(hole_12_ladies_par > 3, 1, 0) + if(hole_13_ladies_par > 3, 1, 0) + if(hole_14_ladies_par > 3, 1, 0) + if(hole_15_ladies_par > 3, 1, 0) + if(hole_16_ladies_par > 3, 1, 0) + if(hole_17_ladies_par > 3, 1, 0) + if(hole_18_ladies_par > 3, 1, 0)) * 100 as red_fir_percentage")
                ->get();

                $fir_total_red = 0;                 
                    
                if($red_firs){
    
                    foreach ($red_firs as $red_fir) {  
                        $fir_total_red = $red_firs->sum('red_fir_percentage');
                    }  
    
                }                

            // get total firs
            $fir_total = $fir_total_white + $fir_total_yellow + $fir_total_red;


            $career_fir_total = $fir_total / $round_count;


            
            // Career greens in regulation
            $career_girs = \App\Round::where('player_id', Auth::user()->id)
                    ->groupBy('rounds.id')
                    ->selectRaw("SUM(if(hole_1_gir > 0, 1, 0) + if(hole_2_gir > 0, 1, 0) + if(hole_3_gir > 0, 1, 0) + if(hole_4_gir > 0, 1, 0) + if(hole_5_gir > 0, 1, 0) + if(hole_6_gir > 0, 1, 0) + if(hole_7_gir > 0, 1, 0) + if(hole_8_gir > 0, 1, 0) + if(hole_9_gir > 0, 1, 0) + if(hole_10_gir > 0, 1, 0) + if(hole_11_gir > 0, 1, 0) + if(hole_12_gir > 0, 1, 0) + if(hole_13_gir > 0, 1, 0) + if(hole_14_gir > 0, 1, 0) + if(hole_15_gir > 0, 1, 0) + if(hole_16_gir > 0, 1, 0) + if(hole_17_gir > 0, 1, 0) + if(hole_18_gir > 0, 1, 0)) / 18 * 100 as gir_percentage")
                    ->get();

            $gir_divide = $career_girs->count($career_girs);        

            foreach ($career_girs as $career_gir) {
                $gir_total = $career_girs->sum('gir_percentage');
            }

            $career_gir_total = $gir_total / $gir_divide; 
            
            
            // Career putts per hole
            $career_pphs = \App\Round::where('player_id', Auth::user()->id)
                    ->groupBy('rounds.id')
                    ->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) / 18 as putts_per_hole")
                    ->get();

            $pph_divide = $career_pphs->count($career_pphs);        

            foreach ($career_pphs as $career_pph) {
                $pph_total = $career_pphs->sum('putts_per_hole');
            }

            $career_pph_total = $pph_total / $pph_divide;         



            // Career Scrambling
            $career_scrambles = \App\Round::where('player_id', Auth::user()->id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')
                ->selectRaw("SUM(if(hole_1_score <= hole_1_par and hole_1_gir < 1, 1, 0) + if(hole_2_score <= hole_2_par and hole_2_gir < 1, 1, 0) + if(hole_3_score <= hole_3_par and hole_3_gir < 1, 1, 0) + if(hole_4_score <= hole_4_par and hole_4_gir < 1, 1, 0) + if(hole_5_score <= hole_5_par and hole_5_gir < 1, 1, 0) + if(hole_6_score <= hole_6_par and hole_6_gir < 1, 1, 0) + if(hole_7_score <= hole_7_par and hole_7_gir < 1, 1, 0) + if(hole_8_score <= hole_8_par and hole_8_gir < 1, 1, 0) + if(hole_9_score <= hole_9_par and hole_9_gir < 1, 1, 0) + if(hole_10_score <= hole_10_par and hole_10_gir < 1, 1, 0) + if(hole_11_score <= hole_11_par and hole_11_gir < 1, 1, 0) + if(hole_12_score <= hole_12_par and hole_12_gir < 1, 1, 0) + if(hole_13_score <= hole_13_par and hole_13_gir < 1, 1, 0) + if(hole_14_score <= hole_14_par and hole_14_gir < 1, 1, 0) + if(hole_15_score <= hole_15_par and hole_15_gir < 1, 1, 0) + if(hole_16_score <= hole_16_par and hole_16_gir < 1, 1, 0) + if(hole_17_score <= hole_17_par and hole_17_gir < 1, 1, 0) + if(hole_17_score <= hole_18_par and hole_18_gir < 1, 1, 0) ) / (if(hole_1_gir < 1, 1, 0) + if(hole_2_gir < 1, 1, 0) + if(hole_3_gir < 1, 1, 0) + if(hole_4_gir < 1, 1, 0) + if(hole_5_gir < 1, 1, 0) + if(hole_6_gir < 1, 1, 0) + if(hole_7_gir < 1, 1, 0) + if(hole_8_gir < 1, 1, 0) + if(hole_9_gir < 1, 1, 0) + if(hole_10_gir < 1, 1, 0) + if(hole_11_gir < 1, 1, 0) + if(hole_12_gir < 1, 1, 0) + if(hole_13_gir < 1, 1, 0) + if(hole_14_gir < 1, 1, 0) + if(hole_15_gir < 1, 1, 0) + if(hole_16_gir < 1, 1, 0) + if(hole_17_gir < 1, 1, 0) + if(hole_18_gir < 1, 1, 0) ) * 100 as scrambling")            
                ->get();

                $scramble_divide = $career_scrambles->count($career_scrambles);        

                foreach ($career_scrambles as $career_scramble) {
                    $scramble_total = $career_scrambles->sum('scrambling');
                }
        
                $career_scramble_total = $scramble_total / $scramble_divide; 



                return view('profile', compact('rounds', 'career_fir_total', 'career_gir_total', 'career_pph_total', 'career_scramble_total'));


        }

        else{
            return view('profile', compact('rounds')); 
        }
     

    }      
 
            
}
