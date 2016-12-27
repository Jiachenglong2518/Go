<html>
    <head>
        <style>
            span{
                color:red;
            }
        </style>
    </head>
    <body>
    <form action="log.php" method="post">
        <p> 姓名:<input type="text" name="uname">
            <?php
                if(isset($_GET['xx'])){
                echo ' <span>姓名输入不正确</span>';
                }
            ?>
        </p>
        <p>密码:<input type="password" name="pwd">
             <?php
                if(isset($_GET['yy'])){
                echo '<span>密码输入不正确</span>';
                }
             ?>

        </p>
        <input type="submit" value="提交">
    </form>
    </body>


</html>