<?php 
require_once "../models/vouchermodel.php";

    session_start();
    // if(isset($_REQUEST['submit'])){

     

       
        $username = $_SESSION['username']; 
        $password = $_SESSION['password']; 
     
        $vouchercode = $_REQUEST['voucher-code'];
        $discountammount = $_REQUEST['discount-amount']; 
        $minimumspend = $_REQUEST['minimum-spend'];
       

       

        if($vouchercode == "" || $discountammount == "" || $minimumspend == "" ) {
            echo "Null value ..";
            
        }
      
        else{

        $details = ['vouchercode'=>$vouchercode, 'discountammount'=> $discountammount, 'minimumspend'=> $minimumspend, 'username' => $username];

       
        $status = addvoucher($details);
        if($status){

          header('location: ../views/voucher.php');

        }else{
            echo "DB error, try again";
        }
    }
// }
    // else{
    //     echo "invalid requestsss...";
    // }
?>