<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>内推订单-流程页</title>
    <base href="<?php echo site_url();?>">
    <script src="assets/mobile/js/rem.js"></script>
    <link rel="stylesheet" href="assets/mobile/css/resect.css">
    <link rel="stylesheet" href="assets/mobile/css/long_green_button.css">
    <link rel="stylesheet" href="assets/mobile/css/payment.css">

</head>
<body>
<div class="gray-block"></div>

<form action="" method="post">
    <div class="wrap">
        <ul class="order-ifo">
            <li><span class="side_title">订单编号：</span><span class="side_content">328409234283</span></li>
            <li><span class="side_title">推 荐 人：</span><span class="side_content">小王导师</span></li>
            <li><span class="side_title">内推公司：</span><span class="side_content">腾讯科技有限公司</span></li>
            <li><span class="side_title">内推职位：</span><span class="side_content">前端编程工程师</span></li>
            <li><span class="side_title">求 职 者：</span><span class="side_content">小李子</span></li>
            <li class="bottom-border"><span class="side_title">内推金额：</span><span class="side_content">3200元</span></li>
            <li class="bottom-border"><span class="side_title">内推时间</span><span class="side_content"><input type="text" value="2019年9月31日9：00到10：00"></span></li>
            <li class="bottom-border"><span class="side_title">内推方式</span><span class="side_content"><input type="text" value="短信内推"></span></li>
            <li class="bottom-border remark-height"><span class="side_title">备 注</span><span class="side_content"><textarea class="remark" name="" id="" cols="40" rows="4">工作，工作内荣，做了什么什么项目，多长时间什么的。一起工作，工作内荣，做了什么什么项目，多长时间什么的
                        </textarea></li>
        </ul>
    </div>
    <div style="height: 0.2rem;clear: both;"></div>
    <div class="wrap">
        <div class="font-agree">
            <input type="radio" name="agree" id="good">
            <label for="good" name="good"><img src="assets/mobile/img/空框.png" alt="">我已阅读并同意网站协议</label>
        </div>
        <div class="text-input reg-btn">
            <input class="reg-btn" type="submit" name="submit" value="帮他内推">
        </div>
        <p><a href="#">返 &nbsp;&nbsp;&nbsp;&nbsp;回</a><a href="#">删除</a></p>
        <p>&nbsp;</p>
    </div>

</form>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/mobile/js/interpolate_process.js"></script>
</body>
</html>