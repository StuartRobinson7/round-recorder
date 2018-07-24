<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class CourseController extends Controller

{

    /*
    |--------------------------------------------------------------------------
    | Course Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the adding of courses to the database
    |
    */

    // show add course form
    public function showAddCourseForm()
    {
        return view('add_course');
    }   
         

    // add course
    public function saveCourses(Request $request , $id)
    {     

        $validator = Validator::make($request->all(), [      
            'property_name' => 'required|string',
            'course_name' => 'required|string',
            'hole_1_par' => 'required|integer|max:5|min:3',
            'hole_2_par' => 'required|integer|max:5|min:3',
            'hole_3_par' => 'required|integer|max:5|min:3',
            'hole_4_par' => 'required|integer|max:5|min:3',
            'hole_5_par' => 'required|integer|max:5|min:3',
            'hole_6_par' => 'required|integer|max:5|min:3',
            'hole_7_par' => 'required|integer|max:5|min:3',
            'hole_8_par' => 'required|integer|max:5|min:3',
            'hole_9_par' => 'required|integer|max:5|min:3',
            'hole_10_par' => 'required|integer|max:5|min:3',
            'hole_11_par' => 'required|integer|max:5|min:3',
            'hole_12_par' => 'required|integer|max:5|min:3',
            'hole_13_par' => 'required|integer|max:5|min:3',
            'hole_14_par' => 'required|integer|max:5|min:3',
            'hole_15_par' => 'required|integer|max:5|min:3',
            'hole_16_par' => 'required|integer|max:5|min:3',
            'hole_17_par' => 'required|integer|max:5|min:3',
            'hole_18_par' => 'required|integer|max:5|min:3',
            'hole_1_stroke_index' => 'required|integer|max:18|min:1',
            'hole_2_stroke_index' => 'required|integer|max:18|min:1',
            'hole_3_stroke_index' => 'required|integer|max:18|min:1',
            'hole_4_stroke_index' => 'required|integer|max:18|min:1',
            'hole_5_stroke_index' => 'required|integer|max:18|min:1',
            'hole_6_stroke_index' => 'required|integer|max:18|min:1',
            'hole_7_stroke_index' => 'required|integer|max:18|min:1',
            'hole_8_stroke_index' => 'required|integer|max:18|min:1',
            'hole_9_stroke_index' => 'required|integer|max:18|min:1',
            'hole_10_stroke_index' => 'required|integer|max:18|min:1',
            'hole_11_stroke_index' => 'required|integer|max:18|min:1',
            'hole_12_stroke_index' => 'required|integer|max:18|min:1',
            'hole_13_stroke_index' => 'required|integer|max:18|min:1',
            'hole_14_stroke_index' => 'required|integer|max:18|min:1',
            'hole_15_stroke_index' => 'required|integer|max:18|min:1',
            'hole_16_stroke_index' => 'required|integer|max:18|min:1',
            'hole_17_stroke_index' => 'required|integer|max:18|min:1',
            'hole_18_stroke_index' => 'required|integer|max:18|min:1'           
        ]);

        if ($validator->fails()) {
            return redirect('add_course')
                        ->withErrors($validator)
                        ->withInput();
        } 

        $course = Course::create($request->all());

        return redirect()->route('profile');
    }

    // create array to add course
    protected function create(array $data)
    {     
        
        return Course::create([

                'property_name' => $data['property_name'],
                'course_name' => $data['course_name'],
                'sss' => $data['sss'],
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


    // show edit course form with course to edit
    public function editCourse($id)
    {        
        $course = \App\Course::find($id);
        return view('edit_course',compact('course','id'));
    } 
    
    // update course
    public function updateCourse(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [      
            'property_name' => 'required|string',
            'course_name' => 'required|string',
            'hole_1_par' => 'required|integer|max:5|min:3',
            'hole_2_par' => 'required|integer|max:5|min:3',
            'hole_3_par' => 'required|integer|max:5|min:3',
            'hole_4_par' => 'required|integer|max:5|min:3',
            'hole_5_par' => 'required|integer|max:5|min:3',
            'hole_6_par' => 'required|integer|max:5|min:3',
            'hole_7_par' => 'required|integer|max:5|min:3',
            'hole_8_par' => 'required|integer|max:5|min:3',
            'hole_9_par' => 'required|integer|max:5|min:3',
            'hole_10_par' => 'required|integer|max:5|min:3',
            'hole_11_par' => 'required|integer|max:5|min:3',
            'hole_12_par' => 'required|integer|max:5|min:3',
            'hole_13_par' => 'required|integer|max:5|min:3',
            'hole_14_par' => 'required|integer|max:5|min:3',
            'hole_15_par' => 'required|integer|max:5|min:3',
            'hole_16_par' => 'required|integer|max:5|min:3',
            'hole_17_par' => 'required|integer|max:5|min:3',
            'hole_18_par' => 'required|integer|max:5|min:3',
            'hole_1_stroke_index' => 'required|integer|max:18|min:1',
            'hole_2_stroke_index' => 'required|integer|max:18|min:1',
            'hole_3_stroke_index' => 'required|integer|max:18|min:1',
            'hole_4_stroke_index' => 'required|integer|max:18|min:1',
            'hole_5_stroke_index' => 'required|integer|max:18|min:1',
            'hole_6_stroke_index' => 'required|integer|max:18|min:1',
            'hole_7_stroke_index' => 'required|integer|max:18|min:1',
            'hole_8_stroke_index' => 'required|integer|max:18|min:1',
            'hole_9_stroke_index' => 'required|integer|max:18|min:1',
            'hole_10_stroke_index' => 'required|integer|max:18|min:1',
            'hole_11_stroke_index' => 'required|integer|max:18|min:1',
            'hole_12_stroke_index' => 'required|integer|max:18|min:1',
            'hole_13_stroke_index' => 'required|integer|max:18|min:1',
            'hole_14_stroke_index' => 'required|integer|max:18|min:1',
            'hole_15_stroke_index' => 'required|integer|max:18|min:1',
            'hole_16_stroke_index' => 'required|integer|max:18|min:1',
            'hole_17_stroke_index' => 'required|integer|max:18|min:1',
            'hole_18_stroke_index' => 'required|integer|max:18|min:1'           
        ]);

        if ($validator->fails()) {
            return redirect('add_course')
                        ->withErrors($validator)
                        ->withInput();
        } 

        $course = \App\Course::find($id);

        $course->property_name = $request->property_name;
        $course->course_name = $request->course_name;
        $course->sss = $request->sss;

        $course->hole_1_par = $request->hole_1_par;
        $course->hole_1_stroke_index = $request->hole_1_stroke_index;
        $course->hole_1_whites = $request->hole_1_whites;
        $course->hole_1_yellows = $request->hole_1_yellows;
        $course->hole_1_reds = $request->hole_1_reds;
        $course->hole_1_ladies_par = $request->hole_1_ladies_par;
        $course->hole_1_ladies_stroke_index = $request->hole_1_ladies_stroke_index;

        $course->hole_2_par = $request->hole_2_par;
        $course->hole_2_stroke_index = $request->hole_2_stroke_index;
        $course->hole_2_whites = $request->hole_2_whites;
        $course->hole_2_yellows = $request->hole_2_yellows;
        $course->hole_2_reds = $request->hole_2_reds;
        $course->hole_2_ladies_par = $request->hole_2_ladies_par;
        $course->hole_2_ladies_stroke_index = $request->hole_2_ladies_stroke_index; 
        
        $course->hole_3_par = $request->hole_3_par;
        $course->hole_3_stroke_index = $request->hole_3_stroke_index;
        $course->hole_3_whites = $request->hole_3_whites;
        $course->hole_3_yellows = $request->hole_3_yellows;
        $course->hole_3_reds = $request->hole_3_reds;
        $course->hole_3_ladies_par = $request->hole_3_ladies_par;
        $course->hole_3_ladies_stroke_index = $request->hole_3_ladies_stroke_index;        

        $course->hole_4_par = $request->hole_4_par;
        $course->hole_4_stroke_index = $request->hole_4_stroke_index;
        $course->hole_4_whites = $request->hole_4_whites;
        $course->hole_4_yellows = $request->hole_4_yellows;
        $course->hole_4_reds = $request->hole_4_reds;
        $course->hole_4_ladies_par = $request->hole_4_ladies_par;
        $course->hole_4_ladies_stroke_index = $request->hole_4_ladies_stroke_index;

        $course->hole_5_par = $request->hole_5_par;
        $course->hole_5_stroke_index = $request->hole_5_stroke_index;
        $course->hole_5_whites = $request->hole_5_whites;
        $course->hole_5_yellows = $request->hole_5_yellows;
        $course->hole_5_reds = $request->hole_5_reds;
        $course->hole_5_ladies_par = $request->hole_5_ladies_par;
        $course->hole_5_ladies_stroke_index = $request->hole_5_ladies_stroke_index;        

        $course->hole_6_par = $request->hole_6_par;
        $course->hole_6_stroke_index = $request->hole_6_stroke_index;
        $course->hole_6_whites = $request->hole_6_whites;
        $course->hole_6_yellows = $request->hole_6_yellows;
        $course->hole_6_reds = $request->hole_6_reds;
        $course->hole_6_ladies_par = $request->hole_6_ladies_par;
        $course->hole_6_ladies_stroke_index = $request->hole_6_ladies_stroke_index;        

        $course->hole_7_par = $request->hole_7_par;
        $course->hole_7_stroke_index = $request->hole_7_stroke_index;
        $course->hole_7_whites = $request->hole_7_whites;
        $course->hole_7_yellows = $request->hole_7_yellows;
        $course->hole_7_reds = $request->hole_7_reds;
        $course->hole_7_ladies_par = $request->hole_7_ladies_par;
        $course->hole_7_ladies_stroke_index = $request->hole_7_ladies_stroke_index;        

        $course->hole_8_par = $request->hole_8_par;
        $course->hole_8_stroke_index = $request->hole_8_stroke_index;
        $course->hole_8_whites = $request->hole_8_whites;
        $course->hole_8_yellows = $request->hole_8_yellows;
        $course->hole_8_reds = $request->hole_8_reds;
        $course->hole_8_ladies_par = $request->hole_8_ladies_par;
        $course->hole_8_ladies_stroke_index = $request->hole_8_ladies_stroke_index;        

        $course->hole_9_par = $request->hole_9_par;
        $course->hole_9_stroke_index = $request->hole_9_stroke_index;
        $course->hole_9_whites = $request->hole_9_whites;
        $course->hole_9_yellows = $request->hole_9_yellows;
        $course->hole_9_reds = $request->hole_9_reds;
        $course->hole_9_ladies_par = $request->hole_9_ladies_par;
        $course->hole_9_ladies_stroke_index = $request->hole_9_ladies_stroke_index;        

        $course->hole_10_par = $request->hole_10_par;
        $course->hole_10_stroke_index = $request->hole_10_stroke_index;
        $course->hole_10_whites = $request->hole_10_whites;
        $course->hole_10_yellows = $request->hole_10_yellows;
        $course->hole_10_reds = $request->hole_10_reds;
        $course->hole_10_ladies_par = $request->hole_10_ladies_par;
        $course->hole_10_ladies_stroke_index = $request->hole_10_ladies_stroke_index;        

        $course->hole_11_par = $request->hole_11_par;
        $course->hole_11_stroke_index = $request->hole_11_stroke_index;
        $course->hole_11_whites = $request->hole_11_whites;
        $course->hole_11_yellows = $request->hole_11_yellows;
        $course->hole_11_reds = $request->hole_11_reds;
        $course->hole_11_ladies_par = $request->hole_11_ladies_par;
        $course->hole_11_ladies_stroke_index = $request->hole_11_ladies_stroke_index;  
        
        $course->hole_12_par = $request->hole_12_par;
        $course->hole_12_stroke_index = $request->hole_12_stroke_index;
        $course->hole_12_whites = $request->hole_12_whites;
        $course->hole_12_yellows = $request->hole_12_yellows;
        $course->hole_12_reds = $request->hole_12_reds;
        $course->hole_12_ladies_par = $request->hole_12_ladies_par;
        $course->hole_12_ladies_stroke_index = $request->hole_12_ladies_stroke_index;       
        
        $course->hole_13_par = $request->hole_13_par;
        $course->hole_13_stroke_index = $request->hole_13_stroke_index;
        $course->hole_13_whites = $request->hole_13_whites;
        $course->hole_13_yellows = $request->hole_13_yellows;
        $course->hole_13_reds = $request->hole_13_reds;
        $course->hole_13_ladies_par = $request->hole_13_ladies_par;
        $course->hole_13_ladies_stroke_index = $request->hole_13_ladies_stroke_index;         

        $course->hole_14_par = $request->hole_14_par;
        $course->hole_14_stroke_index = $request->hole_14_stroke_index;
        $course->hole_14_whites = $request->hole_14_whites;
        $course->hole_14_yellows = $request->hole_14_yellows;
        $course->hole_14_reds = $request->hole_14_reds;
        $course->hole_14_ladies_par = $request->hole_14_ladies_par;
        $course->hole_14_ladies_stroke_index = $request->hole_14_ladies_stroke_index;         

        $course->hole_15_par = $request->hole_15_par;
        $course->hole_15_stroke_index = $request->hole_15_stroke_index;
        $course->hole_15_whites = $request->hole_15_whites;
        $course->hole_15_yellows = $request->hole_15_yellows;
        $course->hole_15_reds = $request->hole_15_reds;
        $course->hole_15_ladies_par = $request->hole_15_ladies_par;
        $course->hole_15_ladies_stroke_index = $request->hole_15_ladies_stroke_index;         

        $course->hole_16_par = $request->hole_16_par;
        $course->hole_16_stroke_index = $request->hole_16_stroke_index;
        $course->hole_16_whites = $request->hole_16_whites;
        $course->hole_16_yellows = $request->hole_16_yellows;
        $course->hole_16_reds = $request->hole_16_reds;
        $course->hole_16_ladies_par = $request->hole_16_ladies_par;
        $course->hole_16_ladies_stroke_index = $request->hole_16_ladies_stroke_index;         

        $course->hole_17_par = $request->hole_17_par;
        $course->hole_17_stroke_index = $request->hole_17_stroke_index;
        $course->hole_17_whites = $request->hole_17_whites;
        $course->hole_17_yellows = $request->hole_17_yellows;
        $course->hole_17_reds = $request->hole_17_reds;
        $course->hole_17_ladies_par = $request->hole_17_ladies_par;
        $course->hole_17_ladies_stroke_index = $request->hole_17_ladies_stroke_index;         

        $course->hole_18_par = $request->hole_18_par;
        $course->hole_18_stroke_index = $request->hole_18_stroke_index;
        $course->hole_18_whites = $request->hole_18_whites;
        $course->hole_18_yellows = $request->hole_18_yellows;
        $course->hole_18_reds = $request->hole_18_reds;
        $course->hole_18_ladies_par = $request->hole_18_ladies_par;
        $course->hole_18_ladies_stroke_index = $request->hole_18_ladies_stroke_index;         

        $course->save();
        return redirect('course_list')->with('success','Course has now been updated');
    }     
    

    // delete course
    public function destroyCourse($id)
    {
        $course = \App\Course::find($id);
        $course->delete();
        return redirect('course_list')->with('success','Course has been deleted');
    }             

}
