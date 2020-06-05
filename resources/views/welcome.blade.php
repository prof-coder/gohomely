<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{Setting::get('site_title')}}</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- 
  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="570442769742-70a8s8h49d510b3ukdat0d9q4l9h3d1l.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script> 
  -->

  <link rel="shortcut icon" href="{{ Setting::get('site_favicon', asset('favicon.ico')) }}">
  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/user/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="{{ asset('assets/user/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Ionicons CSS -->
  <link href="{{ asset('assets/user/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <!-- Material Icons CSS -->
  <link href="{{ asset('assets/user/material-icons/css/materialdesignicons.min.css')}}" rel="stylesheet">
  <!-- Slick CSS -->
  <link href="{{ asset('assets/user/css/slick.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/user/css/slick-theme.css')}}" rel="stylesheet">
  <!-- Style CSS -->
  <link href="{{ asset('assets/user/css/style.css')}}" rel="stylesheet">
</head>

<body class="page-welcome">
  <nav class="navbar navbar-default visible-xs">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgation-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logoback" href="javascript:void(0)">
          <img src="{{ Setting::get('site_logo',asset('assets/user/img/logo.png'))}}">
        </a>          
      </div>
      <div class="collapse navbar-collapse" id="navgation-1">
        <ul class="nav navbar-nav navbar-right">
        @if(Auth::guest())
          <li>
            <a href="{{url('/chef/register')}}" class="login-item" >Become Chef</a>
          </li>
          <li>
            <a href="#" class="login-item" >Meal Subscription</a>
          </li>
          <li>
            <a href="javascript:void(0);" class="login-item signinform" >Login</a>
          </li>
          <li>
            <a href="javascript:void(0);" class="login-item signupform" >Signup</a>
          </li>
        @endif
      </div>
    </div>
  </nav>
  <!-- Login Wrapper Starts -->
  <div class="login-main-wrapper">
    <!-- Login Content Wrap Starts -->
    <div class="login-content-wrap">
      <!-- Login Content Starts -->
      <div class="login-content row">
        <!-- Login Content Left Starts -->
        <div class="login-content-left col-md-7 col-sm-7 col-xs-12">
          <!-- Logo Section Starts -->
          <div class="logo-sec row">
            <div class="login-logo col-md-4 col-sm-4 col-xs-12 hidden-xs">
              <img src="{{ Setting::get('site_logo',asset('assets/user/img/logo.png'))}}"></i>
            </div>
            <!-- <div class="login-menu col-md-8 col-sm-8 col-xs-12">
            @if(Auth::guest())
              <a href="javascript:void(0);" class="login-item signinform" >Login</a>
              <a href="javascript:void(0);" class="signup-item signupform" >Signup</a>
            @endif
            </div> -->
          </div>
          <!-- Login Section Ends -->
            @include('include.alerts')
          <!-- Log Location Section Starts -->
          <div class="log-location">
            <div class="log-loc-content">
              <div class="log-loc-txt-slide">
                <!-- <h3 class="loc-slide-tit">Hungry ?</h3>
                <h3 class="loc-slide-tit">Unexpected guests?</h3>
                <h3 class="loc-slide-tit">Movie marathon?</h3>
                <h3 class="loc-slide-tit">Cooking gone wrong?</h3>
                <h3 class="loc-slide-tit">Game night?</h3>
                <h3 class="loc-slide-tit">Late night at office?</h3> -->
              </div>
              <h4 class="log-loc-txt center-xs">Order delicious food from home chefs near you</h4>
              <!-- Location Form Starts -->
              <form  action="{{url('restaurants')}}" id="my_map_form" >
                 
                <div class="log-location-search input-group">
                  <div class="input-group-cover">
                    <input type="text" id="pac-input" name="search_loc" class="form-control" placeholder="Start typing your appartment name, street name, locality" required autofocus>
                  </div>
                  <!-- <span class="input-group-addon locate-me-btn my_map_form_current"><i class="ion-pinpoint"></i>  Locate Me</span> -->
                  <span class="input-group-addon log-search-btn"><button><i class="ion-android-search"></i></button></span>
                  
                </div>
                 
                <input type="hidden" id="latitude" name="latitude" value="{{ old('latitude') }}" readonly >
                <input type="hidden" id="longitude" name="longitude" value="{{ old('longitude') }}" readonly >
                <div id="my_map"   style="height:500px;width:500px;display: none" ></div>
              </form>
              
              <form  action="{{url('restaurants')}}" id="my_map_form_current" >
                <input type="hidden" id="pac-input_cur" class="form-control search-loc-form" placeholder="Search for area,street name..." name="search_loc" value="{{ old('latitude') }}" >
                <input type="hidden" id="latitude_cur" name="latitude" value="{{ old('latitude') }}" readonly >
                <input type="hidden" id="longitude_cur" name="longitude" value="{{ old('longitude') }}" readonly >
                
              </form>
              <!-- Location Form Ends -->

              <!-- Location Places Starts -->
              <div class="log-location-places">
                 <!--  <a href="#" class="log-places">Alabama</a>
                <a href="#" class="log-places">Alaska</a>
                <a href="#" class="log-places">Alazona</a>
                <a href="#" class="log-places">Newyork</a>
                <a href="#" class="log-places">Los Angels</a>
                <a href="#" class="log-places">California</a>
                <a href="#" class="log-places">Florida</a>
                <a href="#" class="log-places">New Mexico</a>
                <a href="#" class="log-places">Washington</a>
                <a href="#" class="log-places">Georgia</a> -->
              </div>
              <!-- Location Places Ends -->
            </div>
          </div>
          <!-- Log Location Section Ends -->
        </div>
        <!-- Login Content Left Ends -->
        <!-- Login Content Right Starts -->
        <div class="login-content-right col-md-5 col-sm-5 col-xs-12 p-0">
          <div class="login-right-img bg-img" style="background-image: url({{ asset('assets/user/img/login.jpg')}});">
            <div class="logo-sec row">
              <div class="login-menu col-md-10 col-sm-10 col-xs-12 hidden-xs">
                @if(Auth::guest())
                  <a href="{{url('/chef/register')}}" class="login-item" >Become Chef</a>
                  <a href="#" class="login-item" >Meal Subscription</a>
                  <a href="javascript:void(0);" class="login-item signinform" >Login</a>
                  <a href="javascript:void(0);" class="login-item signupform" >Signup</a>
                @endif
              </div>
            </div>
        </div>
        </div>
        <!-- Login Content Right Ends -->
      </div>
      <!-- Login Location Section Ends -->
      <!-- Feature Section Starts -->

     <div class="feature-sections p-80">
        <div class="container">
          <div class="feature-sec-inner row">
            <!-- Feature Block Starts -->
            <div class="feature-block col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6"> 
                <h4 class="log-tag-txt ">"Happiness is Homemade"</h4>
                <!-- <img src="{{ asset('assets/user/img/feature-1.png')}}" class="feature-img"> -->
                <h4 class="feature-tit">A platform for home chefs to showcase their unique culinary skills to the world with regular income!!
                  For someone craving for home made delicacies, goHomely is just for you.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Features Section Ends -->
      <!-- Download Section Starts -->
      <!-- <div class="download-section">
        <div class="container"> -->
           
          <!-- Download Section Right Starts -->
          <!-- <div class="download-sec-right col-md-7 col-sm-12 col-xs-12">
            <div class="row">
              <div class="app-screen-left col-md-6 col-sm-6 col-xs-12">
                <div class="app-screen app-screen-1 bg-img" style="background-image: url({{ asset('assets/user/img/app-screen-1.png')}});"></div>
              </div>
              <div class="app-screen-right col-md-6 col-sm-6 col-xs-12">
                <div class="app-screen app-screen-2 bg-img" style="background-image: url({{ asset('assets/user/img/app-screen-2.png')}});"></div>
              </div>
            </div>
          </div> -->
          <!-- Download Section Right Ends -->

           <!-- Download Section Left Starts -->
          <!-- <div class="download-sec-left col-md-5 col-sm-12 col-xs-12">
            <div class="download-sec-left-inner">
              <h2 class="download-tit">Home made food delivery app</h2>
              <p class="download-txt">Order from your favorite home chefs</p> -->
               <!-- <p class="download-txt">Order from your favorite restaurants & track on the go, with the all-new {{Setting::get('site_title')}} app.</p> -->
              <!-- <div>
                <a href="{{Setting::get('ANDROID_APP_LINK')}}" class="download-img"><img src="{{ asset('assets/user/img/android.png')}}"></a>
                <a href="{{Setting::get('IOS_APP_LINK')}}" class="download-img"><img src="{{ asset('assets/user/img/play-store.png')}}"></a>
              </div>
            </div>
          </div> -->
          <!-- Download Section Left Ends -->
        <!-- </div>
      </div> -->

     <div class="feature-section p-80">
        <div class="container">
          <div class="feature-sec-inner row">
            <!-- Feature Block Starts -->
            <div class="feature-block col-md-4 col-sm-4 col-xs-12">
              <div class="feature-box" id="order">
                 <!-- <img src="{{ asset('assets/user/img/order.jpg')}}" class="feature-img"> -->
                <!-- <h4 class="feature-titl">Order Your FavouritegoHomely Dish</h4> -->
                <!-- <p class="feature-txt">Order in for yourself or for the group, with no restrictions on order value</p> -->
              </div>
              <!-- <img src="{{ asset('assets/user/img/feature-1.png')}}" class="feature-img"> -->
            </div>
            <!-- Feature Block Ends -->
            <!-- Feature Block Starts -->
            <div class="feature-block col-md-4 col-sm-4 col-xs-12">
              <div class="feature-box" id="prepare">
              <!-- <img src="{{ asset('assets/user/img/feature-2.png')}}" class="feature-img"> -->
              <!-- <h4 class="feature-titl">Freshly Prepared By Home Chef</h4> -->
              <!-- <p class="feature-txt">Know where your order is at all times, from the restaurant to your doorstep</p> -->
              </div>
            </div>
            <!-- Feature Block Ends -->
            <!-- Feature Block Starts -->
            <div class="feature-block col-md-4 col-sm-4 col-xs-12">
              <div class="feature-box" id="delivery">
              <!-- <img src="{{ asset('assets/user/img/feature-3.png')}}" class="feature-img"> -->
              <!-- <h4 class="feature-titl">Delivered At Your DoorStep</h4> -->
              <!-- <p class="feature-txt">Experience {{Setting::get('site_title')}}'s superfast delivery for food delivered fresh &amp; on time</p> -->
              </div>
            </div>
            <!-- Feature Block Ends -->
          </div>
        </div>
      </div>
      <!-- Download Section Ends -->
     <!--     <div class="foot-places-outer">
        <div class="container">
          <div class="foot-places">
             <a href="#" class="foot-places-item">Alabama</a>
            <a href="#" class="foot-places-item">Alaska</a>
            <a href="#" class="foot-places-item">Alazona</a>
            <a href="#" class="foot-places-item">Newyork</a>
            <a href="#" class="foot-places-item">Los Angels</a>
            <a href="#" class="foot-places-item">California</a>
            <a href="#" class="foot-places-item">Florida</a>
            <a href="#" class="foot-places-item">New Mexico</a>
            <a href="#" class="foot-places-item">Washington</a> 
          </div>
        </div>
      </div>-->
    </div>
    <!-- Login Content Wrap Ends -->
    <!-- Footer Starts -->
     @include('user.layouts.partials.footer')
    <!-- Footer Ends -->
  </div>
  <!-- Login Warapper Ends -->
  
  <script src="{{ asset('assets/user/js/jquery.min.js')}}"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('assets/user/js/bootstrap.min.js')}}"></script>
  <!-- Slick Slider JS -->
  <script src="{{ asset('assets/user/js/slick.min.js')}}"></script>
  <!-- Sidebar JS -->
  <script src="{{ asset('assets/user/js/asidebar.jquery.js')}}"></script>
  <!-- Map JS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC808NpIO-MZ_C-nXv21zGFDKC1OUm_MkQ"></script>
  <script src="{{ asset('assets/user/js/jquery.googlemap.js')}}"></script>
  <!-- Incrementing JS -->
  <script src="{{ asset('assets/user/js/incrementing.js')}}"></script>
  <!-- Scripts -->
  <script src="{{ asset('assets/user/js/scripts.js')}}"></script>
  @include('user.layouts.partials.script')
  <!-- Start of LiveChat (www.livechatinc.com) code -->
     <!-- <script type="text/javascript">
        window.__lc = window.__lc || {};
        window.__lc.license = 8256261;
        (function() {
          var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
          lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
      </script> -->
      <!-- End of LiveChat code -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
       <!--  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113150309-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-113150309-2');
       </script>   -->
</body>
</html>
