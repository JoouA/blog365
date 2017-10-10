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
                                            <div align="center">
                                            <?php
                                            while($p_row = mysql_fetch_row($p_rst)){
                                                ?>
                                                <a href="#"
                                                   onclick="wopen=open('show_pub.php?id=<?php echo $p_row[0]; ?>','','height=200,width=500,scollbars=no')"><?php echo $p_row[1]; ?></a><br>
                                                <?
                                            }

                                            ?>
                                            </div>
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
