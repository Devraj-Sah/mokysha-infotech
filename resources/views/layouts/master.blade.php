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
    {{-- <header>        
        <div class="main-nav">
                <div class="container">
                    <div class="col-md-3 col-sm-3 text-center logo">
                        <a href="/">
                            <img class="img-responsive" src="{{ '/uploads/icons/' . $global_setting->site_logo }}"
                                alt="logo">
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse no-margin no-padding">

                                <ul class="nav navbar-nav">
                                    <li @if (!isset($slug_detail))  @endif><a href="/">Home</a></li>

                                    @foreach ($menus as $menu)
                                        @php $submenus = $menu->childs; @endphp


                                        

                                        <li class="nav-item dropdown" @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif><a
                                                class="dropdown-toggle"
                                                @if ($menu->nav_name == 'career') @else data-toggle="dropdown" @endif
                                                role="button" aria-haspopup="true" aria-expanded="false"
                                                @if ($submenus->count() > 0) href="{{ route('category', $menu->nav_name) }}" @else href="  
                                        {{ route('category', $menu->nav_name) }}" @endif>{{ $menu->caption }}
                                                @if ($menu->nav_name == 'career')
                                                @else
                                                    <span class="caret"></span>
                                                @endif


                                            </a>
                                            

                                            @if ($submenus->count() > 0)
                                                <ul class="dropdown-menu">
                                                    @foreach ($submenus as $sub)
                                                        <li>
                                                            <a
                                                                href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">{{ $sub->caption }}</a>
                                                        </li>
                                                    @endforeach


                                                    @if ($menu->id == 2669)
                                                        @foreach ($father as $father_item)
                                                            <li>
                                                                <a href="{{ route('all-data', $father_item->nav_name) }}">{{ $father_item->caption }}

                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    @else
                                                    @endif
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                    <li><a href="/contact">Contact</a></li>
                                    <li>
                                        <div class="main">  
                                            <!-- Actual search box -->
                                            <div class="form-group has-feedback has-search">
                                                <form action="{{ route('search') }}" method="POST">
                                                    @csrf
                                                    <span class="fa fa-search form-control-feedback"></span>
                                                    <input name="search_query" type="text" class="form-control" placeholder="Search">
                                                    <input type="submit" hidden>
                                                </form>
                                            </div>
                                            
                                        </div>
                                        <script type="text/javascript">
                                            // Using jQuery.
                                            
                                            $(function() {
                                                $('form').each(function() {
                                                    $(this).find('input').keypress(function(e) {
                                                        // Enter pressed?
                                                        if(e.which == 10 || e.which == 13) {
                                                            this.form.submit();
                                                        }
                                                    });
                                            
                                                    $(this).find('input[type=submit]').hide();
                                                });
                                            });
                                            </script>
                                    </li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </nav>





                    </div>
                </div>
        </div>
    </header> --}}
    
    <nav class="navbar navbar-expand-lg navbar-dark style-3 position-absolute w-100" style="padding: 10px;">
        <div class="container">
            <a class="navbar-brand" href="#">
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
                        <a class="nav-link" href="/">
                            Homes
                        </a>                      
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="page-about-5.html">about</a></li>
                            <li><a class="dropdown-item" href="page-product-5.html">product</a></li>
                            <li><a class="dropdown-item" href="page-services-5.html">services</a></li>
                            <li><a class="dropdown-item" href="page-shop-5.html">shop</a></li>
                            <li><a class="dropdown-item" href="page-single-project-5.html">single project</a></li>
                        </ul>
                    </li> -->
                    @foreach ($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category', $menu->nav_name) }}">
                            {{ $menu->caption }}
                        </a>
                    </li>
                    @endforeach

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="page-services.html">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-blog.html">
                            Blogs
                            <!-- <small class="fs-10px icon-20 rounded-pill bg-blue5 text-white fw-bold px-3 ms-2 d-inline-flex justify-content-center align-items-center">
                                3
                            </small> -->
                        </a>
                    </li>
      
                    <li class="nav-item">
                        <a class="nav-link" href="page-portfolio-5.html">
                            Careers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-contact-5.html">
                            contact us
                        </a>
                    </li> --}}
                    
                </ul>
                <!-- <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <span class="nav-item">
                            <a class="nav-link" href="page-contact-5.html">
                                <i class="bi bi-person fs-5 me-2"></i>
                                sign in
                            </a>
                        </span>
                        <a href="page-contact-5.html" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                            <span>Start Free Trial <i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </nav>



    @yield('content')

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
    <footer class="style-3">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-3">
                    <div class="items">
                        <div class="title">
                            Mokysha - 1st Choice for IT Solutions
                        </div>
                        <small class="text">
                            Over 25 years working in IT services developing software applications and mobile apps for clients all over the world. For your very specific industry, we have highly-tailored IT solutions.
                        </small>
                        <div class="socail-icons">
                            <a href="#" class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray">
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
                            223 Thatcher Road St, Brookly, Manhattan, NY 10463, United States
                        </small>
                        <small class="text mb-10 d-block">
                            +031 5689 89 98
                        </small>
                        <small class="text d-block">
                            contact@Mokyshasolution.co
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
                                <a href="home-software-company.html"> Home </a>
                            </li>
                            <li>
                                <a href="page-about-5.html"> About Mokysha </a>
                            </li>
                            <li>
                                <a href="page-portfolio-5.html"> Projects </a>
                            </li>
                            <li>
                                <a href="page-about-5.html"> How It Works </a>
                            </li>
                            <li>
                                <a href="page-blog-5.html"> Blog </a>
                            </li>
                            <li>
                                <a href="page-contact-5.html"> Contact </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            Services
                        </div>
                        <ul>
                            <li>
                                <a href="page-services-5.html"> It Consultation </a>
                            </li>
                            <li>
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
                            </li>
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
                            © 2022 Copyrights by <a href="#" class="fw-bold text-decoration-underline">Mokysha Co.</a> All Rights Reserved. Designed by <a href="#" class="fw-bold text-decoration-underline">@Mokysha</a>
                        </small>
                    </div>
                </div>
                <img src="/website/assets/img/testimonials/testi3_lines.png" alt="" class="testi_lines w-100">
            </div>
        </div>
        <img src="/website/assets/img/contact_globe.svg" alt="" class="contact_globe">
    </footer>


    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
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



    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}



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
