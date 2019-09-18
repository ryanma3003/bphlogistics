  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">BPH</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{asset('front/img/logo-bph.png')}}" alt=""></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        @if (Auth::check())
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('front/img/logo-bph.png')}}" class="user-image" alt="admin">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="{{ url('backscreen/logout') }}" class="fa fa-sign-out btn-default">  Sign Out</a>
              </li>
              <!-- Menu Footer-->
        @else
              <li>
                  <a href="{{ url('backscreen/login') }}" class="btn-primary">Sign in</a>
              </li>
            </ul>
          </li>
        @endif
        </ul>
      </div>
    </nav>
  </header>