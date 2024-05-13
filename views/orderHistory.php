<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
    <link rel="stylesheet" href="orderHistory.css">
</head>
<body>
    <fieldset>
        <legend><h1>Order History</h1></legend>
        <br>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Food Name</th>
                <th>Description</th>
                <th>Price</th>
                <!-- <th>Time</th> -->
            </tr>
            <?php if ($orders): ?>
            <?php foreach($orders as $order): ?>
                <tr>
                    <td><?php echo $order['orderid']; ?></td>
                    <td><?php echo $order['customername']; ?></td>
                  
                    <td><?php echo $order['foodname']; ?></td>
                    <td><?php echo $order['description']; ?></td>
                    <td><?php echo $order['price']; ?></td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No orders found.</td>
                </tr>
            <?php endif; ?>
        </table>
    </fieldset>
</body>
</html>
