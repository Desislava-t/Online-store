<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="author" content="Desislava Georgieva, email : desislava.georgieva001@gmail.com, phone: 0897 722 275 ">

    @yield('meta')
    <meta name="description" content="Demo online magazine, Php Laravel 6, CSS,HTML">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title-page')</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" async></script>

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    {{--preload--}}
    <link rel="preload" href="css/app.css" as="style">
    <link rel="preload" href="js/app.js" as="script">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" as="style">
    {{--./preload--}}

</head>
<body>

{{--Anchorst--}}
<a href="#" id="top" aria-label="anchors link">
    <i class="fas fa-chevron-circle-up"></i>
</a>
{{--./Anchorst--}}

{{--Add to cart message--}}
@if(session('status'))
    <div class="alert alert-info alert-dismissible fade show position-fixed" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@section('content')

@show

<div id="component">
    @section('component')
    @show
</div>

</body>
</html>
