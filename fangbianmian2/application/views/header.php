<header>
    <div class="wrap">
        <a href="pc/index" class="header_logo"><img src="assets/img/logo.png" alt="" /></a>
        <ul class="header_nav">
            <li><a href="pc/index">首页</a></li>
            <li><a href="pc/find_teacher">面试版</a></li>
            <li><a href="pc/neituibu">内推版</a></li>
            <li><a href="javascript:;">联系我们</a></li>
        </ul>
<!--        <div class="header_portrait">-->
<!--            <a href="pc/applyuser"><img src="assets/img/头像.png" alt="" /></a>-->
<!--            <ul>-->
<!--               <li>-->
<!--                   <a href="pc/applyuser">个人中心</a>-->
<!--               </li>-->
<!--               <li>-->
<!--                   <a href="">注销</a>-->
<!--               </li>-->
<!--            </ul>-->
<!--        </div>-->
        <?php
        if($this->session->userdata("userinfo")){
            if($this->session->userdata("userinfo")->status == 0){
                echo "<div class=\"header_portrait\">
            <a href=\"pc/applyuser\"><img src=\"assets/img/头像.png\" alt=\"\" /></a>
            <ul>
               <li>
                   <a href=\"pc/applyuser\">个人中心</a>
               </li>
               <li>
                   <a href=\"pc/logout\">注销</a>
               </li>
            </ul>
        </div>";
            }else{
                echo "<div class=\"header_portrait\">
            <a href=\"pc/usercenter\"><img src=\"assets/img/头像.png\" alt=\"\" /></a>
            <ul>
               <li>
                   <a href=\"pc/usercenter\">个人中心</a>
               </li>
               <li>
                   <a href=\"pc/logout\">注销</a>
               </li>
            </ul>
        </div>";
            }

        }else{
            echo "<div class=\"header_portrait\">
            <a href=\"pc/login\"><img src=\"assets/img/头像.png\" alt=\"\" /></a>
            <ul>
               <li>
                   <a href=\"pc/login\">登录</a>
               </li>
               <li>
                   <a href=\"pc/logout\">注销</a>
               </li>
            </ul>
        </div>";
        }
        ?>


    </div>
</header>