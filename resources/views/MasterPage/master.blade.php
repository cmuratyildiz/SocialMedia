<html lang="{{ config('app.locale')}}">
<head>
    <title>@yield('title')</title>
    @include('masterPage.head-nav-footer.head')
    @yield('head')
</head>
<body>

<div class="wrapper">
    @yield('content')
</div>
@include('masterPage.head-nav-footer.foot')
</body>
@include('masterPage.head-nav-footer.footer')
@include('sweetalert::alert')
@yield('footer')
</html>