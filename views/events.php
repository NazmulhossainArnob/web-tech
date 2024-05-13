<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<style>
		fieldset {
        border: 2px solid #ccc;
        padding: 10px;
        max-width: 500px;
        margin: auto;
      }
		legend {
        font-size: 24px;
        font-weight: bold;
      }
		label {
			display: inline-block;
			width: 150px;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="time"], textarea {
			width: 250px;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 3px;
			margin-bottom: 10px;
		}
		input[type="submit"] {
			padding: 5px 20px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<fieldset>
	<legend><h2>Events</h2></legend>
	<form name="eventsForm" action="../controllers/eventsHandler.php" method="post" onsubmit="return validateForm()">
		<table>
			<tr>
				<td>Event Title:</td>
				<td><input type="text" name="eventTitle"></td>
			</tr>
			<tr>
				<td>Event Duration:</td>
				<td><input type="text" name="eventDuration"></td>
			</tr>
			<tr>
				<td>Start Time:</td>
				<td><input type="date" name="startTime"></td>
			</tr>
			<tr>
				<td>End Time:</td>
				<td><input type="date" name="endTime"></td>
			</tr>
			<tr>
				<td>Event Description:</td>
				<td><textarea name="eventDescription"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save"></td>
			</tr>
		</table>
	</form>
	<a href="viewevent.php">Event list</a>
	<a href="admindashboard.php">Dashboard</a>
	</fieldset>
</body>
</html>

<script>
		function validateForm() {
			var eventTitle = document.eventsForm.eventTitle.value;
			var eventDuration = document.eventsForm.eventDuration.value;
			var startTime = document.eventsForm.startTime.value;
			var endTime = document.eventsForm.endTime.value;
			var eventDescription = document.eventsForm.eventDescription.value;

			if (eventTitle == "") {
				alert("Please enter event title.");
				return false;
			}

			if (eventDuration == "") {
				alert("Please enter event duration.");
				return false;
			}

			if (startTime == "") {
				alert("Please enter start time.");
				return false;
			}

			if (endTime == "") {
				alert("Please enter end time.");
				return false;
			}

			if (eventDescription == "") {
				alert("Please enter event description.");
				return false;
			}
		}
	</script>