 @php
    $carrers = App\Models\Navigation::query()->where('page_type','Service Menu')->where('nav_name', 'LIKE', "%services%")->first();
    $all_services = $carrers->childs()->first()->childs()->get()->take(4);
    // dd($carrers);
 @endphp
 <!-- ====== start services ====== -->
        <section class="services style-3 section-padding pb-70" data-scroll-index="2">
            <div class="container">
                <div class="section-head style-3 d-flex align-items-center">
                    <h3>Our Main <span>Services</span></h3> <a href="/services" class="text-muted ms-5 ps-5 mt-2">See full
                        services <i class="bi bi-chevron-right ms-1"></i></a>
                </div>
                <div class="row">
                    @foreach ($all_services as $item)
                        <div class="col-lg-3 mb-30 mb-lg-0">
                            <div class="service-card style-3">
                                <div class="icon">
                                    <img src="{{$item->banner_image ?? ""}}" alt="">
                                </div>
                                <div class="info">
                                    <h5 class="title">{{$item->caption ?? ""}}</h5>
                                    <div class="text">
                                        {{-- {{$item->long_content ?? ""}} --}}
                                        {!! str_limit(strip_tags($item->long_content), 80, '...') !!}
                                    </div>
                                    <a href="/projects">
                                        <span>see projects</span> <i class="bi bi-chevron-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ====== end services ====== -->
