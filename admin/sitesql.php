<?php
	 require('../config/config.php');
     $conn=mysql_connect($host,$user,$password); //打开MySQL服务器连接
	 mysql_select_db($db);                       //链接数据库 
     mysql_query("set names utf8");            //解决中文乱码问题 
     $sql="select * from websites";           		 //sql语句 
     $result=mysql_query($sql);                  //执行sql语句，返回结果 
	 $amount  = mysql_num_rows($result);
	if( isset($_GET['page']) ){
	   $page = intval( $_GET['page'] );
	}
	else{
	   $page = 1;
	} 
	// 每页数量
	$page_size = 20;
	 mysql_select_db($db);                       //链接数据库 
     mysql_query("set names utf8");            //解决中文乱码问题 
     $sql="select * from websites ORDER BY id desc limit ". ($page-1)*$page_size .", $page_size";           		 //sql语句 
     $result=mysql_query($sql);                  //执行sql语句，返回结果 
	 ?>