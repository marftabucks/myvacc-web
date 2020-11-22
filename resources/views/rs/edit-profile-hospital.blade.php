@extends('layout')

@section('meta-title')
    MyVacc | Edit Profile Hospital
@endsection

@section('content')
<div class="edit">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Edit Profile</h1>

        <form action="" class="form">

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Daily Quota</p>
                <input type="text" class="input" name="quota" placeholder="250" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Working Hours (Open)</p>
                <input type="time" name="time" id="time" class="input">
            </div>
            
            <div class="form__input">
                <p class="text-regular">Working Hours (Close)</p>
                <input type="time" name="time" id="time" class="input">
            </div>
            
            <div class="form__input">
                <p class="text-regular">Accept Vaccination</p>
                <select name="accept-vacc" class="select" required>
                    <option selected hidden>Yes/No</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <input type="submit" value="Save" class="cta cta--secondary margin-bottom-xs">
        </form>
    </div>
</div>
@endsection