<?php

header("Content-Type: text/html; charset=utf-8");

$userName=$_POST["userName"];
$passWord=$_POST["passWord"];
$passWord2=$_POST["passWord2"];

if ($passWord!=$passWord2){
    die("两次输入密码不一致");

    echo ("<a href='register.html'>返回注册页面</a>");
}




 ?>
