<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Barry Price | Info/Contact/Archive</title>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.2/scriptaculous.js'></script>
<script type='text/javascript' src='js/lightview.js'></script>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/lightview.css" />
</head>
<?php 
// This script reads a directory of files.  After reading the directory specified it outputs the directory files.  
// Upon output, supplied functions manipulate each filename and format it to make the output filename look better. 
// e.g.: instead of output being 'my-good-looking-file.txt' it would look like 'My Good Looking File'.

// In order for the output to look better, you must put a hyphen (-) or an underscore (_) between each
// word that you want to be separated.

// function reads directory
function read_directory($files,$dir,$url_path,$cnt) {
	while(($file = $dir->read()) !== false) {
		// Security - remove "." and ".." files (directories)
		if ($file != "." && $file != "..") {
			// Remove non-image file extensions
		   if (strstr($file, '.jpg') || strstr($file, '.gif')) {
				array_push($files, $file); 
			}
		}
	} 
	
	sort($files, SORT_NUMERIC); 
	$dir->close();
	
	foreach ($files as $file){ 
        // Output.
			echo "<a href='".$url_path.formatFile($file,'')."' id='gallery".$cnt."' class='lightview' rel='gallery[gallery".$cnt."]'>".formatFile($file,'')."</a>";
   } 
	
	return $files;
}


// function to strip off the file extension
function strip_ext($name) {
	$ext = strrchr($name, '.');
	if($ext !== false) {
		$name = substr($name, 0, -strlen($ext));
	}
	return $name;
}
// function to remove the hyphen or underscore from filename.
function removeHyphen($filename) {
	$target = $filename;
	$patterns[0] = '/-/';
	$patterns[1] = '/_/';
	$replacements[0] = ' ';
	$replacements[1] = ' ';
	$filename = preg_replace($patterns, $replacements, $target);
	return $filename;
}
// function to capatalize the first character of each word.  Must be called after
// the removal of the hyphen or underscore
function capFirstWord($word) {
	$cap = $word;
	$cap = explode(' ', $cap);
		foreach($cap as $key => $value) {
			$cap[$key] = ucfirst($cap[$key]); 
		}
	$word = implode(' ', $cap);
	return $word;
}
// Formats the file.  This is the main function that calls all functions explained above.
function formatFile($name,$function) {
	if ($function == "ext")
	{
	  $name = strip_ext($name);
	 }
	if ($function == "hyphen")
	{
	  $name = removeHyphen($name);
	 }
	if ($function == "cap")
	{
	  $name = capFirstWord($name);
	}
    return $name;
}
// Sets up the directory you would like to use as the "reading" directory.

//Optional: pass path url variable with folder path
$path 	= $_GET['path'];
$function 	= $_GET['function'];

//If no url variable, then sets folder script resides in as folder path.
if (empty($path)) {
	$base_folder = getcwd();
	$path = $base_folder . "/";
}

$url_path1 = "images/buildings/";
$url_path2 = "images/additions/";
$url_path3 = "images/interiors/";
$url_path4 = "images/kitchens_bathrooms/";
$url_path5 = "images/grounds/";

$dir1 = dir($path.$url_path1);
$dir2 = dir($path.$url_path2);
$dir3 = dir($path.$url_path3);
$dir4 = dir($path.$url_path4);
$dir5 = dir($path.$url_path5);
?>
<body bgcolor="#000000" bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">

<table width="800" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td width="800" height="54" valign="bottom"><a href="index.htm"><img src="images/logo_bp.gif" width="326" height="22" border="0"></a></td>
  </tr>
  <tr> 
    <td height="520" valign="top" background="images/info_back.jpg" class="bodyText">
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
	
		
      <div id="pdf_links"><p class="bodyTitle">ADDITIONAL INFORMATION</p>
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
		?></div>
    
     <div id="image_category_links"><p class="bodyTitle">PHOTOGRAPHIC ARCHIVE</p>
    		<a href="javascript:Lightview.show('gallery1');" class="bodyTextLink">buildings</a><br />
        <a href="javascript:Lightview.show('gallery2');" class="bodyTextLink">additions and renovations</a><br />
        <a href="javascript:Lightview.show('gallery3');" class="bodyTextLink">interiors</a><br />
        <a href="javascript:Lightview.show('gallery4');" class="bodyTextLink">kitchens and bathrooms</a><br />
        <a href="javascript:Lightview.show('gallery5');" class="bodyTextLink">grounds</a>    </div>

    <div class="clear-both"></div>
    <br /><br />
    <div id="contact_info">
      <p class="bodyTitle">CONTACT</p>
      <p>Barry Price Architecture<br>
        mail: P.O. Box 724<br>
        Bearsville, NY 12409<br>
        deliveries: 99 Tinker St.<br>
        Woodstock, NY 12498<br>
        ph. 845.679.3282<br>
        fax. 845.679.4243<br>
        <a href="mailto:info@barryprice.com" class="bodyTextLink">info@barryprice.com</a></p></div>
        
    <div id="site_links"><p class="bodyTitle">LINKS</p>
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
			
      while($row = mysql_fetch_array($result)){
				?>
        <a class="bodyTextLink" href="http://<? echo $row['link'] ?>" target="_blank"><? echo $row['link'] ?></a> - <? echo $row['description'] ?><br />
        <?
      }
      
      mysql_close($con);
      ?>
    </div>
    
    <div class="clear-both"></div>
        
        <p>Site design by - <a href="http://www.amoreena.com" target="_blank" class="bodyTextLink">amoreena.com</a><br>
        Flash development by - <a href="http://www.playdown.com" target="_blank" class="bodyTextLink">playdown.com</a></p> </td>
  </tr>
  <tr>
    <td height="20" valign="middle"><a href="index.htm"><img src="images/info_numbsBut.gif" width="249" height="20" border="0"></a><img src="images/info_but_infCntctArchv.gif" width="152" height="20" border="0" /></td>
  </tr>
</table>
<div class="clear-both"></div>
<div class="hidden">
<?php 
//Additions
$files = array();
$files = read_directory($files,$dir1,$url_path1,'1');
//Buildings
$files = array();
$files = read_directory($files,$dir2,$url_path2,'2');
//Grounds
$files = array();
$files = read_directory($files,$dir3,$url_path3,'3');
//Interiors
$files = array();
$files = read_directory($files,$dir4,$url_path4,'4');
//Kitchens/Bathrooms
$files = array();
$files = read_directory($files,$dir5,$url_path5,'5');
?>
</div>

</body>
</html>

