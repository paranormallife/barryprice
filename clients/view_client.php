<?php
session_start();
if(!session_is_registered('member_ID')) :
header('Location: index.php');
endif;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Barry Price | Client View</title>
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

<table width="800" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td width="800" height="54" valign="bottom"><a href="../index.htm"><img src="../images/logo_bp.gif" width="326" height="22" border="0"></a></td>
  </tr>
  <tr> 
    <td height="520" valign="top" align="left" class="bodyText"> 
	<br>
      <strong>Client: </strong>
      <?php
			//print sha1(bpViewFiles);
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
			
			$thename=$_GET["thename"];
			$result = mysql_query("SELECT * FROM $usertable WHERE clientname='$thename' ORDER BY timeadded");
			echo $thename . "<br /><br />";
      echo "<table cellpadding='10' cellspacing='0' border='0' class='bodyText'>";
      echo "<tr><td width='200' style='background-color:#333333;'><strong>file</strong></th><td style='background-color:#333333;'><strong>date/time added</strong></th></tr>";
			echo "<form action='update_client.php' method='post'>";
      while($row = mysql_fetch_array($result)){
				?>
        <tr>
        <td align="left" style="border-bottom:1px solid #333333;"><a class="bodyTextLink" target="_blank" href="<? echo $row['clientfile'] ?>"><? echo $row['clientfile'] ?></a></td>
        <td align="left" style="border-bottom:1px solid #333333;"><? echo $row['timeadded'] ?></td>
        </tr>
        <?
      }
      echo "</form>";
      echo "</table>";
      
      mysql_close($con);
      ?>
     
	<br>
	
	</td>
  </tr>
</table>

</body>
</html>

