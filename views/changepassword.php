<?php
session_start();
if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Change Password</title>
        <link rel="stylesheet" href="viewstyle.css"/>

        <script>  
                    function validateform()
                    {  
                                let currentpassword=document.changepassword.currentpassword.value;
                                let newpassword=document.changepassword.newpassword.value;
                                let retypenewpassword=document.changepassword.retypenewpassword.value;  
                                
                                if (currentpassword==null || currentpassword==""){  
                                alert("Enter current password please");  
                                return false;  
                                }
                                else if (newpassword==null || newpassword==""){  
                                alert("Enter new password please");  
                                return false;  
                                }
                                else if (retypenewpassword==null || retypenewpassword==""){  
                                alert("Retype New password please");  
                                return false;  
                                }

                                else if(newpassword.length<8){  
                                alert("Password must be at least 8 characters long.");  
                                return false;  
                                }  

                                else if(newpassword == currentpassword){  
                                alert("Enter a different password from previous password");  
                                return false;  
                                }
                                else if(newpassword != retypenewpassword){  
                                alert("password didnt match");  
                                return false;  
                                }
                    

                    }  

                    function ajax()
                    {       
                                                let currentpassword=document.changepassword.currentpassword.value;
                                                let newpassword=document.changepassword.newpassword.value;
                                                let retypenewpassword=document.changepassword.retypenewpassword.value;  
                                                
                                                if (currentpassword==null || currentpassword==""){  
                                                // alert("Enter current password please"); 
                                                document.getElementById('cpass').innerHTML = "Enter current password please";
                                                return false;  
                                                }
                                                else if (newpassword==null || newpassword==""){  
                                                alert("Enter new password please");  
                                                return false;  
                                                }
                                                else if (retypenewpassword==null || retypenewpassword==""){  
                                                alert("Retype New password please");  
                                                return false;  
                                                }

                                                else if(newpassword.length<8){  
                                                alert("Password must be at least 8 characters long.");  
                                                return false;  
                                                }  

                                                else if(newpassword == currentpassword){  
                                                alert("Enter a different password from previous password");  
                                                return false;  
                                                }
                                                else if(newpassword != retypenewpassword){  
                                                alert("password didnt match");  
                                                return false;  
                                                }
                

                                                else
                                                {
                                                let data = {'currentpassword': currentpassword, 'newpassword': newpassword, 'retypenewpassword':retypenewpassword};
                                                let user = JSON.stringify(data);

                                                let xhttp = new XMLHttpRequest();
                                                //xhttp.open('get', 'abc.php?username='+username, true);
                                                xhttp.open('post', '../controllers/changepasswordhandler.php', true);
                                                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                                xhttp.send('data='+user);

                                                xhttp.onreadystatechange = function(){
                                                    
                                                    if(this.readyState == 4 && this.status == 200){
                                                      
                                                        document.getElementById('message').innerHTML = this.responseText;
                                                        
                                                       
                                                        
                                                    }
                                                }
                                            }

                     }
            </script>
    </head>
    <body>
    <center>
        <table height=720 width=1080>
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












                <td width="300" >
                   
                                   
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

                <fieldset class="fieldset">
                        <legend>CHANGE PASSWORD</legend>
                        <table>
                            <form name="changepassword" action="" method="POST" onsubmit="return validateform()">
                                            <tr>
                                                <td>Current Password</td>
                                                <td> <input class="inputfield" style="width: 100%;" type="password" name="currentpassword" value="" placeholder="Current Password"/> <br>
                                            
                                            </td>
                                            <td><p id='cpass' style="color: red;"></p></td>
                                                
                                                
                                            </tr>
                                            <tr>
                                            <td>New Password</td>
                                                <td> <input class="inputfield" style="width: 100%;"  type="password" name="newpassword" value="" placeholder="New Password"/>   </td>               
                                            </tr>
                                            <tr>
                                            <td>Retype New Password</td>
                                                <td> <input class="inputfield" style="width: 100%;"  type="password" name="retypenewpassword" value="" placeholder="Retype New Password"/>   </td>
                                            </tr>
                                          
                                            
                                </table>
                                <hr>
                                <input class="btn"  type="button" name="submit" value="Confirm" onclick="ajax()"/> <h3 id="message" style="color : green"></h3>
                         </form>
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



