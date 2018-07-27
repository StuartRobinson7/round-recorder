<?php

namespace App\Http\Controllers;

use App\Round;
use App\Course;
use App\Events\RoundAdd;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::all();    
        return view('add_round', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [     
            'round_date' => 'required|date_format:d/m/Y',
            'course_id' => 'required',
            'player_id' => 'required',          
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

        // Return Validation Errors            
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->messages()]);                        
        } 

        // Add round to database
        $round = Round::create($request->all());

        // Fire an event that a round has been added
        event(new RoundAdd($round));

        // Display Success Message            
        $request->session()->flash('message', 'New round added successfully.');
        $request->session()->flash('message-type', 'success');        

        // Return Success
        return response()->json('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $round = \App\Round::find($id);

        $course_id = $round->course_id;

        $course = \App\Course::find($course_id);

        $course_totals = \App\Course::where('courses.id', $course_id)        
                ->selectRaw("SUM(hole_1_par + hole_2_par + hole_3_par + hole_4_par + hole_5_par + hole_6_par + hole_7_par + hole_8_par + hole_9_par + hole_10_par + hole_11_par + hole_12_par + hole_13_par + hole_14_par + hole_15_par + hole_16_par + hole_17_par + hole_18_par) as total_par")
                ->selectRaw("SUM(hole_1_whites + hole_2_whites + hole_3_whites + hole_4_whites + hole_5_whites + hole_6_whites + hole_7_whites + hole_8_whites + hole_9_whites + hole_10_whites + hole_11_whites + hole_12_whites + hole_13_whites + hole_14_whites + hole_15_whites + hole_16_whites + hole_17_whites + hole_18_whites) as total_whites")
                ->selectRaw("SUM(hole_1_yellows + hole_2_yellows + hole_3_yellows + hole_4_yellows + hole_5_yellows + hole_6_yellows + hole_7_yellows + hole_8_yellows + hole_9_yellows + hole_10_yellows + hole_11_yellows + hole_12_yellows + hole_13_yellows + hole_14_yellows + hole_15_yellows + hole_16_yellows + hole_17_yellows + hole_18_yellows) as total_yellows")
                ->selectRaw("SUM(hole_1_reds + hole_2_reds + hole_3_reds + hole_4_reds + hole_5_reds + hole_6_reds + hole_7_reds + hole_8_reds + hole_9_reds + hole_10_reds + hole_11_reds + hole_12_reds + hole_13_reds + hole_14_reds + hole_15_reds + hole_16_reds + hole_17_reds + hole_18_reds) as total_reds")
                ->selectRaw("SUM(hole_1_ladies_par + hole_2_ladies_par + hole_3_ladies_par + hole_4_ladies_par + hole_5_ladies_par + hole_6_ladies_par + hole_7_ladies_par + hole_8_ladies_par + hole_9_ladies_par + hole_10_ladies_par + hole_11_ladies_par + hole_12_ladies_par + hole_13_ladies_par + hole_14_ladies_par + hole_15_ladies_par + hole_16_ladies_par + hole_17_ladies_par + hole_18_ladies_par) as total_ladies_par")
                ->first();        

        $round_result = \App\Round::where('rounds.id', $id)
            ->groupBy('rounds.id')
            ->join('courses', 'courses.id', '=', 'course_id')        
            ->selectRaw("SUM(hole_1_par + hole_2_par + hole_3_par + hole_4_par + hole_5_par + hole_6_par + hole_7_par + hole_8_par + hole_9_par + hole_10_par + hole_11_par + hole_12_par + hole_13_par + hole_14_par + hole_15_par + hole_16_par + hole_17_par + hole_18_par) as total_par")                              
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")                
            ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score - hole_1_par - hole_2_par - hole_3_par - hole_4_par - hole_5_par - hole_6_par - hole_7_par - hole_8_par - hole_9_par - hole_10_par - hole_11_par - hole_12_par - hole_13_par - hole_14_par - hole_15_par - hole_16_par - hole_17_par - hole_18_par) as plus_minus")                
            ->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) as total_putts")                
            ->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) / 18 as putts_per_hole")                       
            ->selectRaw("SUM(if(hole_1_fir > 0, 1, 0) + if(hole_2_fir > 0, 1, 0) + if(hole_3_fir > 0, 1, 0) + if(hole_4_fir > 0, 1, 0) + if(hole_5_fir > 0, 1, 0) + if(hole_6_fir > 0, 1, 0) + if(hole_7_fir > 0, 1, 0) + if(hole_8_fir > 0, 1, 0) + if(hole_9_fir > 0, 1, 0) + if(hole_10_fir > 0, 1, 0) + if(hole_11_fir > 0, 1, 0) + if(hole_12_fir > 0, 1, 0) + if(hole_13_fir > 0, 1, 0) + if(hole_14_fir > 0, 1, 0) + if(hole_15_fir > 0, 1, 0) + if(hole_16_fir > 0, 1, 0) + if(hole_17_fir > 0, 1, 0) + if(hole_18_fir > 0, 1, 0) ) / (if(hole_1_par > 3, 1, 0) + if(hole_2_par > 3, 1, 0) + if(hole_3_par > 3, 1, 0) + if(hole_4_par > 3, 1, 0) + if(hole_5_par > 3, 1, 0) + if(hole_6_par > 3, 1, 0) + if(hole_7_par > 3, 1, 0) + if(hole_8_par > 3, 1, 0) + if(hole_9_par > 3, 1, 0) + if(hole_10_par > 3, 1, 0) + if(hole_11_par > 3, 1, 0) + if(hole_12_par > 3, 1, 0) + if(hole_13_par > 3, 1, 0) + if(hole_14_par > 3, 1, 0) + if(hole_15_par > 3, 1, 0) + if(hole_16_par > 3, 1, 0) + if(hole_17_par > 3, 1, 0) + if(hole_18_par > 3, 1, 0)) * 100 as fir_percentage")
            ->selectRaw("SUM(if(hole_1_gir > 0, 1, 0) + if(hole_2_gir > 0, 1, 0) + if(hole_3_gir > 0, 1, 0) + if(hole_4_gir > 0, 1, 0) + if(hole_5_gir > 0, 1, 0) + if(hole_6_gir > 0, 1, 0) + if(hole_7_gir > 0, 1, 0) + if(hole_8_gir > 0, 1, 0) + if(hole_9_gir > 0, 1, 0) + if(hole_10_gir > 0, 1, 0) + if(hole_11_gir > 0, 1, 0) + if(hole_12_gir > 0, 1, 0) + if(hole_13_gir > 0, 1, 0) + if(hole_14_gir > 0, 1, 0) + if(hole_15_gir > 0, 1, 0) + if(hole_16_gir > 0, 1, 0) + if(hole_17_gir > 0, 1, 0) + if(hole_18_gir > 0, 1, 0)) / 18 * 100 as gir_percentage")                      
            ->selectRaw("SUM(hole_1_drops + hole_2_drops + hole_3_drops + hole_4_drops + hole_5_drops + hole_6_drops + hole_7_drops + hole_8_drops + hole_9_drops + hole_10_drops + hole_11_drops + hole_12_drops + hole_13_drops + hole_14_drops + hole_15_drops + hole_16_drops + hole_17_drops + hole_18_drops) as total_drops")               
            ->selectRaw("SUM(if(hole_1_score <= hole_1_par and hole_1_gir < 1, 1, 0) + if(hole_2_score <= hole_2_par and hole_2_gir < 1, 1, 0) + if(hole_3_score <= hole_3_par and hole_3_gir < 1, 1, 0) + if(hole_4_score <= hole_4_par and hole_4_gir < 1, 1, 0) + if(hole_5_score <= hole_5_par and hole_5_gir < 1, 1, 0) + if(hole_6_score <= hole_6_par and hole_6_gir < 1, 1, 0) + if(hole_7_score <= hole_7_par and hole_7_gir < 1, 1, 0) + if(hole_8_score <= hole_8_par and hole_8_gir < 1, 1, 0) + if(hole_9_score <= hole_9_par and hole_9_gir < 1, 1, 0) + if(hole_10_score <= hole_10_par and hole_10_gir < 1, 1, 0) + if(hole_11_score <= hole_11_par and hole_11_gir < 1, 1, 0) + if(hole_12_score <= hole_12_par and hole_12_gir < 1, 1, 0) + if(hole_13_score <= hole_13_par and hole_13_gir < 1, 1, 0) + if(hole_14_score <= hole_14_par and hole_14_gir < 1, 1, 0) + if(hole_15_score <= hole_15_par and hole_15_gir < 1, 1, 0) + if(hole_16_score <= hole_16_par and hole_16_gir < 1, 1, 0) + if(hole_17_score <= hole_17_par and hole_17_gir < 1, 1, 0) + if(hole_17_score <= hole_18_par and hole_18_gir < 1, 1, 0) ) / (if(hole_1_gir < 1, 1, 0) + if(hole_2_gir < 1, 1, 0) + if(hole_3_gir < 1, 1, 0) + if(hole_4_gir < 1, 1, 0) + if(hole_5_gir < 1, 1, 0) + if(hole_6_gir < 1, 1, 0) + if(hole_7_gir < 1, 1, 0) + if(hole_8_gir < 1, 1, 0) + if(hole_9_gir < 1, 1, 0) + if(hole_10_gir < 1, 1, 0) + if(hole_11_gir < 1, 1, 0) + if(hole_12_gir < 1, 1, 0) + if(hole_13_gir < 1, 1, 0) + if(hole_14_gir < 1, 1, 0) + if(hole_15_gir < 1, 1, 0) + if(hole_16_gir < 1, 1, 0) + if(hole_17_gir < 1, 1, 0) + if(hole_18_gir < 1, 1, 0) ) * 100 as scrambling")
            ->addSelect('round_date', 'property_name', 'course_name', 'rounds.id')
            ->first();

        return view('view_round',compact('round', 'course', 'course_totals', 'round_result', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $round = \App\Round::find($id);

        $course_id = $round->course_id;
        
        $course = \App\Course::select('property_name', 'course_name', 'hole_1_par', 'hole_2_par',  'hole_3_par', 'hole_4_par', 'hole_5_par', 'hole_6_par', 'hole_7_par', 'hole_8_par', 'hole_9_par', 'hole_10_par', 'hole_11_par', 'hole_12_par', 'hole_13_par', 'hole_14_par', 'hole_15_par', 'hole_16_par', 'hole_17_par', 'hole_18_par')      
        ->where('courses.id', $course_id)
        ->first();

        return view('edit_round',compact('round', 'course', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
        // Validate input
        $validator = Validator::make($request->all(), [     
            'round_date' => 'required|date_format:d/m/Y',         
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
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            } 
    
            $round = \App\Round::find($id);

            $round->round_date = $request->round_date;
            
            $round->hole_1_score = $request->hole_1_score;
            $round->hole_1_putts = $request->hole_1_putts;
            $round->hole_1_drops = $request->hole_1_drops;
            $round->hole_1_fir = $request->hole_1_fir;
            $round->hole_1_gir = $request->hole_1_gir;
            
            $round->hole_2_score = $request->hole_2_score;
            $round->hole_2_putts = $request->hole_2_putts;
            $round->hole_2_drops = $request->hole_2_drops;
            $round->hole_2_fir = $request->hole_2_fir;
            $round->hole_2_gir = $request->hole_2_gir;
            
            $round->hole_3_score = $request->hole_3_score;
            $round->hole_3_putts = $request->hole_3_putts;
            $round->hole_3_drops = $request->hole_3_drops;
            $round->hole_3_fir = $request->hole_3_fir;
            $round->hole_3_gir = $request->hole_3_gir;
            
            $round->hole_4_score = $request->hole_4_score;
            $round->hole_4_putts = $request->hole_4_putts;
            $round->hole_4_drops = $request->hole_4_drops;
            $round->hole_4_fir = $request->hole_4_fir;
            $round->hole_4_gir = $request->hole_4_gir;
            
            $round->hole_5_score = $request->hole_5_score;
            $round->hole_5_putts = $request->hole_5_putts;
            $round->hole_5_drops = $request->hole_5_drops;
            $round->hole_5_fir = $request->hole_5_fir;
            $round->hole_5_gir = $request->hole_5_gir;
            
            $round->hole_6_score = $request->hole_6_score;
            $round->hole_6_putts = $request->hole_6_putts;
            $round->hole_6_drops = $request->hole_6_drops;
            $round->hole_6_fir = $request->hole_6_fir;
            $round->hole_6_gir = $request->hole_6_gir;
            
            $round->hole_7_score = $request->hole_7_score;
            $round->hole_7_putts = $request->hole_7_putts;
            $round->hole_7_drops = $request->hole_7_drops;
            $round->hole_7_fir = $request->hole_7_fir;
            $round->hole_7_gir = $request->hole_7_gir;
            
            $round->hole_8_score = $request->hole_8_score;
            $round->hole_8_putts = $request->hole_8_putts;
            $round->hole_8_drops = $request->hole_8_drops;
            $round->hole_8_fir = $request->hole_8_fir;
            $round->hole_8_gir = $request->hole_8_gir;
            
            $round->hole_9_score = $request->hole_9_score;
            $round->hole_9_putts = $request->hole_9_putts;
            $round->hole_9_drops = $request->hole_9_drops;
            $round->hole_9_fir = $request->hole_9_fir;
            $round->hole_9_gir = $request->hole_9_gir; 
            
            $round->hole_10_score = $request->hole_10_score;
            $round->hole_10_putts = $request->hole_10_putts;
            $round->hole_10_drops = $request->hole_10_drops;
            $round->hole_10_fir = $request->hole_10_fir;
            $round->hole_10_gir = $request->hole_10_gir;
            
            $round->hole_11_score = $request->hole_11_score;
            $round->hole_11_putts = $request->hole_11_putts;
            $round->hole_11_drops = $request->hole_11_drops;
            $round->hole_11_fir = $request->hole_11_fir;
            $round->hole_11_gir = $request->hole_11_gir;
            
            $round->hole_12_score = $request->hole_12_score;
            $round->hole_12_putts = $request->hole_12_putts;
            $round->hole_12_drops = $request->hole_12_drops;
            $round->hole_12_fir = $request->hole_12_fir;
            $round->hole_12_gir = $request->hole_12_gir;
            
            $round->hole_13_score = $request->hole_13_score;
            $round->hole_13_putts = $request->hole_13_putts;
            $round->hole_13_drops = $request->hole_13_drops;
            $round->hole_13_fir = $request->hole_13_fir;
            $round->hole_13_gir = $request->hole_13_gir;
            
            $round->hole_14_score = $request->hole_14_score;
            $round->hole_14_putts = $request->hole_14_putts;
            $round->hole_14_drops = $request->hole_14_drops;
            $round->hole_14_fir = $request->hole_14_fir;
            $round->hole_14_gir = $request->hole_14_gir;
            
            $round->hole_15_score = $request->hole_15_score;
            $round->hole_15_putts = $request->hole_15_putts;
            $round->hole_15_drops = $request->hole_15_drops;
            $round->hole_15_fir = $request->hole_15_fir;
            $round->hole_15_gir = $request->hole_15_gir;
            
            $round->hole_16_score = $request->hole_16_score;
            $round->hole_16_putts = $request->hole_16_putts;
            $round->hole_16_drops = $request->hole_16_drops;
            $round->hole_16_fir = $request->hole_16_fir;
            $round->hole_16_gir = $request->hole_16_gir;
            
            $round->hole_17_score = $request->hole_17_score;
            $round->hole_17_putts = $request->hole_17_putts;
            $round->hole_17_drops = $request->hole_17_drops;
            $round->hole_17_fir = $request->hole_17_fir;
            $round->hole_17_gir = $request->hole_17_gir;
            
            $round->hole_18_score = $request->hole_18_score;
            $round->hole_18_putts = $request->hole_18_putts;
            $round->hole_18_drops = $request->hole_18_drops;
            $round->hole_18_fir = $request->hole_18_fir;
            $round->hole_18_gir = $request->hole_18_gir;                        

            $round->round_notes = $request->round_notes;       
    
            $round->save();
    
            // Fire an event like a round has been added
            event(new RoundAdd($round));

            $round = \App\Round::find($id);

            $course_id = $round->course_id;

            $course = \App\Course::find($course_id);
    
            $course_totals = \App\Course::where('courses.id', $course_id)        
                    ->selectRaw("SUM(hole_1_par + hole_2_par + hole_3_par + hole_4_par + hole_5_par + hole_6_par + hole_7_par + hole_8_par + hole_9_par + hole_10_par + hole_11_par + hole_12_par + hole_13_par + hole_14_par + hole_15_par + hole_16_par + hole_17_par + hole_18_par) as total_par")
                    ->selectRaw("SUM(hole_1_whites + hole_2_whites + hole_3_whites + hole_4_whites + hole_5_whites + hole_6_whites + hole_7_whites + hole_8_whites + hole_9_whites + hole_10_whites + hole_11_whites + hole_12_whites + hole_13_whites + hole_14_whites + hole_15_whites + hole_16_whites + hole_17_whites + hole_18_whites) as total_whites")
                    ->selectRaw("SUM(hole_1_yellows + hole_2_yellows + hole_3_yellows + hole_4_yellows + hole_5_yellows + hole_6_yellows + hole_7_yellows + hole_8_yellows + hole_9_yellows + hole_10_yellows + hole_11_yellows + hole_12_yellows + hole_13_yellows + hole_14_yellows + hole_15_yellows + hole_16_yellows + hole_17_yellows + hole_18_yellows) as total_yellows")
                    ->selectRaw("SUM(hole_1_reds + hole_2_reds + hole_3_reds + hole_4_reds + hole_5_reds + hole_6_reds + hole_7_reds + hole_8_reds + hole_9_reds + hole_10_reds + hole_11_reds + hole_12_reds + hole_13_reds + hole_14_reds + hole_15_reds + hole_16_reds + hole_17_reds + hole_18_reds) as total_reds")
                    ->selectRaw("SUM(hole_1_ladies_par + hole_2_ladies_par + hole_3_ladies_par + hole_4_ladies_par + hole_5_ladies_par + hole_6_ladies_par + hole_7_ladies_par + hole_8_ladies_par + hole_9_ladies_par + hole_10_ladies_par + hole_11_ladies_par + hole_12_ladies_par + hole_13_ladies_par + hole_14_ladies_par + hole_15_ladies_par + hole_16_ladies_par + hole_17_ladies_par + hole_18_ladies_par) as total_ladies_par")
                    ->first();        
    
            $round_result = \App\Round::where('rounds.id', $id)
                ->groupBy('rounds.id')
                ->join('courses', 'courses.id', '=', 'course_id')        
                ->selectRaw("SUM(hole_1_par + hole_2_par + hole_3_par + hole_4_par + hole_5_par + hole_6_par + hole_7_par + hole_8_par + hole_9_par + hole_10_par + hole_11_par + hole_12_par + hole_13_par + hole_14_par + hole_15_par + hole_16_par + hole_17_par + hole_18_par) as total_par")                              
                ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score) as total_score")                
                ->selectRaw("SUM(hole_1_score + hole_2_score + hole_3_score + hole_4_score + hole_5_score + hole_6_score + hole_7_score + hole_8_score + hole_9_score + hole_10_score + hole_11_score + hole_12_score + hole_13_score + hole_14_score + hole_15_score + hole_16_score + hole_17_score + hole_18_score - hole_1_par - hole_2_par - hole_3_par - hole_4_par - hole_5_par - hole_6_par - hole_7_par - hole_8_par - hole_9_par - hole_10_par - hole_11_par - hole_12_par - hole_13_par - hole_14_par - hole_15_par - hole_16_par - hole_17_par - hole_18_par) as plus_minus")                
                ->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) as total_putts")                
                ->selectRaw("SUM(hole_1_putts + hole_2_putts + hole_3_putts + hole_4_putts + hole_5_putts + hole_6_putts + hole_7_putts + hole_8_putts + hole_9_putts + hole_10_putts + hole_11_putts + hole_12_putts + hole_13_putts + hole_14_putts + hole_15_putts + hole_16_putts + hole_17_putts + hole_18_putts) / 18 as putts_per_hole")                       
                ->selectRaw("SUM(if(hole_1_fir > 0, 1, 0) + if(hole_2_fir > 0, 1, 0) + if(hole_3_fir > 0, 1, 0) + if(hole_4_fir > 0, 1, 0) + if(hole_5_fir > 0, 1, 0) + if(hole_6_fir > 0, 1, 0) + if(hole_7_fir > 0, 1, 0) + if(hole_8_fir > 0, 1, 0) + if(hole_9_fir > 0, 1, 0) + if(hole_10_fir > 0, 1, 0) + if(hole_11_fir > 0, 1, 0) + if(hole_12_fir > 0, 1, 0) + if(hole_13_fir > 0, 1, 0) + if(hole_14_fir > 0, 1, 0) + if(hole_15_fir > 0, 1, 0) + if(hole_16_fir > 0, 1, 0) + if(hole_17_fir > 0, 1, 0) + if(hole_18_fir > 0, 1, 0) ) / (if(hole_1_par > 3, 1, 0) + if(hole_2_par > 3, 1, 0) + if(hole_3_par > 3, 1, 0) + if(hole_4_par > 3, 1, 0) + if(hole_5_par > 3, 1, 0) + if(hole_6_par > 3, 1, 0) + if(hole_7_par > 3, 1, 0) + if(hole_8_par > 3, 1, 0) + if(hole_9_par > 3, 1, 0) + if(hole_10_par > 3, 1, 0) + if(hole_11_par > 3, 1, 0) + if(hole_12_par > 3, 1, 0) + if(hole_13_par > 3, 1, 0) + if(hole_14_par > 3, 1, 0) + if(hole_15_par > 3, 1, 0) + if(hole_16_par > 3, 1, 0) + if(hole_17_par > 3, 1, 0) + if(hole_18_par > 3, 1, 0)) * 100 as fir_percentage")
                ->selectRaw("SUM(if(hole_1_gir > 0, 1, 0) + if(hole_2_gir > 0, 1, 0) + if(hole_3_gir > 0, 1, 0) + if(hole_4_gir > 0, 1, 0) + if(hole_5_gir > 0, 1, 0) + if(hole_6_gir > 0, 1, 0) + if(hole_7_gir > 0, 1, 0) + if(hole_8_gir > 0, 1, 0) + if(hole_9_gir > 0, 1, 0) + if(hole_10_gir > 0, 1, 0) + if(hole_11_gir > 0, 1, 0) + if(hole_12_gir > 0, 1, 0) + if(hole_13_gir > 0, 1, 0) + if(hole_14_gir > 0, 1, 0) + if(hole_15_gir > 0, 1, 0) + if(hole_16_gir > 0, 1, 0) + if(hole_17_gir > 0, 1, 0) + if(hole_18_gir > 0, 1, 0)) / 18 * 100 as gir_percentage")                      
                ->selectRaw("SUM(hole_1_drops + hole_2_drops + hole_3_drops + hole_4_drops + hole_5_drops + hole_6_drops + hole_7_drops + hole_8_drops + hole_9_drops + hole_10_drops + hole_11_drops + hole_12_drops + hole_13_drops + hole_14_drops + hole_15_drops + hole_16_drops + hole_17_drops + hole_18_drops) as total_drops")               
                ->selectRaw("SUM(if(hole_1_score <= hole_1_par and hole_1_gir < 1, 1, 0) + if(hole_2_score <= hole_2_par and hole_2_gir < 1, 1, 0) + if(hole_3_score <= hole_3_par and hole_3_gir < 1, 1, 0) + if(hole_4_score <= hole_4_par and hole_4_gir < 1, 1, 0) + if(hole_5_score <= hole_5_par and hole_5_gir < 1, 1, 0) + if(hole_6_score <= hole_6_par and hole_6_gir < 1, 1, 0) + if(hole_7_score <= hole_7_par and hole_7_gir < 1, 1, 0) + if(hole_8_score <= hole_8_par and hole_8_gir < 1, 1, 0) + if(hole_9_score <= hole_9_par and hole_9_gir < 1, 1, 0) + if(hole_10_score <= hole_10_par and hole_10_gir < 1, 1, 0) + if(hole_11_score <= hole_11_par and hole_11_gir < 1, 1, 0) + if(hole_12_score <= hole_12_par and hole_12_gir < 1, 1, 0) + if(hole_13_score <= hole_13_par and hole_13_gir < 1, 1, 0) + if(hole_14_score <= hole_14_par and hole_14_gir < 1, 1, 0) + if(hole_15_score <= hole_15_par and hole_15_gir < 1, 1, 0) + if(hole_16_score <= hole_16_par and hole_16_gir < 1, 1, 0) + if(hole_17_score <= hole_17_par and hole_17_gir < 1, 1, 0) + if(hole_17_score <= hole_18_par and hole_18_gir < 1, 1, 0) ) / (if(hole_1_gir < 1, 1, 0) + if(hole_2_gir < 1, 1, 0) + if(hole_3_gir < 1, 1, 0) + if(hole_4_gir < 1, 1, 0) + if(hole_5_gir < 1, 1, 0) + if(hole_6_gir < 1, 1, 0) + if(hole_7_gir < 1, 1, 0) + if(hole_8_gir < 1, 1, 0) + if(hole_9_gir < 1, 1, 0) + if(hole_10_gir < 1, 1, 0) + if(hole_11_gir < 1, 1, 0) + if(hole_12_gir < 1, 1, 0) + if(hole_13_gir < 1, 1, 0) + if(hole_14_gir < 1, 1, 0) + if(hole_15_gir < 1, 1, 0) + if(hole_16_gir < 1, 1, 0) + if(hole_17_gir < 1, 1, 0) + if(hole_18_gir < 1, 1, 0) ) * 100 as scrambling")
                ->addSelect('round_date', 'property_name', 'course_name', 'rounds.id')
                ->first();





            return view('view_round',compact('round', 'course', 'course_totals', 'round_result', 'id'))->with('success','Course has been updated');        
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $round = \App\Round::find($id);
        $round->delete();
        return redirect('profile')->with('success','Course has been deleted'); 
    }
}
