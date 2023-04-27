@extends('layouts.master')
@push('title')
    Blog Detail
@endpush

@php
    use Carbon\Carbon;
    $helper = new \App\Helpers\FrontendHelper();

    $updated_at = Carbon::parse($slug_detail->updated_at);
    $blogs = $helper->getblogs();
@endphp

@section('content')
    <!--Contents-->
    <main class="blog-page style-5">
        <!-- ====== start all-news ====== -->
        <section class="all-news section-padding pt-50 blog bg-transparent style-3">
            <div class="container">
                <div class="blog-details-slider mb-100">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20 color-000"> {{$slug_detail->caption}} </h2>
                        <small class="d-block date text">
                            {{-- <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold"> news </a> --}}
                            <i class="bi bi-clock me-1"></i>
                            <span class="op-8">Posted on {{$updated_at->diffForHumans()}} </span>
                        </small>
                    </div>
                    <div class="content-card">
                        <div class="img">
                            <img src="{{$slug_detail->banner_image}}" alt="">
                        </div>
                        {{-- <div class="info">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="cont">
                                        <small class="date small mb-20"> <span class="text-uppercase border-end brd-gray pe-3 me-3"> News </span> <i class="far fa-clock me-1"></i> Posted on 3 Days ago </small>
                                        <h2 class="title">
                                            Solutions For Big Data Issue, Expert Perspective
                                        </h2>
                                        <p class="fs-12px mt-10 text-light text-info">If there’s one way that wireless technology has changed the way we work, it’s that will everyone is now connected [...]</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="d-flex small align-items-center justify-content-between mb-70 fs-12px">
                            <div class="l_side d-flex align-items-center">
                                <a href="#" class="me-3 me-lg-5">
                                    <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                        {{ str_limit($slug_detail->icon_image_caption, 1, '') ?? "A" }}
                                    </span>
                                    <span class="">
                                        {{ $slug_detail->icon_image_caption ?? "By Admin" }}
                                    </span>
                                </a>
                                {{-- <a href="#" class="me-3 me-lg-5">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <span>24 Comments</span>
                                </a> --}}
                                {{-- <a href="#">
                                    <i class="bi bi-eye me-1"></i>
                                    <span>774k Views</span>
                                </a> --}}
                            </div>
                            <div class="r-side mt-1">
                                {{-- <a href="#">
                                    <i class="bi bi-info-circle me-1"></i>
                                    <span>Report</span>
                                </a> --}}
                            </div>
                        </div>

                        <div class="blog-content-info">
                            {!! $slug_detail->long_content !!}
                            {{-- <h4 class="fw-bold color-000 lh-4 mb-30">To mark the first UK show of artist Henri Barande, developer <a href="#" class="color-blue5">Moussa</a> and German studio Schultzschultz  have created The Lodge Wooden at Berlin City</h4>
                            <div class="text mb-10 color-666">
                                Today most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.
                            </div>
                            <div class="text color-666 mb-20">
                                Coventry is a city with a thousand years of history that has plenty to offer the visiting tourist. <br> Located in the heart of Warwickshire.
                            </div>
                            <div class="info-imgs">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="img text-center mt-30">
                                            <img src="assets/img/blog/13.png" alt="">
                                            <span class="color-999 fs-12px mt-20">Images by <a href="#" class="color-000">@sample</a> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="img text-center mt-30">
                                            <img src="assets/img/blog/14.png" alt="">
                                            <span class="color-999 fs-12px mt-20">Images by <a href="#" class="color-000">@sample</a> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text mt-50 color-666">
                                The short answer is yes. According to Kross, when you think of yourself as another person, it allows you lorem ispum lorem suo give yourself more. Notre dame at sume lorem objective, helpful feedback.
                            </div> --}}
                            {{--                             
                            <div class="twitter-info mt-60">
                                <div class="twitter-card">
                                    <div class="twitter-header d-flex align-items-center justify-content-between">
                                        <div class="twitter-user d-flex align-items-center">
                                            <div class="icon-50 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                                <img src="assets/img/team/3.jpeg" alt="">
                                            </div>
                                            <div class="inf">
                                                <h6 class="fw-bold">Russel B.</h6>
                                                <small class="color-999"> @russelb  - 15 Dec, 2022 </small>
                                            </div>
                                        </div>
                                        <div class="twitter-icon">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                    </div>
                                    <div class="twitter-info mt-40">
                                        <h5>
                                            “The team at <a href="#" class="color-blue5">@Mokyshaagency</a> is incredibly dedicated, knowledgeable, and helpful. The finished product was beautiful, and worth every penny. I would absolutely recommend Mokysha WP Theme.”
                                        </h5>
                                    </div>
                                </div>
                                <h4>Defaulting to Mindfulness</h4>
                                <div class="text color-666 mt-30">
                                    Cray post-ironic plaid, Helvetica keffiyeh tousled Carles banjo before they sold out blog photo booth Marfa semio tics Truffaut. Mustache Schlitz next level blog Williamsburg, deep v typewriter tote bag
                                </div>
                                <ul class="ps-1 ps-lg-5 my-4 color-666 fs-14px lh-7">
                                    <li class="d-flex">
                                        <i class="bi bi-dot me-2 fs-3 lh-2 pt-1"></i>
                                        Welsh novelist Sarah Waters sums it up eloquently
                                    </li>
                                    <li class="d-flex">
                                        <i class="bi bi-dot me-2 fs-3 lh-2 pt-1"></i>
                                        In their classic book, Creativity in Business, based on a popular course they co-taught
                                    </li>
                                    <li class="d-flex">
                                        <i class="bi bi-dot me-2 fs-3 lh-2 pt-1"></i>
                                        Novelist and screenwriter Steven Pressfield
                                    </li>
                                </ul>
                                <div class="text color-666 mt-30">
                                    That immediately brought to mind one of <a href="#" class="text-decoration-underline color-blue5">my fondest</a> memories, involving my daughter when she was just a toddler of one.
                                </div>

                                <div class="blog-share mt-80">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="side-tags">
                                                <div class="content">
                                                    <a href="#">WordPress</a>
                                                    <a href="#">PHP</a>
                                                    <a href="#">HTML/CSS</a>
                                                    <a href="#">Figma</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="share-icons d-flex justify-content-lg-end mt-3 mt-lg-0">
                                                <h6 class="fw-bold me-3 flex-shrink-0 text-uppercase">
                                                    Share on
                                                </h6>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fab fa-tumblr"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-rss"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-comments mt-70">
                                <div class="comment-card card p-5 radius-5 border-0 mt-50">
                                    <div class="d-flex">
                                        <div class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                            <img src="assets/img/team/3.jpeg" alt="">
                                        </div>
                                        <div class="inf">
                                            <h6 class="fw-bold">Russel B.</h6>
                                            <small class="color-999"> @russelb  - 15 Dec, 2022 </small>
                                            <div class="text color-000 fs-12px mt-10">
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis unde. Lorem ispum dolor sit amet
                                            </div>
                                            <div class="social-icons d-flex mt-20">
                                                <a href="#" class="icon-25 rounded-circle d-inline-flex overflow-hidden align-items-center justify-content-center fs-10px me-2">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="#" class="icon-25 rounded-circle d-inline-flex overflow-hidden align-items-center justify-content-center fs-10px me-2">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a href="#" class="icon-25 rounded-circle d-inline-flex overflow-hidden align-items-center justify-content-center fs-10px me-2">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments-content mt-70">
                                    <h3 class="color-000 mb-0"> 02 Comments </h3>
                                    <div class="comment-replay-cont border-bottom border-1 brd-gray pb-40 pt-40">
                                        <div class="d-flex comment-cont">
                                            <div class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                                <img src="assets/img/team/2.jpeg" alt="">
                                            </div>
                                            <div class="inf">
                                                <div class="title d-flex justify-content-between">
                                                    <h6 class="fw-bold fs-14px">Robert Downey Jr</h6>
                                                    <span class="time fs-12px text-uppercase">
                                                        3 hours ago
                                                    </span>
                                                </div>
                                                <div class="text color-000 fs-12px mt-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Atume nusaate staman utra phone limo sumeria                                            
                                                </div>
                                                <a href="#" class="butn border border-1 rounded-pill border-blue5 mt-20 py-2 px-3 hover-blue5 color-blue5">
                                                    <span class="fs-10px"> replay </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex comment-replay ps-5 mt-30 ms-4">
                                            <div class="icon-40 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                                <img src="assets/img/team/5.jpeg" alt="">
                                            </div>
                                            <div class="inf">
                                                <div class="title d-flex justify-content-between">
                                                    <h6 class="fw-bold fs-14px">Tobey McGuire</h6>
                                                    <span class="time fs-12px text-uppercase">
                                                        2 dayes ago
                                                    </span>
                                                </div>
                                                <div class="text color-000 fs-12px mt-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Atume nusaate staman utra phone limo sumeria                                            
                                                </div>
                                                <a href="#" class="butn border border-1 rounded-pill border-blue5 mt-20 py-2 px-3 hover-blue5 color-blue5">
                                                    <span class="fs-10px"> replay </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-replay-cont pb-40 pt-40">
                                        <div class="d-flex comment-cont">
                                            <div class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                                <img src="assets/img/team/4.jpeg" alt="">
                                            </div>
                                            <div class="inf">
                                                <div class="title d-flex justify-content-between">
                                                    <h6 class="fw-bold fs-14px">Ben Chiwell</h6>
                                                    <span class="time fs-12px text-uppercase">
                                                        December 25, 2022
                                                    </span>
                                                </div>
                                                <div class="text color-000 fs-12px mt-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Atume nusaate staman utra phone limo sumeria                                            
                                                </div>
                                                <a href="#" class="butn border border-1 rounded-pill border-blue5 mt-20 py-2 px-3 hover-blue5 color-blue5">
                                                    <span class="fs-10px"> replay </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form class="comment-form d-block pt-30">
                                    <h3 class="color-000 mb-40"> Leave A Comment </h3>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-30">
                                                <textarea class="form-control radius-4 fs-12px p-3" rows="6" placeholder="Write your comment here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4 mb-lg-0">
                                                <input type="text" class="form-control fs-12px radius-4 p-3" placeholder="Your Name *">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control fs-12px radius-4 p-3" placeholder="Your Email *">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-check mt-20">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label fs-12px" for="flexCheckDefault">
                                                    Save my name & email in this browser for next time I comment
                                                </label>
                                              </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="btn rounded-pill blue5-3Dbutn hover-blue5 sm-butn fw-bold mt-40">
                                                <span>Submit Comment </span>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end all-news ====== -->


        <!-- ====== start Popular Posts ====== -->
        <section class="popular-posts related Posts section-padding pb-100 bg-gray5">
            <div class="container">
                <h5 class="fw-bold text-uppercase mb-50">Related Posts</h5>
                <div class="related-postes-slider position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($blogs as $blog)
                                <div class="swiper-slide">
                                    <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                        <a href="/blogs/{{$blog->nav_name}}" class="img radius-7 overflow-hidden img-cover">
                                            <img src="{{$blog->banner_image}}" class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body px-0">
                                            <small class="d-block date mt-10 fs-10px fw-bold">
                                                {{-- <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a> --}}
                                                <i class="bi bi-clock me-1"></i>
                                                @php 
                                                    // Assuming $a->updated_at is a valid date/time value
                                                    $updated_at = Carbon::parse($blog->updated_at);
                                                @endphp
                                                <a href="#" class="op-8">Posted on {{$updated_at->diffForHumans()}}</a>
                                            </small>
                                            <h5 class="fw-bold mt-10 title">
                                                <a href="/blogs/{{$blog->nav_name}}">{{$blog->caption}}</a>
                                            </h5>
                                            <p class="small mt-2 op-8">
                                                {!! str_limit(strip_tags($blog->long_content), 100, ' [...]') !!}
                                            </p>
                                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                        {{ str_limit($blog->icon_image_caption, 1, '') ?? "A" }}
                                                    </span>
                                                    {{-- <a href="#" class="mt-1">
                                                        By Admin
                                                    </a> --}}
                                                    <span class="">
                                                        {{ $blog->icon_image_caption ?? "By Admin" }}
                                                   </span>
                                                </div>
                                                {{-- <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div> --}}                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($loop->iteration == 10)
                                @break                        
                            @endif
                            @endforeach
                            {{-- <div class="swiper-slide">
                                <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                    <a href="page-single-post-5.html" class="img radius-7 overflow-hidden img-cover">
                                        <img src="assets/img/blog/7.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body px-0">
                                        <small class="d-block date mt-10 fs-10px fw-bold">
                                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">Posted on 3 Days ago</a>
                                        </small>
                                        <h5 class="fw-bold mt-10 title">
                                            <a href="page-single-post-5.html">AI With Fingerprint</a>
                                        </h5>
                                        <p class="small mt-2 op-8">If there’s one way that wireless technology has
                                            changed the way we work.
                                        </p>
                                        <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#" class="mt-1">
                                                    By Admin
                                                </a>
                                            </div>
                                            <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card border-0 bg-transparent rounded-0 p-0  d-block">
                                    <a href="page-single-post-5.html" class="img radius-7 overflow-hidden img-cover">
                                        <img src="assets/img/blog/5.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body px-0">
                                        <small class="d-block date mt-10 fs-10px fw-bold">
                                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">Posted on 3 Days ago</a>
                                        </small>
                                        <h5 class="fw-bold mt-10 title">
                                            <a href="page-single-post-5.html">NFT Game! New Oppoturnity</a>
                                        </h5>
                                        <p class="small mt-2 op-8">If there’s one way that wireless technology has
                                            changed the way we work.
                                        </p>
                                        <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#" class="mt-1">
                                                    By Admin
                                                </a>
                                            </div>
                                            <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- ====== end Popular Posts ====== -->

    </main>
    <!--End-Contents-->
@endsection