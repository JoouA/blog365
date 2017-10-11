<td width="521px" height="501px" align="center" background="images/flist.jpg">
    <table width="100%" height="98%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td height="372px" align="center">
                <table width="90%" height="100%"  border="0" cellpadding="0" cellspacing="0" style="margin-top:25px;">
                    <tr>
                        <td height="130px" align="center" valign="top"><?php $page=get('page'); if (empty($page)) {$page=1;} ?>
                            <!--   文章列表      -->
                            <table width="80%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                                <tr align="left" colspan="2" >
                                    <td height="25px" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> 查看全部博客文章</span> </td>
                                </tr>
                                <?php
                                if ($page){
                                $page_size=2;
                                $query="select count(*) as total from tb_article order by id desc";
                                $result=mysql_query($query);
                                $message_count=mysql_result($result,0,"total");
                                $page_count=ceil($message_count/$page_size);
                                $offset=($page-1)*$page_size;
                                $article_res=mysql_query("select id,title from tb_article order by id desc limit $offset, $page_size");
                                ?>
                                <tr>
                                    <td height="31px" align="left" valign="middle" >
                                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="left" valign="middle">
                                                    <table border="0" cellspacing="0" cellpadding="0" valign="top">
                                                        <?php
                                                        $i=1;
                                                        while($info=mysql_fetch_array($article_res)){
                                                            ?>
                                                        <tr>
                                                            <td width="201px" align="left" valign="middle">
                                                                &nbsp;&nbsp;&nbsp;<a href="article.php?file_id=<?php echo $info['id']; ?>" target="_blank"><?php echo $i.'、'.$info['title'];?></a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            $i=$i+1;
                                                        }
                                                        ?>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!--分页-->
                            <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr bgcolor="#EFF7DE">
                                    <td width="50%" align="left" valign="middle">
                                        &nbsp;&nbsp;页次<?php echo $page;?>/<?php echo $page_count;?>页 记录：<?php echo $message_count;?> 条&nbsp;
                                    </td>
                                    <td width="50%" align="right">
                                        <?php
                                        if($page!=1)
                                        {
                                            echo  "<a href=file_more.php?page=1>首页</a>&nbsp;";
                                            echo "<a href=file_more.php?page=".($page-1).">上一页</a>&nbsp;";
                                        }
                                        if($page<$page_count)
                                        {
                                            echo "<a href=file_more.php?page=".($page+1).">下一页</a>&nbsp;";
                                            echo  "<a href=file_more.php?page=".$page_count.">末页</a>";
                                        }
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="66px">&nbsp;</td>
        </tr>
    </table>
</td>