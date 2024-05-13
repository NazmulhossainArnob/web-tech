<?php
session_start();

require_once '../models/complainModel.php';

if (isset($_POST['create_complain'])) {
  $restaurant = $_POST['restaurant'];
  $product = $_POST['product'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $details = $_POST['details'];

  if (!empty($restaurant) && !empty($product) && !empty($email) && !empty($subject) && !empty($details)) {
    createComplain($restaurant, $product, $email, $subject, $details);
    header('Location: ../views/createComplain.php?msg=success');
  } else {
    header('Location: ../views/createComplain.php?err=empty_fields');
  }
}

if (isset($_GET['action']) && $_GET['action'] == 'view_complains') {
    $complains = getComplains();
    if (!$complains) {
      die("Error retrieving complains.");
    }
    require_once '../views/viewComplains.php';
  }
?>
