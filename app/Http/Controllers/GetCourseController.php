<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Auth\RegistersUsers;

class GetCourseController extends Controller
{

    public function GetCourseList(Request $request){

        $selected_size = $request->selected_size;

        if($selected_size === 'half'){

            $course = Course::all();

        }

        elseif($selected_size === 'full'){

            $course = Course::where('holes', 18)->orWhere('holes', 27)->get();

        }       

        $view = view('/ajax_course_list', ['course' => $course])->render();

        $view = trim(preg_replace('/\r\n/', ' ', $view));                

        return response()->json($view);

    }

    public function GetCourseNines(Request $request){

        $selected_id = $request->selected_course_id;

        $selected_size = $request->selected_size;
        
        $course_info = Course::where('id', $selected_id)->first(); 

        $view = view('/ajax_course_nines', ['course_info' => $course_info, 'selected_size' => $selected_size])->render();

        $view = trim(preg_replace('/\r\n/', ' ', $view));                

        return response()->json($view);

    }    


    public function GetCourseId(Request $request){ 

        $selected_id = $request->selected_course_id;

        $selected_yards = $request->selected_yards;

        $selected_size = $request->selected_size;

        $selected_nine = $request->selected_nine;

        $course_data = Course::where('id', $selected_id)->get();

        $view = view('/ajax_getcourse', ['course_data' => $course_data, 'selected_yards' => $selected_yards, 'selected_size' => $selected_size, 'selected_nine' => $selected_nine])->render(); 

        $view = trim(preg_replace('/\r\n/', ' ', $view));                

        return response()->json($view);

    }

    public function GetCourseYards(Request $request){ 

        $selected_yards = $request->selected_yards;

        $view = view('/ajax_getcourse', ['selected_yards' => $selected_yards])->render(); 

        $view = trim(preg_replace('/\r\n/', ' ', $view));                

        return response()->json($view);

    }    


    public function GetCourseHoles(Request $request){

        $requested_holes = $request->selected_holes;

        if($requested_holes === '9'){
            $view = view('/ajax_9_holes')->render();
            $view = trim(preg_replace('/\r\n/', ' ', $view));
        }

        elseif($requested_holes === '18'){
            $view = view('/ajax_18_holes')->render();
            $view = trim(preg_replace('/\r\n/', ' ', $view));
        }  

        elseif($requested_holes === '27'){
            $view = view('/ajax_27_holes')->render();
            $view = trim(preg_replace('/\r\n/', ' ', $view));
        } 

        else{
            $view = view('/ajax_18_holes')->render();
            $view = trim(preg_replace('/\r\n/', ' ', $view));
        }
               

        return response()->json($view);

    }    

}
