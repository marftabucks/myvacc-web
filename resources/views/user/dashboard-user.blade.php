@extends('layout')

@section('meta-title')
    MyVacc | Dashboard User
@endsection

@section('content')
<div class="dashboard">
    <h1 class="heading-1 margin-bottom-xl">Dashboard User</h1>
    <p>Hello guys, ini dashboard user</p>
    <a href="{{route('form')}}" class="cta cta--large cta--secondary margin-bottom-xs">Register Vaccination</a>
</div>
@endsection