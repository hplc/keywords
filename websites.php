<?php
	require('config/websitesviewsql.php');
	include('config/websitesview.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$website?>的搜索引擎收录和反链情况</title>
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
      <a id="setHomepage" class="item-tab" onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('@');" href="#">设为首页</a>&nbsp;&nbsp;<a id="setHomepage" class="item-tab" href="javascript:window.external.AddFavorite('@','关键词系统')">收藏本站</a>
      </li>
    </ul>
  </div>
</div>
<br />
<div align="center">
<p class="title" id="title"><font size="3"><a href='http://<?=$website?>' target='_blank'><?=$website?></a></font>&nbsp;<font size="2">的搜索引擎收录和反链情况</font></p>
<p class="footer" id="footer">添加时间：<?=$time?></p>
<input type="button" value="刷新" onclick="location.reload()" />
<br />
<br />
<a href='websites.php?id=<?=$id?>'>查询</a>&nbsp;&nbsp;<a href='websites.php?id=<?=$id?>&amp;page=site'>查询收录</a>&nbsp;&nbsp;<a href='websites.php?id=<?=$id?>&amp;page=domain'>查询反链</a> 
<table width='60%' id='cow' cellspacing='0' cellpadding='0'>
  <tr>
    <td valign='top'>
   <table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#DBE6F5'>
      <td width='14%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>收录：</b></td>
      <td width='7%'><a href='http://www.baidu.com/baidu?word=site:<?=$website?>' target='_blank'>百度</a></td>
      <td width='7%'><a href='http://www.so.com/s?q=site:<?=$website?> ' target='_blank'>360搜索</a></td>
      <td width='8%'><a href='http://www.google.com.hk/search?q=site:<?=$website?>' target='_blank'>谷歌</a></td>
      <td width='7%'><a href='http://www.sogou.com/web?query=site:<?=$website?>' target='_blank'>搜狗</a></td>
      <td width='7%'><a href='http://www.soso.com/q?w=site:<?=$website?>' target='_blank'>搜搜</a></td>
      <td width='7%'><a href='http://www.youdao.com/search?q=site:<?=$website?>' target='_blank'>有道</a></td>
	  <td width='7%'><a href='http://cn.bing.com/search?q=site:<?=$website?>' target='_blank'>必应</a></td>
	  <td width='7%'><a href='http://www.yisou.com/s?q=site:<?=$website?>' target='_blank' title='一搜为中国雅虎的绿色无广告版'>一搜</a></td>
	  <td width='7%'><a href='http://www.zhongsou.com/third.cgi?w=site:<?=$website?>' target='_blank'>中搜</a></td>
	  <td width='7%'><a href='http://search.panguso.com/pagesearch.htm?q=site:<?=$website?>' target='_blank'>盘搜</a></td>
	  <td width='7%'><a href='http://www.jike.com/so?q=site:<?=$website?>' target='_blank'>即刻</a></td>
    </tr>
  </table>
   <table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#DBE6F5'>
      <td width='14%'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>反链：</b></td>
      <td width='7%'><a href='http://www.baidu.com/baidu?word=domain:<?=$website?>' target='_blank'>百度</a></td>
      <td width='7%'><a href='http://www.so.com/s?q=domain:<?=$website?> ' target='_blank'>360搜索</a></td>
      <td width='8%'><a href='http://www.google.com.hk/search?q=domain:<?=$website?>' target='_blank'>谷歌</a></td>
      <td width='7%'><a href='http://www.sogou.com/web?query=domain:<?=$website?>' target='_blank'>搜狗</a></td>
      <td width='7%'><a href='http://www.soso.com/q?w=domain:<?=$website?>' target='_blank'>搜搜</a></td>
      <td width='7%'><a href='http://www.youdao.com/search?q=domain:<?=$website?>' target='_blank'>有道</a></td>
	  <td width='7%'><a href='http://cn.bing.com/search?q=domain:<?=$website?>' target='_blank'>必应</a></td>
	  <td width='7%'><a href='http://www.yisou.com/s?q=domain:<?=$website?>' target='_blank' title='一搜为中国雅虎的绿色无广告版'>一搜</a></td>
	  <td width='7%'><a href='http://www.zhongsou.com/third.cgi?w=domain:<?=$website?>' target='_blank'>中搜</a></td>
	  <td width='7%'><a href='http://search.panguso.com/pagesearch.htm?q=domain:<?=$website?>' target='_blank'>盘搜</a></td>
	  <td width='7%'><a href='http://www.jike.com/so?q=domain:<?=$website?>' target='_blank'>即刻</a></td>
    </tr>
  </table>
  <hr />
   <? 
     require('config/config.php');
     $conn=mysql_connect($host,$user,$password); //打开MySQL服务器连接 
     mysql_select_db($db);                       //链接数据库 
     mysql_query("set names utf8");            //解决中文乱码问题 
     $sql="select * from sitetotal where id =".$_GET['id']; //sql语句 
     $result=mysql_query($sql);                  //执行sql语句，返回结果 
	if( isset($_GET['page'])&&$_GET['page']=='site' ){
     while($rs=mysql_fetch_object($result))  
    { 
	  echo"
	<table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#EEF2F4'>
      <td width='14%'>$rs->daterank &nbsp;<b>收录：</b></td>
      <td width='7%'>$rs->baidu</td>
      <td width='7%'>$rs->qihoo</td>
      <td width='8%'>$rs->google</td>
      <td width='7%'>$rs->sogou</td>
      <td width='7%'>$rs->soso</td>
      <td width='7%'>$rs->youdao</td>
	  <td width='7%'>$rs->bing</td>
	  <td width='7%'>$rs->yisou</td>
	  <td width='7%'>$rs->zhongsou</td>
	  <td width='7%'>$rs->panguso</td>
	  <td width='7%'>$rs->jike</td>
    </tr>
  </table>"; 
	}
	}elseif( isset($_GET['page'])&&$_GET['page']=='domain' ){
     $sql2="select * from domaintotal where id =".$_GET['id']; //sql语句 
     $result2=mysql_query($sql2);                  //执行sql语句，返回结果 
     while($rs=mysql_fetch_object($result2))  
    { 
	  echo"
	<table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#EEF2F4'>
      <td width='14%'>$rs->daterank &nbsp;<b>收录：</b></td>
      <td width='7%'>$rs->baidu</td>
      <td width='7%'>$rs->qihoo</td>
      <td width='8%'>$rs->google</td>
      <td width='7%'>$rs->sogou</td>
      <td width='7%'>$rs->soso</td>
      <td width='7%'>$rs->youdao</td>
	  <td width='7%'>$rs->bing</td>
	  <td width='7%'>$rs->yisou</td>
	  <td width='7%'>$rs->zhongsou</td>
	  <td width='7%'>$rs->panguso</td>
	  <td width='7%'>$rs->jike</td>
    </tr>
  </table>"; 
    }	
	}
	else{
	     while($rs=mysql_fetch_object($result))  
    { 
	  echo"
	<table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#EEF2F4'>
      <td width='14%'>$rs->daterank &nbsp;<b>收录：</b></td>
      <td width='7%'>$rs->baidu</td>
      <td width='7%'>$rs->qihoo</td>
      <td width='8%'>$rs->google</td>
      <td width='7%'>$rs->sogou</td>
      <td width='7%'>$rs->soso</td>
      <td width='7%'>$rs->youdao</td>
	  <td width='7%'>$rs->bing</td>
	  <td width='7%'>$rs->yisou</td>
	  <td width='7%'>$rs->zhongsou</td>
	  <td width='7%'>$rs->panguso</td>
	  <td width='7%'>$rs->jike</td>
    </tr>
  </table>"; 
    }
	echo "<hr>";
     $sql2="select * from domaintotal where id =".$_GET['id']; //sql语句 
     $result2=mysql_query($sql2);                  //执行sql语句，返回结果 
     while($rs=mysql_fetch_object($result2))  
    { 
	  echo"
	<table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#EEF2F4'>
      <td width='14%'>$rs->daterank &nbsp;<b>收录：</b></td>
      <td width='7%'>$rs->baidu</td>
      <td width='7%'>$rs->qihoo</td>
      <td width='8%'>$rs->google</td>
      <td width='7%'>$rs->sogou</td>
      <td width='7%'>$rs->soso</td>
      <td width='7%'>$rs->youdao</td>
	  <td width='7%'>$rs->bing</td>
	  <td width='7%'>$rs->yisou</td>
	  <td width='7%'>$rs->zhongsou</td>
	  <td width='7%'>$rs->panguso</td>
	  <td width='7%'>$rs->jike</td>
    </tr>
  </table>"; 
    }
	} 
       mysql_close();
  ?>
  </td>
</tr>
</table>
<a href='sitetotal.php?id=<?=$id?>'>加入收录</a>&nbsp;&nbsp;<a href='domaintotal.php?id=<?=$id?>'>加入反链</a> 
</div>
<div id="footer" >
<?php
     include('foot.php');
?>
<br />
</div>
</body>
</html>
