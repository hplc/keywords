<?
session_start();
 if($_SESSION['admin']=="OK")
 {
  require('../config/conn.php');
  $exec="select * from keywords where id=".$_GET['id'];  
  $result=mysql_query($exec);
  $rs=mysql_fetch_object($result);
  $keyword=$rs->keyword;
  $id=$rs->id;
  $time=$rs->time;
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关键词修改：<?=$keyword?> - 关键词管理系统</title> 
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
<p class="title" id="title">关键词修改：<?=$keyword?></p>
<p class="footer" id="footer">添加时间：<?=$time?></p>
    <?php
     include('header.php');
	?>
   	<table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#EEF2F4'>
      <td>&nbsp;</td>
   </tr>
   </table>
		  <form action="upkeyword.php" method="post" style="background-color:#EEF2F4; width:60%; " >
		  <input type="hidden" name="id" value="<?=$id?>" />
		  <b>关键词：</b>
	  <input name="upkeyword" type="text" value="<?=$keyword?>" size="50" maxlength="50" />
	  <input name="submit" type="submit" value="修改" />
	  <input name="reset" type="reset" value="重置" />&nbsp;
	  <input type="button" value="删除" onclick="location.href='delete.php?id=<?=$id?>'", "0");/>
</form>
</div>
<div id="footer" >
<?php
       include('foot.php');
 }else{  
	header("location:login.php");
 }
 mysql_close();
?>
</div>
</body>
</html>
