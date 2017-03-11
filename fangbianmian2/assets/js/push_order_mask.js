$(function() {
    var bFlag = false;
    $('label').on('click',function(){
        var radioId = $(this).attr('name');
        if(bFlag){
            $(this).css('background-image','url(image/空框.png)');
            $('#' + radioId).removeAttr('checked');
            $(".push_order_submit").attr("disabled", "true");
        }else{
            $(this).css('background-image','url(image/勾框.png)');
            $('#' + radioId).attr('checked', 'checked');
            $(".push_order_submit").removeAttr("disabled");
        }
        bFlag=!bFlag;
    });
});/**
 * Created by Administrator on 2017/2/15 0015.
 */
