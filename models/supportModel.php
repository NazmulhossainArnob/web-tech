<?php

require_once 'db.php';

function addFeedback($name, $email, $feedback){
    $conn = getConnection();

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $feedback = mysqli_real_escape_string($conn, $feedback);

    $query = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

    if(mysqli_query($conn, $query)){
        mysqli_close($conn);
        return true;
    } else {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }
}

function addEmail($name, $email, $subject, $message){
    $conn = getConnection();

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $subject = mysqli_real_escape_string($conn, $subject);
    $message = mysqli_real_escape_string($conn, $message);

    $query = "INSERT INTO emailsupport (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if(mysqli_query($conn, $query)){
        mysqli_close($conn);
        return true;
    } else {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }
}