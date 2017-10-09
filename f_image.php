<?php
header("Content-Type:image/jpeg");
require_once "Conn/conn.php";
$id = htmlspecialchars(trim($_GET['pic_id']));

$pic_res = mysql_query("select * from tb_tpsc WHERE `id`='$id'",$link);

if (!$pic_res) die("error : mysql query");

$num = mysql_num_rows($pic_res);

if ($num < 1) die("error: this data is not exists");

$data = mysql_result($pic_res,0,'file');

echo $data;

?>