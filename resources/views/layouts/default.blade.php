<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RAHASI | Dashboard</title>
    @include('partials.css')
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      {{-- Top header navigation  --}}
      @include('partials.nav_header')
      <!-- Left side column. contains the logo and sidebar -->
      @include('partials.nav_leftside')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content_header')

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          @include('partials.content_main')
        </section>
       </div>
       <!-- ./wrapper -->
       {{-- Footer of the page   --}}
       @include('partials.footer')
       <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
      @include('partials.right_sidebar')
      </div>
    @include('partials.js')
  </body>
</html>