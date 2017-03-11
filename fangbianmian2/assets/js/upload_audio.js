/**
 * Created by Administrator on 2017/2/14 0014.
 */
$(function() {
    $('label').on('click',function(){
        var radioId = $(this).attr('name');
        console.log(radioId);
        $('label').css('background-image','url(image/空框.png)');
        $(this).css('background-image','url(image/勾框.png)');
        $('input[type="radio"]').removeAttr('checked');
        $('#' + radioId).attr('checked', 'checked');
    });
});