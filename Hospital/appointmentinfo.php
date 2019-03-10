<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>doctors</title>
</head>

<body bgcolor="#00FFFF">
<?php
$con = mysql_connect("localhost","root");
$name=$_POST['name'];
$date=$_POST['date'];
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("healthcare", $con);

$result = mysql_query("SELECT * FROM appointment where name='$name' and date='$date'");
$count=mysql_num_rows($result);
if($count>0)
{
 echo "<table border='1' bgcolor='#ff33ff' width='100%'>
<tr>
<th>doctor</th>
<th>about</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['doctor'] . "</td>";
  echo "<td>" . $row['about'] . "</td>";
 echo "</tr>";
  }
echo "</table>";
}
else
{
  echo "Record Not Found";
} 
mysql_close($con);
?>
</body>
</html>
