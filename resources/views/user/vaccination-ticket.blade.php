@extends('layout')

@section('meta-title')
    MyVacc | Vaccination Ticket
@endsection

@section('content')
<div class="vaccination-ticket">
    <div class="container container--left container--l">
        <h2 class="heading-2 margin-bottom-xl align-self-center">Vaccination Ticket</h1>

        @if($user->filled_form == 0)
            <p class="status status--alert margin-bottom-xl">Fill the vaccination form first</p>
            <a href="{{route('form')}}">Vaccination Form</a>
        @else
        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Vaccination ID</p>
            <p class="text-regular">235252</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Full Name</p>
            <p class="text-regular">Setyawan Putra</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Hospital</p>
            <p class="text-regular">Gadjah Mada Medical Center</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Province</p>
            <p class="text-regular">Special Region of Yogyakarta</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">City / Regency</p>
            <p class="text-regular">Sleman Regency</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Address</p>
            <p class="text-regular">Jl. Kesehatan No. 2</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Date</p>
            <p class="text-regular">December 20th 2020</p>
        </div>

        <div class="vaccination-ticket__subcontainer margin-bottom-m">
            <p class="text-bold">Time</p>
            <p class="text-regular">17.00 - 18.00</p>
        </div>

        {{-- <div class="vaccination-ticket__subcontainer align-self-center">
            <p class="text-bold text-center">Queue Number</p>
            <p class="text-regular text-center">3</p>
        </div> --}}
        @endif
    </div>
</div>
@endsection