<?php 
require_once '../models/usermodel.php';
    session_start();
    if(isset($_REQUEST['submit'])){

        
        $username = $_SESSION['username']; 
        $password = $_SESSION['password']; 
       
       


              
        if(isset($_POST['submit']))
        {
            //$file = $_FILES['file'];
            $filename = $_SESSION['username'].time().$_FILES['file']['name'];

        $src = $_FILES['file']['tmp_name'];
            $des = "../assets/".$filename;
            move_uploaded_file($src,$des);
            $user = ['username'=> $username,'profilepicture'=> $filename];
            $status = editprofilepicture($user);
            if($status){
                $_SESSION['profilepicture']=$filename;
                header('location: ../views/viewprofile.php');
            }else{
                echo "DB error, try again";
            }

           // $_SESSION['pp']=$filename;
            //header('location: changeprofilepicture.php?success'); 
        }
           

        // if(empty($name)|| $email == "" || empty($gender)||empty($dob)||empty($address)||empty($phonenumber)) {
        //     echo "Null value ..";
            
        // }
       
        // else if(strtotime($dob) > time()){
        //     echo "Date of birth cannot be greater than today's date";
        // }
        
        

        // else if(strtotime($dob) > strtotime("-16 years")){
        //     echo "You must be at least 16 years old to register";
        // }
        // else
        // {
        //     $user = ['username'=> $username,'email'=> $email, 'name'=> $name, 'dob'=> $dob, 'gender'=> $gender, 'address'=> $address ,'phonenumber'=> $phonenumber];
        //     $status = editprofilepicture($user);
        //             if($status){
        //                 echo "updated successfully";
        //             }else{
        //                 echo "DB error, try again";
        //             }
        // }





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
    
}
    else{
        echo "invalid request...";
    }
?>