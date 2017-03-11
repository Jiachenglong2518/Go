<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>添加评价</title>
    <base href="<?php echo site_url() ?>">
    <script src="assets/mobile/js/rem.js"></script>
    <link rel="stylesheet" href="assets/mobile/css/student_appraise.css">
    <link rel="stylesheet" href="assets/mobile/css/long_green_button.css">

</head>
<body>
<div class="container">
    <form action="">
        <div class="appraise-wrap">
            <h1>订单评价</h1>
            <div class="appraise">
                <input type="radio" name="appraise" id="good">
                <label for="good" name="good">好</label>
                <input type="radio" name="appraise" id="so-so">
                <label for="so-so" name="so-so">中</label>
                <input type="radio" name="appraise" id="bad">
                <label for="bad" name="bad">坏</label>
            </div>
        </div>
        <div class="remark-warp">
            <h1>备注</h1>
            <div class="remark">
                <textarea name="" id="" cols="30" rows="10">填写详细备注...</textarea>
            </div>
        </div>
        <div class="text-input reg-btn">
            <input class="reg-btn" type="submit" name="submit" value="找回密码">
        </div>
        <div class="empty">
            <a href="#">取消</a>
        </div>
    </form>
</div>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/mobile/js/student_appraise.js"></script>
</body>
</html>