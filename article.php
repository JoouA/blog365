<?php
session_start();
include "Conn/conn.php";
require_once "func/func.php";
require_once "func/captcha.php";
$file_id1=get('file_id');
$bool = false;
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="CSS/style.css"  rel="stylesheet">
    <title>浏览博客文章及评论</title>
    <script src="JS/check.js"  type="text/javascript">
    </script>
    <script  type="text/javascript">
        function r_check(){
            if (document.myform.txt_content.value==""){
                alert("评论内容不能为空!");myform.txt_content.focus();return false;
            }
        }
        function d_chk(urlstr){
            if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！")){
                return true;
            }
            else
                return false;
        }
        function fri_chk(){
            if(confirm("确定要删除选中的项目吗？一旦删除将不能恢复！")){
                return true;
            }
            else
                return false;
        }
    </script>
</head>
<body style="MARGIN-TOP: 0px; VERTICAL-ALIGN: top; PADDING-TOP: 0px; text-align: center">
<table width="757px" cellpadding="0" cellspacing="0" style="WIDTH: 755px" align="center">
    <tbody>
    <tr>
       <?php require_once "head.php"; ?>
    </tr>
    <tr>
       <?php require_once "article_content.php"; ?>
    </tr>
    </tbody>
</table>
</body>
</html>
