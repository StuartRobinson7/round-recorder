<?php

namespace App\Http\Controllers;

use App\Course;
use App\Queries\GetCourseInfo;
use App\Queries\GetCourseTotals;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Auth\RegistersUsers;

class GetCourseController extends Controller
{

    /**
     * Set variables for queries 
     */
    protected $GetCourseTotals;
    protected $GetCourseInfo;
 
    public function __construct(GetCourseTotals $GetCourseTotals, GetCourseInfo $GetCourseInfo) {
        $this->GetCourseTotals = $GetCourseTotals;
        $this->GetCourseInfo = $GetCourseInfo;
    }   


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
        
        $course_info = $this->GetCourseInfo->courseInfo($selected_id); 

        $view = view('/ajax_course_nines', ['course_info' => $course_info, 'selected_size' => $selected_size])->render();

        $view = trim(preg_replace('/\r\n/', ' ', $view));                

        return response()->json($view);

    }    


    public function GetCourseId(Request $request){ 

        $selected_id = $request->selected_course_id;

        $selected_yards = $request->selected_yards;

        $selected_size = $request->selected_size;

        $selected_nine = $request->selected_nine;

        $selected_stats = $request->selected_stats;

        $course_data = $this->GetCourseInfo->courseInfo($selected_id);

        $course_totals = $this->GetCourseTotals->courseTotals($selected_id);

        $view = view('/ajax_getcourse', ['course_data' => $course_data, 'course_totals' => $course_totals, 'selected_yards' => $selected_yards, 'selected_size' => $selected_size, 'selected_nine' => $selected_nine, 'selected_stats' => $selected_stats])->render(); 

        $view = trim(preg_replace('/\r\n/', ' ', $view));                

        return response()->json($view);

    }

    public function GetCourseYards(Request $request){ 

        $selected_id = $request->selected_course_id;
        $selected_yards = $request->selected_yards;
        $selected_nine = $request->selected_nine;
        $selected_stats = $request->selected_stats;

        $view = view('/ajax_getcourse', ['selected_yards' => $selected_yards, 'selected_nine' => $selected_nine, 'selected_stats' => $selected_stats])->render(); 

        $view = trim(preg_replace('/\r\n/', ' ', $view));                

        return response()->json($view);

    }   
    
    public function GetCourseStats(Request $request){ 

        $selected_yards = $request->selected_yards;
        $selected_nine = $request->selected_nine;
        $selected_stats = $request->selected_stats;

        $view = view('/ajax_getcourse', ['selected_yards' => $selected_yards, 'selected_nine' => $selected_nine, 'selected_stats' => $selected_stats])->render(); 

        $view = trim(preg_replace('/\r\n/', ' ', $view));                

        return response()->json($view);

    }       


    public function GetCourseHoles(Request $request){

        $selected_size = $request->selected_holes;

        $view = view('/ajax_getholes', compact('selected_size'))->render();

        $view = trim(preg_replace('/\r\n/', ' ', $view));              

        return response()->json($view);

    } 
    
    public function GetCourseHolesEdit(Request $request){

        $course_id = $request->course_id;

        $selected_size = $request->selected_holes;

        $course_info = $this->GetCourseInfo->courseInfo($course_id);

        $view = view('/ajax_edit_holes', compact('selected_size', 'course_info'))->render();

        $view = trim(preg_replace('/\r\n/', ' ', $view)); 

        return response()->json($view);

    }     

}
