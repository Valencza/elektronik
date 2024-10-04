@include('admin.layouts.head')
@push('css')

<!-- START Wrapper -->
<div class="wrapper">

@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')

@yield('content')

@include('admin.layouts.footer')
@push('js')
@include('admin.layouts.tail')