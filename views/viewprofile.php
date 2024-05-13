<?php
session_start();
if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="viewstyle.css"/>
    </head>
    <body>
    <center>
        <table width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="../assets/logo.png">
                        </td>
                        <td align="right">
                        Logged in as <a href="viewprofile.php"> <?php echo $_SESSION['name'] ?></a> |
                                    <a class="btn"  style='background-color:red;' href="../controllers/logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>












                <td  width="300">
                    
                                
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
                          <a class="btn" href="vendordashboard.php">Dashboard</a> 
                         <h1></h1>
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

                        <a class="btn" href="customerdashboard.php">Dashboard</a> 
                         <h1></h1>
                        <a class="button" href="appwallet.php">App Wallet</a>
                        <h1></h1>
                        <a class="button" href="restaurentbrowsing.php">Restaurents</a>
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

                        <a class="btn" href="deliverymandashboard.php">Dashboard</a> 
                         <h1></h1>
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

                        <fieldset class="fieldset">
                                <legend> PROFILE </legend>
                                <table>
                                    <tr>

                                    <td>
                                            <table width=600 height=200>
                                                <tr>
                                                    <td >Name</td>
                                                    <td align="left"> :<?php echo $_SESSION['name'] ?>  </td>
                                                    
                                                  
                                                </tr>
                                                <tr>
                                                            <td>email</td>  
                                                            <td>:<?php echo $_SESSION['email'] ?> </td>               
                                                </tr>
                                                <tr>
                                                        <td>Gender</td>  
                                                            <td>:<?php echo $_SESSION['gender'] ?> </td> 
                                                </tr>
                                                <tr>
                                                            <td>Date Of Birth</td>  
                                                            <td>:<?php echo $_SESSION['dob'] ?> </td> 
                                                            
                                                </tr>
                                                <tr >
                                                            <td>Phone Number</td>  
                                                            <td>:<?php echo $_SESSION['phonenumber'] ?> </td> 
                                                            
                                                </tr>
                                                <tr>
                                                            <td>Address</td>  
                                                            <td>:<?php echo $_SESSION['address'] ?> </td> 
                                                            
                                                </tr>
                                                <tr>
                                                <td>
                                               
                                                <h1></h1>
                                                </td>
                                            </tr>
                                                <tr>
                                                    
                                                    <td colspan="4"><a class="btn" href="editprofile.php">Edit Profile </a></td>
                                                    
                                                </tr>
                                            </table>
                                    </td>
                                    <td>
                                        <table>
                                            <tr >
                                                <td>
                                                     <img src="<?php echo "../assets/".$_SESSION['profilepicture'] ?>" height =200 width=150>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                <h1></h1>
                                                </td>
                                            </tr>
                                            <tr>
                                            
                                                <td align="center"><a class="btn" href="changeprofilepicture.php">Change Picture </a> </td>
                                            
                                            </tr>
                                        </table>
                                    </td>
                                    </tr>

                                </table>
                        </fieldset>


                </td>













            </tr>


            <tr>
                <td colspan="2" align="center"><fieldset class="fieldset">
                    <legend>Help & Support</legend>
                    <a href="emailsupport.php">Contact Us</a>  <br>
                    <a href="../controllers/complainIndex.php?action=create_complain">Complain</a> <br>
                    <a href="FAQs.php">FAQ</a> <br>
            </fieldset></td>
            </tr>



            <tr height ="40" >
                <td colspan="2" align="center">Copyright © 2023</td>
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