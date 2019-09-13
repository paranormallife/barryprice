<html>
<head>
<title>Barry Price | Upload</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#000000" bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">
<table width="800" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
  	<td height="54" valign="bottom"><a href="index.htm"><img src="images/logo_bp.gif" width="326" height="22" border="0"></a></td>
  </tr>
  <tr>
  	<td height="520" valign="top" class="bodyText"> 
      <br>
      UPLOAD FILES HERE<br>
      <?php
		if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
		{
		$fileName = $_FILES['userfile']['name'];
		$tmpName  = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);
		
		if(!get_magic_quotes_gpc())
		{
			$fileName = addslashes($fileName);
		}
		
		$db = mysql_connect("localhost", "price05_price05", "RCT6DVoP");
		mysql_select_db("price05_barrypricecom",$db);
		
		$query = "INSERT INTO upload (name, size, type, content ) ".
		"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
		
		mysql_query($query) or die('Error, query failed'); 
		
		echo "<br><font color='ffffff'>File $fileName uploaded</font><br>";
		} 
		?>
      <form method="post" enctype="multipart/form-data">
			<table width="350" border="0" cellpadding="1" cellspacing="1" class="bodyTextLink">
			<tr> 
			<td width="350" class="bodyTextLink">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
              <input name="userfile" type="file" class="bodyTextDark" id="userfile">
              <br>
              <input name="upload" type="submit" class="bodyTextDark" id="upload" value="Upload"></td>
			</tr>
			</table>
		</form>
        <?php
	
			$db = mysql_connect("localhost", "price05_price05", "RCT6DVoP");
			mysql_select_db("price05_barrypricecom",$db);
			
			$query = "SELECT id, name FROM upload";
			$result = mysql_query($query) or die('Error, query failed');
			if(mysql_num_rows($result) == 0){
				echo "Database is empty <br>";
			}else{
				while(list($id, $name) = mysql_fetch_array($result)){
					echo "<a href='download.php?id=$id' class='bodyTextLink'>$name</a><br>";
				}
			}
			?>
      <p><a href="edit.php" class="bodyTextLink">CLICK HERE TO DELETE FILES</a></p></td>
	</tr>
	<tr>
    <td height="20" valign="middle"><a href="index.htm"><img src="images/info_numbsBut.gif" width="249" height="20" border="0"></a><a href="info.php"><img src="images/info_but_infoContact_off.gif" width="78" height="20" border="0"></a></td>
  </tr>
</table>

</body>
</html>
