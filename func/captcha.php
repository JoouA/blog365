<?php
$str=array("大","更","创","天","科","客","博","技","立","新");
$word=count($str);
$img="";
$pic="";
for($i=0;$i<4;$i++){
    $num=rand(0,$word-1);
    $img=$img."<img src=' images/checkcode/".$num.".gif' width='16' height='16'>";    //显示随机图片
    $pic=$pic.$str[$num];    //将图片转换成数组中的文字
}
?>