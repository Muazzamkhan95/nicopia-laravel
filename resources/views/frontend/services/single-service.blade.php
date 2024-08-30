<x-app-layout>
    <!-- --------os-mainbanner--------- -->
    <div id="os-shortbanner">
        <div class="os-bg">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h3 class="text-white">Tjänster</h3>
                    </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>




    <!-- -----os-our-latest-news3----- -->
    <div id="os-our-latest-news3 mt-5" style="margin-top: 40px;">
        <div class="os-bg pb-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="">
                            <img src="{{ asset('' . $service->image1) }}" class="img-fluid pb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="">
                            <h5 class="">{{ $service->name }}</h5>
                            <!--<p class="orange"><b> {{ $service->created_at }}</b></p>-->
                        </div>
                        <p class="">{{ strip_tags($service->description) }}</p>
                        {{-- <a href="" class=""><b class="pad">Read More</b><i
                            class=" fa-solid orange fa-arrow-right"></i></a> --}}
                        </div>
                        @if($service->long_description != null)
                        <div class="col-12 mt-30" style="margin-top: 30px">
                            <p class="">{!! $service->long_description !!}</p>

                        </div>
                        @else
                    @endif

                    
                </div>
            </div>
        </div>
    </div>




    
</x-app-layout>
