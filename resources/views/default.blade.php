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
        <base href='{{asset('')}}'>
        <style>
        body{
          padding-top:10px;

        }
        .page-main{
          padding-top:25px;
        }
        </style>
    </head>
    <body>
         <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif -->

  <!-- the content-->
  @include('layouts.header');
  <div class="page bg-white">
    @include('layouts.menu_vertical');
    @yield('content');
  </div>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2016 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Forum</a></div>
    <div class="site-footer-right">
      Crafted with <i class="red-600 icon md-favorite"></i> by <a href="http://themeforest.net/user/amazingSurge">Forum-grooo-1</a>
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
  <script src="{{asset('js/global/vendor/slidepanel/jquery-slidePanel.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/bootstrap-markdown/bootstrap-markdown.js')}}"></script>
  <script src="{{asset('js/global/vendor/bootstrap-select/bootstrap-select.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/marked/marked.min.js')}}"></script>
  <script src="{{asset('js/global/vendor/to-markdown/to-markdown.js')}}"></script>
  <script src="{{asset('js/assets/js/app.min.js')}}"></script>

  <script src="{{asset('js/assets/examples/js/apps/forum.min.js')}}"></script>

    </body>
</html>
