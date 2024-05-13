<?php 
require_once '../models/foodmodel.php';
    session_start();
    if(isset($_REQUEST['foodid'])){
        $foodid = $_REQUEST['foodid'];
        
        $status = deletefood($foodid);
        if($status){
            header('location: ../views/viewmenu.php'); 
        }else{
            echo "DB error, try again";
        }

  
    
}
    else{
        echo "invalid request...";
    }
?>