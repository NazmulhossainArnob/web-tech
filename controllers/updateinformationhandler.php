<?php 
require_once "../models/usermodel.php";
    session_start();
    if(isset($_REQUEST['submit'])){

     
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $email = $_SESSION['email'];
        $gender = $_REQUEST['gender']; 
        $dob = $_REQUEST['dob'];
        $name = $_SESSION['name'];
        $role = $_REQUEST['role'];
        $confirmpassword= $_REQUEST['confirmpassword'];
        $address= $_REQUEST['address'];
        $phonenumber= $_REQUEST['phonenumber'];
        $joiningdate = date("Y-m-d");
        $profilepicture = "profilepicture.png";

       

        if($username == "" || $password == "" ||empty($name)|| $email == "" || empty($gender)||empty($dob)||empty($role)||empty($address)||empty($phonenumber)) {
            echo "Null value ..";
            
        }
        elseif( $password != $confirmpassword  ) {
            echo "Password does not match";
            
        }
        elseif( strlen(trim($_REQUEST['password'])) < 8) {
            echo "Password must have at least 8 characters";
            
        }
        else if(strtotime($dob) > time()){
            echo "Date of birth cannot be greater than today's date";
        }
        
        

        else if(strtotime($dob) > strtotime("-16 years")){
            echo "You must be at least 16 years old to register";
        }
        else{
        $user = ['username'=> $username, 'password'=> $password, 'role' => $role, 'email'=> $email, 'name'=> $name, 'dob'=> $dob, 'gender'=> $gender, 'address'=> $address ,'joiningdate'=> $joiningdate,'phonenumber'=> $phonenumber,'profilepicture'=> $profilepicture];
        $status = updateinfo($user);
        if($status){
            $_SESSION['username']= $username;
            $_SESSION['password']= $password;
            $_SESSION['role']= $role;
            
          
            $_SESSION['gender']= $gender;
            $_SESSION['dob']= $dob;
            $_SESSION['phonenumber']= $phonenumber;
            $_SESSION['address']= $address;
            $_SESSION['profilepicture']= $profilepicture;
            $_SESSION['joiningdate']= $joiningdate;
            header('location: ../views/viewprofile.php');
        }else{
            echo "DB error, try again";
        }
    }
}
    else{
        echo "invalid request...";
    }
?>