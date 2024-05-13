<?php

require_once 'db.php';

// function addOrder($order_serial, $product_name, $quantity, $price_per_unit)
// {
//     $con = getConnection();
//     $order_serial = mysqli_real_escape_string($con, $order_serial);
//     $product_name = mysqli_real_escape_string($con, $product_name);
//     $quantity = mysqli_real_escape_string($con, $quantity);
//     $price_per_unit = mysqli_real_escape_string($con, $price_per_unit);
//     $sql = "INSERT INTO salesordersModel (order_serial, product_name, quantity, price_per_unit) VALUES ('$order_serial', '$product_name', '$quantity', '$price_per_unit')";
//     $status = mysqli_query($con, $sql);
//     mysqli_close($con);
//     return $status;
// }

function getOrders() {
    $conn = getConnection();
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error retrieving salesordersModel: " . mysqli_error($conn));
    }

    $orders = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $orders[] = $row;
    }

    mysqli_close($conn);
    return $orders;
}
