<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关键词搜索</title>
<meta name="copyright" content="2009-2012 HanFengNet Inc." />
<link rel="shortcut icon" href="favicon.ico" />
<!--<link href="sou.css" rel="stylesheet" type="text/css" />-->

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head> 
<body>
<div id="top-header">
  <div class="inner">
    <p class="search-tab">
    <?php
     include('head.php');
	?>
    </p>

<!--
    <ul class="user-toolbar" id="user-toolbar">
      <li class="item">
      <a id="setHomepage" class="item-tab" onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('http://026k.com');" href="#">设为首页</a>&nbsp;&nbsp;<a id="setHomepage" class="item-tab" href="javascript:window.external.AddFavorite('http://026k.com/','关键词系统')">收藏本站</a>
      </li>
    </ul>
-->

  </div>
</div>
<div align="center">
<p class="title" id="title">关键词搜索</p>
<p class="footer" id="footer">&nbsp;</p>
<form action='search.php' method='post'>
<input type='text' name='key' />
<input type='submit' value='搜索' />
</form>
<p class="footer" id="footer">&nbsp;</p>
<?php
	 include('config/conn.php');
error_reporting(E_ALL^E_NOTICE);
if ($_POST[key])
{
$key = explode(" ", $_POST[key]);//空格分隔
foreach($key as $mkey){  //历遍数组赋给$mkey
      }
$sql = "select * from keywords where keyword like '%$mkey%' ORDER BY id desc";//多关键字匹配
$query = mysql_query($sql);
//$row = mysql_fetch_array($query);
if(@mysql_num_rows($query)==0){
   echo "</br><center>没有搜索到相关内容</center>";
  }

while ($row = mysql_fetch_array($query))
{
    foreach($key as $mkey){
        $row["keyword"] = preg_replace("/$mkey/i", "<font color=red><b>\\0</b></font>",$row["keyword"]);
    }
?>
    <table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#DBE6F5'>
      <td><span style='float:left; text-align:left'><b>关键词：<font color="blue"><?= $row["keyword"] ?></font></b></span><span style='float: right; text-align:left' title='<?= $row["time"] ?>'><b>创建时间：</b><?= $row["time"] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
   </tr>
    </table>
<?php
}
}?>
</div>
<div id="footer" >
<?php
     include('foot.php');
?>
<br />
</div>
</body>
</html>
