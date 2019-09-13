<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database

$db = mysql_connect("localhost", "price05_price05", "RCT6DVoP");
mysql_select_db("price05_barrypricecom",$db);

$id    = $_GET['id'];
$query = "SELECT name, type, size, content " .
         "FROM upload WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;

exit;
}

?>
<? 
$db = mysql_connect("localhost", "price05_price05", "RCT6DVoP");
mysql_select_db("price05_barrypricecom",$db);

$query  = "SELECT id, name FROM upload"; 
$result = mysql_query($query) or die('Error, query failed'); 
if(mysql_num_rows($result) == 0){ 
    echo "Database is empty <br>"; 
}else{ 
    while(list($id, $name) = mysql_fetch_array($result)){ 
		        
    } 
} 
?> 