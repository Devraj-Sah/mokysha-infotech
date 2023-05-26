    @php
    $teams = App\Models\Navigation::query()->where('page_type','team')->orderBy('position', 'asc')->latest()->get();
    @endphp
<!-- ====== start team ====== -->
        <section class="team section-padding style-1 team-blue2" data-scroll-index="6">
            <div class="container">
                <div class="section-head long-shape style-3 text-center mb-70">
                    <h3>Meet Our <span>Amazing Team</span></h3>
                </div>
                    <div class="testimonial-slider style-3">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($teams as $item) 
                                <div class="swiper-slide" style="width: auto; margin-right:0px">                       
                                    <div class="team_box">
                                        <div class="avatar">
                                            <img src="{{$item->banner_image}}" alt="">
                                        </div>
                                        <div class="info" style="width: 135px;">
                                            <h6><a href="#">{{$item->caption}}</a></h6>
                                            <small>{{$item->short_content}}</small>
                                            <div class="social_icons">
                                                <a href="{{$item->extra_two}}">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="{{$item->extra_one}}">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a href="{{$item->extra_three}}">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                                {{-- <a href="#">
                                                    <i class="fab fa-github"></i>
                                                </a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- <div class="team_box">
                        <div class="avatar">
                            <img src="/website/assets/img/team/2.jpeg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Bobby Kane</a></h6>
                            <small>CTO</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box">
                        <div class="avatar">
                            <img src="/website/assets/img/team/3.jpeg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Robert Downey Jr</a></h6>
                            <small>Project Manager</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box">
                        <div class="avatar">
                            <img src="/website/assets/img/team/4.jpeg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Andrew Robertson</a></h6>
                            <small>Marketing Leader</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box">
                        <div class="avatar">
                            <img src="/website/assets/img/team/5.jpeg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Alexander Avery</a></h6>
                            <small>Creative Director</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                    
                {{-- <div class="bttns mt-4 text-center mt-50">
                    <a href="page-about-5.html" class="btn rounded-pill bg-blue2 sm-butn mx-1 text-white">
                        <span>See All Team</span>
                    </a>
                    <a href="page-contact-5.html" class="btn rounded-pill border-blue2 hover-blue2 sm-butn mx-1">
                        <span>Join Our Team</span>
                    </a>
                </div> --}}
            </div>
        </section>
        <!-- ====== end team ====== -->
