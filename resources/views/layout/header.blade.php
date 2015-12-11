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
    <script src="/scripts/plugins/ajax.js"></script>
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
</head>
<body>
    <header class="header">
        <div class="wrap">
            <div class="logo">
                <div class="flip-container">
                    <div class="flip-box flip-x">
                        <div class="flip face"><img src="/images/giewoo.png" height="100%" width="100%" /></div>
                        <div class="flip back"><div class="full-size bg-dark-orange"><img src="/images/logo_text.png" height="100%" width="100%" /></div></div>
                    </div>
                </div>

                {{--<img src="/images/logo_eye.png" height="110" />--}}
                {{--<div class="logo-text">即沃咨询 <small>Giewoo</small></div>--}}
            </div>
            <div class="quick-menu">
                <div class="text-left">
                    <img src="/images/wechat.png" alt="" height="25">
                    <img src="/images/tel.png" alt="" height="25">
                    <strong class="dark-orange">400-700-8888</strong>
                </div>
                <ul class="dark-orange">
                    <li><a class="dark-orange" href="/user/login">我是企业</a>|</li>
                    <li><a class="dark-orange" href="/">我是人才</a>|</li>
                    <li><a class="dark-orange" href="/">关于我们</a></li>
                </ul>
            </div>
        </div>
    </header>
    <nav>
        <div class="wrap">
            <ul>
                <li @if($navIndex == 0)class="active"@endif><a href="/">首页</a></li>
                <li @if($navIndex == 1)class="active"@endif><a href="/site/hunter">猎头服务</a></li>
                <li @if($navIndex == 2)class="active"@endif><a href="/site/train">极速猎车</a></li>
                <li @if($navIndex == 3)class="active"@endif><a href="/">成功案例</a></li>
                <li @if($navIndex == 4)class="active"@endif><a href="/">职业发展</a></li>
                <li @if($navIndex == 5)class="active"@endif><a href="/">俱乐部</a></li>
                <li @if($navIndex == 6)class="active"@endif><a href="/site/join">加入我们</a></li>

            </ul>
        </div>
    </nav>
    @yield('content')
    <div id="side-tools">
        <ul>
            <li class="v-align side-tools-click"><div><i class="fa fa-comment fa-2x"></i><br>咨询</div></li>
            <li class="v-align side-tools-handler">
                <div><i class="fa fa-phone fa-2x"></i><br><span>热线</span></div>
                <div class="side-tools-hide width-160">
                    <div class="padding-10 text-center white line-height-10">
                        <i class="fa fa-phone v-middle font-120"></i> <span>24小时咨询热线</span>
                        <br><span class="font-120">400-700-8888</span>
                    </div>
                </div>
            </li>
            <li class="v-align side-tools-top"><div><i class="fa fa-chevron-up fa-2x"></i></div></li>
        </ul>
    </div>
    <div id="loading">
        <div class="circle animation"></div>
        <div class="circle text"></div>
    </div>
</body>
</html>
