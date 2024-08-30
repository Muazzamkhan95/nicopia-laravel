<footer id="os-footer">
    <section class=" pt-3">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <div class="d-flex justify-content-between">
                        @php($footer = \App\Models\Footer::find(1))
                        <h6 class="text-uppercase fw-bold"><b> <img src="{{ asset(''. $footer->image) }}" class="img-fluid h-75" alt=""> </b></h6>
                        <div class="d-flex justify-content-center align-self-center orange-bg ">
                            @if (!empty($footer->facebook))
                            <div class="">
                                <a href="{{ $footer->facebook }}" class="black text-center mx-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            @endif

                            @if (!empty($footer->google))
                            <div class="">
                                <a href="{{ $footer->google }}" class="black text-center mx-2">
                                    <i class="fab fa-google"></i>
                                </a>
                            </div>

                            @endif
                            @if (!empty($footer->istagram ))

                            <div class="">
                                <a href="{{ $footer->istagram }}" class="black text-center mx-2">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            @endif

                        </div>
                    </div>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                    <p>
                        {{ $footer->about }}
                    </p>

                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <div class="">
                        <h6 class="fw-bold">Stabilitet</h6>
                        <!--<img src="{{ asset('assets/images/sigill.png') }}" width="300px" class="img-fluid mt-5" alt=""><br><br>-->
                        <img src="{{ asset('assets/images/aaaa.webp') }}" width="200px" class="img-fluid" alt=""><br><br>
                        <!--<img src="{{ asset('assets/images/lanets_foretagare_2023.png') }}" width="80px" class="img-fluid" alt=""> -->
                        
                    </div>
                    

                </div>


                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="fw-bold">{{ $footer->menu_heading }}</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                    <p>
                        <a href="/" class="dark">Hem </a>
                    </p>
                    <p>
                        <a href="/policy" class="dark">Användarvillkor</a>
                    </p>
                
                    <p>
                        <a href="/contact" class="dark">Kontakta oss </a>
                    </p>
                    
                    
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="fw-bold">{{ $footer->contact_heading }}</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                    <p>{{ $footer->contact_description }}</p>
                    <p><b>Address :</b><a href="javascript:;" class="dark"> {{ $footer->address }}</a></p>
                    <p><b>Email :</b><a href="mailto:info@oscorb.de" class="dark"> {{ $footer->email }}</a></p>
                    <p><b>Kontakt :</b><a href="tel:{{ $footer->phone }}" class="dark">{{ $footer->phone }}</a></p>

                </div>
            </div>



        </div>
        <!-- Copyright -->
        <hr>
        <div class=" Copyright text-center p-3">
            <a class="dark" href="https://info@oscorb.de/">© {{ $footer->copyright }}</a>
        </div>
    </section>


    <!-- Copyright -->
</footer>