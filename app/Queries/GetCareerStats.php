<?php

namespace App\Queries;

use App\Round;
use App\Course;
use Illuminate\Support\Facades\Auth;
 
class GetCareerStats {
 
    /**
     * Get Course data and totals
     */

    public function careerStats(){        

        // create career_stats object
        $app = app();
        $career_stats = $app->make('stdClass');

        // number of rounds played
        $career_rounds = Round::where('player_id', Auth::user()->id)
        ->count();

        $rounds_played = intval($career_rounds);

        $career_stats->rounds_played = $rounds_played;


        // number of stats rounds played
        $stats_rounds = Round::where('player_id', Auth::user()->id)
        ->where('stats_round', '1')
        ->count();

        $stats_rounds_played = intval($stats_rounds);

        $career_stats->stats_rounds_played = $stats_rounds_played;   


        // number of holes played
        $rounds = Round::where('player_id', Auth::user()->id)
            ->where('stats_round', '1')
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')
            ->get();

        $hole_count = 0;

        foreach($rounds as $round){

            if($round->size === 'half'){
                $hole_count = $hole_count + 9;
            }

            if($round->size === 'full'){
                $hole_count = $hole_count + 18;
            }            

        }

        $career_stats->holes_played = $hole_count;



        // Fairways in Regulation
        $fairways_hit = 0;
        $fairways_available = 0;

        foreach($rounds as $round){

            $hole_1_fairway_available = 0;
            $hole_2_fairway_available = 0;
            $hole_3_fairway_available = 0;
            $hole_4_fairway_available = 0;
            $hole_5_fairway_available = 0;
            $hole_6_fairway_available = 0;
            $hole_7_fairway_available = 0;
            $hole_8_fairway_available = 0;
            $hole_9_fairway_available = 0;
            $hole_10_fairway_available = 0;
            $hole_11_fairway_available = 0;
            $hole_12_fairway_available = 0;
            $hole_13_fairway_available = 0;
            $hole_14_fairway_available = 0;
            $hole_15_fairway_available = 0;
            $hole_16_fairway_available = 0;
            $hole_17_fairway_available = 0;
            $hole_18_fairway_available = 0;
            $hole_19_fairway_available = 0;
            $hole_20_fairway_available = 0;
            $hole_21_fairway_available = 0;
            $hole_22_fairway_available = 0;
            $hole_23_fairway_available = 0;
            $hole_24_fairway_available = 0;
            $hole_25_fairway_available = 0;
            $hole_26_fairway_available = 0;
            $hole_27_fairway_available = 0;


            if($round->nine === 'first-nine' || $round->nine === 'first-nine-second-nine' || $round->nine === 'first-nine-third-nine'){
                if($round->hole_1_par > 3){ $hole_1_fairway_available = $hole_1_fairway_available + 1; }
                if($round->hole_2_par > 3){ $hole_2_fairway_available = $hole_2_fairway_available + 1; }
                if($round->hole_3_par > 3){ $hole_3_fairway_available = $hole_3_fairway_available + 1; }
                if($round->hole_4_par > 3){ $hole_4_fairway_available = $hole_4_fairway_available + 1; }
                if($round->hole_5_par > 3){ $hole_5_fairway_available = $hole_5_fairway_available + 1; }
                if($round->hole_6_par > 3){ $hole_6_fairway_available = $hole_6_fairway_available + 1; }
                if($round->hole_7_par > 3){ $hole_7_fairway_available = $hole_7_fairway_available + 1; }
                if($round->hole_8_par > 3){ $hole_8_fairway_available = $hole_8_fairway_available + 1; }
                if($round->hole_9_par > 3){ $hole_9_fairway_available = $hole_9_fairway_available + 1; }
            }

            if($round->nine === 'second-nine' || $round->nine === 'first-nine-second-nine'){
                if($round->hole_10_par > 3){ $hole_10_fairway_available = $hole_10_fairway_available + 1; }
                if($round->hole_11_par > 3){ $hole_11_fairway_available = $hole_11_fairway_available + 1; }
                if($round->hole_12_par > 3){ $hole_12_fairway_available = $hole_12_fairway_available + 1; }
                if($round->hole_13_par > 3){ $hole_13_fairway_available = $hole_13_fairway_available + 1; }
                if($round->hole_14_par > 3){ $hole_14_fairway_available = $hole_14_fairway_available + 1; }
                if($round->hole_15_par > 3){ $hole_15_fairway_available = $hole_15_fairway_available + 1; }
                if($round->hole_16_par > 3){ $hole_16_fairway_available = $hole_16_fairway_available + 1; }
                if($round->hole_17_par > 3){ $hole_17_fairway_available = $hole_17_fairway_available + 1; }
                if($round->hole_18_par > 3){ $hole_18_fairway_available = $hole_18_fairway_available + 1; }
            }

            if($round->nine === 'second-nine-third-nine'){
                if($round->hole_1_par > 3){ $hole_10_fairway_available = $hole_10_fairway_available + 1; }
                if($round->hole_2_par > 3){ $hole_11_fairway_available = $hole_11_fairway_available + 1; }
                if($round->hole_3_par > 3){ $hole_12_fairway_available = $hole_12_fairway_available + 1; }
                if($round->hole_4_par > 3){ $hole_13_fairway_available = $hole_13_fairway_available + 1; }
                if($round->hole_5_par > 3){ $hole_14_fairway_available = $hole_14_fairway_available + 1; }
                if($round->hole_6_par > 3){ $hole_15_fairway_available = $hole_15_fairway_available + 1; }
                if($round->hole_7_par > 3){ $hole_16_fairway_available = $hole_16_fairway_available + 1; }
                if($round->hole_8_par > 3){ $hole_17_fairway_available = $hole_17_fairway_available + 1; }
                if($round->hole_9_par > 3){ $hole_18_fairway_available = $hole_18_fairway_available + 1; }
            }

            if($round->nine === 'third-nine' || $round->nine === 'first-nine-third-nine' || $round->nine === 'second-nine-third-nine'){
                if($round->hole_10_par > 3){ $hole_19_fairway_available = $hole_19_fairway_available + 1; }
                if($round->hole_11_par > 3){ $hole_20_fairway_available = $hole_20_fairway_available + 1; }
                if($round->hole_12_par > 3){ $hole_21_fairway_available = $hole_21_fairway_available + 1; }
                if($round->hole_13_par > 3){ $hole_22_fairway_available = $hole_22_fairway_available + 1; }
                if($round->hole_14_par > 3){ $hole_23_fairway_available = $hole_23_fairway_available + 1; }
                if($round->hole_15_par > 3){ $hole_24_fairway_available = $hole_24_fairway_available + 1; }
                if($round->hole_16_par > 3){ $hole_25_fairway_available = $hole_25_fairway_available + 1; }
                if($round->hole_17_par > 3){ $hole_26_fairway_available = $hole_26_fairway_available + 1; }
                if($round->hole_18_par > 3){ $hole_27_fairway_available = $hole_27_fairway_available + 1; } 
            }               
           

            $fairways_hit = $fairways_hit + intval($round->hole_1_fir) + intval($round->hole_2_fir) + intval($round->hole_3_fir) + intval($round->hole_4_fir) + intval($round->hole_5_fir) + intval($round->hole_6_fir) + intval($round->hole_7_fir) + intval($round->hole_8_fir) + intval($round->hole_9_fir) +
                            intval($round->hole_10_fir) + intval($round->hole_11_fir) + intval($round->hole_12_fir) + intval($round->hole_13_fir) + intval($round->hole_14_fir) + intval($round->hole_15_fir) + intval($round->hole_16_fir) + intval($round->hole_17_fir) + intval($round->hole_18_fir) +
                            intval($round->hole_19_fir) + intval($round->hole_20_fir) + intval($round->hole_21_fir) + intval($round->hole_22_fir) + intval($round->hole_23_fir) + intval($round->hole_24_fir) + intval($round->hole_25_fir) + intval($round->hole_26_fir) + intval($round->hole_27_fir);


            if($round->nine === 'first-nine'){
                $fairways_available = $fairways_available + $hole_1_fairway_available + $hole_2_fairway_available + $hole_3_fairway_available + $hole_4_fairway_available + $hole_5_fairway_available + $hole_6_fairway_available + $hole_7_fairway_available + $hole_8_fairway_available + $hole_9_fairway_available;
            }

            if($round->nine === 'second-nine'){
                $fairways_available = $fairways_available + $hole_10_fairway_available + $hole_11_fairway_available + $hole_12_fairway_available + $hole_13_fairway_available + $hole_14_fairway_available + $hole_15_fairway_available + $hole_16_fairway_available + $hole_17_fairway_available + $hole_18_fairway_available;
            } 
            
            if($round->nine === 'third-nine'){
                $fairways_available = $fairways_available + $hole_19_fairway_available + $hole_20_fairway_available + $hole_21_fairway_available + $hole_22_fairway_available + $hole_23_fairway_available + $hole_24_fairway_available + $hole_25_fairway_available + $hole_26_fairway_available + $hole_27_fairway_available;
            }  

            if($round->nine === 'first-nine-second-nine'){
                $fairways_available = $fairways_available + $hole_1_fairway_available + $hole_2_fairway_available + $hole_3_fairway_available + $hole_4_fairway_available + $hole_5_fairway_available + $hole_6_fairway_available + $hole_7_fairway_available + $hole_8_fairway_available + $hole_9_fairway_available + 
                                      $hole_10_fairway_available + $hole_11_fairway_available + $hole_12_fairway_available + $hole_13_fairway_available + $hole_14_fairway_available + $hole_15_fairway_available + $hole_16_fairway_available + $hole_17_fairway_available + $hole_18_fairway_available;
            }

            if($round->nine === 'second-nine-third-nine'){
                $fairways_available = $fairways_available + $hole_10_fairway_available + $hole_11_fairway_available + $hole_12_fairway_available + $hole_13_fairway_available + $hole_14_fairway_available + $hole_15_fairway_available + $hole_16_fairway_available + $hole_17_fairway_available + $hole_18_fairway_available + 
                                      $hole_19_fairway_available + $hole_20_fairway_available + $hole_21_fairway_available + $hole_22_fairway_available + $hole_23_fairway_available + $hole_24_fairway_available + $hole_25_fairway_available + $hole_26_fairway_available + $hole_27_fairway_available;
            } 

            if($round->nine === 'first-nine-third-nine'){
                $fairways_available = $fairways_available + $hole_1_fairway_available + $hole_2_fairway_available + $hole_3_fairway_available + $hole_4_fairway_available + $hole_5_fairway_available + $hole_6_fairway_available + $hole_7_fairway_available + $hole_8_fairway_available + $hole_9_fairway_available + 
                                      $hole_19_fairway_available + $hole_20_fairway_available + $hole_21_fairway_available + $hole_22_fairway_available + $hole_23_fairway_available + $hole_24_fairway_available + $hole_25_fairway_available + $hole_26_fairway_available + $hole_27_fairway_available;
            }               
          

        }

        if($fairways_available === 0){

            $fir_percentage = 0;

        }
        else{

            $fir_percentage = $fairways_hit / $fairways_available * 100;

        }

        // add to object
        $career_stats->fir_percentage = $fir_percentage;
        $career_stats->fairways_hit = $fairways_hit;
        $career_stats->fairways_available = $fairways_available;


        // Greens in Regulation
        $greens_hit = 0;

        foreach($rounds as $round){

            $greens_hit = $greens_hit + intval($round->hole_1_gir) + intval($round->hole_2_gir) + intval($round->hole_3_gir) + intval($round->hole_4_gir) + intval($round->hole_5_gir) + intval($round->hole_6_gir) + intval($round->hole_7_gir) + intval($round->hole_8_gir) + intval($round->hole_9_gir) +
                          intval($round->hole_10_gir) + intval($round->hole_11_gir) + intval($round->hole_12_gir) + intval($round->hole_13_gir) + intval($round->hole_14_gir) + intval($round->hole_15_gir) + intval($round->hole_16_gir) + intval($round->hole_17_gir) + intval($round->hole_18_gir) +
                          intval($round->hole_19_gir) + intval($round->hole_20_gir) + intval($round->hole_21_gir) + intval($round->hole_22_gir) + intval($round->hole_23_gir) + intval($round->hole_24_gir) + intval($round->hole_25_gir) + intval($round->hole_26_gir) + intval($round->hole_27_gir);           

        }

        if($greens_hit === 0){
            $gir_percentage = 0;
        }
        else{
            $gir_percentage = $greens_hit / $hole_count * 100;
        }

        $career_stats->greens_hit = $greens_hit;

        $career_stats->gir_percentage = $gir_percentage;


        // Putts per hole
        $total_putts = 0;

        foreach($rounds as $round){

            $total_putts = $total_putts + intval($round->hole_1_putts) + intval($round->hole_2_putts) + intval($round->hole_3_putts) + intval($round->hole_4_putts) + intval($round->hole_5_putts) + intval($round->hole_6_putts) + intval($round->hole_7_putts) + intval($round->hole_8_putts) + intval($round->hole_9_putts) +
                          intval($round->hole_10_putts) + intval($round->hole_11_putts) + intval($round->hole_12_putts) + intval($round->hole_13_putts) + intval($round->hole_14_putts) + intval($round->hole_15_putts) + intval($round->hole_16_putts) + intval($round->hole_17_putts) + intval($round->hole_18_putts) +
                          intval($round->hole_19_putts) + intval($round->hole_20_putts) + intval($round->hole_21_putts) + intval($round->hole_22_putts) + intval($round->hole_23_putts) + intval($round->hole_24_putts) + intval($round->hole_25_putts) + intval($round->hole_26_putts) + intval($round->hole_27_putts);           

        }

        if($total_putts === 0){
            $putts_per_hole = 0;
        }
        else{
            $putts_per_hole = $total_putts / $hole_count;
        }
        
        $career_stats->total_putts = $total_putts;

        $career_stats->putts_per_hole = $putts_per_hole;     
        

        // Scrambling
        $total_scrambles = 0;
        $total_chances = 0;

        foreach($rounds as $round){

           $hole_1_scramble = 0;
           $hole_2_scramble = 0;
           $hole_3_scramble = 0;
           $hole_4_scramble = 0;
           $hole_5_scramble = 0;
           $hole_6_scramble = 0;
           $hole_7_scramble = 0;
           $hole_8_scramble = 0;
           $hole_9_scramble = 0;
           $hole_10_scramble = 0;
           $hole_11_scramble = 0;
           $hole_12_scramble = 0;
           $hole_13_scramble = 0;
           $hole_14_scramble = 0;
           $hole_15_scramble = 0;
           $hole_16_scramble = 0;
           $hole_17_scramble = 0;
           $hole_18_scramble = 0;
           $hole_19_scramble = 0;
           $hole_20_scramble = 0;
           $hole_21_scramble = 0;
           $hole_22_scramble = 0;
           $hole_23_scramble = 0;
           $hole_24_scramble = 0;
           $hole_25_scramble = 0;
           $hole_26_scramble = 0;
           $hole_27_scramble = 0;  
           
        if($round->nine === 'first-nine' || $round->nine === 'first-nine-second-nine' || $round->nine === 'first-nine-third-nine'){

            if($round->hole_1_gir === 0 && $round->hole_1_score <= $round->hole_1_par){$hole_1_scramble = $hole_1_scramble + 1;}
            if($round->hole_2_gir === 0 && $round->hole_2_score <= $round->hole_2_par){$hole_2_scramble = $hole_2_scramble + 1;}
            if($round->hole_3_gir === 0 && $round->hole_3_score <= $round->hole_3_par){$hole_3_scramble = $hole_3_scramble + 1;}
            if($round->hole_4_gir === 0 && $round->hole_4_score <= $round->hole_4_par){$hole_4_scramble = $hole_4_scramble + 1;}
            if($round->hole_5_gir === 0 && $round->hole_5_score <= $round->hole_5_par){$hole_5_scramble = $hole_5_scramble + 1;}
            if($round->hole_6_gir === 0 && $round->hole_6_score <= $round->hole_6_par){$hole_6_scramble = $hole_6_scramble + 1;}
            if($round->hole_7_gir === 0 && $round->hole_7_score <= $round->hole_7_par){$hole_7_scramble = $hole_7_scramble + 1;}
            if($round->hole_8_gir === 0 && $round->hole_8_score <= $round->hole_8_par){$hole_8_scramble = $hole_8_scramble + 1;}
            if($round->hole_9_gir === 0 && $round->hole_9_score <= $round->hole_9_par){$hole_9_scramble = $hole_9_scramble + 1;}
        }

        if($round->nine === 'second-nine' || $round->nine === 'first-nine-second-nine'){
            if($round->hole_10_gir === 0 && $round->hole_10_score <= $round->hole_10_par){$hole_10_scramble = $hole_10_scramble + 1;}
            if($round->hole_11_gir === 0 && $round->hole_11_score <= $round->hole_11_par){$hole_11_scramble = $hole_11_scramble + 1;}
            if($round->hole_12_gir === 0 && $round->hole_12_score <= $round->hole_12_par){$hole_12_scramble = $hole_12_scramble + 1;}
            if($round->hole_13_gir === 0 && $round->hole_13_score <= $round->hole_13_par){$hole_13_scramble = $hole_13_scramble + 1;}
            if($round->hole_14_gir === 0 && $round->hole_14_score <= $round->hole_14_par){$hole_14_scramble = $hole_14_scramble + 1;}
            if($round->hole_15_gir === 0 && $round->hole_15_score <= $round->hole_15_par){$hole_15_scramble = $hole_15_scramble + 1;}
            if($round->hole_16_gir === 0 && $round->hole_16_score <= $round->hole_16_par){$hole_16_scramble = $hole_16_scramble + 1;}
            if($round->hole_17_gir === 0 && $round->hole_17_score <= $round->hole_17_par){$hole_17_scramble = $hole_17_scramble + 1;}
            if($round->hole_18_gir === 0 && $round->hole_18_score <= $round->hole_18_par){$hole_18_scramble = $hole_18_scramble + 1;}
        }

        if($round->nine === 'second-nine-third-nine'){
            if($round->hole_10_gir === 0 && $round->hole_10_score <= $round->hole_1_par){$hole_10_scramble = $hole_10_scramble + 1;}
            if($round->hole_11_gir === 0 && $round->hole_11_score <= $round->hole_2_par){$hole_11_scramble = $hole_11_scramble + 1;}
            if($round->hole_12_gir === 0 && $round->hole_12_score <= $round->hole_3_par){$hole_12_scramble = $hole_12_scramble + 1;}
            if($round->hole_13_gir === 0 && $round->hole_13_score <= $round->hole_4_par){$hole_13_scramble = $hole_13_scramble + 1;}
            if($round->hole_14_gir === 0 && $round->hole_14_score <= $round->hole_5_par){$hole_14_scramble = $hole_14_scramble + 1;}
            if($round->hole_15_gir === 0 && $round->hole_15_score <= $round->hole_6_par){$hole_15_scramble = $hole_15_scramble + 1;}
            if($round->hole_16_gir === 0 && $round->hole_16_score <= $round->hole_7_par){$hole_16_scramble = $hole_16_scramble + 1;}
            if($round->hole_17_gir === 0 && $round->hole_17_score <= $round->hole_8_par){$hole_17_scramble = $hole_17_scramble + 1;}
            if($round->hole_18_gir === 0 && $round->hole_18_score <= $round->hole_9_par){$hole_18_scramble = $hole_18_scramble + 1;}
        }

        if($round->nine === 'third-nine' || $round->nine === 'first-nine-third-nine' || $round->nine === 'second-nine-third-nine'){
            if($round->hole_19_gir === 0 && $round->hole_19_score <= $round->hole_10_par){$hole_19_scramble = $hole_19_scramble + 1;}
            if($round->hole_20_gir === 0 && $round->hole_20_score <= $round->hole_11_par){$hole_20_scramble = $hole_20_scramble + 1;}
            if($round->hole_21_gir === 0 && $round->hole_21_score <= $round->hole_12_par){$hole_21_scramble = $hole_21_scramble + 1;}
            if($round->hole_22_gir === 0 && $round->hole_22_score <= $round->hole_13_par){$hole_22_scramble = $hole_22_scramble + 1;}
            if($round->hole_23_gir === 0 && $round->hole_23_score <= $round->hole_14_par){$hole_23_scramble = $hole_23_scramble + 1;}
            if($round->hole_24_gir === 0 && $round->hole_24_score <= $round->hole_15_par){$hole_24_scramble = $hole_24_scramble + 1;}
            if($round->hole_25_gir === 0 && $round->hole_25_score <= $round->hole_16_par){$hole_25_scramble = $hole_25_scramble + 1;}
            if($round->hole_26_gir === 0 && $round->hole_26_score <= $round->hole_17_par){$hole_26_scramble = $hole_26_scramble + 1;}
            if($round->hole_27_gir === 0 && $round->hole_27_score <= $round->hole_18_par){$hole_27_scramble = $hole_27_scramble + 1;} 
        } 


           $hole_1_scramble_chance = 0;
           $hole_2_scramble_chance = 0; 
           $hole_3_scramble_chance = 0; 
           $hole_4_scramble_chance = 0; 
           $hole_5_scramble_chance = 0; 
           $hole_6_scramble_chance = 0; 
           $hole_7_scramble_chance = 0; 
           $hole_8_scramble_chance = 0; 
           $hole_9_scramble_chance = 0; 
           $hole_10_scramble_chance = 0; 
           $hole_11_scramble_chance = 0; 
           $hole_12_scramble_chance = 0; 
           $hole_13_scramble_chance = 0; 
           $hole_14_scramble_chance = 0; 
           $hole_15_scramble_chance = 0; 
           $hole_16_scramble_chance = 0; 
           $hole_17_scramble_chance = 0; 
           $hole_18_scramble_chance = 0; 
           $hole_19_scramble_chance = 0; 
           $hole_20_scramble_chance = 0; 
           $hole_21_scramble_chance = 0; 
           $hole_22_scramble_chance = 0; 
           $hole_23_scramble_chance = 0; 
           $hole_24_scramble_chance = 0; 
           $hole_25_scramble_chance = 0; 
           $hole_26_scramble_chance = 0; 
           $hole_27_scramble_chance = 0; 

           if($round->hole_1_gir === 0){ $hole_1_scramble_chance = $hole_1_scramble_chance + 1; }
           if($round->hole_2_gir === 0){ $hole_2_scramble_chance = $hole_2_scramble_chance + 1; }
           if($round->hole_3_gir === 0){ $hole_3_scramble_chance = $hole_3_scramble_chance + 1; }
           if($round->hole_4_gir === 0){ $hole_4_scramble_chance = $hole_4_scramble_chance + 1; }
           if($round->hole_5_gir === 0){ $hole_5_scramble_chance = $hole_5_scramble_chance + 1; }
           if($round->hole_6_gir === 0){ $hole_6_scramble_chance = $hole_6_scramble_chance + 1; }
           if($round->hole_7_gir === 0){ $hole_7_scramble_chance = $hole_7_scramble_chance + 1; }
           if($round->hole_8_gir === 0){ $hole_8_scramble_chance = $hole_8_scramble_chance + 1; }
           if($round->hole_9_gir === 0){ $hole_9_scramble_chance = $hole_9_scramble_chance + 1; }
           if($round->hole_10_gir === 0){ $hole_10_scramble_chance = $hole_10_scramble_chance + 1; }
           if($round->hole_11_gir === 0){ $hole_11_scramble_chance = $hole_11_scramble_chance + 1; }
           if($round->hole_12_gir === 0){ $hole_12_scramble_chance = $hole_12_scramble_chance + 1; }
           if($round->hole_13_gir === 0){ $hole_13_scramble_chance = $hole_13_scramble_chance + 1; }
           if($round->hole_14_gir === 0){ $hole_14_scramble_chance = $hole_14_scramble_chance + 1; }
           if($round->hole_15_gir === 0){ $hole_15_scramble_chance = $hole_15_scramble_chance + 1; }
           if($round->hole_16_gir === 0){ $hole_16_scramble_chance = $hole_16_scramble_chance + 1; }
           if($round->hole_17_gir === 0){ $hole_17_scramble_chance = $hole_17_scramble_chance + 1; }
           if($round->hole_18_gir === 0){ $hole_18_scramble_chance = $hole_18_scramble_chance + 1; }
           if($round->hole_19_gir === 0){ $hole_19_scramble_chance = $hole_19_scramble_chance + 1; }
           if($round->hole_20_gir === 0){ $hole_20_scramble_chance = $hole_20_scramble_chance + 1; }
           if($round->hole_21_gir === 0){ $hole_21_scramble_chance = $hole_21_scramble_chance + 1; }
           if($round->hole_22_gir === 0){ $hole_22_scramble_chance = $hole_22_scramble_chance + 1; }
           if($round->hole_23_gir === 0){ $hole_23_scramble_chance = $hole_23_scramble_chance + 1; }
           if($round->hole_24_gir === 0){ $hole_24_scramble_chance = $hole_24_scramble_chance + 1; }
           if($round->hole_25_gir === 0){ $hole_25_scramble_chance = $hole_25_scramble_chance + 1; }
           if($round->hole_26_gir === 0){ $hole_26_scramble_chance = $hole_26_scramble_chance + 1; }
           if($round->hole_27_gir === 0){ $hole_27_scramble_chance = $hole_27_scramble_chance + 1; }
       

           
           if($round->nine === 'first-nine'){

               $total_scrambles = $total_scrambles + $hole_1_scramble + $hole_2_scramble + $hole_3_scramble + $hole_4_scramble + $hole_5_scramble + $hole_6_scramble + $hole_7_scramble + $hole_8_scramble + $hole_9_scramble;
               $total_chances = $total_chances + $hole_1_scramble_chance + $hole_2_scramble_chance + $hole_3_scramble_chance + $hole_4_scramble_chance + $hole_5_scramble_chance + $hole_6_scramble + $hole_7_scramble_chance + $hole_8_scramble_chance + $hole_9_scramble_chance;

           }

           if($round->nine === 'second-nine'){

               $total_scrambles = $total_scrambles + $hole_10_scramble + $hole_11_scramble + $hole_12_scramble + $hole_13_scramble + $hole_14_scramble + $hole_15_scramble + $hole_16_scramble + $hole_17_scramble + $hole_18_scramble;
               $total_chances = $total_chances + $hole_10_scramble_chance + $hole_11_scramble_chance + $hole_12_scramble_chance + $hole_13_scramble_chance + $hole_14_scramble_chance + $hole_15_scramble + $hole_16_scramble_chance + $hole_17_scramble_chance + $hole_18_scramble_chance;

           } 
           
           if($round->nine === 'third-nine'){

               $total_scrambles = $total_scrambles + $hole_19_scramble + $hole_20_scramble + $hole_21_scramble + $hole_22_scramble + $hole_23_scramble + $hole_24_scramble + $hole_25_scramble + $hole_26_scramble + $hole_27_scramble;
               $total_chances = $total_chances + $hole_19_scramble_chance + $hole_20_scramble_chance + $hole_21_scramble_chance + $hole_22_scramble_chance + $hole_23_scramble_chance + $hole_24_scramble + $hole_25_scramble_chance + $hole_26_scramble_chance + $hole_27_scramble_chance;

           }  

           if($round->nine === 'first-nine-second-nine'){

               $total_scrambles = $total_scrambles + $hole_1_scramble + $hole_2_scramble + $hole_3_scramble + $hole_4_scramble + $hole_5_scramble + $hole_6_scramble + $hole_7_scramble + $hole_8_scramble + $hole_9_scramble + 
                                  $hole_10_scramble + $hole_11_scramble + $hole_12_scramble + $hole_13_scramble + $hole_14_scramble + $hole_15_scramble + $hole_16_scramble + $hole_17_scramble + $hole_18_scramble;

               $total_chances = $total_chances + $hole_1_scramble_chance + $hole_2_scramble_chance + $hole_3_scramble_chance + $hole_4_scramble_chance + $hole_5_scramble_chance + $hole_6_scramble + $hole_7_scramble_chance + $hole_8_scramble_chance + $hole_9_scramble_chance + 
                                $hole_10_scramble_chance + $hole_11_scramble_chance + $hole_12_scramble_chance + $hole_13_scramble_chance + $hole_14_scramble_chance + $hole_15_scramble + $hole_16_scramble_chance + $hole_17_scramble_chance + $hole_18_scramble_chance;

           }

           if($round->nine === 'second-nine-third-nine'){

               $total_scrambles = $total_scrambles + $hole_10_scramble + $hole_11_scramble + $hole_12_scramble + $hole_13_scramble + $hole_14_scramble + $hole_15_scramble + $hole_16_scramble + $hole_17_scramble + $hole_18_scramble + 
                                  $hole_19_scramble + $hole_20_scramble + $hole_21_scramble + $hole_22_scramble + $hole_23_scramble + $hole_24_scramble + $hole_25_scramble + $hole_26_scramble + $hole_27_scramble;

               $total_chances = $total_chances + $hole_10_scramble_chance + $hole_11_scramble_chance + $hole_12_scramble_chance + $hole_13_scramble_chance + $hole_14_scramble_chance + $hole_15_scramble + $hole_16_scramble_chance + $hole_17_scramble_chance + $hole_18_scramble_chance + 
                                $hole_19_scramble_chance + $hole_20_scramble_chance + $hole_21_scramble_chance + $hole_22_scramble_chance + $hole_23_scramble_chance + $hole_24_scramble + $hole_25_scramble_chance + $hole_26_scramble_chance + $hole_27_scramble_chance;

           } 

           if($round->nine === 'first-nine-third-nine'){

               $total_scrambles = $total_scrambles + $hole_1_scramble + $hole_2_scramble + $hole_3_scramble + $hole_4_scramble + $hole_5_scramble + $hole_6_scramble + $hole_7_scramble + $hole_8_scramble + $hole_9_scramble + 
                                  $hole_19_scramble_chance + $hole_20_scramble_chance + $hole_21_scramble_chance + $hole_22_scramble_chance + $hole_23_scramble_chance + $hole_24_scramble + $hole_25_scramble_chance + $hole_26_scramble_chance + $hole_27_scramble_chance;

               $total_chances = $total_chances + $hole_1_scramble_chance + $hole_2_scramble_chance + $hole_3_scramble_chance + $hole_4_scramble_chance + $hole_5_scramble_chance + $hole_6_scramble + $hole_7_scramble_chance + $hole_8_scramble_chance + $hole_9_scramble_chance + 
                                $hole_19_scramble_chance + $hole_20_scramble_chance + $hole_21_scramble_chance + $hole_22_scramble_chance + $hole_23_scramble_chance + $hole_24_scramble + $hole_25_scramble_chance + $hole_26_scramble_chance + $hole_27_scramble_chance;

           }  

        }


        if($total_scrambles === 0){
            $scrambling = 0;
        }
        else{
            $scrambling = $total_scrambles / $total_chances * 100;
        }        

        $career_stats->scrambling = $scrambling;


        return $career_stats;
    }
 
}