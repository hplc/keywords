<?php
 session_start();
 if($_SESSION['admin']=="OK")
 {
  require('../config/conn.php');
  $exec="UPDATE `users` SET `password` = '".sha1($_POST['password'])."' WHERE `adminname` ='".$_SESSION['user']."'";
  $result=mysql_query($exec);
 mysql_close();
   echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('修改密码成功，正在返回……');window.history.back(-1);</script>";
    }else{  
	header("location:login.php");
 }
?>

