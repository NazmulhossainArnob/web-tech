<?php 
require_once '../models/usermodel.php';
session_start();

        $data = $_POST['data'];
        $user = json_decode($data);
        $username = $_SESSION['username']; 
        $password = $_SESSION['password']; 
        $currentpassword = $user-> currentpassword;
        $newpassword = $user-> newpassword;
        $retypenewpassword = $user-> retypenewpassword;
       


        if($password == $currentpassword) {

            if($newpassword == $retypenewpassword) {

                if (strlen(trim($newpassword)) >= 8)
                {
                    $details = ['username'=> $username, 'password'=> $password, 'currentpassword'=> $currentpassword, 'newpassword'=> $newpassword, 'retypenewpassword'=> $retypenewpassword];
                    $status = changepassword($details);
                    if($status){
                        $_SESSION['password']=$newpassword;
                        echo "password changed successfully!";
                    }else{
                        echo "DB error, try again";
                    }
                }

                else
                {
                    echo "password must be at least 8 character";
                }
            
            
            }
            else
            {
                echo "new password does not match";
            }
            
            
        }
        else{
            echo "current password is wrong";
        }
    

?>