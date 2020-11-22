@extends('layout')

@section('meta-title')
    MyVacc | Profile Hospital
@endsection

@section('content')
<div class="profile-hospital">
    <div class="container container--left container--l">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Hospital Profile</h1>

        <div class="profile-hospital__subcontainer">
            <p class="text-bold">Hospital Name</p>
            <p class="text-regular">Rumah Sakit Cinta Kasih Yesus</p>
        </div>

        <div class="profile-hospital__subcontainer">
            <p class="text-bold">Province</p>
            <p class="text-regular">Aceh</p>
        </div>

        <div class="profile-hospital__subcontainer">
            <p class="text-bold">City / Regency</p>
            <p class="text-regular">Kota Aceh</p>
        </div>

        <div class="profile-hospital__subcontainer margin-bottom-m">
            <p class="text-bold">Daily Quota</p>
            <p class="text-regular">250</p>
        </div>

        <div class="profile-hospital__subcontainer">
            <p class="text-bold">Working hours</p>
            <p class="text-regular">09:00 - 21:00</p>
        </div>
    </div>
</div>
@endsection
