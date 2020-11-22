@extends('layout')

@section('meta-title')
    My Vacc | Edit Hospital
@endsection

@section('content')
<div class="edit-hospital">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Edit Hospital</h1>

        <form action="" class="form">

            <div class="form__input">
                <p class="text-regular">Hospital Name</p>
                <input type="text" class="input" name="hospital-name" required>
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
            
            <div class="form__input--horizontal">
                <input type="submit" value="Delete" class="cta cta--red">
                <input type="submit" value="Save" class="cta cta--secondary">
            </div>
        </form>
    </div>
</div>
@endsection