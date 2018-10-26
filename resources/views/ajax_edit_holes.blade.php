@if($selected_size === '27')

<br />

<h3 class="title"><span>Nine Names</span></h3>

<br />

<p>27 hole courses often name each set of nine holes to easily differentiate between them, if this is the case please enter the names below, if not feel free to leave them blank.</p>

<div class="row">
    <div class="col-12 col-lg">
        <div class="form-group">
            <label>First Nine Name</label>
            <input id="first_nine_name" type="text" class="form-control {{ $errors->has('first_nine_name') ? ' is-invalid' : '' }}" name="first_nine_name" value="{{ old('first_nine_name', $course_info->first_nine_name) }}">
        </div>
    </div>
    <div class="col-12 col-lg">
        <div class="form-group">
            <label>Second Nine Name</label>
            <input id="second_nine_name" type="text" class="form-control {{ $errors->has('second_nine_name') ? ' is-invalid' : '' }}" name="second_nine_name" value="{{ old('second_nine_name', $course_info->second_nine_name) }}">
        </div>
    </div>
    <div class="col-12 col-lg">
        <div class="form-group">
            <label>Third Nine Name</label>
            <input id="third_nine_name" type="text" class="form-control {{ $errors->has('third_nine_name') ? ' is-invalid' : '' }}" name="third_nine_name" value="{{ old('third_nine_name', $course_info->third_nine_name) }}">
        </div>
    </div>
</div>
<!--/.row -->

<br />

@endif

<br />
<h3 class="title"><span>Tees</span></h3> 
<br />
<p>Select the colour of Tees you'd like to edit course information for, you may edit information for all tees if you wish or simply the ones that you intend to play.</p>

<ul class="nav nav-tabs nav-fill yardage-tabs" id="yardageTabs" role="tablist"> 

    <li class="nav-item">
        <a class="nav-link" id="whites-tab" data-toggle="tab" href="#whites" role="tab" aria-controls="whites" aria-selected="false">White Tees</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" id="yellows-tab" data-toggle="tab" href="#yellows" role="tab" aria-controls="yellows" aria-selected="true">Yellow Tees</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="reds-tab" data-toggle="tab" href="#reds" role="tab" aria-controls="reds" aria-selected="false">Red Tees</a>
    </li>

</ul>

<br />
<br />
<h3 class="title"><span>Scorecard</span></h3>
<br />

