@extends('layouts.app')

@section('title', 'Add Round')

@section('page-specific-js')

    <script src="{{ asset('js/ajax/ajax_add_round.js') }}" defer></script>

@endsection

@section('content')

            <div class="container">

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

                    <div class="alert alert-danger" style="display:none;">
                    
                    </div>




                    <form id="add_round">

                        @csrf

                        <input id="player_id" type="hidden" class="hidden" name="player_id" value="{{ Auth::user()->id }}">

                        <div class="row">
                        
                            <div class="col-12 col-md">

                                <label>Date</label>

                                <div class="input-group date">
                                    <input type="text" class="form-control{{ $errors->has('round_date') ? ' is-invalid' : '' }}" id="round_date" placeholder="DD/MM/YYYY" name="round_date" value="{{ old('round_date') }}">
                                </div>

                            </div>

                            <div class="col-12 col-md">

                                <label>Round Size</label><br />

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="size" id="half" value="half">
                                    <label class="form-check-label" for="half">9 Holes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="size" id="full" value="full" checked>
                                    <label class="form-check-label" for="full">18 Holes</label>
                                </div>   
                                                         

                            </div>

                            <div class="col-12 col-md">


                                <label>Tees Used</label><br />

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="yards" id="yards-white" value="white">
                                    <label class="form-check-label" for="yards-white">Whites</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="yards" id="yards-yellow" value="yellow" checked>
                                    <label class="form-check-label" for="yards-yellow">Yellows</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="yards" id="yards-red" value="red">
                                    <label class="form-check-label" for="yards-reds">Reds</label>
                                </div>
                            
                            </div>                                                        
                        
                        </div>
                        <!--/.row -->




                        <br />

                        <label>Course</label>

                        <select id="course_id" name="course_id" class="form-control"></select>

                        <br />

                        <div id="select_nines"></div>                     



                        <div class="clearfix"></div>

                        <br />




                        <div id="selected_course"></div>



                        <label>Round Notes</label>
                        <textarea id="round_notes" type="textarea" rows="4" class="form-control" name="round_notes" value="{{ old('round_notes') }}"> </textarea>                         

                        <button id="submit" type="submit" class="btn btn-cta">
                            <span>{{ __('Add Round') }}</span>
                        </button>

                    </form>

            </div>
            <!--/.container -->

@endsection
