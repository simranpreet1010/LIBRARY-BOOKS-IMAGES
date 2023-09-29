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
					<h1><span class="project-title">Catalog</span></h1>
				</div>
				<form class="search-form" action="include/db/search.inc.php">
					<div class="search-box">
						<input type="text" name="search" placeholder = "Book Title/ Author name/ Publication/ ISBN">
						<input type="submit" name="btnSearch" value="Search">
						<?php 
							if (isset($_SESSION["bookID"])) {
								echo '<a href="include/db/showall.inc.php" class="btn">Show All</a>';
							}
						?>
					</div>
					<?php
						if(isset($_REQUEST["error"])) {
							echo "<div class='error'>";
							if($_REQUEST["error"] == "emptyinput") {
								echo "<p>Please enter the search keyword!</p>";
							}
							elseif($_REQUEST["error"] == "norecord") {
								echo "<p>No record found for ".$_SESSION['searchKey']."</p>";
							}
							echo "</div>";
						}
					?>
				</form>

				<?php
				require_once "include/db/config.php";
				require_once "include/fn/validation.php";
				if (isset($_SESSION["id"])) {
					$tblName = "library";
					$result = displayCatalog($conn, $tblName);
					echo "<table border>
							<thead>
								<tr>
									<th>Book ID</th>
									<th>Book Title</th>
									<th>Author name</th>
									<th>Publication</th>
									<th>Edition</th>
									<th>ISBN</th>
								</tr>
							</thead>
					";
					if (isset($_SESSION["bookID"]) || isset($_SESSION["Title"]) || isset($_SESSION["Author name"]) || isset($_SESSION["Publication"]) || isset($_SESSION["Edition"]) || isset($_SESSION["ISBN"]) ) {
						echo "<tr>
							<td>" . $_SESSION["bookID"] . "</td>
							<td>" . $_SESSION["Title"] . "</td>
							<td>" . $_SESSION["Author name"] . "</td>
							<td>" . $_SESSION["Publication"] . "</td>
							<td>" . $_SESSION["Edition"] . "</td>
							<td>" . $_SESSION["ISBN"] . "</td>
						</tr>";
					}
					else {
						if (mysqli_num_rows($result) > 0) {
							// Output data of each row
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>
										<td>" . $row["bookID"] . "</td>
										<td>" . $row["Title"] . "</td>
										<td>" . $row["Author name"] . "</td>
										<td>" . $row["Publication"] . "</td>
										<td>" . $row["Edition"] . "</td>
										<td>" . $row["ISBN"] . "</td>
									</tr>";
							}
						} else {
							echo "<tr><th colspan='6'>0 results</th></tr>";
						}
					}
					echo "</table>";
					if (isset($_SESSION["stock"])) {
						if ($_SESSION["stock"]> 0) {
							echo "<form action='include/db/borrow.inc.php' method='POST'>
							<input type='hidden' name='bookID' value='" . $_SESSION["bookID"] . "'>
							<input type='hidden' name='studentID' value='" . $_SESSION["id"] . "'>
							<input type='submit' name='btnBorrow' value='Borrow'>
							</form>";
							if(isset($_REQUEST["msg"])) {
								
								if($_REQUEST["msg"] == "bookborrowsuccess") {
									echo "<div class='success'><p>Book borrowed successfully.</p></div>";
									echo "<a href='profile.inc.php' class='btn'>View your profile</a>";
								}
								
							}
						}
						else {
							echo "<p class='error'>Book ID ".$_SESSION['bookID']." is currently not availalbe to borrow";
						}
					}
				}
				?>
		  	</div>
		</div>
	  <?php require_once 'include/footer.php' ?>
	</div>
</body>
</html>