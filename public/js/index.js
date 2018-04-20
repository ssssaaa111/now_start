$.config = {
    autoInit: true
};
$(".swiper-container").swiper({
    pagination : '.swiper-pagination',
    paginationClickable :true,
    autoplay: 5000,
    loop:true,
});

function moveTo(obj) {
    $(obj).find("ul:first").animate({
        marginTop: "-1.25rem"
    }, 500, function (){
        $(this).css({ marginTop: "0px" }).find("li:first").appendTo(this);
    });
};

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