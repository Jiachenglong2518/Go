<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>发布内推</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/mobile/css/style.css" type="text/css">
    <script src="assets/mobile/js/rem.js"></script>
</head>
<body>
<div id="infor_container">
    <div id="infor_content">
        <form action="">
            <ul>
                <li class="infor_text infor_text0">
                    <a class="push_img"><img src="assets/mobile/img/fbnt01.png"></a>
                    <input type="text"  class="push_0" value="内推公司">
                </li>
                <li class="infor_text">
                    <a class="push_img"><img src="assets/mobile/img/fbnt02.png"></a>
                    <input type="text"  class="push_0" value="内推职位">
                </li>
                <li class="infor_text">
                    <a class="push_img"><img src="assets/mobile/img/fbnt03.png"></a>
                    <input type="text"  class="push_0" value="内退金额">
                </li>
                <li class="infor_text">
                    <a class="push_img"><img src="assets/mobile/img/fbnt04.png"></a>
                    <input type="text"  class="push_0" value="内推截止时间">
                </li>
                <li class="infor_text">
                    <a class="push_img"><img src="assets/mobile/img/fbnt05.png"></a>
                    <input type="text"  class="push_0" value="内推要求细则....">
                </li>
                <li class="infor_text infor_text_end">
                    <textarea class="infor_txt" >       填写内推细则或者要求....</textarea>
                </li>
            </ul>
            <div id="btn_read">
                <input type="radio" name="agree" id="good" class="check_true_name check_radio"/>
                <label for="good" name="good"><img src="assets/mobile/img/空框.png" alt="">我已阅读并同意网站协议</label>
            </div>
            <a href="wx/pushbook"><<input type="button" class="infor_btn infor_btn_c" value="发布内推"></a>
            <button class="cancel_change">取&nbsp;消</button>
        </form>
    </div>
</div>

<script src="assets/mobile/js/jquery-1.12.4.js"></script>
<script src="assets/mobile/js/jquery.mobile.custom.min.js"></script>
<script>
    $(function(){
        var radioFlag = true;
        $('label').on('tap',function(){
            var radioId = $(this).attr('name');
            if(radioFlag){
                $(this).find('img').attr('src','assets/mobile/img/勾框.png');
                $('#' + radioId).attr('checked', 'checked');
            }else {
                $('label img').attr('src','assets/mobile/img/空框.png');
                $('input[type="radio"]').removeAttr('checked');
            }
            radioFlag = !radioFlag;
        });
    })
</script>
</body>
</html>