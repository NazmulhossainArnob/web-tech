<?php 
require_once '../models/transactionmodel.php';
session_start();
        $data = $_POST['data'];
        $user = json_decode($data);
        $tnxid = $user->tnxid;
        $status= topup($tnxid);
        // if($status)
        // {
        //     echo ""
        // }

        // else
        // {
        //     echo "something is wrong";
        // }

   

   


?>