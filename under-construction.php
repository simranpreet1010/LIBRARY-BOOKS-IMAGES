<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<?php require_once 'include/head-block.php' ?>
    <script>
        // Function to redirect to the previous page after 5 seconds
        function redirectToPreviousPage() {
            setTimeout(function () {
                // Use window.history to go back to the previous page
                window.history.back();
            }, 5000); // 5000 milliseconds = 5 seconds
        }

        // Call the function when the page loads
        window.onload = redirectToPreviousPage;
    </script>
</head>
<body>
	<div class="door-wrapper">
	  <div class="door" id="door">
	    <div class="door-handle"></div>
	    <div class="door-content">
	    	<div class="content-holder">
				<div class="text-wrap">
					<?php 
						if (isset($_SESSION["sName"])) {
                            $fullname = $_SESSION['sName'];
                            $nameparts = explode(" ", $fullname);
							echo "<h1>Thank you <mark>".$nameparts[0]. "</mark> for visiting this page.</h1>";
						}
					?>
                    <h1>This page is under construction.</h1>
                    <h1>Redirecting to the previous page in 5 seconds...</h1>
                    <p>If you are not redirected, <a href="javascript:window.history.back();">click here</a>.</p>
		  	</div>
	  	</div>
	  </div>
	</div>
</body>
</html>