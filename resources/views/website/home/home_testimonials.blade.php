
        <!-- ====== start testimonials ====== -->
        <section class="testimonials style-3" data-scroll-index="1">
            <div class="container">
                <div class="content section-padding">
                    <div class="section-head style-3">
                        <h3> Loved By Thousand <span>Clients</span></h3>
                    </div>
                    <div class="testimonial-slider style-3">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($testimonial as $item)
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style-3">
                                            <div class="text">
                                                {!! $item->long_content !!}
                                            </div>
                                            <div class="user-img mt-30 d-flex align-items-center">
                                                <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                                    <img src="{{ $item->banner_image }}" alt="">
                                                </div>
                                                <div class="inf">
                                                    <p class="fw-bold">{{$item->caption}}</p>
                                                    <small class="text-muted">{!! $item->short_content !!}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="swiper-slide">
                                    <div class="testimonial-card style-3">
                                        <div class="text">
                                            “Mokysha is 1st our choice for cloud service methods. Extremely security and
                                            fast support.”
                                        </div>
                                        <div class="user-img mt-30 d-flex align-items-center">
                                            <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                                <img src="/website/assets/img/testimonials/user1.jpeg" alt="">
                                            </div>
                                            <div class="inf">
                                                <p class="fw-bold">Conor McGregor</p>
                                                <small class="text-muted">CTO at IBM</small>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="swiper-slide">
                                    <div class="testimonial-card style-3">
                                        <div class="text">
                                            “Mokysha’s Experts really is amazing! high speciality, professional and
                                            friendly. Our profit increased so much. Really very satisfied!
                                        </div>
                                        <div class="user-img mt-30 d-flex align-items-center">
                                            <div class="img icon-40 img-cover rounded-circle overflow-hidden me-3">
                                                <img src="/website/assets/img/testimonials/user2.jpeg" alt="">
                                            </div>
                                            <div class="inf">
                                                <p class="fw-bold">Lucas Digne</p>
                                                <small class="text-muted">Product Management at Invisionapp</small>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <img src="/website/assets/img/testimonials/testi3_lines.png" alt="" class="testi_lines w-100">
            </div>
        </section>
        <!-- ====== end testimonials ====== -->
