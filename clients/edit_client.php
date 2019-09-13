<?php
session_start();
if(!session_is_registered('member_ID')) :
header('Location: index.php');
endif;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Barry Price | Add Client Files</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
<!--
function confirmation(ID) {
	var answer = confirm("Delete entry ID: "+ID+" ?")
	if (answer){
		alert("Entry Deleted")
		window.location = "delete_client.php?cmd=delete&id="+ID;
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
    <td width="900" height="54" valign="bottom"><a href="../index.htm"><img src="../images/logo_bp.gif" width="326" height="22" border="0"></a></td>
  </tr>
  <tr> 
    <td height="520" valign="top" class="bodyText"> 
	<br>
      <strong>Add Client/Files:</strong>
      <br />
      
      <form action="add_client.php" method="post" enctype="multipart/form-data">
        <p align="right" style="width:600px;">  
        client name: <input type="text" name="clientname"> <label for="file">Select a file:</label> <input type="file" name="userfile" id="file"><br />
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
      $usertable='clients';
      
      $con = mysql_connect($hostname,$username, $password);
      if (!$con){
        die('Could not connect: ' . mysql_error());
      }
      mysql_select_db($dbname, $con);
			
			$resultone = mysql_query("SELECT * FROM $usertable GROUP BY clientname");

			//echo "<form name='sortForm' action='edit_client.php?cmd=sortname&clientname=$clientname' method='post'>";
			//echo "<select name='clientname' onChange='document.forms[1].submit();'>";
			echo "<form name='sort'>";
			echo "<select name='sortbox' onChange='location.href=sort.sortbox.options[selectedIndex].value'>";
			echo "<option value='edit_client.php'>Sort Clients</option>";
			echo "<option value='edit_client.php'>All Clients</option>";
      while($rowone = mysql_fetch_array($resultone)){
				echo "<option value='edit_client.php?cmd=sortname&thename=" . $rowone['clientname'] ."'>" . $rowone['clientname'] . "</option>";		
      }
			echo "</select>";
			//echo "<input type='Submit' value='Submit' />";
			echo "</form>";
			
			if($cmd=="sortname"){
				$thename=$_GET["thename"];
				$result = mysql_query("SELECT * FROM $usertable WHERE clientname='$thename' ORDER BY clientname");
			}else{
      	$result = mysql_query("SELECT * FROM $usertable ORDER BY clientname");
			}

      echo "<table cellpadding='5' cellspacing='0' border='0' class='bodyText'>";
      echo "<tr><th>ID</th><th>client name</th><th>time stamp</th><th>client file</th><th></th><th>client view link</th></tr>";
			
      while($row = mysql_fetch_array($result)){
				echo "<form action='update_client.php' method='post'>";
				echo "<tr><td align='center'>" . $row['id'] . "</td>";
				?>
        <td align="center"><input type="hidden" name="ud_id" value="<? echo $row['id'] ?>">
				<input name="ud_clientname" type="text" value="<? echo $row['clientname'] ?>" size="20"></td>
        <td align="center"><? echo $row['timeadded'] ?></td>
        <?
				echo "<td align='center' width='150'><a class='bodyTextLink' style='font-size:9px;' href='" . $row['clientfile'] . "' target='blank'>" . $row['clientfile'] . "</a></td><td width='200'><input type='Submit' value='Update' /> | <a class='bodyTextLink' href='javascript:confirmation(" . $row['id'] . ")'>Delete</a></td><td align='center'><a class='bodyTextLink' style='font-size:9px;' href='http://barryprice.com/clients/view_client.php?thename=" . $row['clientname'] . "' target='blank'>http://barryprice.com/clients/view_client.php?thename=" . $row['clientname'] . "</a></td></tr>";
				echo "</form>";
      }
      
      echo "</table>";
      
      mysql_close($con);
      ?>
     
	<br>
	
	</td>
  </tr>
</table>

</body>
</html>

