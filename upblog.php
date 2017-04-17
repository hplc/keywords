<?php
  require('config/config.php');
  date_default_timezone_set("Asia/Shanghai");
  $title=htmlspecialchars($_POST['title'],ENT_QUOTES); 
  $blog=$_POST['blog']; 
  $time=date("Y-m-d H:i:s");
  $conn=mysql_connect($host,$user,$password); 
   mysql_query("set names utf8"); //解决中文乱码问题 
   mysql_select_db($db); 
   $sql="select blog from blogs";  
   $query = mysql_query($sql);
   $row=mysql_fetch_array($query);
   $exec="insert into blogs (title,blog,time) values ('$title','$blog','$time')"; 
   $result=mysql_query($exec);
   mysql_close();
   echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('添加成功，正在返回……');window.location.href='log.php'; </script>";
?>