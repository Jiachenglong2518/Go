<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>学生评价</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/mobile/css/style.css" type="text/css">
    <script src="assets/mobile/js/rem.js"></script>
</head>
<body>
<div id="stu_ass_container">
    <div class="stu_ass_review_title">
        <div class="stu_ass_review_title_content">
            <div class="review_title_txt1">与描述相符</div>
            <div class="review_title_txt2">10.0</div>
            <div class="review_title_star"></div>
        </div>
    </div>
    <div class="stu_ass_review_content">
        <div class="stu_ass_review_nav"><input type="button" value="好评（324）" class="stu_ass_nav_btn stu_ass_nav_btn_sel"></div>
        <div class="stu_ass_review_nav"><input type="button" value="中评（324）" class="stu_ass_nav_btn"></div>
        <div class="stu_ass_review_nav"><input type="button" value="差评（324）" class="stu_ass_nav_btn"></div>
    </div>
    <div class="stu_ass_review_body">
        <div class="stu_ass_review_info">
            <div class="stu_ass_review_name">面试官名字</div>
            <div class="stu_ass_review_time">2013/02/12</div>
        </div>
        <textarea  class="stu_ass_review_txt" disabled="disabled">裙子很漂亮，以前买很多裙子腰都很大，这条尺码刚好，穿上很显高显瘦，就是我有点黑，哈哈。裙子布料也很舒服，还有点弹力，里面还有一层雪纺的，一点都不透，非常喜欢！</textarea>
    </div>
    <div class="stu_ass_review_body">
        <div class="stu_ass_review_info">
            <div class="stu_ass_review_name">面试官名字</div>
            <div class="stu_ass_review_time">2013/02/12</div>
        </div>
        <textarea  class="stu_ass_review_txt" disabled="disabled">裙子很漂亮，以前买很多裙子腰都很大，这条尺码刚好，穿上很显高显瘦，就是我有点黑，哈哈。裙子布料也很舒服，还有点弹力，里面还有一层雪纺的，一点都不透，非常喜欢！</textarea>
    </div>
    <div class="stu_ass_review_body">
        <div class="stu_ass_review_info">
            <div class="stu_ass_review_name">面试官名字</div>
            <div class="stu_ass_review_time">2013/02/12</div>
        </div>
        <textarea  class="stu_ass_review_txt" disabled="disabled">裙子很漂亮，以前买很多裙子腰都很大，这条尺码刚好，穿上很显高显瘦，就是我有点黑，哈哈。裙子布料也很舒服，还有点弹力，里面还有一层雪纺的，一点都不透，非常喜欢！</textarea>
    </div>
    <div class="stu_ass_review_body">
        <div class="stu_ass_review_info">
            <div class="stu_ass_review_name">面试官名字</div>
            <div class="stu_ass_review_time">2013/02/12</div>
        </div>
        <textarea  class="stu_ass_review_txt" disabled="disabled">裙子很漂亮，以前买很多裙子腰都很大，这条尺码刚好，穿上很显高显瘦，就是我有点黑，哈哈。裙子布料也很舒服，还有点弹力，里面还有一层雪纺的，一点都不透，非常喜欢！</textarea>
    </div>
    <div class="stu_ass_footer">
        <input type="button" class="stu_ass_footer_btn " value="收&nbsp;藏">
        <input type="button" class="stu_ass_footer_btn stu_ass_footer_btn_sel" value="预约导师">
    </div>
</div>
<script src="assets/mobile/js/jquery-1.12.4.js"></script>
<script src="assets/mobile/js/jquery.mobile.custom.min.js"></script>
<script>
    $(function(){
        $('.stu_ass_nav_btn').on('tap',function(){
            $(this).parents().siblings().children().removeClass('stu_ass_nav_btn_sel');
            $(this).addClass('stu_ass_nav_btn_sel');
        });
        $('.stu_ass_footer_btn').on('tap',function(){
            $(this).siblings().removeClass('stu_ass_footer_btn_sel');
            $(this).addClass('stu_ass_footer_btn_sel');
        })
    })
</script>
</body>
</html>