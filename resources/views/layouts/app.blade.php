<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nicopia</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <x-frontend.head></x-frontend.head>
    <!-- Styles -->
    @livewireStyles
    <style>
        .wrapper{
                    background: rgba(8,0,1,.8);
          position: fixed;
    bottom: 0;
    z-index: 99;
    width: 100%;
    max-width: 100%;
    /*background: #fff;*/
    padding: 10px 25px 10px 25px;
    box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.15);
    text-align: center;
    }
    .wrapper.hide{
    opacity: 0;
    pointer-events: none;
    transform: scale(0.8);
    transition: all 0.3s ease;
    }
    ::selection{
    color: #fff;
    background: var(--primary-color);
    }
    .wrapper img{
    max-width: 90px;
    }
    .content header{
    font-size: 25px;
    font-weight: 600;
    }
    .content{
    margin-top: 10px;
    display: flex;
    justify-content: space-around;
    }
    .content p{
    color: #fff;
    margin: 5px 0 20px 0;
    }
    .content .buttons{
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .buttons button{
    padding: 10px 20px;
    border: none;
    outline: none;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    border-radius: 5px;
    /* background: var(--primary-color); */
    cursor: pointer;
    transition: all 0.3s ease;
    }
    .buttons button:hover{
    transform: scale(0.97);
    }
    .buttons .item{
    margin: 0 10px;
    }
    .buttons a{
    color: var(--primary-color);
    }
    .nav-link.active {
      font-weight: bolder;
    }
    @media (max-width: 676px){
        .content {
            display: block;
        }
    }
    </style>
</head>

<body onload="Function()"> 
    <div class="wrapper">
        <img src="#" alt="">
        <div class="content">
          <p>Vi använder cookies för att ge dig den bästa upplevelsen på vår hemsida. Om du fortsätter att använda sidan kommer vi att anta att du godkänner detta.</p>
          <div class="buttons">
            <button class="item accept" style="background: #000">Godkänn </button>
            <a href="/policy" class="item btn rejectBtn btn-danger">Användarvillkor</a>
          </div>
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
      <script>
        const cookieBox = document.querySelector(".wrapper"),
        acceptBtn = cookieBox.querySelector(".accept");
        rejectBtn = cookieBox.querySelector(".rejectBtn");
        acceptBtn.onclick = ()=>{
          //setting cookie for 1 month, after one month it'll be expired automatically
          var maxage = +60*60*24*30;
          Cookies.set('_ga', 'GA1.1.1457152760.1694524481', { expires: 30 }); // Expires in 30 days
          Cookies.set('hs', '-10658153', { expires: 30 }); // Expires in 30 days
          Cookies.set('consent-policy', '%7B%22ess%22%3A1%2C%22func%22%3A1%2C%22anl%22%3A1%2C%22adv%22%3A1%2C%22dt3%22%3A1%2C%22ts%22%3A28242074%7D', { expires: 30 }); // Expires in 30 days
          Cookies.set('bSession', '2c95a1ce-548f-4230-85e3-a225fc7cbaa1|1', { expires: 30 }); // Expires in 30 days
          Cookies.set('svSession', '912f4219a4ce18135d7af80d382a7a5be664b6544456136d7f04ef0ab7051663d7c141979d3457b6635054f3b58734af1e60994d53964e647acf431e4f798bcd75daea4f8e57963aca28f0fc5b1a000e91a4de2da7cb7dd94ecb91a0d819c11290f1d499406c85b1fb481eb7f9415865298c49a71f2e66a27f3b3d406879c9acf544daa9646d14a9b47b41ac952b7d2b', { expires: 30 }); // Expires in 30 days
          Cookies.set('fedops.logger.defaultOverrides', '%7B%22paramsOverridesForApp%22%3A%7B%22experts-resources-ng%22%3A%7B%22is_rollout%22%3Atrue%7D%2C%226392353d-a1d0-4f71-8772-fbcfef630078%22%3A%7B%22is_rollout%22%3Atrue%7D%2C%2299854c31-916d-4eee-9c6e-7aaf1910dfea%22%3A%7B%22is_rollout%22%3Atrue%7D%2C%223738f4a3-4390-4883-b66d-b52c43ae29a2%22%3A%7B%22is_rollout%22%3Atrue%7D%2C%223bfa821b-398f-48ca-88f4-0c98d224fa1b%22%3A%7B%22is_rollout%22%3Atrue%7D%2C%22ab5f780f-0164-490d-9c1a-e98fbba32fc2%22%3A%7B%22is_rollout%22%3Atrue%7D%2C%22social-blog%22%3A%7B%22is_rollout%22%3Atrue%7D%2C%22social-blog-monetization%22%3A%7B%22is_rollout%22%3Atrue%7D%2C%22f55498be-b421-4cda-9be1-3b5c9fd0e077%22%3A%7B%22is_rollout%22%3Atrue%7D%7D%7D', { expires: 30 }); // Expires in 30 days
          Cookies.set('1P_JAR', '', { expires: 30 }); // Expires in 30 days
            cookieBox.classList.add("hide"); //hide cookie box
          }
        rejectBtn.onclick = ()=>{
          document.cookie = "consent-policy=reject; max-age="+60*60*24*30;
          cookieBox.classList.add("hide"); //hide cookie box

        }
        let checkCookie =  Cookies.get('hs'); //checking our cookie
        // alert(checkCookie);
        if(checkCookie == '-10658153'){
            checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
        } 
        
        // let checkCookie1 = document.cookie.indexOf("consent-policy=reject"); //checking our cookie
        // alert(checkCookie1);
        // if(checkCookie1 == 0) {
            // alert();
            // cookieBox.classList.add("hide");
        // }
        //if cookie is set then hide the cookie box else show it
      </script>
    <!-- --------- navigation ---------- -->
    <x-frontend.nav></x-frontend.nav>
    <!-- --------os-mainbanner--------- -->

    {{ $slot }}




    <!-- Footer -->
    <x-frontend.footer></x-frontend.footer>
    <!-- Footer -->
    {{-- <div class="min-h-screen bg-gray-100"> --}}
    {{-- @livewire('navigation-menu') --}}

    <!-- Page Heading -->
    {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

    <!-- Page Content -->
    {{-- <main> --}}
    {{-- {{ $slot }} --}}
    {{-- </main> --}}
    {{-- </div> --}}

    {{-- @stack('modals') --}}

    @livewireScripts

    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fa-solid fa-angle-up"></i>
    </button>

    <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('frontend/js/style.js') }}"></script>
    <script>
      $('.nav-link').on('click', function(){
          $('.nav-link').removeClass('active');
          $(this).addClass('active');
      });
  </script>
</body>

</html>
