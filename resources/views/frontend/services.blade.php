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




    <!-- -------os-What We Offer---------- -->

    <div id="os-What-We-Offer">
        <div class="os-bg">
            <div class="container">

                <div class="row">


                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="rounded-0 border-1 card center py-4 mx-2 px-4 orange-bg white">
                                <div class="center pb-3">
                                    <img src="{{ asset('' . $service->image) }}" class="img-fluid" alt="">
                                </div>
                                <h5 class="py-2">{{ $service->name }}</h5>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="rounded-0 border-1 card center py-4 mx-2 px-4 ">
          <div class="center pb-3">
            <img src="{{ asset('frontend/img/crane icon.png')}}" class="img-fluid" alt="">
          </div>
          <h5 class="py-2">Building Construction</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="rounded-0 border-1 card center py-4 mx-2 px-4 orange-bg white ">
          <div class="center pb-3">
            <img src="{{ asset('frontend/img/paintbrush.png')}}" class="img-fluid" alt="">
          </div>
          <h5 class="py-2">Interior Design</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">  
        <div class="rounded-0 border-1 card center py-4 mx-2 px-4 ">
          <div class="center pb-3">
            <img src="{{ asset('frontend/img/crane icon.png')}}" class="img-fluid" alt="">
          </div>
          <h5 class="py-2">Building Construction</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="rounded-0 border-1 card center py-4 mx-2 px-4 orange-bg white ">
          <div class="center pb-3">
            <img src="{{ asset('frontend/img/planing house icon.png')}}" class="img-fluid" alt="">
          </div>
          <h5 class="py-2">House Construction</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="rounded-0 border-1 card center py-4 mx-2 px-4 ">
          <div class="center pb-3">
            <img src="{{ asset('frontend/img/paintbrush.png')}}" class="img-fluid" alt="">
          </div>
          <h5 class="py-2">Interior Design</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div> --}}

                </div>

            </div>
        </div>
    </div>



    
</x-app-layout>
