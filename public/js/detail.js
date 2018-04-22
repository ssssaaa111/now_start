$.init();
$(function () {

    $('.det-nav').click(function () {
        var h = $(document).height()-$('.content').height()/2;
        $('.content').scrollTop(h);
        $.toast("请选择想预约的时间");
    })

    $(document).on('click','.col-faa', function () {
        var buttons1 = [
            {
                text: '去付款',
                label: true
            },
            {
                text: '确认',
                bold: true,
                color: 'danger',
                onClick: function() {
                    // 确认回调函数;
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