<? 
  session_start();
  $admin_name=htmlspecialchars($_POST['admin_name'],ENT_QUOTES);
  $passwords=sha1($_POST['password']);
  include('../config/conn.php');
  $exec="select `password` from `users` where `adminname`='".$admin_name."'";
  $result=mysql_query($exec);
  $num=mysql_num_rows($result);
   if ($rs=@mysql_fetch_object($result))
    { 
		if ($rs->password==$passwords)
       {
			$_SESSION['admin']="OK";
			$_SESSION['user']=$admin_name;
            echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><script language='javaScript'>alert('登陆成功，正在进入后台……');window.location.href='index.php';</script>";
        }
      else echo"<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><meta http-equiv='refresh' content='1;URL=login.php'>
   <div align='center'><br><br><br>
<div style=‘color:#FF0000’><b><span style='float:center; text-align:center;color:#FF0000;'>密码不正确,正在返回……</span></b></div>
</div>";
    }
   else{
   echo"
   <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><meta http-equiv='refresh' content='1;URL=login.php'>
   <div align='center'><br><br><br>
<div style=‘color:#FF0000’><b><span style='float:center; text-align:center;color:#FF0000;'>用户名不正确,正在返回……</span></b></div>
</div>"; 
   }
   mysql_close();
?>
