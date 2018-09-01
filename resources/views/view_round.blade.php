@extends('layouts.app')

@section('title', 'View Round')

@section('page-specific-js')

    <script src="{{ asset('js/charts/chartist.min.js') }}" defer></script>
    <script src="{{ asset('js/charts/view_round_charts.js') }}" defer></script>

    <script>    
        var round_firs = {!! json_encode($round->fir_percentage) !!};
        var round_firs_leftover = {!! json_encode(100 - $round->fir_percentage) !!};
        var round_girs = {!! json_encode($round->gir_percentage) !!};
        var round_girs_leftover = {!! json_encode(100 - $round->gir_percentage) !!};
        var round_scrambling = {!! json_encode($round->scrambling) !!};
        var round_scrambling_leftover = {!! json_encode(100 - $round->scrambling) !!};                                
    </script> 

@endsection

@section('content')

    <div class="container view-round">

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
   

        <section class="round-section scorecard">

            <h2 class="title"><span>Scorecard</span></h2>

            <br />

            <div class="row round-row round-row-score round-key">
                    
                    <div class="col col-3 text-left">

                        <span class="tee-box @if($round->yards === 'white')white @elseif ($round->yards === 'yellow')yellow @else red @endif"></span>
                        {{ ucfirst(trans($round->yards)) }}&nbsp;Tees

                    </div>
                
                    <div class="col col-auto ml-auto">

                        <span class="eagle"></span> Eagle

                    </div>
                
                    <div class="col col-auto">

                        <span class="birdie"></span> Birdie

                    </div>
                
                    <div class="col col-auto">

                        <span class="bogey"></span> Bogey

                    </div>
                
                    <div class="col col-auto">

                        <span class="double-bogey"></span> Double Bogey +

                    </div>
                                    

            </div>
            <!--/.row -->  
            <br />
 

        @if($round->nine === 'first-nine' || $round->nine === 'first-nine-second-nine' || $round->nine === 'first-nine-third-nine')

            @if($course->holes === 27)
                <h4>{{ $course->first_nine_name }}</h4>
            @elseif($course->holes === 18)
                <h4>Front Nine</h4>
            @endif

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
                         
                    </div>                    
                                                                                                                                                                                                       
                
            </div>
            <!--/.row -->

            <div class="row round-row round-header-par">
                
                
                    <div class="col">
                        <h4>Par</h4>
                    </div>

                    <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_1_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_1_yellow_par }}

                        @else

                            {{ $course->hole_1_red_par }}

                        @endif

                    </div>

                    <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_2_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_2_yellow_par }}

                        @else

                            {{ $course->hole_2_red_par }}

                        @endif

                    </div>

                    <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_3_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_3_yellow_par }}

                        @else

                            {{ $course->hole_3_red_par }}

                        @endif

                    </div>

                    <div class="col">


                        @if($round->yards === 'white')
                         
                            {{ $course->hole_4_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_4_yellow_par }}

                        @else

                            {{ $course->hole_4_red_par }}

                        @endif


                    </div>

                    <div class="col">


                        @if($round->yards === 'white')
                         
                            {{ $course->hole_5_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_5_yellow_par }}

                        @else

                            {{ $course->hole_5_red_par }}

                        @endif


                    </div>

                    <div class="col">


                        @if($round->yards === 'white')
                         
                            {{ $course->hole_6_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_6_yellow_par }}

                        @else

                            {{ $course->hole_6_red_par }}

                        @endif


                    </div>

                    <div class="col">


                        @if($round->yards === 'white')
                         
                            {{ $course->hole_7_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_7_yellow_par }}

                        @else

                            {{ $course->hole_7_red_par }}

                        @endif


                    </div>

                    <div class="col">


                        @if($round->yards === 'white')
                         
                            {{ $course->hole_8_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_8_yellow_par }}

                        @else

                            {{ $course->hole_8_red_par }}

                        @endif


                    </div>                                                                                                                                                                

                    <div class="col">


                        @if($round->yards === 'white')
                            
                            {{ $course->hole_9_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_9_yellow_par }}

                        @else

                            {{ $course->hole_9_red_par }}

                        @endif

                        
                    </div>

                    <div class="col total-cell">

                        <strong>

                            {{ $round->first_nine_par }}

                        </strong>

                    </div>                      

            </div>
            <!--/.row -->    
            
            <div class="row round-row round-row-score">
            
                    <div class="col">
                        <h4>Out</h4>
                    </div>
                
                    <div class="col">
                        <span
                        

                                @if($round->hole_1_plus_minus > 1 )

                                    class="eagle"

                                @elseif($round->hole_1_plus_minus == 1 )

                                    class="birdie"

                                @elseif($round->hole_1_plus_minus == 0 )

                                    class="par"

                                @elseif($round->hole_1_plus_minus == -1 )

                                    class="bogey"

                                @elseif($round->hole_1_plus_minus < -1 )

                                    class="double-bogey"
                                    
                                @endif                                    
                     
                        >
                            {{ $round->hole_1_score }}                             
                        </span>
                    </div>
                
                    <div class="col">
                        <span
                        

                                @if($round->hole_2_plus_minus > 1 )

                                    class="eagle"

                                @elseif($round->hole_2_plus_minus == 1 )

                                    class="birdie"

                                @elseif($round->hole_2_plus_minus == 0 )

                                    class="par"

                                @elseif($round->hole_2_plus_minus == -1 )

                                    class="bogey"

                                @elseif($round->hole_2_plus_minus < -1 )

                                    class="double-bogey"
                                    
                                @endif                                    
                       
                        >
                            {{ $round->hole_2_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span                        

                            @if($round->hole_3_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_3_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_3_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_3_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_3_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                      
                    >
                            {{ $round->hole_3_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span                        

                            @if($round->hole_4_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_4_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_4_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_4_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_4_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    

                      
                    >
                            {{ $round->hole_4_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        

                            @if($round->hole_5_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_5_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_5_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_5_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_5_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                     
                    >
                            {{ $round->hole_5_score }}                                
                        </span>
                    </div>

                    <div class="col">

                    <span
                        

                            @if($round->hole_6_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_6_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_6_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_6_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_6_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                       
                    >
                            {{ $round->hole_6_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span                        

                            @if($round->hole_7_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_7_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_7_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_7_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_7_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    

                      
                    >
                            {{ $round->hole_7_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        

                            @if($round->hole_8_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_8_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_8_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_8_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_8_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                      
                    >
                            {{ $round->hole_8_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        

                            @if($round->hole_9_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_9_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_9_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_9_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_9_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                     
                    >
                            {{ $round->hole_9_score }}                                
                        </span>
                    </div>                     
                
                    <div class="col total-cell">

                        <strong>

                            {{ $round->first_nine_score }}

                        </strong>

                    </div>   

            </div>
            <!--/.row -->            
            
            <br />
            <br />

        @endif

        @if($round->nine === 'second-nine' || $round->nine === 'first-nine-second-nine' || $round->nine === 'second-nine-third-nine')

            @if($course->holes === 27)
                <h4>{{ $course->second_nine_name }}</h4>
            @elseif($course->holes === 18)
                <h4>Back Nine</h4>
            @endif

            <div class="row round-row round-header-hole">
                
                <div class="col">
                    <h4>Hole</h4>
                </div>                

                <div class="col">
                @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                    1
                @else
                    10
                @endif
                    
                </div>
            
                <div class="col">
                @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                    2
                @else
                    11
                @endif
                </div>
            
                <div class="col">
                @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                    3
                @else
                    12
                @endif
                </div>
            
                <div class="col">
                @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                    4
                @else
                    13
                @endif
                </div>
            
                <div class="col">
                @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                    5
                @else
                    14
                @endif
                </div>
            
                <div class="col">
                @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                    6
                @else
                    15
                @endif
                </div>
            
                <div class="col">
                @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                    7
                @else
                    16
                @endif
                </div>
            
                <div class="col">
                @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                    8
                @else
                    17
                @endif
                </div>
            
                <div class="col">
                @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                    9
                @else
                    18
                @endif
                </div>

                <div class="col total-cell">
                    
                </div>                   
            
            </div>
            <!--/.row -->

            <div class="row round-row round-header-par">

                <div class="col">
                    <h4>Par</h4>
                </div>                
            
                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_10_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_10_yellow_par }}

                        @else

                            {{ $course->hole_10_red_par }}

                        @endif

                </div>
            
                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_11_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_11_yellow_par }}

                        @else

                            {{ $course->hole_11_red_par }}

                        @endif

                </div>
            
                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_12_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_12_yellow_par }}

                        @else

                            {{ $course->hole_12_red_par }}

                        @endif

                </div>
            
                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_13_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_13_yellow_par }}

                        @else

                            {{ $course->hole_13_red_par }}

                        @endif

                </div>
            
                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_14_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_14_yellow_par }}

                        @else

                            {{ $course->hole_14_red_par }}

                        @endif

                </div>
            
                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_15_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_15_yellow_par }}

                        @else

                            {{ $course->hole_15_red_par }}

                        @endif

                </div>
            
                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_16_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_16_yellow_par }}

                        @else

                            {{ $course->hole_16_red_par }}

                        @endif

                </div>
            
                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_17_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_17_yellow_par }}

                        @else

                            {{ $course->hole_17_red_par }}

                        @endif

                </div>
            
                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_18_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_18_yellow_par }}

                        @else

                            {{ $course->hole_18_red_par }}

                        @endif

                </div>
            
                <div class="col total-cell">

                    <strong>

                        {{ $round->second_nine_par}}
                       
                    </strong>

                </div>                   
            
            </div>
            <!--/.row -->

            <div class="row round-row round-row-score">
            
                    <div class="col">
                        <h4>In</h4>
                    </div>
                
                    <div class="col">
                        <span                        

                                @if($round->hole_10_plus_minus > 1 )

                                    class="eagle"

                                @elseif($round->hole_10_plus_minus == 1 )

                                    class="birdie"

                                @elseif($round->hole_10_plus_minus == 0 )

                                    class="par"

                                @elseif($round->hole_10_plus_minus == -1 )

                                    class="bogey"

                                @elseif($round->hole_10_plus_minus < -1 )

                                    class="double-bogey"
                                    
                                @endif                                    
                      
                        >
                            {{ $round->hole_10_score }}                             
                        </span>
                    </div>
                
                    <div class="col">
                        <span                        

                                @if($round->hole_11_plus_minus > 1 )

                                    class="eagle"

                                @elseif($round->hole_11_plus_minus == 1 )

                                    class="birdie"

                                @elseif($round->hole_11_plus_minus == 0 )

                                    class="par"

                                @elseif($round->hole_11_plus_minus == -1 )

                                    class="bogey"

                                @elseif($round->hole_11_plus_minus < -1 )

                                    class="double-bogey"
                                    
                                @endif                                    
                    
                        >
                            {{ $round->hole_11_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span                        

                            @if($round->hole_12_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_12_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_12_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_12_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_12_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                      
                    >
                            {{ $round->hole_12_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span                        

                            @if($round->hole_13_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_13_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_13_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_13_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_13_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                      
                    >
                            {{ $round->hole_13_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span

                            @if($round->hole_14_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_14_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_14_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_14_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_14_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                    
                    >
                            {{ $round->hole_14_score }}                                
                        </span>
                    </div>

                    <div class="col">

                    <span                       

                            @if($round->hole_15_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_15_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_15_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_15_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_15_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                     
                    >
                            {{ $round->hole_15_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        
                            @if($round->hole_16_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_16_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_16_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_16_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_16_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                     
                    >
                            {{ $round->hole_16_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        

                            @if($round->hole_17_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_17_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_17_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_17_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_17_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                      
                    >
                            {{ $round->hole_17_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        

                            @if($round->hole_18_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_18_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_18_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_18_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_18_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                       
                    >
                            {{ $round->hole_18_score }}                                
                        </span>
                    </div>                     
                
                    <div class="col total-cell">

                        <strong>
                            
                            {{ $round->second_nine_score }}

                        </strong>

                    </div>   

            </div>
            <!--/.row --> 

            <br />
            <br />


        @endif

        @if($round->nine === 'third-nine' || $round->nine === 'first-nine-third-nine' || $round->nine === 'second-nine-third-nine')

            @if($course->holes === 27)
                <h4>{{ $course->second_nine_name }}</h4>
            @endif

            <div class="row round-row round-header-hole">
                
                <div class="col">
                    <h4>Hole</h4>
                </div>                

                <div class="col">
                @if($round->nine === 'third-nine')
                    1
                @else
                    10
                @endif
                </div>

                <div class="col">
                @if($round->nine === 'second-nine')
                    2
                @else
                    11
                @endif
                </div>

                <div class="col">
                @if($round->nine === 'second-nine')
                    3
                @else
                    12
                @endif
                </div>

                <div class="col">
                @if($round->nine === 'second-nine')
                    4
                @else
                    13
                @endif
                </div>

                <div class="col">
                @if($round->nine === 'second-nine')
                    5
                @else
                    14
                @endif
                </div>

                <div class="col">
                @if($round->nine === 'second-nine')
                    6
                @else
                    15
                @endif
                </div>

                <div class="col">
                @if($round->nine === 'second-nine')
                    7
                @else
                    16
                @endif
                </div>

                <div class="col">
                @if($round->nine === 'second-nine')
                    8
                @else
                    17
                @endif
                </div>

                <div class="col">
                @if($round->nine === 'second-nine')
                    9
                @else
                    18
                @endif
                </div>

                <div class="col total-cell">
                    
                </div>                   

            </div>
            <!--/.row -->

            <div class="row round-row round-header-par">

                <div class="col">
                    <h4>Par</h4>
                </div>                

                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_19_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_19_yellow_par }}

                        @else

                            {{ $course->hole_19_red_par }}

                        @endif

                </div>

                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_20_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_20_yellow_par }}

                        @else

                            {{ $course->hole_20_red_par }}

                        @endif

                </div>

                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_21_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_21_yellow_par }}

                        @else

                            {{ $course->hole_21_red_par }}

                        @endif

                </div>

                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_22_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_22_yellow_par }}

                        @else

                            {{ $course->hole_22_red_par }}

                     @endif

                </div>

                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_23_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_23_yellow_par }}

                        @else

                            {{ $course->hole_23_red_par }}

                     @endif

                </div>

                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_24_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_24_yellow_par }}

                        @else

                            {{ $course->hole_24_red_par }}

                        @endif

                </div>

                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_25_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_25_yellow_par }}

                        @else

                            {{ $course->hole_25_red_par }}

                        @endif

                </div>

                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_26_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_26_yellow_par }}

                        @else

                            {{ $course->hole_26_red_par }}

                        @endif

                </div>

                <div class="col">

                        @if($round->yards === 'white')
                         
                            {{ $course->hole_27_white_par }}

                        @elseif($round->yards === 'yellow')

                            {{ $course->hole_27_yellow_par }}

                        @else

                            {{ $course->hole_27_red_par }}

                        @endif

                </div>

                <div class="col total-cell">

                    <strong>

                        {{ $round->third_nine_par }}
                    
                    </strong>

                </div>                   

            </div>
            <!--/.row -->

            <div class="row round-row round-row-score">

                    <div class="col">
                        <h4>In</h4>
                    </div>
                
                    <div class="col">
                        <span                        

                                @if($round->hole_10_plus_minus > 1 )

                                    class="eagle"

                                @elseif($round->hole_10_plus_minus == 1 )

                                    class="birdie"

                                @elseif($round->hole_10_plus_minus == 0 )

                                    class="par"

                                @elseif($round->hole_10_plus_minus == -1 )

                                    class="bogey"

                                @elseif($round->hole_10_plus_minus < -1 )

                                    class="double-bogey"
                                    
                                @endif                                    
                    
                        >
                            {{ $round->hole_10_score }}                             
                        </span>
                    </div>
                
                    <div class="col">
                        <span                        

                                @if($round->hole_11_plus_minus > 1 )

                                    class="eagle"

                                @elseif($round->hole_11_plus_minus == 1 )

                                    class="birdie"

                                @elseif($round->hole_11_plus_minus == 0 )

                                    class="par"

                                @elseif($round->hole_11_plus_minus == -1 )

                                    class="bogey"

                                @elseif($round->hole_11_plus_minus < -1 )

                                    class="double-bogey"
                                    
                                @endif                                    
                    
                        >
                            {{ $round->hole_11_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span                        

                            @if($round->hole_12_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_12_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_12_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_12_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_12_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                    
                    >
                            {{ $round->hole_12_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span                        

                            @if($round->hole_13_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_13_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_13_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_13_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_13_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                    
                    >
                            {{ $round->hole_13_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span

                            @if($round->hole_14_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_14_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_14_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_14_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_14_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                    
                    >
                            {{ $round->hole_14_score }}                                
                        </span>
                    </div>

                    <div class="col">

                    <span                       

                            @if($round->hole_15_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_15_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_15_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_15_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_15_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                    
                    >
                            {{ $round->hole_15_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        
                            @if($round->hole_16_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_16_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_16_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_16_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_16_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                    
                    >
                            {{ $round->hole_16_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        

                            @if($round->hole_17_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_17_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_17_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_17_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_17_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                    
                    >
                            {{ $round->hole_17_score }}                                
                        </span>
                    </div>
                
                    <div class="col">
                    <span
                        

                            @if($round->hole_18_plus_minus > 1 )

                                class="eagle"

                            @elseif($round->hole_18_plus_minus == 1 )

                                class="birdie"

                            @elseif($round->hole_18_plus_minus == 0 )

                                class="par"

                            @elseif($round->hole_18_plus_minus == -1 )

                                class="bogey"

                            @elseif($round->hole_18_plus_minus < -1 )

                                class="double-bogey"
                                
                            @endif                                    
                    
                    >
                            {{ $round->hole_18_score }}                                
                        </span>
                    </div>                     
                
                    <div class="col total-cell">

                        <strong>
                            
                            {{ $round->back_score }}

                        </strong>

                    </div>   

            </div>
            <!--/.row --> 

            <br />
            <br />

            @endif        

            <div class="row text-center">

                <div class="col">

                    <div class="row round-total-row no-gutters">

                        <div class="col round-total-label">
                            <h4>Course Par:</h4>
                        </div>

                        <div class="col round-total">
                            <span class="counter" data-to="{{ $round->total_par }}" data-speed="500"></span>
                        </div>                        

                    </div>
                    <!--/.row -->

                </div>  

                <div class="col">

                    <div class="row round-total-row no-gutters">

                        <div class="col round-total-label">
                            <h4>Score:</h4>
                        </div>

                        <div class="col round-total">
                            <span class="counter" data-to="{{ $round->total_score }}" data-speed="500"></span>
                        </div>                        

                    </div>
                    <!--/.row -->

                </div>    

                <div class="col">

                    <div class="row round-total-row no-gutters">

                        <div class="col round-total-label">
                            <h4>Score to par:</h4>
                        </div>

                        <div class="col round-total">
                            @if($round->plus_minus > 0)

                                <span>+</span>

                            @else


                            @endif                         
                            <span class="counter" data-to="{{ $round->plus_minus }}" data-speed="500">

                            </span>
                        </div>                        

                    </div>
                    <!--/.row -->

                </div>  

                <div class="col">

                    <div class="row round-total-row no-gutters">

                        <div class="col round-total-label">
                            <h4>Points:</h4>
                        </div>

                        <div class="col round-total">
                            <span>
                                Tbd 
                            </span>
                        </div>                        

                    </div>
                    <!--/.row -->

                </div>                  
                                                  

            </div>
            <!--/.row -->
                
        
        </section>
        <!--/.scorecard -->


        <section id="round-stats" class="round-section round-stats">

            <h2 class="title"><span>Round Stats</span></h2>

            <!--
            <div class="row text-center align-items-center">

                <div class="col">                    
                    <div class="stat-total" data-percent="{{ number_format($round->fir_percentage, 2) }}"></div>
                    <p>Fairways in regulation</p>                    
                </div>

                <div class="col">
                    <div class="stat-total" data-percent="{{ number_format($round->gir_percentage, 2) }}"></div>
                    <p>Greens in regulation</p>                    
                </div> 

                <div class="col">
                    <div class="stat-total" data-percent="{{ number_format($round->scrambling, 2) }}"></div>
                    <p>Scrambling</p>                    
                </div>                                                              

            </div>
            /.row -->


            <br />

            <div class="row text-center align-items-center">

                <div class="col">
                    <h3 class="percent-counter" data-to="{{ number_format($round->fir_percentage, 2) }}" data-speed="500"></h3>
                    <div class="ct-chart ct-minor-seventh" id="chart-round-fir"></div>
                    <p>Fairways in regulation</p>                    
                </div>

                <div class="col">
                    <h3 class="percent-counter" data-to="{{ number_format($round->gir_percentage, 2) }}" data-speed="500"></h3>
                    <div class="ct-chart ct-minor-seventh" id="chart-round-gir"></div>
                    <p>Greens in regulation</p>                    
                </div> 

                <div class="col">
                    <h3 class="percent-counter" data-to="{{ number_format($round->scrambling, 2) }}" data-speed="500"></h3>
                    <div class="ct-chart ct-minor-seventh" id="chart-round-scrambling"></div>
                    <p>Scrambling</p>                    
                </div>                                                              

            </div>
            <!--/.row -->           


            <br />

            <div class="row text-center">

                <div class="col">

                    <div class="row round-total-row no-gutters">

                        <div class="col round-total-label">
                            <h4>Total Putts:</h4>
                        </div>

                        <div class="col round-total">
                            <span class="counter" data-to="{{ $round->total_putts }}" data-speed="500"></span>
                        </div>                        

                    </div>
                    <!--/.row -->

                </div>   

                <div class="col">

                    <div class="row round-total-row no-gutters">

                        <div class="col round-total-label">
                            <h4>Putts per hole:</h4>
                        </div>

                        <div class="col round-total">
                            <span class="putt-counter" data-to="{{ $round->putts_per_hole }}" data-speed="500"></span>
                        </div>                        

                    </div>
                    <!--/.row -->

                </div>  
                
                <div class="col">

                    <div class="row round-total-row no-gutters">

                        <div class="col round-total-label">
                            <h4>Drops:</h4>
                        </div>

                        <div class="col round-total">
                            <span class="counter" data-to="{{ $round->total_drops }}" data-speed="500"></span>
                        </div>                        

                    </div>
                    <!--/.row -->

                </div>                   

            </div>
            <!--/.row -->                          

        </section>
        <!--/.round-stats-->

        <section class="round-section round-breakdown">

            <h2 class="title"><span>Hole by Hole Breakdown</span></h2>
            <br />

            <div class="row rr-row rr-head-row align-items-center">
            
                <div class="col rr-head">
                    <h5>Hole</h5>
                </div>

                <div class="col rr-head">
                    <h5>Par</h5>
                </div>

                <div class="col rr-head">
                    <h5>SI</h5>
                </div>                                

                <div class="col rr-head">
                    <h5>Yards</h5>
                </div>

                <div class="col rr-head">
                    <h5>Score</h5>
                </div> 

                <div class="col rr-head">
                    <h5>FIR</h5>
                </div> 

                <div class="col rr-head">
                    <h5>GIR</h5>
                </div> 

                <div class="col rr-head">
                    <h5>Putts</h5>
                </div> 

                <div class="col rr-head">
                    <h5>Drops</h5>
                </div>                                                                            
            
            </div>
            <!--/.row -->

            @if($round->nine === 'first-nine' || $round->nine === 'first-nine-second-nine' || $round->nine === 'first-nine-third-nine')

            <div class="row rr-row">

                <div class="col">
                    1
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_1_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_1_yellow_par }}

                    @else

                        {{ $course->hole_1_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_1_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_1_yellow_stroke_index }}

                    @else

                        {{ $course->hole_1_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_1_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_1_yellow }}

                    @else

                        {{ $course->hole_1_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_1_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_1_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_1_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_1_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_1_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_1_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_1_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                       
                </div>
                
                <div class="col">

                    @if($round->hole_1_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_1_putts}}
                </div>

                <div class="col">
                    {{$round->hole_1_drops}}
                </div>

            </div>
            <!--/.row -->  
            
            <div class="row rr-row">

                <div class="col">
                    2
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_2_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_2_yellow_par }}

                    @else

                        {{ $course->hole_2_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_2_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_2_yellow_stroke_index }}

                    @else

                        {{ $course->hole_2_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_2_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_2_yellow }}

                    @else

                        {{ $course->hole_2_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_2_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_2_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_2_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_2_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_2_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_2_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_2_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                       
                </div>
                
                <div class="col">

                    @if($round->hole_2_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_2_putts}}
                </div>

                <div class="col">
                    {{$round->hole_2_drops}}
                </div>

            </div>
            <!--/.row -->  
            
            <div class="row rr-row">

                <div class="col">
                    3
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_3_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_3_yellow_par }}

                    @else

                        {{ $course->hole_3_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_3_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_3_yellow_stroke_index }}

                    @else

                        {{ $course->hole_3_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_3_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_3_yellow }}

                    @else

                        {{ $course->hole_3_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_3_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_3_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_3_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_3_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_3_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_3_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_3_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                       
                </div>
                
                <div class="col">

                    @if($round->hole_3_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_3_putts}}
                </div>

                <div class="col">
                    {{$round->hole_3_drops}}
                </div>

            </div>
            <!--/.row -->        
            
            
            <div class="row rr-row">

                <div class="col">
                    4
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_4_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_4_yellow_par }}

                    @else

                        {{ $course->hole_4_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_4_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_4_yellow_stroke_index }}

                    @else

                        {{ $course->hole_4_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_4_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_4_yellow }}

                    @else

                        {{ $course->hole_4_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_4_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_4_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_4_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_4_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_4_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_4_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_4_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                       
                </div>
                
                <div class="col">

                    @if($round->hole_4_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_4_putts}}
                </div>

                <div class="col">
                    {{$round->hole_4_drops}}
                </div>

            </div>
            <!--/.row -->        
  

            <div class="row rr-row">

                <div class="col">
                    5
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_5_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_5_yellow_par }}

                    @else

                        {{ $course->hole_5_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_5_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_5_yellow_stroke_index }}

                    @else

                        {{ $course->hole_5_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                         
                        {{ $course->hole_5_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_5_yellow }}

                    @else

                        {{ $course->hole_5_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_5_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_5_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_5_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_5_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_5_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_5_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_5_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                       
                </div>
                
                <div class="col">

                    @if($round->hole_5_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_5_putts}}
                </div>

                <div class="col">
                    {{$round->hole_5_drops}}
                </div>

            </div>
            <!--/.row -->             

            <div class="row rr-row">

                <div class="col">
                    6
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_6_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_6_yellow_par }}

                    @else

                        {{ $course->hole_6_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_6_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_6_yellow_stroke_index }}

                    @else

                        {{ $course->hole_6_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_6_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_6_yellow }}

                    @else

                        {{ $course->hole_6_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_6_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_6_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_6_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_6_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_6_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_6_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_6_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_6_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_6_putts}}
                </div>

                <div class="col">
                    {{$round->hole_6_drops}}
                </div>

            </div>
            <!--/.row -->             

            <div class="row rr-row">

                <div class="col">
                    7
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_7_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_7_yellow_par }}

                    @else

                        {{ $course->hole_7_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_7_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_7_yellow_stroke_index }}

                    @else

                        {{ $course->hole_7_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_7_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_7_yellow }}

                    @else

                        {{ $course->hole_7_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_7_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_7_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_7_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_7_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_7_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_7_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_7_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_7_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_7_putts}}
                </div>

                <div class="col">
                    {{$round->hole_7_drops}}
                </div>

            </div>
            <!--/.row --> 

            <div class="row rr-row">

                <div class="col">
                    8
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_8_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_8_yellow_par }}

                    @else

                        {{ $course->hole_8_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_8_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_8_yellow_stroke_index }}

                    @else

                        {{ $course->hole_8_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_8_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_8_yellow }}

                    @else

                        {{ $course->hole_8_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_8_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_8_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_8_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_8_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_8_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_8_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_8_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_8_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_8_putts}}
                </div>

                <div class="col">
                    {{$round->hole_8_drops}}
                </div>

            </div>
            <!--/.row --> 

            <div class="row rr-row">

                <div class="col">
                    9
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_9_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_9_yellow_par }}

                    @else

                        {{ $course->hole_9_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_9_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_9_yellow_stroke_index }}

                    @else

                        {{ $course->hole_9_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_9_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_9_yellow }}

                    @else

                        {{ $course->hole_9_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_9_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_9_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_9_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_9_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_9_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_9_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_9_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_9_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_9_putts}}
                </div>

                <div class="col">
                    {{$round->hole_9_drops}}
                </div>

            </div>
            <!--/.row --> 

            @endif


            @if($round->nine === 'second-nine' || $round->nine === 'first-nine-second-nine' || $round->nine === 'second-nine-third-nine')            

            <div class="row rr-row">

                <div class="col">

                    @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                        1
                    @else
                        10
                    @endif
                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_10_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_10_yellow_par }}

                    @else

                        {{ $course->hole_10_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_10_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_10_yellow_stroke_index }}

                    @else

                        {{ $course->hole_10_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_10_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_10_yellow }}

                    @else

                        {{ $course->hole_10_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_10_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_10_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_10_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_10_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_10_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_10_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_10_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_10_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_10_putts}}
                </div>

                <div class="col">
                    {{$round->hole_10_drops}}
                </div>

            </div>
            <!--/.row --> 


            <div class="row rr-row">

                <div class="col">

                    @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                        2
                    @else
                        11
                    @endif
                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_11_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_11_yellow_par }}

                    @else

                        {{ $course->hole_11_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_11_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_11_yellow_stroke_index }}

                    @else

                        {{ $course->hole_11_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_11_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_11_yellow }}

                    @else

                        {{ $course->hole_11_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_11_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_11_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_11_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_11_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_11_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_11_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_11_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_11_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_11_putts}}
                </div>

                <div class="col">
                    {{$round->hole_11_drops}}
                </div>

            </div>
            <!--/.row -->
            
            
            <div class="row rr-row">

                <div class="col">

                    @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                        3
                    @else
                        12
                    @endif
                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_12_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_12_yellow_par }}

                    @else

                        {{ $course->hole_12_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_12_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_12_yellow_stroke_index }}

                    @else

                        {{ $course->hole_12_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_12_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_12_yellow }}

                    @else

                        {{ $course->hole_12_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_12_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_12_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_12_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_12_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_12_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_12_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_12_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_12_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_12_putts}}
                </div>

                <div class="col">
                    {{$round->hole_12_drops}}
                </div>

            </div>
            <!--/.row -->  
            
            
            <div class="row rr-row">

                <div class="col">

                    @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                        4
                    @else
                        13
                    @endif
                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_13_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_13_yellow_par }}

                    @else

                        {{ $course->hole_13_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_13_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_13_yellow_stroke_index }}

                    @else

                        {{ $course->hole_13_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_13_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_13_yellow }}

                    @else

                        {{ $course->hole_13_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_13_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_13_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_13_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_13_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_13_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_13_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_13_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_13_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_13_putts}}
                </div>

                <div class="col">
                    {{$round->hole_13_drops}}
                </div>

            </div>
            <!--/.row -->    
            
            
            <div class="row rr-row">

                <div class="col">

                    @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                        5
                    @else
                        14
                    @endif
                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_14_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_14_yellow_par }}

                    @else

                        {{ $course->hole_14_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_14_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_14_yellow_stroke_index }}

                    @else

                        {{ $course->hole_14_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_14_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_14_yellow }}

                    @else

                        {{ $course->hole_14_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_14_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_14_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_14_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_14_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_14_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_14_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_14_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_14_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_14_putts}}
                </div>

                <div class="col">
                    {{$round->hole_14_drops}}
                </div>

            </div>
            <!--/.row -->   
            

            <div class="row rr-row">

                <div class="col">

                    @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                        6
                    @else
                        15
                    @endif
                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_15_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_15_yellow_par }}

                    @else

                        {{ $course->hole_15_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_15_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_15_yellow_stroke_index }}

                    @else

                        {{ $course->hole_15_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_15_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_15_yellow }}

                    @else

                        {{ $course->hole_15_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_15_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_15_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_15_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_15_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_15_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_15_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_15_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_15_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_15_putts}}
                </div>

                <div class="col">
                    {{$round->hole_15_drops}}
                </div>

            </div>
            <!--/.row -->             


            <div class="row rr-row">

                <div class="col">

                    @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                        7
                    @else
                        16
                    @endif
                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_16_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_16_yellow_par }}

                    @else

                        {{ $course->hole_16_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_16_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_16_yellow_stroke_index }}

                    @else

                        {{ $course->hole_16_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_16_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_16_yellow }}

                    @else

                        {{ $course->hole_16_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_16_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_16_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_16_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_16_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_16_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_16_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_16_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_16_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_16_putts}}
                </div>

                <div class="col">
                    {{$round->hole_16_drops}}
                </div>

            </div>
            <!--/.row -->             


            <div class="row rr-row">

                <div class="col">

                    @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                        8
                    @else
                        17
                    @endif
                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_17_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_17_yellow_par }}

                    @else

                        {{ $course->hole_17_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_17_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_17_yellow_stroke_index }}

                    @else

                        {{ $course->hole_17_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_17_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_17_yellow }}

                    @else

                        {{ $course->hole_17_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_17_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_17_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_17_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_17_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_17_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_17_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_17_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_17_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_17_putts}}
                </div>

                <div class="col">
                    {{$round->hole_17_drops}}
                </div>

            </div>
            <!--/.row --> 


            <div class="row rr-row">

                <div class="col">

                    @if($round->nine === 'second-nine' || $round->nine === 'second-nine-third-nine')
                        9
                    @else
                        18
                    @endif
                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_18_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_18_yellow_par }}

                    @else

                        {{ $course->hole_18_red_par }}

                    @endif                            
                </div>

                <div class="col">                            
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_18_white_stroke_index }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_18_yellow_stroke_index }}

                    @else

                        {{ $course->hole_18_red_stroke_index }}

                    @endif                                                        
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_18_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_18_yellow }}

                    @else

                        {{ $course->hole_18_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_18_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_18_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_18_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_18_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_18_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_18_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_18_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_18_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_18_putts}}
                </div>

                <div class="col">
                    {{$round->hole_18_drops}}
                </div>

            </div>
            <!--/.row --> 


            @endif


            @if($round->nine === 'third-nine' || $round->nine === 'first-nine-third-nine' || $round->nine === 'second-nine-third-nine')            

            <div class="row rr-row">

                <div class="col">
                    @if($round->nine === 'third-nine')
                        1
                    @else
                        19
                    @endif
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_19_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_19_yellow_par }}

                    @else

                        {{ $course->hole_19_red_par }}

                    @endif                            
                </div>

                <div class="col">  
                    
                    @if($round->nine === 'third-nine')

                        -

                    @elseif($round->nine === 'first-nine-third-nine')

                        {{ $course->hole_19_white_stroke_index_back }}

                    @else

                        {{ $course->hole_19_white_stroke_index_front }}
                    
                    @endif
                                                       
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_19_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_19_yellow }}

                    @else

                        {{ $course->hole_19_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_19_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_19_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_19_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_19_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_19_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_19_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_19_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_19_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_19_putts}}
                </div>

                <div class="col">
                    {{$round->hole_19_drops}}
                </div>

            </div>
            <!--/.row --> 


            <div class="row rr-row">

                <div class="col">
                    @if($round->nine === 'third-nine')
                        2
                    @else
                        20
                    @endif
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_20_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_20_yellow_par }}

                    @else

                        {{ $course->hole_20_red_par }}

                    @endif                            
                </div>

                <div class="col">  
                    
                    @if($round->nine === 'third-nine')

                        -

                    @elseif($round->nine === 'first-nine-third-nine')

                        {{ $course->hole_20_white_stroke_index_back }}

                    @else

                        {{ $course->hole_20_white_stroke_index_front }}
                    
                    @endif
                                                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_20_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_20_yellow }}

                    @else

                        {{ $course->hole_20_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_20_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_20_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_20_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_20_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_20_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_20_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_20_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_20_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_20_putts}}
                </div>

                <div class="col">
                    {{$round->hole_20_drops}}
                </div>

            </div>
            <!--/.row --> 

            <div class="row rr-row">

                <div class="col">
                    @if($round->nine === 'third-nine')
                        3
                    @else
                        21
                    @endif
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_21_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_21_yellow_par }}

                    @else

                        {{ $course->hole_21_red_par }}

                    @endif                            
                </div>

                <div class="col">  
                    
                    @if($round->nine === 'third-nine')

                        -

                    @elseif($round->nine === 'first-nine-third-nine')

                        {{ $course->hole_21_white_stroke_index_back }}

                    @else

                        {{ $course->hole_21_white_stroke_index_front }}
                    
                    @endif
                                                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_21_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_21_yellow }}

                    @else

                        {{ $course->hole_21_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_21_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_21_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_21_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_21_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_21_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_21_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_21_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_21_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_21_putts}}
                </div>

                <div class="col">
                    {{$round->hole_21_drops}}
                </div>

            </div>
            <!--/.row -->             


            <div class="row rr-row">

                <div class="col">
                    @if($round->nine === 'third-nine')
                        4
                    @else
                        22
                    @endif
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_22_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_22_yellow_par }}

                    @else

                        {{ $course->hole_22_red_par }}

                    @endif                            
                </div>

                <div class="col">  
                    
                    @if($round->nine === 'third-nine')

                        -

                    @elseif($round->nine === 'first-nine-third-nine')

                        {{ $course->hole_22_white_stroke_index_back }}

                    @else

                        {{ $course->hole_22_white_stroke_index_front }}
                    
                    @endif
                                                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_22_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_22_yellow }}

                    @else

                        {{ $course->hole_22_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_22_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_22_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_22_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_22_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_22_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_22_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_22_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_22_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_22_putts}}
                </div>

                <div class="col">
                    {{$round->hole_22_drops}}
                </div>

            </div>
            <!--/.row --> 


            <div class="row rr-row">

                <div class="col">
                    @if($round->nine === 'third-nine')
                        5
                    @else
                        23
                    @endif
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_23_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_23_yellow_par }}

                    @else

                        {{ $course->hole_23_red_par }}

                    @endif                            
                </div>

                <div class="col">  
                    
                    @if($round->nine === 'third-nine')

                        -

                    @elseif($round->nine === 'first-nine-third-nine')

                        {{ $course->hole_23_white_stroke_index_back }}

                    @else

                        {{ $course->hole_23_white_stroke_index_front }}
                    
                    @endif
                                                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_23_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_23_yellow }}

                    @else

                        {{ $course->hole_23_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_23_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_23_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_23_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_23_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_23_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_23_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_23_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_23_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_23_putts}}
                </div>

                <div class="col">
                    {{$round->hole_23_drops}}
                </div>

            </div>
            <!--/.row --> 


            <div class="row rr-row">

                <div class="col">
                    @if($round->nine === 'third-nine')
                        6
                    @else
                        24
                    @endif
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_24_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_24_yellow_par }}

                    @else

                        {{ $course->hole_24_red_par }}

                    @endif                            
                </div>

                <div class="col">  
                    
                    @if($round->nine === 'third-nine')

                        -

                    @elseif($round->nine === 'first-nine-third-nine')

                        {{ $course->hole_24_white_stroke_index_back }}

                    @else

                        {{ $course->hole_24_white_stroke_index_front }}
                    
                    @endif
                                                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_24_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_24_yellow }}

                    @else

                        {{ $course->hole_24_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_24_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_24_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_24_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_24_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_24_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_24_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_24_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_24_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_24_putts}}
                </div>

                <div class="col">
                    {{$round->hole_24_drops}}
                </div>

            </div>
            <!--/.row --> 


            <div class="row rr-row">

                <div class="col">
                    @if($round->nine === 'third-nine')
                        7
                    @else
                        25
                    @endif
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_25_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_25_yellow_par }}

                    @else

                        {{ $course->hole_25_red_par }}

                    @endif                            
                </div>

                <div class="col">  
                    
                    @if($round->nine === 'third-nine')

                        -

                    @elseif($round->nine === 'first-nine-third-nine')

                        {{ $course->hole_25_white_stroke_index_back }}

                    @else

                        {{ $course->hole_25_white_stroke_index_front }}
                    
                    @endif
                                                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_25_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_25_yellow }}

                    @else

                        {{ $course->hole_25_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_25_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_25_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_25_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_25_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_25_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_25_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_25_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_25_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_25_putts}}
                </div>

                <div class="col">
                    {{$round->hole_25_drops}}
                </div>

            </div>
            <!--/.row --> 


            <div class="row rr-row">

                <div class="col">
                    @if($round->nine === 'third-nine')
                        8
                    @else
                        26
                    @endif
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_26_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_26_yellow_par }}

                    @else

                        {{ $course->hole_26_red_par }}

                    @endif                            
                </div>

                <div class="col">  
                    
                    @if($round->nine === 'third-nine')

                        -

                    @elseif($round->nine === 'first-nine-third-nine')

                        {{ $course->hole_26_white_stroke_index_back }}

                    @else

                        {{ $course->hole_26_white_stroke_index_front }}
                    
                    @endif
                                                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_26_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_26_yellow }}

                    @else

                        {{ $course->hole_26_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_26_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_26_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_26_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_26_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_26_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_26_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_26_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_26_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_26_putts}}
                </div>

                <div class="col">
                    {{$round->hole_26_drops}}
                </div>

            </div>
            <!--/.row --> 


            <div class="row rr-row">

                <div class="col">
                    @if($round->nine === 'third-nine')
                        9
                    @else
                        27
                    @endif
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_27_white_par }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_27_yellow_par }}

                    @else

                        {{ $course->hole_27_red_par }}

                    @endif                            
                </div>

                <div class="col">  
                    
                    @if($round->nine === 'third-nine')

                        -

                    @elseif($round->nine === 'first-nine-third-nine')

                        {{ $course->hole_27_white_stroke_index_back }}

                    @else

                        {{ $course->hole_27_white_stroke_index_front }}
                    
                    @endif
                                                    
                </div>

                <div class="col">
                    @if($round->yards === 'white')
                        
                        {{ $course->hole_27_white }}

                    @elseif($round->yards === 'yellow')

                        {{ $course->hole_27_yellow }}

                    @else

                        {{ $course->hole_27_red }}

                    @endif
                </div>

                <div class="col">
                    {{$round->hole_27_score}}
                </div>

                <div class="col">

                    @if($round->yards === 'white')

                        @if($round->hole_27_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_27_white_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @elseif($round->yards === 'yellow')

                        @if($round->hole_27_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_27_yellow_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @else

                        @if($round->hole_27_fir === 1)

                            <i class="fal fa-check"></i>

                        @elseif($course->hole_27_red_par < 4)

                            <i class="fal fa-minus"></i>

                        @else

                            <i class="fal fa-times"></i>

                        @endif

                    @endif
                                                                                    
                </div>

                <div class="col">

                    @if($round->hole_27_gir === 1)

                        <i class="fal fa-check"></i>

                    @else

                        <i class="fal fa-times"></i>

                    @endif
                            
                </div>

                <div class="col">
                    {{$round->hole_27_putts}}
                </div>

                <div class="col">
                    {{$round->hole_27_drops}}
                </div>

            </div>
            <!--/.row --> 

            @endif  
            
            <div class="row rr-row total-row">

                <div class="col">Totals</div>
                <div class="col"><strong>{{ $round->total_par }}</strong></div>
                <div class="col">n/a</div>
                <div class="col"><strong>{{ $round->round_yards }}</strong></div>
                <div class="col"><strong>{{ $round->total_score }}</strong></div>
                <div class="col"><strong>{{ number_format($round->fir_percentage, 2) }}%</strong></div>
                <div class="col"><strong>{{ number_format($round->gir_percentage, 2) }}%</strong></div>
                <div class="col"><strong>{{ $round->total_putts }}</strong></div>
                <div class="col"><strong>{{ $round->total_drops }}</strong></div>

            </div>
            <!--/.row -->            

<!--
                        <table class="table rr-table">
                        
                        <tr>
                            <th>Hole</th>
                            <th>Par</th>
                            <th>Stroke<br />Index</th>
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
                            @if($round->yards === 'white')
                         
                                {{ $course->hole_1_white_par }}

                            @elseif($round->yards === 'yellow')

                                {{ $course->hole_1_yellow_par }}

                            @else

                                {{ $course->hole_1_red_par }}

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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_1_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_1_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_1_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_1_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 
                                                                                                            
                            </td>
                            <td>

                                @if($round->hole_1_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif
                            
                            </td>
                            <td>{{$round->hole_1_putts}}</td>
                            <td>{{$round->hole_1_drops}}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>
                            @if($round->yards === 'white')
                         
                                {{ $course->hole_2_white_par }}

                            @elseif($round->yards === 'yellow')

                                {{ $course->hole_2_yellow_par }}

                            @else

                                {{ $course->hole_2_red_par }}

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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_2_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_2_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else
                            
                            @if($round->hole_2_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_2_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 
                                
                            @endif                                

                            </td>
                            <td>

                                @if($round->hole_2_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
                            <td>{{$round->hole_2_putts}}</td>
                            <td>{{$round->hole_2_drops}}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>
                            @if($round->yards === 'white')
                         
                                {{ $course->hole_3_white_par }}

                            @elseif($round->yards === 'yellow')

                                {{ $course->hole_3_yellow_par }}

                            @else

                                {{ $course->hole_3_red_par }}

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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_3_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_3_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_3_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_3_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_3_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
                            <td>{{$round->hole_3_putts}}</td>
                            <td>{{$round->hole_3_drops}}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>
                            @if($round->yards === 'white')
                         
                                {{ $course->hole_4_white_par }}

                            @elseif($round->yards === 'yellow')

                                {{ $course->hole_4_yellow_par }}

                            @else

                                {{ $course->hole_4_red_par }}

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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_4_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_4_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_4_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_4_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_4_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
                            <td>{{$round->hole_4_putts}}</td>
                            <td>{{$round->hole_4_drops}}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>
                            @if($round->yards === 'white')
                         
                                {{ $course->hole_5_white_par }}

                            @elseif($round->yards === 'yellow')

                                {{ $course->hole_5_yellow_par }}

                            @else

                                {{ $course->hole_5_red_par }}

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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_5_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_5_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_5_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_5_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_5_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
                            <td>{{$round->hole_5_putts}}</td>
                            <td>{{$round->hole_5_drops}}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>
                            @if($round->yards === 'white')
                         
                                {{ $course->hole_6_white_par }}

                            @elseif($round->yards === 'yellow')

                                {{ $course->hole_6_yellow_par }}

                            @else

                                {{ $course->hole_6_red_par }}

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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_6_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_6_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_6_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_6_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_6_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
                            <td>{{$round->hole_6_putts}}</td>
                            <td>{{$round->hole_6_drops}}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>
                            @if($round->yards === 'white')
                         
                                {{ $course->hole_7_white_par }}

                            @elseif($round->yards === 'yellow')

                                {{ $course->hole_7_yellow_par }}

                            @else

                                {{ $course->hole_7_red_par }}

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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_7_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_7_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_7_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_7_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_7_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
                            <td>{{$round->hole_7_putts}}</td>
                            <td>{{$round->hole_7_drops}}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>
                            @if($round->yards === 'white')
                         
                                {{ $course->hole_8_white_par }}

                            @elseif($round->yards === 'yellow')

                                {{ $course->hole_8_yellow_par }}

                            @else

                                {{ $course->hole_8_red_par }}

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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_8_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_8_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_8_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_8_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_8_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
                            <td>{{$round->hole_8_putts}}</td>
                            <td>{{$round->hole_8_drops}}</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>
                            @if($round->yards === 'white')
                         
                                {{ $course->hole_9_white_par }}

                            @elseif($round->yards === 'yellow')

                                {{ $course->hole_9_yellow_par }}

                            @else

                                {{ $course->hole_9_red_par }}

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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_9_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_9_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_9_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_9_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_9_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_10_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_10_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_10_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_10_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_10_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_11_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_11_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_11_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_11_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_11_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_12_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_12_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_12_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_12_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_12_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_13_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_13_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_13_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_13_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_13_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_14_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_14_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_14_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_14_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_14_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_15_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_15_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_15_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_15_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_15_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_16_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_16_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_16_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_16_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_16_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_17_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_17_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_17_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_17_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_17_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
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
                            <td>

                            @if($round->yards === 'red')        

                                @if($round->hole_18_fir === 1)

                                    <i class="fal fa-check"></i>

                                @elseif($course->hole_18_ladies_par < 4)

                                    <i class="fal fa-minus"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            @else

                                @if($round->hole_18_fir === 1)

                                <i class="fal fa-check"></i>

                                @elseif($course->hole_18_par < 4)

                                <i class="fal fa-minus"></i>

                                @else

                                <i class="fal fa-times"></i>

                                @endif 

                            @endif 

                            </td>
                            <td>

                                @if($round->hole_18_gir === 1)

                                    <i class="fal fa-check"></i>

                                @else

                                    <i class="fal fa-times"></i>

                                @endif

                            </td>
                            <td>{{$round->hole_18_putts}}</td>
                            <td>{{$round->hole_18_drops}}</td>
                        </tr>   

                        <tr class="total-row">
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
                            <td>{{$round->total_score}}</td>
                            <td>{{ number_format($round->fir_percentage, 2) }}%</td>
                            <td>{{ number_format($round->gir_percentage, 2) }}%</td>
                            <td>{{$round->total_putts}}</td>
                            <td>{{$round->total_drops}}</td>
                        </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                    </table>                        
-->
        </section>
        <!--/.round-breakdown -->


        </div>
        <!--/.container -->
@endsection
