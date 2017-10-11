var helpstat = false;

var basic = false;

function AddText(NewCode) {

    document.all("file").value+=NewCode

}

function showsize(size) {

    if (helpstat) {
        alert("文字大小标记\n设置文字大小.\n可变范围 1 - 6.\n 1 为最小 6 为最大.\n用法: <size="+size+">这是 "+size+" 文字</size>");
    } else if (basic) {
        var AddTxt="<font size="+size+"></font>";
        AddText(AddTxt);
    } else {
        var txt = prompt('大小'+size,'文字');
        if (txt!=""){
          var AddTxt = "<font size='"+size+"'>"+txt+"</font>";
          AddText(AddTxt);
        }
    }

}



function bold() {

    if (helpstat) {

        alert("加粗标记\n使文本加粗.\n用法: <b>这是加粗的文字</b>");

    } else if (basic) {

        var AddTxt="<b></b>";

        AddText(AddTxt);

    } else {

        var txt=prompt("文字将被变粗.","请在这里输入要加粗的文字！");

        if (txt!=null) {

            var AddTxt="<B>"+txt+"</B>";
            AddText(AddTxt);

        }

    }

}
function italicize() {

    if (helpstat) {

        alert("斜体标记\n使文本字体变为斜体.\n用法: <i>这是斜体字</i>");

    } else if (basic) {

        var AddTxt="<i></i>";

        AddText(AddTxt);

    } else {
        var  txt=prompt("文字将变斜体","请在这里输入要倾斜的文字！");
        if (txt!=null) {
            var AddTxt="<i>"+txt+"</i>";
            AddText(AddTxt);
        }
    }
}



function showcolor(color) {

    if (helpstat) {

        alert("颜色标记\n设置文本颜色.  任何颜色名都可以被使用.\n用法: <color="+color+">颜色要改变为"+color+"的文字</color>");

    } else if (basic) {

        var AddTxt="<font color="+color+"></font>";

        AddText(AddTxt);

    } else {
        var txt=prompt("选择的颜色是: "+color,"请在这里输入要改变颜色的文字！");
        if(txt!=null) {
            var AddTxt="<font color='"+color+"'>"+txt+"</font>";
            AddText(AddTxt);
        }
    }

}



function showfont(font) {

    if (helpstat){

        alert("字体标记\n给文字设置字体.\n用法: <font="+font+">改变文字字体为"+font+"</font>");

    } else if (basic) {

        var AddTxt="<font face="+font+"></font>";

        AddText(AddTxt);

    } else {
        var txt=prompt("要设置字体的文字"+font,"请在这里输入要改变字体的文字！");
        if (txt!=null) {
            var AddTxt="<font face='"+font+"'>"+txt+"</font>";
            AddText(AddTxt);
        }
    }

}

function underline() {
    if (helpstat) {
        alert("下划线标记\n给文字加下划线.\n用法: <u>要加下划线的文字</u>");
    } else if (basic) {
        var AddTxt="<u></u>";
        AddText(AddTxt);
    }else{
        var txt=prompt("下划线文字.","文字");
        if (txt!=null) {
            var AddTxt="<u>"+txt+"</u>";
            AddText(AddTxt);
        }

    }

}