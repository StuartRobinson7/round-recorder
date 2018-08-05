@extends('layouts.app')

@section('title', 'Add Course')

@section('content')

            <div class="container">

                <h1>{{ __('Add Course') }}</h1>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <form method="POST" action="{{ route('courses.store') }}" aria-label="{{ __('Add Course') }}">
                        @csrf

                        <div class="row">

                            <div class="col-12 col-md">

                                <div class="form-group">
                                    <label>Property Name</label>
                                    <input id="property_name" type="text" class="form-control{{ $errors->has('property_name') ? ' is-invalid' : '' }}" name="property_name" value="{{ old('property_name') }}">
                                </div>

                            </div>

                            <div class="col-12 col-md">

                                <div class="form-group">
                                    <label>Course Name</label>
                                    <input id="course_name" type="text" class="form-control{{ $errors->has('course_name') ? ' is-invalid' : '' }}" name="course_name" value="{{ old('course_name') }}">
                                </div>

                            </div>                            

                        </div>
                        <!-- /.row -->

                        <div class="row">

                            <div class="col-12 col-lg-1">

                                <div class="form-group">
                                    <label>SSS</label>
                                    <input id="sss" type="text" class="form-control{{ $errors->has('sss') ? ' is-invalid' : '' }}" name="sss" value="{{ old('sss') }}"> 
                                </div>

                            </div>

                            <div class="col align-self-end">

                                <div class="alert alert-info">

                                    <p>Description of SSS goes here.</p>

                                </div>

                            </div>


                        </div>
                        <!-- /.row -->

                    <br />

                        <h2>Whites Tees</h2>

                        <h3>Front 9</h3>

                        <div class="row">

                            <div class="col-lg-2">
                                <h4>Hole</h4>
                            </div>

                            <div class="col">
                                <span>1</span>
                            </div>

                            <div class="col">
                                <span>2</span>
                            </div>

                            <div class="col">
                                <span>3</span>
                            </div>

                            <div class="col">
                                <span>4</span>
                            </div>

                            <div class="col">
                                <span>5</span>
                            </div>

                            <div class="col">
                                <span>6</span>
                            </div>

                            <div class="col">
                                <span>7</span>
                            </div>

                            <div class="col">
                                <span>8</span>
                            </div>

                            <div class="col">
                                <span>9</span>
                            </div>                                                                                                                                                                                                                                                          


                        </div>
                        <!-- /.row -->

                        <div class="row">

                            <div class="col-lg-2">
                                <h4>Yards</h4>
                            </div>

                            <div class="col">
                                <input id="hole_1_whites" type="text" class="form-control{{ $errors->has('hole_1_whites') ? ' is-invalid' : '' }}" name="hole_1_whites" value="{{ old('hole_1_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_2_whites" type="text" class="form-control{{ $errors->has('hole_2_whites') ? ' is-invalid' : '' }}" name="hole_2_whites" value="{{ old('hole_2_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_3_whites" type="text" class="form-control{{ $errors->has('hole_3_whites') ? ' is-invalid' : '' }}" name="hole_3_whites" value="{{ old('hole_3_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_4_whites" type="text" class="form-control{{ $errors->has('hole_4_whites') ? ' is-invalid' : '' }}" name="hole_4_whites" value="{{ old('hole_4_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_5_whites" type="text" class="form-control{{ $errors->has('hole_5_whites') ? ' is-invalid' : '' }}" name="hole_5_whites" value="{{ old('hole_5_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_6_whites" type="text" class="form-control{{ $errors->has('hole_6_whites') ? ' is-invalid' : '' }}" name="hole_6_whites" value="{{ old('hole_6_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_7_whites" type="text" class="form-control{{ $errors->has('hole_7_whites') ? ' is-invalid' : '' }}" name="hole_7_whites" value="{{ old('hole_7_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_8_whites" type="text" class="form-control{{ $errors->has('hole_8_whites') ? ' is-invalid' : '' }}" name="hole_8_whites" value="{{ old('hole_8_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_9_whites" type="text" class="form-control{{ $errors->has('hole_9_whites') ? ' is-invalid' : '' }}" name="hole_9_whites" value="{{ old('hole_9_whites') }}">
                            </div>                                                                                                                                                                                                                                                          


                        </div>
                        <!-- /.row --> 

                        <div class="row">

                            <div class="col-lg-2">
                                <h4>Par</h4>
                            </div>

                            <div class="col">
                                <input id="hole_1_white_par" type="text" class="form-control{{ $errors->has('hole_1_white_par') ? ' is-invalid' : '' }}" name="hole_1_white_par" value="{{ old('hole_1_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_2_white_par" type="text" class="form-control{{ $errors->has('hole_2_white_par') ? ' is-invalid' : '' }}" name="hole_2_white_par" value="{{ old('hole_2_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_3_white_par" type="text" class="form-control{{ $errors->has('hole_3_white_par') ? ' is-invalid' : '' }}" name="hole_3_white_par" value="{{ old('hole_3_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_4_white_par" type="text" class="form-control{{ $errors->has('hole_4_white_par') ? ' is-invalid' : '' }}" name="hole_4_white_par" value="{{ old('hole_4_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_5_white_par" type="text" class="form-control{{ $errors->has('hole_5_white_par') ? ' is-invalid' : '' }}" name="hole_5_white_par" value="{{ old('hole_5_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_6_white_par" type="text" class="form-control{{ $errors->has('hole_6_white_par') ? ' is-invalid' : '' }}" name="hole_6_white_par" value="{{ old('hole_6_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_7_white_par" type="text" class="form-control{{ $errors->has('hole_7_white_par') ? ' is-invalid' : '' }}" name="hole_7_white_par" value="{{ old('hole_7_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_8_white_par" type="text" class="form-control{{ $errors->has('hole_8_white_par') ? ' is-invalid' : '' }}" name="hole_8_white_par" value="{{ old('hole_8_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_9_white_par" type="text" class="form-control{{ $errors->has('hole_9_white_par') ? ' is-invalid' : '' }}" name="hole_9_white_par" value="{{ old('hole_9_white_par') }}">
                            </div>                                                                                                                                                                                                                                                          


                        </div>
                        <!-- /.row -->       

                        <div class="row">

                            <div class="col-lg-2">
                                <h4>Stroke Index</h4>
                            </div>

                            <div class="col">
                            <td><input id="hole_1_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_1_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_1_white_stroke_index" value="{{ old('hole_1_white_stroke_index') }}"></td>
                            </div>

                            <div class="col">
                                <input id="hole_2_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_2_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_2_white_stroke_index" value="{{ old('hole_2_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_3_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_3_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_3_white_stroke_index" value="{{ old('hole_3_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_4_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_4_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_4_white_stroke_index" value="{{ old('hole_4_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_5_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_5_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_5_white_stroke_index" value="{{ old('hole_5_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_6_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_6_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_6_white_stroke_index" value="{{ old('hole_6_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_7_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_7_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_7_white_stroke_index" value="{{ old('hole_7_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_8_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_8_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_8_white_stroke_index" value="{{ old('hole_8_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_9_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_9_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_9_white_stroke_index" value="{{ old('hole_9_white_stroke_index') }}">
                            </div>                                                                                                                                                                                                                                                          


                        </div>
                        <!-- /.row -->                                                                   

                    <br />

                        <h3>Back 9</h3>

                        <div class="row">

                            <div class="col-lg-2">
                                <h4>Hole</h4>
                            </div>

                            <div class="col">
                                <span>10</span>
                            </div>

                            <div class="col">
                                <span>11</span>
                            </div>

                            <div class="col">
                                <span>12</span>
                            </div>

                            <div class="col">
                                <span>13</span>
                            </div>

                            <div class="col">
                                <span>14</span>
                            </div>

                            <div class="col">
                                <span>15</span>
                            </div>

                            <div class="col">
                                <span>16</span>
                            </div>

                            <div class="col">
                                <span>17</span>
                            </div>

                            <div class="col">
                                <span>18</span>
                            </div>                                                                                                                                                                                                                                                          


                        </div>
                        <!-- /.row -->

                        <div class="row">

                            <div class="col-lg-2">
                                <h4>Yards</h4>
                            </div>

                            <div class="col">
                                <input id="hole_10_whites" type="text" class="form-control{{ $errors->has('hole_10_whites') ? ' is-invalid' : '' }}" name="hole_10_whites" value="{{ old('hole_10_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_11_whites" type="text" class="form-control{{ $errors->has('hole_11_whites') ? ' is-invalid' : '' }}" name="hole_11_whites" value="{{ old('hole_11_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_12_whites" type="text" class="form-control{{ $errors->has('hole_12_whites') ? ' is-invalid' : '' }}" name="hole_12_whites" value="{{ old('hole_12_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_13_whites" type="text" class="form-control{{ $errors->has('hole_13_whites') ? ' is-invalid' : '' }}" name="hole_13_whites" value="{{ old('hole_13_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_14_whites" type="text" class="form-control{{ $errors->has('hole_14_whites') ? ' is-invalid' : '' }}" name="hole_14_whites" value="{{ old('hole_14_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_15_whites" type="text" class="form-control{{ $errors->has('hole_15_whites') ? ' is-invalid' : '' }}" name="hole_15_whites" value="{{ old('hole_15_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_16_whites" type="text" class="form-control{{ $errors->has('hole_16_whites') ? ' is-invalid' : '' }}" name="hole_16_whites" value="{{ old('hole_16_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_17_whites" type="text" class="form-control{{ $errors->has('hole_17_whites') ? ' is-invalid' : '' }}" name="hole_17_whites" value="{{ old('hole_17_whites') }}">
                            </div>

                            <div class="col">
                                <input id="hole_18_whites" type="text" class="form-control{{ $errors->has('hole_18_whites') ? ' is-invalid' : '' }}" name="hole_18_whites" value="{{ old('hole_18_whites') }}">
                            </div>                                                                                                                                                                                                                                                          


                        </div>
                        <!-- /.row --> 

                        <div class="row">

                            <div class="col-lg-2">
                                <h4>Par</h4>
                            </div>

                            <div class="col">
                                <input id="hole_10_white_par" type="text" class="form-control{{ $errors->has('hole_10_white_par') ? ' is-invalid' : '' }}" name="hole_10_white_par" value="{{ old('hole_10_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_11_white_par" type="text" class="form-control{{ $errors->has('hole_11_white_par') ? ' is-invalid' : '' }}" name="hole_11_white_par" value="{{ old('hole_11_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_12_white_par" type="text" class="form-control{{ $errors->has('hole_12_white_par') ? ' is-invalid' : '' }}" name="hole_12_white_par" value="{{ old('hole_12_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_13_white_par" type="text" class="form-control{{ $errors->has('hole_13_white_par') ? ' is-invalid' : '' }}" name="hole_13_white_par" value="{{ old('hole_13_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_14_white_par" type="text" class="form-control{{ $errors->has('hole_14_white_par') ? ' is-invalid' : '' }}" name="hole_14_white_par" value="{{ old('hole_14_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_15_white_par" type="text" class="form-control{{ $errors->has('hole_15_white_par') ? ' is-invalid' : '' }}" name="hole_15_white_par" value="{{ old('hole_15_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_16_white_par" type="text" class="form-control{{ $errors->has('hole_16_white_par') ? ' is-invalid' : '' }}" name="hole_16_white_par" value="{{ old('hole_16_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_17_white_par" type="text" class="form-control{{ $errors->has('hole_17_white_par') ? ' is-invalid' : '' }}" name="hole_17_white_par" value="{{ old('hole_17_white_par') }}">
                            </div>

                            <div class="col">
                                <input id="hole_18_white_par" type="text" class="form-control{{ $errors->has('hole_18_white_par') ? ' is-invalid' : '' }}" name="hole_18_white_par" value="{{ old('hole_18_white_par') }}">
                            </div>                                                                                                                                                                                                                                                          


                        </div>
                        <!-- /.row -->       

                        <div class="row">

                            <div class="col-lg-2">
                                <h4>Stroke Index</h4>
                            </div>

                            <div class="col">
                            <td><input id="hole_10_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_10_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_10_white_stroke_index" value="{{ old('hole_10_white_stroke_index') }}"></td>
                            </div>

                            <div class="col">
                                <input id="hole_11_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_11_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_11_white_stroke_index" value="{{ old('hole_11_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_12_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_12_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_12_white_stroke_index" value="{{ old('hole_12_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_13_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_13_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_13_white_stroke_index" value="{{ old('hole_13_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_14_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_14_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_14_white_stroke_index" value="{{ old('hole_14_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_15_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_15_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_15_white_stroke_index" value="{{ old('hole_15_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_16_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_16_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_16_white_stroke_index" value="{{ old('hole_16_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_17_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_17_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_17_white_stroke_index" value="{{ old('hole_17_white_stroke_index') }}">
                            </div>

                            <div class="col">
                                <input id="hole_18_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_18_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_18_white_stroke_index" value="{{ old('hole_18_white_stroke_index') }}">
                            </div>                                                                                                                                                                                                                                                          


                        </div>
                        <!-- /.row -->










                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />

                        <table>

                            <tr>
                                <th>Hole</th>
                                <th>Whites</th>
                                <th>Yellows</th>
                                <th>Par</th>
                                <th>Stroke Index</th>
                                <th>Reds</th>
                                <th>Red Par</th>
                                <th>Red Stroke Index</th>
                            </tr>

                            
                            <tr>
                                <td>1</td>
                                <td><input id="hole_1_whites" type="text" class="form-control{{ $errors->has('hole_1_whites') ? ' is-invalid' : '' }}" name="hole_1_whites" value="{{ old('hole_1_whites') }}"></td>
                                <td><input id="hole_1_yellows" type="text" class="form-control{{ $errors->has('hole_1_yellows') ? ' is-invalid' : '' }}" name="hole_1_yellows" value="{{ old('hole_1_yellows') }}"></td>
                                <td><input id="hole_1_par" type="text" class="form-control{{ $errors->has('hole_1_par') ? ' is-invalid' : '' }}" name="hole_1_par" value="{{ old('hole_1_par') }}"></td>
                                <td><input id="hole_1_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_1_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_1_white_stroke_index" value="{{ old('hole_1_white_stroke_index') }}"></td>
                                <td><input id="hole_1_reds" type="text" class="form-control{{ $errors->has('hole_1_reds') ? ' is-invalid' : '' }}" name="hole_1_reds" value="{{ old('hole_1_reds') }}"></td>
                                <td><input id="hole_1_ladies_par" type="text" class="form-control{{ $errors->has('hole_1_ladies_par') ? ' is-invalid' : '' }}" name="hole_1_ladies_par" value="{{ old('hole_1_ladies_par') }}"></td>
                                <td><input id="hole_1_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_1_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_1_ladies_white_stroke_index" value="{{ old('hole_1_ladies_white_stroke_index') }}"></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td><input id="hole_2_whites" type="text" class="form-control{{ $errors->has('hole_2_whites') ? ' is-invalid' : '' }}" name="hole_2_whites" value="{{ old('hole_2_whites') }}"></td>
                                <td><input id="hole_2_yellows" type="text" class="form-control{{ $errors->has('hole_2_yellows') ? ' is-invalid' : '' }}" name="hole_2_yellows" value="{{ old('hole_2_yellows') }}"></td>
                                <td><input id="hole_2_par" type="text" class="form-control{{ $errors->has('hole_2_par') ? ' is-invalid' : '' }}" name="hole_2_par" value="{{ old('hole_2_par') }}"></td>
                                <td><input id="hole_2_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_2_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_2_white_stroke_index" value="{{ old('hole_2_white_stroke_index') }}"></td>
                                <td><input id="hole_2_reds" type="text" class="form-control{{ $errors->has('hole_2_reds') ? ' is-invalid' : '' }}" name="hole_2_reds" value="{{ old('hole_2_reds') }}"></td>
                                <td><input id="hole_2_ladies_par" type="text" class="form-control{{ $errors->has('hole_2_ladies_par') ? ' is-invalid' : '' }}" name="hole_2_ladies_par" value="{{ old('hole_2_ladies_par') }}"></td>
                                <td><input id="hole_2_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_2_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_2_ladies_white_stroke_index" value="{{ old('hole_2_ladies_white_stroke_index') }}"></td>
                            </tr>                        

                            <tr>
                                <td>3</td>
                                <td><input id="hole_3_whites" type="text" class="form-control{{ $errors->has('hole_3_whites') ? ' is-invalid' : '' }}" name="hole_3_whites" value="{{ old('hole_3_whites') }}"></td>
                                <td><input id="hole_3_yellows" type="text" class="form-control{{ $errors->has('hole_3_yellows') ? ' is-invalid' : '' }}" name="hole_3_yellows" value="{{ old('hole_3_yellows') }}"></td>
                                <td><input id="hole_3_par" type="text" class="form-control{{ $errors->has('hole_3_par') ? ' is-invalid' : '' }}" name="hole_3_par" value="{{ old('hole_3_par') }}"></td>
                                <td><input id="hole_3_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_3_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_3_white_stroke_index" value="{{ old('hole_3_white_stroke_index') }}"></td>
                                <td><input id="hole_3_reds" type="text" class="form-control{{ $errors->has('hole_3_reds') ? ' is-invalid' : '' }}" name="hole_3_reds" value="{{ old('hole_3_reds') }}"></td>
                                <td><input id="hole_3_ladies_par" type="text" class="form-control{{ $errors->has('hole_3_ladies_par') ? ' is-invalid' : '' }}" name="hole_3_ladies_par" value="{{ old('hole_3_ladies_par') }}"></td>
                                <td><input id="hole_3_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_3_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_3_ladies_white_stroke_index" value="{{ old('hole_3_ladies_white_stroke_index') }}"></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td><input id="hole_4_whites" type="text" class="form-control{{ $errors->has('hole_4_whites') ? ' is-invalid' : '' }}" name="hole_4_whites" value="{{ old('hole_4_whites') }}"></td>
                                <td><input id="hole_4_yellows" type="text" class="form-control{{ $errors->has('hole_4_yellows') ? ' is-invalid' : '' }}" name="hole_4_yellows" value="{{ old('hole_4_yellows') }}"></td>
                                <td><input id="hole_4_par" type="text" class="form-control{{ $errors->has('hole_4_par') ? ' is-invalid' : '' }}" name="hole_4_par" value="{{ old('hole_4_par') }}"></td>
                                <td><input id="hole_4_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_4_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_4_white_stroke_index" value="{{ old('hole_4_white_stroke_index') }}"></td>
                                <td><input id="hole_4_reds" type="text" class="form-control{{ $errors->has('hole_4_reds') ? ' is-invalid' : '' }}" name="hole_4_reds" value="{{ old('hole_4_reds') }}"></td>
                                <td><input id="hole_4_ladies_par" type="text" class="form-control{{ $errors->has('hole_4_ladies_par') ? ' is-invalid' : '' }}" name="hole_4_ladies_par" value="{{ old('hole_4_ladies_par') }}"></td>
                                <td><input id="hole_4_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_4_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_4_ladies_white_stroke_index" value="{{ old('hole_4_ladies_white_stroke_index') }}"></td>
                            </tr>     

                            <tr>
                                <td>5</td>
                                <td><input id="hole_5_whites" type="text" class="form-control{{ $errors->has('hole_5_whites') ? ' is-invalid' : '' }}" name="hole_5_whites" value="{{ old('hole_5_whites') }}"></td>
                                <td><input id="hole_5_yellows" type="text" class="form-control{{ $errors->has('hole_5_yellows') ? ' is-invalid' : '' }}" name="hole_5_yellows" value="{{ old('hole_5_yellows') }}"></td>
                                <td><input id="hole_5_par" type="text" class="form-control{{ $errors->has('hole_5_par') ? ' is-invalid' : '' }}" name="hole_5_par" value="{{ old('hole_5_par') }}"></td>
                                <td><input id="hole_5_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_5_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_5_white_stroke_index" value="{{ old('hole_5_white_stroke_index') }}"></td>
                                <td><input id="hole_5_reds" type="text" class="form-control{{ $errors->has('hole_5_reds') ? ' is-invalid' : '' }}" name="hole_5_reds" value="{{ old('hole_5_reds') }}"></td>
                                <td><input id="hole_5_ladies_par" type="text" class="form-control{{ $errors->has('hole_5_ladies_par') ? ' is-invalid' : '' }}" name="hole_5_ladies_par" value="{{ old('hole_5_ladies_par') }}"></td>
                                <td><input id="hole_5_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_5_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_5_ladies_white_stroke_index" value="{{ old('hole_5_ladies_white_stroke_index') }}"></td>
                            </tr>                                           
                            
                            <tr>
                                <td>6</td>
                                <td><input id="hole_6_whites" type="text" class="form-control{{ $errors->has('hole_6_whites') ? ' is-invalid' : '' }}" name="hole_6_whites" value="{{ old('hole_6_whites') }}"></td>
                                <td><input id="hole_6_yellows" type="text" class="form-control{{ $errors->has('hole_6_yellows') ? ' is-invalid' : '' }}" name="hole_6_yellows" value="{{ old('hole_6_yellows') }}"></td>
                                <td><input id="hole_6_par" type="text" class="form-control{{ $errors->has('hole_6_par') ? ' is-invalid' : '' }}" name="hole_6_par" value="{{ old('hole_6_par') }}"></td>
                                <td><input id="hole_6_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_6_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_6_white_stroke_index" value="{{ old('hole_6_white_stroke_index') }}"></td>
                                <td><input id="hole_6_reds" type="text" class="form-control{{ $errors->has('hole_6_reds') ? ' is-invalid' : '' }}" name="hole_6_reds" value="{{ old('hole_6_reds') }}"></td>
                                <td><input id="hole_6_ladies_par" type="text" class="form-control{{ $errors->has('hole_6_ladies_par') ? ' is-invalid' : '' }}" name="hole_6_ladies_par" value="{{ old('hole_6_ladies_par') }}"></td>
                                <td><input id="hole_6_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_6_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_6_ladies_white_stroke_index" value="{{ old('hole_6_ladies_white_stroke_index') }}"></td>
                            </tr>                        
                            
                            <tr>
                                <td>7</td>
                                <td><input id="hole_7_whites" type="text" class="form-control{{ $errors->has('hole_7_whites') ? ' is-invalid' : '' }}" name="hole_7_whites" value="{{ old('hole_7_whites') }}"></td>
                                <td><input id="hole_7_yellows" type="text" class="form-control{{ $errors->has('hole_7_yellows') ? ' is-invalid' : '' }}" name="hole_7_yellows" value="{{ old('hole_7_yellows') }}"></td>
                                <td><input id="hole_7_par" type="text" class="form-control{{ $errors->has('hole_7_par') ? ' is-invalid' : '' }}" name="hole_7_par" value="{{ old('hole_7_par') }}"></td>
                                <td><input id="hole_7_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_7_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_7_white_stroke_index" value="{{ old('hole_7_white_stroke_index') }}"></td>
                                <td><input id="hole_7_reds" type="text" class="form-control{{ $errors->has('hole_7_reds') ? ' is-invalid' : '' }}" name="hole_7_reds" value="{{ old('hole_7_reds') }}"></td>
                                <td><input id="hole_7_ladies_par" type="text" class="form-control{{ $errors->has('hole_7_ladies_par') ? ' is-invalid' : '' }}" name="hole_7_ladies_par" value="{{ old('hole_7_ladies_par') }}"></td>
                                <td><input id="hole_7_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_7_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_7_ladies_white_stroke_index" value="{{ old('hole_7_ladies_white_stroke_index') }}"></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td><input id="hole_8_whites" type="text" class="form-control{{ $errors->has('hole_8_whites') ? ' is-invalid' : '' }}" name="hole_8_whites" value="{{ old('hole_8_whites') }}"></td>
                                <td><input id="hole_8_yellows" type="text" class="form-control{{ $errors->has('hole_8_yellows') ? ' is-invalid' : '' }}" name="hole_8_yellows" value="{{ old('hole_8_yellows') }}"></td>
                                <td><input id="hole_8_par" type="text" class="form-control{{ $errors->has('hole_8_par') ? ' is-invalid' : '' }}" name="hole_8_par" value="{{ old('hole_8_par') }}"></td>
                                <td><input id="hole_8_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_8_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_8_white_stroke_index" value="{{ old('hole_8_white_stroke_index') }}"></td>
                                <td><input id="hole_8_reds" type="text" class="form-control{{ $errors->has('hole_8_reds') ? ' is-invalid' : '' }}" name="hole_8_reds" value="{{ old('hole_8_reds') }}"></td>
                                <td><input id="hole_8_ladies_par" type="text" class="form-control{{ $errors->has('hole_8_ladies_par') ? ' is-invalid' : '' }}" name="hole_8_ladies_par" value="{{ old('hole_8_ladies_par') }}"></td>
                                <td><input id="hole_8_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_8_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_8_ladies_white_stroke_index" value="{{ old('hole_8_ladies_white_stroke_index') }}"></td>
                            </tr>     

                            <tr>
                                <td>9</td>
                                <td><input id="hole_9_whites" type="text" class="form-control{{ $errors->has('hole_9_whites') ? ' is-invalid' : '' }}" name="hole_9_whites" value="{{ old('hole_9_whites') }}"></td>
                                <td><input id="hole_9_yellows" type="text" class="form-control{{ $errors->has('hole_9_yellows') ? ' is-invalid' : '' }}" name="hole_9_yellows" value="{{ old('hole_9_yellows') }}"></td>
                                <td><input id="hole_9_par" type="text" class="form-control{{ $errors->has('hole_9_par') ? ' is-invalid' : '' }}" name="hole_9_par" value="{{ old('hole_9_par') }}"></td>
                                <td><input id="hole_9_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_9_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_9_white_stroke_index" value="{{ old('hole_9_white_stroke_index') }}"></td>
                                <td><input id="hole_9_reds" type="text" class="form-control{{ $errors->has('hole_9_reds') ? ' is-invalid' : '' }}" name="hole_9_reds" value="{{ old('hole_9_reds') }}"></td>
                                <td><input id="hole_9_ladies_par" type="text" class="form-control{{ $errors->has('hole_9_ladies_par') ? ' is-invalid' : '' }}" name="hole_9_ladies_par" value="{{ old('hole_9_ladies_par') }}"></td>
                                <td><input id="hole_9_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_9_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_9_ladies_white_stroke_index" value="{{ old('hole_9_ladies_white_stroke_index') }}"></td>
                            </tr>       

                            <tr>
                                <td>10</td>
                                <td><input id="hole_10_whites" type="text" class="form-control{{ $errors->has('hole_10_whites') ? ' is-invalid' : '' }}" name="hole_10_whites" value="{{ old('hole_10_whites') }}"></td>
                                <td><input id="hole_10_yellows" type="text" class="form-control{{ $errors->has('hole_10_yellows') ? ' is-invalid' : '' }}" name="hole_10_yellows" value="{{ old('hole_10_yellows') }}"></td>
                                <td><input id="hole_10_par" type="text" class="form-control{{ $errors->has('hole_10_par') ? ' is-invalid' : '' }}" name="hole_10_par" value="{{ old('hole_10_par') }}"></td>
                                <td><input id="hole_10_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_10_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_10_white_stroke_index" value="{{ old('hole_10_white_stroke_index') }}"></td>
                                <td><input id="hole_10_reds" type="text" class="form-control{{ $errors->has('hole_10_reds') ? ' is-invalid' : '' }}" name="hole_10_reds" value="{{ old('hole_10_reds') }}"></td>
                                <td><input id="hole_10_ladies_par" type="text" class="form-control{{ $errors->has('hole_10_ladies_par') ? ' is-invalid' : '' }}" name="hole_10_ladies_par" value="{{ old('hole_10_ladies_par') }}"></td>
                                <td><input id="hole_10_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_10_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_10_ladies_white_stroke_index" value="{{ old('hole_10_ladies_white_stroke_index') }}"></td>
                            </tr>      

                            <tr>
                                <td>11</td>
                                <td><input id="hole_11_whites" type="text" class="form-control{{ $errors->has('hole_11_whites') ? ' is-invalid' : '' }}" name="hole_11_whites" value="{{ old('hole_11_whites') }}"></td>
                                <td><input id="hole_11_yellows" type="text" class="form-control{{ $errors->has('hole_11_yellows') ? ' is-invalid' : '' }}" name="hole_11_yellows" value="{{ old('hole_11_yellows') }}"></td>
                                <td><input id="hole_11_par" type="text" class="form-control{{ $errors->has('hole_11_par') ? ' is-invalid' : '' }}" name="hole_11_par" value="{{ old('hole_11_par') }}"></td>
                                <td><input id="hole_11_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_11_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_11_white_stroke_index" value="{{ old('hole_11_white_stroke_index') }}"></td>
                                <td><input id="hole_11_reds" type="text" class="form-control{{ $errors->has('hole_11_reds') ? ' is-invalid' : '' }}" name="hole_11_reds" value="{{ old('hole_11_reds') }}"></td>
                                <td><input id="hole_11_ladies_par" type="text" class="form-control{{ $errors->has('hole_11_ladies_par') ? ' is-invalid' : '' }}" name="hole_11_ladies_par" value="{{ old('hole_11_ladies_par') }}"></td>
                                <td><input id="hole_11_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_11_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_11_ladies_white_stroke_index" value="{{ old('hole_11_ladies_white_stroke_index') }}"></td>
                            </tr>                                                                              

                            <tr>
                                <td>12</td>
                                <td><input id="hole_12_whites" type="text" class="form-control{{ $errors->has('hole_12_whites') ? ' is-invalid' : '' }}" name="hole_12_whites" value="{{ old('hole_12_whites') }}"></td>
                                <td><input id="hole_12_yellows" type="text" class="form-control{{ $errors->has('hole_12_yellows') ? ' is-invalid' : '' }}" name="hole_12_yellows" value="{{ old('hole_12_yellows') }}"></td>
                                <td><input id="hole_12_par" type="text" class="form-control{{ $errors->has('hole_12_par') ? ' is-invalid' : '' }}" name="hole_12_par" value="{{ old('hole_12_par') }}"></td>
                                <td><input id="hole_12_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_12_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_12_white_stroke_index" value="{{ old('hole_12_white_stroke_index') }}"></td>
                                <td><input id="hole_12_reds" type="text" class="form-control{{ $errors->has('hole_12_reds') ? ' is-invalid' : '' }}" name="hole_12_reds" value="{{ old('hole_12_reds') }}"></td>
                                <td><input id="hole_12_ladies_par" type="text" class="form-control{{ $errors->has('hole_12_ladies_par') ? ' is-invalid' : '' }}" name="hole_12_ladies_par" value="{{ old('hole_12_ladies_par') }}"></td>
                                <td><input id="hole_12_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_12_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_12_ladies_white_stroke_index" value="{{ old('hole_12_ladies_white_stroke_index') }}"></td>
                            </tr>

                            <tr>
                                <td>13</td>
                                <td><input id="hole_13_whites" type="text" class="form-control{{ $errors->has('hole_13_whites') ? ' is-invalid' : '' }}" name="hole_13_whites" value="{{ old('hole_13_whites') }}"></td>
                                <td><input id="hole_13_yellows" type="text" class="form-control{{ $errors->has('hole_13_yellows') ? ' is-invalid' : '' }}" name="hole_13_yellows" value="{{ old('hole_13_yellows') }}"></td>
                                <td><input id="hole_13_par" type="text" class="form-control{{ $errors->has('hole_13_par') ? ' is-invalid' : '' }}" name="hole_13_par" value="{{ old('hole_13_par') }}"></td>
                                <td><input id="hole_13_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_13_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_13_white_stroke_index" value="{{ old('hole_13_white_stroke_index') }}"></td>
                                <td><input id="hole_13_reds" type="text" class="form-control{{ $errors->has('hole_13_reds') ? ' is-invalid' : '' }}" name="hole_13_reds" value="{{ old('hole_13_reds') }}"></td>
                                <td><input id="hole_13_ladies_par" type="text" class="form-control{{ $errors->has('hole_13_ladies_par') ? ' is-invalid' : '' }}" name="hole_13_ladies_par" value="{{ old('hole_13_ladies_par') }}"></td>
                                <td><input id="hole_13_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_13_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_13_ladies_white_stroke_index" value="{{ old('hole_13_ladies_white_stroke_index') }}"></td>
                            </tr>         

                            <tr>
                                <td>14</td>
                                <td><input id="hole_14_whites" type="text" class="form-control{{ $errors->has('hole_14_whites') ? ' is-invalid' : '' }}" name="hole_14_whites" value="{{ old('hole_14_whites') }}"></td>
                                <td><input id="hole_14_yellows" type="text" class="form-control{{ $errors->has('hole_14_yellows') ? ' is-invalid' : '' }}" name="hole_14_yellows" value="{{ old('hole_14_yellows') }}"></td>
                                <td><input id="hole_14_par" type="text" class="form-control{{ $errors->has('hole_14_par') ? ' is-invalid' : '' }}" name="hole_14_par" value="{{ old('hole_14_par') }}"></td>
                                <td><input id="hole_14_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_14_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_14_white_stroke_index" value="{{ old('hole_14_white_stroke_index') }}"></td>
                                <td><input id="hole_14_reds" type="text" class="form-control{{ $errors->has('hole_14_reds') ? ' is-invalid' : '' }}" name="hole_14_reds" value="{{ old('hole_14_reds') }}"></td>
                                <td><input id="hole_14_ladies_par" type="text" class="form-control{{ $errors->has('hole_14_ladies_par') ? ' is-invalid' : '' }}" name="hole_14_ladies_par" value="{{ old('hole_14_ladies_par') }}"></td>
                                <td><input id="hole_14_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_14_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_14_ladies_white_stroke_index" value="{{ old('hole_14_ladies_white_stroke_index') }}"></td>
                            </tr>             

                            <tr>
                                <td>15</td>
                                <td><input id="hole_15_whites" type="text" class="form-control{{ $errors->has('hole_15_whites') ? ' is-invalid' : '' }}" name="hole_15_whites" value="{{ old('hole_15_whites') }}"></td>
                                <td><input id="hole_15_yellows" type="text" class="form-control{{ $errors->has('hole_15_yellows') ? ' is-invalid' : '' }}" name="hole_15_yellows" value="{{ old('hole_15_yellows') }}"></td>
                                <td><input id="hole_15_par" type="text" class="form-control{{ $errors->has('hole_15_par') ? ' is-invalid' : '' }}" name="hole_15_par" value="{{ old('hole_15_par') }}"></td>
                                <td><input id="hole_15_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_15_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_15_white_stroke_index" value="{{ old('hole_15_white_stroke_index') }}"></td>
                                <td><input id="hole_15_reds" type="text" class="form-control{{ $errors->has('hole_15_reds') ? ' is-invalid' : '' }}" name="hole_15_reds" value="{{ old('hole_15_reds') }}"></td>
                                <td><input id="hole_15_ladies_par" type="text" class="form-control{{ $errors->has('hole_15_ladies_par') ? ' is-invalid' : '' }}" name="hole_15_ladies_par" value="{{ old('hole_15_ladies_par') }}"></td>
                                <td><input id="hole_15_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_15_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_15_ladies_white_stroke_index" value="{{ old('hole_15_ladies_white_stroke_index') }}"></td>
                            </tr>     

                            <tr>
                                <td>16</td>
                                <td><input id="hole_16_whites" type="text" class="form-control{{ $errors->has('hole_16_whites') ? ' is-invalid' : '' }}" name="hole_16_whites" value="{{ old('hole_16_whites') }}"></td>
                                <td><input id="hole_16_yellows" type="text" class="form-control{{ $errors->has('hole_16_yellows') ? ' is-invalid' : '' }}" name="hole_16_yellows" value="{{ old('hole_16_yellows') }}"></td>
                                <td><input id="hole_16_par" type="text" class="form-control{{ $errors->has('hole_16_par') ? ' is-invalid' : '' }}" name="hole_16_par" value="{{ old('hole_16_par') }}"></td>
                                <td><input id="hole_16_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_16_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_16_white_stroke_index" value="{{ old('hole_16_white_stroke_index') }}"></td>
                                <td><input id="hole_16_reds" type="text" class="form-control{{ $errors->has('hole_16_reds') ? ' is-invalid' : '' }}" name="hole_16_reds" value="{{ old('hole_16_reds') }}"></td>
                                <td><input id="hole_16_ladies_par" type="text" class="form-control{{ $errors->has('hole_16_ladies_par') ? ' is-invalid' : '' }}" name="hole_16_ladies_par" value="{{ old('hole_16_ladies_par') }}"></td>
                                <td><input id="hole_16_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_16_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_16_ladies_white_stroke_index" value="{{ old('hole_16_ladies_white_stroke_index') }}"></td>
                            </tr>        

                            <tr>
                                <td>17</td>
                                <td><input id="hole_17_whites" type="text" class="form-control{{ $errors->has('hole_17_whites') ? ' is-invalid' : '' }}" name="hole_17_whites" value="{{ old('hole_17_whites') }}"></td>
                                <td><input id="hole_17_yellows" type="text" class="form-control{{ $errors->has('hole_17_yellows') ? ' is-invalid' : '' }}" name="hole_17_yellows" value="{{ old('hole_17_yellows') }}"></td>
                                <td><input id="hole_17_par" type="text" class="form-control{{ $errors->has('hole_17_par') ? ' is-invalid' : '' }}" name="hole_17_par" value="{{ old('hole_17_par') }}"></td>
                                <td><input id="hole_17_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_17_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_17_white_stroke_index" value="{{ old('hole_17_white_stroke_index') }}"></td>
                                <td><input id="hole_17_reds" type="text" class="form-control{{ $errors->has('hole_17_reds') ? ' is-invalid' : '' }}" name="hole_17_reds" value="{{ old('hole_17_reds') }}"></td>
                                <td><input id="hole_17_ladies_par" type="text" class="form-control{{ $errors->has('hole_17_ladies_par') ? ' is-invalid' : '' }}" name="hole_17_ladies_par" value="{{ old('hole_17_ladies_par') }}"></td>
                                <td><input id="hole_17_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_17_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_17_ladies_white_stroke_index" value="{{ old('hole_17_ladies_white_stroke_index') }}"></td>
                            </tr>        

                            <tr>
                                <td>18</td>
                                <td><input id="hole_18_whites" type="text" class="form-control{{ $errors->has('hole_18_whites') ? ' is-invalid' : '' }}" name="hole_18_whites" value="{{ old('hole_18_whites') }}"></td>
                                <td><input id="hole_18_yellows" type="text" class="form-control{{ $errors->has('hole_18_yellows') ? ' is-invalid' : '' }}" name="hole_18_yellows" value="{{ old('hole_18_yellows') }}"></td>
                                <td><input id="hole_18_par" type="text" class="form-control{{ $errors->has('hole_18_par') ? ' is-invalid' : '' }}" name="hole_18_par" value="{{ old('hole_18_par') }}"></td>
                                <td><input id="hole_18_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_18_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_18_white_stroke_index" value="{{ old('hole_18_white_stroke_index') }}"></td>
                                <td><input id="hole_18_reds" type="text" class="form-control{{ $errors->has('hole_18_reds') ? ' is-invalid' : '' }}" name="hole_18_reds" value="{{ old('hole_18_reds') }}"></td>
                                <td><input id="hole_18_ladies_par" type="text" class="form-control{{ $errors->has('hole_18_ladies_par') ? ' is-invalid' : '' }}" name="hole_18_ladies_par" value="{{ old('hole_18_ladies_par') }}"></td>
                                <td><input id="hole_18_ladies_white_stroke_index" type="text" class="form-control{{ $errors->has('hole_18_ladies_white_stroke_index') ? ' is-invalid' : '' }}" name="hole_18_ladies_white_stroke_index" value="{{ old('hole_18_ladies_white_stroke_index') }}"></td>
                            </tr>                                                                                                     
                        
                        </table>

                        <button type="submit" class="btn btn-cta">
                            <span>{{ __('Add Course') }}</span>
                        </button>

                    </form>

            </div>
            <!--/.container -->
@endsection
