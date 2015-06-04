<html>
<head>
    <title>ebibliothek: @yield('pagetitle')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/ebib_user.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-social.css') }}" type="text/css">


    @yield('header')

</head>
<body class="custombody">
    <div class="container customcontainer">
        @yield('content')
    </div>
    <script src="{{ URL::asset('js/jquery.js') }}" charset="utf-8"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}" charset="utf-8"></script>
    <script src="{{ URL::asset('js/ebib.js') }}" charset="utf-8"></script>
@yield('footer')
</body>
</html>