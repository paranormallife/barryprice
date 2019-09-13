<?php
// Start a session
session_start();

// Sends the user to the login-page if not logged in
if(!session_is_registered('member_ID')) :
	header('Location: index.php?msg=requires_login');
endif;

// Include database information and connectivity
include 'db.php';

// We store all our functions in one file
include 'functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Members Only</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
	<p class="bodyText">&nbsp;</p>
	<p class="bodyText">Welcome <?php print user_info('username'); ?></p>
<p>&nbsp;</p>
	<p class="bodyText"><a class="bodyTextLink" href="edit_client.php">Add/Edit Clients</a></p>
	<p>&nbsp;</p>
<p class="bodyText"><a class="bodyTextLink" href="logout.php" title="Log out of the member area">Log out</a></p>
</body>
</html>