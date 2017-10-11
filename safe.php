<?
    header("Content-Type:text/html;charset=utf-8;");
    session_start();
    session_destroy();
    echo "<script type='text/javascript'>alert('注销成功');window.location.href='index.php';</script>";
//    header("Location: index.php");
?>