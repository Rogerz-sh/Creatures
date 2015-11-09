/**
 * Created by roger on 15/10/26.
 */
$(function () {
    $('.tab').click(function () {
        var target = $(this).data('target');
        $(this).addClass('active').siblings('.tab').removeClass('active');
        $('.tab-content').removeClass('active');
        $('#' + target).addClass('active');
    });

    $('#submit').click(function () {
        location.href = '/account/login?name=' + $('#name').val();
    });
});
