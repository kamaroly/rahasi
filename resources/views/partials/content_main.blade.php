 <!-- Default box -->
          <div class="box">
            <!-- Include flash message -->
            <div class="box-header with-border">
              <h3 class="box-title">
              @section('title')
              @show
              </h3>
            </div>
          <div class="box-body" id="container">
           @include('flash::message')
             @yield('content')
            </div><!-- /.box-body -->
            <div class="box-footer">
              @yield('content_footer')
            </div><!-- /.box-footer-->
          </div><!-- /.box -->