<?php
    require_once "db.php";

    function addvoucher($details){
        $con = getConnection();
        

            $sql = "insert into voucher values('','{$details['vouchercode']}','{$details['discountammount']}','{$details['minimumspend']}','{$details['username']}')";
            $status = mysqli_query($con, $sql);
           
            return $status;
            
      
    
       
    }





























    ?>