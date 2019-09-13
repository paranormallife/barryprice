<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Barry Price | Delete files</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/main.css" rel="stylesheet" type="text/css">
<script>
function goTo(url) {
	if (confirm("Are you sure you want to delete this entry?"))
		document.location.href = url;
	}
</script>
</head>

<body bgcolor="#000000" bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">

<table width="800" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td width="800" height="54" valign="bottom"><a href="index.htm"><img src="images/logo_bp.gif" width="326" height="22" border="0"></a></td>
  </tr>
  <tr> 
    <td height="520" valign="top" background="images/info_back.jpg" class="bodyText"> 
	<br>
      <p class="bodyHead">Delete files by clicking &quot;Delete&quot; below</p>
      <?php
		$db = mysql_connect("localhost", "price05_price05", "RCT6DVoP");
		mysql_select_db("price05_barrypricecom",$db);
		
		$command = "SELECT * FROM upload";
		$q = mysql_query($command);
		$totalrows = mysql_num_rows($q);
		
		$result = mysql_query("SELECT * FROM upload",$db);
		
		/* make sure data was retrieved */
		$numrows = mysql_num_rows($result);
		if ($numrows == 0) {
			echo "&nbsp;No data to display!";
			exit;
		}
		
		$row = mysql_fetch_assoc ($result);

		echo "<table border=0 cellpadding=0 cellspacing=0 class=bodyTextLink>\n";
		
		if(!isset($cmd)) {
		
			if($numrows == 1){
				$myrow = mysql_fetch_row($result);
				mysql_data_seek ($result, 0);
				$r=mysql_fetch_array($result);
				$id=$r["id"];//take out the id
				$name=$r["name"];
				$type=$r["type"];
				$size=$r["size"];
				$content=$r["content"];
				
				//make the title a link
				echo "<tr class='bodyTextLink'><td>$name</td><td>&nbsp;-&nbsp;<a href='edit.php?cmd=delete&id=$id' onclick='goTo(this.href); return false' class='bodyTextLink'>Delete</a></td></tr>";	
			}else{						
			   //run the while loop that grabs all the news scripts
			   
			   while ($row = mysql_fetch_assoc ($result)) {
				   mysql_data_seek ($result, 0);
				   while($r=mysql_fetch_array($result)) { 
				$id=$r["id"];//take out the id
				$name=$r["name"];
				$type=$r["type"];
				$size=$r["size"];
				$content=$r["content"];
				
					 //make the title a link
				echo "<tr class='bodyTextLink'><td>$name</td><td>&nbsp;-&nbsp;<a href='edit.php?cmd=delete&id=$id' onclick='goTo(this.href); return false' class='bodyTextLink'>Delete</a></td></tr>";	
					}
				}
			}
		}
				
		if($cmd=="delete"){
			$sql = "DELETE FROM upload WHERE id=$id";
			$result = mysql_query($sql);
			//display all
			$result = mysql_query("SELECT * FROM upload",$db);
		   	//run the while loop that grabs all the news scripts
		   	while ($row = mysql_fetch_assoc ($result)) {
		   	   mysql_data_seek ($result, 0);
			   while($r=mysql_fetch_array($result)) { 
				$id=$r["id"];//take out the id
				$name=$r["name"];
				$type=$r["type"];
				$size=$r["size"];
				$content=$r["content"];
				
				 //make the title a link
				echo "<tr class='bodyTextLink'><td>$name</td><td>&nbsp;-&nbsp;<a href='edit.php?cmd=delete&id=$id' onclick='goTo(this.href); return false' class='bodyTextLink'>Delete</a></td></tr>";	
	
				}
			}					
		}
		echo "</table\n";

	?>
	<br>
	<p class="bodyTitle"><a href="upload.php" class="bodyTextLink">CLICK HERE TO UPLOAD FILES</a></p>
	<p class="bodyTitle"><a href="edit_links.php" class="bodyTextLink">CLICK HERE TO ADD/DELETE LINKS</a></p>
	</td>
  </tr>
  <tr>
    <td height="20" valign="middle"><a href="index.htm"><img src="images/info_numbsBut.gif" width="249" height="20" border="0"></a><a href="info.php"><img src="images/info_but_infoContact_off.gif" width="78" height="20" border="0"></a></td>
  </tr>
</table>

</body>
</html>

