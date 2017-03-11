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
        <div class="push_order_nav push_order_nav_sel">
            <img src="assets/mobile/img/mydd01.png" class="push_order_nav_pic"/>
            <div class="push_order_nav_text">全部内推</div>
        </div>
        <div class="push_order_nav">
            <a href="wx/pushorder2">
            <img src="assets/mobile/img/mydd04.png" class="push_order_nav_pic"/>
            <div class="push_order_nav_text">预约内推</div>
            </a>
        </div>
        <div class="push_order_nav">
            <a href="wx/pushorder3">
            <img src="assets/mobile/img/mydd06.png" class="push_order_nav_pic"/>
            <div class="push_order_nav_text push_order_nav_text0">进行中</div>
            </a>
        </div>
        <div class="push_order_nav">
            <a href="wx/pushorder4">
            <img src="assets/mobile/img/mydd08.png" class="push_order_nav_pic push_order_nav_pic0"/>
            <div class="push_order_nav_text">内推成功</div>
            </a>
        </div>
        <div class="push_order_nav">
            <a href="wx/pushorder5">
            <img src="assets/mobile/img/mydd10.png" class="push_order_nav_pic"/>
            <div class="push_order_nav_text">取消内推</div>
            </a>
        </div>
    </div>
    <div class="no_order_container">
        <div class="no_order_text0 ">&nbsp;亲~没有任何订单。</div>
        <div class="no_order_text1">尝试找寻心仪的导师吧！</div>
        <a  href="wx/sel_tea"><input type="button" value="查找导师" class="btn_sel_tea"></a>
    </div>
</div>
</body>
</html>