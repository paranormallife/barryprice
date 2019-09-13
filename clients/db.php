<?php
define('SQL_USER', 'price05_price05');
define('SQL_PASS', 'RCT6DVoP');
define('SQL_DB',   'price05_barrypricecom');

// Create a link to the database server
$link = mysql_connect('localhost', SQL_USER, SQL_PASS);
if(!$link) :
	die('Could not connect: ' . mysql_error());
endif;

// Select a database where our member tables are stored
$db = mysql_select_db(SQL_DB, $link);
if(!$db) :
	die ('Can\'t connect to database : ' . mysql_error());
endif;
?>