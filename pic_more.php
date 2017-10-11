<?php
session_start();
require_once "Conn/conn.php";
require_once "func/captcha.php";
require_once "func/func.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>博客Sky</title>
    <link href="CSS/style.css" rel="stylesheet"/>
</head>
<script src="JS/check.js" type="text/javascript">
</script>
<body onselectstart="return false">
<table width="757"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr align="right" valign="top">
       <?php  require_once "head.php"; ?>
    </tr>
    <tr>
        <?php require_once "left.php"; ?>
        <!--  picture list  照片列表      -->
        <?php require_once "pic_list.php"; ?>
    </tr>
</table>
</body>
</html>
`
