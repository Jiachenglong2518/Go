<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发布内推</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/fabuneitui.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<?php include 'header.php';?>
<div class="public-container">
    <img class="public-bg" src="assets/img/fabubackground.jpg" alt="">
    <h1 class="pub-title">发布内推</h1>
    <form action="" class="pub-form">
        <div class="pub-cont">
            <span class="company pub-icon"></span><input type="text" class="info" placeholder="内推公司...">
        </div>
        <div class="pub-cont">
            <span class="job pub-icon"></span><input type="text" class="info" placeholder="内推职位...">
        </div>
        <div class="pub-cont">
            <span class="money pub-icon"></span><input type="text" class="info" placeholder="内推金额...">
        </div>
        <div class="pub-cont">
            <span class="time pub-icon"></span><input type="text" class="info" placeholder="内推截止时间...">
        </div>
        <input type="textarea" class="info area-content" placeholder="内推要求或细则...">
        <input type="checkbox" class="pub-checkbox"><span class="pub-checkbox">我已阅读并同意网站协议</span>
        <input type="button" class="submit" value="发布">
    </form>
</div>
<?php include 'footer.php'?>
</body>
</html>