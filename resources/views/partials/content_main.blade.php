 <!-- Default box -->
          <div class="box ui grid">
            <div class="box-header with-border">
              <h3 class="box-title">
              @section('title')
              @show
              </h3>
            </div>
          
          <div class="box-body" id="container">
             @yield('content')
            </div><!-- /.box-body -->
            <div class="box-footer">
              @yield('content_footer')
            </div><!-- /.box-footer-->
          </div><!-- /.box -->