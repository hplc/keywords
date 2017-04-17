<?
     require('config/config.php');
     $conn=mysql_connect($host,$user,$password); //打开MySQL服务器连接 
     mysql_select_db($db);                       //链接数据库 
     mysql_query("set names utf8");            //解决中文乱码问题
     $exec="select * from blogs where id=".$_GET['id'];  
     $result=mysql_query($exec);
     $rs=mysql_fetch_object($result);
	 $amount  = mysql_num_rows($result);
     $id=$rs->id;
	 $uid=$rs->id;
     $title=$rs->title;
     $blog=$rs->blog;
     $time=$rs->time;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title?> - 翰烽SEO关键词管理系统</title>
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
<p class="title" id="title"><?=$title?></p>
<p class="footer" id="footer">添加时间：<?=$time?></p><br />
<table width='60%' id='cow' cellspacing='0' cellpadding='0'>
  <tr>
    <td valign='top'>
   <table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#DBE6F5'>
      <td><?=$blog?></td>
    </tr>
  </table>
  	<table width='100%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#EEF2F4'>
	<br />
  <?php  
     require('config/config.php');
     $conn=mysql_connect($host,$user,$password); //打开MySQL服务器连接 
     mysql_select_db($db);                       //链接数据库 
     mysql_query("set names utf8");            //解决中文乱码问题
	 $exec="select id,title from blogs where id<".$_GET['id']." order by id desc limit 0,1";
     $result=mysql_query($exec);
     $rs=mysql_fetch_object($result);
	if(isset($rs->id)){
	        $lastid=$rs->id;
			$lasttitle=$rs->title; 
	}
	else{
			$lastid=$uid;
			$lasttitle='没有了'; 
	}  
  ?>
  <?php  
	 $exec="select id,title from blogs where id>".$_GET['id']." order by id asc limit 0,1";
     $result=mysql_query($exec);
     $rs=mysql_fetch_object($result);
     $nextid=$rs->id;
	 $nexttitle=$rs->title;
	if(isset($rs->id)){
	        $nextid=$rs->id;
			$nexttitle=$rs->title; 
	}
	else{
			$nextid=$uid;
			$nexttitle='没有了'; 
	} 
	?>
      <td><span style='float:left; text-align:left'><font color="#666666"><b>上一篇：</b><a href='blog.php?id=<?=$lastid?>'><?=$lasttitle?></a></font></span><span style='float:right; text-align:left'><font color=#666666><b>下一篇：</b><a href='blog.php?id=<?=$nextid?>'><?=$nexttitle?></a><font></span></td>
   </tr>
   </table>
   <? 
       mysql_close();
  ?>
  </td>
</tr>
</table>
<a href='addblog.php'>添加新日志</a> 
</div>
<div id="footer" >
<?php
     include('foot.php');
?>
<br />
</div>
</body>
</html>
