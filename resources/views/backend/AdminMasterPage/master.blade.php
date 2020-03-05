<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <title>@yield('title')</title>
    @include('backend.AdminMasterPage.head-nav-footer.head')
    @include('backend.AdminMasterPage.head-nav-footer.header')
    @yield('head')
</head>
<body>
<div id="wrapper">
    @yield('content')
</div>

@include('backend.AdminMasterPage.head-nav-footer.footer')
@yield('js')
@include('sweetalert::alert')

</body>
</html>