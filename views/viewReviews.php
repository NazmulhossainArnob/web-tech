<!DOCTYPE html>
<html>
<head>
  <title>View Reviews</title>
</head>
<body>
  <h1>Reviews</h1>
  <table>
    <thead>
      <tr>
        <th>Restaurant Name</th>
        <th>Product Name</th>
        <th>User Email</th>
        <th>Rating</th>
        <th>Review</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($reviews as $review): ?>
        <tr>
          <td><?php echo $review['restaurantName']; ?></td>
          <td><?php echo $review['productName']; ?></td>
          <td><?php echo $review['email']; ?></td>
          <td><?php echo $review['rating']; ?></td>
          <td><?php echo $review['review']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>

