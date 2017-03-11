$(function() {
    var bFlag = false;
    $('label').on('click',function(){
        var radioId = $(this).attr('name');
        if(bFlag){
            $(this).css('background-image','url(../img/空框.png)');
            $('#' + radioId).removeAttr('checked');
            $(".push_order_submit").attr("disabled", "true");
        }else{
            $(this).css('background-image','url(../img/勾框.png)');
            $('#' + radioId).attr('checked', 'checked');
            $(".push_order_submit").removeAttr("disabled");
        }
        bFlag=!bFlag;
    });

});
$(function() {
    $(".order-list li").each(function (index, elem) {
        if ($(this).find('.order-state').html() == "预约中") {
            $(this).find('.list-span1').html('帮他内推');
            $(this).find('.list-span2').html('不帮内推');
        }
        if ($(this).find('.order-state').html() == "成功内推") {
            $(this).find('.list-span1').html('删除');
            $(this).find('.list-span2').html('查看评价');
        }
        if ($(this).find('.order-state').html() == "失败") {
            $(this).find('.list-span1').html('删除');
            $(this).find('.list-span2').html('还原');
        }
        if ($(this).find('.order-state').html() == "申请取消内推") {
            $(this).find('.list-span1').html('删除');
            $(this).find('.list-span2').html('确认取消').on("click",function(){
                $("body").dialog({width:800 ,height:350 ,url:"cancellation_request_reason"})

            });
        }
        if ($(this).find('.order-state').html() == "已取消") {
            $(this).find('.list-span1').html('删除').addClass("only-one");
            $(this).find('.list-span2').remove();
        }
        if ($(this).find('.order-state').html() == "内推进行中") {
            $(this).find('.list-span1').remove();
            $(this).find('.list-span2').remove();
        }

    });

});

/**
 * Created by Administrator on 2017/2/14 0014.
 */
