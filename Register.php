<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="CSS/style.css"  rel="stylesheet">
    <title>用户注册</title>
</head>
<script src="JS/check.js"  type="text/javascript"></script>
<script src=" JS/initcity.js" type="text/javascript"></script>
<body style="MARGIN-TOP: 0px; VERTICAL-ALIGN: top; PADDING-TOP: 0px; TEXT-ALIGN: center">
<?php
require_once "func/captcha.php";
?>
<table width="757px" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center">
    <tbody>
    <tr>
        <!-- head       -->
       <?php  require_once "head.php"; ?>
    </tr>
    <tr>
        <!--   注册信息表   -->
       <?php require_once "register_table.php"; ?>
    </tr>
    </tbody>
</table>
</body>
</html>
