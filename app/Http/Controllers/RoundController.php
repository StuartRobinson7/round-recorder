<?php

namespace App\Http\Controllers;

use App\Round;
use App\Course;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RoundController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Course Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the adding of courses to the database
    |
    */
    

    public function showAddRoundForm()
    {

        $course = Course::all();
        //$courses = Course::pluck(['id', 'property_name', 'course_name']);
    
        return view('add_round', compact('course'));

        //return view('add_round');
    }      


    public function saveRound(Request $request)
    {           

        $validator = Validator::make($request->all(), [     
            'round_date' => 'required|date_format:d/m/Y',
            'course_id' => 'required',
            'player_id' => 'required',
            'course_slope' => 'required|integer',
            'hole_1_score' => 'required|integer',
            'hole_2_score' => 'required|integer',
            'hole_3_score' => 'required|integer',
            'hole_4_score' => 'required|integer',
            'hole_5_score' => 'required|integer',
            'hole_6_score' => 'required|integer',
            'hole_7_score' => 'required|integer',
            'hole_8_score' => 'required|integer',
            'hole_9_score' => 'required|integer',
            'hole_10_score' => 'required|integer',
            'hole_11_score' => 'required|integer',
            'hole_12_score' => 'required|integer',
            'hole_13_score' => 'required|integer',
            'hole_14_score' => 'required|integer',
            'hole_15_score' => 'required|integer',
            'hole_16_score' => 'required|integer',
            'hole_17_score' => 'required|integer',
            'hole_18_score' => 'required|integer'            
        ]);


        if ($validator->fails()) {
            return redirect('add_round')
                        ->withErrors($validator)
                        ->withInput();                        
        } 


        $round = Round::create($request->all());
        return redirect()->route('profile');
    }
 

    protected function create(array $data)
    {     
        
        return Round::create([

                'course_id' => $data['course_id'],
                'player_id' => $data['player_id'],
                'round_date' => $data['round_date'],
                'hole_1_score' => $data['hole_1_score'],
                'hole_1_putts' => $data['hole_1_putts'],
                'hole_1_drops' => $data['hole_1_drops'],
                'hole_1_fir' => $data['hole_1_fir'],
                'hole_1_gir' => $data['hole_1_gir'],
                'hole_2_score' => $data['hole_2_score'],
                'hole_2_putts' => $data['hole_2_putts'],
                'hole_2_drops' => $data['hole_2_drops'],
                'hole_2_fir' => $data['hole_2_fir'],
                'hole_2_gir' => $data['hole_2_gir'],                
                'hole_3_score' => $data['hole_3_score'],
                'hole_3_putts' => $data['hole_3_putts'],
                'hole_3_drops' => $data['hole_3_drops'],
                'hole_3_fir' => $data['hole_3_fir'],
                'hole_3_gir' => $data['hole_3_gir'],                
                'hole_4_score' => $data['hole_4_score'],
                'hole_4_putts' => $data['hole_4_putts'],
                'hole_4_drops' => $data['hole_4_drops'],
                'hole_4_fir' => $data['hole_4_fir'],
                'hole_4_gir' => $data['hole_4_gir'],                
                'hole_5_score' => $data['hole_5_score'],
                'hole_5_putts' => $data['hole_5_putts'],
                'hole_5_drops' => $data['hole_5_drops'],
                'hole_5_fir' => $data['hole_5_fir'],
                'hole_5_gir' => $data['hole_5_gir'],                
                'hole_6_score' => $data['hole_6_score'],
                'hole_6_putts' => $data['hole_6_putts'],
                'hole_6_drops' => $data['hole_6_drops'],
                'hole_6_fir' => $data['hole_6_fir'],
                'hole_6_gir' => $data['hole_6_gir'],                
                'hole_7_score' => $data['hole_7_score'],
                'hole_7_putts' => $data['hole_7_putts'],
                'hole_7_drops' => $data['hole_7_drops'],
                'hole_7_fir' => $data['hole_7_fir'],
                'hole_7_gir' => $data['hole_7_gir'],                
                'hole_8_score' => $data['hole_8_score'],
                'hole_8_putts' => $data['hole_8_putts'],
                'hole_8_drops' => $data['hole_8_drops'],
                'hole_8_fir' => $data['hole_8_fir'],
                'hole_8_gir' => $data['hole_8_gir'],                
                'hole_9_score' => $data['hole_9_score'],
                'hole_9_putts' => $data['hole_9_putts'],
                'hole_9_drops' => $data['hole_9_drops'],
                'hole_9_fir' => $data['hole_9_fir'],
                'hole_9_gir' => $data['hole_9_gir'],                
                'hole_10_score' => $data['hole_10_score'],
                'hole_10_putts' => $data['hole_10_putts'],
                'hole_10_drops' => $data['hole_10_drops'],
                'hole_10_fir' => $data['hole_10_fir'],
                'hole_10_gir' => $data['hole_10_gir'],                
                'hole_11_score' => $data['hole_11_score'],
                'hole_11_putts' => $data['hole_11_putts'],
                'hole_11_drops' => $data['hole_11_drops'],
                'hole_11_fir' => $data['hole_11_fir'],
                'hole_11_gir' => $data['hole_11_gir'],                
                'hole_12_score' => $data['hole_12_score'],
                'hole_12_putts' => $data['hole_12_putts'],
                'hole_12_drops' => $data['hole_12_drops'],
                'hole_12_fir' => $data['hole_12_fir'],
                'hole_12_gir' => $data['hole_12_gir'],                
                'hole_13_score' => $data['hole_13_score'],
                'hole_13_putts' => $data['hole_13_putts'],
                'hole_13_drops' => $data['hole_13_drops'],
                'hole_13_fir' => $data['hole_13_fir'],
                'hole_13_gir' => $data['hole_13_gir'],                
                'hole_14_score' => $data['hole_14_score'],
                'hole_14_putts' => $data['hole_14_putts'],
                'hole_14_drops' => $data['hole_14_drops'],
                'hole_14_fir' => $data['hole_14_fir'],
                'hole_14_gir' => $data['hole_14_gir'],                
                'hole_15_score' => $data['hole_15_score'],
                'hole_15_putts' => $data['hole_15_putts'],
                'hole_15_drops' => $data['hole_15_drops'],
                'hole_15_fir' => $data['hole_15_fir'],
                'hole_15_gir' => $data['hole_15_gir'],                
                'hole_16_score' => $data['hole_16_score'],
                'hole_16_putts' => $data['hole_16_putts'],
                'hole_16_drops' => $data['hole_16_drops'],
                'hole_16_fir' => $data['hole_16_fir'],
                'hole_16_gir' => $data['hole_16_gir'],                
                'hole_17_score' => $data['hole_17_score'],
                'hole_17_putts' => $data['hole_17_putts'],
                'hole_17_drops' => $data['hole_17_drops'],
                'hole_17_fir' => $data['hole_17_fir'],
                'hole_17_gir' => $data['hole_17_gir'],                
                'hole_18_score' => $data['hole_18_score'],
                'hole_18_putts' => $data['hole_18_putts'],
                'hole_18_drops' => $data['hole_18_drops'],
                'hole_18_fir' => $data['hole_18_fir'],
                'hole_18_gir' => $data['hole_18_gir'],                
                'round_notes' => $data['round_notes']
        ]);
        
       
    }    
            

}
