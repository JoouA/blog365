<?php
    header("Content-Type:text/html;charset=utf-8");
    if (isset($_SESSION['username'])&&!empty($_SESSION['username'])){
        return true;
    }else{
        echo "<script type='text/javascript'>alert('请登录');window.location.href='index.php';</script>";
        exit();
    }
?>