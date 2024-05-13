<?php 
require_once '../models/usermodel.php';
    session_start();
  

        $data = $_POST['data'];
        $user = json_decode($data);
        $username = $user->username;
        $email = $user->email;
        $dob = $user->dob;
        $phonenumber = $user->phonenumber;
       


        if(empty($username)|| $email == ""||empty($dob)||empty($phonenumber)) {
            echo "Null value ..";
            
        }
       
        else if(strtotime($dob) > time()){
            echo "Date of birth cannot be greater than today's date";
        }
        
        

        else if(strtotime($dob) > strtotime("-16 years")){
            echo "You must be at least 16 years old ";
        }
        else
        {
            $user = ['username'=> $username,'email'=> $email,'dob'=> $dob,'phonenumber'=> $phonenumber];
            $status = checkuser($user);
                    if($status){
                 
                    $randompassword=rand(10000001,99999999);
                       
                    $result = randompassword($username,$randompassword);
                    if($result)
                        {
                 
                            echo "Your Temporary Password is : ".$randompassword;
                            
                        } 
                    else{
                        echo "something went wrong! tey again.";
                    }
                    }
                    else{
                        echo "Not a Valid User";
                    }
        }





        // if($password == $currentpassword) {

        //     if($newpassword == $retypenewpassword) {

        //         if (strlen(trim($_REQUEST['newpassword'])) >= 8)
        //         {
        //             $details = ['username'=> $username, 'password'=> $password, 'currentpassword'=> $currentpassword, 'newpassword'=> $newpassword, 'retypenewpassword'=> $retypenewpassword];
        //             $status = changepassword($details);
        //             if($status){
        //                 echo "password changed successfully";
        //             }else{
        //                 echo "DB error, try again";
        //             }
        //         }

        //         else
        //         {
        //             echo "password must be at least 8 character";
        //         }
            
            
        //     }
        //     else
        //     {
        //         echo "new password does not match";
        //     }
            
            
        // }
        // else{
        //     echo "current password is wrong";
        // }
    

  
?>