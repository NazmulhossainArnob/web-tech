<html>
<html>
<head>
  <title>Create Review &amp; Ratings</title>
  <link rel="stylesheet" href="createReview.css">
  <script>
    function validateForm() {
      var restaurantName = document.reviewForm.restaurantName.value;
      var productName = document.reviewForm.productName.value;
      var email = document.reviewForm.email.value;
      var rating = document.reviewForm.rating.value;
      var review = document.reviewForm.review.value;
      
      if (restaurantName == "" || productName == "" || email == "" || rating == "" || review == "") {
        alert("Please fill in all the fields.");
        return false;
      }
    }
  </script>
</head>
<body>
  <h1>Create Review &amp; Ratings</h1>
  <?php if (isset($_GET['msg']) && $_GET['msg'] == 'success'): ?>
    <p style="color: green;">Review created successfully!</p>
  <?php endif; ?>
  <?php if (isset($_GET['err']) && $_GET['err'] == 'empty_fields'): ?>
    <p style="color: red;">Please fill in all the fields.</p>
  <?php endif; ?>
  <form name="reviewForm" action="../controllers/reviewController.php" method="post" onsubmit="return validateForm()">
  <p>
      <label>Restaurant Name:</label>
      <input type="text" name="restaurantName">
    </p>
    <p>
      <label>Product Name:</label>
      <input type="text" name="productName">
    </p>
    <p>
      <label>User Email:</label>
      <input type="email" name="email">
    </p>
    <p>
      <label>Rating:</label>
      <select name="rating">
        <option value="">--Select rating--</option>
        <option value="1">1 star</option>
        <option value="2">2 stars</option>
        <option value="3">3 stars</option>
        <option value="4">4 stars</option>
        <option value="5">5 stars</option>
      </select>
    </p>
    <p>
      <label>Review:</label>
      <textarea name="review"></textarea>
    </p>
    <button type="submit" name="create_review">Submit</button>
  </form>
  <div class="dashboard">
                <a href="../views/customerdashboard.php">Dashboard</a>
                <a href="../controllers/reviewIndex.php?action=view_reviews">View Reviews & Ratings</a>
            </div>
  <br>
</body>
</html>
