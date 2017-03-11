$(function() {
    $('label').on('click',function(){
        var radioId = $(this).attr('name');
        console.log(radioId);
        $('label').css('background-image','url(assets/img/空框.png)');
        $(this).css('background-image','url(assets/img/勾框.png)');
        $('input[type="radio"]').removeAttr('checked');
        $('#' + radioId).attr('checked', 'checked');
    });
});
