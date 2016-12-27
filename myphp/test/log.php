<?php
    $name = $_POST["uname"];
    $password = $_POST['pwd'];
    $err="";
    if($name ==""){
        $err .="xx=1&";
    }
    if($password==""){
        $err .="yy=1";
    }
    header("location:login.php?$err")




?>