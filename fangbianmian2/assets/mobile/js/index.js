$(function () {
    run ();
    var $carouselFigure =$(".carousel-figure");
    var iNow=0;
    var timer;
    $(".dot span").on('click',function(){
        var index = $(this).index();
        if(!$carouselFigure.is(":animated")){
            $carouselFigure.animate({marginLeft:-640*index},600);
        }
        iNow = index;
    });
    function run(){
        timer = setInterval(function(){
            iNow++;
            if(iNow==3){
                iNow=0;
            }
            if(!$carouselFigure.is(":animated")){
                $carouselFigure.animate({marginLeft:-640*iNow},600);
            }
        },2000)
    }
});





















