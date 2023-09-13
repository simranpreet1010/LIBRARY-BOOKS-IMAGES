<?php
//server name to connect where database is hosted
$hostname = "localhost"; 
//database server login credentials
$username = "ASAR"; 
$password = "winlibrary@2023";

// database name
$dbname = "dbWinLibrary";

//connection
$conn = mysqli_connect($hostname, $username, $password, $dbname) or die("Connection failed :(");
if ($conn) {
    echo "Connection success!";
}
?>
