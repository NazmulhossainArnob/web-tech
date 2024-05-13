<!DOCTYPE html>
<html>
<head>
    <title>Transaction History</title>
    <link rel="stylesheet" href="transactionHistory.css">
</head>
<body>
    <fieldset>
        <legend><h1>Transaction History</h1></legend>
        
        <table>
            <tr>
                <th>Transaction ID</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
            <?php if ($transactions): ?>
            <?php foreach($transactions as $transaction): ?>
                <tr>
                    <td><?php echo $transaction['transaction_id']; ?></td>
                    <td><?php echo '$' . number_format($transaction['amount'], 2); ?></td>
                    <td><?php echo $transaction['date']; ?></td>
                    <td><?php echo $transaction['time']; ?></td>
                    <td><?php echo $transaction['status']; ?></td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No transactions found.</td>
                </tr>
            <?php endif; ?>
        </table>
    </fieldset>
</body>
</html>
