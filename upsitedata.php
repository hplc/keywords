<?php
  require('config/config.php');
  date_default_timezone_set("Asia/Shanghai");
  $website=htmlspecialchars($_POST['website'],ENT_QUOTES); 
  $time=date("Y-m-d H:i:s");
  $conn=mysql_connect($host,$user,$password); 
   mysql_query("set names utf8"); //解决中文乱码问题 
   mysql_select_db($db); 
   $sql="select website from websites where website = '$website'";  
   $query = mysql_query($sql);
   $row=mysql_fetch_array($query);
   if ($row['website']==$website) 
{
       echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('数据已存在，正在返回……');window.location.href=document.referrer; </script>";
       exit;
   }else {
   $exec="insert into websites (website,time) values ('$website','$time')"; 
   $result=mysql_query($exec);
   echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('添加成功，正在返回……');window.location.href='webdata.php'; </script>";
   }
   mysql_close();
?>