<?php
    // creating error handling functions
    // check for empty input fields during filling membership
    function emptyInputMembership($id, $name, $email, $password, $confirmPassword, $phone) {
        $result;
        if(empty($id) || empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($phone)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidUsername($name) {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email) {
        $result;
        // using built-in function to check email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function pwdMatch($password, $confirmPassword) {
        $result;
        if($password !== $confirmPassword) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function userIDExists($conn, $id, $email) {
        $tblName = "tblMembership";
        // creating a placeholder ? to prevent SQL injection
        $sql = "SELECT * from $tblName where studentID = ? OR email = ?;";
        // preparing the connection to prevent from any other direct input codes in the form
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../../membership.php?error=stmtfailed");
            exit(); // stop script from running
        }

        mysqli_stmt_bind_param($stmt, "is", $id, $email);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            $result= false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createMember($conn, $id, $name, $email, $password, $phone) {
        $tblName1 = "tblMembership";
        $tblName2 = "tblmemberphoto";
        // creating a placeholder ? to prevent SQL injection
        $sql1 = "INSERT INTO $tblName1 
        (`studentID`, `studentName`, `email`, `password`, `phoneNumber`) 
        VALUES (?, ?, ?, ?, ?);";
        $sql2 = "INSERT INTO $tblName2 
        (`studentID`) 
        VALUES (?);";
        // preparing the connection to prevent from any other direct input codes in the form
        $stmt1 = mysqli_stmt_init($conn);
        $stmt2 = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt1, $sql1) || !mysqli_stmt_prepare($stmt2, $sql2)) {
            header("location: ../../membership.php?error=stmtfailed");
            exit(); // stop script from running
        }
        // secure password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt1, "isssi", $id, $name, $email, $hashedPassword, $phone);
        mysqli_stmt_bind_param($stmt2, "i", $id);
        mysqli_stmt_execute($stmt1);
        mysqli_stmt_execute($stmt2);
        
        mysqli_stmt_close($stmt1);
        mysqli_stmt_close($stmt2);
        header("location: ../../membership.php?error=none");
        exit();
    }

    // check for empty input fields during login
    function emptyInputLogin($login_id, $login_pwd) {
        $result;
        if(empty($login_id) || empty($login_pwd)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $login_id, $login_pwd) {
        // check login via. student id or email address
        $userIDExists = userIDExists($conn, $login_id, $login_id);

        if ($userIDExists === false) {
            header("location: ../../member-login.php?error=wrongLoginUser");
            exit();
        }

        // result data is fetch in the form of associative array
        $pwdHashed = $userIDExists["password"];
        
        $checkPwd = password_verify($login_pwd, $pwdHashed);
        
        if($checkPwd === false) {
            header("location: ../../member-login.php?error=wrongLogin");
            exit();
        }
        elseif ($checkPwd === true) {
            session_start();
            $_SESSION["id"] = $userIDExists["studentID"];
            $_SESSION["sName"] = $userIDExists["studentName"];
            header("location: ../../index.php");
            exit();
        }
    }

    function showProfile($conn, $sid) {
        $tblName = "tblMembership";
        // creating a placeholder ? to prevent SQL injection
        $sql = "SELECT * from $tblName where studentID = ?;";
        // preparing the connection to prevent from any other direct input codes in the form
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: member-login.php");
            exit(); // stop script from running
        }

        
        mysqli_stmt_bind_param($stmt, "i", $sid);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        return $resultData;
        

        mysqli_stmt_close($stmt);
    }

    function displayCatalog($conn, $tblName) {
        $sql = "SELECT * from $tblName;";
        $result = mysqli_query($conn, $sql) or die("Query failed".mysqli_query_error());
        return $result;
    }

    function emptyInputSearch($search_key) {
        $result;
        if(empty($search_key)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function searchRecord($conn, $search_key, $tblName) {
        // creating a placeholder ? to prevent SQL injection
        $sql = "SELECT * from $tblName where Title = ? OR 'Author name' = ? OR 'Publication' = ? OR ISBN = ?;";
        // preparing the connection to prevent from any other direct input codes in the form
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../../catalog.php");
            exit(); // stop script from running
        }

        
        mysqli_stmt_bind_param($stmt, "ssss", $search_key, $search_key, $search_key, $search_key);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($resultData)) {
            session_start();
            $_SESSION["bookID"] = $row["bookID"];
            $_SESSION["Title"] = $row["Title"];
            $_SESSION["Author name"] = $row["Author name"];
            $_SESSION["Publication"] = $row["Publication"];
            $_SESSION["Edition"] = $row["Edition"];
            $_SESSION["ISBN"] = $row["ISBN"];
            header("location: ../../catalog.php");
            exit();
        }
        else {
            header("location: ../../catalog.php?error=norecord");
            session_start();
            $_SESSION["searchKey"] = $search_key;
            exit();
        }   

        mysqli_stmt_close($stmt);
    }