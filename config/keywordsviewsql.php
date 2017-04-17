<?php
     include('conn.php');
     $sql="select * from keywords ORDER BY id DESC ";   
     $result=mysql_query($sql);                  //执行sql语句，返回结果
?>