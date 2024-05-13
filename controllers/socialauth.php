<?php
  session_start();
require_once '../googlesignin/vendor/autoload.php';
require_once '../models/usermodel.php';


$clientID='422283932248-2fj18iv2uvb4q8uraj433re0qbf8jsiu.apps.googleusercontent.com';
$clientSecret='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';
$redirectUrl = 'http://localhost/addedjavascript/controllers/socialauth.php';

$client = new Google\Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUrl);
$client->addScope('profile');
$client->addScope('email');

if(isset($_GET['code']))
{
$token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
$client->setAccessToken($token);
$gauth = new Google\Service\Oauth2($client);
$google_info = $gauth ->userinfo->get();
$email =$google_info ->email;
$name =$google_info ->name;
//echo "welcome".$name."email:".$email;

$status = googlesignin($email);
        if($status){
            setcookie('flag', 'asif', time()+300, '/');
            if (trim($_SESSION['role'])=="admin")
            {
                header('location: ../views/admindashboard.php');
            }
            else if (trim($_SESSION['role'])=="vendor")
            {
                
                header('location: ../views/vendordashboard.php');
            }
            else if (trim($_SESSION['role'])=="customer")
            {
                header('location: ../views/customerdashboard.php');
            }
            else if (trim($_SESSION['role'])=="deliveryman")
            {
                header('location: ../views/deliverymandashboard.php');
            }
            
        }
        else{
            $_SESSION['name']= $name;
            $_SESSION['email']= $email;
            setcookie('flag', 'asif', time()+300, '/');
            header('location: ../views/updateinformation.php');
        }

}

else
{   
    echo "<table align='center' height=300>
    <tr height=300>
    <td align='center'>
        
    <h2>FoodRush is requesting access to: </h2>
    Your name and email address.
    </td>
    </tr>
    <tr >
        <td align='center'>
        
        <a href='".$client->createAuthUrl()."'><h3>Continue</h3></a>
        </td>
  
    </tr>
    <tr>
    <td align='center'>
    <a href='../views/login.php'><h3>Cancel</h3></a>
    </td>
    </tr>
  
</table>";
}
?>







