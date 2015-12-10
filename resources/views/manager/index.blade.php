@extends('layout.manager')
@section('title', '首页')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li>首页</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="col-xs-10 col-xs-offset-1 border-solid border-width-2 border-color-main border-radius-5 text-center padding-30">
                        <a href="/article/index">文章管理</a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="col-xs-10 col-xs-offset-1 border-solid border-width-2 border-color-main border-radius-5 text-center padding-30">
                        <a href="/virtual-job/index">职位管理</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop