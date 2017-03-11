<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>添加评价</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="assets/css/add_evaluation.css"/>
</head>
<body>
    <form class="add_evaluation_container">
        <div class="add_evaluation_placeholder"></div>
        <h1>添加评价</h1>
        <div class="add_evaluation_evaluation">
            <span>添加评价：</span>
            <div>
                <input type="radio" name="appraise" id="good">
                <label for="good" name="good"></label><span>好评</span>
            </div>
            <div>
                <input type="radio" name="appraise" id="so-so">
                <label for="so-so" name="so-so"></label><span>中评</span>
            </div>
            <div>
                <input type="radio" name="appraise" id="bad">
                <label for="bad" name="bad"></label><span>差评</span>
            </div>
        </div>
        <div class="add_evaluation_note">
            <span>备&nbsp;&nbsp;注：</span>
            <textarea name="" id=""></textarea>
        </div>
        <div class="add_evaluation_separate"></div>
        <input type="submit" value="提&nbsp;&nbsp;交" class="add_evaluation_submit" name="submit"/>
        <a href="" class="add_evaluation_back">返回</a>
    </form>

</body>
<script src="assets/js/jquery-1.12.4.js"></script>
<script src="assets/js/add_evaluation.js"></script>
</html>