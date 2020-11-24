@extends('layout')

@section('meta-title')
    My Vacc | Edit Profile Patient 
@endsection

@section('content')
<div class="edit">
    <div class="container container--left container--m">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Edit Profile</h1>

        <form action="" class="form">

            <div class="form__input">
                <p class="text-regular">E-mail</p>
                <input type="e-mail" class="input" name="email" placeholder="sputra@gmail.com" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password" placeholder="" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Province</p>
                <select name="province" id="province" class="select">
                    <option value="" selected hidden>Select your province</option>
                </select>
            </div>

            <div class="form__input">
                <p class="text-regular">City / Regency</p>
                <select name="city" id="city" class="select">
                    <option value="" selected hidden>Select your city/regency</option>
                </select>
            </div>

            <input type="submit" value="Save" class="cta cta--secondary margin-bottom-xs">
        </form>
    </div>
</div>
@endsection