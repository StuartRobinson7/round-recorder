@extends('layouts.app')

@section('title', 'Edit Course')

@section('page-specific-js')

<script>
    var course_id = {!! json_encode($id) !!};
</script>

<script src="{{ asset('js/ajax/ajax_edit_course.js') }}" defer></script>

@endsection

@section('content')

            <div class="container">

                <h1>{{ __('Edit Course') }}</h1>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <form method="post" id="edit_course"  action="{{ route('courses.update', $id) }}">
                        
                        @method('put')

                        @csrf

                        <div class="row">

                            <div class="col-12 col-md">

                                <div class="form-group">
                                    <label>Property Name</label>
                                    <input id="property_name" type="text" class="form-control {{ $errors->has('property_name') ? ' is-invalid' : '' }}" name="property_name" value="{{ old('property_name', $course_info->property_name) }}">
                                </div>

                            </div>

                            <div class="col-12 col-md">

                                <div class="form-group">
                                    <label>Course Name</label>
                                    <input id="course_name" type="text" class="form-control {{ $errors->has('course_name') ? ' is-invalid' : '' }}" name="course_name" value="{{ old('course_name', $course_info->course_name) }}">
                                </div>

                            </div>                            

                            </div>
                            <!-- /.row -->

                            <div class="row">

                            <div class="col-lg">

                                
                                <label>Number of holes</label>
                                <div class="form-group hole-select">
                                    
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="holes" id="holes-9" value="9" @if($course_info->holes === 9) checked @endif>
                                        <label class="custom-control-label" for="holes-9">9 Holes</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="holes" id="holes-18" value="18" @if($course_info->holes === 18) checked @endif>
                                        <label class="custom-control-label" for="holes-18">18 Holes</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" name="holes" id="holes-27" value="27" @if($course_info->holes === 27) checked @endif>
                                        <label class="custom-control-label" for="holes-27">27 Holes</label>
                                    </div>

                                </div>
                                <!--/.form-control -->                                

                            </div>


                            </div>
                            <!-- /.row -->


                            <div id="get-holes"></div>
                            <!-- /.get-holes -->

                            <br />

                            <div class="text-right">

                                <button id="submit" type="submit" class="btn btn-cta btn-lg">
                                    <span>{{ __('Save Changes') }}</span>
                                </button>

                            </div>

                    </form>

            </div>
            <!--/.container -->
@endsection
