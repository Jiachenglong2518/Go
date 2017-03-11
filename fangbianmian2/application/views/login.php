<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>登录</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/login.css"/>
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
            <h1 class="section_content_title">欢迎登陆</h1>
            <form class="section_content_list" method="post" action="pc/check_login">
                <div class="section_content_list_username"><span></span><input name="username" type="text" placeholder="请输入手机号/邮箱号"/></div>
                <div class="section_content_list_password"><span></span><input name="password" type="password" placeholder="请输入密码"/></div>
                <div class="section_content_list_verification"><span></span><input type="text" class="captcha_input" placeholder="请输入验证码" name="captcha_c"/>
                    <a href="javascript:;" title="看不清，换一张" class="captcha" ><?php echo $image;?></a>
                    <a href="javascript:;" class="section_content_list_verification_refresh"></a>
                    <p class="captcha_msg"></p>
<!--                    --><?php
//                    var_dump($this->session->userdata("captcha")) ;
//                    ?>
                </div>
                <div class="section_content_list_submit">
                    <input type="submit" value="登&nbsp;&nbsp;&nbsp;陆" name="submit" class="login_submit"/>
                    <a href="pc/register" class="section_content_list_register">没有账户，马上注册</a>
                    <a href="pc/forget_password" class="section_content_list_back">忘记密码？</a>
                </div>
                <div class="section_content_list_third">
                    <h2>第三方登陆</h2>
                    <a href="" class="section_content_list_qq_link"></a>
                    <span class="section_content_list_qq">QQ登陆</span>
                    <a href="" class="section_content_list_weChat_link"></a>
                    <span class="section_content_list_weChat">微信登陆</span>
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
    $(".section_content_list_verification_refresh").on('click',function(){
        load_captcha();
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
//    var $captcha_input = $(".captcha_input");
//    var $submit = $("login_submit");
//    var $tip = $(".captcha_msg");
//    $captcha_input.on("blur",function(){
//        if($captcha_input.val() == "<?php //$this->session->userdata("captcha") ?>//"){
//            $tip.html("验证码正确!");
//            console.log("11");
//            console.log("<?php //$this->session->userdata("captcha") ?>//")
//        }else{
//            $tip.html("验证码错误!");
//            console.log("22");
//            console.log("<?php //$this->session->userdata("captcha") ?>//")
//        }
//    });
</script>
<script src="assets/js/header.js"></script>
<script>


</script>
</body>
</html>