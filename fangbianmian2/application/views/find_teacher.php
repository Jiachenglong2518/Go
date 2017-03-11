<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>查找导师</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/find_teacher.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/search.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/down.css">
    <link rel="stylesheet" href="assets/css/page.css">


</head>
<body>

        <?php include "header.php"?>

    <div class="body-container">
        <!-- 搜索框开始-->
        <?php include "search.php"?>
        <!-- 搜索框结束-->
        <!--成为导师开始-->
        <div class="be_teacher">
            <span class="be_teacher_area"><a class="be_teacher_text" href="pc/become_teacher">成为导师</a></span>
        </div>
        <!--成为导师结束-->
        <!--排序开始-->
        <div class="order_area">
            <ul class="card">综合排名<span class="white"></span>
                <li>综合排名1</li>
                <li>综合排名2</li>
                <li>综合排名3</li>
            </ul>
            <ul class="card">价钱<span class="white"></span>
                <li>从高到低</li>
                <li>从低到高</li>
            </ul>
            <ul class="card">职位<span class="white"></span>
                <?php
                foreach($position as $row){
                    echo "<li>".$row->pos_name."</li>";
                }
                ?>

               <!-- <li>PHP工程师</li>
                <li>Java工程师</li>-->
            </ul>
            <input type="button" class="find-search-condition" value="搜索">
        </div>

        <!--排序结束-->
        <!--导师列表开始-->
        <div class="teacher_list_area">
            <ul class="teacher_list_ul">
                <?php
                    foreach($teacher_information as $row){
                        echo "<li class=\"teacher_list\">";
                        echo "<a href=\"pc/interviewer_detail\" class=\"teacher_img\"><img src=\"assets/img/100.jpg\" alt=\"\"></a>";
                        echo "<div class=\"teacher_info\">";
                        echo "<span class=\"teacher_name_text\">".$row->real_name."</span><br>";
                        echo "<span class=\"teacher_info_text\">".$row->company.'/'.$row->position."</span>";
                        echo "<span class=\"teacher_info_opinion\">好评数 :</span>";
                        echo "<span class=\"teacher_opinion_num\"></span>";
                        echo "</div>";
                        echo "<div class=\"teacher_price\">";
                        echo "<p class=\"teacher_price_text\"><span class=\"teacher_price_num\">".$row->money."</span>元/小时</p>";
                        echo "<p class=\"seer_num\">面试人数:<span>99</span></p>";
                        echo " </div>";
                        echo "</li>";
                    }
                ?>
            </ul>
            <div class="find-page">
                <?php include "page.php"?>
            </div>
        </div>
        <!--导师列表结束-->
    </div>
    <div class="find-footer">
        <?php include "footer.php"?>
    </div>


    <script src="assets/js/jquery-1.12.4.js"></script>
    <script src="assets/js/find_teacher.js"></script>
    <script src="assets/js/down.js"></script>
    <script src="assets/js/header.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/10
 * Time: 10:32
 */
