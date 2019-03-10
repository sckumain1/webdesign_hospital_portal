<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>HOSPITAL PORTAL </title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="header">
<div id="logo">
	 <h1><a href="#"> <b>Hospital Portal </b></a></h1>
	<br>
	<br>
</div>
<br>
<marquee> <h3 style="background-color:#CC3399"> <U>*** WELCOME IN OUR HOSPITAL***</U></h3></marquee>
</div>
<center>
<!---------------------------------------------display current date-------------------------------->
<h2>
<font color="#000099">
<script type="text/javascript">
var m_names = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
var d = new Date();
var curr_date = d.getDate();
var curr_month = d.getMonth();
var curr_year = d.getFullYear();
document.write(curr_date + "-" + m_names[curr_month] + "-" + curr_year);
</script>
</FONT>
</h2>
</center>

    <!--                  BUTTONS ---------------------------------------------->
 <a href="doctorhome.php"><BUTTON >DOCTORS HOME </BUTTON> </a>
 <a href="show_doctors_detail.php" ><BUTTON >VIEW DOCTOR</BUTTON> </a>
 <a href="shop_detail.php"> <button>VIEW MEDICAL SHOP</button></a>
 <a href="time.html"> <button>DEPARTMENT TIMING</button></a>
 <a href="admin.html"><BUTTON>LOG OUT</BUTTON></a>
 <br/>
 
<?php
session_start(); {
$con=mysql_connect("localhost","root");
mysql_select_db("healthcare",$con);
if($_SESSION['logged'] == true){
$mail=$_SESSION["username"];
$result = mysql_query("SELECT * FROM doctor where email='$mail'");
$row = mysql_fetch_array($result);
$dname=$row['name'];
echo "welcome"."  ".$row['name'];

$result = mysql_query("SELECT * FROM appointment where doctor='$dname'");

echo "<table border='1' bgcolor='#ffffff' width='100%'>
<tr>
<th>patient name</th>
<th>date</th>
<th>schedule</th>
</tr>";

echo "<br/>";
echo "<br/>";
echo "Patient list";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['about'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

}
} 
?>
</body>
</html>