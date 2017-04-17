<?
 session_start();
 if($_SESSION['admin']=="OK")
 {
  require('../config/config.php');
  $conn=mysql_connect($host,$user,$password);
  mysql_select_db($db);
  mysql_query("set names utf8");
  $exec="delete from keywords where id=".$_GET['id'];
  $exec1="delete from ranking where id=".$_GET['id'];
  mysql_query($exec);
  mysql_query($exec1);
  mysql_close();
   echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('删除关键词成功，正在返回……');window.location.href='index.php'; </script>";
 }
?>
