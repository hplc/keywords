<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>综合搜索 - 翰烽SEO关键词管理系统</title>
<link href="sou.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
td, body, input {
	font-size:12px
}
a:link {
	color:#000000;
	text-decoration:none
}
a:visited {
	color:#000000;
	text-decoration:none
}
a:active {
	color:blue;
	text-decoration:none
}
a:hover {
	color:red;
	text-decoration:underline
}
.so {
	font-size:12px;
	background-color:#cccccc;
	border-left:1px ridge #ffffff;
	border-right-style:ridge;
	border-right-width:1px;
	border-top:1px ridge #ffffff;
	border-bottom-style:ridge;
	border-bottom-width:1px
}
-->
</style>
<script language="JavaScript" src="./jquery.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">
$(function(){
	$('#search-btn').click(
		function(){goto();}
	);	
	document.onkeydown = function(e){
		var ev = document.all ? window.event : e;
		if(ev.keyCode==13) {
			goto();
			
			return false;
		}
	} 
});
function goto(){
	var search_content = encodeURIComponent($('#search_content').val());
	if(!search_content)return false;
	$("input[name='s_name']").each(function(){
		var self = $(this); 
		if(self.attr('checked')){
			var url=self.val();
			url = url+search_content;
			<!--window.location.href=url; -->
			window.open(url,'target');
		}
	});
		return false;	
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
      <a id="setHomepage" class="item-tab" onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('http://026k.com/so.php');" href="#">设为首页</a>&nbsp;&nbsp;<a id="setHomepage" class="item-tab" href="javascript:window.external.AddFavorite('http://026k.com/so.php','综合搜索')">收藏本站</a>
      </li>
    </ul>
  </div>
</div>
<div id="body-content">
  <div class="wrapper">
    <div class="so-logo"><img src="images/sou_logo.jpg" alt="综合搜索" /></div>
    <div align="center" id="search-wrap">
      <form id="form1" name="form1" target="_blank">
          <div class="input-bg">
            <input id="search_content" class="input-txt" type="text" name="" size="38" onmouseover="this.focus()"  onfocus="this.focus()" />
          </div>
          <input id="search-btn" type="button" style="font-size: 12px" value="搜索" />
          </p>
      </form>
    </div>
    <div align="center" id="search-wrap">
      <table width="720" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="24" height="25"><input id="s1" name="s_name" checked="checked" type="radio" value="http://www.so.com/s?q=" />
          <br />
            <label for="s1">360</label></td>
          <td width="24" height="25"><input id="s2" name="s_name" type="radio" value="http://www.baidu.com/s?wd=" />
          <br />
            <label for="s2">百度</label></td>
          <td width="24" height="25"><input id="s3" name="s_name" type="radio" value="http://www.google.com.hk/search?q=" />
          <br />
            <label for="s3">谷歌</label></td>
          <td width="24" height="25"><input id="s4" name="s_name" type="radio" value="http://www.sogou.com/web?query=" />
          <br />
            <label for="s4">搜狗</label></td>
          <td width="24" height="25"><input id="s5" name="s_name" type="radio" value="http://www.soso.com/q?w=" />
          <br />
            <label for="s5">搜搜</label></td>
          <td width="24" height="25"><input id="s6" name="s_name" type="radio" value="http://www.youdao.com/search?q=" />
          <br />
            <label for="s6">有道</label></td>
          <td width="24" height="25"><input id="s7" name="s_name" type="radio" value="http://cn.bing.com/search?q=" />
          <br />
            <label for="s7">必应</label></td>
          <td width="24" height="25"><input id="s8" name="s_name" type="radio" value="http://www.yisou.com/s?q=" />
          <br />
            <label for="s8">雅虎</label></td>
          <td width="24" height="25"><input id="s9" name="s_name" type="radio" value="http://www.jike.com/so?q=" />
          <br />
            <label for="s9">即刻</label></td>
          <td width="24" height="25"><input id="s10" name="s_name" type="radio" value="http://search.panguso.com/pagesearch.htm?q=" />
          <br />
            <label for="s10">盘搜</label></td>
          <td width="24" height="25"><input id="s11" name="s_name" type="radio" value="http://www.zhongsou.com/third.cgi?w=" />
          <br />
            <label for="s11">中搜</label></td>            
        </tr>
      </table>
    </div>
  </div>
</div>
<div id="footer">
<?php
     include('foot.php');
?>
<br />
</div>
</body>
</html>
