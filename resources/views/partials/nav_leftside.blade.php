 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
         <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">@include('partials.live_test_switch')</li>
            <li class="{{ ((Request::is('/') || (Request::is('dashboard*')) || (Request::is('home*'))) ? 'active' : '') }} treeview">
              <a href="{{ route('home') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
             <li class="{{ (Request::is('payments*') ? 'active' : '') }} treeview">
              <a href="/payments">
                <i class="fa fa-money"></i> <span>Payments</span>
              </a>
            </li>
            <li class="{{ (Request::is('transfers*') ? 'active' : '') }} treeview">
              <a href="#">
                <i class="fa fa-exchange"></i> <span>Transfers</span>
              </a>
            </li>
             <li class="{{ (Request::is('balance*') ? 'active' : '') }} treeview">
              <a href="#">
                <i class="fa fa-th"></i> <span>Balance</span>
              </a>
            </li>
            @if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
              <li class="{{ (Request::is('users*') ? 'active' : '')}}  treeview" >
                <a href="{{ action('\\Sentinel\Controllers\UserController@index') }}"> <i class="fa fa-user"></i>Users</a>
              </li>
              <li class="{{ (Request::is('groups*') ? 'active' : '')}} treeview">
                <a href="{{ action('\\Sentinel\Controllers\GroupController@index') }}"> <i class="fa fa-users"></i>Groups</a>
              </li>
            @endif
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
