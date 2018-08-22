


@foreach($course_data as $key => $par)

    @if($selected_nine === 'first-nine' || $selected_nine === 'first-nine-second-nine' || $selected_nine === 'first-nine-third-nine')
    
        @if($par->holes === 27)

            <h3>{{ $par->first_nine_name }}</h3>

        @else

            <h3>Front 9</h3>

        @endif

        <div class="row add-round-row add-round-hole">

            <div class="col">
                <h5>Hole</h5>
            </div>  

            <div class="col">
                <h5>1</h5>
            </div>

            <div class="col">
                <h5>2</h5>
            </div>

            <div class="col">
                <h5>3</h5>
            </div>

            <div class="col">
                <h5>4</h5>
            </div>  

            <div class="col">
                <h5>5</h5>
            </div>  

            <div class="col">
                <h5>6</h5>
            </div>  

            <div class="col">
                <h5>7</h5>
            </div>  

            <div class="col">
                <h5>8</h5>
            </div>  

            <div class="col">
                <h5>9</h5>
            </div>   

            <div class="col">
                <h5>Total</h5>
            </div>                                    

        </div>
        <!--/.row -->

        <div class="row add-round-row add-round-yards @if ($selected_yards === 'white') white @elseif ($selected_yards === 'yellow') yellow @elseif ($selected_yards === 'red') red @endif">

            <div class="col">
                <h5>Yards</h5>
            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_1_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_1_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_1_red}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_2_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_2_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_2_red}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_3_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_3_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_3_red}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_4_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_4_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_4_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_5_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_5_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_5_red}}  

                @endif

            </div>   

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_6_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_6_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_6_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_7_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_7_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_7_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_8_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_8_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_8_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_9_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_9_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_9_red}}  

                @endif

            </div>   

            <div class="col">

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

        <div class="row add-round-row add-round-par">

            <div class="col">
                <h5>Par</h5>
            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{ $par->hole_1_white_par }}

                @elseif ($selected_yards === 'yellow')

                    {{ $par->hole_1_yellow_par }}        

                @elseif ($selected_yards === 'red')

                    {{ $par->hole_1_red_par }}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_2_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_2_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_2_red_par }}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_3_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_3_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_3_red_par}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_4_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_4_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_4_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_5_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_5_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_5_red_par}}  

                @endif

            </div>   

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_6_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_6_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_6_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_7_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_7_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_7_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_8_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_8_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_8_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_9_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_9_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_9_red_par}}  

                @endif

            </div>   

            <div class="col">
                
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

        <div class="row add-round-row add-round-score">

            <div class="col">

                <h5>Score</h5>

            </div>

            <div class="col">

                <input id="hole_1_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_1_score') ? ' is-invalid' : '' }}" name="hole_1_score" value="{{ old('hole_1_score') }}">

            </div>

            <div class="col">

                <input id="hole_2_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_2_score') ? ' is-invalid' : '' }}" name="hole_2_score" value="{{ old('hole_2_score') }}">

            </div>            

            <div class="col">

                <input id="hole_3_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_3_score') ? ' is-invalid' : '' }}" name="hole_3_score" value="{{ old('hole_3_score') }}">

            </div>  

            <div class="col">

                <input id="hole_4_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_4_score') ? ' is-invalid' : '' }}" name="hole_4_score" value="{{ old('hole_4_score') }}">

            </div>   

            <div class="col">

                <input id="hole_5_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_5_score') ? ' is-invalid' : '' }}" name="hole_5_score" value="{{ old('hole_5_score') }}">

            </div>   

            <div class="col">

                <input id="hole_6_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_6_score') ? ' is-invalid' : '' }}" name="hole_6_score" value="{{ old('hole_6_score') }}">

            </div> 

            <div class="col">

                <input id="hole_7_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_7_score') ? ' is-invalid' : '' }}" name="hole_7_score" value="{{ old('hole_7_score') }}">

            </div>   

            <div class="col">

                <input id="hole_8_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_8_score') ? ' is-invalid' : '' }}" name="hole_8_score" value="{{ old('hole_8_score') }}">

            </div>  

            <div class="col">

                <input id="hole_9_score" type="number" class="form-control first-nine-score {{ $errors->has('hole_9_score') ? ' is-invalid' : '' }}" name="hole_9_score" value="{{ old('hole_9_score') }}">

            </div> 

            <div class="col">

                <span id="firstNineScore"></span>
                <!-- @{{firstNineTotal}} -->

            </div>                                                   


        </div> 
        <!--/.row -->

        <div class="row add-round-row add-round-putts">

            <div class="col">

                <h5>Putts</h5>

            </div>

            <div class="col">

                <input id="hole_1_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_1_putts') ? ' is-invalid' : '' }}" name="hole_1_putts" value="{{ old('hole_1_putts') }}">

            </div>

            <div class="col">

                <input id="hole_2_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_2_putts') ? ' is-invalid' : '' }}" name="hole_2_putts" value="{{ old('hole_2_putts') }}">

            </div>            

            <div class="col">

                <input id="hole_3_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_3_putts') ? ' is-invalid' : '' }}" name="hole_3_putts" value="{{ old('hole_3_putts') }}">

            </div>  

            <div class="col">

                <input id="hole_4_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_4_putts') ? ' is-invalid' : '' }}" name="hole_4_putts" value="{{ old('hole_4_putts') }}">

            </div>   

            <div class="col">

                <input id="hole_5_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_5_putts') ? ' is-invalid' : '' }}" name="hole_5_putts" value="{{ old('hole_5_putts') }}">

            </div>   

            <div class="col">

                <input id="hole_6_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_6_putts') ? ' is-invalid' : '' }}" name="hole_6_putts" value="{{ old('hole_6_putts') }}">

            </div> 

            <div class="col">

                <input id="hole_7_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_7_putts') ? ' is-invalid' : '' }}" name="hole_7_putts" value="{{ old('hole_7_putts') }}">

            </div>   

            <div class="col">

                <input id="hole_8_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_8_putts') ? ' is-invalid' : '' }}" name="hole_8_putts" value="{{ old('hole_8_putts') }}">

            </div>  

            <div class="col">

                <input id="hole_9_putts" type="number" class="form-control first-nine-putts {{ $errors->has('hole_9_putts') ? ' is-invalid' : '' }}" name="hole_9_putts" value="{{ old('hole_9_putts') }}">

            </div> 

            <div class="col">

                <span id="firstNinePutts"></span>

            </div>                                                   


        </div> 
        <!--/.row -->

        <div class="row add-round-row add-round-drops">

            <div class="col">

                <h5>Drops</h5>

            </div>

            <div class="col">

                <input id="hole_1_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_1_drops') ? ' is-invalid' : '' }}" name="hole_1_drops" value="{{ old('hole_1_drops') }}">

            </div>

            <div class="col">

                <input id="hole_2_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_2_drops') ? ' is-invalid' : '' }}" name="hole_2_drops" value="{{ old('hole_2_drops') }}">

            </div>            

            <div class="col">

                <input id="hole_3_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_3_drops') ? ' is-invalid' : '' }}" name="hole_3_drops" value="{{ old('hole_3_drops') }}">

            </div>  

            <div class="col">

                <input id="hole_4_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_4_drops') ? ' is-invalid' : '' }}" name="hole_4_drops" value="{{ old('hole_4_drops') }}">

            </div>   

            <div class="col">

                <input id="hole_5_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_5_drops') ? ' is-invalid' : '' }}" name="hole_5_drops" value="{{ old('hole_5_drops') }}">

            </div>   

            <div class="col">

                <input id="hole_6_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_6_drops') ? ' is-invalid' : '' }}" name="hole_6_drops" value="{{ old('hole_6_drops') }}">

            </div> 

            <div class="col">

                <input id="hole_7_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_7_drops') ? ' is-invalid' : '' }}" name="hole_7_drops" value="{{ old('hole_7_drops') }}">

            </div>   

            <div class="col">

                <input id="hole_8_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_8_drops') ? ' is-invalid' : '' }}" name="hole_8_drops" value="{{ old('hole_8_drops') }}">

            </div>  

            <div class="col">

                <input id="hole_9_drops" type="number" class="form-control first-nine-drops {{ $errors->has('hole_9_drops') ? ' is-invalid' : '' }}" name="hole_9_drops" value="{{ old('hole_9_drops') }}">

            </div> 

            <div class="col">

                <span id="firstNineDrops"></span>

            </div>                                                   


        </div>         
        <!--/.row -->

        <div id="first9Firs" class="row add-round-row add-round-fir">

            <div class="col">

                <h5>FIR</h5>

            </div>

            <div class="col">            

                <div class="custom-control custom-checkbox">    

                    <input id="hole_1_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_1_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_1_white_par < 4 ? "disabled":"") }}                       
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_1_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_1_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_1_fir"></label>

                </div>

            </div>

            <div class="col">

                <div class="custom-control custom-checkbox">             

                    <input id="hole_2_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_2_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_2_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_2_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_2_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_2_fir"></label>

                </div>

            </div>            

            <div class="col">

                <div class="custom-control custom-checkbox">             

                    <input id="hole_3_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_3_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_3_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_3_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_3_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_3_fir"></label>

                </div>                    

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox">             

                    <input id="hole_4_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_4_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_4_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_4_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_4_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_4_fir"></label>

                </div>                    

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox">             

                    <input id="hole_5_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_5_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_5_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_5_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_5_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_5_fir"></label>

                </div>                    

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox">             

                    <input id="hole_6_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_6_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_6_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_6_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_6_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_6_fir"></label>

                </div>                    

            </div> 

            <div class="col">

                <div class="custom-control custom-checkbox">             

                    <input id="hole_7_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_7_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_7_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_7_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_7_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_7_fir"></label>

                </div>                    

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox">             

                    <input id="hole_8_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_8_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_8_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_8_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_8_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_8_fir"></label>

                </div>                    

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox">             

                    <input id="hole_9_fir" type="checkbox" class="form-control FirstNineFir custom-control-input" name="hole_9_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_9_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_9_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_9_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_9_fir"></label>

                </div>                    

            </div> 

            <div class="col">

                <span id="FirstNineFirCount"></span>

            </div>                                                   


        </div>    
        <!--/.row -->

        <div id="firstNineGirs" class="row add-round-row add-round-gir">

            <div class="col">

                <h5>GIR</h5>

            </div>

            <div class="col">


                <div class="custom-control custom-checkbox"> 
                    <input id="hole_1_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_1_gir" value="1">
                    <label class="custom-control-label" for="hole_1_gir"></label>
                </div>

            </div>

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_2_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_2_gir" value="1">
                    <label class="custom-control-label" for="hole_2_gir"></label>
                </div>

            </div>            

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_3_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_3_gir" value="1">
                    <label class="custom-control-label" for="hole_3_gir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_4_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_4_gir" value="1">
                    <label class="custom-control-label" for="hole_4_gir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_5_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_5_gir" value="1">
                    <label class="custom-control-label" for="hole_5_gir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_6_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_6_gir" value="1">
                    <label class="custom-control-label" for="hole_6_gir"></label>
                </div>

            </div> 

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_7_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_7_gir" value="1">
                    <label class="custom-control-label" for="hole_7_gir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_8_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_8_gir" value="1">
                    <label class="custom-control-label" for="hole_8_gir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_9_gir" type="checkbox" class="form-control FirstNineGir custom-control-input" name="hole_9_gir" value="1">
                    <label class="custom-control-label" for="hole_9_gir"></label>
                </div>

            </div> 

            <div class="col">

                <span id="FirstNineGirCount"></span>

            </div>                                                   


        </div>                                
        <!--/.row -->

    @endif        

    @if($selected_nine === 'second-nine' || $selected_nine === 'first-nine-second-nine' || $selected_nine === 'second-nine-third-nine')


        @if($par->holes === 27)

            <h3>{{ $par->second_nine_name }}</h3>

        @else

            <h3>Back 9</h3>

        @endif

        <div class="row add-round-row add-round-hole">

            <div class="col">
                <h5>Hole</h5>
            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>1</h5>
                @else
                    <h5>10</h5>
                @endif

            </div>

            <div class="col">

                @if($par->holes === 27)
                    <h5>2</h5>
                @else
                    <h5>11</h5>
                @endif

            </div>

            <div class="col">

                @if($par->holes === 27)
                    <h5>3</h5>
                @else
                    <h5>12</h5>
                @endif

            </div>

            <div class="col">

                @if($par->holes === 27)
                    <h5>4</h5>
                @else
                    <h5>13</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>5</h5>
                @else
                    <h5>14</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>6</h5>
                @else
                    <h5>15</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>7</h5>
                @else
                    <h5>16</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>8</h5>
                @else
                    <h5>17</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>9</h5>
                @else
                    <h5>18</h5>
                @endif

            </div>   

            <div class="col">
                <h5>Total</h5>
            </div>                                    

        </div>
        <!--/.row -->

        <div class="row add-round-row add-round-yards @if ($selected_yards === 'white') white @elseif ($selected_yards === 'yellow') yellow @elseif ($selected_yards === 'red') red @endif">

            <div class="col">
                <h5>Yards</h5>
            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_10_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_10_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_10_red}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_11_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_11_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_11_red}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_12_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_12_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_12_red}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_13_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_13_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_13_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_14_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_14_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_14_red}}  

                @endif

            </div>   

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_15_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_15_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_15_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_16_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_16_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_16_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_17_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_17_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_17_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_18_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_18_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_18_red}}  

                @endif

            </div>   

            <div class="col">

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

        <div class="row add-round-row add-round-par">

            <div class="col">
                <h5>Par</h5>
            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{ $par->hole_10_white_par }}

                @elseif ($selected_yards === 'yellow')

                    {{ $par->hole_10_yellow_par }}        

                @elseif ($selected_yards === 'red')

                    {{ $par->hole_10_red_par }}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_11_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_11_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_11_red_par }}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_12_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_12_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_12_red_par}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_13_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_13_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_13_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_14_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_14_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_14_red_par}}  

                @endif

            </div>   

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_15_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_15_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_15_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_16_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_16_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_16_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_17_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_17_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_17_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_18_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_18_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_18_red_par}}  

                @endif

            </div>   

            <div class="col">
                
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

        <div class="row add-round-row add-round-score">

            <div class="col">

                <h5>Score</h5>

            </div>

            <div class="col">

                <input id="hole_10_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_10_score') ? ' is-invalid' : '' }}" name="hole_10_score" value="{{ old('hole_10_score') }}">

            </div>

            <div class="col">

                <input id="hole_11_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_11_score') ? ' is-invalid' : '' }}" name="hole_11_score" value="{{ old('hole_11_score') }}">

            </div>            

            <div class="col">

                <input id="hole_12_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_12_score') ? ' is-invalid' : '' }}" name="hole_12_score" value="{{ old('hole_12_score') }}">

            </div>  

            <div class="col">

                <input id="hole_13_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_13_score') ? ' is-invalid' : '' }}" name="hole_13_score" value="{{ old('hole_13_score') }}">

            </div>   

            <div class="col">

                <input id="hole_14_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_14_score') ? ' is-invalid' : '' }}" name="hole_14_score" value="{{ old('hole_14_score') }}">

            </div>   

            <div class="col">

                <input id="hole_15_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_15_score') ? ' is-invalid' : '' }}" name="hole_15_score" value="{{ old('hole_15_score') }}">

            </div> 

            <div class="col">

                <input id="hole_16_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_16_score') ? ' is-invalid' : '' }}" name="hole_16_score" value="{{ old('hole_16_score') }}">

            </div>   

            <div class="col">

                <input id="hole_17_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_17_score') ? ' is-invalid' : '' }}" name="hole_17_score" value="{{ old('hole_17_score') }}">

            </div>  

            <div class="col">

                <input id="hole_18_score" type="number" class="form-control second-nine-score {{ $errors->has('hole_18_score') ? ' is-invalid' : '' }}" name="hole_18_score" value="{{ old('hole_18_score') }}">

            </div> 

            <div class="col">

                <span id="secondNineScore"></span>
                <!-- @{{secondNineTotal}} -->

            </div>                                                   


        </div> 
        <!--/.row -->

        <div class="row add-round-row add-round-putts">

            <div class="col">

                <h5>Putts</h5>

            </div>

            <div class="col">

                <input id="hole_10_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_10_putts') ? ' is-invalid' : '' }}" name="hole_10_putts" value="{{ old('hole_10_putts') }}">

            </div>

            <div class="col">

                <input id="hole_11_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_11_putts') ? ' is-invalid' : '' }}" name="hole_11_putts" value="{{ old('hole_11_putts') }}">

            </div>            

            <div class="col">

                <input id="hole_12_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_12_putts') ? ' is-invalid' : '' }}" name="hole_12_putts" value="{{ old('hole_12_putts') }}">

            </div>  

            <div class="col">

                <input id="hole_13_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_13_putts') ? ' is-invalid' : '' }}" name="hole_13_putts" value="{{ old('hole_13_putts') }}">

            </div>   

            <div class="col">

                <input id="hole_14_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_14_putts') ? ' is-invalid' : '' }}" name="hole_14_putts" value="{{ old('hole_14_putts') }}">

            </div>   

            <div class="col">

                <input id="hole_15_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_15_putts') ? ' is-invalid' : '' }}" name="hole_15_putts" value="{{ old('hole_15_putts') }}">

            </div> 

            <div class="col">

                <input id="hole_16_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_16_putts') ? ' is-invalid' : '' }}" name="hole_16_putts" value="{{ old('hole_16_putts') }}">

            </div>   

            <div class="col">

                <input id="hole_17_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_17_putts') ? ' is-invalid' : '' }}" name="hole_17_putts" value="{{ old('hole_17_putts') }}">

            </div>  

            <div class="col">

                <input id="hole_18_putts" type="number" class="form-control second-nine-putts {{ $errors->has('hole_18_putts') ? ' is-invalid' : '' }}" name="hole_18_putts" value="{{ old('hole_18_putts') }}">

            </div> 

            <div class="col">

                <span id="secondNinePutts"></span>

            </div>                                                   


        </div> 
        <!--/.row -->

        <div class="row add-round-row add-round-drops">

            <div class="col">

                <h5>Drops</h5>

            </div>

            <div class="col">

                <input id="hole_10_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_10_drops') ? ' is-invalid' : '' }}" name="hole_10_drops" value="{{ old('hole_10_drops') }}">

            </div>

            <div class="col">

                <input id="hole_11_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_11_drops') ? ' is-invalid' : '' }}" name="hole_11_drops" value="{{ old('hole_11_drops') }}">

            </div>            

            <div class="col">

                <input id="hole_12_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_12_drops') ? ' is-invalid' : '' }}" name="hole_12_drops" value="{{ old('hole_12_drops') }}">

            </div>  

            <div class="col">

                <input id="hole_13_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_13_drops') ? ' is-invalid' : '' }}" name="hole_13_drops" value="{{ old('hole_13_drops') }}">

            </div>   

            <div class="col">

                <input id="hole_14_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_14_drops') ? ' is-invalid' : '' }}" name="hole_14_drops" value="{{ old('hole_14_drops') }}">

            </div>   

            <div class="col">

                <input id="hole_15_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_15_drops') ? ' is-invalid' : '' }}" name="hole_15_drops" value="{{ old('hole_15_drops') }}">

            </div> 

            <div class="col">

                <input id="hole_16_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_16_drops') ? ' is-invalid' : '' }}" name="hole_16_drops" value="{{ old('hole_16_drops') }}">

            </div>   

            <div class="col">

                <input id="hole_17_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_17_drops') ? ' is-invalid' : '' }}" name="hole_17_drops" value="{{ old('hole_17_drops') }}">

            </div>  

            <div class="col">

                <input id="hole_18_drops" type="number" class="form-control second-nine-drops {{ $errors->has('hole_18_drops') ? ' is-invalid' : '' }}" name="hole_18_drops" value="{{ old('hole_18_drops') }}">

            </div> 

            <div class="col">

                <span id="secondNineDrops"></span>

            </div>                                                   


        </div>         
        <!--/.row -->

        <div id="second9Firs" class="row add-round-row add-round-fir">

            <div class="col">

                <h5>FIR</h5>

            </div>

            <div class="col">            
                        
                <div class="custom-control custom-checkbox">                         
                    <input id="hole_10_fir" type="checkbox" class="form-control secondNineFir custom-control-input" name="hole_10_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_10_white_par < 4 ? "disabled":"") }}                       
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_10_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_10_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_10_fir"></label>
                </div>

            </div>

            <div class="col">

                <div class="custom-control custom-checkbox">                         
                    <input id="hole_11_fir" type="checkbox" class="form-control secondNineFir custom-control-input" name="hole_11_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_11_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_11_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_11_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_11_fir"></label>
                </div>

            </div>            

            <div class="col">

                <div class="custom-control custom-checkbox">                         
                    <input id="hole_12_fir" type="checkbox" class="form-control secondNineFir custom-control-input" name="hole_12_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_12_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_12_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_12_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_12_fir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox">                         
                    <input id="hole_13_fir" type="checkbox" class="form-control secondNineFir custom-control-input" name="hole_13_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_13_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_13_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_13_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_13_fir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox">                         
                    <input id="hole_14_fir" type="checkbox" class="form-control secondNineFir custom-control-input" name="hole_14_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_14_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_14_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_14_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_14_fir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox">                         
                    <input id="hole_15_fir" type="checkbox" class="form-control secondNineFir custom-control-input" name="hole_15_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_15_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_15_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_15_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_15_fir"></label>
                </div>

            </div> 

            <div class="col">

                <div class="custom-control custom-checkbox">                         
                    <input id="hole_16_fir" type="checkbox" class="form-control secondNineFir custom-control-input" name="hole_16_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_16_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_16_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_16_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_16_fir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox">                         
                    <input id="hole_17_fir" type="checkbox" class="form-control secondNineFir custom-control-input" name="hole_17_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_17_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_17_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_17_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_17_fir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox">                         
                    <input id="hole_18_fir" type="checkbox" class="form-control secondNineFir custom-control-input" name="hole_18_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_18_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_18_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_18_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_18_fir"></label>
                </div>

            </div> 

            <div class="col">

                <span id="secondNineFirCount"></span>

            </div>                                                   


         </div>    
        <!--/.row -->

        <div id="secondNineGirs" class="row add-round-row add-round-gir">

            <div class="col">

                <h5>GIR</h5>

            </div>

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_10_gir" type="checkbox" class="form-control secondNineGir custom-control-input" name="hole_10_gir" value="1">
                    <label class="custom-control-label" for="hole_10_gir"></label>
                </div>

            </div>

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_11_gir" type="checkbox" class="form-control secondNineGir custom-control-input" name="hole_11_gir" value="1">
                    <label class="custom-control-label" for="hole_11_gir"></label>
                </div>

            </div>            

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_12_gir" type="checkbox" class="form-control secondNineGir custom-control-input" name="hole_12_gir" value="1">
                    <label class="custom-control-label" for="hole_12_gir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_13_gir" type="checkbox" class="form-control secondNineGir custom-control-input" name="hole_13_gir" value="1">
                    <label class="custom-control-label" for="hole_13_gir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_14_gir" type="checkbox" class="form-control secondNineGir custom-control-input" name="hole_14_gir" value="1">
                    <label class="custom-control-label" for="hole_14_gir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_15_gir" type="checkbox" class="form-control secondNineGir custom-control-input" name="hole_15_gir" value="1">
                    <label class="custom-control-label" for="hole_15_gir"></label>
                </div>

            </div> 

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_16_gir" type="checkbox" class="form-control secondNineGir custom-control-input" name="hole_16_gir" value="1">
                    <label class="custom-control-label" for="hole_16_gir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_17_gir" type="checkbox" class="form-control secondNineGir custom-control-input" name="hole_17_gir" value="1">
                    <label class="custom-control-label" for="hole_17_gir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_18_gir" type="checkbox" class="form-control secondNineGir custom-control-input" name="hole_18_gir" value="1">
                    <label class="custom-control-label" for="hole_18_gir"></label>
                </div>

            </div> 

            <div class="col">

                <span id="secondNineGirCount"></span>

            </div>                                                   


        </div>                                
        <!--/.row -->

    @endif


    @if($selected_nine === 'third-nine' || $selected_nine === 'first-nine-third-nine' || $selected_nine === 'second-nine-third-nine')


        @if($par->holes === 27)

            <h3>{{ $par->third_nine_name }}</h3>

        @else

            <h3>Third 9</h3>

        @endif

        <div class="row add-round-row add-round-hole">

            <div class="col">
                <h5>Hole</h5>
            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>1</h5>
                @else
                    <h5>10</h5>
                @endif

            </div>

            <div class="col">

                @if($par->holes === 27)
                    <h5>2</h5>
                @else
                    <h5>11</h5>
                @endif

            </div>

            <div class="col">

                @if($par->holes === 27)
                    <h5>3</h5>
                @else
                    <h5>12</h5>
                @endif

            </div>

            <div class="col">

                @if($par->holes === 27)
                    <h5>4</h5>
                @else
                    <h5>13</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>5</h5>
                @else
                    <h5>14</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>6</h5>
                @else
                    <h5>15</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>7</h5>
                @else
                    <h5>16</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>8</h5>
                @else
                    <h5>17</h5>
                @endif

            </div>  

            <div class="col">

                @if($par->holes === 27)
                    <h5>9</h5>
                @else
                    <h5>18</h5>
                @endif

            </div>   

            <div class="col">
                <h5>Total</h5>
            </div>                                    

        </div>
        <!--/.row -->

        <div class="row add-round-row add-round-yards @if ($selected_yards === 'white') white @elseif ($selected_yards === 'yellow') yellow @elseif ($selected_yards === 'red') red @endif">

            <div class="col">
                <h5>Yards</h5>
            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_19_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_19_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_19_red}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_20_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_20_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_20_red}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_21_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_21_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_21_red}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_22_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_22_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_22_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_23_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_23_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_23_red}}  

                @endif

            </div>   

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_24_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_24_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_24_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_25_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_25_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_25_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_26_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_26_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_26_red}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_27_white}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_27_yellow}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_27_red}}  

                @endif

            </div>   

            <div class="col">

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

        <div class="row add-round-row add-round-par">

            <div class="col">
                <h5>Par</h5>
            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{ $par->hole_19_white_par }}

                @elseif ($selected_yards === 'yellow')

                    {{ $par->hole_19_yellow_par }}        

                @elseif ($selected_yards === 'red')

                    {{ $par->hole_19_red_par }}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_20_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_20_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_20_red_par }}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_21_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_21_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_21_red_par}}  

                @endif

            </div>

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_22_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_22_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_22_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_23_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_23_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_23_red_par}}  

                @endif

            </div>   

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_24_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_24_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_24_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_25_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_25_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_25_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_26_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_26_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_26_red_par}}  

                @endif

            </div>  

            <div class="col">

                @if ($selected_yards === 'white')

                    {{$par->hole_27_white_par}}

                @elseif ($selected_yards === 'yellow')

                    {{$par->hole_27_yellow_par}}        

                @elseif ($selected_yards === 'red')

                    {{$par->hole_27_red_par}}  

                @endif

            </div>   

            <div class="col">
                
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

        <div class="row add-round-row add-round-score">

            <div class="col">

                <h5>Score</h5>

            </div>

            <div class="col">

                <input id="hole_19_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_19_score') ? ' is-invalid' : '' }}" name="hole_19_score" value="{{ old('hole_19_score') }}">

            </div>

            <div class="col">

                <input id="hole_20_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_20_score') ? ' is-invalid' : '' }}" name="hole_20_score" value="{{ old('hole_20_score') }}">

            </div>            

            <div class="col">

                <input id="hole_21_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_21_score') ? ' is-invalid' : '' }}" name="hole_21_score" value="{{ old('hole_21_score') }}">

            </div>  

            <div class="col">

                <input id="hole_22_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_22_score') ? ' is-invalid' : '' }}" name="hole_22_score" value="{{ old('hole_22_score') }}">

            </div>   

            <div class="col">

                <input id="hole_23_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_23_score') ? ' is-invalid' : '' }}" name="hole_23_score" value="{{ old('hole_23_score') }}">

            </div>   

            <div class="col">

                <input id="hole_24_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_24_score') ? ' is-invalid' : '' }}" name="hole_24_score" value="{{ old('hole_24_score') }}">

            </div> 

            <div class="col">

                <input id="hole_25_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_25_score') ? ' is-invalid' : '' }}" name="hole_25_score" value="{{ old('hole_25_score') }}">

            </div>   

            <div class="col">

                <input id="hole_26_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_26_score') ? ' is-invalid' : '' }}" name="hole_26_score" value="{{ old('hole_26_score') }}">

            </div>  

            <div class="col">

                <input id="hole_27_score" type="number" class="form-control third-nine-score {{ $errors->has('hole_27_score') ? ' is-invalid' : '' }}" name="hole_27_score" value="{{ old('hole_27_score') }}">

            </div> 

            <div class="col">

                <span id="thirdNineScore"></span>
                <!-- @{{thirdNineTotal}} -->

            </div>                                                   


        </div> 
        <!--/.row -->

        <div class="row add-round-row add-round-putts">

            <div class="col">

                <h5>Putts</h5>

            </div>

            <div class="col">

                <input id="hole_19_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_19_putts') ? ' is-invalid' : '' }}" name="hole_19_putts" value="{{ old('hole_19_putts') }}">

            </div>

            <div class="col">

                <input id="hole_20_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_20_putts') ? ' is-invalid' : '' }}" name="hole_20_putts" value="{{ old('hole_20_putts') }}">

            </div>            

            <div class="col">

                <input id="hole_21_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_21_putts') ? ' is-invalid' : '' }}" name="hole_21_putts" value="{{ old('hole_21_putts') }}">

            </div>  

            <div class="col">

                <input id="hole_22_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_22_putts') ? ' is-invalid' : '' }}" name="hole_22_putts" value="{{ old('hole_22_putts') }}">

            </div>   

            <div class="col">

                <input id="hole_23_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_23_putts') ? ' is-invalid' : '' }}" name="hole_23_putts" value="{{ old('hole_23_putts') }}">

            </div>   

            <div class="col">

                <input id="hole_24_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_24_putts') ? ' is-invalid' : '' }}" name="hole_24_putts" value="{{ old('hole_24_putts') }}">

            </div> 

            <div class="col">

                <input id="hole_25_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_25_putts') ? ' is-invalid' : '' }}" name="hole_25_putts" value="{{ old('hole_25_putts') }}">

            </div>   

            <div class="col">

                <input id="hole_26_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_26_putts') ? ' is-invalid' : '' }}" name="hole_26_putts" value="{{ old('hole_26_putts') }}">

            </div>  

            <div class="col">

                <input id="hole_27_putts" type="number" class="form-control third-nine-putts {{ $errors->has('hole_27_putts') ? ' is-invalid' : '' }}" name="hole_27_putts" value="{{ old('hole_27_putts') }}">

            </div> 

            <div class="col">

                <span id="thirdNinePutts"></span>

            </div>                                                   


        </div> 
        <!--/.row -->

        <div class="row add-round-row add-round-drops">

            <div class="col">

                <h5>Drops</h5>

            </div>

            <div class="col">

                <input id="hole_19_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_19_drops') ? ' is-invalid' : '' }}" name="hole_19_drops" value="{{ old('hole_19_drops') }}">

            </div>

            <div class="col">

                <input id="hole_20_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_20_drops') ? ' is-invalid' : '' }}" name="hole_20_drops" value="{{ old('hole_20_drops') }}">

            </div>            

            <div class="col">

                <input id="hole_21_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_21_drops') ? ' is-invalid' : '' }}" name="hole_21_drops" value="{{ old('hole_21_drops') }}">

            </div>  

            <div class="col">

                <input id="hole_22_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_22_drops') ? ' is-invalid' : '' }}" name="hole_22_drops" value="{{ old('hole_22_drops') }}">

            </div>   

            <div class="col">

                <input id="hole_23_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_23_drops') ? ' is-invalid' : '' }}" name="hole_23_drops" value="{{ old('hole_23_drops') }}">

            </div>   

            <div class="col">

                <input id="hole_24_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_24_drops') ? ' is-invalid' : '' }}" name="hole_24_drops" value="{{ old('hole_24_drops') }}">

            </div> 

            <div class="col">

                <input id="hole_25_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_25_drops') ? ' is-invalid' : '' }}" name="hole_25_drops" value="{{ old('hole_25_drops') }}">

            </div>   

            <div class="col">

                <input id="hole_26_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_26_drops') ? ' is-invalid' : '' }}" name="hole_26_drops" value="{{ old('hole_26_drops') }}">

            </div>  

            <div class="col">

                <input id="hole_27_drops" type="number" class="form-control third-nine-drops {{ $errors->has('hole_27_drops') ? ' is-invalid' : '' }}" name="hole_27_drops" value="{{ old('hole_27_drops') }}">

            </div> 

            <div class="col">

                <span id="thirdNineDrops"></span>

            </div>                                                   


        </div>         
        <!--/.row -->

        <div id="third9Firs" class="row add-round-row add-round-fir">

            <div class="col">

                <h5>FIR</h5>

            </div>

            <div class="col">            

                <div class="custom-control custom-checkbox">                        
                    <input id="hole_19_fir" type="checkbox" class="form-control thirdNineFir custom-control-input" name="hole_19_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_19_white_par < 4 ? "disabled":"") }}                       
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_19_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_19_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_19_fir"></label>
                </div>
            </div>

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_20_fir" type="checkbox" class="form-control thirdNineFir custom-control-input" name="hole_20_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_20_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_20_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_20_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_20_fir"></label>
                </div>

            </div>            

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_21_fir" type="checkbox" class="form-control thirdNineFir custom-control-input" name="hole_21_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_21_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_21_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_21_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_21_fir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_22_fir" type="checkbox" class="form-control thirdNineFir custom-control-input" name="hole_22_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_22_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_22_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_22_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_22_fir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_23_fir" type="checkbox" class="form-control thirdNineFir custom-control-input" name="hole_23_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_23_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_23_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_23_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_23_fir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_24_fir" type="checkbox" class="form-control thirdNineFir custom-control-input" name="hole_24_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_24_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_24_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_24_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_24_fir"></label>
                </div>

            </div> 

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_25_fir" type="checkbox" class="form-control thirdNineFir custom-control-input" name="hole_25_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_25_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_25_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_25_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_25_fir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_26_fir" type="checkbox" class="form-control thirdNineFir custom-control-input" name="hole_26_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_26_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_26_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_26_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_26_fir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox"> 
                    <input id="hole_27_fir" type="checkbox" class="form-control thirdNineFir custom-control-input" name="hole_27_fir" value="1"
                        @if ($selected_yards === 'white')
                            {{ ($par->hole_27_white_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'yellow')
                            {{ ($par->hole_27_yellow_par < 4 ? "disabled":"") }}
                        @elseif ($selected_yards === 'red')
                            {{ ($par->hole_27_red_par < 4 ? "disabled":"") }}                   
                        @endif >
                    <label class="custom-control-label" for="hole_27_fir"></label>
                </div>

            </div> 

            <div class="col">

                <span id="thirdNineFirCount"></span>

            </div>                                                   


        </div>    
        <!--/.row -->

        <div id="thirdNineGirs" class="row add-round-row add-round-gir">

            <div class="col">

                <h5>GIR</h5>

            </div>

            <div class="col">

                <div class="custom-control custom-checkbox">
                    <input id="hole_19_gir" type="checkbox" class="form-control thirdNineGir custom-control-input" name="hole_19_gir" value="1">
                    <label class="custom-control-label" for="hole_19_gir"></label>
                </div>

            </div>

            <div class="col">

                <div class="custom-control custom-checkbox">
                    <input id="hole_20_gir" type="checkbox" class="form-control thirdNineGir custom-control-input" name="hole_20_gir" value="1">
                    <label class="custom-control-label" for="hole_20_gir"></label>
                </div>

            </div>            

            <div class="col">

                <div class="custom-control custom-checkbox">
                    <input id="hole_21_gir" type="checkbox" class="form-control thirdNineGir custom-control-input" name="hole_21_gir" value="1">
                    <label class="custom-control-label" for="hole_21_gir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox">
                    <input id="hole_22_gir" type="checkbox" class="form-control thirdNineGir custom-control-input" name="hole_22_gir" value="1">
                    <label class="custom-control-label" for="hole_22_gir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox">
                    <input id="hole_23_gir" type="checkbox" class="form-control thirdNineGir custom-control-input" name="hole_23_gir" value="1">
                    <label class="custom-control-label" for="hole_23_gir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox">
                    <input id="hole_24_gir" type="checkbox" class="form-control thirdNineGir custom-control-input" name="hole_24_gir" value="1">
                    <label class="custom-control-label" for="hole_24_gir"></label>
                </div>

            </div> 

            <div class="col">

                <div class="custom-control custom-checkbox">
                    <input id="hole_25_gir" type="checkbox" class="form-control thirdNineGir custom-control-input" name="hole_25_gir" value="1">
                    <label class="custom-control-label" for="hole_25_gir"></label>
                </div>

            </div>   

            <div class="col">

                <div class="custom-control custom-checkbox">
                    <input id="hole_26_gir" type="checkbox" class="form-control thirdNineGir custom-control-input" name="hole_26_gir" value="1">
                    <label class="custom-control-label" for="hole_26_gir"></label>
                </div>

            </div>  

            <div class="col">

                <div class="custom-control custom-checkbox">
                    <input id="hole_27_gir" type="checkbox" class="form-control thirdNineGir custom-control-input" name="hole_27_gir" value="1">
                    <label class="custom-control-label" for="hole_27_gir"></label>
                </div>

            </div> 

            <div class="col">

                <span id="thirdNineGirCount"></span>

            </div>                                                   


        </div>                                
        <!--/.row -->

    @endif



@endforeach 


<!--
@foreach($course_data as $key => $par)   

    
<table class="table">

    <tr>
        <th>Hole</th>
        <th>Yards</th>
        <th>Par</th>
        <th>Score</th>
        <th>Puts</th>
        <th>Drops</th>
        <th>FIR</th>
        <th>GIR</th>
    </tr>
    

    <tr>
        <td>7</td>
        <td>
        @if ($selected_yards === 'white')

            {{$par->hole_7_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_7_yellows}}        

        @elseif ($selected_yards === 'red')

            {{$par->hole_7_reds}}  

        @endif
        </td>
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_7_ladies_par}}

        @else

            {{$par->hole_7_par}}  

        @endif
        </td>
        <td><input id="hole_7_score" type="number" class="form-control{{ $errors->has('hole_7_score') ? ' is-invalid' : '' }}" name="hole_7_score" value="{{ old('hole_7_score') }}"></td>
        <td><input id="hole_7_putts" type="number" class="form-control{{ $errors->has('hole_7_putts') ? ' is-invalid' : '' }}" name="hole_7_putts" value="{{ old('hole_7_putts') }}"></td>
        <td><input id="hole_7_drops" type="number" class="form-control{{ $errors->has('hole_7_drops') ? ' is-invalid' : '' }}" name="hole_7_drops" value="{{ old('hole_7_drops') }}"></td>
        <td><input id="hole_7_fir" type="checkbox" class="form-control" name="hole_7_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_7_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_7_par < 4 ? "disabled":"") }}@endif ></td>
        <td><input id="hole_7_gir" type="checkbox" class="form-control" name="hole_7_gir" value="7"></td>
    </tr>


    
    <tr>
        <td>2</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_2_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_2_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_2_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_2_ladies_par}}

        @else

            {{$par->hole_2_par}}  

        @endif        
        </td>
        <td><input id="hole_2_score" type="number" class="form-control{{ $errors->has('hole_2_score') ? ' is-invalid' : '' }}" name="hole_2_score" value="{{ old('hole_2_score') }}"></td>
        <td><input id="hole_2_putts" type="number" class="form-control{{ $errors->has('hole_2_putts') ? ' is-invalid' : '' }}" name="hole_2_putts" value="{{ old('hole_2_putts') }}"></td>
        <td><input id="hole_2_drops" type="number" class="form-control{{ $errors->has('hole_2_drops') ? ' is-invalid' : '' }}" name="hole_2_drops" value="{{ old('hole_2_drops') }}"></td>
        <td><input id="hole_2_fir" type="checkbox" class="form-control" name="hole_2_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_2_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_2_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_2_gir" type="checkbox" class="form-control" name="hole_2_gir" value="7"></td>
    </tr>

    <tr>
        <td>3</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_3_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_3_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_3_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_3_ladies_par}}

        @else

            {{$par->hole_3_par}}  

        @endif        
        </td>
        <td><input id="hole_3_score" type="number" class="form-control{{ $errors->has('hole_3_score') ? ' is-invalid' : '' }}" name="hole_3_score" value="{{ old('hole_3_score') }}"></td>
        <td><input id="hole_3_putts" type="number" class="form-control{{ $errors->has('hole_3_putts') ? ' is-invalid' : '' }}" name="hole_3_putts" value="{{ old('hole_3_putts') }}"></td>
        <td><input id="hole_3_drops" type="number" class="form-control{{ $errors->has('hole_3_drops') ? ' is-invalid' : '' }}" name="hole_3_drops" value="{{ old('hole_3_drops') }}"></td>
        <td><input id="hole_3_fir" type="checkbox" class="form-control" name="hole_3_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_3_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_3_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_3_gir" type="checkbox" class="form-control" name="hole_3_gir" value="7"></td>
    </tr>

    <tr>
        <td>4</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_4_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_4_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_4_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_4_ladies_par}}

        @else

            {{$par->hole_4_par}}  

        @endif        
        </td>
        <td><input id="hole_4_score" type="number" class="form-control{{ $errors->has('hole_4_score') ? ' is-invalid' : '' }}" name="hole_4_score" value="{{ old('hole_4_score') }}"></td>
        <td><input id="hole_4_putts" type="number" class="form-control{{ $errors->has('hole_4_putts') ? ' is-invalid' : '' }}" name="hole_4_putts" value="{{ old('hole_4_putts') }}"></td>
        <td><input id="hole_4_drops" type="number" class="form-control{{ $errors->has('hole_4_drops') ? ' is-invalid' : '' }}" name="hole_4_drops" value="{{ old('hole_4_drops') }}"></td>
        <td><input id="hole_4_fir" type="checkbox" class="form-control" name="hole_4_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_4_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_4_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_4_gir" type="checkbox" class="form-control" name="hole_4_gir" value="7"></td>
    </tr>

    <tr>
        <td>5</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_5_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_5_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_5_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_5_ladies_par}}

        @else

            {{$par->hole_5_par}}  

        @endif        
        </td>
        <td><input id="hole_5_score" type="number" class="form-control{{ $errors->has('hole_5_score') ? ' is-invalid' : '' }}" name="hole_5_score" value="{{ old('hole_5_score') }}"></td>
        <td><input id="hole_5_putts" type="number" class="form-control{{ $errors->has('hole_5_putts') ? ' is-invalid' : '' }}" name="hole_5_putts" value="{{ old('hole_5_putts') }}"></td>
        <td><input id="hole_5_drops" type="number" class="form-control{{ $errors->has('hole_5_drops') ? ' is-invalid' : '' }}" name="hole_5_drops" value="{{ old('hole_5_drops') }}"></td>
        <td><input id="hole_5_fir" type="checkbox" class="form-control" name="hole_5_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_5_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_5_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_5_gir" type="checkbox" class="form-control" name="hole_5_gir" value="7"></td>
    </tr>

    <tr>
        <td>6</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_6_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_6_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_6_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_6_ladies_par}}

        @else

            {{$par->hole_6_par}}  

        @endif        
        </td>
        <td><input id="hole_6_score" type="number" class="form-control{{ $errors->has('hole_6_score') ? ' is-invalid' : '' }}" name="hole_6_score" value="{{ old('hole_6_score') }}"></td>
        <td><input id="hole_6_putts" type="number" class="form-control{{ $errors->has('hole_6_putts') ? ' is-invalid' : '' }}" name="hole_6_putts" value="{{ old('hole_6_putts') }}"></td>
        <td><input id="hole_6_drops" type="number" class="form-control{{ $errors->has('hole_6_drops') ? ' is-invalid' : '' }}" name="hole_6_drops" value="{{ old('hole_6_drops') }}"></td>
        <td><input id="hole_6_fir" type="checkbox" class="form-control" name="hole_6_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_6_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_6_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_6_gir" type="checkbox" class="form-control" name="hole_6_gir" value="7"></td>
    </tr>

    <tr>
        <td>7</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_7_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_7_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_7_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_7_ladies_par}}

        @else

            {{$par->hole_7_par}}  

        @endif        
        </td>
        <td><input id="hole_7_score" type="number" class="form-control{{ $errors->has('hole_7_score') ? ' is-invalid' : '' }}" name="hole_7_score" value="{{ old('hole_7_score') }}"></td>
        <td><input id="hole_7_putts" type="number" class="form-control{{ $errors->has('hole_7_putts') ? ' is-invalid' : '' }}" name="hole_7_putts" value="{{ old('hole_7_putts') }}"></td>
        <td><input id="hole_7_drops" type="number" class="form-control{{ $errors->has('hole_7_drops') ? ' is-invalid' : '' }}" name="hole_7_drops" value="{{ old('hole_7_drops') }}"></td>
        <td><input id="hole_7_fir" type="checkbox" class="form-control" name="hole_7_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_7_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_7_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_7_gir" type="checkbox" class="form-control" name="hole_7_gir" value="7"></td>
    </tr>

    <tr>
        <td>8</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_8_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_8_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_8_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_8_ladies_par}}

        @else

            {{$par->hole_8_par}}  

        @endif        
        </td>
        <td><input id="hole_8_score" type="number" class="form-control{{ $errors->has('hole_8_score') ? ' is-invalid' : '' }}" name="hole_8_score" value="{{ old('hole_8_score') }}"></td>
        <td><input id="hole_8_putts" type="number" class="form-control{{ $errors->has('hole_8_putts') ? ' is-invalid' : '' }}" name="hole_8_putts" value="{{ old('hole_8_putts') }}"></td>
        <td><input id="hole_8_drops" type="number" class="form-control{{ $errors->has('hole_8_drops') ? ' is-invalid' : '' }}" name="hole_8_drops" value="{{ old('hole_8_drops') }}"></td>
        <td><input id="hole_8_fir" type="checkbox" class="form-control" name="hole_8_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_8_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_8_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_8_gir" type="checkbox" class="form-control" name="hole_8_gir" value="7"></td>
    </tr>

    <tr>
        <td>9</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_9_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_9_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_9_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_9_ladies_par}}

        @else

            {{$par->hole_9_par}}  

        @endif        
        </td>
        <td><input id="hole_9_score" type="number" class="form-control{{ $errors->has('hole_9_score') ? ' is-invalid' : '' }}" name="hole_9_score" value="{{ old('hole_9_score') }}"></td>
        <td><input id="hole_9_putts" type="number" class="form-control{{ $errors->has('hole_9_putts') ? ' is-invalid' : '' }}" name="hole_9_putts" value="{{ old('hole_9_putts') }}"></td>
        <td><input id="hole_9_drops" type="number" class="form-control{{ $errors->has('hole_9_drops') ? ' is-invalid' : '' }}" name="hole_9_drops" value="{{ old('hole_9_drops') }}"></td>
        <td><input id="hole_9_fir" type="checkbox" class="form-control" name="hole_9_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_9_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_9_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_9_gir" type="checkbox" class="form-control" name="hole_9_gir" value="7"></td>
    </tr>

    <tr>
        <td>70</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_70_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_70_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_70_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_70_ladies_par}}

        @else

            {{$par->hole_70_par}}  

        @endif        
        </td>
        <td><input id="hole_70_score" type="number" class="form-control{{ $errors->has('hole_70_score') ? ' is-invalid' : '' }}" name="hole_70_score" value="{{ old('hole_70_score') }}"></td>
        <td><input id="hole_70_putts" type="number" class="form-control{{ $errors->has('hole_70_putts') ? ' is-invalid' : '' }}" name="hole_70_putts" value="{{ old('hole_70_putts') }}"></td>
        <td><input id="hole_70_drops" type="number" class="form-control{{ $errors->has('hole_70_drops') ? ' is-invalid' : '' }}" name="hole_70_drops" value="{{ old('hole_70_drops') }}"></td>
        <td><input id="hole_70_fir" type="checkbox" class="form-control" name="hole_70_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_70_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_70_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_70_gir" type="checkbox" class="form-control" name="hole_70_gir" value="7"></td>
    </tr>

    <tr>
        <td>77</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_77_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_77_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_77_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_77_ladies_par}}

        @else

            {{$par->hole_77_par}}  

        @endif        
        </td>
        <td><input id="hole_77_score" type="number" class="form-control{{ $errors->has('hole_77_score') ? ' is-invalid' : '' }}" name="hole_77_score" value="{{ old('hole_77_score') }}"></td>
        <td><input id="hole_77_putts" type="number" class="form-control{{ $errors->has('hole_77_putts') ? ' is-invalid' : '' }}" name="hole_77_putts" value="{{ old('hole_77_putts') }}"></td>
        <td><input id="hole_77_drops" type="number" class="form-control{{ $errors->has('hole_77_drops') ? ' is-invalid' : '' }}" name="hole_77_drops" value="{{ old('hole_77_drops') }}"></td>
        <td><input id="hole_77_fir" type="checkbox" class="form-control" name="hole_77_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_77_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_77_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_77_gir" type="checkbox" class="form-control" name="hole_77_gir" value="7"></td>
    </tr>

    <tr>
        <td>72</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_72_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_72_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_72_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_72_ladies_par}}

        @else

            {{$par->hole_72_par}}  

        @endif        
        </td>
        <td><input id="hole_72_score" type="number" class="form-control{{ $errors->has('hole_72_score') ? ' is-invalid' : '' }}" name="hole_72_score" value="{{ old('hole_72_score') }}"></td>
        <td><input id="hole_72_putts" type="number" class="form-control{{ $errors->has('hole_72_putts') ? ' is-invalid' : '' }}" name="hole_72_putts" value="{{ old('hole_72_putts') }}"></td>
        <td><input id="hole_72_drops" type="number" class="form-control{{ $errors->has('hole_72_drops') ? ' is-invalid' : '' }}" name="hole_72_drops" value="{{ old('hole_72_drops') }}"></td>
        <td><input id="hole_72_fir" type="checkbox" class="form-control" name="hole_72_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_72_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_72_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_72_gir" type="checkbox" class="form-control" name="hole_72_gir" value="7"></td>
    </tr>

    <tr>
        <td>73</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_73_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_73_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_73_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_73_ladies_par}}

        @else

            {{$par->hole_73_par}}  

        @endif        
        </td>
        <td><input id="hole_73_score" type="number" class="form-control{{ $errors->has('hole_73_score') ? ' is-invalid' : '' }}" name="hole_73_score" value="{{ old('hole_73_score') }}"></td>
        <td><input id="hole_73_putts" type="number" class="form-control{{ $errors->has('hole_73_putts') ? ' is-invalid' : '' }}" name="hole_73_putts" value="{{ old('hole_73_putts') }}"></td>
        <td><input id="hole_73_drops" type="number" class="form-control{{ $errors->has('hole_73_drops') ? ' is-invalid' : '' }}" name="hole_73_drops" value="{{ old('hole_73_drops') }}"></td>
        <td><input id="hole_73_fir" type="checkbox" class="form-control" name="hole_73_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_73_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_73_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_73_gir" type="checkbox" class="form-control" name="hole_73_gir" value="7"></td>
    </tr>

    <tr>
        <td>74</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_74_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_74_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_74_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_74_ladies_par}}

        @else

            {{$par->hole_74_par}}  

        @endif        
        </td>
        <td><input id="hole_74_score" type="number" class="form-control{{ $errors->has('hole_74_score') ? ' is-invalid' : '' }}" name="hole_74_score" value="{{ old('hole_74_score') }}"></td>
        <td><input id="hole_74_putts" type="number" class="form-control{{ $errors->has('hole_74_putts') ? ' is-invalid' : '' }}" name="hole_74_putts" value="{{ old('hole_74_putts') }}"></td>
        <td><input id="hole_74_drops" type="number" class="form-control{{ $errors->has('hole_74_drops') ? ' is-invalid' : '' }}" name="hole_74_drops" value="{{ old('hole_74_drops') }}"></td>
        <td><input id="hole_74_fir" type="checkbox" class="form-control" name="hole_74_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_74_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_74_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_74_gir" type="checkbox" class="form-control" name="hole_74_gir" value="7"></td>
    </tr>

    <tr>
        <td>75</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_75_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_75_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_75_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_75_ladies_par}}

        @else

            {{$par->hole_75_par}}  

        @endif        
        </td>
        <td><input id="hole_75_score" type="number" class="form-control{{ $errors->has('hole_75_score') ? ' is-invalid' : '' }}" name="hole_75_score" value="{{ old('hole_75_score') }}"></td>
        <td><input id="hole_75_putts" type="number" class="form-control{{ $errors->has('hole_75_putts') ? ' is-invalid' : '' }}" name="hole_75_putts" value="{{ old('hole_75_putts') }}"></td>
        <td><input id="hole_75_drops" type="number" class="form-control{{ $errors->has('hole_75_drops') ? ' is-invalid' : '' }}" name="hole_75_drops" value="{{ old('hole_75_drops') }}"></td>
        <td><input id="hole_75_fir" type="checkbox" class="form-control" name="hole_75_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_75_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_75_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_75_gir" type="checkbox" class="form-control" name="hole_75_gir" value="7"></td>
    </tr>

    <tr>
        <td>76</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_76_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_76_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_76_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_76_ladies_par}}

        @else

            {{$par->hole_76_par}}  

        @endif        
        </td>
        <td><input id="hole_76_score" type="number" class="form-control{{ $errors->has('hole_76_score') ? ' is-invalid' : '' }}" name="hole_76_score" value="{{ old('hole_76_score') }}"></td>
        <td><input id="hole_76_putts" type="number" class="form-control{{ $errors->has('hole_76_putts') ? ' is-invalid' : '' }}" name="hole_76_putts" value="{{ old('hole_76_putts') }}"></td>
        <td><input id="hole_76_drops" type="number" class="form-control{{ $errors->has('hole_76_drops') ? ' is-invalid' : '' }}" name="hole_76_drops" value="{{ old('hole_76_drops') }}"></td>
        <td><input id="hole_76_fir" type="checkbox" class="form-control" name="hole_76_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_76_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_76_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_76_gir" type="checkbox" class="form-control" name="hole_76_gir" value="7"></td>
    </tr>

    <tr>
        <td>77</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_77_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_77_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_77_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_77_ladies_par}}

        @else

            {{$par->hole_77_par}}  

        @endif        
        </td>
        <td><input id="hole_77_score" type="number" class="form-control{{ $errors->has('hole_77_score') ? ' is-invalid' : '' }}" name="hole_77_score" value="{{ old('hole_77_score') }}"></td>
        <td><input id="hole_77_putts" type="number" class="form-control{{ $errors->has('hole_77_putts') ? ' is-invalid' : '' }}" name="hole_77_putts" value="{{ old('hole_77_putts') }}"></td>
        <td><input id="hole_77_drops" type="number" class="form-control{{ $errors->has('hole_77_drops') ? ' is-invalid' : '' }}" name="hole_77_drops" value="{{ old('hole_77_drops') }}"></td>
        <td><input id="hole_77_fir" type="checkbox" class="form-control" name="hole_77_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_77_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_77_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_77_gir" type="checkbox" class="form-control" name="hole_77_gir" value="7"></td>
    </tr>

    <tr>
        <td>78</td>
        <td>

        @if ($selected_yards === 'white')

            {{$par->hole_78_whites}}

        @elseif ($selected_yards === 'yellow')

            {{$par->hole_78_yellows}}        

        @elseif ($selected_yards === 'red')
        
            {{$par->hole_78_reds}}  

        @endif
        </td>        
        <td>
        @if ($selected_yards === 'red')

            {{$par->hole_78_ladies_par}}

        @else

            {{$par->hole_78_par}}  

        @endif        
        </td>
        <td><input id="hole_78_score" type="number" class="form-control{{ $errors->has('hole_78_score') ? ' is-invalid' : '' }}" name="hole_78_score" value="{{ old('hole_78_score') }}"></td>
        <td><input id="hole_78_putts" type="number" class="form-control{{ $errors->has('hole_78_putts') ? ' is-invalid' : '' }}" name="hole_78_putts" value="{{ old('hole_78_putts') }}"></td>
        <td><input id="hole_78_drops" type="number" class="form-control{{ $errors->has('hole_78_drops') ? ' is-invalid' : '' }}" name="hole_78_drops" value="{{ old('hole_78_drops') }}"></td>
        <td><input id="hole_78_fir" type="checkbox" class="form-control" name="hole_78_fir" value="7" @if ($selected_yards === 'red'){{ ($par->hole_78_ladies_par < 4 ? "disabled":"") }} @else{{ ($par->hole_78_par < 4 ? "disabled":"") }}@endif></td>
        <td><input id="hole_78_gir" type="checkbox" class="form-control" name="hole_78_gir" value="7"></td>
    </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
</table>

@endforeach

-->
