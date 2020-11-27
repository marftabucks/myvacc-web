@extends('layout')

@section('meta-title')
    MyVacc | Register
@endsection

@section('content')
<div class="login">
    <div class="container container--m">
        <h2 class="heading-2 margin-bottom-l">Register</h1>

        <form action="{{route('register')}}" method="post" class="form" enctype="multipart/form-data">
            @csrf
            <div class="form__input">
                <p class="text-regular">Full Name</p>
                <input type="text" class="input" name="name" required>
            </div>

            <div class="form__input">
                <p class="text-regular">NIK</p>
                <input type="text" class="input" name="nik" required>
            </div>

            <div class="form__input">
                <p class="text-regular">E-mail</p>
                <input type="e-mail" class="input" name="email" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Selfie with ID Card</p>
                <input type="file" name="file" id="file" required>
            </div>
            
            <input type="submit" value="Register" class="cta cta--secondary margin-bottom-xs">
            <p class="text-small">Already have an account? <a href="/login" class="link text-small">Log in</a></p>
        </form>
    </div>
</div>
@stop