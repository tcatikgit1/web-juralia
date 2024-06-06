<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/favicon.ico')}}">
    <meta name="description" content="@yield('meta-description')">

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->

    {{-- INDEXAR (si se desea) LAS PÁGINAS SOLO SI ESTOY EN PRODUCCIÓN --}}
    @if (config('app.env') == 'production')
        @yield('meta-robots')
    @else
        <meta name="robots" content="noindex">
    @endif
    <meta name="keywords" content="@yield('meta-keywords')">
    <link rel="stylesheet" href="{{ asset(mix('css/bootstrap-lite.css'))  . '?v='.$VERSION_WEB }}" media="print" onload="this.media='all'; this.onload=null;"/>
    <link rel="stylesheet" href="{{ asset(mix('css/layout.css'))  . '?v='.$VERSION_WEB }}" />


    @yield('page-style')
    @stack('extra-css')
</head>

<body class="">
    @include('panels/navbar')

    @yield('content')

    @include('panels/cookies')

    @include('partials/footer')
    <script src="{{ asset(mix('js/layout.js'))  . '?v='.$VERSION_WEB }}"></script>
    @yield('page-script')
    @stack('extra-js')


</body>

</html>
