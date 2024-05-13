<?php
session_start();
require_once "../models/appwalletmodel.php";
require_once "../models/ordermodel.php";
require_once "../models/cartmodel.php";
if(isset($_REQUEST['submit'])){
    $paymentmethod =$_REQUEST['paymentmethod'];
    $username =$_SESSION['username'];
    $totalprice =$_SESSION['totalprice'];

    if($paymentmethod=="appwalletpayment")
    {
        $details = ['username'=> $username, 'totalprice'=> $totalprice];
        $status = paybyappwallet($details);
        if($status)
        {
            addtoorder($details);
            header('location: ../views/orders.php');
        }
        else
        {
            echo "error!!try again";
        }
      
    }
    else if($paymentmethod=="cashondelivery")
    {
       
    }

    else
    {
        echo "Must Select A Method";
    }


}else{
    header('location:../views/payment.php'); 
}
?>