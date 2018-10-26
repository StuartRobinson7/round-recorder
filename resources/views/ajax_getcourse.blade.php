<h3 class="title"><span>Handicap/Statistics</span></h3>

<div class="row">

    <div class="col-12 col-md-8 offset-md-4">

        <div class="form-group">

            <span class="switch switch-lg">

                <input type="checkbox" class="switch" id="stats_round" name="stats_round" value="1" checked>

                <label for="stats_round">Record Statistics for this round?</label>

            </span>

        </div>

    </div>

</div>

<div class="row">

        <div class="col-12 col-md-8 offset-md-4">

            <div class="form-group">
    
                <span class="switch switch-lg">

                        <input type="checkbox" class="switch" id="handicap_round" name="handicap_round" value="1" checked>
            
                        <label for="handicap_round">Handicap Round - Allow this round to effect your handicap?</label>
            
                </span>

            </div>
    
        </div>
    
    </div>
    <!--/.row -->


<br />
<h3 class="title"><span>Record Your Score</span></h3>
<br />

@if($selected_nine === 'first-nine' || $selected_nine === 'first-nine-second-nine' || $selected_nine === 'first-nine-third-nine')


@if($course_data->holes === 27)

<h4 class="text-center">{{ $course_data->first_nine_name }}</h4>

@else

<h4 class="text-center">Front 9</h4>

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
<!--/.row -->

<div class="row rr-row add-round-yards @if ($selected_yards === 'white') white @elseif ($selected_yards === 'yellow') yellow @elseif ($selected_yards === 'red') red @endif">

    <div class="col rr-cell rr-heading">
        <h5>Yards</h5>
    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_1_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_1_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_1_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_2_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_2_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_2_red}}

        @endif

    </div>

    <div class="col rr-cell">


        @if ($selected_yards === 'white')

        {{$course_data->hole_3_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_3_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_3_red}}

        @endif


    </div>

    <div class="col rr-cell">


        @if ($selected_yards === 'white')

        {{$course_data->hole_4_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_4_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_4_red}}

        @endif


    </div>

    <div class="col rr-cell">


        @if ($selected_yards === 'white')

        {{$course_data->hole_5_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_5_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_5_red}}

        @endif


    </div>

    <div class="col rr-cell">


        @if ($selected_yards === 'white')

        {{$course_data->hole_6_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_6_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_6_red}}

        @endif


    </div>

    <div class="col rr-cell">


        @if ($selected_yards === 'white')

        {{$course_data->hole_7_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_7_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_7_red}}

        @endif


    </div>

    <div class="col rr-cell">


        @if ($selected_yards === 'white')

        {{$course_data->hole_8_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_8_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_8_red}}

        @endif


    </div>

    <div class="col rr-cell">


        @if ($selected_yards === 'white')

        {{$course_data->hole_9_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_9_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_9_red}}

        @endif


    </div>

    <div class="col rr-cell rr-total">


        @if ($selected_yards === 'white')

        {{ $course_totals->first_nine_white }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_totals->first_nine_yellow }}

        @elseif ($selected_yards === 'red')

        {{ $course_totals->first_nine_red }}

        @endif


    </div>

</div>
<!--/.row -->

<div class="row rr-row add-round-par">

    <div class="col rr-cell rr-heading">
        <h5>Par <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.par')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_1_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_1_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_1_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_2_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_2_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_2_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_3_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_3_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_3_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_4_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_4_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_4_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_5_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_5_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_5_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_6_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_6_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_6_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_7_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_7_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_7_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_8_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_8_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_8_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_9_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_9_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_9_red_par }}

        @endif

    </div>


    <div class="col rr-cell rr-total">

        @if ($selected_yards === 'white')

        {{ $course_totals->first_nine_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_totals->first_nine_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_totals->first_nine_red_par }}

        @endif

    </div>

</div>
<!--/.row -->

