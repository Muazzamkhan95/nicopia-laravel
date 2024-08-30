<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon icon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/fav icon.ico')}}"/>
  <!-- bootstrap cdn -->
  

  <title>Construuction</title>
</head>

<body onload="Function()">

  

 
  
  @yield('content')
 

  <!-- Footer -->
  @include('frontend.partial.footer')
  <!-- Footer -->

  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fa-solid fa-angle-up"></i>
  </button>
  
  <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.0.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/slick.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('frontend/js/style.js')}}"></script>
</body>

</html>