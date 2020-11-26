@extends('layout')

@section('meta-title')
    MyVacc | Vaccination Registration
@endsection

@section('content')
<div class="vaccination-form">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xs align-self-center">Vaccination Form</h1>
        <p class="status status--success margin-bottom-xl">Your account is verified</p>
        <form action="{{route('form')}}" method="post" class="form">
            @csrf
            <div class="form__input">
                <p class="text-regular">Full Name</p>
                <input type="text" class="input" id="name" name="name" value="{{$user->name}}" readonly required>
            </div>

            <div class="form__input">
                <p class="text-regular">Hospital</p>
                <select name="hospital" id="hospital" class="select" required>
                    <option value="" selected hidden>Select your preferred hospital</option>
                    @foreach ($hospitals as $hospital)
                        <option value="{{$hospital->id}}">{{$hospital->name}} ({{$hospital->province}}-{{$hospital->city}})</option>    
                    @endforeach
                </select>
            </div>

            <div class="form__input width-100">
                <p class="text-regular">Date</p>
                <input type="date" name="date" id="date" class="input" min="" max="" required>

            <input type="submit" value="Next" class="cta cta--secondary margin-bottom-xs">
        </form>
        
    </div>
</div>
@endsection