<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>内推簿</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/interpolate.css">
    <link rel="stylesheet" href="assets/css/dialog.css">
    <link rel="stylesheet" href="assets/css/search.css">
    <link rel="stylesheet" href="assets/css/down.css">
    <link rel="stylesheet" href="assets/css/page.css">
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/jquery.dialog.js"></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/down.js"></script>
    <script src="assets/js/carouse.js"></script>
</head>
<body>
<?php include 'header.php';?>
<div class="container wrapper">
    <?php include 'search.php';?>
    <div class='ad'>
        <div class="push"><a href="pc/push_order_index">成为内推</a></div>
    </div>
    <div class="choosecard">
        <ul class="card">综合排名<span class="white"></span>
            <li>综合排名1</li>
            <li>综合排名2</li>
            <li>综合排名3</li>
        </ul>
        <ul class="card">价钱<span class="white"></span>
            <li>从高到低</li>
            <li>从低到高</li>
        </ul>
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
            <img src="assets/img/alibaba.jpg" alt="">
            <img src="assets/img/tencent.jpg" alt="">
            <img src="assets/img/jingdong.jpg" alt="">
            <img src="assets/img/baiduwaimai.jpg" alt="">
        </div>
    </div>
    <img class="carouse-next" src="assets/img/next.png" alt="">
</div>
<ul class="interpolate-list">
    <li>
        <a class="li-img" href="pc/push_detail"></a>
        <span class="li-words">
                <span class="company">腾讯科技</span><span class="symbol">/</span><span class="job">产品经理</span><span class="price">2300</span><span class="price-unit">元</span></br><span class="education">本科</span><span class="symbol2">/</span><span class="major">计算机软件专业</span></br><span class="ability selected">PHP</span><span class="symbol2">/</span><span class="ability">JAVA</span><span class="symbol2">/</span><span class="ability">CSS3</span><span class="symbol2">/</span><span class="ability">HTML5</span>
            </span>
        <span class="operation">
                <span class="look">查看简历</span>
                <span class="help">帮你内推</span>
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
<?php include 'page.php'?>
<?php include 'footer.php'?>

<script>
    $(function(){
        $(".look").on("click",function(){
            $("body").dialog({
                width:800,
                height:800,
                url:'push_resume'
            });
        });
    });
    $(function(){
        $(".help").on("click",function(){
            $("body").dialog({
                width:800,
                height:560,
                url:'push_order_mask'
            });
        });
    })
</script>
</body>
</html>