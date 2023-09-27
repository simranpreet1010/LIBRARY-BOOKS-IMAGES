<?php
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $phone = $_REQUEST['phone'];
    $photo = $_FILES['photo'];
    $photo_name = $photo['name'];
    $photo_type = $photo['type'];
    $photo_tmpname = $photo['tmp_name'];
    $photo_error = $photo['error'];
    $photo_size = $photo['size'];

    if ($photo_error == 0) {
        if ($photo_size > 1000000) {
            $em = "Sorry, your file is too large.";
            header("Location: membership.php?error=$em");
        }
        else {
            $photo_ext = pathinfo($photo_name, PATHINFO_EXTENSION); //returns information about a file path
            echo ($photo_ext);

        }

    }
    
    echo "<pre>";
    print_r ($photo);
    echo "</pre>";
    require_once "config.php";
    $tblnameMembership = "tblMembership";
    $tblnamePhoto = "tblmemberphoto";
    
    $query1 = "INSERT INTO $tblnameMembership 
            (`studentID`, `studentName`, `email`, `password`, `phoneNumber`, `photo`) 
            VALUES 
            ($id, '$name',  '$email', '$password', $phone, '$photo');";
    $query2 = "INSERT INTO $tblnamePhoto 
        (`studentID`, `photoURL`) 
        VALUES 
        ($id, '$photo');";
            //$query = "INSERT INTO `tblmembership` (`studentID`, `studentName`, `email`, `password`, `phoneNumber`, `photoID`, `photo`) VALUES ('984797', 'Anup Maharjan', '984796@win.edu.au', 'anup', '12121', NULL, 'test.jpg');";
    //$conn is the variable for the connection which is generated from config.php file
    if(mysqli_query($conn, $query1) && mysqli_query($conn, $query2)) 
    {
        echo "New membership created successfully";
    } else {
        echo "Error: " . $query1. "<br>" . $query2. "<br>". mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
    
    
?>