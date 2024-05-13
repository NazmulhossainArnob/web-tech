<?php
    require_once '../models/supportModel.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            echo '<p class="error">Please fill all the required fields.</p>';
            exit;
        }

        if (!strpos($email, '@') || !strpos($email, '.')) {
            echo '<p class="error">Please enter a valid email address.</p>';
            exit;
        }

        if(addEmail($name, $email, $subject, $message)){
            echo '<p class="success">Email sent successfully! Thank you for contacting our support team. We have received your message and we will respond to you as soon as possible.</p>';
        } else {
            echo '<p class="error">Failed to send email. Please try again later.</p>';
        }
    }
?>







<link rel="stylesheet" href="../views/email.css">


