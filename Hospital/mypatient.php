<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>visitors</title>
</head>

<body bgcolor="#99FFFF">
<?php
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("healthcare", $con);

$result = mysql_query("SELECT * FROM visitors");

echo "<table border='1' bgcolor='#ff33ff' width='100%'>
<tr>
<th>id</th>
<th>name</th>
</tr>";

echo "list of registered visitors";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
$count=mysql_num_rows(mysql_query("select * from visitors"));
echo "<br>"."TOTAL NUMBER OF VISITORS="." ".$count;

mysql_close($con);
?>
</body>
</html>
