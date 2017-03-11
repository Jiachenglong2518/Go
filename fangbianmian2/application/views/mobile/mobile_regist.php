<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>注册</title>
    <base href="<?php echo site_url();?>">
    <script src="assets/mobile/js/rem.js"></script>
    <link rel="stylesheet" href="assets/mobile/css/resect.css">
    <link rel="stylesheet" href="assets/mobile/css/long_green_button.css">
    <link rel="stylesheet" href="assets/mobile/css/regist.css">


</head>
<body>
<div class="wrap">
    <div class="title">
        欢迎注册
    </div>
    <form action="wx/check_regist" method="post">
        <p>请输入手机号/邮箱号：</p>
        <div class="text-input">
            <input type="text" name="tel" placeholder="290813335@qq.com">
        </div>
        <p>请输入密码：</p>
        <div class="text-input">
            <input type="password" name="password" placeholder="*********">
        </div>
        <p>请输入短息验证码：</p>
        <div class="text-input harf-text-input">
            <input type="text" name="identifying-code" placeholder="2801">
        </div>
        <div class="text-input btn-input">
            <input class="gray-text" type="button" name="identifying-btn" value="发送验证码">
        </div>
        <div class="text-input btn-input harf-text-input chose">导&nbsp;&nbsp;师</div>
        <div class="text-input btn-input chose">求职者</div>
        <input  style="display: none;" type="text" name="status" value="">
        <div style="clear: both;"></div>
        <div class="text-input reg-btn">
            <input class="reg-btn" type="submit" name="submit" value="注 册">
        </div>
        <p class="have-account"><a href="wx/mobile_login">已有账号？马上登录</a></p>

    </form>
</div>
<div class="b-img" >
    <img src="assets/mobile/img/reg_bg.jpg" alt="">
</div>

<script src="assets/js/jquery-1.12.4.js"></script>
<script>
    $(function(){
        $(".chose").on("click",function(){
            $(this).addClass("green-btn").siblings().removeClass("green-btn");
            $status = $('input[name="status"]');
            if($(this).html()=="求职者"){
                $status.attr("value","0")
            }else {
                $status.attr("value","1")
            }
        });
        var $uname = $(input[name]="tel");
        var $submit =$(input[name]="submit");
        $uname.on("blur",function(){
            $.get("wx/check_username", {
                "username":$uname.val()
            },function(res){
                if (res=="success"){
                    $tip.html("用户名已存在！");
                    $submit.attr("disabled","true");
                }else {
                    $submit.removeAttr("disabled");
                }
            },"text");
        });

    });
</script>
</body>
</html>