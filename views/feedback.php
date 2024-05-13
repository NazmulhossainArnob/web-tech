<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <fieldset>
        <legend><h1>Feedback</h1></legend>
        <form name="feedbackForm" method="post" action="../controllers/feedbacksubmit.php" onsubmit="return validateForm()">
            <label>Name:</label>
            <input type="text" name="name"><br/>
            <label>Email:</label>
            <input type="email" name="email"><br/>
            <label>Feedback:</label>
            <textarea name="feedback" rows="5" cols="30"></textarea><br/>
            <button type="submit">Submit</button>
        </form>
    </fieldset>
</body>
</html>
    <script>
        function validateForm() {
            var name = document.feedbackForm.name.value;
            var email = document.feedbackForm.email.value;
            var feedback = document.feedbackForm.feedback.value;
            if (name == null || name == "") {
                alert("Please enter your name");
                return false;
            }
            if (email == "") {
                alert("Please enter your email");
                return false;
            }
            if (feedback == null || feedback == "") {
                alert("Please enter your feedback");
                return false;
            }
            return true;
        }
    </script>