<x-app-layout>
    <!-- --------os-mainbanner--------- -->
    <div id="os-shortbanner">
        <div class="os-bg">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h3 class="text-white">Blogg</h3>
                    </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>




    <!-- -----os-our-latest-news3----- -->
    <div id="os-our-latest-news3">
        <div class="os-bg pb-5 pt-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <img src="{{ asset('' . $blog->image) }}" class="img-fluid pb-3" alt="">
                        <div class="d-flex justify-content-between">
                            <h5 class="">{{ $blog->name }}</h5>
                            <!--<p class="orange"><b> {{ $blog->created_at }}</b></p>-->
                        </div>
                        <p class="">{!! $blog->description !!}</p>
                        {{-- <a href="" class=""><b class="pad">Read More</b><i
                                class=" fa-solid orange fa-arrow-right"></i></a> --}}
                    </div>

                    <div class="col-lg-4 col-md-4">
                        @foreach ($blogs as $bg)
                            @if ($bg->id != $blog->id)
                                <img src="{{ asset('' . $bg->image) }}" class="img-fluid pb-3" alt="">
                                <h5 class="">{{ $bg->name }}</h5>
                                {{-- <p class="">Lorem ipsum dolor sit amet, Ipsum consectetur adipiscing elit, sed do
                                eiusmod.
                            </p> --}}
                                <!--<p class="orange mb-0"><b>{{ $bg->created_at->format('d/m/Y') }}</b></p>-->
                                <a href="{{ route('blog.show', ['slug' => $bg->slug]) }}" class=""><b
                                        class="pad">Läs mer</b><i class=" fa-solid orange fa-arrow-right"></i></a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
