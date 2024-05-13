<html>
  <head>
  <style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}
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
		table {
			border-collapse: collapse;
			width: 100%;
		}
		td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ccc;
		}
		button {
			padding: 10px 20px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			cursor: pointer;
			border-radius: 3px;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}
		button:hover {
			background-color: #3e8e41;
		}
		input[type=number] {
			padding: 10px;
			width: 50%;
			border-radius: 3px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			font-size: 16px;
		}
		pre {
			font-size: 16px;
		}
	</style>
  </head> 
<body>  
    <fieldset>  
        <legend><h2>Point Redemption</h2></legend>  
        <pre>  
            Your point    :2500 <br>  
            Redem Point   :<input type="number" id="redem-point" name="redem-point" placeholder="Enter point">  
        </pre>  
       <table>  
        <tr>  
        <td>100 point = 10 Taka</td>  
        <td><button onclick="applyDiscount(100,10)">APPLY</button></td>  
        </tr>
        <tr>
        <td>500 point = 50 Taka</td>  
        <td><button onclick="applyDiscount(500,50)">APPLY</button></td>  
        </tr>
        <tr>  
        <td>1000 point = 100 Taka</td>  
        <td><button onclick="applyDiscount(1000,100)">APPLY</button>  
        </tr>  
       </table>
       <a href="customerdashboard.php">Dashboard</a>
</fieldset>  
</body>  

<script> 
  function applyDiscount(threshold, discount) { 
    var redemPoint = document.getElementById("redem-point").value; 

    if (redemPoint === "" || isNaN(redemPoint)) { 
      alert("Please enter a valid number of points"); 
      return; 
    } 
    if (redemPoint < threshold) { 
      alert("You need at least " + threshold + " points to apply this discount"); 
      return; 
    } 
    var totalDiscount = Math.floor(redemPoint / threshold) * discount; 
    alert("You can apply a discount of " + totalDiscount + " Taka with " + redemPoint + " points."); 
  } 
</script> 
</html>