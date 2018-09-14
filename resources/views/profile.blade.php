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
</script> 

@endsection

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
                
    
                <h1>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
                <h3>{{ ucfirst(trans(Auth::user()->hand)) }} Handed - Playing off {{ Auth::user()->handicap / 10 }}</h3>

                <br />
                <br />

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

                <div class="row round-total-row text-center">                     

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

                
                @if (count($rounds) > 0)


                        <table class="table rr-table">

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

                                @foreach($rounds as $key => $round_result)   

                                <tr>
                                        <td><a href="{{action('RoundController@show', $round_result['id'])}}">{{ $round_result->round_date->format('d/m/Y') }}</a></td>
                                        <td>
                                            {{ $round_result->property_name }} - {{ $round_result->course_name }}
                                        </td>
                                        <td>
                                            {{ $round_result->total_par }}                                                  
                                        </td>
                                        <td>
                                            {{ $round_result->total_score }}
                                        </td>
                                        <td>    
                                            @if($round_result->plus_minus > 0)
                                                +{{ $round_result->plus_minus }}
                                            @else
                                                {{ $round_result->plus_minus }}
                                            @endif                                                                             
                                        </td>
                                        <td>
                                            {{ $round_result->total_putts }}
                                        </td>
                                        <td>
                                            {{ number_format($round_result->putts_per_hole, 2) }}
                                        </td>
                                        <td>
                                            {{ number_format($round_result->fir_percentage, 2) }}%                                                                                                                          
                                        </td>
                                        <td>
                                            {{ number_format($round_result->gir_percentage, 2) }}%
                                        </td>
                                        <td>
                                            {{ $round_result->total_drops }}
                                        </td>
                                        <td>
                                                {{ number_format($round_result->scrambling, 2) }}%  
                                        </td>
                                        <td>
                                                <a href="{{action('RoundController@edit', $round_result['id'])}}" class="btn btn-warning">Edit</a>
                                        </td>
                                </tr> 

                                @endforeach

                        </table>


                @else
                
                        <p>Add some rounds to get started!</p>

                @endif               
                

        </div>
        <!--/.container -->


@endsection

