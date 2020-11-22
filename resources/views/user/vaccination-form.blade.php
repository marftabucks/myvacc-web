@extends('layout')

@section('meta-title')
    MyVacc | Vaccination Registration
@endsection

@section('content')
<div class="vaccination-form">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xs align-self-center">Vaccination Form</h1>
        <p class="status status--success margin-bottom-xl">Your account is verified</p>

        <!-- <p class="status status--alert margin-bottom-xl">Your account is not verified</p> -->

        <form action="{{route('form')}}" method="post" class="form">
            @csrf
            <div class="form__input">
                <p class="text-regular">Full Name</p>
                <input type="text" class="input" id="name" name="name" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Province</p>
                <select name="province" id="province" class="select">
                    <option value="" selected hidden>Select your province</option>
                    <option value="Province 1">Province 1</option>
                </select>
            </div>

            <div class="form__input">
                <p class="text-regular">City / Regency</p>
                <select name="city" id="city" class="select">
                    <option value="" selected hidden>Select your city/regency</option>
                    <option value="City 1">City 1</option>
                    <option value="City 2">City 2</option>
                    <option value="City 3">City 3</option>
                </select>
            </div>

            <div class="form__input">
                <p class="text-regular">Hospital</p>
                <select name="hospital" id="hospital" class="select">
                    <option value="" selected hidden>Select your preferred hospital</option>
                    <option value="Hospital 1">Hospital 1</option>
                    <option value="Hospital 2">Hospital 2</option>
                    <option value="Hospital 3">Hospital 3</option>
                    <option value="Hospital 4">Hospital 4</option>
                </select>
            </div>

            <div class="form__input--horizontal">
                <div class="form__input width-60">
                    <p class="text-regular">Date</p>
                    <input type="date" name="date" id="date" class="input" min="" max="">
                </div>
                <div class="form__input width-35">
                    <p class="text-regular">Time</p>
                    <input type="time" name="time" id="time" class="input">
                </div>
            </div>
            
            <input type="submit" value="Register" class="cta cta--secondary margin-bottom-xs">
        </form>
    </div>
</div>
@endsection