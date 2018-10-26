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
use App\Events\RoundUpdate;

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

        $id = $round->id;
       
        return response()->json($id);

        // Return Success
        //return response()->json('success');
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

        $round_id = $id;

        $course_id = $round->course_id;

        $yards = $round->yards;

        $course = $this->GetCourseInfo->courseInfo($course_id);

        $course_totals = $this->GetCourseTotals->courseTotals($course_id);
        
        $round = $this->GetRoundResult->roundResult($id);

        $stats_round = $this->GetRoundResult->statsRoundResult($id);

        return view('view_round',compact('round', 'stats_round', 'course', 'course_totals', 'id'));
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

            // update this rounds information
            $this->UpdateRoundInfo->updateRound($id);           

            // get round info
            $round = \App\Round::find($id);
            
            event(new RoundUpdate($round));

            $course_id = $round->course_id;
    
            $course = $this->GetCourseInfo->courseInfo($course_id);
    
            $course_totals = $this->GetCourseTotals->courseTotals($course_id);
            
            $round = $this->GetRoundResult->roundResult($id);

            $stats_round = $this->GetRoundResult->statsRoundResult($id);
    
            $round_id = $round->id;

            // Display Success Message            
            $request->session()->flash('message', 'This round has been successfully updated.');
            $request->session()->flash('message-type', 'success');            

            return view('view_round',compact('round', 'stats_round', 'course', 'course_totals', 'id'));    
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
