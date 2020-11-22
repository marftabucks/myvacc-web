@extends('layout')

@section('meta-title')
    MyVacc | Edit Profile Hospital
@endsection

@section('content')
<div class="edit-hospital">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Edit Profile</h1>

        <form action="" class="form">

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Daily Quota</p>
                <input type="text" class="input" name="Daily-quota" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Working Hours (Open)</p>
                <select name="work_hours" id="work_hours" class="select" required>
                    <option value="" selected hidden>Open Time</option>
                    <option value="">06:00</option>
                    <option value="">07:00</option>
                    <option value="">08:00</option>
                    <option value="">09:00</option>
                    <option value="">10:00</option>
                    <option value="">24 Hours</option>
                </select>
            </div>
            
            <div class="form__input">
                <p class="text-regular">Working Hours (Close)</p>
                <select name="work_hours" id="work_hours" class="select" required>
                    <option value="" selected hidden>Close Time</option>
                    <option value="">20:00</option>
                    <option value="">21:00</option>
                    <option value="">22:00</option>
                    <option value="">23:00</option>
                    <option value="">00:00</option>
                    <option value="">01:00</option>
                </select>
            </div>
            
            <div class="form__input">
                <p class="text-regular">Accept Vaccination</p>
                <select name="acc_vacc" id="acc_vacc" class="select" required>
                    <option value="" selected hidden>Yes/No</option>
                    <option value="">Yes</option>
                    <option value="">No</option>
                </select>
            </div>

            <input type="submit" value="Save" class="cta cta--secondary margin-bottom-xs">
        </form>
    </div>
</div>
@endsection