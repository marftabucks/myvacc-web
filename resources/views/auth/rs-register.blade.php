@extends('layout')

@section('meta-title')
    MyVacc | Register Hospital
@endsection

@section('content')
<div class="login">
    <div class="container container--m">
        <h2 class="heading-2 margin-bottom-l">Register</h1>

        <form action="{{route('admin-register')}}" method="post" class="form">
            @csrf
            <div class="form__input">
                <p class="text-regular">Hospital Name</p>
                <input type="text" class="input" name="name" required>
            </div>

            <div class="form__input">
                <p class="text-regular">E-mail</p>
                <input type="e-mail" class="input" name="email" required>
            </div>

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password" required>
            </div>
            
            <input type="submit" value="Register" class="cta cta--secondary margin-bottom-xs">
        </form>
    </div>
</div>
@stop