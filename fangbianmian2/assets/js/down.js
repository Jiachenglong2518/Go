$(function(){
    var iTag = 1;
    $('.card').hover(function(){
        if(iTag==1){
            $(this).css('background','#fff');
            $(this).children('li').show();
            iTag = 0;
        }else{
            $(this).css('background','#f7f8f9');
            $(this).children('li').hide();
            iTag = 1;
        }
    });
});