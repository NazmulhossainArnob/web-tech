<?php
require_once '../models/order.php';

$orders = getOrders();
include '../views/view_sales_orders.php';
?>

<link rel="stylesheet" href="../views/sales_order_report.css">
