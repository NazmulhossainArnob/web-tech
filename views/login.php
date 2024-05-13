
<html>
    <head>
        <title>Login</title>
         <link rel="stylesheet" href="authstyle.css"/>
         <script>  
            function loginform()
            {  
            let username=document.login.username.value;  
            let password=document.login.password.value;
            
            
            if (username==null || username==""){  
            alert("username can't be blank");  
            return false;  
            }
            else if(password==null || password==""){  
            alert("Password cant not be empty");  
            return false;  
            }  
            }  
        </script>  
    </head>
    <body class="body">
    <center>
        <table height=720 width=1080>
            <tr height=70>
                <td >
                     <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="../assets/logo.png">
                        </td>
                        <td >
                    <a href="publichome.php">Home</a>  <a href="login.php">| Login</a>   <a href="privacypolicies.php">| Registration</a>  
                    </td>    
                </tr>    
                </table>
                    
                </td>
            </tr>
            <tr>
                <td>      
                    <H2>LOGIN</H2>
                    
                <form name ="login" method="POST" action="../controllers/logincheck.php" class="form" onsubmit="return loginform()" >
                           
                               
                              Username: <input class="inputfield" type="text" name="username" value="" placeholder="Username" /> <br>
                              Password: <input class="inputfield" type="password" name="password" value="" placeholder="Password" /> <br> 

                              <hr>
                              <input type="checkbox" name="rememberme" value=""/> Remember Me <br/>
                              <h1></h1>
                            <input type="submit" class="btn" name="submit" value="Sign In"/>
                            <input type="reset" class="btn" name="reset" value="Clear"> 
                            <a href="../controllers/socialauth.php"><input type="button" class="btn" name="googlebutton" value="SignIn With Google"/></a> <br>
                            <h1></h1>
                            <a href="forgetpassword.php"><i>Forgot Password?</i></a> 
                          
 
                            
            
        </form>
</td>
            </tr>

            <tr>
                <td align="center"></td>
            </tr>
            <!-- <tr>
                <td align="center"> <a href="https://www.facebook.com"><img src="../assets/fbsignin.png" height ="50" width="300"></a></td>
            </tr> -->

            <tr>
                <td align="center"><fieldset class="helpsupport">
                    <legend>Help & Support</legend>
                    <a href="emailsupport.php">Contact Us</a>  <br>
                    <a href="../controllers/complainIndex.php?action=create_complain">Complain</a> <br>
                    <a href="FAQs.php">FAQ</a> <br>
            </fieldset></td>
            </tr>

            
            <tr height =40>

                <!-- <td align="center">Copyright © 2023</td> -->
            </tr>
        </table>
    </center>
    </body>
</html>

                                       <?php
                                                    if(isset($_REQUEST['msg'])){

                                                        
                                                        
                                                        echo "<script>
                                                        alert('Invalid Credentials!!');
                                                        </script>";
                                                    }
                                        ?>

                                 
                                        