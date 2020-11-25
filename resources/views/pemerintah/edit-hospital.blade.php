@extends('layout')

@section('meta-title')
    My Vacc | Edit Hospital
@endsection

@section('content')
<div class="edit">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Edit Hospital</h1>
        <form action="{{route('edit-hospital')}}" method="POST" class="form">
            @csrf
            <div class="form__input">
                <p class="text-regular">Hospital ID</p>
                <input type="text" class="input" name="id" value="{{$hospital->id}}" readonly required>
            </div>

            <div class="form__input">
                <p class="text-regular">Email</p>
                <input type="e-mail" class="input" name="email" value="{{$hospital->email}}"readonly required>
            </div>

            <div class="form__input">
                <p class="text-regular">Hospital Name</p>
                <input type="text" class="input" name="name" value="{{$hospital->name}}"  required>
            </div>

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" placeholder="Fill in to change" name="password">
            </div>

            <div class="form__input">
                <p class="text-regular">Province : </p>
                <select name="province" id="province" class="select">
                    <option value="{{$hospital->province}}" selected hidden>{{$hospital->province}}</option>
                </select>
            </div>
            
            <div class="form__input">
                <p class="text-regular">City / Regency</p>
                <select name="city" id="city" class="select">
                    <option value="{{$hospital->city}}" selected hidden>{{$hospital->city}}</option>
                </select>
            </div>

            <div class="form__input">
                <p class="text-regular">Address</p>
                <input type="text" class="input" name="address" value="{{$hospital->address}}" required>
            </div>
            
            <div class="form__input--horizontal">
                <input type="submit" name="submit" value="Delete" class="cta cta--red">
                <input type="submit" name="submit" value="Save" class="cta cta--secondary">
            </div>
        </form>
    </div>
</div>
@endsection