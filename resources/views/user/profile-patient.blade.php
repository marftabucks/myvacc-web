@extends('layout')

@section('meta-title')
    Profile Patient
@endsection

@section('content')
<div class="profile-patient">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xs align-self-center">Patient Profile</h1>
        <p class="status status--success margin-bottom-xl">Your account is verified</p>

        <!-- <p class="status status--alert margin-bottom-xl">Your account is not verified</p> -->

        <div class="profile-patient__flex-container">
            <div class="profile-patient__subcontainer">
                <p class="text-bold">Full Name</p>
                <p class="text-regular">Muhammad Yesus Sidartha</p>
            </div>
            <a href="/edit-profile-patient" class="cta cta--white">Edit Profile</a>
        </div>
        
        <div class="profile-patient__subcontainer">
            <p class="text-bold">NIK</p>
            <p class="text-regular">461000008157236</p>
        </div>
        
        <div class="profile-patient__subcontainer">
            <p class="text-bold">E-mail</p>
            <p class="text-regular">m.yesusidartha@gmail.com</p>
        </div>
        
        <div class="profile-patient__subcontainer">
            <p class="text-bold">Province</p>
            <p class="text-regular">Papua</p>
        </div>

        <div class="profile-patient__subcontainer">
            <p class="text-bold">City / Regency</p>
            <p class="text-regular">Kabupaten Fakfak</p>
        </div>
    </div>
</div>
@endsection
