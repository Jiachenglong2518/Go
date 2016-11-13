/**
 * Created by Administrator on 2016/11/3.
 */
$(function () {
   /* $("#change-color #c1").on("click",function(){
        console.log($("#change-color #c1"));
        $("#change-color #c1").css(
            "background","url('images/theme.gif') 0 15px"
        );
        $("#menu").css("background","lightgray")
    });
    $("#change-color #c2").on("click",function(){
        console.log($("#change-color #c1"));
        $("#change-color #c2").css(
            "background","url('images/theme.gif') 16px 15px"
        )
        $("#menu").css("background","#b5d521")


    });*/
    $("#change-color li").on("click",function(){

        $(this).addClass("selected").siblings().removeClass("selected");
        console.log($(this).css("background-color"));
        $("#left span").css("background-color",$(this).css('background-color'));
        $("#menu").css("background-color",$(this).css('background-color'))

    });


    $("#text li").on("mouseover",function(){
        $(this).css("background","yellow").siblings().css("background","lightgray");
        $("#img li").eq($(this).index()).show().siblings().hide();
        console.log($("#img img"));
        iNow=$(this).index();

    });
    $("#show").on("mouseover",function(){
        clearInterval(timer);
    });
    $("#show").on("mouseout", function(){
        timer=setInterval(function(){
            iNow++;
            if(iNow>4){
                iNow=0;
            }
            $("#img li").eq(iNow).show().siblings().hide();
            $("#text li").eq(iNow).css("background","yellow").siblings().css("background","lightgray");

        },1000)


    });
    var iNow=0;
    $("#text li").eq(iNow).css("background","yellow").siblings()
                 .css("background","lightgray");
    var timer=setInterval(function(){
        iNow++;
        if(iNow>4){
            iNow=0;
        }
        $("#img li").eq(iNow).show().siblings().hide();
        $("#text li").eq(iNow).css("background","yellow").siblings().css("background","lightgray");

        },1000)

    $("#money li").on("click",function(){
        $("#shoes #shoes-image").animate({
                left:-811*($(this).index())+6
            })

    })

});
