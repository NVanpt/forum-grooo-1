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

  <!-- the content-->

  <div class="page bg-white">

    <!-- Forum Sidebar -->
    <div class="page-aside">
      <div class="page-aside-switch">
        <i class="icon md-chevron-left" aria-hidden="true"></i>
        <i class="icon md-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="page-aside-inner" data-plugin="pageAsideScroll">
        <div data-role="container">
          <div data-role="content">
            <section class="page-aside-section">
              <h5 class="page-aside-title">Trang quản trị</h5>
              <div class="list-group">
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-mood" aria-hidden="true"></i>
                  <span class="list-group-item-content">Giới thiệu</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-notifications" aria-hidden="true"></i>
                  <span class="list-group-item-content">Quản lý comment</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-assignment" aria-hidden="true"></i>
                  <span class="list-group-item-content">Quản lý bình luận</span>
                </a>
              </div>
            </section>
            <section class="page-aside-section">
              <h5 class="page-aside-title">Web Application</h5>
              <div class="list-group">
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-settings" aria-hidden="true"></i>
                  <span class="list-group-item-content">Installation</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-library" aria-hidden="true"></i>
                  <span class="list-group-item-content">Configuration</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-puzzle-piece" aria-hidden="true"></i>
                  <span class="list-group-item-content">Plugins</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-memory" aria-hidden="true"></i>
                  <span class="list-group-item-content">Themes</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-file" aria-hidden="true"></i>
                  <span class="list-group-item-content">Troubleshooting/Help</span>
                </a>
              </div>
            </section>
            <section class="page-aside-section">
              <h5 class="page-aside-title">Developer’s Resources</h5>
              <div class="list-group">
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-puzzle-piece" aria-hidden="true"></i>
                  <span class="list-group-item-content">Feature Requests</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-memory" aria-hidden="true"></i>
                  <span class="list-group-item-content">Technical Support</span>
                </a>
                <a class="list-group-item" href="javascript:void(0)">
                  <i class="icon md-file" aria-hidden="true"></i>
                  <span class="list-group-item-content">Code Review</span>
                </a>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!--the content forum-->
     <div class="page-main">

      <!-- Contacts Content Header -->
      <div class="page-header">
        <h1 class="page-title">Contact List</h1>
        <div class="page-header-actions">
          <form>
            <div class="input-search input-search-dark">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="" placeholder="Search...">
            </div>
          </form>
        </div>
      </div>

      <!-- Contacts Content -->
      <div class="page-content page-content-table">
         <!-- Actions -->
        <div class="page-content-actions">
          <div class="pull-right">
            <div class="dropdown">
             
            </div>
            <button type="button" class="btn btn-info btn-md empty-btn">Empty All</button>
          </div>
          <div class="btn-group btn-group-flat">
            <div class="dropdown">
              <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false" type="button"><i class="icon md-folder" aria-hidden="true"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">work</a></li>
                <li><a href="javascript:void(0)">Family</a></li>
                <li><a href="javascript:void(0)">Private</a></li>
                <li><a href="javascript:void(0)">Friends</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">Trash</a></li>
                <li><a href="javascript:void(0)">Spam</a></li>
              </ul>
            </div>
        </div>
    </div>
     <!-- Contacts -->
        <table class="table is-indent tablesaw" data-tablesaw-mode="stack" data-plugin="animateList"
        data-animate="fade" data-child="tr" data-selectable="selectable">
          <thead>
            <tr>
              <th class="pre-cell"></th>
              <th class="cell-30" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                  <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all"
                  />
                  <label for="select_all"></label>
                </span>
              </th>
              <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Name</th>
              <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Phone</th>
              <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Email</th>
              <th class="suf-cell"></th>
            </tr>
          </thead>
          <tbody>
            <tr data-url="panel.tpl" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1"
                  />
                  <label for="contacts_1"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="../../../global/portraits/1.jpg"
                  alt="...">
                </a>
                Herman Beck
              </td>
              <td class="cell-300">(119)-298-8025</td>
              <td>julio.williamson73@gmail.com</td>
              <td class="suf-cell"></td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
   <!--the end content forum-->
</div>
   <!-- Site Action -->
  <div class="site-action">
    <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
      <i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>
      <i class="back-icon md-close animation-scale-up" aria-hidden="true"></i>
    </button>
    <div class="site-action-buttons">
      <button type="button" data-action="trash" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
        <i class="icon md-delete" aria-hidden="true"></i>
      </button>
      <button type="button" data-action="folder" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
        <i class="icon md-folder" aria-hidden="true"></i>
      </button>
    </div>
  </div>
  <!-- End Site Action -->

  <!-- Add User Form -->
  <div class="modal fade" id="addUserForm" aria-hidden="true" aria-labelledby="addUserForm"
  role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Create New Contact</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" placeholder="Phone" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="Address" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="birthday" placeholder="Birthday"
              />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
          <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add User Form -->

  <!-- Add Label Form -->
  <div class="modal fade" id="addLabelForm" aria-hidden="true" aria-labelledby="addLabelForm"
  role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Add New Label</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="lablename" placeholder="Label Name"
              />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
          <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add Label Form -->


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
