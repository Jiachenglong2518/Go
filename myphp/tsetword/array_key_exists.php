<?php
    $arr = ['a'=>120,'b'=>130];
    if(isset($_POST['submit'])){
        if(array_key_exists($_POST['name'],$arr)){
            echo "<script>alert('".$_POST['name']."成绩是".$arr[$_POST['name']]."')</script>";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>

</body>
</html>
