<?php 
require_once '../models/cartmodel.php';
session_start();
if(isset($_REQUEST['submit'])){ 
$customername = $_SESSION['username'];
$status = clearcart($customername);
if($status)
{
    header('location: ../views/addtocart.php');
}
else
{
    echo "invalid Request";
}
}
?>