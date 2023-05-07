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
    Projects
@endpush

@section('content')

    <!--Contents-->
    <main class="portfolio-page style-1">
        <!-- ====== start portfolio-projects ====== -->
        <section class="portfolio-projects section-padding pt-50 style-1">
            <div class="container">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20"> Our <span> Projects </span> </h2>
                    {{-- <pre>{{$all_services->childs->first()->childs->first()}}</pre> --}}
                    <p> We have an experienced team of production and inspection personnel to ensure quality. </p>
                </div>
                <div class="controls"  id="here">
                    <button type="button" class="control" data-filter="all">All</button>
                    @foreach ($all_services->childs as $services)
                        <button type="button" class="control" data-filter=".{{$services->nav_name}}">{{$services->caption}}</button>
                        
                    @endforeach
                </div>
                <section class="portfolio style-1">
                    <div class="content">
                        <div class="row mix-container">
                            @php
                                $count_services = 0;
                            @endphp
                            @foreach ($all_services->childs as $services)
                             {{-- cat -> {{$loop->iteration}} / {{$services->childs}}<br> --}}
                                
                                @foreach ($services->childs as $service)
                                    {{-- sub-> {{$service}} --}}
                                    <div class="col-lg-4 mix {{$services->nav_name}}">
                                        <div class="portfolio-card mb-50">
                                            <div class="img">
                                                <img src="{{$service->banner_image}}" alt="">
                                            </div>
                                            <div class="info">
                                                <h5>
                                                    <a href="/{{$services->nav_name}}/{{$service->nav_name}}">{{$service->caption}} </a> 
                                                </h5>
                                                <small class="d-block color-main text-uppercase">{{$services->caption}}</small>
                                                <div class="text">
                                                    {!! str_limit(strip_tags($service->long_content), 80, '...') !!}
                                                </div>
                                                <div class="tags">
                                                    <a href="#">{{$services->caption}}</a>
                                                    {{-- <a href="#">Management</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $count_services += 1;
                                    @endphp
                                @endforeach
                            @endforeach

                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" id="click" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-30">
                            <span> Load More ({{$count_services}}) </span>
                        </a>
                    </div>
                   
                </section>
            
            </div>
        </section>
        <section class="download section-padding style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="content text-center">
                            <h2>Access your business potentials today & find opportunity for 
                                <span>
                                    bigger success 
                                    <img src="/website/assets/img/header/head5_line.png" alt="" class="head-line">
                                    <img src="/website/assets/img/header/head5_pen.png" alt="" class="head-pen">         
                                </span>
                            </h2>
                            <div class="butns mt-70">
                                <a href="{{ route('contact') }}" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mx-1">
                                    <span> Start A Project Now </span>
                                </a>
                                {{-- <a href="page-about-5.html" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mx-1">
                                    <span> See Pricing & Plan </span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <img src="/website/assets/img/contact_globe.svg" alt="" class="contact_globe"> --}}
        </section>
        <!-- ====== end portfolio-projects ====== -->


    </main>
    <!--End-Contents-->

@endsection

@section('custom_js')
<script>
    // ---------- portfolio mixitup -----------
    var containerEl = document.querySelector('.mix-container');

    var mixer = mixitup(containerEl);
</script>
<script>
    $(document).ready(function() {
        $('#click').on('click', function() {
            $('[data-filter="all"]').click();
            $('html, body').animate({
                scrollTop: $('#here').offset().top
                }, 10);
        });
        });
</script>
@endsection

