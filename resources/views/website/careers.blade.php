@php
    // use Carbon\Carbon;
    // $helper = new \App\Helpers\FrontendHelper();

    $childs  = $slug_detail->childs()->get();

    $all_services = $childs->first();
    // $blogs = $helper->getblogs();

    // dd($projects);
    
@endphp
@extends('layouts.master')
@push('title')
    Careers
@endpush

@section('content')

    <!--Contents-->
    <main class="careers-page style-5 pt-100">
        {{--
        <!-- ====== start careers-images ====== -->
        <section class="careers-images pb-100">
            <div class="section-head text-center mb-60 style-5">
                <h2 class="mb-20"> We're Looking For <span> Talented People </span> </h2>
                <div class="text color-666">More than 15,000 companies trust and choose Itech</div>
                <button class="btn bg-blue5 sm-butn text-white hover-darkBlue mt-4 rounded-pill">
                    <span>See All Positions</span>
                </button>
            </div>
            <div class="imgs-content">
                <div class="imgs-content-slider mb-5">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/1.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/2.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/3.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/4.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="imgs-content-slider" dir="rtl">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/6.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/7.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/8.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/2.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img img-cover radius-5 overflow-hidden">
                                    <img src="assets/img/careers/4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== start careers-images ====== --> --}}

        <!-- ====== start careers positions ====== -->
        <section class="careers-positions pb-100">
            <div class="container">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20"> Opening <span> Positions </span> </h2>
                    {{-- <div class="text color-666">More than 15,000 companies trust and choose Itech</div> --}}
                </div>
                <div class="row">
                    @foreach ($all_services->childs as $item)                        
                        <div class="col-lg-4">
                            <a href="/{{$all_services->nav_name}}/{{$item->nav_name}}" class="position-card mb-4">
                                <h5> {{$item->caption}} </h5>
                                <p> {!! $item->short_content ?? "We’re looking for a mid-level product designer to join our team" !!} </p>
                                <div class="time">
                                    <span class="me-4"> <i class="fal fa-clock me-1 color-main"></i> {{$item->icon_image_caption}} </span>
                                    {{-- <span> <i class="fal fa-dollar-sign me-1 color-main"></i> 10k - $20k </span> --}}
                                </div>
                                <span class="trend-mark"> <i class="fas fa-bolt"></i> </span>
                            </a>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4">
                        <a href="#" class="position-card mb-4">
                            <h5> Wesite Developer </h5>
                            <p> We’re looking for a Senior Website Developer to join our team </p>
                            <div class="time">
                                <span class="me-4"> <i class="fal fa-clock me-1 color-main"></i> Full-time </span>
                                <span> <i class="fal fa-dollar-sign me-1 color-main"></i> 10k - $20k </span>
                            </div>
                            <span class="trend-mark"> <i class="fas fa-bolt"></i> </span>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="position-card mb-4">
                            <h5> Game Developer </h5>
                            <p> We’re looking for a rockstar Pro Game Developer to join our team </p>
                            <div class="time">
                                <span class="me-4"> <i class="fal fa-clock me-1 color-main"></i> Full-time </span>
                                <span> <i class="fal fa-dollar-sign me-1 color-main"></i> 10k - $20k </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="position-card mb-4 mb-lg-0">
                            <h5> UI & UX Designer </h5>
                            <p> We’re looking for a Super Kicks Junior UI & UX Designer to join our team </p>
                            <div class="time">
                                <span class="me-4"> <i class="fal fa-clock me-1 color-main"></i> Full-time </span>
                                <span> <i class="fal fa-dollar-sign me-1 color-main"></i> 10k - $20k </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="position-card mb-4 mb-lg-0">
                            <h5> Content Writer </h5>
                            <p> We’re looking for a mid-level Content Writer to join our team </p>
                            <div class="time">
                                <span class="me-4"> <i class="fal fa-clock me-1 color-main"></i> Full-time </span>
                                <span> <i class="fal fa-dollar-sign me-1 color-main"></i> 10k - $20k </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#" class="position-card">
                            <h5> iOs App Developer </h5>
                            <p> We’re looking for a mid-level Android & iOs App Developer to join </p>
                            <div class="time">
                                <span class="me-4"> <i class="fal fa-clock me-1 color-main"></i> Full-time </span>
                                <span> <i class="fal fa-dollar-sign me-1 color-main"></i> 10k - $20k </span>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- ====== end careers positions ====== -->

        {{-- <!-- ====== start career form ====== -->
        <section class="career-form section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-numbers">
                            <h2> Looking For Oppertunity </h2>
                            <p> More than 15,000 companies trust and choose Itech </p>
                            <div class="career-numbers mt-50">
                                <div class="row gx-5">
                                    <div class="col-5">
                                        <div class="mum-card">
                                            <h3> <span class="counter"> 5000 </span> </h3>
                                            <small> Project Completed </small>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="mum-card">
                                            <h3> <span class="counter"> 1 </span> M+ </h3>
                                            <small> Happy Users </small>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="mum-card">
                                            <h3> <span class="counter"> 100 </span> </h3>
                                            <small> Team Members </small>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="mum-card">
                                            <h3> <span class="counter"> 10 </span> </h3>
                                            <small> Offline Basement </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="contact.php" class="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                        <span class="icon"> <i class="fas fa-user"></i> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="Email Adress">
                                        <span class="icon"> <i class="fas fa-envelope"></i> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                        <span class="icon"> <i class="fas fa-phone"></i> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4 upload-card">
                                        <div class="form-control">
                                            <span id="upload_text"> <i class="fas fa-cloud"></i> Upload CV</span>
                                            <input type="file" class="upload_input">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <textarea rows="7" class="form-control" placeholder="Cover letter"></textarea>
                                        <span class="icon"> <i class="fas fa-pen"></i> </span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn bg-white sm-butn mt-4 rounded-3">
                                <span class="text-dark"> Make Request <i class="fal fa-long-arrow-right ms-2 color-blue5"></i> </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <img src="assets/img/careers/map.png" alt="" class="map_img">
        </section>
        <!-- ====== end career form ====== --> --}}
        
        <!-- ====== start careers-features ====== -->
        <section class="careers-features pb-70">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="careers-feat-card">
                                <div class="icon">
                                    <img src="/website/assets/img/icons/features/14.png" alt="">
                                </div>
                                <div class="info">
                                    <h4> Innovation for all of goods tune. </h4>
                                    <p> We proud of our 5star rating with over 200 reviews. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="careers-feat-card">
                                <div class="icon">
                                    <img src="/website/assets/img/icons/features/15.png" alt="">
                                </div>
                                <div class="info">
                                    <h4> You can act & get power like boss. </h4>
                                    <p> We proud of our 5star rating with over 200 reviews. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="careers-feat-card">
                                <div class="icon">
                                    <img src="/website/assets/img/icons/features/16.png" alt="">
                                </div>
                                <div class="info">
                                    <h4> In it together with all of time. </h4>
                                    <p> We proud of our 5star rating with over 200 reviews. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="careers-feat-card">
                                <div class="icon">
                                    <img src="/website/assets/img/icons/features/17.png" alt="">
                                </div>
                                <div class="info">
                                    <h4> Get weekly reward in the mean time. </h4>
                                    <p> We proud of our 5star rating with over 200 reviews. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end careers-features ====== -->

    </main>
    <!--End-Contents-->

@endsection