@extends('layouts.app')

@section('title', 'Profile')

@section('page-specific-js')



    <script src="{{ asset('js/charts/chartist.min.js') }}" defer></script>
    <script src="{{ asset('js/charts/view_profile_charts.js') }}" defer></script>

    <script>    
        var career_firs = {!! json_encode($career_stats->fir_percentage) !!};
        var career_firs_leftover = {!! json_encode(100 - $career_stats->fir_percentage) !!};
        var career_girs = {!! json_encode($career_stats->gir_percentage) !!};
        var career_girs_leftover = {!! json_encode(100 - $career_stats->gir_percentage) !!};
        var career_scrambling = {!! json_encode($career_stats->scrambling) !!};
        var career_scrambling_leftover = {!! json_encode(100 - $career_stats->scrambling) !!};     

        var player_handicap = {!! json_encode($player_handicap) !!};
        var handicap_dates = {!! json_encode($handicap_dates) !!};

        var points = {!! json_encode($points) !!};
        var points_dates = {!! json_encode($points_dates) !!};      

    </script>



@endsection

@section('page-heading')

    <h1>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
    <h3>Playing off {{ Auth::user()->handicap }}</h3>

    <ul class="nav nav-tabs profile-tabs" id="profileTab" role="tablist">

        <li class="nav-item">
            <a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Recent Performance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="career-tab" data-toggle="tab" href="#career" role="tab" aria-controls="career" aria-selected="false">Career Statistics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="rounds-tab" data-toggle="tab" href="#rounds" role="tab" aria-controls="rounds" aria-selected="false">Rounds List</a>
        </li>

    </ul>

@endsection

@section('content')
    
               
<div class="tab-content profile-tab-content" id="profileTabContent">

    <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">       

        <p>Here we use data from your most recently recorded rounds(up to 10) to return useful information on how your game currently stands.</p>
        <br />

        <div class="row noMarg">

            <div class="col-md">

                <h4 class="text-center">Handicap Progression</h4>

                <div class="chart-handicap-holder"><div class="ct-chart ct-minor-seventh" id="chart-handicap"></div></div>

            </div>

            <div class="col-md">

                <h4 class="text-center">Stableford Points</h4>

                <div class="chart-points-holder"><div class="ct-chart ct-minor-seventh" id="chart-points"></div></div>   

            </div>

        </div>
        <!--/.row -->

        <br />
        <br />
        <br />
        <br />

        @if (count($rounds) > 0)

            <h4 class=text-center>Recent Rounds</h4>

                <table class="table rr-table">

                    <thead>

                        <tr>
                                        
                            <th>
                                <h5>Date</h5>
                            </th>
                                        
                            <th class="text-left">
                                <h5>Course</h5>
                            </th>
                                        
                            <th>
                                <h5>Par</h5>
                            </th>
                                        
                            <th>
                                <h5>Score</h5>
                            </th>
                                        
                            <th>
                                <h5>+/-</h5>
                            </th>
                                        
                            <th>
                                <h5>Points</h5>
                            </th>

                            <th>
                                <h5>Edit</h5>
                            </th>
                                        
                        </tr>
                        <!--/.row -->

                    </thead>

                        <tbody>

                            @foreach($rounds as $key => $round)

                                <tr>
                                    
                                    <td>
                                        <a href="{{action('RoundController@show', $round['id'])}}">{{ $round->round_date->format('d/m/Y') }}</a>
                                    </td>
                                        
                                    <td class="text-left">
                                        {{ $round->property_name }} - {{ $round->course_name }}
                                    </div>
                                        
                                    <td>
                                        {{ $round->total_par }}
                                    </td>
                                        
                                    <td>
                                        {{ $round->total_score }}
                                    </td>
                                        
                                    <td>
                                        @if($round->plus_minus > 0)
                                            +{{ $round->plus_minus }}
                                        @else
                                            {{ $round->plus_minus }}
                                        @endif 
                                    </td>
                                        
                                    <td>
                                        {{ $round->total_points }}
                                    </td>
                
                                    <td>
                                        <a href="{{action('RoundController@edit', $round['id'])}}" class="btn btn-sm btn-danger">Edit</a>
                                    </td>
                                        
                                </tr>
                                <!--/.row -->

                            @endforeach

                        </tbody>

                    </table>

        @else

            <div class="alert alert-info" role="alert">

                <h4>Add some rounds to get started</h4>

                <p>To begin recording your rounds, tracking your handicap and viewing stats on your game, <a href="{{ route('rounds.create') }}">{{ __('add a round') }}</a>.</p>

            </div>

        @endif                    
                            
    </div>
    <!--/#recent -->

    <div class="tab-pane" id="career" role="tabpanel" aria-labelledby="career-tab">

