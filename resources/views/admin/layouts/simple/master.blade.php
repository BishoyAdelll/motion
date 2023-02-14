<!DOCTYPE html>
<html lang="en" @if (app()->getLocale() === 'ar') dir="rtl" @endif>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/motion round/logo.png')}}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/motion round/logo.png')}}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/motion round/logo.png')}}">
    <title>Motion Round</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">

    @include('admin.layouts.simple.css')
    @yield('style')
      <style>
          .sidebar-list i{
              font-size: 20px !important;
              width: 21px;
          }
          .sidebar-list span {
              margin: 10px;
          }
      </style>
  </head>
  <body onload="startTime()" class=" @if (app()->getLocale() === 'ar') rtl  @endif  " >
{{--  @if(Route::current()->getName() == 'index') onload="startTime()" @endif--}}
{{--    @if(Route::current()->getName() == 'index')--}}
      <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
          <defs></defs>
          <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
          </filter>
        </svg>
      </div>
{{--     @endif--}}
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('admin.layouts.simple.header')
      <!-- Page Header Ends  -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('admin.layouts.simple.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  @yield('breadcrumb-title')
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> <i data-feather="home"></i></a></li>
                    @yield('breadcrumb-items')
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('admin.layouts.simple.footer')

      </div>
    </div>
    <!-- latest jquery-->
    @include('admin.layouts.simple.script')
    <!-- Plugin used-->

    <script type="text/javascript">
      if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
            $(".according-menu.other" ).css( "display", "none" );
            $(".sidebar-submenu" ).css( "display", "block" );
      }

    </script>
<script src="{{ asset('assets/js/dashboard/master.js') }}"></script>
  </body>
</html>
