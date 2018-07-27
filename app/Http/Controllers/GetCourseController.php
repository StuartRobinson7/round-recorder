<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Auth\RegistersUsers;

class GetCourseController extends Controller
{

    public function GetCourseId(Request $request){

        $selected_id = $request->selected_course_id;

        $selected_yards = $request->selected_yards;

        $course_data = Course::where('id', $selected_id)->get();

        $view = view('/ajax_getcourse', ['course_data' => $course_data, 'selected_yards' => $selected_yards])->render();

        $view = trim(preg_replace('/\r\n/', ' ', $view));                

        return response()->json($view);

    }
}