<div class="row rr-row add-round-score">

    <div class="col rr-cell rr-heading">

        <h5>Score <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.score')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

    </div>

    <div class="col rr-cell">

        <input id="hole_1_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_1_score') ? ' is-invalid' : '' }}" name="hole_1_score" value="{{ old('hole_1_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_2_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_2_score') ? ' is-invalid' : '' }}" name="hole_2_score" value="{{ old('hole_2_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_3_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_3_score') ? ' is-invalid' : '' }}" name="hole_3_score" value="{{ old('hole_3_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_4_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_4_score') ? ' is-invalid' : '' }}" name="hole_4_score" value="{{ old('hole_4_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_5_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_5_score') ? ' is-invalid' : '' }}" name="hole_5_score" value="{{ old('hole_5_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_6_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_6_score') ? ' is-invalid' : '' }}" name="hole_6_score" value="{{ old('hole_6_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_7_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_7_score') ? ' is-invalid' : '' }}" name="hole_7_score" value="{{ old('hole_7_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_8_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_8_score') ? ' is-invalid' : '' }}" name="hole_8_score" value="{{ old('hole_8_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_9_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_9_score') ? ' is-invalid' : '' }}" name="hole_9_score" value="{{ old('hole_9_score') }}">

    </div>

    <div class="col rr-cell rr-total">

        <span id="firstNineScore"></span>
        <!-- @{{firstNineTotal}} -->

    </div>


</div>
<!--/.row -->


<div class="show-stats">

    <div class="row rr-row add-round-putts">

        <div class="col rr-cell rr-heading">

            <h5>Putts <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.putts')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <input id="hole_1_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_1_putts') ? ' is-invalid' : '' }}" name="hole_1_putts" value="{{ old('hole_1_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_2_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_2_putts') ? ' is-invalid' : '' }}" name="hole_2_putts" value="{{ old('hole_2_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_3_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_3_putts') ? ' is-invalid' : '' }}" name="hole_3_putts" value="{{ old('hole_3_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_4_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_4_putts') ? ' is-invalid' : '' }}" name="hole_4_putts" value="{{ old('hole_4_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_5_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_5_putts') ? ' is-invalid' : '' }}" name="hole_5_putts" value="{{ old('hole_5_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_6_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_6_putts') ? ' is-invalid' : '' }}" name="hole_6_putts" value="{{ old('hole_6_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_7_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_7_putts') ? ' is-invalid' : '' }}" name="hole_7_putts" value="{{ old('hole_7_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_8_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_8_putts') ? ' is-invalid' : '' }}" name="hole_8_putts" value="{{ old('hole_8_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_9_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_9_putts') ? ' is-invalid' : '' }}" name="hole_9_putts" value="{{ old('hole_9_putts') }}">

        </div>

        <div class="col rr-cell rr-total">

            <span id="firstNinePutts"></span>

        </div>


    </div>
    <!--/.row -->

    <div class="row rr-row add-round-drops">

        <div class="col rr-cell rr-heading">

            <h5>Drops <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.drops')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <input id="hole_1_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_1_drops') ? ' is-invalid' : '' }}" name="hole_1_drops" value="{{ old('hole_1_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_2_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_2_drops') ? ' is-invalid' : '' }}" name="hole_2_drops" value="{{ old('hole_2_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_3_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_3_drops') ? ' is-invalid' : '' }}" name="hole_3_drops" value="{{ old('hole_3_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_4_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_4_drops') ? ' is-invalid' : '' }}" name="hole_4_drops" value="{{ old('hole_4_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_5_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_5_drops') ? ' is-invalid' : '' }}" name="hole_5_drops" value="{{ old('hole_5_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_6_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_6_drops') ? ' is-invalid' : '' }}" name="hole_6_drops" value="{{ old('hole_6_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_7_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_7_drops') ? ' is-invalid' : '' }}" name="hole_7_drops" value="{{ old('hole_7_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_8_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_8_drops') ? ' is-invalid' : '' }}" name="hole_8_drops" value="{{ old('hole_8_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_9_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_9_drops') ? ' is-invalid' : '' }}" name="hole_9_drops" value="{{ old('hole_9_drops') }}">

        </div>

        <div class="col rr-cell rr-total">

            <span id="firstNineDrops"></span>

        </div>


    </div>
    <!--/.row -->

    <div id="FirstNineFirs" class="row rr-row add-round-fir">

        <div class="col rr-cell rr-heading">

            <h5>FIR <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.fir')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">

                <input id="hole_1_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_1_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_1_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_1_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_1_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_1_fir"></label>

            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">

                <input id="hole_2_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_2_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_2_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_2_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_2_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_2_fir"></label>

            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">

                <input id="hole_3_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_3_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_3_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_3_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_3_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_3_fir"></label>

            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">

                <input id="hole_4_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_4_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_4_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_4_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_4_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_4_fir"></label>

            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">

                <input id="hole_5_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_5_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_5_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_5_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_5_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_5_fir"></label>

            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">

                <input id="hole_6_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_6_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_6_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_6_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_6_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_6_fir"></label>

            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">

                <input id="hole_7_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_7_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_7_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_7_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_7_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_7_fir"></label>

            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">

                <input id="hole_8_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_8_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_8_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_8_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_8_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_8_fir"></label>

            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">

                <input id="hole_9_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_9_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_9_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_9_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_9_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_9_fir"></label>

            </div>

        </div>

        <div class="col rr-cell rr-total">

            <span id="FirstNineFirCount"></span>

        </div>


    </div>
    <!--/.row -->

    <div id="FirstNineGirs" class="row rr-row add-round-gir">

        <div class="col rr-cell rr-heading">

            <h5>GIR <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.gir')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">


            <div class="custom-control custom-checkbox">
                <input id="hole_1_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_1_gir" value="1">
                <label class="custom-control-label" for="hole_1_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_2_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_2_gir" value="1">
                <label class="custom-control-label" for="hole_2_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_3_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_3_gir" value="1">
                <label class="custom-control-label" for="hole_3_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_4_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_4_gir" value="1">
                <label class="custom-control-label" for="hole_4_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_5_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_5_gir" value="1">
                <label class="custom-control-label" for="hole_5_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_6_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_6_gir" value="1">
                <label class="custom-control-label" for="hole_6_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_7_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_7_gir" value="1">
                <label class="custom-control-label" for="hole_7_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_8_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_8_gir" value="1">
                <label class="custom-control-label" for="hole_8_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_9_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_9_gir" value="1">
                <label class="custom-control-label" for="hole_9_gir"></label>
            </div>

        </div>

        <div class="col rr-cell rr-total">

            <span id="FirstNineGirCount"></span>

        </div>


    </div>
    <!--/.row -->

