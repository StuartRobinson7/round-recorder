<?php

namespace App\Http\Controllers;

use App\Course;
//use Illuminate\Support\Facades\DB;
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

        $view = view('/ajax_getcourse', compact('course_data'))->render();

        //return response()->json($selected_id);

        return response()->json($course_data);

        //return response()->json(['success' => true, 'view' => $view]);

        //$course_data = Course::where('id', $selected_id)->first();
        //$course_data = DB::table('courses')->first();
        //return this->$course_data[0]->

    }
}
