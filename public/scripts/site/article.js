/**
 * Created by roger on 15/12/8.
 */
$(function () {
    var id = $('#id').val();
    $.$ajax.get('/site/article-data/'+id, function (res) {
        console.log(res);
        for (var name in res) {
            switch (name) {
                case 'content':
                    $('#'+name).html(res[name]);
                    break;
                case 'blockquote':
                    var bq = res[name];
                    if (bq == '') {
                        $('#'+name).parents('blockquote').hide();
                    } else {
                        $('#'+name).html(bq);
                    }
                    break;
                case 'source':
                    var src = res[name];
                    if (src == '') $('#'+name).text('即沃原创');
                default:
                    $('#'+name).text(res[name]);
            }
        }
    });
});