
@include('backend.layouts.header')
@yield('title')
@yield('css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('backend.layouts.navbar')
    @include('backend.layouts.left-sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('backend.layouts.breadcrumb')

        <!-- Main content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
@include('backend.layouts.footer')
@yield('script')

</body>
</html>
