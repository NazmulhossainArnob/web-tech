<?php
require_once '../models/cartmodel.php';
require_once '../models/foodmodel.php';
session_start();
if(isset($_COOKIE['flag'])){

    if(isset($_REQUEST['foodid']))
    {
        $foodid = $_REQUEST['foodid'];
        $status = getfoodbyid($foodid);
        if($status){
        
            // $foodid=$_SESSION['foodid']
            $customername = $_SESSION['username'];
            $restaurentid = $_SESSION['restaurentid'];
            $foodname = $_SESSION['foodname'];
            $description = $_SESSION['description'];
            $category = $_SESSION['category'];
            $price = $_SESSION['price'];
            $image = $_SESSION['image'];

            $fooddetails = ['customername'=> $customername,'foodid'=> $foodid,'restaurentid'=> $restaurentid, 'foodname'=> $foodname, 'description' => $description, 'category'=> $category, 'price'=> $price, 'image'=> $image];
            $status1 = addtocart ($fooddetails);
            if($status1)
            {

                header('location: ../views/menubrowsing.php');
            }
            else
            {
            echo "invalid request...";
            }
         }
        else{
        echo "invalid request...";
    }








}




}else{
    header('location: login.php'); 
}
?>