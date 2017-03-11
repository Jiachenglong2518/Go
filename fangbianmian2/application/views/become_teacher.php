<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成为导师</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/become_teacher.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/push_image.css">

</head>
<body>
    <?php include "header.php"?>
    <div class="content">
        <div class="c-img">
            <div class="become-teacher-img"></div>
            <img src="assets/img/2.jpg" alt="" class="head-img">
        </div>
        <div class="info">
            <div class="basic-info">
                <div class="basic-info-tittle">
                    <span class="decorate"></span>
                    <span class="tittle_text">基本信息</span>
                </div>
                <form action="" method="post">
                    <div class="form-info">
                        <span class="form-text">姓名</span>
                        <input type="text" class="form-input text-box">
                        <input type="password" class="form-input pwd-box">
                        <div class="show-name">
                            <input type="checkbox"  id="input-box">
                            <label for="input-box"  class="show-name-select"></label>
                            <span class="show-name-text">是否显示真实姓名</span>
                            <div class="show-name-why">?</div>
                        </div>
                        <span class="form-text">性别
                            <input type="radio" name="sex" class="input-sex" value="1">&nbsp;男
                            <input type="radio" name="sex" class="input-sex" value="2">&nbsp;女
                        </span>

                        <span class="form-text">出生日期</span>
                        <input type="text" class="form-input-short">
                        <span class="form-line">
                            <div class="line"></div>
                        </span>
                        <input type="text" class="form-input-short no-left">
                        <span class="form-line">
                                <div class="line"></div>
                            </span>
                        <input type="text" class="form-input-short no-left">
                        <span class="form-text">工作地址</span>
                        <input type="text" class="form-input">
                        <span class="form-text">电话</span>
                        <input type="text" class="form-input">
                        <span class="form-text">邮箱</span>
                        <input type="text" class="form-input">
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
            <div class="company-info">
                <form action="" method="post">
                <div class="company-info-left">
                   <span class="company-basic-info">任职公司</span>

                        <span class="form-text">公司</span>
                        <input type="text" class="form-input">
                        <span class="form-text">职位</span>
                        <input type="text" class="form-input">
                        <span class="form-text">任职时间</span>
                        <input type="text" class="form-input-short">
                        <span class="form-line">
                            <div class="line"></div>
                        </span>
                        <input type="text" class="form-input-short no-left">
                        <span class="form-line">
                                <div class="line"></div>
                            </span>
                        <input type="text" class="form-input-short no-left">
                        <span class="form-text">详细介绍</span>
                        <!--<input type="textarea" class="form-input">-->
                        <textarea name="" class="be-textarea" cols="75" rows="6" class=""></textarea>
                </div>
                <div class="company-info-right"></div>
                <div class="form-button">
                    <input type="submit" value="保   存" class="form-save">
                    <input type="button" value="取   消" class="form-esc">

                </div>
            </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"?>
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/push_image.js"></script>
    <script src="assets/js/become_teacher.js"></script>

</body>
</html>
