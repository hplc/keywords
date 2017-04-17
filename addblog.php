<?php
 session_start();
 require('config/conn.php');
 if($_SESSION['admin']=="OK")
 {
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加日志 - 翰烽SEO关键词管理系统</title>
<link href="sou.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function check_message(){
		if(window.document.leavemsg.title.value==""){
			alert("请填写标题");
			document.leavemsg.title.focus();
			return false;}
			if(document.leavemsg.blog.value==""){
			alert("请填写日志.");
			document.leavemsg.blog.focus();
			return false;}
		}
</script>
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
      <a id="setHomepage" class="item-tab" onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('#');" href="#">设为首页</a>&nbsp;&nbsp;<a id="setHomepage" class="item-tab" href="javascript:window.external.AddFavorite('#','关键词系统')">收藏本站</a>
      </li>
    </ul>
  </div>
</div>
<div id="body-content">
  <div class="wrapper">
  <div align="center" id="search-wrap">
  	<p class="title" id="title">添加日志</p><br />
  <form action="upblog.php" method="post" name="leavemsg" id="leavemsg">
	  <b>标题：</b>
	  <input name="title" type="text" size="50" maxlength="50" /><br />
	  <textarea name="blog" cols="100%" rows="10"></textarea>
	  <br />
	  <input name="submit" type="submit" value="添加日志" onclick="return check_message()"/>
	  <input name="reset" type="reset" value="重写日志" />
  </form>
</div>
</div>
</div>
<div id="footer">
<?php
     include('foot.php');
 }else{  
	echo"<script language='javaScript'>window.location.href='admin/login.php';</script>";
 }
 mysql_close();
?>
<br />
</div>
</body>
</html>
