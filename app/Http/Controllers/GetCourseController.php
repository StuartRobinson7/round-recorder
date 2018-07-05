<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class GetCourseController extends Controller
{

    public function GetCourseId(Request $request){
        //$id = Input::get('id');
        //$course_id = Course::find($id);
        //return view('add_round', compact('course_id'));
            

        $selected_id = $request->id;

        //return response()->json($selected_id);

        $course_data = Course::where('id', $selected_id)->get();
    
        $html = view('ajax_getcourse')->with(compact('course_data'));

        return response()->json(['success' => true, 'html' => $html]);

    }
}
