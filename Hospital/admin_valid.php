<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>admin_valid</title>
</head>

<body bgcolor="#99FFFF">
<?php
session_start();{
$con=mysql_connect("localhost","root");
session_start();
$type=$_POST['type'];
$username=$_POST['admin'];
$password=$_POST['password'];
$con=mysql_connect("localhost","root");
mysql_select_db("healthcare",$con);
if($type=='admin')
{
 $count=mysql_num_rows(mysql_query("select * from admin where email='$username' and password='$password' ",$con));
 if($count==1)
 {
  $_SESSION['views']=1;
  header("location:homeadmin.html");
 }
 else
 {
   header("location:admin.html");
 }
}
else
{
  if($type=='doctor')
  {
    $count=mysql_num_rows(mysql_query("select * from doctor where email='$username' and password='$password' ",$con));
     if($count==1)
     {
	   
	   $_SESSION['views']=1;
	   $_SESSION["username"] =$username;
       $_SESSION["logged"] = true;
       header("location:doctorhome.php");
     }
     else
     {
	  $_SESSION["logged"] = false;
      header("location:admin.html");
     }
  }
  else
  {
    echo "Admin type not matched";
  }
 }
} 
?>
</body>
</html>
