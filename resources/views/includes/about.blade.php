@extends('index')

@section('body')
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page Wraper Here Start -->
<div class="page-wraper" id="main-home">
    <!-- Header Area Start -->
    <header>
        <!-- Header Menu Area Start -->
    @include('includes.menu')
        <!-- Header Menu Area Start -->
        <!-- Breadcamb Area Start -->
        <section class="breadcamb-area bg-17 bg-overlay-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bradcamb-content text-center text-white text-uppercase">
                            <h1>ABOUT US</h1>
                            <ul>
                                <li><a href="index.html">HOME <span>/</span></a></li>
                                <li>ABOUT US</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcamb Area End -->
    </header>
    <!-- Header Area End -->
    <!-- Page Content Start -->
    <div class="page-content">
        <!-- About Us Area Start -->
        <section class="about-area pt-100 pb-90">
            <div class="container">
                <div class="row">
                    <!-- Section Titel -->
                    <div class="col-md-6 col-sm-6 col-sm-12">
                        <div class="section-titel-contact text-left">
                            <h3>WE ARE PROUD</h3>
                            <p>It is a long establishedgfdg fact that a reader will be distracted by the on readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                        </div>
                    </div>
                    <!-- Section Titel -->
                    <div class="col-md-6 col-sm-6 col-sm-12">
                        <div class="abt-sm-img">
                            <img src="img/other/about-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 col-sm-12">
                        <div class="abt-lrg-img">
                            <img src="img/other/about-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us End -->
        <!-- Project Area Start -->
        <section class="project-area pt-90 pb-95 bg-2">
            <div class="container">
                <div class="row">
                    <!-- Project Single -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="project-single text-center">
                            <div class="project-count text-uppercase">
                                <span class="counter">112</span>
                                <h3>Aweards</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Project Single -->
                    <!-- Project Single -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="project-single text-center">
                            <div class="project-count text-uppercase">
                                <span class="counter">322</span>
                                <h3>Years</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Project Single -->
                    <!-- Project Single -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="project-single text-center">
                            <div class="project-count text-uppercase">
                                <span class="counter">450</span>
                                <h3>Complite Work</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Project Single -->
                    <!-- Project Single -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="project-single text-center">
                            <div class="project-count text-uppercase">
                                <span class="counter">180</span>
                                <h3>Happy Client</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Project Single -->
                </div>
            </div>
        </section>
        <!-- Project Area End -->
        <!-- All Service Area Start -->
        <section class="service-area pt-90 pb-100 bg-3 bg-overlay-2 indicator-style">
            <div class="container">
                <div class="row">
                    <!-- Section Titel -->
                    <div class="col-md-12">
                        <div class="section-titel text-left two">
                            <h2>SERVICES</h2>
                            <p>It is a long established fact that a reader will be distracted readable </p>
                        </div>
                    </div>
                    <!-- Section Titel -->
                </div>
                <!-- Service Single Item Area Start -->
                <div class="main-section">
                    <div class="sevice-active owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="service-single text-center">
                            <div class="servce-icon">
                                <i class="icofont icofont-ui-video-play"></i>
                            </div>
                            <div class="service-details">
                                <h4>HIRE STUDIO</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="service-single text-center">
                            <div class="servce-icon">
                                <i class="icofont icofont-video-cam"></i>
                            </div>
                            <div class="service-details">
                                <h4>Filmming Services</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="service-single text-center">
                            <div class="servce-icon">
                                <i class="icofont icofont-movie"></i>
                            </div>
                            <div class="service-details">
                                <h4>EQUIPMENT HIRE</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="service-single text-center">
                            <div class="servce-icon">
                                <i class="icofont icofont-multimedia"></i>
                            </div>
                            <div class="service-details">
                                <h4>CinePlex</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
                <!-- Service Single Item Area End -->
            </div>
        </section>
        <!-- All Service Area End -->
        <!-- Testimonial Area Start -->
        <section class="testimonial-area bg-4 ptb-100 indicator-style">
            <div class="container">
                <div class="row">
                    <div class="testimonial-active owl-carousel owl-theme">
                        <!-- Testimonial Single Item -->
                        <div class="col-md-12">
                            <div class="testimonial-single text-center">
                                <div class="testi-img">
                                    <img src="img/home-one/other/testi-1.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                    <h6>MOMENZ VONG</h6>
                                    <span>Script Writer</span>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Single Item -->
                        <!-- Testimonial Single Item -->
                        <div class="col-md-12">
                            <div class="testimonial-single text-center">
                                <div class="testi-img">
                                    <img src="img/home-one/other/testi-2.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                    <h6>MOMENZ VONG</h6>
                                    <span>Script Writer</span>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Single Item -->
                        <!-- Testimonial Single Item -->
                        <div class="col-md-12">
                            <div class="testimonial-single text-center">
                                <div class="testi-img">
                                    <img src="img/home-one/other/testi-1.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                    <h6>MOMENZ VONG</h6>
                                    <span>Script Writer</span>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Single Item -->
                        <!-- Testimonial Single Item -->
                        <div class="col-md-12">
                            <div class="testimonial-single text-center">
                                <div class="testi-img">
                                    <img src="img/home-one/other/testi-2.png" alt="">
                                </div>
                                <div class="testimonial-content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                    <h6>MOMENZ VONG</h6>
                                    <span>Script Writer</span>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Single Item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Area End -->
        <!-- Our Team Area Start -->
        <section class="ourteam-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <!-- Section Titel -->
                    <div class="col-md-12">
                        <div class="section-titel text-left two">
                            <h2>OUR TEAM</h2>
                            <p>It is a long established fact that a reader will be distracted readable </p>
                        </div>
                    </div>
                    <!-- Section Titel -->
                </div>
                <!-- Service Main Area Start -->
                <div class="team-area-main">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider slider-for">
                                <!-- Service Slider Single -->
                                <div class="single-item">
                                    <div class="large-img">
                                        <img src="img/home-one/team/1.png" alt="">
                                    </div>
                                    <div class="thumb-content text-right">
                                        <div class="thumb-personal-info">
                                            <div class="teamper-titel">
                                                <h5>THOMASH ALVIN</h5>
                                                <span>Film Director</span>
                                            </div>
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slider Single -->
                                <!-- Service Slider Single -->
                                <div class="single-item">
                                    <div class="large-img">
                                        <img src="img/home-one/team/2.png" alt="">
                                    </div>
                                    <div class="thumb-content text-right">
                                        <div class="thumb-personal-info">
                                            <div class="teamper-titel">
                                                <h5>MOMENZ VONG</h5>
                                                <span>Script Writer</span>
                                            </div>
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slider Single -->
                                <!-- Service Slider Single -->
                                <div class="single-item">
                                    <div class="large-img">
                                        <img src="img/home-one/team/3.png" alt="">
                                    </div>
                                    <div class="thumb-content text-right">
                                        <div class="thumb-personal-info">
                                            <div class="teamper-titel">
                                                <h5>JHONE DOE</h5>
                                                <span>Assistant Director</span>
                                            </div>
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slider Single -->
                                <!-- Service Slider Single -->
                                <div class="single-item">
                                    <div class="large-img">
                                        <img src="img/home-one/team/4.png" alt="">
                                    </div>
                                    <div class="thumb-content text-right">
                                        <div class="thumb-personal-info">
                                            <div class="teamper-titel">
                                                <h5>MARK DOE</h5>
                                                <span>Film Assistant</span>
                                            </div>
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slider Single -->
                                <!-- Service Slider Single -->
                                <div class="single-item">
                                    <div class="large-img">
                                        <img src="img/home-one/team/5.png" alt="">
                                    </div>
                                    <div class="thumb-content text-right">
                                        <div class="thumb-personal-info">
                                            <div class="teamper-titel">
                                                <h5>MOUNTAN KHAN</h5>
                                                <span>Film Manager</span>
                                            </div>
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slider Single -->
                                <!-- Service Slider Single -->
                                <div class="single-item">
                                    <div class="large-img">
                                        <img src="img/home-one/team/3.png" alt="">
                                    </div>
                                    <div class="thumb-content text-right">
                                        <div class="thumb-personal-info">
                                            <div class="teamper-titel">
                                                <h5>ABULA DE</h5>
                                                <span>Director Script</span>
                                            </div>
                                            <div class="team-social">
                                                <ul>
                                                    <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                                                    <li><a href="#"><i class="icofont icofont-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in  randomised words which don't look even slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Slider Single -->
                            </div>
                            <!-- Service Thumb Area Start -->
                            <div class="slider slider-nav">
                                <div class="thumb-single">
                                    <img src="img/home-one/team/thumb-1.png" alt="">
                                </div>
                                <div class="thumb-single">
                                    <img src="img/home-one/team/thumb-2.png" alt="">
                                </div>
                                <div class="thumb-single">
                                    <img src="img/home-one/team/thumb-3.png" alt="">
                                </div>
                                <div class="thumb-single">
                                    <img src="img/home-one/team/thumb-4.png" alt="">
                                </div>
                                <div class="thumb-single">
                                    <img src="img/home-one/team/thumb-5.png" alt="">
                                </div>
                                <div class="thumb-single">
                                    <img src="img/home-one/team/thumb-3.png" alt="">
                                </div>
                            </div>
                            <!-- Service Thumb Area Start -->
                        </div>
                    </div>
                    <!-- Service Main Area End -->
                </div>
            </div>
        </section>
        <!-- Our Team Area End -->
    </div>
    <!-- Page Content End -->
    <!-- Footer Area Start -->
    <footer class="bg-5 bg-overlay-2">
        <!-- Footer Top Area Start -->
        <div class="footer-top ptb-90">
            <div class="container">
                <div class="row">
                    <!-- Footer Single Item -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-single">
                            <h5>STAY WITH US</h5>
                            <div class="stay-with-content">
                                <p>It is a long established fact that a good reader on will be distracted by the by readable content of a page when looking at its layout. </p>
                                <div class="subcribe">
                                    <form id="mc-form">
                                        <input autocomplete="off" placeholder="Your E-mail" type="text">
                                        <button value="Submit" type="submit" class="search-button">SUBSCRIBE</button>
                                        <!-- mailchimp-alerts Start -->
                                        <div class="mailchimp-alerts text-centre">
                                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                        </div>
                                        <!-- mailchimp-alerts end -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Single Item -->
                    <!-- Footer Single Item -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-single">
                            <h5>SERVICES</h5>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Hire Studio</a></li>
                                    <li><a href="#">Outdoor Spot</a></li>
                                    <li><a href="#">Flexible Space</a></li>
                                    <li><a href="#">Production House Rent</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Single Item -->
                    <!-- Footer Single Item -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-single">
                            <h5>IMPORTANT LINK</h5>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Pricing Of Filmcity</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Single Item -->
                    <!-- Footer Single Item -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-single">
                            <h5>QUICK CONTACT</h5>
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <p>Address:  Your address goes here</p>
                                    </li>
                                    <li>
                                        <p>Phone:  0123456789 0123456789</p>
                                    </li>
                                    <li>
                                        <p>E-mail: demo@example.com demo@example.com</p>
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
                            <p>© 2021 <b class="text-white">Ftage</b> Made with <i class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/"><b>HasThemes</b></a></p>
                        </div>
                        <div class="footer-right-social f-right">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-google-plus"></i></a></li>
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