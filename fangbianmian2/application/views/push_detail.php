<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>内推详情页</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/common.css"/>
    <link rel="stylesheet" href="assets/css/interviewer_detail.css"/>
    <link rel="stylesheet" href="assets/css/push_detail.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>
</head>
<body>
<?php include 'header.php';?>
    <div class="container wrapper">
        <div class="details_bar">
            <div class="sidebar_left"><img src="assets/img/tencent1.png" alt=""/></div>
            <div class="sidebar_right">
                <div class="nav_head">内推公司腾讯/前端工程师</div>
                <div class="details">
                    <form action="">
                        <table>
                            <tr>
                                <td>价格:</td>
                                <td colspan="2"><span class="pr">4300</span><span class="sel">元/次</span></td>
                            </tr>
                            <tr>
                                <td>内推人:</td>
                                <td>导师昵称</td>
                                <td></td>
                            </tr>
                            <tr><td>内推次数:</td>
                                <td>392次</td>
                                <td></td></tr>
                            <tr>
                                <td>好评数:</td>
                                <td>289次</td>
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
        <div class="push">
            <div class="push_nav">
                <ul>
                    <li id="guide">内推要求</li>
                </ul>
            </div>
            <div class="push-container">
                <div id="resume_guider">
                    <form action="">
                        <table>
                            <tr>
                                <td class="name">内推要求</td>
                                <td></td>
                                <td rowspan="3"></td>
                            </tr>
                            <tr>
                                <td>年龄：25岁以上</td>
                                <td>所在城市：北京</td>
                            </tr>
                            <tr>
                                <td>工作年限：4年以上</td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div id="resume_company">
                    <form action="">
                        <table>
                            <tr>
                                <td class="com">学习要求</td>
                                <td></td>
                                <td rowspan="5"></td>
                            </tr>
                            <tr><td colspan="2">学历要求：本科</td></tr>
                            <tr><td colspan="2">专业要求：计算机科学与技术</td></tr>

                        </table>
                    </form>
                </div>
                <div id="resume_project">
                    <form action="">
                        <table>
                            <tr>
                                <td class="com">项目介绍</td>
                                <td></td>
                                <td rowspan="5"></td>
                            </tr>
                            <tr><td colspan="2">项目名称：电商APP</td></tr>
                            <tr><td colspan="2">担任职位：前端技术总监</td></tr>
                            <tr><td colspan="2">工作时间：2015年6月至今</td></tr>
                            <tr><td colspan="2">备注：换话几清空而激发你的家我爱我家，积极乐观，好好学习提那天想天天向上哈哈哈哈哈哈哈</td></tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'?>
</body>
</html>