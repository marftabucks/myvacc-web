@extends('layout')

@section('meta-title')
    MyVacc
@endsection

@section('content')
<div class="home">
    <section>
        <div class="media-container">
            <img src="https://via.placeholder.com/400" alt="" class="media media-left width-30">
            <div class="media__content">
                <h1 class="heading-1 margin-bottom-s">MyVacc</h1>
                <p class="text-regular margin-bottom-m">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nostrum id quos magnam facilis obcaecati earum possimus consectetur, quis laboriosam quibusdam, officia deserunt deleniti illo.</p>
                <a href="/login" class="cta cta--white margin-bottom-xs">Log In</a>
                <p class="text-small">Don't have an account? <a href="/register" class="link text-small">Register now</a></p>
            </div>
        </div>
    </section>

    <section class="home-facts">
        <h1 class="heading-1 margin-bottom-xl">Coronavirus Facts</h1>

        <div class="card-wrapper--flex">
            <div class="card card--m card--borderless">
                <img src="https://via.placeholder.com/150" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <p class="text-regular">Virus COVID-19 adalah virus yang menyerang jaringan pernapasan manusia, sehingga membuat penderitanya mengalami gejala kesulitan bernafas yang diawali dengan demam tinggi.</p>
                </div>
            </div>
            <div class="card card--m card--borderless">
                <img src="https://via.placeholder.com/150" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <p class="text-regular">Virus COVID-19 menyebar dari orang ke orang melalui kontak langsung, terutama melalui droplet karena bersin, batuk, atau berinteraksi dengan orang dalam jarak dekat.</p>
                </div>
            </div>
            <div class="card card--m card--borderless">
                <img src="https://via.placeholder.com/150" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <p class="text-regular">Periode infeksi diperkirakan berlangsung selama delapan hingga 10 hari pada kasus sedang, dan rata-rata hingga dua minggu pada kasus yang parah.</p>
                </div>
            </div>
            <div class="card card--m card--borderless">
                <img src="https://via.placeholder.com/150" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <p class="text-regular">Coronavirus bersirkulasi di antara hewan, dan beberapa menginfeksi manusia. Kelelawar dianggap sebagai salah satu inang alami dari virus-virus ini.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-reasons">
        <h1 class="heading-1 margin-bottom-m">Why should you vaccinate?</h1>
        <p class="text-regular text-center width-50 margin-bottom-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ex eaque quos veniam, eum tempora, dolorum laborum dolore minima minus quaerat unde dicta nulla fugit similique quisquam quis ratione labore?</p>

        <div class="card-wrapper--flex margin-bottom-xl">
            <div class="card card--l card--borderless">
                <img src="https://via.placeholder.com/250" alt="" class="card__image card__image--l">
                <div class="card__content">
                    <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptas perspiciatis vitae, ab sit officia?</p>
                </div>
            </div>
            <div class="card card--l card--borderless">
                <img src="https://via.placeholder.com/250" alt="" class="card__image card__image--l">
                <div class="card__content">
                    <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptas perspiciatis vitae, ab sit officia?</p>
                </div>
            </div>
            <div class="card card--l card--borderless">
                <img src="https://via.placeholder.com/250" alt="" class="card__image card__image--l">
                <div class="card__content">
                    <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptas perspiciatis vitae, ab sit officia?</p>
                </div>
            </div>
        </div>

        <a href="/register" class="cta cta--large cta--white">Register Now</a>
    </section>
</div>
@endsection