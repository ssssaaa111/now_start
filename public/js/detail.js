$.init();
$(function () {

    $('.det-nav').click(function () {
        var h = $(document).height() - $('.content').height() / 2;
        $('.content').scrollTop(h);
        $.toast("请选择想预约的时间");
    });

    $(document).on('click', '.col-faa', function (even) {
        var $even = $(even.target);
        var time = $(even.target).html();
        var day_now = $($even).parent().children('.month_now');
        var time_now = $('.time-now').html();
        var time_zone = $('select').val();
        time_now = time_now.split('-');
        time_now = time_now[0] + '-' + time_now[1] + '-' + day_now.html() + '-' + time;
        //console.log(time_now);
        var buttons1 = [
            {
                text: '去付款',
                label: true
            },
            {
                text: '确认',
                bold: true,
                onClick: function () {
                    var id = $even.attr('id');
                    id = id.replace("appointment_", "");
                    var url = "/test_pay/" + id;
                    location.href = url;
                   /* $.get(url, function (data) {
                        if (data) {
                            $.toast("操作成功");
                        }
                        else {
                            $.toast("操作失败");
                        }
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    });*/

                }
            }
        ];
        var buttons2 = [
            {
                text: '取消',
                bg: 'danger'
            }
        ];
        var groups = [buttons1, buttons2];
        $.actions(groups);
    });
});

