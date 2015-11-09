<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/underscore.min.js"></script>
    <script src="/scripts/prototype.js"></script>
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
    @yield('page-head')
</head>
<body>
@yield('content')
</body>
</html>
