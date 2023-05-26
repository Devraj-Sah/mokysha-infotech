@php
    // use Carbon\Carbon;
    // $helper = new \App\Helpers\FrontendHelper();
    
    $job  = $slug_detail;
    $all_services = $job->parents;

    // $all_services = $childs->first();
    // $blogs = $helper->getblogs();

    // dd($all_services);
    
@endphp
@extends('layouts.master')
@push('title')
    {{$slug_detail->caption ?? ""}}
@endpush

@section('content')

    <!--Contents-->
    <main class="career-details-page style-5 pt-100">

        <!-- ====== start careers-features ====== -->
        <section class="jop-details pb-100">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="jop-info">
                                {{-- <div class="tags mb-40">
                                    <a href="#"> Design/Creative </a>
                                    <a href="#"> UI/UX </a>
                                </div> --}}
                                <h3 class="main-title mb-10"> {{$job->caption ?? ""}} </h3>
                                <p class="pb-40 color-999"> By <a href="#" class="color-000"> Mokyhsa Infotech. </a> </p>
                                <div class="d-flex justify-content-between flex-wrap py-4 border-1 border-bottom border-top brd-gray">
                                    <span class="me-4"> <i class="fal fa-clock me-1 color-main"></i> {{$job->icon_image_caption}} Full-time </span>
                                    <a href="/career" class="color-blue5 mt-3 mt-lg-0"> View all jobs of this company </a>
                                </div>
                                {!! $job->long_content ?? "" !!}                                 

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="summary-card">
                                <img src="{{$job->banner_image ?? "/website/images/job-detail.png"}}" alt="" style="height: 450px; object-fit: cover;">
                                {{-- <h6 class="mb-20 pb-20 border-bottom border-1 brd-gray"> Summary </h6>
                                <ul>
                                    <li> Published on: <span class="color"> 6 Sep 2022 </span> </li>
                                    <li> Vacancy: <span class="color"> 1 </span> </li>
                                    <li> Employment Status: <span class="color"> Full-time </span> </li>
                                    <li> Experience: <span class="color"> At least 1 year(s) </span> </li>
                                    <li> Gender: <span class="color"> Male/Females </span> </li>
                                    <li> Age: <span class="color"> 18 to 35 years </span> </li>
                                    <li> Job Location: <span class="color"> Egypt, Cairo  </span> </li>
                                    <li> Salary: <span class="color"> Negotiable  </span> </li>
                                    <li> Application Deadline: <span class="color"> 6 Nov 2022  </span> </li>
                                </ul>
                                <a href="#" class="btn bg-blue5 sm-butn text-white hover-darkBlue w-100 mt-3 rounded-pill py-3">
                                    <span> Apply For Job </span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end careers-features ====== -->


        <!-- ====== start careers positions ====== -->
        {{-- <section class="careers-positions">
            <div class="container">
                <div class="content section-padding border-1 border-top brd-gray">
                    <div class="section-head mb-60 style-5">
                        <h2 class="mb-20"> Opening <span> Positions </span> </h2>
                    </div>
                    <div class="@if(count($all_services->childs) < 3) careers-positions-slider @else careers-positions-slider5 @endif  ">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($all_services->childs as $item)                        
                                <div class="swiper-slide">
                                    <a href="/{{$all_services->nav_name}}/{{$item->nav_name}}" class="position-card mb-4">
                                        <h5> {{$item->caption}} </h5>
                                        <p> {!! $item->short_content ?? "We’re looking for a mid-level product designer to join our team" !!} </p>
                                        <div class="time">
                                            <span class="me-4"> <i class="fal fa-clock me-1 color-main"></i> {{$item->icon_image_caption}} </span>
                                        </div>
                                        <span class="trend-mark"> <i class="fas fa-bolt"></i> </span>
                                    </a>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>
        </section> --}}
        <!-- ====== end careers positions ====== -->


        <!-- ====== start career form ====== -->
        <section class="career-form section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-numbers">
                            <h2> Looking For Oppertunity </h2>
                            <p>Apply for job from below section: </p>
                            {{-- <div class="career-numbers mt-50">
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
                            </div> --}}
                        {{-- </div>
                    </div>
                    <div class="col-lg-6"> --}}
                        <form action="{{ route('contactstore') }}" method="post" enctype='multipart/form-data' class="form  mt-50">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                                        <span class="icon"> <i class="fas fa-user"></i> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <input type="email" name="email" class="form-control" placeholder="Email Adress">
                                        <span class="icon"> <i class="fas fa-envelope"></i> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <input type="text" name="number" class="form-control" placeholder="Phone Number">
                                        <span class="icon"> <i class="fas fa-phone"></i> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4 upload-card">
                                        <div class="form-control">
                                            <span id="upload_text"> <i class="fas fa-cloud"></i> Upload CV</span>
                                            <input type="file" name="file" class="upload_input">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <textarea rows="7" name="message" class="form-control" placeholder="Cover letter"></textarea>
                                        <span class="icon"> <i class="fas fa-pen"></i> </span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn bg-white sm-butn mt-4 rounded-3" type="submit">
                                <span class="text-dark"> Make Request <i class="fal fa-long-arrow-right ms-2 color-blue5"></i> </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <img src="assets/img/careers/map.png" alt="" class="map_img">
        </section>
        <!-- ====== end career form ====== -->

    </main>
    <!--End-Contents-->

@endsection