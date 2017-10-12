<?php
require_once "func/chk.php";
require_once "Conn/conn.php";
require_once "func/func.php";
?>
<html>
<head>
    <meta content="text/html" charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>我的文章</title>
    <script type="text/javascript" src="JS/menu.JS"></script>
    <script type="text/javascript" src="JS/UBBCode.JS"></script>
</head>
<body>
<div class="menuskin" id="popmenu" onmouseover="clearhidemenu();highlightmenu(event,'on')"
     onmouseout="highlightmenu(event,'off');dynamichide(event)" style="Z-index:100;position:absolute;">
</div>

<table cellpadding="0" cellspacing="0" style="width: 755px" align="center">
    <tbody>
        <tr>
            <?php require_once "file_head.php"; ?>
        </tr>
        <tr>
            <td colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center">
                <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td height="451px" align="center" valign="top">
                            <table width="600px" height="100%"  border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td height="130px" align="center" valign="top"><?php $page =get('page'); if($page==""){$page=1;} ?>
                                        <table width="560px" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                                            <tr align="left" colspan="2" >
                                                <td width="390px" height="25px" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> 查看我的文章 </span> </td>
                                            </tr>
                                            <?php
                                            $author = $_SESSION['username'];
                                            $pageSize = 2;
                                            $offset = ($page-1)*$pageSize;
                                            $sql = "select * from `tb_article` WHERE `author`='$author'";
                                            $res = mysql_query($sql,$link);
                                            $article_num = mysql_num_rows($res);  // 当前用户的文章数量
                                            $numPage = ceil($article_num/$pageSize);   // 文章分为几页

                                            ?>
                                            <tr>
                                                <td height="31" align="center" valign="top" >
                                                    <table width="500"  border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td>
                                                                <table width="498"  border="0" cellspacing="0" cellpadding="0" valign="top">
                                                                    <?php
                                                                        $data_sql = "select * from `tb_article` WHERE `author`='$author' limit $offset,$pageSize";
                                                                        $article_res = mysql_query($data_sql,$link);
                                                                        $i = 1;
                                                                        while ( $article = mysql_fetch_array($article_res,MYSQL_ASSOC)){
                                                                    ?>
                                                                    <tr>
                                                                        <td width="498" align="left" valign="top"> &nbsp;&nbsp;&nbsp;<a href="article.php?file_id=<?php echo $article['id'];?>"><?php  echo  ($offset+$i).'、'.$article['title'];?></a> </td>
                                                                    </tr>
                                                                    <?php
                                                                            $i++;
                                                                        }
                                                                        ?>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <table width="560" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr bgcolor="#EFF7DE">
                                                <td width="50%">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $numPage;?>页
                                                    记录：<?php echo $article_num;?> 条&nbsp; </td>
                                                <td width="50%" align="right">
                                                    <a href="myfiles.php?page=<?php echo '1'; ?>">首页</a>
                                                    <a href="myfiles.php?page=<?php  echo $page>=2 ?($page-1):1;  ?>"> 上一页</a>
                                                    <a href="myfiles.php?page=<?php echo $page<$numPage ? ($page+1): $numPage; ?>"> 下一页</a>
                                                    <a href="myfiles.php?page=<?php echo $numPage ; ?>"> 末页</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>


