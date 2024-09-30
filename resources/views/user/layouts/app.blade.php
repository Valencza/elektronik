@include('user.layouts.head')
@stack('custom-css')
<body class="preload-wrapper color-primary-3">
    <!-- RTL -->
    <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-hover-btn btn-fill">RTL</a>
    <!-- /RTL  -->
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
@include('user.layouts.navbar')

@yield('content')

@include('user.layouts.footer')
@include('user.layouts.modal')
@stack('custom-js')
@include('user.layouts.tail')