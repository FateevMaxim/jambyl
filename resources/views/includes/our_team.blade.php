<section class="ourteam-area pt-95 pb-100" id="actors">
    <div class="container">
        <div class="row">
            <!-- Section Titel -->
            <div class="col-md-12">
                <div class="section-titel text-left two">
                    <h2>АКТЁРЫ</h2>
                    <p>Звёздеая команда Художественного фильма @lang('ProjectName')
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
                        @foreach($data as $actor)
                        <div class="single-item">
                            <div class="large-img">
                                <img src="{{ asset('img/home-one/team/'.$actor->img) }}" alt="{{ $actor->name }}">
                            </div>
                            <div class="thumb-content text-right">
                                <div class="thumb-personal-info">
                                    <div class="teamper-titel">
                                        <h5>{{ $actor->name }}</h5>
                                        <span>{{ $actor->role }}</span>
                                    </div>
                                    {{--<div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                            <li><a href="#"><i class="icofont icofont-instagram"></i></a></li>
                                        </ul>
                                    </div>--}}
                                    <p><b>{{ $actor->name }}</b><br>
                                        {{ $actor->short_desc }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Service Slider Single -->
                    </div>

                    <!-- Service Thumb Area Start -->
                    <div class="slider slider-nav">
                        @foreach($data as $thumb)
                        <div class="thumb-single">
                            <img src="{{ asset('img/home-one/team/'.$thumb->small_img) }}" alt="{{ $thumb->name }}">
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