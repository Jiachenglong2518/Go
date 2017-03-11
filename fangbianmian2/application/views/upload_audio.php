<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>内推订单详情</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/upload_audio.css"/>
</head>
<body>
<div class="upload_audio_container">
    <div class="upload_audio_placeholder"></div>
    <h1>内推订单详情</h1>
    <ul class="upload_audio_content">
        <li><span>订单编号：</span><span>3812907174832749</span></li>
        <li><span>订单时间：</span><span>2017年1月12日9：01</span></li>
        <li><span>订单状态：</span><span>内推成功</span></li>
        <li><span>推  荐  人：</span><span>小李子导师</span></li>
        <li><span>联系电话：</span><span>13762918723</span></li>
        <li><span>内推公司：</span><span>腾讯科技</span></li>
        <li><span>内推职位：</span><span>产品经理</span></li>
        <li><span>内推时间：</span><span>2016年8月    至    2016年 12月</span></li>
        <li><span>内推方式：</span><span>发短信</span></li>
        <li><span>求  职  者：</span><span>小王子</span></li>
        <li><span>内推金额：</span><span>4500元</span></li>
        <li><span>备&nbsp;&nbsp;注：</span><span>是否离开那艘ID合法似乎卡卡就是个屁山东化工爱上【过过【啊</span></li>
    </ul>
    <div class="upload_audio_separate"></div>
<form class="upload_audio_interview_assessment">
    <div class="upload_audio_interview_assessment_placeholder"></div>
    <h1>面试测评</h1>
    <div class="upload_audio_interview_assessment_evaluation">
        <span>添加评价：</span>
        <div>
            <input type="radio" name="appraise" id="good">
            <label for="good" name="good"></label><span>好评</span>
        </div>
        <div>
            <input type="radio" name="appraise" id="so-so">
            <label for="so-so" name="so-so"></label><span>中评</span>
        </div>
        <div>
            <input type="radio" name="appraise" id="bad">
            <label for="bad" name="bad"></label><span>差评</span>
        </div>
    </div>
    <div class="upload_audio_interview_assessment_evaluation_note">
        <span>导师评语：</span>
        <textarea name="" id=""></textarea>
    </div>
    <div class="upload_audio_interview_assessment_evaluation_uploading">
        <span>导师评语：</span>
        <input type="text"/>
        <button>添加</button>
    </div>
</form>
    <input type="submit" value="提&nbsp;&nbsp;交" class="upload_audio_submit" name="submit"/>
    <a href="" class="upload_audio_back">返回</a>
</div>
</body>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/upload_audio.js"></script>
</html>