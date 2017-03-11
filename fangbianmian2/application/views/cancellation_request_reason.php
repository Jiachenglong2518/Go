<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>申请取消原因</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/cancellation_request_reason.css"/>
</head>
<body>
<form class="cancellation_request_reason_container">
    <div class="cancellation_request_reason_placeholder"></div>
    <h1>申请取消原因</h1>
    <div class="cancellation_request_reason_evaluation">
        取消原因：
        <select name="request_reason" id="cancellation_request_reason">
            <option value="">请选择取消原因</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
        </select>
    </div>
    <div class="cancellation_request_reason_note">
        <span>备&nbsp;&nbsp;注：</span>
        <textarea name="" id=""></textarea>
    </div>
    <div class="cancellation_request_reason_separate"></div>
    <input type="submit" value="提&nbsp;&nbsp;交" class="cancellation_request_reason_submit" name="submit"/>
    <a href="" class="cancellation_request_reason_back">返回</a>
</form>
</body>
</html>