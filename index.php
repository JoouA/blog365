<?php
session_start();
include "Conn/conn.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>博客Sky</title>
    <link href="CSS/style.css" rel="stylesheet"/>
</head>
<?php
    $str = array("大","更","创","天","科","客","博","技","立","新");
    $len = count($str);
    $img = '';
    $fontStr= '';
    for ($i=0;$i<4;$i++){
        $num = rand(0,$len-1);
        $img .= "<img src='images/checkcode/".$num.".gif' width='16px' height='16px'>";
        $fontStr .= $str[$num];
    }
?>
<script type="text/javascript" src="JS/check.js"></script>
<body onselectstart="return false">
<table width="757px"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr align="right" valign="top">
        <td height="149px" colspan="2" background="images/head.jpg">
            <table width="100%" height="149px"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="51px" align="right">
                        <br>
                        <table width="262px" border="0" cellspacing="0" cellpadding="0">
                            <tr align="left">
                                <td width="26px" height="20px"><a href="index.php"></a></td>
                                <td width="71px" class="word_white"><a href="index.php"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">首  页</span></a></td>
                                <td width="87px"><a href="file.php"><span  style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">我的博客</span></a></td>
                                <td width="55px">
                                    <a href="#"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo "博客注册"; ?></span></a>
                                </td>
                                <td width="23px">&nbsp;</td>
                            </tr>
                        </table>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td height="66px" align="right"><p>&nbsp;</p></td>
                </tr>
                <tr>
                    <form name="form" method="post" action="checkuser.php">
                        <td height="20px" valign="baseline">
                            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="32%" height="20" align="center" valign="baseline">&nbsp; </td>
                                    <td width="67%" align="left" valign="baseline" style="text-indent:10px;">
                                        <?php
                                        if(!isset($_SESSION['username'])){
                                            ?>
                                            用户名:
                                            <input  name=txt_user size="10">
                                            密码:
                                            <input  name=txt_pwd type=password style="FONT-SIZE: 9pt; width: 65px" size="6">
                                            验证码:
                                            <input name="txt_yan" style="FONT-SIZE: 9pt; width: 65px" size="8">
                                            <input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $fontStr;?>">
                                            <?php echo $img; ?> &nbsp;
                                            <input style="FONT-SIZE: 9pt"  type=submit value='登录' name=sub_dl onclick="return f_check(form)">
                                            &nbsp;
                                            <?php
                                        }else{
                                            ?>
                                            <font color="red"><?php echo $_SESSION['username']; ?></font>&nbsp;&nbsp;博客天空网站欢迎您的光临！！！当前时间：<font color="red"><?php echo date("Y-m-d l"); ?>
                                            </font>
                                            <?
                                        }
                                        ?>
                                    </td>
                                    <td width="1%" align="center" valign="baseline">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </form>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="236px" height="501px"  background=" images/left.jpg">
            <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="155px" align="center" valign="top">
                        <?php
                        include "cale.php";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td height="125px" align="center" valign="top"><br>

                        <table width="200px"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <table width="201px"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:5px;">
                                    <?php
                                        $article_res = mysql_query('select * from tb_article  ORDER BY now DESC limit 0,4',$link);
                                        $num = 1;
                                        while ( $article = mysql_fetch_array($article_res,MYSQL_ASSOC)){?>
                                        <tr>
                                            <td width="201px" align="left" valign="top">
                                                    &nbsp;&nbsp;&nbsp;<a href="article.php?file_id=<?php echo $article['id']; ?>" target="_blank"><?php echo $num.'、'.substr($article['title'],0,30); $num++; ?></a>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                        <tr>
                                            <td height="10" align="right"><a href="file_more.php"><img src=" images/more.gif" width="27px" height="9px" border="0">&nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="201px" align="center" valign="top"><br>
                        <table width="145px"  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <table width="201px"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:5px;">
                                        <?php
                                        $pic_res = mysql_query("select * from tb_tpsc ORDER BY id DESC limit 0,2",$link);
                                        while ($pic = mysql_fetch_array($pic_res,MYSQL_ASSOC)){ ?>
                                            <tr>
                                                <td width="9px" rowspan="2"  align="center">&nbsp;</td>
                                                     <td width="147px"  align="center">
                                                         <a href="image.php?recid=<?php echo $pic['id']; ?>" target="_blank">
                                                         <img src="f_image.php?pic_id=<?php echo $pic['id'];?>"  width="120" height="75" border="0">
                                                        </a><br>
                                                    </td>

                                                <td width="10px" rowspan="2"  align="center">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td  align="center">图片名称：<?php echo $pic['tpmc'];?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="3" height="10px" align="right"><a href="pic_more.php"><img src=" images/more.gif" width="27" height="9" border="0">&nbsp;&nbsp;&nbsp;</a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
        <td width="521px" height="501px" align="center" background="images/right.jpg">
            <table width="100%" height="98%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td height="372px" align="center">
                        <table style="width: 252px" cellspacing=0 cellpadding=0>
                            <tbody>
                                <tr>
                                    <td style="width: 429px; height: 280px" colspan=3 rowspan=2>
                                        <?php
                                        $p_sql = "select * from tb_public order by id desc";
                                        $p_rst = mysql_query($p_sql,$link);

                                        ?>
                                        <marquee onMouseOver=this.stop() style="WIDTH: 426px; HEIGHT: 280px" onMouseOut=this.start() scrollamount=2 scrolldelay=7 direction=up>
                                        <span style="FONT-SIZE: 9pt">
                                            <center>
                                            <?php
                                            while($p_row = mysql_fetch_row($p_rst)){
                                            ?>
                                                <a href="#"
                                                   onclick="wopen=open('show_pub.php?id=<?php echo $p_row[0]; ?>','','height=200,width=500,scollbars=no')"><?php echo $p_row[1]; ?></a><br>
                                                <?
                                            }

                                            ?>
                                            </center>
                                        </span>
                                        </marquee>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="66px">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>