</div>

@endif

@if($selected_nine === 'second-nine' || $selected_nine === 'first-nine-second-nine' || $selected_nine === 'second-nine-third-nine')

<br />


@if($course_data->holes === 27)

<h4 class="text-center">{{ $course_data->second_nine_name }}</h4>

@else

<h4 class="text-center">Back 9</h4>

@endif

<div class="row rr-row rr-head-row">

    <div class="col rr-cell rr-head rr-heading">
        <h5>Hole</h5>
    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>1</h5>
        @else
        <h5>10</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>2</h5>
        @else
        <h5>11</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>3</h5>
        @else
        <h5>12</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>4</h5>
        @else
        <h5>13</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>5</h5>
        @else
        <h5>14</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>6</h5>
        @else
        <h5>15</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>7</h5>
        @else
        <h5>16</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>8</h5>
        @else
        <h5>17</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>9</h5>
        @else
        <h5>18</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head rr-total">
        <h5>Total</h5>
    </div>

</div>
<!--/.row -->

<div class="row rr-row add-round-yards @if ($selected_yards === 'white') white @elseif ($selected_yards === 'yellow') yellow @elseif ($selected_yards === 'red') red @endif">

    <div class="col rr-cell rr-heading">
        <h5>Yards</h5>
    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_10_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_10_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_10_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_11_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_11_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_11_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_12_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_12_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_12_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_13_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_13_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_13_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_14_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_14_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_14_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_15_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_15_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_15_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_16_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_16_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_16_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_17_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_17_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_17_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_18_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_18_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_18_red}}

        @endif

    </div>

    <div class="col rr-cell rr-total">

        @if ($selected_yards === 'white')

        {{ $course_totals->second_nine_white }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_totals->second_nine_yellow }}

        @elseif ($selected_yards === 'red')

        {{ $course_totals->second_nine_red }}

        @endif

    </div>

</div>
<!--/.row -->

