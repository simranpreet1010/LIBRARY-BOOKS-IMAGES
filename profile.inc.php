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
					require "include/db/config.php";
					require "include/fn/validation.php";
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
					// if (isset($_SESSION['borrowed'])) {
						$studentID = $_SESSION["id"];
						$resultData = displayBorrowedBook($conn, $studentID);
						// Check if there are borrowed books
						if (mysqli_num_rows($resultData) > 0) {
							echo "<h1>Borrowed Books</h1>";
							echo "<table border='1'>";
							echo "<tr><th>Book ID</th><th>Student Name</th><th>Book Title</th><th>Author name</th><th>Borrow Date</th><th>Return Date</th><th>Due Date</th><th>Fine</th></tr>";

							while ($row = mysqli_fetch_assoc($resultData)) {
								echo "<tr>";
								echo "<td>" . $row['bookID'] . "</td>";
								echo "<td>" . $row['studentName'] . "</td>";
								echo "<td>" . $row['Title'] . "</td>";
								echo "<td>" . $row['Author name'] . "</td>";
								echo "<td>" . $row['borrowDate'] . "</td>";
								echo "<td>" . $row['returnDate'] . "</td>";
								echo "<td>" . $row['dueDate'] . "</td>";
								echo "<td>" . $row['Fine'] . "</td>";
								echo "</tr>";
							}

							echo "</table>";
							echo "
								<h1>Return a Book</h1>
								<p>ATTENTION: <mark>Return book by due date. Otherwise, there will be the fine of $5/day.</mark></p>
								<form action='include/db/return.inc.php' method='POST'>
									<label for='bookID'>Enter Book ID:</label>
									<input type='text' name='bookID' required>
									<input type='hidden' name='dueDate' value='".date('Y-m-d', strtotime('-2 weeks'))."'>
									<input type='submit' name='btnReturn' value='Return'>
								</form>
								
							";
						} else {
							echo "<h2>No books are currently borrowed.</h2>";
						}
					// }
					if (isset($_REQUEST['updatereturn'])) {
						if ($_REQUEST['updatereturn']=='success') {
							echo "<p>Book with ID ". $_SESSION['bookID'] ." has been successfully returned on " .$_SESSION['returnDate']."</p>";
						}
						elseif ($_REQUEST['updatereturn']=='fail') {
							echo "Error updating return: " . mysqli_error($conn);
						}
						elseif ($_REQUEST['updatereturn']=='neutral') {
							echo "<p>Book with ID ". $_SESSION['bookID'] ." is not currently borrowed by " .$_SESSION['id']."</p>";
						}
					}
					
                ?>
		  	</div>
		</div>
	  <?php require_once 'include/footer.php' ?>
	</div>
</body>
</html>