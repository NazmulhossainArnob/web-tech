<?php
    
      $_SESSION['foodid'] =$_REQUEST['foodid'];
     
    

?>

<html>
  <head>
    <title>Edit Item</title>
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
        display: block;
        margin-bottom: 5px;
      }
      select,
      input[type="text"],
      textarea {
        margin-bottom: 10px;
        width:50%;
        padding: 5px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 10px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <fieldset>
    <legend><h2>Edit Item</h2></legend>
   
    <form method="post" action="../controllers/editmenuhandler.php" enctype="multipart/form-data" onsubmit="return validateAddItemForm()">
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
    
    <input type="submit" name="submit" value="Update">
    
  </form>
    </fieldset>
  </body>
</html> 
<script> 
  function validateForm() { 
    var name = document.getElementById("item_name").value; 
    var description = document.getElementById("item_description").value; 
    var price = document.getElementById("item_price").value; 
    if (name == "") { 
      alert("Please enter a new item name."); 
      return false; 
    }
    if (description == "") { 
      alert("Please enter a new item description."); 
      return false; 
    }
    if (price == "" || isNaN(price)) { 
      alert("Please enter a valid price for the new item."); 
      return false; 
    } 
    return true; 
  } 
</script>