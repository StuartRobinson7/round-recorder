@extends('layouts.app')

@section('title', 'Player List')

@section('content')
    
        <div class="container">

            <table class="table" style="width:100%">
                <thead>
                    <tr>    
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Handicap</th>
                        <th>Right/Left Handed</th>                 
                    </tr>                
                </thead>
                <tbody>
                @foreach($player as $key => $data)
                    <tr>    
                        <th>{{$data->id}}</th>
                        <th>{{$data->first_name}}</th>
                        <th>{{$data->last_name}}</th>
                        <th>{{$data->handicap}}</th>
                        <th>{{$data->hand}}</th>                 
                    </tr>
                @endforeach
                </tbody>

            </table>    

        </div>
        <!--/.container -->

@endsection