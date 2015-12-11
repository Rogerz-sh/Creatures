@extends('layout.header')
@section('title', '即沃咨询 - 文章&资讯')
@section('content')
    <div class="container-fluid bg-gray">
        <div class="row">
            <div class="wrap bg-white margin-top-20 margin-bottom-20 padding-10">
                <h3 class="text-center" id="title"></h3>
                <input type="hidden" name="id" id="id" value="{{$id}}">
                <div class="col-xs-12">
                    <blockquote>
                        <p class="indent gray line-height-10"><small id="blockquote"></small></p>
                    </blockquote>
                </div>
                <div class="col-xs-12">
                    <div id="content" class="padding-30"></div>
                </div>
                <div class="col-xs-12 padding-50">
                    <p class="gray"><i>作者：<span id="author"></span></i> <i class="pull-right">发布日期：<span id="publish"></span></i></p>
                    <div class="clearfix"></div>
                    <p class="gray"><small>
                            即沃咨询诚意推荐<br>
                            版权声明：“即沃咨询”所推送文章除非确实无法确认，我们都会注明作者和来源。部分文章推送时未能与原作者取得联系。若涉及版权问题，烦请原作者联系我们，我们会在24小时内删除处理，谢谢！
                        </small></p>
                </div>
                <div class="col-xs-12">
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
    <script src="/scripts/plugins/ajax.js"></script>
    <script src="/scripts/site/article.js"></script>
@stop