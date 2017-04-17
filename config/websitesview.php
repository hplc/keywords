<?
  $exec="select * from websites where id=".$_GET['id'];  
  $result=mysql_query($exec);
  $rs=mysql_fetch_object($result);
  $id=$rs->id;
  $website=$rs->website;
  $time=$rs->time;
?>