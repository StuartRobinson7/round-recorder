@extends('layouts.app')

@section('title', 'View Round')

@section('content')

            <div class="container">

                @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('message-type') }} alert-dismissable fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </button>
                        <i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i> {{ Session::get('message') }}
                </div>
                @endif             

                <div class="row">
                
                    <div class="col">
                        <h1>{{ $round->round_date->format('d/m/Y') }} - {{ $course->property_name }} - {{ $course->course_name }}</h1>
                    </div>

                    <div class="col-auto">
                        <a href="{{action('RoundController@edit', $round['id'])}}" class="btn btn-warning">Edit Round</a>
                    </div>

                </div>
                <!--/.row -->
                
                <h3>Out</h3>
                
                <div class="row round-row round-header-hole">
                
                    <div class="col">
                        <h4>Hole</h4>
                    </div>

                    <div class="col">
                        1
                    </div>

                    <div class="col">
                        2
                    </div>

                    <div class="col">
                        3
                    </div>

                    <div class="col">
                        4
                    </div>

                    <div class="col">
                        5
                    </div>

                    <div class="col">
                        6
                    </div>

                    <div class="col">
                        7
                    </div>

                    <div class="col">
                        8
                    </div>                                                                                                                                                                

                    <div class="col">
                        9
                    </div>

                    <div class="col total-cell">
                        Total 
                    </div>                    
                                                                                                                                                                                                       
                
                </div>
                <!--/.row -->

                <div class="row round-row round-header-par">
                
                
                    <div class="col">
                        <h4>Par</h4>
                    </div>

                    <div class="col">
                        @if($round->yards === 'red')
                            {{ $course->hole_1_ladies_par }}
                        @else
                            {{ $course->hole_1_par }} 
                        @endif 
                    </div>

                    <div class="col">
                        @if($round->yards === 'red')
                            {{ $course->hole_2_ladies_par }}
                        @else
                            {{ $course->hole_2_par }} 
                        @endif
                    </div>

                    <div class="col">
                        @if($round->yards === 'red')
                            {{ $course->hole_3_ladies_par }}
                        @else
                            {{ $course->hole_3_par }} 
                        @endif
                    </div>

                    <div class="col">
                        @if($round->yards === 'red')
                            {{ $course->hole_4_ladies_par }}
                        @else
                            {{ $course->hole_4_par }} 
                        @endif
                    </div>

                    <div class="col">
                        @if($round->yards === 'red')
                            {{ $course->hole_5_ladies_par }}
                        @else
                            {{ $course->hole_5_par }} 
                        @endif
                    </div>

                    <div class="col">
                        @if($round->yards === 'red')
                            {{ $course->hole_6_ladies_par }}
                        @else
                            {{ $course->hole_6_par }} 
                        @endif
                    </div>

                    <div class="col">
                        @if($round->yards === 'red')
                            {{ $course->hole_7_ladies_par }}
                        @else
                            {{ $course->hole_7_par }} 
                        @endif
                    </div>

                    <div class="col">
                        @if($round->yards === 'red')
                            {{ $course->hole_8_ladies_par }}
                        @else
                            {{ $course->hole_8_par }} 
                        @endif
                    </div>                                                                                                                                                                

                    <div class="col">
                        @if($round->yards === 'red')
                            {{ $course->hole_9_ladies_par }}
                        @else
                            {{ $course->hole_9_par }} 
                        @endif
                    </div>

                    <div class="col total-cell">
                        Total
                    </div>                      

            </div>
            <!--/.row -->    
            
            <div class="row round-row round-row-score">
            
                    <div class="col">
                        <h4>Score</h4>
                    </div>
                
                    <div class="col">
                        <span
                        
                            @if($round->yards === 'red')

                                @if($round_result->hole_1_red_plus_minus >= 2 )

                                    class="eagle"

                                @elseif($round_result->hole_1_red_plus_minus = 1 )

                                    class="birdie"

                                @elseif($round_result->hole_1_red_plus_minus = 0 )

                                    class="par"
                                    
                                @elseif($round_result->hole_1_red_plus_minus = -1 )

                                    class="bogey"
                                    
                                @elseif($round_result->hole_1_red_plus_minus <= -2 )

                                    class="double-bogey"                                   
                                    
                                @endif                                    

                            @else

                                @if($round_result->hole_1_plus_minus === 2 )

                                    class="eagle"

                                @elseif($round_result->hole_1_plus_minus === 1 )

                                    class="birdie"

                                @elseif($round_result->hole_1_plus_minus === 0 )

                                    class="par"

                                @elseif($round_result->hole_1_plus_minus === -1 )

                                    class="bogey"

                                @elseif($round_result->hole_1_plus_minus === -2 )

                                    class="double-bogey"
                                    
                                @endif                                    

                            @endif                        
                        >
                            {{ $round->hole_1_score }}                             
                        </span>
                    </div>
                
                    <div class="col">
                        <span
                        
                            @if($round->yards === 'red')

                                @if($round_result->hole_2_red_plus_minus >= 2 )

                                    class="eagle"

                                @elseif($round_result->hole_2_red_plus_minus = 1 )

                                    class="birdie"

                                @elseif($round_result->hole_2_red_plus_minus = 0 )

                                    class="par"
                                    
                                @elseif($round_result->hole_2_red_plus_minus = -1 )

                                    class="bogey"
                                    
                                @elseif($round_result->hole_2_red_plus_minus <= -2 )

                                    class="double-bogey"                                   
                                    
                                @endif                                    

                            @else

                                @if($round_result->hole_2_plus_minus === 2 )

                                    class="eagle"

                                @elseif($round_result->hole_2_plus_minus === 1 )

                                    class="birdie"

                                @elseif($round_result->hole_2_plus_minus === 0 )

                                    class="par"

                                @elseif($round_result->hole_2_plus_minus === -1 )

                                    class="bogey"

                                @elseif($round_result->hole_2_plus_minus === -2 )

                                    class="double-bogey"
                                    
                                @endif                                    

                            @endif                        
                        >
                            {{ $round->hole_2_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        
                        @if($round->yards === 'red')

                            @if($round_result->hole_3_red_plus_minus >= 2 )

                                class="eagle"

                            @elseif($round_result->hole_3_red_plus_minus === 1 )

                                class="birdie"

                            @elseif($round_result->hole_3_red_plus_minus === 0 )

                                class="par"
                                
                            @elseif($round_result->hole_3_red_plus_minus === -1 )

                                class="bogey"
                                
                            @elseif($round_result->hole_3_red_plus_minus <= -2 )

                                class="double-bogey"                                   
                                
                            @endif                                    

                        @else

                            @if($round_result->hole_3_plus_minus === 2 )

                                class="eagle"

                            @elseif($round_result->hole_3_plus_minus === 1 )

                                class="birdie"

                            @elseif($round_result->hole_3_plus_minus === 0 )

                                class="par"

                            @elseif($round_result->hole_3_plus_minus === -1 )

                                class="bogey"

                            @elseif($round_result->hole_3_plus_minus === -2 )

                                class="double-bogey"
                                
                            @endif                                    

                        @endif                        
                    >
                            {{ $round->hole_3_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        
                        @if($round->yards === 'red')

                            @if($round_result->hole_4_red_plus_minus >= 2 )

                                class="eagle"

                            @elseif($round_result->hole_4_red_plus_minus = 1 )

                                class="birdie"

                            @elseif($round_result->hole_4_red_plus_minus = 0 )

                                class="par"
                                
                            @elseif($round_result->hole_4_red_plus_minus = -1 )

                                class="bogey"
                                
                            @elseif($round_result->hole_4_red_plus_minus <= -2 )

                                class="double-bogey"                                   
                                
                            @endif                                    

                        @else

                            @if($round_result->hole_4_plus_minus === 2 )

                                class="eagle"

                            @elseif($round_result->hole_4_plus_minus === 1 )

                                class="birdie"

                            @elseif($round_result->hole_4_plus_minus === 0 )

                                class="par"

                            @elseif($round_result->hole_4_plus_minus === -1 )

                                class="bogey"

                            @elseif($round_result->hole_4_plus_minus === -2 )

                                class="double-bogey"
                                
                            @endif                                    

                        @endif                        
                    >
                            {{ $round->hole_4_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        
                        @if($round->yards === 'red')

                            @if($round_result->hole_5_red_plus_minus >= 2 )

                                class="eagle"

                            @elseif($round_result->hole_5_red_plus_minus = 1 )

                                class="birdie"

                            @elseif($round_result->hole_5_red_plus_minus = 0 )

                                class="par"
                                
                            @elseif($round_result->hole_5_red_plus_minus = -1 )

                                class="bogey"
                                
                            @elseif($round_result->hole_5_red_plus_minus <= -2 )

                                class="double-bogey"                                   
                                
                            @endif                                    

                        @else

                            @if($round_result->hole_5_plus_minus === 2 )

                                class="eagle"

                            @elseif($round_result->hole_5_plus_minus === 1 )

                                class="birdie"

                            @elseif($round_result->hole_5_plus_minus === 0 )

                                class="par"

                            @elseif($round_result->hole_5_plus_minus === -1 )

                                class="bogey"

                            @elseif($round_result->hole_5_plus_minus === -2 )

                                class="double-bogey"
                                
                            @endif                                    

                        @endif                        
                    >
                            {{ $round->hole_5_score }}                                
                        </span>
                    </div>

                    <div class="col">

                    <span
                        
                        @if($round->yards === 'red')

                            @if($round_result->hole_6_red_plus_minus >= 2 )

                                class="eagle"

                            @elseif($round_result->hole_6_red_plus_minus = 1 )

                                class="birdie"

                            @elseif($round_result->hole_6_red_plus_minus = 0 )

                                class="par"
                                
                            @elseif($round_result->hole_6_red_plus_minus = -1 )

                                class="bogey"
                                
                            @elseif($round_result->hole_6_red_plus_minus <= -2 )

                                class="double-bogey"                                   
                                
                            @endif                                    

                        @else

                            @if($round_result->hole_6_plus_minus === 2 )

                                class="eagle"

                            @elseif($round_result->hole_6_plus_minus === 1 )

                                class="birdie"

                            @elseif($round_result->hole_6_plus_minus === 0 )

                                class="par"

                            @elseif($round_result->hole_6_plus_minus === -1 )

                                class="bogey"

                            @elseif($round_result->hole_6_plus_minus === -2 )

                                class="double-bogey"
                                
                            @endif                                    

                        @endif                        
                    >
                            {{ $round->hole_6_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        
                        @if($round->yards === 'red')

                            @if($round_result->hole_7_red_plus_minus >= 2 )

                                class="eagle"

                            @elseif($round_result->hole_7_red_plus_minus = 1 )

                                class="birdie"

                            @elseif($round_result->hole_7_red_plus_minus = 0 )

                                class="par"
                                
                            @elseif($round_result->hole_7_red_plus_minus = -1 )

                                class="bogey"
                                
                            @elseif($round_result->hole_7_red_plus_minus <= -2 )

                                class="double-bogey"                                   
                                
                            @endif                                    

                        @else

                            @if($round_result->hole_7_plus_minus === 2 )

                                class="eagle"

                            @elseif($round_result->hole_7_plus_minus === 1 )

                                class="birdie"

                            @elseif($round_result->hole_7_plus_minus === 0 )

                                class="par"

                            @elseif($round_result->hole_7_plus_minus === -1 )

                                class="bogey"

                            @elseif($round_result->hole_7_plus_minus === -2 )

                                class="double-bogey"
                                
                            @endif                                    

                        @endif                        
                    >
                            {{ $round->hole_7_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        
                        @if($round->yards === 'red')

                            @if($round_result->hole_8_red_plus_minus >= 2 )

                                class="eagle"

                            @elseif($round_result->hole_8_red_plus_minus = 1 )

                                class="birdie"

                            @elseif($round_result->hole_8_red_plus_minus = 0 )

                                class="par"
                                
                            @elseif($round_result->hole_8_red_plus_minus = -1 )

                                class="bogey"
                                
                            @elseif($round_result->hole_8_red_plus_minus <= -2 )

                                class="double-bogey"                                   
                                
                            @endif                                    

                        @else

                            @if($round_result->hole_8_plus_minus === 2 )

                                class="eagle"

                            @elseif($round_result->hole_8_plus_minus === 1 )

                                class="birdie"

                            @elseif($round_result->hole_8_plus_minus === 0 )

                                class="par"

                            @elseif($round_result->hole_8_plus_minus === -1 )

                                class="bogey"

                            @elseif($round_result->hole_8_plus_minus === -2 )

                                class="double-bogey"
                                
                            @endif                                    

                        @endif                        
                    >
                            {{ $round->hole_8_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        
                        @if($round->yards === 'red')

                            @if($round_result->hole_9_red_plus_minus >= 2 )

                                class="eagle"

                            @elseif($round_result->hole_9_red_plus_minus = 1 )

                                class="birdie"

                            @elseif($round_result->hole_9_red_plus_minus = 0 )

                                class="par"
                                
                            @elseif($round_result->hole_9_red_plus_minus = -1 )

                                class="bogey"
                                
                            @elseif($round_result->hole_9_red_plus_minus <= -2 )

                                class="double-bogey"                                   
                                
                            @endif                                    

                        @else

                            @if($round_result->hole_9_plus_minus === 2 )

                                class="eagle"

                            @elseif($round_result->hole_9_plus_minus === 1 )

                                class="birdie"

                            @elseif($round_result->hole_9_plus_minus === 0 )

                                class="par"

                            @elseif($round_result->hole_9_plus_minus === -1 )

                                class="bogey"

                            @elseif($round_result->hole_9_plus_minus === -2 )

                                class="double-bogey"
                                
                            @endif                                    

                        @endif                        
                    >
                            {{ $round->hole_9_score }}                                
                        </span>
                    </div>                     
                
                    <div class="col total-cell">
                        Total
                    </div>   

                </div>
                <!--/.row -->            

            
            <h3>In</h3>

            <div class="row round-row round-header-hole">
                
                <div class="col">
                    <h4>Hole</h4>
                </div>                

                <div class="col">
                    10
                </div>
            
                <div class="col">
                    11
                </div>
            
                <div class="col">
                    12
                </div>
            
                <div class="col">
                    13
                </div>
            
                <div class="col">
                    14
                </div>
            
                <div class="col">
                    15
                </div>
            
                <div class="col">
                    16
                </div>
            
                <div class="col">
                    17
                </div>
            
                <div class="col">
                    18
                </div>

                <div class="col total-cell">
                    Total
                </div>                   
            
            </div>
            <!--/.row -->

            <div class="row round-row round-header-par">

                <div class="col">
                    <h4>Par</h4>
                </div>                
            
                <div class="col">
                    @if($round->yards === 'red') {{ $course->hole_10_ladies_par }} @else {{ $course->hole_10_par }} @endif
                </div>
            
                <div class="col">
                    @if($round->yards === 'red') {{ $course->hole_11_ladies_par }} @else {{ $course->hole_11_par }} @endif
                </div>
            
                <div class="col">
                    @if($round->yards === 'red') {{ $course->hole_12_ladies_par }} @else {{ $course->hole_12_par }} @endif
                </div>
            
                <div class="col">
                    @if($round->yards === 'red') {{ $course->hole_13_ladies_par }} @else {{ $course->hole_13_par }} @endif
                </div>
            
                <div class="col">
                    @if($round->yards === 'red') {{ $course->hole_14_ladies_par }} @else {{ $course->hole_14_par }} @endif
                </div>
            
                <div class="col">
                    @if($round->yards === 'red') {{ $course->hole_15_ladies_par }} @else {{ $course->hole_15_par }} @endif
                </div>
            
                <div class="col">
                    @if($round->yards === 'red') {{ $course->hole_16_ladies_par }} @else {{ $course->hole_16_par }} @endif
                </div>
            
                <div class="col">
                    @if($round->yards === 'red') {{ $course->hole_17_ladies_par }} @else {{ $course->hole_17_par }} @endif
                </div>
            
                <div class="col">
                    @if($round->yards === 'red') {{ $course->hole_18_ladies_par }} @else {{ $course->hole_18_par }} @endif
                </div>
            
                <div class="col total-cell">
                    Total
                </div>                   
            
            </div>
            <!--/.row -->

            <div class="row round-row round-row-score">
            
                <div class="col">
                    <h4>Score</h4>
                </div>
            
                <div class="col">
                    <span>
                        {{ $round->hole_10_score }}                         
                    </span>
                </div>
            
                <div class="col">
                    <span>
                        {{ $round->hole_11_score }}                             
                    </span>
                </div>
            
                <div class="col">
                    <span>
                        {{ $round->hole_12_score }}                             
                    </span>
                </div>
            
                <div class="col">
                    <span>
                        {{ $round->hole_13_score }}                             
                    </span>
                </div>
            
                <div class="col">
                    <span>
                        {{ $round->hole_14_score }}                             
                    </span>
                </div>
            
                <div class="col">
                    <span>
                        {{ $round->hole_15_score }}                             
                    </span>
                </div>
            
                <div class="col">
                    <span>
                        {{ $round->hole_16_score }}                             
                    </span>
                </div>
            
                <div class="col">
                    <span>
                        {{ $round->hole_17_score }}                             
                    </span>
                </div>
            
                <div class="col">
                    <span>
                        {{ $round->hole_18_score }}                             
                    </span>
                </div>

                <div class="col total-cell">
                    Total
                </div>                   
            
            </div>
            <!--/.row -->





                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />



                        <table class="table">
                            <tr>
                                <th>Par</th>
                                <th>Score</th>
                                <th>+/-</th>
                            </tr>                          

                            <tr>
                                <td>{{ $round_result->total_par }}</td>
                                <td>{{ $round_result->total_score }}</td>
                                <td>                                
                                    @if($round_result->plus_minus > 0)
                                        +{{ $round_result->plus_minus }}
                                    @else
                                        {{ $round_result->plus_minus }}
                                    @endif                                                                                                                        
                                </td>
                            </tr> 
                        </table>


                <h2>Round Stats</h2>


                <div class="row text-center">
                
                    <div class="col">
                        <h4>{{ number_format($round_result->fir_percentage, 2) }}%</h4>
                        <p>Fairways in regulation</p>                    
                    </div>

                    <div class="col">
                        <h4>{{ number_format($round_result->gir_percentage, 2) }}%</h4>
                        <p>Greens in regulation</p>                    
                    </div> 

                    <div class="col">
                        <h4>{{ number_format($round_result->putts_per_hole, 2) }}</h4>
                        <p>Putts per hole</p>                    
                    </div> 

                    <div class="col">
                        <h4>{{ number_format($round_result->scrambling, 2) }}%</h4>
                        <p>Scrambling</p>                    
                    </div>                                                              

                </div>
                <!--/.row -->

                <h2>Breakdown</h2>

                        <table class="table">
                        
                        <tr>
                            <th>Hole</th>
                            <th>Par</th>
                            <th>Stroke Index</th>
                            <th>Yards</th>
                            <th>Score</th>
                            <th>FIR</th>
                            <th>GIR</th>
                            <th>Putts</th>
                            <th>Drops</th>
                        </tr>
                    
                        
                        <tr>
                            <td>1</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_1_ladies_par }}

                            @else

                                {{ $course->hole_1_par }} 

                            @endif                             
                            </td>
                            <td>                            
                            @if ($round->yards === 'red')

                            {{$course->hole_1_ladies_stroke_index}}

                            @else

                            {{$course->hole_1_stroke_index}}  

                            @endif                                                         
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_1_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_1_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_1_reds }}  

                            @endif
                            </td>
                            <td>{{$round->hole_1_score}}</td>
                            <td>{{$round->hole_1_fir}}</td>
                            <td>{{$round->hole_1_gir}}</td>
                            <td>{{$round->hole_1_putts}}</td>
                            <td>{{$round->hole_1_drops}}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_2_ladies_par }}

                            @else

                                {{ $course->hole_2_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_2_ladies_stroke_index}}

                            @else

                            {{$course->hole_2_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_2_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_2_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_2_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_2_score}}</td>
                            <td>{{$round->hole_2_fir}}</td>
                            <td>{{$round->hole_2_gir}}</td>
                            <td>{{$round->hole_2_putts}}</td>
                            <td>{{$round->hole_2_drops}}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_3_ladies_par }}

                            @else

                                {{ $course->hole_3_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_3_ladies_stroke_index}}

                            @else

                            {{$course->hole_3_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_3_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_3_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_3_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_3_score}}</td>
                            <td>{{$round->hole_3_fir}}</td>
                            <td>{{$round->hole_3_gir}}</td>
                            <td>{{$round->hole_3_putts}}</td>
                            <td>{{$round->hole_3_drops}}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_4_ladies_par }}

                            @else

                                {{ $course->hole_4_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_4_ladies_stroke_index}}

                            @else

                            {{$course->hole_4_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_4_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_4_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_4_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_4_score}}</td>
                            <td>{{$round->hole_4_fir}}</td>
                            <td>{{$round->hole_4_gir}}</td>
                            <td>{{$round->hole_4_putts}}</td>
                            <td>{{$round->hole_4_drops}}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_5_ladies_par }}

                            @else

                                {{ $course->hole_5_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_5_ladies_stroke_index}}

                            @else

                            {{$course->hole_5_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_5_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_5_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_5_reds }}  

                            @endif                            
                            <td>{{$round->hole_5_score}}</td>
                            <td>{{$round->hole_5_fir}}</td>
                            <td>{{$round->hole_5_gir}}</td>
                            <td>{{$round->hole_5_putts}}</td>
                            <td>{{$round->hole_5_drops}}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_6_ladies_par }}

                            @else

                                {{ $course->hole_6_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_6_ladies_stroke_index}}

                            @else

                            {{$course->hole_6_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_6_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_6_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_6_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_6_score}}</td>
                            <td>{{$round->hole_6_fir}}</td>
                            <td>{{$round->hole_6_gir}}</td>
                            <td>{{$round->hole_6_putts}}</td>
                            <td>{{$round->hole_6_drops}}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_7_ladies_par }}

                            @else

                                {{ $course->hole_7_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_7_ladies_stroke_index}}

                            @else

                            {{$course->hole_7_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_7_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_7_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_7_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_7_score}}</td>
                            <td>{{$round->hole_7_fir}}</td>
                            <td>{{$round->hole_7_gir}}</td>
                            <td>{{$round->hole_7_putts}}</td>
                            <td>{{$round->hole_7_drops}}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_8_ladies_par }}

                            @else

                                {{ $course->hole_8_par }} 

                            @endif                               
                            </td>
                            <td>
                                @if ($round->yards === 'red')

                                {{$course->hole_8_ladies_stroke_index}}

                                @else

                                {{$course->hole_8_stroke_index}}  

                                @endif                                 
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_8_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_8_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_8_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_8_score}}</td>
                            <td>{{$round->hole_8_fir}}</td>
                            <td>{{$round->hole_8_gir}}</td>
                            <td>{{$round->hole_8_putts}}</td>
                            <td>{{$round->hole_8_drops}}</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_9_ladies_par }}

                            @else

                                {{ $course->hole_9_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_9_ladies_stroke_index}}

                            @else

                            {{$course->hole_9_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_9_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_9_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_9_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_9_score}}</td>
                            <td>{{$round->hole_9_fir}}</td>
                            <td>{{$round->hole_9_gir}}</td>
                            <td>{{$round->hole_9_putts}}</td>
                            <td>{{$round->hole_9_drops}}</td>
                        </tr> 


                        <tr>
                            <td>10</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_10_ladies_par }}

                            @else

                                {{ $course->hole_10_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_10_ladies_stroke_index}}

                            @else

                            {{$course->hole_10_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_10_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_10_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_10_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_10_score}}</td>
                            <td>{{$round->hole_10_fir}}</td>
                            <td>{{$round->hole_10_gir}}</td>
                            <td>{{$round->hole_10_putts}}</td>
                            <td>{{$round->hole_10_drops}}</td>
                        </tr>  

                        <tr>
                            <td>11</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_11_ladies_par }}

                            @else

                                {{ $course->hole_11_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_11_ladies_stroke_index}}

                            @else

                            {{$course->hole_11_stroke_index}}  

                            @endif 
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_11_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_11_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_11_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_11_score}}</td>
                            <td>{{$round->hole_11_fir}}</td>
                            <td>{{$round->hole_11_gir}}</td>
                            <td>{{$round->hole_11_putts}}</td>
                            <td>{{$round->hole_11_drops}}</td>
                        </tr>  

                        <tr>
                            <td>12</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_12_ladies_par }}

                            @else

                                {{ $course->hole_12_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_12_ladies_stroke_index}}

                            @else

                            {{$course->hole_12_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_12_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_12_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_12_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_12_score}}</td>
                            <td>{{$round->hole_12_fir}}</td>
                            <td>{{$round->hole_12_gir}}</td>
                            <td>{{$round->hole_12_putts}}</td>
                            <td>{{$round->hole_12_drops}}</td>
                        </tr>  

                        <tr>
                            <td>13</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_13_ladies_par }}

                            @else

                                {{ $course->hole_13_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_13_ladies_stroke_index}}

                            @else

                            {{$course->hole_13_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_13_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_13_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_13_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_13_score}}</td>
                            <td>{{$round->hole_13_fir}}</td>
                            <td>{{$round->hole_13_gir}}</td>
                            <td>{{$round->hole_13_putts}}</td>
                            <td>{{$round->hole_13_drops}}</td>
                        </tr>  

                        <tr>
                            <td>14</td>
                            <td>                            
                            @if($round->yards === 'red')

                                {{ $course->hole_14_ladies_par }}

                            @else

                                {{ $course->hole_14_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_14_ladies_stroke_index}}

                            @else

                            {{$course->hole_14_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_14_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_14_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_14_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_14_score}}</td>
                            <td>{{$round->hole_14_fir}}</td>
                            <td>{{$round->hole_14_gir}}</td>
                            <td>{{$round->hole_14_putts}}</td>
                            <td>{{$round->hole_14_drops}}</td>
                        </tr>  

                        <tr>
                            <td>15</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_15_ladies_par }}

                            @else

                                {{ $course->hole_15_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_15_ladies_stroke_index}}

                            @else

                            {{$course->hole_15_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_15_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_15_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_15_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_15_score}}</td>
                            <td>{{$round->hole_15_fir}}</td>
                            <td>{{$round->hole_15_gir}}</td>
                            <td>{{$round->hole_15_putts}}</td>
                            <td>{{$round->hole_15_drops}}</td>
                        </tr>  

                        <tr>
                            <td>16</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_16_ladies_par }}

                            @else

                                {{ $course->hole_16_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_16_ladies_stroke_index}}

                            @else

                            {{$course->hole_16_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_16_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_16_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_16_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_16_score}}</td>
                            <td>{{$round->hole_16_fir}}</td>
                            <td>{{$round->hole_16_gir}}</td>
                            <td>{{$round->hole_16_putts}}</td>
                            <td>{{$round->hole_16_drops}}</td>
                        </tr>  

                        <tr>
                            <td>17</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_17_ladies_par }}

                            @else

                                {{ $course->hole_17_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_17_ladies_stroke_index}}

                            @else

                            {{$course->hole_17_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_17_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_17_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_17_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_17_score}}</td>
                            <td>{{$round->hole_17_fir}}</td>
                            <td>{{$round->hole_17_gir}}</td>
                            <td>{{$round->hole_17_putts}}</td>
                            <td>{{$round->hole_17_drops}}</td>
                        </tr>  

                        <tr>
                            <td>18</td>
                            <td>
                            @if($round->yards === 'red')

                                {{ $course->hole_18_ladies_par }}

                            @else

                                {{ $course->hole_18_par }} 

                            @endif                               
                            </td>
                            <td>
                            @if ($round->yards === 'red')

                            {{$course->hole_18_ladies_stroke_index}}

                            @else

                            {{$course->hole_18_stroke_index}}  

                            @endif                             
                            </td>
                            <td>
                            @if ($round->yards === 'white')

                            {{ $course->hole_18_whites }}

                            @elseif ($round->yards === 'yellow')

                            {{ $course->hole_18_yellows }}        

                            @elseif ($round->yards === 'red')

                            {{ $course->hole_18_reds }}  

                            @endif                            
                            </td>
                            <td>{{$round->hole_18_score}}</td>
                            <td>{{$round->hole_18_fir}}</td>
                            <td>{{$round->hole_18_gir}}</td>
                            <td>{{$round->hole_18_putts}}</td>
                            <td>{{$round->hole_18_drops}}</td>
                        </tr>   

                        <tr>
                            <td>Totals</td>
                            <td>{{$course_totals->total_par}}</td>
                            <td>&nbsp</td>
                            <td>
                            @if ($round->yards === 'white')

                            {{$course_totals->total_whites}}

                            @elseif ($round->yards === 'yellow')

                            {{$course_totals->total_yellows}}        

                            @elseif ($round->yards === 'red')

                            {{$course_totals->total_reds}}  

                            @endif                            
                            
                            
                            
                            </td>
                            <td>{{$round_result->total_score}}</td>
                            <td>{{ number_format($round_result->fir_percentage, 2) }}%</td>
                            <td>{{ number_format($round_result->gir_percentage, 2) }}%</td>
                            <td>{{$round_result->total_putts}}</td>
                            <td>{{$round_result->total_drops}}</td>
                        </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                    </table>                        


            </div>
            <!--/.container -->
@endsection
