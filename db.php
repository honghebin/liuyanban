<?php
header("Content-Type: text/html; charset=utf-8");
$host="localhost";
$userName="root";
$passWord="root";
$connection=mysql_connect($host,$userName,$passWord);
if(!$connection){
    die ("链接失败".PHP_EOL);
}else{
    echo "链接成功".PHP_EOL;
}

$dbName="bbs";
mysql_select_db($dbName,$connection);

?>
