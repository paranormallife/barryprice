<?php
session_start();
if(true === session_unregister('member_ID')) :
	header('Location: index.php?msg=logout_complete');
else :
	unset($_SESSION['member_ID']);
	sleep(3);
	header('Location: index.php?msg=logout_complete');
endif;
?>