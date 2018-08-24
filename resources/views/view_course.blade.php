@extends('layouts.app')

@section('title', 'View Course')

@section('content')

            <div class="container">

                <h1>{{ $course->property_name }} - {{ $course->course_name }}</h1>

                @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('message-type') }} alert-dismissable fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                        <i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i> {{ Session::get('message') }}
                </div>
                @endif                 



                        @if($course->size === '27')

                            <h3>{{ $course->first_nine_name }}</h3>

                        @elseif($course->size === '18')  

                            <h3>Front Nine</h3>

                        @endif


                <div class="row add-course-row add-course-hole">

                    <div class="col col-lg-2">
                        <h4>Hole</h4>
                    </div>

                    <div class="col">
                        <span>1</span>
                    </div>

                    <div class="col">
                        <span>2</span>
                    </div>

                    <div class="col">
                        <span>3</span>
                    </div>

                    <div class="col">
                        <span>4</span>
                    </div>

                    <div class="col">
                        <span>5</span>
                    </div>

                    <div class="col">
                        <span>6</span>
                    </div>

                    <div class="col">
                        <span>7</span>
                    </div>

                    <div class="col">
                        <span>8</span>
                    </div>

                    <div class="col">
                        <span>9</span>
                    </div> 

                    <div class="col">
                        <span>Total</span>
                    </div>                                                                                                                                                                                                                                                         


                </div>
                <!-- /.row -->

                <div class="row add-course-row white">

                    <div class="col col-lg-2">
                        <h4>White Yards</h4>
                    </div>

                    <div class="col">
                        {{ $course->hole_1_white }}
                    </div>

                    <div class="col">
                        {{ $course->hole_2_white }}
                    </div>

                    <div class="col">
                        {{ $course->hole_3_white }}
                    </div>

                    <div class="col">
                        {{ $course->hole_4_white }}
                    </div>

                    <div class="col">
                        {{ $course->hole_5_white }}
                    </div>

                    <div class="col">
                        {{ $course->hole_6_white }}
                    </div>

                    <div class="col">
                        {{ $course->hole_7_white }}
                    </div>

                    <div class="col">
                        {{ $course->hole_8_white }}
                    </div>

                    <div class="col">
                        {{ $course->hole_9_white }}
                    </div>  

                    <div class="col">
                        <span id="firstWhiteYards"></span>
                    </div>                                                                                                                                                                                                                                                                                      


                </div>
                <!-- /.row --> 

                <div class="row add-course-row white">

                    <div class="col col-lg-2">
                        <h4>White Par</h4>
                    </div>

                    <div class="col">
                        {{ $course->hole_1_white_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_2_white_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_3_white_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_4_white_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_5_white_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_6_white_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_7_white_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_8_white_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_9_white_par }}
                    </div>  

                    <div class="col">
                        <span id="firstWhiteYards"></span>
                    </div>                                                                                                                                                                                                                                                                                      


                </div>
                <!-- /.row --> 


                <div class="row add-course-row white">

                    <div class="col col-lg-2">
                        <h4>White Stroke Index</h4>
                    </div>

                    <div class="col">
                        {{ $course->hole_1_white_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_2_white_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_3_white_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_4_white_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_5_white_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_6_white_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_7_white_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_8_white_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_9_white_stroke_index }}
                    </div>  

                    <div class="col">
                        <span id="firstWhiteYards"></span>
                    </div>                                                                                                                                                                                                                                                                                      


                </div>
                <!-- /.row -->                 



                <div class="row add-course-row yellow">

                    <div class="col col-lg-2">
                        <h4>Yellow Yards</h4>
                    </div>

                    <div class="col">
                        {{ $course->hole_1_yellow }}
                    </div>

                    <div class="col">
                        {{ $course->hole_2_yellow }}
                    </div>

                    <div class="col">
                        {{ $course->hole_3_yellow }}
                    </div>

                    <div class="col">
                        {{ $course->hole_4_yellow }}
                    </div>

                    <div class="col">
                        {{ $course->hole_5_yellow }}
                    </div>

                    <div class="col">
                        {{ $course->hole_6_yellow }}
                    </div>

                    <div class="col">
                        {{ $course->hole_7_yellow }}
                    </div>

                    <div class="col">
                        {{ $course->hole_8_yellow }}
                    </div>

                    <div class="col">
                        {{ $course->hole_9_yellow }}
                    </div>  

                    <div class="col">
                        <span id="firstYellowYards"></span>
                    </div>                                                                                                                                                                                                                                                                                      


                </div>
                <!-- /.row -->     

                <div class="row add-course-row yellow">

                    <div class="col col-lg-2">
                        <h4>Yellow Par</h4>
                    </div>

                    <div class="col">
                        {{ $course->hole_1_yellow_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_2_yellow_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_3_yellow_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_4_yellow_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_5_yellow_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_6_yellow_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_7_yellow_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_8_yellow_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_9_yellow_par }}
                    </div>  

                    <div class="col">
                        <span id="firstYellowYards"></span>
                    </div>                                                                                                                                                                                                                                                                                      


                </div>
                <!-- /.row --> 


                <div class="row add-course-row yellow">

                    <div class="col col-lg-2">
                        <h4>Yellow Stroke Index</h4>
                    </div>

                    <div class="col">
                        {{ $course->hole_1_yellow_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_2_yellow_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_3_yellow_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_4_yellow_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_5_yellow_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_6_yellow_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_7_yellow_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_8_yellow_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_9_yellow_stroke_index }}
                    </div>  

                    <div class="col">
                        <span id="firstYellowYards"></span>
                    </div>                                                                                                                                                                                                                                                                                      


                </div>
                <!-- /.row -->                 

 

                <div class="row add-course-row red">

                    <div class="col col-lg-2">
                        <h4>Red Yards</h4>
                    </div>

                    <div class="col">
                        {{ $course->hole_1_red }}
                    </div>

                    <div class="col">
                        {{ $course->hole_2_red }}
                    </div>

                    <div class="col">
                        {{ $course->hole_3_red }}
                    </div>

                    <div class="col">
                        {{ $course->hole_4_red }}
                    </div>

                    <div class="col">
                        {{ $course->hole_5_red }}
                    </div>

                    <div class="col">
                        {{ $course->hole_6_red }}
                    </div>

                    <div class="col">
                        {{ $course->hole_7_red }}
                    </div>

                    <div class="col">
                        {{ $course->hole_8_red }}
                    </div>

                    <div class="col">
                        {{ $course->hole_9_red }}
                    </div>  

                    <div class="col">
                        <span id="firstRedYards"></span>
                    </div>                                                                                                                                                                                                                                                                                      


                </div>
                <!-- /.row -->   


                <div class="row add-course-row red">

                    <div class="col col-lg-2">
                        <h4>Red Par</h4>
                    </div>

                    <div class="col">
                        {{ $course->hole_1_red_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_2_red_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_3_red_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_4_red_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_5_red_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_6_red_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_7_red_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_8_red_par }}
                    </div>

                    <div class="col">
                        {{ $course->hole_9_red_par }}
                    </div>  

                    <div class="col">
                        <span id="firstRedYards"></span>
                    </div>                                                                                                                                                                                                                                                                                      


                </div>
                <!-- /.row --> 

                <div class="row add-course-row red">

                    <div class="col col-lg-2">
                        <h4>Red Stroke Index</h4>
                    </div>

                    <div class="col">
                        {{ $course->hole_1_red_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_2_red_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_3_red_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_4_red_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_5_red_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_6_red_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_7_red_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_8_red_stroke_index }}
                    </div>

                    <div class="col">
                        {{ $course->hole_9_red_stroke_index }}
                    </div>  

                    <div class="col">
                        <span id="firstRedYards"></span>
                    </div>                                                                                                                                                                                                                                                                                      


                </div>
                <!-- /.row -->                   




    




            </div>
            <!--/.container -->
@endsection
