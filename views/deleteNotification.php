<!DOCTYPE html>
<html>
<head>
    <title>Notifications</title>
    <link rel="stylesheet" type="text/css" href="deleteNotification.css">
<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this notification?");
    }
</script>
</head>
<body>
    <fieldset>
        <legend><h1>Notification List</h1>
        <div class="dashboard">
                <a href="../views/admindashboard.php">Dashboard</a>
                
            </div>
    </legend>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Descriptions</th>
            <th>Actions</th>
        </tr>
        <?php if (!is_null($notifications)) {
            foreach ($notifications as $notification) { ?>
                <tr>
                    <td><?= $notification['id'] ?></td>
                    <td><?= $notification['title'] ?></td>
                    <td><?= $notification['description'] ?></td>
                    <td>
                        <form method="post" action="../controllers/deleteNotificationHandler.php" onsubmit="return confirmDelete();">
                            <input type="hidden" name="id" value="<?= $notification['id'] ?>">
                            <input type="submit" value="Delete" style="background-color: darkred; color: white; padding: 5px 10px; border: none; border-radius: 3px; cursor: pointer;">
                        </form>
                    </td>
                </tr>
        <?php } 
        } ?>
    </table>
    </fieldset>
</body>
</html>
