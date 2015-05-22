      <header class="main-header">
        <!-- Logo -->
        <a href="{{route('home')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
         {{--  <span class="logo-mini"><b>RAHA</b>SI</span>
          logo for regular state and mobile devices
          <span class="logo-lg"><b>RAHA</b>SI</span> --}}
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
          </a>
            <div class="onoffswitch">
                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                <label class="onoffswitch-label" for="myonoffswitch">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
          <div class="header menu">

           @if (Sentry::check())
            <a href="{{ route('sentinel.logout') }}" class="item"> <i class="fa fa-exit"></i>Logout</a>

             <a href="#" class="item" data-toggle="control-sidebar"> <i class="setting icon"></i>Acccount Settings</a>
            @endif
          </div>
        </nav>

      </header>
