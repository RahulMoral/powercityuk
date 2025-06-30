<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Step 1: reCAPTCHA verification
    $recaptchaSecret = '6LdCjm0rAAAAAPWWvxrB3pUqbpUi0X5tsWdQAAs_'; // Replace with your actual secret key
    $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaResponse}");
    $captchaData = json_decode($verifyResponse);

    if (!$captchaData->success) {
        echo 'Please complete the reCAPTCHA';
        exit;
    }


    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $mobile  = $_POST['mobile'] ?? '';
    $message = $_POST['message'] ?? '';

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo 'Please fill in all required fields.';
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'mail.powercityuk.org';  // Your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'developer@powercityuk.org'; // Your SMTP email
        $mail->Password   = 'Developer60!Testing';    // Use app password if Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('info@powercityuk.org', 'Website Contact Form');
        $mail->addAddress('developer@powercityuk.org', 'Teg Umu'); // Your receiving email
        $mail->addReplyTo($email, $name); // User's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Message';
        $mail->Body    = "
            <h2>Contact Request</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Mobile:</strong> {$mobile}</p>
            <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
        ";

        $mail->send();
        echo 'SUCCESS';
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>