<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>忘记密码</title>
    <base href="<?php echo site_url();?>">
    <script src="assets/mobile/js/rem.js"></script>
    <link rel="stylesheet" href="assets/mobile/css/resect.css">
    <link rel="stylesheet" href="assets/mobile/css/long_green_button.css">
    <link rel="stylesheet" href="assets/mobile/css/regist.css">


</head>
<body>
<div class="wrap">
    <div class="title">
        忘记密码
    </div>
    <form action="" method="post">
        <p>请输入手机号/邮箱号：</p>
        <div class="text-input">
            <input type="text" name="email" placeholder="290813335@qq.com">
        </div>
        <p>请输入新密码：</p>
        <div class="text-input">
            <input type="password" name="password" placeholder="*********">
        </div>
        <p>请输入短息验证码：</p>
        <div class="text-input harf-text-input">
            <input type="text" name="identifying-code" placeholder="2801">
        </div>
        <div class="text-input btn-input green-btn">
            <input class="gray-text green-text" type="button" name="identifying-btn" value="发送验证码">
        </div>
        <div style="height: 0.2rem;clear: both;"></div>
        <div class="text-input reg-btn">
            <input class="reg-btn" type="submit" name="submit" value="找回密码">
        </div>
        <p class="have-account"><a href="wx/mobile_login">返回，登录</a></p>

    </form>
</div>
<div class="b-img" >
    <img src="assets/mobile/img/reg_bg.jpg" alt="">
</div>
</body>
</html>