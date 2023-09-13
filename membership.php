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
						<h2>Membership Benefits</h2>
						<ul>
							<li>Access to a vast collection of books.</li>
							<li>Extended borrowing privileges.</li>
							<li>Online access to digital resources and e-books.</li>
							<li>Invitations to library events and workshops.</li>
						</ul>
					</aside>
					<div class="side-column">
						<form action="include/db/submit-membership.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
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
							<div class="input-row">
								<div class="label-wrap">
									<label for="photo">Photo</label>
								</div>
								<input type="file" id="photo" name="photo">
							</div>
							<div class="input-row">
								<input type="submit" value="Become a member">
							</div>
						</form>
					</div>
				</div>
		  	</div>
		</div>
	  <?php require_once 'include/footer.php' ?>
	</div>
</body>
</html>