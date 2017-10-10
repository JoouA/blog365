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
                            <a href="Regpro.php"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo "博客注册"; ?></span></a>
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
                                    <input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $pic;?>">
                                    <?php echo $img; ?> &nbsp;
                                    <input style="FONT-SIZE: 9pt"  type=submit value='登录' name=sub_dl onclick="return f_check(form);">
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