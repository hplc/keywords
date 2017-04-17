<?php
 session_start();
 if($_SESSION['admin']=="OK")
 {
	include('config/websitesviewsql.php');
	include('config/websitesview.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更新“<?=$website?>”的反链情况</title>
<link href="sou.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function check_message(){
		if(window.document.leavemsg.baidu.value==""){
			alert("请填写百度数据");
			document.leavemsg.baidu.focus();
			return false;}
			if(document.leavemsg.qihoo.value==""){
			alert("请填写360搜索数据");
			document.leavemsg.qihoo.focus();
			return false;}
			if(document.leavemsg.google.value==""){
			alert("请填写谷歌数据");
			document.leavemsg.google.focus();
			return false;}
			if(document.leavemsg.sogou.value==""){
			alert("请填写搜狗数据");
			document.leavemsg.sogou.focus();
			return false;}
			if(document.leavemsg.soso.value==""){
			alert("请填写搜搜数据");
			document.leavemsg.soso.focus();
			return false;}
			if(document.leavemsg.youdao.value==""){
			alert("请填写有道数据");
			document.leavemsg.youdao.focus();
			return false;}
			if(document.leavemsg.bing.value==""){
			alert("请填写必应数据");
			document.leavemsg.bing.focus();
			return false;}
			if(document.leavemsg.yisou.value==""){
			alert("请填写一搜数据");
			document.leavemsg.yisou.focus();
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
      <a id="setHomepage" class="item-tab" onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage(#');" href="#">设为首页</a>&nbsp;&nbsp;<a id="setHomepage" class="item-tab" href="javascript:window.external.AddFavorite('#','关键词系统')">收藏本站</a>
      </li>
    </ul>
  </div>
</div>
<div align="center">
<p class="title" id="title">更新<font color="#FF0000"><a href='websites.php?id=<?=$id?>'><?=$website?></a></font>的反链情况</p><br />
<form action="updomaintotal.php" method="post" name="leavemsg" id="leavemsg"> 
<table width='60%' id='cow' cellspacing='0' cellpadding='0'>
  <tr>
    <td valign='top'>
   <table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#DBE6F5'>
      <td width='9%'><b>日期</b></td>
      <td width='7%'><a href='http://www.baidu.com/baidu?word=domain:<?=$website?>' target='_blank'>百度</a></td>
      <td width='7%'><a href='http://www.so.com/s?q=domain:<?=$website?> ' target='_blank'>360搜索</a></td>
      <td width='7%'><a href='http://www.google.com.hk/search?q=domain:<?=$website?>' target='_blank'>谷歌</a></td>
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
   <table width='100%' cellspacing='1' cellpadding='2'>	
    <tr align='left' bgcolor='#EEF2F4'>
      <td width='9%'><input name="daterank" type="text" value="<?php echo $showtime=date('Y-m-d');?>" size="10" maxlength="10" /></td>
      <td width='7%'><input name="baidu" type="text" size="5" maxlength="5" /></td>
      <td width='7%'><input name="qihoo" type="text" size="5" maxlength="5" /></td>
      <td width='7%'><input name="google" type="text" size="5" maxlength="5" /></td>
      <td width='7%'><input name="sogou" type="text" size="5" maxlength="5" /></td>
      <td width='7%'><input name="soso" type="text" size="5" maxlength="5" /></td>
      <td width='7%'><input name="youdao" type="text" size="5" maxlength="5" /></td>
	  <td width='7%'><input name="bing" type="text" size="5" maxlength="5" /></td>
	  <td width='7%'><input name="yisou" type="text" size="5" maxlength="5" /></td>
	  <td width='7%'><input name="zhongsou" type="text" size="5" maxlength="5" /></td>
	  <td width='7%'><input name="panguso" type="text" size="5" maxlength="5" /></td>
	  <td width='7%'><input name="jike" type="text" size="5" maxlength="5" /></td>
    </tr>  
  </table>  
  </td>
  </tr>
</table>
	<input name="id" type="hidden" value="<?=$id?>"  /> 
	<input name="submit" type="submit" value=" 添加 " onclick="return check_message()"/>
	<input name="reset" type="reset" value=" 清空 " />
	</form> 
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