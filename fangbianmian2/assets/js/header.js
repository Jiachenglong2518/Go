/**
 * Created by Administrator on 2017/2/15 0015.
 */
$(function(){
    $(".header_nav li").on("click",function(){
        $(this).addClass("selected").siblings().removeClass("selected");
    });
    $(".header_portrait").hover(function(){
        $(this).children("ul").stop().slideDown();
    }
        ,function(){
        $(this).children("ul").stop().slideUp();
    }
    );
});