<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>导师详情</title>
    <base href="<?php echo site_url();?>">
    <script src="assets/mobile/js/rem.js"></script>
    <link rel="stylesheet" href="assets/mobile/css/resect.css">
    <link rel="stylesheet" href="assets/mobile/css/interpolate_detail.css">

</head>
<body>
<form action="" method="post">

    <img src="assets/mobile/img/teacher_detail_header.jpg" alt="导师头像">
    <div class="container">
        <div class="interpolate-company">
            <h2>导师真实名字/昵称</h2>
            <p><span>￥</span><span>3500</span><span>&nbsp;&nbsp;&nbsp;&nbsp;元</span></p>
            <div><span>视频面试/电话面试</span><span>面试人数：233人</span><span>北京</span></div>
        </div>
    </div>
    <div class="gray-block"></div>
    <div class="student-appraise">
        <span></span>
        <span>学生评价(233人)</span>
        <a href="wx/stu_ass"></a>
    </div>
    <div class="gray-block"></div>
    <div class="choice-type">
        <span></span>
        <span>选择类型</span>
        <a href=""></a>
    </div>

    <div class="gray-block"></div>
    <div class="container">
        <div class="push-requirement">
            <h3>导师名字</h3>
            <p><span>性别：女</span><span>年龄：27岁</span></p>
            <p><span>年龄：27岁</span><span>公司：搜狐畅游 </span></p>
        </div>
        <div class="study-requirement">
            <h4>任职公司</h4>
            <p>公司名称：搜狐畅游</p>
            <p>担任职位：前端技术总监</p>
            <p>工作时间：2015年6月至今</p>
            <p>备&nbsp;&nbsp;&nbsp;&nbsp;注：我的绝望 为额外丰富大幅度放松的我发哦及动物酒味，的绝望为额外丰富大幅度放松。的我发哦及哦。</p>
        </div>
        <div class="project-introduction">
            <h4>项目介绍</h4>
            <p>项目名称：电商app</p>
            <p>担任职位：前端技术总监</p>
            <p>时间：2015年6月至今</p>
            <p>项目描述：我的绝望 为额鸡尾酒味哦我，的绝望为额外丰富大幅度放松。的我发哦及我，的绝大幅度放松。</p>
        </div>
    </div>
    <div class="button">
        <input class="btn-style" type="button" value="收&nbsp;&nbsp;&nbsp;&nbsp;藏">
        <input class="" type="button" value="拍下内推">
    </div>



</form>
<script src="assets/js/jquery-1.12.4.js"></script>
<script>
    $(function(){
        $(".button input").on("click",function(){
            $(this).addClass("btn-style").siblings().removeClass("btn-style");
        })
    });
</script>
</body>
</html>