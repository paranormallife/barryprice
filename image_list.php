<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/scriptaculous/1.8.2/scriptaculous.js'></script>
<script type='text/javascript' src='js/lightview.js'></script>
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

$url_path1 = "images/additions/";
$url_path2 = "images/buildings/";
$url_path3 = "images/grounds/";
$url_path4 = "images/interiors/";
$url_path5 = "images/kitchens_bathrooms/";

$dir1 = dir($path.$url_path1);
$dir2 = dir($path.$url_path2);
$dir3 = dir($path.$url_path3);
$dir4 = dir($path.$url_path4);
$dir5 = dir($path.$url_path5);
?>
<body>
<a href="javascript:Lightview.show('gallery1');">View Additions Images</a><br />
<a href="javascript:Lightview.show('gallery2');">View Buildings Images</a><br />
<a href="javascript:Lightview.show('gallery3');">View Grounds Images</a><br />
<a href="javascript:Lightview.show('gallery4');">View Interiors Images</a><br />
<a href="javascript:Lightview.show('gallery5');">View Kitchens/Bathrooms Images</a><br />
<div style="visibility: hidden;">
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
