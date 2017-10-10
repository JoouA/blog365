<?php
session_start();
require_once "Conn/conn.php";
require_once "func/func.php";
require_once "func/captcha.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>博客Sky</title>
    <link href="CSS/style.css" rel="stylesheet"/>
</head>
<script type="text/javascript" src="JS/check.js"></script>
<body onselectstart="return false">
<table width="757px"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr align="right" valign="top">
        <!-- header     -->
        <?php require_once "head.php"; ?>
    </tr>
    <tr>
        <!--  left  -->
        <?php  require_once "left.php";  ?>
        <!--  article_all 所有文章列表     -->
       <?php   require_once "article_all.php"; ?>
    </tr>
</table>
</body>
</html>