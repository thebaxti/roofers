<!doctype html>
<html lang="en">
@include('site.classes.head')

<body>
    @include('site.classes.header')
    @yield('content')
    @include('site.classes.footer')
</body>
@include('sweetalert::alert')
@include('site.classes.script')
</html>