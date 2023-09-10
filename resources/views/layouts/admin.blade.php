<!doctype html>
<html lang="en">
    @include('admin.classes.head')
<body>
    <div class="app-admin-wrap layout-sidebar-large">
        @include('admin.classes.header')
        @include('admin.classes.sidebar')
    </div>
<div class="main-content-wrap sidenav-open d-flex flex-column">
    @yield('main')
    @include('admin.classes.footer')
</div>
@include('sweetalert::alert')
@include('admin.classes.scripts')

</body>
</html>


