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

        <form action="" class="form">

            <div class="form__input">
                <p class="text-regular">Full Name</p>
                <input type="text" class="input" name="name" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Province</p>
                <select name="province" id="province" class="select">
                    <option value="" selected hidden>Select your province</option>
                    <option value="">Province 1</option>
                </select>
            </div>

            <div class="form__input">
                <p class="text-regular">City / Regency</p>
                <select name="city" id="city" class="select">
                    <option value="" selected hidden>Select your city/regency</option>
                    <option value="">City 1</option>
                </select>
            </div>

            <div class="form__input">
                <p class="text-regular">Hospital</p>
                <select name="city" id="city" class="select">
                    <option value="" selected hidden>Select your preferred hospital</option>
                    <option value="">Hospital 1</option>
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