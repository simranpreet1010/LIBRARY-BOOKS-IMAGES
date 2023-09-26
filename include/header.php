<header id="header">
    <div class="holder d-flex">
        <div class="logo">
            <a href="index.php">WIN <br>Library</a>
        </div>
        <nav class="main-nav" id="main-nav">
            <div class="menu-icon" id="menu-icon">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="primary-nav hidden" id="primary-nav">
                <li <?php echo isActive("index.php"); ?>><a href="index.php">Home</a></li>
                <li <?php echo isActive("aboutUs.php"); ?>><a href="aboutUs.php">About Us</a></li>
                <?php
                    if (isset($_SESSION["id"])) {
                        echo '
                        <li isActive("catalog.php");>
                            <a href="catalog.php">Catalog</a>
                            <ul class="secondary-nav">
                                <li isActive("availableBooks.php");><a href="availableBooks.php">Available books</a></li>
                                <li isActive("newArrivals.php");><a href="newArrivals.php">New arrivals</a></li>
                                <li isActive("categories.php");><a href="categories.php">Categories</a></li>
                                <li isActive("digitalResources.php");><a href="digitalResources.php">Digital resources</a></li>
                            </ul>
                        </li>
                        <li isActive("profile.php");><a href="profile.inc.php">My Profile</a></li>
                        <li><a href="include/db/logout.inc.php">Logout</a></li>
                        ';
                    }
                    else {
                        echo '<li isActive("membership.php");><a href="membership.php">membership</a></li>';
                    }
                ?>
                <li <?php echo isActive("contactUs.php"); ?>><a href="contactUs.php">Contact Us</a></li>
            </ul>
        </nav>
  </div>
</header>
<?php
function isActive($pageName) {
    $currentURL = $_SERVER['PHP_SELF'];
    if (strpos($currentURL, $pageName) !== false) {
        return 'class="active"';
    }
    return '';
}
?>