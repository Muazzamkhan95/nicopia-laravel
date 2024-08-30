<x-app-layout>
  <!-- --------os-mainbanner--------- -->
  <div id="os-shortbanner">
    <div class="os-bg ">
    <div class="container">
     <div class="row">
       <div class="text-center">
          <h3 class="text-white">Kontakta oss</h3>
        </div>
      </h3>
     </div>
    </div>
  </div>
  </div>


<!-- -------os-contact----- -->
<div id="os-contact" style="background: none;" class="py-5 my-5">
<div class="container">
<div class="row">
  <div class="col-lg-7 col-md-7">
    <form action="{{ route('sendEmail') }}" method="post">
      @csrf
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="form-group">
                  <label for="name">Fullständigt namn</label>
                  <input type="name" name="name" class="form-control" id="name" aria-describedby="name" required>
                  </div>
          </div>
          <div class="col-lg-6 col-md-6">
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                  </div>
          </div>
         
          <div class="col-lg-12">
              <div class="form-group">
                  <label for="message">Meddelande</label>
                  <textarea class="form-control" name="message" value="" rows="5" id="example-number-input" required></textarea>
                  </div>
          </div>
          <div class="col-lg-12 text-center my-4" >
              <button type="submit" class="darkbtn2">Skicka
              </button>
          </div>
      </div>
    </form>
      
  </div>
  <div class="col-lg-5 col-md-5">
      {{-- <!-- <img src="{{ asset('frontend/img/Customer Care.png')}}" class="img-fluid" alt=""> --> --}}
      <div class="mapouter"><div class="gmap_canvas">
          <iframe height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=F%C3%B6retagsv%C3%A4gen,20%20%20%C2%A0%C2%A061145%C2%A0Nyk%C3%B6ping&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/124/"></a><br><style></style><a href="https://www.embedgooglemap.net"></a><style></style></div></div>
  </div>
</div>

</div>
</div>


</x-app-layout>