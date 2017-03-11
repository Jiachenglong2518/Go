/**
 * Created by Administrator on 2017/2/14.
 */
$(function(){
    var $flag=true;
    $(".show-name-select").on("click",function(){
        if($flag){
            $(this).css("background","url('assets/img/flag.png')");
            console.log("aaaa")
            $(".text-box").hide();
            $(".pwd-box").show();
            $(".pwd-box").val($('.text-box').val())
        }else{
            $(this).css("background","url('assets/img/null-flag.png')");
            $(".text-box").show();
            $(".pwd-box").hide();
            $(".text-box").val($('.pwd-box').val())
        }
        $flag=!$flag;

    })







})