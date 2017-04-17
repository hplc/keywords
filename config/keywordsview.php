<?
  $exec="select * from keywords where id=".$_GET['id'];  
  $result=mysql_query($exec);
  $rs=mysql_fetch_object($result);
  $id=$rs->id;
  $keyword=$rs->keyword;
  $time=$rs->time;
?>