<div class="tab-content" id="yardageTabsContent">

    <div class="tab-pane yardage-pane fade" id="whites" role="tabpanel" aria-labelledby="whites-tab">

        @if($selected_size === '27')

            <h4 class="text-center">First Nine</h4>

        @elseif($selected_size === '18')

            <h4 class="text-center">Front Nine</h4>

        @endif

            <div class="row rr-row rr-head-row">

                <div class="col rr-cell rr-head rr-heading">
                    <h5>Hole</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>1</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>2</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>3</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>4</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>5</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>6</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>7</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>8</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>9</h5>
                </div>

                <div class="col rr-cell rr-head rr-total">
                    <h5>Total</h5>
                </div>

            </div>
            <!-- /.row -->

            <div class="row rr-row yards-row white">

                <div class="col rr-cell rr-heading">
                    <h5>Yards</h5>
                </div>

                <div class="col rr-cell">
                    <input id="hole_1_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_1_white') ? ' is-invalid' : '' }}" name="hole_1_white" value="{{ old('hole_1_white', $course_info->hole_1_white) }}">
                </div>

                <div class="col rr-cell">
                    <input id="hole_2_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_2_white') ? ' is-invalid' : '' }}" name="hole_2_white" value="{{ old('hole_2_white', $course_info->hole_2_white) }}">
                </div>

                <div class="col rr-cell">
                    <input id="hole_3_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_3_white') ? ' is-invalid' : '' }}" name="hole_3_white" value="{{ old('hole_3_white', $course_info->hole_3_white) }}">
                </div>

                <div class="col rr-cell">
                    <input id="hole_4_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_4_white') ? ' is-invalid' : '' }}" name="hole_4_white" value="{{ old('hole_4_white', $course_info->hole_4_white) }}">
                </div>

                <div class="col rr-cell">
                    <input id="hole_5_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_5_white') ? ' is-invalid' : '' }}" name="hole_5_white" value="{{ old('hole_5_white', $course_info->hole_5_white) }}">
                </div>

                <div class="col rr-cell">
                    <input id="hole_6_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_6_white') ? ' is-invalid' : '' }}" name="hole_6_white" value="{{ old('hole_6_white', $course_info->hole_6_white) }}">
                </div>

                <div class="col rr-cell">
                    <input id="hole_7_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_7_white') ? ' is-invalid' : '' }}" name="hole_7_white" value="{{ old('hole_7_white', $course_info->hole_7_white) }}">
                </div>

                <div class="col rr-cell">
                    <input id="hole_8_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_8_white') ? ' is-invalid' : '' }}" name="hole_8_white" value="{{ old('hole_8_white', $course_info->hole_8_white) }}">
                </div>

                <div class="col rr-cell">
                    <input id="hole_9_white" type="text" class="form-control first-white-yards {{ $errors->has('hole_9_white') ? ' is-invalid' : '' }}" name="hole_9_white" value="{{ old('hole_9_white', $course_info->hole_9_white) }}">
                </div>

                <div class="col rr-cell rr-total">
                    <span id="firstWhiteYards"></span>
                </div>

            </div>
            <!-- /.row -->


            <div class="row rr-row ">

                <div class="col rr-cell rr-heading">
                    <h5>Par</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_1_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_1_white_par') ? ' is-invalid' : '' }}" name="hole_1_white_par" value="{{ old('hole_1_white_par', $course_info->hole_1_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_2_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_2_white_par') ? ' is-invalid' : '' }}" name="hole_2_white_par" value="{{ old('hole_2_white_par', $course_info->hole_2_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_3_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_3_white_par') ? ' is-invalid' : '' }}" name="hole_3_white_par" value="{{ old('hole_3_white_par', $course_info->hole_3_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_4_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_4_white_par') ? ' is-invalid' : '' }}" name="hole_4_white_par" value="{{ old('hole_4_white_par', $course_info->hole_4_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_5_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_5_white_par') ? ' is-invalid' : '' }}" name="hole_5_white_par" value="{{ old('hole_5_white_par', $course_info->hole_5_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_6_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_6_white_par') ? ' is-invalid' : '' }}" name="hole_6_white_par" value="{{ old('hole_6_white_par', $course_info->hole_6_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_7_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_7_white_par') ? ' is-invalid' : '' }}" name="hole_7_white_par" value="{{ old('hole_7_white_par', $course_info->hole_7_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_8_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_8_white_par') ? ' is-invalid' : '' }}" name="hole_8_white_par" value="{{ old('hole_8_white_par', $course_info->hole_8_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_9_white_par" type="text" class="form-control first-white-par {{ $errors->has('hole_9_white_par') ? ' is-invalid' : '' }}" name="hole_9_white_par" value="{{ old('hole_9_white_par', $course_info->hole_9_white_par) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                    <span id="firstWhitePar"></span>
                </div>

            </div>
            <!-- /.row -->


            <div class="row rr-row ">

                <div class="col rr-cell rr-heading">
                    <h5>Stroke Index <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_1_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_1_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_1_white_stroke_index" value="{{ old('hole_1_white_stroke_index', $course_info->hole_1_white_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_2_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_2_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_2_white_stroke_index" value="{{ old('hole_2_white_stroke_index', $course_info->hole_2_white_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_3_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_3_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_3_white_stroke_index" value="{{ old('hole_3_white_stroke_index', $course_info->hole_3_white_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_4_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_4_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_4_white_stroke_index" value="{{ old('hole_4_white_stroke_index', $course_info->hole_4_white_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_5_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_5_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_5_white_stroke_index" value="{{ old('hole_5_white_stroke_index', $course_info->hole_5_white_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_6_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_6_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_6_white_stroke_index" value="{{ old('hole_6_white_stroke_index', $course_info->hole_6_white_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_7_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_7_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_7_white_stroke_index" value="{{ old('hole_7_white_stroke_index', $course_info->hole_7_white_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_8_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_8_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_8_white_stroke_index" value="{{ old('hole_8_white_stroke_index', $course_info->hole_8_white_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_9_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_9_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_9_white_stroke_index" value="{{ old('hole_9_white_stroke_index', $course_info->hole_9_white_stroke_index) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                n/a
                </div>

            </div>
            <!-- /.row -->

            <br />


        @if($selected_size === '18' || $selected_size === '27')

            <br />

            @if($selected_size === '27')

            <h4 class="text-center">Second Nine</h4>

            @elseif($selected_size === '18')

            <h4 class="text-center">Back Nine</h4>

            @endif

            <div class="row rr-row rr-head-row">

                <div class="col rr-cell rr-head rr-heading">
                    <h5>Hole</h5>
                </div>

                <div class="col rr-cell rr-head">

                    @if($selected_size === '27')
                    <h5>1</h5>
                    @else
                    <h5>10</h5>
                    @endif

                </div>

                <div class="col rr-cell rr-head">

                    @if($selected_size === '27')
                    <h5>2</h5>
                    @else
                    <h5>11</h5>
                    @endif

                </div>

                <div class="col rr-cell rr-head">

                    @if($selected_size === '27')
                    <h5>3</h5>
                    @else
                    <h5>12</h5>
                    @endif

                </div>

                <div class="col rr-cell rr-head">

                    @if($selected_size === '27')
                    <h5>4</h5>
                    @else
                    <h5>13</h5>
                    @endif

                </div>

                <div class="col rr-cell rr-head">

                    @if($selected_size === '27')
                    <h5>5</h5>
                    @else
                    <h5>14</h5>
                    @endif

                </div>

                <div class="col rr-cell rr-head">

                    @if($selected_size === '27')
                    <h5>6</h5>
                    @else
                    <h5>15</h5>
                    @endif

                </div>

                <div class="col rr-cell rr-head">

                    @if($selected_size === '27')
                    <h5>7</h5>
                    @else
                    <h5>16</h5>
                    @endif

                </div>

                <div class="col rr-cell rr-head">

                    @if($selected_size === '27')
                    <h5>8</h5>
                    @else
                    <h5>17</h5>
                    @endif

                </div>

                <div class="col rr-cell rr-head">

                    @if($selected_size === '27')
                    <h5>9</h5>
                    @else
                    <h5>18</h5>
                    @endif

                </div>

                <div class="col rr-cell rr-head rr-total">
                    <h5>Total</h5>
                </div>

            </div>
            <!-- /.row -->

            <div class="row rr-row yards-row white">

                <div class="col rr-cell rr-heading">
                    <h5>Yards</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_10_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_10_white') ? ' is-invalid' : '' }}" name="hole_10_white" value="{{ old('hole_10_white', $course_info->hole_10_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_11_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_11_white') ? ' is-invalid' : '' }}" name="hole_11_white" value="{{ old('hole_11_white', $course_info->hole_11_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_12_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_12_white') ? ' is-invalid' : '' }}" name="hole_12_white" value="{{ old('hole_12_white', $course_info->hole_12_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_13_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_13_white') ? ' is-invalid' : '' }}" name="hole_13_white" value="{{ old('hole_13_white', $course_info->hole_13_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_14_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_14_white') ? ' is-invalid' : '' }}" name="hole_14_white" value="{{ old('hole_14_white', $course_info->hole_14_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_15_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_15_white') ? ' is-invalid' : '' }}" name="hole_15_white" value="{{ old('hole_15_white', $course_info->hole_15_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_16_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_16_white') ? ' is-invalid' : '' }}" name="hole_16_white" value="{{ old('hole_16_white', $course_info->hole_16_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_17_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_17_white') ? ' is-invalid' : '' }}" name="hole_17_white" value="{{ old('hole_17_white', $course_info->hole_17_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_18_white" type="text" class="form-control second-white-yards {{ $errors->has('hole_18_white') ? ' is-invalid' : '' }}" name="hole_18_white" value="{{ old('hole_18_white', $course_info->hole_18_white) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                    <span id="secondWhiteYards"></span>
                </div>

            </div>
            <!-- /.row -->

            <div class="row rr-row">

                <div class="col rr-cell rr-heading">
                    <h5>Par</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_10_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_10_white_par') ? ' is-invalid' : '' }}" name="hole_10_white_par" value="{{ old('hole_10_white_par', $course_info->hole_10_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_11_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_11_white_par') ? ' is-invalid' : '' }}" name="hole_11_white_par" value="{{ old('hole_11_white_par', $course_info->hole_11_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_12_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_12_white_par') ? ' is-invalid' : '' }}" name="hole_12_white_par" value="{{ old('hole_12_white_par', $course_info->hole_12_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_13_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_13_white_par') ? ' is-invalid' : '' }}" name="hole_13_white_par" value="{{ old('hole_13_white_par', $course_info->hole_13_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_14_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_14_white_par') ? ' is-invalid' : '' }}" name="hole_14_white_par" value="{{ old('hole_14_white_par', $course_info->hole_14_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_15_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_15_white_par') ? ' is-invalid' : '' }}" name="hole_15_white_par" value="{{ old('hole_15_white_par', $course_info->hole_15_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_16_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_16_white_par') ? ' is-invalid' : '' }}" name="hole_16_white_par" value="{{ old('hole_16_white_par', $course_info->hole_16_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_17_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_17_white_par') ? ' is-invalid' : '' }}" name="hole_17_white_par" value="{{ old('hole_17_white_par', $course_info->hole_17_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_18_white_par" type="text" class="form-control second-white-par {{ $errors->has('hole_18_white_par') ? ' is-invalid' : '' }}" name="hole_18_white_par" value="{{ old('hole_18_white_par', $course_info->hole_18_white_par) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                    <span id="secondWhitePar"></span>
                </div>

            </div>
            <!-- /.row -->

            <div class="row rr-row">

                <div class="col rr-cell rr-heading">
                    <h5>Stroke Index <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_10_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_10_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_10_white_stroke_index" value="{{ $course_info->hole_10_white_stroke_index }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_11_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_11_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_11_white_stroke_index" value="{{ $course_info->hole_11_white_stroke_index }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_12_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_12_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_12_white_stroke_index" value="{{ $course_info->hole_12_white_stroke_index }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_13_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_13_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_13_white_stroke_index" value="{{ $course_info->hole_13_white_stroke_index }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_14_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_14_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_14_white_stroke_index" value="{{ $course_info->hole_14_white_stroke_index }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_15_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_15_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_15_white_stroke_index" value="{{ $course_info->hole_15_white_stroke_index }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_16_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_16_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_16_white_stroke_index" value="{{ $course_info->hole_16_white_stroke_index }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_17_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_17_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_17_white_stroke_index" value="{{ $course_info->hole_17_white_stroke_index }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_18_white_stroke_index" type="text" class="form-control {{ $errors->has('hole_18_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_18_white_stroke_index" value="{{ $course_info->hole_18_white_stroke_index }}">
                </div>
                
                <div class="col rr-cell rr-total">
                n/a
                </div>

            </div>
            <!-- /.row -->

            <br />

        @endif

        @if($selected_size === '27')

            <br />

            <h4 class="text-center">Third Nine</h4>

            <div class="row rr-row rr-head-row">

                <div class="col rr-cell rr-head rr-heading">
                    <h5>Hole</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>1</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>2</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>3</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>4</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>5</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>6</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>7</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>8</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>9</h5>
                </div>

                <div class="col rr-cell rr-head rr-total">
                    <h5>Total</h5>
                </div>

            </div>
            <!-- /.row -->

            <div class="row rr-row yards-row">

                <div class="col rr-cell rr-heading">
                    <h5>Yards</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_19_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_19_white') ? ' is-invalid' : '' }}" name="hole_19_white" value="{{ old('hole_19_white', $course_info->hole_19_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_20_white') ? ' is-invalid' : '' }}" name="hole_20_white" value="{{ old('hole_20_white', $course_info->hole_20_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_21_white') ? ' is-invalid' : '' }}" name="hole_21_white" value="{{ old('hole_21_white', $course_info->hole_21_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_22_white') ? ' is-invalid' : '' }}" name="hole_22_white" value="{{ old('hole_22_white', $course_info->hole_22_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_23_white') ? ' is-invalid' : '' }}" name="hole_23_white" value="{{ old('hole_23_white', $course_info->hole_23_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_24_white') ? ' is-invalid' : '' }}" name="hole_24_white" value="{{ old('hole_24_white', $course_info->hole_24_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_25_white') ? ' is-invalid' : '' }}" name="hole_25_white" value="{{ old('hole_25_white', $course_info->hole_25_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_26_white') ? ' is-invalid' : '' }}" name="hole_26_white" value="{{ old('hole_26_white', $course_info->hole_26_white) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_white" type="text" class="form-control third-white-yards {{ $errors->has('hole_27_white') ? ' is-invalid' : '' }}" name="hole_27_white" value="{{ old('hole_27_white', $course_info->hole_27_white) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                    <span id="thirdWhiteYards"></span>
                </div>

            </div>
            <!-- /.row -->

            <div class="row rr-row ">

                <div class="col rr-cell rr-heading">
                    <h5>Par</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_19_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_19_white_par') ? ' is-invalid' : '' }}" name="hole_19_white_par" value="{{ old('hole_19_white_par', $course_info->hole_19_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_20_white_par') ? ' is-invalid' : '' }}" name="hole_20_white_par" value="{{ old('hole_20_white_par', $course_info->hole_20_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_21_white_par') ? ' is-invalid' : '' }}" name="hole_21_white_par" value="{{ old('hole_21_white_par', $course_info->hole_21_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_22_white_par') ? ' is-invalid' : '' }}" name="hole_22_white_par" value="{{ old('hole_22_white_par', $course_info->hole_22_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_23_white_par') ? ' is-invalid' : '' }}" name="hole_23_white_par" value="{{ old('hole_23_white_par', $course_info->hole_23_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_24_white_par') ? ' is-invalid' : '' }}" name="hole_24_white_par" value="{{ old('hole_24_white_par', $course_info->hole_24_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_25_white_par') ? ' is-invalid' : '' }}" name="hole_25_white_par" value="{{ old('hole_25_white_par', $course_info->hole_25_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_26_white_par') ? ' is-invalid' : '' }}" name="hole_26_white_par" value="{{ old('hole_26_white_par', $course_info->hole_26_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_white_par" type="text" class="form-control third-white-par {{ $errors->has('hole_27_white_par') ? ' is-invalid' : '' }}" name="hole_27_white_par" value="{{ old('hole_27_white_par', $course_info->hole_27_white_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <span id="thirdWhitePar"></span>
                </div>

            </div>
            <!-- /.row -->

            <div class="row rr-row ">

                <div class="col rr-cell rr-heading">
                    <h5>S.I. Front <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index-front')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_19_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_19_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_19_white_stroke_index_front" value="{{ old('hole_19_white_stroke_index_front', $course_info->hole_19_white_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_20_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_20_white_stroke_index_front" value="{{ old('hole_20_white_stroke_index_front', $course_info->hole_20_white_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_21_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_21_white_stroke_index_front" value="{{ old('hole_21_white_stroke_index_front', $course_info->hole_21_white_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_22_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_22_white_stroke_index_front" value="{{ old('hole_22_white_stroke_index_front', $course_info->hole_22_white_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_23_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_23_white_stroke_index_front" value="{{ old('hole_23_white_stroke_index_front', $course_info->hole_23_white_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_24_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_24_white_stroke_index_front" value="{{ old('hole_24_white_stroke_index_front', $course_info->hole_24_white_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_25_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_25_white_stroke_index_front" value="{{ old('hole_25_white_stroke_index_front', $course_info->hole_25_white_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_26_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_26_white_stroke_index_front" value="{{ old('hole_26_white_stroke_index_front', $course_info->hole_26_white_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_white_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_27_white_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_27_white_stroke_index_front" value="{{ old('hole_27_white_stroke_index_front', $course_info->hole_27_white_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                n/a
                </div>

            </div>
            <!-- /.row -->

            <div class="row rr-row ">

                <div class="col rr-cell rr-heading">
                    <h5>S.I. Back <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index-back')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_19_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_19_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_19_white_stroke_index_back" value="{{ old('hole_19_white_stroke_index_back', $course_info->hole_19_white_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_20_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_20_white_stroke_index_back" value="{{ old('hole_20_white_stroke_index_back', $course_info->hole_20_white_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_21_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_21_white_stroke_index_back" value="{{ old('hole_21_white_stroke_index_back', $course_info->hole_21_white_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_22_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_22_white_stroke_index_back" value="{{ old('hole_22_white_stroke_index_back', $course_info->hole_22_white_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_23_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_23_white_stroke_index_back" value="{{ old('hole_23_white_stroke_index_back', $course_info->hole_23_white_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_24_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_24_white_stroke_index_back" value="{{ old('hole_24_white_stroke_index_back', $course_info->hole_24_white_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_25_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_25_white_stroke_index_back" value="{{ old('hole_25_white_stroke_index_back', $course_info->hole_25_white_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_26_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_26_white_stroke_index_back" value="{{ old('hole_26_white_stroke_index_back', $course_info->hole_26_white_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_white_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_27_white_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_27_white_stroke_index_back" value="{{ old('hole_27_white_stroke_index_back', $course_info->hole_27_white_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                n/a
                </div>

            </div>
            <!-- /.row -->

        @endif


        @if($selected_size === '9')

            <div class="row">

                <div class="col">
                    
                </div>               

                <div class="col-auto">
                
                    <div class="form-group row no-gutters">
                        <label for="white_half_sss" class="col-auto col-form-label">SSS</label>
                        <div class="col">
                            <input id="white_half_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('white_half_sss') ? ' is-invalid' : '' }}" name="white_half_sss" value="{{ old('white_half_sss', $course_info->white_half_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>

            </div>
            <!--/.row -->

        @elseif($selected_size === '18')

            <div class="row">

                <div class="col">
                    
                </div>             

                <div class="col-auto">

                    <div class="form-group row no-gutters">
                        <label for="white_sss" class="col-auto col-form-label">SSS</label>
                        <div class="col">
                            <input id="white_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('white_sss') ? ' is-invalid' : '' }}" name="white_sss" value="{{ old('white_sss', $course_info->white_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>

                </div>               

            </div>
            <!--/.row -->                    

        @elseif($selected_size === '27')
            <br />
            <br />
            <h3>SSS <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h3>

            <p> A 27 hole courses allows you to play two different sets of nine holes to create an 18 hole round, they should also provide an SSS for each combination of these sets. The SSS's are usually found on the courses scorecard in the top right hand corner. Sometimes a 27 hole course will have separate scorecard for each combination of nine hole sets.</p>           

            <div class="row sss-row">

                <div class="col">
                
                    <div class="form-group row no-gutters white">
                        <label for="white_first_second_sss" class="col col-form-label text-right">First/Second Nine SSS</label>
                        <div class="col-auto">
                            <input id="white_first_second_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('white_first_second_sss') ? ' is-invalid' : '' }}" name="white_first_second_sss" value="{{ old('white_first_second_sss', $course_info->white_first_second_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss-first-nine-second-nine')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>
                
                <div class="col">
                
                    <div class="form-group row no-gutters white">
                        <label for="white_second_third_sss" class="col col-form-label text-right">Second/Third Nine SSS</label>
                        <div class="col-auto">
                            <input id="white_second_third_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('white_second_third_sss') ? ' is-invalid' : '' }}" name="white_second_third_sss" value="{{ old('white_second_third_sss', $course_info->white_second_third_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss-second-nine-third-nine')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>
                
                <div class="col">
                
                    <div class="form-group row no-gutters white">
                        <label for="white_first_third_sss" class="col col-form-label text-right">First/Third Nine SSS</label>
                        <div class="col-auto">
                            <input id="white_first_third_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('white_first_third_sss') ? ' is-invalid' : '' }}" name="white_first_third_sss" value="{{ old('white_first_third_sss', $course_info->white_first_third_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss-first-nine-third-nine')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>               
                
            </div>
            <!--/.row -->

        @endif 


    </div>
    <!--/#whites -->

    <div class="tab-pane yardage-pane fade show active" id="yellows" role="tabpanel" aria-labelledby="yellows-tab">

        <br />

        @if($selected_size === '27')

            <h4 class="text-center">First Nine</h4>
                        
        @elseif($selected_size === '18') 

            <h4 class="text-center">Front Nine</h4>

        @endif
        
        
        <div class="row rr-row rr-head-row">
        
            <div class="col rr-cell rr-head rr-heading">
                <h5>Hole</h5>
            </div>
        
            <div class="col rr-cell rr-head">
                <h5>1</h5>
            </div>
        
            <div class="col rr-cell rr-head">
                <h5>2</h5>
            </div>
        
            <div class="col rr-cell rr-head">
                <h5>3</h5>
            </div>
        
            <div class="col rr-cell rr-head">
                <h5>4</h5>
            </div>
        
            <div class="col rr-cell rr-head">
                <h5>5</h5>
            </div>
        
            <div class="col rr-cell rr-head">
                <h5>6</h5>
            </div>
        
            <div class="col rr-cell rr-head">
                <h5>7</h5>
            </div>
        
            <div class="col rr-cell rr-head">
                <h5>8</h5>
            </div>
        
            <div class="col rr-cell rr-head">
                <h5>9</h5>
            </div>
        
            <div class="col rr-cell rr-head rr-total">
                <h5>Total</h5>
            </div>
        
        </div>
        <!-- /.row -->
        
        <div class="row rr-row yards-row yellow">
        
            <div class="col rr-cell rr-heading">
                <h5>Yards</h5>
            </div>
            
            <div class="col rr-cell">
                <input id="hole_1_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_1_yellow') ? ' is-invalid' : '' }}" name="hole_1_yellow" value="{{ old('hole_1_yellow', $course_info->hole_1_yellow) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_2_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_2_yellow') ? ' is-invalid' : '' }}" name="hole_2_yellow" value="{{ old('hole_2_yellow', $course_info->hole_2_yellow) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_3_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_3_yellow') ? ' is-invalid' : '' }}" name="hole_3_yellow" value="{{ old('hole_3_yellow', $course_info->hole_3_yellow) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_4_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_4_yellow') ? ' is-invalid' : '' }}" name="hole_4_yellow" value="{{ old('hole_4_yellow', $course_info->hole_4_yellow) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_5_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_5_yellow') ? ' is-invalid' : '' }}" name="hole_5_yellow" value="{{ old('hole_5_yellow', $course_info->hole_5_yellow) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_6_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_6_yellow') ? ' is-invalid' : '' }}" name="hole_6_yellow" value="{{ old('hole_6_yellow', $course_info->hole_6_yellow) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_7_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_7_yellow') ? ' is-invalid' : '' }}" name="hole_7_yellow" value="{{ old('hole_7_yellow', $course_info->hole_7_yellow) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_8_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_8_yellow') ? ' is-invalid' : '' }}" name="hole_8_yellow" value="{{ old('hole_8_yellow', $course_info->hole_8_yellow) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_9_yellow" type="text" class="form-control first-yellow-yards {{ $errors->has('hole_9_yellow') ? ' is-invalid' : '' }}" name="hole_9_yellow" value="{{ old('hole_9_yellow', $course_info->hole_9_yellow) }}">
            </div>
            
            <div class="col rr-cell rr-total">
                <span id="firstYellowYards"></span>
            </div>
        
        </div>
        <!-- /.row -->
        
        <div class="row rr-row ">
        
            <div class="col rr-cell rr-heading">
                <h5>Par</h5>
            </div>
            
            <div class="col rr-cell">
                <input id="hole_1_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_1_yellow_par') ? ' is-invalid' : '' }}" name="hole_1_yellow_par" value="{{ old('hole_1_yellow_par', $course_info->hole_1_yellow_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_2_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_2_yellow_par') ? ' is-invalid' : '' }}" name="hole_2_yellow_par" value="{{ old('hole_2_yellow_par', $course_info->hole_2_yellow_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_3_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_3_yellow_par') ? ' is-invalid' : '' }}" name="hole_3_yellow_par" value="{{ old('hole_3_yellow_par', $course_info->hole_3_yellow_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_4_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_4_yellow_par') ? ' is-invalid' : '' }}" name="hole_4_yellow_par" value="{{ old('hole_4_yellow_par', $course_info->hole_4_yellow_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_5_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_5_yellow_par') ? ' is-invalid' : '' }}" name="hole_5_yellow_par" value="{{ old('hole_5_yellow_par', $course_info->hole_5_yellow_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_6_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_6_yellow_par') ? ' is-invalid' : '' }}" name="hole_6_yellow_par" value="{{ old('hole_6_yellow_par', $course_info->hole_6_yellow_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_7_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_7_yellow_par') ? ' is-invalid' : '' }}" name="hole_7_yellow_par" value="{{ old('hole_7_yellow_par', $course_info->hole_7_yellow_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_8_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_8_yellow_par') ? ' is-invalid' : '' }}" name="hole_8_yellow_par" value="{{ old('hole_8_yellow_par', $course_info->hole_8_yellow_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_9_yellow_par" type="text" class="form-control first-yellow-par {{ $errors->has('hole_9_yellow_par') ? ' is-invalid' : '' }}" name="hole_9_yellow_par" value="{{ old('hole_9_yellow_par', $course_info->hole_9_yellow_par) }}">
            </div>
            
            <div class="col rr-cell rr-total">
                <span id="firstYellowPar"></span>
            </div>
        
        </div>
        <!-- /.row -->
        
        <div class="row rr-row ">
        
            <div class="col rr-cell rr-heading">
                <h5>Stroke Index <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
            </div>
        
            <div class="col rr-cell">
                <input id="hole_1_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_1_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_1_yellow_stroke_index" value="{{ old('hole_1_yellow_stroke_index', $course_info->hole_1_yellow_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_2_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_2_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_2_yellow_stroke_index" value="{{ old('hole_2_yellow_stroke_index', $course_info->hole_2_yellow_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_3_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_3_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_3_yellow_stroke_index" value="{{ old('hole_3_yellow_stroke_index', $course_info->hole_3_yellow_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_4_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_4_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_4_yellow_stroke_index" value="{{ old('hole_4_yellow_stroke_index', $course_info->hole_4_yellow_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_5_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_5_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_5_yellow_stroke_index" value="{{ old('hole_5_yellow_stroke_index', $course_info->hole_5_yellow_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_6_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_6_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_6_yellow_stroke_index" value="{{ old('hole_6_yellow_stroke_index', $course_info->hole_6_yellow_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_7_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_7_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_7_yellow_stroke_index" value="{{ old('hole_7_yellow_stroke_index', $course_info->hole_7_yellow_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_8_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_8_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_8_yellow_stroke_index" value="{{ old('hole_8_yellow_stroke_index', $course_info->hole_8_yellow_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_9_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_9_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_9_yellow_stroke_index" value="{{ old('hole_9_yellow_stroke_index', $course_info->hole_9_yellow_stroke_index) }}">
            </div>

            <div class="col rr-cell rr-total">
            n/a
            </div>
        
        </div>
        <!-- /.row -->                                   

        <br />

        @if($selected_size === '18' || $selected_size === '27') 

            <br />

            @if($selected_size === '27')

                <h4 class="text-center">Second Nine</h4>
                        
            @elseif($selected_size === '18') 

                <h4 class="text-center">Back Nine</h4>

            @endif

            <div class="row rr-row rr-head-row">
            
                <div class="col rr-cell rr-head rr-heading">
                    <h5>Hole</h5>
                </div>
            
                <div class="col rr-cell rr-head">
            
                    @if($selected_size === '27')
                    <h5>1</h5>
                    @else
                    <h5>10</h5>
                    @endif
            
                </div>
            
                <div class="col rr-cell rr-head">
            
                    @if($selected_size === '27')
                    <h5>2</h5>
                    @else
                    <h5>11</h5>
                    @endif
            
                </div>
            
                <div class="col rr-cell rr-head">
            
                    @if($selected_size === '27')
                    <h5>3</h5>
                    @else
                    <h5>12</h5>
                    @endif
            
                </div>
            
                <div class="col rr-cell rr-head">
            
                    @if($selected_size === '27')
                    <h5>4</h5>
                    @else
                    <h5>13</h5>
                    @endif
            
                </div>
            
                <div class="col rr-cell rr-head">
            
                    @if($selected_size === '27')
                    <h5>5</h5>
                    @else
                    <h5>14</h5>
                    @endif
            
                </div>
            
                <div class="col rr-cell rr-head">
            
                    @if($selected_size === '27')
                    <h5>6</h5>
                    @else
                    <h5>15</h5>
                    @endif
            
                </div>
            
                <div class="col rr-cell rr-head">
            
                    @if($selected_size === '27')
                    <h5>7</h5>
                    @else
                    <h5>16</h5>
                    @endif
            
                </div>
            
                <div class="col rr-cell rr-head">
            
                    @if($selected_size === '27')
                    <h5>8</h5>
                    @else
                    <h5>17</h5>
                    @endif
            
                </div>
            
                <div class="col rr-cell rr-head">
            
                    @if($selected_size === '27')
                    <h5>9</h5>
                    @else
                    <h5>18</h5>
                    @endif
            
                </div>
            
                <div class="col rr-cell rr-head rr-total">
                    <h5>Total</h5>
                </div>
            
            
            </div>
            <!-- /.row -->
            
            <div class="row rr-row yards-row yellow">
            
                <div class="col rr-cell rr-heading">
                    <h5>Yards</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_10_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_10_yellow') ? ' is-invalid' : '' }}" name="hole_10_yellow" value="{{ old('hole_10_yellow', $course_info->hole_10_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_11_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_11_yellow') ? ' is-invalid' : '' }}" name="hole_11_yellow" value="{{ old('hole_11_yellow', $course_info->hole_11_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_12_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_12_yellow') ? ' is-invalid' : '' }}" name="hole_12_yellow" value="{{ old('hole_12_yellow', $course_info->hole_12_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_13_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_13_yellow') ? ' is-invalid' : '' }}" name="hole_13_yellow" value="{{ old('hole_13_yellow', $course_info->hole_13_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_14_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_14_yellow') ? ' is-invalid' : '' }}" name="hole_14_yellow" value="{{ old('hole_14_yellow', $course_info->hole_14_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_15_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_15_yellow') ? ' is-invalid' : '' }}" name="hole_15_yellow" value="{{ old('hole_15_yellow', $course_info->hole_15_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_16_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_16_yellow') ? ' is-invalid' : '' }}" name="hole_16_yellow" value="{{ old('hole_16_yellow', $course_info->hole_16_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_17_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_17_yellow') ? ' is-invalid' : '' }}" name="hole_17_yellow" value="{{ old('hole_17_yellow', $course_info->hole_17_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_18_yellow" type="text" class="form-control second-yellow-yards {{ $errors->has('hole_18_yellow') ? ' is-invalid' : '' }}" name="hole_18_yellow" value="{{ old('hole_18_yellow', $course_info->hole_18_yellow) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                    <span id="secondYellowYards"></span>
                </div>
            
            
            </div>
            <!-- /.row -->
            
            <div class="row rr-row">
            
                <div class="col rr-cell rr-heading">
                    <h5>Par</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_10_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_10_yellow_par') ? ' is-invalid' : '' }}" name="hole_10_yellow_par" value="{{ old('hole_10_yellow_par', $course_info->hole_10_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_11_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_11_yellow_par') ? ' is-invalid' : '' }}" name="hole_11_yellow_par" value="{{ old('hole_11_yellow_par', $course_info->hole_11_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_12_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_12_yellow_par') ? ' is-invalid' : '' }}" name="hole_12_yellow_par" value="{{ old('hole_12_yellow_par', $course_info->hole_12_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_13_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_13_yellow_par') ? ' is-invalid' : '' }}" name="hole_13_yellow_par" value="{{ old('hole_13_yellow_par', $course_info->hole_13_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_14_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_14_yellow_par') ? ' is-invalid' : '' }}" name="hole_14_yellow_par" value="{{ old('hole_14_yellow_par', $course_info->hole_14_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_15_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_15_yellow_par') ? ' is-invalid' : '' }}" name="hole_15_yellow_par" value="{{ old('hole_15_yellow_par', $course_info->hole_15_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_16_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_16_yellow_par') ? ' is-invalid' : '' }}" name="hole_16_yellow_par" value="{{ old('hole_16_yellow_par', $course_info->hole_16_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_17_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_17_yellow_par') ? ' is-invalid' : '' }}" name="hole_17_yellow_par" value="{{ old('hole_17_yellow_par', $course_info->hole_17_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_18_yellow_par" type="text" class="form-control second-yellow-par {{ $errors->has('hole_18_yellow_par') ? ' is-invalid' : '' }}" name="hole_18_yellow_par" value="{{ old('hole_18_yellow_par', $course_info->hole_18_yellow_par) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                    <span id="secondYellowPar"></span>
                </div>
            
            </div>
            <!-- /.row -->
            
            <div class="row rr-row">
            
                <div class="col rr-cell rr-heading">
                    <h5>Stroke Index <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                </div>
            
                <div class="col rr-cell">
                    <input id="hole_10_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_10_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_10_yellow_stroke_index" value="{{ old('hole_10_yellow_stroke_index', $course_info->hole_10_yellow_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_11_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_11_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_11_yellow_stroke_index" value="{{ old('hole_11_yellow_stroke_index', $course_info->hole_11_yellow_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_12_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_12_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_12_yellow_stroke_index" value="{{ old('hole_12_yellow_stroke_index', $course_info->hole_12_yellow_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_13_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_13_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_13_yellow_stroke_index" value="{{ old('hole_13_yellow_stroke_index', $course_info->hole_13_yellow_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_14_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_14_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_14_yellow_stroke_index" value="{{ old('hole_14_yellow_stroke_index', $course_info->hole_14_yellow_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_15_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_15_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_15_yellow_stroke_index" value="{{ old('hole_15_yellow_stroke_index', $course_info->hole_15_yellow_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_16_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_16_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_16_yellow_stroke_index" value="{{ old('hole_16_yellow_stroke_index', $course_info->hole_16_yellow_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_17_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_17_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_17_yellow_stroke_index" value="{{ old('hole_17_yellow_stroke_index', $course_info->hole_17_yellow_stroke_index) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_18_yellow_stroke_index" type="text" class="form-control {{ $errors->has('hole_18_yellow_stroke_index') ? ' is-invalid' : '' }}" name="hole_18_yellow_stroke_index" value="{{ old('hole_18_yellow_stroke_index', $course_info->hole_18_yellow_stroke_index) }}">
                </div>

                <div class="col rr-cell rr-total">
                n/a
                </div>
            
            </div>
            <!-- /.row -->
            
            <br />
        @endif                    
             
        @if($selected_size === '27')

            <br />

            <h4 class="text-center">Third Nine</h4>  

            <div class="row rr-row rr-head-row">
            
                <div class="col rr-cell rr-head rr-heading">
                    <h5>Hole</h5>
                </div>
            
                <div class="col rr-cell rr-head">
                    <h5>1</h5>
                </div>
            
                <div class="col rr-cell rr-head">
                    <h5>2</h5>
                </div>
            
                <div class="col rr-cell rr-head">
                    <h5>3</h5>
                </div>
            
                <div class="col rr-cell rr-head">
                    <h5>4</h5>
                </div>
            
                <div class="col rr-cell rr-head">
                    <h5>5</h5>
                </div>
            
                <div class="col rr-cell rr-head">
                    <h5>6</h5>
                </div>
            
                <div class="col rr-cell rr-head">
                    <h5>7</h5>
                </div>
            
                <div class="col rr-cell rr-head">
                    <h5>8</h5>
                </div>
            
                <div class="col rr-cell rr-head">
                    <h5>9</h5>
                </div>
            
                <div class="col rr-cell rr-head rr-total">
                    <h5>Total</h5>
                </div>
            
            </div>
            <!-- /.row -->
            
            <div class="row rr-row yards-row">
            
                <div class="col rr-cell rr-heading">
                    <h5>Yards</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_19_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_19_yellow') ? ' is-invalid' : '' }}" name="hole_19_yellow" value="{{ old('hole_19_yellow', $course_info->hole_19_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_20_yellow') ? ' is-invalid' : '' }}" name="hole_20_yellow" value="{{ old('hole_20_yellow', $course_info->hole_20_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_21_yellow') ? ' is-invalid' : '' }}" name="hole_21_yellow" value="{{ old('hole_21_yellow', $course_info->hole_21_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_22_yellow') ? ' is-invalid' : '' }}" name="hole_22_yellow" value="{{ old('hole_22_yellow', $course_info->hole_22_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_23_yellow') ? ' is-invalid' : '' }}" name="hole_23_yellow" value="{{ old('hole_23_yellow', $course_info->hole_23_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_24_yellow') ? ' is-invalid' : '' }}" name="hole_24_yellow" value="{{ old('hole_24_yellow', $course_info->hole_24_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_25_yellow') ? ' is-invalid' : '' }}" name="hole_25_yellow" value="{{ old('hole_25_yellow', $course_info->hole_25_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_26_yellow') ? ' is-invalid' : '' }}" name="hole_26_yellow" value="{{ old('hole_26_yellow', $course_info->hole_26_yellow) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_yellow" type="text" class="form-control third-yellow-yards {{ $errors->has('hole_27_yellow') ? ' is-invalid' : '' }}" name="hole_27_yellow" value="{{ old('hole_27_yellow', $course_info->hole_27_yellow) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                    <span id="thirdYellowYards"></span>
                </div>
            
            </div>
            <!-- /.row -->
            
            <div class="row rr-row">
            
                <div class="col rr-cell rr-heading">
                    <h5>Par</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_19_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_19_yellow_par') ? ' is-invalid' : '' }}" name="hole_19_yellow_par" value="{{ old('hole_19_yellow_par', $course_info->hole_19_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_20_yellow_par') ? ' is-invalid' : '' }}" name="hole_20_yellow_par" value="{{ old('hole_20_yellow_par', $course_info->hole_20_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_21_yellow_par') ? ' is-invalid' : '' }}" name="hole_21_yellow_par" value="{{ old('hole_21_yellow_par', $course_info->hole_21_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_22_yellow_par') ? ' is-invalid' : '' }}" name="hole_22_yellow_par" value="{{ old('hole_22_yellow_par', $course_info->hole_22_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_23_yellow_par') ? ' is-invalid' : '' }}" name="hole_23_yellow_par" value="{{ old('hole_23_yellow_par', $course_info->hole_23_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_24_yellow_par') ? ' is-invalid' : '' }}" name="hole_24_yellow_par" value="{{ old('hole_24_yellow_par', $course_info->hole_24_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_25_yellow_par') ? ' is-invalid' : '' }}" name="hole_25_yellow_par" value="{{ old('hole_25_yellow_par', $course_info->hole_25_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_26_yellow_par') ? ' is-invalid' : '' }}" name="hole_26_yellow_par" value="{{ old('hole_26_yellow_par', $course_info->hole_26_yellow_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_yellow_par" type="text" class="form-control third-yellow-par {{ $errors->has('hole_27_yellow_par') ? ' is-invalid' : '' }}" name="hole_27_yellow_par" value="{{ old('hole_27_yellow_par', $course_info->hole_27_yellow_par) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                    <span id="thirdYellowPar"></span>
                </div>
            
            </div>
            <!-- /.row -->
            
            <div class="row rr-row">
            
                <div class="col rr-cell rr-heading">
                    <h5>S.I. Front <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index-front')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_19_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_19_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_19_yellow_stroke_index_front" value="{{ old('hole_19_yellow_stroke_index_front', $course_info->hole_19_yellow_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_20_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_20_yellow_stroke_index_front" value="{{ old('hole_20_yellow_stroke_index_front', $course_info->hole_20_yellow_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_21_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_21_yellow_stroke_index_front" value="{{ old('hole_21_yellow_stroke_index_front', $course_info->hole_21_yellow_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_22_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_22_yellow_stroke_index_front" value="{{ old('hole_22_yellow_stroke_index_front', $course_info->hole_22_yellow_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_23_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_23_yellow_stroke_index_front" value="{{ old('hole_23_yellow_stroke_index_front', $course_info->hole_23_yellow_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_24_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_24_yellow_stroke_index_front" value="{{ old('hole_24_yellow_stroke_index_front', $course_info->hole_24_yellow_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_25_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_25_yellow_stroke_index_front" value="{{ old('hole_25_yellow_stroke_index_front', $course_info->hole_25_yellow_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_26_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_26_yellow_stroke_index_front" value="{{ old('hole_26_yellow_stroke_index_front', $course_info->hole_26_yellow_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_yellow_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_27_yellow_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_27_yellow_stroke_index_front" value="{{ old('hole_27_yellow_stroke_index_front', $course_info->hole_27_yellow_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                n/a
                </div>
            
            </div>
            <!-- /.row -->
            
            <div class="row rr-row">
            
                <div class="col rr-cell rr-heading">
                    <h5>S.I. Back <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index-back')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                </div>
            
                <div class="col rr-cell">
                    <input id="hole_19_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_19_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_19_yellow_stroke_index_back" value="{{ old('hole_19_yellow_stroke_index_back', $course_info->hole_19_yellow_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_20_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_20_yellow_stroke_index_back" value="{{ old('hole_20_yellow_stroke_index_back', $course_info->hole_20_yellow_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_21_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_21_yellow_stroke_index_back" value="{{ old('hole_21_yellow_stroke_index_back', $course_info->hole_21_yellow_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_22_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_22_yellow_stroke_index_back" value="{{ old('hole_22_yellow_stroke_index_back', $course_info->hole_22_yellow_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_23_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_23_yellow_stroke_index_back" value="{{ old('hole_23_yellow_stroke_index_back', $course_info->hole_23_yellow_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_24_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_24_yellow_stroke_index_back" value="{{ old('hole_24_yellow_stroke_index_back', $course_info->hole_24_yellow_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_25_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_25_yellow_stroke_index_back" value="{{ old('hole_25_yellow_stroke_index_back', $course_info->hole_25_yellow_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_26_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_26_yellow_stroke_index_back" value="{{ old('hole_26_yellow_stroke_index_back', $course_info->hole_26_yellow_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_yellow_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_27_yellow_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_27_yellow_stroke_index_back" value="{{ old('hole_27_yellow_stroke_index_back', $course_info->hole_27_yellow_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                n/a
                </div>
            
            </div>
            <!-- /.row -->

        @endif

        @if($selected_size === '9')

            <div class="row">

                <div class="col">
                    
                </div>               

                <div class="col-auto">
                
                    <div class="form-group row no-gutters">
                        <label for="yellow_half_sss" class="col-auto col-form-label">SSS</label>
                        <div class="col">
                            <input id="yellow_half_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('yellow_half_sss') ? ' is-invalid' : '' }}" name="yellow_half_sss" value="{{ old('yellow_half_sss', $course_info->yellow_half_third_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>

            </div>
            <!--/.row -->

        @elseif($selected_size === '18')

            <div class="row">

                <div class="col">
                    
                </div>             

                <div class="col-auto">

                    <div class="form-group row no-gutters">
                        <label for="yellow_sss" class="col-auto col-form-label">SSS</label>
                        <div class="col">
                            <input id="yellow_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('yellow_sss') ? ' is-invalid' : '' }}" name="yellow_sss" value="{{ old('yellow_sss', $course_info->yellow_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>

                </div>               

            </div>
            <!--/.row -->                    

        @elseif($selected_size === '27')
            
            <br />
            <br />
            <h3>SSS <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h3>

            <p> A 27 hole courses allows you to play two different sets of nine holes to create an 18 hole round, they should also provide an SSS for each combination of these sets. The SSS's are usually found on the courses scorecard in the top right hand corner. Sometimes a 27 hole course will have separate scorecard for each combination of nine hole sets.</p>           

            <div class="row sss-row">

                <div class="col">
                
                    <div class="form-group row no-gutters yellow">
                        <label for="yellow_first_second_sss" class="col col-form-label text-right">First/Second Nine SSS</label>
                        <div class="col-auto">
                            <input id="yellow_first_second_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('yellow_first_second_sss') ? ' is-invalid' : '' }}" name="yellow_first_second_sss" value="{{ old('yellow_first_second_sss', $course_info->yellow_first_second_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss-first-nine-second-nine')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>
                
                <div class="col">
                
                    <div class="form-group row no-gutters yellow">
                        <label for="yellow_second_third_sss" class="col col-form-label text-right">Second/Third Nine SSS</label>
                        <div class="col-auto">
                            <input id="yellow_second_third_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('yellow_second_third_sss') ? ' is-invalid' : '' }}" name="yellow_second_third_sss" value="{{ old('yellow_first_second_sss', $course_info->yellow_second_third_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss-second-nine-third-nine')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>
                
                <div class="col">
                
                    <div class="form-group row no-gutters yellow">
                        <label for="yellow_first_third_sss" class="col col-form-label text-right">First/Third Nine SSS</label>
                        <div class="col-auto">
                            <input id="yellow_first_third_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('yellow_first_third_sss') ? ' is-invalid' : '' }}" name="yellow_first_third_sss" value="{{ old('yellow_first_third_sss', $course_info->yellow_first_third_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss-first-nine-third-nine')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>               
                
            </div>
            <!--/.row -->

        @endif        

    </div>
    <!--/#yellows -->

    <div class="tab-pane yardage-pane fade" id="reds" role="tabpanel" aria-labelledby="reds-tab">

        <br />

        @if($selected_size === '27')

            <h4 class="text-center">First Nine</h4>
        
        @elseif($selected_size === '18') 

            <h4 class="text-center">Front Nine</h3>

        @else

        @endif

        <div class="row rr-row rr-head-row">

            <div class="col rr-cell rr-head rr-heading">
                <h5>Hole</h5>
            </div>

            <div class="col rr-cell rr-head">
                <h5>1</h5>
            </div>

            <div class="col rr-cell rr-head">
                <h5>2</h5>
            </div>

            <div class="col rr-cell rr-head">
                <h5>3</h5>
            </div>

            <div class="col rr-cell rr-head">
                <h5>4</h5>
            </div>

            <div class="col rr-cell rr-head">
                <h5>5</h5>
            </div>

            <div class="col rr-cell rr-head">
                <h5>6</h5>
            </div>

            <div class="col rr-cell rr-head">
                <h5>7</h5>
            </div>

            <div class="col rr-cell rr-head">
                <h5>8</h5>
            </div>

            <div class="col rr-cell rr-head">
                <h5>9</h5>
            </div>                                                                                                                                                                                                                                                          

            <div class="col rr-cell rr-head rr-total">
                <h5>Total</h5>
            </div>   

        </div>
        <!-- /.row -->

        <div class="row rr-row yards-row red">

            <div class="col rr-cell rr-heading">
                <h5>Yards</h5>
            </div>
            
            <div class="col rr-cell">
                <input id="hole_1_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_1_red') ? ' is-invalid' : '' }}" name="hole_1_red" value="{{ old('hole_1_red', $course_info->hole_1_red) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_2_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_2_red') ? ' is-invalid' : '' }}" name="hole_2_red" value="{{ old('hole_2_red', $course_info->hole_2_red) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_3_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_3_red') ? ' is-invalid' : '' }}" name="hole_3_red" value="{{ old('hole_3_red', $course_info->hole_3_red) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_4_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_4_red') ? ' is-invalid' : '' }}" name="hole_4_red" value="{{ old('hole_4_red', $course_info->hole_4_red) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_5_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_5_red') ? ' is-invalid' : '' }}" name="hole_5_red" value="{{ old('hole_5_red', $course_info->hole_5_red) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_6_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_6_red') ? ' is-invalid' : '' }}" name="hole_6_red" value="{{ old('hole_6_red', $course_info->hole_6_red) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_7_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_7_red') ? ' is-invalid' : '' }}" name="hole_7_red" value="{{ old('hole_7_red', $course_info->hole_7_red) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_8_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_8_red') ? ' is-invalid' : '' }}" name="hole_8_red" value="{{ old('hole_8_red', $course_info->hole_8_red) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_9_red" type="text" class="form-control first-red-yards {{ $errors->has('hole_9_red') ? ' is-invalid' : '' }}" name="hole_9_red" value="{{ old('hole_9_red', $course_info->hole_9_red) }}">
            </div>
            
            <div class="col rr-cell rr-total">
                <span id="firstRedYards"></span>
            </div>                                                                                                                                                                                                                                                                                 


        </div>
        <!-- /.row --> 

        <div class="row rr-row">

            <div class="col rr-cell rr-heading">
                <h5>Par</h5>
            </div>
            
            <div class="col rr-cell">
                <input id="hole_1_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_1_red_par') ? ' is-invalid' : '' }}" name="hole_1_red_par" value="{{ old('hole_1_red_par', $course_info->hole_1_red_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_2_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_2_red_par') ? ' is-invalid' : '' }}" name="hole_2_red_par" value="{{ old('hole_2_red_par', $course_info->hole_2_red_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_3_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_3_red_par') ? ' is-invalid' : '' }}" name="hole_3_red_par" value="{{ old('hole_3_red_par', $course_info->hole_3_red_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_4_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_4_red_par') ? ' is-invalid' : '' }}" name="hole_4_red_par" value="{{ old('hole_4_red_par', $course_info->hole_4_red_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_5_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_5_red_par') ? ' is-invalid' : '' }}" name="hole_5_red_par" value="{{ old('hole_5_red_par', $course_info->hole_5_red_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_6_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_6_red_par') ? ' is-invalid' : '' }}" name="hole_6_red_par" value="{{ old('hole_6_red_par', $course_info->hole_6_red_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_7_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_7_red_par') ? ' is-invalid' : '' }}" name="hole_7_red_par" value="{{ old('hole_7_red_par', $course_info->hole_7_red_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_8_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_8_red_par') ? ' is-invalid' : '' }}" name="hole_8_red_par" value="{{ old('hole_8_red_par', $course_info->hole_8_red_par) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_9_red_par" type="text" class="form-control first-red-par {{ $errors->has('hole_9_red_par') ? ' is-invalid' : '' }}" name="hole_9_red_par" value="{{ old('hole_9_red_par', $course_info->hole_9_red_par) }}">
            </div>
            
            <div class="col rr-cell rr-total">
                <span id="firstRedPar"></span>
            </div>    

        </div>
        <!-- /.row -->       

        <div class="row rr-row">

            <div class="col rr-cell rr-heading">
                <h5>Stroke Index <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
            </div>
            
            <div class="col rr-cell">
                <input id="hole_1_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_1_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_1_red_stroke_index" value="{{ old('hole_1_red_stroke_index', $course_info->hole_1_red_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_2_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_2_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_2_red_stroke_index" value="{{ old('hole_2_red_stroke_index', $course_info->hole_2_red_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_3_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_3_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_3_red_stroke_index" value="{{ old('hole_3_red_stroke_index', $course_info->hole_3_red_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_4_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_4_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_4_red_stroke_index" value="{{ old('hole_4_red_stroke_index', $course_info->hole_4_red_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_5_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_5_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_5_red_stroke_index" value="{{ old('hole_5_red_stroke_index', $course_info->hole_5_red_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_6_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_6_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_6_red_stroke_index" value="{{ old('hole_6_red_stroke_index', $course_info->hole_6_red_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_7_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_7_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_7_red_stroke_index" value="{{ old('hole_7_red_stroke_index', $course_info->hole_7_red_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_8_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_8_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_8_red_stroke_index" value="{{ old('hole_8_red_stroke_index', $course_info->hole_8_red_stroke_index) }}">
            </div>
            
            <div class="col rr-cell">
                <input id="hole_9_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_9_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_9_red_stroke_index" value="{{ old('hole_9_red_stroke_index', $course_info->hole_9_red_stroke_index) }}">
            </div>
            
            <div class="col rr-cell rr-total">
            n/a
            </div>   

        </div>
        <!-- /.row -->                                                                       

        <br />

        @if($selected_size === '18' || $selected_size === '27') 

            <br />

            @if($selected_size === '27')

                <h4 class="text-center">Second Nine</h4>
                
            @elseif($selected_size === '18') 

                <h4 class="text-center">Back Nine</h4>

            @else

            @endif

                <div class="row rr-row rr-head-row">

                    <div class="col rr-cell rr-head rr-heading">
                        <h5>Hole</h5>
                    </div>

                    <div class="col rr-cell rr-head">

                        @if($selected_size === '27') 
                            <h5>1</h5>
                        @else
                            <h5>10</h5>
                        @endif
                        
                    </div>

                    <div class="col rr-cell rr-head">

                        @if($selected_size === '27') 
                            <h5>2</h5>
                        @else
                            <h5>11</h5>
                        @endif

                    </div>

                    <div class="col rr-cell rr-head">

                        @if($selected_size === '27') 
                            <h5>3</h5>
                        @else
                            <h5>12</h5>
                        @endif
                        
                    </div>

                    <div class="col rr-cell rr-head">

                        @if($selected_size === '27') 
                            <h5>4</h5>
                        @else
                            <h5>13</h5>
                        @endif                           

                    </div>

                    <div class="col rr-cell rr-head">

                        @if($selected_size === '27') 
                            <h5>5</h5>
                        @else
                            <h5>14</h5>
                        @endif
                        
                    </div>

                    <div class="col rr-cell rr-head">

                        @if($selected_size === '27') 
                            <h5>6</h5>
                        @else
                            <h5>15</h5>
                        @endif
                        
                    </div>

                    <div class="col rr-cell rr-head">

                        @if($selected_size === '27') 
                            <h5>7</h5>
                        @else
                            <h5>16</h5>
                        @endif
                        
                    </div>

                    <div class="col rr-cell rr-head">

                        @if($selected_size === '27') 
                            <h5>8</h5>
                        @else
                            <h5>17</h5>
                        @endif
                        
                    </div>

                    <div class="col rr-cell rr-head">

                        @if($selected_size === '27') 
                            <h5>9</h5>
                        @else
                            <h5>18</h5>
                        @endif
                        
                    </div>  

                    <div class="col rr-cell rr-head rr-total">
                        <h5>Total</h5>
                    </div>                                                                                                                                                                                                                                                                                 


                </div>
                <!-- /.row -->

                <div class="row rr-row yards-row red">

                    <div class="col rr-cell rr-heading">
                        <h5>Yards</h5>
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_10_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_10_red') ? ' is-invalid' : '' }}" name="hole_10_red" value="{{ old('hole_10_red', $course_info->hole_10_red) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_11_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_11_red') ? ' is-invalid' : '' }}" name="hole_11_red" value="{{ old('hole_11_red', $course_info->hole_11_red) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_12_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_12_red') ? ' is-invalid' : '' }}" name="hole_12_red" value="{{ old('hole_12_red', $course_info->hole_12_red) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_13_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_13_red') ? ' is-invalid' : '' }}" name="hole_13_red" value="{{ old('hole_13_red', $course_info->hole_13_red) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_14_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_14_red') ? ' is-invalid' : '' }}" name="hole_14_red" value="{{ old('hole_14_red', $course_info->hole_14_red) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_15_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_15_red') ? ' is-invalid' : '' }}" name="hole_15_red" value="{{ old('hole_15_red', $course_info->hole_15_red) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_16_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_16_red') ? ' is-invalid' : '' }}" name="hole_16_red" value="{{ old('hole_16_red', $course_info->hole_16_red) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_17_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_17_red') ? ' is-invalid' : '' }}" name="hole_17_red" value="{{ old('hole_17_red', $course_info->hole_17_red) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_18_red" type="text" class="form-control second-red-yards {{ $errors->has('hole_18_red') ? ' is-invalid' : '' }}" name="hole_18_red" value="{{ old('hole_18_red', $course_info->hole_18_red) }}">
                    </div>
                    
                    <div class="col rr-cell rr-total">
                        <span id="secondRedYards"></span>
                    </div>                                                                                                                                                                                                                                                                                


                </div>
                <!-- /.row --> 

                <div class="row rr-row ">

                    <div class="col rr-cell rr-heading">
                        <h5>Par</h5>
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_10_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_10_red_par') ? ' is-invalid' : '' }}" name="hole_10_red_par" value="{{ old('hole_10_red_par', $course_info->hole_10_red_par) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_11_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_11_red_par') ? ' is-invalid' : '' }}" name="hole_11_red_par" value="{{ old('hole_11_red_par', $course_info->hole_11_red_par) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_12_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_12_red_par') ? ' is-invalid' : '' }}" name="hole_12_red_par" value="{{ old('hole_12_red_par', $course_info->hole_12_red_par) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_13_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_13_red_par') ? ' is-invalid' : '' }}" name="hole_13_red_par" value="{{ old('hole_13_red_par', $course_info->hole_13_red_par) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_14_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_14_red_par') ? ' is-invalid' : '' }}" name="hole_14_red_par" value="{{ old('hole_14_red_par', $course_info->hole_14_red_par) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_15_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_15_red_par') ? ' is-invalid' : '' }}" name="hole_15_red_par" value="{{ old('hole_15_red_par', $course_info->hole_15_red_par) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_16_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_16_red_par') ? ' is-invalid' : '' }}" name="hole_16_red_par" value="{{ old('hole_16_red_par', $course_info->hole_16_red_par) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_17_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_17_red_par') ? ' is-invalid' : '' }}" name="hole_17_red_par" value="{{ old('hole_17_red_par', $course_info->hole_17_red_par) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_18_red_par" type="text" class="form-control second-red-par {{ $errors->has('hole_18_red_par') ? ' is-invalid' : '' }}" name="hole_18_red_par" value="{{ old('hole_18_red_par', $course_info->hole_18_red_par) }}">
                    </div>
                    
                    <div class="col rr-cell rr-total">
                        <span id="secondRedPar"></span>
                    </div>                                                                                                                                                                                                                                                                                    


                </div>
                <!-- /.row -->       

                <div class="row rr-row ">

                    <div class="col rr-cell rr-heading">
                        <h5>Stroke Index <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_10_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_10_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_10_red_stroke_index" value="{{ old('hole_10_red_stroke_index', $course_info->hole_10_red_stroke_index) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_11_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_11_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_11_red_stroke_index" value="{{ old('hole_11_red_stroke_index', $course_info->hole_11_red_stroke_index) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_12_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_12_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_12_red_stroke_index" value="{{ old('hole_12_red_stroke_index', $course_info->hole_12_red_stroke_index) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_13_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_13_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_13_red_stroke_index" value="{{ old('hole_13_red_stroke_index', $course_info->hole_13_red_stroke_index) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_14_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_14_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_14_red_stroke_index" value="{{ old('hole_14_red_stroke_index', $course_info->hole_14_red_stroke_index) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_15_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_15_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_15_red_stroke_index" value="{{ old('hole_15_red_stroke_index', $course_info->hole_15_red_stroke_index) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_16_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_16_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_16_red_stroke_index" value="{{ old('hole_16_red_stroke_index', $course_info->hole_16_red_stroke_index) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_17_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_17_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_17_red_stroke_index" value="{{ old('hole_17_red_stroke_index', $course_info->hole_17_red_stroke_index) }}">
                    </div>
                    
                    <div class="col rr-cell">
                        <input id="hole_18_red_stroke_index" type="text" class="form-control {{ $errors->has('hole_18_red_stroke_index') ? ' is-invalid' : '' }}" name="hole_18_red_stroke_index" value="{{ old('hole_18_red_stroke_index', $course_info->hole_18_red_stroke_index) }}">
                    </div>
                    
                    <div class="col rr-cell rr-total">
                    n/a
                    </div>    

                </div>
                <!-- /.row -->                  

            <br />
            
        @endif                    

        @if($selected_size === '27')  

            <br />

            <h4 class="text-center">Third Nine</h4>  

            <div class="row rr-row rr-head-row">

                <div class="col rr-cell rr-head rr-heading">
                    <h5>Hole</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>1</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>2</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>3</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>4</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>5</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>6</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>7</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>8</h5>
                </div>

                <div class="col rr-cell rr-head">
                    <h5>9</h5>
                </div>   

                <div class="col rr-cell rr-head rr-total">
                    <h5>Total</h5>
                </div>                                                                                                                                                                                                                                                                                


            </div>
            <!-- /.row -->

            <div class="row rr-row yards-row red">

                <div class="col rr-cell rr-heading">
                    <h5>Yards</h5>
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_19_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_19_red') ? ' is-invalid' : '' }}" name="hole_19_red" value="{{ old('hole_19_red', $course_info->hole_19_red) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_20_red') ? ' is-invalid' : '' }}" name="hole_20_red" value="{{ old('hole_20_red', $course_info->hole_20_red) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_21_red') ? ' is-invalid' : '' }}" name="hole_21_red" value="{{ old('hole_21_red', $course_info->hole_21_red) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_22_red') ? ' is-invalid' : '' }}" name="hole_22_red" value="{{ old('hole_22_red', $course_info->hole_22_red) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_23_red') ? ' is-invalid' : '' }}" name="hole_23_red" value="{{ old('hole_23_red', $course_info->hole_23_red) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_24_red') ? ' is-invalid' : '' }}" name="hole_24_red" value="{{ old('hole_24_red', $course_info->hole_24_red) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_25_red') ? ' is-invalid' : '' }}" name="hole_25_red" value="{{ old('hole_25_red', $course_info->hole_25_red) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_26_red') ? ' is-invalid' : '' }}" name="hole_26_red" value="{{ old('hole_26_red', $course_info->hole_26_red) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_red" type="text" class="form-control third-red-yards {{ $errors->has('hole_27_red') ? ' is-invalid' : '' }}" name="hole_27_red" value="{{ old('hole_27_red', $course_info->hole_27_red) }}">
                </div>
                
                <div class="col rr-cell rr-total">
                    <span id="thirdRedYards"></span>
                </div>                                                                                                                                                                                                                                                   


            </div>
            <!-- /.row --> 

            <div class="row rr-row ">

                <div class="col rr-cell rr-heading">
                    <h5>Par</h5>
                </div>
                              
                <div class="col rr-cell">
                    <input id="hole_19_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_19_red_par') ? ' is-invalid' : '' }}" name="hole_19_red_par" value="{{ old('hole_19_red_par', $course_info->hole_19_red_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_20_red_par') ? ' is-invalid' : '' }}" name="hole_20_red_par" value="{{ old('hole_20_red_par', $course_info->hole_20_red_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_21_red_par') ? ' is-invalid' : '' }}" name="hole_21_red_par" value="{{ old('hole_21_red_par', $course_info->hole_21_red_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_22_red_par') ? ' is-invalid' : '' }}" name="hole_22_red_par" value="{{ old('hole_22_red_par', $course_info->hole_22_red_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_23_red_par') ? ' is-invalid' : '' }}" name="hole_23_red_par" value="{{ old('hole_23_red_par', $course_info->hole_23_red_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_24_red_par') ? ' is-invalid' : '' }}" name="hole_24_red_par" value="{{ old('hole_24_red_par', $course_info->hole_24_red_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_25_red_par') ? ' is-invalid' : '' }}" name="hole_25_red_par" value="{{ old('hole_25_red_par', $course_info->hole_25_red_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_26_red_par') ? ' is-invalid' : '' }}" name="hole_26_red_par" value="{{ old('hole_26_red_par', $course_info->hole_26_red_par) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_red_par" type="text" class="form-control third-red-par {{ $errors->has('hole_27_red_par') ? ' is-invalid' : '' }}" name="hole_27_red_par" value="{{ old('hole_27_red_par', $course_info->hole_27_red_par) }}">
                </div>                
                
                <div class="col rr-cell rr-total">
                    <span id="thirdRedPar"></span>
                </div>                                                                                                                                                                                                                                                     


            </div>
            <!-- /.row -->       

            <div class="row rr-row ">

                <div class="col rr-cell rr-heading">
                    <h5>S.I.Front <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index-front')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                </div>
                               
                <div class="col rr-cell">
                    <input id="hole_19_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_19_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_19_red_stroke_index_front" value="{{ old('hole_19_red_stroke_index_front', $course_info->hole_19_red_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_20_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_20_red_stroke_index_front" value="{{ old('hole_20_red_stroke_index_front', $course_info->hole_20_red_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_21_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_21_red_stroke_index_front" value="{{ old('hole_21_red_stroke_index_front', $course_info->hole_21_red_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_22_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_22_red_stroke_index_front" value="{{ old('hole_22_red_stroke_index_front', $course_info->hole_22_red_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_23_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_23_red_stroke_index_front" value="{{ old('hole_23_red_stroke_index_front', $course_info->hole_23_red_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_24_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_24_red_stroke_index_front" value="{{ old('hole_24_red_stroke_index_front', $course_info->hole_24_red_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_25_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_25_red_stroke_index_front" value="{{ old('hole_25_red_stroke_index_front', $course_info->hole_25_red_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_26_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_26_red_stroke_index_front" value="{{ old('hole_26_red_stroke_index_front', $course_info->hole_26_red_stroke_index_front) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_red_stroke_index_front" type="text" class="form-control {{ $errors->has('hole_27_red_stroke_index_front') ? ' is-invalid' : '' }}" name="hole_27_red_stroke_index_front" value="{{ old('hole_27_red_stroke_index_front', $course_info->hole_27_red_stroke_index_front) }}">
                </div>               
                
                <div class="col rr-cell rr-total">
                n/a
                </div> 

            </div>
            <!-- /.row -->  

            <div class="row rr-row ">

                <div class="col rr-cell rr-heading">
                    <h5>S.I. Back <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.stroke-index-back')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
                </div>
                               
                <div class="col rr-cell">
                    <input id="hole_19_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_19_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_19_red_stroke_index_back" value="{{ old('hole_19_red_stroke_index_back', $course_info->hole_19_red_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_20_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_20_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_20_red_stroke_index_back" value="{{ old('hole_20_red_stroke_index_back', $course_info->hole_20_red_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_21_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_21_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_21_red_stroke_index_back" value="{{ old('hole_21_red_stroke_index_back', $course_info->hole_21_red_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_22_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_22_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_22_red_stroke_index_back" value="{{ old('hole_22_red_stroke_index_back', $course_info->hole_22_red_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_23_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_23_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_23_red_stroke_index_back" value="{{ old('hole_23_red_stroke_index_back', $course_info->hole_23_red_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_24_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_24_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_24_red_stroke_index_back" value="{{ old('hole_24_red_stroke_index_back', $course_info->hole_24_red_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_25_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_25_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_25_red_stroke_index_back" value="{{ old('hole_25_red_stroke_index_back', $course_info->hole_25_red_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_26_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_26_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_26_red_stroke_index_back" value="{{ old('hole_26_red_stroke_index_back', $course_info->hole_26_red_stroke_index_back) }}">
                </div>
                
                <div class="col rr-cell">
                    <input id="hole_27_red_stroke_index_back" type="text" class="form-control {{ $errors->has('hole_27_red_stroke_index_back') ? ' is-invalid' : '' }}" name="hole_27_red_stroke_index_back" value="{{ old('hole_27_red_stroke_index_back', $course_info->hole_27_red_stroke_index_back) }}">
                </div>                
                
                <div class="col rr-cell rr-total">
                n/a
                </div>

            </div>
            <!-- /.row -->    

        @endif



        @if($selected_size === '9')

            <div class="row">

                <div class="col">
                    
                </div>               

                <div class="col-auto">

                    <div class="form-group row no-gutters">
                        <label for="red_half_sss" class="col-auto col-form-label">SSS</label>
                        <div class="col">
                            <input id="red_half_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('red_half_sss') ? ' is-invalid' : '' }}" name="red_half_sss" value="{{ old('red_half_sss', $course_info->red_half_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>

                </div>             

            </div>
            <!--/.row -->

        @elseif($selected_size === '18')

            <div class="row">

                <div class="col">
                    
                </div>             

                <div class="col-auto">

                    <div class="form-group row no-gutters">
                        <label for="red_sss" class="col-auto col-form-label">SSS</label>
                        <div class="col">
                            <input id="red_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('red_sss') ? ' is-invalid' : '' }}" name="red_sss" value="{{ old('red_sss', $course_info->red_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>

                </div>               

            </div>
            <!--/.row -->                    

        @elseif($selected_size === '27')
            
            <br />
            <br />
            <h3>SSS <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h3>

            <p>A 27 hole courses allows you to play two different sets of nine holes to create an 18 hole round, they should also provide an SSS for each combination of these sets. The SSS's are usually found on the courses scorecard in the top right hand corner. Sometimes a 27 hole course will have separate scorecard for each combination of nine hole sets.</p>           

            <div class="row sss-row">

                <div class="col">
                
                    <div class="form-group row no-gutters red">
                        <label for="red_first_second_sss" class="col col-form-label text-right">First/Second Nine SSS</label>
                        <div class="col-auto">
                            <input id="red_first_second_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('red_first_second_sss') ? ' is-invalid' : '' }}" name="red_first_second_sss" value="{{ old('red_first_second_sss', $course_info->red_first_second_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss-first-nine-second-nine')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>
                
                <div class="col">
                
                    <div class="form-group row no-gutters red">
                        <label for="red_second_third_sss" class="col col-form-label text-right">Second/Third Nine SSS</label>
                        <div class="col-auto">
                            <input id="red_second_third_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('red_second_third_sss') ? ' is-invalid' : '' }}" name="red_second_third_sss" value="{{ old('red_second_third_sss', $course_info->red_second_third_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss-second-nine-third-nine')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>
                
                <div class="col">
                
                    <div class="form-group row no-gutters red">
                        <label for="red_first_third_sss" class="col col-form-label text-right">First/Third Nine SSS</label>
                        <div class="col-auto">
                            <input id="red_first_third_sss" type="text" class="form-control form-control-tooltip sss-input {{ $errors->has('red_first_third_sss') ? ' is-invalid' : '' }}" name="red_first_third_sss" value="{{ old('red_first_third_sss', $course_info->red_first_third_sss) }}">
                            <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.sss-first-nine-third-nine')" class="form-tooltip"><i class="far fa-info-circle"></i></a>
                        </div>
                    </div>
                
                </div>               
                
            </div>
            <!--/.row -->

        @endif 


    </div>
    <!--/#reds -->

</div>
<!-- /.tab-content-->
