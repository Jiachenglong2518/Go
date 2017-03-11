<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>明星内推</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/interpolate.css">
</head>
<body>
<?php include 'header.php';?>
<div class="container wrapper">
    <?php include 'search.php';?>
    <div class='ad'>
        <div class="push">成为内推</div>
    </div>
    <div class="choosecard">
        <div class="card">综合排名<span class="white"></span></div>
        <div class="card">价钱<span class="white"></span></div>
    </div>
</div>
<div id="carouse">
    <img class="carouse-prev" src="assets/img/prev.png" alt="">
    <div class="carouse-container">
        <div class="carouse-border">
            <img src="assets/img/baidu.jpg" alt="">
            <img src="assets/img/alibaba.jpg" alt="">
            <img src="assets/img/tencent.jpg" alt="">
            <img src="assets/img/jingdong.jpg" alt="">
            <img src="assets/img/baiduwaimai.jpg" alt="">
            <img src="assets/img/baidu.jpg" alt="">
        </div>
        <img src="assets/img/baidu.jpg" alt="">
    </div>
    <img class="carouse-next" src="assets/img/next.png" alt="">
</div>
<ul class="interpolate-list star-list">
    <li>
            <span class="li-img">
            </span>
        <br class="li-words">
            <span class="company">腾讯科技</span><span class="symbol">/</span><span class="job">产品经理</span><span class="price">2300</span><span class="price-unit">元</span></br><span class="ability selected">导师昵称</span></br><span class="ability selected">内推次数：</span><span class="ability">3</span><span class="ability">次</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ability">好评数:</span><span class="ability">32</span><span class="ability">次</span>
        </span>
    </li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<div id="paging">
</div>
<?php include 'footer.php'?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/header.js"></script>
</body>
</html>