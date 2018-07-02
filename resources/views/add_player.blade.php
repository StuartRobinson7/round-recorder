@extends('layouts.app')

@section('title', 'Add Player')

@section('content')
    

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/add_player') }}">
            
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

            <label>First Name</label>
            <input type="text" class="name form-control" name="first_name[]" value="{{ old('name') }}">
            
            
            </form>


@endsection