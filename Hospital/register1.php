<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>register</title>
</head>
<body bgcolor="#99FFFF">
<?php
$con=mysql_connect("localhost","root");
$name=$_POST['name'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$email=$_POST['email'];
$specialization=$_POST['specialization'];
$gender=$_POST['gender'];
$value=0;
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("healthcare", $con);

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
		     if(strlen($specialization)>0)
			 {
			   $value=1;
			 }
			}
		   }
		  }
		 }
		}
	}

if($value==1)
{
  $sql="INSERT INTO doctor(name,age,mobile,password,email,specialization,gender) VALUES
      ('$name','$age','$mobile','$password','$email','$specialization','$gender')";
      if (!mysql_query($sql,$con))
      {
         die('Error: ' . mysql_error());
      }
     echo " you are resigstered sucessfully";  
  
   
}
else
{
    echo "All Fields Are Required To Be Filled.&nbsp;&nbsp;&nbsp;Please Try Again";
}
  

 

mysql_close($con) 
?>
</body>
</html>
