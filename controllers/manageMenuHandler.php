<?php 
require_once "../models/foodmodel.php";

    session_start();
    // if(isset($_REQUEST['submit'])){

     

          $filename = $_SESSION['username'].time().$_FILES['file']['name'];
          $src = $_FILES['file']['tmp_name'];
          $des = "../assets/".$filename;
          move_uploaded_file($src,$des);
          $username = $_SESSION['username']; 
          $password = $_SESSION['password']; 
     
        $foodname = $_REQUEST['item_name'];
        $description = $_REQUEST['item_description']; 
        $price = $_REQUEST['item_price'];
        $category= $_REQUEST['category'];
        $image = $filename;

       

        if($foodname == "" || $description == "" ||empty($price)|| $category == "" || empty($image)) {
            echo "Null value ..";
            
        }
      
        else{

        $fooddetails = ['username'=>$username, 'foodname'=> $foodname, 'description'=> $description, 'price' => $price, 'category'=> $category, 'image'=> $image];

       
        $status = addfood($fooddetails);
        if($status){

          header('location: ../views/manageMenu.php');

        }else{
            echo "DB error, try again";
        }
    }
// }
    // else{
    //     echo "invalid requestsss...";
    // }
?>