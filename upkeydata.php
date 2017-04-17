<?php
  require('config/config.php');
  date_default_timezone_set("Asia/Shanghai");
  $keyword=htmlspecialchars($_POST['keyword'],ENT_QUOTES); 
  $time=date("Y-m-d H:i:s");
  $conn=mysql_connect($host,$user,$password); 
   mysql_query("set names utf8"); //解决中文乱码问题 
   mysql_select_db($db); 
   $sql="select keyword from keywords where keyword = '$keyword'";  
   $query = mysql_query($sql);
   $row=mysql_fetch_array($query);
   if ($row['keyword']==$keyword) 
{
       echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('数据已存在，正在返回……');window.location.href=document.referrer; </script>";
       exit;
   }else {
   $exec="insert into keywords (keyword,time) values ('$keyword','$time')"; 
   $result=mysql_query($exec);
   echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('添加成功，正在返回……');window.location.href='index.php'; </script>";   
   }
   mysql_close();
?>