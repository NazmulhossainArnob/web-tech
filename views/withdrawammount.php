<?php
session_start();
if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="../css/style.css"/>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                           
                        </td>
                        <td align="right">
                        Logged in as <a href="viewprofile.php"> <?php echo $_SESSION['name'] ?></a> |
                                    <a class="button" href="../controllers/logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>



            <td width="300">
                    
                   
               
              <!-- <li> <a href="admindashboard.php">Admin Dashboard</a></li>
                    <li> <a href="search.php">Search</a></li>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li> -->

                        <?php
                        if (trim($_SESSION['role'])=="admin")
                    {
                        ?>
                        <a class="btn" href="appwallet.php">App Wallet</a>
                       <h1></h1>
                        <a class="btn" href="withdrawmoney.php">withdraw Money</a>
                        <h1></h1>
                         <a class="btn" href="admindashboard.php">Dashboard</a> 
                         <h1></h1>
                         <a class="btn" href="viewprofile.php">  Profile</a>
                         <h1></h1>
                         <a class="btn" href="setting.php">Settings</a>
                         
                         <h1></h1>
                        
                         <a class="btn" style='background-color:red;'href="../controllers/logout.php"> Logout</a> 
                    <?php
                    }
                    else if (trim($_SESSION['role'])=="vendor")
                    {
                        ?>
                       <a class="button" href="appwallet.php">App Wallet</a>
                        <h1></h1>
                        <a class="button" href="withdrawmoney.php">withdraw Money</a>
                       <h1></h1>

                         <a class="btn" href="viewprofile.php">  Profile</a>
                         <h1></h1>
                        <a class="btn" href="setting.php">Settings</a>
                        <h1></h1>
                        
                        <a class="btn" class="btn" style='background-color:red;' href="../controllers/logout.php"> Logout</a>

                        <?php
                    }
                    else if (trim($_SESSION['role'])=="customer")
                    {
                        ?>
                        <a class="button" href="appwallet.php">App Wallet</a>
                        <h1></h1>
                        <a class="button" href="restaurentbrowsing.php">Restaurent Browsing</a>
                        <h1></h1>
                        <a class="button" href="orders.php">Orders</a>
                        <h1></h1>                       
                        <a class="btn" href="search.php">Search</a>
                        <h1></h1>
                        <a class="btn" href="viewprofile.php">  Profile</a>
                        <h1></h1>
                        <a class="btn" href="setting.php">Settings</a>
                        <h1></h1>
                        
                        <a class="btn" style='background-color:red;' href="../controllers/logout.php"> Logout</a>
                        <?php
                    }
                    else if (trim($_SESSION['role'])=="deliveryman")
                    {
                        ?>
                         <a class="button" href="appwallet.php">App Wallet</a>
                         <h1></h1>
                         <a class="button" href="withdrawmoney.php">withdraw Money</a>
                         <h1></h1>                        
                         <a class="btn" href="viewprofile.php">  Profile</a>
                         <h1></h1>
                        <a class="btn" href="setting.php">Settings</a>
                         <h1></h1>
                        
                        <a class="btn" style='background-color:red;' href="../controllers/logout.php"> Logout</a>
                        <?php
                    }

                    ?>
                    

               </td>





                <td>
                  
                <?php
                   
                    if(isset($_REQUEST['submit']))
                    $_SESSION['withdrawmethod'] = $_REQUEST['withdrawmethod']; 
                    
                    { ?>
                    
                        
                        <form name="withdrawammountForm" action="../controllers/withdrawhandler.php" method="POST" onsubmit="return validateForm()">
                    
                      Account Number : <input class="input" type="text" name="accountnumber" value=""/> <br>
                      Ammount : <input class="input" type="text" name="ammount" value=""/> <br>
                            <input class="button" type="submit" name="submit" value="Submit">
                    
                            </form>
                            <?php
                    }
                    ?>
                </td>













            </tr>


            
        </table>
    </center>
    </body>
</html>

<?php
}else{
    header('location: login.php'); 
}
?>



<script>
     function validateForm() {
     var accountnumber = document.forms["withdrawammountForm"]["accountnumber"].value;
     var ammount = document.forms["withdrawammountForm"]["ammount"].value;
         if (accountnumber == "") {
            alert("Provide Account Number Please");
              return false;
                }
            
            else if(ammount =="" || ammount < 500)
            {
                alert("Minimum withdrawal ammount is 500");
              return false;
            }
        }
</script>




