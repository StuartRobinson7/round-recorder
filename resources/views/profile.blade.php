@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    
        <div class="container">
    
                <h1>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
                <h2>{{ Auth::user()->hand }} Hand</h2>
                <h3>Playing off {{ Auth::user()->handicap }}</h3>

                
                @foreach($career as $key => $career_stat) 
                        <div class="row">
                                <div class="col-6 col-md">
                                        <h4>{{ number_format($career_stat->fir_percentage, 2) }}%</h4>
                                </div>
                                <div class="col-6 col-md">
                                        <h4>{{ number_format($career_stat->gir_percentage, 2) }}%</h4>
                                </div>                                                             
                        </div>
                @endforeach
                

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
                        </tr>

                @foreach($rounds as $key => $round_result)   

                        <tr>
                                <td>{{ $round_result->round_date->format('d/m/Y') }}</td>
                                <td>{{ $round_result->property_name }} {{ $round_result->course_name }}</td>
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
                        </tr>                        

                @endforeach

                </table>


        </div>
        <!--/.container -->




@endsection

