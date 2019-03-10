<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>doctors</title>
</head>

<body bgcolor="#00FFFF">
<?php
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("healthcare", $con);

$result = mysql_query("SELECT * FROM doctor");

echo "<table border='1' bgcolor='#ff33ff' width='100%'>
<tr>
<th >id</th>
<th>name</th>
<th>age</th>
<th>mobile</th>
<th>password</th>
<th>email</th>
<th>specialization</th>
</tr>";

echo "OUR DOCTORS";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['mobile'] . "</td>";
 echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
 echo "<td>" . $row['specialization'] . "</td>";

   
  echo "</tr>";
  }
echo "</table>";
$count=mysql_num_rows(mysql_query("select * from doctor"));
echo "<br>"."TOTAL REGISTERED DOCTOR="." ".$count;

mysql_close($con);
?>
</body>
</html>
