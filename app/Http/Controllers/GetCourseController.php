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

        $course_totals = Course::where('id', $selected_id)
            ->selectRaw("SUM(hole_1_white + hole_2_white + hole_3_white + hole_4_white + hole_5_white + hole_6_white + hole_7_white + hole_8_white + hole_9_white) as first_nine_white")
            ->selectRaw("SUM(hole_1_yellow + hole_2_yellow + hole_3_yellow + hole_4_yellow + hole_5_yellow + hole_6_yellow + hole_7_yellow + hole_8_yellow + hole_9_yellow) as first_nine_yellow")
            ->selectRaw("SUM(hole_1_red + hole_2_red + hole_3_red + hole_4_red + hole_5_red + hole_6_red + hole_7_red + hole_8_red + hole_9_red) as first_nine_red") 
            ->selectRaw("SUM(hole_1_white_par + hole_2_white_par + hole_3_white_par + hole_4_white_par + hole_5_white_par + hole_6_white_par + hole_7_white_par + hole_8_white_par + hole_9_white_par) as first_nine_white_par")
            ->selectRaw("SUM(hole_1_yellow_par + hole_2_yellow_par + hole_3_yellow_par + hole_4_yellow_par + hole_5_yellow_par + hole_6_yellow_par + hole_7_yellow_par + hole_8_yellow_par + hole_9_yellow_par) as first_nine_yellow_par")
            ->selectRaw("SUM(hole_1_red_par + hole_2_red_par + hole_3_red_par + hole_4_red_par + hole_5_red_par + hole_6_red_par + hole_7_red_par + hole_8_red_par + hole_9_red_par) as first_nine_red_par")  
            
            ->selectRaw("SUM(hole_10_white + hole_11_white + hole_12_white + hole_13_white + hole_14_white + hole_15_white + hole_16_white + hole_17_white + hole_18_white) as second_nine_white")
            ->selectRaw("SUM(hole_10_yellow + hole_11_yellow + hole_12_yellow + hole_13_yellow + hole_14_yellow + hole_15_yellow + hole_16_yellow + hole_17_yellow + hole_18_yellow) as second_nine_yellow")
            ->selectRaw("SUM(hole_10_red + hole_11_red + hole_12_red + hole_13_red + hole_14_red + hole_15_red + hole_16_red + hole_17_red + hole_18_red) as second_nine_red") 
            ->selectRaw("SUM(hole_10_white_par + hole_11_white_par + hole_12_white_par + hole_13_white_par + hole_14_white_par + hole_15_white_par + hole_16_white_par + hole_17_white_par + hole_18_white_par) as second_nine_white_par")
            ->selectRaw("SUM(hole_10_yellow_par + hole_11_yellow_par + hole_12_yellow_par + hole_13_yellow_par + hole_14_yellow_par + hole_15_yellow_par + hole_16_yellow_par + hole_17_yellow_par + hole_18_yellow_par) as second_nine_yellow_par")
            ->selectRaw("SUM(hole_10_red_par + hole_11_red_par + hole_12_red_par + hole_13_red_par + hole_14_red_par + hole_15_red_par + hole_16_red_par + hole_17_red_par + hole_18_red_par) as second_nine_red_par")             

            ->first();

        //$first_nine_yellow = intval($first_nine_yellow);
        //$first_nine_white = str_replace(array('[', ']'), '' , $first_nine_white);
        //$first_nine_white = str_replace(array('[', ']'), '' , $first_nine_yellow);
        //$first_nine_white = str_replace(array('[', ']'), '' , $first_nine_red);

        $view = view('/ajax_getcourse', ['course_data' => $course_data, 'course_totals' => $course_totals, 'selected_yards' => $selected_yards, 'selected_size' => $selected_size, 'selected_nine' => $selected_nine])->render(); 

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
