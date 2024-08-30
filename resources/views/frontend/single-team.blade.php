<x-app-layout>
    <!-- --------os-mainbanner--------- -->
    <div id="os-shortbanner">
        <div class="os-bg">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h3 class="text-white">Team</h3>
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
                            <img src="{{ asset('' . $team->image) }}" class="img-fluid pb-3" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="">
                            <h5 class="">{{ $team->name }}</h5>
                            <p class="">{!! $team->description !!}</p>
                            <!--<p class="orange"><b> {{ $team->created_at }}</b></p>-->
                        </div>
                        {{-- <a href="" class=""><b class="pad">Read More</b><i
                            class=" fa-solid orange fa-arrow-right"></i></a> --}}
                        </div>
                    
                </div>
            </div>
        </div>
    </div>




    
</x-app-layout>
