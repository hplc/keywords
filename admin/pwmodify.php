<?php
 session_start();
 require('../config/conn.php');
 if($_SESSION['admin']=="OK")
 {
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网址修改 - 翰烽SEO关键词管理系统</title> 
<!--<link href="../sou.css" rel="stylesheet" type="text/css" />-->

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head> 
<body>
</br>
<div align="center">
<p class="title" id="title">密码修改</p>
    <?php
     include('header.php');
	?>
   	<table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#EEF2F4'>
      <td>&nbsp;</td>
   </tr>
   </table>
		  <form action="uppassword.php" method="post" style="background-color:#EEF2F4; width:60%; " >
		  <b>帐号：</b><span>
		  <?=$_SESSION['user'];?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		  <b>密码：</b>
	  <input name="password" type="password" size="16" maxlength="16" /><br/><br/>
	  <input name="submit" type="submit" value="修改" />&nbsp;&nbsp;
	  <input name="reset" type="reset" value="重置" />
</form>
</div>
<div id="footer" >
<?php
     include('foot.php');
 }else{  
	echo"<script language='javaScript'>window.location.href='login.php';</script>";
 }
 mysql_close();
?>
</div>
</body>
</html>
