<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>admin_valid</title>
</head>

<body bgcolor="#99FFFF">
<?php
$con=mysql_connect("localhost","root");
$username=$_POST['user'];
$password=$_POST['password'];
$con=mysql_connect("localhost","root");
mysql_select_db("healthcare",$con);
$count=mysql_num_rows(mysql_query("select * from patient where name='$username' and password='$password' ",$con));
if($count==1)
{
 header("location:userhome.html");

}
else
{
   header("location:login.html");
}
?>
</body>
</html>
