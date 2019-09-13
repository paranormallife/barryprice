<?php
session_start();
if(!session_is_registered('member_ID')) :
header('Location: index.php');
endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
</head>

<body>

<?php
  // Configuration - Your Options
      $allowed_filetypes = array('.pdf','.jpg','.gif','.bmp','.png','.doc','.zip','.tiff'); // These will be the types of file that will pass the validation.
      $max_filesize = 104857600 ; // Maximum filesize in BYTES (currently 5MB).
      $upload_path = 'client_upload/'; // The place the files will be uploaded to (currently a 'files' directory).
 
   $filename = $_FILES['userfile']['name']; // Get the name of the file (including file extension).
   $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
 
   // Check if the filetype is allowed, if not DIE and inform the user.
   if(!in_array($ext,$allowed_filetypes))
      die('The file you attempted to upload is not allowed.');
 
   // Now check the filesize, if it is too large then DIE and inform the user.
   if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
      die('The file you attempted to upload is too large.');
 
   // Check if we can upload to the specified path, if not DIE and inform the user.
   if(!is_writable($upload_path))
      die('You cannot upload to the specified directory, please CHMOD it to 777.');
 
   // Upload the file to your specified path.
   if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $filename)){
         echo 'Your file upload was successful, view the file <a href="' . $upload_path . $filename . '" title="Your File">here</a>'; // It worked.
				 //This gets all the other information from the form 
				$clientname=$_POST['clientname']; 
				$timeadded= date('m/d/Y H:i:s'); 
				$clientfile= $upload_path . $filename; 
				
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
				
				mysql_query("INSERT INTO members (username,user_password) VALUES ('$clientname','b25b1a4e5f7dbf9ab5d89109e372912b7d74ac37')");
				
				mysql_query("INSERT INTO clients (clientname,timeadded,clientfile) VALUES ('$clientname','$timeadded','$clientfile')");
				
				mysql_close($con);
				
				echo "<meta http-equiv='refresh' content='0;URL=edit_client.php'>"; 
				 
      }else{
         echo 'There was an error during the file upload.  Please try again.'; // It failed :(.
			}
?>

</body>
</html>
