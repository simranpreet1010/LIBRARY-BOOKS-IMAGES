<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/aboutus.css">
    <?php require_once 'include/head-block.php' ?>
</head>
<body>
    <div class="main-content">
        <div class="inner-main">
            <?php require_once 'include/header.php' ?>
            <div class="holder">
                <div class="text-wrap">
                    <h1><span class="project-title">About Us</span></h1>
                </div>
                <h1> Welcome to Win-Library</h1>
                <p>At Win-Library, we believe in the power of knowledge, exploration, and community. Our library aims to be a cornerstone of this vibrant community, providing a rich resource for learning, discovery, and connection.</p>
                <section id="our-team">
                    <h2>Our Team</h2>

                    <?php
                    // Database connection (replace with your credentials)
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "image";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Retrieve team member information and photos from the database
                    $sql = "SELECT * FROM members"; // Replace with your actual table name
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="team-member">';
                            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['memberphoto']) . '" alt="' . $row['membername'] . '">';
                            echo '<h3>' . $row['membername'] . '</h3>';
                            echo '<p>Team Member</p>';
                            echo '</div>';
                        }
                    } else {
                        echo 'No team members found.';
                    }

                    mysqli_close($conn);
                    ?>
                </section>
            </div>
        </div>
        <?php require_once 'include/footer.php' ?>
    </div>
</body>
</html>
