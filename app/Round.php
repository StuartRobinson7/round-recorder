<?php

namespace App;

use Carbon\Carbon; 
use Illuminate\Database\Eloquent\Model;


class Round extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'round_date', 'yards', 'nine', 'size', 'player_id', 'course_id', 'round_notes', 'handicap_round', 'player_handicap', 'handicap_differential', 'stats_round', 'total_points',
        'hole_1_score', 'hole_1_drops', 'hole_1_putts', 'hole_1_fir', 'hole_1_gir', 'hole_1_par', 'hole_1_points',
        'hole_2_score', 'hole_2_drops', 'hole_2_putts', 'hole_2_fir', 'hole_2_gir', 'hole_2_par', 'hole_2_points',
        'hole_3_score', 'hole_3_drops', 'hole_3_putts', 'hole_3_fir', 'hole_3_gir', 'hole_3_par', 'hole_3_points',
        'hole_4_score', 'hole_4_drops', 'hole_4_putts', 'hole_4_fir', 'hole_4_gir', 'hole_4_par', 'hole_4_points',
        'hole_5_score', 'hole_5_drops', 'hole_5_putts', 'hole_5_fir', 'hole_5_gir', 'hole_5_par', 'hole_5_points',
        'hole_6_score', 'hole_6_drops', 'hole_6_putts', 'hole_6_fir', 'hole_6_gir', 'hole_6_par', 'hole_6_points',
        'hole_7_score', 'hole_7_drops', 'hole_7_putts', 'hole_7_fir', 'hole_7_gir', 'hole_7_par', 'hole_7_points',
        'hole_8_score', 'hole_8_drops', 'hole_8_putts', 'hole_8_fir', 'hole_8_gir', 'hole_8_par', 'hole_8_points',
        'hole_9_score', 'hole_9_drops', 'hole_9_putts', 'hole_9_fir', 'hole_9_gir', 'hole_9_par', 'hole_9_points',
        'hole_10_score', 'hole_10_drops', 'hole_10_putts', 'hole_10_fir', 'hole_10_gir', 'hole_10_par', 'hole_10_points',
        'hole_11_score', 'hole_11_drops', 'hole_11_putts', 'hole_11_fir', 'hole_11_gir', 'hole_11_par', 'hole_11_points',
        'hole_12_score', 'hole_12_drops', 'hole_12_putts', 'hole_12_fir', 'hole_12_gir', 'hole_12_par', 'hole_12_points',
        'hole_13_score', 'hole_13_drops', 'hole_13_putts', 'hole_13_fir', 'hole_13_gir', 'hole_13_par', 'hole_13_points',
        'hole_14_score', 'hole_14_drops', 'hole_14_putts', 'hole_14_fir', 'hole_14_gir', 'hole_14_par', 'hole_14_points',
        'hole_15_score', 'hole_15_drops', 'hole_15_putts', 'hole_15_fir', 'hole_15_gir', 'hole_15_par', 'hole_15_points',
        'hole_16_score', 'hole_16_drops', 'hole_16_putts', 'hole_16_fir', 'hole_16_gir', 'hole_16_par', 'hole_16_points',
        'hole_17_score', 'hole_17_drops', 'hole_17_putts', 'hole_17_fir', 'hole_17_gir', 'hole_17_par', 'hole_17_points',
        'hole_18_score', 'hole_18_drops', 'hole_18_putts', 'hole_18_fir', 'hole_18_gir', 'hole_18_par', 'hole_18_points'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    protected $dates = ['round_date'];

    public function setRoundDateAttribute($date)
    {
        $this->attributes['round_date'] = Carbon::createFromFormat('d/m/Y', $date);
    }
    
}
