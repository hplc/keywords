<?php
 session_start();
 if($_SESSION['admin']=="OK")
 {
  require('../config/conn.php');
  $exec="update websites set website='".$_POST['upwebsite']."' where id=".$_POST['id'];
  $result=mysql_query($exec);
 mysql_close();
   echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('修改网址成功，正在返回……');window.history.back(-1); </script>"; 
   }else{  
	header("location:login.php");
 }
?>

