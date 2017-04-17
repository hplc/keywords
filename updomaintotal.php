<?php
  require('config/config.php');
  date_default_timezone_set("Asia/Shanghai");
  $daterank=$_POST['daterank']; 
  $id=$_POST['id'];
  $baidu=$_POST['baidu']; 
  $qihoo=$_POST['qihoo']; 
  $google=$_POST['google']; 
  $sogou=$_POST['sogou']; 
  $soso=$_POST['soso']; 
  $youdao=$_POST['youdao']; 
  $bing=$_POST['bing']; 
  $yisou=$_POST['yisou']; 
  $zhongsou=$_POST['zhongsou']; 
  $panguso=$_POST['panguso']; 
  $jike=$_POST['jike']; 
  $time=date("Y-m-d H:i:s");
  $conn=mysql_connect($host,$user,$password); 
   mysql_query("set names utf8"); //解决中文乱码问题 
   mysql_select_db($db); 
   $sql="select daterank from domaintotal where id = '$id'";  
   $query = mysql_query($sql);
   $row=mysql_fetch_array($query);
   if ($row['daterank']==$daterank) 
{
       echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('数据已存在，正在返回……');window.location.href=document.referrer; </script>";
       exit;
   }else {
  $exec="insert into domaintotal (id,daterank,time,baidu,qihoo,google,sogou,soso,youdao,bing,yisou,zhongsou,panguso,jike) values ('$id','$daterank','$time','$baidu','$qihoo','$google','$sogou','$soso','$youdao','$bing','$yisou','$zhongsou','$panguso','$jike')";  
   $result=mysql_query($exec);
   }
   mysql_close();
   echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('更新反链成功，正在返回……');window.location.href='websites.php?id=$id&page=domain'; </script>";
?>

