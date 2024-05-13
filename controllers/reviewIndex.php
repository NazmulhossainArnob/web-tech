<?php

require_once '../models/reviewModel.php';
require_once 'reviewController.php';

if(isset($_GET['action'])) 
{
  switch ($_GET['action']) 
  {
    case 'create_review':
      include '../views/reateReview.php';
      break;
    case 'view_reviews':
      $reviews = getReviews();
      //include '../views/review/viewReviews.php';
      break;
    default:
      include '../views/viewPageReview.php';
      break;
  }
} 
else 
{
  include '../views/viewPageReview.php';
}

?>


<link rel="stylesheet" href="../views/createReview.css">

<link rel="stylesheet" href="../views/viewReviews.css">