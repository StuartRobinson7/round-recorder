<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [      
            'property_name' => 'required|string',
            'course_name' => 'required|string',
            'holes' => 'required|integer',          
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } 

        // Add round to database
        $course = Course::create($request->all());

        return redirect()->route('profile');           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = \App\Course::find($id);
        $course_totals = \App\Course::where('courses.id', $id)        
                ->selectRaw("SUM(hole_1_par + hole_2_par + hole_3_par + hole_4_par + hole_5_par + hole_6_par + hole_7_par + hole_8_par + hole_9_par + hole_10_par + hole_11_par + hole_12_par + hole_13_par + hole_14_par + hole_15_par + hole_16_par + hole_17_par + hole_18_par) as total_par")
                ->selectRaw("SUM(hole_1_whites + hole_2_whites + hole_3_whites + hole_4_whites + hole_5_whites + hole_6_whites + hole_7_whites + hole_8_whites + hole_9_whites + hole_10_whites + hole_11_whites + hole_12_whites + hole_13_whites + hole_14_whites + hole_15_whites + hole_16_whites + hole_17_whites + hole_18_whites) as total_whites")
                ->selectRaw("SUM(hole_1_yellows + hole_2_yellows + hole_3_yellows + hole_4_yellows + hole_5_yellows + hole_6_yellows + hole_7_yellows + hole_8_yellows + hole_9_yellows + hole_10_yellows + hole_11_yellows + hole_12_yellows + hole_13_yellows + hole_14_yellows + hole_15_yellows + hole_16_yellows + hole_17_yellows + hole_18_yellows) as total_yellows")
                ->selectRaw("SUM(hole_1_reds + hole_2_reds + hole_3_reds + hole_4_reds + hole_5_reds + hole_6_reds + hole_7_reds + hole_8_reds + hole_9_reds + hole_10_reds + hole_11_reds + hole_12_reds + hole_13_reds + hole_14_reds + hole_15_reds + hole_16_reds + hole_17_reds + hole_18_reds) as total_reds")
                ->selectRaw("SUM(hole_1_ladies_par + hole_2_ladies_par + hole_3_ladies_par + hole_4_ladies_par + hole_5_ladies_par + hole_6_ladies_par + hole_7_ladies_par + hole_8_ladies_par + hole_9_ladies_par + hole_10_ladies_par + hole_11_ladies_par + hole_12_ladies_par + hole_13_ladies_par + hole_14_ladies_par + hole_15_ladies_par + hole_16_ladies_par + hole_17_ladies_par + hole_18_ladies_par) as total_ladies_par")
                ->first();
        return view('view_course',compact('course','course_totals', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course_info = \App\Course::find($id);        
        return view('edit_course',compact('course_info','id'));
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
        $validator = Validator::make($request->all(), [      
            'property_name' => 'required|string',
            'course_name' => 'required|string',           
        ]);

        if ($validator->fails()) {
            return redirect('edit_course')
                        ->withErrors($validator)
                        ->withInput();
        } 


        $course = \App\Course::find($id);

        $course->property_name = $request->property_name;
        $course->course_name = $request->course_name;
        $course->sss = $request->sss;
        $course->holes = $request->holes;

        $course->first_nine_name = $request->first_nine_name;
        $course->second_nine_name = $request->second_nine_name;
        $course->third_nine_name = $request->third_nine_name;

        $course->hole_1_white = $request->hole_1_white;
        $course->hole_1_white_par = $request->hole_1_white_par;
        $course->hole_1_white_stroke_index = $request->hole_1_white_stroke_index;
        $course->hole_1_yellow = $request->hole_1_yellow;
        $course->hole_1_yellow_par = $request->hole_1_yellow_par;
        $course->hole_1_yellow_stroke_index = $request->hole_1_yellow_stroke_index;     
        $course->hole_1_red = $request->hole_1_red;
        $course->hole_1_red_par = $request->hole_1_red_par;
        $course->hole_1_red_stroke_index = $request->hole_1_red_stroke_index; 
        
        $course->hole_2_white = $request->hole_2_white;
        $course->hole_2_white_par = $request->hole_2_white_par;
        $course->hole_2_white_stroke_index = $request->hole_2_white_stroke_index;
        $course->hole_2_yellow = $request->hole_2_yellow;
        $course->hole_2_yellow_par = $request->hole_2_yellow_par;
        $course->hole_2_yellow_stroke_index = $request->hole_2_yellow_stroke_index;     
        $course->hole_2_red = $request->hole_2_red;
        $course->hole_2_red_par = $request->hole_2_red_par;
        $course->hole_2_red_stroke_index = $request->hole_2_red_stroke_index;         

        $course->hole_3_white = $request->hole_3_white;
        $course->hole_3_white_par = $request->hole_3_white_par;
        $course->hole_3_white_stroke_index = $request->hole_3_white_stroke_index;
        $course->hole_3_yellow = $request->hole_3_yellow;
        $course->hole_3_yellow_par = $request->hole_3_yellow_par;
        $course->hole_3_yellow_stroke_index = $request->hole_3_yellow_stroke_index;     
        $course->hole_3_red = $request->hole_3_red;
        $course->hole_3_red_par = $request->hole_3_red_par;
        $course->hole_3_red_stroke_index = $request->hole_3_red_stroke_index;     
        
        $course->hole_4_white = $request->hole_4_white;
        $course->hole_4_white_par = $request->hole_4_white_par;
        $course->hole_4_white_stroke_index = $request->hole_4_white_stroke_index;
        $course->hole_4_yellow = $request->hole_4_yellow;
        $course->hole_4_yellow_par = $request->hole_4_yellow_par;
        $course->hole_4_yellow_stroke_index = $request->hole_4_yellow_stroke_index;     
        $course->hole_4_red = $request->hole_4_red;
        $course->hole_4_red_par = $request->hole_4_red_par;
        $course->hole_4_red_stroke_index = $request->hole_4_red_stroke_index;     
        
        $course->hole_5_white = $request->hole_5_white;
        $course->hole_5_white_par = $request->hole_5_white_par;
        $course->hole_5_white_stroke_index = $request->hole_5_white_stroke_index;
        $course->hole_5_yellow = $request->hole_5_yellow;
        $course->hole_5_yellow_par = $request->hole_5_yellow_par;
        $course->hole_5_yellow_stroke_index = $request->hole_5_yellow_stroke_index;     
        $course->hole_5_red = $request->hole_5_red;
        $course->hole_5_red_par = $request->hole_5_red_par;
        $course->hole_5_red_stroke_index = $request->hole_5_red_stroke_index; 
        
        $course->hole_6_white = $request->hole_6_white;
        $course->hole_6_white_par = $request->hole_6_white_par;
        $course->hole_6_white_stroke_index = $request->hole_6_white_stroke_index;
        $course->hole_6_yellow = $request->hole_6_yellow;
        $course->hole_6_yellow_par = $request->hole_6_yellow_par;
        $course->hole_6_yellow_stroke_index = $request->hole_6_yellow_stroke_index;     
        $course->hole_6_red = $request->hole_6_red;
        $course->hole_6_red_par = $request->hole_6_red_par;
        $course->hole_6_red_stroke_index = $request->hole_6_red_stroke_index;       
        
        $course->hole_7_white = $request->hole_7_white;
        $course->hole_7_white_par = $request->hole_7_white_par;
        $course->hole_7_white_stroke_index = $request->hole_7_white_stroke_index;
        $course->hole_7_yellow = $request->hole_7_yellow;
        $course->hole_7_yellow_par = $request->hole_7_yellow_par;
        $course->hole_7_yellow_stroke_index = $request->hole_7_yellow_stroke_index;     
        $course->hole_7_red = $request->hole_7_red;
        $course->hole_7_red_par = $request->hole_7_red_par;
        $course->hole_7_red_stroke_index = $request->hole_7_red_stroke_index;    
        
        $course->hole_8_white = $request->hole_8_white;
        $course->hole_8_white_par = $request->hole_8_white_par;
        $course->hole_8_white_stroke_index = $request->hole_8_white_stroke_index;
        $course->hole_8_yellow = $request->hole_8_yellow;
        $course->hole_8_yellow_par = $request->hole_8_yellow_par;
        $course->hole_8_yellow_stroke_index = $request->hole_8_yellow_stroke_index;     
        $course->hole_8_red = $request->hole_8_red;
        $course->hole_8_red_par = $request->hole_8_red_par;
        $course->hole_8_red_stroke_index = $request->hole_8_red_stroke_index;    
        
        $course->hole_9_white = $request->hole_9_white;
        $course->hole_9_white_par = $request->hole_9_white_par;
        $course->hole_9_white_stroke_index = $request->hole_9_white_stroke_index;
        $course->hole_9_yellow = $request->hole_9_yellow;
        $course->hole_9_yellow_par = $request->hole_9_yellow_par;
        $course->hole_9_yellow_stroke_index = $request->hole_9_yellow_stroke_index;     
        $course->hole_9_red = $request->hole_9_red;
        $course->hole_9_red_par = $request->hole_9_red_par;
        $course->hole_9_red_stroke_index = $request->hole_9_red_stroke_index;    
        
        $course->hole_10_white = $request->hole_10_white;
        $course->hole_10_white_par = $request->hole_10_white_par;
        $course->hole_10_white_stroke_index = $request->hole_10_white_stroke_index;
        $course->hole_10_yellow = $request->hole_10_yellow;
        $course->hole_10_yellow_par = $request->hole_10_yellow_par;
        $course->hole_10_yellow_stroke_index = $request->hole_10_yellow_stroke_index;     
        $course->hole_10_red = $request->hole_10_red;
        $course->hole_10_red_par = $request->hole_10_red_par;
        $course->hole_10_red_stroke_index = $request->hole_10_red_stroke_index;  
        
        $course->hole_11_white = $request->hole_11_white;
        $course->hole_11_white_par = $request->hole_11_white_par;
        $course->hole_11_white_stroke_index = $request->hole_11_white_stroke_index;
        $course->hole_11_yellow = $request->hole_11_yellow;
        $course->hole_11_yellow_par = $request->hole_11_yellow_par;
        $course->hole_11_yellow_stroke_index = $request->hole_11_yellow_stroke_index;     
        $course->hole_11_red = $request->hole_11_red;
        $course->hole_11_red_par = $request->hole_11_red_par;
        $course->hole_11_red_stroke_index = $request->hole_11_red_stroke_index;  
        
        $course->hole_12_white = $request->hole_12_white;
        $course->hole_12_white_par = $request->hole_12_white_par;
        $course->hole_12_white_stroke_index = $request->hole_12_white_stroke_index;
        $course->hole_12_yellow = $request->hole_12_yellow;
        $course->hole_12_yellow_par = $request->hole_12_yellow_par;
        $course->hole_12_yellow_stroke_index = $request->hole_12_yellow_stroke_index;     
        $course->hole_12_red = $request->hole_12_red;
        $course->hole_12_red_par = $request->hole_12_red_par;
        $course->hole_12_red_stroke_index = $request->hole_12_red_stroke_index;    
        
        $course->hole_13_white = $request->hole_13_white;
        $course->hole_13_white_par = $request->hole_13_white_par;
        $course->hole_13_white_stroke_index = $request->hole_13_white_stroke_index;
        $course->hole_13_yellow = $request->hole_13_yellow;
        $course->hole_13_yellow_par = $request->hole_13_yellow_par;
        $course->hole_13_yellow_stroke_index = $request->hole_13_yellow_stroke_index;     
        $course->hole_13_red = $request->hole_13_red;
        $course->hole_13_red_par = $request->hole_13_red_par;
        $course->hole_13_red_stroke_index = $request->hole_13_red_stroke_index;   
        
        $course->hole_14_white = $request->hole_14_white;
        $course->hole_14_white_par = $request->hole_14_white_par;
        $course->hole_14_white_stroke_index = $request->hole_14_white_stroke_index;
        $course->hole_14_yellow = $request->hole_14_yellow;
        $course->hole_14_yellow_par = $request->hole_14_yellow_par;
        $course->hole_14_yellow_stroke_index = $request->hole_14_yellow_stroke_index;     
        $course->hole_14_red = $request->hole_14_red;
        $course->hole_14_red_par = $request->hole_14_red_par;
        $course->hole_14_red_stroke_index = $request->hole_14_red_stroke_index;     
        
        $course->hole_15_white = $request->hole_15_white;
        $course->hole_15_white_par = $request->hole_15_white_par;
        $course->hole_15_white_stroke_index = $request->hole_15_white_stroke_index;
        $course->hole_15_yellow = $request->hole_15_yellow;
        $course->hole_15_yellow_par = $request->hole_15_yellow_par;
        $course->hole_15_yellow_stroke_index = $request->hole_15_yellow_stroke_index;     
        $course->hole_15_red = $request->hole_15_red;
        $course->hole_15_red_par = $request->hole_15_red_par;
        $course->hole_15_red_stroke_index = $request->hole_15_red_stroke_index;    
        
        $course->hole_16_white = $request->hole_16_white;
        $course->hole_16_white_par = $request->hole_16_white_par;
        $course->hole_16_white_stroke_index = $request->hole_16_white_stroke_index;
        $course->hole_16_yellow = $request->hole_16_yellow;
        $course->hole_16_yellow_par = $request->hole_16_yellow_par;
        $course->hole_16_yellow_stroke_index = $request->hole_16_yellow_stroke_index;     
        $course->hole_16_red = $request->hole_16_red;
        $course->hole_16_red_par = $request->hole_16_red_par;
        $course->hole_16_red_stroke_index = $request->hole_16_red_stroke_index;   
        
        $course->hole_17_white = $request->hole_17_white;
        $course->hole_17_white_par = $request->hole_17_white_par;
        $course->hole_17_white_stroke_index = $request->hole_17_white_stroke_index;
        $course->hole_17_yellow = $request->hole_17_yellow;
        $course->hole_17_yellow_par = $request->hole_17_yellow_par;
        $course->hole_17_yellow_stroke_index = $request->hole_17_yellow_stroke_index;     
        $course->hole_17_red = $request->hole_17_red;
        $course->hole_17_red_par = $request->hole_17_red_par;
        $course->hole_17_red_stroke_index = $request->hole_17_red_stroke_index;   
        
        $course->hole_18_white = $request->hole_18_white;
        $course->hole_18_white_par = $request->hole_18_white_par;
        $course->hole_18_white_stroke_index = $request->hole_18_white_stroke_index;
        $course->hole_18_yellow = $request->hole_18_yellow;
        $course->hole_18_yellow_par = $request->hole_18_yellow_par;
        $course->hole_18_yellow_stroke_index = $request->hole_18_yellow_stroke_index;     
        $course->hole_18_red = $request->hole_18_red;
        $course->hole_18_red_par = $request->hole_18_red_par;
        $course->hole_18_red_stroke_index = $request->hole_18_red_stroke_index;   
        
        $course->hole_19_white = $request->hole_19_white;
        $course->hole_19_white_par = $request->hole_19_white_par;
        $course->hole_19_white_stroke_index_front = $request->hole_19_white_stroke_index_front;
        $course->hole_19_white_stroke_index_back = $request->hole_19_white_stroke_index_back;
        $course->hole_19_yellow = $request->hole_19_yellow;
        $course->hole_19_yellow_par = $request->hole_19_yellow_par;
        $course->hole_19_yellow_stroke_index_front = $request->hole_19_yellow_stroke_index_front;
        $course->hole_19_yellow_stroke_index_back = $request->hole_19_yellow_stroke_index_back;     
        $course->hole_19_red = $request->hole_19_red;
        $course->hole_19_red_par = $request->hole_19_red_par;
        $course->hole_19_red_stroke_index_front = $request->hole_19_red_stroke_index_front; 
        $course->hole_19_red_stroke_index_back = $request->hole_19_red_stroke_index_back; 
        
        $course->hole_20_white = $request->hole_20_white;
        $course->hole_20_white_par = $request->hole_20_white_par;
        $course->hole_20_white_stroke_index_front = $request->hole_20_white_stroke_index_front;
        $course->hole_20_white_stroke_index_back = $request->hole_20_white_stroke_index_back;
        $course->hole_20_yellow = $request->hole_20_yellow;
        $course->hole_20_yellow_par = $request->hole_20_yellow_par;
        $course->hole_20_yellow_stroke_index_front = $request->hole_20_yellow_stroke_index_front;
        $course->hole_20_yellow_stroke_index_back = $request->hole_20_yellow_stroke_index_back;     
        $course->hole_20_red = $request->hole_20_red;
        $course->hole_20_red_par = $request->hole_20_red_par;
        $course->hole_20_red_stroke_index_front = $request->hole_20_red_stroke_index_front; 
        $course->hole_20_red_stroke_index_back = $request->hole_20_red_stroke_index_back;   
        
        $course->hole_21_white = $request->hole_21_white;
        $course->hole_21_white_par = $request->hole_21_white_par;
        $course->hole_21_white_stroke_index_front = $request->hole_21_white_stroke_index_front;
        $course->hole_21_white_stroke_index_back = $request->hole_21_white_stroke_index_back;
        $course->hole_21_yellow = $request->hole_21_yellow;
        $course->hole_21_yellow_par = $request->hole_21_yellow_par;
        $course->hole_21_yellow_stroke_index_front = $request->hole_21_yellow_stroke_index_front;
        $course->hole_21_yellow_stroke_index_back = $request->hole_21_yellow_stroke_index_back;     
        $course->hole_21_red = $request->hole_21_red;
        $course->hole_21_red_par = $request->hole_21_red_par;
        $course->hole_21_red_stroke_index_front = $request->hole_21_red_stroke_index_front; 
        $course->hole_21_red_stroke_index_back = $request->hole_21_red_stroke_index_back;         

        $course->hole_22_white = $request->hole_22_white;
        $course->hole_22_white_par = $request->hole_22_white_par;
        $course->hole_22_white_stroke_index_front = $request->hole_22_white_stroke_index_front;
        $course->hole_22_white_stroke_index_back = $request->hole_22_white_stroke_index_back;
        $course->hole_22_yellow = $request->hole_22_yellow;
        $course->hole_22_yellow_par = $request->hole_22_yellow_par;
        $course->hole_22_yellow_stroke_index_front = $request->hole_22_yellow_stroke_index_front;
        $course->hole_22_yellow_stroke_index_back = $request->hole_22_yellow_stroke_index_back;     
        $course->hole_22_red = $request->hole_22_red;
        $course->hole_22_red_par = $request->hole_22_red_par;
        $course->hole_22_red_stroke_index_front = $request->hole_22_red_stroke_index_front; 
        $course->hole_22_red_stroke_index_back = $request->hole_22_red_stroke_index_back;  
        
        $course->hole_23_white = $request->hole_23_white;
        $course->hole_23_white_par = $request->hole_23_white_par;
        $course->hole_23_white_stroke_index_front = $request->hole_23_white_stroke_index_front;
        $course->hole_23_white_stroke_index_back = $request->hole_23_white_stroke_index_back;
        $course->hole_23_yellow = $request->hole_23_yellow;
        $course->hole_23_yellow_par = $request->hole_23_yellow_par;
        $course->hole_23_yellow_stroke_index_front = $request->hole_23_yellow_stroke_index_front;
        $course->hole_23_yellow_stroke_index_back = $request->hole_23_yellow_stroke_index_back;     
        $course->hole_23_red = $request->hole_23_red;
        $course->hole_23_red_par = $request->hole_23_red_par;
        $course->hole_23_red_stroke_index_front = $request->hole_23_red_stroke_index_front; 
        $course->hole_23_red_stroke_index_back = $request->hole_23_red_stroke_index_back;  
        
        $course->hole_24_white = $request->hole_24_white;
        $course->hole_24_white_par = $request->hole_24_white_par;
        $course->hole_24_white_stroke_index_front = $request->hole_24_white_stroke_index_front;
        $course->hole_24_white_stroke_index_back = $request->hole_24_white_stroke_index_back;
        $course->hole_24_yellow = $request->hole_24_yellow;
        $course->hole_24_yellow_par = $request->hole_24_yellow_par;
        $course->hole_24_yellow_stroke_index_front = $request->hole_24_yellow_stroke_index_front;
        $course->hole_24_yellow_stroke_index_back = $request->hole_24_yellow_stroke_index_back;     
        $course->hole_24_red = $request->hole_24_red;
        $course->hole_24_red_par = $request->hole_24_red_par;
        $course->hole_24_red_stroke_index_front = $request->hole_24_red_stroke_index_front; 
        $course->hole_24_red_stroke_index_back = $request->hole_24_red_stroke_index_back;   
        
        $course->hole_25_white = $request->hole_25_white;
        $course->hole_25_white_par = $request->hole_25_white_par;
        $course->hole_25_white_stroke_index_front = $request->hole_25_white_stroke_index_front;
        $course->hole_25_white_stroke_index_back = $request->hole_25_white_stroke_index_back;
        $course->hole_25_yellow = $request->hole_25_yellow;
        $course->hole_25_yellow_par = $request->hole_25_yellow_par;
        $course->hole_25_yellow_stroke_index_front = $request->hole_25_yellow_stroke_index_front;
        $course->hole_25_yellow_stroke_index_back = $request->hole_25_yellow_stroke_index_back;     
        $course->hole_25_red = $request->hole_25_red;
        $course->hole_25_red_par = $request->hole_25_red_par;
        $course->hole_25_red_stroke_index_front = $request->hole_25_red_stroke_index_front; 
        $course->hole_25_red_stroke_index_back = $request->hole_25_red_stroke_index_back;   
        
        $course->hole_26_white = $request->hole_26_white;
        $course->hole_26_white_par = $request->hole_26_white_par;
        $course->hole_26_white_stroke_index_front = $request->hole_26_white_stroke_index_front;
        $course->hole_26_white_stroke_index_back = $request->hole_26_white_stroke_index_back;
        $course->hole_26_yellow = $request->hole_26_yellow;
        $course->hole_26_yellow_par = $request->hole_26_yellow_par;
        $course->hole_26_yellow_stroke_index_front = $request->hole_26_yellow_stroke_index_front;
        $course->hole_26_yellow_stroke_index_back = $request->hole_26_yellow_stroke_index_back;     
        $course->hole_26_red = $request->hole_26_red;
        $course->hole_26_red_par = $request->hole_26_red_par;
        $course->hole_26_red_stroke_index_front = $request->hole_26_red_stroke_index_front; 
        $course->hole_26_red_stroke_index_back = $request->hole_26_red_stroke_index_back;  
        
        $course->hole_27_white = $request->hole_27_white;
        $course->hole_27_white_par = $request->hole_27_white_par;
        $course->hole_27_white_stroke_index_front = $request->hole_27_white_stroke_index_front;
        $course->hole_27_white_stroke_index_back = $request->hole_27_white_stroke_index_back;
        $course->hole_27_yellow = $request->hole_27_yellow;
        $course->hole_27_yellow_par = $request->hole_27_yellow_par;
        $course->hole_27_yellow_stroke_index_front = $request->hole_27_yellow_stroke_index_front;
        $course->hole_27_yellow_stroke_index_back = $request->hole_27_yellow_stroke_index_back;     
        $course->hole_27_red = $request->hole_27_red;
        $course->hole_27_red_par = $request->hole_27_red_par;
        $course->hole_27_red_stroke_index_front = $request->hole_27_red_stroke_index_front; 
        $course->hole_27_red_stroke_index_back = $request->hole_27_red_stroke_index_back;         

        $course->save();

        $course = \App\Course::find($id);

        // Display Success Message            
        //$request->session()->flash('message', 'Course has been updated.');
        //$request->session()->flash('message-type', 'success');        

        return view('view_course',compact('course', 'id'))->with('success','Course has been updated');  
        
        //return response()->json('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = \App\Course::find($id);
        $course->delete();
        return redirect('course_list')->with('success','Course has been deleted');        
    }
}
