<?php
if (!isset($inventory)) {
    header("Location: ../controllers/show_inventory_controller.php");
    exit;
}
?>

<html>
<head>
    <title>Show Inventory</title>
    <link rel="stylesheet" href="show_inventory.css">
</head>
<body>
    <div class="container">
        <h1>Inventory</h1>
        <table>
            <thead>
                <tr>
                    <th>Product Serial</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price per Unit</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventory as $item): ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['product_serial']); ?></td>
                    <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                    <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                    <td><?php echo htmlspecialchars($item['price_per_unit']); ?></td>
                    <td><a href="../controllers/edit_product_controller.php?product_serial=<?php echo urlencode($item['product_serial']); ?>">Edit</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
       
    </div>
</body>
</html>
