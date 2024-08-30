<x-app-layout>
    <style>
        .setposition {
            position: relative;
            top: -15px;
            margin-left: 150px;
            z-index: 99;
        }
        @media (max-width: 676px){
            .setposition {
                margin-left: 0px;
            }
            .nav-item {
                margin-bottom: 20px; 
            }
        }
    </style>
    <!-- --------os-mainbanner--------- -->
    <div id="os-shortbanner">
        <div class="os-bg">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h3 class="text-white">Om oss</h3>
                    </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="setposition" id="setposition">
        <ul class="nav nav-pills">
        @foreach($pageSections as $section)
            <li class="nav-item">
                <a href="#a{{$section->id}}" class="nav-item dark-bg white mx-2 p-2 rounded">{{$section->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
    <div id="main1">
        @php $count = 0 @endphp
        @php $count1 = 0 @endphp
        @foreach($pageSections as $section)
        {{-- <section ></section> --}}
            @if($section->name  == 'Team')
            <div id="os-meet-our-professional">
                <br>
                <div class="os-bg py-3" id="a{{ $section->id }}" style="pointer-events: none">
                    <div class="container">
                        @if ($Team != null)
                            <div class="text-center py-5">
                                <h3 class="orange">{{ $Team->heading }}</h3>
                                <p class="px-5">{!! $Team->paragraph !!}</p>
                            </div>
                        @endif
                        <div class="row">
                            @foreach ($teams as $team)
                                <div class="col-lg-3 col-md-3 col-sm-4">
                                    <img src="{{ asset('' . $team->image) }}" class="img-fluid" alt="">
                                    <div class="professional-name text-center">
                                        <p class="mb-0">{{ $team->name }}</p>
                                        <p class="mb-0">{{ $team->job_description }}</p>
                                    </div>
                                    {{-- <a href="{{ route('team.show', ['slug' => $team->slug]) }}" style="position: relative;top: -52px;" class="nav-link"><b
                                        class="pad">Läs mer</b><i class=" fa-solid orange fa-arrow-right"></i></a> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div  id="a{{ $section->id }}" style="pointer-events: none; @php echo $count1 == 0 ? 'margin-top: 20px;' : ''; @endphp @php echo $count == 0 ? '' : 'background-position: right;'; @endphp">
                <div class="container py-5">
                <br>
                    <div class="row @php echo $count == 0 ? '' : 'flex-row-reverse'; @endphp">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <img src="{{ asset(''. $section->image) }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-1 col-md-none col-sm-none "></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 py-3 align-self-center">
                                <div class="">
                                    <h3>{{ $section->heading }}</h3>
                                    <p class="mb-3 py-3 ">{!! $section->paragraph !!}</p>
                                    <!--<a href="{{ $section->url }}" class="orangebtn btn align-items-end ">{{ $section->button }}-->
                                    <!--    <i class="fa-solid fa-angle-right"></i></a>-->
                                </div>
                            
    
                        </div>
    
                    </div>
                </div>
            </div>
            @php $count1++; @endphp

            @endif
            @php if($count == 0 ){ $count++; } else { $count--; } @endphp
        
        @endforeach
    </div>
    <br>
    <br>
    <br>
    <!-- ------os-who----- -->

    <!-- ----------os-meet-our-professional------------- -->
    
<script>
    var container = document.getElementById('setposition');
      var header = document.getElementById('os-header');
      var element = document.getElementById('main1');
      var a1 = document.getElementById('a10');
   
    
    window.addEventListener('scroll', function () {
      

      // Check if the page has been scrolled down a certain amount
      if (window.scrollY > 200) {
        header.style.position = 'absolute'; // Change to absolute position
        header.style.top = '-50px'; // Adjust the top position as needed
        container.style.position = 'sticky'; // Change to absolute position
        container.style.top = '25px'; // Adjust the top position as needed
        // container.style.left = '100px'; // Adjust the left position as needed
        element.style.position = 'relative'; // Change to absolute position
        element.style.top = '140px'; // Adjust the top position as needed
        element.style.margin = 'auto auto 60px auto'; // Adjust the top position as needed
        a1.style.margin = '130px auto 0px auto'; // Adjust the top position as needed
        // element.style.left = '100px'; // Adjust the left position as needed
        if (window.innerWidth < 767) { // Again, adjust the threshold as needed
            handleMobile();
        }
    } else {

        container.style.position = 'relative'; // Change to absolute position
        container.style.top = '-15px'; // Adjust the top position as needed
        // container.style.left = '30px'; // Adjust the left position as needed
        element.style.position = 'relative'; // Change back to relative position
        element.style.top = '30px'; // Reset top position
        element.style.margin = '0 0 20px auto'; // Adjust the top position as needed
        // element.style.left = '0'; // Reset left position
        header.style.position = 'sticky'; // Change to absolute position
        header.style.top = '0px'; // Adjust the top position as needed
        a1.style.margin = '30px auto 60px auto'; // Adjust the top position as needed

      }
    });
    function handleMobile() {
        element.style.top = '50px'; // Adjust the top position as needed
        a1.style.margin = '0px auto 60px auto'; // Adjust the top position as needed
    }
    </script>

</x-app-layout>
