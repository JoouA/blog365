<?php
header('Content-type:text/html;charset=utf-8');
require_once "Conn/conn.php";
require_once "func/func.php";
$ip=getenv('REMOTE_ADDR');

$regname = post('txt_regname');
$regrealname = post('txt_regrealname');
$regpwd =  md5(post('txt_regpwd'));
$regbirthday = post('txt_birthday');
$regemail = post('txt_regemail');
$regcity = post('txt_province').post('txt_city');
$regico = post('txt_ico');
$regsex = post('txt_regsex');
$regqq = post('txt_regqq');
$reghomepage=post('txt_reghomepage');
$regsign=post('txt_regsign');
$regintroduce=post('txt_regintroduce');

$chk_sql = "select * from `tb_user` WHERE `regname`='$regname'";

$chk_res = mysql_query($chk_sql,$link);

$num = mysql_num_rows($chk_res);
if ($num == 1) {
    echo "<script type='text/javascript'>alert('用户名已存在');window.history.back();</script>";
    exit();
}

$sql = "insert into `tb_user`(`regname`,`regrealname`,`regpwd`,`regbirthday`,`regemail`,`regcity`,`regico`,`regsex`,`regqq`,`reghomepage`,`regsign`,`regintroduce`,`ip`)
  values('$regname','$regrealname','$regpwd','$regbirthday','$regemail','$regcity','$regico','$regsex','$regqq','$reghomepage','$regsign','$regintroduce','$ip')";

$res = mysql_query($sql,$link);

if ($res){
    echo "<script type='text/javascript'>alert('注册成功'); window.location.href='index.php';</script>";
    exit();
}else{
    echo "<script type='text/javascript'>alert('数据写入失败'); window.history.back(); </script>";
    exit();
}

?>