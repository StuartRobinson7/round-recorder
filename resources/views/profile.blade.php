@extends('layouts.app')

@section('title', 'Add Player')

@section('content')
    
        <h1>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1>
        <h2>{{ Auth::user()->hand }} Hand</h2>
        <h3>Playing off {{ Auth::user()->handicap }}</h3>


@endsection