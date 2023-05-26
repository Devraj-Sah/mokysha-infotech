@php
$carrers = App\Models\Navigation::query()->where('page_type','Service Menu')->where('nav_name', 'LIKE', "%services%")->latest()->first();
$all_services = $carrers->childs()->first()->childs()->get();
@endphp
<!-- ====== start projects  ====== -->
        <section class="projects section-padding style-3" data-scroll-index="4">
            <div class="container">
                <div class="section-head style-3 text-center">
                    <h3>Our Featured <span>Projects</span></h3>
                </div>
                <div class="content">
                    <div class="row">
                        @foreach ($all_services as $items)
                            @foreach ($items->childs as $project)                                
                                <div class="col-lg-@if ($loop->parent->iteration == 1)7 @elseif($loop->parent->iteration == 2)5 @else 6 @endif ">
                                    <div class="project-card d-block mb-30 style-3">
                                        <a href="/{{$items->nav_name}}/{{$project->nav_name}}" class="img img-cover d-block">
                                            <img src="{{$project->banner_image}}" alt="">
                                        </a>
                                        <div class="info">
                                            <h5 class="h5"><a href="page-single-project-5.html">{{$project->caption}}</a></h5>
                                            <small class="small"><a href="#">{{$items->caption}}</a></small>
                                        </div>
                                    </div>
                                </div>
                                @if ($loop->iteration == 1)
                                    @break
                                @endif
                            @endforeach 
                                @if ($loop->iteration == 4)
                                    @break
                                @endif                           
                        @endforeach
                        {{-- <div class="col-lg-5">
                            <div class="project-card d-block mb-30 style-3">
                                <a href="page-single-project-5.html" class="img img-cover d-block">
                                    <img src="/website/assets/img/projects/4.png" alt="">
                                </a>
                                <div class="info">
                                    <h5 class="h5"><a href="page-single-project-5.html">Catty Boxes NFT Blockchain</a></h5>
                                    <small class="small"><a href="#">Game Development</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-card d-block style-3 mb-30 mb-lg-0">
                                <a href="page-single-project-5.html" class="img img-cover d-block">
                                    <img src="/website/assets/img/projects/5.png" alt="">
                                </a>
                                <div class="info">
                                    <h5 class="h5"><a href="page-single-project-5.html">Catty Boxes NFT Blockchain</a></h5>
                                    <small class="small"><a href="#">Game Development</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-card d-block style-3">
                                <a href="page-single-project-5.html" class="img img-cover d-block">
                                    <img src="/website/assets/img/projects/6.png" alt="">
                                </a>
                                <div class="info">
                                    <h5 class="h5"><a href="page-single-project-5.html">Catty Boxes NFT Blockchain</a></h5>
                                    <small class="small"><a href="#">Game Development</a></small>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="text-center">
                        <a href="/projects" class="btn rounded-pill bg-blue2 sm-butn mt-60 text-white">
                            <span>See All Projects</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====== end projects  ====== -->
