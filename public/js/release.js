/*
$(function () {
    var cells = $('#monitor .month_now');//document.getElementById('monitor').getElementsByClassName('month_now')
    var clen = cells.length;
    var currentFirstDate;
    var checkValue = 8;  //时区参数 默认东八区
    var onehour = 60 * 60 * 1000;

    //选择时区
    $("#select_id").bind("change", function () {
        Rendering(currentFirstDate);
    });
    var formatDate = function (date) {
        var year = date.getFullYear() + '年';
        var month = (date.getMonth() + 1) + '月';
        var day = date.getDate();
        var week = '(' + ['星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'][date.getDay()] + ')';
        return day;

    };
    var gettime = function (date) {
        var year = date.getFullYear();
        var month = (date.getMonth() + 1);
        var day = date.getDate();
        var time = year + '-' + month + '-' + day;
        return time;
    };
    var addDate = function (date, n) {
        date.setDate(date.getDate() + n);
        return date;
    };
    var setDate = function (date) {
        Rendering(date);
        //date = new Date(utcTime + 600000*che);
        //date.setTime(date.getTime()+onehour*utc);
        $('.time-now').html(gettime(date));
        var week = date.getDay();
        date = addDate(date, week * -1);
        currentFirstDate = new Date(date);
        for (var i = 0; i < clen; i++) {
            cells[i].innerHTML = formatDate(i == 0 ? date : addDate(date, 1));
        }

    };
    document.getElementById('last-week').onclick = function () {
        setDate(addDate(currentFirstDate, -7));
    };
    document.getElementById('next-week').onclick = function () {
        setDate(addDate(currentFirstDate, 7));
    };
    setDate(new Date());
});

//渲染时间
var arr = new Array();
for (var i = 0; i < 7; i++) {
    arr[i] = new Array(i);
    for (var j = 0; j < 24; j++) {
        arr[i][j] = j + ':00';
    }
}
;


var Rendering = function (date) {
    // for (var i = 1; i < arr.length; i++) {
    //     var days = $('.day-0' + i);
    //     for (var k = 0; k < arr[i].length - 1; k++) {
    //         //console.log(arr[0][0]);
    //         var html = arr[i][k];
    //         $('.day-0' + i).append("<span>" + html + "</span>")
    //     }
    // }
};
*/
$(function () {
    //评论 点赞。。。
    $('.bar-pl').hide();
    $('.menu').hide();
    $(".comm-img").on("click", function (e) {
        if ($('.menu').css('display') == 'none') {
            $(".menu").show(1000);//.animate({width:'2rem'});
        } else {
            $(".menu").hide();
        }
        $(document).one("click", function () {
            $(".menu").hide();
        });

        e.stopPropagation();
    });
    $(".menu").on("click", function (e) {
        var menu = $(e.target);
        e.stopPropagation();
    });

    //点赞
    $('.icon-dianzan').on("click", function () {
        $(".menu").hide();
    });

    //评论
    $('.icon-yipinglun').on("click", function () {
        $('.bar-pl').show();
        $('.bar-inp').focus();
        $(".menu").hide();
    });

    //发送
    $('#for-xr').on('click', function () {
        $('.bar-pl').hide();
    });


});
