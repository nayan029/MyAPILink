@include('frontend.layouts.header')

<body>
    <div id="before-header">
        @include('frontend.layouts.navbar')

        
        <div class="content">
                @yield('content')
            </div>
        <!-- modal  -->
        <!-- end contact modal -->
        @include('frontend.layouts.footer')