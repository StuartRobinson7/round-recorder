<?php

namespace App\Http\Controllers;

use App\Round;
use App\Course;
use App\Queries\GetCourseInfo;
use App\Queries\GetCourseTotals;
use App\Queries\GetRoundResult;
use App\Updates\UpdateRoundInfo;
use App\Validation\ValidateRound;
use App\Events\RoundAdd;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RoundController extends Controller
{

    /**
     * Set variables for queries and updates
     * Used for 'show' and 'update'
     */
    protected $GetCourseTotals;
    protected $UpdateRoundInfo;
    protected $ValidateRound;
    protected $GetRoundResults;
    protected $GetCourseInfo;
 
    public function __construct(GetCourseTotals $GetCourseTotals, UpdateRoundInfo $UpdateRoundInfo,  ValidateRound $ValidateRound, GetRoundResult $GetRoundResult, GetCourseInfo $GetCourseInfo) {
        $this->GetCourseTotals = $GetCourseTotals;
        $this->UpdateRoundInfo = $UpdateRoundInfo;
        $this->ValidateRound = $ValidateRound;
        $this->GetRoundResult = $GetRoundResult;
        $this->GetCourseInfo = $GetCourseInfo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::all();    
        return view('add_round', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [     
            'round_date' => 'required|date_format:d/m/Y',
            'course_id' => 'required|integer',
            'player_id' => 'required|integer', 
            'size' => 'required|string',
            'yards' => 'required|string', 
            'nine' => 'required|string'                     
        ]);

        // Return Validation Errors            
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->messages()]);                        
        } 

        // Add round to database
        $round = Round::create($request->all());

        // Fire an event that a round has been added
        event(new RoundAdd($round));

        // Display Success Message            
        $request->session()->flash('message', 'New round added successfully.');
        $request->session()->flash('message-type', 'success');        

        // Return Success
        return response()->json('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $round = \App\Round::find($id);

        $course_id = $round->course_id;

        $yards = $round->yards;

        $course = $this->GetCourseInfo->courseInfo($course_id);

        $course_totals = $this->GetCourseTotals->courseTotals($course_id);
        
        $round = $this->GetRoundResult->roundResult($id);

        return view('view_round',compact('round', 'course', 'course_totals', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $round = \App\Round::find($id);

        $course_id = $round->course_id;    
        
        $course = $this->GetCourseInfo->courseInfo($course_id);

        $course_totals = $this->GetCourseTotals->courseTotals($course_id);

        //$course = \App\Course::select('property_name', 'course_name', 'hole_1_par', 'hole_2_par',  'hole_3_par', 'hole_4_par', 'hole_5_par', 'hole_6_par', 'hole_7_par', 'hole_8_par', 'hole_9_par', 'hole_10_par', 'hole_11_par', 'hole_12_par', 'hole_13_par', 'hole_14_par', 'hole_15_par', 'hole_16_par', 'hole_17_par', 'hole_18_par', 'hole_1_ladies_par', 'hole_2_ladies_par',  'hole_3_ladies_par', 'hole_4_ladies_par', 'hole_5_ladies_par', 'hole_6_ladies_par', 'hole_7_ladies_par', 'hole_8_ladies_par', 'hole_9_ladies_par', 'hole_10_ladies_par', 'hole_11_ladies_par', 'hole_12_ladies_par', 'hole_13_ladies_par', 'hole_14_ladies_par', 'hole_15_ladies_par', 'hole_16_ladies_par', 'hole_17_ladies_par', 'hole_18_ladies_par' )      
        //->where('courses.id', $course_id)
        //->first();

        return view('edit_round',compact('round', 'course', 'course_totals', 'id'));
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
        {
            // validate the request data
            $validator = $this->ValidateRound->roundValidation();

            // return with errors if validation fails
            if ( $validator !== true ) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();            
            }  

            // update this courses information
            $this->UpdateRoundInfo->updateRound($id);        
    

            // get round info
            $round = \App\Round::find($id);

            // Fire an event like a new round has been added
            event(new RoundAdd($round));

            $course_id = $round->course_id;
    
            $course = $this->GetCourseInfo->courseInfo($course_id);
    
            $course_totals = $this->GetCourseTotals->courseTotals($course_id);
            
            $round = $this->GetRoundResult->roundResult($id);
    
            return view('view_round',compact('round', 'course', 'course_totals', 'id'))->with('success','Round has been updated');    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $round = \App\Round::find($id);
        $round->delete();
        return redirect('profile')->with('success','Course has been deleted'); 
    }
}
