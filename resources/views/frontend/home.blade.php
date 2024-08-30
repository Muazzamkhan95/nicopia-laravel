<x-app-layout>
    <style>
		
        .videobanner {
            position: absolute;
            top: 25%;
            left: 10%;
        }

        .video-div {
            width: 100%;
            height: 700px;
        }

        video {
            position: absolute;
            z-index: 0;
            width: 100%;
            height: 700px;
        }

        @media (max-width: 767px) {
            video {
                height: 250px;
            }

            .pb-1 {
                font-size: 18px;
            }

            .videobanner {
                position: absolute;
                top: 10%;
                left: 5%;
            }

            .video-div {
                width: 100%;
                height: 100px;
            }
        }
    </style>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2"
        tabindex="0">
        <div id="os-mainbanner2">
            <div class="">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        @foreach ($sliders as $slider)
                            @if ($slider->slider_type == 1)
                                <div class="carousel-item os-mainbanner active" style="padding: 0px 0px 122px 0px">
                                    <div class="video-div">
                                        <video playsinline autoplay muted loop style="object-fit: fill;">
                                            <source src="{{ asset('' . $slider->video_url) }}" type="video/webm">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="container videobanner">
                                        <div class="row" style="">
                                            <div class="col-lg-5 col-md-5 col-sm-4 text-white">
                                                <h1 class="pb-1">
                                                    {{ $slider->name == 'null' ? '' : $slider->name }}
                                                </h1>
                                                <p class="pb-2">
                                                    {{ $slider->description == 'null' ? '' : $slider->description }}
                                                </p>
                                                <div class="d-flex">
                                                    {{-- <a href="" class="orangebtn btn">{{ $slider->url_name }} <i class="fa-solid fa-angle-right"></i></a> --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-4 text-white"></div>
                                        </div>
                                        @if ($slider->slider_type != 1)
                                            <div class="lets" style="">
                                                <h3>{{ $slider->heading1 == 'null' ? '' : $slider->heading1 }}</h3>
                                                <a style="color: #000;" href="{{ $slider->url1 }}">
                                                    <p>{{ $slider->url_name1 == 'null' ? '' : $slider->url_name1 }}
                                                        <i class="fa-solid
										fa-angle-right"></i>
                                                    </p>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- 
								<div class="slide-bg text-white text-center">
									<h1 class="pb-1">
									{{ $slider->name }}
										<br>
											<sapn class="orange"></sapn>
										</h1>
										<p class="pb-2">
								{{ $slider->description }}
							</p>
									</div> --}}

                                </div>
                            @else
                                <div class="carousel-item os-mainbanner"
                                    style="background: url('{{ asset('' . $slider->image) }}') no-repeat;">
                                    <div class="container">
                                        <div class="row" style="">
                                            <div class="col-lg-5 col-md-5 col-sm-4 text-white">
                                                <h1 class="pb-1">
                                                    {{ $slider->name == 'null' ? '' : $slider->description }}
                                                </h1>
                                                <p class="pb-2">
                                                    {{ $slider->description == 'null' ? '' : $slider->description }}
                                                </p>
                                                <div class="d-flex">
                                                    {{-- <a href="" class="orangebtn btn">{{ $slider->url_name }} <i class="fa-solid fa-angle-right"></i></a> --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-4 text-white"></div>
                                        </div>
                                        <div class="lets" style="">
                                            <h3>{{ $slider->heading1 == 'null' ? '' : $slider->heading1 }}</h3>
                                            <a style="color: #000;" href="{{ $slider->url1 }}">
                                                <p>{{ $slider->url_name1 == 'null' ? '' : $slider->url_name1 }}
                                                    <i
                                                        class="fa-solid
                                    fa-angle-right"></i>
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- 
							<div class="slide-bg text-white text-center">
								<h1 class="pb-1">
                                {{ $slider->name }}
									<br>
										<sapn class="orange"></sapn>
									</h1>
									<p class="pb-2">
                            {{ $slider->description }}
                        </p>
								</div> --}}

                                </div>
                            @endif
                        @endforeach


                    </div>
                    @if ($sliders->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    @endif

                </div>
            </div>
        </div>
        <!-- ------os-who----- -->
        <div id="os-who" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <img src="{{ asset('' . $About->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-1 col-md-none col-sm-none "></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 py-3 align-self-center">
                        @if ($About != null)
                            <div class="">
                                <h3>{{ $About->heading }}</h3>
                                <p class="mb-3 py-3 ">{!! $About->paragraph !!}</p>
                                <a href="{{ $About->url }}"
                                    class="orangebtn btn align-items-end ">{{ $About->button }}

                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                        @endif



                    </div>
                </div>
            </div>
        </div>
        <!-- ----os-what-we-offer----- -->
        <div id="os-what-we-offer">
            <div class="os-what-we-bg ">
                <div class="container">
                    <div class="text-center white">
                        @if ($Offers != null)
                            <div class="text-center">
                                <h1>{{ $Offers->heading }}</h1>
                                <p class="mb-3 py-3 ">{{ $Offers->paragraph }}</p>
                            </div>
                        @endif

                    </div>
                    <div class="row">
                        <div class="col-lg-11 col-md-11 col-sm-11">
                            <div class="slider1 ">
                                @foreach ($services as $service)
                                    <div class="rounded-0 border-0 card center dark-bg white py-4 mx-2 px-4">
                                        <img src="{{ asset('' . $service->image) }}" class="img-fluid" alt="">
                                        <h5 class="py-2">{{ $service->name }}</h5>
                                        <p>{{ $service->description }}</p>
                                        <a href="{{ route('service.show', ['slug' => $service->slug]) }}"
                                            class="orangebtn btn">
                                            <?php echo 'Läs mer'; ?>
                                            <i class="fa-solid fa-angle-right "></i>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 align-self-center">
                            <div class="btn-wrap d-flex flex-column">
                                <button class="prev-btn dark-bg white mt-2 border-0 py-2 px-3">
                                    <i class="fa-solid fa-angle-left"></i>
                                </button>
                                <button class="next-btn dark-bg white my-2 border-0 py-2 px-3">
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------os-recent-project-------- -->
        <div id="os-recent-project" style="padding-top: 20px;">
            <div class="os-recent-project-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            @if ($Recent != null)
                                <h1>{{ $Recent->heading }}</h1>
                                <p class="mb-3 py-3 ">{{ $Recent->paragraph }}</p>
                                <a href="{{ $Recent->url }}"
                                    class="orangebtn btn align-items-end ">{{ $Recent->button }}
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            @endif
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="slider2 ">
                                @foreach ($projects as $project)
                                    <div class="rounded-0 border-0 card center mx-2 main-overlay">
                                        <a href="{{ route('project.show', ['slug' => $project->slug]) }}"
                                            class="orangebtn btn">
                                            <img src="{{ asset('' . $project->image) }}" class="img-fluid image"
                                                alt="">
                                            <div class="overlay">
                                                <div class="text">{{ $project->name }}</div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                            @if ($projects->count() > 1)
                                <div class="btn-wrap d-flex justify-content-center mt-2">
                                    <button class="prev-btn2 dark-bg white my-2 border-0 px-3 py-2 mx-2">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </button>
                                    <button class="next-btn2 dark-bg white my-2 border-0 px-3 py-2 mx-2">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ------os-Clients-Talk------ -->
        <div id="os-clients-talk">
            <div class="os-clients-talk-bg">
                <div class="container">
                    {{-- sdsd{{ $Clients }} --}}
                    @if ($Clients != null)
                        <div class="text-center">
                            <h1>{{ $Clients->heading }}</h1>
                            <p class="mb-3 py-3 ">{{ $Clients->paragraph }}</p>
                        </div>
                    @endif

                </div>
                <div class="slider-bg py-4">
                    <div class="container">
                        <div class="slider3 my-3">
                            @foreach ($testimonials as $testimonial)
                                <div class="card border-1 rounded-0 mx-2 p-4 py-5">
                                    <div class="d-flex">
                                        <img src="{{ asset('' . $testimonial->image) }}" class="img-fluid rounded-4"
                                            style="height: 100px;
                                        width: 100px; border-radius: 50% !important;"
                                            alt="">
                                        <h6 class="px-3 align-self-center">{{ $testimonial->name }}</h6>
                                    </div>
                                    <div class="d-flex">
                                        <p class="py-3">{{ $testimonial->description }}</p>
                                        <img src="{{ asset('frontend/img/quotes1.png') }}"
                                            class="img-fluid align-self-end" alt="">
                                    </div>
                                </div>
                            @endforeach
                            {{-- 
													<div class="card border-1 rounded-0 mx-2 p-4 py-5 dark-bg white">
														<div class="d-flex">
															<img src="{{ asset('frontend/img/95.png') }}" class="img-fluid" alt="">
																<h6 class="px-3 align-self-center">Hazel D. Flippen</h6>
															</div>
															<div class="d-flex">
																<p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Suspendisse elementum
                            tempus. </p>
																<img src="{{ asset('frontend/img/quotes.png') }}" class="img-fluid align-self-end" alt="">
																</div>
															</div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------os-latest-news---------- -->
        <div id="os-latest-news" style="padding-top: 20px;">
            <div class="os-latest-news-bg">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <h3>Senaste Nyheter</h3>
                        <a href="/blog" class="orangebtn btn">Se mer
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="row py-5">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="card border-0 rounded-0 main-overlay">
                                    <img src="{{ asset('' . $blog->image) }}" class="img-fluid image"
                                        alt="">
                                    <div class=" py-3">
                                        <h4 class="">{{ $blog->name }}</h4>
                                        {{-- 
																		<p class="truncate">{{ strip_tags($blog->description) }}</p> --}}

                                        <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}"
                                            class="orangebtn btn">Läs mer
                                            <i class="fa-solid fa-angle-right "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach






                    </div>
                </div>
            </div>
        </div>
		<!-- ------os-Clients-Talk------ -->
        <div id="os-clients-talk">
            <div class="os-clients-talk-bg">
                <div class="container">
                    @if ($Clients != null)
                        <div class="text-center">
                            <h1>Våra Samarbetspartners</h1>
                        </div>
                    @endif

                </div>
                <div class="py-4">
                    <div class="container">
                        <div class="slider7 my-3">
                            @foreach ($brands as $brand)
                                <div class="mx-2 p-4">
                                    <div class="d-flex">
                                        <img src="{{ asset('' . $brand->image) }}" class="img-fluid rounded-4"
                                            style="height: 100px;
                                        width: 100px; border-radius: 50% !important;"
                                            alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
						@if ($brand->count() > 5)
                                <div class="btn-wrap d-flex justify-content-center mt-2">
                                    <button class="prev-btn7 dark-bg white my-2 border-0 px-3 py-2 mx-2">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </button>
                                    <button class="next-btn7 dark-bg white my-2 border-0 px-3 py-2 mx-2">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </button>
                                </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
