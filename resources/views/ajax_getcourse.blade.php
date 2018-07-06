<p> finally it works!!</p>


@foreach($course_data as $key => $par)                       
    
<table>

    <tr>
        <th>Hole</th>
        <th>Par</th>
        <th>Puts</th>
        <th>Drops</th>
        <th>FIR</th>
        <th>GIR</th>
    </tr>

    
    <tr>
        <td>1</td>
        <td>{{$par->hole_1_par}}</td>
        <td><input id="hole_1_score" type="text" class="form-control{{ $errors->has('hole_1_score') ? ' is-invalid' : '' }}" name="hole_1_score" value="{{ old('hole_1_score') }}"></td>
        <td><input id="hole_1_putts" type="text" class="form-control{{ $errors->has('hole_1_putts') ? ' is-invalid' : '' }}" name="hole_1_putts" value="{{ old('hole_1_putts') }}"></td>
        <td><input id="hole_1_drops" type="text" class="form-control{{ $errors->has('hole_1_drops') ? ' is-invalid' : '' }}" name="hole_1_drops" value="{{ old('hole_1_drops') }}"></td>
        <td><input id="hole_1_fir" type="checkbox" class="form-control" name="hole_1_fir" value="0"></td>
        <td><input id="hole_1_gir" type="checkbox" class="form-control" name="hole_1_gir" value="0"></td>
    </tr>

    
    <tr>
        <td>2</td>
        <td>{{$par->hole_2_par}}</td>
        <td><input id="hole_2_score" type="text" class="form-control{{ $errors->has('hole_2_score') ? ' is-invalid' : '' }}" name="hole_2_score" value="{{ old('hole_2_score') }}"></td>
        <td><input id="hole_2_putts" type="text" class="form-control{{ $errors->has('hole_2_putts') ? ' is-invalid' : '' }}" name="hole_2_putts" value="{{ old('hole_2_putts') }}"></td>
        <td><input id="hole_2_drops" type="text" class="form-control{{ $errors->has('hole_2_drops') ? ' is-invalid' : '' }}" name="hole_2_drops" value="{{ old('hole_2_drops') }}"></td>
        <td><input id="hole_2_fir" type="checkbox" class="form-control" name="hole_2_fir" value="0"></td>
        <td><input id="hole_2_gir" type="checkbox" class="form-control" name="hole_2_gir" value="0"></td>
    </tr>

    <tr>
        <td>3</td>
        <td>{{$par->hole_3_par}}</td>
        <td><input id="hole_3_score" type="text" class="form-control{{ $errors->has('hole_3_score') ? ' is-invalid' : '' }}" name="hole_3_score" value="{{ old('hole_3_score') }}"></td>
        <td><input id="hole_3_putts" type="text" class="form-control{{ $errors->has('hole_3_putts') ? ' is-invalid' : '' }}" name="hole_3_putts" value="{{ old('hole_3_putts') }}"></td>
        <td><input id="hole_3_drops" type="text" class="form-control{{ $errors->has('hole_3_drops') ? ' is-invalid' : '' }}" name="hole_3_drops" value="{{ old('hole_3_drops') }}"></td>
        <td><input id="hole_3_fir" type="checkbox" class="form-control" name="hole_3_fir" value="0"></td>
        <td><input id="hole_3_gir" type="checkbox" class="form-control" name="hole_3_gir" value="0"></td>
    </tr>

    <tr>
        <td>4</td>
        <td>{{$par->hole_4_par}}</td>
        <td><input id="hole_4_score" type="text" class="form-control{{ $errors->has('hole_4_score') ? ' is-invalid' : '' }}" name="hole_4_score" value="{{ old('hole_4_score') }}"></td>
        <td><input id="hole_4_putts" type="text" class="form-control{{ $errors->has('hole_4_putts') ? ' is-invalid' : '' }}" name="hole_4_putts" value="{{ old('hole_4_putts') }}"></td>
        <td><input id="hole_4_drops" type="text" class="form-control{{ $errors->has('hole_4_drops') ? ' is-invalid' : '' }}" name="hole_4_drops" value="{{ old('hole_4_drops') }}"></td>
        <td><input id="hole_4_fir" type="checkbox" class="form-control" name="hole_4_fir" value="0"></td>
        <td><input id="hole_4_gir" type="checkbox" class="form-control" name="hole_4_gir" value="0"></td>
    </tr>

    <tr>
        <td>5</td>
        <td>{{$par->hole_5_par}}</td>
        <td><input id="hole_5_score" type="text" class="form-control{{ $errors->has('hole_5_score') ? ' is-invalid' : '' }}" name="hole_5_score" value="{{ old('hole_5_score') }}"></td>
        <td><input id="hole_5_putts" type="text" class="form-control{{ $errors->has('hole_5_putts') ? ' is-invalid' : '' }}" name="hole_5_putts" value="{{ old('hole_5_putts') }}"></td>
        <td><input id="hole_5_drops" type="text" class="form-control{{ $errors->has('hole_5_drops') ? ' is-invalid' : '' }}" name="hole_5_drops" value="{{ old('hole_5_drops') }}"></td>
        <td><input id="hole_5_fir" type="checkbox" class="form-control" name="hole_5_fir" value="0"></td>
        <td><input id="hole_5_gir" type="checkbox" class="form-control" name="hole_5_gir" value="0"></td>
    </tr>

    <tr>
        <td>6</td>
        <td>{{$par->hole_6_par}}</td>
        <td><input id="hole_6_score" type="text" class="form-control{{ $errors->has('hole_6_score') ? ' is-invalid' : '' }}" name="hole_6_score" value="{{ old('hole_6_score') }}"></td>
        <td><input id="hole_6_putts" type="text" class="form-control{{ $errors->has('hole_6_putts') ? ' is-invalid' : '' }}" name="hole_6_putts" value="{{ old('hole_6_putts') }}"></td>
        <td><input id="hole_6_drops" type="text" class="form-control{{ $errors->has('hole_6_drops') ? ' is-invalid' : '' }}" name="hole_6_drops" value="{{ old('hole_6_drops') }}"></td>
        <td><input id="hole_6_fir" type="checkbox" class="form-control" name="hole_6_fir" value="0"></td>
        <td><input id="hole_6_gir" type="checkbox" class="form-control" name="hole_6_gir" value="0"></td>
    </tr>

    <tr>
        <td>7</td>
        <td>{{$par->hole_7_par}}</td>
        <td><input id="hole_7_score" type="text" class="form-control{{ $errors->has('hole_7_score') ? ' is-invalid' : '' }}" name="hole_7_score" value="{{ old('hole_7_score') }}"></td>
        <td><input id="hole_7_putts" type="text" class="form-control{{ $errors->has('hole_7_putts') ? ' is-invalid' : '' }}" name="hole_7_putts" value="{{ old('hole_7_putts') }}"></td>
        <td><input id="hole_7_drops" type="text" class="form-control{{ $errors->has('hole_7_drops') ? ' is-invalid' : '' }}" name="hole_7_drops" value="{{ old('hole_7_drops') }}"></td>
        <td><input id="hole_7_fir" type="checkbox" class="form-control" name="hole_7_fir" value="0"></td>
        <td><input id="hole_7_gir" type="checkbox" class="form-control" name="hole_7_gir" value="0"></td>
    </tr>

    <tr>
        <td>8</td>
        <td>{{$par->hole_8_par}}</td>
        <td><input id="hole_8_score" type="text" class="form-control{{ $errors->has('hole_8_score') ? ' is-invalid' : '' }}" name="hole_8_score" value="{{ old('hole_8_score') }}"></td>
        <td><input id="hole_8_putts" type="text" class="form-control{{ $errors->has('hole_8_putts') ? ' is-invalid' : '' }}" name="hole_8_putts" value="{{ old('hole_8_putts') }}"></td>
        <td><input id="hole_8_drops" type="text" class="form-control{{ $errors->has('hole_8_drops') ? ' is-invalid' : '' }}" name="hole_8_drops" value="{{ old('hole_8_drops') }}"></td>
        <td><input id="hole_8_fir" type="checkbox" class="form-control" name="hole_8_fir" value="0"></td>
        <td><input id="hole_8_gir" type="checkbox" class="form-control" name="hole_8_gir" value="0"></td>
    </tr>

    <tr>
        <td>9</td>
        <td>{{$par->hole_9_par}}</td>
        <td><input id="hole_9_score" type="text" class="form-control{{ $errors->has('hole_9_score') ? ' is-invalid' : '' }}" name="hole_9_score" value="{{ old('hole_9_score') }}"></td>
        <td><input id="hole_9_putts" type="text" class="form-control{{ $errors->has('hole_9_putts') ? ' is-invalid' : '' }}" name="hole_9_putts" value="{{ old('hole_9_putts') }}"></td>
        <td><input id="hole_9_drops" type="text" class="form-control{{ $errors->has('hole_9_drops') ? ' is-invalid' : '' }}" name="hole_9_drops" value="{{ old('hole_9_drops') }}"></td>
        <td><input id="hole_9_fir" type="checkbox" class="form-control" name="hole_9_fir" value="0"></td>
        <td><input id="hole_9_gir" type="checkbox" class="form-control" name="hole_9_gir" value="0"></td>
    </tr>

    <tr>
        <td>10</td>
        <td>{{$par->hole_10_par}}</td>
        <td><input id="hole_10_score" type="text" class="form-control{{ $errors->has('hole_10_score') ? ' is-invalid' : '' }}" name="hole_10_score" value="{{ old('hole_10_score') }}"></td>
        <td><input id="hole_10_putts" type="text" class="form-control{{ $errors->has('hole_10_putts') ? ' is-invalid' : '' }}" name="hole_10_putts" value="{{ old('hole_10_putts') }}"></td>
        <td><input id="hole_10_drops" type="text" class="form-control{{ $errors->has('hole_10_drops') ? ' is-invalid' : '' }}" name="hole_10_drops" value="{{ old('hole_10_drops') }}"></td>
        <td><input id="hole_10_fir" type="checkbox" class="form-control" name="hole_10_fir" value="0"></td>
        <td><input id="hole_10_gir" type="checkbox" class="form-control" name="hole_10_gir" value="0"></td>
    </tr>

    <tr>
        <td>11</td>
        <td>{{$par->hole_11_par}}</td>
        <td><input id="hole_11_score" type="text" class="form-control{{ $errors->has('hole_11_score') ? ' is-invalid' : '' }}" name="hole_11_score" value="{{ old('hole_11_score') }}"></td>
        <td><input id="hole_11_putts" type="text" class="form-control{{ $errors->has('hole_11_putts') ? ' is-invalid' : '' }}" name="hole_11_putts" value="{{ old('hole_11_putts') }}"></td>
        <td><input id="hole_11_drops" type="text" class="form-control{{ $errors->has('hole_11_drops') ? ' is-invalid' : '' }}" name="hole_11_drops" value="{{ old('hole_11_drops') }}"></td>
        <td><input id="hole_11_fir" type="checkbox" class="form-control" name="hole_11_fir" value="0"></td>
        <td><input id="hole_11_gir" type="checkbox" class="form-control" name="hole_11_gir" value="0"></td>
    </tr>

    <tr>
        <td>12</td>
        <td>{{$par->hole_12_par}}</td>
        <td><input id="hole_12_score" type="text" class="form-control{{ $errors->has('hole_12_score') ? ' is-invalid' : '' }}" name="hole_12_score" value="{{ old('hole_12_score') }}"></td>
        <td><input id="hole_12_putts" type="text" class="form-control{{ $errors->has('hole_12_putts') ? ' is-invalid' : '' }}" name="hole_12_putts" value="{{ old('hole_12_putts') }}"></td>
        <td><input id="hole_12_drops" type="text" class="form-control{{ $errors->has('hole_12_drops') ? ' is-invalid' : '' }}" name="hole_12_drops" value="{{ old('hole_12_drops') }}"></td>
        <td><input id="hole_12_fir" type="checkbox" class="form-control" name="hole_12_fir" value="0"></td>
        <td><input id="hole_12_gir" type="checkbox" class="form-control" name="hole_12_gir" value="0"></td>
    </tr>

    <tr>
        <td>13</td>
        <td>{{$par->hole_13_par}}</td>
        <td><input id="hole_13_score" type="text" class="form-control{{ $errors->has('hole_13_score') ? ' is-invalid' : '' }}" name="hole_13_score" value="{{ old('hole_13_score') }}"></td>
        <td><input id="hole_13_putts" type="text" class="form-control{{ $errors->has('hole_13_putts') ? ' is-invalid' : '' }}" name="hole_13_putts" value="{{ old('hole_13_putts') }}"></td>
        <td><input id="hole_13_drops" type="text" class="form-control{{ $errors->has('hole_13_drops') ? ' is-invalid' : '' }}" name="hole_13_drops" value="{{ old('hole_13_drops') }}"></td>
        <td><input id="hole_13_fir" type="checkbox" class="form-control" name="hole_13_fir" value="0"></td>
        <td><input id="hole_13_gir" type="checkbox" class="form-control" name="hole_13_gir" value="0"></td>
    </tr>

    <tr>
        <td>14</td>
        <td>{{$par->hole_14_par}}</td>
        <td><input id="hole_14_score" type="text" class="form-control{{ $errors->has('hole_14_score') ? ' is-invalid' : '' }}" name="hole_14_score" value="{{ old('hole_14_score') }}"></td>
        <td><input id="hole_14_putts" type="text" class="form-control{{ $errors->has('hole_14_putts') ? ' is-invalid' : '' }}" name="hole_14_putts" value="{{ old('hole_14_putts') }}"></td>
        <td><input id="hole_14_drops" type="text" class="form-control{{ $errors->has('hole_14_drops') ? ' is-invalid' : '' }}" name="hole_14_drops" value="{{ old('hole_14_drops') }}"></td>
        <td><input id="hole_14_fir" type="checkbox" class="form-control" name="hole_14_fir" value="0"></td>
        <td><input id="hole_14_gir" type="checkbox" class="form-control" name="hole_14_gir" value="0"></td>
    </tr>

    <tr>
        <td>15</td>
        <td>{{$par->hole_15_par}}</td>
        <td><input id="hole_15_score" type="text" class="form-control{{ $errors->has('hole_15_score') ? ' is-invalid' : '' }}" name="hole_15_score" value="{{ old('hole_15_score') }}"></td>
        <td><input id="hole_15_putts" type="text" class="form-control{{ $errors->has('hole_15_putts') ? ' is-invalid' : '' }}" name="hole_15_putts" value="{{ old('hole_15_putts') }}"></td>
        <td><input id="hole_15_drops" type="text" class="form-control{{ $errors->has('hole_15_drops') ? ' is-invalid' : '' }}" name="hole_15_drops" value="{{ old('hole_15_drops') }}"></td>
        <td><input id="hole_15_fir" type="checkbox" class="form-control" name="hole_15_fir" value="0"></td>
        <td><input id="hole_15_gir" type="checkbox" class="form-control" name="hole_15_gir" value="0"></td>
    </tr>

    <tr>
        <td>16</td>
        <td>{{$par->hole_16_par}}</td>
        <td><input id="hole_16_score" type="text" class="form-control{{ $errors->has('hole_16_score') ? ' is-invalid' : '' }}" name="hole_16_score" value="{{ old('hole_16_score') }}"></td>
        <td><input id="hole_16_putts" type="text" class="form-control{{ $errors->has('hole_16_putts') ? ' is-invalid' : '' }}" name="hole_16_putts" value="{{ old('hole_16_putts') }}"></td>
        <td><input id="hole_16_drops" type="text" class="form-control{{ $errors->has('hole_16_drops') ? ' is-invalid' : '' }}" name="hole_16_drops" value="{{ old('hole_16_drops') }}"></td>
        <td><input id="hole_16_fir" type="checkbox" class="form-control" name="hole_16_fir" value="0"></td>
        <td><input id="hole_16_gir" type="checkbox" class="form-control" name="hole_16_gir" value="0"></td>
    </tr>

    <tr>
        <td>17</td>
        <td>{{$par->hole_17_par}}</td>
        <td><input id="hole_17_score" type="text" class="form-control{{ $errors->has('hole_17_score') ? ' is-invalid' : '' }}" name="hole_17_score" value="{{ old('hole_17_score') }}"></td>
        <td><input id="hole_17_putts" type="text" class="form-control{{ $errors->has('hole_17_putts') ? ' is-invalid' : '' }}" name="hole_17_putts" value="{{ old('hole_17_putts') }}"></td>
        <td><input id="hole_17_drops" type="text" class="form-control{{ $errors->has('hole_17_drops') ? ' is-invalid' : '' }}" name="hole_17_drops" value="{{ old('hole_17_drops') }}"></td>
        <td><input id="hole_17_fir" type="checkbox" class="form-control" name="hole_17_fir" value="0"></td>
        <td><input id="hole_17_gir" type="checkbox" class="form-control" name="hole_17_gir" value="0"></td>
    </tr>

    <tr>
        <td>18</td>
        <td>{{$par->hole_18_par}}</td>
        <td><input id="hole_18_score" type="text" class="form-control{{ $errors->has('hole_18_score') ? ' is-invalid' : '' }}" name="hole_18_score" value="{{ old('hole_18_score') }}"></td>
        <td><input id="hole_18_putts" type="text" class="form-control{{ $errors->has('hole_18_putts') ? ' is-invalid' : '' }}" name="hole_18_putts" value="{{ old('hole_18_putts') }}"></td>
        <td><input id="hole_18_drops" type="text" class="form-control{{ $errors->has('hole_18_drops') ? ' is-invalid' : '' }}" name="hole_18_drops" value="{{ old('hole_18_drops') }}"></td>
        <td><input id="hole_18_fir" type="checkbox" class="form-control" name="hole_18_fir" value="0"></td>
        <td><input id="hole_18_gir" type="checkbox" class="form-control" name="hole_18_gir" value="0"></td>
    </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
</table>

@endforeach
