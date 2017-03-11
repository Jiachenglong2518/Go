/**
 * Created by Administrator on 2017/2/15.
 */
$(function(){
    //鼠标移入改变图标颜色和字体颜色
    $('.menu').hover(function(){
        $(this).css('background-image',"url('assets/img/jobhunter-side-green.png')").children('a').css('color',"#5de1a8");
        $(this).css('color','#5de1a8');


    },function(){
        $(this).css('background-image',"url('assets/img/jobhunter-side-gray.png')").children('a').css('color',"#607684");
        $(this).css('color','#607684');

    });
    $('.sub-menu').hover(function(){
        $(this).children('a').css('color','#5de1a8');

    },function(){
        $(this).children('a').css('color',"#607684")
    });

    //下拉菜单
    var aFlag=false;
    var bFlag=false;
    $(".carte").on('click',function(){
        if(bFlag){

            console.log('1');
            $(this).siblings().slideUp();
            $(this).children('span').css('background-position'," 69px 25px ").removeClass('border');

        }else{
            console.log('2');
            $(this).siblings().slideDown();

            $(this).children('span').css('background-position'," 69px -35px ").addClass('border');
        }
        bFlag=!bFlag;
    });
    $(".carte1").on('click',function(){
        if(aFlag){
            $(this).siblings().slideUp();
            $(this).children('span').css('background-position'," 69px 25px ").removeClass('border');
        }else{
            $(this).siblings().slideDown();
            $(this).children('span').css('background-position'," 69px -35px ").addClass('border');
        }
        aFlag=!aFlag;
    })






});