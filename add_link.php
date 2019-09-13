<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
</head>

<body>

<?php

//This gets all the other information from the form 
$link=$_POST['link']; 
$description=$_POST['description']; 

//Connect To Database
$hostname='localhost';
$username='price05_price05';
$password='RCT6DVoP';
$dbname='price05_barrypricecom';
$usertable='links';

$con = mysql_connect($hostname,$username, $password);
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $con);

mysql_query("INSERT INTO links (link,description) VALUES ('$link','$description')");

mysql_close($con);

echo "<meta http-equiv='refresh' content='0;URL=edit_links.php'>"; 
				 
?>

</body>
</html>
