 <!-- Default box -->
          <div class="box">
            <!-- Include flash message -->

          <div class="box-body" id="container">
           @include('flash::message')
             @yield('content')
            </div><!-- /.box-body -->
            <div class="box-footer">
              @yield('content_footer')
            </div><!-- /.box-footer-->
          </div><!-- /.box -->