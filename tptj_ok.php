<?php
session_start();
require_once "Conn/conn.php";
require_once "check_login.php";
require_once "func/func.php";

$tpmc = post('tpmc');
$file = $_FILES['file']['tmp_name'];

$fp = fopen($file,'r');


if (empty($tpmc) || empty($file)){
    echo "<script type='text/javascript'>alert('文件或者文件名不能为空！');window.history.back();</script>";
    exit();
}

$ext =  strtolower(strrchr($_FILES['file']['name'],'.'));

$arrExt = array('.png','jpg','.gif','.jpeg');

$is_pass = false;


$is_pass = in_array($ext,$arrExt)? true : false;
/*foreach ($arrExt as $key => $value){
    if ($value == $ext)
        $is_pass=true;
}*/

$author = $_SESSION['username'];
date_default_timezone_set('Asia/Shanghai');
$scsj = date('Y-m-d');

if ($is_pass){
    $insert_sql = "insert into `tb_tpsc`(`tpmc`,`file`,`author`,`scsj`) VALUES('$tpmc','$fp','$author','$scsj')";
    echo $insert_sql;
    mysql_query($insert_sql);
    fclose($fp);
}else{
    echo "<script type='text/javascript'>alert('请上传正确的图片');window.history.back();</script>";
    exit();
}


echo filesize($file);
echo "<pre>";
print_r($_POST);
print_r($_FILES);
