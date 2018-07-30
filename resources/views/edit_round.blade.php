@extends('layouts.app')

@section('title', 'Edit Round')

@section('content')

            <div class="container">

                <h1>{{ __('Edit Round') }}</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="alert alert-danger" style="display:none;">
                    
                    </div>



                    <form method="post" id="edit_round" action="{{ route('rounds.update', $id) }}">

                        @method('put')

                        @csrf

                        <input id="player_id" type="hidden" class="hidden" name="player_id" value="{{ Auth::user()->id }}">

                        <label>Course</label>
                        <p>{{ $course->property_name }} - {{ $course->course_name }}</p>



                        <label>Date</label>

                        <div class="input-group date">
                            <input type="text" class="form-control{{ $errors->has('round_date') ? ' is-invalid' : '' }}" id="round_date" placeholder="DD/MM/YYYY" name="round_date" value="{{ $round->round_date }}">
                        </div>
                      
    
                        <table>
                        
                            <tr>
                                <th>Hole</th>
                                <th>Par</th>
                                <th>Score</th>
                                <th>Puts</th>
                                <th>Drops</th>
                                <th>FIR</th>
                                <th>GIR</th>
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
                                <td><input id="hole_1_score" type="number" class="form-control{{ $errors->has('hole_1_score') ? ' is-invalid' : '' }}" name="hole_1_score" value="{{ $round->hole_1_score }}"></td>
                                <td><input id="hole_1_putts" type="number" class="form-control{{ $errors->has('hole_1_putts') ? ' is-invalid' : '' }}" name="hole_1_putts" value="{{ $round->hole_1_putts }}"></td>
                                <td><input id="hole_1_drops" type="number" class="form-control{{ $errors->has('hole_1_drops') ? ' is-invalid' : '' }}" name="hole_1_drops" value="{{ $round->hole_1_drops }}"></td>
                                <td><input id="hole_1_fir" type="checkbox" class="form-control" name="hole_1_fir" value="1" @if( $round->yards === 'white'){{ ($course->hole_1_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_1_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_1_fir === 1) checked @endif></td>
                                <td><input id="hole_1_gir" type="checkbox" class="form-control" name="hole_1_gir" value="1" @if( $round->hole_1_gir === 1) checked @endif></td>
                            </tr>
                        
                        
                            
                            <tr>
                                <td>2</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_2_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_2_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_2_score" type="number" class="form-control{{ $errors->has('hole_2_score') ? ' is-invalid' : '' }}" name="hole_2_score" value="{{ $round->hole_2_score }}"></td>
                                <td><input id="hole_2_putts" type="number" class="form-control{{ $errors->has('hole_2_putts') ? ' is-invalid' : '' }}" name="hole_2_putts" value="{{ $round->hole_2_putts }}"></td>
                                <td><input id="hole_2_drops" type="number" class="form-control{{ $errors->has('hole_2_drops') ? ' is-invalid' : '' }}" name="hole_2_drops" value="{{ $round->hole_2_drops }}"></td>
                                <td><input id="hole_2_fir" type="checkbox" class="form-control" name="hole_2_fir" value="1" @if( $round->yards === 'white') {{ ($course->hole_2_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_2_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_2_fir === 1) checked @endif></td>
                                <td><input id="hole_2_gir" type="checkbox" class="form-control" name="hole_2_gir" value="1" @if( $round->hole_2_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>3</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_3_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_3_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_3_score" type="number" class="form-control{{ $errors->has('hole_3_score') ? ' is-invalid' : '' }}" name="hole_3_score" value="{{ $round->hole_3_score }}"></td>
                                <td><input id="hole_3_putts" type="number" class="form-control{{ $errors->has('hole_3_putts') ? ' is-invalid' : '' }}" name="hole_3_putts" value="{{ $round->hole_3_putts }}"></td>
                                <td><input id="hole_3_drops" type="number" class="form-control{{ $errors->has('hole_3_drops') ? ' is-invalid' : '' }}" name="hole_3_drops" value="{{ $round->hole_3_drops }}"></td>
                                <td><input id="hole_3_fir" type="checkbox" class="form-control" name="hole_3_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_3_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_3_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_3_fir == 1) checked @endif></td>
                                <td><input id="hole_3_gir" type="checkbox" class="form-control" name="hole_3_gir" value="1" @if( $round->hole_3_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>4</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_4_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_4_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_4_score" type="number" class="form-control{{ $errors->has('hole_4_score') ? ' is-invalid' : '' }}" name="hole_4_score" value="{{ $round->hole_4_score }}"></td>
                                <td><input id="hole_4_putts" type="number" class="form-control{{ $errors->has('hole_4_putts') ? ' is-invalid' : '' }}" name="hole_4_putts" value="{{ $round->hole_4_putts }}"></td>
                                <td><input id="hole_4_drops" type="number" class="form-control{{ $errors->has('hole_4_drops') ? ' is-invalid' : '' }}" name="hole_4_drops" value="{{ $round->hole_4_drops }}"></td>
                                <td><input id="hole_4_fir" type="checkbox" class="form-control" name="hole_4_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_4_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_4_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_4_fir == 1) checked @endif></td>
                                <td><input id="hole_4_gir" type="checkbox" class="form-control" name="hole_4_gir" value="1" @if( $round->hole_4_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>5</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_5_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_5_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_5_score" type="number" class="form-control{{ $errors->has('hole_5_score') ? ' is-invalid' : '' }}" name="hole_5_score" value="{{ $round->hole_5_score }}"></td>
                                <td><input id="hole_5_putts" type="number" class="form-control{{ $errors->has('hole_5_putts') ? ' is-invalid' : '' }}" name="hole_5_putts" value="{{ $round->hole_5_putts }}"></td>
                                <td><input id="hole_5_drops" type="number" class="form-control{{ $errors->has('hole_5_drops') ? ' is-invalid' : '' }}" name="hole_5_drops" value="{{ $round->hole_5_drops }}"></td>
                                <td><input id="hole_5_fir" type="checkbox" class="form-control" name="hole_5_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_5_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_5_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_5_fir == 1) checked @endif></td>
                                <td><input id="hole_5_gir" type="checkbox" class="form-control" name="hole_5_gir" value="1" @if( $round->hole_5_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>6</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_6_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_6_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_6_score" type="number" class="form-control{{ $errors->has('hole_6_score') ? ' is-invalid' : '' }}" name="hole_6_score" value="{{ $round->hole_6_score }}"></td>
                                <td><input id="hole_6_putts" type="number" class="form-control{{ $errors->has('hole_6_putts') ? ' is-invalid' : '' }}" name="hole_6_putts" value="{{ $round->hole_6_putts }}"></td>
                                <td><input id="hole_6_drops" type="number" class="form-control{{ $errors->has('hole_6_drops') ? ' is-invalid' : '' }}" name="hole_6_drops" value="{{ $round->hole_6_drops }}"></td>
                                <td><input id="hole_6_fir" type="checkbox" class="form-control" name="hole_6_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_6_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_6_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_6_fir == 1) checked @endif></td>
                                <td><input id="hole_6_gir" type="checkbox" class="form-control" name="hole_6_gir" value="1" @if( $round->hole_6_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>7</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_7_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_7_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_7_score" type="number" class="form-control{{ $errors->has('hole_7_score') ? ' is-invalid' : '' }}" name="hole_7_score" value="{{ $round->hole_7_score }}"></td>
                                <td><input id="hole_7_putts" type="number" class="form-control{{ $errors->has('hole_7_putts') ? ' is-invalid' : '' }}" name="hole_7_putts" value="{{ $round->hole_7_putts }}"></td>
                                <td><input id="hole_7_drops" type="number" class="form-control{{ $errors->has('hole_7_drops') ? ' is-invalid' : '' }}" name="hole_7_drops" value="{{ $round->hole_7_drops }}"></td>
                                <td><input id="hole_7_fir" type="checkbox" class="form-control" name="hole_7_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_7_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_7_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_7_fir == 1) checked @endif></td>
                                <td><input id="hole_7_gir" type="checkbox" class="form-control" name="hole_7_gir" value="1" @if( $round->hole_7_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>8</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_8_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_8_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_8_score" type="number" class="form-control{{ $errors->has('hole_8_score') ? ' is-invalid' : '' }}" name="hole_8_score" value="{{ $round->hole_8_score }}"></td>
                                <td><input id="hole_8_putts" type="number" class="form-control{{ $errors->has('hole_8_putts') ? ' is-invalid' : '' }}" name="hole_8_putts" value="{{ $round->hole_8_putts }}"></td>
                                <td><input id="hole_8_drops" type="number" class="form-control{{ $errors->has('hole_8_drops') ? ' is-invalid' : '' }}" name="hole_8_drops" value="{{ $round->hole_8_drops }}"></td>
                                <td><input id="hole_8_fir" type="checkbox" class="form-control" name="hole_8_fir" value="1" @if( $round->yards === 'white') {{ ($course->hole_8_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_8_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_8_fir == 1) checked @endif></td>
                                <td><input id="hole_8_gir" type="checkbox" class="form-control" name="hole_8_gir" value="1" @if( $round->hole_8_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>9</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_9_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_9_par}} 
                                
                                @endif                                    
                                </td>
                                <td><input id="hole_9_score" type="number" class="form-control{{ $errors->has('hole_9_score') ? ' is-invalid' : '' }}" name="hole_9_score" value="{{ $round->hole_9_score }}"></td>
                                <td><input id="hole_9_putts" type="number" class="form-control{{ $errors->has('hole_9_putts') ? ' is-invalid' : '' }}" name="hole_9_putts" value="{{ $round->hole_9_putts }}"></td>
                                <td><input id="hole_9_drops" type="number" class="form-control{{ $errors->has('hole_9_drops') ? ' is-invalid' : '' }}" name="hole_9_drops" value="{{ $round->hole_9_drops }}"></td>
                                <td><input id="hole_9_fir" type="checkbox" class="form-control" name="hole_9_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_9_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_9_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_9_fir == 1) checked @endif></td>
                                <td><input id="hole_9_gir" type="checkbox" class="form-control" name="hole_9_gir" value="1" @if( $round->hole_9_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>10</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_10_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_10_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_10_score" type="number" class="form-control{{ $errors->has('hole_10_score') ? ' is-invalid' : '' }}" name="hole_10_score" value="{{ $round->hole_10_score }}"></td>
                                <td><input id="hole_10_putts" type="number" class="form-control{{ $errors->has('hole_10_putts') ? ' is-invalid' : '' }}" name="hole_10_putts" value="{{ $round->hole_10_putts }}"></td>
                                <td><input id="hole_10_drops" type="number" class="form-control{{ $errors->has('hole_10_drops') ? ' is-invalid' : '' }}" name="hole_10_drops" value="{{ $round->hole_10_drops }}"></td>
                                <td><input id="hole_10_fir" type="checkbox" class="form-control" name="hole_10_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_10_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_10_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_10_fir == 1) checked @endif></td>
                                <td><input id="hole_10_gir" type="checkbox" class="form-control" name="hole_10_gir" value="1" @if( $round->hole_10_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>11</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_11_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_11_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_11_score" type="number" class="form-control{{ $errors->has('hole_11_score') ? ' is-invalid' : '' }}" name="hole_11_score" value="{{ $round->hole_11_score }}"></td>
                                <td><input id="hole_11_putts" type="number" class="form-control{{ $errors->has('hole_11_putts') ? ' is-invalid' : '' }}" name="hole_11_putts" value="{{ $round->hole_11_putts }}"></td>
                                <td><input id="hole_11_drops" type="number" class="form-control{{ $errors->has('hole_11_drops') ? ' is-invalid' : '' }}" name="hole_11_drops" value="{{ $round->hole_11_drops }}"></td>
                                <td><input id="hole_11_fir" type="checkbox" class="form-control" name="hole_11_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_11_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_11_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_11_fir == 1) checked @endif></td>
                                <td><input id="hole_11_gir" type="checkbox" class="form-control" name="hole_11_gir" value="1" @if( $round->hole_11_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>12</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_12_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_12_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_12_score" type="number" class="form-control{{ $errors->has('hole_12_score') ? ' is-invalid' : '' }}" name="hole_12_score" value="{{ $round->hole_12_score }}"></td>
                                <td><input id="hole_12_putts" type="number" class="form-control{{ $errors->has('hole_12_putts') ? ' is-invalid' : '' }}" name="hole_12_putts" value="{{ $round->hole_12_putts }}"></td>
                                <td><input id="hole_12_drops" type="number" class="form-control{{ $errors->has('hole_12_drops') ? ' is-invalid' : '' }}" name="hole_12_drops" value="{{ $round->hole_12_drops }}"></td>
                                <td><input id="hole_12_fir" type="checkbox" class="form-control" name="hole_12_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_12_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_12_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_12_fir == 1) checked @endif></td>
                                <td><input id="hole_12_gir" type="checkbox" class="form-control" name="hole_12_gir" value="1" @if( $round->hole_12_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>13</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_13_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_13_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_13_score" type="number" class="form-control{{ $errors->has('hole_13_score') ? ' is-invalid' : '' }}" name="hole_13_score" value="{{ $round->hole_13_score }}"></td>
                                <td><input id="hole_13_putts" type="number" class="form-control{{ $errors->has('hole_13_putts') ? ' is-invalid' : '' }}" name="hole_13_putts" value="{{ $round->hole_13_putts }}"></td>
                                <td><input id="hole_13_drops" type="number" class="form-control{{ $errors->has('hole_13_drops') ? ' is-invalid' : '' }}" name="hole_13_drops" value="{{ $round->hole_13_drops }}"></td>
                                <td><input id="hole_13_fir" type="checkbox" class="form-control" name="hole_13_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_13_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_13_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_13_fir == 1) checked @endif></td>
                                <td><input id="hole_13_gir" type="checkbox" class="form-control" name="hole_13_gir" value="1" @if( $round->hole_13_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>14</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_14_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_14_par}} 
                                
                                @endif                                    
                                </td>
                                <td><input id="hole_14_score" type="number" class="form-control{{ $errors->has('hole_14_score') ? ' is-invalid' : '' }}" name="hole_14_score" value="{{ $round->hole_14_score }}"></td>
                                <td><input id="hole_14_putts" type="number" class="form-control{{ $errors->has('hole_14_putts') ? ' is-invalid' : '' }}" name="hole_14_putts" value="{{ $round->hole_14_putts }}"></td>
                                <td><input id="hole_14_drops" type="number" class="form-control{{ $errors->has('hole_14_drops') ? ' is-invalid' : '' }}" name="hole_14_drops" value="{{ $round->hole_14_drops }}"></td>
                                <td><input id="hole_14_fir" type="checkbox" class="form-control" name="hole_14_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_14_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_14_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_14_fir == 1) checked @endif></td>
                                <td><input id="hole_14_gir" type="checkbox" class="form-control" name="hole_14_gir" value="1"@if( $round->hole_14_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>15</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_15_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_15_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_15_score" type="number" class="form-control{{ $errors->has('hole_15_score') ? ' is-invalid' : '' }}" name="hole_15_score" value="{{ $round->hole_15_score }}"></td>
                                <td><input id="hole_15_putts" type="number" class="form-control{{ $errors->has('hole_15_putts') ? ' is-invalid' : '' }}" name="hole_15_putts" value="{{ $round->hole_15_putts }}"></td>
                                <td><input id="hole_15_drops" type="number" class="form-control{{ $errors->has('hole_15_drops') ? ' is-invalid' : '' }}" name="hole_15_drops" value="{{ $round->hole_15_drops }}"></td>
                                <td><input id="hole_15_fir" type="checkbox" class="form-control" name="hole_15_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_15_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_15_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_15_fir == 1) checked @endif></td>
                                <td><input id="hole_15_gir" type="checkbox" class="form-control" name="hole_15_gir" value="1" @if( $round->hole_15_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>16</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_16_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_16_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_16_score" type="number" class="form-control{{ $errors->has('hole_16_score') ? ' is-invalid' : '' }}" name="hole_16_score" value="{{ $round->hole_16_score }}"></td>
                                <td><input id="hole_16_putts" type="number" class="form-control{{ $errors->has('hole_16_putts') ? ' is-invalid' : '' }}" name="hole_16_putts" value="{{ $round->hole_16_putts }}"></td>
                                <td><input id="hole_16_drops" type="number" class="form-control{{ $errors->has('hole_16_drops') ? ' is-invalid' : '' }}" name="hole_16_drops" value="{{ $round->hole_16_drops }}"></td>
                                <td><input id="hole_16_fir" type="checkbox" class="form-control" name="hole_16_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_16_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_16_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_16_fir == 1) checked @endif></td>
                                <td><input id="hole_16_gir" type="checkbox" class="form-control" name="hole_16_gir" value="1" @if( $round->hole_16_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>17</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_17_ladies_par}}
                                    
                                @else
                                
                                    {{$course->hole_17_par}} 
                                
                                @endif                                
                                </td>
                                <td><input id="hole_17_score" type="number" class="form-control{{ $errors->has('hole_17_score') ? ' is-invalid' : '' }}" name="hole_17_score" value="{{ $round->hole_17_score }}"></td>
                                <td><input id="hole_17_putts" type="number" class="form-control{{ $errors->has('hole_17_putts') ? ' is-invalid' : '' }}" name="hole_17_putts" value="{{ $round->hole_17_putts }}"></td>
                                <td><input id="hole_17_drops" type="number" class="form-control{{ $errors->has('hole_17_drops') ? ' is-invalid' : '' }}" name="hole_17_drops" value="{{ $round->hole_17_drops }}"></td>
                                <td><input id="hole_17_fir" type="checkbox" class="form-control" name="hole_17_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_17_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_17_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_17_fir == 1) checked @endif></td>
                                <td><input id="hole_17_gir" type="checkbox" class="form-control" name="hole_17_gir" value="1" @if( $round->hole_17_gir == 1) checked @endif></td>
                            </tr>
                        
                            <tr>
                                <td>18</td>
                                <td>
                                @if( $round->yards === 'red')

                                    {{$course->hole_18_ladies_par}}

                                @else

                                    {{$course->hole_18_par}} 

                                @endif                                    
                                </td>
                                <td><input id="hole_18_score" type="number" class="form-control{{ $errors->has('hole_18_score') ? ' is-invalid' : '' }}" name="hole_18_score" value="{{ $round->hole_18_score }}"></td>
                                <td><input id="hole_18_putts" type="number" class="form-control{{ $errors->has('hole_18_putts') ? ' is-invalid' : '' }}" name="hole_18_putts" value="{{ $round->hole_18_putts }}"></td>
                                <td><input id="hole_18_drops" type="number" class="form-control{{ $errors->has('hole_18_drops') ? ' is-invalid' : '' }}" name="hole_18_drops" value="{{ $round->hole_18_drops }}"></td>
                                <td><input id="hole_18_fir" type="checkbox" class="form-control" name="hole_18_fir" value="1" @if($round->yards === 'white') {{ ($course->hole_18_par < 4 ? "disabled":"") }} @elseif ($round->yards === 'red') {{ ($course->hole_18_ladies_par < 4 ? "disabled":"") }} @endif  @if( $round->hole_18_fir == 1) checked @endif></td>
                                <td><input id="hole_18_gir" type="checkbox" class="form-control" name="hole_18_gir" value="1" @if( $round->hole_18_gir == 1) checked @endif ></td>
                            </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                        </table>
    
    



                        <label>Round Notes</label>
                        <textarea id="round_notes" type="textarea" rows="4" class="form-control" name="round_notes" value="{{ $round->round_notes }}"> </textarea>                         

                        <button id="submit" type="submit" class="btn btn-cta">
                            <span>{{ __('Update Round') }}</span>
                        </button>

                    </form>

            </div>
            <!--/.container -->



@endsection
