<!DOCTYPE html>
<html>
<head>
  <title>Create Complain</title>
  <link rel="stylesheet" href="createComplain.css">
  <script>
    function validateForm() {
      var restaurant = document.complainForm.restaurant.value;
      var product = document.complainForm.product.value;
      var email = document.complainForm.email.value;
      var subject = document.complainForm.subject.value;
      var details = document.complainForm.details.value;
      
      if (restaurant == "" || product == "" || email == "" || subject == "" || details == "") {
        alert("Please fill in all the fields.");
        return false;
      }
    }
  </script>
</head>
<body>
  <h1>Give Complain</h1>
  <?php if (isset($_GET['msg']) && $_GET['msg'] == 'success'): ?>
    <p style="color: green;">Complain created successfully!</p>
  <?php endif; ?>
  <?php if (isset($_GET['err']) && $_GET['err'] == 'empty_fields'): ?>
    <p style="color: red;">Please fill in all the fields.</p>
  <?php endif; ?>
  <form name="complainForm" action="../controllers/complainController.php" method="post" onsubmit="return validateForm()">
    <p>
      <label>Restaurant Name:</label>
      <input type="text" name="restaurant">
    </p>
    <p>
      <label>Product Name:</label>
      <input type="text" name="product">
    </p>
    <p>
      <label>Email:</label>
      <input type="email" name="email">
    </p>
    <p>
      <label>Complain Subject:</label>
      <input type="text" name="subject">
    </p>
    <p>
      <label>Complain Details:</label>
      <textarea name="details"></textarea>
    </p>
    <button type="submit" name="create_complain">Submit</button>
  </form>
  <br>
  
  
</body>
</html>
