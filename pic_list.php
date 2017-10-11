<td width="521px" height="501px" align="center" background="images/flist.jpg">
    <table width="100%" height="98%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td height="372px" align="center">
                <!-- 文章列表-->
                <table width="90%" height="100%"  border="0" cellpadding="0" cellspacing="0" style="margin-top:25px;">
                    <tr>
                        <td height="130px" align="center" valign="top"><?php $page=get('page'); if (empty($page)) {$page=1;}; ?>
                            <table width="80%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                                <tr align="left" colspan="2" >
                                    <td height="25px" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> 浏览全部图片 </span> </td>
                                </tr>
                                <?php
                                if ($page){
                                $page_size = 4;     //每页显示4条数据
                                $query = "select count(*) as total from tb_tpsc order by id desc";
                                $result = mysql_query($query);       //查询总的记录条数
                                $message_count = mysql_result($result,0,"total");       //为变量赋值
                                $page_count = ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
                                $offset = ($page-1)*$page_size;			//计算下一页从第几条数据开始循环
                                ?>
                                <tr>
                                    <?php
                                    $sql=mysql_query("select * from tb_tpsc order by id desc limit $offset, $page_size");
                                    $i=1;
                                    while($info=mysql_fetch_array($sql)){
                                    if($i%2==0){
                                    ?>
                                    <td height="31" align="left" valign="middle" >
                                        <!--显示图片-->
                                        <table width="180"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:10px;">
                                            <tr>
                                                <td width="9" rowspan="2"  align="center">&nbsp;</td>
                                                <td width="147"  align="center"><a href="image.php?recid=<?php echo $info['id']; ?>" target="_blank"><img src="f_image.php?pic_id=<?php echo $info['id'];?>"  width="120" height="80" border="0"></a></td>
                                                <td width="10" rowspan="2"  align="center">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td  align="center">图片名称：<?php echo $info['tpmc'];?></td>
                                            </tr>
                                        </table>
                                        <!----------------------------------->
                                    </td>
                                </tr>
                            <?php
                            }else{
                                ?>
                                <td height="31" align="left" valign="middle" >
                                    <!--显示图片-->
                                    <table width="180"  border="0" cellspacing="0" cellpadding="0" valign="top" style="margin-top:10px;">
                                        <tr>
                                            <td width="9" rowspan="2"  align="center">&nbsp;</td>
                                            <td width="147"  align="center"><a href="image.php?recid=<?php echo $info['id']; ?>" target="_blank"><img src="f_image.php?pic_id=<?php echo $info['id'];?>"  width="120" height="80" border="0"></a></td>
                                            <td width="10" rowspan="2"  align="center">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td  align="center">图片名称：<?php echo $info['tpmc'];?></td>
                                        </tr>
                                    </table>
                                    <!----------------------------------->
                                </td>
                                <?php
                            }
                            $i++;}
                            ?>
                            </table>
                            <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr bgcolor="#EFF7DE">
                                    <td width="50%" align="left" valign="middle">&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页
                                        记录：<?php echo $message_count;?> 条&nbsp; </td>
                                    <td width="50%" align="right">
                                        <?php
                                        if($page!=1)
                                        {
                                            echo  "<a href=pic_more.php?page=1>首页</a>&nbsp;";
                                            echo "<a href=pic_more.php?page=".($page-1).">上一页</a>&nbsp;";
                                        }
                                        if($page<$page_count)
                                        {
                                            echo "<a href=pic_more.php?page=".($page+1).">下一页</a>&nbsp;";
                                            echo  "<a href=pic_more.php?page=".$page_count.">尾页</a>";
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
            <td height="66">&nbsp;</td>
        </tr>
    </table>
</td>