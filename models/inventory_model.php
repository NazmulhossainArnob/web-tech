<?php
require_once('db.php');

function addProduct($product_serial, $product_name, $quantity, $price_per_unit) {
    $con = getConnection();
    $product_serial = mysqli_real_escape_string($con, $product_serial);
    $product_name = mysqli_real_escape_string($con, $product_name);
    $quantity = mysqli_real_escape_string($con, $quantity);
    $price_per_unit = mysqli_real_escape_string($con, $price_per_unit);

    $sql = "INSERT INTO inventory (product_serial, product_name, quantity, price_per_unit) VALUES ('$product_serial', '$product_name', '$quantity', '$price_per_unit')";
    $status = mysqli_query($con, $sql);
    mysqli_close($con);
    return $status;
}

function getInventory() {
    $conn = getConnection();
    $sql = "SELECT * FROM inventory";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error retrieving inventory: " . mysqli_error($conn));
    }

    $inventory = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $inventory[] = $row;
    }

    mysqli_close($conn);
    return $inventory;
}


function getProductBySerial($product_serial) {
    $conn = getConnection();
    $product_serial = mysqli_real_escape_string($conn, $product_serial);
    $sql = "SELECT * FROM inventory WHERE product_serial = '$product_serial'";
    $result = mysqli_query($conn, $sql);
  
    if (!$result) {
        die("Error retrieving product: " . mysqli_error($conn));
    }
    
    $product = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $product;
}


function updateProduct($product_serial, $product_name, $quantity, $price_per_unit) {
    $conn = getConnection();
    $product_serial = mysqli_real_escape_string($conn, $product_serial);
    $product_name = mysqli_real_escape_string($conn, $product_name);
    $quantity = mysqli_real_escape_string($conn, $quantity);
    $price_per_unit = mysqli_real_escape_string($conn, $price_per_unit);
    $sql = "UPDATE inventory SET product_name = '$product_name', quantity = '$quantity', price_per_unit = '$price_per_unit' WHERE product_serial = '$product_serial'";
    $status = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $status;
    }

?>
