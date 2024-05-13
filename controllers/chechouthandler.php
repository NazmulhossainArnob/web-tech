<?php 
//require_once '../model/cartmodel.php';
session_start();
if(isset($_REQUEST['submit'])){ 
// $customername = $_SESSION['username'];
// $status = clearcart($customername);
// if($status)
// {
//     header('location: ../view/addtocart.php');
// }
header('location: ../views/payment.php');
}
else
{
    echo "invalid Request";
}

?>