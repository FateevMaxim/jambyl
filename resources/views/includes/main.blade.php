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
        <!-- Header Menu Area Start -->
       @include('includes.slider')
    </header>
    <!-- Header Area End -->
    <!-- Page Content Start -->
    <div class="page-content">
        <!-- Upcoming Campaign Area Strat -->
       @include('includes.upcomming')
        <!-- Upcoming Campaign Area End -->
        <!-- About Us Area Start -->
       @include('includes.about_movie')
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
    <!-- Footer Area Start -->
    <footer class="bg-5 bg-overlay-2">
        <!-- Footer Top Area Start -->
        <div class="footer-top ptb-90" id="creators">
            <div class="container">
                <div class="row">
                    <!-- Footer Single Item -->
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="footer-single">
                            <h5>О СОЗДАНИИ ФИЛЬМА «ЖАМБЫЛ. НОВАЯ ЭРА»</h5>
                            <div class="stay-with-content">
                                <p>Создание полнометражного исторического фильма «Жамбыл. Новая эра» приурочено к 175-летию со дня рождения знаменитого акына. Художественная картина запущена в производство при содействии Государственного центра поддержки национального кино по заказу Министерства культуры и спорта РК. Производством занимается Общественный фонд «Фонд поддержки культуры и творческих инициатив». Генеральный партнер проекта - АО «Самрук-Казына».</p>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Single Item -->
                    <!-- Footer Single Item -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-single">
                            <h5>КОНТАКТЫ</h5>
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <p>Адрес:  Мауленова, д.93</p>
                                    </li>
                                    <li>
                                        <p>Телефон: <a href="tel:+77475264140">+77475264140</a></p>
                                    </li>
                                    <li>
                                        <p>What's App: <a href="https://api.whatsapp.com/send?phone=77773429834">Написать</a></p>
                                    </li>
                                    <li>
                                        <p>E-mail: demo@example.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Single Item -->
                </div>
            </div>
        </div>
        <!-- Footer Top Area End -->
        <!-- Footer Bottom Area Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom">
                        <div class="footer-left">
                            <p>© 2022 <b class="text-white">Jabmyl</b> Made by <a href="https://redlines.tech/" target="_blank"><b>RedLines</b></a></p>
                        </div>
                        <div class="footer-right-social f-right">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-instagram"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area End -->
    </footer>
    <!-- Footer Area End -->
</div>
<!-- Page Wraper Here Start -->
@endsection