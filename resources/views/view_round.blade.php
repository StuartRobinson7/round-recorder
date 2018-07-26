@extends('layouts.app')

@section('title', 'View Round')

@section('content')

            <div class="container">

                <h1>{{ $round->round_date->format('d/m/Y') }} <a href="{{action('RoundController@edit', $round['id'])}}" class="btn btn-warning">Edit Round</a></h1>
                <h4>{{ $course->property_name }} - {{ $course->course_name }}</h4>

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
                            <th>Whites</th>
                            <th>Yellows</th>
                            <th>Score</th>
                            <th>FIR</th>
                            <th>GIR</th>
                            <th>Putts</th>
                            <th>Drops</th>
                        </tr>
                    
                        
                        <tr>
                            <td>1</td>
                            <td>{{$course->hole_1_par}}</td>
                            <td>{{$course->hole_1_stroke_index}}</td>
                            <td>{{$course->hole_1_whites}}</td>
                            <td>{{$course->hole_1_yellows}}</td>
                            <td>{{$round->hole_1_score}}</td>
                            <td>{{$round->hole_1_fir}}</td>
                            <td>{{$round->hole_1_gir}}</td>
                            <td>{{$round->hole_1_putts}}</td>
                            <td>{{$round->hole_1_drops}}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{$course->hole_2_par}}</td>
                            <td>{{$course->hole_2_stroke_index}}</td>
                            <td>{{$course->hole_2_whites}}</td>
                            <td>{{$course->hole_2_yellows}}</td>
                            <td>{{$round->hole_2_score}}</td>
                            <td>{{$round->hole_2_fir}}</td>
                            <td>{{$round->hole_2_gir}}</td>
                            <td>{{$round->hole_2_putts}}</td>
                            <td>{{$round->hole_2_drops}}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{$course->hole_3_par}}</td>
                            <td>{{$course->hole_3_stroke_index}}</td>
                            <td>{{$course->hole_3_whites}}</td>
                            <td>{{$course->hole_3_yellows}}</td>
                            <td>{{$round->hole_3_score}}</td>
                            <td>{{$round->hole_3_fir}}</td>
                            <td>{{$round->hole_3_gir}}</td>
                            <td>{{$round->hole_3_putts}}</td>
                            <td>{{$round->hole_3_drops}}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{$course->hole_4_par}}</td>
                            <td>{{$course->hole_4_stroke_index}}</td>
                            <td>{{$course->hole_4_whites}}</td>
                            <td>{{$course->hole_4_yellows}}</td>
                            <td>{{$round->hole_4_score}}</td>
                            <td>{{$round->hole_4_fir}}</td>
                            <td>{{$round->hole_4_gir}}</td>
                            <td>{{$round->hole_4_putts}}</td>
                            <td>{{$round->hole_4_drops}}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{$course->hole_5_par}}</td>
                            <td>{{$course->hole_5_stroke_index}}</td>
                            <td>{{$course->hole_5_whites}}</td>
                            <td>{{$course->hole_5_yellows}}</td>
                            <td>{{$round->hole_5_score}}</td>
                            <td>{{$round->hole_5_fir}}</td>
                            <td>{{$round->hole_5_gir}}</td>
                            <td>{{$round->hole_5_putts}}</td>
                            <td>{{$round->hole_5_drops}}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{$course->hole_6_par}}</td>
                            <td>{{$course->hole_6_stroke_index}}</td>
                            <td>{{$course->hole_6_whites}}</td>
                            <td>{{$course->hole_6_yellows}}</td>
                            <td>{{$round->hole_6_score}}</td>
                            <td>{{$round->hole_6_fir}}</td>
                            <td>{{$round->hole_6_gir}}</td>
                            <td>{{$round->hole_6_putts}}</td>
                            <td>{{$round->hole_6_drops}}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>{{$course->hole_7_par}}</td>
                            <td>{{$course->hole_7_stroke_index}}</td>
                            <td>{{$course->hole_7_whites}}</td>
                            <td>{{$course->hole_7_yellows}}</td>
                            <td>{{$round->hole_7_score}}</td>
                            <td>{{$round->hole_7_fir}}</td>
                            <td>{{$round->hole_7_gir}}</td>
                            <td>{{$round->hole_7_putts}}</td>
                            <td>{{$round->hole_7_drops}}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>{{$course->hole_8_par}}</td>
                            <td>{{$course->hole_8_stroke_index}}</td>
                            <td>{{$course->hole_8_whites}}</td>
                            <td>{{$course->hole_8_yellows}}</td>
                            <td>{{$round->hole_8_score}}</td>
                            <td>{{$round->hole_8_fir}}</td>
                            <td>{{$round->hole_8_gir}}</td>
                            <td>{{$round->hole_8_putts}}</td>
                            <td>{{$round->hole_8_drops}}</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>{{$course->hole_9_par}}</td>
                            <td>{{$course->hole_9_stroke_index}}</td>
                            <td>{{$course->hole_9_whites}}</td>
                            <td>{{$course->hole_9_yellows}}</td>
                            <td>{{$round->hole_9_score}}</td>
                            <td>{{$round->hole_9_fir}}</td>
                            <td>{{$round->hole_9_gir}}</td>
                            <td>{{$round->hole_9_putts}}</td>
                            <td>{{$round->hole_9_drops}}</td>
                        </tr> 


                        <tr>
                            <td>10</td>
                            <td>{{$course->hole_10_par}}</td>
                            <td>{{$course->hole_10_stroke_index}}</td>
                            <td>{{$course->hole_10_whites}}</td>
                            <td>{{$course->hole_10_yellows}}</td>
                            <td>{{$round->hole_10_score}}</td>
                            <td>{{$round->hole_10_fir}}</td>
                            <td>{{$round->hole_10_gir}}</td>
                            <td>{{$round->hole_10_putts}}</td>
                            <td>{{$round->hole_10_drops}}</td>
                        </tr>  

                        <tr>
                            <td>11</td>
                            <td>{{$course->hole_11_par}}</td>
                            <td>{{$course->hole_11_stroke_index}}</td>
                            <td>{{$course->hole_11_whites}}</td>
                            <td>{{$course->hole_11_yellows}}</td>
                            <td>{{$round->hole_11_score}}</td>
                            <td>{{$round->hole_11_fir}}</td>
                            <td>{{$round->hole_11_gir}}</td>
                            <td>{{$round->hole_11_putts}}</td>
                            <td>{{$round->hole_11_drops}}</td>
                        </tr>  

                        <tr>
                            <td>12</td>
                            <td>{{$course->hole_12_par}}</td>
                            <td>{{$course->hole_12_stroke_index}}</td>
                            <td>{{$course->hole_12_whites}}</td>
                            <td>{{$course->hole_12_yellows}}</td>
                            <td>{{$round->hole_12_score}}</td>
                            <td>{{$round->hole_12_fir}}</td>
                            <td>{{$round->hole_12_gir}}</td>
                            <td>{{$round->hole_12_putts}}</td>
                            <td>{{$round->hole_12_drops}}</td>
                        </tr>  

                        <tr>
                            <td>13</td>
                            <td>{{$course->hole_13_par}}</td>
                            <td>{{$course->hole_13_stroke_index}}</td>
                            <td>{{$course->hole_13_whites}}</td>
                            <td>{{$course->hole_13_yellows}}</td>
                            <td>{{$round->hole_13_score}}</td>
                            <td>{{$round->hole_13_fir}}</td>
                            <td>{{$round->hole_13_gir}}</td>
                            <td>{{$round->hole_13_putts}}</td>
                            <td>{{$round->hole_13_drops}}</td>
                        </tr>  

                        <tr>
                            <td>14</td>
                            <td>{{$course->hole_14_par}}</td>
                            <td>{{$course->hole_14_stroke_index}}</td>
                            <td>{{$course->hole_14_whites}}</td>
                            <td>{{$course->hole_14_yellows}}</td>
                            <td>{{$round->hole_14_score}}</td>
                            <td>{{$round->hole_14_fir}}</td>
                            <td>{{$round->hole_14_gir}}</td>
                            <td>{{$round->hole_14_putts}}</td>
                            <td>{{$round->hole_14_drops}}</td>
                        </tr>  

                        <tr>
                            <td>15</td>
                            <td>{{$course->hole_15_par}}</td>
                            <td>{{$course->hole_15_stroke_index}}</td>
                            <td>{{$course->hole_15_whites}}</td>
                            <td>{{$course->hole_15_yellows}}</td>
                            <td>{{$round->hole_15_score}}</td>
                            <td>{{$round->hole_15_fir}}</td>
                            <td>{{$round->hole_15_gir}}</td>
                            <td>{{$round->hole_15_putts}}</td>
                            <td>{{$round->hole_15_drops}}</td>
                        </tr>  

                        <tr>
                            <td>16</td>
                            <td>{{$course->hole_16_par}}</td>
                            <td>{{$course->hole_16_stroke_index}}</td>
                            <td>{{$course->hole_16_whites}}</td>
                            <td>{{$course->hole_16_yellows}}</td>
                            <td>{{$round->hole_16_score}}</td>
                            <td>{{$round->hole_16_fir}}</td>
                            <td>{{$round->hole_16_gir}}</td>
                            <td>{{$round->hole_16_putts}}</td>
                            <td>{{$round->hole_16_drops}}</td>
                        </tr>  

                        <tr>
                            <td>17</td>
                            <td>{{$course->hole_17_par}}</td>
                            <td>{{$course->hole_17_stroke_index}}</td>
                            <td>{{$course->hole_17_whites}}</td>
                            <td>{{$course->hole_17_yellows}}</td>
                            <td>{{$round->hole_17_score}}</td>
                            <td>{{$round->hole_17_fir}}</td>
                            <td>{{$round->hole_17_gir}}</td>
                            <td>{{$round->hole_17_putts}}</td>
                            <td>{{$round->hole_17_drops}}</td>
                        </tr>  

                        <tr>
                            <td>18</td>
                            <td>{{$course->hole_18_par}}</td>
                            <td>{{$course->hole_18_stroke_index}}</td>
                            <td>{{$course->hole_18_whites}}</td>
                            <td>{{$course->hole_18_yellows}}</td>
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
                            <td>{{$course_totals->total_whites}}</td>
                            <td>{{$course_totals->total_yellows}}</td>
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
