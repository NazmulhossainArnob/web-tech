<?php 

require_once('db.php');

function createComplain($restaurant, $product, $email, $subject, $details)
{
    $con = getConnection();
    $restaurant = mysqli_real_escape_string($con, $restaurant);
    $product = mysqli_real_escape_string($con, $product);
    $email = mysqli_real_escape_string($con, $email);
    $subject = mysqli_real_escape_string($con, $subject);
    $details = mysqli_real_escape_string($con, $details);
    $sql = "INSERT INTO complainmodel (restaurant, product, email, subject, details) VALUES ('$restaurant', '$product', '$email', '$subject', '$details')";
    $status = mysqli_query($con, $sql);
    mysqli_close($con);
    return $status;
}

function getComplains() {
    $conn = getConnection();
    $sql = "SELECT * FROM complainmodel ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
  
    if (!$result) {
        die("Error retrieving complains: " . mysqli_error($conn));
    }
    
    $complains = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $complains[] = $row;
    }
  
    mysqli_close($conn);
    return $complains;
}
?>
