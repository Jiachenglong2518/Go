<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>提示页面</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/tishi.css">
</head>
<body>
<?php include 'header.php';?>
<div class="public-container">
    <img class="public-bg" src="assets/img/fabubackground.jpg" alt="">
    <div class="tishi-content">
        <h1>通知</h1>
        <h3>经网站审核，恭喜你成为一名导师！</h3>
        <div class="tishi-btns">
            <a href="#" class="first">完善简历</a>
            <a href="#">发布面试</a>
        </div>
        <a href="#" class="back">返回</a>
    </div>
</div>
<?php include 'footer.php'?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/header.js"></script>
</body>
</html>