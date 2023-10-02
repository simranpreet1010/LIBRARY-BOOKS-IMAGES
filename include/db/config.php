<?php
/* remember to 
 create user ASAR@'localhost' IDENTIFIED BY 'winlibrary@2023';

 and grand CRUD operations on phpmyadmin
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, ALTER
	ON *.*
	TO 'ASAR'@'localhost'
	; */

//server name to connect where database is hosted
$hostname = "localhost"; 
//database server login credentials
$dbusername = "ASAR"; 
$dbpassword = "winlibrary@2023";

// database name
$dbname = "dbWinLibrary";

//connection
$conn = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname) or die("Connection failed : ".mysqli_connect_error());