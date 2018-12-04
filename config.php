<?php
   define('DB_SERVER', '<db server address>');
   define('DB_USERNAME', '<db username>');
   define('DB_PASSWORD', '<db password>');
   define('DB_DATABASE', '<db name>');
   define('DB_PORT', '<db port>');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE,DB_PORT);
	if(!$db){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>
