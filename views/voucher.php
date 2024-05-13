<html>
  <head>
    <title>Voucher Form</title>
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
      body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 1rem;
}

table td {
  padding: 0.5rem;
}

label {
  display: block;
  margin-bottom: 0.5rem;
  font-size: 1rem;
  font-weight: bold;
  color: #333;
}

input[type="text"],
input[type="number"] {
  padding: 0.5rem;
  border-radius: 4px;
  border: 1px solid #ccc;
  width: 100%;
  margin-bottom: 1rem;
}

button[type="submit"] {
  padding: 0.5rem 1rem;
  background-color: #4caf50;
  border: none;
  color: #fff;
  font-size: 1rem;
  font-weight: bold;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}

input[type="button"] {
  padding: 0.5rem 1rem;
  background-color: #ccc;
  border: none;
  color: #333;
  font-size: 1rem;
  font-weight: bold;
  border-radius: 4px;
  cursor: pointer;
}

input[type="button"]:hover {
  background-color: #999;
}

h2 {
  font-size: 1rem;
  font-weight: bold;
  color: #333;
  margin-bottom: 0.5rem;
}

    </style>
  </head>
  <body>
    <fieldset>
    <legend><h2>Voucher Form</h2></legend>
    <table>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
        </table>
    <form name="Vform" method="post" action="../controllers/voucherHandler.php" onsubmit="return validateForm()">
      <label for="voucher-code">Voucher Code:</label>
      <input type="text" id="voucher-code" name="voucher-code" placeholder="Enter voucher code"><br>
      <label for="discount-amount">Discount Amount:</label>
      <input type="number" id="discount-amount" name="discount-amount" placeholder="Enter discount amount"><br>
      <label for="minimum-spend">Minimum Spend:</label>
      <input type="number" id="minimum-spend" name="minimum-spend" placeholder="Enter minimum spend"><br>
      <input type="button" name="click" value="Re-Check" onclick="ajax()">
      <button type="submit" id="apply-btn">Apply</button>
      <a href="admindashboard.php">Dashboard</a>
      </fieldset>
    </form>

    <script>     
      function validateForm() {     
        var voucherCode = document.Vform["voucher-code"].value;   
        var discountAmount = document.Vform["discount-amount"].value;   
        var minimumSpend = document.Vform["minimum-spend"].value;   
        if (voucherCode == "" || discountAmount == "" || minimumSpend == "") {     
          alert("Please fill all fields");     
          return false;     
        }     
        return true;   
      }     


      function ajax (){
        var voucherCode = document.Vform["voucher-code"].value;   
        var discountAmount = document.Vform["discount-amount"].value;   
        var minimumSpend = document.Vform["minimum-spend"].value; 
			    
                
          let data = {
				 'voucherCode' : voucherCode,
				 'discountAmount' :discountAmount,
				 'minimumSpend' : minimumSpend 
        };

			let info = JSON.stringify(data);

        let xhttp = new XMLHttpRequest();

          xhttp.open('post', 'server.php', true);
          xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          xhttp.send('data=' + info);
          xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                let info = JSON.parse(this.responseText);
                document.getElementsByTagName('h2')[0].innerHTML ="voucherCode : "+info.voucherCode;
                document.getElementsByTagName('h2')[1].innerHTML ="discountAmount : " +info.discountAmount;
                document.getElementsByTagName('h2')[2].innerHTML ="minimumSpend :" +info.minimumSpend;
			}
		}

	}
    </script>   
  </body>
</html>
