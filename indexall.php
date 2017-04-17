<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>翰烽SEO关键词管理系统</title>
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
<p class="title" id="title">翰烽SEO关键词管理系统</p>
<p class="footer" id="footer"><a href='index.php'>分页版</a></p>
<form action='search.php' method='post'>
<input type='text' name='key' />
<input type='submit' value='搜索' />
</form>
</br>
   <? 
     require('config/config.php');
     $conn=mysql_connect($host,$user,$password); //打开MySQL服务器连接 
     mysql_select_db($db);                       //链接数据库 
     mysql_query("set names utf8");            //解决中文乱码问题 
     $sql="select * from keywords ORDER BY id DESC ";           		 //sql语句 
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
      <td><span style='float:left; text-align:left'><b>关键词：<font color=blue><a href='keywords.php?id=".$rs->id."' target='_blank' title='$rs->keyword'>$rs->keyword</a></font></b></span><span style='float: right; text-align:right' title='".$rs->time."'><b>发布时间：</b>$rs->time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
   </tr>
   </table>
   <table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#EEF2F4'>
      <td width='8%'><b>搜索引擎：</b></td>
      <td width='7%'><a href='http://www.baidu.com/baidu?word=".$rs->keyword."' target='_blank'>百度</a></td>
      <td width='7%'><a href='http://www.so.com/s?q=".$rs->keyword." ' target='_blank'>360搜索</a></td>
      <td width='8%'><a href='http://www.google.com.hk/search?q=".$rs->keyword."' target='_blank'>谷歌</a></td>
      <td width='7%'><a href='http://www.sogou.com/web?query=".$rs->keyword."' target='_blank'>搜狗</a></td>
      <td width='7%'><a href='http://www.soso.com/q?w=".$rs->keyword."' target='_blank'>搜搜</a></td>
      <td width='7%'><a href='http://www.youdao.com/search?q=".$rs->keyword."' target='_blank'>有道</a></td>
	  <td width='7%'><a href='http://cn.bing.com/search?q=".$rs->keyword."' target='_blank'>必应</a></td>
	  <td width='7%'><a href='http://www.yisou.com/s?q=".$rs->keyword."' target='_blank' title='一搜为中国雅虎的绿色无广告版'>一搜</a></td>
	  <td width='7%'><a href='http://www.zhongsou.com/third.cgi?w=".$rs->keyword."' target='_blank'>中搜</a></td>
	  <td width='7%'><a href='http://search.panguso.com/pagesearch.htm?q=".$rs->keyword."' target='_blank'>盘搜</a></td>
	  <td width='7%'><a href='http://www.jike.com/so?q=".$rs->keyword."' target='_blank'>即刻</a></td>
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
      <td><span style='float:right; text-align:right'><font color=#666666>总共有&nbsp;<b>$amount</b>&nbsp;个关键词。<font></span></td>
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
