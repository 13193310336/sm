<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Bootstrap -->
    <link href="{{ \App\Component\asset('static/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    @stack('style')
    <!-- Custom Theme Style -->
    <!-- PNotify -->
    <link href="{{ \App\Component\asset('static/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ \App\Component\asset('static/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ \App\Component\asset('static/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ \App\Component\asset('static/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ \App\Component\asset('static/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <link href="{{ \App\Component\asset('static/css/custom.min.css') }}" rel="stylesheet">
</head>
