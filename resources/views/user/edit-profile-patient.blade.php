@extends('layout')

@section('meta-title')
    My Vacc | Edit Profile Patient 
@endsection

@section('content')
<div class="edit">
    <div class="container container--left container--m">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Edit Profile</h1>

        <form action="{{route('edit-profile-patient')}}" method="POST" class="form">
            @csrf
            <div class="form__input">
                <p class="text-regular">Name</p>
                <input type="text" class="input" name="name" value="{{$pasien->name}}">
            </div>

            <div class="form__input">
                <p class="text-regular">Email</p>
                <input type="text" class="input" name="email" value="{{$pasien->email}}" disabled>
            </div>

            <div class="form__input">
                <p class="text-regular">ID</p>
                <input type="text" class="input" name="id" value="{{$pasien->id}}" disabled>
            </div>

            <div class="form__input">
                <p class="text-regular">Password</p>
                <input type="password" class="input" name="password" placeholder="Fill in to change">
            </div>

            <div class="form__input">
                <p class="text-regular">NIK</p>
                <input type="text" class="input" name="nik" value="{{$pasien->nik}}">
            </div>

            <input type="submit" value="Save" class="cta cta--secondary margin-bottom-xs">
        </form>
    </div>
</div>
@endsection