<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Barry Price | Info/Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../../Desktop/css/main.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#000000" bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">

<table width="800" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td width="800" height="54" valign="bottom"><a href="../../../Desktop/index.htm"><img src="../../../Desktop/images/logo_bp.gif" width="326" height="22" border="0"></a></td>
  </tr>
  <tr> 
    <td height="520" valign="top" background="../../../Desktop/images/info_back.jpg" class="bodyText">
      <p class="bodyTitle">FOCUS AND PHILOSOPHY</p> 
      <p>Barry Price Architecture, established in 1994, specializes in residential 
        and commercial design for new construction, additions, and renovations. 
        The Woodstock, NY-based studio has completed commissions in Upstate New 
        York and Manhattan, New Jersey, Western Massachusetts, Boston and California.
        Carefully analyzing the clients goals and requirements, the studio closely 
        communicates with owners and construction professionals to balance aesthetics, 
        cost, and schedule with a project's guiding principles.
        Project designs integrate familiar elements with modern techniques to 
        achieve enduring compositions of light, space and line. The balanced relationship 
        of the production of buildings and their relationship to the environment 
        remain an awareness and an inspiration that informs all of the work pursued 
        and completed by the studio.</p>
	
		
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
      <p class="bodyTitle">CONTACT</p>
      <p>Barry Price Architecture<br>
        mail: P.O. Box 724<br>
        Bearsville, NY 12409<br>
        deliveries: 99 Tinker St.<br>
        Woodstock, NY 12498<br>
        ph. 845.679.3282<br>
        fax. 845.679.4243<br>
        <a href="mailto:info@barryprice.com" class="bodyTextLink">info@barryprice.com</a><br><br><br><br>
        Site design by <a href="http://www.amoreena.com" class="bodyTextLink">Amoreena O'Bryon</a>.<br>
        
      </p> </td>
  </tr>
  <tr>
    <td height="20" valign="middle"><a href="../../../Desktop/index.htm"><img src="../../../Desktop/images/info_numbsBut.gif" width="249" height="20" border="0"></a><img src="../../../Desktop/images/info_but_infoContact.gif" width="78" height="20"></td>
  </tr>
</table>

</body>
</html>

