@extends('layouts.app')

@section('title', 'Edit Course')

@section('page-specific-js')

<script>
    var course_id = {!! json_encode($id) !!};
</script>

<script src="{{ asset('js/ajax/ajax_edit_course.js') }}" defer></script>

@endsection

@section('content')

<h1>{{ __('Edit Course') }}</h1>

<br />

<div class="form-holder">

            <form method="post" id="edit_course"  action="{{ route('courses.update', $id) }}">
                        
                @method('put')

                @csrf

                <h3 class="title"><span>Course Details</span></h3>                

                <div class="row">

                    <div class="col-12 col-md-4 offset-md-4">

                        <div class="form-group">
                            <label>Property Name</label>
                            <input id="property_name" type="text" class="form-control {{ $errors->has('property_name') ? ' is-invalid' : '' }}" name="property_name" value="{{ old('property_name', $course_info->property_name) }}">
                        </div>

                    </div>

                    <div class="col-12 col-md-4 offset-md-4">

                        <div class="form-group">
                            <label>Course Name</label>
                            <input id="course_name" type="text" class="form-control {{ $errors->has('course_name') ? ' is-invalid' : '' }}" name="course_name" value="{{ old('course_name', $course_info->course_name) }}">
                        </div>

                    </div>
                    
                </div>
                <!--/.row -->

                <br />

                <h3 class="title"><span>Course Size</span></h3>

                <div class="row">                  

                    <div class="col-12 col-md-4 offset-md-4">
                               
                        <label>Number of holes</label>

                        <div class="radio-group"> 
                                        
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
                        <!--/.radio-group -->

                    </div>

                </div>
                <!-- /.row -->


                <div id="get-holes"></div>
                <!-- /.get-holes -->

</div>
<!--/.form-holder -->

                <br />

                <div class="text-right">

                    <a href="#" data-toggle="modal" data-target="#updateModal" class="btn btn-cta btn-lg">
                        <span>{{ __('Edit Course') }}</span>
                    </a>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Update Options</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                <h3>Correcting an Error</h3>

                                <p>This option is for when an error has been made inputting the course and all rounds played on the course will need to be corrected accordingly.</p>

                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-danger btn-lg" value="correct">
                                        <span>{{ __('Correct Course') }}</span>
                                    </button>
                                </div>

                                <hr />

                                <h3>Course Update</h3>

                                <p>This option is for when there is a genuine change to the course that should only effect future rounds i.e. a par 4 hole has been lengthened to a par 5.</p>

                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-cta btn-lg" value="update">
                                        <span>{{ __('Update Course') }}</span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>                

            </form>





@endsection
