<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站长工具 - 翰烽SEO关键词管理系统</title>
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
      <a id="setHomepage" class="item-tab" onclick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('http://026k.com');" href="#">设为首页</a>&nbsp;&nbsp;<a id="setHomepage" class="item-tab" href="javascript:window.external.AddFavorite('http://026k.com/','关键词系统')">收藏本站</a>
      </li>
    </ul>
  </div>
</div>
<div id="body-content">
  <div class="wrapper">
  <div align="center" id="search-wrap">
  	<p class="title" id="title">站长工具</p><br />
    <!--http://www.baidu.com/baidu?tn=baidu&word=AAAAA -->
    <form action="http://www.baidu.com/baidu" target="_blank">
    <table bgcolor="#FFFFFF"><tr><td>
    <input name="tn" type="hidden" value="baidu" />
    <a href="http://www.baidu.com/" target="_blank"><img src="http://img.baidu.com/img/logo-80px.gif" alt="Baidu" align="bottom" border="0" /></a>
    <input type="text" name="word" size="30" />
    <input type="submit" value=" 百度搜索 " />
    </td></tr></table>
    </form>
<!--
    <form action="" target="_blank">
    <table bgcolor="#FFFFFF"><tr><td>
    <input name=v type=hidden value=3>
    <a href="/" target="_blank"></a>
    <input type=text name= size=30>
    <input type="submit" value=" ">
    </td></tr></table>
    </form>
-->    <br />
    <!--http://sighttp.qq.com/msgrd?v=3&uin=BBBBB -->
    <form action="http://sighttp.qq.com/msgrd" target="_blank">
    <table bgcolor="#FFFFFF"><tr><td>
    <input name="v" type="hidden" value="3" />
    <a href="http://wp.qq.com/" target="_blank"><img src="http://wp.qq.com/images/style_41.jpg" alt="QQmsg" align="bottom" border="0" /></a>
    <input type="text" name="uin" size="30" value="1005043848" onfocus='if(this.value == &quot;1005043848&quot;){this.value = &quot;&quot;}' onblur='if(this.value == &quot;&quot;){this.value = &quot;1005043848&quot;}' />
    <input type="submit" value=" QQ会话 " />
    </td></tr></table>
    </form><br />
    <!--http://ip138.com/ips138.asp?ip=CCCCC -->
    <form action="http://ip138.com/ips138.asp" target="_blank">
    <table bgcolor="#FFFFFF"><tr><td>
    <a href="http://ip138.com/" target="_blank">IP归属地查询</a>
    <input type="text" name="ip" size="30" />
    <input type="submit" value=" IP归属地 " />
    </td></tr></table>
    </form><br />
    <!--http://seo.chinaz.com/?host=AAAAA-->
    <form action="http://seo.chinaz.com/" target="_blank">
    <table bgcolor="#FFFFFF"><tr><td>
    <a href="http://seo.chinaz.com/" target="_blank">SEO查询</a>
    <input type="text" name="host" size="30" />
    <input type="submit" value=" SEO查询 " />
    </td></tr></table>
    </form><br />
	<!--http://whois.linkhelper.cn/whois.asp?domain=AAAAA -->
    <form action="http://whois.linkhelper.cn/whois.asp" target="_blank">
    <table bgcolor="#FFFFFF"><tr><td>
    <a href="http://www.linkhelper.cn/" target="_blank">域名Whois查询</a>
    <input type="text" name="domain" size="30" />
    <input type="submit" value=" 域名查询 " />
    </td></tr></table>
    </form><br />
    <!--http://sycm.china.alibaba.com/datahouse/offerrank/rankingDetails.htm?offerId=产品序号&keyword=关键词 -->
    <form action="http://sycm.china.alibaba.com/datahouse/offerrank/rankingDetails.htm"  accept-charset="GBK"  onsubmit="document.charset='GBK'" target="_blank">
    <table bgcolor="#FFFFFF"><tr><td>
    
    <input name="offerId" type="text" size="10" maxlength="10" value="产品序号" onfocus='if(this.value == &quot;产品序号&quot;){this.value = &quot;&quot;}' onblur='if(this.value == &quot;&quot;){this.value = &quot;产品序号&quot;}' />
    <input type="text" name="keyword" size="30" value="关键词" onfocus='if(this.value == &quot;关键词&quot;){this.value = &quot;&quot;}' onblur='if(this.value == &quot;&quot;){this.value = &quot;关键词&quot;}' />
    <input type="submit" value=" 阿里产品排名 " />
    </td></tr></table>
    </form><br />
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
