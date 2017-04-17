<?
 session_start();
 if($_SESSION['admin']=="OK")
 {
  require('../config/config.php');
  $conn=mysql_connect($host,$user,$password);
  mysql_select_db($db);
  mysql_query("set names utf8");
  $exec="delete from websites where id=".$_GET['id'];
  $exec1="delete from sitetotal where id=".$_GET['id'];
  $exec2="delete from domaintotal where id=".$_GET['id'];
  mysql_query($exec);
  mysql_query($exec1);
  mysql_query($exec2);
  mysql_close();
   echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('删除网址成功，正在返回……');window.location.href='sites.php'; </script>";
 }
?>
