<?php
    if(isset($_REQUEST["btnLogin"])) {
        //session_start();
        require_once "config.php";
        require_once "../fn/validation.php";
        $login_id = $_REQUEST['login_id'];
        $login_pwd = $_REQUEST['login_pwd'];

        // anything beside false
        if(emptyInputLogin($login_id, $login_pwd) !== false) {
            header("location: ../../member-login.php?error=emptyinput");
            exit(); // stop script from running
        }

        loginUser($conn, $login_id, $login_pwd);

   }
    else {
        header("location: ../../member-login.php");
        exit();
    }