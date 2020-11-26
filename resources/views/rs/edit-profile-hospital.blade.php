@extends('layout')

@section('meta-title')
    MyVacc | Edit Profile Hospital
@endsection

@section('content')
<div class="edit">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Edit Profile</h1>

        <form action="{{route('rs-edit-profile')}}" method="POST" class="form">
            @csrf
            <div class="form__input">
                <p class="text-regular">Name</p>
                <input type="text" class="input" name="name" value="{{$hospital->name}}">
            </div>

            <div class="form__input">
                <p class="text-regular">Email</p>
                <input type="text" class="input" name="email" value="{{$hospital->email}}" readonly>
            </div>

            <div class="form__input">
                <p class="text-regular">ID</p>
                <input type="text" class="input" name="id" value="{{$hospital->id}}" readonly>
            </div>

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password" placeholder="Fill in to change">
            </div>

            <div class="form__input">
                <p class="text-regular">Province</p>
                <select name="province" id="province" class="select" required>
                    <option value="{{$hospital->province}}" selected hidden>{{$hospital->province}}</option>
                </select>
            </div>
            
            <div class="form__input">
                <p class="text-regular">City / Regency</p>
                <select name="city" id="city" class="select" required>
                    <option value="{{$hospital->city}}" selected hidden>{{$hospital->city}}</option>
                </select>
            </div>

            <div class="form__input">
                <p class="text-regular">Address</p>
                <input type="text" class="input" name="address" value="{{$hospital->address}}" required>
            </div>
            

            <input type="submit" value="Save" class="cta cta--secondary margin-bottom-xs">
        </form>
    </div>
</div>
@endsection