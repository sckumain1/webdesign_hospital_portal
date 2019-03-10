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
$doctor=$_POST['doctor'];
$date=$_POST['date'];
$about=$_POST['about'];
$value=0;
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("healthcare", $con);

  if(strlen($name)>0)
  {
    if(strlen($doctor)>0)
	{
	  if(strlen($date)>0)
	  {
	    if(strlen($about)>0)
		{
			   $value=1;
		}
	  }
     }
   }
if($value==1)
{
  $sql="INSERT INTO appointment(name,doctor,date,about) VALUES
      ('$name','$doctor','$date','$about')";
      if (!mysql_query($sql,$con))
      {
         die('Error: ' . mysql_error());
      }
     echo "Appointment Fixed";  
  
   
}
else
{
    echo "All Fields Are Required To Be Filled.&nbsp;&nbsp;&nbsp;Please Try Again&nbsp &nbsp;";
}
mysql_close($con) 
?>
<a href="appointment.html">click here</a>
</body>
</html>
