      <header class="main-header">
        <!-- Logo -->
        <a href="{{route('home')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>RAHA</b>SI</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>RAHA</b>SI</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
          </a>
          <div class="navbar-custom-menu">
              <ul class="nav">
                @if (Sentry::check())
                  <li {{ (Request::is('profile') ? 'class="active"' : '') }}><a href="{{ route('sentinel.profile.show') }}">{{ Session::get('email') }}</a>
                  </li>
                  <li>
                    <a href="{{ route('sentinel.logout') }}">Logout</a>
                  </li>
                  @else
                  <li {{ (Request::is('login') ? 'class="active"' : '') }}><a href="{{ route('sentinel.login') }}">Login</a></li>
                  <li {{ (Request::is('users/create') ? 'class="active"' : '') }}><a href="{{ route('sentinel.register.form') }}">Register</a></li>
                  @endif
              </ul>
          </div>
          <div class="ui inverted menu">
            <a class="active item">
              <i class="home icon"></i> Home
            </a>
            <a class="item">
              <i class="mail icon"></i> Messages
            </a>
            <a class="item">
              <i class="user icon"></i> Friends
            </a>
          </div>
        </nav>
      </header>
