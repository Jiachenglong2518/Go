<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>内推簿</title>
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
<div id="goods_thumbnail">
    <div class="goods_thumbnail_content">
        <ul id='slider'>
            <li><div class="thumbnail_body"><img  src="assets/mobile/img/czds04.png"></div></li>
            <li><div class="thumbnail_body"><img  src="assets/mobile/img/czds04.png"></div></li>
            <li><div class="thumbnail_body"><img  src="assets/mobile/img/czds04.png"></div></li>
            <li><div class="thumbnail_body"><img  src="assets/mobile/img/czds04.png"></div></li>
            <li><div class="thumbnail_body"><img  src="assets/mobile/img/czds04.png"></div></li>
            <li><div class="thumbnail_body"><img  src="assets/mobile/img/czds04.png"></div></li>
            <li><div class="thumbnail_body"><img  src="assets/mobile/img/czds04.png"></div></li>
            <li><div class="thumbnail_body"><img  src="assets/mobile/img/czds04.png"></div></li>
        </ul>
    </div>
</div>
<div id="search_container">

    <div class="sort_collection sort_col">
        <div class="sort_collection_body sort_text_color">
            <div class="sort_collection_text">综合排名</div>
            <div class="sort_pic ">∨</div>
        </div>
        <div class="sort_collection_body">
            <div class="sort_text">价&nbsp;钱</div>
            <div class="sort_pic ">∨</div>
        </div>
    </div>
    <div class="goods_container">
        <img src="assets/mobile/img/czds04.png" class="goods_pic">
        <div class="goods_content">
            <div class="goods_pushB_position">腾讯科技公司/前端工程师</div>
            <div class="goods_class_type goods_text_size">PHP/CSS3/HTML5/</div>
            <span class="goods_edu goods_text_size">本科/计算机专业</span>
            <span class="goods_prices ">2300</span>
            <span class="goods_prices_unit">元</span>
            <div class="goods_button">
                <button class="book_btn">查看简历</button>
                <button class="book_btn goods_button_sel">帮你内推</button>
            </div>
        </div>
    </div>
    <div class="goods_container">
        <img src="assets/mobile/img/czds04.png" class="goods_pic">
        <div class="goods_content">
            <div class="goods_pushB_position">腾讯科技公司/前端工程师</div>
            <div class="goods_class_type goods_text_size">PHP/CSS3/HTML5/</div>
            <span class="goods_edu goods_text_size">本科/计算机专业</span>
            <span class="goods_prices ">2300</span>
            <span class="goods_prices_unit">元</span>
            <div class="goods_button">
                <button class="book_btn">查看简历</button>
                <button class="book_btn goods_button_sel">帮你内推</button>
            </div>
        </div>
    </div>
    <div class="search_ad">
        <a href="wx/becometeacher"><button class="become_tea">成为导师</button></a>
        <img src="assets/mobile/img/czds05.png" alt="" class="ad_close">
    </div>
    <div class="goods_container">
        <img src="assets/mobile/img/czds04.png" class="goods_pic">
        <div class="goods_content">
            <div class="goods_pushB_position">腾讯科技公司/前端工程师</div>
            <div class="goods_class_type goods_text_size">PHP/CSS3/HTML5/</div>
            <span class="goods_edu goods_text_size">本科/计算机专业</span>
            <span class="goods_prices ">2300</span>
            <span class="goods_prices_unit">元</span>
            <div class="goods_button">
                <button class="book_btn">查看简历</button>
                <button class="book_btn goods_button_sel">帮你内推</button>
            </div>
        </div>
    </div>
    <div class="goods_container">
        <img src="assets/mobile/img/czds04.png" class="goods_pic">
        <div class="goods_content">
            <div class="goods_pushB_position">腾讯科技公司/前端工程师</div>
            <div class="goods_class_type goods_text_size">PHP/CSS3/HTML5/</div>
            <span class="goods_edu goods_text_size">本科/计算机专业</span>
            <span class="goods_prices ">2300</span>
            <span class="goods_prices_unit">元</span>
            <div class="goods_button">
                <button class="book_btn">查看简历</button>
                <button class="book_btn goods_button_sel">帮你内推</button>
            </div>
        </div>
    </div>
    <div class="goods_container">
        <img src="assets/mobile/img/czds04.png" class="goods_pic">
        <div class="goods_content">
            <div class="goods_pushB_position">腾讯科技公司/前端工程师</div>
            <div class="goods_class_type goods_text_size">PHP/CSS3/HTML5/</div>
            <span class="goods_edu goods_text_size">本科/计算机专业</span>
            <span class="goods_prices ">2300</span>
            <span class="goods_prices_unit">元</span>
            <div class="goods_button">
                <button class="book_btn">查看简历</button>
                <button class="book_btn goods_button_sel">帮你内推</button>
            </div>
        </div>
    </div>
</div>
<script src="assets/mobile/js/jquery-1.12.4.js"></script>
<script src="assets/mobile/js/jquery.mobile.custom.min.js"></script>
<script src="assets/mobile/js/touchslider.js"></script>
<script>
    $(function(){
        $('.ad_close').on('tap',function(){
            $('.search_ad').hide();
        });
        $('.sort_collection_body').on('tap',function(){
            $(this).siblings().removeClass('sort_text_color');
            $(this).addClass('sort_text_color');
        });
        $('.book_btn').on('tap',function(){
            $(this).siblings().removeClass('goods_button_sel');
            $(this).addClass('goods_button_sel');
        });

    });
    new TouchSlider('slider',{duration:800, interval:3000, direction:0, autoplay:true, align:'left', mousewheel:false, mouse:true, fullsize:false});


</script>
</body>
</html>