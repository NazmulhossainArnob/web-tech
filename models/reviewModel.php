<?php 

require_once('db.php');

function createReview($restaurantName, $productName, $email, $rating, $review)
{
    $con = getConnection();
    $restaurantName = mysqli_real_escape_string($con, $restaurantName);
    $productName = mysqli_real_escape_string($con, $productName);
    $email = mysqli_real_escape_string($con, $email);
    $rating = mysqli_real_escape_string($con, $rating);
    $review = mysqli_real_escape_string($con, $review);
    $sql = "INSERT INTO reviewmodel (restaurantName, productName, email, rating, review) VALUES ('$restaurantName', '$productName', '$email', '$rating', '$review')";
    $status = mysqli_query($con, $sql);
    mysqli_close($con);
    return $status;
}

function getReviews() {
    $conn = getConnection();
    $sql = "SELECT * FROM reviewmodel ORDER BY id DESC"; 
    $result = mysqli_query($conn, $sql);
  
    if (!$result) {
        die("Error retrieving reviews: " . mysqli_error($conn));
    }
    
    $reviews = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $reviews[] = $row;
    }
  
    mysqli_close($conn);
    return $reviews;
}
?>
