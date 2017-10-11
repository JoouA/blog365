<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
require_once "Conn/conn.php";
require_once "func/func.php";

$regname = post('txt_user');
$regpwd = md5(post('txt_pwd'));

$chk_sql = "select * from `tb_user` WHERE `regname`='$regname' AND `regpwd`='$regpwd'";

$chk_res = mysql_query($chk_sql,$link);
$num = mysql_num_rows($chk_res);
$user = mysql_fetch_array($chk_res,MYSQL_ASSOC);
if ($num == 1){
    $_SESSION['username'] = $regname;
    $_SESSION['fig'] = $user['fig'];
    echo "<script type='text/javascript'>alert('登录成功！');window.location.href='index.php';</script>";
    exit();
}else{
    echo "<script type='text/javascript'>alert('登录失败！');window.history.back();</script>";
    exit();
}
?>