<div class="row rr-row add-round-par">

    <div class="col rr-cell rr-heading">
        <h5>Par <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.par')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_10_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_10_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_10_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_11_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_11_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_11_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_12_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_12_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_12_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_13_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_13_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_13_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_14_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_14_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_14_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_15_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_15_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_15_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_16_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_16_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_16_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_17_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_17_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_17_red_par }}

        @endif

    </div>


    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_18_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_18_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_18_red_par }}

        @endif

    </div>


    <div class="col rr-cell rr-total">

        @if ($selected_yards === 'white')

        {{ $course_totals->second_nine_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_totals->second_nine_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_totals->second_nine_red_par }}

        @endif

    </div>

</div>
<!--/.row -->

<div class="row rr-row add-round-score">

    <div class="col rr-cell rr-heading">

        <h5>Score <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.score')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

    </div>

    <div class="col rr-cell">

        <input id="hole_10_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_10_score') ? ' is-invalid' : '' }}" name="hole_10_score" value="{{ old('hole_10_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_11_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_11_score') ? ' is-invalid' : '' }}" name="hole_11_score" value="{{ old('hole_11_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_12_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_12_score') ? ' is-invalid' : '' }}" name="hole_12_score" value="{{ old('hole_12_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_13_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_13_score') ? ' is-invalid' : '' }}" name="hole_13_score" value="{{ old('hole_13_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_14_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_14_score') ? ' is-invalid' : '' }}" name="hole_14_score" value="{{ old('hole_14_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_15_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_15_score') ? ' is-invalid' : '' }}" name="hole_15_score" value="{{ old('hole_15_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_16_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_16_score') ? ' is-invalid' : '' }}" name="hole_16_score" value="{{ old('hole_16_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_17_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_17_score') ? ' is-invalid' : '' }}" name="hole_17_score" value="{{ old('hole_17_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_18_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_18_score') ? ' is-invalid' : '' }}" name="hole_18_score" value="{{ old('hole_18_score') }}">

    </div>

    <div class="col rr-cell rr-total">

        <span id="secondNineScore"></span>
        <!-- @{{secondNineTotal}} -->

    </div>


</div>
<!--/.row -->

