@php
    $global_setting = app\Models\GlobalSetting::all()->first();
    
@endphp


@extends('layouts.master')

@push('title')
    Contact
@endpush

@section('content')
<main class="contact-page style-5">
    <!-- ====== start contact page ====== -->
    <section class="contact section-padding pt-50 style-6">
        <div class="container">
            <div class="section-head text-center mb-100 style-5">
                <h2 class="mb-20"> Get In <span> Touch </span> </h2>
                <p>We will contact again after receive your request in 24h</p>
            </div>
            <div class="text-center mb-100">
                <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50 mt-30 color-blue5">{{$global_setting->phone_ne}}</h2>
                <h4 class="fw-normal mb-20 color-000">{{$global_setting->site_email}}</h4>
                <h4 class="fw-normal mb-10 color-000">{{$global_setting->website_full_address}}</h4>
            </div>
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form action="{{ route('contactstore') }}" class="form" method="post" enctype='multipart/form-data'>
                            @csrf
                            <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="name" class="form-control" placeholder="Name"> 
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address *" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="number" class="form-control"  placeholder="Phone Number *">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-20">
                                        <input type="text" name="apply_for" class="form-control" placeholder="Your Website (option)">
                                    </div>
                                </div>
                                {{-- <div class="col-lg-12">
                                    <div class="form-group mb-20">
                                        <select name="option" class="form-select">
                                            <option value="how can we help" selected>How can we help you?</option>
                                            <option value="option 1">option 1</option>
                                            <option value="option 2">option 2</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea rows="10" name="message" class="form-control" placeholder="How can we help you?"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="form-check d-inline-flex mt-30 mb-30">
                                        <input class="form-check-input me-2 mt-0" type="checkbox" value="" id="flexCheckDefault" required>
                                        <label class="form-check-label small" for="flexCheckDefault">
                                            By submitting, i’m agreed to the <a href="#" class="text-decoration-underline">Terms & Conditons</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <input type="submit" value="Send Your Request" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <img src="/website/assets/img/icons/contact_a.png" alt="" class="contact_a">
                <img src="/website/assets/img/icons/contact_message.png" alt="" class="contact_message">
            </div>
        </div>
    </section>
    <!-- ====== end contact page ====== -->

    <!-- ====== start contact page ====== -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2865.7136091568295!2d85.33404483926167!3d27.684531872009487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19956ca7e4b5%3A0xb93699b7a545c7e2!2sShreenagar%2C%20Kathmandu%2044600!5e1!3m2!1sen!2snp!4v1682592680874!5m2!1sen!2snp"height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- ====== start contact page ====== -->
</main>
@endsection
