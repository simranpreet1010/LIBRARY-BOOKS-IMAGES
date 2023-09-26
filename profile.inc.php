<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once 'include/head-block.php' ?>
</head>
<body>
	<div class="main-content">
		<div class="inner-main">
			<?php require_once 'include/header.php' ?>
			<div class="holder">
				<div class="text-wrap">
					<h1><span class="project-title">My Profile</span></h1>
				</div>
				<?php 
					require_once "include/db/config.php";
					require_once "include/fn/validation.php";
					if (isset($_SESSION["id"])) {
						$sid = $_SESSION["id"];
						echo "<form class='update-form' action='update-membership.php'>";
							$resultData = showProfile($conn, $sid);
							while ($row = mysqli_fetch_assoc($resultData)) {
								echo '
								<div class="input-row">
									<div class="label-wrap">
										<label for="id">Student Id:</label>
									</div>
									<input type="number" id="id" name="id" readonly value="'.$row["studentID"].'">
								</div>
								<div class="input-row">
									<div class="label-wrap">
										<label for="name">Name:</label>
									</div>
									<input type="text" id="name" name="name" readonly value="'.$row["studentName"].'">
								</div>
								<div class="input-row">
									<div class="label-wrap">
										<label for="email">Email:</label>
									</div>
									<input type="email" id="email" name="email" readonly value="'.$row["email"].'">
								</div>
								<div class="input-row">
									<div class="label-wrap">
										<label for="phone">Phone Number</label>
									</div>
									<input type="number" id="phone" name="phone" readonly value="'.$row["phoneNumber"].'">
								</div>
								';
							}
						echo "</form>";
					}

                ?>
		  	</div>
		</div>
	  <?php require_once 'include/footer.php' ?>
	</div>
</body>
</html>