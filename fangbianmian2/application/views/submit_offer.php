<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>提交OFFER</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/submit_offer.css"/>
</head>
<body>
<form class="submit_offer_container">
    <div class="submit_offer_placeholder"></div>
    <h1>提交OFFER</h1>
    <ul class="submit_offer_detail">
        <li class="submit_offer_company">公&nbsp;&nbsp;司：<input type="text"/></li>
        <li class="submit_offer_position">职&nbsp;&nbsp;位：<input type="text"/></li>
        <li class="submit_offer_salary">薪&nbsp;&nbsp;资：<input type="text"/></li>
        <li class="submit_offer_tel">联系电话：<input type="text"/></li>
    </ul>
    <div class="submit_offer_separate"></div>
    <input type="submit" value="提&nbsp;&nbsp;交" class="submit_offer_submit" name="submit"/>
    <a href="" class="submit_offer_back">返回</a>
</form>
</body>
</html>