<?php
session_start();
$_SESSION['bookID'] = "";
$_SESSION['Title'] = "";
$_SESSION['Author name'] = "";
$_SESSION['Publication'] = "";
$_SESSION['Edition'] = "";
$_SESSION['ISBN'] = "";
unset($_SESSION['bookID']);
unset($_SESSION['bookID']);
unset($_SESSION['Title']);
unset($_SESSION['Author name']);
unset($_SESSION['Publication']);
unset($_SESSION['Edition']);
unset($_SESSION['ISBN']);
header("location: ../../catalog.php");
exit();