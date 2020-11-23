@extends('layout')

@section('meta-title')
    MyVacc | Contact Us
@endsection

@section('content')
<div class="contact-us">
    <div class="media-container">
        <img src="{{ asset('assets/contact.png') }}" alt="" class="media media-m media-left">
        <div class="media__content">
            <h1 class="heading-1 margin-bottom-xs">Contact Us</h1>
            <p class="text-regular margin-bottom-l">Feel free to contact us anytime. We will get back to you as soon as possible!</p>

            <div class="margin-bottom-s">
                <p class="text-bold">E-mail</p>
                <p class="text-regular">myvacc_sejahtera@gmail.com</p>
            </div>

            <div class="margin-bottom-s">
                <p class="text-bold">Address</p>
                <p class="text-regular">Treasury Tower, 5th Floor, Jl.Sudirman, SCBD, Jakarta </p>
            </div>
            
            <div>
                <p class="text-bold">Open Hours</p>
                <p class="text-regular">09.00 - 20.00</p>
            </div>
        </div>
    </div>
</div>
@endsection
