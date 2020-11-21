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
                <a href="#" class="cta cta--white margin-bottom-xs">Log in</a>
                <p class="text-small">Don't have an account? <a href="#" class="link text-small">Register Now</a></p>
            </div>
        </div>
    </section>

    <section class="home-facts">
        <h1 class="heading-1 margin-bottom-xl">Coronavirus Facts</h1>

        <div class="card-wrapper--flex">
            <div class="card card--m card--borderless">
                <img src="https://via.placeholder.com/150" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptas perspiciatis vitae, ab sit officia?</p>
                </div>
            </div>
            <div class="card card--m card--borderless">
                <img src="https://via.placeholder.com/150" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptas perspiciatis vitae, ab sit officia?</p>
                </div>
            </div>
            <div class="card card--m card--borderless">
                <img src="https://via.placeholder.com/150" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptas perspiciatis vitae, ab sit officia?</p>
                </div>
            </div>
            <div class="card card--m card--borderless">
                <img src="https://via.placeholder.com/150" alt="" class="card__image card__image--m">
                <div class="card__content">
                    <p class="text-regular">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptas perspiciatis vitae, ab sit officia?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-reasons">
        <h1 class="heading-1 margin-bottom-xl">Coronavirus Facts</h1>

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

        <a href="#" class="cta cta--large cta--white">Register Now</a>
    </section>
</div>
@endsection