<?php
require_once "../models/ordermodel.php";
session_start();
if(isset($_REQUEST['submit'])){
    $customername = $_SESSION['username'];
    $status= cancelorder ($customername);
    if($status)
    {
        header('location:../views/canceled.php'); 
    }

}else{
    header('location:../views/orders.php'); 
}
?>