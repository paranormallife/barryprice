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

$con = mysql_connect($hostname,$username, $password);
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db($dbname, $con);

$ud_id=$_POST["ud_id"];
$ud_clientname=$_POST['ud_clientname']; 
$ud_timeadded= date('m/d/Y H:i:s');

$query="UPDATE clients SET clientname='$ud_clientname',timeadded='$ud_timeadded' WHERE id='$ud_id'";
mysql_query($query);
//echo "Record Updated";

//mysql_query("UPDATE available SET bedbath='$ud_bedbath',sqft='$ud_sqft',price='$ud_price',charges='$ud_charges',taxes='$ud_taxes',unit='$ud_unit' WHERE id='$ud_id'"); 
echo "<meta http-equiv='refresh' content='0;URL=edit_client.php'>"; 

mysql_close($con);

?>
</body>
</html>
