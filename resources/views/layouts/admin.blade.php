<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.admin.header')
</head>
<body id="page-top">
<div id="wrapper">
    @include('includes.admin.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('includes.admin.topbar')
            @include('includes.admin.totals')
        </div>
        @include('includes.admin.footer')
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')
</body>
</html>
