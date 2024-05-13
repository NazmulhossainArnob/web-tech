<?php

require_once '../models/notificationModel.php';

$notification = new Notification();

$id = $_POST['id'];

$result = $notification->deleteNotification($id);

if ($result) {
    header('Location: notificationHandler.php');
} else {
    echo 'Failed to delete notification.';
}

?>
