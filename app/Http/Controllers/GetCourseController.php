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

        $first_nine_white = Course::where('id', $selected_id)
            ->selectRaw("SUM(hole_1_white + hole_2_white + hole_3_white + hole_4_white + hole_5_white + hole_6_white + hole_7_white + hole_8_white + hole_9_white) as first_nine_white")
            ->pluck('first_nine_white');

        $first_nine_yellow = Course::where('id', $selected_id)   
            ->selectRaw("SUM(hole_1_yellow + hole_2_yellow + hole_3_yellow + hole_4_yellow + hole_5_yellow + hole_6_yellow + hole_7_yellow + hole_8_yellow + hole_9_yellow) as first_nine_yellow")
            ->pluck('first_nine_yellow');

        $first_nine_red = Course::where('id', $selected_id)   
            ->selectRaw("SUM(hole_1_red + hole_2_red + hole_3_red + hole_4_red + hole_5_red + hole_6_red + hole_7_red + hole_8_red + hole_9_red) as first_nine_red") 
            ->pluck('first_nine_red');

            //->selectRaw("SUM(hole_1_white_par + hole_2_white_par + hole_3_white_par + hole_4_white_par + hole_5_white_par + hole_6_white_par + hole_7_white_par + hole_8_white_par + hole_9_white_par) as first_nine_white_par")
            //->selectRaw("SUM(hole_1_yellow_par + hole_2_yellow_par + hole_3_yellow_par + hole_4_yellow_par + hole_5_yellow_par + hole_6_yellow_par + hole_7_yellow_par + hole_8_yellow_par + hole_9_yellow_par) as first_nine_yellow_par")
            //->selectRaw("SUM(hole_1_red_par + hole_2_red_par + hole_3_red_par + hole_4_red_par + hole_5_red_par + hole_6_red_par + hole_7_red_par + hole_8_red_par + hole_9_red_par) as first_nine_red_par")        
        
        //$first_nine_yellow = intval($first_nine_yellow);


        //$first_nine_white = str_replace(array('[', ']'), '' , $first_nine_white);
        //$first_nine_white = str_replace(array('[', ']'), '' , $first_nine_yellow);
        //$first_nine_white = str_replace(array('[', ']'), '' , $first_nine_red);

        $view = view('/ajax_getcourse', ['course_data' => $course_data, 'first_nine_white' => $first_nine_white, 'first_nine_yellow' => $first_nine_yellow, 'first_nine_red' => $first_nine_red, 'selected_yards' => $selected_yards, 'selected_size' => $selected_size, 'selected_nine' => $selected_nine])->render(); 

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
