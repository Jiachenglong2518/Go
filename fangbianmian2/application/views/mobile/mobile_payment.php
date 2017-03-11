<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>支付页面</title>
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
                <li><span class="side_title">导师信息：</span><span class="side_content">小王导师</span></li>
                <li><span class="side_title">面试职位：</span><span class="side_content">前端编程工程师</span></li>
                <li><span class="side_title">求 职 者：</span><span class="side_content">小李子</span></li>
                <li><span class="side_title">面试时间：</span><span class="side_content">1小时</span></li>
                <li class="bottom-border"><span class="side_title">面试金额：</span><span class="side_content">320元</span></li>
                <li class="bottom-border"><span class="side_title">内推时间</span><span class="side_content green-content">2019年9月31日9：00到10：00</span></li>
                <li class="bottom-border"><span class="side_title">内推方式</span><span class="side_content green-content">短信内推</span></li>
                <li class="bottom-border"><span class="side_title">联系方式</span><span class="side_content green-content">QQ：937298734</span></li>

                <li class="remark-height"><span class="side_title">备 注</span><span class="side_content"><textarea class="remark" name="" id="" cols="40" rows="4">工作，工作内荣，做了什么什么项目，多长时间什么的。一起工作，工作内荣，做了什么什么项目，多长时间什么的
                        </textarea></li>
            </ul>
        </div>
        <div style="height: 0.2rem;clear: both;"></div>
        <div class="pay_way">支付方式</div>
    <div class="wrap">
        <div class="font-pay">
            <input type="radio" name="pay" value="alipay" id="alipay"/>
            <label for="alipay" name="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;支付宝&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>
        <div class="font-pay">
            <input type="radio" name="pay" value="wechat"  id="wechat"/>
            <label for="wechat" name="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;微&nbsp;&nbsp;&nbsp;信&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>
        <div class="font-pay">
            <input type="radio" name="pay" value="bankcard"  id="bankcard"/>
            <label for="bankcard" name="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;银行卡&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>


        <div class="text-input reg-btn">
            <input class="reg-btn" type="submit" name="submit" value="确认支付">
        </div>
        <p><a href="#">返 &nbsp;&nbsp;&nbsp;&nbsp;回</a></p>
        <div style="height: 0.2rem;clear: both;"></div>
    </div>

    </form>

<script src="assets/js/jquery-1.12.4.js"></script>
<script>
    $(function(){
        var $fontPay=$(".font-pay");

        $fontPay.on("click",function(){
            $fontPay.children("input").removeAttr("checked");
            $fontPay.children("label").css({
                'background-image':'url(assets/mobile/img/radio_unselected.png)',
                /*'background-size':'contain'*/
            });
            $(this).children("input").attr("checked",true);
            $(this).children("label").css({
                'background-image':'url(assets/mobile/img/radio_selectd.png)',
                /*'background-size':'contain'*/
            });
            $(this).addClass("radio-pay").siblings().removeClass("radio-pay");
        })
    });
</script>
</body>
</html>