<div class="show-stats">

    <div class="row rr-row add-round-putts">

        <div class="col rr-cell rr-heading">

            <h5>Putts <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.putts')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <input id="hole_10_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_10_putts') ? ' is-invalid' : '' }}" name="hole_10_putts" value="{{ old('hole_10_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_11_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_11_putts') ? ' is-invalid' : '' }}" name="hole_11_putts" value="{{ old('hole_11_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_12_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_12_putts') ? ' is-invalid' : '' }}" name="hole_12_putts" value="{{ old('hole_12_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_13_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_13_putts') ? ' is-invalid' : '' }}" name="hole_13_putts" value="{{ old('hole_13_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_14_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_14_putts') ? ' is-invalid' : '' }}" name="hole_14_putts" value="{{ old('hole_14_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_15_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_15_putts') ? ' is-invalid' : '' }}" name="hole_15_putts" value="{{ old('hole_15_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_16_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_16_putts') ? ' is-invalid' : '' }}" name="hole_16_putts" value="{{ old('hole_16_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_17_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_17_putts') ? ' is-invalid' : '' }}" name="hole_17_putts" value="{{ old('hole_17_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_18_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_18_putts') ? ' is-invalid' : '' }}" name="hole_18_putts" value="{{ old('hole_18_putts') }}">

        </div>

        <div class="col rr-cell rr-total">

            <span id="secondNinePutts"></span>

        </div>


    </div>
    <!--/.row -->

    <div class="row rr-row add-round-drops">

        <div class="col rr-cell rr-heading">

            <h5>Drops <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.drops')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <input id="hole_10_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_10_drops') ? ' is-invalid' : '' }}" name="hole_10_drops" value="{{ old('hole_10_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_11_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_11_drops') ? ' is-invalid' : '' }}" name="hole_11_drops" value="{{ old('hole_11_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_12_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_12_drops') ? ' is-invalid' : '' }}" name="hole_12_drops" value="{{ old('hole_12_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_13_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_13_drops') ? ' is-invalid' : '' }}" name="hole_13_drops" value="{{ old('hole_13_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_14_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_14_drops') ? ' is-invalid' : '' }}" name="hole_14_drops" value="{{ old('hole_14_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_15_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_15_drops') ? ' is-invalid' : '' }}" name="hole_15_drops" value="{{ old('hole_15_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_16_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_16_drops') ? ' is-invalid' : '' }}" name="hole_16_drops" value="{{ old('hole_16_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_17_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_17_drops') ? ' is-invalid' : '' }}" name="hole_17_drops" value="{{ old('hole_17_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_18_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_18_drops') ? ' is-invalid' : '' }}" name="hole_18_drops" value="{{ old('hole_18_drops') }}">

        </div>

        <div class="col rr-cell rr-total">

            <span id="secondNineDrops"></span>

        </div>


    </div>
    <!--/.row -->

    <div id="SecondNineFirs" class="row rr-row add-round-fir">

        <div class="col rr-cell rr-heading">

            <h5>FIR <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.fir')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_10_fir" type="checkbox" class="form-control SecondNineFir custom-control-input" name="hole_10_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_10_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_10_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_10_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_10_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_11_fir" type="checkbox" class="form-control SecondNineFir custom-control-input" name="hole_11_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_11_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_11_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_11_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_11_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_12_fir" type="checkbox" class="form-control SecondNineFir custom-control-input" name="hole_12_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_12_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_12_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_12_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_12_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_13_fir" type="checkbox" class="form-control SecondNineFir custom-control-input" name="hole_13_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_13_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_13_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_13_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_13_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_14_fir" type="checkbox" class="form-control SecondNineFir custom-control-input" name="hole_14_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_14_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_14_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_14_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_14_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_15_fir" type="checkbox" class="form-control SecondNineFir custom-control-input" name="hole_15_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_15_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_15_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_15_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_15_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_16_fir" type="checkbox" class="form-control SecondNineFir custom-control-input" name="hole_16_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_16_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_16_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_16_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_16_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_17_fir" type="checkbox" class="form-control SecondNineFir custom-control-input" name="hole_17_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_17_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_17_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_17_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_17_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_18_fir" type="checkbox" class="form-control SecondNineFir custom-control-input" name="hole_18_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_18_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_18_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_18_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_18_fir"></label>
            </div>

        </div>

        <div class="col rr-cell rr-total">

            <span id="SecondNineFirCount"></span>

        </div>


    </div>
    <!--/.row -->

    <div id="SecondNineGirs" class="row rr-row add-round-gir">

        <div class="col rr-cell rr-heading">

            <h5>GIR <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.gir')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_10_gir" type="checkbox" class="form-control SecondNineGir custom-control-input" name="hole_10_gir" value="1">
                <label class="custom-control-label" for="hole_10_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_11_gir" type="checkbox" class="form-control SecondNineGir custom-control-input" name="hole_11_gir" value="1">
                <label class="custom-control-label" for="hole_11_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_12_gir" type="checkbox" class="form-control SecondNineGir custom-control-input" name="hole_12_gir" value="1">
                <label class="custom-control-label" for="hole_12_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_13_gir" type="checkbox" class="form-control SecondNineGir custom-control-input" name="hole_13_gir" value="1">
                <label class="custom-control-label" for="hole_13_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_14_gir" type="checkbox" class="form-control SecondNineGir custom-control-input" name="hole_14_gir" value="1">
                <label class="custom-control-label" for="hole_14_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_15_gir" type="checkbox" class="form-control SecondNineGir custom-control-input" name="hole_15_gir" value="1">
                <label class="custom-control-label" for="hole_15_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_16_gir" type="checkbox" class="form-control SecondNineGir custom-control-input" name="hole_16_gir" value="1">
                <label class="custom-control-label" for="hole_16_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_17_gir" type="checkbox" class="form-control SecondNineGir custom-control-input" name="hole_17_gir" value="1">
                <label class="custom-control-label" for="hole_17_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_18_gir" type="checkbox" class="form-control SecondNineGir custom-control-input" name="hole_18_gir" value="1">
                <label class="custom-control-label" for="hole_18_gir"></label>
            </div>

        </div>

        <div class="col rr-cell rr-total">

            <span id="SecondNineGirCount"></span>

        </div>


    </div>
    <!--/.row -->

