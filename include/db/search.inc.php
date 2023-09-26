<?php
    if(isset($_REQUEST["btnSearch"])) {
        require_once "config.php";
        require_once "../fn/validation.php";
        $search_key = $_REQUEST['search'];
        $tblName = 'library';

        // anything beside false
        if(emptyInputSearch($search_key) !== false) {
            header("location: ../../catalog.php?error=emptyinput");
            exit(); // stop script from running
        }

        searchRecord($conn, $search_key, $tblName);

   }
    else {
        header("location: ../../catalog.php");
        exit();
    }