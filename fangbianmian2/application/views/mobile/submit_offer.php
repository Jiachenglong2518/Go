<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>提交offer</title>
    <base href="<?php echo site_url();?>">
    <script src="assets/mobile/js/rem.js"></script>
    <link rel="stylesheet" href="assets/mobile/css/submit_offer.css">
    <link rel="stylesheet" href="assets/mobile/css/student_cancel_reason.css">
    <link rel="stylesheet" href="assets/mobile/css/long_green_button.css">
</head>
<body>
<div class="container">
    <form action="">
        <div class="company">
            <input type="text" value="公司">
        </div>
        <div class="position">
            <input type="text" value="职位">
        </div>
        <div class="salary">
            <input type="text" value="薪资">
        </div>
        <div class="telephone">
            <input type="text" value="联系电话">
        </div>
        <div class="remark-warp">
            <h1>备注</h1>
            <div class="remark">
                <textarea name="" id="" cols="30" rows="10">填写备注细则...</textarea>
            </div>
        </div>
        <div class="text-input reg-btn">
            <input class="reg-btn" type="submit" name="submit" value="提交offer">
        </div>
        <div class="empty">
            <a href="#">取消</a>
        </div>
    </form>

</div>
</body>
</html>