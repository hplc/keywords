<?
session_start();
 if($_SESSION['admin']=="OK")
 {
  require('../config/conn.php');
  $exec="select * from blogs where id=".$_GET['id'];  
  $result=mysql_query($exec);
  $rs=mysql_fetch_object($result);
  $title=$rs->title;
  $blog=$rs->blog;
  $id=$rs->id;
  $time=$rs->time;
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>日志修改：<?=$title?> - 翰烽SEO关键词管理系统</title> 
<link href="../sou.css" rel="stylesheet" type="text/css" />
</head> 
<body>
</br>
<div align="center">
<p class="title" id="title">日志修改：<?=$title?></p>
<p class="footer" id="footer">添加时间：<?=$time?></p>
    <?php
     include('header.php');
	?>
   	<table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#EEF2F4'>
      <td>&nbsp;</td>
   </tr>
   </table>
  <form action="upblogs.php" method="post" name="leavemsg" id="leavemsg" style="background-color:#EEF2F4; width:60%; " >
      <input type="hidden" name="id" value="<?=$id?>" />
	  <b>标题：</b><input name="title" value="<?=$title?>" type="text" size="50" maxlength="50" /><br />
	  <textarea name="blog" cols="100%" rows="10"><?=$blog?></textarea>
<br />
	  <input name="submit" type="submit" value="修改日志" onclick="return check_message()"/>
	  <input name="reset" type="reset" value="恢复日志" />&nbsp;
    <input type="button" value="删除日志" onclick="location.href='blogdelete.php?id=<?=$id?>'", "0");/>
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
