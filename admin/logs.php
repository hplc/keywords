<?
session_start();
if($_SESSION['admin']=="OK")
 { 
include('../config/conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关键词管理</title> 
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
<p class="title" id="title">访问日志</p>
    <?php
     include('header.php'); 
	 include('listsql.php');

    $logs = file('/var/log/httpd/colomo.cn-access_log');
    $lines = array_reverse($logs);
    $amount = count($lines);

	 include('../page.php');

    $start = ($page-1)*$page_size;
    $end = $start + $page_size;
    // var_dump($logs);
    // var_dump(explode(' ', $lines[0]));

    echo "<table width='60%' cellspacing='1' cellpadding='2'>
            <tr bgcolor='#DBE6F5'>
                <th>序号</th>
                <th>时间</th>
                <th>用户名</th>
                <th>IP</th>
                <th>URL</th>
            </tr>";
    for ($i=$start;$i<$end;$i++) {
        $j = $i+1;
        if (! empty($lines[$i])) {
            $records = explode(' ', $lines[$i]);
        } else {
            continue;
        }

        // var_dump(substr(strtr($records[3], '2017:', '2017 '), 1));
        if (preg_match('/\/keywords\//', $records[6])) {
            $username = 'admin';
        } else {
            $username = '来宾';
        }
        $ip = $records[0];
        $url = $records[6];

        echo "<tr bgcolor='#DBE6F5'>
                <td>$j</td>
                <td>" . substr(strtr($records[3], '2017:', '2017 '), 1) . "</td>
                <td>$username</td>
                <td>$ip</td>
                <td>$url</td>
             </tr>";
    }


    echo "</table>";

/*
	 while($rs=mysql_fetch_object($result))  
    { 
	  echo "<table>  
    <tr bgcolor='#DBE6F5'>
      <td><span style='float:left; text-align:left' title='".$rs->keyword."'><b>关键词：<font color=blue>$rs->keyword</font></b></span><span style='float: right; text-align:right'><a href=modify.php?id=".$rs->id." title='修改 ".$rs->keyword."'>修改</a>&nbsp;&nbsp;&nbsp;<a href='delete.php?id=$rs->id' title='删除 ".$rs->keyword."'>删除</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>时间：</b>$rs->time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
   </tr>
   </table>  
";
    }
*/

	echo "
	<table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#EEF2F4'>
      <td>&nbsp;</td>
   </tr>
   </table>
	<table width='60%' cellspacing='1' cellpadding='2'>
    <tr bgcolor='#DBE6F5'>
      <td><span style='float:left; text-align:left'><font color=#666666>$page_string</font></span><span style='float:right; text-align:left'><font color=#666666>每页显示<b>$page_size</b>条，总共有&nbsp;<b>$amount</b>&nbsp;记录。<font></span></td>
   </tr>
   </table>
   <div id='footer'>
   ";
       include('foot.php');
       mysql_close();
 } else{  
	echo"<script language='javaScript'>window.location.href='login.php';</script>";
mysql_close();
 }
?>
</div>
</body>
</html>
