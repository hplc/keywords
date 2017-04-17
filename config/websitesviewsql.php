<?php
	 include('conn.php');
	 $sql="select * from websites ORDER BY id DESC ";   
	 $result=mysql_query($sql);                  //执行sql语句，返回结果
?>