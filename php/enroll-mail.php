<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$response = array('status' => 'error', 'message' => 'An unexpected error occurred.');

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
        $mail->addAddress('mahakaalyogpeeth@gmail.com', 'Mahakaal Yogpeeth Enquiry');
        $mail->addAddress('anabiamay3543@gmail.com', 'Mahakaal Yogpeeth Enquiry');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Enrollment Form Submission';

        // Build email body using form data
        $body = "Name: " . $_POST['enroll_name'] . "<br>";
        $body .= "Email: " . $_POST['enroll_email'] . "<br>";
        $body .= "Phone: " . $_POST['enroll_phone'] . "<br>";
        $body .= "Gender: " . $_POST['enroll_gender'] . "<br>";
        $body .= "Country: " . $_POST['enroll_country'] . "<br>";
        $body .= "Course: " . $_POST['enroll_course'] . "<br>";
        $body .= "Month: " . $_POST['enroll_month'] . "<br>";
        $body .= "Room: " . $_POST['enroll_room'] . "<br>";
        $body .= "Message: " . $_POST['enroll_message'];

        $mail->Body = $body;

        // Send the email
        $mail->send();

        // Success message
        $response = array('status' => 'success', 'message' => 'Thank you! Your enrollment form has been submitted successfully.');

    } catch (Exception $e) {
        // Error message
        $response = array('status' => 'error', 'message' => 'Form submission failed. Error: ' . $mail->ErrorInfo);
    }
}

// Return JSON response
echo json_encode($response);
?>
