<section class="tailer-area bg-white pt-90 indicator-style-two" id="news">
    <div class="container">
        <div class="row">
            <!-- Section Titel -->
            <div class="col-md-12">
                <div class="section-titel style-3 text-left">
                    <h2>НОВОСТИ <span>ПРОЕКТА</span></h2>
                    <p>Информация по съёмкам, кастингу и прочее</p>
                </div>
            </div>
            <!-- Section Titel -->
        </div>
        <!-- Recent Upload Item Area Start -->
        <div class="main-section">
            <div class="news-campaign owl-carousel owl-theme">

                @foreach($newslatters as $new)
                <!-- News Single -->
                <div class="recent-news-single">
                    <div class="news-thumbnail">
                        <a href="/article/{{ $new->id }}"><img src="{{ asset('img/home-actor/news/'.$new->img) }}" alt=""></a>
                    </div>
                    <div class="news-content">
                        <h4><a href="/article/{{ $new->id }}">{{ $new->title }}</a></h4>
                        <div class="news-meta">
                            <span>{{ $new->date }}</span>
                            <span>{{ $new->source }}</span>
                        </div>
                    </div>
                </div>
                <!-- News Single -->
                    @endforeach

            </div>
        </div>
        <!-- Recent Upload Item Area End -->
    </div>
</section>