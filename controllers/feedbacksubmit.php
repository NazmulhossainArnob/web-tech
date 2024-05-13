<?php
require_once '../models/supportModel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $feedback = trim($_POST["feedback"]);

    if (empty($name) || empty($email) || empty($feedback)) {
        die("Please fill all the required fields.");
    }

    if (!strpos($email, '@') || !strpos($email, '.')) {
        die("Please enter a valid email address.");
    }

    if (addFeedback($name, $email, $feedback)) {
        echo "Feedback sent! <br/>Thank you so much for taking the time to share your feedback with us. We truly appreciate your kind words and we are grateful for your support. It's customers like you that make our job a pleasure and keep us motivated to do our best every day. We look forward to serving you again soon and wish you all the best.";
    } else {
        echo "Failed to add feedback to database.";
    }
    
}

  
?>