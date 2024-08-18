<div class="header_bg">
   <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <a class="logo" href="/"><img src="{{asset('assets/images/logo.png')}}" width="150px" height="150px"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                       <a class="nav-link" href="/">Home</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/about">About</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/services">Services</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/blog">Blog</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/contact">Contact_Us</a>
                   </li>
               </ul>
               <div class="call_section">
                   <ul>
                       <!--<li><a href="#"><img src="{{asset('assets/images/fb-icon.png')}}"></a></li>-->
                       <!--<li><a href="#"><img src="{{asset('assets/images/twitter-icon.png')}}"></a></li>-->
                       <!--<li><a href="#"><img src="{{asset('assets/images/linkedin-icon.png')}}"></a></li>-->
                       <!--<li><a href="#"><img src="{{asset('assets/images/instagram-icon.png')}}"></a></li>-->
                       <!--<div class="donate_bt"><a href="#"><img src="{{asset('assets/images/search-icon.png')}}"></a></div>-->
                       <span style="margin-left: 30px;"></span>
                       

                   </ul>
               </div>

               <ul class="navbar-nav ml-auto">
                   @if (Route::has('login'))
                       @auth
                           <li class="nav-item">
                               <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                           </li>
                       @else
                           <li class="nav-item">
                               <a href="{{ route('login') }}" class="nav-link">Login</a>
                           </li>
                           @if (Route::has('register'))
                               <li class="nav-item">
                                   <a href="{{ route('register') }}" class="nav-link">Register</a>
                               </li>
                           @endif
                       @endauth
                   @endif
               </ul>
           </div>
       </nav>
   </div>
</div>
