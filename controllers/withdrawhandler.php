<?php
require_once '../models/appwalletmodel.php';
session_start();
if(isset($_REQUEST['submit'])){
    $accountnumber=$_REQUEST['accountnumber'];
    $username = $_SESSION['username'];
    $withdrawmethod = $_SESSION['withdrawmethod'];
    $withdrawammount = $_REQUEST['ammount'];

    $details = ['username'=> $username, 'withdrawmethod'=> $withdrawmethod, 'withdrawammount'=> $withdrawammount, 'accountnumber'=> $accountnumber];

    $status = withdrawammount($details);

    if($status)
    {
        $_SESSION['username']=$username;
        $_SESSION['accountnumber']=$accountnumber;
        $_SESSION['withdrawmethod']=$withdrawmethod ;
        $_SESSION['withdrawammount']=$withdrawammount;
        header('location:../views/withdrawcomplete.php'); 
    }
}else{
    header('location:../views/withdrawmoney.php'); 
}
?>