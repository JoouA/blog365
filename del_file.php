<?php
require_once "func/chk.php";
require_once "Conn/conn.php";
require_once "func/func.php";

$id=get('file_id');

$chk_sql = "select * from `tb_article` WHERE `id`='$id'";
$chk_res = mysql_query($chk_sql,$link);
$num = mysql_num_rows($chk_res);

if($num == 1){
    $del_sql = "delete from `tb_article` WHERE `id`='$id'";
    $result = mysql_query($del_sql,$link);
    if(mysql_affected_rows() > 0){
        echo "<script type='text/javascript'>alert('删除成功！');window.location.href='index.php';</script>";
        exit();
    }else{
        echo "<script type='text/javascript'>alert('删除失败！');window.history.back();</script>";
        exit();
    }
}else{
    echo "<script type='text/javascript'>alert('删除错误！');window.location.back();</script>";
    exit();
}
?>