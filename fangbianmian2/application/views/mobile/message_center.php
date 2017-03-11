<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Document</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/mobile/css/style.css" type="text/css">
    <script src="assets/mobile/js/rem.js"></script>
</head>
<body>
<div id="message_center_container">
    <div class="message_center_body">
        <div class="message_center_content">
            <img src="assets/mobile/img/xxzx01.png" class="message_center_icon"/>
            <div class="message_center_title">
                <div class="message_center_title_text">系统消息</div>
                <div class="message_center_title_icon">∨</div>
            </div>
            <textarea class="message_center_text" disabled="disabled">新闻，也叫消息，是指通过报纸、电台、广播、电视台等媒体途径所传播信息的一种称谓。是记录社会、传播信息、反映时代的一种文体。新闻概念有广义与狭义之分，就其广义而言，除了发表于报刊、广播、互联网、电视上的评论与专文外的常用文本都属于新闻之列，包括消息、通讯、特写、速写（有的将速写纳入特写之列）等等，狭义的新闻则专指消息，消息是用概括的叙述方式，以较简明扼要的文字，迅速及时地报道国内外新近发生的、有价值的事实</textarea>

        </div>
        <div class="message_center_footer"></div>
    </div>
    <div class="message_center_body">
        <div class="message_center_content">
            <img src="assets/mobile/img/xxzx01.png" class="message_center_icon"/>
            <div class="message_center_title">
                <div class="message_center_title_text">系统消息</div>
                <div class="message_center_title_icon message_center_title_icon_dis">∨</div>
            </div>
            <textarea class="message_center_text message_center_text_sel" disabled="disabled">新闻，也叫消息，是指通过报纸、电台、广播、电视台等媒体途径所传播信息的一种称谓。是记录社会、传播信息、反映时代的一种文体。新闻概念有广义与狭义之分，就其广义而言，除了发表于报刊、广播、互联网、电视上的评论与专文外的常用文本都属于新闻之列，包括消息、通讯、特写、速写（有的将速写纳入特写之列）等等，狭义的新闻则专指消息，消息是用概括的叙述方式，以较简明扼要的文字，迅速及时地报道国内外新近发生的、有价值的事实</textarea>
            <input type="button" class="message_center_btn" value="收&nbsp;起">
            <input type="button" class="message_center_btn" value="删&nbsp;除">
        </div>
        <div class="message_center_footer"></div>
    </div>
    <div class="message_center_body">
        <div class="message_center_content">
            <img src="assets/mobile/img/xxzx01.png" class="message_center_icon"/>
            <div class="message_center_title">
                <div class="message_center_title_text">系统消息</div>
                <div class="message_center_title_icon">∨</div>
            </div>
            <textarea class="message_center_text" disabled="disabled">新闻，也叫消息，是指通过报纸、电台、广播、电视台等媒体途径所传播信息的一种称谓。是记录社会、传播信息、反映时代的一种文体。新闻概念有广义与狭义之分，就其广义而言，除了发表于报刊、广播、互联网、电视上的评论与专文外的常用文本都属于新闻之列，包括消息、通讯、特写、速写（有的将速写纳入特写之列）等等，狭义的新闻则专指消息，消息是用概括的叙述方式，以较简明扼要的文字，迅速及时地报道国内外新近发生的、有价值的事实</textarea>

        </div>
        <div class="message_center_footer"></div>
    </div>
</div>
<script src="assets/mobile/js/jquery-1.12.4.js"></script>
<script src="assets/mobile/js/jquery.mobile.custom.min.js"></script>
<script>
    $(function(){
        $('.message_center_btn').on('tap',function(){
            $(this).parent().parent().hide();
        });
    })
</script>
</body>
</html>