<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>内推订单</title>
    <base href="<?php site_url() ?>">
    <link rel="stylesheet" href="assets/css/push_order.css"/>
</head>
<body>
<form class="booking_order_detail_container">
    <div class="booking_order_detail_placeholder"></div>
    <h1>内推订单</h1>
    <ul class="booking_order_detail_content">
        <li><span>订单编号：</span><span>3812907174832749</span></li>
        <li><span>推  荐  人：</span><span>小李子导师</span></li>
        <li><span>内推公司：</span><span>腾讯科技</span></li>
        <li><span>内推职位：</span><span>产品经理</span></li>
        <li><span>内推时间：</span><span>2016年8月   至 <input type="text" class="booking_order_time"/></span></li>
        <li><span>内推方式：</span><span><input type="text" class="booking_order_way"/></span></li>
        <li><span>求  职  者：</span><span>小王子</span></li>
        <li><span>内推金额：</span><span>4500元</span></li>
        <li><span>备&nbsp;&nbsp;注：</span>
            <span><textarea name="" id="booking_order_detail_content"></textarea></span>
        </li>
    </ul>
    <div class="submit_offer_separate"></div>
    <div class="submit_offer_agreement">
        <input type="radio" name="appraise" id="yes">
        <label for="yes" name="yes"></label><span>我已阅读并同意网站协议</span>
    </div>
    <input type="submit" value="帮他内推" class="push_order_submit" name="submit"/>
    <a href="#" class="upload_audio_back">返&nbsp;&nbsp;回</a>
</form>
</body>
<script src="assets/js/push_order_mask.js"></script>
</html>