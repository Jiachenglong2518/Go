<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>面试官详情页</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/header.css"/>
    <link rel="stylesheet" href="assets/css/common.css"/>
    <link rel="stylesheet" href="assets/css/interviewer_detail.css"/>
    <link rel="stylesheet" href="assets/css/resume.css"/>
    <link rel="stylesheet" href="assets/css/student_feedback.css"/>
</head>
<body>
<?php include 'header.php';?>
    <div class="container wrapper">
        <div class="details_bar">
            <div class="sidebar_left"><img src="assets/img/tencent1.png" alt=""/></div>
            <div class="sidebar_right">
                <div class="nav_head">导师真实姓名/昵称</div>
                <div class="details">
                    <form action="">
                        <table>
                            <tr>
                                <td>价格:</td>
                                <td colspan="2"><span class="pr">230</span><span class="sel">元/次</span></td>
                            </tr>
                            <tr>
                                <td>面试方式:</td>
                                <td>视频面试/电话面试</td>
                                <td>好评率:</td>
                            </tr>
                            <tr><td>所在城市:</td>
                                <td>北京</td>
                                <td>面试人数:239人</td></tr>
                            <tr>
                                <td>面试人数:</td>
                                <td>233人</td>
                            </tr>
                            <tr>
                                <td>面试职位:</td>
                                <td colspan="2">
                                    <input class="btn chos" type="button" value="前端工程师"/>
                                    <input class="btn" type="button" value="php"/>
                                    <input class="btn" type="button" value="java"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <div class="handler">
                        <input class="btns collect" type="button" value="收藏"/>
                        <input class="btns slt" type="button" value="预约面试官"/>
                    </div>

                </div>

            </div>
        </div>
        <div class="resume">
            <div class="resume_nav">
                <ul>
                    <li class="resume-nav-selected ">导师详情</li>
                    <li>学院评价</li>
                </ul>
            </div>
            <div class=" resume_container">
                <div>
                    <div id="resume_guider">
                        <form action="">
                            <table>
                                <tr>
                                    <td class="name">导师名字</td>
                                    <td></td>
                                    <td rowspan="3"><div class="resume_guider_img"><div class="img-img"></div></div></td>
                                </tr>
                                <tr>
                                    <td>性别：女</td>
                                    <td>所在城市：北京</td>
                                </tr>
                                <tr>
                                    <td>年龄：27岁</td>
                                    <td>公司：搜狐畅游</td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div id="resume_company">
                        <form action="">
                            <table>
                                <tr>
                                    <td class="com">任职公司</td>
                                    <td></td>
                                    <td rowspan="5" class="company_td"> <div class="resume_company_img"></div></td>
                                </tr>
                                <tr><td colspan="2">公司名称：搜狐畅游</td></tr>
                                <tr><td colspan="2">担任职位：前端技术总监</td></tr>
                                <tr><td colspan="2">工作时间：2015年6月至今</td></tr>
                                <tr><td colspan="2">备注：换话几清空而激发你的家我爱我家，积极乐观，好好学习提那天想天天向上哈哈哈哈哈哈哈</td></tr>
                            </table>
                        </form>
                    </div>
                    <div id="resume_project">
                        <form action="">
                            <table>
                                <tr>
                                    <td class="com">项目介绍</td>
                                    <td></td>
                                    <td rowspan="5" class="company_td"> <div class="resume_company_img"></div></td>
                                </tr>
                                <tr><td colspan="2">项目名称：电商APP</td></tr>
                                <tr><td colspan="2">担任职位：前端技术总监</td></tr>
                                <tr><td colspan="2">工作时间：2015年6月至今</td></tr>
                                <tr><td colspan="2">备注：换话几清空而激发你的家我爱我家，积极乐观，好好学习提那天想天天向上哈哈哈哈哈哈哈</td></tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="hide">
                    <form action="">
                        <table class="feedback">
                            <tr>
                                <td colspan="2">与描述相符
                                    <span class="num">10.0</span>
                                    <span></span>
                                    <span>
                                    <input type="radio" name="comment"/>好评(324)
                                    <input type="radio" name="comment"/>中评(324)
                                    <input type="radio" name="comment"/>差评(324)
                                    <input type="radio" name="comment"/>追加评论(324)
                                </span>
                                </td>
                            </tr>
                            <tr>
                                <td>裙子很漂亮，以前买很多裙子很大，这条尺码刚刚好，穿上很显瘦显高，就是我有点黑，哈哈。裙子布料也很舒服，还有点弹力，里面还有一层雪纺的，一点都不透，非常喜欢</td>
                                <td>面试者**名字 2013/02/12</td>
                            </tr>
                            <tr>
                                <td>裙子很漂亮，以前买很多裙子很大，这条尺码刚刚好，穿上很显瘦显高，就是我有点黑，哈哈。裙子布料也很舒服，还有点弹力，里面还有一层雪纺的，一点都不透，非常喜欢</td>
                                <td>面试者**名字 2013/02/12</td>
                            </tr>
                            <tr>
                                <td>裙子很漂亮，以前买很多裙子很大，这条尺码刚刚好，穿上很显瘦显高，就是我有点黑，哈哈。裙子布料也很舒服，还有点弹力，里面还有一层雪纺的，一点都不透，非常喜欢</td>
                                <td>面试者**名字 2013/02/12</td>
                            </tr>
                            <tr>
                                <td>裙子很漂亮，以前买很多裙子很大，这条尺码刚刚好，穿上很显瘦显高，就是我有点黑，哈哈。裙子布料也很舒服，还有点弹力，里面还有一层雪纺的，一点都不透，非常喜欢</td>
                                <td>面试者**名字 2013/02/12</td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php include 'footer.php'?>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/interviewer_detail.js"></script>
</body>
</html>