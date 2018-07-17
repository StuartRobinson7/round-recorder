@extends('layouts.app')

@section('title', 'Course List')

@section('content')
    
        <div class="container">

            <table class="table" style="width:100%">
                <thead>
                    <tr>    
                        <th>ID</th>
                        <th>Property Name</th>
                        <th>Course Name</th>
                        <th>Course Rating</th>
                        <th>Course Slope</th>                 
                    </tr>                
                </thead>
                <tbody>
                @foreach($course as $key => $data)
                    <tr>    
                        <th>{{$data->id}}</th>
                        <th>{{$data->property_name}}</th>
                        <th>{{$data->course_name}}</th>
                        <th>{{$data->course_rating}}</th>
                        <th>{{$data->course_slope}}</th>                 
                    </tr>
                @endforeach
                </tbody>

            </table>    

        </div>
        <!--/.container -->

@endsection