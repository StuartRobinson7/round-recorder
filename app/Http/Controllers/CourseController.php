<?php

namespace App\Http\Controllers;

use App\Course;
use App\Queries\GetCourseTotals;
use App\Updates\UpdateCourseInfo;
use App\Validation\ValidateCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class CourseController extends Controller
{


    /**
     * Set variables for queries and updates
     * Used for 'show' and 'update'
     */
    protected $GetCourseTotals;
    protected $UpdateCourseInfo;
    protected $ValidateCourse;
 
    public function __construct(GetCourseTotals $GetCourseTotals, UpdateCourseInfo $UpdateCourseInfo, ValidateCourse $ValidateCourse) {
        $this->GetCourseTotals = $GetCourseTotals;
        $this->UpdateCourseInfo = $UpdateCourseInfo;
        $this->ValidateCourse = $ValidateCourse;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate input data
        $this->ValidateCourse->courseValidation();

        // return with errors if validation fails
        if ( $validator !== true ) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();            
        }        

        // Add course to database
        $course = Course::create($request->all());

        return redirect()->route('profile');           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // get course information
        $course = $this->GetCourseTotals->courseTotals($id);

        return view('view_course', compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find course to edit
        $course_info = \App\Course::find($id);    

        // return edit page with course data
        return view('edit_course',compact('course_info','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // validate the request data
        $validator = $this->ValidateCourse->courseValidation();

        // return with errors if validation fails
        if ( $validator !== true ) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();            
        }  

        // update this courses information
        $this->UpdateCourseInfo->updateCourse($id);

        // get the updated course
        $course = $this->GetCourseTotals->courseTotals($id);

        // return with updated course
        return view('view_course', compact('course'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // find the course
        $course = \App\Course::find($id);

        // deleted the course
        $course->delete();

        // return to view with message
        return redirect('course_list')->with('success','Course has been deleted'); 

    }
}
