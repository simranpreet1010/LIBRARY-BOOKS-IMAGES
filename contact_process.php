<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php as needed

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Your SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'raz.kharel.3363@gmail.com';    // Your SMTP username
    $mail->Password   = 'Nep@l123';    // Your SMTP password
    $mail->SMTPSecure = 'tls';              // Enable TLS encryption
    $mail->Port       = 587;                // TCP port to connect to (587 for TLS)

    //Recipients
    $mail->setFrom('your_email@example.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email sent via PHPMailer.';

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo "Email sending failed: {$mail->ErrorInfo}";
}
