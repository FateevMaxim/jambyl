@extends('index')

@section('body')
   <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page Wraper Here Start -->
<div class="page-wraper home-campaign" id="main-home">
    <!-- Header Area Start -->
    <header>
        <!-- Header Menu Area Start -->
        @include('includes.menu')

        <section class="breadcamb-area bg-17 bg-overlay-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bradcamb-content text-center text-white text-uppercase">
                            <h1>@lang('Кастинг')</h1>
                            <ul>
                                <li><a href="/">Главная <span>/</span></a></li>
                                <li>Кастинг</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- Header Area End -->
    <!-- Page Content Start -->
    <div class="page-content">

        <div class="news-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <!-- Service Details Left Sidebar Start -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="service-details-content">
                            <div class="blog-content">
                                @if(session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <h2>@lang('Проведение кастинга по кинопроекту «Жамбыл. Новая Эра»')</h2>
                                @lang('Casting')
                                    <p>
                                        <span><strong>Контактный телефон кастинг директора: </strong><a href="tel:+77760549989">8 776 054 9989</a></span>
                                    </p>
                                    <div class="our-gallery-campaign">
                                        <div class="gallery-campaign owl-carousel owl-theme">
                                            <!-- Latest Shot/Portfolio Single -->
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/1_1.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/1.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/2_2.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/2.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/3_3.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/3.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/4_4.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/4.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/5_5.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/5.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/6_6.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/6.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/7_7.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/7.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/8_8.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/8.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/9_9.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/9.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/10_10.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/10.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/11_11.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/11.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/12_12.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/12.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/13_13.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/13.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/14_14.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/14.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/15_15.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/15.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/16_16.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/16.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/17_17.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/17.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/18_18.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/18.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/19_19.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/19.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/20_20.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/20.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/21_21.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/21.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/22_22.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/22.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/23_23.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/23.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/24_24.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/24.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/25_25.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/25.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/26_26.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/26.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/27_27.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/27.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/28_28.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/28.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/29_29.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/29.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/30_30.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/30.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/31_31.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/31.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/32_32.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/32.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/33_33.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/33.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/34_34.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/34.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/35_35.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/35.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/36_36.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/36.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/37_37.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/37.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/38_38.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/38.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/39_39.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/39.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/40_40.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/40.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/41_41.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/41.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/42_42.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/42.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/43_43.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/43.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/44_44.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/44.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/45_45.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/45.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="gallery-single">
                                                <div class="gallery-image">
                                                    <img src="{{ asset('img/gallery/results/46_46.jpg') }}" alt="Кадры со объявления рерультатов">
                                                    <a href="{{ asset('img/gallery/results/46.jpg') }}" class="popup-gallery"><i class="icofont-search"></i></a>
                                                </div>
                                            </div>
                                            <!-- Latest Shot/Portfolio Single -->
                                        </div>
                                    </div>
                                    {{--<form action="{{ route('casting.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="col-lg-12">
                                    <div class="row">

                                            <div class="col-lg-6 col-sm-12">
                                                <div class="mb-3">
                                                    <label for="city"
                                                           class="form-label">@lang('Город проживания')</label>
                                                    <input type="text" class="form-control" name="city" id="city" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="childName"
                                                           class="form-label">@lang('ФИО ребенка')</label>
                                                    <input type="text" class="form-control" name="childName"
                                                           id="childName" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="dateOfBirth"
                                                           class="form-label">@lang('Год рождения')</label>
                                                    <input type="date" class="form-control" name="dateOfBirth"
                                                           id="dateOfBirth" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="parentName"
                                                           class="form-label">@lang('ФИО родителей')</label>
                                                    <input type="text" class="form-control" name="parentName"
                                                           id="parentName" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="height" class="form-label">@lang('Рост')</label>
                                                    <input type="number" class="form-control" name="height" id="height" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="weight" class="form-label">@lang('Вес')</label>
                                                    <input type="number" class="form-control" name="weight" id="weight" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="education"
                                                           class="form-label">@lang('Образование')</label>
                                                    <input type="text" class="form-control" name="education"
                                                           id="education" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nation"
                                                           class="form-label">@lang('Национальность')</label>
                                                    <input type="text" class="form-control" name="nation" id="nation" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="clothesSize"
                                                           class="form-label">@lang('Размер одежды')</label>
                                                    <input type="text" class="form-control" name="clothesSize"
                                                           id="clothesSize" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="bootsSize"
                                                           class="form-label">@lang('Размер обуви')</label>
                                                    <input type="text" class="form-control" name="bootsSize"
                                                           id="bootsSize" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="langs" class="form-label">@lang('Знание языков')</label>
                                                    <input type="text" class="form-control" name="langs" id="langs" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="musicSkills"
                                                           class="form-label">@lang('Музыкальные навыки')</label>
                                                    <input type="text" class="form-control" name="musicSkills"
                                                           id="musicSkills"
                                                           placeholder="@lang('( игра на муз. Инструментах, пение )')">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="mb-3">
                                                    <label for="danceSkills"
                                                           class="form-label">@lang('Танцевальные навыки')</label>
                                                    <input type="text" class="form-control" name="danceSkills"
                                                           id="danceSkills" placeholder="@lang('( какой вид )')">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="sports"
                                                           class="form-label">@lang('Какой вид спорта')</label>
                                                    <input type="text" class="form-control" name="sports" id="sports">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="horseRiding"
                                                           class="form-label">@lang('Умеете скакать на лошади')</label>
                                                    <input type="text" class="form-control" name="horseRiding"
                                                           id="horseRiding">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="mobilePhone"
                                                           class="form-label">@lang('Мобильный телефон')</label>
                                                    <input type="tel" class="form-control" name="mobilePhone"
                                                           id="mobilePhone" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="homePhone"
                                                           class="form-label">@lang('Домашний телефон')</label>
                                                    <input type="tel" class="form-control" name="homePhone"
                                                           id="homePhone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="parentPhone"
                                                           class="form-label">@lang('Контакты родителей')</label>
                                                    <input type="tel" class="form-control" name="parentPhone"
                                                           id="parentPhone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">@lang('Е-mail')</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="@lang('( почта )')">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="insta"
                                                           class="form-label">@lang('Логин INSTAGRAM')</label>
                                                    <input type="text" class="form-control" name="insta" id="insta">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="experience"
                                                           class="form-label">@lang('В прошлом принимали ли Вы участие в съемках рекламы, клипов или кино?( уточните )')</label>
                                                    <input type="text" class="form-control" name="experience"
                                                           id="experience">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="episode"
                                                           class="form-label">@lang('Готовы ли Вы принимать участие в  эпизодах?')</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="episode"
                                                               id="episode1" value="Да">
                                                        <label class="form-check-label" for="episode1">
                                                            @lang('Да')
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="episode"
                                                               id="episode2" value="Нет" checked>
                                                        <label class="form-check-label" for="episode2">
                                                            @lang('Нет')
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="mass"
                                                           class="form-label">@lang('Готовы ли Вы принимать участие в массовке?')</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="mass"
                                                               id="mass1"
                                                               value="Да">
                                                        <label class="form-check-label" for="mass1">
                                                            @lang('Да')
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="mass"
                                                               id="mass2"
                                                               value="Нет" checked>
                                                        <label class="form-check-label" for="mass2">
                                                            @lang('Нет')
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                        <span class="input-group-text" id="inputGroupFileAddon01">@lang('Фотографии')</span>
                                                        <input type="file" id="pics" name="pics[]" multiple="multiple">
                                                </div>
                                                @error('pics')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary mb-3">Отправить заявку</button>

                                    </div>
                                </div>
                                </form>--}}
                            </div>
                        </div>
                    </div>
                    <!-- Service Details Left Sidebar End -->
                </div>
            </div>
        </div>

    </div>
    <!-- Page Content End -->
</div>
<!-- Page Wraper Here Start -->


@endsection
@section('scripts')
    {{--<script>
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[id="pics"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement, {
            multiple: true
        });
        FilePond.setOptions({
            server: {
                allowMultiple: true,
              url: '/upload',
                headers: {
                  'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                }
            },
        });
    </script>--}}
@endsection