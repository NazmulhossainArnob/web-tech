<!DOCTYPE html>
<html>
<head>
    <title>Create Notifications</title>
    <link rel="stylesheet" href="createNotification.css">
    <script>
        function validateForm() {
            const title = document.createNotificationForm.title;
            const description = document.createNotificationForm.description;

            if (title.value.trim() === "") {
                alert("Title must be filled out");
                title.focus();
                return false;
            }

            if (description.value.trim() === "") {
                alert("Description must be filled out");
                description.focus();
                return false;
            }

            return true;
        }


        
    </script>
</head>
<body>
    <fieldset>
        <legend>
            <h1>Create Notification</h1>
            <div class="dashboard">
                <a href="admindashboard.php">Dashboard</a>
                
            </div>
        </legend>
        <form name="createNotificationForm" method="post" action="../controllers/createNotificationHandler.php" onsubmit="return validateForm()">
            <label><b>Title:</b></label>
            <br>
            <input type="text" name="title">
            <br>
            <label><b>Description:</b></label>
            <br>
            <input type="text" name="description">
            <br><br>
            <input type="submit" value="Create">
        </form>
    </fieldset>
</body>

</html>

