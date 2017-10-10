<?php
header("Content-Type:text/html;charset=utf-8");
require_once "func/func.php";
require_once "Conn/conn.php";

$id = get('id');

$sql = "select * from `tb_public` WHERE `id`='$id'";
$res = mysql_query($sql,$link);
$data = mysql_fetch_array($res,MYSQL_ASSOC);

if ($data){
    echo "<h2 align='center' valign='middle'>".$data['content']."</h2>";
}else{
    die(mysql_error());
}

?>