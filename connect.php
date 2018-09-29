<?php
//CODE TO CONNECT PHP WITH DATABASE.
$hostname="localhost"; 		//hostname
$username="username"; 			//username for database
$password="pass"; 				//database password
$dbname="db"; 		//database name
$connect=mysqli_connect($hostname,$username,$password,$dbname) or die("Error Connecting ".  mysqli_connect_error()); 		//make connection
//$connect becomes the OBJECT/VARIABLE we’ll use to fire queries to database
?>
