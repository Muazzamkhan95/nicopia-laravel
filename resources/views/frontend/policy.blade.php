<x-app-layout>
    <!-- --------os-mainbanner--------- -->
    <div id="os-shortbanner">
        <div class="os-bg">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h3 class="text-white">{{ $policy->name }}</h3>
                    </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>


    

    <!-- ---------os-counter---------- -->


    <div id="os-our-latest-news3">
        <br>
        <br>
        <div class="container">
            <p>
                {!! $policy->description !!}
            </p>
        </div>
    </div>

  
</x-app-layout>
