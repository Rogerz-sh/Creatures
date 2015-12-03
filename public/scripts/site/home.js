/**
 * Created by roger on 15/12/2.
 */
$(function () {
    $('#news-title').delegate('li', 'click', function () {
        var target = $(this).data('target');
        $(this).addClass('active').siblings('li').removeClass('active');
        $('#news-content').children().eq(target).addClass('active').siblings('div').removeClass('active');
    })
});