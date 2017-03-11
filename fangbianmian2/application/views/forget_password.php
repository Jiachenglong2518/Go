<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>忘记密码</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/forget_password.css"/>
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
            <h1 class="section_content_title">找回密码</h1>
            <form class="section_content_list" method="post" action="pc/update_password">
                <div class="section_content_list_username"><span></span><input type="text" placeholder="请输入手机号/邮箱号" name="username"/></div>
                <div class="section_content_list_verification1">
                    <span></span>
                    <input type="text" placeholder="请输入短信验证码"/>
                    <a href="" class="section_content_list_verification1_acquire">获取验证码</a>
                </div>
                <div class="section_content_list_password"><span></span><input type="password" placeholder="请输入新密码" name="password"/></div>
                <div class="section_content_list_verification2">
                    <span></span>
                    <input type="text" placeholder="请输入验证码" class="captcha_input" name="captcha_c"/>
                    <a href="javascript:;" title="看不清，换一张" class="captcha" >
                        <?php echo $image;?>
                    </a>
                    <a href="javascript:;" class="section_content_list_verification2_refresh"></a>
                    <p class="captcha_msg"></p>

                </div>
                <div class="section_content_list_submit">
                    <input type="submit" value="找回密码" name="submit" class="login_submit" style="cursor:pointer"/>
                    <a href="pc/login" class="section_content_list_back">返回，登陆</a>
                </div>

            </form>
        </div>
        <div class="section_placeholder_bottom"></div>
    </div>
</section>
<?php include 'footer.php'?>
</body>
<script src="assets/js/jquery-1.12.4.js"></script>
<script>
    var $captchaImg = $('.captcha');
    function load_captcha(){
        $captchaImg.html('');
        $captchaImg.load("<?php echo site_url('pc/show_captcha')?>")
    }
    $(".section_content_list_verification2_refresh").on('click',function(){
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
//    $submit.on("click",function(){
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
</html>