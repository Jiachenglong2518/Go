$(function(){
    $(".section_content_list_role a").on("click",function(){
        $(this).addClass("selected").siblings().removeClass("selected");
        $("#status").attr('value',$(this).index());
    });
    $(".login_submit").attr("disabled", "true");
    $(function(){
        var $un = $("#f_name");
        var $tip = $(".msg_username");
        var $psd = $("#psd");
        var $tip3 = $(".msg_psd");
        var $register = $(".login_submit");
        $register.on("click",function(){
            if($un.val() == "" && $psd.val() == ""){
                $tip.html("用户名不能为空！");
                $register.attr("disabled", "true");
            }else{
                $tip.html("");
                $register.removeAttr("disabled");
            }
        });
        $un.on("blur", function(){
            $.get("pc/check_username", {
                "username": $un.val()
            }, function(res){
                if(res == "success"){
                    $tip.html("用户名已存在！");
                    $register.attr("disabled", "true");
                }else{
                    $tip.html("");
                    $register.removeAttr("disabled");
                }
            },"text");
        });
        $psd.on("blur",function(){
            if($psd.val() == ""){
                $tip3.html("密码不可为空");
                $register.attr("disabled", "true");
            }else{
                $tip3.html("");
                $register.removeAttr("disabled");
            }
        });
    });
    $(function() {
        var bFlag = false;
        $('label').on('click',function(){
            var radioId = $(this).attr('name');
            if(bFlag){
                $(this).css('background-image','url(assets/img/空框.png)');
                $('#' + radioId).removeAttr('checked');
                $(".login_submit").attr("disabled", "true");
            }else{
                $(this).css('background-image','url(assets/img/勾框.png)');
                $('#' + radioId).attr('checked', 'checked');
                $(".login_submit").removeAttr("disabled");
            }
            bFlag=!bFlag;
        });
    });



});
