
    <option value="" disabled selected>Please Select</option>

@foreach($course as $key => $data)
    <option value="{{$data->id}}" {{ (old("course_id") == $data->id ? "selected":"") }}>{{$data->property_name}} - {{$data->course_name}}</option>
@endforeach

