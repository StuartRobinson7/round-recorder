<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    //public function GetCourseId(){
        //$id = Input::get('id');
        //$course_id = Course::find($id);
        //return view('add_round', compact('course_id'));
            

        //$request = Request::all();
        //$course_id = Course::where('course_id', $request->id)->get();
    
        //$html = view('add_course')->with(compact('course_id'))->render();
        //return response()->json(['success' => true, 'html' => $html]);

    //}

}
