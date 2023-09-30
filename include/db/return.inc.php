<?php
    if(isset($_POST["btnReturn"])) {
    require_once "config.php";
    require_once "../fn/validation.php";
    returnBook($conn);
}
else {
    header("location: ../../profile.inc.php");
    exit();
}