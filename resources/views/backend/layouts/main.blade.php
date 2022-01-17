<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('/backend/img/favicon.png') }}" id="favicon" data-original-href="{{ asset('/backend/img/favicon.png') }}">
        <!-- Styles -->
        @include('backend.layouts.css')
        @stack('head')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Nav bar -->
            @include('backend.layouts.navBar')

            <!-- Main Sidebar Container -->
            @include('backend.layouts.sideBar')

            <!-- Content Wrapper. Contains page content -->
            @yield('content')

            <!-- /.content-wrapper -->
            @include('backend.layouts.footer')

        </div>
        <!-- ./wrapper -->
        @include('backend.layouts.js')
        @yield('min-script')
        @stack('scripts')
    </body>
</html>
