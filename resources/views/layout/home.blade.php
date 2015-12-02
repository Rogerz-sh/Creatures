<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/bootstrap.replace.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/site/home.css">
    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/underscore.min.js"></script>
    <script src="/scripts/prototype.js"></script>
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
</head>
<body>
    <header class="header">
        <div class="wrap">
            <div class="logo">
                <img src="/images/logo_new.jpg" height="50" />
                <div class="logo-text">即沃咨询 <small>Giewoo</small></div>
            </div>
            <div class="quick-menu">
                <div class="text-left">
                    <img src="/images/wechat.png" alt="" height="25">
                    <img src="/images/tel.png" alt="" height="25">
                    <strong>400-700-8888</strong>
                </div>
                <ul>
                    <li><a href="/user/login">我是企业</a>|</li>
                    <li><a href="/">我是人才</a>|</li>
                    <li><a href="/">关于我们</a></li>
                </ul>
            </div>
        </div>
    </header>
    <nav>
        <div class="wrap">
            <ul>
                <li class="active"><a href="/">首页</a></li>
                <li><a href="/">猎头服务</a></li>
                <li><a href="/">极速猎车</a></li>
                <li><a href="/">成功案例</a></li>
                <li><a href="/">职业发展</a></li>
                <li><a href="/">俱乐部</a></li>
            </ul>
        </div>
    </nav>
    <div class="margin-top-110"></div>
    @yield('content')
</body>
</html>
