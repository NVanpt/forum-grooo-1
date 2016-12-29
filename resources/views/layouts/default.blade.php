<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min3f0d.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-extend.min3f0d.css')}}">
      <link rel="stylesheet" href="{{ asset('css/site.min3f0d.css') }}">
       <link rel="stylesheet" href="{{('css/global/css/skintools.min3f0d.css')}}">
      <script src="{{asset('js/assets/js/sections/skintools.min.js')}}"></script>

      <!-- Plugins -->
      <link rel="stylesheet" href="{{asset('css/global/vendor/animsition/animsition.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/vendor/asscrollable/asScrollable.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/vendor/switchery/switchery.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/vendor/intro-js/introjs.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/vendor/slidepanel/slidePanel.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/vendor/flag-icon-css/flag-icon.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/vendor/waves/waves.min3f0d.css')}}">

      <!-- Plugins For This Page -->
      <link rel="stylesheet" href="{{asset('css/global/vendor/select2/select2.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/vendor/slidepanel/slidePanel.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/vendor/bootstrap-markdown/bootstrap-markdown.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/vendor/bootstrap-select/bootstrap-select.min3f0d.css')}}">

      <!-- Page -->
      <link rel="stylesheet" href="{{asset('css/assets/examples/css/apps/forum.min3f0d.css')}}">

      <!-- Fonts -->
      <link rel="stylesheet" href="{{asset('css/global/fonts/material-design/material-design.min3f0d.css')}}">
      <link rel="stylesheet" href="{{asset('css/global/fonts/brand-icons/brand-icons.min3f0d.css')}}">

      <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700'>

      <link rel="stylesheet" href="{{asset('css/global/fonts/font-awesome/font-awesome.min3f0d.css')}}">
      <script src="{{asset('js/global/vendor/modernizr/modernizr.min.js')}}"></script>
        <script src="{{asset('js/global/vendor/breakpoints/breakpoints.min.js')}}"></script>
        
    </head>
    <body>
         <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif -->
 <nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega navbar-inverse"
role="navigation">
<div class="navbar-header">
  <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
  data-toggle="menubar">
  <span class="sr-only">Toggle navigation</span>
  <span class="hamburger-bar"></span>
</button>
<button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
data-toggle="collapse">
<i class="icon md-more" aria-hidden="true"></i>
</button>

<a>Forum</a>
<button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
data-toggle="collapse">
<span class="sr-only">Toggle Search</span>
<i class="icon md-search" aria-hidden="true"></i>
</button>
</div>

<div class="navbar-container container-fluid">
  <!-- Navbar Collapse -->
  <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
    <!-- Navbar Toolbar -->
    <ul class="nav navbar-toolbar">
      <li class="hidden-float" id="toggleMenubar">
        <a data-toggle="menubar" href="#" role="button">
          <i class="icon hamburger hamburger-arrow-left">
            <span class="sr-only">Toggle menubar</span>
            <span class="hamburger-bar"></span>
          </i>
        </a>
      </li>
      <li class="hidden-xs" id="toggleFullscreen">
        <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
          <span class="sr-only">Toggle fullscreen</span>
        </a>
      </li>
      <li class="hidden-float">
        <a class="icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
        role="button">
        <span class="sr-only">Toggle Search</span>
      </a>
    </li>
    <li class="dropdown dropdown-fw dropdown-mega">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
      data-animation="fade" role="button">Danh mục <i class="icon md-chevron-down" aria-hidden="true"></i></a>
      
</li>
</ul>
<!-- End Navbar Toolbar -->

<!-- Navbar Toolbar Right -->
  <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
  
  
  </ul>
  <!-- End Navbar Toolbar Right -->
</div>
<!-- End Navbar Collapse -->

<!-- Site Navbar Seach -->
<div class="collapse navbar-search-overlap" id="site-navbar-search">
  <form role="search">
    <div class="form-group">
      <div class="input-search">
        <i class="input-search-icon md-search" aria-hidden="true"></i>
        <input type="text" class="form-control" name="site-search" placeholder="Search...">
        <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
        data-toggle="collapse" aria-label="Close"></button>
      </div>
    </div>
  </form>
</div>
<!-- End Site Navbar Seach -->
</div>
</nav>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2016 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
      Crafted with <i class="red-600 icon md-favorite"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>
<!--script-->
    <script src="{{asset('js/global/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/animsition/animsition.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/asscroll/jquery-asScroll.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/mousewheel/jquery.mousewheel.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/asscrollable/jquery.asScrollable.all.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/ashoverscroll/jquery-asHoverScroll.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/waves/waves.min.js')}}"></script>

  <!-- Plugins -->
  <script src="{{asset('js/global/vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/intro-js/intro.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/screenfull/screenfull.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/slidepanel/jquery-slidePanel.min.js')}}"></script>
    </body>
</html>