@if (count($stats_rounds) > 0)

@if($career_stats->stats_rounds_played > 0)

    <h4>Career Stats</h4>

    <div class="row text-center">

        <div class="col">
        
            <h4>Rounds Played</h4>
            {{ $career_stats->rounds_played }}
        
        </div>

        <div class="col">
        
            <h4>Holes Played</h4>
            {{ $career_stats->holes_played }}
        
        </div>  

        <div class="col">
        
            <h4>Fairways Hit</h4>
            {{ $career_stats->fairways_hit }} / {{ $career_stats->fairways_available }}
        
        </div>  

        <div class="col">
        
        <h4>Putts Per Hole</h4>
        {{ number_format($career_stats->putts_per_hole, 2) }}

    </div>                      

    </div>
    <!--/.row -->

    <br />
    <br />

    <div class="row text-center align-items-center">                     

        <div class="col">
            <h3 class="percent-counter" data-to="{{ number_format($career_stats->fir_percentage, 2) }}" data-speed="500"></h3>
            <div class="ct-chart ct-minor-seventh" id="chart-career-fir"></div>
            <p>Fairways in regulation</p>                    
        </div>

        <div class="col">
            <h3 class="percent-counter" data-to="{{ number_format($career_stats->gir_percentage, 2) }}" data-speed="500"></h3>
            <div class="ct-chart ct-minor-seventh" id="chart-career-gir"></div>
            <p>Greens in regulation</p>                    
        </div> 

        <div class="col">
            <h3 class="percent-counter" data-to="{{ number_format($career_stats->scrambling, 2) }}" data-speed="500"></h3>
            <div class="ct-chart ct-minor-seventh" id="chart-career-scrambling"></div>
            <p>Scrambling</p>                    
        </div> 
                                                    

    </div>

@endif

<h4>Rounds with Statistics</h4>

<table class="table rr-table">
    <thead>
        <tr>
                <th>Date</th>
                <th>Course</th>
                <th>Par</th>
                <th>Score</th>
                <th>+/-</th>
                <th>Putts</th>                                
                <th>PPH</th>
                <th>FIR</th>
                <th>GIR</th>
                <th>Drops</th>
                <th>Scrambling</th>
                <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stats_rounds as $key => $stats_round)   

        <tr>
                <td><a href="{{action('RoundController@show', $stats_round['id'])}}">{{ $stats_round->round_date->format('d/m/Y') }}</a></td>
                <td>
                    {{ $stats_round->property_name }} - {{ $stats_round->course_name }}
                </td>
                <td>
                    {{ $stats_round->total_par }}                                                  
                </td>
                <td>
                    {{ $stats_round->total_score }}
                </td>
                <td>    
                    @if($stats_round->plus_minus > 0)
                        +{{ $stats_round->plus_minus }}
                    @else
                        {{ $stats_round->plus_minus }}
                    @endif                                                                             
                </td>                                      

                <td>
                    {{ $stats_round->total_putts }}
                </td>
                <td>
                    {{ number_format($stats_round->putts_per_hole, 2) }}
                </td>
                <td>
                    {{ number_format($stats_round->fir_percentage, 2) }}%                                                                                                                          
                </td>
                <td>
                    {{ number_format($stats_round->gir_percentage, 2) }}%
                </td>
                <td>
                    {{ $stats_round->total_drops }}
                </td>
                <td>
                    {{ number_format($stats_round->scrambling, 2) }}%  
                </td>

                <td>
                        <a href="{{action('RoundController@edit', $stats_round['id'])}}" class="btn btn-danger">Edit</a> 
                </td>
        </tr> 

        @endforeach

        </tbody>
</table>


@else

            <div class="alert alert-info" role="alert">

                <h4>Add some rounds with statistics</h4>

                <p>Add some rounds with statistics to see where your game needs some work.</p>

            </div>                    

@endif 

    </div>
    <!--/#career -->

    <div class="tab-pane" id="rounds" role="tabpanel" aria-labelledby="rounds-tab">

    </div>
    <!--/#rounds -->                            

</div>
<!--/.tab-content -->

              


@endsection

