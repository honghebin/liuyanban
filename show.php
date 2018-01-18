<?php
header("Content-Type: text/html; charset=utf-8");

$messsage=file_get_contents("data.txt");
echo "留言内容：".str_replace("\n", "<br>", $messsage);

 ?>