</div>

@endif


@if($selected_nine === 'third-nine' || $selected_nine === 'first-nine-third-nine' || $selected_nine === 'second-nine-third-nine')

<br />

@if($course_data->holes === 27)

<h4 class="text-center">{{ $course_data->third_nine_name }}</h4>

@else

<h4 class="text-center">Third 9</h4>

@endif

<div class="row rr-row rr-head-row">

    <div class="col rr-cell rr-head rr-heading">
        <h5>Hole</h5>
    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>1</h5>
        @else
        <h5>10</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>2</h5>
        @else
        <h5>11</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>3</h5>
        @else
        <h5>12</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>4</h5>
        @else
        <h5>13</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>5</h5>
        @else
        <h5>14</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>6</h5>
        @else
        <h5>15</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>7</h5>
        @else
        <h5>16</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>8</h5>
        @else
        <h5>17</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head">

        @if($course_data->holes === 27)
        <h5>9</h5>
        @else
        <h5>18</h5>
        @endif

    </div>

    <div class="col rr-cell rr-head rr-total">
        <h5>Total</h5>
    </div>

</div>
<!--/.row -->

<div class="row rr-row add-round-yards @if ($selected_yards === 'white') white @elseif ($selected_yards === 'yellow') yellow @elseif ($selected_yards === 'red') red @endif">

    <div class="col rr-cell rr-heading">
        <h5>Yards</h5>
    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_19_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_19_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_19_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_20_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_20_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_20_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_21_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_21_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_21_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_22_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_22_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_22_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_23_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_23_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_23_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_24_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_24_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_24_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_25_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_25_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_25_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_26_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_26_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_26_red}}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{$course_data->hole_27_white}}

        @elseif ($selected_yards === 'yellow')

        {{$course_data->hole_27_yellow}}

        @elseif ($selected_yards === 'red')

        {{$course_data->hole_27_red}}

        @endif

    </div>

    <div class="col rr-cell rr-total">

        @if ($selected_yards === 'white')

        {{ $course_totals->third_nine_white }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_totals->third_nine_yellow }}

        @elseif ($selected_yards === 'red')

        {{ $course_totals->third_nine_red }}

        @endif

    </div>

</div>
<!--/.row -->

<div class="row rr-row add-round-par">

    <div class="col rr-cell rr-heading">
        <h5>Par <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.par')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>
    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_19_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_19_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_19_red_par }}

        @endif

    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_20_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_20_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_20_red_par }}

        @endif


    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_21_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_21_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_21_red_par }}

        @endif


    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_22_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_22_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_22_red_par }}

        @endif


    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_23_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_23_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_23_red_par }}

        @endif


    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_24_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_24_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_24_red_par }}

        @endif


    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_25_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_25_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_25_red_par }}

        @endif


    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_26_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_26_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_26_red_par }}

        @endif


    </div>

    <div class="col rr-cell">

        @if ($selected_yards === 'white')

        {{ $course_data->hole_27_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_data->hole_27_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_data->hole_27_red_par }}

        @endif


    </div>

    <div class="col rr-cell rr-total">

        @if ($selected_yards === 'white')

        {{ $course_totals->third_nine_white_par }}

        @elseif ($selected_yards === 'yellow')

        {{ $course_totals->third_nine_yellow_par }}

        @elseif ($selected_yards === 'red')

        {{ $course_totals->third_nine_red_par }}

        @endif

    </div>

</div>
<!--/.row -->

