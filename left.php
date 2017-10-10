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