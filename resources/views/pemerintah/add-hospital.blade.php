@extends('layout')

@section('meta-title')
    My Vacc | Add Hospital
@endsection

@section('content')
<div class="add-hospital">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Add Hospital</h1>

        <form action="{{route('add-hospital')}}" method="POST" class="form">
            @csrf
            <div class="form__input">
                <p class="text-regular">Hospital Name</p>
                <input type="text" class="input" name="name" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Email</p>
                <input type="e-mail" class="input" name="email" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Province</p>
                <select name="province" id="province" class="select" required>
                    <option value="" selected hidden>Select your province</option>
                </select>
            </div>
            
            <div class="form__input">
                <p class="text-regular">City / Regency</p>
                <select name="city" id="city" class="select" required>
                    <option value="" selected hidden>Select your city/regency</option>
                </select>
            </div>

            <div class="form__input">
                <p class="text-regular">Address</p>
                <input type="text" class="input" name="address" required>
            </div>
            
            <input type="submit" value="Add" class="cta cta--secondary margin-bottom-xs">
        </form>
    </div>
</div>
@endsection
