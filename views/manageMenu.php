<html>
<head>
  <title>Manage Menu</title>
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
form {
  display: flex;
  flex-direction: column;
  width: 400px;
}
label {
  font-size: 16px;
  margin-bottom: 5px;
}
input[type="text"],
textarea {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  font-size: 16px;
}
input[type="number"],
textarea {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  font-size: 16px;
}
input[type="file"],
textarea {
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  font-size: 16px;
}
input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #3e8e41;
}
ul {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
  margin-top: 20px;
}
li {
  margin-right: 10px;
}
a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
  font-size: 16px;
}
a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>
  <fieldset>
  <legend><h1>Manage Menu</h1></legend>
  <p>Welcome to the menu management page. Here you can add, edit, and delete items from your menu.</p>
  <h2>Add Item</h2>
  <form method="post" action="../controllers/manageMenuHandler.php" enctype="multipart/form-data" onsubmit="return validateAddItemForm()">
    <label for="item_name">Item Name:</label>
    <input type="text" id="item_name" name="item_name">
    <label for="item_description">Item Description:</label>
    <textarea id="item_description" name="item_description"></textarea>
    <label for="item_price">Item Price:</label>
    <input type="number" id="item_price" name="item_price">
    <label for="category">Category:</label>
    <input type="text" id="category" name="category">
    <label for="image">Image:</label>
    <input type="file" name="file" value=""/> <br> 
    
    <input type="submit" name="submit" value="Add Item">
    
  </form>
  <ul>
    <li><a href="viewmenu.php"><b>view Menu</b></a></li>
    
  </ul>
  <a href="vendordashboard.php">Dashboard</a>
  </fieldset>
  
</body>
</html>

<script>
function validateAddItemForm() {
  let itemName = document.getElementById("item_name").value;
  let itemDescription = document.getElementById("item_description").value;
  let itemPrice = document.getElementById("item_price").value;
  if (itemName === "") {
    alert("Please enter an item name");
    return false;
  }
  if (itemDescription === "") {
    alert("Please enter an item description");
    return false;
  }
  if (itemPrice === "") {
    alert("Please enter an item price");
    return false;
  }
  if (isNaN(itemPrice)) {
    alert("Please enter a valid item price");
    return false;
  }
  return true;
}
</script>