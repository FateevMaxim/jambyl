<div class="header-menu mt-50" id="sticky-header">
    <div class="container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="logo-img">
                    <a href="/"><img src="{{ asset('img/home-one/icon/logo'.app()->getLocale().'.png') }}" alt=""></a>
                </div>
            </div>
            <!-- Logo Area End -->
            <!-- Menu Area Start -->
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="main-menu text-right">
                    <nav>
                        <ul>
                            <li class="active"><a href="/">Главная</a></li>
                            <li><a href="{{ route('casting.index') }}">@lang('Кастинг')</a></li>
                            <li><a href="#aboutMovie"> О фильме </a></li>
                            <li><a href="#trailer"> Трейлер </a></li>
                            <li><a href="#actors"> Актёры </a></li>
                            <li><a href="#news"> Новости </a></li>
                            <li><a href="#gallery"> Кадры </a></li>
                            <li><a href="#creators"> Создатели </a></li>
                            <li><a href="#">{{ str_replace('_', '-', app()->getLocale()) }}</a>
                                <ul>
                                    <li><a href="/ru">RU</a></li>
                                    <li><a href="/">KZ</a></li>
                                </ul>
                            </li>
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
                                    <li class="active"><a href="/">Главная</a></li>
                                    <li><a href="{{ route('casting.index') }}">@lang('Кастинг')</a></li>
                                    <li><a href="#aboutMovie"> О фильме </a></li>
                                    <li><a href="#trailer"> Трейлер </a></li>
                                    <li><a href="#actors"> Актёры </a></li>
                                    <li><a href="#news"> Новости </a></li>
                                    <li><a href="#gallery"> Кадры </a></li>
                                    <li><a href="#creators"> Создатели </a></li>
                                    <li><a href="#">{{ str_replace('_', '-', app()->getLocale()) }}</a>
                                        <ul>
                                            <li><a href="/ru">RU</a></li>
                                            <li><a href="/">KZ</a></li>
                                        </ul>
                                    </li>
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