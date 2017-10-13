<?php
    session_start();
    require_once "check_login.php";
?>
<html>
<head>
    <meta content="text/html" charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>添加图片</title>
    <script type="text/javascript" src="JS/menu.JS"></script>
    <script type="text/javascript" src="JS/UBBCode.JS"></script>
    <script type="text/javascript">
        function pic_chk(){
            if(document.myform.tpmc.value==''){
                alert('请输入图片名称！');
                return false;
            }

            if(document.myform.file.value==''){
                alert('请选择图片!');
                return false;
            }

            var pic = document.myform.file.value;
            var place = pic.lastIndexOf('.');
            var ext =  pic.substring(place).toLowerCase();

            var extArr = new Array('.png','.jpg','.jpeg','.gif');

            for(var i=0; i < extArr.length; i++){
                if(extArr[i] == ext){
                    return true;
                }
            }

            alert('请选择正确的图片格式');
            return false;
        }
    </script>
</head>
<body>
<div class="menuskin" id="popmenu" onmouseover="clearhidemenu();highlightmenu(event,'on')" onmouseout="highlightmenu(event,'off');dynamichide(event)" style="Z-index:100;position:absolute;">
</div>
<table style="width: 755px;" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <?php require_once "file_head.php"; ?>
    </tr>
    <tr>
        <td colspan="3" valign="baseline" style="BACKGROUND-IMAGE: url( 'images/bg.jpg'); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center">
            <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="451px" align="center" valign="top"><br>

                        <table width="640px"  border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="613px" height="23px" align="right" valign="top">&nbsp;</td><br>
                            </tr>
                            <tr>
                                <td height="223px" align="center" valign="top">
                                    <table width="380px" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <form  name="myform" method="post" action="tptj_ok.php"  enctype="multipart/form-data">
                                                    <table width="450px" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5">
                                                        <tr>
                                                            <td class="i_table" colspan="2">&nbsp;<span class="tableBorder_LTR">添加图片</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top" align="right" width="28%">图片名称：<br></td>
                                                            <td width="72%"><input name="tpmc" type="text" id="tpmc" size="40"></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right" width="28%">上传路径：</td>
                                                            <td width="72%"><input name="file" type="file" size="23" maxlength="60" >
                                                            </td>
                                                        </tr>
                                                        <tr align="center">
                                                            <td colspan="2">
                                                                <input name="btn_tj" type="submit" id="btn_tj" value="提交" onclick="return pic_chk();">&nbsp;
                                                                <input name="btn_cx" type="reset" id="btn_cx" value="重写">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>
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
</table>
</body>
</html>
