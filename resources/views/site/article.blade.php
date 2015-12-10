@extends('layout.header')
@section('title', '即沃咨询 - 文章&资讯')
@section('content')
    <div class="container-fluid bg-gray">
        <div class="row">
            <div class="wrap bg-white margin-top-20 margin-bottom-20 padding-10">
                <h3 class="text-center" id="title"></h3>
                <input type="hidden" name="id" id="id" value="{{$id}}">
                <div class="col-xs-6 col-xs-offset-3">
                    <p class="gray"><i>作者：<span id="author"></span></i> <i class="pull-right">发布日期：<span id="publish"></span></i></p>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-12">
                    <blockquote>
                        <p class="indent gray line-height-10"><small id="blockquote"></small></p>
                    </blockquote>
                </div>
                <div class="col-xs-12">
                    <div id="content" class="padding-30"></div>
                </div>
                <div class="col-xs-12">
                    <p class="gray text-center"><small>文章来源： <span id="source"></span></small></p>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
    <script src="/scripts/plugins/ajax.js"></script>
    <script src="/scripts/site/article.js"></script>
@stop