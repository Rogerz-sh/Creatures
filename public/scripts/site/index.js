/**
 * Created by roger on 15/12/10.
 */
$(function () {
    $.$ajax.get('/site/area-job-list-data', function (res) {
        var jobList = {};
        $.each(res, function (i, job) {
            if (!jobList[job.type]) jobList[job.type] = [];
            jobList[job.type].push('<li class="padding-top-5 padding-bottom-5"><a class="black" href="/site/job/{0}">{1}</a> <span class="pull-right orange">{2}</span><br> <small class="dark-gray">{3}</small></li>'.format(job.id, job.job_name, job.salary, job.company_name));
        });
        for (var type in jobList) {
            $('#area_job_list').find('ul[data-type="{0}"]'.format(type)).html(jobList[type].join(''));
        }
    });

    $.$ajax.get('/site/article-list-data', function (res) {
        console.log(res);
        var artList = {};
        $.each(res, function (i, art) {
            if (!artList[art.type]) artList[art.type] = [];
            artList[art.type].push('<li><a href="/site/article/{0}">{1}</a> <span class="pull-right dark-gray">{2}</span></li>'.format(art.id, art.title, new Date(art.publish.replace(/-/g, '/')).format()));
        });
        for (var type in artList) {
            $('#news-content').find('ul[data-type="{0}"]'.format(type)).html(artList[type].join(''));
        }
    });
});