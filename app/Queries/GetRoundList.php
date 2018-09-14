<?php

namespace App\Queries;

use App\Round;
use Illuminate\Support\Facades\Auth;
 
class GetRoundList {
 
    /**
     * Get Course data and totals
     */

    public function roundList(){        

        // list of last 10 rounds
        $rounds = \App\Round::where('player_id', Auth::user()->id)
                ->join('courses', 'courses.id', '=', 'course_id')
                ->groupBy('rounds.id')
                ->orderBy('round_date', 'desc')
                ->select('courses.*')
                ->addSelect('rounds.*')
                ->take(10)                               
                ->get();
                
        foreach($rounds as $round){

            // total par
            if($round->yards === 'white'){

                if($round->nine === 'first-nine'){
                    $total_par = intval($round->hole_1_white_par) + intval($round->hole_2_white_par) + intval($round->hole_3_white_par) + intval($round->hole_4_white_par) + intval($round->hole_5_white_par) + intval($round->hole_6_white_par) + intval($round->hole_7_white_par) + intval($round->hole_8_white_par) + intval($round->hole_9_white_par);
                }

                if($round->nine === 'second-nine'){
                    $total_par = intval($round->hole_10_white_par) + intval($round->hole_11_white_par) + intval($round->hole_12_white_par) + intval($round->hole_13_white_par) + intval($round->hole_14_white_par) + intval($round->hole_15_white_par) + intval($round->hole_16_white_par) + intval($round->hole_17_white_par) + intval($round->hole_18_white_par);
                } 
                
                if($round->nine === 'third-nine'){
                    $total_par = intval($round->hole_19_white_par) + intval($round->hole_20_white_par) + intval($round->hole_21_white_par) + intval($round->hole_22_white_par) + intval($round->hole_23_white_par) + intval($round->hole_24_white_par) + intval($round->hole_25_white_par) + intval($round->hole_26_white_par) + intval($round->hole_27_white_par);
                }  
                if($round->nine === 'first-nine-second-nine'){
                    $total_par = intval($round->hole_1_white_par) + intval($round->hole_2_white_par) + intval($round->hole_3_white_par) + intval($round->hole_4_white_par) + intval($round->hole_5_white_par) + intval($round->hole_6_white_par) + intval($round->hole_7_white_par) + intval($round->hole_8_white_par) + intval($round->hole_9_white_par) + 
                                 intval($round->hole_10_white_par) + intval($round->hole_11_white_par) + intval($round->hole_12_white_par) + intval($round->hole_13_white_par) + intval($round->hole_14_white_par) + intval($round->hole_15_white_par) + intval($round->hole_16_white_par) + intval($round->hole_17_white_par) + intval($round->hole_18_white_par);
                }
                if($round->nine === 'second-nine-third-nine'){
                    $total_par = intval($round->hole_10_white_par) + intval($round->hole_11_white_par) + intval($round->hole_12_white_par) + intval($round->hole_13_white_par) + intval($round->hole_14_white_par) + intval($round->hole_15_white_par) + intval($round->hole_16_white_par) + intval($round->hole_17_white_par) + intval($round->hole_18_white_par) + 
                                 intval($round->hole_19_white_par) + intval($round->hole_20_white_par) + intval($round->hole_21_white_par) + intval($round->hole_22_white_par) + intval($round->hole_23_white_par) + intval($round->hole_24_white_par) + intval($round->hole_25_white_par) + intval($round->hole_26_white_par) + intval($round->hole_27_white_par);
                } 
                if($round->nine === 'first-nine-third-nine'){
                    $total_par = intval($round->hole_1_white_par) + intval($round->hole_2_white_par) + intval($round->hole_3_white_par) + intval($round->hole_4_white_par) + intval($round->hole_5_white_par) + intval($round->hole_6_white_par) + intval($round->hole_7_white_par) + intval($round->hole_8_white_par) + intval($round->hole_9_white_par) + 
                                 intval($round->hole_19_white_par) + intval($round->hole_20_white_par) + intval($round->hole_21_white_par) + intval($round->hole_22_white_par) + intval($round->hole_23_white_par) + intval($round->hole_24_white_par) + intval($round->hole_25_white_par) + intval($round->hole_26_white_par) + intval($round->hole_27_white_par);
                }                                                                  

            }

            if($round->yards === 'yellow'){

                if($round->nine === 'first-nine'){
                    $total_par = intval($round->hole_1_yellow_par) + intval($round->hole_2_yellow_par) + intval($round->hole_3_yellow_par) + intval($round->hole_4_yellow_par) + intval($round->hole_5_yellow_par) + intval($round->hole_6_yellow_par) + intval($round->hole_7_yellow_par) + intval($round->hole_8_yellow_par) + intval($round->hole_9_yellow_par);
                }

                if($round->nine === 'second-nine'){
                    $total_par = intval($round->hole_10_yellow_par) + intval($round->hole_11_yellow_par) + intval($round->hole_12_yellow_par) + intval($round->hole_13_yellow_par) + intval($round->hole_14_yellow_par) + intval($round->hole_15_yellow_par) + intval($round->hole_16_yellow_par) + intval($round->hole_17_yellow_par) + intval($round->hole_18_yellow_par);
                } 
                
                if($round->nine === 'third-nine'){
                    $total_par = intval($round->hole_19_yellow_par) + intval($round->hole_20_yellow_par) + intval($round->hole_21_yellow_par) + intval($round->hole_22_yellow_par) + intval($round->hole_23_yellow_par) + intval($round->hole_24_yellow_par) + intval($round->hole_25_yellow_par) + intval($round->hole_26_yellow_par) + intval($round->hole_27_yellow_par);
                }  
                if($round->nine === 'first-nine-second-nine'){
                    $total_par = intval($round->hole_1_yellow_par) + intval($round->hole_2_yellow_par) + intval($round->hole_3_yellow_par) + intval($round->hole_4_yellow_par) + intval($round->hole_5_yellow_par) + intval($round->hole_6_yellow_par) + intval($round->hole_7_yellow_par) + intval($round->hole_8_yellow_par) + intval($round->hole_9_yellow_par) + 
                                 intval($round->hole_10_yellow_par) + intval($round->hole_11_yellow_par) + intval($round->hole_12_yellow_par) + intval($round->hole_13_yellow_par) + intval($round->hole_14_yellow_par) + intval($round->hole_15_yellow_par) + intval($round->hole_16_yellow_par) + intval($round->hole_17_yellow_par) + intval($round->hole_18_yellow_par);
                }
                if($round->nine === 'second-nine-third-nine'){
                    $total_par = intval($round->hole_10_yellow_par) + intval($round->hole_11_yellow_par) + intval($round->hole_12_yellow_par) + intval($round->hole_13_yellow_par) + intval($round->hole_14_yellow_par) + intval($round->hole_15_yellow_par) + intval($round->hole_16_yellow_par) + intval($round->hole_17_yellow_par) + intval($round->hole_18_yellow_par) + 
                                 intval($round->hole_19_yellow_par) + intval($round->hole_20_yellow_par) + intval($round->hole_21_yellow_par) + intval($round->hole_22_yellow_par) + intval($round->hole_23_yellow_par) + intval($round->hole_24_yellow_par) + intval($round->hole_25_yellow_par) + intval($round->hole_26_yellow_par) + intval($round->hole_27_yellow_par);
                } 
                if($round->nine === 'first-nine-third-nine'){
                    $total_par = intval($round->hole_1_yellow_par) + intval($round->hole_2_yellow_par) + intval($round->hole_3_yellow_par) + intval($round->hole_4_yellow_par) + intval($round->hole_5_yellow_par) + intval($round->hole_6_yellow_par) + intval($round->hole_7_yellow_par) + intval($round->hole_8_yellow_par) + intval($round->hole_9_yellow_par) + 
                                 intval($round->hole_19_yellow_par) + intval($round->hole_20_yellow_par) + intval($round->hole_21_yellow_par) + intval($round->hole_22_yellow_par) + intval($round->hole_23_yellow_par) + intval($round->hole_24_yellow_par) + intval($round->hole_25_yellow_par) + intval($round->hole_26_yellow_par) + intval($round->hole_27_yellow_par);
                }                 

            }

            if($round->yards === 'red'){

                if($round->nine === 'first-nine'){
                    $total_par = intval($round->hole_1_red_par) + intval($round->hole_2_red_par) + intval($round->hole_3_red_par) + intval($round->hole_4_red_par) + intval($round->hole_5_red_par) + intval($round->hole_6_red_par) + intval($round->hole_7_red_par) + intval($round->hole_8_red_par) + intval($round->hole_9_red_par);
                }

                if($round->nine === 'second-nine'){
                    $total_par = intval($round->hole_10_red_par) + intval($round->hole_11_red_par) + intval($round->hole_12_red_par) + intval($round->hole_13_red_par) + intval($round->hole_14_red_par) + intval($round->hole_15_red_par) + intval($round->hole_16_red_par) + intval($round->hole_17_red_par) + intval($round->hole_18_red_par);
                } 
                
                if($round->nine === 'third-nine'){
                    $total_par = intval($round->hole_19_red_par) + intval($round->hole_20_red_par) + intval($round->hole_21_red_par) + intval($round->hole_22_red_par) + intval($round->hole_23_red_par) + intval($round->hole_24_red_par) + intval($round->hole_25_red_par) + intval($round->hole_26_red_par) + intval($round->hole_27_red_par);
                }  
                if($round->nine === 'first-nine-second-nine'){
                    $total_par = intval($round->hole_1_red_par) + intval($round->hole_2_red_par) + intval($round->hole_3_red_par) + intval($round->hole_4_red_par) + intval($round->hole_5_red_par) + intval($round->hole_6_red_par) + intval($round->hole_7_red_par) + intval($round->hole_8_red_par) + intval($round->hole_9_red_par) + 
                                 intval($round->hole_10_red_par) + intval($round->hole_11_red_par) + intval($round->hole_12_red_par) + intval($round->hole_13_red_par) + intval($round->hole_14_red_par) + intval($round->hole_15_red_par) + intval($round->hole_16_red_par) + intval($round->hole_17_red_par) + intval($round->hole_18_red_par);
                }
                if($round->nine === 'second-nine-third-nine'){
                    $total_par = intval($round->hole_10_red_par) + intval($round->hole_11_red_par) + intval($round->hole_12_red_par) + intval($round->hole_13_red_par) + intval($round->hole_14_red_par) + intval($round->hole_15_red_par) + intval($round->hole_16_red_par) + intval($round->hole_17_red_par) + intval($round->hole_18_red_par) + 
                                 intval($round->hole_19_red_par) + intval($round->hole_20_red_par) + intval($round->hole_21_red_par) + intval($round->hole_22_red_par) + intval($round->hole_23_red_par) + intval($round->hole_24_red_par) + intval($round->hole_25_red_par) + intval($round->hole_26_red_par) + intval($round->hole_27_red_par);
                } 
                if($round->nine === 'first-nine-third-nine'){
                    $total_par = intval($round->hole_1_red_par) + intval($round->hole_2_red_par) + intval($round->hole_3_red_par) + intval($round->hole_4_red_par) + intval($round->hole_5_red_par) + intval($round->hole_6_red_par) + intval($round->hole_7_red_par) + intval($round->hole_8_red_par) + intval($round->hole_9_red_par) + 
                                 intval($round->hole_19_red_par) + intval($round->hole_20_red_par) + intval($round->hole_21_red_par) + intval($round->hole_22_red_par) + intval($round->hole_23_red_par) + intval($round->hole_24_red_par) + intval($round->hole_25_red_par) + intval($round->hole_26_red_par) + intval($round->hole_27_red_par);
                } 

            }

            // total score
            if($round->nine === 'first-nine'){
                $total_score = intval($round->hole_1_score) + intval($round->hole_2_score) + intval($round->hole_3_score) + intval($round->hole_4_score) + intval($round->hole_5_score) + intval($round->hole_6_score) + intval($round->hole_7_score) + intval($round->hole_8_score) + intval($round->hole_9_score);
            }

            if($round->nine === 'second-nine'){
                $total_score = intval($round->hole_10_score) + intval($round->hole_11_score) + intval($round->hole_12_score) + intval($round->hole_13_score) + intval($round->hole_14_score) + intval($round->hole_15_score) + intval($round->hole_16_score) + intval($round->hole_17_score) + intval($round->hole_18_score);
            } 
            
            if($round->nine === 'third-nine'){
                $total_score = intval($round->hole_19_score) + intval($round->hole_20_score) + intval($round->hole_21_score) + intval($round->hole_22_score) + intval($round->hole_23_score) + intval($round->hole_24_score) + intval($round->hole_25_score) + intval($round->hole_26_score) + intval($round->hole_27_score);
            } 

            if($round->nine === 'first-nine-second-nine'){
                $total_score = intval($round->hole_1_score) + intval($round->hole_2_score) + intval($round->hole_3_score) + intval($round->hole_4_score) + intval($round->hole_5_score) + intval($round->hole_6_score) + intval($round->hole_7_score) + intval($round->hole_8_score) + intval($round->hole_9_score) + 
                             intval($round->hole_10_score) + intval($round->hole_11_score) + intval($round->hole_12_score) + intval($round->hole_13_score) + intval($round->hole_14_score) + intval($round->hole_15_score) + intval($round->hole_16_score) + intval($round->hole_17_score) + intval($round->hole_18_score);
            }

            if($round->nine === 'second-nine-third-nine'){
                $total_score = intval($round->hole_10_score) + intval($round->hole_11_score) + intval($round->hole_12_score) + intval($round->hole_13_score) + intval($round->hole_14_score) + intval($round->hole_15_score) + intval($round->hole_16_score) + intval($round->hole_17_score) + intval($round->hole_18_score) + 
                             intval($round->hole_19_score) + intval($round->hole_20_score) + intval($round->hole_21_score) + intval($round->hole_22_score) + intval($round->hole_23_score) + intval($round->hole_24_score) + intval($round->hole_25_score) + intval($round->hole_26_score) + intval($round->hole_27_score);
            } 

            if($round->nine === 'first-nine-third-nine'){
                $total_score = intval($round->hole_1_score) + intval($round->hole_2_score) + intval($round->hole_3_score) + intval($round->hole_4_score) + intval($round->hole_5_score) + intval($round->hole_6_score) + intval($round->hole_7_score) + intval($round->hole_8_score) + intval($round->hole_9_score) + 
                             intval($round->hole_19_score) + intval($round->hole_20_score) + intval($round->hole_21_score) + intval($round->hole_22_score) + intval($round->hole_23_score) + intval($round->hole_24_score) + intval($round->hole_25_score) + intval($round->hole_26_score) + intval($round->hole_27_score);
            }   


            $round->total_score = $total_score;
            $round->total_par = $total_par;
    
            // plus minus
            $round->plus_minus = $total_score - $total_par;

            // total putts
            $total_putts = intval($round->hole_1_putts) + intval($round->hole_2_putts) + intval($round->hole_3_putts) + intval($round->hole_4_putts) + intval($round->hole_5_putts) + intval($round->hole_6_putts) + intval($round->hole_7_putts) + intval($round->hole_8_putts) + intval($round->hole_9_putts) +
                           intval($round->hole_10_putts) + intval($round->hole_11_putts) + intval($round->hole_12_putts) + intval($round->hole_13_putts) + intval($round->hole_14_putts) + intval($round->hole_15_putts) + intval($round->hole_16_putts) + intval($round->hole_17_putts) + intval($round->hole_18_putts) +
                           intval($round->hole_19_putts) + intval($round->hole_20_putts) + intval($round->hole_21_putts) + intval($round->hole_22_putts) + intval($round->hole_23_putts) + intval($round->hole_24_putts) + intval($round->hole_25_putts) + intval($round->hole_26_putts) + intval($round->hole_27_putts);

            $round->total_putts = $total_putts;

            // total drops
            $total_drops = intval($round->hole_1_drops) + intval($round->hole_2_drops) + intval($round->hole_3_drops) + intval($round->hole_4_drops) + intval($round->hole_5_drops) + intval($round->hole_6_drops) + intval($round->hole_7_drops) + intval($round->hole_8_drops) + intval($round->hole_9_drops) +
                           intval($round->hole_10_drops) + intval($round->hole_11_drops) + intval($round->hole_12_drops) + intval($round->hole_13_drops) + intval($round->hole_14_drops) + intval($round->hole_15_drops) + intval($round->hole_16_drops) + intval($round->hole_17_drops) + intval($round->hole_18_drops) +
                           intval($round->hole_19_drops) + intval($round->hole_20_drops) + intval($round->hole_21_drops) + intval($round->hole_22_drops) + intval($round->hole_23_drops) + intval($round->hole_24_drops) + intval($round->hole_25_drops) + intval($round->hole_26_drops) + intval($round->hole_27_drops);

            $round->total_drops = $total_drops;            

            // putts per hole
            if($round->size === 'half'){
                $putts_per_hole = $total_putts / 9;
            } 

            if($round->size === 'full'){
                $putts_per_hole = $total_putts / 18;
            }  
            
            $round->putts_per_hole = $putts_per_hole;



            // Fairways in Regulation

            

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


            if($round->yards === 'white'){

                if($round->hole_1_white_par > 3){ $hole_1_fairway_available = 1; }
                if($round->hole_2_white_par > 3){ $hole_2_fairway_available = 1; }
                if($round->hole_3_white_par > 3){ $hole_3_fairway_available = 1; }
                if($round->hole_4_white_par > 3){ $hole_4_fairway_available = 1; }
                if($round->hole_5_white_par > 3){ $hole_5_fairway_available = 1; }
                if($round->hole_6_white_par > 3){ $hole_6_fairway_available = 1; }
                if($round->hole_7_white_par > 3){ $hole_7_fairway_available = 1; }
                if($round->hole_8_white_par > 3){ $hole_8_fairway_available = 1; }
                if($round->hole_9_white_par > 3){ $hole_9_fairway_available = 1; }
                if($round->hole_10_white_par > 3){ $hole_10_fairway_available = 1; }
                if($round->hole_11_white_par > 3){ $hole_11_fairway_available = 1; }
                if($round->hole_12_white_par > 3){ $hole_12_fairway_available = 1; }
                if($round->hole_13_white_par > 3){ $hole_13_fairway_available = 1; }
                if($round->hole_14_white_par > 3){ $hole_14_fairway_available = 1; }
                if($round->hole_15_white_par > 3){ $hole_15_fairway_available = 1; }
                if($round->hole_16_white_par > 3){ $hole_16_fairway_available = 1; }
                if($round->hole_17_white_par > 3){ $hole_17_fairway_available = 1; }
                if($round->hole_18_white_par > 3){ $hole_18_fairway_available = 1; }
                if($round->hole_19_white_par > 3){ $hole_19_fairway_available = 1; }
                if($round->hole_20_white_par > 3){ $hole_20_fairway_available = 1; }
                if($round->hole_21_white_par > 3){ $hole_21_fairway_available = 1; }
                if($round->hole_22_white_par > 3){ $hole_22_fairway_available = 1; }
                if($round->hole_23_white_par > 3){ $hole_23_fairway_available = 1; }
                if($round->hole_24_white_par > 3){ $hole_24_fairway_available = 1; }
                if($round->hole_25_white_par > 3){ $hole_25_fairway_available = 1; }
                if($round->hole_26_white_par > 3){ $hole_26_fairway_available = 1; }
                if($round->hole_27_white_par > 3){ $hole_27_fairway_available = 1; }                

            }

            if($round->yards === 'yellow'){

                if($round->hole_1_yellow_par > 3){ $hole_1_fairway_available = 1; }
                if($round->hole_2_yellow_par > 3){ $hole_2_fairway_available = 1; }
                if($round->hole_3_yellow_par > 3){ $hole_3_fairway_available = 1; }
                if($round->hole_4_yellow_par > 3){ $hole_4_fairway_available = 1; }
                if($round->hole_5_yellow_par > 3){ $hole_5_fairway_available = 1; }
                if($round->hole_6_yellow_par > 3){ $hole_6_fairway_available = 1; }
                if($round->hole_7_yellow_par > 3){ $hole_7_fairway_available = 1; }
                if($round->hole_8_yellow_par > 3){ $hole_8_fairway_available = 1; }
                if($round->hole_9_yellow_par > 3){ $hole_9_fairway_available = 1; }
                if($round->hole_10_yellow_par > 3){ $hole_10_fairway_available = 1; }
                if($round->hole_11_yellow_par > 3){ $hole_11_fairway_available = 1; }
                if($round->hole_12_yellow_par > 3){ $hole_12_fairway_available = 1; }
                if($round->hole_13_yellow_par > 3){ $hole_13_fairway_available = 1; }
                if($round->hole_14_yellow_par > 3){ $hole_14_fairway_available = 1; }
                if($round->hole_15_yellow_par > 3){ $hole_15_fairway_available = 1; }
                if($round->hole_16_yellow_par > 3){ $hole_16_fairway_available = 1; }
                if($round->hole_17_yellow_par > 3){ $hole_17_fairway_available = 1; }
                if($round->hole_18_yellow_par > 3){ $hole_18_fairway_available = 1; }
                if($round->hole_19_yellow_par > 3){ $hole_19_fairway_available = 1; }
                if($round->hole_20_yellow_par > 3){ $hole_20_fairway_available = 1; }
                if($round->hole_21_yellow_par > 3){ $hole_21_fairway_available = 1; }
                if($round->hole_22_yellow_par > 3){ $hole_22_fairway_available = 1; }
                if($round->hole_23_yellow_par > 3){ $hole_23_fairway_available = 1; }
                if($round->hole_24_yellow_par > 3){ $hole_24_fairway_available = 1; }
                if($round->hole_25_yellow_par > 3){ $hole_25_fairway_available = 1; }
                if($round->hole_26_yellow_par > 3){ $hole_26_fairway_available = 1; }
                if($round->hole_27_yellow_par > 3){ $hole_27_fairway_available = 1; }                

            }        
            
            if($round->yards === 'red'){

                if($round->hole_1_red_par > 3){ $hole_1_fairway_available = 1; }
                if($round->hole_2_red_par > 3){ $hole_2_fairway_available = 1; }
                if($round->hole_3_red_par > 3){ $hole_3_fairway_available = 1; }
                if($round->hole_4_red_par > 3){ $hole_4_fairway_available = 1; }
                if($round->hole_5_red_par > 3){ $hole_5_fairway_available = 1; }
                if($round->hole_6_red_par > 3){ $hole_6_fairway_available = 1; }
                if($round->hole_7_red_par > 3){ $hole_7_fairway_available = 1; }
                if($round->hole_8_red_par > 3){ $hole_8_fairway_available = 1; }
                if($round->hole_9_red_par > 3){ $hole_9_fairway_available = 1; }
                if($round->hole_10_red_par > 3){ $hole_10_fairway_available = 1; }
                if($round->hole_11_red_par > 3){ $hole_11_fairway_available = 1; }
                if($round->hole_12_red_par > 3){ $hole_12_fairway_available = 1; }
                if($round->hole_13_red_par > 3){ $hole_13_fairway_available = 1; }
                if($round->hole_14_red_par > 3){ $hole_14_fairway_available = 1; }
                if($round->hole_15_red_par > 3){ $hole_15_fairway_available = 1; }
                if($round->hole_16_red_par > 3){ $hole_16_fairway_available = 1; }
                if($round->hole_17_red_par > 3){ $hole_17_fairway_available = 1; }
                if($round->hole_18_red_par > 3){ $hole_18_fairway_available = 1; }
                if($round->hole_19_red_par > 3){ $hole_19_fairway_available = 1; }
                if($round->hole_20_red_par > 3){ $hole_20_fairway_available = 1; }
                if($round->hole_21_red_par > 3){ $hole_21_fairway_available = 1; }
                if($round->hole_22_red_par > 3){ $hole_22_fairway_available = 1; }
                if($round->hole_23_red_par > 3){ $hole_23_fairway_available = 1; }
                if($round->hole_24_red_par > 3){ $hole_24_fairway_available = 1; }
                if($round->hole_25_red_par > 3){ $hole_25_fairway_available = 1; }
                if($round->hole_26_red_par > 3){ $hole_26_fairway_available = 1; }
                if($round->hole_27_red_par > 3){ $hole_27_fairway_available = 1; }                

            }            


            $fairways_hit = intval($round->hole_1_fir) + intval($round->hole_2_fir) + intval($round->hole_3_fir) + intval($round->hole_4_fir) + intval($round->hole_5_fir) + intval($round->hole_6_fir) + intval($round->hole_7_fir) + intval($round->hole_8_fir) + intval($round->hole_9_fir) +
                            intval($round->hole_10_fir) + intval($round->hole_11_fir) + intval($round->hole_12_fir) + intval($round->hole_13_fir) + intval($round->hole_14_fir) + intval($round->hole_15_fir) + intval($round->hole_16_fir) + intval($round->hole_17_fir) + intval($round->hole_18_fir) +
                            intval($round->hole_19_fir) + intval($round->hole_20_fir) + intval($round->hole_21_fir) + intval($round->hole_22_fir) + intval($round->hole_23_fir) + intval($round->hole_24_fir) + intval($round->hole_25_fir) + intval($round->hole_26_fir) + intval($round->hole_27_fir);

            // total score
            if($round->nine === 'first-nine'){
                $fairways_available = $hole_1_fairway_available + $hole_2_fairway_available + $hole_3_fairway_available + $hole_4_fairway_available + $hole_5_fairway_available + $hole_6_fairway_available + $hole_7_fairway_available + $hole_8_fairway_available + $hole_9_fairway_available;
            }

            if($round->nine === 'second-nine'){
                $fairways_available = $hole_10_fairway_available + $hole_11_fairway_available + $hole_12_fairway_available + $hole_13_fairway_available + $hole_14_fairway_available + $hole_15_fairway_available + $hole_16_fairway_available + $hole_17_fairway_available + $hole_18_fairway_available;
            } 
            
            if($round->nine === 'third-nine'){
                $fairways_available = $hole_19_fairway_available + $hole_20_fairway_available + $hole_21_fairway_available + $hole_22_fairway_available + $hole_23_fairway_available + $hole_24_fairway_available + $hole_25_fairway_available + $hole_26_fairway_available + $hole_27_fairway_available;
            }  

            if($round->nine === 'first-nine-second-nine'){
                $fairways_available = $hole_1_fairway_available + $hole_2_fairway_available + $hole_3_fairway_available + $hole_4_fairway_available + $hole_5_fairway_available + $hole_6_fairway_available + $hole_7_fairway_available + $hole_8_fairway_available + $hole_9_fairway_available + 
                                      $hole_10_fairway_available + $hole_11_fairway_available + $hole_12_fairway_available + $hole_13_fairway_available + $hole_14_fairway_available + $hole_15_fairway_available + $hole_16_fairway_available + $hole_17_fairway_available + $hole_18_fairway_available;

            }

            if($round->nine === 'second-nine-third-nine'){
                $fairways_available = $hole_10_fairway_available + $hole_11_fairway_available + $hole_12_fairway_available + $hole_13_fairway_available + $hole_14_fairway_available + $hole_15_fairway_available + $hole_16_fairway_available + $hole_17_fairway_available + $hole_18_fairway_available + 
                                      $hole_19_fairway_available + $hole_20_fairway_available + $hole_21_fairway_available + $hole_22_fairway_available + $hole_23_fairway_available + $hole_24_fairway_available + $hole_25_fairway_available + $hole_26_fairway_available + $hole_27_fairway_available;
            } 

            if($round->nine === 'first-nine-third-nine'){
                $fairways_available = $hole_1_fairway_available + $hole_2_fairway_available + $hole_3_fairway_available + $hole_4_fairway_available + $hole_5_fairway_available + $hole_6_fairway_available + $hole_7_fairway_available + $hole_8_fairway_available + $hole_9_fairway_available + 
                                      $hole_19_fairway_available + $hole_20_fairway_available + $hole_21_fairway_available + $hole_22_fairway_available + $hole_23_fairway_available + $hole_24_fairway_available + $hole_25_fairway_available + $hole_26_fairway_available + $hole_27_fairway_available;
            }               
           
            if($fairways_available === 0){

                $fir_percentage = 0;

            }
            else{
                $fir_percentage = $fairways_hit / $fairways_available * 100;
            }
            
                           
            $round->fir_percentage = $fir_percentage;


            // Greens in Regulations

            $greens_hit = intval($round->hole_1_gir) + intval($round->hole_2_gir) + intval($round->hole_3_gir) + intval($round->hole_4_gir) + intval($round->hole_5_gir) + intval($round->hole_6_gir) + intval($round->hole_7_gir) + intval($round->hole_8_gir) + intval($round->hole_9_gir) +
                          intval($round->hole_10_gir) + intval($round->hole_11_gir) + intval($round->hole_12_gir) + intval($round->hole_13_gir) + intval($round->hole_14_gir) + intval($round->hole_15_gir) + intval($round->hole_16_gir) + intval($round->hole_17_gir) + intval($round->hole_18_gir) +
                          intval($round->hole_19_gir) + intval($round->hole_20_gir) + intval($round->hole_21_gir) + intval($round->hole_22_gir) + intval($round->hole_23_gir) + intval($round->hole_24_gir) + intval($round->hole_25_gir) + intval($round->hole_26_gir) + intval($round->hole_27_gir);

            if($round->size === 'half'){
                $greens_available = 9;
            }

            if($round->size === 'full'){
                $greens_available = 18;
            } 
            
            $gir_percentage = $greens_hit / $greens_available * 100;

            $round->gir_percentage = $gir_percentage;


            // Scrambling

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
            
            if($round->yards === 'white'){

                if($round->hole_1_gir === 0 && $round->hole_1_score <= $round->hole_1_white_par){$hole_1_scramble = 1;}
                if($round->hole_2_gir === 0 && $round->hole_2_score <= $round->hole_2_white_par){$hole_2_scramble = 1;}
                if($round->hole_3_gir === 0 && $round->hole_3_score <= $round->hole_3_white_par){$hole_3_scramble = 1;}
                if($round->hole_4_gir === 0 && $round->hole_4_score <= $round->hole_4_white_par){$hole_4_scramble = 1;}
                if($round->hole_5_gir === 0 && $round->hole_5_score <= $round->hole_5_white_par){$hole_5_scramble = 1;}
                if($round->hole_6_gir === 0 && $round->hole_6_score <= $round->hole_6_white_par){$hole_6_scramble = 1;}
                if($round->hole_7_gir === 0 && $round->hole_7_score <= $round->hole_7_white_par){$hole_7_scramble = 1;}
                if($round->hole_8_gir === 0 && $round->hole_8_score <= $round->hole_8_white_par){$hole_8_scramble = 1;}
                if($round->hole_9_gir === 0 && $round->hole_9_score <= $round->hole_9_white_par){$hole_9_scramble = 1;}
                if($round->hole_10_gir === 0 && $round->hole_10_score <= $round->hole_10_white_par){$hole_10_scramble = 1;}
                if($round->hole_11_gir === 0 && $round->hole_11_score <= $round->hole_11_white_par){$hole_11_scramble = 1;}
                if($round->hole_12_gir === 0 && $round->hole_12_score <= $round->hole_12_white_par){$hole_12_scramble = 1;}
                if($round->hole_13_gir === 0 && $round->hole_13_score <= $round->hole_13_white_par){$hole_13_scramble = 1;}
                if($round->hole_14_gir === 0 && $round->hole_14_score <= $round->hole_14_white_par){$hole_14_scramble = 1;}
                if($round->hole_15_gir === 0 && $round->hole_15_score <= $round->hole_15_white_par){$hole_15_scramble = 1;}
                if($round->hole_16_gir === 0 && $round->hole_16_score <= $round->hole_16_white_par){$hole_16_scramble = 1;}
                if($round->hole_17_gir === 0 && $round->hole_17_score <= $round->hole_17_white_par){$hole_17_scramble = 1;}
                if($round->hole_18_gir === 0 && $round->hole_18_score <= $round->hole_18_white_par){$hole_18_scramble = 1;}
                if($round->hole_19_gir === 0 && $round->hole_19_score <= $round->hole_19_white_par){$hole_19_scramble = 1;}
                if($round->hole_20_gir === 0 && $round->hole_20_score <= $round->hole_20_white_par){$hole_20_scramble = 1;}
                if($round->hole_21_gir === 0 && $round->hole_21_score <= $round->hole_21_white_par){$hole_21_scramble = 1;}
                if($round->hole_22_gir === 0 && $round->hole_22_score <= $round->hole_22_white_par){$hole_22_scramble = 1;}
                if($round->hole_23_gir === 0 && $round->hole_23_score <= $round->hole_23_white_par){$hole_23_scramble = 1;}
                if($round->hole_24_gir === 0 && $round->hole_24_score <= $round->hole_24_white_par){$hole_24_scramble = 1;}
                if($round->hole_25_gir === 0 && $round->hole_25_score <= $round->hole_25_white_par){$hole_25_scramble = 1;}
                if($round->hole_26_gir === 0 && $round->hole_26_score <= $round->hole_26_white_par){$hole_26_scramble = 1;}
                if($round->hole_27_gir === 0 && $round->hole_27_score <= $round->hole_27_white_par){$hole_27_scramble = 1;}
            }

            if($round->yards === 'yellow'){

                if($round->hole_1_gir === 0 && $round->hole_1_score <= $round->hole_1_yellow_par){$hole_1_scramble = 1;}
                if($round->hole_2_gir === 0 && $round->hole_2_score <= $round->hole_2_yellow_par){$hole_2_scramble = 1;}
                if($round->hole_3_gir === 0 && $round->hole_3_score <= $round->hole_3_yellow_par){$hole_3_scramble = 1;}
                if($round->hole_4_gir === 0 && $round->hole_4_score <= $round->hole_4_yellow_par){$hole_4_scramble = 1;}
                if($round->hole_5_gir === 0 && $round->hole_5_score <= $round->hole_5_yellow_par){$hole_5_scramble = 1;}
                if($round->hole_6_gir === 0 && $round->hole_6_score <= $round->hole_6_yellow_par){$hole_6_scramble = 1;}
                if($round->hole_7_gir === 0 && $round->hole_7_score <= $round->hole_7_yellow_par){$hole_7_scramble = 1;}
                if($round->hole_8_gir === 0 && $round->hole_8_score <= $round->hole_8_yellow_par){$hole_8_scramble = 1;}
                if($round->hole_9_gir === 0 && $round->hole_9_score <= $round->hole_9_yellow_par){$hole_9_scramble = 1;}
                if($round->hole_10_gir === 0 && $round->hole_10_score <= $round->hole_10_yellow_par){$hole_10_scramble = 1;}
                if($round->hole_11_gir === 0 && $round->hole_11_score <= $round->hole_11_yellow_par){$hole_11_scramble = 1;}
                if($round->hole_12_gir === 0 && $round->hole_12_score <= $round->hole_12_yellow_par){$hole_12_scramble = 1;}
                if($round->hole_13_gir === 0 && $round->hole_13_score <= $round->hole_13_yellow_par){$hole_13_scramble = 1;}
                if($round->hole_14_gir === 0 && $round->hole_14_score <= $round->hole_14_yellow_par){$hole_14_scramble = 1;}
                if($round->hole_15_gir === 0 && $round->hole_15_score <= $round->hole_15_yellow_par){$hole_15_scramble = 1;}
                if($round->hole_16_gir === 0 && $round->hole_16_score <= $round->hole_16_yellow_par){$hole_16_scramble = 1;}
                if($round->hole_17_gir === 0 && $round->hole_17_score <= $round->hole_17_yellow_par){$hole_17_scramble = 1;}
                if($round->hole_18_gir === 0 && $round->hole_18_score <= $round->hole_18_yellow_par){$hole_18_scramble = 1;}
                if($round->hole_19_gir === 0 && $round->hole_19_score <= $round->hole_19_yellow_par){$hole_19_scramble = 1;}
                if($round->hole_20_gir === 0 && $round->hole_20_score <= $round->hole_20_yellow_par){$hole_20_scramble = 1;}
                if($round->hole_21_gir === 0 && $round->hole_21_score <= $round->hole_21_yellow_par){$hole_21_scramble = 1;}
                if($round->hole_22_gir === 0 && $round->hole_22_score <= $round->hole_22_yellow_par){$hole_22_scramble = 1;}
                if($round->hole_23_gir === 0 && $round->hole_23_score <= $round->hole_23_yellow_par){$hole_23_scramble = 1;}
                if($round->hole_24_gir === 0 && $round->hole_24_score <= $round->hole_24_yellow_par){$hole_24_scramble = 1;}
                if($round->hole_25_gir === 0 && $round->hole_25_score <= $round->hole_25_yellow_par){$hole_25_scramble = 1;}
                if($round->hole_26_gir === 0 && $round->hole_26_score <= $round->hole_26_yellow_par){$hole_26_scramble = 1;}
                if($round->hole_27_gir === 0 && $round->hole_27_score <= $round->hole_27_yellow_par){$hole_27_scramble = 1;}

            }

            if($round->yards === 'red'){

                if($round->hole_1_gir === 0 && $round->hole_1_score <= $round->hole_1_red_par){$hole_1_scramble = 1;}
                if($round->hole_2_gir === 0 && $round->hole_2_score <= $round->hole_2_red_par){$hole_2_scramble = 1;}
                if($round->hole_3_gir === 0 && $round->hole_3_score <= $round->hole_3_red_par){$hole_3_scramble = 1;}
                if($round->hole_4_gir === 0 && $round->hole_4_score <= $round->hole_4_red_par){$hole_4_scramble = 1;}
                if($round->hole_5_gir === 0 && $round->hole_5_score <= $round->hole_5_red_par){$hole_5_scramble = 1;}
                if($round->hole_6_gir === 0 && $round->hole_6_score <= $round->hole_6_red_par){$hole_6_scramble = 1;}
                if($round->hole_7_gir === 0 && $round->hole_7_score <= $round->hole_7_red_par){$hole_7_scramble = 1;}
                if($round->hole_8_gir === 0 && $round->hole_8_score <= $round->hole_8_red_par){$hole_8_scramble = 1;}
                if($round->hole_9_gir === 0 && $round->hole_9_score <= $round->hole_9_red_par){$hole_9_scramble = 1;}
                if($round->hole_10_gir === 0 && $round->hole_10_score <= $round->hole_10_red_par){$hole_10_scramble = 1;}
                if($round->hole_11_gir === 0 && $round->hole_11_score <= $round->hole_11_red_par){$hole_11_scramble = 1;}
                if($round->hole_12_gir === 0 && $round->hole_12_score <= $round->hole_12_red_par){$hole_12_scramble = 1;}
                if($round->hole_13_gir === 0 && $round->hole_13_score <= $round->hole_13_red_par){$hole_13_scramble = 1;}
                if($round->hole_14_gir === 0 && $round->hole_14_score <= $round->hole_14_red_par){$hole_14_scramble = 1;}
                if($round->hole_15_gir === 0 && $round->hole_15_score <= $round->hole_15_red_par){$hole_15_scramble = 1;}
                if($round->hole_16_gir === 0 && $round->hole_16_score <= $round->hole_16_red_par){$hole_16_scramble = 1;}
                if($round->hole_17_gir === 0 && $round->hole_17_score <= $round->hole_17_red_par){$hole_17_scramble = 1;}
                if($round->hole_18_gir === 0 && $round->hole_18_score <= $round->hole_18_red_par){$hole_18_scramble = 1;}
                if($round->hole_19_gir === 0 && $round->hole_19_score <= $round->hole_19_red_par){$hole_19_scramble = 1;}
                if($round->hole_20_gir === 0 && $round->hole_20_score <= $round->hole_20_red_par){$hole_20_scramble = 1;}
                if($round->hole_21_gir === 0 && $round->hole_21_score <= $round->hole_21_red_par){$hole_21_scramble = 1;}
                if($round->hole_22_gir === 0 && $round->hole_22_score <= $round->hole_22_red_par){$hole_22_scramble = 1;}
                if($round->hole_23_gir === 0 && $round->hole_23_score <= $round->hole_23_red_par){$hole_23_scramble = 1;}
                if($round->hole_24_gir === 0 && $round->hole_24_score <= $round->hole_24_red_par){$hole_24_scramble = 1;}
                if($round->hole_25_gir === 0 && $round->hole_25_score <= $round->hole_25_red_par){$hole_25_scramble = 1;}
                if($round->hole_26_gir === 0 && $round->hole_26_score <= $round->hole_26_red_par){$hole_26_scramble = 1;}
                if($round->hole_27_gir === 0 && $round->hole_27_score <= $round->hole_27_red_par){$hole_27_scramble = 1;}

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

            if($round->hole_1_gir === 0){ $hole_1_scramble_chance = 1; }
            if($round->hole_2_gir === 0){ $hole_2_scramble_chance = 1; }
            if($round->hole_3_gir === 0){ $hole_3_scramble_chance = 1; }
            if($round->hole_4_gir === 0){ $hole_4_scramble_chance = 1; }
            if($round->hole_5_gir === 0){ $hole_5_scramble_chance = 1; }
            if($round->hole_6_gir === 0){ $hole_6_scramble_chance = 1; }
            if($round->hole_7_gir === 0){ $hole_7_scramble_chance = 1; }
            if($round->hole_8_gir === 0){ $hole_8_scramble_chance = 1; }
            if($round->hole_9_gir === 0){ $hole_9_scramble_chance = 1; }
            if($round->hole_10_gir === 0){ $hole_10_scramble_chance = 1; }
            if($round->hole_11_gir === 0){ $hole_11_scramble_chance = 1; }
            if($round->hole_12_gir === 0){ $hole_12_scramble_chance = 1; }
            if($round->hole_13_gir === 0){ $hole_13_scramble_chance = 1; }
            if($round->hole_14_gir === 0){ $hole_14_scramble_chance = 1; }
            if($round->hole_15_gir === 0){ $hole_15_scramble_chance = 1; }
            if($round->hole_16_gir === 0){ $hole_16_scramble_chance = 1; }
            if($round->hole_17_gir === 0){ $hole_17_scramble_chance = 1; }
            if($round->hole_18_gir === 0){ $hole_18_scramble_chance = 1; }
            if($round->hole_19_gir === 0){ $hole_19_scramble_chance = 1; }
            if($round->hole_20_gir === 0){ $hole_20_scramble_chance = 1; }
            if($round->hole_21_gir === 0){ $hole_21_scramble_chance = 1; }
            if($round->hole_22_gir === 0){ $hole_22_scramble_chance = 1; }
            if($round->hole_23_gir === 0){ $hole_23_scramble_chance = 1; }
            if($round->hole_24_gir === 0){ $hole_24_scramble_chance = 1; }
            if($round->hole_25_gir === 0){ $hole_25_scramble_chance = 1; }
            if($round->hole_26_gir === 0){ $hole_26_scramble_chance = 1; }
            if($round->hole_27_gir === 0){ $hole_27_scramble_chance = 1; }
        

            
            if($round->nine === 'first-nine'){

                $total_scrambles = $hole_1_scramble + $hole_2_scramble + $hole_3_scramble + $hole_4_scramble + $hole_5_scramble + $hole_6_scramble + $hole_7_scramble + $hole_8_scramble + $hole_9_scramble;
                $total_chances = $hole_1_scramble_chance + $hole_2_scramble_chance + $hole_3_scramble_chance + $hole_4_scramble_chance + $hole_5_scramble_chance + $hole_6_scramble + $hole_7_scramble_chance + $hole_8_scramble_chance + $hole_9_scramble_chance;

            }

            if($round->nine === 'second-nine'){

                $total_scrambles = $hole_10_scramble + $hole_11_scramble + $hole_12_scramble + $hole_13_scramble + $hole_14_scramble + $hole_15_scramble + $hole_16_scramble + $hole_17_scramble + $hole_18_scramble;
                $total_chances = $hole_10_scramble_chance + $hole_11_scramble_chance + $hole_12_scramble_chance + $hole_13_scramble_chance + $hole_14_scramble_chance + $hole_15_scramble + $hole_16_scramble_chance + $hole_17_scramble_chance + $hole_18_scramble_chance;

            } 
            
            if($round->nine === 'third-nine'){

                $total_scrambles = $hole_19_scramble + $hole_20_scramble + $hole_21_scramble + $hole_22_scramble + $hole_23_scramble + $hole_24_scramble + $hole_25_scramble + $hole_26_scramble + $hole_27_scramble;
                $total_chances = $hole_19_scramble_chance + $hole_20_scramble_chance + $hole_21_scramble_chance + $hole_22_scramble_chance + $hole_23_scramble_chance + $hole_24_scramble + $hole_25_scramble_chance + $hole_26_scramble_chance + $hole_27_scramble_chance;

            }  

            if($round->nine === 'first-nine-second-nine'){

                $total_scrambles = $hole_1_scramble + $hole_2_scramble + $hole_3_scramble + $hole_4_scramble + $hole_5_scramble + $hole_6_scramble + $hole_7_scramble + $hole_8_scramble + $hole_9_scramble + 
                                   $hole_10_scramble + $hole_11_scramble + $hole_12_scramble + $hole_13_scramble + $hole_14_scramble + $hole_15_scramble + $hole_16_scramble + $hole_17_scramble + $hole_18_scramble;

                $total_chances = $hole_1_scramble_chance + $hole_2_scramble_chance + $hole_3_scramble_chance + $hole_4_scramble_chance + $hole_5_scramble_chance + $hole_6_scramble + $hole_7_scramble_chance + $hole_8_scramble_chance + $hole_9_scramble_chance + 
                                 $hole_10_scramble_chance + $hole_11_scramble_chance + $hole_12_scramble_chance + $hole_13_scramble_chance + $hole_14_scramble_chance + $hole_15_scramble + $hole_16_scramble_chance + $hole_17_scramble_chance + $hole_18_scramble_chance;

            }

            if($round->nine === 'second-nine-third-nine'){

                $total_scrambles = $hole_10_scramble + $hole_11_scramble + $hole_12_scramble + $hole_13_scramble + $hole_14_scramble + $hole_15_scramble + $hole_16_scramble + $hole_17_scramble + $hole_18_scramble + 
                                   $hole_19_scramble + $hole_20_scramble + $hole_21_scramble + $hole_22_scramble + $hole_23_scramble + $hole_24_scramble + $hole_25_scramble + $hole_26_scramble + $hole_27_scramble;

                $total_chances = $hole_10_scramble_chance + $hole_11_scramble_chance + $hole_12_scramble_chance + $hole_13_scramble_chance + $hole_14_scramble_chance + $hole_15_scramble + $hole_16_scramble_chance + $hole_17_scramble_chance + $hole_18_scramble_chance + 
                                 $hole_19_scramble_chance + $hole_20_scramble_chance + $hole_21_scramble_chance + $hole_22_scramble_chance + $hole_23_scramble_chance + $hole_24_scramble + $hole_25_scramble_chance + $hole_26_scramble_chance + $hole_27_scramble_chance;

            } 

            if($round->nine === 'first-nine-third-nine'){

                $total_scrambles = $hole_1_scramble + $hole_2_scramble + $hole_3_scramble + $hole_4_scramble + $hole_5_scramble + $hole_6_scramble + $hole_7_scramble + $hole_8_scramble + $hole_9_scramble + 
                                   $hole_19_scramble_chance + $hole_20_scramble_chance + $hole_21_scramble_chance + $hole_22_scramble_chance + $hole_23_scramble_chance + $hole_24_scramble + $hole_25_scramble_chance + $hole_26_scramble_chance + $hole_27_scramble_chance;

                $total_chances = $hole_1_scramble_chance + $hole_2_scramble_chance + $hole_3_scramble_chance + $hole_4_scramble_chance + $hole_5_scramble_chance + $hole_6_scramble + $hole_7_scramble_chance + $hole_8_scramble_chance + $hole_9_scramble_chance + 
                                 $hole_19_scramble_chance + $hole_20_scramble_chance + $hole_21_scramble_chance + $hole_22_scramble_chance + $hole_23_scramble_chance + $hole_24_scramble + $hole_25_scramble_chance + $hole_26_scramble_chance + $hole_27_scramble_chance;

            }  


            $scrambling = $total_scrambles / $total_chances * 100;

            $round->scrambling = $scrambling;


            $round_id = $round->id;

            $round->round_id = $round_id;

        }

        return $rounds;

    }
 
}