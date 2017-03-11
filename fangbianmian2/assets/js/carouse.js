$(function(){
    var iNow = 0;
    var $border = $(".carouse-border");

    $('.carouse-next').on("click",function () {
            iNow++;
            if(iNow>=$('.carouse-border img').size()-6){
                iNow=0;
            }
            if(iNow<0){
                iNow=1;
            }
            console.log(iNow+'a');
            var $dis = -224*iNow+'px';
            $border.animate({'left':$dis},600,function(){
            });
    });
    $('.carouse-prev').on("click",function () {
        iNow--;
        console.log(iNow);
        if(iNow<=-1){
            $border.css('left',0);
        }else{
            var $dis = -224*iNow+'px';
            $border.animate({'left':$dis},600,function(){});
        }
    });
    var timer;
    function run(){
        timer2 = setInterval(function(){
            $('.carouse-next').trigger("click");
        },1000);
    }
    run ();
    $('#carouse').mouseover(function(){
        clearInterval(timer2);
    });
    $('#carouse').mouseout(function(){
        run();
    })
});