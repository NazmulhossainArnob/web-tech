<!DOCTYPE html>
<html>
	<head>
		<title>Food Delivery System Email Support</title>
		<link rel="stylesheet" href="email.css">
	</head>
	<body>
		<fieldset>
		
			<legend><h1>Email Support</h1></legend>
			<p>If you have any questions or issues related to the Food Delivery System, please don't hesitate to contact us by email.</p>
		
			<fieldset>
			<legend><h2>Send Email</h2></legend>
			<form name="emailForm" method="post" action="../controllers/send_email.php" onsubmit="return validateForm()">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name"><br>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email"><br>
				<label for="subject">Subject:</label>
				<input type="text" id="subject" name="subject"><br>
				<label for="message">Message:</label>
				<textarea id="message" name="message" rows="5" cols="30"></textarea><br>
				<input type="submit" value="Send">
				<input type="reset" value="Reset"><br/>
			</form>
			</fieldset>
		</fieldset>
	</body>
</html>
		<script>
			function validateForm() {
    			var name = document.emailForm.name.value;
    			var email = document.emailForm.email.value;
   				var subject = document.emailForm.subject.value;
    			var message = document.emailForm.message.value;
			
    		if (name == null || name == "") {
        		alert("Please enter your name");
        		return false;
			}
    		if (email == "") {
        		alert("Please enter your email");
        		return false;
			}
    		if (subject == null || subject == "") {
        		alert("Please enter the subject");
        		return false;
    		}
    		if (message == null || message == "") {
        		alert("Please enter your message");
        		return false;
   			 }
						
			
		}
		</script>
		<h3>You can contact us by phone number also : </h3s>
		<h3>01405833036</h3>