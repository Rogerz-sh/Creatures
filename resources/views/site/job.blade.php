@extends('layout.header')
@section('title', '即沃咨询 - 职位信息')
@section('content')
    <div class="container-fluid bg-gray">
        <div class="row">
            <div class="wrap bg-white margin-top-20 margin-bottom-20 padding-10">

                <div class="col-xs-3 text-center">
                    <img src="/images/logo_eye.png" alt="" width="90%" class="border-solid border-width-1 border-color-main margin-top-20">
                    <p class="margin-top-10 text-center ellipsis">上海即沃企业管理咨询有限公司</p>
                </div>
                <div class="col-xs-9 no-padding-left">
                    <div class="col-xs-12 margin-top-10">
                        <blockquote class="no-margin-bottom">
                            <p>基本信息</p>
                        </blockquote>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-8">
                            <h2>Java开发工程师 <small>工作地点：上海</small></h2>
                        </div>
                        <div class="col-xs-4"><h2 class="orange">年薪15-20万</h2></div>
                    </div>
                    <div class="col-xs-12 dark-gray">
                        <div class="col-xs-4">学历要求： <span>本科及以上</span></div>
                        <div class="col-xs-4">性别要求： <span>无</span></div>
                        <div class="col-xs-4">年龄要求： <span>25-40岁</span></div>
                    </div>

                    <div class="col-xs-12 margin-top-30">
                        <blockquote class="no-margin-bottom">
                            <p>岗位职责</p>
                        </blockquote>
                    </div>
                    <div class="col-xs-12">
                        <div class="padding-10 dark-gray">
                            <p>1.熟悉J2EE体系架构及B/S三层结构系统的开发，熟悉流行的开源产品如struts、mybatis、spring等；</p>
                            <p>2.精通Tomcat、Jboss、Webogic中至少一种应用服务器；</p>
                            <p>3.精通eclipse开发工具 ;</p>
                            <p>4.精通WebService、多线程、基于NIO高性能网络编程等；</p>
                            <p>5.在Oracle、SQLServer、MYSQL等常用数据库中至少有一种数据库上开发经验；能够熟练编写常用SQL、存储过程等；具备一定数据库调优技能。</p>
                            <p>6.熟悉memcache、redis、mongodb等常用nosql解决方案</p>
                            <p>7.熟悉web开发中各类缓存设计、站点优化方案；</p>
                        </div>
                    </div>

                    <div class="col-xs-12 margin-top-20">
                        <blockquote class="no-margin-bottom">
                            <p>任职要求</p>
                        </blockquote>
                    </div>
                    <div class="col-xs-12">
                        <div class="padding-10 dark-gray">
                            <p>1. 计算机、通信、电子等相关专业本科或以上学历，三年以上全职JAVA软件开发经验；</p>
                            <p>2. 具有扎实的Java语言基础，熟悉J2EE规范，具备良好的代码习惯；</p>
                            <p>3. 熟悉SOA面向服务的架构开发模式；</p>
                            <p>4. 熟悉Redis等nosql数据库以及mysql、oracle等结构化数据库的开发；</p>
                            <p>5. 熟悉dubbo等RPC框架或kafka等MQ技术；</p>
                            <p>6. 熟悉常用的J2EE框架（SpringMVC、Hibernate、Mybatis、Freemarker等）；</p>
                            <p>7. 具有社交软件、互联网开发经验优先。</p>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <button class="btn btn-primary full-width">我要应聘该职位</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('layout.footer')
@stop