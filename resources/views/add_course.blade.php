@extends('layouts.app')

@section('title', 'Add Course')

@section('page-specific-js')

    <script src="{{ asset('js/ajax/ajax_add_course.js') }}" defer></script>

@endsection

@section('content')


    <h1>{{ __('Add Course') }}</h1>
        
    <br />

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />    
    @endif



        <form method="POST" id="add_course_form" action="{{ route('courses.store') }}" aria-label="{{ __('Add Course') }}">
            
            <div class="form-holder">  

                @csrf

                <h3 class="title"><span>Course Details</span></h3>

                <div class="row">

                    <div class="col-12 col-md-4 offset-md-4">

                        <div class="form-group">
                            <label>Property Name</label>
                            <input id="property_name" type="text" class="form-control {{ $errors->has('property_name') ? ' is-invalid' : '' }}" name="property_name" value="">
                        </div>

                    </div>

                    <div class="col-12 col-md-4 offset-md-4">

                        <div class="form-group">
                            <label>Course Name</label>
                            <input id="course_name" type="text" class="form-control {{ $errors->has('course_name') ? ' is-invalid' : '' }}" name="course_name" value="">
                        </div>

                    </div>

                </div>

                <br />                

                <h3 class="title"><span>Course Size</span></h3>

                <div class="row">

                    <div class="col-12 col-md-4 offset-md-4">  

                        <label>Number of holes</label>

                        <div class="radio-group">   

                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="holes" id="holes-9" value="9">
                                <label class="custom-control-label" for="holes-9">9 Holes</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="holes" id="holes-18" value="18" checked>
                                <label class="custom-control-label" for="holes-18">18 Holes</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" type="radio" name="holes" id="holes-27" value="27">
                                <label class="custom-control-label" for="holes-27">27 Holes</label>
                            </div>

                        </div>
                        <!--/.radio-group -->  

                    </div>                  

                </div>
                <!--/.row -->                    

                <br />


                <div id="get-holes"></div>
                <!-- /.get-holes -->


            </div>
            <!--/.form-holder -->

            <br />

            <div class="text-right">

                <button type="submit" class="btn btn-cta btn-lg">
                    <span>{{ __('Add Course') }}</span>
                </button>

            </div>

        </form>




@endsection
