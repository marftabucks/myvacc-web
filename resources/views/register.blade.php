@extends('layout')

@section('meta-title')
    MyVacc | Register
@endsection

@section('content')
<div class="login">
    <div class="container container--m">
        <h2 class="heading-2 margin-bottom-l">Register</h1>

        <form action="" class="form">

            <div class="form__input">
                <p class="text-regular">Full Name</p>
                <input type="text" class="input" name="name">
            </div>

            <div class="form__input">
                <p class="text-regular">NIK</p>
                <input type="text" class="input" name="nik">
            </div>

            <div class="form__input">
                <p class="text-regular">E-mail</p>
                <input type="e-mail" class="input" name="email">
            </div>

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password">
            </div>

            <div class="form__input">
                <p class="text-regular">Selfie with ID Card</p>
                <input type="file" name="selfie" id="selfie">
            </div>
            
            <input type="submit" value="Register" class="cta cta--secondary margin-bottom-xs">
            <p class="text-small">Already have an account? <a href="#" class="link text-small">Log in</a></p>
        </form>
    </div>
</div>
@stop