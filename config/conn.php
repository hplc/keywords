<? 
     require('config.php');
     $conn=mysql_connect($host,$user,$password); //打开MySQL服务器连接 
     mysql_select_db($db);                       //链接数据库 
     mysql_query("set names utf8");            //解决中文乱码问题
?>