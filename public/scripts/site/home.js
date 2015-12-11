/**
 * Created by roger on 15/12/2.
 */
$(function () {
    $('#news-title').delegate('li', 'click', function () {
        var target = $(this).data('target');
        $(this).addClass('active').siblings('li').removeClass('active');
        $('#news-content').children().eq(target).addClass('active').siblings('div').removeClass('active');
    });

    var slideIndex = 0;
    $('.slide-list .arrow').click(function () {
        var direct = ~~$(this).data('direct');
        slideIndex += direct;
        var idx = slideIndex % 3, tables = $('.slide-content table'), lights = $('.slide-light span');
        idx = idx < 0 ? 3 + idx : idx;
        tables.eq(idx).addClass('active').siblings('table').removeClass('active');
        lights.eq(idx).addClass('active').siblings('span').removeClass('active');

    });

    $('.site-nav li:not(.sub-nav-title)').each(function (i, li) {
        $(li).click(function () {
            var target = $(this).data('target')
            $('.site-nav li').removeClass('active');
            $(this).addClass('active').parent().prev('.sub-nav-title').addClass('active');
            $('.site-content li').removeClass('active');
            $(target).addClass('active');
        });
    });

    $('#side-tools').delegate('li.side-tools-top', 'click', function () {
        $(document).scrollTop(0)
    });
});