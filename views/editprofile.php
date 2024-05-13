<?php
session_start();
if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="viewstyle.css"/>

        
        <script>  
                            function validateform()
                            {  
                                                let name=document.editprofile.name.value;
                                                let email=document.editprofile.email.value;
                                                let gender=document.editprofile.gender.value; 
                                                let phonenumber=document.editprofile.phonenumber.value;   
                                                let dob=document.editprofile.dob.value; 
                                                let address=document.editprofile.address.value;   
                                                
                                                if (name==null || name==""){  
                                                alert("Name can't be blank");  
                                                return false;  
                                                }
                                                else if (email==null || email==""){  
                                                alert("Email can't be blank");  
                                                return false;  
                                                }

                                                
                                                else if(phonenumber.length != 11){  
                                                alert("invalid phonenumber");  
                                                return false;  
                                                }
                                                else if(gender==null || gender==""){  
                                                alert("select gender please");  
                                                return false;  
                                                }

                                                let dobDate = new Date(dob);
                                                    if (isNaN(dobDate.getTime()) || dobDate > new Date()) {
                                                    alert("Please enter a valid date of birth");
                                                    return false;
                                                    }
                                                else if(address==null || address==""){  
                                                alert("Provide Address please");  
                                                return false;  
                                                }

                             }  
                             function ajax()
                             {

                                                let name=document.editprofile.name.value;
                                                let email=document.editprofile.email.value;
                                                let gender=document.editprofile.gender.value; 
                                                let phonenumber=document.editprofile.phonenumber.value;   
                                                let dob=document.editprofile.dob.value; 
                                                let address=document.editprofile.address.value; 
                                               
                                               
                                                if (name==null || name==""){  
                                                alert("Name can't be blank");  
                                                return false;  
                                                }
                                                else if (email==null || email==""){  
                                                alert("Email can't be blank");  
                                                return false;  
                                                }

                                                
                                                else if(phonenumber.length != 11){  
                                                alert("invalid phonenumber");  
                                                return false;  
                                                }
                                                else if(gender==null || gender==""){  
                                                alert("select gender please");  
                                                return false;  
                                                }

                                                let dobDate = new Date(dob);
                                                    if (isNaN(dobDate.getTime()) || dobDate > new Date()) {
                                                    alert("Please enter a valid date of birth");
                                                    return false;
                                                    }
                                                else if(address==null || address==""){  
                                                alert("Provide Address please");  
                                                return false;  
                                                }

                                                else
                                                {
                                                let data = {'name': name, 'email': email, 'gender':gender, 'dob':dob , 'phonenumber':phonenumber , 'address':address};
                                                let user = JSON.stringify(data);

                                                let xhttp = new XMLHttpRequest();
                                                //xhttp.open('get', 'abc.php?username='+username, true);
                                                xhttp.open('post', '../controllers/editprofilehandler.php', true);
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
                        
                                    <a class="btn"  style='background-color:red;' href="../controllers/logout.php">Logout</a>
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

                        <form name="editprofile" action="" method="POST" onsubmit="return validateform()" >
                        <fieldset class="fieldset">
                                <legend> EDIT PROFILE </legend>
                                <table>
                                            <tr>
                                                <td>Name</td>
                                                <td> <input class="inputfield" style="width: 300px;" type="text" name="name" value="<?php echo $_SESSION['name'];?>"/>   </td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                     <td>Email</td>  
                                                     <td><input class="inputfield" style="width: 300px;" type="email" name="email" value="<?php echo $_SESSION['email'];?>"/></td>               
                                            </tr>
                                            <tr>
                                                    <td>Gender</td>  
                                                     <td>   
                                                    <input type="radio" name="gender" value="Male" 
                                                     <?php 
                                                     if($_SESSION['gender']=="Male")
                                                     {
                                                        echo "checked";
                                                     }
                                                     ?>
                                                     /> Male
                                                             <input type="radio" name="gender" value="Female"
                                                             <?php 
                                                     if($_SESSION['gender']=="Female")
                                                     {
                                                        echo "checked";
                                                     }
                                                     ?>
                                                     /> Female
                                                             <input type="radio" name="gender" value="Other"
                                                             <?php 
                                                     if($_SESSION['gender']=="Other")
                                                     {
                                                        echo "checked";
                                                     }
                                                     ?>/> Other
                                                            
                                                    </td> 
                                            </tr>
                                            <tr>
                                                     <td>Date Of Birth</td>  
                                                     <td> <input class="inputfield" style="width: 300px;" type="date" name="dob" value="<?php echo $_SESSION['dob'];?>"/> </td> 
                                                     
                                            </tr>
                                            <tr>
                                                     <td>Phone Number</td>  
                                                     <td> <input class="inputfield" style="width: 300px;" type="number" name="phonenumber" value="<?php echo $_SESSION['phonenumber'];?>"/> </td> 
                                                     
                                            </tr>
                                            
                                </table>
                                <fieldset >
                                    <Legend>Address</Legend>
            
                                         <textarea class="inputfield" style="width: 100%;" name="address" id="" cols="50" rows="5"><?php echo $_SESSION['address'];?></textarea>
                                        
                </fieldset>
                <h1></h1>
                                <input class="btn" type="button" name="submit" value="Confirm" onclick="ajax();"/> <h3 id="message"  style="color: green;" ></h3> 
                                
                        </fieldset>
                        </form>
                      


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

