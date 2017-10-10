<?php
/*
 * the class to calculate date
 * */
class calendar{

    public $year;
    public $month;
    public $day;

    public $week = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");

    var $_month = array(

        "01"=>"一月",

        "02"=>"二月",

        "03"=>"三月",

        "04"=>"四月",

        "05"=>"五月",

        "06"=>"六月",

        "07"=>"七月",

        "08"=>"八月",

        "09"=>"九月",

        "10"=>"十月",

        "11"=>"十一月",

        "12"=>"十二月"

    );

    function setYear($year){
        $this->year = $year;
    }

    function getYear(){
        return $this->year;
    }

    function setMonth($month){
        $this->month = $month;
    }

    function getMonth(){
        return $this->month;
    }

    function setDay($day){
        $this->day = $day;
    }

    function getDay(){
        return $this->day;
    }

    function OUT(){    //输出日历

        $this->_env();   // set the year month day

        $week=$this->getWeek($this->year,$this->month,$this->day);     //获得日期为星期几

        $fweek=$this->getWeek($this->year,$this->month,1);     //获得此月第一天为星期几

        echo "<div style=width:225px; font:9pt;><form action=$_SERVER[PHP_SELF] method='post' style='margin:0'><select name=month onchange='this.form.submit();'>";

        for($ttmpa=1;$ttmpa<13;$ttmpa++){     //输出12个月

            $ttmpb=sprintf("%02d",$ttmpa);

            if(strcmp($ttmpb,$this->month)==0){

                $select="selected style='background-color:#FAFDE2'";

            }else{

                $select="";

            }

            echo "<option value='$ttmpb' $select>".$this->_month[$ttmpb]."</option>";

        }

        echo " </select> <select name='year' onchange='this.form.submit();'>";    //输出年份，前后10年

        for($ctmpa=$this->year-10;$ctmpa<$this->year+10;$ctmpa++){

            if($ctmpa>2038){

                break;

            }

            if($ctmpa<1980){

                continue;

            }

            if(strcmp($ctmpa,$this->year)==0){

                $select="selected style='background-color:#FAFDE2'";

            }else{

                $select="";

            }

            echo "<option value='$ctmpa' $select>$ctmpa</option>rn";

        }

        echo "</select> 

</form> 

<table border=0 align=center>";

        for($Tmpa=0;$Tmpa<count($this->week);$Tmpa++){    //输出星期的标头

            echo "<td>".$this->week[$Tmpa]."</td>";

        }

        for($tmpb=1;$tmpb<=date("t",mktime(0,0,0,$this->month,$this->day,$this->year));$tmpb++){    //输出所有日期
            if(strcmp($tmpb,(int)$this->day)==0 && strcmp(date('m'),$this->month) == 0 &&strcmp(date('Y'),$this->year) == 0 ){  //获得当前日期，并采用特色颜色做为标记

                $flag = "style='background-color:#DD5269'";

            }else{

                $flag = "style ='background-color:#FAFDE2'";

            }

            if($tmpb==1){

                echo "<tr>";

                for($tmpc=0;$tmpc<$fweek;$tmpc++){   // fweek 指的是每个月的第一天是星期几 星期一就是1 星期二2  星期天0

                    echo "<td></td>";

                }

            }

            if(strcmp($this->getWeek($this->year,$this->month,$tmpb),0)==0){  // 是周天的话

                echo "<tr><td align=center $flag>$tmpb";

            }else{

                echo "<td align=center $flag>$tmpb";

            }

        }

        echo "</table></div>";

    }

    //获得方法内指定的日期的星期数
    function getWeek($year,$month,$day){
        $week = date("w",mktime(0,0,0,$month,$day,$year));  // 获取日期
        return $week;  // 获得星期
    }

    function _env(){

        if(isset($_POST["month"])){

            $month=$_POST["month"];

        }else{

            $month=date("m"); //默认为本月

        }

        if(isset($_POST["year"])){

            $year=$_POST["year"];

        }else{

            $year=date("Y");    //默认为本年

        }

        /*
         * date('t');  // 可以获得当前月有多少天
         * date('t',mktime(0,0,0,2,1,2101));   //获取指定月份的天数
         * date('d');  // 回去当前的日期
         * */

        $this->setYear($year);

        $this->setMonth($month);

        $this->setDay(date("d"));

    }

}

 $date=new calendar;

 $date->OUT();

?>