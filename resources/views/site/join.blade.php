@extends('layout.header')
@section('title', '即沃咨询 - 加入我们')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                <img src="/images/about_us.jpg" alt="猎头服务" width="100%" height="300">
            </div>
        </div>
        <div class="row margin-top-20">
            <div class="wrap">
                <ul class="breadcrumb">
                    <li><a class="orange" href="/">首页</a></li>
                    <li>猎头服务</li>
                </ul>
            </div>
        </div>
        <div class="row margin-bottom-20">
            <div class="wrap">
                <div class="col-xs-4">
                    <ul class="site-nav">
                        <li class="active" data-target="#tab1">员工成长发展</li>
                        <li class="sub-nav-title">招聘职位</li>
                        <ul class="site-sub-nav">
                            <li data-target="#job1">猎头顾问</li>
                            <li>顾问助理</li>
                            <li>市场主管</li>
                            <li>实习生</li>
                        </ul>
                    </ul>
                </div>
                <div class="col-xs-8">
                    <ul class="site-content">
                        <li class="active" id="tab1">
                            <p class="indent">作为专业的猎头服务机构，我们的员工是即沃的重要资产。我们重视每一位员工的发展及其贡献， 一直致力于为员工提供快乐且具有挑战性的工作、轻松的工作环境、完善的培训机制，以及具有竞争力的薪酬福利，从而吸引和发展更多优秀人才在即沃打造属于自己的平台和事业。</p>
                            <p class="indent"><strong>职业发展路径 ：</strong></p>
                            <p class="indent">公司为员工提供至少三种职业成长通道：专家级高级顾问；项目经理／区域经理；合伙人／高级合伙人</p>
                            <p class="indent">绩效管理流程帮助员工更有效的管理职业生涯：一年四次的绩效与职业发展交流活动，为员工提供无障碍升迁平台；</p>
                            <p class="indent"><strong>员工培训：</strong></p>
                            <p class="indent">即沃提供多种培训计划，如入职培训、专业知识培训、管理技能培训、职业发展培训，员工经验分享、成长训练营等，帮助员工持续学习，快速成长，达成发展目标。</p>
                            <p class="indent"><strong>薪酬福利：</strong></p>
                            <p class="indent">加入即沃，除了具有市场竞争力的薪酬以外，您还将得到：</p>
                            <p class="indent">五险一金、 绩效奖金、培训、带薪年假 、旅游、员工关怀活动、节假日福利等</p>
                        </li>
                        <li id="job1">
                            <p class="indent"><b>1、评估需求</b></p>
                            <p class="indent">通过对客户进行拜访，详细了解客户的企业文化、公司背景、行业和产品特点，与客户进行充分、有效的沟通与探讨，确定所需招聘岗位的职责、任职条件、特别要求及相应的薪酬范围</p>
                            <p class="indent"><b>2、签订服务协议 </b></p>
                            <p class="indent">双方确认猎头职位与合作细节后 ，共同签订新猎夫服务协议</p>
                            <p class="indent"><b>3、人才甄选 </b></p>
                            <p class="indent">安排专项猎头小组对接，根据我们对客户所处行业的深刻认识，结合岗位的具体要求，为该职位的招聘制订详细的寻访方案，依据寻访方案，首先进行我们庞大的人才数据库的筛选，同时进行其他渠道搜寻，启动兼职猎手，全面展开寻访行动</p>
                            <p class="indent"><b>4、人才评估</b></p>
                            <p class="indent">对所有接触到的候选人信息进行多层面、多手段的评估分析和面试过滤，包括候选人的岗位现状、沟通能力、离职可能性与动机、薪酬水准等。筛选出基本符合要求的候选人，对候选人进行综合评价，撰写候选人报告推荐给客户。 </p>
                            <p class="indent"><b>5、面试与反馈</b></p>
                            <p class="indent">一般情况下，我们将在签约后的3－5天内将评估过的候选人综合信息提供给客户，根据客户的要求安排候选人与客户面谈，协助双方就具体聘用条件进行有效沟通、反馈和协调， 基本锁定目标人选</p>
                            <p class="indent"><b>6、背景调查 </b></p>
                            <p class="indent">协助客户对目标人选的履历、教育、品质、业绩、能力、性格等情况进行背景调查、核实。调查内容可以是客户要求设计，也可以按新猎夫人才的固定格式。新猎夫人才将提供2到3份背景调查报告内容给客户，以保证该候选人的可靠性。 </p>
                            <p class="indent"><b>7、录用人选</b></p>
                            <p class="indent">人选经过复试并获通过后，我们將协助候选人办理原单位的各项离职手续以及新单位的入职手续</p>
                            <p class="indent"><b>8、后继服务及保证期 </b></p>
                            <p class="indent">当客户正式聘用候选人以后，人才会与客户保持定期联系，协助双方解决试用期期间可能遇到的困难与障碍，确保候选人试用成功。如果该候选人由于自身的原因提出离职或没能通过试用期，新猎夫将为客户就该职位提供免费服务，重新搜寻合适候选人提供给客户。</p>
                        </li>
                        <li>
                            3
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layout.footer')
    <script src="/scripts/site/home.js"></script>
@stop