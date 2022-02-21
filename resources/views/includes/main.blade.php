@extends('index')



@section('body')
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page Wraper Here Start -->
<div class="page-wraper home-campaign" id="main-home">
    <!-- Header Area Start -->
    <header>
        <!-- Header Menu Area Start -->
    @include('includes.menu')

    @include('includes.slider')
    <!-- Header Menu Area Start -->
    </header>

    <!-- Header Area End -->
    <!-- Page Content Start -->
    <div class="page-content">
        <!-- Upcoming Campaign Area Strat -->
       {{--@include('includes.upcomming')--}}
        <!-- Upcoming Campaign Area End -->
        <!-- About Us Area Start -->
       @include('includes.about_movie')
       @include('includes.producers')
        <!-- About Us Area End -->
        <!-- Video popup area start -->
        <div class="video-popup-area bg-20 text-center" id="trailer">
            <div class="video-popup-video">
                <div class="video-popupcontent">
                    <a href="www.youtube.com/watch?v=8onrhyeCSCI" class="popup-youtube">
                        <img src="{{ asset('img/other/video-button.png') }}" alt="">
                    </a>
                    <h4>ПОСМОТРЕТЬ ТРЕЙЛЕР</h4>
                </div>
            </div>
        </div>
        <!-- Video popup area start -->
        <!-- Our Team Area Start -->
        @include('includes.our_team')
        <!-- Our Team Area End -->
        <!-- News Campaign Area Start -->
        @include('includes.news')
        <!-- News Campaign Area End -->
        <!-- Gallery Area Start -->
        @include('includes.gallery')
        <!-- Gallery Area End -->
        <!-- Campaign Count Area Start -->
        <!-- Client/Brand Area Strat -->
        <section class="client-area">
            <div class="container">
                <div class="brand-logo-carousel-2 pb-110 text-center">
                    <div class="brand-logo-item col"><img src="img/clients/logo01.png" alt="Фонд поддержки культуры и творческих инициатив"></div>
                    <div class="brand-logo-item col"><a href="https://www.gov.kz/memleket/entities/mcs?lang=ru" target="_blank"><img src="img/clients/logo03.png" alt="Министерства Культуры и Спорта"></a></div>
                    <div class="brand-logo-item col"><a href="https://kazakhcinema.kz/" target="_blank"><img src="img/clients/logo04.png" alt="Kazakh Cinema"></a></div>

                </div>
            </div>
        </section>
        <!-- Client/Brand Area End -->
    {{--<section class="campaign-count pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="campaign-count-title">
                        <h3>За последний <span>год</span></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project-single-camp text-center">
                        <div class="project-count-camp text-uppercase">
                            <h3>НАГРАДЫ</h3>
                            <span class="counter">1</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project-single-camp text-center">
                        <div class="project-count-camp text-uppercase">
                            <h3>ПРОЕКТЫ</h3>
                            <span class="counter">3</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project-single-camp text-center">
                        <div class="project-count-camp text-uppercase">
                            <h3>ПАРТНЁРОВ</h3>
                            <span class="counter">5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
        <!-- Campaign Count Area End -->
    </div>
    <!-- Page Content End -->
</div>
<!-- Page Wraper Here Start -->
@endsection