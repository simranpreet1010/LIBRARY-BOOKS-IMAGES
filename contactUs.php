<!DOCTYPE html>
<html>
<head>
	<?php require_once 'include/head-block.php' ?>
</head>
<body>
	<div class="main-content">
		<div class="inner-main">
			<?php require_once 'include/header.php' ?>
		
    <section id="contact-info">
        <h2>Contact Us</h2>
        <p><strong>Raj Kharel</strong></p>
        <p>Address: Woniora rd, Hurstville,NSW</p>
        <p>Phone: +61426956683</p>
        <p>Email: <a href="mailto:[raz.kharel.3363@gmail.com]">raz.kharel.3363@gmail.com</a></p>
    </section>

    <section id="contact-form">
        <h2>Contact Form</h2>
        <form action="contact_process.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>


		</div>
	  <?php require_once 'include/footer.php' ?>
	</div>
</body>
</html>