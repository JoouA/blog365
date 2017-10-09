<?php
header("Content-Type:image/jpeg");
require_once "func/func.php";
require_once "Conn/conn.php";
$id = get('recid');

$pic_res =  mysql_query("select * from `tb_tpsc` WHERE `id`='$id'",$link);

if(!$pic_res) die(mysql_error());

$num = mysql_num_rows($pic_res);

if($num < 1) die(mysql_error());

$data = mysql_result($pic_res,0,'file');
echo $data;

?>

