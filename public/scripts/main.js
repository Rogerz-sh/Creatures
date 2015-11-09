/**
 * Created by roger on 15/10/27.
 */
$(function () {
    $('#side-menu').delegate('li', 'click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    $('#sub-menu').delegate('li', 'click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });

    //$.get('/enterprise/menu').success(function (data) {
    //    console.log(data);
    //    initMainMenu(data);
    //});

    function initMainMenu(data) {
        var li = [];
        for (var i = 0, l = data.length; i < l; i++) {
            li.push('<li><a href="enterprise{2}"><i class="fa {0}"></i><p>{1}</p></a></li>'.format(data[i].icon, data[i].label, data[i].url));
        }
        $('#side-menu ul').html(li.join(''));
    }
});