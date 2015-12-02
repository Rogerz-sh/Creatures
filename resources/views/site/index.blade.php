@extends('layout.home')
@section('title', '首页')
@section('content')
<div class="slider">
    <ul class="slider-main">
        <li class="active"><img src="/images/temp/slider_01.jpg" alt="" width="100%" height="400"></li>
        <li><img src="/images/temp/slider_02.jpg" alt="" width="100%" height="400"></li>
        <li><img src="/images/temp/slider_03.jpg" alt="" width="100%" height="400"></li>
    </ul>
    <div class="slider-btn">
        <a class="active"></a>
        <a></a>
        <a></a>
    </div>
</div>
<div class="absolute-toolkit hide">
    <div class="absolute-right">
        <img src="/images/temp/code.jpg" alt="">
        <div class="toolkit-button bg-primary">企业快速下单</div>
        <div class="toolkit-button bg-primary">简历快速提交</div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="wrap pos-rel">
            <div id="data-list">
                <div class="slide-list">
                    <div class="arrow arrow-left"></div>
                    <div class="slide-content">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>上海</td>
                                <td>JAVA工程师</td>
                                <td>年薪18万</td>
                                <td>周期18天</td>
                                <td>成功入职</td>
                                <td>2015-11-11</td>
                            </tr>
                            <tr>
                                <td>上海</td>
                                <td>JAVA工程师</td>
                                <td>年薪18万</td>
                                <td>周期18天</td>
                                <td>成功入职</td>
                                <td>2015-11-11</td>
                            </tr>
                            <tr>
                                <td>上海</td>
                                <td>JAVA工程师</td>
                                <td>年薪18万</td>
                                <td>周期18天</td>
                                <td>成功入职</td>
                                <td>2015-11-11</td>
                            </tr>
                            <tr>
                                <td>上海</td>
                                <td>JAVA工程师</td>
                                <td>年薪18万</td>
                                <td>周期18天</td>
                                <td>成功入职</td>
                                <td>2015-11-11</td>
                            </tr>
                            <tr>
                                <td>上海</td>
                                <td>JAVA工程师</td>
                                <td>年薪18万</td>
                                <td>周期18天</td>
                                <td>成功入职</td>
                                <td>2015-11-11</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="arrow arrow-right"></div>
                </div>
            </div>
            <div id="data-update">
                <div>
                    <p>数据更新</p>
                    <p>Data Update</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row margin-top-10">
        <div class="wrap">
            <h4>专业领域 & 热门职位 <br><small>Professional Field & Featured Jobs</small></h4>
        </div>
    </div>
    <div class="row bg-gray">
        <div class="wrap clear-padding padding-top-20 padding-bottom-20">
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/internet.png" alt="" class="inline-block v-bottom" width="24">
                    <span>IT & 互联网</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/img_03.jpg" alt="" width="100%">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10">
                    <li class="padding-top-5 padding-bottom-5">某知名银行 <small>预算管理</small> <span class="pull-right orange">10-15万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某知名证券公司 <small>综合业务管理</small> <span class="pull-right orange">15-25万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某互联网金融公司 <small>综合业务管理</small> <span class="pull-right orange">30-50万</span></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/factory.png" alt="" class="inline-block v-bottom" width="24">
                    <span>房地产</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/img_07.jpg" alt="" width="100%">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10">
                    <li class="padding-top-5 padding-bottom-5">某知名银行 <small>预算管理</small> <span class="pull-right orange">10-15万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某知名证券公司 <small>综合业务管理</small> <span class="pull-right orange">15-25万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某互联网金融公司 <small>综合业务管理</small> <span class="pull-right orange">30-50万</span></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/money.png" alt="" class="inline-block v-bottom" width="24">
                    <span>金融</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/img_05.jpg" alt="" width="100%">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10">
                    <li class="padding-top-5 padding-bottom-5">某知名银行 <small>预算管理</small> <span class="pull-right orange">10-15万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某知名证券公司 <small>综合业务管理</small> <span class="pull-right orange">15-25万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某互联网金融公司 <small>综合业务管理</small> <span class="pull-right orange">30-50万</span></li>
                </ul>
            </div>
        </div>
        <div class="wrap clear-padding padding-bottom-20">
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/internet.png" alt="" class="inline-block v-bottom" width="24">
                    <span>IT & 互联网</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/img_03.jpg" alt="" width="100%">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10">
                    <li class="padding-top-5 padding-bottom-5">某知名银行 <small>预算管理</small> <span class="pull-right orange">10-15万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某知名证券公司 <small>综合业务管理</small> <span class="pull-right orange">15-25万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某互联网金融公司 <small>综合业务管理</small> <span class="pull-right orange">30-50万</span></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/factory.png" alt="" class="inline-block v-bottom" width="24">
                    <span>房地产</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/img_07.jpg" alt="" width="100%">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10">
                    <li class="padding-top-5 padding-bottom-5">某知名银行 <small>预算管理</small> <span class="pull-right orange">10-15万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某知名证券公司 <small>综合业务管理</small> <span class="pull-right orange">15-25万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某互联网金融公司 <small>综合业务管理</small> <span class="pull-right orange">30-50万</span></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/money.png" alt="" class="inline-block v-bottom" width="24">
                    <span>金融</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/img_05.jpg" alt="" width="100%">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10">
                    <li class="padding-top-5 padding-bottom-5">某知名银行 <small>预算管理</small> <span class="pull-right orange">10-15万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某知名证券公司 <small>综合业务管理</small> <span class="pull-right orange">15-25万</span></li>
                    <li class="padding-top-5 padding-bottom-5">某互联网金融公司 <small>综合业务管理</small> <span class="pull-right orange">30-50万</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="margin-bottom-200"></div>
</div>
<script src="/scripts/site/slider.js"></script>
@stop