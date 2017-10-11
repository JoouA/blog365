<?php
session_start();
include "check_login.php";
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <link href="CSS/style.css" rel="stylesheet">
    <title>博客Sky</title>
    <style type="text/css">
        .style1 {color: #FF0000}
    </style>
</head>
<script src=" JS/menu.JS" type="text/javascript"></script>
<script src=" JS/UBBCode.JS" type="text/javascript"></script>
<script type="text/javascript">
    function check(){
        if(document.myform.txt_title.value==""){
            alert("博客主题名称不允许为空！");
            document.myform.txt_title.focus();
            return false;
        }

        if(document.myform.file.value==""){
            alert("文章内容不允许为空！");
            document.myform.file.focus();
            return false;
        }
    }
</script>
<body >
<div class="menuskin" id="popmenu" onmouseover="clearhidemenu();highlightmenu(event,'on')"
     onmouseout="highlightmenu(event,'off');dynamichide(event)" style="Z-index:100;position:absolute;">
</div>
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center">
    <TBODY>
    <TR>
    <?php  require_once "file_head.php";?>
    </TR>
    <TR>
        <?php  require_once "file_article_add.php"; ?>
    </TR>
    </TBODY>
</TABLE>
</body>
</html>