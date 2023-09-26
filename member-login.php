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
						<h2>Not a member?</h2>
						<a href="membership.php" class="btn">Become a member</a>
					</aside>
					<div class="side-column">
                    	<form action="include/db/login.inc.php" method="POST">
							<h2>Already a member?</h2>
							<div class="input-row">
								<div class="label-wrap">
									<label for="login_id">Student Id</label>
								</div>
								<input type="number" id="login_id" name="login_id">
							</div>
							<div class="input-row">
								<div class="label-wrap">
									<label for="login_pwd">Password</label>
								</div>
								<input type="password" id="login_pwd" name="login_pwd">
							</div>
							<div class="input-row">
								<input type="submit" name="btnLogin" value="Login">
								<div class="sub-row">
									<a href="#">Forgot Password?</a>
								</div>
							</div>
						</form>
						<?php
							if(isset($_REQUEST["error"])) {
								echo "<div class='error'>";
								if($_REQUEST["error"] == "emptyinput") {
									echo "<p>Fill in all fields!</p>";
								}
								elseif($_REQUEST["error"] == "wrongLoginUser") {
									echo "<p>User doesn't exist!</p>";
								}
								elseif($_REQUEST["error"] == "wrongLogin") {
									echo "<p>Incorrect credentials!</p>";
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