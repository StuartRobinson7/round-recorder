@extends('layouts.app')

@section('title', 'Add Round')

@section('page-specific-js')

    <script src="{{ asset('js/ajax/ajax_add_round.js') }}" defer></script>

@endsection

@section('content')


    <h1>{{ __('Add Round') }}</h1>

        @if ($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                     @endforeach
                </ul>
            </div>

        @endif

        <div class="alert alert-danger" style="display:none;"></div>

        <br />

        <form id="add_round">

        @csrf        

            <div class="form-holder">

                <input id="player_id" type="hidden" class="hidden" name="player_id" value="{{ Auth::user()->id }}">

                <h3 class="title"><span>Round Type</span></h3>

                <div class="row">

                    <div class="col-12 col-md-4 offset-md-4">

                        <label>Round Size</label><br />

                        <div class="radio-group">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="size" id="half" value="half">
                                <label class="custom-control-label" for="half">9 Holes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="size" id="full" value="full" checked>
                                <label class="custom-control-label" for="full">18 Holes</label>
                            </div> 
                        
                        </div>

                    </div>

                    <div class="col-12 col-md-4 offset-md-4">


                        <label>Tees Used</label><br />

                        <div class="radio-group">

                            <div class="custom-control white custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="yards" id="yards-white" value="white" @if( Auth::user()->preferred_tees === "whites" ) checked @endif >
                                <label class="custom-control-label" for="yards-white">Whites</label>
                            </div>
                            <div class="custom-control yellow custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="yards" id="yards-yellow" value="yellow" @if( Auth::user()->preferred_tees === "yellows" ) checked @endif >
                                <label class="custom-control-label" for="yards-yellow">Yellows</label>
                            </div>
                            <div class="custom-control red custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="yards" id="yards-red" value="red" @if( Auth::user()->preferred_tees === "reds" ) checked @endif >
                                <label class="custom-control-label" for="yards-red">Reds</label>
                            </div>

                        </div>
                    
                    </div>  
                    

                </div>
                <!--/.row -->


                <h3 class="title"><span>Where/When</span></h3>

                <div class="row">

                    <div class="col-12 col-md-3 offset-md-4">

                        <div class="form-group">                    

                            <label for="round_date">Date</label>

                            <div class="input-group date">
                                <input type="text" class="form-control form-control-lg {{ $errors->has('round_date') ? ' is-invalid' : '' }}" id="round_date" placeholder="DD/MM/YYYY" name="round_date" value="{{ old('round_date') }}">
                            </div>

                        </div>                

                    </div>

                    <div class="col-12 col-md-5 offset-md-4">
                        
                        <div class="form-group">

                            <label>Course</label>

                            <select id="course_id" name="course_id" class="form-control form-control-lg"></select>   

                        </div>                                
                        
                    </div>

                    <div class="col-12 col-md-3">

                        <label>&nbsp;</label>

                        <p>If you can't find the course you played on you can add it to our database of courses <a href="{{ route('courses.create') }}">here</a>.</p>
                    </div>

                </div>
                <!--/.row -->                     

                <br />                  

                <div id="select_nines"><input class="form-check-input hidden d-none" type="radio" name="nine" id="first-nine" value="first-nine-second-nine" checked></div>                     

                <div id="selected_course"></div>



            </div>
            <!--/.form-holder -->

            <div class="text-right">
                <br />
                <button id="submit" type="submit" class="btn btn-cta btn-lg" disabled>
                    <span>{{ __('Add Round') }}</span>
                </button>

            </div> 

        </form>             


@endsection
