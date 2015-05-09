 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
         <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ ((Request::is('/') || (Request::is('dashboard*'))) ? 'active' : '') }} treeview">
              <a href="{{ route('dashboard') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-exchange"></i> <span>Transfers</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i> <span>Balance</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i>
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
