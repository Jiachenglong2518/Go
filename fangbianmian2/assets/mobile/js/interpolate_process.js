$(function() {
    var radioFlag = true;
    $('label').on('click',function(){
        var radioId = $(this).attr('name');
        if(radioFlag){
            $(this).find('img').attr('src','assets/mobile/img/勾框.png');
            $('#' + radioId).attr('checked', 'checked');
        }else {
            $('label img').attr('src','assets/mobile/img/空框.png');
            $('input[type="radio"]').removeAttr('checked');
        }
        radioFlag = !radioFlag;

    });
});
