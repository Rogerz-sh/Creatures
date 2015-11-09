<?php
use Illuminate\Support\Facades\Session;
$menus = Session::get('menus');
$name = Session::get('name');
?>
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/main.css">
    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/underscore.min.js"></script>
    {{--<script src="/scripts/angular.min.js"></script>--}}
    {{--<script src="/scripts/angular-route.min.js"></script>--}}
    {{--<script src="/scripts/angular/bootstrap.js"></script>--}}
    <script src="/scripts/prototype.js"></script>
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
    @yield('page-head')
</head>
<body>
<div class="wrapper bg-main" ng-controller="mainController">
    <div id="header">
        <div class="float-left white"><h2 class="float-left"><i class="fa fa-home"></i> 上海饰也贸易有限公司</h2></div>
        <div class="float-right">
            <ul id="user-menu">
                <li title="我的帐户"><i class="fa fa-user"></i></li>
                <li title="我的消息"><i class="fa fa-envelope"></i></li>
                <li title="我的钱包"><i class="fa fa-money"></i></li>
                <li title="系统设置"><i class="fa fa-cog"></i></li>
            </ul>
            <div id="user">
                <p class="white bold">{{ Session::get('name') }}</p>
                <img src="/images/logo.jpg" alt="照片" />
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div id="main">
                    <div id="side-menu">
                        <ul>
                            @foreach ($menus as $item)
                                <li @if($url == $item->url)class="active"@endif>
                                    <a href="/enterprise{{$item->url}}"><i class="fa {{$item->icon}}"></i><p>{{$item->label}}</p></a>
                                </li>
                            {{--<li ng-repeat="item in menus track by $index" ng-class="{'active':$index == menuIndex}" ng-click="setIndex($index)"><i class="fa @{{ item.icon }}"></i><p ng-bind="item.label"></p>--}}
                            {{--</li>--}}
                            @endforeach
                        </ul>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/scripts/main.js"></script>
{{--<script src="/scripts/angular/controllers/mainController.js"></script>--}}
{{--<script src="/scripts/angular/controllers/enterpriseController.js"></script>--}}
</body>
</html>
