<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SEO日志 - 翰烽SEO关键词管理系统</title>
<link href="sou.css" rel="stylesheet" type="text/css" />
</head> 
<body>
<div id="top-header">
  <div class="inner">
    <p class="search-tab">
    <?php
     include('head.php');
	?>
    </p>
    <ul class="user-toolbar" id="user-toolbar">
      <li class="item">
      <a id="setHomepage" class="item-tab" onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('http://026k.com');" href="#">设为首页</a>&nbsp;&nbsp;<a id="setHomepage" class="item-tab" href="javascript:window.external.AddFavorite('http://026k.com/','关键词系统')">收藏本站</a>
      </li>
    </ul>
  </div>
</div>
<div align="center">
<p class="title" id="title">SEO日志</p>
<p class="footer" id="footer"><a href='addblog.php'>添加日志</a></p>
</br>
   <? 
     require('config/config.php');
     $conn=mysql_connect($host,$user,$password); //打开MySQL服务器连接 
     mysql_select_db($db);                       //链接数据库 
     mysql_query("set names utf8");            //解决中文乱码问题 
     $sql="select * from blogs ORDER BY id DESC ";           		 //sql语句 
     $result=mysql_query($sql);                  //执行sql语句，返回结果 
	 $amount = mysql_num_rows($result);
     while($rs=mysql_fetch_object($result))  
    { 
	  echo "
<table width='60%' id='cow' cellspacing='0' cellpadding='0'>
  <tr>
    <td valign='top'>
    <table width='100%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#DBE6F5'>
      <td><span style='float:left; text-align:left'><b>标题：<font color=blue><a href='blog.php?id=".$rs->id."' target='_blank' title='$rs->title &nbsp;&nbsp;&nbsp; $rs->time'>$rs->title</a></font></b></span><span style='float: right; text-align:right' title='".$rs->time."'><b>发布时间：</b>$rs->time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
   </tr>
   </table> 
  </td>
  </tr>
</table>
"; 
    }
	echo "
	<table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#EEF2F4'>
      <td>&nbsp;</td>
   </tr>
   </table>
	<table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#DBE6F5'>
      <td><span style='float:right; text-align:right'><font color=#666666>总共有&nbsp;<b>$amount</b>&nbsp;篇日志。<font></span></td>
   </tr>
   </table>";
       mysql_close();
  ?>
</div>
<div id="footer" >
<?php
     include('foot.php');
?>
<br />
</div>
</body>
</html>
