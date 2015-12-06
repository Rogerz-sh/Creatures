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
        idx = idx < 0 ? 3 - idx : idx;
        tables.eq(idx).addClass('active').siblings('table').removeClass('active');
        lights.eq(idx).addClass('active').siblings('span').removeClass('active');

    });
});