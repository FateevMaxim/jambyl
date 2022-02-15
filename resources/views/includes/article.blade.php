@extends('index')

@section('body')
   <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page Wraper Here Start -->
<div class="page-wraper home-campaign" id="main-home">
    <!-- Header Area Start -->
    @foreach($newslatter as $new)
    <header>
        <!-- Header Menu Area Start -->
    @include('includes.menu')

        <section class="breadcamb-area bg-17 bg-overlay-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bradcamb-content text-center text-white text-uppercase">
                            <h1>{{ $new->title }}</h1>
                            <ul>
                                <li><a href="/">Главная <span>/</span></a></li>
                                <li>Статья: {{ $new->source }}</li>
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
                            <div class="serv-image mb-40">
                                <img src="{{ asset('img/home-actor/news/'.$new->img) }}" alt="{{ $new->title }}">
                            </div>
                            <div class="blog-content">
                                <h2>{{ $new->title }}</h2>
                                <div class="blog-date-categori">
                                    <ul>
                                        <li>{{ $new->date }} </li>
                                        <li>{{ $new->source }}</li>
                                    </ul>
                                </div>
                            </div>
                            {!! $new->text !!}
                        </div>
                    </div>
                    <!-- Service Details Left Sidebar End -->
                </div>
            </div>
        </div>

    <!-- News Campaign Area End -->
        <!-- Gallery Area Start -->
    @include('includes.news')

    </div>
    <!-- Page Content End -->
    @endforeach
</div>
<!-- Page Wraper Here Start -->

@endsection