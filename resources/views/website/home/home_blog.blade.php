@php
use Carbon\Carbon;
$blogs = App\Models\Navigation::query()->where('page_type','blogs')->orderBy('updated_at', 'desc')->latest()->get()->take(3);

$faqs = App\Models\Navigation::query()->where('page_type','Group')->where('nav_name', 'LIKE', "%faqs%")->latest()->first();
$all_faqs = $faqs->childs()->get();


$clients = App\Models\Navigation::query()->where('page_type','Photo Gallery')->where('nav_name', 'LIKE', "%trusted-clients%")->latest()->first();

@endphp
<!-- ====== start blog ====== -->
        <section class="blog section-padding style-3" data-scroll-index="7">
            <div class="container">
                <div class="row gx-0 justify-content-between">
                    <div class="col-lg-5">
                        <div class="blog-content">
                            <div class="section-head style-3 d-flex align-items-center mb-50">
                                <h3>Mokysha’s <span>Journal</span></h3> <a href="/blogs" class="text-muted ms-5 ps-5 mt-2">All
                                    Articles <i class="bi bi-chevron-right ms-1"></i></a>
                            </div>
                            @foreach ($blogs as $blog)
                                <div class="card border-0 bg-transparent rounded-0 @if ($loop->last) pb-4 mb-4 pb-lg-0 mb-lg-0 @else border-bottom brd-gray pb-4 mb-4 @endif">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <a href="/blogs/{{$blog->nav_name}}" class="img img-cover">
                                                <img src="{{$blog->banner_image}}" class="radius-2" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="card-body p-0">
                                                <small class="d-block date text">
                                                    {{-- <a href="#"
                                                        class="text-uppercase border-end brd-light pe-3 me-3 color-blue2 fw-bold">tips
                                                        & tricks</a> --}}
                                                    <i class="bi bi-clock me-1"></i>
                                                    @php 
                                                        $updated_at = Carbon::parse($blog->updated_at);
                                                    @endphp
                                                    <a href="#" class="op-8">{{$updated_at->diffForHumans()}}</a>
                                                </small>
                                                <h6 class="card-title"><a href="/blogs/{{$blog->nav_name}}">{{$blog->caption}}</a></h6>
                                                <div
                                                    class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                    <div class="l_side d-flex align-items-center">
                                                        <span class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2 text-white">
                                                            {{ str_limit($blog->icon_image_caption, 1, '') ?? "A" }} 
                                                        </span>
                                                        <a href="#">
                                                            <small class="text-muted"> {{ $blog->icon_image_caption ?? "By Admin" }}</small> 
                                                        </a>
                                                    </div>
                                                    {{-- <div class="r-side mt-1">
                                                        <i class="bi bi-chat-left-text me-1"></i>
                                                        <a href="#">24</a>
                                                        <i class="bi bi-eye ms-4 me-1"></i>
                                                        <a href="#">774k</a>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            @endforeach
                            {{-- <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-4 mb-4">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <a href="page-single-post-5.html" class="img img-cover">
                                            <img src="/website/assets/img/blog/7.png" class="radius-2" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-light pe-3 me-3 color-blue2 fw-bold">News</a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">5 Days ago</a>
                                            </small>
                                            <h6 class="card-title"><a href="page-single-post-5.html">AI With Fingerprint</a></h6>
                                            <div
                                                class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> David
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 bg-transparent rounded-0 pb-4 mb-4 pb-lg-0 mb-lg-0">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <a href="page-single-post-5.html" class="img img-cover">
                                            <img src="/website/assets/img/blog/8.png" class="radius-2" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card-body p-0">
                                            <small class="d-block date text">
                                                <a href="#"
                                                    class="text-uppercase border-end brd-light pe-3 me-3 color-blue2 fw-bold">tips
                                                    & tricks</a>
                                                <i class="bi bi-clock me-1"></i>
                                                <a href="#" class="op-8">1 month ago</a>
                                            </small>
                                            <h6 class="card-title"><a href="page-single-post-5.html">Solutions For Big Data Issue, Expert Perspective</a></h6>
                                            <div
                                                class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> Moussa
                                                    </a>
                                                </div>
                                                <div class="r-side mt-1">
                                                    <i class="bi bi-chat-left-text me-1"></i>
                                                    <a href="#">24</a>
                                                    <i class="bi bi-eye ms-4 me-1"></i>
                                                    <a href="#">774k</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="faq style-3">
                            <div class="section-head style-3 text-uppercase mb-50">
                                <h3>FAQS</h3>
                            </div>
                            <div class="accordion" id="accordionExample">
                                @foreach ($all_faqs as $item)

                                    <div class="accordion-item @if($loop->last) border-0 @endif">
                                        <h2 class="accordion-header" id="faq{{$item->id}}">
                                            <button class="accordion-button @if($loop->iteration != 1) collapsed @endif " type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{$item->id}}" aria-expanded="@if($loop->iteration == 1) true @else false @endif"
                                                aria-controls="collapse{{$item->id}}">
                                                {{$item->short_content}}
                                            </button>
                                        </h2>
                                        <div id="collapse{{$item->id}}" class="accordion-collapse collapse @if($loop->iteration == 1) show @endif "
                                            aria-labelledby="faq{{$item->id}}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                               {{$item->long_content}}
                                            </div>
                                        </div>
                                    </div> 

                                @endforeach
                                {{-- <a href="page-contact-5.html" class="text-muted text-uppercase mt-50 small">
                                    See More 
                                    <i class="bi bi-chevron-right ms-1"></i>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-logos mt-100">
                    <div class="row align-items-center">
                        @foreach ($clients->navigationitems as $items)
                            
                            <div class="col-6 col-lg-2">
                                <a href="#" class="img d-block">
                                    <img src="{{asset('uploads/photo_gallery/'.$items->file)}}" alt="">
                                </a>
                            </div>
                            
                            @if ($loop->iteration == 6)
                                @break;
                            @endif
                        @endforeach
                        {{-- <div class="col-6 col-lg-2">
                            <a href="#" class="img d-block">
                                <img src="/website/assets/img/logos/2.png" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-2">
                            <a href="#" class="img d-block">
                                <img src="/website/assets/img/logos/3.png" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-2">
                            <a href="#" class="img d-block">
                                <img src="/website/assets/img/logos/4.png" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-2">
                            <a href="#" class="img d-block">
                                <img src="/website/assets/img/logos/5.png" alt="">
                            </a>
                        </div>
                        <div class="col-6 col-lg-2">
                            <a href="#" class="img d-block">
                                <img src="/website/assets/img/logos/6.png" alt="">
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <img src="/website/assets/img/blog/v_lines.png" alt="" class="v_lines">
        </section>
        <!-- ====== end blog ====== -->
