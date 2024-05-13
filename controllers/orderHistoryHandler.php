<?php
require_once('../models/orderHistoryModel.php');

$orders = getOrders();

if (!empty($orders)) {
    require_once('../views/orderHistory.php');
} else {
    echo "No orders found.";
}
?>


<link rel="stylesheet" href="../views/orderHistory.css">

