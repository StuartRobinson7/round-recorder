@extends('layouts.app')

@section('title', 'View Course')

@section('content')

            <div class="container view-course">


                <div class="row">

                        <div class="col">
                            <h1>{{ $course->property_name }} - {{ $course->course_name }}</h1>
                        </div>

                        <div class="col-auto">
                            <a href="{{action('CourseController@edit', $course['id'])}}" class="btn btn-cta btn-lg"><span>Edit Course</span></a>
                        </div>

                </div>
                <!--/.row -->
                           



                @if($course->holes === 27)

                    <h3>{{ $course->first_nine_name }}</h3>

                @elseif($course->holes === 18)  

                    <h3>Front Nine</h3>

                @endif

                <div class="row rr-row rr-head-row">

                    <div class="col rr-head">
                        <h4>Hole</h4>
                    </div>

                    <div class="col rr-head white">
                        <h4>Yards</h4>
                    </div> 

                    <div class="col rr-head white">
                        <h4>Par</h4>
                    </div> 

                    <div class="col rr-head white">
                        <h4>S.I.</h4>
                    </div>  

                    <div class="col rr-head yellow">
                        <h4>Yards</h4>
                    </div> 

                    <div class="col rr-head yellow">
                        <h4>Par</h4>
                    </div> 

                    <div class="col rr-head yellow">
                        <h4>S.I.</h4>
                    </div>   

                    <div class="col rr-head red">
                        <h4>Yards</h4>
                    </div> 

                    <div class="col rr-head red">
                        <h4>Par</h4>
                    </div> 

                    <div class="col rr-head red">
                        <h4>S.I.</h4>
                    </div>   

                </div>
                <!--/.row -->                                                                                                   

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>1</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_1_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_1_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_1_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_1_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_1_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_1_yellow_stroke_index }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_1_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_1_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_1_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->                

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>2</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_2_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_2_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_2_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_2_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_2_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_2_yellow_stroke_index }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_2_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_2_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_2_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>3</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_3_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_3_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_3_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_3_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_3_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_3_yellow_stroke_index }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_3_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_3_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_3_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>4</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_4_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_4_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_4_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_4_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_4_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_4_yellow_stroke_index }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_4_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_4_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_4_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->                 

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>5</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_5_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_5_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_5_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_5_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_5_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_5_yellow_stroke_index }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_5_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_5_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_5_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>6</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_6_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_6_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_6_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_6_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_6_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_6_yellow_stroke_index }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_6_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_6_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_6_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>7</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_7_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_7_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_7_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_7_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_7_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_7_yellow_stroke_index }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_7_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_7_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_7_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>8</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_8_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_8_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_8_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_8_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_8_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_8_yellow_stroke_index }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_8_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_8_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_8_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->   

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>9</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_9_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_9_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_9_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_9_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_9_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_9_yellow_stroke_index }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_9_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_9_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_9_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>Totals</h4>
                    </div>

                    <div class="col white">
                        {{ $course->first_nine_white }}
                    </div>  

                    <div class="col white">
                    {{ $course->first_nine_white_par }}
                    </div>

                    <div class="col">
                        
                    </div>    

                    <div class="col yellow">
                        {{ $course->first_nine_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->first_nine_yellow_par }}  
                    </div>

                    <div class="col">
                        
                    </div>        

                    <div class="col red">
                        {{ $course->first_nine_red }}                        
                    </div>  

                    <div class="col red">
                        {{ $course->first_nine_red_par }} 
                    </div>

                    <div class="col">
                        
                    </div>                                                                                            

                </div>
                <!--/.row -->                  

                <br />

                @if($course->holes === 27)

                    <h3>{{ $course->second_nine_name }}</h3>

                @elseif($course->holes === 18)  

                    <h3>Back Nine</h3>

                @endif

                @if($course->holes > 9)

                <div class="row rr-row  rr-head-row">

                    <div class="col rr-head">
                        <h4>Hole</h4>
                    </div>

                    <div class="col rr-head white">
                        <h4>Yards</h4>
                    </div> 

                    <div class="col rr-head white">
                        <h4>Par</h4>
                    </div> 

                    <div class="col rr-head white">
                        <h4>S.I.</h4>
                    </div>  

                    <div class="col rr-head yellow">
                        <h4>Yards</h4>
                    </div> 

                    <div class="col rr-head yellow">
                        <h4>Par</h4>
                    </div> 

                    <div class="col rr-head yellow">
                        <h4>S.I.</h4>
                    </div>   

                    <div class="col rr-head red">
                        <h4>Yards</h4>
                    </div> 

                    <div class="col rr-head red">
                        <h4>Par</h4>
                    </div> 

                    <div class="col rr-head red">
                        <h4>S.I.</h4>
                    </div>   

                </div>
                <!--/.row -->                  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>10</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_10_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_10_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_10_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_10_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_10_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_10_yellow_stroke_index }}
                    </div>        

                    <div class="col red"">
                        {{ $course->hole_10_red }}
                    </div>  

                    <div class="col red"">
                        {{ $course->hole_10_red_par }}
                    </div>

                    <div class="col red"">
                        {{ $course->hole_10_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->                

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>11</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_11_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_11_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_11_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_11_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_11_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_11_yellow_stroke_index }}
                    </div>        

                    <div class="col red"">
                        {{ $course->hole_11_red }}
                    </div>  

                    <div class="col red"">
                        {{ $course->hole_11_red_par }}
                    </div>

                    <div class="col red"">
                        {{ $course->hole_11_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>12</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_12_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_12_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_12_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_12_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_12_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_12_yellow_stroke_index }}
                    </div>        

                    <div class="col red"">
                        {{ $course->hole_12_red }}
                    </div>  

                    <div class="col red"">
                        {{ $course->hole_12_red_par }}
                    </div>

                    <div class="col red"">
                        {{ $course->hole_12_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>13</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_13_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_13_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_13_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_13_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_13_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_13_yellow_stroke_index }}
                    </div>        

                    <div class="col red"">
                        {{ $course->hole_13_red }}
                    </div>  

                    <div class="col red"">
                        {{ $course->hole_13_red_par }}
                    </div>

                    <div class="col red"">
                        {{ $course->hole_13_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->                 

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>14</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_14_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_14_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_14_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_14_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_14_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_14_yellow_stroke_index }}
                    </div>        

                    <div class="col red"">
                        {{ $course->hole_14_red }}
                    </div>  

                    <div class="col red"">
                        {{ $course->hole_14_red_par }}
                    </div>

                    <div class="col red"">
                        {{ $course->hole_14_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>15</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_15_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_15_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_15_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_15_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_15_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_15_yellow_stroke_index }}
                    </div>        

                    <div class="col red"">
                        {{ $course->hole_15_red }}
                    </div>  

                    <div class="col red"">
                        {{ $course->hole_15_red_par }}
                    </div>

                    <div class="col red"">
                        {{ $course->hole_15_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>16</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_16_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_16_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_16_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_16_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_16_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_16_yellow_stroke_index }}
                    </div>        

                    <div class="col red"">
                        {{ $course->hole_16_red }}
                    </div>  

                    <div class="col red"">
                        {{ $course->hole_16_red_par }}
                    </div>

                    <div class="col red"">
                        {{ $course->hole_16_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>17</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_17_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_17_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_17_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_17_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_17_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_17_yellow_stroke_index }}
                    </div>        

                    <div class="col red"">
                        {{ $course->hole_17_red }}
                    </div>  

                    <div class="col red"">
                        {{ $course->hole_17_red_par }}
                    </div>

                    <div class="col red"">
                        {{ $course->hole_17_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->   

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>18</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_18_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_18_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_18_white_stroke_index }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_18_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_18_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_18_yellow_stroke_index }}
                    </div>        

                    <div class="col red"">
                        {{ $course->hole_18_red }}
                    </div>  

                    <div class="col red"">
                        {{ $course->hole_18_red_par }}
                    </div>

                    <div class="col red"">
                        {{ $course->hole_18_red_stroke_index }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>Totals</h4>
                    </div>

                    <div class="col white">
                        {{ $course->second_nine_white }}
                    </div>  

                    <div class="col white">
                    {{ $course->second_nine_white_par }}
                    </div>

                    <div class="col">
                        
                    </div>    

                    <div class="col yellow">
                        {{ $course->second_nine_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->second_nine_yellow_par }}  
                    </div>

                    <div class="col">
                        
                    </div>        

                    <div class="col red">
                        {{ $course->second_nine_red }}                        
                    </div>  

                    <div class="col red">
                        {{ $course->second_nine_red_par }} 
                    </div>

                    <div class="col">
                        
                    </div>                                                                                            

                </div>
                <!--/.row -->                  

                @endif

                <br />


                @if($course->holes > 18)

                <h3>{{ $course->third_nine_name }}</h3>


                <div class="row rr-row  rr-head-row">

                    <div class="col rr-head">
                        <h4>Hole</h4>
                    </div>

                    <div class="col rr-head white">
                        <h4>Yards</h4>
                    </div> 

                    <div class="col rr-head white">
                        <h4>Par</h4>
                    </div> 

                    <div class="col rr-head white">
                        <h4>S.I.</h4>
                    </div>  

                    <div class="col rr-head yellow">
                        <h4>Yards</h4>
                    </div> 

                    <div class="col rr-head yellow">
                        <h4>Par</h4>
                    </div> 

                    <div class="col rr-head yellow">
                        <h4>S.I.</h4>
                    </div>   

                    <div class="col rr-head red">
                        <h4>Yards</h4>
                    </div> 

                    <div class="col rr-head red">
                        <h4>Par</h4>
                    </div> 

                    <div class="col rr-head red">
                        <h4>S.I.</h4>
                    </div>   

                </div>
                <!--/.row -->  


                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>19</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_19_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_19_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_19_white_stroke_index_front }} / {{ $course->hole_19_white_stroke_index_back }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_19_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_19_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_19_yellow_stroke_index_front }} / {{ $course->hole_19_yellow_stroke_index_back }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_19_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_19_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_19_red_stroke_index_front }} / {{ $course->hole_19_red_stroke_index_back }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>20</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_20_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_20_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_20_white_stroke_index_front }} / {{ $course->hole_19_white_stroke_index_back }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_20_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_20_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_20_yellow_stroke_index_front }} / {{ $course->hole_19_yellow_stroke_index_back }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_20_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_20_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_20_red_stroke_index_front }} / {{ $course->hole_19_red_stroke_index_back }}
                    </div>                                                                                            

                </div>
                <!--/.row -->                

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>21</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_21_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_21_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_21_white_stroke_index_front }} / {{ $course->hole_19_white_stroke_index_back }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_21_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_21_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_21_yellow_stroke_index_front }} / {{ $course->hole_19_yellow_stroke_index_back }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_21_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_21_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_21_red_stroke_index_front }} / {{ $course->hole_19_red_stroke_index_back }}
                    </div>                                                                                            

                </div>
                <!--/.row -->

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>22</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_22_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_22_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_22_white_stroke_index_front }} / {{ $course->hole_22_white_stroke_index_back }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_22_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_22_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_22_yellow_stroke_index_front }} / {{ $course->hole_22_yellow_stroke_index_back }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_22_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_22_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_22_red_stroke_index_front }} / {{ $course->hole_22_red_stroke_index_back }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>23</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_23_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_23_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_23_white_stroke_index_front }} / {{ $course->hole_23_white_stroke_index_back }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_23_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_23_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_23_yellow_stroke_index_front }} / {{ $course->hole_23_yellow_stroke_index_back }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_23_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_23_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_23_red_stroke_index_front }} / {{ $course->hole_23_red_stroke_index_back }}
                    </div>                                                                                            

                </div>
                <!--/.row -->                 

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>24</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_24_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_24_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_24_white_stroke_index_front }} / {{ $course->hole_24_white_stroke_index_back }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_24_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_24_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_24_yellow_stroke_index_front }} / {{ $course->hole_24_yellow_stroke_index_back }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_24_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_24_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_24_red_stroke_index_front }} / {{ $course->hole_24_red_stroke_index_back }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>25</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_25_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_25_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_25_white_stroke_index_front }} / {{ $course->hole_25_white_stroke_index_back }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_25_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_25_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_25_yellow_stroke_index_front }} / {{ $course->hole_25_yellow_stroke_index_back }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_25_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_25_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_25_red_stroke_index_front }} / {{ $course->hole_25_red_stroke_index_back }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>26</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_26_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_26_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_26_white_stroke_index_front }} / {{ $course->hole_26_white_stroke_index_back }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_26_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_26_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_26_yellow_stroke_index_front }} / {{ $course->hole_26_yellow_stroke_index_back }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_26_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_26_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_26_red_stroke_index_front }} / {{ $course->hole_26_red_stroke_index_back }}
                    </div>                                                                                            

                </div>
                <!--/.row -->  

                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>27</h4>
                    </div>

                    <div class="col white">
                        {{ $course->hole_27_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->hole_27_white_par }}
                    </div>

                    <div class="col white">
                        {{ $course->hole_27_white_stroke_index_front }} / {{ $course->hole_27_white_stroke_index_back }}
                    </div>    

                    <div class="col yellow">
                        {{ $course->hole_27_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->hole_27_yellow_par }}
                    </div>

                    <div class="col yellow">
                        {{ $course->hole_27_yellow_stroke_index_front }} / {{ $course->hole_27_yellow_stroke_index_back }}
                    </div>        

                    <div class="col red">
                        {{ $course->hole_27_red }}
                    </div>  

                    <div class="col red">
                        {{ $course->hole_27_red_par }}
                    </div>

                    <div class="col red">
                        {{ $course->hole_27_red_stroke_index_front }} / {{ $course->hole_27_red_stroke_index_back }}
                    </div>                                                                                            

                </div>
                <!--/.row -->   


                <div class="row rr-row">

                    <div class="col rr-head">
                        <h4>Totals</h4>
                    </div>

                    <div class="col white">
                        {{ $course->third_nine_white }}
                    </div>  

                    <div class="col white">
                        {{ $course->third_nine_white_par }}
                    </div>

                    <div class="col">
                        
                    </div>    

                    <div class="col yellow">
                        {{ $course->third_nine_yellow }}
                    </div>  

                    <div class="col yellow">
                        {{ $course->third_nine_yellow_par }}  
                    </div>

                    <div class="col">
                        
                    </div>        

                    <div class="col red">
                        {{ $course->third_nine_red }}                        
                    </div>  

                    <div class="col red">
                        {{ $course->third_nine_red_par }} 
                    </div>

                    <div class="col">
                        
                    </div>                                                                                            

                </div>
                <!--/.row -->         


                @endif

            </div>
            <!--/.container -->
@endsection
