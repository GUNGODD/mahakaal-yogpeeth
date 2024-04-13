<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$e = array('status' => 'error', 'message' => 'An unexpected error occurred.');

if (isset($_POST['submit'])) {

    // Your email configuration
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com'; // Change this to your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact@mahakaalyogpeeth.com'; // SMTP username
        $mail->Password   = 'Mayank@123'; // SMTP password
        $mail->SMTPSecure = 'ssl'; // Enable TLS encryption
        $mail->Port       = 465; // TCP port to connect to

        // Sender information
        $mail->setFrom('contact@mahakaalyogpeeth.com', 'Mahakaal Yogpeeth');

        // Add a recipient
        $mail->addAddress('mahakaalyogpeeth@gmail.com', 'Mahakaal Yogpeeth');
        $mail->addAddress('anabiamay3543@gmail.com', 'Recipient Name');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';

        // Build email body using form data
        $body = "Name: " . $_POST['contact_name'] . "<br>";
        $body .= "Email: " . $_POST['contact_email'] . "<br>";
        $body .= "Phone: " . $_POST['contact_mobile'] . "<br>";
        $body .= "Country: " . $_POST['contact_country'] . "<br>";
        $body .= "Message: " . $_POST['contact_message'];

        $mail->Body = $body;

        // Send the email
        $mail->send();

        // Success message
        $response = array('status' => 'success', 'message' => 'Thank you! Your message has been sent successfully.');

    } catch (Exception $e) {
        // Error message
        $response = array('status' => 'error', 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
    }
}

// Return JSON response
echo json_encode($response);
?>
