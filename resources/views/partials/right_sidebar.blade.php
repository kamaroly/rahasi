 <!-- Control Sidebar -->      
      <aside class="control-sidebar control-sidebar-dark">                
           <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading"><i class="fa fa-gears"></i> Settings</h3>
            <ul class='control-sidebar-menu'>
             <li>
                <a href="{{ route('sentinel.profile.show') }}"onClick="modal(this)">
                  <i class="menu-icon fa fa-user bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading"> {{ Session::get('email') }}</h4>
                    <p>{{ Session::get('email') }} {{ Lang::get('profile.settings')}}</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="{{route('settings.general.view')}}" onClick="modal(this)">
                  <i class="menu-icon fa fa-university bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">General</h4>
                    <p>Bank Account, MFS etc.... settings</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="{{route('settings.api.view')}}"  onClick="modal(this)">
                  <i class="menu-icon fa fa-code bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">API</h4>
                    <p>Secret and Publishable keys settinsg</p>
                  </div>
                </a>
              </li>
              <li>
                <a href='javascript::;' onClick="modal(this)">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Notification settings</h4>
                    <p>Configure the way,  you want to be notified.</p>
                  </div>
                </a>
              </li>
              
            </ul><!-- /.control-sidebar-menu -->

      

          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->