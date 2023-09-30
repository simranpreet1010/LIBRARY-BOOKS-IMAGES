<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<?php require_once 'include/head-block.php' ?>
</head>
<body>
	<div class="door-wrapper">
	  <div class="door" id="door">
	    <div class="door-handle"></div>
	    <div class="door-content">
	    	<div class="content-holder">
				<div class="text-wrap">
					<h1>Welcome to <span class="project-title">Win Library</span></h1>
					<?php 
						if (isset($_SESSION["id"])) {
							echo "<h2>Student ID: ".$_SESSION['id']."</h2>";
						}
					?>
					<p>Explore our collection of books.</p>
				</div>
			  	<a class="btn btn-primary" id="btnAccess" href="javascript:void(0);">Click to Enter</a>
		  	</div>
	  	</div>
	  </div>
	</div>
	<div class="main-content startup-hidden" id="main-content">
		<div class="inner-main">
			<?php 
				require_once 'include/header.php';
				require_once "include/db/config.php";
				require_once "include/fn/validation.php";
				$tblName = "library";
			?>
			<div class="holder">
				<div class="text-wrap">
					<h1><?php 
						if (isset($_SESSION["sName"])) {
							echo $_SESSION['sName'].", ";
						}
					?>Welcome to <span class="project-title">Win Library</span></h1>
					<p>Explore our collection of books. 
					<p>At Win-Library, we believe in the power of knowledge, exploration, and community. Our library aims to be a cornerstone of this vibrant 
					community , providing a rich resource for learning, discovery, and connection.</p>
				</div>
				<div class="slick-carousel">
					<?php
						$result = displayCatalog($conn, $tblName);
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo '
								<div class="slide">
									<a href="#">
										<span class="img-holder">
											<img src="images/programming/img01.jpg" alt="image description">
										</span>
										<span class="img-caption">
											<span class="book-title">'.$row["Title"].'</span>
											<span class="author-name">by '. $row["Author name"].'</span>
										</span>
									</a>
								</div>		
								';
							}
						}
					?>
				</div>
				<div class="align-center">
					<h2>Already a member?</h2>
					<a href="member-login.php" class="btn">Log in</a>
					<h2>Not a member?</h2>
					<a href="membership.php" class="btn">Become a member</a>
				</div>
		  	</div>
		</div>
	  <?php require_once 'include/footer.php' ?>
	</div>
</body>
</html>