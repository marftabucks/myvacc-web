@extends('layout')

@section('content')
    My Vacc | Edit Hospital
@endsection

@section('content')
<div class="edit-hospital">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xs align-self-center">Edit Hospital</h1>

        <form action="" class="form">

            <div class="form__input">
                <p class="text-regular">Hospital Name</p>
                <input type="text" class="input" name="hospital_name" required>
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
                <select name="province" id="province" class="select">
                    <option value="" selected hidden>Select your province</option>
                    <option value="">Jawa Barat</option>
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
                <p class="text-regular">Address</p>
                <input type="text" class="input" name="address" required>
            </div>
            
            <input type="reset" value="Delete" class="cta cta--secondary margin-bottom-xs">
            <input type="submit" value="Save" class="cta cta--secondary margin-bottom-xs">
            
        </form>
    </div>
</div>
@endsection