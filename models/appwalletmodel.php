<?php
    require_once "db.php";

    function createappwallet($user){
        $balance=0;
        $con = getConnection();
        $sql = "insert into appwallet values('','{$user['username']}','$balance')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    function paybyappwallet($details){
        $con = getConnection();
        $sql = "select * from appwallet WHERE username='{$details['username']}';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
    
                       
                       $balance= $row['balance'];
 
                       
            }
            if($balance>=$details['totalprice'])
            {
                $newbalance=$balance-$details['totalprice'];
                $sql = "UPDATE appwallet
                SET balance = '$newbalance'
                WHERE username = '{$details['username']}';";
                $status = mysqli_query($con, $sql);

            }

            else
            {
                echo "do not have enough balance";
            }
        
            
        }
        else
        {
            echo "invalid request";
        }
 
        return $status;

       
    
    }

    function refundmoney($refundedamount)
    {
        $con = getConnection();
        $sql = "select * from appwallet WHERE username='{$_SESSION['username']}';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
    
                       
                       $balance= $row['balance'];
 
                       
            }
                $newbalance=$balance+$refundedamount;
                $sql = "UPDATE appwallet
                SET balance = '$newbalance'
                WHERE username = '{$_SESSION['username']}';";
                $status = mysqli_query($con, $sql);

            }

            else
            {
                echo "Something Went wrong!";
            }

return $status;
    
    }

    function viewbalance($customername)
    {
        $con = getConnection();
        $sql = "select balance from appwallet WHERE username='$customername';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
    
                       
                       $balance= $row['balance'];
                       echo $balance;
 
                       
            }
        return $result;

    }
}

function withdrawammount($details){
    $con = getConnection();
    $sql = "select * from appwallet WHERE username='{$details['username']}';";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        while($row = mysqli_fetch_assoc($result)){

                   
                   $balance= $row['balance'];

                   
        }
        if($balance>=$details['withdrawammount'])
        {
            $newbalance=$balance-$details['withdrawammount'];
            $sql = "UPDATE appwallet
            SET balance = '$newbalance'
            WHERE username = '{$details['username']}';";
            $status = mysqli_query($con, $sql);
            return $status;
        }

        else
        {
            echo "do not have enough balance to withdraw";
            
        }
    
        
    }
    else
    {
        echo "invalid request";
    }

  

   

}

 
?>