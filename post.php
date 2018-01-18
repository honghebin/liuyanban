
<?php
header("Content-Type: text/html; charset=utf-8");
    $title=$_POST["title"];
    $content=$_POST["content"];
    file_put_contents("data.txt", "标题：".$title.","."内容：".$content.PHP_EOL,FILE_APPEND);

echo('OK ;<a href="index.html">继续添加</a><a href="show.php">查看留言</a>');

 ?>

