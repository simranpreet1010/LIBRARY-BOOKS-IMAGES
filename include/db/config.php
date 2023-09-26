<?php
//server name to connect where database is hosted
$hostname = "localhost"; 
//database server login credentials
$dbusername = "ASAR"; 
$dbpassword = "winlibrary@2023";

// database name
$dbname = "dbWinLibrary";

//connection
$conn = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname) or die("Connection failed : ".mysqli_connect_error());