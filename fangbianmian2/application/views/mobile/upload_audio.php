 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>上传音频</title>
    <base href="<?php echo site_url() ?>">
    <script src="assets/mobile/js/rem.js"></script>
    <link rel="stylesheet" href="assets/mobile/css/upload_audio.css">
    <link rel="stylesheet" href="assets/mobile/css/long_green_button.css">
</head>
<body>
<div class="container">
    <form action="">
        <div class="interview-result">
            <h1>面试结果</h1>
            <div class="interview">
                <input type="radio" name="appraise" id="pass">
                <label for="pass" name="pass">通过</label>
                <input type="radio" name="appraise" id="no-pass">
                <label for="no-pass" name="no-pass">未通过</label>
            </div>
        </div>
        <div class="mentor-comment">
            <h1>导师评语</h1>
            <div class="comment">
                <textarea name="" id="" cols="30" rows="10">填写导师评语...</textarea>
            </div>
        </div>
        <div class="text-input reg-btn change">
            <input class="reg-btn change" type="submit" name="submit" value="提交音频">
        </div>
        <div class="text-input reg-btn">
            <input class="reg-btn " type="submit" name="submit" value="提交">
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