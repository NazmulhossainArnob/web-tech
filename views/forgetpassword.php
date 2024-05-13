<html>
    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" href="viewstyle.css"/>

        <script>

                            function ajax()
                             {

                                                let username=document.forgetpassword.username.value;
                                                let email=document.forgetpassword.email.value;
                                
                                                let phonenumber=document.forgetpassword.phonenumber.value;   
                                                let dob=document.forgetpassword.dob.value; 
                             
                                              
                                                let data = {'username': username, 'email': email, 'dob':dob , 'phonenumber':phonenumber };
                                                let user = JSON.stringify(data);

                                                let xhttp = new XMLHttpRequest();
                                                //xhttp.open('get', 'abc.php?username='+username, true);
                                                xhttp.open('post', '../controllers/forgetpasswordhandler.php', true);
                                                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                                xhttp.send('data='+user);

                                                xhttp.onreadystatechange = function(){
                                                    
                                                    if(this.readyState == 4 && this.status == 200){
                                                      
                                                        document.getElementById('message').innerHTML = this.responseText;
                                                        
                                                       
                                                        
                                                    }
                                                }
                                            }

                             
        </script>
    </head>
    <body>
    <center>
        <table  height=720 width=1080>
            <tr height=70>

                <td > 
                    <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="../assets/logo.png">
                        </td>
                        <td align="right">
                    <a href="publichome.php">Home</a>  <a href="login.php">| Login</a>   <a href="registration.php">| Registration</a>  
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>
                <td>
                    <form name= "forgetpassword" action="">
                <fieldset class="fieldset">
                    <legend>Forgot Password</legend>
                    <table>

                    <tr>
                        <td>Enter Email</td>
                        <td><input class="inputfield" style="width: 300px;" type="email" name="email" value=""/> </td>
                    </tr>
                    <tr>
                        <td>Enter Username</td>
                        <td><input class="inputfield"  style="width: 300px;" type="text" name="username" value=""/></td>
                    </tr>
                    <tr>
                        <td>Enter Phone Number</td>
                        <td><input class="inputfield"  style="width: 300px;" type="number" name="phonenumber" value=""/> </td>
                    </tr>
                    <tr>
                        <td>Enter Date of Birth</td>
                        <td><input class="inputfield"  style="width: 300px;" type="date" name="dob" value=""/> </td>
                    </tr>
                   
                    </table>
                    <hr>
                     <input class="btn" type="button" name="submit" value="Confirm" onclick="ajax()">
                     <h3 id="message"></h3>
                </fieldset>  
                </form> 
                 </td>

            </tr>

            <tr>
                <td  align="center"><fieldset class="fieldset">
                    <legend>Help & Support</legend>
                    <a href="emailsupport.php">Contact Us</a>  <br>
                    <a href="../controllers/complainIndex.php?action=create_complain">Complain</a> <br>
                    <a href="FAQs.php">FAQ</a> <br>
            </fieldset></td>
            </tr>



            <!-- <tr height =40>
                <td align="center">Copyright © 2023</td>
            </tr> -->
        </table>
    </center>
    </body>
</html>