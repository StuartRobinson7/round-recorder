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
        //$id = Input::get('id');
        //$course_id = Course::find($id);
        //return view('add_round', compact('course_id'));
            

        $selected_id = $request->selected_course_id;

        $course_data = Course::where('id', $selected_id)->get();

        $view = view('/ajax_getcourse', ['course_data' => $course_data])->render();

        $view = trim(preg_replace('/\r\n/', ' ', $view));

        //$view = trim(preg_replace("#\\#", ' ', $view));

        //return response()->json($selected_id);

        //return response($course_data);
        //return response()->json($course_data);

        return response()->json($view);

        //$course_data = Course::where('id', $selected_id)->first();
        //$course_data = DB::table('courses')->first();
        //return this->$course_data[0]->

    }
}
