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
          <div class="header menu">
           @if (Sentry::check())
           <a href="{{ route('settings.index') }}" class="item" id="modal"> <i class="setting icon"></i>Settings</a>
            <a class="{{ (Request::is('profile') ? 'active' : '') }} item" href="{{ route('sentinel.profile.show') }}">
              <i class="user icon"></i> 
              {{ Session::get('email') }}
            </a>
            <a href="{{ route('sentinel.logout') }}" class="item"> <i class="exit icon"></i>Logout</a>
            @endif
          </div>
        </nav>
      </header>
