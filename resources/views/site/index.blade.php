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
<div class="absolute-toolkit">
    <div class="absolute-right">
        <img src="/images/temp/code.jpg" alt="">
        <div class="toolkit-button bg-primary">企业快速下单</div>
        <div class="toolkit-button bg-primary">简历快速提交</div>
    </div>
</div>
<div class="container-fluid">
    <div class="wrap bg-lightgray">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="text-center text-warning">专注领域</h4>
                <p><img src="/images/internet.png" alt="" width="60"><strong>IT & 互联网</strong></p>
                <p><img src="/images/money.png" alt="" width="60"><strong>金融</strong></p>
                <p><img src="/images/factory.png" alt="" width="60"><strong>制造</strong></p>
            </div>
            <div class="col-xs-8">
                <h4 class="text-center text-info">最新成功入职信息</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th>企业</th>
                        <th>职位</th>
                        <th>面试</th>
                        <th>入职</th>
                        <th>年薪</th>
                        <th>时间</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>上海饰也贸易有限公司</td>
                        <td>销售总监</td>
                        <td>3人</td>
                        <td>1人</td>
                        <td>20万</td>
                        <td>2015-10-11</td>
                    </tr>
                    <tr>
                        <td>上海饰也贸易有限公司</td>
                        <td>销售总监</td>
                        <td>3人</td>
                        <td>1人</td>
                        <td>20万</td>
                        <td>2015-10-11</td>
                    </tr>
                    <tr>
                        <td>上海饰也贸易有限公司</td>
                        <td>销售总监</td>
                        <td>3人</td>
                        <td>1人</td>
                        <td>20万</td>
                        <td>2015-10-11</td>
                    </tr>
                    <tr>
                        <td>上海饰也贸易有限公司</td>
                        <td>销售总监</td>
                        <td>3人</td>
                        <td>1人</td>
                        <td>20万</td>
                        <td>2015-10-11</td>
                    </tr>
                    <tr>
                        <td>上海饰也贸易有限公司</td>
                        <td>销售总监</td>
                        <td>3人</td>
                        <td>1人</td>
                        <td>20万</td>
                        <td>2015-10-11</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="/scripts/site/slider.js"></script>
@stop