/**
 * Created by Administrator on 2017/2/11 0011.
 */
$(function(){
    $('.star_students_carousel_next').on("click",function () {
        if(!$(".star_students_carousel_content").is(":animated")){
            $(".star_students_carousel_content").animate({marginLeft:"-224px"},600, function () {
                $(".star_students_carousel_content  li:first").appendTo($(".star_students_carousel_content"));
                $(".star_students_carousel_content").css('marginLeft','0px');
            });
        }
    });
    $('.star_students_carousel_prev').on("click",function () {
        if(!$(".star_students_carousel_content").is(":animated")){
            $(".star_students_carousel_content").css('marginLeft','-224px');
//                    $(".star_students_carousel_content>li").eq(5).prependTo($(".star_students_carousel_content"));
            $(".star_students_carousel_content").animate({marginLeft:"0px"},600);
        }
    });
    var timer;
    function run(){
        timer = setInterval(function(){
            $('.star_students_carousel_next').trigger("click");
        },2300)
    }
    run ();
    $(".star_students_carousel_content").mouseover(function(){
        clearInterval(timer);
    });
    $(".star_students_carousel_content").mouseout(function(){
        run();
    })
});
$(function(){
    $('.push_company_carousel_next').on("click",function () {
        if(!$(".push_company_carousel_content").is(":animated")){
            $(".push_company_carousel_content").animate({marginLeft:"-215px"},600, function () {
                $(".push_company_carousel_content  li:first").appendTo($(".push_company_carousel_content"));
                $(".push_company_carousel_content").css('marginLeft','0px');
            });
        }
    });
    $('.push_company_carousel_prev').on("click",function () {
        if(!$(".push_company_carousel_content").is(":animated")){
            $(".push_company_carousel_content").css('marginLeft','-215px');
//                    $(".star_students_carousel_content>li").eq(5).prependTo($(".star_students_carousel_content"));
            $(".push_company_carousel_content").animate({marginLeft:"0px"},600);
        }
    });
    var timer2;
    function run(){
        timer2 = setInterval(function(){
            $('.push_company_carousel_next').trigger("click");
        },4000)
    }
    run ();
    $(".push_company_carousel_content").mouseover(function(){
        clearInterval(timer2);
    });
    $(".push_company_carousel_content").mouseout(function(){
        run();
    })
});