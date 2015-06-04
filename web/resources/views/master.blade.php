<html>
<head>
    <title>ebibliothek: @yield('pagetitle')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/ebib.css') }}" type="text/css">

    @yield('header')
</head>
<body class="custombody">
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">eBibliothek</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="/">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li ><a href="/search">Search<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a></li>
                <li ><a href="/profile">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                <li ><a href="/upload">Upload<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-open"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="main fullheight">
    <div class="container-fluid customcontainer">
        <div class="customscrollingbox">
            @yield('content')
        </div>

    </div>
</div>
<script src="{{ URL::asset('js/jquery.js') }}" charset="utf-8"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}" charset="utf-8"></script>
<script src="{{ URL::asset('js/ebib.js') }}" charset="utf-8"></script>
@yield('footer')
</body>
</html>
