$(function(){
    $("#search input").on("click",function(){
            if(this.value==this.defaultValue){
                this.value="";
            }
        })
    $("#search span").on("click",function(){
        alert("该功能尚未开发，敬请期待")
    });
    /*var iNow=1;*/
 /*   $("#right").on("click",function(){

        iNow++;
        if(iNow>4){
            iNow=1;
        }
        $("#img"+iNow).show().siblings().hide();
        $("#img div").show();

        ;


    });

    $("#left").on("click",function(){

       iNow--;

        if(iNow<1){
            iNow=4;
        }
        console.log(iNow);
        $("#img"+iNow).show().siblings().hide();
        $("#img div").show();

    });*/
 /*   $("#right").on("click",function(){
        $("#img img").offset({top:0,left:-200})

    });*/
   /* $("#img #left").on("click", function () {
        iNow--;
        if(iNow<1){
            iNow=4;
        }
        $("#img #img"+iNow).slideToggle("slow",function(){
        }).siblings().hide();
        console.log(iNow);
        $("#img div").show();
    });
    $("#img #right").on("click", function () {
        iNow++;
        if(iNow>4){
            iNow=1;
        }
        $("#img #img"+iNow).slideToggle("slow",function(){
        }).siblings().hide();
        console.log(iNow);
        $("#img div").show();
    })*/
    var a=0;
    $("#img #right").on("click",function(){
        a++;
        if(a>3){
            a=0;
        }
        $("#img #img-box").animate({
            left:-a*$("#img-box li").eq(0).width()
        }
        )
    })
    $("#img #left").on("click",function(){
        a--;
        if(a<0){
            a=3;
        }
        $("#img #img-box").animate({
                left:-a*$("#img-box li").eq(0).width()
            }
        )
    })




});