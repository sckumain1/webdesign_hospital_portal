<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>admin_valid</title>
</head>

<body bgcolor="#99FFFF">
<?php
session_start();
session_destroy();
echo "You’ve been logged out. <a href='admin.html'>Click here</a> to return.";
?>
</body>
</html>
