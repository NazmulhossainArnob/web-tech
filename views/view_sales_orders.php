<?php
if (!isset($orders)) 
    {
        header("Location: ../controllers/view_sales_orders_controller.php");
        exit;
    }
?>

<html>
<head>
    <title>Sales & Order Report</title>
    <link rel="stylesheet" href="sales_order_report.css">
</head>
<body>
    <div class="container">
        <h1>Sales & Order Report</h1>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Food ID</th>
                    <!-- <th>Food ID</th> -->
                    <th>Product Name</th>
                    <th>Description</th>
                    <!-- <th>Price per Unit</th> -->
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?php echo htmlspecialchars($order['orderid']); ?></td>
                    <td><?php echo htmlspecialchars($order['customername']); ?></td>
                    <td><?php echo htmlspecialchars($order['foodid']); ?></td>
                    <td><?php echo htmlspecialchars($order['foodname']); ?></td>
                    <td><?php echo htmlspecialchars($order['description']); ?></td>
                    <td><?php echo htmlspecialchars($order['price']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
       
    </div>
</body>
</html>
