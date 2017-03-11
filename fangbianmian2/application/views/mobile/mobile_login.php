<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>登录</title>
    <base href="<?php echo site_url();?>">
    <script src="assets/mobile/js/rem.js"></script>
    <link rel="stylesheet" href="assets/mobile/css/resect.css">
    <link rel="stylesheet" href="assets/mobile/css/long_green_button.css">
    <link rel="stylesheet" href="assets/mobile/css/regist.css">
    <link rel="stylesheet" href="assets/mobile/css/login.css">


</head>
<body>
<div class="wrap">
    <div class="title">
        欢迎登录
    </div>
    <form action="wx/checked_login" method="post">
        <p>请输入手机号/邮箱号：</p>
        <div class="text-input">
            <input type="text" name="email" placeholder="290813335@qq.com">
        </div>
        <p>请输入密码：</p>
        <div class="text-input">
            <input type="password" name="password" placeholder="*********">
        </div>

        <div class="text-input reg-btn">
            <input class="login-btn" type="submit" name="submit" value="登 录">
        </div>
        <p class="have-account">
            <a href="wx/mobile_regist">没有账号？马上注册</a>
            <a href="wx/mobile_forget_pwd" class="forget-pwd">忘记密码？</a>
        </p>

    </form>
</div>
<div class="b-img" >
    <img src="assets/mobile/img/reg_bg.jpg" alt="">
</div>
</body>
</html>