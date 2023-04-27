@php
    // use Carbon\Carbon;
    // $helper = new \App\Helpers\FrontendHelper();

    $childs  = $slug_detail->childs()->get();

    $our_services = $childs->first();
    $our_top_services = $childs->slice(1)->first();
    $optimized_user = $childs->slice(2)->first();
    $payment = $childs->slice(3)->first();
    $easy_to_customizable = $childs->slice(4)->first();
    // $blogs = $helper->getblogs();

    // dd($projects);
    
@endphp



@extends('layouts.master')
@push('title')
    Services
@endpush

@section('content')
<main class="services-page style-5">


    <!-- ====== start features ====== -->
    <section class="features section-padding pt-50 style-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20"> Our  <span> Services </span> </h2>
                        <p>
                           {{$our_services->short_content}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    @foreach ($our_services->navigationitems as $item)
                        
                        <div class="col-lg-3">
                            <a href="#" class="features-card mb-30 style-5">
                                <div class="icon">
                                    <img src="{{asset('uploads/photo_gallery/'.$item->file)}}" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="card-title">
                                        {{$item->name}}
                                    </h5>
                                    <p class="text">
                                    {{$item->content}}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- ====== end features ====== -->

    <!-- ====== start services ====== -->
    <section class="services section-padding bg-white pb-50 style-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20"> Our Top  <span> Services </span> </h2>
                        <p>
                           {{$our_top_services->short_content}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="services-slider position-relative style-6">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($our_top_services->navigationitems as $items)
                            
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="{{asset('uploads/photo_gallery/'.$items->file)}}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5> {{$items->name}}</h5>
                                        <div class="text">
                                            {{$items->content}}
                                        </div>
                                    </div>
                                </a>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end services ====== -->


    <!-- ====== start about ====== -->
    <section class="about pt-0 pb-150 style-5">
        <div class="content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 order-2 order-lg-0">
                        <div class="section-head mb-30 style-5">
                            <h2> Optimized User <span> Experiences </span> </h2>
                        </div>
                        <p>{{$optimized_user->short_content}} </p>
                        <div class="line-links">
                            {!! $optimized_user->long_content !!}
                        </div>
                    </div>
                    <div class="col-lg-8 order-0 order-lg-2">
                        <div class="img main-img1">
                            <img src="/website/assets/img/about/about_s5_1_1.png" alt="" class="sm-circle">
                            @foreach ($optimized_user->navigationitems as $item)
                                <img src="{{asset('uploads/photo_gallery/'.$item->file)}}" alt="" class="{{$item->content}}">                                
                            @endforeach
                            <img src="/website/assets/img/about/about_s5_1_5.png" alt="" class="lg-circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="img main-img2">
                            <img src="/website/assets/img/about/about_s5_2_1.png" alt="">
                            <img src="/website/assets/img/about/about_s5_2_2.png" alt="" class="img-body">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section-head mb-30 style-5">
                            <h2> 100+ Payment <span> Gateways </span> </h2>
                        </div>
                        <p>
                            {{$payment->short_content}}
                        </p>
                        <ul class="list-icon">
                           {!! $payment->long_content !!}
                        </ul>
                        <a href="page-contact-5.html" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-50">
                            <span> Book A Free Demo </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 order-2 order-lg-0">
                        <div class="section-head mb-30 style-5">
                            <h2> Easy To <span> Customizable </span> </h2>
                        </div>
                        <p>
                            {!! $easy_to_customizable->long_content !!}
                        </p>
                        <div class="d-flex align-items-center mt-70">
                            <div class="img me-2 flex-shrink-0">
                                <img src="/website/assets/img/about/owners.png" alt="">
                            </div>
                            <div class="inf">
                                <h4 class="color-blue5 mb-0 lh-1">{!!  $easy_to_customizable->short_content !!}</h4>
                                <p>Marketplace Owners Trust Us</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 order-0 order-lg-2">
                        <div class="img main-img3">
                            <img src="/website/assets/img/about/about_s5_3_1.png" alt="" class="img-body">
                            @foreach ($easy_to_customizable->navigationitems as $item)
                                <img src="{{asset('uploads/photo_gallery/'.$item->file)}}" alt="">                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== end about ====== -->


    <!-- ====== start testimonials ====== -->
    <section class="testimonials section-padding bg-gray5 style-5">
        <div class="container">
            <div class="section-head text-center mb-60 style-5">
                <h2 class="mb-20"> Clients <span> Reviews </span> </h2>
                <p> Mokysha loved from thoudsands customer worldwide and get trusted from big companies. </p>
            </div>
        </div>
        <div class="content">
            <div class="testimonial-slider position-relative style-5">
                <div class="swiper-container pb-70">
                    <div class="swiper-wrapper">
                        @foreach ($testimonial as $item)
                            
                            <div class="swiper-slide">
                                <a href="#" class="testi-card style-5">
                                    <div class="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="text">
                                        {!! $item->long_content !!}
                                    </div>
                                    <div class="user mt-40 text-center">
                                        <div class="icon-80 rounded-circle img-cover overflow-hidden m-auto">
                                            <img src="{{ $item->banner_image }}" alt="">
                                        </div>
                                        <h6>{{$item->caption}}</h6>
                                        <small>{!! $item->short_content !!}</small>
                                    </div>
                                </a>
                            </div>

                        @endforeach

                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- ====== end testimonials ====== -->



</main>
@endsection