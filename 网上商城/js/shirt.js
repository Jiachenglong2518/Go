/**
 * Created by Administrator on 2016/11/7.
 */
    $(function(){
        var $colorIdx = 0;
        $("#u-img li").on("click",function() {
            $colorIdx = $(this).index();
            $("#show-img ul").eq($colorIdx).show().siblings().hide();
            $("#shirt .small-box").eq($colorIdx).show().siblings('.small-box').hide();
            $("#big-shirt div").eq($colorIdx).show().siblings().hide();
            $("#t-color").html($(this).find('img').prop('alt'));
        });

        //$("#u-img #img-blue").on("click",function(){
        //    $("#show-img-blue").show().siblings().hide();
        //    $("#blue-small").show().siblings('.small-box').hide();
        //    $("#blue-big").show().siblings().hide();
        //    $("#t-color").html("blue");
        //   /* $(this).css("border","solid 1px orange")*/
        //});
        //$("#u-img #img-yellow").on("click",function(){
        //    $("#show-img-yellow").show().siblings().hide();
        //    $("#yellow-big").show().siblings().hide();
        //    $("#yellow-small").show().siblings('.small-box').hide();
        //    $("#t-color").html("yellow");
        //   /* $(this).css("border","solid 1px orange")*/
        //});
        //$("#u-img #img-green").on("click",function(){
        //    $("#show-img-green").show().siblings().hide();
        //    $("#green-big").show().siblings().hide();
        //    $("#green-small").show().siblings('.small-box').hide();
        //    $("#t-color").html("green");
        //    /*$(this).css("border","solid 1px orange")*/
        //});
       /* $("#show-img-blue li").on("click",function(){
            console.log($(this).index());
            console.log($("#shirt #blue-small img"));
            console.log($("#shirt #blue-small img").eq($(this).index()));
            console.log($("#shirt #blue-small img").eq(2));
            $("#shirt #blue-small img").eq($(this).index()).show().siblings().hide();
            /!*$("#shirt #blue-small img").eq(2).show().siblings().hidden;*!/
/!*
            $("#shirt #blue-small img").eq($(this).index()).css("display","block").siblings().css("display","block");
*!/
        });*/
        $("#show-img li").on('click',function(){
            $("#shirt .small-box").eq($colorIdx).show().siblings('small-box').hide();
            $("#shirt .small-box").eq($colorIdx).find('img').eq($(this).index()).show().siblings().hide();
            $("#big-shirt div").eq($colorIdx).show().siblings('small-box').hide();
            $("#big-shirt div").eq($colorIdx).find('img').eq($(this).index()).show().siblings().hide();

        });
        //$("#show-img-green li").on("click",function(){
        //
        //    $("#shirt #green-small img").eq($(this).index()).show().siblings().hide();
        //    $("#big-shirt #green-big img").eq($(this).index()).show().siblings().hide();
        //});
        //$("#show-img-blue li").on("click",function(){
        //    $("#shirt #blue-small img").eq($(this).index()).show().siblings().hide();
        //    $("#big-shirt #blue-big img").eq($(this).index()).show().siblings().hide();
        //});
        //$("#show-img-yellow li").on("click",function(){
        //    $("#shirt #yellow-small img").eq($(this).index()).show().siblings().hide();
        //    $("#big-shirt #yellow-big img").eq($(this).index()).show().siblings().hide();
        //
        //});


        $("#u-size li").on("click",function(){
            $(this).css("background-color","orange").siblings().css("background-color","white");
            $("#t-size").html(this.innerHTML)

        });

       /* $("#z").on("click",function(){
            console.log($("#buy").val());
            $("#zongjia").html($("#buy").val()*100);
        });*/
        $("#buy").change(function(){
            $("#zongjia").html($("#buy").val()*100)
        });
        $("#show-text li").on("click", function(){
            console.log('aaa');
            $(".show-text-a p").eq($(this).index()).show().siblings().hide();
        });

        $("#mask").on("mouseover",function(){
            $("#drag").show();
            $("#big-shirt").show();
        });
        $("#mask").on("mousemove",function(e){

            var $left= e.pageX-$("#shirt").offset().left-$("#drag").width()/2;
            var $top= e.pageY-$("#shirt").offset().top-$("#drag").height()/2;

            if($left<0){
                $left=0;
            }
            if($left>($("#shirt").innerWidth()-$("#drag").innerWidth())){
                $left=($("#shirt").innerWidth()-$("#drag").innerWidth());

            }
            if($top<0){
                $top=0
            }
            if($top>($("#shirt").innerHeight()-$("#drag").innerHeight())){
                $top=$("#shirt").innerHeight()-$("#drag").innerHeight();
            }
            $("#drag").css({
                top:$top,
                left:$left
            });
            var $fy=$top/($("#shirt").innerHeight()-$("#drag").innerHeight());
            var $fx=$left/($("#shirt").innerWidth()-$("#drag").innerWidth());
            /* $("#big-img").offset({
             top:-($("#big-img").innerHeight()-$("#big").innerHeight()*$fy),
             left:-($("#big-img").innerWidth()-$("#big").innerWidth()*$fx)
             })*/
             console.log(-($("#big-img").innerHeight()-$("#big").innerHeight())*$fy)
             console.log($("#big-shirt img").innerHeight()+"ddd");

            $("#big-shirt img").css({
                top:-(800-$("#big-shirt").innerHeight())*$fy,
                left:-(800-$("#big-shirt").innerWidth())*$fx
            })
        });
        $("#mask").on("mouseout",function(){
            $("#drag").hide();
            $("#big-shirt").hide();
            console.log(11111)
        });
        $("#star li").on("mouseover", function () {
            $(this).addClass("star-ye");
            if($("#star li").hasClass("star-gr")){
                $("#star li").removeClass("star-gr");
                $("this").addClass("star-ye");
                console.log(55555)
            }
            if($(this).siblings().index()<$(this).index()){
                var Nindex=$(this).index();
                $("#star li").slice(0,$(this).index()).addClass("star-ye")
            }

        });
        $("#star li").on("mouseout",function(){
           $("#star li").removeClass("star-ye");
        });

        $("#star li").on("click", function () {

            if($(this).attr("class")=="star-ye"){
                $("#star li.star-ye").addClass("star-gr");
                $("#star li.star-ye").removeClass("star-ye");
            }
            var $Snum=$("#star li.star-gr").size();
            alert("您的评分是"+$Snum+"分");

        })
    });
