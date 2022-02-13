<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@lang('ProjectName')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('img/home-one/apple-touch-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Place favicon.ico in the root directory -->


    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Revolution Slider CSS -->
    <link href="{{ asset('assets/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/revolution/custom-setting.css') }}" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>

<!-- Page Wraper Here Start -->
<div class="page-wraper home-campaign" id="main-home">
    <!-- Header Area Start -->
    <header>
        <div class="header-menu mt-50" id="sticky-header">
            <div class="container">
                <div class="row">
                    <!-- Logo Area Start -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="logo-img">
                            <a href="/"><img src="img/home-one/icon/logo.png" alt=""></a>
                        </div>
                    </div>
                    <!-- Logo Area End -->
                    <!-- Menu Area Start -->
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="main-menu text-right">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{ route('admin.create') }}">Добавить актёра</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Header Menu Area Start -->
                </div>
            </div>
            <!-- MOBILE-MENU-AREA START -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="mobile-area">
                                <div class="mobile-menu">
                                    <nav id="mobile-nav">
                                        <ul>
                                            <li class="active"><a href="{{ route('admin.create') }}">Добавить актёра</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MOBILE-MENU-AREA END  -->
        </div>
    </header>
    @yield('body')

</div>
<!-- all js here -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('customJs')
</body>
</html>
