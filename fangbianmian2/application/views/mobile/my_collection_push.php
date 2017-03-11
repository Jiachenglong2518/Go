<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>内推收藏</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/mobile/css/style.css" type="text/css">
    <script src="assets/mobile/js/rem.js"></script>
</head>
<body>
    <div id="search_container">
        <div class="sort_collection">
            <div class="sort_collection_body sort_text_color">
                <div class="sort_collection_text">导师收藏</div>
                <div class="sort_pic ">∨</div>
            </div>
            <div class="sort_collection_body">
                <div class="sort_text">内推收藏</div>
                <div class="sort_pic ">∨</div>
            </div>
        </div>
        <div class="goods_container">
            <img src="assets/mobile/img/czds04.png" class="goods_pic">
            <div class="goods_content">
                <div class="goods_push_position">腾讯科技公司/前端工程师</div>
                <div class="goods_push_tea_name goods_text_size">导师昵称：Mr.Joy</div>
                <div class="goods_push_num goods_text_size">内推次数：23</div>
                <span class="goods_highPraise_num goods_text_size">好评数：22</span>
                <span class="goods_price">2300</span>
                <span class="goods_price_unit">元</span>
            </div>
        </div>
        <div class="goods_container">
            <img src="assets/mobile/img/czds04.png" class="goods_pic">
            <div class="goods_content">
                <div class="goods_push_position">腾讯科技公司/前端工程师</div>
                <div class="goods_push_tea_name goods_text_size">导师昵称：Mr.Joy</div>
                <div class="goods_push_num goods_text_size">内推次数：23</div>
                <span class="goods_highPraise_num goods_text_size">好评数：22</span>
                <span class="goods_price">2300</span>
                <span class="goods_price_unit">元</span>
            </div>
        </div>
        <div class="goods_container">
            <img src="assets/mobile/img/czds04.png" class="goods_pic">
            <div class="goods_content">
                <div class="goods_push_position">腾讯科技公司/前端工程师</div>
                <div class="goods_push_tea_name goods_text_size">导师昵称：Mr.Joy</div>
                <div class="goods_push_num goods_text_size">内推次数：23</div>
                <span class="goods_highPraise_num goods_text_size">好评数：22</span>
                <span class="goods_price">2300</span>
                <span class="goods_price_unit">元</span>
            </div>
        </div>
        <div class="goods_container">
            <img src="assets/mobile/img/czds04.png" class="goods_pic">
            <div class="goods_content">
                <div class="goods_push_position">腾讯科技公司/前端工程师</div>
                <div class="goods_push_tea_name goods_text_size">导师昵称：Mr.Joy</div>
                <div class="goods_push_num goods_text_size">内推次数：23</div>
                <span class="goods_highPraise_num goods_text_size">好评数：22</span>
                <span class="goods_price">2300</span>
                <span class="goods_price_unit">元</span>
            </div>
        </div>
        <div class="goods_container">
            <img src="assets/mobile/img/czds04.png" class="goods_pic">
            <div class="goods_content">
                <div class="goods_push_position">腾讯科技公司/前端工程师</div>
                <div class="goods_push_tea_name goods_text_size">导师昵称：Mr.Joy</div>
                <div class="goods_push_num goods_text_size">内推次数：23</div>
                <span class="goods_highPraise_num goods_text_size">好评数：22</span>
                <span class="goods_price">2300</span>
                <span class="goods_price_unit">元</span>
            </div>
        </div>
    </div>
<script src="assets/mobile/js/zepto.min.js"></script>
<script>
    $(function(){
        $('.ad_close').on('tap',function(){
            $('.search_ad').hide();
        });
        $('.sort_collection_body').on('tap',function(){
            $(this).siblings().removeClass('sort_text_color');
            $(this).addClass('sort_text_color');
        })
    })
</script>
</body>
</html>