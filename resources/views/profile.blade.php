@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    
        <div class="container">

                @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('message-type') }} alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i> {{ Session::get('message') }}
                </div>
                @endif        
    
                <h1>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
                <h2>{{ ucfirst(trans(Auth::user()->hand)) }} Handed</h2>
                <h3>Playing off {{ Auth::user()->handicap / 10 }}</h3>

                
                @if (count($rounds) > 0)

                        <div class="row text-center">
                                <div class="col-6 col-md">
                                        <h4>{{ number_format($career_fir_total, 2) }}%</h4>
                                        <p>Fairways in regulation</p>
                                </div>   
                                <div class="col-6 col-md">
                                        <h4>{{ number_format($career_gir_total, 2) }}%</h4>
                                        <p>Greens in regulation</p>
                                </div> 
                                <div class="col-6 col-md">
                                        <h4>{{ number_format($career_pph_total, 2) }}</h4>
                                        <p>Putts per hole</p>
                                </div>   
                                <div class="col-6 col-md">
                                        <h4>{{ number_format($career_scramble_total, 2) }}%</h4>
                                        <p>Scrambling</p>
                                </div>                                                                                                                                                          
                        </div>


                        <table class="table">

                                <tr>
                                        <td>Date</td>
                                        <td>Course</td>
                                        <td>Par</td>
                                        <td>Score</td>
                                        <td>+/-</td>
                                        <td>Putts</td>                                
                                        <td>PPH</td>
                                        <td>FIR</td>
                                        <td>GIR</td>
                                        <td>Drops</td>
                                        <td>Scrambling</td>
                                </tr>

                                @foreach($rounds as $key => $round_result)   

                                <tr>
                                        <td>{{ $round_result->round_date->format('d/m/Y') }}</td>
                                        <td>{{ $round_result->property_name }} - {{ $round_result->course_name }}</td>
                                        <td>{{ $round_result->total_par }}</td>
                                        <td>{{ $round_result->total_score }}</td>
                                        <td>                                
                                                @if($round_result->plus_minus > 0)
                                                        +{{ $round_result->plus_minus }}
                                                @else
                                                        {{ $round_result->plus_minus }}
                                                @endif                                                                                                                        
                                        </td>
                                        <td>{{ $round_result->total_putts }}</td>
                                        <td>{{ number_format($round_result->putts_per_hole, 2) }}</td>
                                        <td>{{ number_format($round_result->fir_percentage, 2) }}%</td>
                                        <td>{{ number_format($round_result->gir_percentage, 2) }}%</td>
                                        <td>{{ $round_result->total_drops }}</td>
                                        <td>{{ number_format($round_result->scrambling, 2) }}%</td>
                                </tr> 

                                @endforeach

                        </table>


                @else
                
                        <p>Add some rounds to get started!</p>

                @endif               
                

        </div>
        <!--/.container -->


@endsection