<div class="row rr-row add-round-score">

    <div class="col rr-cell rr-heading">

        <h5>Score <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.score')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

    </div>

    <div class="col rr-cell">

        <input id="hole_19_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_19_score') ? ' is-invalid' : '' }}" name="hole_19_score" value="{{ old('hole_19_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_20_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_20_score') ? ' is-invalid' : '' }}" name="hole_20_score" value="{{ old('hole_20_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_21_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_21_score') ? ' is-invalid' : '' }}" name="hole_21_score" value="{{ old('hole_21_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_22_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_22_score') ? ' is-invalid' : '' }}" name="hole_22_score" value="{{ old('hole_22_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_23_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_23_score') ? ' is-invalid' : '' }}" name="hole_23_score" value="{{ old('hole_23_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_24_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_24_score') ? ' is-invalid' : '' }}" name="hole_24_score" value="{{ old('hole_24_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_25_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_25_score') ? ' is-invalid' : '' }}" name="hole_25_score" value="{{ old('hole_25_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_26_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_26_score') ? ' is-invalid' : '' }}" name="hole_26_score" value="{{ old('hole_26_score') }}">

    </div>

    <div class="col rr-cell">

        <input id="hole_27_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_27_score') ? ' is-invalid' : '' }}" name="hole_27_score" value="{{ old('hole_27_score') }}">

    </div>

    <div class="col rr-cell rr-total">

        <span id="thirdNineScore"></span>
        <!-- @{{thirdNineTotal}} -->

    </div>


</div>
<!--/.row -->

