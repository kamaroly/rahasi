 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
         <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">@include('partials.live_test_switch')</li>
            <li class="{{ ((Request::is('/') || (Request::is('dashboard*')) || (Request::is('home*'))) ? 'active' : '') }} treeview">
              <a href="{{ route('home') }}">
                <i class="fa fa-dashboard"></i> <span>{{ trans('general.dashboard') }}</span>
              </a>
            </li>
             <li class="{{ (Request::is('payments*') ? 'active' : '') }} treeview">
              <a href="/payments">
                <i class="fa fa-money"></i> <span>{{ trans('payments.payments') }}</span>
              </a>
            </li>
              <li class="{{ (Request::is('customers*') ? 'active' : '') }} treeview">
              <a href="{{ route('customers.index') }}">
                <i class="fa fa-users"></i> <span>{{ trans('customer.customers') }}</span>
              </a>
            </li>
            <li class="{{ (Request::is('transfers*') ? 'active' : '') }} treeview">
              <a href="#">
                <i class="fa fa-exchange"></i> <span>{{ trans('transfer.transfers') }}</span>
              </a>
            </li>
             <li class="{{ (Request::is('balance*') ? 'active' : '') }} treeview">
              <a href="#">
                <i class="fa fa-th"></i> <span>{{ trans('balance.balance') }}</span>
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
