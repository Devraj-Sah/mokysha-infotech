
@php
    use Carbon\Carbon;
    // $helper = new \App\Helpers\FrontendHelper();

    $service_content  = $slug_detail->childs()->get();

    $our_challange = $service_content->first();
    $solution_result = $service_content->slice(1)->first();
    $career_gallery = $service_content->slice(2)->first();

    $projects = App\Models\Navigation::query()->where('page_type','career')->get()->take(10);
    
    // dd($projects);
    
@endphp

@extends('layouts.master')
@push('title')
Project
@endpush
@section('content')
    <!--Contents-->                     
    <main class="single-project pt-50 style-5">


        <!-- ====== start about ====== -->
        <section class="about-app style-5">
            <div class="container">
                <div class="content text-center">
                    <h1 class="color-000 mb-50">{{$slug_detail->caption}}</h1>
                    <div class="about-cards border-bottom brd-gray">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="about-card mb-30 mb-lg-0">
                                    <small class="d-block">
                                        client
                                    </small>
                                    <h6>
                                       {!! $slug_detail->short_content !!}
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="about-card mb-30 mb-lg-0">
                                    <small class="d-block">
                                        services
                                    </small>
                                    <h6>
                                       {{ $slug_detail->parents->caption }}
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="about-card mb-30 mb-lg-0">
                                    <small class="d-block">
                                        date
                                    </small>
                                    <h6>
                                        {{Carbon::parse($slug_detail->updated_at)->isoFormat('MMMM Do, YYYY')}}
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="about-card mb-30 mb-lg-0">
                                    <small class="d-block">
                                        team
                                    </small>
                                    <h6>
                                        {!! $slug_detail->icon_image_caption !!}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="img-content pt-70 pb-70 border-bottom brd-gray overflow-hidden">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="img text-center">
                                    <img src="{{$slug_detail->banner_image}}" alt="" class="main-img">
                                    <img src="/website/assets/img/single_project/bubbls.png" alt="" class="bubbls">
                                    <img src="/website/assets/img/single_project/circle.png" alt="" class="circle">
                                </div>
                                <div class="info mt-30">
                                    <h5 class="lh-4">
                                        {!! $slug_detail->long_content !!}
                                    </h5>
                                    {{-- <a href="#" class="color-blue5 mt-60">https://example.domain</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->


        <!-- ====== start challenge ====== -->
        <div class="challenge section-padding style-5 overflow-hidden">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-4">
                        <div class="section-head style-5">
                            <h2 class=""> Our <br> <span> Challenge </span> </h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="inf" >
                            <div class="text color-666 mb-20">
                               {!! $our_challange->short_content !!}
                            </div>
                            {{-- <ul class="color-000">
                                <li class="d-flex mb-10">
                                    <i class="bi bi-dot fs-6 me-2"></i> --}}
                                   {!! $our_challange->long_content !!}
                                {{-- </li>
                                <li class="d-flex mb-10">
                                    <i class="bi bi-dot fs-6 me-2"></i>
                                    Showcase each type of content: interactive books, animated stories and picture books, audio stories. <br> Create an experience people want to share with others
                                </li>
                                <li class="d-flex mb-10">
                                    <i class="bi bi-dot fs-6 me-2"></i>
                                    Persuade to download app and subscribe
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="imgs mt-60 mb-100">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="img img-cover rounded-3 overflow-hidden mb-30 mb-lg-0">
                                <img src="{{$our_challange->banner_image}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img img-cover rounded-3 overflow-hidden">
                                <img src="{{asset('uploads/main_attachment/'.$our_challange->main_attachment)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4">
                        <div class="section-head style-5">
                            <h2 class=""> Solution & <br> <span> Result </span> </h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="inf">
                            <div class="text color-666 mb-10">
                                {!! $solution_result->short_content !!}
                            </div>
                            <div class="text color-666 mb-20">
                            {!! $solution_result->long_content !!}    
                            </div>
                            {{-- <div class="color-000 mt-50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex mb-20 fw-bold">
                                            <div class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue5 text-white flex-shrink-0 me-3">
                                                <i class="bi bi-check"></i>
                                            </div>
                                            Create & Save your notes with multi-media
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex mb-20 fw-bold">
                                            <div class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue5 text-white flex-shrink-0 me-3">
                                                <i class="bi bi-check"></i>
                                            </div>
                                            Complete note editor with rich text options
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex mb-20 mb-lg-0 fw-bold">
                                            <div class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue5 text-white flex-shrink-0 me-3">
                                                <i class="bi bi-check"></i>
                                            </div>
                                            Web Clipper Extension
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex mb-0 fw-bold">
                                            <div class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue5 text-white flex-shrink-0 me-3">
                                                <i class="bi bi-check"></i>
                                            </div>
                                            Automatically sync in real time
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== end challenge ====== -->


        <!-- ====== start screenshots  ====== -->
        <div class="screenshots style-4">
            <div class="screenshots-slider style-4">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($career_gallery->navigationitems as $item)
                            <div class="swiper-slide">
                                <div class="img">
                                    <img src="{{asset('uploads/photo_gallery/'.$item->file)}}" alt="">
                                </div>
                            </div>                            
                        @endforeach
                    </div>
                </div>
            </div>
            <img src="/website/assets/img/screenshots/hand.png" alt="" class="mob-hand">
        </div>
        <!-- ====== end screenshots  ====== -->


        <!-- ====== start about ====== -->
        <section class="about-app style-5">
            <div class="container">
                <div class="content text-center">
                    {{-- <div class="img-content pt-70 pb-100 border-bottom brd-gray">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="info mt-30">
                                    <h5 class="lh-4">
                                        “The team at <a href="#" class="color-blue5" >@Mokysha</a> is incredibly dedicated, knowledgeable, and helpful. The finished product was beautiful, and worth every penny. I would absolutely recommend Moonex Labs.”
                                    </h5>
                                    <a href="#" class="mt-60 color-666 fs-12px text-uppercase">- <strong class="color-000">Jhon henry </strong> , ceo at notero jsc - </a>
                                    <div class="share mt-100">
                                        <span class="color-999 fs-12px text-uppercase d-block"> share this project  </span>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-goodreads-g"></i>
                                        </a>
                                        <a href="#" class="social-icon">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="next-prog section-padding">
                        <h5 class="color-999 text-uppercase fw-light">next project</h5>
                        <a href="#" class="color-000 fs-1 fw-bold mt-20">Criftocy Landing Page</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->

        <!-- ====== start projects ====== -->
        <section class="projects style-6 p-0">
            <div class="content section-padding rounded-0">
                <div class="container">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20"> Related <span> Projects </span> </h2>
                        <p>We have an experienced team of production and inspection personnel to ensure quality.</p>
                    </div>
                    <div class="slider-3items slider-style-6">
                        <div class="swiper-container pb-0">
                            <div class="swiper-wrapper">
                                @foreach ($projects as $service)
                                    <div class="swiper-slide">
                                        <div class="project-card style-6">
                                            <div class="img">
                                                <img src="{{$service->banner_image}}" alt="">
                                            </div>
                                            <div class="info">
                                                <h3 class="title"><a href="/careers/{{$service->nav_name}}">{{$service->caption}}</a></h3>
                                                <small class="color-blue6"><a href="#">{{$service->caption}}</a></small>
                                                <div class="text">
                                                    {!! str_limit(strip_tags($service->long_content), 80, '...') !!}
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#">SEO Analysis</a></span>
                                                    <span><a href="#">Content Strategy</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                @endforeach
                            </div>
                        </div>

                        <!-- ====== arrows ====== -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end projects ====== -->

    </main>
    <!--End-Contents-->
@endsection