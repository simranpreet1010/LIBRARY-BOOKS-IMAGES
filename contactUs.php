<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/contactus.css"> <!-- Link to your CSS file -->

	<?php require_once 'include/head-block.php' ?>
</head>
<body>
	<div class="main-content">
		<div class="inner-main">
			<?php require_once 'include/header.php' ?>
		<div class=contact>
    <section id="contact-info">
        <h2>Contact Us</h2>
        <p><strong>Simranpreet Kaur : 984708@win.edu.au</strong></p>

        <p><strong>Anup Maharjan : 984796@win.edu.au</strong></p>

        <p><strong>Aishwariya Reddy : 983785@win.edu.au</strong></p>
        <p><strong>Raj Kharel : 984949@win.edu.au</strong></p>

    </section>
<br>
    <p>Please take a moment to fill out our 'Contact Us' form below. We value your feedback and inquiries, and we'll get back to you as soon as possible.</p>

    <form method="POST" action="contact_process.php"> <!-- Assuming you named the PHP script send_sms.php -->
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="7" required></textarea><br><br><br>

        <input type="submit" value="Submit">
    </form>

    </div>
		</div>
	  <?php require_once 'include/footer.php' ?>
	</div>
</body>
</html>