<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>查找导师</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/mobile/css/style.css" type="text/css">
    <script src="assets/mobile/js/rem.js"></script>
</head>
<body>
<div id="search_header">
    <div class="search_header_content">
        <img src="assets/mobile/img/czds02.png"/>
        <div class="search_vertical"></div>
        <div class="search_text">
            <input type="text" placeholder="搜索导师/内推/公司..." >
        </div>
    </div>
</div>
<div id="search_container">
    <div class="sort_three">
        <div class="sort_body sort_text_color">
            <div class="sort_text ">综合排名</div>
            <div class="sort_pic ">∨</div>
        </div>
        <div class="sort_body">
            <div class="sort_text">价&nbsp;钱</div>
            <div class="sort_pic ">∨</div>
        </div>
        <div class="sort_body">
            <div class="sort_text">职&nbsp;位</div>
            <div class="sort_pic ">∨</div>
        </div>
    </div>
    <div class="goods_container">
        <img src="assets/mobile/img/czds04.png" class="goods_pic">
        <div class="goods_content">
            <div class="goods_tea_name">导师名称/导师昵称</div>
            <div class="goods_position goods_text_size">面试职位/所在公司</div>
            <div class="goods_interview_num goods_text_size">面试人数：98</div>
            <span class="goods_highPraise_num goods_text_size">好评数：22</span>
            <span class="goods_price">230</span>
            <span class="goods_price_unit">元/小时</span>
        </div>
    </div>
    <div class="goods_container">
        <img src="assets/mobile/img/czds04.png" class="goods_pic">
        <div class="goods_content">
            <div class="goods_tea_name">导师名称/导师昵称</div>
            <div class="goods_position goods_text_size">面试职位/所在公司</div>
            <div class="goods_interview_num goods_text_size">面试人数：98</div>
            <span class="goods_highPraise_num goods_text_size">好评数：22</span>
            <span class="goods_price">230</span>
            <span class="goods_price_unit">元/小时</span>
        </div>
    </div>
    <div class="search_ad">
        <a href="wx/becometeacher"><button class="become_tea">成为导师</button></a>
        <img src="assets/mobile/img/czds05.png" alt="" class="ad_close">
    </div>
    <div class="goods_container">
        <img src="assets/mobile/img/czds04.png" class="goods_pic">
        <div class="goods_content">
            <div class="goods_tea_name">导师名称/导师昵称</div>
            <div class="goods_position goods_text_size">面试职位/所在公司</div>
            <div class="goods_interview_num goods_text_size">面试人数：98</div>
            <span class="goods_highPraise_num goods_text_size">好评数：22</span>
            <span class="goods_price">230</span>
            <span class="goods_price_unit">元/小时</span>
        </div>
    </div>
    <div class="goods_container">
        <img src="assets/mobile/img/czds04.png" class="goods_pic">
        <div class="goods_content">
            <div class="goods_tea_name">导师名称/导师昵称</div>
            <div class="goods_position goods_text_size">面试职位/所在公司</div>
            <div class="goods_interview_num goods_text_size">面试人数：98</div>
            <span class="goods_highPraise_num goods_text_size">好评数：22</span>
            <span class="goods_price">230</span>
            <span class="goods_price_unit">元/小时</span>
        </div>
    </div>
</div>
<script src="assets/mobile/js/zepto.min.js"></script>
<script>
    $(function(){
        $('.ad_close').on('tap',function(){
            $('.search_ad').hide();
        });
        $('.sort_body').on('tap',function(){
            $(this).siblings().removeClass('sort_text_color');
            $(this).addClass('sort_text_color');
        })
    })
</script>
</body>
</html>