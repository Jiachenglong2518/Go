<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>注册</title>
    <base href="<?php echo site_url()?>">
    <link rel="stylesheet" href="assets/css/register.css"/>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
<?php include 'header.php';?>
<section>
    <div class="wrap">
        <div class="section_placeholder"></div>
        <img src="assets/img/title_bar.jpg" alt=""/>
        <div class="section_content">
            <div class="section_content_placeholder"></div>
            <h1 class="section_content_title">欢迎注册</h1>
            <form class="section_content_list" method="post" action="pc/check_register" >
                <div class="section_content_list_username">
                    <span></span>
                    <input type="text" placeholder="请输入手机号/邮箱号" name="username" id="f_name"/>
                    <p class="msg_username"></p>
                </div>
                <div class="section_content_list_verification1">
                    <span></span>
                    <input type="text" placeholder="请输入短信验证码" class="message_verification"/>
                    <a href="" class="section_content_list_verification1_acquire">获取验证码</a>
                    <span class="msg_message_verification"></span>
                </div>
                <div class="section_content_list_password">
                    <span></span>
                    <input type="password" placeholder="请输入密码" name="password" id="psd"/>
                    <p class="msg_psd"></p>
                </div>
                <div class="section_content_list_verification2">
                    <span></span>
                    <input type="text" placeholder="请输入验证码" class=".image_verification captcha_input" name="captcha_c"/>
                    <a href="javascript:;" title="看不清，换一张" class="captcha" ><?php echo $image;?></a>
                    <a href="javascript:;" class="section_content_list_verification2_refresh"></a>
                    <span class="msg_image_verification"></span>
                    <p class="captcha_msg"></p>
                </div>
                <div class="section_content_list_role">
                    <a class="section_content_list_mentor">求职者</a>
                    <a class="section_content_list_seeker selected">导&nbsp;师</a>
                    <input type="text" style="display:none" id="status" name="status"/>
                </div>
                <div class="section_content_list_rule">
                    <input type="radio" name="appraise" id="yes">
                    <label for="yes" name="yes"></label><span>我已同意并阅读《网站相关条例》</span>
                </div>
                <div class="section_content_list_submit">
                    <input type="submit" value="注&nbsp;&nbsp;&nbsp;册" name="submit" class="login_submit"/>
                    <div class="section_content_list_submit_login">
                        <a href="pc/login" >已有账号？马上登陆</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="section_placeholder_bottom"></div>
    </div>
</section>
<?php include 'footer.php'?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script>
    var $captchaImg = $('.captcha');
    function load_captcha(){
        $captchaImg.html('');
        $captchaImg.load("<?php echo site_url('pc/show_captcha')?>")
    }
    $(".section_content_list_verification2_refresh").on('click',function(){
        load_captcha()
    });

    $(function() {
        var $captcha_input = $(".captcha_input");
        var $submit = $("login_submit");
        var $tip = $(".captcha_msg");
        $captcha_input.on("blur", function(){
            $.get("pc/check_captcha", {
                "captcha_code": $captcha_input.val()
            }, function(res){
                if(res == "fail" || $captcha_input.val() == ""){
                    $tip.html("验证码错误！");
                    $submit.attr("disabled", "true");
                }else{
                    $tip.html("验证码正确！");
                    $submit.removeAttr("disabled");
                }
            },"text");
        });
    });
</script>
<script src="assets/js/register.js"></script>
<script src="assets/js/header.js"></script>
</body>
</html>