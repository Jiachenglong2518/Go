<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>个人中心</title>
    <base href="<?php echo site_url();?>">
    <script src="assets/mobile/js/rem.js"></script>
    <link rel="stylesheet" href="assets/mobile/css/user_center.css">
</head>
<body>
<div class="container">
    <div class="header">
        <div class="header_user">
            <a href="#"><img src="assets/mobile/img/cwds01.png" alt=""></a>
            <h1>求职者姓名</h1>
            <p>东北林业大学</p>
        </div>
        <div class="edit_resume">
            <a href="#">
                <p>编辑简历</p>
                <p>完善程度80%</p>
            </a>
        </div>
    </div>
    <div class="my-appointment">
        <div class="label-act-warp">
            <a href="wx/bookingorder1" class="label-act">
                <h1>我的预约</h1>
                <span>查看全部订单&nbsp;&gt;</span></a>
            </a>
        </div>
        <div class="orderAct">
            <ul>
                <li><a href="wx/bookingorder1"><span class="icon-first"></span><p>全部面试</p></a></li>
                <li><a href="wx/bookingorder2"><span class="icon-second"></span><p>预约面试</p></a></li>
                <li><a href="wx/bookingorder3"><span class="icon-three"></span><p>进行中</p></a></li>
                <li><a href="wx/bookingorder4"><span class="icon-four"></span><p>面试成功</p></a></li>
                <li><a href="wx/bookingorder5"><span class="icon-five"></span><p>取消面试</p></a></li>
            </ul>
        </div>
    </div>
    <div class="heng"></div>
    <div class="my-push">
        <div class="label-act-warp">
            <a href="wx/pushorder1" class="label-act">
                <h1>我的内推</h1>
                <span>查看全部订单&nbsp;&gt;</span>
            </a>
        </div>
        <div class="orderAct">
            <ul>
                <li><a href="wx/pushorder1"><span class="icon-first"></span><p>全部内推</p></a></li>
                <li><a href="wx/pushorder2"><span class="icon-second"></span><p>预约内推</p></a></li>
                <li><a href="wx/pushorder3"><span class="icon-three"></span><p>进行中</p></a></li>
                <li><a href="wx/pushorder4"><span class="icon-four"></span><p>内推成功</p></a></li>
                <li><a href="wx/pushorder5"><span class="icon-five"></span><p>取消内推</p></a></li>
            </ul>
        </div>
    </div>
    <div class="heng"></div>
    <div class="core-entry">
        <ul>
            <li><a href="wx/mobile_my_resume"><span class="one">我的简历</span></a></li>
            <li><a href="wx/msgCenter"><span class="two">消息中心</span></a></li>
            <li><a href="wx/myCol_tea"><span class="three">收藏</span></a></li>
            <li><a href="#"><span class="four">账号设置</span></a></li>
        </ul>
    </div>
</div>
</body>
</html>