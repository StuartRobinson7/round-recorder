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
                        <th></th>
                        <th></th>                 
                    </tr>                
                </thead>
                <tbody>
                @foreach($course_list as $key => $data)
                    <tr>    
                        <td>{{$data->id}}</td>
                        <td>{{$data->property_name}}</td>
                        <td>{{$data->course_name}}</td>
                        <td><a href="{{action('CourseController@edit', $data['id'])}}" class="btn btn-warning">Edit</a></td>
                        <td>
                        <form action="{{action('CourseController@destroy', $data['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>                        
                        </td>                 
                    </tr>
                @endforeach
                </tbody>

            </table>    

        </div>
        <!--/.container -->

@endsection