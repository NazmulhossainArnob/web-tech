<?php
require_once('db.php');

function getOrders() {
    $conn = getConnection();
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        $orders = null;
    }
    mysqli_close($conn);
    return $orders;
}
?>
