<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加关键词</title>
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
<div id="body-content">
  <div class="wrapper">
  <div align="center" id="search-wrap">
  	<p class="title" id="title">添加关键词</p><br>
  <form action="upkeydata.php" method="post" name="leavemsg" id="leavemsg">
	  <b>关键词：</b>
	  <input name="keyword" type="text" size="50" maxlength="50" />
	  <input name="submit" type="submit" value="添加关键词" onclick="return check_message()"/>
	  <input name="reset" type="reset" value="清空关键词" />
  </form>
<!--
  <form action="upsitedata.php" method="post" name="leavemsg" id="leavemsg">
	  <b>网&nbsp&nbsp&nbsp&nbsp址：</b>
	  <input name="website" type="text" size="50" maxlength="50" />
	  <input name="submit" type="submit" value=" 添加网址 " onclick="return check_message()"/>
	  <input name="reset" type="reset" value=" 清空网址 " />
  </form>
  <br>
<p class="title" id="title">注册***@026k.com 邮箱</p>
<?php
		include('mail.html');
?>
-->
</div>
</div>
</div>
<div id="footer">
<?php
     include('foot.php');
?>
<br>
</div>
</body>
</html>
