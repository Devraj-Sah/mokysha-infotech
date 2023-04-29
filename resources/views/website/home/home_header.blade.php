@php
    $about_path = App\Models\Navigation::find(2625);
    $about_path_parent = App\Models\Navigation::find($about_path->parent_page_id);
@endphp


<!-- ====== start header ====== -->
<header class="style-3 overflow-hidden" data-scroll-index="0" style="background-color: #1f2163 !important;">
    <div class="container">
        <div class="content section-padding">
            <div class="row">
                <div class="col-lg-5">
                    <div class="info">
                        <h1 class="h1">Make your life easier with help from <span>Mokysha</span></h1>
                        <p class="p">We help businesses elevate their value through custom software development,
                            product design, QA & consultancy services.</p>
                        <h5 class="h5">Get Free Quote! <span class="fw-normal ms-1">We’ll contact back in 24h</span>
                        </h5>
                        <form action="{{ route('contactstore') }}" class="form mt-30" method="post">
                            <div class="row gx-3">
                                    @csrf
                                    <div class="col-6">
                                        <div class="form-group input-with-icon">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" required>
                                            <span class="input-icon">
                                                <i class="far fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{-- <select class="form-select">
                                                <option value="" selected>Your inquiry about</option>
                                                <option value="">Your inquiry about</option>
                                                <option value="">Your inquiry about</option>
                                            </select> --}}
                                            <input type="text" name="message" class="form-control" placeholder="Your inquiry about *" required>
                                            <input type="hidden" value="Requesting a Consultation" name="name" class="form-control">
                                            <input type="hidden" value="1" name="con" class="form-control">
                                        </div>
                                    </div>  
                                    <div class="col-12">
                                        <button type="submit" class="btn dark-butn hover-darkBlue rounded-pill w-100 mt-3">
                                            <span>Request A Consultation</span>
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-img">
        <img src="/website/assets/img/header/header_3.png" alt="" class="pattern">
        <img src="/website/assets/img/header/header_3_c2.png" alt="" class="circle">
        <img src="/website/assets/img/main.png" alt="" class="logo_shap" style="
        top: 35%;
    ">
    </div>
</header>

{{-- <div class="main-layout">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               
                <div class="section-block publiction mb-50">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3  style="margin-top:50px;" class="text-uppercase theme-color h-sep">Recent <span
                                    class="text-ultra-bold blue-color">Publications</span> </h3>
                        </div>
                    </div>
                    <div class="row mt-50">
                            <div class="publication-slideE" style="display: flex; flex-wrap:wrap">
                                @foreach ($home_publication as $home_publication_item)
                                        <div class="col-lg-4 col-md-4">
                                            <div class="item">
                                        <a href="{{ route('single_career', $home_publication_item->nav_name) }}">
                                            <div class="publication-img text-center">
                                                @if ($home_publication_item->banner_image)
                                                    <img src="/website/{{ $home_publication_item->banner_image }}" alt=""
                                                        class="img-responsive" style="object-fit: unset; min-height:330px">
                                                @else
                                                    <img src="/website//website/images/default-publication.jpg" alt=""
                                                        class="img-responsive" style="width:100%; max-height:220px; min-height:330px">
                                                @endif
                                                <a
                                                    href="{{ route('single_career', $home_publication_item->nav_name) }}">

                                                    <h5 style="margin-bottom: 20px; font-size: 13px;" class="martel text-semi-bold d-black mt-10">


                                                        {{ $home_publication_item->caption }}

                                                    </h5>
                                                  
                                                </a>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                
                      
                    </div>
                         
                      
                </div>
            </div>
            
            
            <div class="col-md-4 sidebar-main">
                <div class="mt-50 box-shadow news-event">
                    <h4 class=" theme-color h-sep mb-30">NEWS / <span class="text-ultra-bold blue-color">EVENTS</span>
                    </h4>
                    <div class="scrollbar-custom" style="max-height: 300px">

                        @foreach ($home_news as $home_News_item)
                            <div class="s-post mb-20 pb-20 clearfix">
                                <a href="{{ route('single_career', $home_News_item->nav_name) }}">
                                    @if ($home_News_item->banner_image)
                                        <img src="/website/{{ $home_News_item->banner_image }}" alt=""
                                            class="pull-left img-responsive">
                                    @else
                                        <img src="/website/images/news-1.jpg" alt="" class="pull-left img-responsive">
                                    @endif

                                    <div class="pull-left s-post-detail">
                                        <h6 class="fz-13 black-23 lh-20 mb-10">


                                            {!! Str::limit($home_News_item->caption, 40) !!}


                                        </h6>
                                        <span class="ubuntu fz-13 theme-color">
                                            @if ($home_News_item->page_keyword)
                                                <i class="fa fa-calendar"></i> {{ $home_News_item->page_keyword }}
                                        </span>
                                    @else
                        @endif


                    </div>
                    </a>
                </div>
                @endforeach



            </div>
        </div>
        <div class="mt-10 twitter">
            <a class="twitter-timeline" height="360" href="https://twitter.com/CsifNepal?ref_src=twsrc%5Etfw">Tweets
                by CsifNepal</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</div>
</div>
</div> --}}


