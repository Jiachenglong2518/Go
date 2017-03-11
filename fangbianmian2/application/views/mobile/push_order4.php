<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>内推订单</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/mobile/css/style.css" type="text/css">
    <script src="assets/mobile/js/rem.js"></script>
</head>
<body>
<div id="push_order_body">
    <div class="push_order_nav_container">
        <div class="push_order_nav ">
            <a href="wx/pushorder1">
            <img src="assets/mobile/img/mydd02.png" class="push_order_nav_pic"/>
            <div class="push_order_nav_text">全部内推</div>
            </a>
        </div>
        <div class="push_order_nav">
            <a href="wx/pushorder2">
            <img src="assets/mobile/img/mydd04.png" class="push_order_nav_pic"/>
            <div class="push_order_nav_text">预约内推</div>
            </a>
        </div>
        <div class="push_order_nav ">
            <a href="wx/pushorder3">
            <img src="assets/mobile/img/mydd06.png" class="push_order_nav_pic"/>
            <div class="push_order_nav_text push_order_nav_text0">进行中</div>
            </a>
        </div>
        <div class="push_order_nav push_order_nav_sel">
            <img src="assets/mobile/img/mydd07.png" class="push_order_nav_pic push_order_nav_pic0"/>
            <div class="push_order_nav_text">内推成功</div>
        </div>
        <div class="push_order_nav">
            <a href="wx/pushorder5">
            <img src="assets/mobile/img/mydd10.png" class="push_order_nav_pic"/>
            <div class="push_order_nav_text">取消内推</div>
            </a>
        </div>
    </div>

    <div class="push_order_content">
        <div class="push_order_body">
            <img src="assets/mobile/img/ntdd01.png" class="push_order_body_pic"/>
            <div class="push_order_body_text">
                <div class="push_order_body_text1">内推公司：腾讯科技公司</div>
                <div class="push_order_body_text2">内推职位：前端编程工程师</div>
                <div class="push_order_body_text3">被推荐人：小李子</div>
                <div class="push_order_body_text4">3500</div>
                <div class="push_order_body_text5">元</div>
            </div>
        </div>
        <div class="push_order_btn_content">
            <a href="wx/stu_ass"><input type="button" class="push_order_btn push_order_btn_sel" value="查看评价"></a>
            <input type="button" class="push_order_btn" value="删除">
            <input type="button" class="push_order_btn" value="联系他">
        </div>
    </div>

</div>
</body>
</html>