<!DOCTYPE html>
@section('title')
   Contact
@endsection
<html lang="en">
   @extends('layouts.head')
   <body>
      <!--header section start -->
      <div class="header_section">
         @include('layouts.navbar')
      </div>
      <!--header section end -->
      <!-- newsletter section start -->
      <div class="newsletter_section layout_padding">
         <div class="container">
            <div class="newsletter_main">
               <h1 class="newsletter_taital">Get<br> Your free consuting </h1>
               <div class="get_quote_bt"><a href="#">Get A Quote</a></div>
            </div>
            <p class="dolor_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
         </div>
      </div>
      <!-- newsletter section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_left0">
                  <div class="mail_section">
                     <div class="contact_img">
                        <h1 class="contact_taital">Best Educations In World Here</h1>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="map_main"><img src="{{asset('assets/images/map-img.png')}}"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      @include('layouts.footer-scripts')
      @include('layouts.end')
      
   </body>
</html>

