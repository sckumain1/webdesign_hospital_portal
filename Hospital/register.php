<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>register</title>
</head>
<body bgcolor="#99FFFF">
<?php
$con=mysql_connect("localhost","root");
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];
$value=0;
$check=0;
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("healthcare", $con);

if(strlen($id)>0)
{
  if(strlen($name)>0)
  {
    if(strlen($age)>0)
	{
	  if(strlen($gender)>0)
	  {
	    if(strlen($mobile)>0)
		{
		  if(strlen($password)>0)
		  {
		   if(strlen($email)>0)
		   {
		     if(strlen($address)>0)
			 {
			   $value=1;
			 }
			}
		   }
		  }
		 }
		}
	}
}
if($value==1)
{
  $count=mysql_num_rows(mysql_query("select * from visitors where id='$id' and name='$name' ",$con));
   if($count==1)
   { 
    $sql="INSERT INTO patient(id,name,age,gender,mobile,password,email,address) VALUES
      ('$id','$name','$age','$gender','$mobile','$password','$email','$address')";
      if (!mysql_query($sql,$con))
      {
         die('Error: ' . mysql_error());
      }
     echo " you are resigstered sucessfully";  
   }
   else
   {
      echo "Entered Id and Name not Matched.&nbsp;If You Are New Visitor Please Contact Our Hospital Administration and Get One Time Registration  Id.&nbsp;If You Are Registerd Visitor Please Try Again With Correct Information." ;   
 }
}
else
{
    echo "All Fields Are Required To Be Filled.&nbsp;&nbsp;&nbsp;Please Try Again";
}
  

 

mysql_close($con) 
?>
</body>
</html>
