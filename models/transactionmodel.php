<?php
    require_once "db.php";


    function topup($tnxid){
        $con = getConnection();
        $sql = "select * from transaction WHERE transactionid='$tnxid';";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
    
                       
                       $ammount= $row['ammount'];
 
                       
            }
        

            $sql = "select * from appwallet WHERE username='{$_SESSION['username']}';";
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result);
            if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
    
                       
                       $balance= $row['balance'];
 
                       
            }
        }

                $newbalance=$balance+$ammount;
                $sql = "UPDATE appwallet
                SET balance = '$newbalance'
                WHERE username = '{$_SESSION['username']}';";
                $status = mysqli_query($con, $sql);

                $sql = "DELETE FROM transaction WHERE transactionid='$tnxid';";
                mysqli_query($con, $sql);

                echo "You have Successfully top-up ".$ammount." Taka.<br>
                Previous Balance : ".$balance." Taka. <br>
                New Balance : ". $newbalance." Taka.";
        
    }
    else
    {
        echo "invalid transaction ID !! try again.";
    }
 
// return $status;
       
    
    }



 
?>