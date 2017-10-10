<?php
header("Content-Type:text/html;charset=utf-8");
require_once "Conn/conn.php";
require_once "func/func.php";

$regname = get('x');

$chk_sql = "select * from `tb_user` WHERE `regname`='$regname'";

$res = mysql_query($chk_sql,$link);

$num = mysql_num_rows($res);

if ($num > 0){
    echo "<span style='color: red;'><B>用户名不可用！</B></span>";
    exit();
}else{
    echo "<B>此用户名可用！</B>";
    exit();
}
?>