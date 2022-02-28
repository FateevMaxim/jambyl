<section class="ourteam-area pb-100" id="creators">
    <div class="container">
        <div class="row">
            <!-- Section Titel -->
            <div class="col-md-12">
                <div class="section-titel text-left two">
                    <h2>СОЗДАТЕЛИ</h2>
                    <p>Художественного фильма @lang('ProjectName')
                    </p>
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
                        @foreach($producers as $producer)
                        <div class="single-item">
                            <div class="large-img">
                                <img src="{{ asset('img/home-one/team/'.$producer->img) }}" alt="{{ $producer->name }}">
                            </div>
                            <div class="thumb-content text-right">
                                <div class="thumb-personal-info">
                                    <div class="teamper-titel">
                                        <h5>{{ $producer->name }}</h5>
                                    </div>
                                    {{--<div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                            <li><a href="#"><i class="icofont icofont-instagram"></i></a></li>
                                        </ul>
                                    </div>--}}
                                    <p><b>{{ $producer->name }}</b><br>
                                        {{ $producer->short_desc }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Service Slider Single -->
                    </div>

                    <!-- Service Thumb Area Start -->
                    <div class="slider slider-nav">
                        @foreach($producers as $producerThumb)
                        <div class="thumb-single">
                            <img src="{{ asset('img/home-one/team/'.$producerThumb->small_img) }}" alt="{{ $producerThumb->name }}">
                        </div>
                        @endforeach
                    </div>
                    <!-- Service Thumb Area Start -->

                </div>
            </div>
            <!-- Service Main Area End -->
        </div>
    </div>
</section>