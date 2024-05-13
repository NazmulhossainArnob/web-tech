<?php
session_start();

require_once '../models/reviewModel.php';

if (isset($_POST['create_review'])) {
  $restaurantName = $_POST['restaurantName'];
  $productName = $_POST['productName'];
  $email = $_POST['email'];
  $rating = $_POST['rating'];
  $review = $_POST['review'];

  if (!empty($restaurantName) && !empty($productName) && !empty($email) && !empty($rating) && !empty($review)) {
    createReview($restaurantName, $productName, $email, $rating, $review);
    header('Location: ../views/createReview.php?msg=success');
  } else {
    header('Location: ../views/createReview.php?err=empty_fields');
  }
}

if (isset($_GET['action']) && $_GET['action'] == 'view_reviews') {
    $reviews = getReviews();
    if (!$reviews) {
      die("Error retrieving reviews.");
    }
    require_once '../views/viewReviews.php';
  }
?>
