<td colSpan=3 valign="baseline" style="BACKGROUND-IMAGE:url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><br>
    <br>
    <table width="600px" height="100%"  border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
            <td height="130px" align="center" valign="middle">
                <table width="560px" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                    <tr align="left" colspan="2" >
                        <td width="390px" height="25px" colspan="3" valign="top" bgcolor="#EFF7DE">&nbsp;<span class="tableBorder_LTR"> 博客文章</span> </td>
                    </tr>
                    <td align="center" valign="top" >
                        <table width="480" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td> <?php
                                    $sql=mysql_query("select * from tb_article where id = ".$file_id1);
                                    $result=mysql_fetch_array($sql);
                                    ?>
                                    <table width="100%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#D6E7A5" bgcolor="#FFFFFF" class="i_table">
                                        <tr bgcolor="#FFFFFF">
                                            <td width="14%" align="center">博客ID号</td>
                                            <td width="15%"><?php echo $result['id']; ?></td>
                                            <td width="11%" align="center">作
                                                者</td>
                                            <td width="18%"><?php echo $result['author']; ?></td>
                                            <td width="12%" align="center">发表时间</td>
                                            <td width="30%"><?php echo $result['now']; ?></td>
                                        </tr>
                                        <tr bgcolor="#FFFFFF">
                                            <td align="center">博客主题</td>
                                            <td colspan="5">&nbsp;&nbsp;<?php echo $result['title']; ?></td>
                                        </tr>
                                        <tr bgcolor="#FFFFFF">
                                            <td align="center">文章内容</td>
                                            <td colspan="4"><?php echo $result['content']; ?></td>
                                            <td><?php
                                                if(@$_SESSION['fig']==1 || (@$_SESSION['username'] == $result['author'])){
                                                    $bool = true;
                                                    ?>
                                                    <a href="del_file.php?file_id=<?php echo $result['id'];?>"><img src="images/A_delete.gif" width="52px" height="16px" alt="删除博客文章" onclick="return fri_chk();"></a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table></td>
                </table></td>
        </tr>
        <tr>
            <td height="106px" align="center" valign="top"><?php if (empty($page)) {$page=1;}; ?>
                <table width="560px" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                    <tr align="left" colspan="2" >
                        <td width="390px" height="25px" colspan="3" valign="top" bgcolor="#EFF7DE">&nbsp;<span class="tableBorder_LTR"> 查看相关评论</span> </td>
                    </tr>
                    <?php
                    if ($page){
                    $page_size=4;     //每页显示4条记录
                    $query="select count(*) as total from tb_filecomment where fileid='  ,m ,' order by id desc";
                    $result=mysql_query($query);       //查询总的记录条数
                    $message_count=mysql_result($result,0,"total");       //为变量赋值
                    $page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
                    $offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环
                    for ($i=1; $i<2; $i++) {         //计算每页显示几行记录信息
                    if ($i==1) {
                        $sql=mysql_query("select * from tb_filecomment where fileid='$file_id1' order by id desc limit $offset, $page_size");
                        $result=mysql_fetch_array($sql);
                    }
                    if($result==false){
                        echo "<font color=#ff0000>对不起，没有相关评论!</font>";
                    }
                    else{
                        do{
                            ?>
                            <tr>
                                <td height="57px" align="center" valign="top" >
                                    <table width="480px"  border="1" cellpadding="1" cellspacing="1" bordercolor="#D6E7A5" bgcolor="#FFFFFF" class="i_table">
                                        <tr bgcolor="#FFFFFF">
                                            <td width="14%" align="center">评论ID号</td>
                                            <td width="15%"><?php echo $result['id']; ?></td>
                                            <td width="11%" align="center">评论人</td>
                                            <td width="18%"><?php echo $result['username']; ?></td>
                                            <td width="12%" align="center">评论时间</td>
                                            <td width="30%"><?php echo $result['datetime']; ?></td>
                                        </tr>
                                        <tr bgcolor="#FFFFFF">
                                            <td align="center">评论内容</td>
                                            <td colspan="4"><?php echo $result['content']; ?></td>
                                            <td>
                                                <?php
                                                if ($bool){
                                                    ?>
                                                    <a href="del_comment.php?comment_id=<?php echo $result['id']?>"><img src="images/A_delete.gif" width="52px" height="16px" alt="删除博客文章评论" onclick="return d_chk();"></a>
                                                    <?php
                                                }
                                                ?>						</td>
                                        </tr>
                                    </table></td>
                            </tr>
                            <?php
                        }while($result=mysql_fetch_array($sql));
                    }
                    ?>
                </table>
                <table width="560px" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#EFF7DE">
                        <td width="52%">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页
                            记录：<?php echo $message_count;?> 条&nbsp;</td>
                        <td align="right" class="hongse01">
                            <?php
                            if($page!=1)
                            {
                                echo  "<a href=article.php?page=1&file_id=".$file_id.">首页</a>&nbsp;";
                                echo "<a href=article.php?page=".($page-1)."&file_id=".$file_id.">上一页</a>&nbsp;";
                            }
                            if($page<$page_count)
                            {
                                echo "<a href=article.php?page=".($page+1)."&file_id=".$file_id.">下一页</a>&nbsp;";
                                echo  "<a href=article.php?page=".$page_count."&file_id=".$file_id.">尾页</a>";
                            }
                            }
                            }
                            ?> </td>
                    </tr>
                </table></td>
        </tr>
        <?php
        // 只有login之后才能进行评论
        if (isset($_SESSION['username'])) {
            ?>
            <tr>
                <td height="107" align="center" valign="top">
                    <!--  发表评论  -->
                    <form name="myform" method="post" action="check_comment.php">
                        <table width="560px" border="1" align="center" cellpadding="3" cellspacing="1"
                               bordercolor="#9CC739" bgcolor="#FFFFFF">
                            <tr align="left" colspan="2">
                                <td width="390px" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"><span
                                        class="right_head"><SPAN style="FONT-SIZE: 9pt; COLOR: #cc0033"></SPAN></span><span
                                        class="tableBorder_LTR"> 发表评论</span></td>
                            </tr>
                            <td height="112px" align="center" valign="top">
                                <input name="htxt_fileid" type="hidden" value="<?php echo $_GET['file_id']; ?>">
                                <table width="500px" border="1" cellpadding="1" cellspacing="0"
                                       bordercolor="#D6E7A5" bgcolor="#FFFFFF">
                                    <tr>
                                        <td align="center">我要评论</td>
                                        <td width="410"><textarea name="txt_content" cols="66" rows="8"
                                                                  id="txt_content"></textarea></td>
                                    </tr>
                                    <tr align="center">
                                        <td colspan="2"><input type="submit" name="submit" value="提交"
                                                               onclick="return r_check();">
                                            &nbsp;
                                            <input type="reset" name="submit2" value="重置"></td>
                                    </tr>
                                </table>
                            </td>
                        </table>
                    </form>
                    <!-------------->
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</td>