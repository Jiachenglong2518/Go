<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>账号设置</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/style_one.css">
    <link rel="stylesheet" href="assets/css/become_teacher.css">
    <link rel="stylesheet" href="assets/css/user_setting.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/aside.css">
    <link rel="stylesheet" href="assets/css/push_image.css">


</head>
<body>
    <?php include "header.php"?>
    <div class="setting-container">
        <div class="user-menu">
            <?php include "aside.php"?>
        </div>
        <div class="user-setting">
            <div class="basic-info">
                <div class="basic-info-tittle">
                    <span class="decorate"></span>
                    <span class="tittle_text">基本信息</span>
                </div>
                <form action="" method="post">
                    <div class="form-info">
                        <span class="form-text">昵称</span>
                        <input type="text" class="form-input">
                        <span class="form-text">真实姓名</span>
                        <input type="text" class="form-input text-box">
                        <input type="password" class="form-input pwd-box">
                        <div class="show-name">
                            <input type="checkbox"  id="input-box">
                            <label for="input-box"  class="show-name-select"></label>
                            <span class="show-name-text">是否显示真实姓名</span>
                            <div class="show-name-why">?</div>
                        </div>
                        <span class="form-text">绑定手机号</span>
                        <input type="text" class="form-input form-input-user" placeholder="13125698745">
                        <input type="button" class="form-input change-num" value="更换手机号">
                        <span class="form-text">邮箱</span>
                        <input type="text" class="form-input">
                        <span class="form-text form-input-user">目前身份</span>
                        <input type="text" class="form-input form-input-user" placeholder="学生">
                        <input type="button" class="form-input change-num" value="升级导师">
                    </div>
                    <div class="form-push-img">
                        <?php include "push_image.php"?>
                    </div>
                    <div class="form-button">
                        <input type="submit" value="保   存" class="form-save">
                        <input type="button" value="取   消" class="form-esc">

                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "footer.php"?>
    <link rel="stylesheet" href="assets/css/cancel_margin.css">
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/become_teacher.js"></script>
    <script src="assets/js/user_setting_aside.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/push_image.js"></script>

</body>
</html>