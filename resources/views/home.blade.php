@extends('layout')

@section('meta-title')
    MyVacc
@endsection

@section('content')
<div class="home">
    <section>
        <div class="media-container">
            <img src="{{ asset('assets/banner.jpg') }}" alt="" class="media media-m media-left">
            <div class="media__content">
                <h1 class="heading-1 margin-bottom-s">MyVacc</h1>
                <p class="text-regular margin-bottom-m">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum id quos magnam facilis obcaecati earum possimus consectetur, quis laboriosam quibusdam, officia deserunt deleniti illo.</p>
                
                @if (auth()->user())
                    <a href="{{route('dashboard-user')}}" class="cta cta--large cta--secondary margin-bottom-xs">Dashboard User</a>
                    <a href="/vaccination-form" class="cta cta--large cta--secondary margin-bottom-xs">Register Vaccination</a>
                @else 
                <div class="flex">
                    <a href="{{route('login')}}" class="cta cta--large cta--secondary margin-bottom-xs mr-3">Log In</a>
                    <a href="{{route('register')}}" class="cta cta--large cta--secondary margin-bottom-xs">Register</a>
                    {{-- <p class="text-small">Don't have an account? <a href="{{route('register')}}" class="link text-small">Register now</a></p> --}}
                </div>
                    
                @endif
                <h2>Navigation for dev.</h2>
                <ul>
                    <li>
                        <a href="{{route('form')}}">Fill form</a>
                    </li>
                </ul>

            </div>
            
        </div>
    </section>

    <section class="home-facts">
        <h1 class="heading-1 margin-bottom-xl">Fakta Coronavirus</h1>

        <div class="card-wrapper--flex">
            <div class="card card--m card--borderless">
                <img src="{{ asset('assets/fact-1.jpg') }}" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <h3 class="heading-3 margin-bottom-s">Gejala</h3>
                    <p class="text-regular">Virus COVID-19 adalah virus yang menyerang jaringan pernapasan manusia, sehingga membuat penderitanya mengalami gejala kesulitan bernafas yang diawali dengan demam tinggi.</p>
                </div>
            </div>
            <div class="card card--m card--borderless">
                <img src="{{ asset('assets/fact-2.jpg') }}" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <h3 class="heading-3 margin-bottom-s">Penyebaran</h3>
                    <p class="text-regular">Virus COVID-19 menyebar dari orang ke orang melalui kontak langsung, terutama melalui droplet karena bersin, batuk, atau berinteraksi dengan orang dalam jarak dekat.</p>
                </div>
            </div>
            <div class="card card--m card--borderless">
                <img src="{{ asset('assets/fact-3.jpg') }}" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <h3 class="heading-3 margin-bottom-s">Periode Infeksi</h3>
                    <p class="text-regular">Periode infeksi diperkirakan berlangsung selama delapan hingga 10 hari pada kasus sedang, dan rata-rata hingga dua minggu pada kasus yang parah.</p>
                </div>
            </div>
            <div class="card card--m card--borderless">
                <img src="{{ asset('assets/fact-4.jpg') }}" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <h3 class="heading-3 margin-bottom-s">Sumber Awal</h3>
                    <p class="text-regular">Coronavirus bersirkulasi di antara hewan, dan beberapa menginfeksi manusia. Kelelawar dianggap sebagai salah satu inang alami dari virus-virus ini.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-reasons">
        <h1 class="heading-1 margin-bottom-m">Mengapa perlu vaksinasi?</h1>
        <p class="text-large text-center width-50 margin-bottom-xl">Vaksinasi adalah penanaman bibit penyakit yang sudah dilemahkan ke dalam tubuh manusia agar orang itu menjadi kebal terhadap penyakit tersebut</p>

        <div class="card-wrapper--flex margin-bottom-xl">
            <div class="card card--l card--borderless">
                <img src="{{ asset('assets/reason-1.jpg') }}" alt="" class="card__image card__image--l">
                <div class="card__content">
                    <h3 class="heading-3 margin-bottom-m">Melindungi orang yang rentan</h3>
                    <p class="text-regular">Jika cukup banyak populasi yang divaksinasi, infeksi tidak dapat menyebar dari orang ke orang, yang berarti bahwa setiap orang memiliki tingkat perlindungan yang tinggi - bahkan bagi mereka yang tidak memiliki kekebalan yang baik.</p>
                </div>
            </div>
            <div class="card card--l card--borderless">
                <img src="{{ asset('assets/reason-2.jpg') }}" alt="" class="card__image card__image--l">
                <div class="card__content">
                    <h3 class="heading-3 margin-bottom-m">Vaksin sangat aman dan efektif</h3>
                    <p class="text-regular">Vaksin dinilai sangat aman dan efektif untuk mencegah penggunanya terjangkit penyakit, karena proses pembuatannya melalui serangkaian uji coba dan penelitian yang sangat panjang</p>
                </div>
            </div>
            <div class="card card--l card--borderless">
                <img src="{{ asset('assets/reason-3.jpg') }}" alt="" class="card__image card__image--l">
                <div class="card__content">
                    <h3 class="heading-3 margin-bottom-m">Orang yang tidak divaksin rentan sakit</h3>
                    <p class="text-regular">Terdapat perbedaan besar antara orang yang di vaksin dan tidak di vaksin. Nyatanya, orang yang tidak divaksin lebih rentan terhadap penyakit yang menimbulkan kematian daripada orang-orang yang di vaksin sebelumnya.</p>
                </div>
            </div>
        </div>

        @if (!auth()->user())
            <a href="{{route('register')}}" class="cta cta--large cta--secondary">Register Now</a>
        @else  

        @endif


        <!-- Show this if user is logged in -->
        <!-- <a href="/vaccination-form" class="cta large cta--large cta--secondary">Register Vaccination</a> -->

    </section>
</div>
@endsection