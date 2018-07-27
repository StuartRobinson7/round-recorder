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

                        <table class="table">
                        
                        <tr>
                            <th>Hole</th>
                            <th>Par</th>
                            <th>Stroke Index</th>
                            <th>Whites</th>
                            <th>Yellows</th>
                            <th>Reds</th>
                            <th>Red Par</th>
                            <th>Red Stroke Index</th>
                        </tr>
                    
                        
                        <tr>
                            <td>1</td>
                            <td>{{$course->hole_1_par}}</td>
                            <td>{{$course->hole_1_stroke_index}}</td>
                            <td>{{$course->hole_1_whites}}</td>
                            <td>{{$course->hole_1_yellows}}</td>
                            <td>{{$course->hole_1_reds}}</td>
                            <td>{{$course->hole_1_ladies_par}}</td>
                            <td>{{$course->hole_1_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{$course->hole_2_par}}</td>
                            <td>{{$course->hole_2_stroke_index}}</td>
                            <td>{{$course->hole_2_whites}}</td>
                            <td>{{$course->hole_2_yellows}}</td>
                            <td>{{$course->hole_2_reds}}</td>
                            <td>{{$course->hole_2_ladies_par}}</td>
                            <td>{{$course->hole_2_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{$course->hole_3_par}}</td>
                            <td>{{$course->hole_3_stroke_index}}</td>
                            <td>{{$course->hole_3_whites}}</td>
                            <td>{{$course->hole_3_yellows}}</td>
                            <td>{{$course->hole_3_reds}}</td>
                            <td>{{$course->hole_3_ladies_par}}</td>
                            <td>{{$course->hole_3_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{$course->hole_4_par}}</td>
                            <td>{{$course->hole_4_stroke_index}}</td>
                            <td>{{$course->hole_4_whites}}</td>
                            <td>{{$course->hole_4_yellows}}</td>
                            <td>{{$course->hole_4_reds}}</td>
                            <td>{{$course->hole_4_ladies_par}}</td>
                            <td>{{$course->hole_4_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{$course->hole_5_par}}</td>
                            <td>{{$course->hole_5_stroke_index}}</td>
                            <td>{{$course->hole_5_whites}}</td>
                            <td>{{$course->hole_5_yellows}}</td>
                            <td>{{$course->hole_5_reds}}</td>
                            <td>{{$course->hole_5_ladies_par}}</td>
                            <td>{{$course->hole_5_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{$course->hole_6_par}}</td>
                            <td>{{$course->hole_6_stroke_index}}</td>
                            <td>{{$course->hole_6_whites}}</td>
                            <td>{{$course->hole_6_yellows}}</td>
                            <td>{{$course->hole_6_reds}}</td>
                            <td>{{$course->hole_6_ladies_par}}</td>
                            <td>{{$course->hole_6_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>{{$course->hole_7_par}}</td>
                            <td>{{$course->hole_7_stroke_index}}</td>
                            <td>{{$course->hole_7_whites}}</td>
                            <td>{{$course->hole_7_yellows}}</td>
                            <td>{{$course->hole_7_reds}}</td>
                            <td>{{$course->hole_7_ladies_par}}</td>
                            <td>{{$course->hole_7_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>{{$course->hole_8_par}}</td>
                            <td>{{$course->hole_8_stroke_index}}</td>
                            <td>{{$course->hole_8_whites}}</td>
                            <td>{{$course->hole_8_yellows}}</td>
                            <td>{{$course->hole_8_reds}}</td>
                            <td>{{$course->hole_8_ladies_par}}</td>
                            <td>{{$course->hole_8_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>{{$course->hole_9_par}}</td>
                            <td>{{$course->hole_9_stroke_index}}</td>
                            <td>{{$course->hole_9_whites}}</td>
                            <td>{{$course->hole_9_yellows}}</td>
                            <td>{{$course->hole_9_reds}}</td>
                            <td>{{$course->hole_9_ladies_par}}</td>
                            <td>{{$course->hole_9_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>{{$course->hole_10_par}}</td>
                            <td>{{$course->hole_10_stroke_index}}</td>
                            <td>{{$course->hole_10_whites}}</td>
                            <td>{{$course->hole_10_yellows}}</td>
                            <td>{{$course->hole_10_reds}}</td>
                            <td>{{$course->hole_10_ladies_par}}</td>
                            <td>{{$course->hole_10_ladies_stroke_index}}</td>
                        </tr>  

                        <tr>
                            <td>11</td>
                            <td>{{$course->hole_11_par}}</td>
                            <td>{{$course->hole_11_stroke_index}}</td>
                            <td>{{$course->hole_11_whites}}</td>
                            <td>{{$course->hole_11_yellows}}</td>
                            <td>{{$course->hole_11_reds}}</td>
                            <td>{{$course->hole_11_ladies_par}}</td>
                            <td>{{$course->hole_11_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>{{$course->hole_12_par}}</td>
                            <td>{{$course->hole_12_stroke_index}}</td>
                            <td>{{$course->hole_12_whites}}</td>
                            <td>{{$course->hole_12_yellows}}</td>
                            <td>{{$course->hole_12_reds}}</td>
                            <td>{{$course->hole_12_ladies_par}}</td>
                            <td>{{$course->hole_12_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>{{$course->hole_13_par}}</td>
                            <td>{{$course->hole_13_stroke_index}}</td>
                            <td>{{$course->hole_13_whites}}</td>
                            <td>{{$course->hole_13_yellows}}</td>
                            <td>{{$course->hole_13_reds}}</td>
                            <td>{{$course->hole_13_ladies_par}}</td>
                            <td>{{$course->hole_13_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>14</td>
                            <td>{{$course->hole_14_par}}</td>
                            <td>{{$course->hole_14_stroke_index}}</td>
                            <td>{{$course->hole_14_whites}}</td>
                            <td>{{$course->hole_14_yellows}}</td>
                            <td>{{$course->hole_14_reds}}</td>
                            <td>{{$course->hole_14_ladies_par}}</td>
                            <td>{{$course->hole_14_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>15</td>
                            <td>{{$course->hole_15_par}}</td>
                            <td>{{$course->hole_15_stroke_index}}</td>
                            <td>{{$course->hole_15_whites}}</td>
                            <td>{{$course->hole_15_yellows}}</td>
                            <td>{{$course->hole_15_reds}}</td>
                            <td>{{$course->hole_15_ladies_par}}</td>
                            <td>{{$course->hole_15_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>16</td>
                            <td>{{$course->hole_16_par}}</td>
                            <td>{{$course->hole_16_stroke_index}}</td>
                            <td>{{$course->hole_16_whites}}</td>
                            <td>{{$course->hole_16_yellows}}</td>
                            <td>{{$course->hole_16_reds}}</td>
                            <td>{{$course->hole_16_ladies_par}}</td>
                            <td>{{$course->hole_16_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>17</td>
                            <td>{{$course->hole_17_par}}</td>
                            <td>{{$course->hole_17_stroke_index}}</td>
                            <td>{{$course->hole_17_whites}}</td>
                            <td>{{$course->hole_17_yellows}}</td>
                            <td>{{$course->hole_17_reds}}</td>
                            <td>{{$course->hole_17_ladies_par}}</td>
                            <td>{{$course->hole_17_ladies_stroke_index}}</td>
                        </tr>

                        <tr>
                            <td>18</td>
                            <td>{{$course->hole_18_par}}</td>
                            <td>{{$course->hole_18_stroke_index}}</td>
                            <td>{{$course->hole_18_whites}}</td>
                            <td>{{$course->hole_18_yellows}}</td>
                            <td>{{$course->hole_18_reds}}</td>
                            <td>{{$course->hole_18_ladies_par}}</td>
                            <td>{{$course->hole_18_ladies_stroke_index}}</td>
                        </tr>  

                        <tr>
                            <td>&nbsp;</td>
                            <td>{{$course_totals->total_par}}</td>
                            <td>&nbsp;</td>
                            <td>{{$course_totals->total_whites}}</td>
                            <td>{{$course_totals->total_yellows}}</td>
                            <td>{{$course_totals->total_reds}}</td>
                            <td>{{$course_totals->total_ladies_par}}</td>
                            <td>&nbsp;</td>
                        </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                            

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                    </table>


            </div>
            <!--/.container -->
@endsection
