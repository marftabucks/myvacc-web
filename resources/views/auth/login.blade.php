@extends('layout')

@section('meta-title')
    MyVacc | Log In
@endsection

@section('content')
<div class="login">
    <div class="container container--m">
        <h2 class="heading-2 margin-bottom-l">Log In</h1>
        <form action="{{route('login')}}" method="POST" class="form">
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
            <p class="text-small">Don't have an account? <a href="/register" class="link text-small">Register now</a></p>
            <p class="text-small mt-3 "><a href="{{route('rs-login')}}" class="link text-small">Login as Rumah Sakit</a></p>
            <p class="text-small mt-3 "><a href="{{route('pemerintah-login')}}" class="link text-small">Login as Pemerintah</a></p>
        </form>
        
    </div>
</div>
@endsection