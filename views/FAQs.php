<!DOCTYPE html>
	<html>
		<head>
			<title>FAQs</title>
			<link rel="stylesheet" href="FAQs.css">
		</head>

		<body>
			<fieldset>
				<legend><h1>FAQs</h1></legend>

	<?php

        $faqs = array(
            "Question 1: What are the hours of operation for food delivery?" => "Answer: Our food delivery service is available from 11am to 9pm Monday to Sunday.",
            "Question 2: Is there a minimum order amount for food delivery?" => "Answer: Yes, there is a minimum order amount of 10 Taka for food delivery.",
            "Question 3: How long does food delivery take?" => "Answer: Delivery times vary depending on your location and order volume, but we aim to deliver your food within 30-45 minutes.",
            "Question 4: Can I cancel my food delivery order?" => "Answer: Yes, you can cancel your food delivery order before it has been prepared. Please contact our customer service team for assistance.",
            "Question 5: How do I track my food delivery order?" => "Answer: You can track your food delivery order using our online tracking system or by contacting our customer service team.",
            "Question 6: What payment methods do you accept for food delivery?" => "Answer: We accept payment by credit card, debit card, and cash on delivery for food delivery orders.",
            "Question 7: What if there is a problem with my food delivery order?" => "Answer: If there is a problem with your food delivery order, please contact our customer service team immediately so that we can resolve the issue."
            );

		foreach ($faqs as $question => $answer) {
			echo "<h3>$question</h3>";
			echo "<p>$answer</p>";
		}
		
	?>
	
		</body>
	</html>