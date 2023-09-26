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
					<h1><span class="project-title">Membership</span></h1>
				</div>
				<div class="column-block">
					<aside class="side-column left-push">
						<?php require_once 'include/membership-benefits.php' ?>
						<h2>Already a member?</h2>
						<a href="member-login.php" class="btn">Log in</a>
					</aside>
					<div class="side-column">
						<form action="include/db/submit-membership.php" method="POST" autocomplete="off" enctype="multipart/form-data" onsubmit="return validateForm();">
							<div class="input-row">
								<div class="label-wrap">
									<label for="id">Student Id</label>
								</div>
								<input type="number" id="id" name="id" >
							</div>
							<div class="input-row">
								<div class="label-wrap">
									<label for="name">Full Name:</label>
								</div>
								<input type="text" id="name" name="name" >
							</div>
							<div class="input-row">
								<div class="label-wrap">
									<label for="email">Email:</label>
								</div>
								<input type="email" id="email" name="email" >
							</div>
							<div class="input-row">
								<div class="label-wrap">
									<label for="password">Password</label>
								</div>
								<input type="password" id="password" name="password" >
							</div>
							<div class="input-row">
								<div class="label-wrap">
									<label for="cpassword">Confirm Password</label>
								</div>
								<input type="password" id="cpassword" name="cpassword" >
							</div>
							<div class="input-row">
								<div class="label-wrap">
									<label for="phone">Phone Number</label>
								</div>
								<input type="number" id="phone" name="phone" >
							</div>
							<!--div class="input-row">
								<div class="label-wrap">
									<label for="photo">Photo</label>
								</div>
								<input type="file" id="photo" name="photo">
							</div-->
							<div class="input-row">
								<input type="submit" name="submit" value="Become a member">
							</div>
						</form>
						<?php
							if(isset($_REQUEST["error"])) {
								echo "<div class='error'>";
								if($_REQUEST["error"] == "emptyinput") {
									echo "<p>Fill in all fields!</p>";
								}
								elseif($_REQUEST["error"] == "invalidUsername") {
									echo "<p>Choose a proper username!</p>";
								}
								elseif($_REQUEST["error"] == "invalidEmail") {
									echo "<p>Choose a proper email!</p>";
								}
								elseif($_REQUEST["error"] == "passwordmismatched") {
									echo "<p>Password Mismatched!</p>";
								}
								elseif($_REQUEST["error"] == "userIDtaken") {
									echo "<p>Student ID or Email already taken!!</p>";
								}
								elseif($_REQUEST["error"] == "stmtfailed") {
									echo "<p>Oops! Something went wront, try again!!</p>";
								}
								
								elseif($_REQUEST["error"] == "none") {
									echo "<h2>Thankyou for joining WIN Library Membership.</h2>";
								}
								echo "</div>";
							}
						?>
					</div>
				</div>
		  	</div>
		</div>
	  <?php require_once 'include/footer.php' ?>
	</div>
</body>
</html>