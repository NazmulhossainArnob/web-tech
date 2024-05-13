<!DOCTYPE html>
<html>
<head>
  <title>View Complains</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: lightgrey;
    }

    h1 {
        color: black;
        text-align: center;
        margin-top: 20px;
    }

    table {
        width: 90%;
        margin: 20px auto;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid grey;
    }

    th, td {
        padding: 15px;
        text-align: left;
        color: black;
    }

    th {
      background-color: forestgreen;
      color: forestgreen;
    }

    tr:nth-child(even) {
        background-color: forestgreen;
    }

    a {
        display: inline-block;
        margin: 5px;
        background-color: forestgreen;
        color: black;
        text-align: center;
        padding: 10px;
        text-decoration: none;
        border-radius: 5px;
    }

    a:hover {
        background-color: darkgreen;
    }

    h3 {
        text-align: center;
    }
  </style>
</head>
<body>
  <h1>Complains</h1>
  <table>
    <thead>
      <tr>
        <th>Restaurant Name</th>
        <th>Product Name</th>
        <th>Email</th>
        <th>Complain Subject</th>
        <th>Complain Details</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($complains as $complain): ?>
        <tr>
          <td><?php echo $complain['restaurant']; ?></td>
          <td><?php echo $complain['product']; ?></td>
          <td><?php echo $complain['email']; ?></td>
          <td><?php echo $complain['subject']; ?></td>
          <td><?php echo $complain['details']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <h3>
 
  
  </h3>
</body>
</html>
