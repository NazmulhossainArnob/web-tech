<?php
session_start();
if(isset($_COOKIE['flag'])){
    
?>




<html>
    <head>
        <title>Change Profile Picture</title>
        <link rel="stylesheet" href="viewstyle.css"/>

        <script>
                    function fileValidation(){
                    var fileInput = document.getElementById('file');
                    var filePath = fileInput.value;
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                    if(!allowedExtensions.exec(filePath)){
                        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
                        fileInput.value = '';
                        return false;
                    }else{
                        //Image preview
                        if (fileInput.files && fileInput.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
                            };
                            reader.readAsDataURL(fileInput.files[0]);
                        }
                    }
                }

                function validateFileType() {
                        var inputElement = document.getElementById('file');
                        var files = inputElement.files;
                        if(files.length==0){
                            alert("Please choose a file first...");
                            return false;
                        }
                        else{
                            return true;
                            
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
                <form action="../controllers/changeprofilepicturehandler.php" method="POST" enctype="multipart/form-data">
                      <fieldset class="fieldset">
                        <legend>PROFILE PICTURE</legend>
                        <img height="250" width="250" src="<?php echo "../assets/".$_SESSION['profilepicture'] ?>"> <br>
                        <input type="file" name="file"  id="file" onchange="return fileValidation()" value=""/> <br>

                        <hr>
                        <input class="btn" type="submit" name="submit" value="Confirm" onclick="return validateFileType()"/>
                            
                      </fieldset>
                </form>
                </td>





            </tr>


            <tr>
                <td colspan="2" align="center"><fieldset class="fieldset" >
                    <legend>Help & Support</legend>
                    <a href="emailsupport.php">Contact Us</a>  <br>
                    <a href="../controllers/complainIndex.php?action=create_complain">Complain</a> <br>
                    <a href="FAQs.php">FAQ</a> <br>
            </fieldset></td>
            </tr>


            <tr height ="40" >
                <td colspan="2" align="center">Copyright © 2023 </td>
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








