@php
$home_aboutus = App\Models\Navigation::query()->where('page_type','Photo Gallery')->where('nav_name', 'LIKE', "%home-mission%")->first();
$mokysha_technology = App\Models\Navigation::query()->where('page_type','normal')->where('nav_name', 'LIKE', "%mokysha-technology%")->first();
// dd($home_aboutus)
@endphp
        <!-- ====== start about us ====== -->
        <section class="about section-padding style-3" data-scroll-index="3">
            <div class="top-content">
                <div class="img img-left">
                    <img src="/website/assets/img/about/style_3_1.png" alt="">
                    @foreach ($home_aboutus->navigationitems as $item)
                        <div class="info-circle">
                            <div class="cont">
                                <h2>{{$item->name}}</h2>
                                <small>{{$item->content}}</small>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="info-circle">
                        <div class="cont">
                            <h2>165</h2>
                            <small>satisfied clients</small>
                        </div>
                    </div>
                    <div class="info-circle">
                        <div class="cont">
                            <h2>26</h2>
                            <small>awards winner</small>
                        </div>
                    </div>
                    <div class="info-circle">
                        <div class="cont">
                            <h2>15</h2>
                            <small>years of experience</small>
                        </div>
                    </div> --}}
                </div>
                <div class="container">
                    <div class="row gx-0 justify-content-end">
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head long-shape mb-40 style-3">
                                    <h3>Mokysha’s <span>Mission & Vision</span></h3>
                                </div>
                                <h5 class="h5">
                                    {{$home_aboutus->short_content}}
                                </h5>
                                <div class="text mb-20">
                                   {!! $home_aboutus->long_content !!}
                                </div>
                                <a href="/about-us" class="btn rounded-pill bg-blue2 sm-butn text-white">
                                    <span>More About Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btm-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="info pe-lg-5">
                                <div class="section-head mb-40 style-3">
                                    <h3>Mokysha’s <span>Technology</span></h3>
                                </div>
                                <div class="text mb-30">
                                   {{$mokysha_technology->short_content}}
                                </div>
                               {!! $mokysha_technology->long_content !!}
                                <a href="/about-us" class="btn rounded-pill border-blue2 hover-blue2 mt-60 sm-butn">
                                    <span>How We Works</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img img-right">
                    <img src="{{$mokysha_technology->banner_image}}" alt="">
                </div>
            </div>
        </section>
        <!-- ====== end about us ====== -->
