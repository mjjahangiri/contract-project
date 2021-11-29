<!doctype html>
<html lang="fa">
<head>
    @include('include.meta')
    @include('include.assets')
    @include('include.flash')
    <title>@yield('title')</title>
</head>
<body>

<div class="row p-0 m-0 w-100 position-absolute h-100 align-items-end" style="background-image: url({{asset('img/car4.jpg')}});background-position: bottom;background-repeat: no-repeat;background-size: cover">

    @yield('content')

</div>

{{--@include('include.footer')--}}

</body>
</html>
