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
            <p class="text-bold">Form ID</p>
            <p class="text-regular">{{$vaccform->id}}</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Full Name</p>
            <p class="text-regular">{{$vaccform->name}}</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Hospital</p>
            <p class="text-regular">{{$vaccform->hospital}}</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Province</p>
            <p class="text-regular">{{$vaccform->province}}</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">City / Regency</p>
            <p class="text-regular">{{$vaccform->city}}</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Address</p>
            <p class="text-regular">{{$hospital->address}}</p>
        </div>

        <div class="vaccination-ticket__subcontainer">
            <p class="text-bold">Date</p>
            <p class="text-regular">{{$vaccform->date}}</p>
        </div>

        {{-- <div class="vaccination-ticket__subcontainer margin-bottom-m">
            <p class="text-bold">Time</p>
            <p class="text-regular">{{$vaccform->time}}</p>
        </div> --}}

        
        @endif
    </div>
</div>
@endsection