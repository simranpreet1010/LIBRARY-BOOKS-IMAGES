<?php
    if(isset($_POST["btnBorrow"])) {
    require_once "config.php";
    require_once "../fn/validation.php";
    $tblName = 'library';
    borrowBook($conn, $tblName);
}
else {
    header("location: ../../catalog.php");
    exit();
}