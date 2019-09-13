<?php
session_start();
include('db.php');

if(isset($_POST['submit'])) :
	// Username and password sent from signup form
	// First we remove all HTML-tags and PHP-tags, then we create a sha1-hash
	$username = strip_tags($_POST['username']);
	$password = sha1(strip_tags($_POST['password']));

	// Make the query a wee-bit safer
	$query = sprintf("SELECT ID FROM members WHERE username = '%s' AND user_password = '%s' LIMIT 1;", mysql_real_escape_string($username), mysql_real_escape_string($password));
	
	$result = mysql_query($query);
	if(1 != mysql_num_rows($result)) :
		// MySQL returned zero rows (or there's something wrong with the query)
		header('Location: index.php?msg=login_failed');
	else :
		// We found the row that we were looking for
		$row = mysql_fetch_assoc($result);
		
		// Register the user ID for further use
		$_SESSION['member_ID'] = $row['ID'];
		if($row['ID'] == 1){
			header('Location: members-only.php');
		}else{
			echo "<meta http-equiv='refresh' content='0;URL=view_client.php?thename=" . $username . "'>"; 
		}
	endif;
endif;
?>