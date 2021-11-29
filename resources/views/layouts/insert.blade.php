<!doctype html>
<html lang="fa">
<head>
    @include('include.meta')
    @include('include.assets')
    @include('include.flash')
    <title>@yield('title')</title>
</head>
<body>

<div class="row p-0 m-0 w-100 bg-dark overflow-auto position-absolute h-100 align-items-end" >

    @yield('content')

</div>

{{--@include('include.footer')--}}

</body>
</html>
