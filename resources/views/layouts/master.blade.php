@php
    $global_setting = app\Models\GlobalSetting::all()->first();
    $normal_gallary_notice = app\Models\Navigation::query()
        ->where('nav_category', 'Main')
        ->where('page_type', '!=', 'Job')
        ->where('page_type', '!=', 'Photo Gallery')
        ->where('page_type', '!=', 'Notice')
        ->where('parent_page_id', 0)
        ->where('page_status', '1')
        ->orderBy('position', 'ASC')
        ->get();
    if (isset($normal)) {
        $seo = $normal;
    } elseif (isset($job)) {
        $seo = $job;
    }
    
    $father = [];
    $commentaries = App\Models\Navigation::query()
        ->where('page_type', 'Commentaries')
        ->orWhere('page_type', 'Monthly Analysis')
        ->get();
       
    // return $commentaries;
    foreach ($commentaries as $index => $value) {
        $p = $value->parents;
        if(isset($p->caption)){
            $father[$p->caption] = $p;
        }
    }
    
@endphp


{{-- @dd($father) --}}


{{-- @dd($normal) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-----SEO--------->

    <title> @stack('title') | {{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    {{-- <meta property="twitter:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}"> --}}
    <meta property="twitter:image" content="{{ asset('/website/images/twitter_300.png') }}">



    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ '/uploads/icons/' . $global_setting->favicon }}" type="image/png">

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="/website/assets/css/lib/bootstrap.min.css">


    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <link rel="apple-touch-icon" href="/website/img/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="/website/assets/css/lib/all.min.css">
    <link rel="stylesheet" href="/website/assets/css/lib/animate.css">
    <link rel="stylesheet" href="/website/assets/css/lib/jquery.fancybox.css">
    <link rel="stylesheet" href="/website/assets/css/lib/lity.css">
    <link rel="stylesheet" href="/website/assets/css/lib/swiper.min.css">

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="/website/assets/css/style.css">
    <style>
        .navbar.style-3.nav-scroll {
            background-color: #1f2163 !important;
            padding: 0px;
        }
        .navbar1{
            display: none;
        }
        .navbar1.nav-scroll{
            display: block;
        }
    </style>
</head>

<body>
    @if(isset($which))
    <nav class="navbar navbar-expand-lg navbar-dark style-3 position-absolute w-100" style="padding: 10px;">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ '/uploads/icons/' . $global_setting->site_logo }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" style="font-size:13px" href="/">
                            Homes
                        </a>                      
                    </li>
                   
                    @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:13px" href="{{ route('category', $menu->nav_name) }}">
                            {{ $menu->caption }}
                        </a>
                    </li>
                    @endforeach                 
                    
                </ul>                
            </div>
        </div>
    </nav>
    @else
    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-dark style-3" style="background-color: #1f2163; padding: 10px;">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ '/uploads/icons/' . $global_setting->site_logo }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  style="font-size:13px" href="/">
                            Homes
                        </a>                      
                    </li>
                   
                    @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:13px" href="{{ route('category', $menu->nav_name) }}">
                            {{ $menu->caption }}
                        </a>
                    </li>
                    @endforeach   
                    
                </ul>

            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->
    @endif

    <!-- ====== flash message ====== -->
    {{-- @include('flash-message') --}}

    <!-- ====== End flash message ====== -->
    {{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div> 
    @endif--}}

    @yield('content')

<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/39837298.js"></script>
  <!-- End of HubSpot Embed Code -->

    {{-- <footer>
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <img class="img-responsive mt-60"src="{{ '/uploads/icons/' . $global_setting->site_logo }}"
                            alt="footer_icon">
                    </div>
                    <div class="col-md-6 col-sm-3">
                        {!! $global_setting->page_keyword !!}
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h6 class="text-uppercase text-bold gray-e8 bb display-ib">keep in touch</h6>
                        <span class="ubuntu fz-14 black display-block mt-30 lh-24">Address :
                            {{ $global_setting->website_full_address }} {{ $global_setting->address_ne }}</span>
                        <span class="ubuntu fz-14 black display-block lh-24 contact-info">Phone : <a
                                href="tel:{{ $global_setting->phone }}">{{ $global_setting->phone }}</a>, <br><a
                                href="tel:015437508"> {{ $global_setting->phone_ne }}</a> </span>
                        <span class="ubuntu fz-14 black display-block lh-24 contact-info">Email : <a
                                href="mailto:info@cesifnepal.org">{{ $global_setting->site_email }}</a></span>
                        <div class="footer-social list-inline">
                            <a target="_blank" href="{{ $global_setting->facebook }}"><i
                                    class="fa fa-facebook"></i></a>
                            <a target="_blank" href="{{ $global_setting->twitter }}"><i
                                    class="fa fa-twitter"></i></a>
                            <a target="_blank" href="{{ $global_setting->linkedin }}"><i
                                    class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span class="ubuntu fz-12 text-uppercase text-medium">Copyright ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> CESIF Nepal All Rights Reserved. Developed By <a
                                href="http://radiantnepal.com/" target="_blank">Radiant Infotech Nepal</a>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </footer> --}}
    <footer class="style-3  @if(!isset($which))border-top brd-gray @endif">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-3">
                    <div class="items">
                        <div class="title">
                           {{$global_setting->page_title}}
                        </div>
                        <small class="text">
                           {{$global_setting->page_description}}
                        </small>
                        <div class="socail-icons">
                            <a href="{{$global_setting->twitter}}" class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="{{$global_setting->facebook}}" class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="{{$global_setting->linkedin}}" class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="items">
                        <div class="title">
                            Information
                        </div>
                        <small class="text mb-10 d-block">
                            {{$global_setting->website_full_address}}
                        </small>
                        <small class="text mb-10 d-block">
                            {{$global_setting->phone}}
                        </small>
                        <small class="text d-block">
                            {{$global_setting->site_email}}
                        </small>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            Useful Links
                        </div>
                        <ul>
                           
                            <li>
                                <a href="/about-us"> About Mokysha </a>
                            </li>
                            <li>
                                <a href="/career"> Careers </a>
                            </li>
                            <li>
                                <a href="/services"> Services </a>
                            </li>
                            <li>
                                <a href="/blogs"> Blog </a>
                            </li>
                            <li>
                                <a href="/contact"> Contact </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @php
                    $carrers = App\Models\Navigation::query()->where('page_type','Service Menu')->where('nav_name', 'LIKE', "%services%")->first();
                    $all_services = $carrers->childs()->first()->childs()->latest()->get()->take(5);

                @endphp
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            Services
                        </div>
                        <ul>
                            @foreach ($all_services as $item)
                                <li>
                                    <a href="/career"> {{$item->caption}} </a>
                                </li>                                
                            @endforeach
                            {{-- <li>
                                <a href="page-services-5.html"> Software Development </a>
                            </li>
                            <li>
                                <a href="page-services-5.html"> AI Machine Learning </a>
                            </li>
                            <li>
                                <a href="page-services-5.html"> Data Security </a>
                            </li>
                            <li>
                                <a href="page-services-5.html"> Cloud Services </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <img src="/website/assets/img/color.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <small class="small">
                            © 2022 Copyrights by <a href="#" class="fw-bold text-decoration-underline">Mokysha Infotech.</a> All Rights Reserved. 
                            {{-- Designed by <a href="#" class="fw-bold text-decoration-underline">@Mokysha</a> --}}
                        </small>
                    </div>
                </div>
                <img src="/website/assets/img/testimonials/testi3_lines.png" alt="" class="testi_lines w-100">
            </div>
        </div>
        <img src="/website/assets/img/contact_globe.svg" alt="" class="contact_globe">
    </footer>


    <!-- ====== start to top button ====== -->
    <a href="#" style=" right: 100px;" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>

    <!-- ====== request ====== -->
    <script src="/website/assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="/website/assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="/website/assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="/website/assets/js/lib/wow.min.js"></script>
    <script src="/website/assets/js/lib/jquery.fancybox.js"></script>
    <script src="/website/assets/js/lib/lity.js"></script>
    <script src="/website/assets/js/lib/swiper.min.js"></script>
    <script src="/website/assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="/website/assets/js/lib/jquery.counterup.js"></script>
    <script src="/website/assets/js/lib/pace.js"></script>
    <script src="/website/assets/js/lib/mixitup.min.js"></script>
    <script src="/website/assets/js/lib/scrollIt.min.js"></script>
    <script src="/website/assets/js/main.js"></script>

    <!--jQuery, Bootstrap and other vendor JS-->
{{-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="/website/js/jquery-1.11.3.min.js"><\/script>')
    </script>
    <script src="/website/js/bootstrap.min.js"></script>
    <script src="/website/js/owl.carousel.js"></script>
    <script src="/website/js/jquery.countdown.min.js"></script>
    <script src="/website/js/jquery.mixitup.js"></script> --}}

    @yield('custom_js')
    {{-- <script src="/website/js/Chart.min.js"></script>
    <script src="/website/js/main.js"></script> --}}



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    @if (Session::has('contact'))
        <script>
            Swal.fire(
                'Thank You !',
                "Form submitted sucessfully!!!",
                'success'
            )
        </script>
    @endif
</body>

</html>
