<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Barry Price | Add Client Files</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
<!--
function confirmation(ID) {
	var answer = confirm("Delete entry ID: "+ID+" ?")
	if (answer){
		alert("Entry Deleted")
		window.location = "delete_link.php?cmd=delete&id="+ID;
	}
	else{
		alert("No action taken")
	}
}
//-->
</script>
</head>

<body bgcolor="#000000" bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">

<table width="900" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td width="900" height="54" valign="bottom"><a href="index.htm"><img src="images/logo_bp.gif" width="326" height="22" border="0"></a></td>
  </tr>
  <tr> 
    <td height="520" valign="top" class="bodyText"> 
	<br>
      <strong>Add Link:</strong>
      <br />
      
      <form action="add_link.php" method="post" enctype="multipart/form-data">
        <p align="right" style="width:600px;">  
        link (without http://): <input type="text" name="link"><br />
        description: 
        <textarea name="description" cols="40" rows=""></textarea>
        <br />
        <input type="submit" value="Add">
      	</p>
      </form>
      <hr />
      <?php
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
			
			$result = mysql_query("SELECT * FROM $usertable");

      echo "<table cellpadding='10' cellspacing='0' border='0' class='bodyText'>";
      echo "<tr><td style='background-color:#333333;'>ID</td><td style='background-color:#333333;'>link</td><td  style='background-color:#333333;'>description</td><td style='background-color:#333333;'></td></tr>";
			
      while($row = mysql_fetch_array($result)){
				echo "<tr><td align='center' style='border-bottom:1px solid #333333;'>" . $row['id'] . "</td>";
				?>
        <td align="center" style="border-bottom:1px solid #333333;"><a class="bodyTextLink" href="http://<? echo $row['link'] ?>" target="_blank"><? echo $row['link'] ?></a></td>
        <td align="center" style="border-bottom:1px solid #333333;"><? echo $row['description'] ?></td>
        <?
				echo "<td align='center' style='border-bottom:1px solid #333333;'><a class='bodyTextLink' href='javascript:confirmation(" . $row['id'] . ")'>Delete</a></td></tr>";
      }
      
      echo "</table>";
      
      mysql_close($con);
      ?>
     
	<br>
	
	</td>
  </tr>
  <tr>
    <td height="20" valign="middle"><a href="info.php" class="bodyTextLink">View info page</a></td>
  </tr>
</table>

</body>
</html>

