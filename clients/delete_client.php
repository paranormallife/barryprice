<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//Connect To Database
$hostname='localhost';
$username='price05_price05';
$password='RCT6DVoP';
$dbname='price05_barrypricecom';
$usertable='clients';
$id=$_GET["id"];

$con = mysql_connect($hostname,$username, $password);
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $con);

if($_GET["cmd"]=="delete") { 
	$sql = "DELETE FROM clients WHERE id=$id"; 
	$result = mysql_query($sql); 
	echo "<meta http-equiv='refresh' content='0;URL=edit_client.php'>"; 
} 

if($_GET["cmd"]=="update") { 
	$bedbath=$_GET['bedbath']; 
	$sqft=$_GET['sqft']; 
	$price=$_GET['price']; 
	$charges=$_GET['charges'];
	$taxes=$_GET['taxes'];
	$unit=$_GET['unit'];
	$sql = "UPDATE clients WHERE id=$id SET (clientname,timeadded) VALUES ('$clientname','$timeadded')"; 
	$result = mysql_query($sql); 
	echo "<meta http-equiv='refresh' content='0;URL=client_edit.php'>"; 
} 

mysql_close($con);

?>
</body>
</html>
