<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="authstyle.css"/>

                <script>  
                function validateform(){  
                let name=document.reg.name.value;
                let email=document.reg.email.value;
                let username=document.reg.username.value; 
                let password=document.reg.password.value;
                let confirmpassword=document.reg.confirmpassword.value; 
                let gender=document.reg.gender.value; 
                let role=document.reg.role.value; 
                let phonenumber=document.reg.phonenumber.value;   
                let dob=document.reg.dob.value; 
                let address=document.reg.address.value;   
                
                if (name==null || name==""){  
                alert("Name can't be blank");  
                return false;  
                }
                else if (email==null || email==""){  
                alert("Email can't be blank");  
                return false;  
                }
                else if (username==null || username==""){  
                alert("Username can't be blank");  
                return false;  
                }
                else if(password.length<8){  
                alert("Password must be at least 8 characters long.");  
                return false;  
                }  
                else if(password != confirmpassword){  
                alert("password didnt match");  
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
                else if(role==null || role==""){  
                alert("select role please");  
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
                </script>

    </head>
    <body class="body" >
    <center>
        <table  height=720 width=1080>
            <tr height=70>
                <td >
                     <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="../assets/logo.png">
                        </td>
                        <td >
                    <a href="publichome.php">Home</a>  <a href="login.php">| Login</a>   <a href="registration.php">| Registration</a>  
                    </td>    
                </tr>    
                </table>
                    
                </td>
            </tr>
            <tr>
                <td>
                <H2>REGISTRATION</H2>      
                      <form name="reg" method="POST" action="../controllers/regcheck.php" class="form" onsubmit="return validateform()">
                           
                                <table>
                                    <tr>
                                        <td>Name</td>
                                        <td><input class="inputfield" type="text" name="name" value="" placeholder="Name"/> <br></td>
                                    </tr>
                                        
                                    <tr>
                                        <td>Email</td>
                                        <td><input class="inputfield" type="email" name="email" value="" placeholder="Email"/> <br>
                                    </tr>

                                    <tr>
                                        <td>Username</td>
                                        <td><input class="inputfield" type="text" name="username" value="" placeholder="Username"/> <br></td>
                                    </tr>

                                    <tr>
                                        <td>Password</td>
                                        <td><input class="inputfield" type="password" name="password" value="" placeholder="Password"/> <br></td>
                                    </tr>

                                    <tr>
                                        <td>Confirm Password</td>
                                        <td><input class="inputfield" type="password" name="confirmpassword" value="" placeholder="Retype Password"/> <br> </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Phone Number (+88)</td>
                                        <td><input class="inputfield" type="number" name="phonenumber" value="" placeholder="Phone Number"/> <br> </td>
                                        
                                    </tr>
                                </table>
                                <fieldset>
                                    <Legend>Gender</Legend>
            
                                         <input type="radio" name="gender" value="Male" checked/> Male
                                         <input type="radio" name="gender" value="Female"/> Female
                                        <input type="radio" name="gender" value="Other"/> Other <br>
                                 </fieldset>
                                 <h1></h1>
                                 <fieldset>
                                  <Legend>Date of Birth</Legend>
            
                                          <input class="inputfield" style="width: 200px;" type="date" name="dob" value=""/> 
                                </fieldset> 
                                <fieldset>
                                    <Legend>Role</Legend>
            
                                         <input type="radio" name="role" value="customer" checked/> Customer
                                         <input type="radio" name="role" value="deliveryman"/> Delivery Man
                                        <input type="radio" name="role" value="vendor"/> Vendor <br>
                                 </fieldset>
                                 <fieldset>
                                    <Legend>Address</Legend>
            
                                         <textarea class="inputfield" name="address" id="" cols="50" rows="3" placeholder="Address"></textarea>
                                        
                                 </fieldset>


                                              <h1></h1>
                            <input class="btn" type="submit" name="submit" value="Sign Up"/>
                            <input class="btn" type="reset" name="reset" value="Clear">
           
        </form>
</td>
            </tr>

            <!-- <tr>
                <td align="center"><fieldset class="helpsupport">
                    <legend>Help & Support</legend>
                    <a href="">Contact Us</a>  <br>
                    <a href="">Complain</a> <br>
                    <a href="">FAQ</a> <br>
            </fieldset></td>
            </tr>


            <tr height =40>
                <td align="center">Copyright © 2023</td>
            </tr> -->
        </table>
    </center>
    </body>
</html>

