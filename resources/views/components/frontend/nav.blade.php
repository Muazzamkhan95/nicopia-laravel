<div id="os-header">
    <div id="bar" style="background: #000; height: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <a href="mailto:info@nicopia.se" class="text-white nav-link p-2"><i class="fa fa-envelope"></i> info@nicopia.se</a>
                       &nbsp; &nbsp; <a href="tel:+46101697002" class="text-white nav-link p-2"><i class="fa fa-phone"></i> +46 101 69 70 02</a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end">
                        <a href="https://www.facebook.com/profile.php?id=100063861022133" class="text-white nav-link p-2"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/nicopiabygg?igshid=MWZjMTM2ODFkZg==" class="text-white nav-link p-2"><i class="fab fa-instagram"></i></a>
                        {{-- <a href="#facebook" class="text-white nav-link p-2"><i class="fab fa-youtube"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div id="os-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/"><img src="{{ asset('frontend/img/Logo.png') }}" class="img-fluid"
                                alt="" /></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""><i class="fa-solid fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('contact') ? '' : 'active' }}" href="{{ route('home')}}">
                                        Hem
                                    </a>
    
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home')}}#os-who">Om oss</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home')}}#os-what-we-offer"><?php echo "Tjänster"; ?> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home')}}#os-recent-project">Projekt </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home')}}#os-latest-news">Blogg</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact')}}">Kontakta oss</a>
                                </li>
                            </ul>
    
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    
    
    </div>
    