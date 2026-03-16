<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Authentication') | Posing</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .cs-modal {
            position: relative;
            background-color: transparent;
            opacity: 1;
            visibility: visible;
            display: block;
            height: auto;
            width: auto;
            padding: 40px 0;
        }
        .cs-close_overlay, .cs-close_modal {
            display: none;
        }
        .cs-modal_container {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        body {
            background: #f4f7f6;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('assets/js/plugins/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.counter.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
