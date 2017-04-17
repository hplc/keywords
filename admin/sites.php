<?
session_start();
if($_SESSION['admin']=="OK")
 { 
include('../config/conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理网址 - 翰烽SEO关键词管理系统</title> 
<link href="../sou.css" rel="stylesheet" type="text/css" />
</head> 
<body>
</br>
<div align="center">
<p class="title" id="title">管理网址</p>
    <?php
     include('header.php'); 
	 include('sitesql.php');
	 include('../page.php');
	 while($rs=mysql_fetch_object($result))  
    { 
	  echo "
    <table width='60%' cellspacing='1' cellpadding='1'>
    <tr bgcolor='#DBE6F5'>
      <td><span style='float:left; text-align:left' title='".$rs->website."'><b>关键词：<font color=blue><a href='../websites.php?id=".$rs->id."' target='_blank' title='$rs->website'>$rs->website</a></font></b></span><span style='float: right; text-align:right'><a href=sitemodify.php?id=".$rs->id." title='修改 ".$rs->website."'>修改</a>&nbsp;&nbsp;&nbsp;<a href='sitedelete.php?id=$rs->id' title='删除 ".$rs->website."'>删除</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>时间：</b>$rs->time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
   </tr>
   </table>  
";
    }
	echo "
	<table width='60%' cellspacing='1' cellpadding='1'>
    <tr bgcolor='#EEF2F4'>
      <td>&nbsp;</td>
   </tr>
   </table>
	<table width='60%' cellspacing='1' cellpadding='1'>
    <tr bgcolor='#DBE6F5'>
      <td><span style='float:left; text-align:left'><font color=#666666>$page_string</font></span><span style='float:right; text-align:left'><font color=#666666>每页显示<b>$page_size</b>条，总共有&nbsp;<b>$amount</b>&nbsp;个网址。<font></span></td>
   </tr>
   </table>
   <div id='footer'>
   ";
       include('foot.php');
       mysql_close();
 } else {  
		echo"<script language='javaScript'>window.location.href='login.php';</script>";
mysql_close();
 }
?>
</div>
</body>
</html>