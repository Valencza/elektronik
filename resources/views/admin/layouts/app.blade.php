@include('admin.layouts.head')
@stack('custom-css')

<!-- START Wrapper -->
<div class="wrapper">

@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')

@yield('content')

@include('admin.layouts.footer')
@include('admin.layouts.tail')