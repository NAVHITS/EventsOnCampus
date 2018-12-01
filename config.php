<?php
   define('DB_SERVER', '77.72.0.90');
   define('DB_USERNAME', 'cnxjimpu_user1');
   define('DB_PASSWORD', '_3cF)g~A+aMo');
   define('DB_DATABASE', 'cnxjimpu_b2l');
   define('DB_PORT', '3306');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE,DB_PORT);
	if(!$db){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>