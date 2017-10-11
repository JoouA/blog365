<?php
header('Content-Type:text/html;charset=utf-8');
session_start();
if(!isset($_SESSION['username'])|| empty($_SESSION['username'])){
    echo "<script type='text/javascript'>alert('非法操作');window.location.href='index.php';</script>";
}
?>