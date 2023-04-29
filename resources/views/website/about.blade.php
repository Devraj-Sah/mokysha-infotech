@php
    use Carbon\Carbon;
    $blogs = App\Models\Navigation::query()->where('page_type','blogs')->orderBy('updated_at', 'desc')->latest()->get()->take(4);

    $childs  = $slug_detail->childs()->get();
    $about_mokysha = $childs->first();
    $journey_part = $childs->slice(1)->first();
    $trustedby = $childs->slice(2)->first();
    $about_gallery = $childs->slice(3)->first();
@endphp

@extends('layouts.master')
@push('title')
    About
@endpush

@section('content')
    
{{-- <pre>
    {{$trustedby}}
</pre> --}}
      <!--Contents-->
      <main class="about-page style-2">

        <!-- ====== start careers-features ====== -->
        <section class="about style-2 section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img img-cover">
                            <img src="{{$about_mokysha->banner_image}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info px-lg-5">

                            <div class="section-head style-5 mb-40">
                                <h2 class="mb-20"> {{$about_mokysha->short_content}} <span> {{$about_mokysha->long_content}} </span> </h2>
                            </div>

                            <ul class="nav nav-pills" id="pills-tab" role="tablist">

                                @foreach ($about_mokysha->childs as $mvg)

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link  @if ($loop->iteration == 1) active @endif" id="abt1-tab" data-bs-toggle="pill" data-bs-target="#abt{{$mvg->id}}" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                                {{$mvg->caption}}
                                        </button>
                                    </li>
                                    
                                @endforeach

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                @foreach ($about_mokysha->childs as $mvg)

                                    <div class="tab-pane fade @if ($loop->iteration == 1)  show active @endif" id="abt{{$mvg->id}}" role="tabpanel">
                                        <p class="text">{!! $mvg->short_content !!}</p>
                                        <div class="d-flex align-items-center mt-40">
                                            <div class="btns">
                                                <a href="#" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                                    <span> Contact-Us </span>
                                                </a>
                                            </div>
                                            <div class="inf ms-3">
                                                <p class="color-999"> Support Email </p>
                                                <a href="mailto:{{$global_setting->site_email}}" class="fw-bold color-000"> {{$global_setting->site_email}} </a>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="/website/assets/img/about/about2_pattern_l.png" alt="" class="pattern_l">
            <img src="/website/assets/img/about/about2_pattern_r.png" alt="" class="pattern_r">
        </section>
        <!-- ====== end careers-features ====== -->


        <!-- ====== start timeline ====== -->
        <section class="timeline section-padding bg-gray5">
            <div class="container">
                <div class="section-head text-center mb-70 style-5">
                    <h2 class="mb-20"> Journey Was <span> Started </span> </h2>
                    <p>{{$journey_part->short_content}}</p>
                </div>
                <div class="timeline-content">
                    @foreach ($journey_part->childs as $journey)
                        
                        <div class="timeline-card">
                            <div class="row justify-content-around align-items-center">
                                <div class="col-lg-4">
                                    @if ($loop->iteration % 2 != 0)
                                        <div class="card-year text-lg-end wow left_to_right_apperance ">
                                            <h3> {{$journey->short_content}} </h3>
                                        </div> 
                                        
                                    @else
                                        <div class="card-info wow left_to_right_apperance">
                                            <h6> {{$journey->caption}} </h6>
                                            <p> {!! $journey->long_content !!} </p>
                                            <span class="num"> @if ($loop->iteration < 10) 0{{$loop->iteration}} @else {{$loop->iteration}} @endif </span>
                                        </div> 
                                    @endif
                                </div>
                                <div class="col-lg-4">
                                    @if ($loop->iteration % 2 != 0)
                                        <div class="card-info wow left_to_right_apperance ">
                                            <h6> {{$journey->caption}} </h6>
                                            <p> {!! $journey->long_content !!} </p>
                                            <span class="num"> @if ($loop->iteration < 10) 0{{$loop->iteration}} @else {{$loop->iteration}} @endif</span>
                                        </div>                                         
                                    @else
                                        <div class="card-year wow left_to_right_apperance ">
                                            <h3> {{$journey->short_content}} </h3>
                                        </div>                                         
                                    @endif
                                </div>
                            </div>
                            <div class="line wow"></div>
                        </div>
                        {{-- <div class="timeline-card">
                            <div class="row justify-content-around align-items-center">
                                <div class="col-lg-4">
                                    <div class="card-info wow left_to_right_apperance">
                                        <h6> Got Design Rewards </h6>
                                        <p> Sass which stands for 'Syntactically awesome style sheet is an extension of that enables you to use things like variables. </p>
                                        <span class="num"> 02 </span>
                                    </div> 
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-year wow left_to_right_apperance ">
                                        <h3> 2005 </h3>
                                    </div> 
                                </div>
                            </div>
                            <div class="line wow"></div>
                        </div> --}}
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ====== end timeline ====== -->


        <!-- ====== start career form ====== -->
        <section class="clients-imgs pt-100">
            <div class="container">
                <div class="section-head text-center mb-70 style-5">
                    <h2 class="mb-20"> Trusted By Thousands <span> Business </span> </h2>
                </div>
                <div class="clients-content">
                    @foreach ($trustedby->navigationitems as $trust)                        
                        <a href="#" class="client-logo">
                            <img src="{{asset('uploads/photo_gallery/'.$trust->file)}}" alt="">
                        </a>
                    @endforeach
                    
                </div>
                <h5 class="text-center mt-50">{!! $trustedby->long_content ?? "" !!}</h5>
            </div>
            <div class="about2-imgs-slider pt-100">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                            @foreach ($about_gallery->navigationitems as $gallery)
                                <div class="swiper-slide">
                                    <a href="#" class="img img-cover">
                                        <img src="{{asset('uploads/photo_gallery/'.$gallery->file)}}" alt="">
                                    </a>
                                </div>                        
                            @endforeach
                        </div>                        
                </div>
            </div>
        </section>
        <!-- ====== end career form ====== -->

        <!-- ====== start blog ====== -->
        <section class="blog style-8">
            <div class="container">
                <div class="content section-padding">
                    <div class="section-head text-center mb-70 style-5">
                        <h2 class="mb-20"> News & <span> Insights </span> </h2>
                        <p>More than 15,000 companies trust and choose Mokysha</p>
                    </div>
                    <div class="blog-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="main-post wow fadeInUp">
                                    <div class="img img-cover">
                                        <img src="{{$blogs[0]->banner_image}}" alt="">
                                        {{-- <div class="tags">
                                            <a href="#"> Analysis </a>
                                        </div> --}}
                                    </div>
                                    <div class="info pt-30">
                                        <div class="date-author">
                                            <a href="#" class="date">
                                                @php
                                                    $formattedDate = Carbon::parse($blogs[0]->updated_at)->format('M d, Y');
                                                @endphp
                                                {{$formattedDate}}
                                            </a>
                                            <span class="color-999 mx-3"> | </span>
                                            <a href="#" class="author color-999">
                                                By <span class="color-000 fw-bold">  {{ $blogs[0]->icon_image_caption ?? "Admin" }} </span>
                                               
                                            </a>
                                        </div>
                                        <h4 class="title">
                                            <a href="/blogs/{{$blogs[0]->nav_name}}"> {{$blogs[0]->caption}}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="side-posts">
                                    @php
                                        $delay = 0;
                                    @endphp
                                    @foreach ($blogs as $item)
                                        @if ($loop->iteration == 1 )
                                            @continue
                                        @endif
                                        @php
                                            $delay += 0.2;
                                        @endphp
                                        <div class="item wow fadeInUp" @if($loop->iteration != 2) data-wow-delay="{{$delay}}s" @endif >
                                            <div class="img img-cover">
                                                <img src="{{$item->banner_image}}" alt="">
                                            </div>
                                            <div class="info">
                                                <div class="date-author">
                                                    <a href="#" class="date">
                                                    @php
                                                        $formattedDate = Carbon::parse($item->updated_at)->format('M d, Y');
                                                    @endphp
                                                    {{$formattedDate}}
                                                    </a>
                                                    <span class="color-999 mx-3"> | </span>
                                                    <a href="#" class="author color-999">
                                                        By <span class="color-000 fw-bold">{{ $item->icon_image_caption ?? "Admin" }}  </span>
                                                    </a>
                                                </div>
                                                <h4 class="title">
                                                    <a href="/blogs/{{$item->nav_name}}"> {{$item->caption}} </a>
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end blog ====== -->

    </main>
    <!--End-Contents-->

@endsection