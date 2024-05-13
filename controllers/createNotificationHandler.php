<?php

require_once '../models/notificationModel.php';

$notification = new Notification();

$title = $_POST['title'];
$description = $_POST['description'];

$result = $notification->createNotification($title, $description);

if ($result) {
    header('Location: notificationHandler.php');
} else {
    echo 'Failed to create notification.';
}

?>
