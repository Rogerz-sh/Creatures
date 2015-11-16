<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/site/home.css">
    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/underscore.min.js"></script>
    <script src="/scripts/prototype.js"></script>
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
</head>
<body>
    <header class="header bg">
        <div class="wrap">
            <div class="logo">
                <img src="/images/logo.png" height="40" />
                <div class="logo-text">Laravel</div>
            </div>
            <nav>
                <ul>
                    <li class="active"><a href="/">首页</a></li>
                    <li><a href="/">猎头服务</a></li>
                    <li><a href="/">洽谈会</a></li>
                    <li><a href="/">职位</a></li>
                    <li><a href="/">人才库</a></li>
                </ul>
            </nav>
            <div class="quick-menu">
                <ul>
                    <li><a href="/">职场问答</a>|</li>
                    <li><a href="/user/login">企业客户</a>|</li>
                    <li><a href="/">人才客户</a></li>
                </ul>
            </div>
        </div>
    </header>
    @yield('content')
</body>
</html>
