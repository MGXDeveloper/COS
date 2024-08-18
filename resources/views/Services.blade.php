<!DOCTYPE html>
@section('title')
   Services
@endsection
<html lang="en">
    @extends('layouts.head')
   <body>
      <!--header section start -->
      <div class="header_section">
         @include('layouts.navbar')
      </div>
      <!--header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital"><span style="color: #fcce2d">Our</span> Courses</h1>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="{{asset('assets/images/img-2.png')}}" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">Art And Design</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="{{asset('assets/images/img-3.png')}}" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">Science</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="{{asset('assets/images/img-4.png')}}" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">Business Stady</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="{{asset('assets/images/img-5.png')}}" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text">English Speaking</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>            
      </div>
      <!-- services section end -->
      <!-- footer section start -->
      @include('layouts.footer-scripts')
      @include('layouts.end')
   </body>
</html>

