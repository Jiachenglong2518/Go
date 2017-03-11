<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>成为导师</title>
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
                    <span class="infor_0">头像</span>
                    <a><img src="assets/mobile/img/cwds01.png" alt="" class="infor_head"></a>
                </li>
                <li class="infor_text">
                    <span class="infor_0">真实姓名</span>
                    <input type="text"  class="infor_1" value="小宝小小">
                </li>
                <li class="infor_text">
                    <span class="infor_0">性别</span>
                    <input type="text"  class="infor_1" value="女">
                </li>
                <li class="infor_text">
                    <span class="infor_0">年龄</span>
                    <input type="text"  class="infor_1" value="26岁">
                </li>
                <li class="infor_text">
                    <span class="infor_0">所在地区</span>
                    <input type="text"  class="infor_1" value="哈尔滨">
                </li>
                <li class="infor_text">
                    <span class="infor_0">联系电话</span>
                    <input type="text"  class="infor_1" value="1392803920192">
                </li>
                <li class="infor_text">
                    <span class="infor_0">邮箱</span>
                    <input type="text"  class="infor_1" value="8390283939@qq.com">
                </li>
                <span class="infor_1 infor_01">
                    <input type="radio" name="agree" id="good" class="check_true_name check_radio"/>
                    <label for="good" name="good"><img src="assets/mobile/img/空框.png" alt="">是否显示真实姓名</label>
                </span>

                <li class="infor_text infor_text0 infor_text01">
                    <span class="infor_0">公司</span>
                    <input type="text"  class="infor_1" value="小公司">
                </li>
                <li class="infor_text">
                    <span class="infor_0">职务</span>
                    <input type="text"  class="infor_1" value="前端编程工程师">
                </li>
                <li class="infor_text">
                    <span class="infor_0">开始时间</span>
                    <input type="text"  class="infor_1" value="2016年8月">
                </li>
                <li class="infor_text">
                    <span class="infor_0">结束时间</span>
                    <input type="text"  class="infor_1" value="2016年10月">
                </li>
                <li class="infor_text">
                    <span class="infor_0">备注</span>
                </li>
                <li class="infor_text infor_text_end">
                    <textarea class="infor_txt" >  此处省略一万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万万字</textarea>
                </li>
            </ul>
            <input type="button" class="infor_btn" value="上传工作凭证">
            <div id="btn_annotation">(上传工牌或者任职合同)</div>
            <input type="button" class="infor_btn infor_btn_c infor_btn1" value="保&nbsp;存">
            <button class="cancel_change">取&nbsp;消</button>
        </form>
    </div>
    <div class="infor_nav"><span class="infor_2">任职公司</span></div>
</div>
<script src="assets/mobile/js/jquery-1.12.4.js"></script>
<script src="assets/mobile/js/jquery.mobile.custom.min.js"></script>
<script>

        $('.infor_btn').on('tap',function(){
            $(this).siblings().removeClass('infor_btn1');
            $(this).addClass('infor_btn1');
        });
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

</script>
</body>
</html>