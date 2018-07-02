<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Auth\RegistersUsers;

class CourseController extends Controller

{


    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/add_course';

    public function showAddCourseForm()
    {
        return view('add_course');
    }      


    public function saveCourses(Request $request)
    {     
    $course = Course::create($request->all());
    return redirect()->route('profile');
    }


    protected function create(array $data)
    {     
        
        return Course::create([

                'property_name' => $data['property_name'],
                'course_name' => $data['course_name'],
                'course_rating' => $data['course_rating'],
                'course_slope' => $data['property_name'],
                'hole_1_par' => $data['hole_1_par'],
                'hole_1_stroke_index' => $data['hole_1_stroke_index'],
                'hole_1_whites' => $data['hole_1_whites'],
                'hole_1_yellows' => $data['hole_1_yellows'],
                'hole_1_reds' => $data['hole_1_reds'],
                'hole_1_ladies_par' => $data['hole_1_ladies_par'],
                'hole_1_ladies_stroke_index' => $data['hole_1_ladies_stroke_index'],             
                'hole_2_par' => $data['hole_2_par'],
                'hole_2_stroke_index' => $data['hole_2_stroke_index'],
                'hole_2_whites' => $data['hole_2_whites'],
                'hole_2_yellows' => $data['hole_2_yellows'],
                'hole_2_reds' => $data['hole_2_reds'],
                'hole_2_ladies_par' => $data['hole_2_ladies_par'],
                'hole_2_ladies_stroke_index' => $data['hole_2_ladies_stroke_index'],             
                'hole_3_par' => $data['hole_3_par'],
                'hole_3_stroke_index' => $data['hole_3_stroke_index'],
                'hole_3_whites' => $data['hole_3_whites'],
                'hole_3_yellows' => $data['hole_3_yellows'],
                'hole_3_reds' => $data['hole_3_reds'],
                'hole_3_ladies_par' => $data['hole_3_ladies_par'],
                'hole_3_ladies_stroke_index' => $data['hole_3_ladies_stroke_index'],              
                'hole_4_par' => $data['hole_4_par'],
                'hole_4_stroke_index' => $data['hole_4_stroke_index'],
                'hole_4_whites' => $data['hole_4_whites'],
                'hole_4_yellows' => $data['hole_4_yellows'],
                'hole_4_reds' => $data['hole_4_reds'],
                'hole_4_ladies_par' => $data['hole_4_ladies_par'],
                'hole_4_ladies_stroke_index' => $data['hole_4_ladies_stroke_index'],             
                'hole_5_par' => $data['hole_5_par'],
                'hole_5_stroke_index' => $data['hole_5_stroke_index'],
                'hole_5_whites' => $data['hole_5_whites'],
                'hole_5_yellows' => $data['hole_5_yellows'],
                'hole_5_reds' => $data['hole_5_reds'],
                'hole_5_ladies_par' => $data['hole_5_ladies_par'],
                'hole_5_ladies_stroke_index' => $data['hole_5_ladies_stroke_index'],             
                'hole_6_par' => $data['hole_6_par'],
                'hole_6_stroke_index' => $data['hole_6_stroke_index'],
                'hole_6_whites' => $data['hole_6_whites'],
                'hole_6_yellows' => $data['hole_6_yellows'],
                'hole_6_reds' => $data['hole_6_reds'],
                'hole_6_ladies_par' => $data['hole_6_ladies_par'],
                'hole_6_ladies_stroke_index' => $data['hole_6_ladies_stroke_index'],              
                'hole_7_par' => $data['hole_7_par'],
                'hole_7_stroke_index' => $data['hole_7_stroke_index'],
                'hole_7_whites' => $data['hole_7_whites'],
                'hole_7_yellows' => $data['hole_7_yellows'],
                'hole_7_reds' => $data['hole_7_reds'],
                'hole_7_ladies_par' => $data['hole_7_ladies_par'],
                'hole_7_ladies_stroke_index' => $data['hole_7_ladies_stroke_index'],              
                'hole_8_par' => $data['hole_8_par'],
                'hole_8_stroke_index' => $data['hole_8_stroke_index'],
                'hole_8_whites' => $data['hole_8_whites'],
                'hole_8_yellows' => $data['hole_8_yellows'],
                'hole_8_reds' => $data['hole_8_reds'],
                'hole_8_ladies_par' => $data['hole_8_ladies_par'],
                'hole_8_ladies_stroke_index' => $data['hole_8_ladies_stroke_index'],             
                'hole_9_par' => $data['hole_9_par'],
                'hole_9_stroke_index' => $data['hole_9_stroke_index'],
                'hole_9_whites' => $data['hole_9_whites'],
                'hole_9_yellows' => $data['hole_9_yellows'],
                'hole_9_reds' => $data['hole_9_reds'],
                'hole_9_ladies_par' => $data['hole_9_ladies_par'],
                'hole_9_ladies_stroke_index' => $data['hole_9_ladies_stroke_index'],              
                'hole_10_par' => $data['hole_10_par'],
                'hole_10_stroke_index' => $data['hole_10_stroke_index'],
                'hole_10_whites' => $data['hole_10_whites'],
                'hole_10_yellows' => $data['hole_10_yellows'],
                'hole_10_reds' => $data['hole_10_reds'],
                'hole_10_ladies_par' => $data['hole_10_ladies_par'],
                'hole_10_ladies_stroke_index' => $data['hole_10_ladies_stroke_index'],              
                'hole_11_par' => $data['hole_11_par'],
                'hole_11_stroke_index' => $data['hole_11_stroke_index'],
                'hole_11_whites' => $data['hole_11_whites'],
                'hole_11_yellows' => $data['hole_11_yellows'],
                'hole_11_reds' => $data['hole_11_reds'],
                'hole_11_ladies_par' => $data['hole_11_ladies_par'],
                'hole_11_ladies_stroke_index' => $data['hole_11_ladies_stroke_index'],              
                'hole_12_par' => $data['hole_12_par'],
                'hole_12_stroke_index' => $data['hole_12_stroke_index'],
                'hole_12_whites' => $data['hole_12_whites'],
                'hole_12_yellows' => $data['hole_12_yellows'],
                'hole_12_reds' => $data['hole_12_reds'],
                'hole_12_ladies_par' => $data['hole_12_ladies_par'],
                'hole_12_ladies_stroke_index' => $data['hole_12_ladies_stroke_index'],             
                'hole_13_par' => $data['hole_13_par'],
                'hole_13_stroke_index' => $data['hole_13_stroke_index'],
                'hole_13_whites' => $data['hole_13_whites'],
                'hole_13_yellows' => $data['hole_13_yellows'],
                'hole_13_reds' => $data['hole_13_reds'],
                'hole_13_ladies_par' => $data['hole_13_ladies_par'],
                'hole_13_ladies_stroke_index' => $data['hole_13_ladies_stroke_index'],              
                'hole_14_par' => $data['hole_14_par'],
                'hole_14_stroke_index' => $data['hole_14_stroke_index'],
                'hole_14_whites' => $data['hole_14_whites'],
                'hole_14_yellows' => $data['hole_14_yellows'],
                'hole_14_reds' => $data['hole_14_reds'],
                'hole_14_ladies_par' => $data['hole_14_ladies_par'],
                'hole_14_ladies_stroke_index' => $data['hole_14_ladies_stroke_index'],              
                'hole_15_par' => $data['hole_15_par'],
                'hole_15_stroke_index' => $data['hole_15_stroke_index'],
                'hole_15_whites' => $data['hole_15_whites'],
                'hole_15_yellows' => $data['hole_15_yellows'],
                'hole_15_reds' => $data['hole_15_reds'],
                'hole_15_ladies_par' => $data['hole_15_ladies_par'],
                'hole_15_ladies_stroke_index' => $data['hole_15_ladies_stroke_index'],              
                'hole_16_par' => $data['hole_16_par'],
                'hole_16_stroke_index' => $data['hole_16_stroke_index'],
                'hole_16_whites' => $data['hole_16_whites'],
                'hole_16_yellows' => $data['hole_16_yellows'],
                'hole_16_reds' => $data['hole_16_reds'],
                'hole_16_ladies_par' => $data['hole_16_ladies_par'],
                'hole_16_ladies_stroke_index' => $data['hole_16_ladies_stroke_index'],             
                'hole_17_par' => $data['hole_17_par'],
                'hole_17_stroke_index' => $data['hole_17_stroke_index'],
                'hole_17_whites' => $data['hole_17_whites'],
                'hole_17_yellows' => $data['hole_17_yellows'],
                'hole_17_reds' => $data['hole_17_reds'],
                'hole_17_ladies_par' => $data['hole_17_ladies_par'],
                'hole_17_ladies_stroke_index' => $data['hole_17_ladies_stroke_index'],              
                'hole_18_par' => $data['hole_18_par'],
                'hole_18_stroke_index' => $data['hole_18_stroke_index'],
                'hole_18_whites' => $data['hole_18_whites'],
                'hole_18_yellows' => $data['hole_18_yellows'],
                'hole_18_reds' => $data['hole_18_reds'],
                'hole_18_ladies_par' => $data['hole_18_ladies_par'],
                'hole_18_ladies_stroke_index' => $data['hole_18_ladies_stroke_index'],
        ]);
        
       
    }    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }               

}
