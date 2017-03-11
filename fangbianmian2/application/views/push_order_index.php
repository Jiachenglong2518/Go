
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>内推订单</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/style_one.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/push_order_index.css">
    <link rel="stylesheet" href="assets/css/page.css">
    <link rel="stylesheet" href="assets/css/dialog.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
    <?php include "header.php"?>
    <div class="container">
        <div class="container-menu">
            <?php include("aside.php")?>
        </div>
        <div class="order-content">
            <div class="order-search">
                <input type="text" class="order-input">
                <input type="button" class="order-button" value="搜   索">
            </div>
            <div class="order-list">
                <ul>
                    <?php
                    foreach($order_info as $rows){
                        echo "<li>";
                        echo "<div class=\"order-list-head\">";
                        echo    "<div>";
                        echo        " <span>订单编号 :</span>";
                        echo        "<span>2223223232</span>";
                        echo    "  </div>";
                        echo    "  <div>";
                        echo        " <span>订单时间 :2016/5/6</span>";
                        echo        "  <span></span>";
                        echo    " </div>";
                        echo    " <div>";
                        echo        "<span>订单状态 :</span>";
                        echo        " <span class=\"order-state\">预约中</span>";
                        echo    " </div>";
                        echo " </div>";
                        echo " <div class=\"order-list-content\">";
                        echo    " <div class=\"order-list-content-img\">";
                        echo        " <img src=\"assets/img/3.png\" alt=\"\">";
                        echo    " </div>";
                        echo    "<div class=\"order-list-content-introduce\">";
                        echo        "<span>内推公司 :</span><span>".$rows->company."</span>";
                        echo         "  <span>内推职位 :</span><span>".$rows->position."</span>";
                        echo        "<div><a href=\"\">订单详情</a></div>";
                        echo    "</div>";
                        echo    " <div class=\"order-list-content-person\">";
                        echo        "<span>被推荐 :</span><span>".$rows->real_name."</span>";
                        echo        " <div><a href=\"\">查看简历</a></div>";
                        echo        " <div><a href=\"\" class=\"\">联系他</a></div>";
                        echo    "</div>";
                        echo    "<div class=\"order-list-content-price\">";
                        echo        " <span>".$rows->money."</span><span>元</span>";
                        echo    "</div>";
                        echo    "<div class=\"order-list-content-res ordering\">";
                        echo        " <span class=\"list-span1\">帮他内推</span>";
                        echo         " <span class=\"list-span2\">不帮内推</span>";
                        echo    "</div>";
                        echo "</div>";
                        echo "</li>";
                    }

                    ?>
                </ul>
                <div class="push-page">
                    <?php include"page.php"?>
                </div>
            </div>

        </div>
    </div>
    <?php include "footer.php"?>
    <link rel="stylesheet" href="assets/css/cancel_margin.css">
    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/jquery.dialog.js"></script>
    <script src="assets/js/push_order_index.js"></script>
    <script src="assets/js/header.js"></script>
</body>
</html>

