<?php

namespace App\Listeners;

use App\User;
use App\Round;

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
        
        $hole_1 = $event->round->hole_1_score;
        $hole_2 = $event->round->hole_3_score;
        $hole_3 = $event->round->hole_3_score;
        $hole_4 = $event->round->hole_4_score;
        $hole_5 = $event->round->hole_5_score;
        $hole_6 = $event->round->hole_6_score;
        $hole_7 = $event->round->hole_7_score;
        $hole_8 = $event->round->hole_8_score;
        $hole_9 = $event->round->hole_9_score;
        $hole_10 = $event->round->hole_10_score;
        $hole_11 = $event->round->hole_11_score;
        $hole_12 = $event->round->hole_12_score;
        $hole_13 = $event->round->hole_13_score;
        $hole_14 = $event->round->hole_14_score;
        $hole_15 = $event->round->hole_15_score;
        $hole_16 = $event->round->hole_16_score;
        $hole_17 = $event->round->hole_17_score;
        $hole_18 = $event->round->hole_18_score;

        $score = $hole_1 + $hole_2 + $hole_3 + $hole_4 + $hole_5 + $hole_6 + $hole_7 + $hole_8 + $hole_9 + $hole_10 + $hole_11 + $hole_12 + $hole_13 + $hole_14 + $hole_15 + $hole_16 + $hole_17 + $hole_18;


        // get handicap
        $get_handicap = \App\User::select('handicap')->where('id', $player)->first();

        $handicap_data = $get_handicap->handicap;

        $current_handicap = $handicap_data / 10;

        // get round count
        $round_count = \App\Round::where('player_id', $player)->count();


        // get course ratings
        $course_rating_data = \App\Course::where('id', $course)->select('course_rating')->first();

        $course_rating = $course_rating_data->course_rating;


        // get course slope
        $course_slope_data =  \App\Course::where('id', $course)->select('course_slope')->first();

        $slope_rating = $course_slope_data->course_slope;
                
            
        
        $rounds_average = 0;

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

        $esc = 0;

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
        $handicap_differential = ceil($handicap_differential / 10) * 10;

        // course handicap
        $course_handicap = ($handicap_index * $slope_rating) / 113;

        // round to the nearest whole number
        $course_handicap = round($course_handicap);

        // net score
        $net_score = $score - $course_handicap;


        // if net score above or below css then the handicap needs to be adjusted up or down            



        //$player = $event->round->player_id . 'has just added a round';
        Storage::put('roundactivity.txt', $esc);


   


    }
}
