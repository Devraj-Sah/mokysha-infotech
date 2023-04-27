@php
    use Carbon\Carbon;
    $helper = new \App\Helpers\FrontendHelper();

    $childs  = $slug_detail->childs()->get();

    $slider = $childs->first();
    $blogs = $helper->getblogs();

    // dd($blogs);
    
@endphp


@extends('layouts.master')
@push('title')
    Blog
@endpush
@section('content')
    <!--Contents-->
    <main class="blog-page style-5">


        <!-- ====== start blog-slider ====== -->
        <section class="blog-slider pt-50 pb-50 style-1">
            <div class="container">
                <div class="blog-details-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($slider->childs as $slide)
                                <div class="swiper-slide">
                                    <div class="content-card">
                                        <div class="img overlay">
                                            <img src="{{$slide->banner_image}}" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="cont">
                                                        @php 
                                                            // Assuming $a->updated_at is a valid date/time value
                                                            $updated_at = Carbon::parse($slide->updated_at);
                                                        @endphp
                                                        <small class="date small mb-20"> 
                                                            <i class="far fa-clock me-1"></i> 
                                                            Posted on 
                                                            <a href="#">{{$updated_at->diffForHumans()}}</a> 
                                                        </small>
                                                        <h2 class="title">
                                                            <a href="/{{$slider->nav_name}}/{{$slide->nav_name}}">{{$slide->caption}}</a>
                                                        </h2>
                                                        <p class="fs-13px mt-10 text-light text-info">{!! str_limit(strip_tags($slide->long_content), 100, ' [...]') !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            @endforeach
                        </div>
                    </div>

                    <!-- ====== pagination ====== -->
                    <div class="swiper-pagination"></div>
                    <!-- ====== arrows ====== -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- ====== end blog-slider ====== -->


        <!-- ====== start Popular Posts ====== -->
        <section class="popular-posts pt-50 pb-100 border-bottom brd-gray">
            <div class="container">
                <h5 class="post-sc-title text-center text-uppercase mb-70">Popular Posts</h5>
                <div class="row gx-5">
                    @foreach ($blogs->slice(3) as $blog)                    
                        <div class="col-lg-4 border-end brd-gray">
                            <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                                <div class="img radius-7 overflow-hidden img-cover">
                                    <img src="{{$blog->banner_image}}" class="card-img-top" alt="...">
                                </div>
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
                                        <a href="/{{$slider->nav_name}}/{{$blog->nav_name}}">{{$blog->caption}}</a>
                                    </h5>
                                    <p class="small mt-2 op-8 fs-10px">{!! str_limit(strip_tags($blog->long_content), 100, ' [...]') !!}
                                    </p>
                                    <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                        <div class="l_side d-flex align-items-center">
                                            <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                {{ str_limit($blog->icon_image_caption, 1, '') ?? "A" }}    
                                            </span>
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
                        @if ($loop->iteration == 3)
                            @break                        
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ====== end Popular Posts ====== -->


        <!-- ====== start all-news ====== -->
        <section class="all-news section-padding blog bg-transparent style-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        @foreach ($blogs->slice(6) as $blog)  
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="{{$blog->banner_image}}" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            {{-- <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold"> news </a> --}}
                                            <i class="bi bi-clock me-1"></i>
                                            @php 
                                                // Assuming $a->updated_at is a valid date/time value
                                                $updated_at = Carbon::parse($blog->updated_at);
                                            @endphp
                                            <a href="#" class="op-8">Posted on {{$updated_at->diffForHumans()}}</a>
                                        </small>
                                        <a href="/blogs/{{$blog->nav_name}}" class="card-title mb-10">{{$blog->caption}}</a>
                                        <p class="fs-13px color-666">{!! str_limit(strip_tags($blog->long_content), 100, ' [...]') !!}</p>
                                        <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                                    {{ str_limit($blog->icon_image_caption, 1, '') ?? "A" }}    
                                                </span>
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
                        </div>
                        @endforeach
                        {{-- <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/4.jpeg" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">news</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 Days ago</a>
                                        </small>
                                        <a href="page-single-post-5.html" class="card-title mb-10">VR Game, Oppoturnity & Challenge</a>
                                        <p class="fs-13px color-666">If there’s one way that wireless technology has changed the way we work, it’s that will everyone [...]</p>
                                        <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> Admin
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
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/10.png" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">tips
                                                & tricks</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 Days ago</a>
                                        </small>
                                        <a href="page-single-post-5.html" class="card-title mb-10">6 Tips To Help You Build Your Social Media Effeciency & Better</a>
                                        <p class="fs-13px color-666">If there’s one way that wireless technology has changed the way we work, it’s that will everyone [...]</p>
                                        <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> Admin
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
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/11.png" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">tips
                                                & tricks</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 Days ago</a>
                                        </small>
                                        <a href="page-single-post-5.html" class="card-title mb-10">The New Trend Of Marketing With Tiktok, Should Or Not?</a>
                                        <p class="fs-13px color-666">If there’s one way that wireless technology has changed the way we work, it’s that will everyone [...]</p>
                                        <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> Admin
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
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/9.png" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">tips
                                                & tricks</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 Days ago</a>
                                        </small>
                                        <a href="page-single-post-5.html" class="card-title mb-10">Workflow Strategy For E-Shop</a>
                                        <p class="fs-13px color-666">If there’s one way that wireless technology has changed the way we work, it’s that will everyone [...]</p>
                                        <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> Admin
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
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/3.jpeg" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">tips
                                                & tricks</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 Days ago</a>
                                        </small>
                                        <a href="page-single-post-5.html" class="card-title mb-10">Wireframe For UI/UX</a>
                                        <p class="fs-13px color-666">If there’s one way that wireless technology has changed the way we work, it’s that will everyone [...]</p>
                                        <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> Admin
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
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 pb-30 mb-30 mb-lg-0 pb-lg-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/12.png" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">tips
                                                & tricks</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 Days ago</a>
                                        </small>
                                        <a href="page-single-post-5.html" class="card-title mb-10">Freelancer Days 2022, What’s new?</a>
                                        <p class="fs-13px color-666">If there’s one way that wireless technology has changed the way we work, it’s that will everyone [...]</p>
                                        <div class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted">By</small> Admin
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
                        </div> --}}

                        {{-- <div class="pagination style-5 color-5 justify-content-center mt-60">
                            <a href="#" class="active">
                                <span>1</span>
                            </a>
                            <a href="#">
                                <span>2</span>
                            </a>
                            <a href="#">
                                <span>3</span>
                            </a>
                            <a href="#">
                                <span>4</span>
                            </a>
                            <a href="#">
                                <span>...</span>
                            </a>
                            <a href="#">
                                <span>20</span>
                            </a>
                            <a href="#">
                                <span class="text">next <i class="fas fa-chevron-right"></i> </span>
                            </a>
                        </div> --}}
                    </div>                    
                </div>
            </div>
        </section>
        <!-- ====== end all-news ====== -->

    </main>
    <!--End-Contents-->
@endsection