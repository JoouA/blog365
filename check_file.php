<?php
header("Content-Type:text/html;charset=utf-8;");
date_default_timezone_set("Asia/Shanghai");
require_once "func/chk.php";
require_once "func/func.php";
require_once "Conn/conn.php";
$title = post('txt_title');
$content = $_POST['file'];
$now = date("Y-m-d H:m:s");
$author = $_SESSION['username'];
if(empty($title) || empty($content)){
    echo "<script type='text/javascript'>alert('文章内容和标题不能为空创建失败！');window.history.back();</script>";
    exit();
}

$insert_sql = "insert into `tb_article`(`content`,`author`,`now`,`title`) VALUES('$content','$author','$now','$title')";
if(mysql_query($insert_sql)){
    echo "<script type='text/javascript'>alert('文章创建成功！');window.location.href='index.php';</script>";
    exit();
}else{
    echo "<script type='text/javascript'>alert('文章创建失败！');window.history.back();</script>";
    exit();
}
?>