
$(function( ){

    var sele = 0;
    $('.tabs').hide();
    $(".sele-ul").click(function () {
        if(sele==0 || $('.sele-ul .active')==undefined) {
            $('.tabs').show();
        }
    });
    $(".sele-ul").on('click','a',function () {
        if($(this).attr('class')==='tab-link button active'){
             $('.tabs').hide();
             sele = 1;
            $('.sele-ul .active').attr('class','tab-link button');
        }else {
            $('.tabs').show();
            $(this).attr('class','tab-link button active');
        }

    });
});
