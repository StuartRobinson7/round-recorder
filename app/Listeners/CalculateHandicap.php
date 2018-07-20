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

        $player = $event->round->player_id;

        $course = $event->round->course_id; 

        $this_rounds = \App\Round::where('player_id', $player)
        ->orderBy('id', 'desc')
        ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as this_round_score")
        ->take(1);

        foreach ($this_rounds as $this_round) {
            $score = $this_rounds->sum('this_round_score');
        }         

        $current_handicap = \App\User::where('id', $player)->select('handicap')->get();

        $round_count = \App\Round::where('player_id', $player)->count();

        $course_rating = \App\Course::where('id', $course)->select('course_rating')->get();

        $course_slope =  \App\Course::where('id', $course)->select('course_slope')->get();
                
                
        // 5-6 rounds
        if ($round_count > 4 && $round_count < 7){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(1)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total;  
        } 

        // 7-8 rounds
        if ($round_count > 6 && $round_count < 9){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(2)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total / 2;  
        }  
        
        // 9-10 rounds
        if ($round_count > 8 && $round_count < 11){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(3)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total / 3;  
        }   
        
        // 11-12 rounds
        if ($round_count > 10 && $round_count < 13){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(4)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total / 4;              
        } 
        
        // 13-14 rounds
        if ($round_count > 12 && $round_count < 15){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(5)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total / 5;              
        }  
        
        // 15-16 rounds
        if ($round_count > 14 && $round_count < 17){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(6)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total / 6;              
        } 
        
        // 17 rounds
        if ($round_count > 16 && $round_count < 18){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(7)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total / 7;              
        }  
        
        // 18 rounds
        if ($round_count > 17 && $round_count < 19){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(8)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total / 8;              
        } 
        
        // 19 rounds
        if ($round_count > 18 && $round_count < 20){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(9)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total / 9;  
        } 
        
        // 20+ rounds
        if ($round_count > 19){

            $rounds = \App\Round::where('player_id', $player)
            ->groupBy('rounds.id')
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")
            ->orderBy('total_score', 'asc')
            ->take(10)
            ->get();

            foreach ($rounds as $round) {
                $rounds_total = $rounds->sum('total_score');
            } 

            $rounds_average = $rounds_total / 10;                       

        } 
        
        // find out correct 'equitable score control'
        if ($current_handicap < 10){
            $esc = 7; // this needs looking at, should be +2 more than par per hole...
        }

        if ($current_handicap > 9 && $current_handicap < 20){
            $esc = 7;
        } 
        
        if ($current_handicap > 19 && $current_handicap < 30){
            $esc = 8;
        } 
        
        if ($current_handicap > 29 && $current_handicap < 40){
            $esc = 9;
        }           

        if ($current_handicap < 40){
            $esc = 10;
        } 




        // get handicap index
        $handicap_index = $rounds_average * 0.96;

        // truncate to one decimal place
        $handicap_index = number_format(2.10, 1);
            
        // get handicap differential
        $handicap_differential = ($esc - $course_rating) * 113 / $slope_rating;

        // round to the nearest tenth
        $handicap_differential = ceil($input / 10) * 10;

        // course handicap
        $course_handicap = ($handicap_index * $slope_rating) /113;

        // round to the nearest whole number
        $course_handicap = round($course_handicap);

        // net score
        $net_score = $score - $course_handicap;


        // if net score above or below css then the handicap needs to be adjusted up or down            



        //$player = $event->round->player_id . 'has just added a round';
        Storage::put('roundactivity.txt', $round_count);


   


    }
}
