@extends('layout')

@section('content')
    Dashboard User
    @if (auth()->user())
        <p>LOGGED IN</p>
    @else  
        <p>NOT LOGGED IN</p>
    @endif
@stop