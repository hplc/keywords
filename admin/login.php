<?
	session_start();
	include('../config/conn.php');
	$_SESSION['admin']=isset($_SESSION['admin'])?$_SESSION['admin']:'';
	if($_SESSION['admin']=="OK")
	 {  
		 echo"<script language='javaScript'>window.location.href='index.php';</script>";
	 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关键词管理系统</title>
<meta name="Keywords" content="翰烽网络,免费论坛,免费PHP空间,留言板,失物招领系统,PHP留言板" />
<meta name="Description" content="翰烽网络(HanFeng Net)是一个网站制作工作室，有翰烽失物招领留言板、翰烽关键词管理系统等作品。" />
<meta name="copyright" content="2009-2012 HanFengNet Inc." />
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript">
function check_message(){
		if(window.document.leavemsg.admin_name.value==""){
			alert("请填写帐号");
			document.leavemsg.admin_name.focus();
			return false;}
			if(document.leavemsg.password.value==""){
			alert("请填写密码.");
			document.leavemsg.password.focus();
			return false;}
		}
</script>
<style type="text/css">
* { font-family: verdana; font-size: 10pt; COLOR: gray; }
b { font-weight: bold; }
table { border: 1px solid gray;}
td { text-align: center; padding: 25;}
#title {font-size: 18px;font-weight:bold;text-decoration:none;color:#007eb5;}
</style>

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body style="text-align:center">

	</br></br></br></br>
	<p class='title' id='title'>关键词管理系统</p>
	</br></br>
	<p><b>
	<form action='check.php' method='post' name='leavemsg' id='leavemsg'>
	  <div>
		 用户名：<input name='admin_name' type='text' maxlength='20' /></br>
		 密&nbsp;&nbsp;&nbsp;&nbsp;码：<input name='password' type='password' maxlength='20' />
	</br></br>
	<input name='submit' type='submit' value='提交' onclick='return check_message()'/>&nbsp;&nbsp;&nbsp;&nbsp;<input name='reset' type='reset' value='重置' />
	  </div>
	</form></b></p>
<?php
	include('foot.php');
?>
</body>
</html>