<div class="show-stats">

    <div class="row rr-row add-round-putts">

        <div class="col rr-cell rr-heading">

            <h5>Putts <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.putts')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <input id="hole_19_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_19_putts') ? ' is-invalid' : '' }}" name="hole_19_putts" value="{{ old('hole_19_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_20_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_20_putts') ? ' is-invalid' : '' }}" name="hole_20_putts" value="{{ old('hole_20_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_21_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_21_putts') ? ' is-invalid' : '' }}" name="hole_21_putts" value="{{ old('hole_21_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_22_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_22_putts') ? ' is-invalid' : '' }}" name="hole_22_putts" value="{{ old('hole_22_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_23_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_23_putts') ? ' is-invalid' : '' }}" name="hole_23_putts" value="{{ old('hole_23_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_24_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_24_putts') ? ' is-invalid' : '' }}" name="hole_24_putts" value="{{ old('hole_24_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_25_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_25_putts') ? ' is-invalid' : '' }}" name="hole_25_putts" value="{{ old('hole_25_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_26_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_26_putts') ? ' is-invalid' : '' }}" name="hole_26_putts" value="{{ old('hole_26_putts') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_27_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_27_putts') ? ' is-invalid' : '' }}" name="hole_27_putts" value="{{ old('hole_27_putts') }}">

        </div>

        <div class="col rr-cell rr-total">

            <span id="thirdNinePutts"></span>

        </div>


    </div>
    <!--/.row -->

    <div class="row rr-row add-round-drops">

        <div class="col rr-cell rr-heading">

            <h5>Drops <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.drops')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <input id="hole_19_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_19_drops') ? ' is-invalid' : '' }}" name="hole_19_drops" value="{{ old('hole_19_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_20_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_20_drops') ? ' is-invalid' : '' }}" name="hole_20_drops" value="{{ old('hole_20_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_21_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_21_drops') ? ' is-invalid' : '' }}" name="hole_21_drops" value="{{ old('hole_21_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_22_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_22_drops') ? ' is-invalid' : '' }}" name="hole_22_drops" value="{{ old('hole_22_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_23_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_23_drops') ? ' is-invalid' : '' }}" name="hole_23_drops" value="{{ old('hole_23_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_24_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_24_drops') ? ' is-invalid' : '' }}" name="hole_24_drops" value="{{ old('hole_24_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_25_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_25_drops') ? ' is-invalid' : '' }}" name="hole_25_drops" value="{{ old('hole_25_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_26_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_26_drops') ? ' is-invalid' : '' }}" name="hole_26_drops" value="{{ old('hole_26_drops') }}">

        </div>

        <div class="col rr-cell">

            <input id="hole_27_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_27_drops') ? ' is-invalid' : '' }}" name="hole_27_drops" value="{{ old('hole_27_drops') }}">

        </div>

        <div class="col rr-cell rr-total">

            <span id="thirdNineDrops"></span>

        </div>


    </div>
    <!--/.row -->

    <div id="ThirdNineFirs" class="row rr-row add-round-fir">

        <div class="col rr-cell rr-heading">

            <h5>FIR <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.fir')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_19_fir" type="checkbox" class="form-control ThirdNineFir custom-control-input" name="hole_19_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_19_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_19_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_19_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_19_fir"></label>
            </div>
        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_20_fir" type="checkbox" class="form-control ThirdNineFir custom-control-input" name="hole_20_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_20_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_20_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_20_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_20_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_21_fir" type="checkbox" class="form-control ThirdNineFir custom-control-input" name="hole_21_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_21_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_21_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_21_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_21_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_22_fir" type="checkbox" class="form-control ThirdNineFir custom-control-input" name="hole_22_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_22_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_22_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_22_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_22_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_23_fir" type="checkbox" class="form-control ThirdNineFir custom-control-input" name="hole_23_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_23_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_23_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_23_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_23_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_24_fir" type="checkbox" class="form-control ThirdNineFir custom-control-input" name="hole_24_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_24_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_24_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_24_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_24_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_25_fir" type="checkbox" class="form-control ThirdNineFir custom-control-input" name="hole_25_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_25_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_25_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_25_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_25_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_26_fir" type="checkbox" class="form-control ThirdNineFir custom-control-input" name="hole_26_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_26_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_26_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_26_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_26_fir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_27_fir" type="checkbox" class="form-control ThirdNineFir custom-control-input" name="hole_27_fir" value="1" @if ($selected_yards==='white' ) {{ ($course_data->hole_27_white_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='yellow' ) {{ ($course_data->hole_27_yellow_par < 4 ? "disabled":"") }} @elseif ($selected_yards==='red' ) {{ ($course_data->hole_27_red_par < 4 ? "disabled":"") }} @endif>
                <label class="custom-control-label" for="hole_27_fir"></label>
            </div>

        </div>

        <div class="col rr-cell rr-total">

            <span id="ThirdNineFirCount"></span>

        </div>


    </div>
    <!--/.row -->

    <div id="ThirdNineGirs" class="row rr-row add-round-gir">

        <div class="col rr-cell rr-heading">

            <h5>GIR <a href="#" data-toggle="tooltip" data-html="true" title="@include('info.gir')" class="form-tooltip form-tooltip-static"><i class="far fa-info-circle"></i></a></h5>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_19_gir" type="checkbox" class="form-control ThirdNineGir custom-control-input" name="hole_19_gir" value="1">
                <label class="custom-control-label" for="hole_19_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_20_gir" type="checkbox" class="form-control ThirdNineGir custom-control-input" name="hole_20_gir" value="1">
                <label class="custom-control-label" for="hole_20_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_21_gir" type="checkbox" class="form-control ThirdNineGir custom-control-input" name="hole_21_gir" value="1">
                <label class="custom-control-label" for="hole_21_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_22_gir" type="checkbox" class="form-control ThirdNineGir custom-control-input" name="hole_22_gir" value="1">
                <label class="custom-control-label" for="hole_22_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_23_gir" type="checkbox" class="form-control ThirdNineGir custom-control-input" name="hole_23_gir" value="1">
                <label class="custom-control-label" for="hole_23_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_24_gir" type="checkbox" class="form-control ThirdNineGir custom-control-input" name="hole_24_gir" value="1">
                <label class="custom-control-label" for="hole_24_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_25_gir" type="checkbox" class="form-control ThirdNineGir custom-control-input" name="hole_25_gir" value="1">
                <label class="custom-control-label" for="hole_25_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_26_gir" type="checkbox" class="form-control ThirdNineGir custom-control-input" name="hole_26_gir" value="1">
                <label class="custom-control-label" for="hole_26_gir"></label>
            </div>

        </div>

        <div class="col rr-cell">

            <div class="custom-control custom-checkbox">
                <input id="hole_27_gir" type="checkbox" class="form-control ThirdNineGir custom-control-input" name="hole_27_gir" value="1">
                <label class="custom-control-label" for="hole_27_gir"></label>
            </div>

        </div>

        <div class="col rr-cell rr-total">

            <span id="ThirdNineGirCount"></span>

        </div>


    </div>
    <!--/.row -->

</div>

<br />


@endif


<div class="form-group noMarg">

    <label>Round Notes</label>
    <textarea id="round_notes" type="textarea" rows="4" class="form-control" name="round_notes" value="{{ old('round_notes') }}"> </textarea>

</div>



