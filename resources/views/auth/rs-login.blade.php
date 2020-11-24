@extends('layout')

@section('meta-title')
    MyVacc | Log In
@endsection

@section('content')
<div class="login">
    <div class="container container--m">
        <h1 class="heading-2 margin-bottom-l">Log In (Rumah Sakit)</h1>
        <form action="{{route('rs-login')}}" method="POST" class="form">
            @csrf
            <div class="form__input">
                <p class="text-regular">E-mail</p>
                <input type="e-mail" class="input" name="email" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password" required>
            </div>
            
            <input type="submit" value="Log in" class="cta cta--secondary margin-bottom-xs">
            <p class="text-small">Don't have an account? <a href="/rs-register" class="link text-small">Register now</a></p>
        </form>
    </div>
</div>
@endsection